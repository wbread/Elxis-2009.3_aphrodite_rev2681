<?php 
/**
* @version: $Id: dbcompatcheck.php 2312 2009-03-31 21:36:55Z datahell $
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


function colorString($string, $color='#FF0000') {
	global $iLang;

	$dir = ($iLang->RTL)? ' dir="rtl"' : '';
    $out = '<span style="color: '.$color.';"'.$dir.'>'.$string.'</span>';
    return $out;
}
    

function checkdbcompat() {
	global $iLang;

	$dbtype = isset($_POST['dbtype']) ? trim($_POST['dbtype']) : '';
	if ($dbtype == '') {
		echo colorString($iLang->DBCONF_2);
		return;
	}

	if (in_array($dbtype, array('mysql', 'mysqli', 'mysqlt'))) {
		if (function_exists('mysql_connect') && is_callable('mysql_connect')) {
			$out = colorString(sprintf($iLang->DRIVERSUPELXIS, '<strong>'.$dbtype.'</strong>'), '#2d8c10')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
		} else {
			$out = colorString(sprintf($iLang->DRIVERSUPELXIS, '<strong>'.$dbtype.'</strong>'), '#2d8c10')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
		}
	} elseif (in_array($dbtype, array('postgres', 'postgres64', 'postgres7', 'postgres8'))) {
		if (function_exists('pg_connect') && is_callable('pg_connect')) {
			$out = colorString(sprintf($iLang->DRIVERSUPELXIS, '<strong>'.$dbtype.'</strong>'), '#2d8c10')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
		} else {
			$out = colorString(sprintf($iLang->DRIVERSUPELXIS, '<strong>'.$dbtype.'</strong>'), '#2d8c10')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
		}
	} elseif (in_array($dbtype, array('oci805', 'oci8', 'oci8po'))) {
		if (function_exists('oci_connect') && is_callable('oci_connect')) {
			$out = colorString(sprintf($iLang->DRIVERSUPELXEXP, '<strong>'.$dbtype.'</strong>'), '#FF9900')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
		} else {
			$out = colorString(sprintf($iLang->DRIVERSUPELXEXP, '<strong>'.$dbtype.'</strong>'), '#FF9900')."<br />\n";
			$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
		}
	} else {
		$out = colorString(sprintf($iLang->DRIVERNSUPELXIS, '<strong>'.$dbtype.'</strong>'))."<br />\n";

		if (in_array($dbtype, array('mssql', 'mssqlpo'))) {
			if (function_exists('msql_connect') && is_callable('msql_connect')) {
				$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
			} else {
				$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
			}
		} elseif (in_array($dbtype, array('informix', 'informix72'))) {
			if (function_exists('ifx_connect') && is_callable('ifx_connect')) {
				$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
			} else {
				$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
			}
		} elseif (in_array($dbtype, array('ibase', 'firebird', 'borland_ibase'))) {
			if (function_exists('ibase_connect') && is_callable('ibase_connect')) {
				$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
			} else {
				$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
			}
		} elseif ($dbtype == 'fbsql') {
			if (function_exists('fbsql_connect') && is_callable('fbsql_connect')) {
				$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
			} else {
				$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
			}
		} elseif (in_array($dbtype, array('odbc', 'odbc_oracle', 'odbc_db2', 'odbc_mssql'))) {
			if (function_exists('odbc_connect') && is_callable('odbc_connect')) {
				$out .= colorString(sprintf($iLang->DRIVERSUPSYS, '<strong>'.$dbtype.'</strong>'), '#2d8c10');
			} else {
				$out .= colorString(sprintf($iLang->DRIVERNSUPSYS, '<strong>'.$dbtype.'</strong>'));
			}
		}
	}
	echo $out;
}


header('content-type: text/plain; charset: utf-8');

checkdbcompat();

?>