<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Radulescu Mihai
* @link: http://www.news-blitz.ro
* @email: rad.misu@gmail.com
* @description: Traducerea in Romana a Elxis
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Accesul la aceasta sectiune e interzis.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'ro'; //2-letter country code 
public $LANGNAME = 'Romana'; //This language, written in your language
public $CLOSE = 'Inchide';
public $MOVE = 'Muta';
public $NOTE = 'Nota';
public $SUGGESTIONS = 'Sugestii';
public $RESTARTINST = 'Reporneste instalarea';
public $WRITABLE = 'Inscriptibil';
public $UNWRITABLE = 'Neinscriptibil';
public $HELP = 'Ajutor';
public $COMPLETED = 'Complet';
public $PRE_INSTALLATION_CHECK = 'Verificare pre-instalare';
public $LICENSE = 'Licenta';
public $ELXIS_WEB_INSTALLER = 'Elxis - Instalare';
public $DEFAULT_AGREE = 'Citeste/accepta licenta pentru a putea continua';
public $ALT_ELXIS_INSTALLATION = 'Instalare Elxis';
public $DATABASE = 'Baza de date';
public $SITE_NAME = 'Nume site';
public $SITE_SETTINGS = 'Setari Site';
public $FINISH = 'Sfarsit';
public $NEXT = 'Urmator >>';
public $BACK = '<< Precedent';
public $INSTALLTEXT_01 = 'Daca unul dintre aceste elemente sunt prezentate in rosu 
	corecteaza-le. Fara acest lucru Elxis s-ar putea sa nu functioneze normal.';
public $INSTALLTEXT_02 = 'Verificare pre-instalare';
public $INSTALL_PHP_VERSION = 'Versiune PHP >= 5.0.0';
public $NO = 'Da';
public $YES = 'Nu';
public $ZLIBSUPPORT = 'compresie zlib';
public $AVAILABLE = 'Disponibil';
public $UNAVAILABLE = 'Nedisponibil';
public $XMLSUPPORT = 'suport xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Inca ma poti continua instalare pentru ca configuratia va fi afisata la sfarsit, 
doar copy si paste apoi upload.';
public $SESSIONSAVEPATH = 'Session save path';
public $SUPPORTED_DBS = 'Baze de date suportate';
public $SUPPORTED_DBS_INFO = 'Lista bazelor de date suportate de sistemul tau. Altele ar mai putea fi disponibile 
	 (ca SQLite).';
public $NOTSET = 'Nesetat';
public $RECOMMENDEDSETTINGS = 'Setari recomandate';
public $RECOMMENDEDSETTINGS01 = 'Aceste setari sunt recomandate pentru PHP pentru ca acesta sa fie compatibil cu Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Chiar si asa, Elxis va functiona chiar daca setarile dvs. nu sunt cele recomandate';
public $DIRECTIVE = 'Directiva';
public $RECOMMENDED = 'Recomandat';
public $ACTUAL = 'Actual';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Arata erori';
public $FILEUPLOADS = 'Upload Fisiere';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'Pornit';
public $OFF = 'Oprit';
public $DIRFPERM = 'Director si permisiuni fisiere';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS este un software liber eliberat sub licenta GNU/GPL.';
public $INSTALL_LANG = 'Alege limba de instalare';
public $DISABLE_FUNC = 'Pentru securitatea site-ului tau iti recomandam sa dezactivezi in php.ini (daca nu le folosesti) aceste functii PHP:';
public $FTP_NOTE = 'Daca pornesti FTP mai tarziu, Elxis va fi functional chiar daca aceste directoare pot fi doar citite (read-only).';
public $OTHER_RECOM = 'Alte recomandari';
public $OUR_RECOM_ELXIS = 'Recomandarile noastre pentru a va face viata mai usoara cu sau fara Elxis.';
public $SERVER_OS = 'SO Server';
public $HTTP_SERVER = 'Server HTTP';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Resolutie Ecran';
public $OR_GREATER = 'sau mai mare';
public $SHOW_HIDE = 'Arata/Ascunde';
public $SFMODALERT1 = 'PHP RULEAZA IN SAFE MOD!';
public $SFMODALERT2 = 'Multe setari Elxis, componente si extensii au probleme cu rularea sub safe mode.';
public $GNU_LICENSE = 'Licenta GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Pentru a continua instalarea citeste licenta 
	iar daca esti de acord bifeaza casuta de sub licenta ***';
