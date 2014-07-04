<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Kestas a.k.a. LitElxis
* @link: http://www.elxis.lt
* @email: LitElxis@gmail.com
* @description: Diegimas lietuvių kalba
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_VALID_MOS' ) or die ('Tiesioginė prieiga į šią vietą negalima.');


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'lt'; //2-letter country code 
public $LANGNAME = 'Lietuvių'; //This language, written in your language
public $CLOSE = 'Uždaryti';
public $MOVE = 'Perkelti';
public $NOTE = 'Pastaba';
public $SUGGESTIONS = 'Patarimai';
public $RESTARTINST = 'Pradėti diegimą iš naujo';
public $WRITABLE = 'Įrašoma';
public $UNWRITABLE = 'Neįrašoma';
public $HELP = 'Pagalba';
public $COMPLETED = 'Baigta';
public $PRE_INSTALLATION_CHECK = 'Patikrinimas prieš diegimą';
public $LICENSE = 'Licencija';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web diegimo priemonė';
public $DEFAULT_AGREE = 'Norint tęsti diegimą, prašome perskaityti ir sutikti su licencija';
public $ALT_ELXIS_INSTALLATION = 'Elxis diegimas';
public $DATABASE = 'Duomenų bazė';
public $SITE_NAME = 'Svetainės vardas';
public $SITE_SETTINGS = 'Svetainės nustatymai';
public $FINISH = 'Baigti';
public $NEXT = 'Kitas >>';
public $BACK = '<< Anstesnis';
public $INSTALLTEXT_01 = 'Jei kurie nors iš šių laukų yra pažymėti raudonai, prašome ištaisyti klaidas. 
	Jų neištaisius, Elxis diegimas gali būti baigtas neteisingai, o tai lemtų klaidas sistemos veikime.';
public $INSTALLTEXT_02 = 'Priešdiegiminis patikrinimas';
public $INSTALL_PHP_VERSION = 'PHP versija >= 5.0.0';
public $NO = 'Ne';
public $YES = 'Taip';
public $ZLIBSUPPORT = 'zlib suspaudimo palaikymas';
public $AVAILABLE = 'Galimas';
public $UNAVAILABLE = 'Negalimas';
public $XMLSUPPORT = 'XML palaikymas';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Galite toliau tęsti diegimą. Nustatymai bus parodyti pabaigoje, 
	tiesiog kopijuokite, įklijuokite ir įkelkite.';
public $SESSIONSAVEPATH = 'Sesijos kelias saugomas';
public $SUPPORTED_DBS = 'Palaikomos duomenų bazės';
public $SUPPORTED_DBS_INFO = 'Sąrašas duomenų bazių, kurias palaiko jūsų sistema. Atminkite, 
	kad kai kurios kitos sistemos (pvz. SQLite) taip pat gali būti palaikomos.';
public $NOTSET = 'Nenustatyta';
public $RECOMMENDEDSETTINGS = 'Rekomenduojami nustatymai';
public $RECOMMENDEDSETTINGS01 = 'Norint užtikrinti pilną suderinamumą su Elxis, PHP rekomenduojami šie nustatymai.';
public $RECOMMENDEDSETTINGS02 = 'Elxis veiks net jei Jūsų nustatymai nevisai atitinka rekomenduojamus.';
public $DIRECTIVE = 'Privalomas';
public $RECOMMENDED = 'Rekomenduojamas';
public $ACTUAL = 'Aktualus';
public $SAFEMODE = 'Saugus režimas';
public $DISPLAYERRORS = 'Klaidų rodymas';
public $FILEUPLOADS = 'Bylų įkėlimas';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Sesijos automatinis pradėjimas';
public $ALLOWURLFOPEN = 'Leisti URL bylų atidarymą (Allow URL fopen)';
public $ON = 'Įjungta(s)';
public $OFF = 'Išjungta(s)';
public $DIRFPERM = 'Katalogų ir bylų leidimai';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Turinio valdymo sistema Elxis yra Atviro kodo programa, išleista pagal GNU/GPL licenciją.';
public $INSTALL_LANG = 'Pasirinkite diegimo kalbą';
public $DISABLE_FUNC = 'Jūsų svetainės saugumui užtikrinti taip pat rekomenduojame byloje php.ini išjungti šias funkcijas (jei jų nenaudojate):';
public $FTP_NOTE = 'Jei įjungsite FTP vėliau, Elxis funkcionuos netgi tada, kai kurie iš šių katalogų turės tik skaitymo ("read-only") leidimus.';
public $OTHER_RECOM = 'Kitos rekomendacijos';
public $OUR_RECOM_ELXIS = 'Mūsų rekomendacijos gyvenimui palengvinti naudojant ar nenaudojant Elxis.';
public $SERVER_OS = 'Serverio operacinė sistema';
public $HTTP_SERVER = 'HTTP Serveris';
public $BROWSER = 'Naršyklė';
public $SCREEN_RES = 'Ekrano skiriamoji geba';
public $OR_GREATER = 'arba didesnė';
public $SHOW_HIDE = 'Rodyti/paslėpti';
public $SFMODALERT1 = 'JŪSŲ PHP VEIKIA SAUGOS REŽIME!';
public $SFMODALERT2 = 'Daugelis Elxis savybių, komponentų ir trečiųjų šalių plėtinių turi problemų leidžiami saugos režime.';
public $GNU_LICENSE = 'GNU/GPL Licencija';
public $INSTALL_TOCONTINUE = '*** Norėdami tęsti Elxis diegimą, privalote perskaityti licenciją 
	ir jeigu sutinkate, pažymėti varnele po licencijos tekstu ***';
