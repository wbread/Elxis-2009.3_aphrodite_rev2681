<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Roberto D Alessio (aka theprincy), Francesco Venuti (Amigamerlin)
* @link: http://www.elxis.org
* @email: info@elxis.org
* @description: Italian installation Language
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
public $XMLLANG = 'it'; //2-letter country code 
public $LANGNAME = 'Italiano'; //This language, written in your language
public $CLOSE = 'Chiudi';
public $MOVE = 'Sposta';
public $NOTE = 'Note';
public $SUGGESTIONS = 'Suggerimenti';
public $RESTARTINST = 'Riavvia installazione';
public $WRITABLE = 'Scrivibile';
public $UNWRITABLE = 'Non scrivibile';
public $HELP = 'Aiuto';
public $COMPLETED = 'Completato';
public $PRE_INSTALLATION_CHECK = 'Pre-installazione';
public $LICENSE = 'License';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Installer';
public $DEFAULT_AGREE = 'Per favore leggi/accetta prima di continuare la licenza';
public $ALT_ELXIS_INSTALLATION = 'Installazione Elxis';
public $DATABASE = 'Database';
public $SITE_NAME = 'Nome sito';
public $SITE_SETTINGS = 'Settaggi sito';
public $FINISH = 'Fine';
public $NEXT = 'Avanti >>';
public $BACK = '<< Indietro';
public $INSTALLTEXT_01 = 'Correggere gli articoli segnalati in rosso. Se non venisse visualizzato 
  l\'errore l\'installazione di Elxis non è corretta.';
public $INSTALLTEXT_02 = 'Controllare la Pre-installatione';
public $INSTALL_PHP_VERSION = 'PHP version >= 5.0.0';
public $NO = 'No';
public $YES = 'Si';
public $ZLIBSUPPORT = 'supporto compressione zlib';
public $AVAILABLE = 'Disponibile';
public $UNAVAILABLE = 'Non disponibile';
public $XMLSUPPORT = 'supporto xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Puoi ancora continuare l\'installazione perchè la configurazione sarà 
  visualizzata alla fine, semplicemente copia e incolla questo e upload';
public $SESSIONSAVEPATH = 'Sessione salvatagio percorso';
public $SUPPORTED_DBS = 'Database supportati';
public $SUPPORTED_DBS_INFO = 'Lista dei database supportati dal vostro sistema. Potrebbero essere disponibili 
  anche altri database(es. SQLite).';
public $NOTSET = 'Non impostato';
public $RECOMMENDEDSETTINGS = 'Settaggi raccomandati';
public $RECOMMENDEDSETTINGS01 = 'Questi settaggi sono raccomandati per PHP per avere compatibilità con Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Tuttavia, Elxis opererà comunque anche se i tuoi settaggi non combaciano esattamente quanbto raccomandato';
public $DIRECTIVE = 'Directive';
public $RECOMMENDED = 'Raccomandato';
public $ACTUAL = 'Attuale';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Visualizza Errori';
public $FILEUPLOADS = 'Upload File';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Registro Globale';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Sessione auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Permessi Directory e File';
public $DIRFPERM01 = 'Dipendente dalla situazione Elxis avrà bisogno di scrivere anche in altre cartelle. Per esempio durante l\'installazione
di un modulo Elxis arà bisogno di caricare i files della cartella "modules". Se vedrai "Non scrivibile" dovrai cambiare i permessi della 
cartella per permettere ad Elxis di scrivere in essa. Per una maggiore sicurezza puo lasciare la cartella non scrivibile rendendo la stessa 
scrivibile nel momento in cui la stai per utilizzare.';
public $DIRFPERM02 = 'In modo che Elxis funzionare correttamente esso ha bisogno dei dispositivi 
di piegatura <strong>cache</strong> e <strong>tmpr</strong> di essere scrivibili. Se non sono prego writeable rendali writeable.';
public $ELXIS_RELEASED = 'Il CMS Elxis  è un Software Free relasciato dalla licenza GNU/GPL.';
public $INSTALL_LANG = 'Seleziona la lingua di installazione';
public $DISABLE_FUNC = 'Per la sicurezza del vostro sito vi consigliamo di non disabilitare alcune funzioni di PHP nel php.ini (se lo stai utilizzando):';
public $FTP_NOTE = 'Se attivi ftp dopo, Elxis sarà funzionale persino se alcune di queste carttelle sono di sola lettura';
public $OTHER_RECOM = 'Ulteriori raccomandazioni';
public $OUR_RECOM_ELXIS = 'Le nostre raccomandazioni per semplificare il vostro lavoro con o senza Elxis.';
public $SERVER_OS = 'Server OS';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Risoluzione video';
public $OR_GREATER = 'or greater';
public $SHOW_HIDE = 'Mostra/Nascondi';
public $SFMODALERT1 = 'PHP sta funzionando in SAFE MODE!';
public $SFMODALERT2 = 'Molte versioni successive di Elxis , componenti e successive estensioni presentano dei problemi con PHP in safe mode.';
public $GNU_LICENSE = 'Licenza GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Per continuare l\'installazione di Elxis leggere la licenza 
	e dai il consenso nell\'apposito box***';
