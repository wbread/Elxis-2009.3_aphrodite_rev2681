<?php 
/**
* @version: 2009.2
* @copyright: Copyright (C) 2006-2010 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Martin Beurskens
* @description: German installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
* Translation improved 2008-02-29 Manfred Schreiweis manfred@mabitoka.de
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Direkter Zugriff zu dieser Position wird nicht erlaubt.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'de'; //2-letter country code 
public $LANGNAME = 'Deutsch'; //This language, written in your language
public $CLOSE = 'Schließen';
public $MOVE = 'Verschieben';
public $NOTE = 'Anmerkung';
public $SUGGESTIONS = 'Vorschläge';
public $RESTARTINST = 'Installation neustarten';
public $WRITABLE = 'Beschreibbar';
public $UNWRITABLE = 'Nicht beschreibbar';
public $HELP = 'Hilfe';
public $COMPLETED = 'Fertiggestellt';
public $PRE_INSTALLATION_CHECK = 'Vorinstallation überprüfen';
public $LICENSE = 'Lizenz';
public $ELXIS_WEB_INSTALLER = 'Elxis - Webinstallationsprogramm';
public $DEFAULT_AGREE = 'Bitte lesen und aktzeptieren Sie die Lizenz, um mit der Installation fortzufahren';
public $ALT_ELXIS_INSTALLATION = 'Elxis Installation';
public $DATABASE = 'Datenbank';
public $SITE_NAME = 'Name der Webseite';
public $SITE_SETTINGS = 'Einstellungen der Webseite';
public $FINISH = 'Beenden';
public $NEXT = 'Weiter >>';
public $BACK = '<< Zurück';
public $INSTALLTEXT_01 = 'Wenn irgendwelche dieser Einträge in Rot hervorgehoben werden, dann versuchen Sie die Ursache 
	für diese Hinweise zu beheben. asonsten könnte die Installation nicht richtig funktionieren.';
public $INSTALLTEXT_02 = 'Vorinstallation überprüfen auf';
public $INSTALL_PHP_VERSION = 'PHP Version >= 5.0.0';
public $NO = 'Nein';
public $YES = 'Ja';
public $ZLIBSUPPORT = 'Unterstützung der zlib-Kompression';
public $AVAILABLE = 'möglich';
public $UNAVAILABLE = 'nicht möglich';
public $XMLSUPPORT = 'XML Unterstützung';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Sie können trotzdem mit der Installation fortfahren. Die Konfigurationsdaten werden später angezeigt. 
	Einfach diesen Text kopieren und einfügen, und dann die Datei hochladen.';
public $SESSIONSAVEPATH = 'Pfad zum Speicherort der Session';
public $SUPPORTED_DBS = 'Unterstützte Datenbanken';
public $SUPPORTED_DBS_INFO = 'Liste der Datenbanken, die durch Ihr System unterstützt werden. Beachten Sie, daß trotzdem noch
	andere Datenbanken vorhanden sein könnten (wie SQLite).';
public $NOTSET = 'Nicht eingestellt';
public $RECOMMENDEDSETTINGS = 'Empfohlene Einstellungen';
public $RECOMMENDEDSETTINGS01 = 'Diese Einstellungen werden für PHP empfohlen, um volle Kompatibilität mit Elxis sicherzustellen.';
public $RECOMMENDEDSETTINGS02 = 'Elxis funktioniert allerdings trotzdem, auch wenn Ihre Einstellungen nicht alle empfohlen wurden.';
public $DIRECTIVE = 'Anweisung';
public $RECOMMENDED = 'Empfohlen';
public $ACTUAL = 'Tatsächlich';
public $SAFEMODE = 'Safe mode (Safe-Modus)';
public $DISPLAYERRORS = 'Fehler anzeigen';
public $FILEUPLOADS = 'Hochgeladene Dateien';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime (Magic Quotes Laufzeit)';
public $REGISTERGLOBALS = 'Register Globals (Globale Variablen registrieren)';
public $OUTPUTBUFFERING = 'Output Buffering (Ausgabe-Pufferung)';
public $SESSIONAUTO = 'Session auto start (Session-Autostart)';
public $ALLOWURLFOPEN = 'Allow URL fopen (URL fopen erlauben)';
public $ON = 'On (Ein)';
public $OFF = 'Off (Aus)';
public $DIRFPERM = 'Verzeichnis- und Dateirechte';
public $DIRFPERM01 = 'Abhängig von der Situation, muss Elxis eventuell auch in andere Dateien oder Ordner schreiben können. 
Zum Beispiel um ein Modul, oder eine Erweiterung zu installieren. Dazu muss Elxis Dateien in den entsprechenden Ordner hochladen. 
Wenn Sie "nicht beschreibbar" sehen, müssen Sie die Einstellungen des, bzw. der Ordner ändern, damit Elxis in der Lage ist die 
nötigen Dinge zu erledigen. Für maximale Sicherheit ist es sinnvoll die Datei(en) und Ordner auf "nicht beschreibar" zu setzen und die Einstellungen nur für den Zeitraum der Installation zu ändern. Das kann man im Adminbereich oder unter Verwendung eines FTP Programms machen.';
public $DIRFPERM02 = 'Damit Elxis richtig es muüssen die Ordner <strong>cache</strong> und <strong>tmpr</strong> beschreibbar 
sein. Wenn sie nicht beschreibar sind, ändern Sie bitte die Einstellungen auf beschreibbar (chmod 777).';
public $ELXIS_RELEASED = 'Elxis CMS ist freie Software, die unter der GNU/GPL Lizenz freigegeben ist.';
public $INSTALL_LANG = 'Wählen Sie die Installationssprache aus';
public $DISABLE_FUNC = 'Aus Sicherheitsgründen empfehlen wir Ihnen, diese PHP Funktionen auch in der php.ini zu deaktivieren (natürlich nur, wenn Sie diese nicht benutzen wollen):';
public $FTP_NOTE = 'Auch wenn Sie FTP später aktivieren sollten und dann einige dieser Verzeichnisse schreibgeschützt sind, bleibt Elxis noch funktionell.';
public $OTHER_RECOM = 'Andere Empfehlungen';
public $OUR_RECOM_ELXIS = 'Unsere Empfehlungen mit oder ohne Elxis.';
public $SERVER_OS = 'Server OS (Server Betriebssystem)';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Bildschirmauflösung';
public $OR_GREATER = 'oder größer';
public $SHOW_HIDE = 'Anzeigen/verstecken';
public $SFMODALERT1 = 'DER SAFE-MODUS FÜR PHP IST AUF IHREM SERVER AKTIVIERT!';
public $SFMODALERT2 = 'Viele Elxis Funktionalitäten, Komponenten und Fremdsoftware können nicht ausführt werden, wenn der Safe-Modus aktiviert wird.';
public $GNU_LICENSE = 'GNU/GPL Lizenz';
public $INSTALL_TOCONTINUE = '*** Um mit der Installation von Elxis fortzufahren, lesen Sie bitte die Elxis Lizenz und bestätigen Ihre 
	Zustimmung durch klicken auf die Checkbox ***';
public $UNDERSTAND_GNUGPL = 'Ich akzeptiere, daß diese Software unter der GNU/GPL Lizenz freigegeben ist';
public $MSG_HOSTNAME = 'Bitte geben Sie einen Host Namen ein';
public $MSG_DBUSERNAME = 'Bitte geben Sie einen Datenbank Benutzernamen ein';
public $MSG_DBNAMEPATH = 'Bitte geben Sie den Datenbanknamen oder den Pfad ein';
public $MSG_SURE = 'Sind Sie sicher, dass diese Einstellungen korrekt sind? \n Elxis versucht jetzt, die Datenbank mit Ihren Angaben anzusprechen';
public $DBCONFIGURATION = 'Datenbankkonfiguration';
public $DBCONF_1 = 'Bitte geben Sie den Host Namen des Servers ein, auf dem Elxis installiert wird';
public $DBCONF_2 = 'Wählen Sie den Datenbank-Typ aus, mit dem Sie Elxis verwenden möchten';
public $DBCONF_3 = 'Bitte geben Sie den Namen der Datenbank oder den Pfad ein. Um die Probleme beim Erstellen einer Datenbank durch Elxis
 zu vermeiden, überprüfen Sie bitte, ob die Datenbank bereits besteht.';
public $DBCONF_4 = 'Bitte geben Sie den Tabellepräfix ein, den diese Elxis Installation verwenden soll.';
public $DBCONF_5 = 'Bitte geben Sie den Datenbank Benutzernamen und das Kennwort ein. Überprüfen Sie, dass der Benutzer bereits besteht und alle erforderlichen Rechte besitzt.';
public $OTHER_SETTINGS = 'Andere Einstellungen';
public $DBTYPE = 'Datenbank-Typ';
public $DBTYPE_COMMENT = 'Normalerweise "MySQL"';
public $DBNAME = 'Datenbank-Name';
public $DBNAME_COMMENT = 'Manche Hosts erlauben nur einen bestimmten Datenbank Namen pro Webseite. Verwenden Sie den Tabellen Präfix um verschiedenen Elxis Webseiten voneinander zu trennen.'; 
public $DBPATH = 'Datenbank-Pfad';
public $DBPATH_COMMENT = 'Einige Datenbanken wie z.b. Access, InterBase oder FireBird, 
	erfordern die Angabe einer Datenbankdatei anstelle eines Datenbank Namens. Geben Sie in diesem Fall hier  
	den Pfad zu dieser Datei an, z.B.: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Host Name';
public $USLOCALHOST = 'Normalerweise "localhost"';
public $DBUSER = 'Datenbank Benutzername';
public $DBUSER_COMMENT = 'Entweder  "root" oder einen Benutzernamen, den Sie von Ihrem Hoster erhalten';
public $DBPASS = 'Datenbank Kennwort';
public $DBPASS_COMMENT = 'Aus Sicherheitsgründen ist ein Kennwort für das MySQL Konto Ihrer Webseite vorgeschrieben';
public $VERIFY_DBPASS = 'Datenbank Kennwort überprüfen';
public $VERIFY_DBPASS_COMMENT = 'Kennwort bitte zur Überprüfung nochmals eingeben';
public $DBPREFIX = 'Datenbank Tabellenpräfix';
public $DBPREFIX_COMMENT = 'Verwenden Sie nicht "old_", da dieser Präfix für Backuptabellen verwendet wird';
public $DBDROP = 'Vorhandene Tabellen löschen';
public $DBBACKUP = 'Backup der "alten" Tabellen machen';
public $DBBACKUP_COMMENT = 'Alle vorhandenen Backuptabellen von vorhergehenden Elxis Installationen werden ersetzt';
public $INSTALL_SAMPLE = 'Beispieldaten installieren';
public $SAMPLEPACK = 'Beispieldaten-Paket';
public $SAMPLEPACKD = 'Elxis erlaubt Ihnen, Inhalt und Aussehen Ihrer Webseite auszuprobieren, 
	indem  die Datenbank mit Beispieldaten gefüllt wird. Natürlich brauchen Sie diese Beispieldaten nicht zu installieren, dies 
   wird von uns aber nicht empfohlen.';
public $NOSAMPLE = 'Keine Beispieldaten (nicht empfohlen)';
public $DEFAULTPACK = 'Elxis Standard';
public $PASS_NOTMATCH = 'Das Datenbankkennwort passt nicht.';
public $CNOT_CONDB = 'Es konnte keine Verbindung zur Datenbank hergestellt werden.';
public $FAIL_CREATEDB = 'Es konnte keine Datenbank %s erstellt werden.';
public $ENTERSITENAME = 'Bitte geben Sie einen Namen für Ihre Webseite ein';
public $STEPDB_SUCCESS = 'Der vorhergehende Schritt war erfolgreich. Sie können jetzt fortfahren, indem Sie die Parameter Ihrer Webseite eingeben.';
public $STEPDB_FAIL = 'Mindestens ein schlimmer Fehler ist während des vorhergehenden Schrittes aufgetreten. Sie 
	können nicht fortfahren. Gehen Sie bitte zurück und korrigieren Sie die Datenbankeinstellungen. Den Elxis 
	Installationsprogramm Fehlermeldungen folgen:';
public $SITENAME_INFO = 'Einen Namen für die Elxis Webseite eingeben. Dieser Name wird in den e-mail Nachrichten verwendet.';
public $SITENAME = 'Der Name der Webseite';
public $SITENAME_EG = 'z.B. Die Hauptseite von Elxis';
public $OFFSET = 'Zeitunterschied';
public $SUGOFFSET = 'Vorschlag für den Zeitunterschied';
public $OFFSETDESC = 'Dies ist der Zeitunterschied (in Stunden) zwischen dem Server und Ihrem Computer. Wenn Sie Elxis mit Ihrer lokalen Zeit synchronisieren möchten, stellen Sie den passenden Zeitunterschied ein.';
public $SERVERTIME = 'Server Uhrzeit';
public $LOCALTIME = 'Ihre lokale Uhrzeit';
public $DBINFOEMPTY = 'Datenbankinformationen sind nicht vorhanden oder ungenau!';
public $SITENAME_EMPTY = 'Der Name der Webseite wurde nicht eingegeben';
public $DEFLANGUNPUB = 'Die Frontend Standardsprache ist nicht eingestellt!';
public $URL = 'URL';
public $PATH = 'Pfad';
public $URLPATH_DESC = 'Ändern Sie die URL und den Pfad nur, wenn Sie wissen was Sie tun. Wenn Sie nicht sicher sind, 
	fragen Sie Ihren Hoster. Normalerweise funktionieren die angezeigten Werte für Ihre Webseite.';
public $DBFILE_NOEXIST = 'Die Datenbankdatei existiert nicht!';
public $ADODB_MISSES = 'Erforderliche ADOdb Dateien fehlen!';
public $SITEURL_EMPTY = 'Geben Sie bitte die URL Ihrer Webseite ein';
public $ABSPATH_EMPTY = 'Bitte geben Sie den absoluten Pfad zu Ihrer Webseite ein';
public $PERSONAL_INFO = 'Persönliche Informationen';
public $YOUREMAIL = 'Ihre Email Adresse';
public $ADMINRNAME= 'Realer Name des Administrators';
public $ADMINUNAME = 'Benutzer-Name des Administrators';
public $ADMINPASS = 'Kennwort des Administrators';
public $CHANGEPROFILE = 'Nach der Installation können Sie sich in Ihre neue Webseite einloggen. Dann können Sie die obigen Informationen ändern und Ihr Profil editieren.';
public $FATAL_ERRORMSGS = 'Ein oder mehrere schwerwiegende(r) Fehler sind aufgetreten. Sie können nicht weitermachen. 
Im folgenden die Fehlermeldungen von Elxis:';
public $EMPTYNAME = 'Sie müssen Ihren realen Namen eingeben.';
public $EMPTYPASS = 'Kein Verwalterkennwort ist vorhanden.';
public $VALIDEMAIL = 'Sie müssen eine gültige Administratoren Email Adresse eingeben.';
public $FTPACCESS = 'FTP Zugriff';
public $FTPINFO = 'Eine FTP Verbindung löst viele Datei bezogene Probleme mit Schreib- und Leserechten.
	Wenn Sie FTP aktivieren, könnte Elxis in Verzeichnisse und Dateien schreiben, die nicht durch PHP beschreibbar sind. Elxis 
	könnte die endgültige Konfigurationsdatei Ihrer Webseite auch speichern, andernfalls müssen Sie diese Datei selbst erzeugen
	und manuell hochladen.';
public $USEFTP = 'FTP verwenden';
public $FTPHOST = 'FTP-Host';
public $FTPPATH = 'FTP-Pfad';
public $FTPUSER = 'FTP-Benutzer';
public $FTPPASS = 'FTP-Kennwort';
public $FTPPORT = 'FTP-Port';
public $MOSTPROB = 'Vermutlich:';
public $FTPHOST_EMPTY = 'Sie müssen einen FTP Host eingeben';
public $FTPPATH_EMPTY = 'Sie müssen einen FTP Pfad eingeben';
public $FTPUSER_EMPTY = 'Sie müssen einen FTP Benutzer eingeben';
public $FTPPASS_EMPTY = 'Sie müssen ein FTP Kennwort eingeben';
public $FTPPORT_EMPTY = 'Sie müssen einen FTP Port eingeben';
public $FTPCONERROR = 'Konnte nicht mit FTP-Host verbinden';
public $FTPUNSUPPORT = 'Ihre PHP Einstellungen unterstützen keine FTP Verbindungen';
public $CONFSITEDOWN = 'Diese Webseite ist momentan nicht verfügbar, da Wartungsarbeiten durchgeführt werden.<br />Sie sollten bald wieder erreichbar sein.';
public $CONFSITEDOWNERR = 'Diese Webseite ist vorübergehend nicht erreichbar.<br />Teilen Sie dies bitte dem Systemverwalter mit';
public $CONGRATS = 'Glückwunsch!';
public $ELXINSTSUC = 'Elxis wurde erfolgreich installiert.';
public $THANKUSELX = 'Vielen Dank, dass Sie Elxis verwenden,';
public $CREDITS = 'Danksagung';
public $CREDITSELXGO = 'An Ioannis Sannos (Elxis Team) für die Elxis Entwicklung.';
public $CREDITSELXCO = 'An Ivan Trebjesanin (Elxis Team) and Elxis Community-Mitglieder für ihre Hilfe und Ideen um Elxis zu verbessern.';
public $CREDITSELXRTL = 'An Farhad Sakhaei (Elxis Community) für seinen Beitrag Elxis RTL-kompatibel zu machen.';
public $CREDITSELXTR = 'Den Übersetzern für ihren Beitrag um aus Elxis ein multlinguales CMS zu machen.';
public $OTHERTHANK = 'Allen Entwicklern, die zur Open-Source-Gemeinschaft beigetragen haben und deren Arbeit in Elxis verwendet wird.';
public $CONFBYHAND = 'Das Installationsprogramm konnte die Konfigurationsdatei Ihrer Webseite  wegen Rechteproblemen nicht speichern.
	Sie müssen den folgenden Code manuell hochladen. Klicken Sie im Textbereich, um den ganzen Code zu markieren. Kopieren
	Sie den Code in eine Datei, die Sie mit dem Namen "configuration.php" speichern. Danach laden Sie diese Datei hoch (per FTP)in Ihr Elxis Hauptverzeichnis (root).
	Vorsicht: Die Datei muß als UTF-8 gespeichert werden';
public $LANG_SETTINGS = 'Elxis hat eine einzigartige, mehrsprachige Benutzeroberfläche. Diese erlaubt Ihnen, jeweils 
	eine Frontend Standardsprache und eine Backend Standardsprache einzustellen. Sie könnmen auch mehr als eine Sprache für das Frontend festlegen.
	Sie brauchen sich aber jetzt noch nicht festlegen, sondern können später die Spracheinstellungen im Administrationsmenü vornehmen 
	und individuell dem Inhalt und den Modulen zuweisen.';
public $DEF_FRONTL = 'Frontend Standardsprache';
public $PUBL_LANGS = 'Veröffentlichte Sprachen';
public $DEF_BACKL = 'Backend Standardsprache';
public $LANGUAGE = 'Sprache';
public $SELECT = 'auswählen';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates für Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis Erweiterungen';

//elxis 2009.0
public $STEP = 'Schritt';
public $RESTARTCONF = 'Wollen Sie wirklich den Installationsvorgang wiederholen?';
public $DBCONSETS = 'Datenbankanschlußeinstellungen';
public $DBCONSETSD = 'Geben Sie bitte die notwendigen Informationen ein, damit sich Elxis mit der Datenbank verbinden und die Daten speichern kann.';
public $CONTLAYOUT = 'Inhalt und Plan';
public $TMPCONFIGF = 'Temporäre Konfigurations Datei';
public $TMPCONFIGFD = 'Elxis benutzt eine temporäre Datei, um die Konfigurationsparameter während des Installationsvorgangs 
zu speichern. Der Elxis Installer muss in diese Datei schreiben können. Machen Sie die Datei beschreibbar, oder richten Sie 
den FTP Zugang ein, um ihn zu nutzen.';
public $CHECKFTP = 'Überprüfen Sie die FTP-Einstellungen';
public $FAILED = 'Fehler';
public $SUCCESS = 'Erfolg';
public $FTPWRONGROOT = 'Verbunden mit FTP, aber der eingegebene Pfad zu Elxis existiert nicht. Bitte überprüfen Sie die Angaben.';
public $FTPNOELXROOT = 'Verbunden mit FTP, aber im angegebenen Pfad wurde keine Elxis Installation gefunden. Bitte überprüfen Sie die Angaben.';
public $FTPSUCCESS = 'Verbindung ist erfolgreich und Elxis wurde gefunden. Ihre FTP Angaben sind korrekt.';
public $FTPPATHD = 'The relative path from your FTP root folder to the Elxis installation without trailing slash (/).';
public $CNOTWRTMPCFG = 'Es kann nicht in die temporäre Konfigurationsdatei geschrieben werden (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s Treiber wird von Elxis unterstützt"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s Treiber wird von Ihrem System unterstützt"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s Treiber wird von Elxis nicht unterstützt"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s Treiber wird von Ihrem System nicht unterstützt"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s dieser von Elxis unterstützte Treiber ist experimental"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Statischer Cache';
public $STATICCACHED = 'Statischer Cache ist ein Cachingsystem welches die dynamischen Inhalte von Elxis Seiten in eienr Art Speicher hält. Die gecachten Seiten können aus dem Cache heraus aufgerufen werden, ohne auf den PHP Code oder die Datenbank zurück zu greifen. Der statische Cache hält ganze Seiten, aber auch einzelne HTML Blöcke. Bei sehr umfangreichen Seiten kann es zu einer Verlangsamung der Seitenanzeige kommen.';
public $SEFURLS = 'Suchmaschinen-freundliche URL';
public $SEFURLSD = 'Wenn eingestellt (dringend empfolen) wird Elxis Suchmaschinen- und Benutzerfreundliche URLs generieren. SEO PRO URLs verbessern Ihr Seitenranking und erlaubt es Besuchern, Ihre Seite leichter wiederzufinden. Zusätzlich werden alle PHP Variablen entfernt, was Hackern einen Angriff erschwert.';
public $RENAMEHTACC = 'Klicken Sie hier, um die <strong>htaccess.txt</strong> in <strong>.htaccess</strong> umzubenennen.';
public $RENAMEHTACC2 = 'Wenn das nicht funktioniert, wird SEO PRO auf Aus gestellt, unabhängig von Ihren Einstellungen hier 
(Sie können diese Einstellung aber auch später noch vornehmen).';
public $HTACCEXIST = 'Eine .htaccess Datei existiert schon in Ihrem Elxis! Sie müssen SEOPro manuell einstellen.';
public $SEOPROSRVS = 'SEO PRO arbeitet nur unter den nachstehenden Webservern:<br />
Apache, Lighttpd, oder kompatiblen Systemen mit mod_rewrite Support.<br />
IIS mit dem Ionic Isapi Rewrite Filter.';
public $SETSEOPROY = 'Stellen Sie bitte SEOPro auf JA';
public $FEATENLATER = 'Diese Eigenschaft kann innerhalb von der Elxis Verwaltung auch später ermöglicht werden.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Das Template definiert das Aussehen Ihrer Webseite. Stellen Sie das Standardtemplate für Ihre Webseite ein. 
Sie können Ihre Einstellung später wieder ändern und auch weitere Templatetes herunterladen und installieren.';
public $CREDITSELXWI = 'An Kostas Stathopoulos und das Elxis Documentations Team für ihre Arbeit am Elxis Wiki.';
public $NOWWHAT = 'Jetzt was?';
public $DELINSTFOL = 'Installationsordner komplett löschen (installation/).';
public $AUTODELINSTFOL = 'Installationsordner automatisch löschen.';
public $AUTODELFAILMAN = 'Sollte es nicht funktionieren, müssen Sie den Installationsordner manuell löschen.';
public $BENGUIDESWIKI = 'Beginner\'s guides at Elxis Wiki.';
public $VISITFORUMHLP = 'Besuchen Sie das Elxis Forum, um Hilfe zu erhalten.';
public $VISITNEWSITE = 'Besichtigen Sie Ihre neue Web site.';

}

?>