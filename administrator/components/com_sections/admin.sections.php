<?php 
/**
* @version: $Id: admin.sections.php 80 2010-09-21 16:52:39Z sannosi $
* @copyright: Copyright (C) 2006-2011 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Component Sections
* @author: Elxis Team
* @link: http://www.elxis.org
* @email: info@elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


require_once( $mainframe->getPath( 'admin_html' ) );

//get parameters from the URL or submitted form
$scope 		= $mainframe->makesafe(mosGetParam( $_REQUEST, 'scope', ''));
$cid 		= mosGetParam( $_REQUEST, 'cid', array(0) );
$section 	= mosGetParam( $_REQUEST, 'scope', '' );
if (!is_array( $cid )) {
	$cid = array(0);
}

//in order to work direct edit section link with register_globals off
$id = (int)mosGetParam( $_REQUEST, 'id', 0);

switch ($task) {
	case 'new':
		editSection( 0, $scope, $option );
	break;
	case 'edit':
		editSection( intval($cid[0]), '', $option );
	break;
	case 'editA':
		editSection($id, '', $option);
	break;
	case 'go2menu':
	case 'go2menuitem':
	case 'menulink':
	case 'save':
	case 'apply':
		saveSection( $option, $scope, $task );
	break;
	case 'remove':
		removeSections( $cid, $scope, $option );
	break;
	case 'copyselect':
		copySectionSelect( $option, $cid, $section );
	break;
	case 'copysave':
		copySectionSave( $cid );
	break;
	case 'publish':
		publishSections( $scope, $cid, 1, $option );
	break;
	case 'unpublish':
		publishSections( $scope, $cid, 0, $option );
	break;
	case 'ajaxpub':
        ajaxpublishSec();
    break;
	case 'cancel':
		cancelSection( $option, $scope );
	break;
	case 'orderup':
		orderSection( intval($cid[0]), -1, $option, $scope );
	break;
	case 'orderdown':
		orderSection( intval($cid[0]), 1, $option, $scope );
	break;
    case 'setaccess':
        $access = (int)mosGetParam( $_REQUEST, 'access', 29 );
        $sid = (int)mosGetParam( $_REQUEST, 'sid', $cid[0] );
		accessMenu( $sid, $access, $option );
	break;
	case 'saveorder':
		saveOrder( $cid );
	break;
	case 'validate':
        validateSEO();
	break;
	case 'suggest':
	   suggestSEO();
	break;
	default:
		showSections( $scope, $option );
	break;
}


/***************************************/
/* PREPARE TO DISPLAY LIST OF SECTIONS */
/***************************************/
function showSections( $scope, $option ) {
	global $database, $my, $mainframe;

	$limit = (int)$mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mainframe->getCfg('list_limit'));
	$limitstart = (int)$mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 );
	$pg = (preg_match('/postgre/i', $database->_resource->databaseType)) ? 1 : 0;

	// get the total number of records
	$database->setQuery( "SELECT COUNT(*) FROM #__sections WHERE scope='$scope'" );
	$total = $database->loadResult();

	require_once( $mainframe->getCfg('absolute_path').'/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

	$query = "SELECT c.*, g.name AS groupname, u.name AS editor FROM #__sections c"
	."\n LEFT JOIN #__content cc ON c.id = cc.sectionid"
	."\n LEFT JOIN #__users u ON u.id = c.checked_out"
	."\n LEFT JOIN #__core_acl_aro_groups g ON g.group_id = c.access"
    //. "\n LEFT JOIN #__groups g ON g.id = c.access"
	."\n WHERE scope='".$scope."'"
   	."\n GROUP BY c.id, c.title, c.name, c.ordering, c.image,"
   	."\n c.image_position, c.description, c.published,"
   	."\n c.checked_out, c.checked_out_time, c.access, c.count, c.seotitle,"
   	."\n g.name, u.name, c.scope, c.language, c.params"    
	."\n ORDER BY c.ordering, c.name";
	$database->setQuery( $query, '#__', $pageNav->limit, $pageNav->limitstart );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	$count = count( $rows );
	// number of Active Items
	for ( $i = 0; $i < $count; $i++ ) {
		if ($pg) {
			$query = "SELECT COUNT( a.id ) FROM #__categories a"
			. "\n WHERE a.section = ".$rows[$i]->id."::VARCHAR AND a.published <> '-2'";
		} else {
			$query = "SELECT COUNT( a.id ) FROM #__categories a"
			."\n WHERE a.section = '".$rows[$i]->id."' AND a.published <> '-2'";
		}
		$database->setQuery( $query );
		$active = $database->loadResult();
		$rows[$i]->categories = $active;
	}
	// number of Active Items
	for ( $i = 0; $i < $count; $i++ ) {
		$query = "SELECT COUNT( a.id ) FROM #__content a"
		."\n WHERE a.sectionid = '".$rows[$i]->id."' AND a.state <> '-2'";
		$database->setQuery( $query );
		$active = $database->loadResult();
		$rows[$i]->active = $active;
	}
	// number of Trashed Items
	for ( $i = 0; $i < $count; $i++ ) {
		$query = "SELECT COUNT( a.id ) FROM #__content a"
		."\n WHERE a.sectionid = '".$rows[$i]->id."' AND a.state = '-2'";
		$database->setQuery( $query );
		$trash = $database->loadResult();
		$rows[$i]->trash = $trash;
	}

	sections_html::show( $rows, $scope, $my->id, $pageNav, $option );
}


