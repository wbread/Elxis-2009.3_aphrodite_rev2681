<?php 
/**
* @version: 2009.2
* @copyright: Copyright (C) 2006-2010 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: PARACOM Software
* @translator URL: http://www.elxis.cz
* @translator E-mail: info@elxis.cz
* @description: Czech installation Language
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
public $XMLLANG = 'cs'; //2-letter country code 
public $LANGNAME = 'Česky'; //This language written in your language
public $CLOSE = 'Zavřít';
public $MOVE = 'Přesunout';
public $NOTE = 'Poznámky';
public $SUGGESTIONS = 'Suggestions';
public $RESTARTINST = 'Restart instalace';
public $WRITABLE = 'Zapisovatelné';
public $UNWRITABLE = 'Nezapisovatelné';
public $HELP = 'Nápověda';
public $COMPLETED = 'Dokončeno';
public $PRE_INSTALLATION_CHECK = 'Předinstalační kontrola';
public $LICENSE = 'Licence';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Instalátor';
public $DEFAULT_AGREE = 'Prosím, pro pokračování si přečtěte licenční ujednání se kterým musíte souhlasit.';
public $ALT_ELXIS_INSTALLATION = 'Elxis Instalace';
public $DATABASE = 'Databáze';
public $SITE_NAME = 'Jméno stránek';
public $SITE_SETTINGS = 'Nastavení stránek';
public $FINISH = 'Závěr instalace';
public $NEXT = 'Další >>';
public $BACK = '<< Zpět';
public $INSTALLTEXT_01 = 'Pokuď je některá z těchto položek červeně zvýrazněna, pokuste se prosím o nápravu. 
	Opomenutí by mohlo vést k nekorektní instalaci a funkci ELXIS.';
public $INSTALLTEXT_02 = 'Předinstalační kontrola pro';
public $INSTALL_PHP_VERSION = 'Verze PHP >= 5.0.0';
public $NO = 'Ne';
public $YES = 'Ano';
public $ZLIBSUPPORT = 'Podpora zlib komprese&nbsp;&nbsp;&nbsp;&nbsp;';
public $AVAILABLE = 'Dostupné';
public $UNAVAILABLE = 'Nedostupné';
public $XMLSUPPORT = 'Podpora XML';
public $CONFIGURATION_PHP = 'Konfigurační soubor';
public $INSTALLTEXT_03 = 'You can still continue the installation. The configuration will be displayed later. 
    Simply copy & paste this text and then upload the file.';
public $SESSIONSAVEPATH = 'Session save path';
public $SUPPORTED_DBS = 'Podporované databáze';
public $SUPPORTED_DBS_INFO = 'Seznam databází podporovaných vaším systémem 
	(zeleně zvýrazněny).';
public $NOTSET = 'Not set';
public $RECOMMENDEDSETTINGS = 'Doporučené nastavení';
public $RECOMMENDEDSETTINGS01 = 'Tato nastavení PHP jsou doporučené pro plnou slučitelnost a správný chod systému ELXIS.';
public $RECOMMENDEDSETTINGS02 = 'Nicméně, ELXIS bude fungovat i když se vaše nastavení bude mírně lišit od doporučeného';
public $DIRECTIVE = 'Instrukce';
public $RECOMMENDED = 'Doporučené';
public $ACTUAL = 'Aktuální';
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
public $DIRFPERM = 'Práva přístupu (CHMOD) k souborům a složkám';
public $DIRFPERM01 = 'Během provozu vyžaduje Elxis přístup i k dalším složkám. Například při pozdější instalaci 
	dalších modulů, musí vytvořit složky a soubory v adresáři "modules". Pro maximální bezpečnost Vašich stránek je 
	však možné ponechat vypsané adresáře jako "Nezapisovatelné", systém si vždy řekne před vlastní akcí o změnu práv 
	přístupu, které je možné po provedení požadované operace vrátit do bezpečného nastavení.';
public $DIRFPERM02 = 'Pro chod Elxis je nutný přístup systému k adresářům <strong>cache</strong> 
	a <strong>tmpr</strong>. Jsou-li tyto složky označeny jako Nezapisovatelné, odstraňte zákaz přístupu (CHMOD 777).';
public $ELXIS_RELEASED = 'Elxis CMS je software šířený zdarma za předpokladu dodržení GNU/GPL licenčního ujednání.';
public $INSTALL_LANG = 'Zvolte jazykové rozhraní instalace';
public $DISABLE_FUNC = 'Pro bezpečnost Vašich stránek je dále doporučeno v php.ini vypnout tyto PHP funkce (pokud k souboru php.ini máte přístup):';
public $FTP_NOTE = 'Ve třetím kroku instalace doporučujeme povolit systému Elxis přístup přes protokol FTP. Tím nejen zaručíte bezchybný chod systému, ale i přístup do složek s nenastavenými právy zápisu.';
public $OTHER_RECOM = 'Další doporučení';
public $OUR_RECOM_ELXIS = 'Tato doporučení jsou pro využití všech funkcí a možností systému Elxis.';
public $SERVER_OS = 'OS serveru';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Prohlížeč';
public $SCREEN_RES = 'Rozlišení monitoru';
public $OR_GREATER = 'a více';
public $SHOW_HIDE = 'Show/Hide';
public $SFMODALERT1 = 'VAŠE PHP BĚŽÍ POD BEZPEČNÝM MÓDEM (SAFE_MODE ON)!';
public $SFMODALERT2 = 'Některé ELXIS rysy a součásti mají problémy s chodem pod bezpečným módem.<br />* Některé hostingy mají PHP nastavení, které tento problém odstraňuje.';
public $GNU_LICENSE = 'Licence GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Zaškrtnutím políčka níže a pokračováním v instalaci, akceptujete licenční 
	podmínky a zavazujete se jejich dodržováním ***';
public $UNDERSTAND_GNUGPL = 'Jsem si vědom, že tento software je šířený pod GNU/GPL licencí';
public $MSG_HOSTNAME = 'Prosím, vložte jméno hostitele';
public $MSG_DBUSERNAME = 'Prosím, vložte uživatelské jméno';
public $MSG_DBNAMEPATH = 'Prosím, vložte jméno databáze';
public $MSG_SURE = 'Jste si jistí správností zadání? \n ELXIS se nyní pokusí o připojení k databázi pomocí nastavení, která jste zadali';
public $DBCONFIGURATION = 'Konfigurace databáze';
public $DBCONF_1 = 'Prosím, vložte serverové jméno hostitele';
public $DBCONF_2 = 'Zvolte typ databáze';
public $DBCONF_3 = 'Zadejte jméno databáze nebo cestu. Pro vyhnutí se problémům s vytvořením databáze se 
	ELXIS instalátor přesvědčí, že databázi již existuje.';
public $DBCONF_4 = 'Zadejte předponu tabulek databáze, která má být užívaná pro tuto instalaci ELXIS.';
public $DBCONF_5 = 'Vložte Vaše přístupové údaje k databázi. Přesvěčte se, že uživatel již existuje a má všechny potřebné práva.';
public $OTHER_SETTINGS = 'Další nastavení';
public $DBTYPE = 'Typ databáze';
public $DBTYPE_COMMENT = 'Pravděpodobně "MySQL"';
public $DBNAME = 'Jméno databáze';
public $DBNAME_COMMENT = 'Někteří hostitelé dovolí jen přidělené jméno DB. Pro větší bezpečnost Vašich stránek (nejen) v tomto případě doporučujeme změnu předpony tabulek databáze níže.'; 
public $DBPATH = 'Cesta k databázi';
public $DBPATH_COMMENT = 'Some types of databases, like Access, InterBase and FireBird, 
	require to set a database file instead of a database name. In this case please write here 
	the path to this file. Example: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Jméno hostitele';
public $USLOCALHOST = 'Nejčastěji "localhost"';
public $DBUSER = 'Uživatelské jméno databáze';
public $DBUSER_COMMENT = 'Něco jako "root" nebo uživatelské jméno přidělené hostitelem';
public $DBPASS = 'Uživatalské heslo datadáze';
public $DBPASS_COMMENT = 'Pro bezpečnost Vašich stránek je použití uživatelského hesla pro databázový účet povinné';
public $VERIFY_DBPASS = 'Ověření hesla databáze';
public $VERIFY_DBPASS_COMMENT = 'Opakujte heslo pro ověření';
public $DBPREFIX = 'Předpona tabulek databáze';
public $DBPREFIX_COMMENT = 'Nepoužívejte předponu "<strong>old_</strong>" tuto předponu používá Elxis pro zálohu tabulek databáze!';
public $DBDROP = 'Přepsat existující tabulky';
public $DBBACKUP = 'Zálohovat existující tabulky';
public $DBBACKUP_COMMENT = 'Všechny existující zálohované tabulky budou přepsány';
public $INSTALL_SAMPLE = 'Instalace ukázkových dat';
public $SAMPLEPACK = 'Základní datový balíček';
public $SAMPLEPACKD = 'Elxis umožňuje instalaci ukázkových dat, které Vám hned ze začátku vytvoří základní moduly 
	a obsah stránek. Pomocí ukázkových dat se lehce seznámíte s organizací a správou obsahu. Je jistě jednodužší 
	ukázkový modul např. menu přejmenovat, než vytvářet nový. Instalaci ukázkových dat doporučujeme.';
public $NOSAMPLE = 'Neinstalovat (Nedoporučujeme)';
public $DEFAULTPACK = 'Elxis Default';
public $PASS_NOTMATCH = 'Heslo databáze se neshoduje s ověřovacím.';
public $CNOT_CONDB = 'Nelze se připojit k databázi.';
public $FAIL_CREATEDB = 'Nelze vytvořit databázi %s';
public $ENTERSITENAME = 'Please enter a Site Name';
public $STEPDB_SUCCESS = 'The previous step completed successfully. You may now continue entering your site\'s parameters.';
public $STEPDB_FAIL = 'At least one fatal error occured during the previous step. You can not 
	continue. Please go back and correct the database settings. 
	The Elxis installer error messages follows:';
public $SITENAME_INFO = 'Vložte jméno Vašich stránek. Jméno volte uváženě, bude se také zobrazovat např. v automatiky generovaných emailových zprávách.';
public $SITENAME = 'Jméno stránek';
public $SITENAME_EG = 'Např. Osobní stránky Petra Bureše';
public $OFFSET = 'Časový posun';
public $SUGOFFSET = 'Navrhovaný offset';
public $OFFSETDESC = 'Časový rozdíl mezi serverem a Vaším počítačem. Je-li to potřeba, můžet rozdíl vhodně kompenzovat.';
public $SERVERTIME = 'Čas serveru';
public $LOCALTIME = 'Váš lokální čas';
public $DBINFOEMPTY = 'Database information are empty/inaccurate!';
public $SITENAME_EMPTY = 'The site name has not been provided';
public $DEFLANGUNPUB = 'The default Front-End language is unpublished!';
public $URL = 'URL';
public $PATH = 'Path';
public $URLPATH_DESC = 'Pokuď se URL a Path zdají být corektní prosím, neprovádějte žádné změny. 
	V opačném případě kontaktujte Vašeho ISP nebo systémového administrátora. Obvykle jsou zobrazené hodnoty správné.';
public $DBFILE_NOEXIST = 'Database file does not exist!';
public $ADODB_MISSES = 'Required ADOdb files are missing!';
public $SITEURL_EMPTY = 'Please enter site URL';
public $ABSPATH_EMPTY = 'Please enter the absolute path to your site';
public $PERSONAL_INFO = 'Osobní informace';
public $YOUREMAIL = 'Váš E-mail';
public $ADMINRNAME= 'Reálné jméno admina';
public $ADMINUNAME = 'Uživatelské jméno admina';
public $ADMINPASS = 'Přístupové heslo admina';
public $CHANGEPROFILE = 'Po instalaci bude možné osobní data změnit v uživatelském profilu.';
public $FATAL_ERRORMSGS = 'Instalátor detekoval chybu. Nelze pokračovat v instalaci. 
Elxis nalezl následující chybu(y):';
public $EMPTYNAME = 'Musíte zadat své reálné jméno.';
public $EMPTYPASS = 'Heslo administrátora nesmí zůstat prázdné.';
public $VALIDEMAIL = 'Musíte vložit platnou e-mailovou addresu.';
public $FTPACCESS = 'FTP přístup';
public $FTPINFO = 'Povolením FTP přístupu obejdete problém s právy zápisu do složek a souborů. 
	Elxis bude moci zapisovat do souborů, které budou z důvodu bezpečnosti pro ostatní nezapisovatelné. 
	Elxis instalátor vytvoří konfigurační soubor automaticky a nebude nutné jej vytvářet manuálně. 
	Toto oceníte i později při změnách konfiguračních nastaveních z administračního rozhraní.';
public $USEFTP = 'Povolit FTP';
public $FTPHOST = 'FTP hostitel';
public $FTPPATH = 'FTP path';
public $FTPUSER = 'FTP uživatel';
public $FTPPASS = 'FTP heslo';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'Nejčastěji:';
public $FTPHOST_EMPTY = 'Musíte zadat FTP hostitele';
public $FTPPATH_EMPTY = 'Musíte zadat FTP cestu (patch)';
public $FTPUSER_EMPTY = 'Musíte zadat FTP uživatele';
public $FTPPASS_EMPTY = 'Musíte zadat FTP heslo';
public $FTPPORT_EMPTY = 'Musíte zadat FTP port';
public $FTPCONERROR = 'Nelze se připojit k FTP';
public $FTPUNSUPPORT = 'Vaše PHP nastavení nepodporuje FTP připojení';
public $CONFSITEDOWN = 'Stránka se momentálně upravuje.<br />Prosím, zkuste to později.';
public $CONFSITEDOWNERR = 'Stránka je dočasně nedostupná.<br />Prosím, kontaktujte Administrátora systému';
public $CONGRATS = 'Gratulujeme!';
public $ELXINSTSUC = 'Elxis byl úspěšne nainstalován na Váš server.';
public $THANKUSELX = 'Velmi děkujeme, že jste zvolili Elxis.';
public $CREDITS = 'Poděkování';
public $CREDITSELXGO = 'Ioannis Sannos (Elxis Team) - zakladatel projektu.';
public $CREDITSELXCO = 'Ivan Trebjesanin (Elxis Team) a komunita Elxis - pomoc při vývoji Elxis.';
public $CREDITSELXRTL = 'Farhad Sakhaei (Elxis komunita) - rozšíření Elxis o RTL kompatibilitu.';
public $CREDITSELXTR = 'Překladatelům za šíření Elxis mezi různě hovořící uživatele.';
public $OTHERTHANK = 'Všem vývojářům, kteří přispěli do Open Source společenství a jejichž práce jsou použity v ELXIS.';
public $CONFBYHAND = 'Instalátor nemohl vytvořit konfigurační soubor. Je nutné soubor vytvořit manuálně a 
	uploadovat na server. Klikněte do textového pole a označte kompletně celý text. Zkopírovaný text 
	vložte do php souboru "configuration.php" a přepište jím původní stejnojnený soubor v Elxis root adresáři. 
	Upozornění: Soubor musí být uložen v kódování UTF-8!';
public $LANG_SETTINGS = 'ELXIS má jedinečné mnohojazyčné rozhraní, které vám umožňuje nastavit výchozí 
	jazyky stránek i administračního rozhraní. Dovoluje publikovat hlavní stránky ve více jazycích současné. 
	Později v ELXIS administraci můžete nastavit jednotlivým obsahový položkám, modulům atd., zobrazení ve 
	specifických kombinacích jazyků.';
public $DEF_FRONTL = 'Výchozí jazyk stránek';
public $PUBL_LANGS = 'Publikované jazyky';
public $DEF_BACKL = 'Výchozí jazyk administrace';
public $LANGUAGE = 'Jazykové nastavení';
public $SELECT = 'zvolte';
public $TEMPLATES = 'Šablony';
public $TEMPLATESTITLE = 'Šablony pro Elxis CMS';
public $DOWNLOADS = 'Stáhnout';
public $DOWNLOADSTITLE = 'Stáhnout Elxis rozšíření';

//elxis 2009.0
public $STEP = 'Krok';
public $RESTARTCONF = 'Opravdu chcete obnovit instalační program?';
public $DBCONSETS = 'Připojení k datadázi';
public $DBCONSETSD = 'Vložte správná data pro přístup systému Elxis k Vaší databázi.';
public $CONTLAYOUT = 'Obsah a vzhled';
public $TMPCONFIGF = 'Dočasný konfigurační soubor';
public $TMPCONFIGFD = 'ELXIS užívá dočasný soubor k uchování konfiguračních parametrů během instalačního procesu. 
Instalátor musí mít přístup k tomuto souboru a musí mu být umožněno data do souboru zapisovat. Je-li soubor 
nezapisovatelný, změňte jeho práva CHMOD nebo umožněte systému Elxis přístup na váš server přes FTP rozhraní.';
public $CHECKFTP = 'Zkontrolovat FTP přístup';
public $FAILED = 'Chyba';
public $SUCCESS = 'Úspěšné';
public $FTPWRONGROOT = 'Není možné detekovat složku s Vaší instalací Elxis. Zkontrolujte cestu od FTP Root adresáře.';
public $FTPNOELXROOT = 'Není možné detekovat složku s Vaší instalací Elxis. Zkontrolujte cestu od FTP Root adresáře.';
public $FTPSUCCESS = 'Byla úspěšně detekována Vaše instalace Elxis. FTP nastavení je v pořádku.';
public $FTPPATHD = 'Relativní cesta od Vaší FTP root složky k instalaci Elxis bez koncového lomítka (/).';
public $CNOTWRTMPCFG = 'Není umožněn zápis do dočasného konfiguračního souboru (installation/tmp/config.php)';
public $DRIVERSUPELXIS = "%s je systémem Elxis podporován";
public $DRIVERSUPSYS = "%s je podporován Vaším systémem";
public $DRIVERNSUPELXIS = "%s není zatím systémem Elxis podporován";
public $DRIVERNSUPSYS = "%s není podporován Vaším systémem";
public $DRIVERSUPELXEXP = "%s je systémem Elxis podporován experimentálně";
public $STATICCACHE = 'Statická cache';
public $STATICCACHED = 'Statická cache je souborová vyrovnávací paměť systému, která vygeneruje HTML soubory z 
Vašich stránek a uloží je po stanovenou dobu. Tyto uskladněné stránky jsou poté načítány návštěvníkům bez nutnosti 
znovu vykonávat PHP proceduru a nově se dotazovat databáze. Statická cache zálohuje celé stránky namísto bloků a tím 
výrazně urychluje načítání hlavně hodně obsahově naložených stránek.';
public $SEFURLS = 'URL přátelské k vyhledávačům (SEF)';
public $SEFURLSD = 'Povolením (důrazně doporučujeme) Elxis vytvoří ze standardních URL adres, hezké adresy 
přátelské k vyhledávačům a srozumitelné uživatelům. SEO PRO adresy společně s kvalitním obsahem, vhodnou 
volbou SEO odkazů a metadat Vám zajistí vysoké hodnocení vyhledávači a tím mnoho návštěvníků a uživatelů. 
Skrytím adresních PHP příkazů navíc Vaše stránky získají větší imunitu proti hackerům.';
public $RENAMEHTACC = 'Kliknutím přejmenujete soubor <strong>htaccess.txt</strong> na <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Dojde-li selhání SEO PRO, dojde k automatickému nastavení na Ne bez ohledu na Vaši volbu. 
(Aktivaci můžete později provést v administraci Elxis).';
public $HTACCEXIST = 'Soubor .htaccess je již ve vašem root adresáři istalace Elxis! Musíte SEO PRO aktivovat manuálně.';
public $SEOPROSRVS = 'SEO PRO bude pracovat jen pod následujícími webovými servery:<br />
Apache, Lighttpd a další webové servery s podporou mod_rewrite.<br />
IIS s použitím Ionic Isapi Rewrite filtru.';
public $SETSEOPROY = 'Prosím, nastavte SEO PRO na Ano';
public $FEATENLATER = 'Tuto volbu je možno později změnit v administraci Elxis.';
public $TEMPLATE = 'Šablona';
public $TEMPLATEDESC = 'Vyberte výchozí šablonu pro Vaše webové stránky. Později můžete Vaši volbu změnit 
nebo stáhnout a nainstalovat šablony nové.';
public $CREDITSELXWI = 'Kostas Stathopoulos a Elxis Dokumentační Team - založení a správa Elxis Wiki.';
public $NOWWHAT = 'Co nyní?';
public $DELINSTFOL = 'Kompletně odstranit instalační složku (installation/).';
public $AUTODELINSTFOL = 'Automaticky smazat instalační soubory.';
public $AUTODELFAILMAN = 'Pokuď proces selže, je nutné odstranit instalační složku manuálně.';
public $BENGUIDESWIKI = 'Průvodce začátečníka Elxis Wiki  (EN).';
public $VISITFORUMHLP = 'Navštívit Elxis fórum pro nápovědu (EN).';
public $VISITNEWSITE = 'Přejít na Vaš nové stránky.';

}

?>