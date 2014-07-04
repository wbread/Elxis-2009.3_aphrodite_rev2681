<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Zlatko Dumanić - Dejan Viduka
* @link: http://www.pingvin.biz.hr
* @email: pingvin@pingvin.biz.hr
* @description: Croatian installation Language // Hrvatska instalacijska datoteka
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Direct Access to this location is not allowed.' );


class iLanguage {

public $RTL = 0; //1 za RTL jezike (npr. persian/farsi)
public $ISO = 'UTF-8'; //Koristiti samo utf-8!
public $XMLLANG = 'hr'; //Dvoslovna oznaka jezika 
public $LANGNAME = 'Hrvatski'; //Jezik, napisan na vašem jeziku
public $CLOSE = 'Zatvori';
public $MOVE = 'Premjesti';
public $NOTE = 'Napomena';
public $SUGGESTIONS = 'Prijedlozi';
public $RESTARTINST = 'Ponovno pokretanje instalacije';
public $WRITABLE = 'Otvoreno za zapisivanje';
public $UNWRITABLE = 'Zapisivanje nije moguće';
public $HELP = 'Pomoć';
public $COMPLETED = 'Završeno';
public $PRE_INSTALLATION_CHECK = 'Predinstalacijska provjera';
public $LICENSE = 'Licenca';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Instalacija';
public $DEFAULT_AGREE = 'Molimo pročitajte i prihvatite odredbe licence za nastavak instalacije';
public $ALT_ELXIS_INSTALLATION = 'Elxis Instalacija';
public $DATABASE = 'Baza podataka';
public $SITE_NAME = 'Naziv sajta';
public $SITE_SETTINGS = 'Postavke sajta';
public $FINISH = 'Kraj';
public $NEXT = 'Dalje >>';
public $BACK = '<< Natrag';
public $INSTALLTEXT_01 = 'Ukoliko je ijedna od stavki označena crveno, poduzmite odgovarajuće radnje za ispravak. 
Neodgovarajuće dozvole i postavke mogu narušiti ispravnost instalacije Elxis.';
public $INSTALLTEXT_02 = 'Predinstalacijska provjera za';
public $INSTALL_PHP_VERSION = 'PHP verzija >= 5.0.0';
public $NO = 'Ne';
public $YES = 'Da';
public $ZLIBSUPPORT = 'zlib podrška';
public $AVAILABLE = 'Dostupno';
public $UNAVAILABLE = 'Nedostupno';
public $XMLSUPPORT = 'xml podrška';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Možete nastaviti sa instalacijom, na kraju će biti prikazan sadržaj konfiguracijske datoteke, 
koju je potrebno upisati i uploadati u root vašeg sajta.';
public $SESSIONSAVEPATH = 'Session save putanja';
public $SUPPORTED_DBS = 'Podržane baze podataka';
public $SUPPORTED_DBS_INFO = 'Popis podržanih baza podataka. Moguće je da i druge 
baze budu podržane, npr.SQLite.';
public $NOTSET = 'Nije podešeno';
public $RECOMMENDEDSETTINGS = 'Preporučene postavke';
public $RECOMMENDEDSETTINGS01 = 'Preporučene postavke za PHP, koje osiguravaju kompatibilnost sa Elxis.';
public $RECOMMENDEDSETTINGS02 = 'U svakom slučaju, Elxis će raditi sa vašim postavkama, iako ne odgovaraju preporučenim postavkama';
public $DIRECTIVE = 'Directive';
public $RECOMMENDED = 'Preporučeno';
public $ACTUAL = 'Trenutno';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Prikaz greški';
public $FILEUPLOADS = 'Upload datoteka';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'Uključeno';
public $OFF = 'Isključeno';
public $DIRFPERM = 'Dozvole na direktorijima i datotekama';
public $DIRFPERM01 = 'Da bi Elxis ispravno radio, mora imati pristup i odobrenje za čitanje i zapisivanje 
u određene datoteke i direktorije. Ukoliko je neki od njih označen sa "Zapisivanje nije moguće", 
potrebno je promijeniti dozvole na datoteci ili direktoriju, kako bi Elxis 
omogućili zapisivanje.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS je Free Software objavljen pod GNU/GPL licencom.';
public $INSTALL_LANG = 'Odabir jezika instalacije';
public $DISABLE_FUNC = 'Zbog sigurnosti vašeg sajta, preporučamo isključivanje sljedećih funkcija u php.ini (ukoliko se ne koriste):';
public $FTP_NOTE = 'Ukoliko se omogući FTP layer, Elxis će raditi, čak i ako su nekiod direktorija zatvoreni za zapisivanje.';
public $OTHER_RECOM = 'Ostale preporuke';
public $OUR_RECOM_ELXIS = 'Preporuke koje će Vam olakšati život, sa ili bez Elxis.';
public $SERVER_OS = 'Operacijski sustav Servera';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Preglednik';
public $SCREEN_RES = 'Rezolucija monitora';
public $OR_GREATER = 'ili više';
public $SHOW_HIDE = 'Prikaži/Skrij';
public $SFMODALERT1 = 'VAŠ PHP RADI U SAFE MODE !';
public $SFMODALERT2 = 'Mnoge Elxis funkcije, komponente i ekstenzije imaju problema u radu sa PHP u SAFE MODE.';
public $GNU_LICENSE = 'GNU/GPL Licenca';
public $INSTALL_TOCONTINUE = '*** Za nastavak instalacije potrebno je pročitati Elxis licencu, 
	ukoliko ste suglasni, označite kućicu ispod licence ***';
public $UNDERSTAND_GNUGPL = 'Razumijem da je ovaj software objavljen pod GNU/GPL Licencom';
public $MSG_HOSTNAME = 'Upišite naziv hosta';
public $MSG_DBUSERNAME = 'Upišite korisničko ime za bazu podataka';
public $MSG_DBNAMEPATH = 'Upišite naziv baze podataka,ili putanju';
public $MSG_SURE = 'Jeste li sigurni u ispravnost podataka?\n Elxis će pokušati popuniti bazu podataka sa podacima koje ste upisali';
public $DBCONFIGURATION = 'Konfiguracija baze podataka';
public $DBCONF_1 = 'Upišite naziv hosta na kojemu se provodi instalacija Elxis';
public $DBCONF_2 = 'Odaberite vrstu baze podataka koju će Elxis koristiti';
public $DBCONF_3 = 'Upišite naziv baze podataka ili putanju. Želite li izbjeći eventualne probleme prilikom 
kreiranja baze, uvjerite se da baza podataka postoji, te da su upisani podaci ispravni.';
public $DBCONF_4 = 'Upišite prefiks tabela u bazi podataka (default=_elx).';
public $DBCONF_5 = 'Upišite korisničko ime i lozinku za bazu podataka. Budite sigurni da korisnik već postoji, te da ima odgovarajuće ovlasti (privilegije).';
public $OTHER_SETTINGS = 'Ostale postavke';
public $DBTYPE = 'Tip baze podataka';
public $DBTYPE_COMMENT = 'Uobičajeno "MySQL"';
public $DBNAME = 'Naziv baze podataka';
public $DBNAME_COMMENT = 'Neki hostovi dopuštaju samo određene nazive baze podataka. U tom slučaju, koristite Elxis prefiks tabela, da bi se razlikovale od ostalih podataka u bazi.'; 
public $DBPATH = 'Putanja baze podataka';
public $DBPATH_COMMENT = 'Neke vrste baza podataka, kao Access, InterBase i FireBird, 
	zahtijevaju upisivanje naziva i putanje do datoteke, umjesto naziva baze. U tom slučaju, ovdje je potrebno upisati putanju do datoteke.
	Primjer: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Naziv hosta';
public $USLOCALHOST = 'Uobičajeno "localhost", ili npr. mysql.mojadomena.xyz';
public $DBUSER = 'Korisničko ime za bazu podataka';
public $DBUSER_COMMENT = 'Za lokalne instalacije, npr. na Xampp serveru, uobičajeno je "root" , ili ime koje ste upisali prilikom kreiranja baze, ili ime koje je dodijelio hoster.';
public $DBPASS = 'Lozinka za bazu podataka';
public $DBPASS_COMMENT = 'Zbog sigurnosti vašeg sajta, korištenje lozinke za bazu podataka je obavezno.';
public $VERIFY_DBPASS = 'Potvrdite lozinku za bazu podataka';
public $VERIFY_DBPASS_COMMENT = 'Potvrdite lozinku za bazu podataka';
public $DBPREFIX = 'Prefiks tabela baze podataka';
public $DBPREFIX_COMMENT = 'Nemojte koristiti "old_" jer je predviđen za pohrane podataka';
public $DBDROP = 'Brisanje postojećih tabela';
public $DBBACKUP = 'Backup postojećih tabela';
public $DBBACKUP_COMMENT = 'Postojeće pohranjene tabele će biti prebrisane !';
public $INSTALL_SAMPLE = 'Instalacija primjera';
public $SAMPLEPACK = 'Instalacijski paket primjera';
public $SAMPLEPACKD = 'Elxis omogućuje prilagodbu sadržaja i izgled sajta, od samog početka, 
ponudom najprikladnijeg paketa primjera. Također možete uraditi i čistu instalaciju, 
bez paketa sa primjerima (za napredne korisnike).';
public $NOSAMPLE = 'Ništa (Nije preporučeno)';
public $DEFAULTPACK = 'Elxis Default';
public $PASS_NOTMATCH = 'Lozinke baze podataka ne odgovaraju.';
public $CNOT_CONDB = 'Spajanje na bazu podataka nije uspjelo.';
public $FAIL_CREATEDB = 'Greška prilikom kreiranja baze podataka %s';
public $ENTERSITENAME = 'Upišite naziv sajta';
public $STEPDB_SUCCESS = 'Prethodni korak u instalaciji je uspješno okončan. U nastavku je potrebno upisati neke parametre vašeg sajta.';
public $STEPDB_FAIL = 'Najmanje jedna fatalna pogreška se dogodila u prethodnom koraku instalacije. Nastavak nije moguć. 
	Vratite se na prethodni korak u instalaciji, i popravite postavke baze podataka. Slijede poruke o greškama 
	prilikom instalacije:';
public $SITENAME_INFO = 'Upišite naziv vašeg Elxis sajta. Ovaj naziv se koristi i prilikom slanja e-mail poruka, stoga nastojte upisati nešto smisleno, što najbolje opisuje vaš sajt.';
public $SITENAME = 'Naziv sajta';
public $SITENAME_EG = 'npr. Moja Elxis stranica';
public $OFFSET = 'Pomak';
public $SUGOFFSET = 'Preporučeni pomak';
public $OFFSETDESC = 'Vremenska razlika u satima između servera i Vašeg računala. Ukoliko želite ispravan prikaz vremena, odaberite ispravan vremenski pomak.';
public $SERVERTIME = 'Vrijeme na serveru';
public $LOCALTIME = 'Lokalno vrijeme';
public $DBINFOEMPTY = 'Podaci o bazi podataka su prazni/neispravni!';
public $SITENAME_EMPTY = 'Naziv sajta nije upisan';
public $DEFLANGUNPUB = 'Default jezik za frontend nije objavljen!';
public $URL = 'URL';
public $PATH = 'Putanja';
public $URLPATH_DESC = 'Ukoliko URL i putanja izgledaju ispravno, nemojte ništa mijenjati. Ako niste sigurni, kontaktirajte  
	vlasnika servera ili administratora. Uobičajeno, prikazane vrijednosti su ispravne, i nije ih potrebno korigirati.';
public $DBFILE_NOEXIST = 'Datoteka baze podataka ne postoji !';
public $ADODB_MISSES = 'Potrebne ADOdb datoteke ne postoje !';
public $SITEURL_EMPTY = 'Upišite URL vašeg sajta';
public $ABSPATH_EMPTY = 'Upišite apsolutnu putanju Vašeg sajta';
public $PERSONAL_INFO = 'Osobne informacije';
public $YOUREMAIL = 'vaš E-mail';
public $ADMINRNAME= 'Stvarno ime Administratora';
public $ADMINUNAME = 'Korisničko ime Administratora';
public $ADMINPASS = 'Lozinka Administratora';
public $CHANGEPROFILE = 'Nakon instalacije, možete se prijaviti administraciju i promijeniti gornje podatke.';
public $FATAL_ERRORMSGS = 'Najmanje jedna fatalna greška se dogodila. Nije moguće nastaviti. 
Slijede poruke o greškama prilikom instalacije:';
public $EMPTYNAME = 'Upišite pravo ime korisnika.';
public $EMPTYPASS = 'Administratorska lozinka je prazna.';
public $VALIDEMAIL = 'Upišite valjanu e-mail adresu Administratora.';
public $FTPACCESS = 'FTP pristup';
public $FTPINFO = 'Omogućavanje FTP pristupa datotekama, olakšava rješavanje problema sa dozvolama 
	datoteka i direktorija. Ukoliko je omogućen FTP pristup, Elxis će moći zapisivati u direktorije/datoteke, 
	u koje inače zapisivanje nije moguće, zbog postavki PHP. Elxis instalacijska procedura će moći sačuvati 
	konačnu konfiguracijsku datoteku, u protivnom će biti potrebno ručno postavljanje datoteke.';
public $USEFTP = 'Upotreba FTP';
public $FTPHOST = 'FTP adresa hosta';
public $FTPPATH = 'FTP putanja';
public $FTPUSER = 'FTP korisnik';
public $FTPPASS = 'FTP lozinka';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'najvjerojatnije:';
public $FTPHOST_EMPTY = 'Morate upisati adresu FTP hosta';
public $FTPPATH_EMPTY = 'Morate upisati FTP putanju';
public $FTPUSER_EMPTY = 'Morate upisati FTP korisničko ime';
public $FTPPASS_EMPTY = 'Morate upisati FTP lozinku';
public $FTPPORT_EMPTY = 'Morate upisati FTP port';
public $FTPCONERROR = 'Spajanje na FTP server nije moguće';
public $FTPUNSUPPORT = 'Vaše PHP postavke ne podržavaju FTP';
public $CONFSITEDOWN = 'Sajt je isključen zbog održavanja.<br />Molimo, provjerite kasnije.';
public $CONFSITEDOWNERR = 'Sajt je privremeno nedostupan.<br />Molimo, obavijestite Administratora';
public $CONGRATS = 'Čestitke !';
public $ELXINSTSUC = 'Elxis je uspješno instaliran.';
public $THANKUSELX = 'Najljepša hvala za korištenje Elxis,';
public $CREDITS = 'Zahvale';
public $CREDITSELXGO = 'Ioannis Sannos (Elxis Team) za razvoj Elxis.';
public $CREDITSELXCO = 'Ivanu Trebješanin (Elxis Team) i članovima Elxis Community na pomoći i idejama koje su Elxis učinile boljim.';
public $CREDITSELXRTL = 'Farhadu Sakhaei (Elxis Community) jer je učinio Elxis RTL kompatibilnim.';
public $CREDITSELXTR = 'Prevoditeljima, za njihov doprinos, u stvaranju Elxis CMS, koji omogućuje korištenje na njihovim domicilnim jezicima..';
public $OTHERTHANK = 'Svim developerima, koji su doprinijeli Open Source zajednici, i čije radove Elxis dijelom koristi.';
public $CONFBYHAND = 'Instalacija nije u mogućnosti zapisati konfiguracijsku datoteku, zbog nedovoljnih 
	prava nad datotekom. Sljedeći kod morati ćete upload-ati ručno. Kliknite u polje sa prikazom koda. 
	Kad polje poplavi, znači da je kod kopiran. Kopirani kod prenesite u datoteku sa nazivom "configuration.php" 
	na vašem računalu, spremite je, zatim je pomoću FTP programa prenesite na odgovarajuće mjesto na serveru. 
	Pažnja: Datoteka mora biti sačuvana sa UTF-8 encoding';
public $LANG_SETTINGS = 'Elxis ima jedinstveno, višejezično sučelje, koje omogućuje odabir default
	frontend i backend jezika, također i više od jednog objavljenog jezika za frontend. 
	Zapamtite da u Elxis administraciji možete prilagoditi pojedinačne sadržaje, module i slično, za prikaz sa različitim odabranim jezicima.';
public $DEF_FRONTL = 'Default frontend jezik';
public $PUBL_LANGS = 'Objavljeni jezici';
public $DEF_BACKL = 'Default backend jezik';
public $LANGUAGE = 'Jezik';
public $SELECT = 'odabir';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates for Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis extensions';

//elxis 2009.0
public $STEP = 'Korak';
public $RESTARTCONF = 'Jeste li sigurni da želite pokrenuti instalaciju?';
public $DBCONSETS = 'Postavke baze';
public $DBCONSETSD = 'Unesite podatke potrebne da se Elxis povezati s bazom i unese sadržaje.';
public $CONTLAYOUT = 'Sadržaj i izgled';
public $TMPCONFIGF = 'Privremeni konfiguracioni fajl';
public $TMPCONFIGFD = 'Elxis koristi privremeni fajl za čuvanje konfiguracionih podataka.
Elxis instalacija mora biti omogućeno pisanje po ovom fajlu. Stoga morate provjeriti da li je fajl otključan za pisanje, ili uključiti FTP pristup
kako bi instalacija mogao pisati koristeći FTP konekciju.';
public $CHECKFTP = 'Provjera FTP postavke';
public $FAILED = 'Neuspješno';
public $success = 'Uspješno';
public $FTPWRONGROOT = 'FTP povezivanje je uspješno, ali dati Elxis direktorij ne postoji. Provjerite FTP korijen. ';
public $FTPNOELXROOT = 'FTP povezivanje je upešno, ali Elxis instalacija ne postoji. Provjerite FTP korijen. ';
public $FTPSUCCESS = 'Uspješno povezivanje i detekcija Elxis instalacije. Vaše FTP postavke su tačne. ';
public $FTPPATHD = 'Relativna putanja od FTP korijena do direktorija sa Elxis instalacijom bez završne kose crte (/).';
public $CNOTWRTMPCFG = 'Upisivanje u privremeni konfiguracioni fajl nije moguće (installation / tmpconfig.php)';
public $DRIVERSUPELXIS = "% s je podržan u Elxis-u";
public $DRIVERSUPSYS = "% s je podržan od strane Vašeg sistema";
public $DRIVERNSUPELXIS = "% s nije podržan u Elxis-u";
public $DRIVERNSUPSYS = "% s nije podržan od strane Vašeg sistema";
public $DRIVERSUPELXEXP = "% s podrška je eksperimentalna u Elxis-u";
public $STATICCACHE = 'Statički keš';
public $STATICCACHED = 'Statički keš je sustav koji čuva komletan HTML koji Elxis dinamički generira
u neku vrstu memorije. Keširane stranice mogu biti pozvane bez da ih PHP ponovo generira
i poziva iz baze. Statički keš čuva cijele stranice umjesto samo pojedinih HTML blokova. Uporaba statičkog keša
na opterećenim poslužiteljima dovodi do vidljivog ubrzanja.';
public $SEFURLS = 'optimizirani URL-ovi';
public $SEFURLSD = 'Ako je uključeno (preporučeno) Elxis će generirati URL-ove razumljive ljudima i pretraživačima
umjesto standardnih. SEO PRO URL-ovi će drastično poboljšati Vašu poziciju kod pretrživača,
a Vaši posjetitelji će mnogo lakše pamtiti linkove. Dodatno, PHP varijable neće biti vidljive u URL-ovima,
što će hakerima otežati posao. ';
public $RENAMEHTACC = 'Kliknite ovdje preimenovati <strong>htaccess.txt</strong> u <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Ako ova operacija ne uspije, SEO PRO će biti postavljen na Isključeno unatoč ovdje postavljenom podešavanju
(moći ćete ručno uključiti kasnije). ';
public $HTACCEXIST = 'Datoteka. htaccess Već postoji u Elxis korijen direktoriju! Morate ručno uključiti SEO PRO.';
public $SEOPROSRVS = 'SEO PRO će raditi samo na sljedećim poslužiteljima:<br />
Apache, Lighttpd, kao i svim poslužiteljima sa mod_rewrite potporom.<br />
IIS uz uporabu Ionic Isapi Rewrite filtera. ';
public $SETSEOPROY = 'Postavite SEO PRO na Da';
public $FEATENLATER = 'Ova mogućnost može biti uključena kasnije iz Elxis administracije.';
public $TEMPLATE = 'Predložak';
public $TEMPLATEDESC = 'Predložak definira izgled vašeg sajta. Odaberite predefinisani predložak za Vaš sajt.
Kasnije možete urediti svoj izbor i preuzeti druge predloške.';
public $CREDITSELXWI = 'Kostas-u Stathopoulos-u i Elxis Documentation Team-u za doprinos Elxis Wiki-ju.';
public $NOWWHAT = 'Što sad?';
public $DELINSTFOL = 'Obrišite instalacioni direktorij (installation /) i sve datoteke u njemu.';
public $AUTODELINSTFOL = 'Automatsko brisanje instalacionog direktorija.';
public $AUTODELFAILMAN = 'Ako ova operacija ne uspije, obrišite direktorij installation ručno.';
public $BENGUIDESWIKI = 'Upute za početnike na Elxis Wiki.';
public $VISITFORUMHLP = 'Potražite pomoć na Elxis forumu.';
public $VISITNEWSITE = 'Posjetite svoj novi sajt.';

}

?>