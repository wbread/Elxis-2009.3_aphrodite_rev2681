<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Ioannis Sannos
* @translator URL: http://www.elxis.org
* @translator E-mail: info@elxis.org
* @description: English installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Direct Access to this location is not allowed.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'en'; //2-letter country code 
public $LANGNAME = 'English'; //This language written in your language
public $CLOSE = 'Close';
public $MOVE = 'Move';
public $NOTE = 'Note';
public $SUGGESTIONS = 'Suggestions';
public $RESTARTINST = 'Restart installation';
public $WRITABLE = 'Writable';
public $UNWRITABLE = 'Unwritable';
public $HELP = 'Help';
public $COMPLETED = 'Completed';
public $PRE_INSTALLATION_CHECK = 'Pre-installation check';
public $LICENSE = 'License';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Installer';
public $DEFAULT_AGREE = 'Please read/accept license to continue installation';
public $ALT_ELXIS_INSTALLATION = 'Elxis Installation';
public $DATABASE = 'Database';
public $SITE_NAME = 'Site name';
public $SITE_SETTINGS = 'Site settings';
public $FINISH = 'Finish';
public $NEXT = 'Next >>';
public $BACK = '<< Back';
public $INSTALLTEXT_01 = 'If any of these items are highlighted in red, then please take actions 
	to correct them. Failure to do so could lead to your Elxis installation not functioning correctly.';
public $INSTALLTEXT_02 = 'Pre-installation check for';
public $INSTALL_PHP_VERSION = 'PHP version >= 5.0.0';
public $NO = 'No';
public $YES = 'Yes';
public $ZLIBSUPPORT = 'zlib compression support';
public $AVAILABLE = 'Available';
public $UNAVAILABLE = 'Unavailable';
public $XMLSUPPORT = 'xml support';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'You can still continue the installation. The configuration will be displayed later. 
    Simply copy & paste this text and then upload the file.';
public $SESSIONSAVEPATH = 'Session save path';
public $SUPPORTED_DBS = 'Supported databases';
public $SUPPORTED_DBS_INFO = 'List of supported databases by your system. Note that maybe some 
	other may also be available (like SQLite).';
public $NOTSET = 'Not set';
public $RECOMMENDEDSETTINGS = 'Recommended settings';
public $RECOMMENDEDSETTINGS01 = 'These settings are recommended for PHP in order to ensure full compatibility with Elxis.';
public $RECOMMENDEDSETTINGS02 = 'However, Elxis will still operate if your settings do not quite match the recommended';
public $DIRECTIVE = 'Directive';
public $RECOMMENDED = 'Recommended';
public $ACTUAL = 'Actual';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Directory and File Permissions';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS is a Free Software released under the GNU/GPL license.';
public $INSTALL_LANG = 'Select installation language';
public $DISABLE_FUNC = 'For your site\'s security we also recommend you to disable these PHP functions in php.ini (if you don\'t use them):';
public $FTP_NOTE = 'If you enable FTP later, Elxis will be functional even if some of these folders are read-only.';
public $OTHER_RECOM = 'Other Recommendations';
public $OUR_RECOM_ELXIS = 'Our recommendations for making your life easier with or without Elxis.';
public $SERVER_OS = 'Server OS';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Screen resolution';
public $OR_GREATER = 'or greater';
public $SHOW_HIDE = 'Show/Hide';
public $SFMODALERT1 = 'YOUR PHP IS RUNNING UNDER SAFE MODE!';
public $SFMODALERT2 = 'Many Elxis features, components and third party extensions have problems running under safe mode.';
public $GNU_LICENSE = 'GNU/GPL License';
public $INSTALL_TOCONTINUE = '*** To continue installing Elxis please read the Elxis license 
	and if you agree check the box under the license ***';