/**
* Compiles information to add or edit a section
* @param database A database connector object
* @param string The name of the category section
* @param integer The unique id of the category to edit (0 if new)
* @param string The name of the current user
*/
function editSection( $uid=0, $scope='', $option ) {
	global $database, $my, $adminLanguage;

	$row = new mosSection( $database );
	// load the row from the db table
	$row->load( $uid );

	// fail if checked out not by 'me'
	if ( $row->checked_out && $row->checked_out <> $my->id ) {
		$msg = $adminLanguage->A_CMP_SEC_TSECT ." ". $row->title ." ". $adminLanguage->A_ISCEDITANADM;
		mosRedirect( 'index2.php?option='. $option .'&scope='. $row->scope, $msg );
	}

	if ( $uid ) {
		$row->checkout( $my->id );
		if ( $row->id > 0 ) {
			$query = "SELECT * FROM #__menu WHERE componentid = ". $row->id
			. "\n AND ( type = 'content_archive_section' OR type = 'content_blog_section' OR type = 'content_section' )";
			$database->setQuery( $query );
			$menus = $database->loadObjectList();
			$count = count( $menus );
			for( $i = 0; $i < $count; $i++ ) {
				switch ( $menus[$i]->type ) {
					case 'content_section':
						$menus[$i]->type = $adminLanguage->A_CMP_SEC_SETB;
						break;

					case 'content_blog_section':
						$menus[$i]->type = $adminLanguage->A_CMP_SEC_BLOG;
						break;

					case 'content_archive_section':
						$menus[$i]->type = $adminLanguage->A_CMP_SEC_BLOGAR;
						break;
				}
			}
		} else {
			$menus = array();
		}
	} else {
		$row->scope 		= $scope;
		$row->published 	= 1;
		$menus 			= array();
	}

	// build the html select list for section types
	$types[] = mosHTML::makeOption( '', '- '.$adminLanguage->A_CMP_SEC_SELTYPE.' -' );
	$types[] = mosHTML::makeOption( 'content_section', $adminLanguage->A_CMP_SEC_SLST );
	$types[] = mosHTML::makeOption( 'content_blog_section', $adminLanguage->A_CMP_SEC_BLOG );
	$types[] = mosHTML::makeOption( 'content_archive_section', $adminLanguage->A_CMP_SEC_ARBLOG );
	$lists['link_type'] = mosHTML::selectList( $types, 'link_type', 'class="inputbox" size="1"', 'value', 'text' );;

	// build the html select list for ordering
	$query = "SELECT ordering AS value, title AS text FROM #__sections"
	. "\n WHERE scope='$row->scope' ORDER BY ordering";
	$lists['ordering'] 			= mosAdminMenus::SpecificOrdering( $row, $uid, $query );

	// build the select list for the image positions
	$active =  ( $row->image_position ? $row->image_position : 'left' );
	$lists['image_position'] 	= mosAdminMenus::Positions( 'image_position', $active, NULL, 0 );
	// build the html select list for images
	$lists['image'] 			= mosAdminMenus::Images( 'image', $row->image );
	// build the html select list for the group access
	$lists['access'] 			= mosAdminMenus::Access( $row );
	// build the html radio buttons for published
	$lists['published'] 		= mosHTML::yesnoRadioList( 'published', 'class="inputbox"', $row->published );
	// build the html select list for menu selection
	$lists['menuselect']		= mosAdminMenus::MenuSelect( );
    // build the html multiple select list for language selection
    $lists['languages']			= mosAdminMenus::SelectLanguages( 'languages', $row->language, $adminLanguage->A_ALL_LANGS );

	sections_html::edit( $row, $option, $lists, $menus );
}


