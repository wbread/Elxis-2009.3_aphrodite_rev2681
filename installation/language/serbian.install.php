<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Ivan Trebješanin
* @translator URL: http://www.elxis-srbija.org
* @translator E-mail: admin@elxis-srbija.org
* @description: Serbian installation Language
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
public $XMLLANG = 'rs'; //2-letter country code 
public $LANGNAME = 'Srpski'; //This language written in your language
public $CLOSE = 'Zatvaranje';
public $MOVE = 'Premeštaj';
public $NOTE = 'Beleška';
public $SUGGESTIONS = 'Sugestije';
public $RESTARTINST = 'Restart instalacije';
public $WRITABLE = 'Otključano';
public $UNWRITABLE = 'Zaključano';
public $HELP = 'Pomoć';
public $COMPLETED = 'Završeno';
public $PRE_INSTALLATION_CHECK = 'Preinstalaciona provera';
public $LICENSE = 'Licenca';
public $ELXIS_WEB_INSTALLER = 'Elxis - Veb instalator';
public $DEFAULT_AGREE = 'Molimo Vas da pročitate/prihvatite licencu pre nastavka instalacije';
public $ALT_ELXIS_INSTALLATION = 'Elxis instalacija';
public $DATABASE = 'Baza';
public $SITE_NAME = 'Ime sajta';
public $SITE_SETTINGS = 'Podešavanja sajta';
public $FINISH = 'Kraj';
public $NEXT = 'Dalje >>';
public $BACK = '<< Nazad';
public $INSTALLTEXT_01 = 'Ukoliko je bilo koja od ovih stavki označena crvenom bojom, molimo Vas da 
	da učinite sve što je potrebno da ispravite greške. Ukoliko to ne uradite, Elxis instalacije neće raditi kako treba.';
public $INSTALLTEXT_02 = 'Preinstalaciona provera za';
public $INSTALL_PHP_VERSION = 'PHP verzija >= 5.0.0';
public $NO = 'Ne';
public $YES = 'Da';
public $ZLIBSUPPORT = 'zlib kompresija';
public $AVAILABLE = 'Dostupno';
public $UNAVAILABLE = 'Nedostupno';
public $XMLSUPPORT = 'xml podrška';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Još uvek možete nastaviti instalaciju. Konfiguracioni podaci će biti prikazani kasnije. 
    Jednostavno kopirajte ove podatke i napravite fajl koji ćete dodati na server.';
public $SESSIONSAVEPATH = 'Putanja čuvanja sesije';
public $SUPPORTED_DBS = 'Podržane baze';
public $SUPPORTED_DBS_INFO = 'Lista baza koje Vaš sistem podržava. Imajte u vidu da 
	i neke druge mogu biti podržane (npr. SQLite).';
public $NOTSET = 'Nedefinisano';
public $RECOMMENDEDSETTINGS = 'Preporučena podešavanja';
public $RECOMMENDEDSETTINGS01 = 'Ova podešavanja su preporučena za PHP kako bi se osigurala puna kompatibilnost sa Elxis-om.';
public $RECOMMENDEDSETTINGS02 = 'Ipak, Elxis je u stanju da funkcioniše čak i ako podešavanja nisu u potpunosti ista kao preporučena';
public $DIRECTIVE = 'Direktiva';
public $RECOMMENDED = 'Preporučeno';
public $ACTUAL = 'Trenutno';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'Uključeno';
public $OFF = 'Isključeno';
public $DIRFPERM = 'Dozvole fajlova i direktorijuma';
public $DIRFPERM01 = 'U zavisnosti od situacije, Elxis će možda morati da upisuje i u neke druge direktorijume. Na primer, 
tokom instalacije Elxis će morati da doda neke fajlove u direktorijum "modules". Ukoliko negde vidite "Zaključano" promenite dozvole 
direktorijuma, kako bi Elxis mogao u njih da upisuje ili, za maksimalnu sigurnost, ostavite ih zaključanim 
a otključajte ih neposredno pre instalacije modula.';
public $DIRFPERM02 = 'Kako bi Elxis pravilno funkcionisao, neophodno je da direktorijumi <strong>cache</strong> 
	i <strong>tmpr</strong> budu otključani. Ukoliko nije tako, molimo Vas da promenite dozvole pomenutih direktorijuma.';