public $UNDERSTAND_GNUGPL = 'Inteleg ca acest software e licentiat GNU/GPL';
public $MSG_HOSTNAME = 'Introdu un nume pentru Host';
public $MSG_DBUSERNAME = 'Introdu un Nume de Utilizator pentru Baza de Date';
public $MSG_DBNAMEPATH = 'Introdu Numele Bazei de Date sau Calea';
public $MSG_SURE = 'Esti sigur ca aceste setari sunt corecte? \n Elxis va incerca sa populeze Baza de Date cu setarile primite';
public $DBCONFIGURATION = 'Configuratie baza de date';
public $DBCONF_1 = 'Introdu numele hostului pe care Elxis va fi instalat ';
public $DBCONF_2 = 'Alege tipul bazei de date pe care vrei sa o folosesti';
public $DBCONF_3 = 'Introdu numele bazei de date sau calea. Pentru nu a avea probleme cu instalarea de catre 
	the Elxis asigura-te ca baza de date exista.';
public $DBCONF_4 = 'Introdu prefixul bazei de date pe care Elxis il va folosi.';
public $DBCONF_5 = 'Introdu numele de utilizator si parola bazei de date. Asigura-te ca utilizatorul deja exista si ca are toate privilegiile necesare.';
public $OTHER_SETTINGS = 'Alte setari';
public $DBTYPE = 'Tip baza de date';
public $DBTYPE_COMMENT = 'De obicei "MySQL"';
public $DBNAME = 'Nume baza de date';
public $DBNAME_COMMENT = 'Unele hosturi permit doar o baza de date per site. Foloseste prefixul pentru tabel in cazul mai multor site-uri.'; 
public $DBPATH = 'Cale baze de date';
public $DBPATH_COMMENT = 'Unele tipuri de baze de date, ca Access, InterBase sau Firebird, 
	necesita setarea unui fisier in locul unui nume. In acest caz scrie aici calea 
	catre fisier. Exemplu: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Nume Host';
public $USLOCALHOST = 'De obicei "localhost"';
public $DBUSER = 'Utilizator baza de date';
public $DBUSER_COMMENT = '"root" sau un nume dat de catre hoster';
public $DBPASS = 'Parola Baza de Date';
public $DBPASS_COMMENT = 'Pentru securitatea site-ului utilizarea unei parole este obligatorie';
public $VERIFY_DBPASS = 'Verifica Prola pentru baza de date';
public $VERIFY_DBPASS_COMMENT = 'Reintrodu parola pentru verificare';
public $DBPREFIX = 'Prefix table baza de date';
public $DBPREFIX_COMMENT = 'Nu folosi "old_" pentru ca acesta e folosit pentru backup';
public $DBDROP = 'Sterge Tabelele Existente';
public $DBBACKUP = 'Backup Tabele Vechi';
public $DBBACKUP_COMMENT = 'Orice tabel existent din alte instalari Elxis va fi inlocuit';
public $INSTALL_SAMPLE = 'Instaleaza date demo';
public $SAMPLEPACK = 'Pachet date demo';
public $SAMPLEPACKD = 'Elxis iti permite sa specifici continutul site-ului tau si template-ul 
	prin selectarea acestuia chiar dinainte de instalare. Ai putea sa alegi sa nu instalezi 
	datele demo (Nerecomandat).';
public $NOSAMPLE = 'Nimic (Nerecomandat)';
public $DEFAULTPACK = 'Defaul Elxis';
public $PASS_NOTMATCH = 'Parolele pentru baza de date nu se potrivesc.';
public $CNOT_CONDB = 'Nu m-am putut conecta la baza de date.';
public $FAIL_CREATEDB = 'Eroare in creearea bazei de date %s';
public $ENTERSITENAME = 'Introdu un nume pentru site';
public $STEPDB_SUCCESS = 'Pasul precedent a fost completat cu succes. Poti continua sa introduci datele pentru site-ul tau.';
public $STEPDB_FAIL = 'A avut loc cel putin o eroare fatala la pasul precedent. Nu 
	mai poti continua. Intoarce-te si corecteaza setarile bazei de date. Elxis 
	a dat urmatoarele erori:';
public $SITENAME_INFO = 'Type in the name for your Elxis site. This name is used in email messages so make it something meaningful.';
public $SITENAME = 'Nume Site';
public $SITENAME_EG = 'ex. Casa Elxis';
public $OFFSET = 'Decalaj';
public $SUGOFFSET = 'Decalaj sugerat';
public $OFFSETDESC = 'Diferenta in ore intre server si calcutatorul tau. If you wish to synchronize Elxis with your local time set the appropriate offset.';
public $SERVERTIME = 'Ora Server';
public $LOCALTIME = 'Ora locala';
public $DBINFOEMPTY = 'Informatiile bazei de date sunt goale/nu sunt exacte!';
public $SITENAME_EMPTY = 'Numele site-ului nu a fost ales';
public $DEFLANGUNPUB = 'Limba default e nepublicata!';
public $URL = 'URL';
public $PATH = 'Cale';
public $URLPATH_DESC = 'Daca URL si Cale sunt corecte atunci nu le schimba. Daca nu esti sigur atunci 
	contacteaza Providerul de Internet sau Administratorul. De obicei valorile aratate vor fi corecte.';