public $UNDERSTAND_GNUGPL = 'Hai compreso il tipo di licenza di questo software GNU/GPL';
public $MSG_HOSTNAME = 'Inserire nome Host ';
public $MSG_DBUSERNAME = 'Inserire nome User Database ';
public $MSG_DBNAMEPATH = 'Inserire nome Path del database ';
public $MSG_SURE = 'Sei sicuro di avere inserito correttamente i dati? \n Elxis will now attempt to populate the Database with the settings you have supplied';
public $DBCONFIGURATION = 'Configurazione Database';
public $DBCONF_1 = 'Inserire hostname del server dove è stato installato Elxis ';
public $DBCONF_2 = 'Selezionare il tipo di database che vuoi utilizzare per Elxis';
public $DBCONF_3 = 'inserisci il nome del db o il percorso. Per evitare problemi nel creare il db 
  dall\'installatore Elxis accertati che il db già esista';
public $DBCONF_4 = 'Inserire il nome della tabella prefissato per utilizzare le Elxis';
public $DBCONF_5 = 'Inserire il nome e password del database. Assicurati che l\'utente già esista e che disponga di tutti i privilegi necessari.';
public $OTHER_SETTINGS = 'Ulteriori settaggi';
public $DBTYPE = 'Tipo Database';
public $DBTYPE_COMMENT = 'Solitamente "MySQL"';
public $DBNAME = 'Nome Database';
public $DBNAME_COMMENT = 'Certi host permettono solo un certo numero di nomi ai db per sito. Usa prefissi sulle tabelle per distinti siti di Elxis'; 
public $DBPATH = 'Percorso Database';
public $DBPATH_COMMENT = 'Alcuni tipi di databases, come Access, InterBase e FireBird, 
	richiedono un file di riferimento anziche il percorso del database. In questo caso scrivere 
  il percorso e non il file. esempio: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Nome Host';
public $USLOCALHOST = 'Solitamente "localhost"';
public $DBUSER = 'UserName Database';
public $DBUSER_COMMENT = 'In alcuni casi si utilizza "root" oppure inserire username del host';
public $DBPASS = 'Password Database';
public $DBPASS_COMMENT = 'Per la sicurezza del sito utilizzare una password per l\'account di mysql';
public $VERIFY_DBPASS = 'Verifica Password Database';
public $VERIFY_DBPASS_COMMENT = 'Riscrivi la password per verifica';
public $DBPREFIX = 'Database Table Prefix';
public $DBPREFIX_COMMENT = 'Non utilizzare "old_" poichè viene utilizzato per le tabelle di backup';
public $DBDROP = 'Drop Tabelle esistenti';
public $DBBACKUP = 'Backup delle Tabelle vecchie';
public $DBBACKUP_COMMENT = 'Tutte le tabelle di backup presenti in Elxis saranno sostituite';
public $INSTALL_SAMPLE = 'Installa Sample Data';
public $SAMPLEPACK = 'Sample data package';
public $SAMPLEPACKD = 'Elxis ti permette il contenuto e l\'apparenza del tuo sito sin dall\'inizio selezionando 
  il più adatto per il tuo sito dal sample data package (pacchetto di dati prova). Puoi anche selezionare di 
  di non installare i dati prova(Non Raccomandato).';