public $ELXIS_RELEASED = 'Elxis CMS je besplatni softver objavljen pod GNU/GPL licencom.';
public $INSTALL_LANG = 'Izbor jezika instalacije';
public $DISABLE_FUNC = 'Radi sigurnosti Vašeg sajta, preporučujemo Vam da isključite sledeće PHP funkcije putem fajla php.ini (ukoliko ih ne koristite):';
public $FTP_NOTE = 'Ukoliko kasnije uključite FTP, Elxis će biti funkcionalan čak i ako su neki fajlovi/direktorijumi zaključani.';
public $OTHER_RECOM = 'Ostale preporuke';
public $OUR_RECOM_ELXIS = 'Naše preporuke za lakši život, sa ili bez Elxis-a.';
public $SERVER_OS = 'OS servera';
public $HTTP_SERVER = 'HTTP server';
public $BROWSER = 'Brauzer';
public $SCREEN_RES = 'Rezolucija monitora';
public $OR_GREATER = 'ili više';
public $SHOW_HIDE = 'Prikaz/Skrivanje';
public $SFMODALERT1 = 'VAŠ PHP RADI U SAFE MODE-u!';
public $SFMODALERT2 = 'Mnoge Elxis funkcije, komponente i ekstenzije imaju problem sa SAFE MODE-om.';
public $GNU_LICENSE = 'GNU/GPL licenca';
public $INSTALL_TOCONTINUE = '*** Pre nastavka instalacije instalacije, molimo Vas da pročitate Elxis licencu 
	i štiklirate polje ispod, ukoliko se slažete sa uslovima. ***';
public $UNDERSTAND_GNUGPL = 'Razumem da je ovaj softver objavljen pod GNU/GPL licencom';
public $MSG_HOSTNAME = 'Unesite ime domaćina';
public $MSG_DBUSERNAME = 'Unesite ime korisnika baze';
public $MSG_DBNAMEPATH = 'Unesite ime baze ili putanju';
public $MSG_SURE = 'Da li ste sigurni da su ova podešavanja tačna? \n Elxis će probati da popuni bazu koristeći uneta podešavanja';
public $DBCONFIGURATION = 'Konfiguracija baze';
public $DBCONF_1 = 'Unesite ime servera domaćina na kome će Elxis biti instaliran';
public $DBCONF_2 = 'Izaberite tip baze koju će Elxis koristiti';
public $DBCONF_3 = 'Unesite ime bate ili putanju. Kako biste izbegli moguće probleme koji mogu nastati 
	ako Elxis instalator pravi bazu, najpre proverite da li ta baza postoji.';
public $DBCONF_4 = 'Unesite prefiks baze koji će koristiti ova Elxis instalacija.';
public $DBCONF_5 = 'Unesite ime korisnika baze i lozinku. Najpre proverite da li korisnik postoji, i da li ima odgavarajuće privilegije.';
public $OTHER_SETTINGS = 'Ostala podešavanja';
public $DBTYPE = 'Tip baze';
public $DBTYPE_COMMENT = 'Uobičajeno "MySQL"';
public $DBNAME = 'Ime baze';
public $DBNAME_COMMENT = 'Neki domaćini dozvoljavaju samo određena imena baze prema datom sajtu. Koristite prefiks kako biste razdvojili različite Elxis instalacije.'; 
public $DBPATH = 'Putanja baze';
public $DBPATH_COMMENT = 'Neki tipovi baza, kao npr. Access, InterBase i FireBird, 
	zahtevaju da unesete putanju baze. U slučaju da koristite neki od ovih tipova baze, unesite 
	ovde putanju do fajla baze. Primer: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Domaćin';
public $USLOCALHOST = 'Uobičajeno "localhost"';
public $DBUSER = 'Ime korisnika baze';
public $DBUSER_COMMENT = 'Ili "root" ili korisničko ime koje Vam je dodelio domaćin';
public $DBPASS = 'Lozinka baze';
public $DBPASS_COMMENT = 'Zarad sigurnosti Vašeg sajta, lozinka je obavezna';
public $VERIFY_DBPASS = 'Provera lozinke';
public $VERIFY_DBPASS_COMMENT = 'Ponovo unesite lozinku radi provere';
public $DBPREFIX = 'Prefiks tabela baze';
public $DBPREFIX_COMMENT = 'Nemojte koristiti "old_" jer će ovaj prefiks biti korišćen za bekap baze';
public $DBDROP = 'Brisanje postojećih tabela';
public $DBBACKUP = 'Bekap postojećih tabela';
public $DBBACKUP_COMMENT = 'Sve postojeće tabele iz prethodnog bekapa Elxis instalacije biće obrisane';
public $INSTALL_SAMPLE = 'Instalacije pokaznih sadržaja';
public $SAMPLEPACK = 'Pokazni paket sadržaja';
public $SAMPLEPACKD = 'Elxis omogućava izbor sadržaja i izgleda sajta od samog početka, 
	tako što ćete izabrati pokazni paket sadržaja. Takođe, možete odlučiti 
	ida ne instalirate nijedan paket (nije preporučljivo).';
