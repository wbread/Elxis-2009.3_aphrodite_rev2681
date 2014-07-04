<?php 
/**
* @ Version: $Id: common.php 1878 2008-01-25 21:26:29Z datahell $
* @ Copyright: Copyright (C) 2006-2008 Elxis.org. All rights reserved.
* @ Package: Elxis
* @ Subpackage: Elxis CMS Installer
* @ Author: Elxis Team
* @ E-mail: info@elxis.org
* @ URL: http://www.elxis.org
* @ License: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @ Description: Elxis CMS Installer
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


error_reporting( E_ALL );
header ("Cache-Control: no-cache, must-revalidate");	// HTTP/1.1
header ("Pragma: no-cache");	// HTTP/1.0

/**
* Utility function to return a value from a named array or a specified default
*/
define( "_MOS_NOTRIM", 0x0001 );
define( "_MOS_ALLOWHTML", 0x0002 );
function mosGetParam( &$arr, $name, $def=null, $mask=0 ) {
	$return = null;
	if (isset( $arr[$name] )) {
		if (is_string( $arr[$name] )) {
			if (!($mask&_MOS_NOTRIM)) {
				$arr[$name] = trim( $arr[$name] );
			}
			if (!($mask&_MOS_ALLOWHTML)) {
				$arr[$name] = strip_tags( $arr[$name] );
			}
			if (!get_magic_quotes_gpc()) {
				$arr[$name] = addslashes( $arr[$name] );
			}
		}
		return $arr[$name];
	} else {
		return $def;
	}
}

function mosMakePassword($length) {
	$salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$len = strlen($salt);
	$makepass="";
	mt_srand(10000000*(double)microtime());
	for ($i = 0; $i < $length; $i++)
	$makepass .= $salt[mt_rand(0,$len - 1)];
	return $makepass;
}


/********************/
/* REDIRECT BROWSER */
/********************/
function mosRedirect( $url, $msg='' ) {
	if (trim( $msg )) {
	 	if (strpos( $url, '?' )) {
			$url .= '&errmsg='.urlencode( $msg );
		} else {
			$url .= '?errmsg='.urlencode( $msg );
		}
	}

	if (headers_sent()) {
		echo '<script language="javascript" type="text/javascript">document.location.href="'.$url.'";</script>'._LEND;
	} else {
		@ob_end_clean();
		header( "Location: $url" );
	}
	exit();
}


//=================> REPLACE mosChmodRecursive WITH fmanager FUNCTIONS ===========> TODO

/**
* Chmods files and directories recursivel to given permissions
* @param path The starting file or directory (no trailing slash)
* @param filemode Integer value to chmod files. NULL = dont chmod files.
* @param dirmode Integer value to chmod directories. NULL = dont chmod directories.
* @return TRUE=all succeeded FALSE=one or more chmods failed
*/
function mosChmodRecursive($path, $filemode=NULL, $dirmode=NULL)
{
	$ret = TRUE;
	if (is_dir($path)) {
	    $dh = @opendir($path);
	    while ($file = @readdir($dh)) {
	        if ($file != '.' && $file != '..') {
	            $fullpath = $path.'/'.$file;
	            if (is_dir($fullpath)) {
                    if (!mosChmodRecursive($fullpath, $filemode, $dirmode))
                        $ret = FALSE;
	            } else {
	                if (isset($filemode))
	                    if (!@chmod($fullpath, $filemode))
	                        $ret = FALSE;
	            } // if
	        } // if
	    } // while
	    closedir($dh);
	    if (isset($dirmode))
	        if (!@chmod($path, $dirmode))
	            $ret = FALSE;
	} else {
		if (isset($filemode))
			$ret = @chmod($path, $filemode);
    } // if
	return $ret;
} // mosChmodRecursive


/***************************/
/* GET AVAILABLE LANGUAGES */
/***************************/
function displayLangs( $basedir = '../language/' ) {
    if (!is_dir($basedir)) { return 'english'; }
    $elangs = array();
	if ($handle = @opendir( $basedir )) {
		while (($node = @readdir($handle)) !== false) {
        	if ($node!="." && $node!="..") {
            	if ((is_dir($basedir.$node)) && (file_exists($basedir.$node.'/'.$node.'.php'))) {
	         		array_push($elangs, $node);
                }
            }
        }
    }
    return $elangs;
}


if (!function_exists('elxisdbHandler')) {
	/********************/
	/* DB ERROR HANDLER */
	/********************/
	function elxisdbHandler($dbtype, $fn, $errno, $errmsg, $p1=false, $p2=false) {
		$errt = 'error';	
		$title = ($errno != '') ? $dbtype.' '.$errt.' ['.$errno.']' : $dbtype.' '.$errt;
		$title .= ' : '.$fn;
    	$URISTR = $_SERVER['SCRIPT_NAME'];
		if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] !='')) {
			$URISTR .= '?'.$_SERVER['QUERY_STRING'];
		}
		$details = "<strong>URI:</strong> ".basename($URISTR)."<br />\n";
		$details .= "<strong>Message:</strong> ".$errmsg."<br />\n";
		if ($p1) { $details .= $p1."<br />\n"; }
		if ($p2 && !is_array($p2)) { $details .= $p2; }
		html_error_handler($title, $details);
	}


	/****************************************/
	/* RETURNS HTML FORMATTED ERROR MESSAGE */
	/****************************************/
	function html_error_handler($title, $details) {
		$style = 'background-color: #F00; padding: 1px; color: #FFF; font-weight: bold; cursor: pointer;';
		@ob_end_flush();
		echo "<div style=\"font-size: 11px; border: 1px solid #FFF; text-align: left;\">\n";
		echo "<div style=\"".$style."\">".$title."</div>\n";
		echo "<div style=\"padding: 2px; display:block; background-color: #DDD;\">".$details."</div>\n";
		echo "</div>\n";
	}
}

?>