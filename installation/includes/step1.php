<?php 
/**
* @ Version: $Id: step1.php 1878 2008-01-25 21:26:29Z datahell $
* @ Copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @ Package: Elxis
* @ Subpackage: Elxis CMS Installer
* @ License: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @ Description: Elxis CMS Installer.
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


global $iLang, $installer;

$licFile = $installer->lang.'.gpl.html';
if (!file_exists($installer->abspath.'/language/'.$licFile)) {
	$licFile = 'english.gpl.html';
}
?>

<h3><?php echo $iLang->GNU_LICENSE; ?></h3>

<form method="post" name="adminForm" id="adminForm" action="index.php" onsubmit="return defaultagree(this)">
    <div class="mpez">
        <?php echo $iLang->ELXIS_RELEASED; ?>
        <div class="error"><?php echo $iLang->INSTALL_TOCONTINUE; ?></div>
        <iframe src="language/<?php echo $licFile; ?>" class="license" frameborder="0" scrolling="auto"></iframe>
        <br class="clear" /><br />
        <input type="checkbox" name="agreecheck" id="agreecheck" onclick="agreesubmit(this)" />
        <label for="agreecheck"><?php echo $iLang->UNDERSTAND_GNUGPL; ?></label>
    </div>

    <div style="text-align: center; margin: 20px 0;">
        <input name="next" id="nextbtn" type="submit" class="button" style="background-color: #DDD;" value="<?php echo $iLang->NEXT; ?>" disabled="disabled" />
        <input type="hidden" name="mylang" value="<?php echo $installer->lang; ?>" />
        <input type="hidden" name="step" value="<?php echo ($installer->step + 1); ?>" />
    </div>
</form>