public $NOSAMPLE = 'Ništa (nije preporučljivo)';
public $DEFAULTPACK = 'Elxis predefinisano';
public $PASS_NOTMATCH = 'Unete lozinke se ne poklapaju.';
public $CNOT_CONDB = 'Ne mogu da se povežem sa bazom.';
public $FAIL_CREATEDB = 'Ne mogu da napravim %s';
public $ENTERSITENAME = 'Unesite ime sajta';
public $STEPDB_SUCCESS = 'Prethodni korak je uspešno završen. Možete nastaviti tako što ćete uneti ime sajta.';
public $STEPDB_FAIL = 'Došlo je do najmanje jedne kritične greške u prethodnom koraku. Ne 
	možete da nastavite. Molimo Vas da se vratite korak nazad i ispravite greške. Elxis 
	ne može da nstavi instalaciju zbog sledeće greške:';
public $SITENAME_INFO = 'Unesite ovde ime Vašeg Elxis sajta. Ovo ime se koristi pri slanju e-pošte, zato se potrudite da bude smisleno.';
public $SITENAME = 'Ime sajta';
public $SITENAME_EG = 'n.p.r. Elxis sajt';
public $OFFSET = 'Odstupanje';
public $SUGOFFSET = 'Preporučeno odstupanje';
public $OFFSETDESC = 'Vremenska razlika između vremena na serveru i Vašem računaru (u satima). Ako želite da sinhronizujete Elxis sa Vašm lokalnim vremenom, podesite odstupanje.';
public $SERVERTIME = 'Vreme na serveru';
public $LOCALTIME = 'Vaše lokalno vreme';
public $DBINFOEMPTY = 'Informacije o bazi su prazne ili netačne!';
public $SITENAME_EMPTY = 'Ime sajta nije upisano';
public $DEFLANGUNPUB = 'Predefinisani javni jezik je odjavljen!';
public $URL = 'URL';
public $PATH = 'Putanja';
public $URLPATH_DESC = 'Ukoliko URL i putanja izgledaju tačno, ništa ne menjajte. Ukoliko niste sigurni, 
	molimo Vas da kontaktirate administratora sistema. Prikazane vrednosti su najčešće tačne.';
public $DBFILE_NOEXIST = 'Fajl baze ne postoji!';
public $ADODB_MISSES = 'Zahtevani ADOdb fajlovi ne postoje!';
public $SITEURL_EMPTY = 'Unesite URL sajta';
public $ABSPATH_EMPTY = 'Unesite apsolutnu putanju do Vašeg sajta';
public $PERSONAL_INFO = 'Lične informacije';
public $YOUREMAIL = 'Vaša e-pošta';
public $ADMINRNAME= 'Stvarno ime administratora';
public $ADMINUNAME = 'Korisničko ime administratora';
public $ADMINPASS = 'Administratorska lozinka';
public $CHANGEPROFILE = 'Nakon instalacije možete se prijaviti na Vaš novi sajt, izmeniti ove informacije, i urediti svoj profil.';
public $FATAL_ERRORMSGS = 'Došlo je do najmanje jedne kritične greške. Ne možete da nastavite. 
Elxis ne može da nastavi zbog sledeće greške:';
public $EMPTYNAME = 'Morate uneti stvarno ime.';
public $EMPTYPASS = 'Administratorska lozinka je prazna.';
public $VALIDEMAIL = 'Morate uneti tačnu adresu e-pošte administratora.';
public $FTPACCESS = 'FTP pristup';
public $FTPINFO = 'Omogućavanje FTP pristupa fajlovima rešava mnoge probleme sa njihovim dozvolama. 
	Ukoliko omogućite FTP, Elxis će biti u stanju da piše pofajlovima po koji su zaključani za PHP. Takođe, Elxis instalator 
	će biti u stanju da sačuva konačnu konfiguraciju koju biste u suprotnom morali 
	ručno da napravite i dodate na sajt.';
