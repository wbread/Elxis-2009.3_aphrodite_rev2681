<?php 
/**
* @ Version: $Id$
* @ Copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @ Package: Elxis
* @ Subpackage: Elxis CMS Installer
* @ License: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @ Description: Elxis CMS Installer.
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


global $iLang, $installer;

$isErr = (count($installer->errors) > 0) ? 1 : 0;
$nextstep = ($isErr) ? $installer->step - 1 : $installer->step + 1;
?>

<form method="post" name="frmclinfo" id="frmclinfo" action="index.php"<?php if (!$isErr) { echo ' onsubmit="return checkclform();"'; } ?>>
<?php if ($isErr) { ?>
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

	$tpls = $installer->getTemplates();
?>

	<h3><?php echo $iLang->TEMPLATE; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->TEMPLATEDESC; ?></p><br />

	<div style="margin: 10px 0;">
	<?php 
	foreach ($tpls as $row) {
		if ($row->directory == $installer->default_tpl) {
			$checked = ' checked="checked"';
			$ccs_class = 'tpl_title_sel';
		} else {
			$checked = '';
			$ccs_class = 'tpl_title';
		}
?>
		<div class="tplbox">
			<table cellspacing="2" cellpadding="0" border="0">
			<tr>
				<td valign="top">
					<a href="javascript:void(0);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-<?php echo $row->directory; ?>' } )" title="<?php echo $row->name; ?>">
						<img src="<?php echo $row->thumbnail; ?>" class="highslide-image" width="120" height="90" border="0" alt="<?php echo $row->name; ?>" />
					</a>
					<div class="highslide-html-content" id="highslide-<?php echo $row->directory; ?>">
						<div style="height:20px; padding: 2px;">
            			<a href="javascript:void(0);" onclick="return hs.close(this)" class="control"><?php echo $iLang->CLOSE; ?></a>
            			<a href="javascript:void(0);" onclick="return false" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
						</div>
        				<div class="highslide-body" style="padding: 0;">
        					<div align="center"><img src="<?php echo $row->thumbnail; ?>" border="0" alt="<?php echo $row->name ?>" /></div>
        				</div>
    				</div>				
				</td>
				<td valign="top">
					<div class="<?php echo $ccs_class; ?>" id="tpl_title_<?php echo $row->directory; ?>">
						<input type="radio" name="template" value="<?php echo $row->directory; ?>"<?php echo $checked; ?> onclick="setActiveTemplate();" /> 
						<strong><?php echo $row->name; ?></strong> v<?php echo $row->version; ?>
					</div>
<?php 
					if (trim($row->author) != '') {
						if (trim($row->authorUrl) != '') {
							echo '<a href="'.$row->authorUrl.'" title="Author web site" target="_blank">'.$row->author.'</a>';
						} else {
							echo $row->author;
						}
						echo "<br />\n";
					}
					$desc = strip_tags($row->description);
					$len = strlen($desc);
					$desc = ($len > 200) ? substr($desc, 0, 197).'...' : $desc;
?>
					<div style="margin-top: 5px;"><?php echo $desc; ?></div>
				</td>
			</tr>
			</table>
		</div>

<?php 
	}
?>
	</div>
	<div style="clear: both;"></div>

	<h3><?php echo $iLang->INSTALL_SAMPLE; ?></h3>
	<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->SAMPLEPACKD; ?></p><br />

    <div class="mpez">
<?php 
		$spackages = $installer->getSampleData();
		$dir = ($iLang->RTL) ? ' dir="rtl"' : '';
?>

        <?php echo $iLang->SAMPLEPACK; ?>: 
		<select name="data_pack" class="combobox"<?php echo $dir; ?>>
		<?php 
			$sel = (!$spackages) ? ' selected="selected"' : '';
			echo '<option value=""'.$sel.'>'.$iLang->NOSAMPLE.'</option>'._LEND;
			if ($spackages) {
				foreach ($spackages as $spack) {
					if ($spack == 'default') {
						$sel = ' selected="selected"';
						$packname = $iLang->DEFAULTPACK;
					} else {
						$sel = '';
						$packname = $spack;
					}
					echo '<option value="'.$spack.'"'.$sel.'>'.$packname.'</option>'._LEND;
				}
			}
		?>
		</select>
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
