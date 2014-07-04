<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2010 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Elxis CMS Installer
* @link: http://www.elxis.org
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @description: Elxis CMS Installer.
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


global $iLang, $installer, $version_short;
?>

    <h3><?php echo $iLang->INSTALLTEXT_02.' '.$version_short; ?></h3>

	<div class="mpez">
    <table cellspacing="0" cellpadding="5" border="0">
    <tr>
        <td width="240" valign="top">
            <div class="parag">
            	<?php echo $iLang->INSTALLTEXT_01; ?>
            </div>
        </td>
        <td valign="top">
            <table cellspacing="5" cellpadding="0" border="0">
            <tr>
                <td nowrap="nowrap"><?php echo $iLang->INSTALL_PHP_VERSION; ?></td>
                <td>
                    <?php 
                    echo phpversion() < '5.0' ? $installer->colorString($iLang->NO, 'red') : $installer->colorString($iLang->YES);
                    echo ' <strong>( '.phpversion().' )</strong>'._LEND;
                    ?>
	           </td>
            </tr>
            <tr>
            	<td><?php echo $iLang->ZLIBSUPPORT; ?></td>
            	<td>
            	   <?php echo extension_loaded('zlib') ? $installer->colorString($iLang->AVAILABLE) : $installer->colorString($iLang->UNAVAILABLE, 'red'); ?>
            	</td>
            </tr>
            <tr>
            	<td><?php echo $iLang->XMLSUPPORT; ?></td>
            	<td>
            	   <?php echo extension_loaded('xml') ? $installer->colorString($iLang->AVAILABLE) : $installer->colorString($iLang->UNAVAILABLE, 'red'); ?>
            	</td>
            </tr>
            <tr>
            	<td><?php echo $iLang->CONFIGURATION_PHP; ?></td>
            	<td>
            	<?php
            	if (@file_exists('../configuration.php') &&  @is_writable( '../configuration.php' )){
            		echo $installer->colorString($iLang->WRITABLE);
            	} else if (is_writable( '..' )) {
                    echo $installer->colorString($iLang->WRITABLE);
            	} else {
                    echo $installer->colorString($iLang->UNWRITABLE, 'red');
                    echo '<br /><span class="small">'.$iLang->INSTALLTEXT_03.'</span>';
            	} ?>
            	</td>
            </tr>
            <tr>
                <td><?php echo $iLang->SESSIONSAVEPATH; ?></td>
                <td>
                	<?php 
                	if ($sp = @ini_get('session.save_path')) {
                		$write = is_writable( $sp ) ? $installer->colorString('('.$iLang->WRITABLE.')') : $installer->colorString('('.$iLang->UNWRITABLE.')', 'red');
                		$sp = str_replace('/', '/ ', $sp);
                		$sp = str_replace('\\', '/ ', $sp);
                		echo '<strong>'.$sp.' '.$write.'</strong>';
                	} else {
                		echo '<strong>'.$iLang->NOTSET.'</strong>';
                	}
					?>
                </td>
            </tr>
            </table>
        </td>
    </tr>
    </table>
    </div>

    <h3><?php echo $iLang->SUPPORTED_DBS; ?></h3>
	<div class="mpez">
    	<?php echo $iLang->SUPPORTED_DBS_INFO; ?>
    	<br /><br />
		<strong><?php echo $iLang->SUPPORTED_DBS; ?>:</strong><br />