public $USEFTP = 'Upotreba FTP';
public $FTPHOST = 'FTP domaćin';
public $FTPPATH = 'FTP putanja';
public $FTPUSER = 'FTP korisnik';
public $FTPPASS = 'FTP lozinka';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'Najverovatnije:';
public $FTPHOST_EMPTY = 'Morate uneti FTP domaćina';
public $FTPPATH_EMPTY = 'Morate uneti FTP putanju';
public $FTPUSER_EMPTY = 'Morate uneti FTP korisnika';
public $FTPPASS_EMPTY = 'Morate uneti FTP lozinku';
public $FTPPORT_EMPTY = 'Morate uneti FTP port';
public $FTPCONERROR = 'Ne mogu da se povežem sa FTP domaćinom';
public $FTPUNSUPPORT = 'Vaša PHP podešavanja ne omogućavaju FTP povezivanje';
public $CONFSITEDOWN = 'Sajt je trenutno nedostupan zbog održavanja.<br />Molimo Vas da dođete kasnije.';
public $CONFSITEDOWNERR = 'Sajt je trenutno nedostupan.<br />Molimo Vas da obavestite administratora';
public $CONGRATS = 'Čestitamo!';
public $ELXINSTSUC = 'Elxis je uspešno instaliran na Vaš sajt.';
public $THANKUSELX = 'Hvala što koristite Elxis,';
public $CREDITS = 'Zahvalnost';
public $CREDITSELXGO = 'Ioannis-u Sannos-u (Elxis Team) za razvoj Elxis-a.';
public $CREDITSELXCO = 'Ivanu Trebješaninu (Elxis Team) i članovima Elxis Community za njihovu pomoć i ideje koje čine Elxis boljim.';
public $CREDITSELXRTL = 'Farhadu Sakeiju (Elxis Community) jer je učinio da Elxis bude RTL kompatibilan.';
public $CREDITSELXTR = 'Prevodiocima na svom doprinosu da Elxis bude CMS koji poštuje maternji jezik svojih korisnika.';
public $OTHERTHANK = 'Svim programerima koji su doprineli Open Source zajednici i Elxis-u kroz delove kôda koje koristi.';
public $CONFBYHAND = 'Instalator ne može da sačuva konfiguracioni fajl zbog problema sa dozvolama za pisanje/čitanje. 
	Sledeći kôd ćete morati da dodate ručno. Kliknite na tekst da biste izabrali ceo kôd. 
	Zalepite ga u php fajl nazvan "configuration.php" i dodajte je u koreni Elxis direktorijum. 
	Pažnja: Fajl mora biti sačuvan kao UTF-8';
public $LANG_SETTINGS = 'Elxis koristi jedinstveni višejezički interfejs, koji Vam omogućava izbor 
	predefinisanih javnih i administratorskih jezika, kao i više objavljenih javnih jezika. 
	Zapamtite da možete kasnije, kroz Elxis administraciju, da podesite stavke sadržaja, module, itd. 
	prema odgovarajućoj kombinaciji jezika.';
public $DEF_FRONTL = 'Predefinisani javni jezik';
public $PUBL_LANGS = 'Objavljeni jezici';
public $DEF_BACKL = 'Predefinisani jezik administracije';
public $LANGUAGE = 'Jezik';
public $SELECT = 'izbor';
public $TEMPLATES = 'Šabloni';
public $TEMPLATESTITLE = 'Šabloni za Elxis CMS';
public $DOWNLOADS = 'Preuzimanja';
public $DOWNLOADSTITLE = 'Preuzmite ekstenzije za Elxis';

