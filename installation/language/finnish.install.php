<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Jari Muhonen (alias xtaaviankka)
* @link: http://www.elxis.org
* @email: info@elxis.org
* @description: Finnish installation Language
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
public $XMLLANG = 'fi'; //2-letter country code 
public $LANGNAME = 'Suomalainen '; //This language, written in your language
public $CLOSE = 'Sulje';
public $MOVE = 'Siirrä';
public $NOTE = 'Muistio';
public $SUGGESTIONS = 'Ehdotukset';
public $RESTARTINST = 'Uudelleenkäynnistä asennus';
public $WRITABLE = 'Ei kirjoitussuojattu';
public $UNWRITABLE = 'Kirjoitussuojattu';
public $HELP = 'Ohje';
public $COMPLETED = 'Valmistui';
public $PRE_INSTALLATION_CHECK = 'Järjestelmän tarkistus';
public $LICENSE = 'Lisenssi';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web-asennus';
public $DEFAULT_AGREE = 'Ole hyvä ja lue/hyväksy lisenssi jatkaaksesi asennusta';
public $ALT_ELXIS_INSTALLATION = 'Elxis asennus';
public $DATABASE = 'Tietokanta';
public $SITE_NAME = 'Sivuston nimi';
public $SITE_SETTINGS = 'Sivuston asetukset';
public $FINISH = 'Finish';
public $NEXT = 'Seuraava >>';
public $BACK = '<< Takaisin';
public $INSTALLTEXT_01 = 'Jos jokin kohteista on punaisella, ole hyvä ja tee näihin tarvittavat toimenpiteet 
toimenpiteet tilanteen korjaamiseksi. Jos et korjaa näitä voi Elxis asennus toimia puutteellisesti.';
public $INSTALLTEXT_02 = 'Vaadittavat asetukset';
public $INSTALL_PHP_VERSION = 'PHP versio >= 5.0.0';
public $NO = 'Ei';
public $YES = 'Kyllä';
public $ZLIBSUPPORT = 'zlib-pakkauksen tuki';
public $AVAILABLE = 'Saatavilla';
public $UNAVAILABLE = 'Ei saatavilla';
public $XMLSUPPORT = 'xml-tuki';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Voit jatkaa asennusta vaikka configuration.php tiedostoon ei voida kirjoittaa,
	kopioit ja liität näytössä olevat tekstit configuration.php tiedostoon ja viet palvelimelle.';
public $SESSIONSAVEPATH = 'Istunnon tallennuspolku';
public $SUPPORTED_DBS = 'Tuetut tietokannat';
public $SUPPORTED_DBS_INFO = 'Luettelo tuetuista tietokannoista järjestelmässäsi. Muista, että 
	myöhemmin näitä voi olla lisää käytettävissä (kuten SQLite).';
public $NOTSET = 'Älä aseta';
public $RECOMMENDEDSETTINGS = 'Suositellut asetukset';
public $RECOMMENDEDSETTINGS01 = 'Tässä esitetään suositellut PHP-asetukset täyden yhteensopivuuden varmistamiseksi Elxis:n kanssa.';
public $RECOMMENDEDSETTINGS02 = 'Mutta, Elxis kuitenkin toimii, vaikka asetuksesi ei täysin vastaa suositeltuja asetuksia.';
public $DIRECTIVE = 'Direktiivi';
public $RECOMMENDED = 'Suositeltu';
public $ACTUAL = 'Todellinen';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Näytä virheet';
public $FILEUPLOADS = 'Tiedostojen lataus';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Tiedostojen puskurointi';
public $SESSIONAUTO = 'Aloita istunto automaattisesti';
public $ALLOWURLFOPEN = 'Salli URL:sta tiedoston avaaminen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Hakemistojen ja tiedostojen oikeudet';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS on avoimen lähdekoodin ohjelma käyttäen GNU/GPL lisenssiä.';
public $INSTALL_LANG = 'Valitse asenuskieli';
public $DISABLE_FUNC = 'Sivuston turvallisuuden kannalta, sinun tulee lisätä estetyt toiminnat (Disable Functions) php.ini tiedostoon (jos et käytä näitä). Estettävät PHP-funktiot:';
public $FTP_NOTE = 'Jos laitat FTP päälle myöhemmin, Elxis tarvittavat funktiot eivät toimi, jos jokin kansioista on kirjoitussuottu.';
public $OTHER_RECOM = 'Muut suositeltavat asetukset';
public $OUR_RECOM_ELXIS = 'Jotkin näistä suosituksista helpottavat tai eivät helpota Elxis asennustasi.';
public $SERVER_OS = 'Käyttöjärjestelmä';
public $HTTP_SERVER = 'HTTP-palvelin';
public $BROWSER = 'Selain';
public $SCREEN_RES = 'Kuvaruudun tarkkuus';
public $OR_GREATER = 'tai suurempi.';
public $SHOW_HIDE = 'Näytä/Piilota';
public $SFMODALERT1 = 'SINUN PHP KÄYTTÄÄ SAFE MODE TILAA!';
public $SFMODALERT2 = 'Monet Elxis lisäosat, komponentit ja kolmannen osapuolen laajennukset voivat toimia huonosti ilman Safe Mode tilaa.';
public $GNU_LICENSE = 'GNU/GPL Lisenssi';
public $INSTALL_TOCONTINUE = '*** Aloittaaksesi Elxis:n asennuksen, tulee sinun lukea Elxis:n lisenssi 
	ja jos hyväksyt tämän lisenssin, tarkista valinta lisenssi ***';
