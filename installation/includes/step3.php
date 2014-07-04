<?php 
/**
* @version: $Id$
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
$nextstep = ($isErr) ? $installer->step - 1 : $installer->step + 1;
?>

<h3><?php echo $iLang->DBCONSETS; ?></h3>
<p class="smallinfo<?php echo ($iLang->RTL)? '-rtl' : ''; ?>"><?php echo $iLang->DBCONSETSD; ?></p><br />

<form method="post" name="frmdbinfo" id="frmdbinfo" action="index.php"<?php if (!$isErr) { echo ' onsubmit="return checkdbform();"'; } ?>>
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

	$DBtype = $installer->getCfg('dbtype', 'mysql');
?>
    <div class="mpez">
        <?php echo $iLang->DBCONF_1; ?><br /><br />
        <?php echo $iLang->HOSTNAME; ?>: 
        <input dir="ltr" class="inputbox" type="text" name="host" value="<?php echo $installer->getCfg('host', 'localhost'); ?>" /> 
        <span class="comment"><?php echo $iLang->USLOCALHOST; ?></span>
    </div>
    <br class="spacer" />

    <div class="mpez">
        <div style="float: <?php echo ($iLang->RTL)? 'left' : 'right'; ?>;">
			<a href="http://adodb.sourceforge.net/" target="_blank" title="ADOdb, Data Power">
            <img src="images/adodb.gif" border="0" alt="ADOdb, Data Power" />
			</a>
        </div>

        <?php echo $iLang->DBCONF_2; ?><br /><br />
        <?php echo $iLang->DBTYPE; ?>: 
        <select dir="ltr" name="dbtype" id="dbtype" class="combobox" onchange="checkdbcompat(); dbpathdisplay();">
            <option value="mysql"<?php if ($DBtype == 'mysql') { echo ' selected="selected"'; } ?>>MySQL</option>
            <option value="mysqli"<?php if ($DBtype == 'mysqli') { echo ' selected="selected"'; } ?>>MySQL(i) w/transactions</option>
            <option value="mysqlt"<?php if ($DBtype == 'mysqlt') { echo ' selected="selected"'; } ?>>MySQL(t) w/transactions</option>
            <option value="postgres"<?php if ($DBtype == 'postgres') { echo ' selected="selected"'; } ?>>PostgreSQL (generic)</option>
            <option value="postgres64"<?php if ($DBtype == 'postgres64') { echo ' selected="selected"'; } ?>>PostgreSQL 6.4-</option>
            <option value="postgres7"<?php if ($DBtype == 'postgres7') { echo ' selected="selected"'; } ?>>PostgreSQL 7</option>
            <option value="postgres8"<?php if ($DBtype == 'postgres8') { echo ' selected="selected"'; } ?>>PostgreSQL 8</option>
            <option value="oci805"<?php if ($DBtype == 'oci805') { echo ' selected="selected"'; } ?> style="color: #FF9900;">Oracle 8.0.5</option>
            <option value="oci8"<?php if ($DBtype == 'oci8') { echo ' selected="selected"'; } ?> style="color: #FF9900;">Oracle 8/9</option>
            <option value="oci8po"<?php if ($DBtype == 'oci8po') { echo ' selected="selected"'; } ?> style="color: #FF9900;">Oracle 8/9 (portable)</option>
            <option value="odbc_oracle"<?php if ($DBtype == 'odbc_oracle') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Oracle (ODBC)</option>
            <option value="oracle"<?php if ($DBtype == 'oracle') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Oracle 7</option>
            <option value="ado"<?php if ($DBtype == 'ado') { echo ' selected="selected"'; } ?> style="color: #FF0000;">ADO (generic)</option>
            <option value="borland_ibase"<?php if ($DBtype == 'borland_ibase') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Borland (Interbase 6.5+)</option>
			<option value="db2"<?php if ($DBtype == 'db2') { echo ' selected="selected"'; } ?> style="color: #FF0000;">DB2</option>
            <option value="odbc_db2"<?php if ($DBtype == 'odbc_db2') { echo ' selected="selected"'; } ?> style="color: #FF0000;">DB2 (ODBC)</option>
            <option value="firebird"<?php if ($DBtype == 'firebird') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Firebird</option>
            <option value="fbsql"<?php if ($DBtype == 'fbsql') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Frontbase</option>
            <option value="informix"<?php if ($DBtype == 'informix') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Informix (generic)</option>
            <option value="informix72"<?php if ($DBtype == 'informix72') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Informix  7.2-</option>
            <option value="ibase"<?php if ($DBtype == 'ibase') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Interbase 6+</option>
            <option value="ldap"<?php if ($DBtype == 'ldap') { echo ' selected="selected"'; } ?> style="color: #FF0000;">LDAP</option>
            <option value="access"<?php if ($DBtype == 'access') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft Access/Jet</option>
            <option value="ado_access"<?php if ($DBtype == 'ado_access') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft Access/Jet (ADO)</option>
            <option value="mssql"<?php if ($DBtype == 'mssql') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft SQL Server 7+</option>
            <option value="ado_mssql"<?php if ($DBtype == 'ado_mssql') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft SQL Server (ADO)</option>
            <option value="odbc_mssql"<?php if ($DBtype == 'odbc_mssql') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft SQL (ODBC)</option>
            <option value="mssqlpo"<?php if ($DBtype == 'mssqlpo') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft SQL (portable)</option>
            <option value="vfp"<?php if ($DBtype == 'vfp') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Microsoft Visual FoxPro</option>
            <option value="maxsql"<?php if ($DBtype == 'maxsql') { echo ' selected="selected"'; } ?> style="color: #FF0000;">MaxSQL</option>
            <option value="netezza"<?php if ($DBtype == 'netezza') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Netezza</option>
            <option value="odbc"<?php if ($DBtype == 'odbc') { echo ' selected="selected"'; } ?> style="color: #FF0000;">ODBC (generic)</option>
            <option value="odbtp"<?php if ($DBtype == 'odbtp') { echo ' selected="selected"'; } ?> style="color: #FF0000;">ODBTP (generic)</option>
            <option value="odbtp_unicode"<?php if ($DBtype == 'odbtp_unicode') { echo ' selected="selected"'; } ?> style="color: #FF0000;">ODBTP (unicode)</option>
            <option value="pdo"<?php if ($DBtype == 'pdo') { echo ' selected="selected"'; } ?> style="color: #FF0000;">PDO (generic)</option>
            <option value="sapdb"<?php if ($DBtype == 'sapdb') { echo ' selected="selected"'; } ?> style="color: #FF0000;">SAP DB</option>
            <option value="sqlite"<?php if ($DBtype == 'sqlite') { echo ' selected="selected"'; } ?> style="color: #FF0000;">SQLite</option>
            <option value="sqlitepo"<?php if ($DBtype == 'sqlitepo') { echo ' selected="selected"'; } ?> style="color: #FF0000;">SQLite (portable)</option>
            <option value="sybase"<?php if ($DBtype == 'sybase') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Sybase</option>
            <option value="sybase_ase"<?php if ($DBtype == 'sybase_ase') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Sybase ASE</option>
            <option value="sqlanywhere"<?php if ($DBtype == 'sqlanywhere') { echo ' selected="selected"'; } ?> style="color: #FF0000;">Sybase SQL Anywhere</option>
        </select> 
        <span class="comment"><?php echo $iLang->DBTYPE_COMMENT; ?> 
            [ <a href="includes/supported_databases.html" title="Elxis - ADODB" target="_blank" class="infolink"><?php echo $iLang->SUPPORTED_DBS; ?></a> ]
        </span><br />
		<input type="hidden" name="ajaxlang" id="ajaxlang" value="<?php echo $installer->lang; ?>" />
		<div id="dbcompatresults" style="margin:6px 0; display:none;"></div>           
    </div>
    <br class="spacer" />

<?php 
	if (in_array($DBtype, array('borland_ibase', 'firebird', 'ibase', 'access'))) {
		$dbstyle1 = ' style="display: none;"';
		$dbstyle2 = '';
	} else {
		$dbstyle1 = '';
		$dbstyle2 = ' style="display: none;"';
	}

?>
	<div class="mpez">
    <table cellspacing="0" cellpadding="5" border="0">
    <tr>
        <td valign="top" width="240">
        	<div class="parag">
				<?php echo $iLang->DBCONF_3; ?>
			</div>
		</td>
        <td valign="top" nowrap="nowrap">
            <span id="dbfile1"<?php echo $dbstyle1; ?>><?php echo $iLang->DBNAME; ?></span>
			<span id="dbfile2"<?php echo $dbstyle2; ?>><?php echo $iLang->DBPATH; ?></span><br />
            <input dir="ltr" class="inputbox" type="text" name="db" value="<?php echo $installer->getCfg('db'); ?>" />
        </td>
        <td valign="top">
			<div class="comment" id="dbfile3"<?php echo $dbstyle1; ?>>
				<?php echo $iLang->DBNAME_COMMENT; ?>
			</div>
			<div class="comment" id="dbfile4"<?php echo $dbstyle2; ?>>
				<?php echo $iLang->DBPATH_COMMENT; ?>
			</div>
		</td>
    </tr>
    </table>
	</div>
	<br class="spacer" />

    <div class="mpez">
        <?php echo $iLang->DBCONF_4; ?><br /><br />
        <?php echo $iLang->DBPREFIX; ?>: 
        <input dir="ltr" class="inputbox" type="text" name="dbprefix" value="<?php echo $installer->getCfg('dbprefix', 'elx_'); ?>" size="6" maxlength="20" /> 
        <span class="comment"><?php echo $iLang->DBPREFIX_COMMENT; ?></span>
    </div>
    <br class="spacer" />

	<div class="mpez">
    <table cellspacing="0" cellpadding="5" border="0">
    <tr>
        <td valign="top" width="240">
        	<div class="parag">
				<?php echo $iLang->DBCONF_5; ?>
        	</div>
        </td>
        <td valign="top">
            <table border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td nowrap="nowrap">
                        <?php echo $iLang->DBUSER; ?><br />
                        <input dir="ltr" class="inputbox" type="text" name="user" value="<?php echo $installer->getCfg('user'); ?>" autocomplete="off" />
                    </td>
                    <td><div class="comment"><?php echo $iLang->DBUSER_COMMENT; ?></div></td>
                </tr>
                <tr>
                    <td nowrap="nowrap">
                        <?php echo $iLang->DBPASS; ?><br />
                        <input dir="ltr" class="inputbox" type="password" name="password" value="" autocomplete="off" />
                    </td>
                    <td><div class="comment"><?php echo $iLang->DBPASS_COMMENT; ?></div></td>
                </tr>
                <tr>
                    <td nowrap="nowrap">
                        <?php echo $iLang->VERIFY_DBPASS; ?><br />
                        <input dir="ltr" class="inputbox" type="password" name="verifypassword" value="" autocomplete="off" />
                    </td>
                    <td><div class="comment"><?php echo $iLang->VERIFY_DBPASS_COMMENT; ?></div></td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
    </div>
    <br class="spacer" />

	<h3><?php echo $iLang->OTHER_SETTINGS; ?></h3>
    <div class="mpez">
        <input type="checkbox" name="DBDel" value="1" /> 
        <label for="DBDel"><?php echo $iLang->DBDROP; ?></label><br /><br />
        <input type="checkbox" name="DBBackup" value="1" />
        <label for="DBBackup"><?php echo $iLang->DBBACKUP; ?></label><br />
        <span class="comment"><?php echo $iLang->DBBACKUP_COMMENT; ?></span>
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
