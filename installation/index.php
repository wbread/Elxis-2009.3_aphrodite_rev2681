<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Elxis CMS Installer
* @author: Elxis Team
* @email: info@elxis.org
* @link: http://www.elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @description: Elxis CMS Installer
*/

define('_ELXIS_INSTALLER', 1);
define('_VALID_MOS', 1);
session_start();

if (file_exists('../configuration.php') && filesize('../configuration.php') > 10) {
	header("Location: ../index.php");
	exit();
}

if (version_compare("5.1", phpversion(), "<=")) {
	if (function_exists('ini_get') && is_callable('ini_get')) {
		if (!ini_get('date.timezone')) {
			date_default_timezone_set(@date_default_timezone_get());
			define('ELXISTZWARN', 1);
		}
	}
}

require_once('../includes/version.php');

$abspath = str_replace( '\\', '/', dirname(__FILE__));
require_once( $abspath.'/includes/common.php' );
require_once($abspath.'/includes/elxisinstaller.php');
$installer = new elxisInstaller($abspath);

if (file_exists($installer->abspath.'/language/'.$installer->lang.'.install.php')) {
	require_once($installer->abspath.'/language/'.$installer->lang.'.install.php');
} else {
    @ob_end_clean();
    @header("location: error.php?errmsg=Language+file+missing");
    exit('Language file missing!');
}
$iLang = new iLanguage;

if (!file_exists($installer->abspath.'/includes/step'.$installer->step.'.php')) {
    @ob_end_clean();
    @header("location: error.php?errmsg=Invalid+installation+step");
    exit('Invalid installation step!');
}

header('Content-type: text/html; charset=utf-8');
header("Expires: Sun, 1 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: max-age=0, no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header('Pragma: no-cache');

$installer->beforeHTML();
echo $installer->documentHeader();
?>
<body<?php echo $installer->onBodyLoad(); ?>>

<?php $installer->topHTML(); ?>

<div id="bodyTopMain">
	<div id="bodyTop">
		<?php $installer->bodyTop(); ?>
	</div>
</div>

<div id="bodyMidMain">
	<div id="bodyMid">
<?php 
		if (defined('ELXISTZWARN')) {
			echo '<div style="margin: 10px 0; border: 1px solid #ff9900; padding: 4px; color: #000; background-color: #FAFBCD;">'."\n";
			echo '<span style="font-weight: bold; color:#ff0000;">ELXIS WARNING: There is no Timezone indentifier defined!</span><br />
			You must set the proper timezone in php.ini. Example: <em>date.timezone = "Europe/Athens"</em><br />'."\n";
			echo 'Elxis set timezone to <strong>'.date_default_timezone_get()."</strong><br />\n";
			echo '<a href="http://wiki.elxis.org/wiki/Set_timezone" title="Set PHP timezone on Elxis wiki" target="_blank">'.$iLang->HELP.'</a>';
			echo "</div>\n";
		}
?>
		<?php $installer->processStep(); ?>
	</div>
</div>
<br class="spacer" />

<div class="pagefooter">
    <div class="innerfooter">
        Powered by <a href="http://www.elxis.org" title="elxis.org" target="_blank">Elxis CMS</a>. 
        Copyright (C) 2006-<?php echo date('Y'); ?> Elxis Team. All rights reserved.<br />
        <?php echo $iLang->ELXIS_RELEASED; ?>
	</div>
</div>

</body>
</html>