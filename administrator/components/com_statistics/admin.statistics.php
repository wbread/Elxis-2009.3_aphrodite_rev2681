<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2008 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Component Statistics
* @author: Elxis Team
* @link: http://www.elxis.org
* @email: info@elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


require_once( $mainframe->getPath( 'admin_html' ) );

switch ($task) {
	case 'searches':
		showSearches( $option, $task );
	break;
	case 'pageimp':
		showPageImpressions( $option, $task );
	break;
	default:
		showSummary( $option, $task );
	break;
}


/******************************/
/* PREPARE TO DISPLAY SUMMARY */
/******************************/
function showSummary( $option, $task ) {
	global $database, $mainframe;

	//get sort field and check against allowable field names
	$field = strtolower( mosGetParam( $_REQUEST, 'field', '' ));
	if (!in_array( $field, array( 'agent', 'hits' ) )) {
		$field = '';
	}

	//get field ordering or set the default field to order
	$order = strtolower( mosGetParam( $_REQUEST, 'order', 'asc' ) );
	if ($order != 'asc' && $order != 'desc' && $order != 'none') {
		$order = 'asc';
	} else if ($order == 'none') {
		$field = 'agent';
		$order = 'asc';
	}

	//browser stats
	$order_by = '';
	$sorts = array();
	$tab = mosGetParam( $_REQUEST, 'tab', 'tab1' );
	$sort_base = "index2.php?option=$option&task=$task";

	switch ($field) {
		case 'hits':
			$order_by = "hits $order";
			$sorts['b_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab1", "agent" );
			$sorts['b_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab1", "hits", $order );
			$sorts['o_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab2", "agent" );
			$sorts['o_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab2", "hits", $order );
			$sorts['d_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab3", "agent" );
			$sorts['d_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab3", "hits", $order );
			break;

		case 'agent':
		default:
			$order_by = "agent $order";
			$sorts['b_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab1", "agent", $order );
			$sorts['b_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab1", "hits" );
			$sorts['o_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab2", "agent", $order );
			$sorts['o_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab2", "hits" );
			$sorts['d_agent'] = mosHTML::sortIcon( "$sort_base&tab=tab3", "agent", $order );
			$sorts['d_hits'] = mosHTML::sortIcon( "$sort_base&tab=tab3", "hits" );
			break;
	}

	$database->setQuery( "SELECT * FROM #__stats_agents WHERE type='0' ORDER BY $order_by" );
	$browsers = $database->loadObjectList();

	$database->setQuery( "SELECT SUM(hits) AS totalhits,MAX(hits) AS maxhits FROM #__stats_agents WHERE type='0'" );
	$bstats = null;
	$database->loadObject( $bstats );

	//platform statistics
	$database->setQuery( "SELECT * FROM #__stats_agents WHERE type='1' ORDER BY hits DESC" );
	$platforms = $database->loadObjectList();

	$database->setQuery( "SELECT SUM(hits) AS totalhits,MAX(hits) AS maxhits FROM #__stats_agents WHERE type='1'" );
	$pstats = null;
	$database->loadObject( $pstats );

	//domain statistics
	$database->setQuery( "SELECT * FROM #__stats_agents WHERE type='2' ORDER BY hits DESC" );
	$tldomains = $database->loadObjectList();

	$database->setQuery( "SELECT SUM(hits) AS totalhits, MAX(hits) AS maxhits FROM #__stats_agents WHERE type='2'" );
	$dstats = null;
	$database->loadObject( $dstats );

	HTML_statistics::show( $browsers, $platforms, $tldomains, $bstats, $pstats, $dstats, $sorts, $option );
}


/****************************/
/* PREPARE PAGE IMPRESSIONS */
/****************************/
function showPageImpressions( $option, $task ) {
	global $database, $mainframe, $mosConfig_list_limit;

	$database->setQuery("SELECT count(id) FROM #__content");
	$total = $database->loadResult();

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "view{$option}{$task}limitstart", 'limitstart', 0 );

	require_once($mainframe->getCfg('absolute_path').'/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT id, title, created, hits FROM #__content ORDER BY hits DESC";
	$database->setQuery( $query, '#__', $pageNav->limit, $pageNav->limitstart );
	$rows = $database->loadObjectList();

	HTML_statistics::pageImpressions( $rows, $pageNav, $option, $task );
}


/*******************************/
/* PREPARE TO DISPLAY SEARCHES */
/*******************************/
function showSearches( $option, $task ) {
	global $database, $mainframe, $mosConfig_list_limit, $_MAMBOTS;

	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "view{$option}{$task}limitstart", 'limitstart', 0 );

	//get the total number of records
	$database->setQuery( "SELECT COUNT(*) FROM #__core_log_searches");
	$total = $database->loadResult();

	require_once($mainframe->getCfg('absolute_path').'/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

    $query = "SELECT * FROM #__core_log_searches ORDER BY hits DESC";
	$database->setQuery( $query, '#__', $pageNav->limit, $pageNav->limitstart );

	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	$_MAMBOTS->loadBotGroup( 'search' );

	for ($i=0, $n = count($rows); $i < $n; $i++) {
		$results = $_MAMBOTS->trigger( 'onSearch', array( $rows[$i]->search_term ) );

		$count = 0;
		for ($j = 0, $n2 = count( $results ); $j < $n2; $j++) {
			$count += count( $results[$j] );
		}
		$rows[$i]->returns = $count;
	}

	HTML_statistics::showSearches( $rows, $pageNav, $option, $task );
}
?>