<?php 
        if ($iLang->RTL == 1) { echo '<div dir="ltr">'._LEND; }
        echo function_exists( 'mysql_connect' ) ? $installer->colorString('MySQL') : 'MySQL';
        echo ', '._LEND;
		echo function_exists( 'pg_connect' ) ? $installer->colorString('PostgreSQL') : 'PostgreSQL';
		echo ', '._LEND;
		echo function_exists( 'msql_connect' ) ? $installer->colorString('Microsoft SQL') : 'Microsoft SQL';
		echo ', '._LEND;
		echo function_exists( 'odbc_connect' ) ? $installer->colorString('ODBC') : 'ODBC';
		echo ', '._LEND;
		echo function_exists( 'oci_connect' ) ? $installer->colorString('Oracle') : 'Oracle';
		echo ', '._LEND;
		echo function_exists( 'ibase_connect' ) ? $installer->colorString('FireBird') : 'FireBird';
		echo ', '._LEND;
		echo function_exists( 'fbsql_connect' ) ? $installer->colorString('Frontbase') : 'Frontbase';
		echo ', '._LEND;
		echo function_exists( 'ifx_connect' ) ? $installer->colorString('Informix') : 'Informix';
		echo ', '._LEND;
        echo function_exists( 'dbx_connect' ) ? $installer->colorString('DBX') : 'DBX';
        echo ', '._LEND;
        echo function_exists( 'sesam_connect' ) ? $installer->colorString('Sesam') : 'Sesam';
        echo ', '._LEND;
        echo function_exists( 'yaz_connect' ) ? $installer->colorString('Z39.50') : 'Z39.50';
        echo ', '._LEND;
        echo function_exists( 'ibase_connect' ) ? $installer->colorString('InterBase') : 'InterBase';
        if ($iLang->RTL == 1) { echo '</div>'._LEND; }