public $DBFILE_NOEXIST = 'Fisierul bazei de date nu exista!';
public $ADODB_MISSES = 'Fisierele ADOdb necesare nu exista!';
public $SITEURL_EMPTY = 'Introdu URL-ul site-ului';
public $ABSPATH_EMPTY = 'Introdu calea absoluta catre site';
public $PERSONAL_INFO = 'Informatii personale';
public $YOUREMAIL = 'E-mailul tau';
public $ADMINRNAME= 'Nume Real Administrator';
public $ADMINUNAME = 'Nume Utilizator Administrator';
public $ADMINPASS = 'Parola Administrator';
public $CHANGEPROFILE = 'Dupa logare te poti loga in noul tau site, schimba informatiile de mai sus si sa iti modifici profilul.';
public $FATAL_ERRORMSGS = 'Cel putin o eroare fatala a avut loc. Nu mai poti continua. 
Elxis a dat urmatoarele erori:';
public $EMPTYNAME = 'Trebuie sa introduci numele tau real.';
public $EMPTYPASS = 'Parola administrator nu exista.';
public $VALIDEMAIL = 'Trebuie sa introduci o adresa de e-mail valida.';
public $FTPACCESS = 'Acces FTP';
public $FTPINFO = 'Prin activarea accesului FTP peste fisiere corecteaza multe probleme legate de permisiuni. 
	Daca activezi FTP Elxis va putea scrie peste fisierele incscriptibile din PHP. Instalatorul Elxis 
	va putea salva configuratia finala pe serverul tau, altfel ar trebui sa 
	o creezi si sa o uploadezi.';
public $USEFTP = 'Foloseste FTP';
public $FTPHOST = 'Host FTP';
public $FTPPATH = 'CaleFTP';
public $FTPUSER = 'Utilizator FTP';
public $FTPPASS = 'Parola FTP';
public $FTPPORT = 'Port FTP';
public $MOSTPROB = 'Cel mai probabil:';
public $FTPHOST_EMPTY = 'Trebuie sa introduci un host FTP';
public $FTPPATH_EMPTY = 'Trebuie sa introduci o cale FTP';
public $FTPUSER_EMPTY = 'Trebuie sa introduci un utilizator FTP';
public $FTPPASS_EMPTY = 'Trebuie sa introduci o parola FTP';
public $FTPPORT_EMPTY = 'Trebuie sa un port FTP';
public $FTPCONERROR = 'Conexiunea la FTP nu a putut fi facuta';
public $FTPUNSUPPORT = 'Setarile PHP nu suporta conexiuni FTP';
public $CONFSITEDOWN = 'Site-ul este in curs de mentenanta.<br />Revino mai tarziu.';
public $CONFSITEDOWNERR = 'Site-ul este indisponibil.<br />Anunta administratorul sistemului';
public $CONGRATS = 'Felicitari!';
public $ELXINSTSUC = 'Elxis s-a instalat cu succes pe site-ul ta.';
public $THANKUSELX = 'Va multumim pentru utilizarea Elxis,';
public $CREDITS = 'Multumiri';
public $CREDITSELXGO = 'Lui Ioannis Sannos (Echipa Elxis) pentru dezvoltarea Elxis.';
public $CREDITSELXCO = 'Membrilor Comunitatii Elxis pentru ajutorul si ideile pentru a face Elxis mai bun.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Traducatorilor pentru contributia lor in dezvoltarea Elxis ca un CMS care respecta limba nativa a utilizatorului.';
public $OTHERTHANK = 'Tuturor dezvoltatorilor care au contribuit la comunitatea Open Source iar Elxis foloseste parti din munca lor.';
public $CONFBYHAND = 'Elxis nu a putut salva configuratia pe server din cauza unor probleme cu permisiunile. 
	Va trebui sa introduci codul manual. Click pentru a alege codul. 
	Introdu-l intr-un fisier PHP numit "configuration.php" si uploadeaza-l in folderul Elxis. 
	Atentie: Fisierul trebuie salvat ca UTF-8';
public $LANG_SETTINGS = 'Elxis are o interfata multilingva unica care permite alegerea unei limbi pentru 
	frontend si administrare, si de asemenea mai multe limbi publicate pe frontend. 
	Mai tarziu in Elxis vei putea seta ca anumite elemente de continut, module, etc 
   sa apara in anumite combinatii de limba.';
public $DEF_FRONTL = 'Limba frontend implicita';
public $PUBL_LANGS = 'Limbi Publicate';
public $DEF_BACKL = 'Limba implicita administrare';
public $LANGUAGE = 'Limba';
public $SELECT = 'alege';
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