<?php 
/**
* @version: $Id: security.php 115 2011-04-24 18:08:38Z sannosi $
* @copyright: Copyright (C) 2006-2011 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Security
* @author: Ioannis Sannos
* @email: datahell@elxis.org
* @link: http://www.elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*/

//set $protect_qstring to zero (0) if you want to disable URL protection
$protect_qstring = 1;

//fix to address the globals overwrite problem in php versions < 4.4.1
$protect_globals = array('_REQUEST', '_GET', '_POST', '_COOKIE', '_FILES', '_SERVER', '_ENV', 'GLOBALS', '_SESSION');
foreach ($protect_globals as $global) {
    if ( in_array($global , array_keys($_REQUEST)) ||
         in_array($global , array_keys($_GET))     ||
         in_array($global , array_keys($_POST))    ||
         in_array($global , array_keys($_COOKIE))  ||
         in_array($global , array_keys($_FILES))) {
        die("Invalid Request.");
    }
}

if (in_array( 'globals', array_keys( array_change_key_case( $_REQUEST, CASE_LOWER ) ) ) ) {
	die( 'Global variable hack attempted.' );
}
if (in_array( '_post', array_keys( array_change_key_case( $_REQUEST, CASE_LOWER ) ) ) ) {
	die( 'Post variable hack attempted.' );
}

if (isset($_GET) && is_array($_GET) && (count($_GET) > 0)) {
	foreach ($_GET as $key => $val) {
		if (stripos($key, 'htaccess') !== false) { die('Request dropped'); }
		if (stripos($key, 'passw') !== false) { die('Request dropped'); }
		if (stripos($key, 'mosConfig') === 0) { unset($_GET[$key]); }
	}
}

if ($protect_qstring == 1) {
	if (isset($_SERVER['QUERY_STRING'])) {
		$qs = strip_tags($_SERVER['QUERY_STRING']);
	} elseif(isset($_ENV['QUERY_STRING'])) {
		$qs = strip_tags($_ENV['QUERY_STRING']);
	} elseif(is_callable('getenv') && getenv('QUERY_STRING')) {
		$qs = strip_tags(getenv('QUERY_STRING'));
	} elseif (function_exists('apache_getenv') && apache_getenv('QUERY_STRING', true)) {
		$qs = strip_tags(apache_getenv('QUERY_STRING', true));
	} else {
		$qs = '';
	}

	if ($qs != '') {
		$qs = str_replace('%09', '%20', $qs);
		$qs = strtolower($qs);
		$qs_rules = array('absolute_path', 'mosconfig', 'ad_click', 'alert(', 'alert%20', 'basepath', 'bash_history', '.bash_history', 
		'cgi-', 'chmod(', 'chmod%20', '%20chmod', 'chmod=', 'chown%20', 'chgrp%20', 'chown(', '/chown', 'chgrp(', 'chr(', 
		'chr=', 'chr%20', '%20chr', 'chunked', 'cookie=', 'cmd=', '%20cmd', 'cmd%20', '.conf', 'configdir', 'config.php', 
		'cp%20', '%20cp', 'cp(', 'diff%20', 'document.location', 'document.cookie', 'drop%20', 'echr(', '%20echr', 'echr%20', 
		'echr=', '}else{', 'esystem(', 'esystem%20', '.exe',  'exploit', 'file\://', 'fopen', 'fwrite', '~ftp', 'ftp:', 
		'getenv', '%20getenv', 'getenv%20', 'getenv(', 'grep%20', '_global', 'global_', 'global[', '_globals', 'globals_', 'globals[', 
		'grep(', 'g\+\+', 'halt%20', '.history', '?hl=', '.htpasswd', 'http-equiv', 'http/1.', 'http_php', 'http_user_agent', 
		'http_host', '&icq', 'if{', 'if%20{', 'img src', 'img%20src', '.inc.php', '.inc', 'insert%20into', 'javascript\://', '.js', 
		'kill%20', 'kill(', 'killall', '%20like', 'like%20', 'locate%20', 'locate(', 'lsof%20', 'mdir%20', '%20mdir', 'mdir(', 'mcd%20', 
		'motd%20', 'mrd%20', 'rm%20', '%20mcd', '%20mrd', 'mcd(', 'mrd(', 'mcd=', 'mod_gzip_status', 'modules/', 'mrd=', 'mv%20', 
		'nc.exe', 'new_password', '~nobody', 'password=', 'passwd%20', '%20passwd', 'passwd(', 'perl%20', '/perl', 'phpbb_root_path',
		'*/phpbb_root_path/*','p0hh', 'ping%20', '.pl', 'powerdown%20', 'rm(', '%20rm', 'rmdir%20', 'mv(', 'rmdir(', 'phpinfo()', 
		'<?php', 'reboot%20', '/robot.txt' , '~root', 'root_path', 'rush=', '%20and%20', '%20xorg%20', '%20rush', 'rush%20', 
		'select%20', 'select from', 'select%20from', '_server', 'server_', 'server[', 'server-info', 'server-status', 
		'servlet', 'sql=', '<script', '<script>', '</script','script>','/script', 'switch{','switch%20{', '.system', 'system(', 
		'telnet%20', 'traceroute%20', 'union%20', '%20union', 'union(', 'union=', 'vi(', 'vi%20', 'wget', 'wget%20', '%20wget', 
		'wget(', 'window.open', 'wwwacl', '$_request', '$_get', '$request', '$get',  '&aim', '/etc/password','/etc/shadow', 
		'/etc/groups', '/etc/gshadow', '/bin/ps', 'uname\x20-a', '/usr/bin/id', '/bin/echo', '/bin/kill', '/bin/', '/chgrp', 
		'/usr/bin', 'bin/python', 'bin/tclsh', 'bin/nasm', '/usr/x11r6/bin/xterm', '/bin/mail', '/etc/passwd', '/home/ftp', 
		'/home/www', '/srv/www', '?>');
		$clean = str_replace($qs_rules, '*', $qs);
		if ($clean != $qs) { die(); } //die silent!
		unset($qs_rules, $clean);
	}
	unset($qs);
}

/* CRLF INJECTION/HTTP RESPONSE SPLIT */
$pat='((\%0d)|(\%0a)|(\\\r)|(\\\n))';
if (isset($_SERVER['QUERY_STRING'])) {
    if (preg_match("/$pat/", $_SERVER['QUERY_STRING'])) {
    	die( 'Possible CRLF injection/HTTP response split.' );
    }
}
if (isset($_COOKIE)) {
    if (preg_match("/$pat/", serialize($_COOKIE))) {
    	die( 'Possible CRLF injection/HTTP response split.' );
    }
}
unset($pat);

/* FLOOD PROTECTION */
$elxis_root1 = str_replace( '/includes/Core', '', str_replace( DIRECTORY_SEPARATOR, '/', dirname(__FILE__) ) );
require_once( $elxis_root1."/includes/floodblocker.class.php");
$fldblock = new FloodBlocker();
if ((!$fldblock->init_error) && ($fldblock->floodblock_enabled)) {
    if (!$fldblock->CheckFlood()) {
        die ( 'ELXIS FLOOD PROTECTION. Too many requests! Please try again later.' );
    }
}

/* ELXIS DEFENDER */
require_once( $elxis_root1."/administrator/tools/defender/defender.class.php");
$defender = new ElxisDefender();
if ((!$defender->init_error) && ($defender->enabled)) {
    if (!$defender->valid) {
        die ( 'ELXIS DEFENDER. Security settings blocked your request.' );
    }
}

unset($elxis_root1);

?>