public $UNDERSTAND_GNUGPL = 'Aš suprantu, kad ši programinė įranga yra išleista remiantis GNU/GPL licencija';
public $MSG_HOSTNAME = 'Įveskite svetainės serverio vardą';
public $MSG_DBUSERNAME = 'Įveskite duomenų bazės naudotojo vardą';
public $MSG_DBNAMEPATH = 'Įveskite duomenų bazės vardą arba kelią iki jos';
public $MSG_SURE = 'Ar esate įsitikinęs(-usi), kad šie nustatymai yra teisingi?\n Dabar Elxis pabandys užpildyti duomenų bazę, kurios duomenis nurodėte';
public $DBCONFIGURATION = 'Duomenų bazės konfigūravimas';
public $DBCONF_1 = 'Įveskite serverio, kur bus diegiamas Elxis, vardą';
public $DBCONF_2 = 'Pasirinkite duomenų bazės, kuria naudos Elxis, tipą';
public $DBCONF_3 = 'Įveskite duomenų bazės vardą arba kelią iki jos. Kad išvengtumėte problemų 
	duomenų bazę kuriant Elxis diegimo priemonei, įsitikinkite, kad duomenų bazė jau yra sukurta.';
public $DBCONF_4 = 'Įveskite Elxis naudojamų duomenų bazės lentelių priešdėlį.';
public $DBCONF_5 = 'Įveskite duomenų bazės naudotojo vardą ir slaptažodį. Įsitikinkite, kad naudotojas jau yra sukurtas ir turi visas reikalingas privilegijas.';
public $OTHER_SETTINGS = 'Kiti nustatymai';
public $DBTYPE = 'Duomenų bazės tipas';
public $DBTYPE_COMMENT = 'Paprastai "MySQL"';
public $DBNAME = 'Duomenų bazės vardas';
public $DBNAME_COMMENT = 'Kai kurios svetainių talpinimo paslaugos teikėjai svetainėms leidžia naudoti tik tam tikrus duomenų bazės pavadinimus. Tokiu atveju, skirtingoms Elxis svetainėms naudokite lentelių priešdėlius.'; 
public $DBPATH = 'Kelias iki duomenų bazės';
public $DBPATH_COMMENT = 'Kai kurių tipų duomenų bazės, tokios kaip Access, InterBase ir 
	FireBird, reikalauja nustatyti duomenų bazės bylą, o ne duomenų bazės vardą. Tokiu atveju čia 
	nurodykite kelią iki bylos. Pavyzdžiui: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Serverio vardas';