/****************/
/* SAVE SECTION */
/****************/
function saveSection( $option, $scope, $task ) {
	global $database, $adminLanguage, $mainframe;

	$menu = $mainframe->makesafe(mosGetParam( $_POST, 'menu', 'mainmenu'));
	$menuid	= (int)mosGetParam( $_POST, 'menuid', 0 );
	$oldtitle = $mainframe->makesafe(mosGetParam( $_POST, 'oldtitle', ''));

    foreach ($_POST['languages'] as $xlang) {
    	if (trim($xlang) == '') { $newlangs = ''; }
    }
    if (!isset($newlangs)) {
    	$newlangs = implode(',', $_POST['languages']);
    }
    $_POST['language'] = $newlangs;

    if( $_POST['ordering'] == '' ) { $_POST['ordering'] = 0; }

	$row = new mosSection( $database );

	if (!$row->bind( $_POST )) {
		echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1);</script>\n";
		exit();
	}

    require_once($mainframe->getCfg('absolute_path').'/administrator/includes/seovs.class.php');
    $seo = new seovs('com_sections', '', $row->seotitle);
    $seo->id = intval($row->id);
    $seoval = $seo->validate();
    if (!$seoval) {
    	$mainframe->checkSendHeaders();
		echo "<script type=\"text/javascript\">alert('".$adminLanguage->A_SEOTITLE.": ".$seo->message."'); window.history.go(-1);</script>"._LEND;
		exit();
    }

	if (!$row->check()) {
		$mainframe->checkSendHeaders();
		echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1);</script>\n";
		exit();
	}
	if ( $oldtitle ) {
		if ( $oldtitle <> $row->title ) {
			$database->setQuery( "UPDATE #__menu SET name='$row->title' WHERE name='$oldtitle' AND type='content_section'" );
			$database->query();
		}
	}

	if (!$row->store()) {
		$mainframe->checkSendHeaders();
		echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1);</script>\n";
		exit();
	}
	$row->checkin();
	$row->updateOrder( "scope='$row->scope'" );

	switch ( $task ) {
		case 'go2menu':
			mosRedirect( 'index2.php?option=com_menus&menutype='. $menu );
			break;

		case 'go2menuitem':
			mosRedirect( 'index2.php?option=com_menus&menutype='. $menu .'&task=edit&hidemainmenu=1&id='. $menuid );
			break;

		case 'menulink':
			menuLink( $row->id );
			break;

		case 'apply':
			$msg = $adminLanguage->A_CMP_SEC_SAVED;
			mosRedirect( 'index2.php?option='. $option .'&scope='. $scope .'&task=editA&hidemainmenu=1&id='. $row->id, $msg );
			break;

			case 'save':
		default:
			$msg = $adminLanguage->A_CMP_SEC_SAVED;
			mosRedirect( 'index2.php?option='. $option .'&scope='. $scope, $msg );
			break;
	}
}
/**
* Deletes one or more categories from the categories table
* @param database A database connector object
* @param string The name of the category section
* @param array An array of unique category id numbers
*/
function removeSections( $cid, $scope, $option ) {
	global $database, $adminLanguage;

	if (count( $cid ) < 1) {
		echo "<script type=\"text/javascript\">alert(\"". $adminLanguage->A_CMP_SEC_DEL ."\"); window.history.go(-1);</script>\n";
		exit();
	}

	$cids = implode( ',', $cid );
	$pg = (preg_match('/postgre/i', $database->_resource->databaseType)) ? 1 : 0;
	$ora = (in_array($database->_resource->databaseType,array('oci8', 'oci805', 'oci8po', 'oracle'))) ? 1 : 0;

	$query = "SELECT s.id, s.name, COUNT(c.id) AS numcat FROM #__sections s";
	if ($pg) {
		$query .= "\n LEFT JOIN #__categories c ON c.section=s.id::VARCHAR";
	} elseif ($ora) {
        $query .= "\n LEFT JOIN #__categories c ON c.section= TO_CHAR(s.id)";
	} else {
		$query .= "\n LEFT JOIN #__categories c ON c.section=s.id";
	}
	$query .= "\n WHERE s.id IN (".$cids.")"
	. "\n GROUP BY s.id, s.name";
	$database->setQuery( $query );
	if (!($rows = $database->loadObjectList())) {
		echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1);</script>\n";
		exit();
	}

	$err = array();
	$cid = array();
	foreach ($rows as $row) {
		if ($row->numcat == 0) {
			$cid[] = $row->id;
			$name[] = $row->name;
		} else {
			$err[] = $row->name;
		}
	}

	if (count( $cid )) {
		$cids = implode( ',', $cid );
		$database->setQuery( "DELETE FROM #__sections WHERE id IN ($cids)" );
		if (!$database->query()) {
			echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1);</script>\n";
			exit();
		}
	}

	if (count( $err )) {
		$cids = implode( ', ', $err );
		$msg = $adminLanguage->A_CMP_SEC_SEC .": ". $cids ." ". $adminLanguage->A_CMP_SEC_CANT ;
		mosRedirect( 'index2.php?option='. $option .'&scope='. $scope, $msg );
	}

	$names = implode( ', ', $name );
	$msg = $adminLanguage->A_CMP_SEC_SEC .": ". $names ." ". $adminLanguage->A_CMP_SEC_SDEL ;
	mosRedirect( 'index2.php?option='. $option .'&scope='. $scope, $msg );
}