public $NOSAMPLE = 'Nessuno (Non raccomandato)';
public $DEFAULTPACK = 'Elxis Default';
public $PASS_NOTMATCH = 'La password per il database non coindice.';
public $CNOT_CONDB = 'Nessuna connessione al database.';
public $FAIL_CREATEDB = 'Creazione fallita del database %s';
public $ENTERSITENAME = 'Inserire il Nome del Sito';
public $STEPDB_SUCCESS = 'E\' stato completato con successo il punto precedente. Potete ora inserire i parametri del sito.';
public $STEPDB_FAIL = 'Errore nel punto precedentemente installato. Non puoi continuare. 
  Tornare indietro e controllare i settaggi del database. Seguono i messaggi 
  di errore di installazione di Elxis:';
public $SITENAME_INFO = 'Scegli il tipo di Nome per il tuo sito Elxis. Questo nome sarà utilizzato per eventuali invii di mesaggi.';
public $SITENAME = 'Nome Sito';
public $SITENAME_EG = 'e.g. La home di Elxis';
public $OFFSET = 'Offset';
public $SUGOFFSET = 'Suggested offset';
public $OFFSETDESC = 'Ci sono due ore di differenza tra server e computer. Regolare l\'orologio se volete sincronizzare Elxis con il vostro tempo locale.';
public $SERVERTIME = 'Ora Server';
public $LOCALTIME = 'Ora locale';
public $DBINFOEMPTY = 'Le informazioni del database sono vuote/inesatte!';
public $SITENAME_EMPTY = 'Non è stato fornito il nome del sito';
public $DEFLANGUNPUB = 'La lingua del frontend di default non è stata pubblicata!';
public $URL = 'URL';
public $PATH = 'Path';
public $URLPATH_DESC = 'Se siete sicuri che URL e Path sono corretti non cambiarli. Se non siete sicuri 
  inserire contatto del ISP o administrator. I valori visualizzati solitamente funzionano per il vostro sito.';
public $DBFILE_NOEXIST = 'Il file del Database non esiste!';
public $ADODB_MISSES = 'Mancano i files richiesti di ADOdb !';
public $SITEURL_EMPTY = 'Inserire la URL del sito ';
public $ABSPATH_EMPTY = 'Inserire il path assoluto del vostro sito';
public $PERSONAL_INFO = 'Informazioni personali';
public $YOUREMAIL = 'E-mail';
public $ADMINRNAME= 'Nome Administrator';
public $ADMINUNAME = 'Username Administrator ';
public $ADMINPASS = 'Password Administrator ';
public $CHANGEPROFILE = 'Dopo l\'instalalzione puoi fare il login nel sito, cambiare le informazioni personali.';
public $FATAL_ERRORMSGS = 'Errore. Non puoi continuare. Seguiranno i messaggi 
  di errore dell\'installazione Elxis:';
public $EMPTYNAME = 'Inserire il vostro nome.';
public $EMPTYPASS = 'Inserire la password Administrator.';
public $VALIDEMAIL = 'Inserire un\'email valida.';
public $FTPACCESS = 'Accesso FTP ';
public $FTPINFO = 'L\'accesso FTP da la possibilità di dare permessi ai file relativi e 
  di trasferirne altri. Attivando FTP Elxis potrà scrivere su cartelle/files che sono 
  non sovrascrivibili in PHP. L\'installazione di Elxis permetterà di conservare il file di 
  configurazione del vostro sito che potrete modificare e aggiornare.';