public $USLOCALHOST = 'Paprastai "localhost"';
public $DBUSER = 'Duomenų bazės naudotojo vardas';
public $DBUSER_COMMENT = 'Arba kažkas panašaus į "root", arba naudotojo vardas, suteiktas talpinimo paslaugų teikejo';
public $DBPASS = 'Duomenų bazės slaptažodis';
public $DBPASS_COMMENT = 'Slaptažodžio naudojimas prisijungimui prie MySQL DB yra privalomas svetainės saugumui užtikrinti.';
public $VERIFY_DBPASS = 'Patvirtinti duomenų bazės slaptažodį';
public $VERIFY_DBPASS_COMMENT = 'Patvirtindami pakartokite slaptažodį';
public $DBPREFIX = 'Duomenų bazės lentelės priešdėlis';
public $DBPREFIX_COMMENT = 'Nenaudokite priešdėlio "old_", kadangi jis naudojamas lentelių kopijų darymui';
public $DBDROP = 'Naikinti esamas lenteles';
public $DBBACKUP = 'Daryti senųjų lentelių kopijas';
public $DBBACKUP_COMMENT = 'Visos esamos lentelių kopijos sukurtos ankstesnių Elxis diegimų bus pakeistos.';
public $INSTALL_SAMPLE = 'Įdiegti svetainės  pavyzdžio informaciją';
public $SAMPLEPACK = 'Svetainės pavyzdžio paketas';
public $SAMPLEPACKD = 'Elxis nuo pat pradžių leidzia nurodyti jūsų svetainės turinį ir išvaizdą, 
	pasirenkant labiausiai jums tinkamo svetainės pavyzdžio duomenų paketą. Galite pasirinkti ir 
	nediegti jokio pavyzdžio (Nerekomenduojama). ';
public $NOSAMPLE = 'Nėra (Nerekomenduojama)';
public $DEFAULTPACK = 'Elxis Standartinis';
public $PASS_NOTMATCH = 'Neatitinka nurodyti duomenų bazės slaptažodžiai.';
public $CNOT_CONDB = 'Negalima prisijungti prie duomenų bazės.';
public $FAIL_CREATEDB = 'Nepavyko sukurti duomenų bazės %s';
public $ENTERSITENAME = 'Įveskite svetainės vardą';
public $STEPDB_SUCCESS = 'Prieš tai buvęs etapas sėkmingai atliktas. Dabar galite tęsti svetainės parametrų įvedimą.';
public $STEPDB_FAIL = 'Prieš tai buvusiame etape įvyko mažiausiai viena kritinė klaida. 
	Tęsti diegimo negalite. Grįžkite atgal ir ištaisykite klaidas duomenų 
	bazės nustatymuose. Įvyko tokios klaidos:';
public $SITENAME_INFO = 'Įveskite vardą savo ELxis svetainei. Šis vardas bus naudojamas el. pašto laiškuose, taigi šis vardas turėtų būti prasmingas.';
public $SITENAME = 'Svetainės vardas';
public $SITENAME_EG = 'pvz. Elxis namų svetainė';
public $OFFSET = 'Laiko skirtumas'; //! 
public $SUGOFFSET = 'Pasiūlytas laiko skirtumas';
public $OFFSETDESC = 'Laiko skirtumas valandomis tarp serverio ir jusų kompiuterio. Jei norite sinchronizuoti Elxis su savo vietiniu laiku, pasirinkite tinkamą nutolimą.';
public $SERVERTIME = 'Servero laikas';
public $LOCALTIME = 'Jūsų vietinis laikas';
public $DBINFOEMPTY = 'Duomenų bazės informacija yra neužpildyta arba netiksli!';
public $SITENAME_EMPTY = 'Neįvestas svetainės vardas';
public $DEFLANGUNPUB = 'Nepasirinkta standartinė tinklapio kalba!';
public $URL = 'URL';
public $PATH = 'Kelias';
public $URLPATH_DESC = 'Jei URL ir kelias atrodo teisingi, nieko nekeiskite. Jei nesate tikras, 
	susisiekite su savo Interneto paslaugų tiekėju. Paprastai nurodomos reikšmės veiks jūsų svetainėje.';
public $DBFILE_NOEXIST = 'Duomenų bazės byla neegzistuoja!';
public $ADODB_MISSES = 'Trūksta reikalingas ADOdb bylų!';
public $SITEURL_EMPTY = 'Įveskite svetainės URL adresą';
public $ABSPATH_EMPTY = 'Įveskite svetainės absoliutinį kelią';
public $PERSONAL_INFO = 'Asmeninė informacija';
public $YOUREMAIL = 'Jūsų el. pašto adresas';
public $ADMINRNAME= 'Tikrasis administratoriaus vardą';
public $ADMINUNAME = 'Administratoriaus prisijungimo vardas';
public $ADMINPASS = 'Administratoriaus slaptažodis';
public $CHANGEPROFILE = 'Po diegimo jūs galėsite prisijungti prie svetainės, pasikeisti visą šią informaciją ir susikurti savo asmeninį profilį.';
public $FATAL_ERRORMSGS = 'Įvyko mažiausiai viena kritinė klaida. 
	Tęsti diegimo negalite. Įvyko tokios klaidos:';