?>
    </div>

    <h3><?php echo $iLang->RECOMMENDEDSETTINGS; ?></h3>
	<div class="mpez">
    <table cellspacing="0" cellpadding="5" border="0">
    <tr>
        <td width="240" valign="top">
        	<div class="parag">
            	<?php 
				echo $iLang->RECOMMENDEDSETTINGS01.' ';
				echo $iLang->RECOMMENDEDSETTINGS02;
                ?>
            </div>
        </td>
        <td valign="top">
            <table cellspacing="0" cellpadding="5" border="0">
            <tr>
                <td class="coltitle"><?php echo $iLang->DIRECTIVE; ?></td>
                <td class="coltitle"><?php echo $iLang->RECOMMENDED; ?></td>
                <td class="coltitle"><?php echo $iLang->ACTUAL; ?></td>
            </tr>
            <?php 
            $php_recommended_settings = array (
                array ($iLang->SAFEMODE,'safe_mode',$iLang->OFF),
                array ($iLang->DISPLAYERRORS,'display_errors',$iLang->OFF),
                array ($iLang->FILEUPLOADS,'file_uploads',$iLang->ON),
                array ($iLang->MAGICGPC,'magic_quotes_gpc',$iLang->OFF),
                array ($iLang->MAGICRUNTIME,'magic_quotes_runtime',$iLang->OFF),
                array ($iLang->REGISTERGLOBALS,'register_globals',$iLang->OFF),
                array ($iLang->OUTPUTBUFFERING,'output_buffering',$iLang->OFF),
                array ($iLang->SESSIONAUTO,'session.auto_start',$iLang->OFF),
                array ($iLang->ALLOWURLFOPEN,'allow_url_fopen',$iLang->OFF),
                array ('Short Open tag','short_open_tag',$iLang->OFF)
            );

            foreach ($php_recommended_settings as $phprec) {
                $pset = $installer->inivalue($phprec[1]);
                $color = ( $pset == $phprec[2] ) ? 'green' : 'red';

                echo '<tr>'._LEND;
                echo '<td>'.$phprec[0].':</td>'._LEND;
                echo '<td>'.$phprec[2].'</td>'._LEND;
                echo '<td>'.$installer->colorString($pset, $color).'</td>'._LEND;
                echo '</tr>'._LEND;
            } 
            if (@ini_get('safe_mode')) {
            ?> 
                <tr>
                    <td colspan="3">
                        <div style="margin: 6px 0; padding: 4px; background-color: #FF0000; color: #FFFFFF; text-align: center;">
							<strong><?php echo $iLang->SFMODALERT1; ?></strong><br />
							<?php echo $iLang->SFMODALERT2; ?>
						</div>
                    </td>
                </tr>
            <?php 
            }
            ?>
            </table>
        </td>
    </tr>
    </table>   
	</div>

	<div class="warning">
        <?php echo $iLang->DISABLE_FUNC; ?><br />
        <?php if ($iLang->RTL == 1) { echo '<div dir="ltr">'; } ?>
		<strong>system, exec, passthru, shell_exec, suexec, dbmopen, popen, proc_open, 
        disk_free_space, diskfreespace, set_time_limit, leak</strong> 
		<?php if ($iLang->RTL == 1) { echo '</div>'; } ?>             
    </div>

    <h3><?php echo $iLang->DIRFPERM; ?></h3>

	<div class="mpez">
    <table cellspacing="0" cellpadding="5" border="0" width="100%">
	<tr>
		<td width="240" valign="top">
            <div class="parag">
                <?php echo $iLang->DIRFPERM02; ?>
            </div>
		</td>
		<td valign="top">
            <table>
            <?php 
            $installer->writableCell('cache', 1);
            $installer->writableCell('tmpr', 1);
            ?>
 			</table>
		</td>
	</tr>
 
    <tr>
        <td width="240" valign="top">
            <div class="parag">
                <?php echo $iLang->DIRFPERM01; ?><br /><br />
                <span style="font-weight: bold; color: #FFFFFF;"><?php echo $iLang->NOTE; ?></span><br />
                <?php echo $iLang->FTP_NOTE; ?>
            </div>
        </td>
        <td valign="top">
            <table>
            <?php 
            $installer->writableCell('administrator/backups');
            $installer->writableCell('administrator/components');
            $installer->writableCell('administrator/modules');
            $installer->writableCell('administrator/templates/admin');
            $installer->writableCell('administrator/templates/login');
            $installer->writableCell('administrator/language');
            $installer->writableCell('components');
            $installer->writableCell('images');
            $installer->writableCell('images/banners');
            $installer->writableCell('images/stories');
            $installer->writableCell('language');
            $installer->writableCell('mambots');
            $installer->writableCell('mambots/content');
            $installer->writableCell('mambots/search');
            $installer->writableCell('media');
            $installer->writableCell('modules');
            $installer->writableCell('templates');
            ?>
            </table>
        </td>
    </tr>
    </table>
    </div>

    <h3><?php echo $iLang->OTHER_RECOM; ?></h3>
    <div class="mpez">
    	<?php echo $iLang->OUR_RECOM_ELXIS; ?><br /><br />
        <table border="0" cellspacing="0" cellpadding="5">
        <tr>
            <td width="180"><?php echo $iLang->SERVER_OS; ?>:</td>
            <td><a href="http://www.linux.org" target="_blank" title="Linux"><img src="images/linux.gif" alt="Linux" border="0" /></a></td>
        </tr>
        <tr>
            <td><?php echo $iLang->HTTP_SERVER; ?>:</td>
            <td><a href="http://www.apache.org" target="_blank" title="Apache"><img src="images/apache.gif" alt="Apache" border="0" /></a></td>
        </tr>
        <tr>
            <td><?php echo $iLang->DBTYPE; ?>:</td>
            <td><a href="http://www.mysql.com" target="_blank" title="MySQL"><img src="images/mysql.gif" alt="MySQL" border="0" /></a></td>
        </tr>
        <tr>
            <td><?php echo $iLang->BROWSER; ?>:</td>
            <td><a href="http://www.mozilla.com/firefox/" target="_blank" title="Firefox"><img src="images/firefox.gif" alt="Firefox" border="0" /></a></td>
        </tr>
        <tr>
            <td><?php echo $iLang->SCREEN_RES; ?>:</td>
            <td><?php echo '1024X768 '.$iLang->OR_GREATER; ?></td>
        </tr>
        </table>
    </div>

    <div style="text-align: center; margin: 20px 0;">
        <form method="post" name="frmcontinue" action="index.php">
        <input name="button2" type="submit" class="button" style="cursor:pointer;" value="<?php echo $iLang->NEXT; ?>" title="<?php echo $iLang->NEXT; ?>" onclick="frmcontinue.submit();" />
        <input type="hidden" name="mylang" value="<?php echo $installer->lang; ?>" />
        <input type="hidden" name="step" value="<?php echo ($installer->step + 1); ?>" />
        </form>
    </div>
