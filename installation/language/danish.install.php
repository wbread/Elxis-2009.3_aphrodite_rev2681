<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Kenneth Kristiansen
* @link: http://www.lystfiskerfreak.dk
* @email: info@lystfiskerfreak.dk
* @description: Danish installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Direkte adgang til denne lokation er ikke tilladt.' );


class iLanguage {

public $RTL = 0; // 1 for højre mod venstre-sprog (som persisk / farsi)
public $ISO = 'UTF-8'; // Brug kun utf-8!
public $XMLLANG = 'da'; // 2-bogstavs landekode
public $LANGNAME = 'Dansk'; // Dette sprog er skrevet på dit sprog
public $CLOSE = 'Luk';
public $MOVE = 'Flyt';
public $NOTE = 'Note';
public $SUGGESTIONS = 'forslag';
public $RESTARTINST = 'Genstart installationen';
public $WRITABLE = 'Skrivbart';
public $UNWRITABLE = 'Skrivebeskyttet';
public $HELP = 'Hjælp';
public $COMPLETED = 'Afsluttet';
public $PRE_INSTALLATION_CHECK = 'Pre-installation check';
public $LICENSE = 'Licens';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Installer';
public $DEFAULT_AGREE = 'Læs/acceptere licensen for at fortsætte installationen';
public $ALT_ELXIS_INSTALLATION = 'Elxis Installation';
public $DATABASE = 'Database';
public $SITE_NAME = 'Webstedets navn';
public $SITE_SETTINGS = 'Webstedets indstillinger';
public $FINISH = 'Udfør';
public $NEXT = 'Næste >>';
public $BACK = '<< Tilbage';
public $INSTALLTEXT_01 = 'Hvis nogen af disse punkter er fremhævet med rødt, så skal du tage affære
 og få rettet dem. I modsat fald kan det føre til at din Elxis installation ikke fungerer korrekt.';
public $INSTALLTEXT_02 = 'Pre-installation check til';
public $INSTALL_PHP_VERSION = 'PHP version > = 5.0.0';
public $NO = 'Nej';
public $YES = 'Ja';
public $ZLIBSUPPORT = 'zlib komprimerings understøttelse';
public $AVAILABLE = 'Tilgængelige';
public $UNAVAILABLE = 'Ikke tilgængelig';
public $XMLSUPPORT = 'xml understøttelse';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Du kan stadig fortsætte med installationen. Konfigurationen vil blive vist senere.
     Du skal blot kopiere og indsætte denne tekst og derefter overføre filen. ';
public $SESSIONSAVEPATH = 'Session gemme sti';
public $SUPPORTED_DBS = 'Understøttede databaser';
public $SUPPORTED_DBS_INFO = 'liste over understøttede databaser ved dit system. Bemærk, at nogle 
andre måske kan også være til rådighed (som f.eks SQLite).';
public $NOTSET = 'Ikke indstillet';
public $RECOMMENDEDSETTINGS = 'Anbefalet indstillinger';
public $RECOMMENDEDSETTINGS01 = 'Disse indstillinger er anbefalet for PHP, for at sikre fuld kompatibilitet med Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Men Elxis vil stadig fungere, hvis dine indstillinger ikke helt matcher det anbefalede';
public $DIRECTIVE = 'direktiv';
public $RECOMMENDED = 'Anbefalet';
public $ACTUAL = 'Faktisk';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Vis Fejl';
public $FILEUPLOADS = 'Fil Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Registrer Globals';
public $OUTPUTBUFFERING = 'Output buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Tillad URL fopen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Mappe og Fil Tilladelser';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS is a Free Software released under the GNU/GPL license.';
public $INSTALL_LANG = 'Vælg installation sprog';
public $DISABLE_FUNC = 'Til dit websteds sikkerhed vil vi også anbefale dig at deaktivere disse PHP funktioner i php.ini (hvis du ikke bruger dem):';
public $FTP_NOTE = 'Hvis du aktiverer FTP senere, Elxis vil være funktionel, selvom nogle af disse mapper er skrivebeskyttet.';
public $OTHER_RECOM = 'Andre anbefalinger';
public $OUR_RECOM_ELXIS = 'Vores anbefalinger til at gøre dit liv nemmere med eller uden Elxis.';
public $SERVER_OS = 'Server OS';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Skærmopløsning';
public $OR_GREATER = 'eller større';
public $SHOW_HIDE = 'Vis/Skjul';
public $SFMODALERT1 = 'Din PHP er kører under fejlsikret tilstand! ';
public $SFMODALERT2 = 'Mange Elxis funktioner, komponenter og tredjemand udvidelser har problemer med at køre i fejlsikret tilstand.';
public $GNU_LICENSE = 'GNU/GPL Licensen';
public $INSTALL_TOCONTINUE = '*** for at fortsætte installationen af Elxis bør du læse Elxis licens
og hvis du er enig afkrydse feltet under licensen ***';
public $UNDERSTAND_GNUGPL = 'Jeg kan forstå, at denne software er udgivet under GNU/GPL License';
public $MSG_HOSTNAME = 'Angiv et værtsnavn';
public $MSG_DBUSERNAME = 'Angiv et Database Brugernavn';
public $MSG_DBNAMEPATH = 'Angiv databasen eller stien';
public $MSG_SURE = 'Er du sikker på, at disse indstillinger er korrekte? \n Elxis vil nu forsøge at fylde databasen med de indstillinger, du har leveret ';
public $DBCONFIGURATION = 'Database konfiguration';
public $DBCONF_1 = 'Angiv værtsnavnet på den server Elxis skal  installeres på';
public $DBCONF_2 = 'Vælg den type af den database, du vil have Elxis skal bruge';
public $DBCONF_3 = 'Indtast databasens navn. For at undgå problemer med oprettelse af databasen med
Elxis installationen - sørg da for at databasen eksisterer.';
public $DBCONF_4 = 'Indtast tabel navn prefix der skal anvendes af denne Elxis instans.';
public $DBCONF_5 = 'Indtast database brugernavn og adgangskode. Sørg for brugeren allerede eksisterer og har alle de nødvendige rettigheder.';
public $OTHER_SETTINGS = 'Andre indstillinger';
public $DBTYPE = 'Database type';
public $DBTYPE_COMMENT = 'Normalt "MySQL"';
public $DBNAME = 'Database navn';
public $DBNAME_COMMENT = 'Nogle webhoteller tillader kun et bestemt DB navn pr websted. Brug tabel præfik i dette tilfælde for at adskille flere Elxis websteder.';
public $DBPATH = 'Database Sti';
public $DBPATH_COMMENT = 'Nogle typer af databaser, såsom Access, InterBase og Firebird,
kræver at fastsætte en database fil i stedet for en database navn. I dette tilfælde bedes du skrive stien til denne fil
her. Eksempel: /opt/Firebird/eksempler/elxisdatabase.fdb ';
public $HOSTNAME = 'Host navn';
public $USLOCALHOST = 'Normalt "localhost"';
public $DBUSER = 'Database Brugernavn';
public $DBUSER_COMMENT = 'Enten noget som "root" eller et brugernavn, som webhotellet levere';
public $DBPASS = 'Database Kodeord';
public $DBPASS_COMMENT = 'Til dit websteds sikkerhed. En adgangskode til mysql kontoen er obligatorisk ';
public $VERIFY_DBPASS = 'Bekræft Database Kodeord';
public $VERIFY_DBPASS_COMMENT = 'Gentag adgangskode til verifikation';
public $DBPREFIX = 'Database Tabel Præfiks';
public $DBPREFIX_COMMENT = 'Brug dog IKKE "old_", da dette anvendes til backup tabeller';
public $DBDROP = 'Drop eksisterende tabeller';
public $DBBACKUP = 'Backup gamle Tabeller';
public $DBBACKUP_COMMENT = 'Ethvert eksisterende backup tabeller fra tidligere Elxis installationer vil blive erstattet';
public $INSTALL_SAMPLE = 'Installér demo Data';
public $SAMPLEPACK = 'Demo data pakke';
public $SAMPLEPACKD = 'Elxis gør det muligt at angive dit websted indhold og udseende fra begyndelsen
ved at vælge en demo Data pakke, der passer bedst til dit websteds behov. Du kan også vælge ikke at
installere demo data overhovedet (ikke anbefalet).';
public $NOSAMPLE = 'Ingen (anbefales ikke)';
public $DEFAULTPACK = 'Elxis Standard';
public $PASS_NOTMATCH = 'database passwords, stemmer ikke overens. ';
public $CNOT_CONDB = 'Kunne ikke forbinde til databasen.';
public $FAIL_CREATEDB = 'Kunne ikke oprette databasen %s';
public $ENTERSITENAME = 'Angiv et websted navn';
public $STEPDB_SUCCESS = 'Forrige trin er fuldført. Du kan nu fortsætte med at indtaste dit websteds indstillinger.';
public $STEPDB_FAIL = 'Mindst en fatal fejl i det foregående trin. Du
kan ikke fortsætte. Gå tilbage og rette databasen indstillinger. De Elxis
Installationsprogrammet fejlmeddelelser følger: ';
public $SITENAME_INFO = 'Indtast navnet for din Elxis websted. Dette navn bruges i e-mail-meddelelser, så gør det noget meningsfyldt.';
public $SITENAME = 'Webstedets navn';
public $SITENAME_EG = 'f.eks Hjemmet for Elxis';
public $OFFSET = 'Forskudt';
public $SUGOFFSET = 'Foreslåede forskydning';
public $OFFSETDESC = 'Tid forskel i timer mellem serveren og din computer. Hvis du ønsker at synkronisere Elxis med din lokale tid fastsættes passende forskydning.';
public $SERVERTIME = 'Server tid';
public $LOCALTIME = 'Din lokale tid';
public $DBINFOEMPTY = 'Database oplysninger er tomme/unøjagtige!';
public $SITENAME_EMPTY = 'Websted navn er ikke angivet';
public $DEFLANGUNPUB = 'Standard Front-End sprog er ikke publiceret!';
public $URL = 'URL';
public $PATH = 'Sti';
public $URLPATH_DESC = 'Hvis URL og sti ser korrekte så undlad venligst at ændre det. Hvis du ikke er sikker bedes
du kontakte din internetudbyder eller systemadministrator. Normalt vil de viste værdier fungere for dit websted.';
public $DBFILE_NOEXIST = 'Database fil eksisterer ikke!';
public $ADODB_MISSES = 'Påkrævet adodb filer mangler!';
public $SITEURL_EMPTY = 'Angiv webstedets webadresse';
public $ABSPATH_EMPTY = 'Angiv den absolutte sti til dit websted';
public $PERSONAL_INFO = 'Personlige oplysninger';
public $YOUREMAIL = 'Din E-mail';
public $ADMINRNAME = 'Administrator rigtige navn';
public $ADMINUNAME = 'Administrator Brugernavn';
public $ADMINPASS = 'Administrator Kodeord';
public $CHANGEPROFILE = 'Efter installationen kan du logge ind på dit nye websted, ændre ovenstående oplysninger og opsætning af din profil.';
public $FATAL_ERRORMSGS = 'Mindst en fatal fejl. Du kan ikke fortsætte.
Elxis installationsprogram fejlmeddelelser følger:';
public $EMPTYNAME = 'Du skal angive dit rigtige navn.';
public $EMPTYPASS = 'Administrator adgangskode er tom.';
public $VALIDEMAIL = 'Du skal angive en gyldig admin e-mail adresse.';
public $FTPACCESS = 'FTP-adgang';
public $FTPINFO = 'Aktivering af FTP adgang kan løse mange fil-relaterede problemer med tilladelser.
Hvis du aktiverer FTP, Elxis vil være i stand til at skrive til mapper/filer, der er skrivebeskyttet af PHP. Elxis installationen
vil også være i stand til at gemme den endelige konfigurationsfil til dit websted. Ellers skal du måske
oprette og uploade den manuelt.';
public $USEFTP = 'Brug FTP';
public $FTPHOST = 'FTP vært';
public $FTPPATH = 'FTP sti';
public $FTPUSER = 'FTP bruger';
public $FTPPASS = 'FTP pass';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'Sandsynligvis:';
public $FTPHOST_EMPTY = 'Du skal angive en FTP vært';
public $FTPPATH_EMPTY = 'Du skal angive en FTP sti';
public $FTPUSER_EMPTY = 'Du skal angive en FTP bruger';
public $FTPPASS_EMPTY = 'Du skal angive en FTP pass';
public $FTPPORT_EMPTY = 'Du skal angive en FTP port';
public $FTPCONERROR = 'Kunne ikke forbinde til FTP vært';
public $FTPUNSUPPORT = 'Dine PHP indstillinger understøtter ikke FTP forbindelser';
public $CONFSITEDOWN = 'Dette websted er nede til vedligeholdelse. <br /> Kig venligst forbi senere.';
public $CONFSITEDOWNERR = 'Dette websted er midlertidigt ude af drift. <br /> venligst meddele System Administrator';
public $CONGRATS = 'Tillykke!';
public $ELXINSTSUC = 'Elxis installeret korrekt på dit websted.';
public $THANKUSELX = 'Mange tak fordi du valgte at bruge Elxis,';
public $CREDITS = 'Credits';
public $CREDITSELXGO = 'Til Ioannis Sannos (Elxis Team) for Elxis udvikling.';
public $CREDITSELXCO = 'Til Ivan Trebjesanin (Elxis Team) og Elxis EF-medlemmerne for deres hjælp og idéer om at gøre Elxis bedre.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Til Oversættere for deres bidrag på at gøre Elxis en CMS, der respekterer brugerens eget sprog.';
public $OTHERTHANK = 'Til alle udviklere der har bidraget til open source og dele af deres arbejde anvendes i Elxis.';
public $CONFBYHAND = 'Installationen kunne ikke gemme konfigurationsfil til dit websted på grund af manglene tilladelse.
Du må uploade følgende kode i hånden. Klik i textarea for fremhæve alt teksten.
Sæt det i en php fil med navnet "configuration.php" og uploade den til din Elxis rodmappen.
OBS: Filen skal gemmes som UTF-8';
public $LANG_SETTINGS = 'Elxis har en unik flersproget grænseflade, der giver dig mulighed for at sætte standard
Front-End og back-end-sprog. Giver mulighed for mere end én offentliggjort sprog for Front-End.
Bemærk, at senere i Elxis administration kan du indstille enkeltvis indholdselementer, moduler osv,
at fremkomme med specifikke sprog kombinationer. ';
public $DEF_FRONTL = 'Standard Front-End sprog';
public $PUBL_LANGS = 'Udgivet sprog';
public $DEF_BACKL = 'Standard Back-End sprog';
public $LANGUAGE = 'Sprog';
public $SELECT = 'Vælg';
public $TEMPLATES = 'Skabeloner';
public $TEMPLATESTITLE = 'Skabeloner for Elxis CMS';
public $DOWNLOADS = 'Download';
public $DOWNLOADSTITLE = 'Download Elxis udvidelser';

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