<?php 
/**
* @version: $Id: step7.php 2335 2009-04-10 19:23:20Z datahell $
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

if ($isErr) {
?>
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

	<h3><?php echo $iLang->CONGRATS; ?></h3>

    <div class="information">
		<?php echo $iLang->ELXINSTSUC; ?><br /><br />
        <?php echo $iLang->THANKUSELX; ?><br />
        Elxis Team,<br />
        April 2009
    </div>

	<?php 
	if (!$installer->confsaved) {
		$config = $installer->saveconfig(1);
	?>
		<form name="frmconfig" method="post" action="">
		<div class="warning">
			<?php echo $iLang->CONFBYHAND; ?><br />
			<textarea dir="ltr" rows="8" cols="60" name="configcode" class="configarea" onclick="javascript:this.form.configcode.focus();this.form.configcode.select();" ><?php echo htmlspecialchars($config); ?></textarea>
		</div>
		</form>
	<?php 
	}
	$cssdir = ($iLang->RTL) ? '-rtl' : '';
	?>

	<h3><?php echo $iLang->NOWWHAT; ?></h3>
    <ul class="nowwhat<?php echo $cssdir; ?>">
		<li class="recycle"><strong><?php echo $iLang->DELINSTFOL; ?></strong><br />
			<a href="javascript:void(null);" class="infolink" onclick="window.open('<?php echo $installer->_config['live_site']; ?>/includes/iremover.php','iRemover','menubar=0,resizable=0,width=400,height=300');"><?php echo $iLang->AUTODELINSTFOL; ?></a><br />
			<?php echo $iLang->AUTODELFAILMAN; ?>
		</li>
		<li class="gowiki">
			<a href="http://wiki.elxis.org/wiki/Category:Start_With_Elxis" class="infolink" title="Elxis Wiki" target="_blank"><?php echo $iLang->BENGUIDESWIKI; ?></a>
		</li>
		<li class="goforum">
			<a href="http://forum.elxis.org/" class="infolink" title="Elxis forum" target="_blank"><?php echo $iLang->VISITFORUMHLP; ?></a>
		</li>
		<li class="gohome">
			<strong><?php echo $iLang->VISITNEWSITE; ?></strong><br />
			<a href="<?php echo $installer->_config['live_site']; ?>" class="infolink" target="_blank"><?php echo $installer->_config['sitename']; ?></a>
		</li>
    </ul>

	<h3><?php echo $iLang->CREDITS; ?></h3>
    <ul class="nowwhat<?php echo $cssdir; ?>">
		<li class="credits"><?php echo $iLang->CREDITSELXGO; ?></li>
        <li class="credits"><?php echo $iLang->CREDITSELXCO; ?></li>
        <li class="credits"><?php echo $iLang->CREDITSELXWI; ?></li>
        <li class="credits"><?php echo $iLang->CREDITSELXRTL; ?></li>
        <li class="credits"><?php echo $iLang->CREDITSELXTR; ?></li>
        <li class="credits"><?php echo $iLang->OTHERTHANK; ?></li>
	</ul>

	<div style="text-align: center; margin: 20px auto 10px auto;">
		<a href="http://www.elxis.org" class="sitelink">Elxis CMS</a>
	</div>

<?php 
}
?>