/**
* Publishes or Unpublishes one or more categories
* @param string The name of the category section
* @param integer A unique category id (passed from an edit form)
* @param array An array of unique category id numbers
* @param integer 0 if unpublishing, 1 if publishing
* @param string The name of the current user
*/
function publishSections( $scope, $cid=null, $publish=1, $option ) {
	global $database, $my, $adminLanguage;

	if ( !is_array( $cid ) || count( $cid ) < 1 ) {
		$action = $publish ? $adminLanguage->A_PUBLISH : $adminLanguage->A_UNPUBLISH;
		echo "<script type=\"text/javascript\">alert(\"". $adminLanguage->A_CMP_SEC_TO." ".$action."\"); window.history.go(-1);</script>"._LEND;
		exit();
	}

	$cids = implode( ',', $cid );
	$count = count( $cid );
	if ( $publish ) {
		if ( !$count ){
			echo "<script type=\"text/javascript\">alert(\"". $adminLanguage->A_CMP_SEC_CNPUB." ".$count."\"); window.history.go(-1);</script>"._LEND;
			return;
		}
	}

	$database->setQuery( "UPDATE #__sections SET published='$publish'"
	. "\n WHERE id IN ($cids) AND (checked_out=0 OR (checked_out='$my->id'))"
	);
	if (!$database->query()) {
		echo "<script type=\"text/javascript\">alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>"._LEND;
		exit();
	}

	if ( $count == 1 ) {
		$row = new mosSection( $database );
		$row->checkin( $cid[0] );
	}

	// check if section linked to menu items if unpublishing
	if ( $publish == 0 ) {
		$database->setQuery( "SELECT id FROM #__menu WHERE type='content_section' AND componentid IN ($cids)" );
		$menus = $database->loadObjectList();

		if ($menus) {
			foreach ($menus as $menu) {
				$database->setQuery( "UPDATE #__menu SET published=$publish WHERE id=$menu->id" );
				$database->query();
			}
		}
	}

	mosRedirect( 'index2.php?option='. $option .'&scope='. $scope );
}


