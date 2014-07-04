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

<h3><?php echo $iLang->TMPCONFIGF; ?></h3>
<div class="mpez">
	<?php echo $iLang->TMPCONFIGFD; ?><br /><br />
	<?php 
	echo '<span style="font-style: italic;">'.$installer->abspath.'/tmpconfig.php</span> ';
	echo is_writable($installer->abspath.'/tmpconfig.php') ? $installer->colorString($iLang->WRITABLE, 'green', 1) : $installer->colorString($iLang->UNWRITABLE, 'red', 1);
	?>
</div>

<h3><?php echo $iLang->FTPACCESS; ?></h3>

<form method="post" name="frmftpinfo" id="frmftpinfo" action="index.php"<?php if (!$isErr) { echo ' onsubmit="return checkftpform();"'; } ?>>
<?php if ($isErr) { ?>
	<div class="warning<?php echo ($iLang->RTL)? '-rtl' : ''; ?>">
	<?php 
	echo $iLang->FATAL_ERRORMSGS.'<br /><br />'._LEND;
	foreach ($installer->errors as $error) {
        echo '&nbsp; &#149; '.$error.'<br />'._LEND;
    }
    ?>
    </div>

<?php 
} else {
	$pftphost = 'ftp.'.preg_replace('/^(www\.)/', '', $_SERVER['HTTP_HOST']);
    if ($installer->isuni && function_exists('posix_getpwuid') && is_callable('posix_getpwuid')) {
        $ftpuserarray = @posix_getpwuid(fileowner($_SERVER['DOCUMENT_ROOT']));
        $pftpuser = $ftpuserarray['name'];
    } else {
        $pftpuser = '';
    }

	if (isset($_SERVER['SCRIPT_NAME'])) {
		$frel = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
	} else {
		$frel = str_replace('\\', '/', $_SERVER['PHP_SELF']);
	}
	$frel = preg_replace('#(\/installation\/index.php)$#', '', $frel);
	$path1 = @explode('/', str_replace( '\\', '/', $_SERVER['DOCUMENT_ROOT']));
    $x = count($path1);
    $pftppath = ($x) ? '/'.$path1[$x-1].$frel : '';
?>

	<div class="mpez">
    <table border="0" cellspacing="0" cellpadding="5">
    <tr>
        <td width="240" valign="top">
			<div class="parag">
				<?php echo $iLang->FTPINFO; ?>
			</div>
		</td>
		<td valign="top">
			<table border="0" cellspacing="5" cellpadding="5" class="content">
				<tr>
					<td><?php echo $iLang->USEFTP; ?>:</td>
					<td><?php 
					if ((int)$installer->getCfg('ftp', 0) == 1) {
						echo '<input type="radio" name="ftp" value="0" />'.$iLang->NO.' '._LEND;
						echo '<input type="radio" name="ftp" value="1" checked="checked" />'.$iLang->YES.' '._LEND;
					} else {
						echo '<input type="radio" name="ftp" value="0" checked="checked" />'.$iLang->NO.' '._LEND;
						echo '<input type="radio" name="ftp" value="1" />'.$iLang->YES.' '._LEND;
					}
					?>
					</td>
				</tr>
				<tr>
					<td><?php echo $iLang->FTPHOST; ?></td>
					<td>
						<input dir="ltr" class="inputbox" type="text" id="ftp_host" name="ftp_host" value="<?php echo $installer->getCfg('ftp_host', 'localhost'); ?>" size="30" /><br />
						<span class="comment"><?php echo $iLang->MOSTPROB.' '.$pftphost; ?></span>
					</td>
				</tr>
				<tr>
					<td><?php echo $iLang->FTPUSER; ?></td>
					<td>
						<input dir="ltr" class="inputbox" type="text" id="ftp_user" name="ftp_user" value="<?php echo $installer->getCfg('ftp_user', $pftpuser); ?>" size="30" autocomplete="off" />
						<?php 
						if ($pftpuser != '') {
							echo '<br />'._LEND;
							echo '<span class="comment">'.$iLang->MOSTPROB.' '.$pftpuser.'</span>'._LEND;
						}
						?>
					</td>
				</tr>
				<tr>
					<td><?php echo $iLang->FTPPASS; ?></td>
					<td><input dir="ltr" class="inputbox" type="password" id="ftp_pass" name="ftp_pass" value="<?php echo $installer->getCfg('ftp_pass'); ?>" size="30" autocomplete="off" /></td>
				</tr>
				<tr>
					<td><?php echo $iLang->FTPPORT; ?></td>
					<td>
						<input dir="ltr" class="inputbox" type="text" id="ftp_port" name="ftp_port" value="<?php echo intval($installer->getCfg('ftp_port', 21)); ?>" size="5" /> 
						<span class="comment"><?php echo $iLang->MOSTPROB; ?> 21</span>
					</td>
				</tr>
				<tr>
					<td><?php echo $iLang->FTPPATH; ?></td>
					<td>
						<input dir="ltr" class="inputbox" type="text" id="ftp_root" name="ftp_root" value="<?php echo $installer->getCfg('ftp_root', $pftppath); ?>" size="30" /><br />
						<span class="comment"><?php echo $iLang->MOSTPROB.' '.$pftppath; ?></span><br />
						<span class="comment"><?php echo $iLang->FTPPATHD; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="hidden" name="ajaxlang" id="ajaxlang" value="<?php echo $installer->lang; ?>" />
					<a href="javascript: void(null);" onclick="checkftp();" title="<?php echo $iLang->CHECKFTP; ?>"><?php echo $iLang->CHECKFTP; ?></a>
					<div id="ftpresults" style="margin:6px 0; display:none;"></div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</div>

<?php } ?>

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