public $EMPTYNAME = 'Turite įvesti savo tikrąjį vardą.';
public $EMPTYPASS = 'Neįvestas administratoriaus slaptažodis.';
public $VALIDEMAIL = 'Privalote įvesti galiojantį administratoriaus el. pašto adresą.';
public $FTPACCESS = 'FTP prieiga';
public $FTPINFO = 'Suteikiant FTP prieigos teisę byloms išsprendžiamos daugelis su bylų leidimais susijusių problemų. 
	Jei suteiksite FTP teises, Elxis galės įrašinėti į bylas ar katalogus, į kurias PHP rašinėti neleidžia. 
	Elxis diegimo priemonė taip pat turės galimybę išsaugoti galutę svetainės nustatymų bylą. 
	Priešingu atveju jums gali tekti sukurti ir įkelti į serverį patiems.';
public $USEFTP = 'Naudoti FTP';
public $FTPHOST = 'FTP serveris';
public $FTPPATH = 'Kelias iki FTP';
public $FTPUSER = 'FTP naudotojas';
public $FTPPASS = 'FTP slaptažodis';
public $FTPPORT = 'FTP prievadas';
public $MOSTPROB = 'Labiausiai tikėtina:';
public $FTPHOST_EMPTY = 'Turite nurodyti FTP serverį';
public $FTPPATH_EMPTY = 'Turite nurodyti FTP kelią';
public $FTPUSER_EMPTY = 'Turite nurodyti FTP naudotoją';
public $FTPPASS_EMPTY = 'Turite nurodyti FTP slaptažodį';
public $FTPPORT_EMPTY = 'Turite nurodyti FTP prievadą';
public $FTPCONERROR = 'Nepavyko prisijungti prie FTP talpyklos';
public $FTPUNSUPPORT = 'Jūsų PHP nustatymai nepalaiko prisijungimo prie FTP';
public $CONFSITEDOWN = 'Svetainė uždaryta tvarkymui.<br />Užsukite kiek vėliau.';
public $CONFSITEDOWNERR = 'Svetainė laikinai nepasiekiama.<br />Informuokite svetainės administratorių';
public $CONGRATS = 'Sveikiname!';
public $ELXINSTSUC = 'Jūsų svetainėje sėkmingai įdiegta turinio valdymo sistema Elxis CMS';
public $THANKUSELX = 'Ačiū Jums, kad naudojatės Elxis,';
public $CREDITS = 'Padėka:';
public $CREDITSELXGO = 'Ioannis Sannos ir Ivan Trebjesanin už Elxis kūrimą (Elxis komanda).';
public $CREDITSELXCO = 'Elxis bendruomenei ir jos nariams už jų pagalbą ir idėjas kuriant geresnę Elxis.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Vertėjams už jų indėlį į Elxis - sistemą, kuri gerbia naudotojo gimtąją kalbą.';
public $OTHERTHANK = 'Visiems kūrėjams, kurie įnešė indėlį į Atviro kodo bendruomenę ir kurių darbo dalį naudoja Elxis.';
public $CONFBYHAND = 'Diegimo priemonė dėl leidimų nustatymo negalėjo išsaugoti jūsų svetainės nustatymų bylos. 
	Turėsite žemiau esantį programinį kodą įkelti rankiniu būdu. Spragtelkite ant tekstinio lauko ir pažymėkite visą kodą.
	Nukopijuokite jį į php bylą, pavadintą "configuration.php" ir įkelkite jį į savo Elxis šakninį katalogą. 
	Dėmesio: Byla turi būti išsaugota UTF-8 formatu.'; 
public $LANG_SETTINGS = 'Elxis turi unikalią daugiakalbę sąsają su naudotoju leidžiančią pasirinkti nustatytąją 
	kalbą tiek sistemos administravimui, tiek pačiai svetainei, taip pat daugiau nei vieną svetainės kalbą, kuria 
	pateikiama informacija. Prisiminkite, kad naudodamiesi Elxis administravimo priemone, vėliau galėsite nustatyti 
	rodomų individualių turinio elementų, modulių ir kalbų kombinacijas.';
public $DEF_FRONTL = 'Nustatytoji tinklapio kalba';
public $PUBL_LANGS = 'Publikavimo kalbos';
public $DEF_BACKL = 'Nustatytoji administravimo kalba';
public $LANGUAGE = 'Kalba';
public $SELECT = 'pasirinkti';
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