public $USEFTP = 'Usa FTP';
public $FTPHOST = 'FTP host';
public $FTPPATH = 'FTP path';
public $FTPUSER = 'FTP user';
public $FTPPASS = 'Password FTP';
public $FTPPORT = 'Porta FTP';
public $MOSTPROB = 'Necessariamente:';
public $FTPHOST_EMPTY = 'Inserire host FTP ';
public $FTPPATH_EMPTY = 'Inserire path FTP ';
public $FTPUSER_EMPTY = 'Inserire user FTP ';
public $FTPPASS_EMPTY = 'Inserire password FTP';
public $FTPPORT_EMPTY = 'Inserire porta FTP ';
public $FTPCONERROR = 'Host FTP non connesso';
public $FTPUNSUPPORT = 'La configurazione di PHP non supporta la connessione FTP ';
public $CONFSITEDOWN = 'Questo sito è offline per manutenzione.<br />Controllare tornando indietro.';
public $CONFSITEDOWNERR = 'Il sito è temporaneamente inaccessibile.<br />Contattare Administrator';
public $CONGRATS = 'Congratulazioni!';
public $ELXINSTSUC = 'Il tuo sito è stato installato correttamente.';
public $THANKUSELX = 'Grazie mille per aver scelto Elxis,';
public $CREDITS = 'Credits';
public $CREDITSELXGO = 'Developement Ioannis Sannos (Elxis Team).';
public $CREDITSELXCO = 'A Ivan Trebjesanin (Elxis Team) e i membri di Elxis Community per il loro aiuto e idee per rendere migliore Elxis.';
public $CREDITSELXRTL = 'A Farhad Sakhaei (Elxis Community) per il suo contributo a rendere compatibile Elxis RTL.';
public $CREDITSELXTR = 'Ai traduttori per il loro contributo sul rendere a Elxis un CMS che rispetta la lingua madre dell\'utente.';
public $OTHERTHANK = 'A tutti gli sviluppatori che hanno contribuito alla Comunità.';
public $CONFBYHAND = 'L\'installazione non ha potuto conservare il file di configurazione 
  del vostro sito dovuto a problemi dei permessi. Inserire il seguente codice 
  manualmente. Click nella textarea per evidenziare il codice. Copiare ed incollare il codice 
  nel file di php chiamato "configuration.php" e aggiornate il file nel vostro sito Elxis.';
public $LANG_SETTINGS = 'Elxis ha un\'interfaccia multilingue che permette di 
  cambiare lingua secondo il vostro bisogno. 
	Nota: Con Elxis potrete in seguito pubblicare articoli 
  moduli e componenti nella lingua da voi scelta.';
public $DEF_FRONTL = 'Lingua di default per il frontend';
public $PUBL_LANGS = 'Lingua di pubblicazione';
public $DEF_BACKL = 'Lingua di default del backend';
public $LANGUAGE = 'Lingua';
public $SELECT = 'Selezione';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates per il Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis estensioni';

