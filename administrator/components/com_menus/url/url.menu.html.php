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


class url_menu_html {


	/************************************/
	/* HTML ADD/EDIT URL MENU ITEM FORM */
	/************************************/
	static public function edit( $menu, $lists, $params, $option ) {
		global $mainframe, $adminLanguage;
?>
		<script type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			//do field validation
			if (trim(form.name.value) == ""){
				alert( "<?php echo $adminLanguage->A_CMP_MU_LNKHNAME; ?>" );
			} else if (trim(form.link.value) == ""){
				alert( "<?php echo $adminLanguage->A_CMP_MU_WRURL; ?>" );
			} else {
				submitform( pressbutton );
			}
		}
		</script>

		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
                <?php echo $menu->id ? $adminLanguage->A_EDIT : $adminLanguage->A_ADD; ?> 
                <?php echo $adminLanguage->A_CMP_MU_MITEM.' :: '.$adminLanguage->A_CMP_MU_MILIURL; ?>
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr>
			<td width="60%" valign="top">
				<table class="adminform">
				<tr>
					<th colspan="2"><?php echo $adminLanguage->A_DETAILS; ?></th>
				</tr>
				<tr>
					<td width="25%"><?php echo $adminLanguage->A_NAME; ?>:</td>
					<td>
                        <input type="text" name="name" class="inputbox" size="50" maxlength="150" value="<?php echo $menu->name; ?>" />
					</td>
				</tr>
				<tr>
					<td><?php echo $adminLanguage->A_LINK; ?>:</td>
					<td>
                        <input type="text" name="link" dir="ltr" class="inputbox" size="50" maxlength="250" value="<?php echo $menu->link; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $adminLanguage->A_CMP_MU_ONCLOPI; ?>:</td>
					<td>
                        <?php echo $lists['target']; ?>
					</td>
				</tr>
				<tr>
					<td align="right"><?php echo $adminLanguage->A_PARITEM; ?>:</td>
					<td>
                        <?php echo $lists['parent']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $adminLanguage->A_ORDERING; ?>:</td>
					<td>
                        <?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $adminLanguage->A_LANGUAGE; ?>:</td>
					<td>
                        <?php echo $lists['languages']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $adminLanguage->A_ACCESSLEVEL; ?>:</td>
					<td>
                        <?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td><?php echo $adminLanguage->A_PUBLISHED; ?>:</td>
					<td>
                        <?php echo $lists['published']; ?>
					</td>
				</tr>
				</table>
			</td>
			<td width="40%" valign="top">
				<table class="adminform">
				<tr>
					<th><?php echo $adminLanguage->A_PARAMETERS; ?></th>
				</tr>
				<tr>
					<td>
                        <?php echo $params->render(); ?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menu->menutype; ?>" />
		<input type="hidden" name="type" value="<?php echo $menu->type; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<script type="text/javascript" src="<?php echo $mainframe->getCfg('live_site'); ?>/includes/js/overlib_mini.js"></script>
<?php 
	}
}
?>