/******************************************/
/* PUBLISH / UNPUBLISH SECTION USING AJAX */
/******************************************/
function ajaxpublishSec() {
    global $database, $my, $adminLanguage;

    $elem = intval(mosGetParam($_REQUEST, 'elem', 0));
    $id = intval(mosGetParam($_REQUEST, 'id', 0));
    $state = intval(mosGetParam($_REQUEST, 'state', 0));

    if (!$id) {
        echo '<img src="../includes/js/ThemeOffice/warning.png" width="16" height="16" border="0" title="'.$adminLanguage->A_ERROR.': Invalid Item id" />'._LEND;
        exit();
    }

    $error = 0;
	$database->setQuery( "UPDATE #__sections SET published='$state' WHERE id='$id' AND (checked_out=0 OR (checked_out='".$my->id."'))");
	if (!$database->query()) { $error = 1; }

    if ($error) { $state = $state ? 0 : 1; }
    $img = $state ? 'publish_g.png' : 'publish_x.png';
    $alt = $state ? $adminLanguage->A_PUBLISHED : $adminLanguage->A_UNPUBLISHED;
?>
	<a href="javascript:;" 
    onclick="changeSectionState('<?php echo $elem; ?>', '<?php echo $id; ?>', '<?php echo ($state) ? 0 : 1; ?>');" title="<?php echo $alt; ?>">
	<img src="images/<?php echo $img; ?>" border="0" alt="<?php echo $alt; ?>" /></a>
<?php 
    exit();
}


/**
* Cancels an edit operation
* @param database A database connector object
* @param string The name of the category section
* @param integer A unique category id
*/
function cancelSection( $option, $scope ) {
	global $database;
	$row = new mosSection( $database );
	$row->bind( $_POST );
	$row->checkin();

	mosRedirect( 'index2.php?option='. $option .'&scope='. $scope );
}

/**
* Moves the order of a record
* @param integer The increment to reorder by
*/
function orderSection( $uid, $inc, $option, $scope ) {
	global $database;

	$row = new mosSection( $database );
	$row->load( $uid );
	$row->move( $inc, "scope='$row->scope'" );

	mosRedirect( 'index2.php?option='. $option .'&scope='. $scope );
}


/****************************************/
/* PREPARE TO DISPLAY SECTION COPY FORM */
/****************************************/
function copySectionSelect( $option, $cid, $section ) {
	global $database, $adminLanguage;

	if (!is_array( $cid ) || count( $cid ) < 1) {
		echo "<script type=\"text/javascript\">alert(\"". $adminLanguage->A_SELITEMMOV ."\"); window.history.go(-1);</script>\n";
		exit();
	}

	//query to list selected categories
	$cids = implode( ',', $cid );
	$query = "SELECT a.name, a.id FROM #__categories a"
	. "\n WHERE a.section IN ( ".$cids." )";
	$database->setQuery( $query );
	$categories = $database->loadObjectList();

	//query to list items from categories
	$query = "SELECT a.title, a.id FROM #__content a"
	. "\n WHERE a.sectionid IN ( ". $cids ." )"
	. "\n ORDER BY a.sectionid, a.catid, a.title";
	$database->setQuery( $query );
	$contents = $database->loadObjectList();

	sections_html::copySectionSelect( $option, $cid, $categories, $contents, $section );
}