public $UNDERSTAND_GNUGPL = 'Ymmärrän tämän ohjelmiston tarkoittaman GNU/GPL lisenssin';
public $MSG_HOSTNAME = 'Ole hyvä ja anna tietokantapalvelimen nimi';
public $MSG_DBUSERNAME = 'Ole hyvä ja anna tietokannan käyttäjätunnus';
public $MSG_DBNAMEPATH = 'Ole hyvä ja anna tietokannan nimi tai polku';
public $MSG_SURE = 'Oletko täysin varman näistä asetuksista? \n Elxis will now attempt to populate the Database with the settings you have supplied';
public $DBCONFIGURATION = 'Tietokannan asetukset';
public $DBCONF_1 = 'Ole hyvä ja anna tietokannan nimi palvelimella. Elxis asennetaan tähän tietokantaan.';
public $DBCONF_2 = 'Valitse tietokannan laji, jonka haluat Elxis:n käyttävän.';
public $DBCONF_3 = 'Anna tietokannan nimi tai polku. Kartoita ongelmat tietokannan luonnissa.
	Elxis:n asennuksessa tietokannan tulee olla valmiina.';
public $DBCONF_4 = 'Anna taulukon tunniste (prefix), jota Elxis käyttää. (esim. elx_)';
public $DBCONF_5 = 'Anna tietokannan käyttäjätunnus ja salasana. Make sure the user already exists and has all required privileges.';
public $OTHER_SETTINGS = 'Lisä-asetukset';
public $DBTYPE = 'Tietokannan tyyppi';
public $DBTYPE_COMMENT = 'Yleensä "MySQL"';
public $DBNAME = 'Tietokannan nimi';
public $DBNAME_COMMENT = 'Jotkin palvelimet sallivat vain yhden tietokannan käytön sivustolla. Käytä tällöin taulun etuliitettä Elxis sivustollasi.'; 
public $DBPATH = 'Tietokannan polku';
public $DBPATH_COMMENT = 'Jotkin tietokantatyypit, tarvitsevat oikeudet, InterBase ja FireBird, 
	vaaditaan tietokannan sijaan tietokannan. Tämä tapahtuma kirjoitetaan 
        absoluuttinen polku/tiedosto. Esimerkki: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Tietokantapalvelimen nimi';
public $USLOCALHOST = 'Yleensä "localhost"';
public $DBUSER = 'Tietokannan käyttäjätunnus';
public $DBUSER_COMMENT = 'Useinmiten tämä on "root" tai ylläpitäjän käyttäjätunnus';
public $DBPASS = 'Tietokannan salasana';
public $DBPASS_COMMENT = 'Sivuston tietoturvan takia on mysql salasana pakollinen';
public $VERIFY_DBPASS = 'Vahvista tietokannan salasana';
public $VERIFY_DBPASS_COMMENT = 'Anna uusi salasana toiseen kertaan';
public $DBPREFIX = 'Tietokannan taulun etuliite';
public $DBPREFIX_COMMENT = 'Älä käytä "old_" -liitettä, sillä Elxis voi ylikirjoittaa saman nimiset liitteet.';
public $DBDROP = 'Pudota olemassa olevat taulut';
public $DBBACKUP = 'Varmuuskopioi vanhat taulut';
public $DBBACKUP_COMMENT = 'Elxis-asennus ylikirjoittaa annetulla etuliitteellä olevat taulut, jos näitä on.';
public $INSTALL_SAMPLE = 'Asenna esittelytietokanta';
public $SAMPLEPACK = 'Esittelytietokanta paketti';
public $SAMPLEPACKD = 'Jokaisen uuden käyttäjän kannattaa asentaa esittelytietokanta. 
	Kokoneet konkarit voivat ohittaa tämän vaiheen. 
	(Ei suositella).';