public $UNDERSTAND_GNUGPL = 'I understand that this software is released under the GNU/GPL License';
public $MSG_HOSTNAME = 'Please enter a Host name';
public $MSG_DBUSERNAME = 'Please enter a Database User Name';
public $MSG_DBNAMEPATH = 'Please enter the database Name or Path';
public $MSG_SURE = 'Are you sure these settings are correct? \n Elxis will now attempt to populate the Database with the settings you have supplied';
public $DBCONFIGURATION = 'Database configuration';
public $DBCONF_1 = 'Please enter the hostname of the server Elxis is to be installed on';
public $DBCONF_2 = 'Select the type of the database you want Elxis to use';
public $DBCONF_3 = 'Enter the database name or pathway. To avoid problems creating the database by 
	the Elxis installer make sure database already exists.';
public $DBCONF_4 = 'Enter the table name prefix to be used by this Elxis instance.';
public $DBCONF_5 = 'Enter the database username and password. Make sure the user already exists and has all required privileges.';
public $OTHER_SETTINGS = 'Other settings';
public $DBTYPE = 'Database type';
public $DBTYPE_COMMENT = 'Usually "MySQL"';
public $DBNAME = 'Database Name';
public $DBNAME_COMMENT = 'Some hosts allow only a certain DB name per site. Use table prefix in this case to distinct Elxis sites.'; 
public $DBPATH = 'Database Path';
public $DBPATH_COMMENT = 'Some types of databases, like Access, InterBase and FireBird, 
	require to set a database file instead of a database name. In this case please write here 
	the path to this file. Example: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Host Name';
public $USLOCALHOST = 'Usually "localhost"';
public $DBUSER = 'Database UserName';
public $DBUSER_COMMENT = 'Either something as "root" or a username given by the hoster';
public $DBPASS = 'Database Password';
public $DBPASS_COMMENT = 'For your site\'s security using a password for the database account is mandatory';
public $VERIFY_DBPASS = 'Verify Database Password';
public $VERIFY_DBPASS_COMMENT = 'Retype password for verification';
public $DBPREFIX = 'Database Table Prefix';
public $DBPREFIX_COMMENT = 'Dont use "old_" since this is used for backup tables';
public $DBDROP = 'Drop Existing Tables';
public $DBBACKUP = 'Backup Old Tables';
public $DBBACKUP_COMMENT = 'Any existing backup tables from former Elxis installations will be replaced';
public $INSTALL_SAMPLE = 'Install Sample Data';
public $SAMPLEPACK = 'Sample data package';
public $SAMPLEPACKD = 'Elxis allows to specify your site content and appearence from the beginning 
	by selecting a Sample Data package that best suits your site needs. You may also select not to 
	install sample data at all (Not Reccomended).';
public $NOSAMPLE = 'None (Not recommended)';
public $DEFAULTPACK = 'Elxis Default';
public $PASS_NOTMATCH = 'The database passwords provided, do not match.';
public $CNOT_CONDB = 'Could not connect to the database.';
public $FAIL_CREATEDB = 'Failed to create database %s';
public $ENTERSITENAME = 'Please enter a Site Name';
public $STEPDB_SUCCESS = 'The previous step completed successfully. You may now continue entering your site\'s parameters.';
public $STEPDB_FAIL = 'At least one fatal error occured during the previous step. You 
	cannot continue. Please go back and correct the database settings. The Elxis 
	installer error messages follows:';
public $SITENAME_INFO = 'Type in the name for your Elxis site. This name is used in email messages so make it something meaningful.';
public $SITENAME = 'Site name';
public $SITENAME_EG = 'e.g. The Home of Elxis';
public $OFFSET = 'Offset';
public $SUGOFFSET = 'Suggested offset';
public $OFFSETDESC = 'Time difference in hours between the server and your computer. If you wish to synchronize Elxis with your local time set the appropriate offset.';
public $SERVERTIME = 'Server time';
public $LOCALTIME = 'Your local time';
public $DBINFOEMPTY = 'Database information are empty/inaccurate!';
public $SITENAME_EMPTY = 'The site name has not been provided';
public $DEFLANGUNPUB = 'The default Front-End language is unpublished!';
public $URL = 'URL';
public $PATH = 'Path';
public $URLPATH_DESC = 'If URL and Path looks correct then please do not change. If you are not sure then 
	please contact your ISP or system administrator. Usually the values displayed will work for your site.';
