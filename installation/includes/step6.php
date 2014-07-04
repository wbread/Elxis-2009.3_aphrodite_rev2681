<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Elxis CMS Installer
* @author: Elxis Team (Ioannis Sannos & Ivan Trebjesanin)
* @email: info@elxis.org
* @link: http://www.elxis.org
* @description: Elxis CMS Installer
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


global $iLang, $installer;

$isErr = (count($installer->errors) > 0) ? 1 : 0;
$nextstep = ($isErr) ? $installer->step - 1 : $installer->step + 1;
?>


<form method="post" name="frmpersoninfo" id="frmpersoninfo" action="index.php"<?php if (!$isErr) { echo ' onsubmit="return checkpersform();"'; } ?>>
<?php if ($isErr) { ?>
	<div class="warning">
	<?php 
	echo $iLang->FATAL_ERRORMSGS.'<br /><br />'._LEND;
	foreach ($installer->errors as $error) {
        echo '&nbsp; &#149; '.$error.'<br />'._LEND;
    }
    ?>
    </div>

<?php 
} else {
?>

	<h3><?php echo $iLang->PERSONAL_INFO; ?></h3>

    <div class="mpez">
    	<table border="0" cellspacing="0" cellpadding="5" class="content">
        <tr>
			<td width="110" align="center" valign="top" rowspan="5">
				<img src="../images/avatars/noavatar.png" alt="admin" title="admin" border="1" /><br />
				admin
			</td>
			<td width="180"><?php echo $iLang->ADMINRNAME; ?>:</td>
			<td>
				<input type="text" name="adminName" class="inputbox" size="30" value="" />
			</td>
		</tr>
		<tr>
			<td><?php echo $iLang->ADMINUNAME; ?>:</td>
			<td>
				<input dir="ltr" type="text" name="adminUName" class="inputbox" size="30" value="admin" />
			</td>
		</tr>
		<tr>
			<td><?php echo $iLang->ADMINPASS; ?>:</td>
			<td>
				<input dir="ltr" class="inputbox" type="text" name="adminPassword" size="30" value="<?php echo mosMakePassword(8); ?>" />
			</td>
		</tr>
		<tr>
			<td><?php echo $iLang->YOUREMAIL; ?>:</td>
			<td>
				<input dir="ltr" class="inputbox" type="text" name="adminEmail" size="30" value="" />
			</td>
		</tr>
		<tr>
			<td colspan="2"><span class="comment"><?php echo $iLang->CHANGEPROFILE; ?></span></td>
		</tr>
		</table>
	</div>

<?php 
}
?>
    <div style="text-align: center; margin: 20px 0;">
<?php if (!$isErr) { ?>
  		<input type="submit" name="next" class="button" style="cursor:pointer;" value="<?php echo $iLang->NEXT; ?>" title="<?php echo $iLang->NEXT; ?>" />
<?php } else { ?>
        <input type="submit" name="back" class="button" style="cursor:pointer;" value="<?php echo $iLang->BACK; ?>" title="<?php echo $iLang->BACK; ?>" />
<?php } ?>
        <input type="hidden" name="mylang" value="<?php echo $installer->lang; ?>" />
        <input type="hidden" name="step" value="<?php echo $nextstep; ?>" />
    </div>
</form>