//elxis 2009.0
public $STEP = 'Korak';
public $RESTARTCONF = 'Da li ste sigurni da želite da restartujete instalaciju?';
public $DBCONSETS = 'Podešavanja baze';
public $DBCONSETSD = 'Unesite podatke potrebne da se Elxis poveže sa bazom i unese sadržaje.';
public $CONTLAYOUT = 'Sadržaj i izgled';
public $TMPCONFIGF = 'Privremeni konfiguracioni fajl';
public $TMPCONFIGFD = 'Elxis koristi privremeni fajl za čuvanje konfiguracionih podataka. 
Elxis instalatoru mora biti omogućeno pisanje po ovom fajlu. Stoga morate da proverite da li je fajl otključan za pisanje, ili da uključite FTP pristup 
kako bi instalator mogao da piše koristeći FTP konekciju.';
public $CHECKFTP = 'Provera FTP podešavanja';
public $FAILED = 'Neuspešno';
public $SUCCESS = 'Uspešno';
public $FTPWRONGROOT = 'FTP povezivanje je upešno, ali dati Elxis direktorijum ne postoji. Proverite FTP koren.';
public $FTPNOELXROOT = 'FTP povezivanje je upešno, ali Elxis instalacija ne postoji. Proverite FTP koren.';
public $FTPSUCCESS = 'Successfull connection and detetion of Elxis installation. Your FTP settings are correct.';
public $FTPPATHD = 'Relativna putanja od FTP korena do direktorijuma sa Elxis instalacijom bez završne kose crte (/).';
public $CNOTWRTMPCFG = 'Upisivanje u privremeni konfiguracioni fajl nije moguće (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s je podržan u Elxis-u"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s je podržan od strane Vašeg sistema"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s nije podržan u Elxis-u"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s nije podržan od strane Vašeg sistema"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s podrška je eksperimentalna u Elxis-u"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Statički keš';
public $STATICCACHED = 'Statički keš je sistem koji čuva komletan HTML koji Elxis dinamički generiše 
u neku vrstu memorije. Keširane stranice mogu biti pozvane bez potrebe da ih PHP ponovo generiše 
i poziva iz baze. Sttički keš čuva cele stranice umesto samo pojedinih HTML blokova. Upotreba statičkog keša 
na opterećenim serverima dovodi do vidljivog ubrzanja.';
public $SEFURLS = 'Optimizovani URL-ovi';
public $SEFURLSD = 'Ukoliko je uključeno (preporučeno) Elxis će generisati URL-ove razumljive ljudima ipretraživačima  
umesto standardnih. SEO PRO URL-ovi će drastično poboljšati Vašu poziciju kod pretrživača,  
a Vaši posetioci će mnogo lakše pamtiti linkove. Dodatno, PHP promenljive neće biti vidljive u URL-ovima,  
što će hakerima otežati posao.';
public $RENAMEHTACC = 'Kliknite ovde da preimenujete <strong>htaccess.txt</strong> u <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Ukoliko ova operacija ne uspe, SEO PRO će biti postavljen na Isključeno uprkos ovde postavljenom podešavanju 
(moći ćete ručno da uključite kasnije).';
public $HTACCEXIST = 'Fajl .htaccess Već postoji u Elxis korenom direktorijumu! Morate ručno da uključite SEO PRO.';
public $SEOPROSRVS = 'SEO PRO će raditi samo na sledećim serverima:<br />
Apache, Lighttpd, kao i svim serverima sa mod_rewrite podrškom.<br />
IIS uz upotrebu Ionic Isapi Rewrite filtera.';
public $SETSEOPROY = 'Postavite SEO PRO na Da';
public $FEATENLATER = 'Ova mogućnost može biti uključena kasnije iz Elxis administracije.';
public $TEMPLATE = 'Šablon';
public $TEMPLATEDESC = 'Šablon definiše izgled Vašeg sajta. Izaberite predefinisani šablon za Vaš sajt. 
Kasnije možete da izmenite svoj izbor i preuzmete druge šablone.';
public $CREDITSELXWI = 'Kostas-u Stathopoulos-u i Elxis Documentation Team-u za doprinos Elxis Wiki-ju.';
public $NOWWHAT = 'Šta sad?';
public $DELINSTFOL = 'Obrišite installation direktorijum (installation/) i sve fajlove u njemu.';
public $AUTODELINSTFOL = 'Automatsko brisanje installation direktorijuma.';
public $AUTODELFAILMAN = 'Ukoliko ova operacija ne uspe, obrišite direktorijum installation ručno.';
public $BENGUIDESWIKI = 'Uputstva za početnike na Elxis Wiki.';
public $VISITFORUMHLP = 'Potražite pomoć na Elxis forumu.';
public $VISITNEWSITE = 'Posetite svoj novi sajt.';

}

?>