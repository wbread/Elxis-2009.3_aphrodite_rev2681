<?php 
/**
* @version: $Id: renhtacc.php 2312 2009-03-31 21:36:55Z datahell $
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

$abspath = preg_replace('/(\/includes)$/', '', str_replace(DIRECTORY_SEPARATOR, '/', dirname(__FILE__)));
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


function renamehtafile($abspath) {
	global $iLang;

	$srv = '';
	if (isset($_SERVER['SERVER_SIGNATURE'])) { $srv = $_SERVER['SERVER_SIGNATURE'];	}
	if (isset($_SERVER['SERVER_SOFTWARE'])) { $srv .= $_SERVER['SERVER_SOFTWARE'];	}
	if ($srv != '') {
		$srv = strtolower($srv);
		if (!preg_match('/apache/', $srv)) {
			makereport('Automatic rename works only for the Apache web server! Please enable SEO PRO manually.');
			return;
		}
	}

	$elxis_root = preg_replace('/(\/installation)$/', '', $abspath);

	if (file_exists($elxis_root.'/.htaccess')) {
		makereport($iLang->HTACCEXIST);
		return;
	}

	if (!file_exists($elxis_root.'/htaccess.txt')) {
		makereport('Could not locate htaccess.txt file in Elxis root folder!');
		return;
	}

	$phpself = basename(__FILE__);
	$cleanself = strtolower(substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], $phpself)).$phpself);
	if (!preg_match('/^(\/installation)/', $cleanself)) {
		makereport('You install Elxis in a sub-folder. RewriteBase in the htaccess.txt file needs to be changed. Please enable SEO PRO manually.');
		return;
	}

	$ok = rename($elxis_root.'/htaccess.txt', $elxis_root.'/.htaccess');
	if ($ok) {
		makereport($iLang->SETSEOPROY, 1);
		return;
	}

	require_once($abspath.'/tmpconfig.php');
	if (!isset($tmpConfig) || (intval($tmpConfig['ftp']) == 0)) { makereport(); return; }
	
	if (!function_exists('ftp_connect')) { makereport(); return; }

	$ftp_host = isset($tmpConfig['ftp_host']) ? trim($tmpConfig['ftp_host']) : '';
	if ($ftp_host == '') { makereport(); return; }

	$ftp_user = isset($tmpConfig['ftp_user']) ? trim($tmpConfig['ftp_user']) : '';
	if ($ftp_user == '') { makereport(); return; }

	$ftp_pass = isset($tmpConfig['ftp_pass']) ? trim($tmpConfig['ftp_pass']) : '';
	if ($ftp_pass == '') { makereport(); return; }

	$ftp_port = isset($tmpConfig['ftp_port']) ? intval($tmpConfig['ftp_port']) : 0;
	if ($ftp_port == 0) { makereport(); return; }

	$ftp_root = isset($tmpConfig['ftp_root']) ? trim($tmpConfig['ftp_root']) : '';
	if ($ftp_root == '') { makereport(); return; }

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

	$ok = ftp_rename($conn_id, 'htaccess.txt', '.htaccess');
	@ftp_close($conn_id);
	if ($ok) {
		makereport($iLang->SETSEOPROY, 1);
	} else {
		makereport();
	}

}


header('content-type: text/plain; charset: utf-8');

renamehtafile($abspath);

?>