<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2008 Elxis.org All rights reserved
* @package: Elxis
* @subpackage: Component Menus
* @author: Elxis Team
* @link: http://www.elxis.org
* @email: info@elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @description: Creates a menu item to a custom URL
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


mosAdminMenus::menuItem( $type );

switch ($task) {
	case 'url':
		//this is the new item, ie, the same name as the menu `type`
		url_menu::edit( 0, $menutype, $option );
		break;

	case 'edit':
		url_menu::edit( $cid[0], $menutype, $option );
		break;
		
	case 'save':
	case 'apply':
		saveMenu( $option, $task );
		break;
}
?>