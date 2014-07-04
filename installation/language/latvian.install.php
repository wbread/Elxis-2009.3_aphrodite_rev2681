<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: NEOXID
* @link: http://www.elxis.org
* @email: neoxid@tvnet.lv
* @description: Latvian installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Tieša pieslēgšanās pie šīs lapas ir aizliegta.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'lv'; //2-letter country code 
public $LANGNAME = 'LAtvian'; //This language, written in your language
public $CLOSE = 'Aizvērt';
public $MOVE = 'Pārvietot';
public $NOTE = 'Piezīme';
public $SUGGESTIONS = 'Ierosinājumi';
public $RESTARTINST = 'Atkārtoti uzstādīt';
public $WRITABLE = 'Ierakstāms';
public $UNWRITABLE = 'Neierakstāms';
public $HELP = 'Palīdzēt';
public $COMPLETED = 'Pabeigts';
public $PRE_INSTALLATION_CHECK = 'Pirms uzstādīšanas pārbaude';
public $LICENSE = 'Licenze';
public $ELXIS_WEB_INSTALLER = 'Elxis - Tīkla Uzstādītājs';
public $DEFAULT_AGREE = 'Lūdzu izlasiet/akceptējiet licenzi lai turpinātu uzstādīšanu';
public $ALT_ELXIS_INSTALLATION = 'Elxis Uzstādīšana';
public $DATABASE = 'Datubāze';
public $SITE_NAME = 'Vietas vārds';
public $SITE_SETTINGS = 'Vietas uzstādīšana';
public $FINISH = 'Pabeidzu';
public $NEXT = 'Tālāk >>';
public $BACK = '<< Atpakaļ';
public $INSTALLTEXT_01 = 'Ja kāda no lietām ir izgaismota sarkanā krāsā, tad lūdzu izlabojiet to.
	Neizdarot to var novest pie nekorekti funkcionējoša Elxis.';
public $INSTALLTEXT_02 = 'Pirms uzstādīšanas pārbaude pēc';
public $INSTALL_PHP_VERSION = 'PHP versija >= 5.0.0';
public $NO = 'Nē';
public $YES = 'Jā';
public $ZLIBSUPPORT = 'zlib kompresijas atbalsts';
public $AVAILABLE = 'Pieejams';
public $UNAVAILABLE = 'Nepieejams';
public $XMLSUPPORT = 'xml atbalsts';
public $CONFIGURATION_PHP = 'konfigurācija.php';
public $INSTALLTEXT_03 = 'Jūs vēl varat turpināt uzstādīšanu, sakarā ar to, ka konfigurācijas fails
	tiks parādīts beigās, vienkārši nokopējiet un ielīmējiet šo un augšupielādējiet.';
public $SESSIONSAVEPATH = 'Sesijas saglabāšanas ceļš';
public $SUPPORTED_DBS = 'Datubāzes atbalsts';
public $SUPPORTED_DBS_INFO = 'Saraksts ar jūsu sistēmas atbalstāmajām datubāzēm. Piezīme: Ir iespēja, ka
	citas arī ir pieejamas (kā piemēram SQLite).';