/************************/
/* PERFORM SECTION COPY */
/************************/
function copySectionSave( $sectionid ) {
	global $database, $adminLanguage, $mainframe;

	$title 		= $mainframe->makesafe(mosGetParam($_REQUEST, 'title', ''));
	$contentid 	= mosGetParam($_REQUEST, 'content', array());
	$categoryid = mosGetParam($_REQUEST, 'category', array());

	require_once($mainframe->getCfg('absolute_path').'/administrator/includes/seovs.class.php');

	//copy section
	$section = new mosSection ( $database );
	foreach( $sectionid as $id ) {
		$id = intval($id);
		$section->load( $id );
		$section->id 	= NULL;
		$section->title = $title;
		$section->name 	= $title;

    	$seo = new seovs('com_sections', $section->title);
    	$seo->id = intval($section->id);
    	$section->seotitle = $seo->suggest();

		if ( !$section->check() ) {
			echo "<script type=\"text/javascript\">alert('".$section->getError()."'); window.history.go(-1);</script>\n";
			exit();
		}

		if ( !$section->store() ) {
			echo "<script type=\"text/javascript\">alert('".$section->getError()."'); window.history.go(-1);</script>\n";
			exit();
		}
		$section->checkin();
		$section->updateOrder( "section='". $section->id ."'" );
		//stores original catid
		$newsectids[]["old"] = $id;
		//pulls new catid
		$newsectids[]["new"] = $section->id;
	}
	$sectionMove = $section->id;

	//copy categories
	$category = new mosCategory ( $database );
	if ($categoryid) {
		foreach( $categoryid as $id ) {
			$id = intval($id);
			$category->load( $id );
			$category->id = NULL;
			$category->section = $sectionMove;
			foreach( $newsectids as $newsectid ) {
				if ( $category->section == $newsectid["old"] ) {
					$category->section = $newsectid["new"];
				}
			}
			if (!$category->check()) {
				echo "<script type=\"text/javascript\">alert('".$category->getError()."'); window.history.go(-1);</script>\n";
				exit();
			}

			if (!$category->store()) {
				echo "<script type=\"text/javascript\">alert('".$category->getError()."'); window.history.go(-1);</script>\n";
				exit();
			}
			$category->checkin();
			$category->updateOrder( "section='". $category->section ."'" );
			//stores original catid
			$newcatids[]["old"] = $id;
			//pulls new catid
			$newcatids[]["new"] = $category->id;
		}
	}

	if ($contentid) {
		$content = new mosContent ( $database );
		foreach( $contentid as $id) {
			$id = intval($id);
			$content->load( $id );
			$content->id = NULL;
			$content->hits = 0;
			foreach( $newsectids as $newsectid ) {
				if ( $content->sectionid == $newsectid["old"] ) {
					$content->sectionid = $newsectid["new"];
				}
			}
			foreach( $newcatids as $newcatid ) {
				if ( $content->catid == $newcatid["old"] ) {
					$content->catid = $newcatid["new"];
				}
			}
			if (!$content->check()) {
				echo "<script type=\"text/javascript\">alert('".$content->getError()."'); window.history.go(-1);</script>\n";
				exit();
			}

			if (!$content->store()) {
				echo "<script type=\"text/javascript\">alert('".$content->getError()."'); window.history.go(-1);</script>\n";
				exit();
			}
			$content->checkin();
		}
	}
	$sectionOld = new mosSection ( $database );
	$sectionOld->load( $sectionMove );

	$msg = $adminLanguage->A_SECTION." ".$sectionOld-> name." ".$adminLanguage->A_CMP_SEC_ALLCATCPD." ".$title;
	mosRedirect( 'index2.php?option=com_sections&scope=content', $msg );
}

/**
* changes the access level of a record
* @param integer The increment to reorder by
*/
function accessMenu( $uid, $access, $option ) {
	global $database;
    
	$row = new mosSection( $database );
	$row->load( $uid );
	$row->access = $access;

	if ( !$row->check() ) {
		return $row->getError();
	}
	if ( !$row->store() ) {
		return $row->getError();
	}

	mosRedirect( 'index2.php?option='. $option .'&scope='. $row->scope );
}