public $DBFILE_NOEXIST = 'Database file does not exist!';
public $ADODB_MISSES = 'Required ADOdb files are missing!';
public $SITEURL_EMPTY = 'Please enter site URL';
public $ABSPATH_EMPTY = 'Please enter the absolute path to your site';
public $PERSONAL_INFO = 'Personal information';
public $YOUREMAIL = 'Your E-mail';
public $ADMINRNAME= 'Administrator Real Name';
public $ADMINUNAME = 'Administrator Username';
public $ADMINPASS = 'Administrator Password';
public $CHANGEPROFILE = 'After installation you can login in your new site, change the above information and setup your profile.';
public $FATAL_ERRORMSGS = 'At least one fatal error occured. You can not continue. 
The Elxis installer error messages follows:';
public $EMPTYNAME = 'You must provide your real name.';
public $EMPTYPASS = 'Administrator password is empty.';
public $VALIDEMAIL = 'You must provide a valid admin e-mail address.';
public $FTPACCESS = 'FTP Access';
public $FTPINFO = 'Enabling FTP access over files solves many file-related problems with permissions. 
	If you enable FTP, Elxis will be able to write on folders/files that are unwritable by PHP. Elxis installer 
	will also be able to save the final configuration file to your site, otherwise you may have to 
	create and upload it manually.';
public $USEFTP = 'Use FTP';
public $FTPHOST = 'FTP host';
public $FTPPATH = 'FTP path';
public $FTPUSER = 'FTP user';
public $FTPPASS = 'FTP pass';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'Most probably:';
public $FTPHOST_EMPTY = 'You must provide an FTP host';
public $FTPPATH_EMPTY = 'You must provide an FTP path';
public $FTPUSER_EMPTY = 'You must provide an FTP user';
public $FTPPASS_EMPTY = 'You must provide an FTP pass';
public $FTPPORT_EMPTY = 'You must provide an FTP port';
public $FTPCONERROR = 'Could not connect to FTP host';
public $FTPUNSUPPORT = 'Your PHP settings do not support FTP connections';
public $CONFSITEDOWN = 'This site is down for maintenance.<br />Please check back again soon.';
public $CONFSITEDOWNERR = 'This site is temporarily unavailable.<br />Please notify the System Administrator';
public $CONGRATS = 'Congratulations!';
public $ELXINSTSUC = 'Elxis installed successfully in your site.';
public $THANKUSELX = 'Thank you very much for using Elxis,';
public $CREDITS = 'Credits';
public $CREDITSELXGO = 'To Ioannis Sannos (Elxis Team) for Elxis development.';
public $CREDITSELXCO = 'To Ivan Trebjesanin (Elxis Team) and Elxis Community members for their help and ideas on making Elxis better.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'To Translators for their contribution on making Elxis a CMS that respects user\'s native language.';
public $OTHERTHANK = 'To all developers who have contributed to the Open Source community and parts of their work are used in Elxis.';
public $CONFBYHAND = 'Installer could not save configuration file to your site due to permission issues. 
	You\'ll have to upload the following code by hand. Click in the textarea to highlight all the code. 
	Paste it in a php file named "configuration.php" and upload it in your Elxis root folder. 
	Attention: File must be saved as UTF-8';
public $LANG_SETTINGS = 'Elxis has a unique multilingual interface allowing you to set the default 
	Front-End and Back-End languages. Allows more than one published languages for the Front-End. 
	Note that later in Elxis administration you can set individually content items, modules etc, 
	to appear with specific languages combinations.';
