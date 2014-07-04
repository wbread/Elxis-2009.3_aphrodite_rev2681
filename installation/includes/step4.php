<?php 
/**
* @version: $Id: step4.php 43 2010-06-08 16:32:09Z sannosi $
* @copyright: Copyright (C) 2006-2010 Elxis.org. All rights reserved.
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

<form method="post" name="frmssinfo" id="frmssinfo" action="index.php"<?php if (!$isErr) { echo ' onsubmit="return checkssform();"'; } ?>>
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

	if ($installer->_config['live_site'] == '') {
		$installer->_config['live_site'] = $installer->elxisSiteURL();
	}
	if ($installer->_config['absolute_path'] == '') {
		$installer->_config['absolute_path'] = $installer->elxisRootDir();
	}

	$ideflangs = $installer->getElxisLangs(); 
	$idefalangs = $installer->getElxisLangs(0);

?>

    <div class="mpez">
        <?php echo $iLang->SITENAME_INFO; ?><br /><br />
		<?php echo $iLang->SITENAME; ?>: 
		<input type="text" name="sitename" class="inputbox" size="40" value="<?php echo $installer->_config['sitename']; ?>" /> 
		<span class="comment"><?php echo $iLang->SITENAME_EG; ?></span>
    </div>

    <div class="mpez">
    <table border="0" cellspacing="0" cellpadding="5">
    <tr>
        <td width="240" valign="top">
			<div class="parag">
				<?php echo $iLang->URLPATH_DESC; ?>
			</div>
		</td>
		<td valign="top">
			<table cellspacing="5" cellpadding="0" border="0" width="100%">
			<tr>
				<td><?php echo $iLang->URL; ?></td>
				<td><input dir="ltr" type="text" name="live_site" class="inputbox" size="50" value="<?php echo $installer->_config['live_site']; ?>" /></td>
			</tr>
			<tr>
				<td><?php echo $iLang->PATH; ?></td>
				<td><input dir="ltr" type="text" name="absolute_path" class="inputbox" size="50" value="<?php echo $installer->_config['absolute_path']; ?>" /></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</div>
	
	<h3><?php echo $iLang->OFFSET; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->OFFSETDESC; ?></p><br />

	<?php $ts = time(); ?>
	<div class="mpez">
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="80" align="center">
				<img src="images/clock64.png" alt="<?php echo $iLang->OFFSET; ?>" border="0" />
			</td>
			<td>
				<table cellspacing="5" cellpadding="0" border="0" width="100%">
				<tr>
					<td width="200"><?php echo $iLang->SERVERTIME; ?></td>
					<td><?php echo date('Y-m-d H:i:s', $ts); ?></td>
				</tr>
				<tr>
					<td><?php echo $iLang->LOCALTIME; ?></td>
					<td>
					<script type="text/javascript">
					var curdate = getcurrentdate();
					document.write(curdate);
					</script>
					</td>
				</tr>
				<tr>
					<td><?php echo $iLang->SUGOFFSET; ?></td>
					<td><strong id="suggestedoffset">0</strong></td>
				</tr>
				<tr>
					<td><?php echo $iLang->OFFSET; ?></td>
					<td>
					<select dir="ltr" name="offset" class="combobox">
                    <?php 
					$i = -24;
					while ($i < 24.5) {
						$sel = ($i == $installer->_config['offset']) ? ' selected="selected"' : '';
						$k = ($i > 0) ? '+'.$i : $i;
						echo '<option value="'.$i.'"'.$sel.'>'.$k.'</option>'._LEND;
						$i = $i + 0.5;
                    }
					?>
					</select>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</div>
	<input type="hidden" name="servertime" id="servertime" value="<?php echo $ts; ?>" />

	<h3><?php echo $iLang->LANGUAGE; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->LANG_SETTINGS; ?></p><br />

	<div class="mpez">
		<table cellspacing="2" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="80" align="center" rowspan="2" valign="top">
				<img src="images/language64.png" alt="<?php echo $iLang->OFFSET; ?>" border="0" />
			</td>
			<td width="250"><?php echo $iLang->DEF_FRONTL; ?>&nbsp;</td>
			<td>
				<select dir="ltr" name="lang" id="lang" class="combobox" onchange="checklangpublish();">
				<?php 
				foreach ($ideflangs as $ideflang) {
                    echo '<option value="'.$ideflang.'"';
					if ($ideflang == $installer->_config['lang']) { echo ' selected="selected"'; }
					echo '>'.$ideflang.'</option>'._LEND;
                }
                ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php echo $iLang->DEF_BACKL; ?>&nbsp;</td>
			<td>
				<select dir="ltr" name="alang" class="combobox">
				<?php 
				foreach ($idefalangs as $idefalang) {
                    echo '<option value="'.$idefalang.'"';
					if ($idefalang == $installer->_config['alang']) { echo ' selected="selected"'; }
					echo '>'.$idefalang.'</option>'._LEND;
                }
                ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">
				<div style="font-weight: bold; margin: 5px 0;"><?php echo $iLang->PUBL_LANGS; ?></div>
			<?php 
			$rtl = ($iLang->RTL) ? '-rtl' : '';
			$plangs = explode(',',$installer->_config['pub_langs']);
            foreach ($ideflangs as  $ideflang) {
				if (in_array($ideflang, $plangs)) {
					$checked = ' checked="checked"';
					$style = ' style="background-color: #def5b9;"';
				} else {
					$checked = '';
					$style = '';
				}
				echo '<div class="publang'.$rtl.'" id="'.$ideflang.'box"'.$style.'>';
                echo '<input type="checkbox" name="planguage[]" id="'.$ideflang.'cbox" value="'.$ideflang.'"'.$checked.' onclick="switchbgcolor(\''.$ideflang.'\');" /> ';
                if (file_exists($installer->_config['absolute_path'].'/language/'.$ideflang.'/'.$ideflang.'.gif')) {
                    echo '<img src="../language/'.$ideflang.'/'.$ideflang.'.gif" border="0" align="absmiddle" title="'.$ideflang.'" alt="'.$ideflang.'" /> ';
                }
                echo (strlen($ideflang) > 12) ? ucfirst(substr($ideflang, 0, 12)) : ucfirst($ideflang);
                echo "</div> \n";
                }
            ?>			
			</td>
		</tr>
		</table>
	</div>

	<h3><?php echo $iLang->STATICCACHE; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->STATICCACHED; ?></p><br />

<?php 
$cawrite = is_writable($installer->_config['absolute_path'].'/cache/') ? 1 : 0;
$cadisable = '';
if ($cawrite == 0) {
	$cadisable = ' disabled="disabled"';
	$installer->_config['static_cache'] = 0;
}
?>

    <div class="mpez">
    <table border="0" cellspacing="0" cellpadding="5">
    <tr>
        <td width="80" valign="top" align="center">
			<img src="images/cache64.png" alt="<?php echo $iLang->STATICCACHE; ?>" border="0" />
		</td>
		<td valign="top">
			<table cellspacing="5" cellpadding="0" border="0" width="100%">
			<tr>
				<td width="180"><?php echo $iLang->STATICCACHE; ?></td>
				<td>
				<input type="radio" name="static_cache" value="0"<?php echo (intval($installer->_config['static_cache']) != 1) ? ' checked="checked"' : ''; ?><?php echo $cadisable; ?> /> <?php echo $iLang->NO; ?>
				<input type="radio" name="static_cache" value="1"<?php echo (intval($installer->_config['static_cache']) == 1) ? ' checked="checked"' : ''; ?><?php echo $cadisable; ?> /> <?php echo $iLang->YES; ?>
			</td>
			</tr>
			<tr>
				<td colspan="2">
				<?php 
				echo $installer->_config['absolute_path'].'/cache/ ';
				if (is_writable($installer->_config['absolute_path'].'/cache/')) {
            		echo $installer->colorString($iLang->WRITABLE);
            	} else {
                    echo $installer->colorString($iLang->UNWRITABLE, 'red');
                }
                ?><br /><br />
                <p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->FEATENLATER; ?></p>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</div>

	<h3><?php echo $iLang->SEFURLS; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->SEFURLSD; ?></p>

	<div class="information<?php echo ($iLang->RTL)? '-rtl' : ''; ?>">
		<?php echo $iLang->SEOPROSRVS; ?>
	</div>
		
    <div class="mpez">
    <table border="0" cellspacing="0" cellpadding="5">
    <tr>
        <td width="80" valign="top" align="center">
			<img src="images/friendly64.png" alt="SEO PRO" border="0" />
		</td>
		<td valign="top">
			<table cellspacing="5" cellpadding="0" border="0" width="100%">
			<tr>
				<td colspan="2">
					<input type="hidden" name="ajaxlang" id="ajaxlang" value="<?php echo $installer->lang; ?>" />
<?php
				if (file_exists($installer->_config['absolute_path'].'/.htaccess')) {
					echo '<span style="color: #990000;">'.$iLang->HTACCEXIST."</span>\n";
					$installer->_config['sef'] = 0;
				} else {
					echo '<a href="javascript:void(null);" onclick="renamehtacc();" class="infolink">'.$iLang->RENAMEHTACC."</a><br />\n";
					echo $iLang->RENAMEHTACC2."<br />\n";
					echo '<div id="htaccresults" style="margin:6px 0; display:none;"></div>';
				}
?>
				</td>
			</tr>
			<tr>
				<td width="250"><?php echo $iLang->SEFURLS; ?></td>
				<td>
				<input type="radio" name="sef" value="0"<?php echo (intval($installer->_config['sef']) != 2) ? ' checked="checked"' : ''; ?> /> <?php echo $iLang->NO; ?>
				<input type="radio" name="sef" value="2"<?php echo (intval($installer->_config['sef']) == 2) ? ' checked="checked"' : ''; ?> /> <?php echo $iLang->YES; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<br />
                <p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->FEATENLATER; ?></p>
				</td>
			</tr>
			</table>
		</td>
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
