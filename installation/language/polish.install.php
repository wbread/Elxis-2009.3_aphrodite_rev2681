<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Ryszard Bryś
* @link: http://www.elxis.pl
* @email: ryszard.brys@gmail.com
* @description: Polish installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die (' Bezpośredni dostęp do tego pliku nie jest dozwolony.');


class iLanguage {

public $RTL = 0; //1 dla języków pisanych od prawej do lewej (np. Persian/Farsi)
public $ISO = 'UTF-8'; //Używaj tylko UTF-8!
public $XMLLANG ='pl'; // 2-literowy kod kraju
public $LANGNAME = 'Polski'; //Język napisany w twoim języku
public $CLOSE ='Zamknij';
public $MOVE ='Przenieś';
public $NOTE ='Uwaga';
public $SUGGESTIONS ='Sugestie';
public $RESTARTINST ='Uruchom ponownie instalację';
public $WRITABLE ='Zapisywalny';
public $UNWRITABLE ='Niezapisywalny';
public $HELP ='Pomoc';
public $COMPLETED ='Kompletny';
public $PRE_INSTALLATION_CHECK ='Przed instalacją sprawdzić';
public $LICENSE ='Licencja';
public $ELXIS_WEB_INSTALLER ='Elxis - Web Instalator';
public $DEFAULT_AGREE ='Proszę przeczytać/zaakceptować licencję, aby kontynuować instalację';
public $ALT_ELXIS_INSTALLATION ='Instalacja Elxis';
public $DATABASE ='Baza danych';
public $SITE_NAME ='Nazwa strony';
public $SITE_SETTINGS ='Ustawienia strony';
public $FINISH ='Zakończono';
public $NEXT ='Dalej >>';
public $BACK ='<< Wstecz';
public $INSTALLTEXT_01 ='Jeśli którykolwiek z tych elementów są podświetlone na czerwono, należy podjąć działanie
    w celu ich poprawienia. Nieprzestrzeganie tego obowiązku może doprowadzić do nieprawidłowego działała instalacji Elxis.';
public $INSTALLTEXT_02 ='Przed instalacją sprawdzić';
public $INSTALL_PHP_VERSION ='Wersja PHP> = 5.0.0';
public $NO ='Nie';
public $YES ='Tak';
public $ZLIBSUPPORT ='kompresji zlib wspierana';
public $AVAILABLE ='Dostępny';
public $UNAVAILABLE ='Niedostępny';
public $XMLSUPPORT ='xml wspierany';
public $CONFIGURATION_PHP ='configuration.php';
public $INSTALLTEXT_03 ='Możesz nadal instalować. Konfiguracja zostanie wyświetlona później.
    Wystarczy skopiować i wkleić tekst, a następnie przesłać plik.';
public $SESSIONSAVEPATH ='Ścieżka do zapisu sesji';
public $SUPPORTED_DBS ='Obsługiwane bazy danych';
public $SUPPORTED_DBS_INFO ='Lista obsługiwanych baz danych przez system. Zauważ, że być może niektóre
    inne mogą być także dostępne (np. SQLite).';
public $NOTSET ='Nie ustawiono';
public $RECOMMENDEDSETTINGS ='Zalecane ustawienia';
public $RECOMMENDEDSETTINGS01 ='Ustawienia te są zalecane dla PHP w celu zapewnienia pełnej zgodności z Elxis.';
public $RECOMMENDEDSETTINGS02 ='Jednakże Elxis będzie nadal działał, jeśli w ustawieniach nie będzie całkiem pasujących zalecanych ustawień.';
public $DIRECTIVE ='Dyrektywy';
public $RECOMMENDED ='Zalecany';
public $ACTUAL ='Rzeczywiste';
public $SAFEMODE ='Tryb awaryjny';
public $DISPLAYERRORS ='Wyświetl błędy';
public $FILEUPLOADS ='Przysyłanie plików';
public $MAGICGPC ='Magic Quotes GPC';
public $MAGICRUNTIME ='Magic Quotes Runtime';
public $REGISTERGLOBALS ='Register Globals';
public $OUTPUTBUFFERING ='Output Buffering';
public $SESSIONAUTO ='Session auto start';
public $ALLOWURLFOPEN ='Allow URL fopen';
public $ON ='ON';
public $OFF ='OFF';
public $DIRFPERM ='Uprawnienia plików i katalogów';
public $DIRFPERM01 ='W zależności od sytuacji Elxis może chcieć zapisać do innych folderów. Na przykład w module
instalacji Elxis będzie musiał przesyłać pliki do folderu "modules". Jeśli widzisz "niezapisywalny" możesz zmienić uprawnienia
katalogu, aby umożliwić Elxis zapis do niego, lub, dla maksymalnego bezpieczeństwa, możesz pozostawić niezapisywalny i zmienić go
na zapisywalny tylko przed zamiarem jego użycia';
public $DIRFPERM02 = 'W celu prawidłowego funkcjonowania Elxis potrzebuje foldery <strong>cache</strong>
i <strong>tmpr</strong>, aby były zapisywalne. Jeżeli nie są zapisywalne należy dokonać zmiany na zapis.';
public $ELXIS_RELEASED ='Elxis CMS jest udostępniany na zasadach Wolnego Oprogramowania i licencji GNU/GPL.';
public $INSTALL_LANG ='Wybierz język instalacji';
public $DISABLE_FUNC ='Dla bezpieczeństwa twojej strony można wyłączyć te funkcje PHP w php.ini (jeśli nie musisz z nich korzystać):';
public $FTP_NOTE ='Jeśli włączysz FTP później, Elxis będzie funkcjonował, nawet jeśli niektóre z tych folderów są tylko do odczytu.';
public $OTHER_RECOM ='Inne zalecenia';
public $OUR_RECOM_ELXIS ='Nasze zalecenia są po to aby twoje życie było łatwiejsze z lub bez Elxis.';
public $SERVER_OS ='Server OS';
public $HTTP_SERVER ='Serwer HTTP';
public $BROWSER ='Przeglądarka';
public $SCREEN_RES ='Rozdzielczość ekranu';
public $OR_GREATER ='lub większa';
public $SHOW_HIDE ='Pokaż/Ukryj';
public $SFMODALERT1 ='Twoje PHP jest uruchomione w trybie SAFE MODE!';
public $SFMODALERT2 ='Wiele cech Elxis, elementy z różnymi rozszerzeniami uruchomione w SAFE MODE mogą mieć problemy.';
public $GNU_LICENSE ='Licencja GNU/GPL';
public $INSTALL_TOCONTINUE ='*** Aby kontynuować instalację Elxis prosimy zapoznać się z licencją Elxis 
    i jeśli zgadzasz się zaznacz pole wyboru w ramach licencji ***';
public $UNDERSTAND_GNUGPL ='Rozumiem, że to oprogramowanie jest udostępniane na zasadach Licencji GNU/GPL';
public $MSG_HOSTNAME ='Proszę podać nazwę hosta';
public $MSG_DBUSERNAME ='Proszę wprowadzić nazwę użytkownika bazy danych';
public $MSG_DBNAMEPATH ='Proszę wprowadzić nazwę bazy danych lub ścieżkę';
public $MSG_SURE ='Czy jesteś pewien, że te ustawienia są poprawne ? \n Elxis będzie próbował wypełniać bazę danych z podanymi ustawieniami.';
public $DBCONFIGURATION ='Konfiguracja bazy danych';
public $DBCONF_1 ='Proszę wprowadzić nazwę hosta serwera na którym ma być zainstalowany Elxis';
public $DBCONF_2 ='Wybierz typ bazy danych, którą chcesz użyć dla Elxis';
public $DBCONF_3 ='Wprowadź nazwę bazy danych lub ścieżkę. Aby uniknąć problemów, tworzenia bazy danych przez
    instalatora Elxis upewnij się, czy baza danych już istnieje.';
public $DBCONF_4 ='Wprowadź nazwę prefiksu tabel które będzie wykorzystywane przez tą instancji Elxis.';
public $DBCONF_5 ='Podaj nazwę użytkownika i hasło bazy danych. Upewnij się, że użytkownik już istnieje i posiada wszystkie wymagane uprawnienia.';
public $OTHER_SETTINGS ='Inne ustawienia';
public $DBTYPE ='Baza danych typu';
public $DBTYPE_COMMENT ='Zwykle"MySQL"';
public $DBNAME ='Nazwa bazy danych';
public $DBNAME_COMMENT ='Niektóre hosty i tylko niektóre nazwy DB są właściwe. Użyj prefiksu bazy w tym przypadku do różnych miejsc Elxis.';
public $DBPATH ='Baza danych o ścieżce';
public $DBPATH_COMMENT ='Niektóre rodzaje baz danych, takich jak dostęp, InterBase i FireBird,
    wymagają, aby ustawić plik bazy danych zamiast nazwy bazy danych. W tym przypadku należy napisać tutaj
    Ścieżkę do tego pliku. Przykład: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME ='Nazwa Hosta';
public $USLOCALHOST ='zazwyczaj "localhost"';
public $DBUSER ='Użytkownik Bazy Danych';
public $DBUSER_COMMENT ='Albo coś jako "root" lub podanych przez użytkownika hosta';
public $DBPASS ='Baza danych hasło';
public $DBPASS_COMMENT ='Dla bezpieczeństwa twojej strony używanie hasła do konta mysql jest obowiązkowe';
public $VERIFY_DBPASS ='Sprawdź hasło bazy danych';
public $VERIFY_DBPASS_COMMENT ='Powtórz hasło do weryfikacji';
public $DBPREFIX ='Prefiks tabeli bazy danych';
public $DBPREFIX_COMMENT ='Nie używać "old ", ponieważ jest to wykorzystywane do tworzenia kopii zapasowej tabel';
public $DBDROP ='Usuwanie istniejących tabel';
public $DBBACKUP ='Kopia zapasowa Starych tabel';
public $DBBACKUP_COMMENT ='Wszelkie zapasowe istniejące tabele z byłych instalacji Elxis zostaną zastąpione';
public $INSTALL_SAMPLE ='Zainstaluj przykładowe dane';
public $SAMPLEPACK ='Przykładowy pakiet danych';
public $SAMPLEPACKD ='Elxis pozwala określić zawartość swojej witryny i wygląd od początku
    wybierając Dane Przykładowych pakietów, które najlepiej odpowiadają potrzebom Twojej witryny. Można również wybrać, aby nie 
    instalować próbek wszystkich danych (nie zalecane).';
public $NOSAMPLE ='Brak (nie zalecane)';
public $DEFAULTPACK ='Elxis domyślny';
public $PASS_NOTMATCH ='Baza danych, pod warunkiem podania hasła, nie pasują do siebie.';
public $CNOT_CONDB ='Nie można połączyć się z bazą danych.';
public $FAIL_CREATEDB ='Nie można utworzyć bazy danych %s';
public $ENTERSITENAME ='Proszę wprowadzić nazwę witryny';
public $STEPDB_SUCCESS ='Poprzedni krok zakończony pomyślnie. Możesz teraz kontynuować wprowadzając parametry witryny.';
public $STEPDB_FAIL ='Co najmniej jeden poważny błąd w poprzednim kroku. 
    Nie można kontynuować. Proszę wrócić i poprawić ustawienia bazy danych. W instalatorze 
    Elxis wystąpił następujący komunikat o błędzie:';
public $SITENAME_INFO ='Wpisz nazwę strony Elxis. Ta nazwa jest używana w wiadomości, e-mail aby uczynić go rozpoznawalnym.';
public $SITENAME ='Nazwa strony';
public $SITENAME_EG ='np. Strona domowa Elxis';
public $OFFSET ='Offset';
public $SUGOFFSET ='Proponowany offset';
public $OFFSETDESC ='Różnica czasu w godzinach między serwerem a komputerem. Jeśli chcesz zsynchronizować czas lokalny z Elxis ustaw odpowiedni offset';
public $SERVERTIME ='Serwer czasu';
public $LOCALTIME ='Twój czas lokalny';
public $DBINFOEMPTY ='Baza danych informacji jest pusta/niedokładna!';
public $SITENAME_EMPTY ='Nie podano nazwy strony';
public $DEFLANGUNPUB ='Domyślne języki Front-End niepublikowane!';
public $URL ='URL';
public $PATH ='Ścieżka';
public $URLPATH_DESC ='Jeśli adres URL i ścieżka jest prawidłowa, 
    proszę nie zmieniać, jeśli nie jesteś pewny. Następnie skontaktuj się z usługodawcą internetowym lub administratorem systemu. Zwykle wartości wyświetlane będą dla witryny.';
public $DBFILE_NOEXIST ='plik bazy danych nie istnieje!';
public $ADODB_MISSES ='Brakuje wymaganych plików ADOdb!';
public $SITEURL_EMPTY ='Proszę podać adres URL witryny';
public $ABSPATH_EMPTY ='Proszę podać bezwzględną ścieżkę do witryny';
public $PERSONAL_INFO ='Informacje osobiste';
public $YOUREMAIL ='Twój e-mail';
public $ADMINRNAME= 'Administrator prawdziwe imię';
public $ADMINUNAME ='Administrator nazwa';
public $ADMINPASS ='Administrator hasło';
public $CHANGEPROFILE ='Po instalacji można zalogować się w nowym miejscu, co umożliwi zmianę powyższych informacji i konfiguracji profilu.';
public $FATAL_ERRORMSGS ='Co najmniej jeden poważny błąd. Nie można kontynuować. 
    W instalatorze Elxis wystąpił następujący komunikat o błędzie:';
public $EMPTYNAME ='Musisz podać swoje prawdziwe nazwisko.';
public $EMPTYPASS ='Hasło administratora jest puste.';
public $VALIDEMAIL ='Musisz podać prawidłowy adres e-mail admina.';
public $FTPACCESS ='Dostęp FTP';
public $FTPINFO ='Włączenie dostępu przez FTP do plików rozwiązuje wiele problemów związanych z uprawnieniami. 
    Jeśli włączysz FTP Elxis będzie mógł zapisywać do folderów/plików, które są NEZAPISYWALNE przez PHP. Instalator Elxis
    będzie mógł również zapisać końcowy plik konfiguracyjny dla witryny, w przeciwnym razie może okazać się 
    konieczne utworzenie i przesłanie go ręcznie.';
public $USEFTP ='Użyj FTP';
public $FTPHOST ='host FTP';
public $FTPPATH ='ścieżka FTP';
public $FTPUSER ='użytkownik FTP';
public $FTPPASS ='hasło FTP';
public $FTPPORT ='port FTP';
public $MOSTPROB ='Najprawdopodobniej:';
public $FTPHOST_EMPTY ='Musisz podać host FTP';
public $FTPPATH_EMPTY ='Musisz podać ścieżkę FTP';
public $FTPUSER_EMPTY ='Musisz podać użytkownika FTP';
public $FTPPASS_EMPTY ='Musisz podać hasło FTP';
public $FTPPORT_EMPTY ='Musisz podać port FTP';
public $FTPCONERROR ='Nie można połączyć się z FTP host';
public $FTPUNSUPPORT ='Twoja ustawienia PHP nie obsługują połączeń FTP';
public $CONFSITEDOWN ='Ta witryna jest nieczynna z powodu konserwacji. <br /> Proszę sprawdź później.';
public $CONFSITEDOWNERR ='Ta strona jest chwilowo niedostępna. <br /> Proszę powiadomić administratora systemu';
public $CONGRATS ='Gratulacje!';
public $ELXINSTSUC ='Elxis pomyślnie zainstalowany.';
public $THANKUSELX ='Dziękujemy za korzystanie z Elxis,';
public $CREDITS ='Zasługi';
public $CREDITSELXGO ='Dla Ioannis Sannos (Elxis Team) za rozwój Elxis.';
public $CREDITSELXCO ='Dla Trebjesanin Ivan (Elxis Team) i członków społeczności Elxis za ich pomoc i pomysły na uczynienie Elxis lepszym.';
public $CREDITSELXRTL ='Dla Farhad Sakhaei (Elxis Community) za wkład na rzecz kompatybilności Elxis RTL.';
public $CREDITSELXTR ='Dla tłumaczy za ich wkład na rzecz tłumaczenia Elxis CMS dla użytkowników języków ojczystych';
public $OTHERTHANK ='Dla wszystkich deweloperów, którzy przyczynili się do rozwoju społeczności Open Source i części ich prac są wykorzystywane w Elxis.';
public $CONFBYHAND ='Instalator nie mógł zapisać pliku konfiguracyjnego do witryny z powodu braku praw zapisu. 
    Musisz przesłać następujący kod ręcznie. Kliknij w textarea i zaznacz cały kod.
    Wklej go w plik php o nazwie "configuration.php" i przeslij go do folderu głównego Elxis.
    Uwaga: Plik musi być zapisany jako UTF-8';
public $LANG_SETTINGS ='Elxis posiada unikalny wielojęzyczny interfejs pozwalający ustawić domyślny
    język Front-Endu i Back-Endu. Pozwala na więcej niż jeden język Front-Endu.
    Należy pamiętać, że w dalszej części administracji Elxis można ustawić indywidualnie treści artykułów, modułów itp.
    do stawienia się w konkretnej kombinacji języków.';
public $DEF_FRONTL ='Domyślny język Front-End';
public $PUBL_LANGS ='Języki publikacji';
public $DEF_BACKL ='Domyślny język Back-End';
public $LANGUAGE ='Język';
public $SELECT ='wybierz';
public $TEMPLATES ='Szablony';
public $TEMPLATESTITLE ='Szablony dla Elxis CMS';
public $DOWNLOADS ='Pobieranie';
public $DOWNLOADSTITLE ='Pobierz rozszerzenia Elxis';

// elxis 2009.0
public $STEP ='Krok';
public $RESTARTCONF = 'Czy na pewno chcesz ponownie uruchomić instalację?';
public $DBCONSETS = 'Ustawienia połączeń Baz Danych';
public $DBCONSETSD = 'Wypełnij potrzebne informacje aby Elxis połączył się z bazą danych i zaimportował dane podstawowe.';
public $CONTLAYOUT ='Treść i układ';
public $TMPCONFIGF ='Tymczasowe plik konfiguracyjne';
public $TMPCONFIGFD = 'Elxis korzysta z plików tymczasowych do przechowywania parametrów konfiguracyjnych w czasie instalacji.
Instalator Elxis musi mieć możliwość zapisu tego pliku. Więc musi ten plik mieć prawo zapisu lub instalator ma mieć możliwość dostępu przez FTP w celu
jego zapisu za pomocą połączenia FTP.';
public $CHECKFTP ='Sprawdź ustawienia FTP';
public $FAILED = 'Nie powiodło się';
public $SUCCESS = 'Sukces';
public $FTPWRONGROOT ='Połączenie do FTP, ale zważywszy katalog Elxis nie istnieje. Sprawdź wartość FTP Root';
public $FTPNOELXROOT ='Połączenie FTP, jednak ze względu na FTP Root nie zawiera instalacji Elxis. Sprawdź wartość FTP Root';
public $FTPSUCCESS = 'Udane połączenie i detekcja instalacji Elxis. Twoje FTP ustawiene są poprawnie.';
public $FTPPATHD ='Względne ścieżki katalogu głównego FTP do instalacji Elxis bez końcowego ukośnika (/).';
public $CNOTWRTMPCFG = 'Nie można zapisać do tymczasowego pliku konfiguracyjnego (installation/tmpconfig.php)';
public $DRIVERSUPELXIS ="%s jest obsługiwany przez sterownik Elxis"; // pomoc w tłumaczeniu: wypełnione przez bazy danych typu (driver)
public $DRIVERSUPSYS ="%s driver jest obsługiwany przez system"; // pomoc w tłumaczeniu: wypełnione przez bazy danych typu (driver)
public $DRIVERNSUPELXIS ="%s driver nie jest obsługiwany przez Elxis"; // pomoc w tłumaczeniu: wypełnione przez bazy danych typu (driver)
public $DRIVERNSUPSYS ="%s driver nie jest obsługiwany przez system"; // pomoc w tłumaczeniu: wypełnione przez bazy danych typu (driver)
public $DRIVERSUPELXEXP ="%s driver wsparcie Elxis jest eksperymentalna"; // pomoc w tłumaczeniu: wypełnione przez bazy danych typu (driver)
public $STATICCACHE ='Static cache ';
public $STATICCACHED ='Statystyka cache jest plikiem buforowania systemu przechowuje dynamicznie generowane przez Elxis strony HTML
do rodzaju pamięci. Buforowane strony można przywołać z pamięci bez konieczności ponownego wykonywania kodu PHP lub
ponownego zapytania do bazy danych. Statycznye ceche buforuje całe stron HTML zamiast pojedyncze bloki. Wykorzystanie statyczne cache
w ciężkich załadowaniach stron internetowych prowadzi do widocznej poprawy szybkości.';
public $SEFURLS ='Przyjazne adresy URL dla wyszukiwarek ';
public $SEFURLSD ='Jeśli aktywny (bardzo zalecane) Elxis wygeneruje przyjazne adresy URL dla wyszukiwarek i ludzi.
zamiast jego standardowych. SEO PRO adresy pogłębi ranking witryny w wyszukiwarkach i strony będą
o wiele łatwiejsze do zapamiętania przez odwiedzających witrynę. Dodatkowo wszystkie zmienne PHP zostaną usunięte z adresów
podejmowania witryny będzie to bezpieczniejsze przed atakami hakerów.';
public $RENAMEHTACC ='Kliknij tutaj, aby zmienić nazwę <strong>htaccess.txt</strong> na <strong>.htaccess</strong>.';
public $RENAMEHTACC2 ='Jeśli to się nie powiedzie wówczas SEO PRO zostanie ustawiona na OFF niezależnie od wybranego ustawienia tutaj
(będziesz mógł włączyć ją ręcznie później).';
public $HTACCEXIST = '.htaccess już istnieje w folderze głównym Elxis! Musisz włączyć SEO PRO ręcznie.';
public $SEOPROSRVS = 'SEO PRO będzie działać tylko w ramach następujących serwerów: <br />
Apache, Lighttpd, lub innymi kompatybilnymi serwerami internetowymi ze wsparciem mod_rewrite. <br />
IIS z korzysta z Ionic Isapi Rewrite filter.';
public $SETSEOPROY = 'Proszę ustawić SEO PRO na TAK';
public $FEATENLATER ='Ta funkcja może być również aktywowana później z poziomu administracji Elxis.';
public $TEMPLATE = 'Szablon';
public $TEMPLATEDESC = 'Szablon określa wygląd twojej witryny internetowej. Wybierz domyślny szablon na twojej stronie. 
Możesz zmienić wybór później lub pobrać i zainstalować dodatkowe szablony.';
public $CREDITSELXWI = 'Podziękowania Kostas Stathopoulos i Elxis Documentation Team za ich wkład do Elxis Wiki.';
public $NOWWHAT = 'I co teraz?';
public $DELINSTFOL ='Całkowicie usuń folder instalacji (installation/).';
public $AUTODELINSTFOL = 'Automatycznie usuń folder instalacyjny.';
public $AUTODELFAILMAN ='Jeśli to się nie powiedzie, usunąć folder instalacyjny ręcznie.';
public $BENGUIDESWIKI = 'Początkujący przewodniki na Elxis Wiki. ';
public $VISITFORUMHLP ='W razie pomcy odwiedź forum Elxis.';
public $VISITNEWSITE ='Odwiedź swoją nową witrynę sieci Web.';

}

?>