public $DEF_FRONTL = 'Default Front-End language';
public $PUBL_LANGS = 'Published languages';
public $DEF_BACKL = 'Default Back-End language';
public $LANGUAGE = 'Language';
public $SELECT = 'select';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates for Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis extensions';

//elxis 2009.0
public $STEP = 'Step';
public $RESTARTCONF = 'Are you sure you wish to restart the installation?';
public $DBCONSETS = 'Database connection settings';
public $DBCONSETSD = 'Fill-in the needed information in order Elxis to connect to the database and import basic data.';
public $CONTLAYOUT = 'Content and layout';
public $TMPCONFIGF = 'Temporary configuration file';
public $TMPCONFIGFD = 'Elxis uses a temporary file to store configuration parameters during the installation procedure. 
Elxis installer must be able to write on this file. So you must either make this file writeable or enable FTP access in order 
for the installer to be able to write on it using an FTP connection.';
public $CHECKFTP = 'Check FTP settings';
public $FAILED = 'Failed';
public $SUCCESS = 'Success';
public $FTPWRONGROOT = 'Connected to FTP but given Elxis directory does not exist. Check the value of FTP Root.';
public $FTPNOELXROOT = 'Connected to FTP but given FTP Root does not contain an Elxis installation. Check the value of FTP Root.';
public $FTPSUCCESS = 'Successfull connection and detetion of Elxis installation. Your FTP settings are correct.';
public $FTPPATHD = 'The relative path from your FTP root folder to the Elxis installation without trailing slash (/).';
public $CNOTWRTMPCFG = 'Can not write to temporary configuration file (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s driver is supported by Elxis"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s driver is supported by your system"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s driver is not supported by Elxis"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s driver is not supported by your system"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s driver support by Elxis is experimental"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Static cache';
public $STATICCACHED = 'Static cache is a file caching system that stores the dynamically generated by Elxis HTML pages 
to a kind of memory. The cached pages can be recalled from the memory without the need to re-execute the PHP code or 
to re-query the database. Static cache caches whole pages instead of single HTML blocks. The usage of Static cache 
on heavy loaded web sites leads to noticeable speed improvement.';
public $SEFURLS = 'Search Engines Friendly URLs';
public $SEFURLSD = 'If enabled (highly recommended) Elxis will generate Search Engines and Human friendly URLs 
instead of the standard ones. SEO PRO URLs will boost your site\'s ranking in search engines and pages will be 
much easier to remember by your site visitors. Additionally all PHP variables will be removed from the URLs 
making your site safer against hackers.';
public $RENAMEHTACC = 'Click here to rename <strong>htaccess.txt</strong> to <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'If this fails then SEO PRO will be set to OFF regardless your setting here 
(you will be able to enable it manually later).';
public $HTACCEXIST = 'An .htaccess file already exists in Elxis root folder! You must enable SEO PRO manually.';
public $SEOPROSRVS = 'SEO PRO will work only under the following web servers:<br />
Apache, Lighttpd, or other compatible web server with mod_rewrite support.<br />
IIS with the usage of the Ionic Isapi Rewrite filter.';
public $SETSEOPROY = 'Please set SEO PRO to YES';
public $FEATENLATER = 'This feature can also be enabled later from within Elxis administration.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Template defines your web site appearance. Select the default template for your web site. 
You can change your selection afterwards or download and install additional templates.';
public $CREDITSELXWI = 'To Kostas Stathopoulos and Elxis Documentation Team for their contribution to Elxis Wiki.';
public $NOWWHAT = 'Now what?';
public $DELINSTFOL = 'Completely delete installation folder (installation/).';
public $AUTODELINSTFOL = 'Automaticaly delete installation folder.';
public $AUTODELFAILMAN = 'If this fails, then delete installation folder manually.';
public $BENGUIDESWIKI = 'Beginner\'s guides at Elxis Wiki.';
public $VISITFORUMHLP = 'Visit Elxis forum for help.';
public $VISITNEWSITE = 'Visit your new web site.';

}

?>