public $NOTSET = 'Nav uzstādīts';
public $RECOMMENDEDSETTINGS = 'Ieteicamie uzstādījumi';
public $RECOMMENDEDSETTINGS01 = 'Šie uzstādījumi ir ieteicami PHP lai būtu pilnīga saderība ar Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Bet, Elxis vienalga var strādāt ja uzstādījumi pilnībā neatbilst ieteicamajiem';
public $DIRECTIVE = 'Direktīva';
public $RECOMMENDED = 'Ieteicams';
public $ACTUAL = 'Reāli';
public $SAFEMODE = 'Drošā Vide';
public $DISPLAYERRORS = 'Parādīt Kļūdas';
public $FILEUPLOADS = 'Faila Augšupielāde';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Globālie Reģistri';
public $OUTPUTBUFFERING = 'Izvades Buferis';
public $SESSIONAUTO = 'Sesijas auto starts';
public $ALLOWURLFOPEN = 'Atļaut vietrādim fopen';
public $ON = 'Ieslēgt';
public $OFF = 'Izslēgt';
public $DIRFPERM = 'Failu kataloga un Failu Atļaujas';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS ir bezmaksas programmatūra zem GNU/GPL licenzes.';
public $INSTALL_LANG = 'Atzīmējiet uzstādīšanas valodu';
public $DISABLE_FUNC = 'Jūsu vietas drošībai mēs iesakam jums atslēgt iekš php.ini (ja jums nav vajadzīgs) šādas PHP funkcijas:';
public $FTP_NOTE = 'Ja jūs ieslēgt FTP vēlāk, Elxis būs funkcionāls pat tad, ja daži no šiem failu katalogiem būs read-only.';
public $OTHER_RECOM = 'Citas Rekomedācijas';
public $OUR_RECOM_ELXIS = 'Mūsu rekomendācijas lai veidotu jūsu dzīvi vieglāku ar vai bez Elxis.';
public $SERVER_OS = 'Servera OS';
public $HTTP_SERVER = 'HTTP Serveris';
public $BROWSER = 'Pārlūkprogramma';
public $SCREEN_RES = 'Ekrāna izšķirtspēja';
public $OR_GREATER = 'vai lielāks';
public $SHOW_HIDE = 'Parādīt/Paslēpt';
public $SFMODALERT1 = 'JŪSU PHP IR PALAISTS ZEM DROŠĀS VIDES!';
public $SFMODALERT2 = 'Daudzas Elxis iespējas, komponentes un trešo pušu paplašinājumi var radīt problēmas esot zem drošās vides.';
public $GNU_LICENSE = 'GNU/GPL Licenze';
public $INSTALL_TOCONTINUE = '*** Lai turpinātu uzstādīt Elxis jums jāizlasa Elxis licenze 
	un ja jūs akceptējiet tad atzīmējiet kastīti zzem licenzes ***';
public $UNDERSTAND_GNUGPL = 'Es saprotu ka šī programmatūra ir izlaista zem GNU/GPL Licenzes';
public $MSG_HOSTNAME = 'Lūdzu ievadiet Please enter a Saimniekdatora nosaukums';
public $MSG_DBUSERNAME = 'Lūdzu ievadiet Datubāzes Lietotājvārdu';
public $MSG_DBNAMEPATH = 'Lūdzu ievadiet datubāzes nosaukumu vai Ceļu';
public $MSG_SURE = 'Vai jūs esat pārliecināti par pareiziem uzstādījumiem? \n Elxis mēģinās aizpildīt Datubāzi ar uzstādījumiem kurus jūs norādījāt';
public $DBCONFIGURATION = 'Datubāzes uzstādījumi';
public $DBCONF_1 = 'Lūdzu ievadiet Saimniekdatora nosaukumu uz kura tiks uzstādīts Elxis';
public $DBCONF_2 = 'Atzīmējiet tipu kādu lai Elxis datubāze izmanto';
public $DBCONF_3 = 'Ievadiet datubāzes nosaukumu vai ceļu. Lai izvairītos no problēmām Elxis uzstādīšanas datubāzes 
	izveidošanā pārliecinieties ka datubāze jau eksistē.';
public $DBCONF_4 = 'Ievadiet tabulu prefiksu, kurš tiks izmantots visām Elxis instancēm.';
public $DBCONF_5 = 'Ievadiet datubāzes lietotājvārdu un paroli. Pārliecinieties ka lietotājs jau eksistē un viņam ir visas nepieciešamās privilēģijas.';
public $OTHER_SETTINGS = 'Citi uzstādījumi';
public $DBTYPE = 'Datubāzes tips';
public $DBTYPE_COMMENT = 'Parasti "MySQL"';
public $DBNAME = 'Datubāzes vārds';
public $DBNAME_COMMENT = 'Daži resursdatori atļauj tikai dažus DB vārdus uz vietnes. Izmanto tabulas prefiksu šajā gadījumā priekš skaidras Elxis vietnēm.'; 
public $DBPATH = 'Datubāzes Ceļš';
public $DBPATH_COMMENT = 'Daži datubāžu tipi, kā piemēram Access, InterBase un FireBird, 
	pieprasa datubāzes failu nevis datubāzes vārdu. Šajā gadījumā ierakstiet šeit
	ceļu uz šo failu. Piemēram: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'saimniekdatora nosaukums';
