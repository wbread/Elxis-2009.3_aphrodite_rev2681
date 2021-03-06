<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2008 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Component Menus
* @author: Elxis Team
* @link: http://www.elxis.org
* @email: info@elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @description: Creates a menu item that links to an archive category
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


class content_archive_category_menu {

	/*********************************/
	/* PREPARE TO ADD/EDIT MENU ITEM */
	/*********************************/
	static public function editCategory( $uid, $menutype, $option ) {
		global $database, $my, $mainframe, $adminLanguage;

		$menu = new mosMenu( $database );
		$menu->load( $uid );

		//fail if checked out not by 'me'
		if ($menu->checked_out && $menu->checked_out <> $my->id) {
			echo "<script type=\"text/javascript\">alert('".$adminLanguage->A_CMP_MU_THMOD.' '.$menu.' '.$adminLanguage->A_ISCEDITANADM."'); document.location.href='index2.php?option=$option'</script>\n";
			exit();
		}

		if ($uid) {
			$menu->checkout( $my->id );
		} else {
			$menu->type = 'content_archive_category';
			$menu->menutype = $menutype;
			$menu->ordering = 9999;
			$menu->parent = intval( mosGetParam( $_POST, 'parent', 0 ) );
			$menu->published = 1;
			$menu->language = null;
		}

		//build the html select list for category
		$lists['componentid'] = mosAdminMenus::Category( $menu, $uid );
		//build the html select list for ordering
		$lists['ordering'] = mosAdminMenus::Ordering( $menu, $uid );
		//build the html select list for the group access
		$lists['access'] = mosAdminMenus::Access( $menu );
		//build the html select list for paraent item
		$lists['parent'] = mosAdminMenus::Parent( $menu );
		//build published button option
		$lists['published'] = mosAdminMenus::Published( $menu );
		//build the url link output
		$lists['link'] = mosAdminMenus::Link( $menu, $uid );
        //build the html multiple select list for language selection
        $lists['languages']	= mosAdminMenus::SelectLanguages( 'languages', $menu->language, $adminLanguage->A_ALL_LANGS );

		//get params definitions
		$params = new mosParameters( $menu->params, $mainframe->getPath( 'menu_xml', $menu->type ), 'menu' );

		content_archive_category_menu_html::editCategory( $menu, $lists, $params, $option );
	}
}
?>