public $NOSAMPLE = 'Ei mitään (Ei suositella)';
public $DEFAULTPACK = 'Elxis oletus';
public $PASS_NOTMATCH = 'Tietokannan salasanat eivät täsmää.';
public $CNOT_CONDB = 'Ei saada yhteyttä tietokantaan.';
public $FAIL_CREATEDB = 'Epäonnistui kirjoittaessa tietokantaan %s';
public $ENTERSITENAME = 'Ole hyvä ja anna sivuston nimi';
public $STEPDB_SUCCESS = 'Esittelytietokanta asennettiin onnistuneesti. Nyt voit muuttaa sivustosi asetuksia.';
public $STEPDB_FAIL = 'Tietokannan asettamisessa tapahtui vakavia virheitä. Asennustasi ei voida jatkaa. 
	Ole hyvä ja korjaa tietokannan asetukset. Elxis 
	asennusvirheviestin opastamana:';
public $SITENAME_INFO = 'Nimi Elxis sivustollesi. Tämä nimi on käytössä email viesteissä, joten tee siitä asiallinen.';
public $SITENAME = 'Sivuston nimi';
public $SITENAME_EG = 'Esim. Elxis kotisivuni';
public $OFFSET = 'Aikavyöhyke';
public $SUGOFFSET = 'Ehdotettu aikavyöhyke';
public $OFFSETDESC = 'Aikaero tunneissa tietokoneesi ja palvelimen välillä. Jos haluat synkronoida Elxis:n paikalliseen aikaasi, aseta oikea aikavyöhyke.';
public $SERVERTIME = 'Palvelimen aika';
public $LOCALTIME = 'Paikalinen aikasi';
public $DBINFOEMPTY = 'Tietokannan tiedot ovat tyhjät/virheellinen!';
public $SITENAME_EMPTY = 'Sivuston nimeä ei ole annettu';
public $DEFLANGUNPUB = 'Oletus etusivun kieltä ei ole julkaistu!';
public $URL = 'URL';
public $PATH = 'Juurihakemisto';
public $URLPATH_DESC = 'Jos URL-osoite ja polku näyttävät vääriltä, ole hyvä ja älä muuta niitä. Jos et ole varma näistä asetuksista
	ole hyvä ja ota yhteyttä ISP-palvelun tarjoajaan tai ylläpitäjään. Käytössä olevat arvot voidaan näyttää sivustollasi.';
public $DBFILE_NOEXIST = 'Tietokannan tiedostoa ei ollut!';
public $ADODB_MISSES = 'Tarvittava ADOdb-tiedosto poissa!';
public $SITEURL_EMPTY = 'Ole hyvä ja anna sivustosi URL-osoite';
public $ABSPATH_EMPTY = 'Ole hyvä ja anna absoluuttinen polku sivustollesi';
public $PERSONAL_INFO = 'Henkilökohtaiset tiedot';
public $YOUREMAIL = 'E-mail osoitteesi';
public $ADMINRNAME= 'Ylläpitäjän todellinen nimi';
public $ADMINUNAME = 'Ylläpiäjän käyttäjätunnus';
public $ADMINPASS = 'Ylläpiäjän salasana';
public $CHANGEPROFILE = 'Asennuksen jälkeen voit kirjautua uudelle sivustollesi, vaihtaa yläpuoliset tiedot ja muuttaa luoda profiilisi.';
public $FATAL_ERRORMSGS = 'Tapahtui vaarallinen virhe. Asennustasi ei voida jatkaa. 
Elxis asennuksen virheviestin seuranta:';
public $EMPTYNAME = 'Sinun tulee antaa oikea nimesi.';
public $EMPTYPASS = 'Ylläpitäjän salasana on tyhjä.';
public $VALIDEMAIL = 'Sinun tulee antaa yksilöllinen ylläpitäjän e-mail osoite.';
public $FTPACCESS = 'FTP-oikeudet';
public $FTPINFO = 'FTP-oikeudet päällä ratkaistaan useita tiedostojen CHMOD oikeuksiin liittyviä ongelmia. 
	Jos pidät FTP päällä, Elxis tulee voida kirjoittaa kansiot/tiedostot ei kirjoitussuojatuksi PHP:ssa. Elxis asennus
	tulee myos pystyä tallentamaan lopullinen configuration.php tiedosto sivullesi, myöhemmässä vaiheessa voit 
	muokata näitä manuaalisesti.';
