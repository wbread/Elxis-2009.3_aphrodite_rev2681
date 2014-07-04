<?php 
/**
* @version: $Id: ftpcheck.php 2311 2009-03-31 21:35:59Z datahell $
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Elxis CMS Installer
* @author: Ioannis Sannos (datahell)
* @email: datahell@elxis.org
* @link: http://www.elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @description: Elxis CMS Installer
*/


define('_ELXIS_INSTALLER', 1);
define('_VALID_MOS', 1);


if (isset($_POST['mylang'])) {
    $mylang = htmlspecialchars($_POST['mylang']);
} else if (isset($_SESSION['mylang'])) {
    $mylang = htmlspecialchars($_SESSION['mylang']);
} else {
	$mylang = 'english';
}

$abspath = str_replace('/includes', '', str_replace(DIRECTORY_SEPARATOR, '/', dirname(__FILE__)));
if (!file_exists($abspath.'/language/'.$mylang.'.install.php')) { $mylang = 'english'; }
require_once($abspath.'/language/'.$mylang.'.install.php');
$iLang = new iLanguage;

$GLOBALS['iLang'] = $iLang;

function makereport($msg='', $success=0) {
	global $iLang;

	$color = ($success) ? 'green' : 'red';
	$title = ($success) ? $iLang->SUCCESS : $iLang->FAILED;
	$txt = "<span style=\"font-weight: bold; color: ".$color.";\">*** ".$title." ***</span><br />\n";
	$txt .= $msg;
	echo $txt;
}


function checkftpconfig() {
	global $iLang;

	if (!function_exists('ftp_connect')) { makereport($iLang->FTPUNSUPPORT); return; }

	$ftp_host = isset($_POST['ftp_host']) ? trim($_POST['ftp_host']) : '';
	if ($ftp_host == '') { makereport($iLang->FTPHOST_EMPTY); return; }

	$ftp_user = isset($_POST['ftp_user']) ? trim($_POST['ftp_user']) : '';
	if ($ftp_user == '') { makereport($iLang->FTPUSER_EMPTY); return; }

	$ftp_pass = isset($_POST['ftp_pass']) ? trim($_POST['ftp_pass']) : '';
	if ($ftp_pass == '') { makereport($iLang->FTPPASS_EMPTY); return; }

	$ftp_port = isset($_POST['ftp_port']) ? intval($_POST['ftp_port']) : 0;
	if ($ftp_port == 0) { makereport($iLang->FTPPORT_EMPTY); return; }

	$ftp_root = isset($_POST['ftp_root']) ? trim($_POST['ftp_root']) : '';
	if ($ftp_root == '') { makereport($iLang->FTPPATH_EMPTY); return; }

	$conn_id = @ftp_connect($ftp_host, $ftp_port, 20);
	$login_result = @ftp_login($conn_id, $ftp_user, $ftp_pass);
	if ((!$conn_id) || (!$login_result)) {
		makereport($iLang->FTPCONERROR);
		return;
	}

	if (!@ftp_chdir($conn_id, $ftp_root)) {
		@ftp_close($conn_id);
		makereport($iLang->FTPWRONGROOT);
		return;
	}

	$files = @ftp_nlist($conn_id,".");
	if (!$files || !is_array($files) || (count($files) == 0)) {
		@ftp_close($conn_id);
		makereport($iLang->FTPNOELXROOT);
		return;
	}

	@ftp_close($conn_id);
	if (in_array('configuration.php', $files) && in_array('index2.php', $files)) {
		makereport($iLang->FTPSUCCESS, 1);
	} else {
		makereport($iLang->FTPNOELXROOT);
	}
}


header('content-type: text/plain; charset: utf-8');

checkftpconfig();

?>