//elxis 2009.0
public $STEP = 'Fase';
public $RESTARTCONF = 'Sei sicuro di voler riavviare l installazione?';
public $DBCONSETS = 'Impostazioni connessione Database';
public $DBCONSETSD = 'Inserisci le informazioni richieste affinchè Elxis possa connetersi al database ed inserire i dati di base.';
public $CONTLAYOUT = 'Contenuti e layout';
public $TMPCONFIGF = 'File di configurazione temporaneo';
public $TMPCONFIGFD = 'Elxis usa un file temporaneo per conservare i parametri di configurazione durante la procedura di installazione. 
L\'installer di Elxis deve essere in grado di scrivere in questo file. Devi pertanto rendere quetso file scrivibile o abilitare l\'accesso FTP 
affinchè l\'installer sia in gradi di scrivere questo file usando una connessione FTP.';
public $CHECKFTP = 'Controlla le impostazioni FTP';
public $FAILED = 'Fallito';
public $SUCCESS = 'Successo';
public $FTPWRONGROOT = 'Connesso via FTP, ma la directory di Elxis inserita non esiste. Controlla la Root dell account FTP.';
public $FTPNOELXROOT = 'Connesso via FTP, ma la Root FTP inserita non contiene una installazione Elxis. Controlla la Root dell account FTP.';
public $FTPSUCCESS = 'Connessione ed individuazione di una installazione di ELXIS effettuta con successo. I tuoi parametri FTP sono corretti.';
public $FTPPATHD = 'Il path relativo della tua cartella di Root del tuo Account FTP, alla cartella di installazione di Elxis senza inserire slash (/).';
public $CNOTWRTMPCFG = 'Non posso scrivere nel file di configurazione temporaneo (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s driver è supportato da Elxis"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s driver è supportato dal tuo sistema"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s driver non è supportato da Elxis"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s driver non è supportato dal tuo sistema"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "Il supporto del %s driver da parte di Elxis è sperimentale"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Cache Statica';
public $STATICCACHED = 'La Cache Statica è un sistema di caching dei file che conserva le pagine HTML generate dinamicamente da Elxis 
in una specie di memoria. Le pagine così cachate possono essere richiamate dalla memoria Cache senza necessità di essere rigenerate dal codice PHP e senza 
ri-interrogare il database. La cache Statica effettua il caching della pagina intera invece che dei singoli blocchi HTML. L\'uso della Cache Statica 
in siti con alto carico di lavoro permette un notevole incremento in termini di velocità.';
public $SEFURLS = 'Search Engines Friendly URLs';
public $SEFURLSD = 'Se abilitato (fortemente raccomandato) Elxis provvederà a generare Search Engines e Human friendly URLs 
invece di quelli standard. Gli URLs SEO PRO permetteranno di spingere in alto il tuo sito nei ranking dei motori di ricerca e 
gli indirizzi delle pagine saranno molto più semplici da ricordare dai visitatori . Inoltre tutte le variabili PHP verranno rimosse dall\'URLs
rendendo il tuo sito molto sicuro contro gli attacchi di eventuali hackers.';
public $RENAMEHTACC = 'Clicca qui per rinominare <strong>htaccess.txt</strong> in <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Se questo fallisce SEO PRO verrà impostato su OFF in relazioni alle impostazioni che è possibile effettuate da qui 
(Sarai in grado di abilitarle manualmente successivamente).';
public $HTACCEXIST = 'Un file .htaccess è già esistente nella cartella di root di Elxis! Devi abilitare SEO PRO manualmente.';
public $SEOPROSRVS = 'SEO PRO funziona nei seguenti web servers:<br />
Apache, Lighttpd, o altri web server compatibili con il supporto per il mod_rewrite abilitato.<br />
IIS con l\'uso del filtro Ionic Isapi Rewrite.';
public $SETSEOPROY = 'Imposta il SEO PRO su SI.Grazie';
public $FEATENLATER = 'Questa feature può essere abilitata anche successivamente dalla sezione di Amministrazione di Elxis .';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Template definisce il layout del tuo sito. Seleziona il template di default per il tuo sito web. 
Puoi cambiare la tua selezione successivamente o scaricare ed installare template addizionali.';
public $CREDITSELXWI = 'A Kostas Stathopoulos e l\' Elxis Documentation Team per il loro contributo alle WWiki di Elxis.';
public $NOWWHAT = 'Che faccio ora ?';
public $DELINSTFOL = 'Cancellare completamente la cartella di installazione (installation/).';
public $AUTODELINSTFOL = 'Cancellare automaticamente la cartella di installazione.';
public $AUTODELFAILMAN = 'Se questo fallisce dovrai cancellare la cartella di installazione manualmente.';
public $BENGUIDESWIKI = 'Guida per principianti usando le Wiki di Elxis.';
public $VISITFORUMHLP = 'Visita il forum di ELXIS per ogni richiesta di aiuto.';
public $VISITNEWSITE = 'Visita il tuo nuovo sito web.';

}

?>