public $USLOCALHOST = 'Parasti "localhost"';
public $DBUSER = 'Datubāzes Lietotājvārds';
public $DBUSER_COMMENT = 'Vai nu kaut ko līdzīgu "root" vai lietotājvārdu kuru jums iedeva';
public $DBPASS = 'Datubāzes Parole';
public $DBPASS_COMMENT = 'Vietnes drošības labad izmantojiet paroli priekš obligātajam kontam';
public $VERIFY_DBPASS = 'Pārbaudiet Datubāzes Paroli';
public $VERIFY_DBPASS_COMMENT = 'Vēlreiz ievadiet paroli pārbaudei';
public $DBPREFIX = 'Datubāzes Tabulu Prefikss';
public $DBPREFIX_COMMENT = 'Neizmanojiet "old_" sakarā ar to, ka šis tiek iezmantots priekš tabulu dublējumam';
public $DBDROP = 'Nomest Eksistējošas Tabulas';
public $DBBACKUP = 'Dublēt Vecās Tabulas';
public $DBBACKUP_COMMENT = 'Jebkura eksistējošs dublējums tiks aizvietots ar jaunajiem dublējumiem';
public $INSTALL_SAMPLE = 'Uzstādīt Piemērdatus';
public $SAMPLEPACK = 'Datu saiņu piemēri';
public $SAMPLEPACKD = 'Elxis atļauj jums norādīt vietnes saturu un izskatu no paša sākuma 
	atzīmējos vissaderīgāko jūsu vietnes Datu saiņu Piemēriem. Jūs varat arī atzīmēt neuzstādīt 
	piemērdatus vispār (Nav Ieteicams).';
public $NOSAMPLE = 'Neko (Nav Ieteicams)';
public $DEFAULTPACK = 'Elxis Noklusējums';
public $PASS_NOTMATCH = 'Datubāzes paroles nesakrīt.';
public $CNOT_CONDB = 'Nevarēja pieslēgties pie datubāzes.';
public $FAIL_CREATEDB = 'Neizdevās izveidot datubāzi %s';
public $ENTERSITENAME = 'Lūdzu ievadiet Vietas Nosaukumu';
public $STEPDB_SUCCESS = 'Iepriekšējais solis ir pabeigts veiksmīgi. Jūs varat turpināt ievadīt jūsu vietas parametrus.';
public $STEPDB_FAIL = 'Vismaz viena fatāla kļūda parādījās iepriekšējajā solī. Jūs 
	nevarat turpināt. Lūdzu atgriezieties un izlabojiet datubāzes uzstādījumus. Elxis 
	uzstādīšanas kļūdu paziņojumi turpinājumā:';
public $SITENAME_INFO = 'Ievadiet Elxis vietnes vārdu. Šis vārds tiks izmantots email vēstulēs, tapēc izdomājiet kautko labskanīgu.';
public $SITENAME = 'Vietnes vārds';
public $SITENAME_EG = 'piem. Elxis mājas';
public $OFFSET = 'Nobīde';
public $SUGOFFSET = 'Ieteicamā nobīde';
public $OFFSETDESC = 'Laika atšķirība stundās starp serveri un jūsu datoru. Ja jūs vēlaties sinhronizēt Elxis ar jūsu lokālo laiku iestatiet attiecīgo nobīdi.';
public $SERVERTIME = 'Servera laiks';
public $LOCALTIME = 'Jūsu lokālais laiks';
public $DBINFOEMPTY = 'Datubāzes informācija ir tukša/nepareiza!';
public $SITENAME_EMPTY = 'Šī vietne nav The site name has not been apgādāta';
public $DEFLANGUNPUB = 'Noklusētā priekšpuse ir nepublicēta!';
public $URL = 'URL';
public $PATH = 'Ceļš';
public $URLPATH_DESC = 'Ja URL un Ceļš izskatās korekta tad lūdzu nemainiet to. Ja jūs neesat pārliecināti, tad 
	lūdzu kontaktējieties ar jūsu ISO vai administratoru. Parasti vērtības tik parādītas ar kurām jūsu vietne strādās.';