public $USEFTP = 'Käytä FTP:tä';
public $FTPHOST = 'FTP-palvelin';
public $FTPPATH = 'FTP-polku';
public $FTPUSER = 'FTP-käyttäjätunnus';
public $FTPPASS = 'FTP-salasana';
public $FTPPORT = 'FTP-portti';
public $MOSTPROB = 'Ehkä useinmiten';
public $FTPHOST_EMPTY = 'Sinun tulee antaa FTP-palvelin';
public $FTPPATH_EMPTY = 'Sinun tulee antaa FTP-polku';
public $FTPUSER_EMPTY = 'Sinun tulee antaa FTP-käyttäjätunnus';
public $FTPPASS_EMPTY = 'Sinun tulee antaa FTP-salasana';
public $FTPPORT_EMPTY = 'Sinun tulee antaa FTP-portti';
public $FTPCONERROR = 'Ei voida yhdistää FTP-palvelimeen';
public $FTPUNSUPPORT = 'Sinun PHP-asetuksissa ei ole tukea FTP yhteydelle';
public $CONFSITEDOWN = 'Sivustoa huolletaan.<br />Ole hyvä ja palaa myöhemmin uudestaan.';
public $CONFSITEDOWNERR = 'Sivusto on ruuhkautunut.<br />Ole hyvä ja tiedota sivuston ylläpitäjää.';
public $CONGRATS = 'Onnittelut!';
public $ELXINSTSUC = 'Elxis asennettiin onnistuneesti sivustollesi.';
public $THANKUSELX = 'Kiitos oikein paljon, kun valitsit Elxis:n,';
public $CREDITS = 'Lainaus';
public $CREDITSELXGO = 'To Ioannis Sannos (Elxis Team) for the Elxis developement.';
public $CREDITSELXCO = 'To Ivan Trebješanin (Elxis Team) and Elxis Community members for their help and ideas on making Elxis better.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Käännös auttaa teitä käyttämään Elxis CMS:ää käyttäjän omalla kielellä.';
public $OTHERTHANK = 'Kaikki kehittäjät jotka avustavat avoimen lähdekoodin yhteisössä ja Elxis käyttäjien parissa ovat tehneet ison työn.';
public $CONFBYHAND = 'Asennus ei löytänyt tallennettua configuration.php tiedostoa sivustoltasi tai tässä on kirjoitus oikeudet väärin. 
	Voit asentaa configuration.php tiedoston manuaalisesti. Napsauta hiiren painikkeella tekstikentän kaikki tekstit. 
	Liitä tyhjään tekstitiedostoon ja nimeä tiedosto "configuration.php" ja vie tiedosto palvelimelle Elxis-sivustosi juureen. 
	Tärkeää: Tiedosto tulee tallentaa UTF-8 muodossa.';
public $REMOVEINSTFOL = 'Poista käytetty "/installation" kansio (älä vain nimeä sitä) ja olet valmis surffailemaan sivustollasi!';
public $LANG_SETTINGS = 'Elxis:n monista kielistä voit valita etusivun ja ylläpitoliittymän oletuskielet.
 Myöhemmin kun julkaistaan lisää kieliä, voi näitä vaihtaa etusivulta. Muista että myöhemmin lisätyt kielet Elxis 
ylläpitoliittymässä, voivat vaikuttaa jälkeenpäin lisättyihin moduuleihin yms. ellei kyseistä kielitiedostoa löydy.';
public $DEF_FRONTL = 'Oletus etusivun kieli';
public $PUBL_LANGS = 'Julkisivun kieli';
public $DEF_BACKL = 'Oletus ylläpidon kieli';
public $LANGUAGE = 'Kieli';
public $SELECT = 'valitse';
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