function menuLink( $id ) {
	global $database, $adminLanguage, $mainframe;

	$section = new mosSection( $database );
	$section->bind( $_POST );
	$section->checkin();

	$menu 		= $mainframe->makesafe(mosGetParam($_POST, 'menuselect', ''));
	$name 		= $mainframe->makesafe(mosGetParam( $_POST, 'link_name', ''));
	$type 		= $mainframe->makesafe(mosGetParam( $_POST, 'link_type', ''));

	switch ( $type ) {
		case 'content_section':
			$link 		= 'index.php?option=com_content&task=section&id='. $id;
			$menutype	= $adminLanguage->A_CMP_SEC_SETB;
			break;

		case 'content_blog_section':
			$link 		= 'index.php?option=com_content&task=blogsection&id='. $id;
			$menutype	= $adminLanguage->A_CMP_SEC_BLOG;
			break;

		case 'content_archive_section':
			$link 		= 'index.php?option=com_content&task=archivesection&id='. $id;
			$menutype	= $adminLanguage->A_CMP_SEC_BLOGAR;
			break;
	}

	$row 				= new mosMenu( $database );
	$row->menutype 		= $menu;
	$row->name 			= $name;
	$row->type 			= $type;
	$row->published		= 1;
	$row->componentid	= $id;
	$row->link			= $link;
	$row->ordering		= 9999;

	if (!$row->check()) {
		echo "<script type=\"text/javascript\">alert('".$row->getError()."'); window.history.go(-1);</script>\n";
		exit();
	}
	if (!$row->store()) {
		echo "<script type=\"text/javascript\">alert('".$row->getError()."'); window.history.go(-1);</script>\n";
		exit();
	}
	$row->checkin();
	$row->updateOrder( 'scope="'. $row->scope .'"' );

	$msg = $name ." ( ". $menutype ." ) ". $adminLanguage->A_CMP_SEC_INMENU .": ". $menu ." ". $adminLanguage->A_CMP_SEC_SUCCSS;
	mosRedirect( 'index2.php?option=com_sections&scope=content&task=editA&hidemainmenu=1&id='. $id,  $msg );
}

function saveOrder( &$cid ) {
	global $database, $adminLanguage;

	$total		= count( $cid );
	$order 		= mosGetParam( $_POST, 'order', array(0) );
	$conditions = array();

    //update ordering values
	for($i=0; $i < $total; $i++) {
		$database->setQuery("SELECT id, ordering, scope FROM #__sections WHERE id='".$cid[$i]."'", '#__', 1, 0);
		$row = $database->loadRow(); 
		if ($row && ($row['ordering'] != $order[$i])) {
			$database->setQuery("UPDATE #__sections SET ordering='".intval($order[$i])."' WHERE id=".$row['id']);
			$database->query();
	        //remember to updateOrder this group
	        $condition = "scope='".$row['scope']."'";
	        $found = false;
	        if ($conditions) {
	        	foreach ($conditions as $cond) {
	            	if ($cond[1] == $condition) { $found = true; break; }
	        	}
	        }
	        if (!$found) { $conditions[] = array($row['id'], $condition); }
		}
		unset($row);
	}

	//execute updateOrder for each group
	if ($conditions) {
		foreach ($conditions as $cond) {
			$row = new mosSection( $database );
			$row->load( $cond[0] );
			$row->updateOrder( $cond[1] );
			unset($row);
		}
	}

	$msg = $adminLanguage->A_NEWORDERSAVED;
	mosRedirect( 'index2.php?option=com_sections&scope=content', $msg );
}


/**********************/
/* VALIDATE SEO TITLE */
/**********************/
function validateSEO() {
    global $mainframe;

    $coid = intval(mosGetParam($_POST, 'coid', 0));
    $seotitle = eUTF::utf8_trim(mosGetParam($_POST, 'seotitle', ''));

    require_once($mainframe->getCfg('absolute_path').'/administrator/includes/seovs.class.php');
    $seo = new seovs('com_sections', '', $seotitle);
    $seo->id = $coid;
    $seo->validate();
    echo $seo->message;
    exit();
}


/*********************/
/* SUGGEST SEO TITLE */
/*********************/
function suggestSEO() {
    global $mainframe;

    $coid = intval(mosGetParam($_POST, 'coid', 0));
    $cotitle = mosGetParam($_POST, 'cotitle', '');

    require_once($mainframe->getCfg('absolute_path').'/administrator/includes/seovs.class.php');
    $seo = new seovs('com_sections', $cotitle);
    $seo->id = $coid;
    $sname = $seo->suggest();

    @ob_end_clean();
    @header('Content-Type: text/plain; Charset=utf-8');
    if ($sname) {
        echo '|1|'.$sname;
    } else {
        echo '|0|'.$seo->message;
    }
    exit();
}

?>