public $DBFILE_NOEXIST = 'Datubāzes faile neeksistē!';
public $ADODB_MISSES = 'Nepieciešamais ADOdb fails trūkst!';
public $SITEURL_EMPTY = 'Lūdzu ievadiet vietnes URL';
public $ABSPATH_EMPTY = 'Lūdzu ievadiet absolūto ceļu uz jūsu vietni';
public $PERSONAL_INFO = 'Personīgā informācija';
public $YOUREMAIL = 'Jūsu E-pasts';
public $ADMINRNAME= 'Administratora Īstais Vārds';
public $ADMINUNAME = 'Administratora Lietotājvārds';
public $ADMINPASS = 'Administratora Parole';
public $CHANGEPROFILE = 'Pēc uzstādīšanas jūs varat pieslēgtgies jūsu jaunajai vietnei, izmainīt augstākminēto informāciju un uzstādīt jūsu profilu.';
public $FATAL_ERRORMSGS = 'Vismaz viena fatāla kļūda parādījās. Jūs nevarat turpināt. 
Elxis uzstādītāja kļūdu paziņojums seko:';
public $EMPTYNAME = 'Jums jānorāda jūsu īstais vārds.';
public $EMPTYPASS = 'Administratora parole ir tukša.';
public $VALIDEMAIL = 'Jums jānorāda derīga administratora e-pasta adrese.';
public $FTPACCESS = 'FTP Piekļuve';
public $FTPINFO = 'Ieslēdzot FTP piekļuvi pār failie, atrisina daudzas ar failiem saistītās problēmas ar atļaujām. 
	Ja jūs ieslēdzat FTP Elxis būs iespēja ierakstīt failu katalogos/failos, kuros nevar ierakstīt dēļ. Elxis uzstādīšana
	arī būs iespēja saglabāt pēdējos uzstādījuma failu un jūsu vietni, citā gadījumā jums iespējams
	vajadzēs izveidot un augšupielādēt manuāli.';
public $USEFTP = 'Izmantot FTP';
public $FTPHOST = 'FTP resursdators';
public $FTPPATH = 'FTP ceļš';
public $FTPUSER = 'FTP lietotājs';
public $FTPPASS = 'FTP parole';
public $FTPPORT = 'FTP osta';
public $MOSTPROB = 'Visticamākais:';
public $FTPHOST_EMPTY = 'Jums jānorāda FTP resursdators';
public $FTPPATH_EMPTY = 'Jums jānorāda FTP ceļš';
public $FTPUSER_EMPTY = 'Jums jānorāda FTP lietotājs';
public $FTPPASS_EMPTY = 'Jums jānorāda FTP parole';
public $FTPPORT_EMPTY = 'Jums jānorāda FTP osta';
public $FTPCONERROR = 'Nevarēja pieslēgties FTP resursdatoram';
public $FTPUNSUPPORT = 'Jūsu PHP uzstādījumi neatbalsta FTP pieslēgšanos';
public $CONFSITEDOWN = 'Šī vietne pašlaik nestrādā.<br />Lūdzu pārbaudiet vēlāk.';
public $CONFSITEDOWNERR = 'Šī vietneir nesasniedzama.<br />Lūdzu pabrīdiniet Sistēmas Administratoru';
public $CONGRATS = 'Apsveicam!';
public $ELXINSTSUC = 'Elxis uzstādīts veiksmīgi jūsu vietnē.';
public $THANKUSELX = 'Liels paldies ka izmantojat Elxis,';
public $CREDITS = 'Pateicamies';
public $CREDITSELXGO = 'Ioannis Sannos (Elxis Team) par Elxis izstādāšanu.';
public $CREDITSELXCO = 'Elxis Sabiedrības locekļiem par palīdzību un idejām izveidot labāku Elxis.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Tulkotājiem par viņu palīdzību izveidot Elxis CMS respektu lietotāju dzimtajā valodā.';
public $OTHERTHANK = 'Visiem izstrādātājiem kuri ieguldījumu atvērto kodu savienībā un Elxis izmantošanai darbā.';
public $CONFBYHAND = 'Uzstādītājs nevarēja saglabāt konfigurācijas failu jūsu vietnē sakarā ar to ka ir pārāk man tiesības. 
	Jums nāksies augšupielādēt sekojošo kodu no rokas. Ieklikšķiniet tekstalaukā lai izgaismotu visu kodu. 
	Iekopējiete to php failā ar nosaukumu "configuration.php" un augšupielādējiet to jūsu Elxis pamatfailu katalogā. 
	Uzmanību: Failam jābūt saglabātam kā UTF-8';
public $LANG_SETTINGS = 'Elxis ir unikāls daudzvalodu interfeiss, kas atļauj jums uzstādīt pēc noklusējuma 
	valodas, kā arī vairāk kā vienu publicēto tekstu valodas parastajiem lietotājiem. 
	Piezīme ka vēlāk Elxis administrācijā jūs varat individuāli uzstādīt satura lietas, moduļus utt. 
	lai parādītos ar specifisku valodu kombināciju.';
public $DEF_FRONTL = 'Noklusētā parasto lietotāju valoda';
public $PUBL_LANGS = 'Publicētās valodas';
public $DEF_BACKL = 'Noklusētā advancēto lietotāju valoda';
public $LANGUAGE = 'Valoda';
public $SELECT = 'atzīmēt';
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