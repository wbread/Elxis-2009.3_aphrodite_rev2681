<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Vianney Zahner
* @link: http://www.elxis-france.com
* @email: info@elxis-france.com
* @description: French installation Language
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
public $XMLLANG = 'fr'; //2-letter country code 
public $LANGNAME = 'Français'; //This language, written in your language
public $CLOSE = 'Fermer';
public $MOVE = 'Déplacer';
public $NOTE = 'Note';
public $SUGGESTIONS = 'Suggestions';
public $RESTARTINST = 'Relancer l installation';
public $WRITABLE = 'Modifiable';
public $UNWRITABLE = 'Non Modifiable';
public $HELP = 'Aide';
public $COMPLETED = 'Terminé';
public $PRE_INSTALLATION_CHECK = 'Vérification Pré-installation';
public $LICENSE = 'Licence';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Installation';
public $DEFAULT_AGREE = 'Veuillez lire/accepter les termes de licence avant de continuer l\'installation';
public $ALT_ELXIS_INSTALLATION = 'Installation de Elxis';
public $DATABASE = 'Base de Données';
public $SITE_NAME = 'Nom du Site';
public $SITE_SETTINGS = 'Paramètrage du Site';
public $FINISH = 'Terminé';
public $NEXT = 'Suivant >>';
public $BACK = '<< Précédent';
public $INSTALLTEXT_01 = 'Si il y a des rubriques en surbrillance rouge, veuillez apporter les corrections 
	demandées. Auquel cas le système et l\'installation de Elxis ne fonctionnera pas correctement.';
public $INSTALLTEXT_02 = 'Vérification de la Pré-installation pour';
public $INSTALL_PHP_VERSION = 'PHP version >= 5.0.0';
public $NO = 'Non';
public $YES = 'Oui';
public $ZLIBSUPPORT = 'support de la compression zlib';
public $AVAILABLE = 'Disponible';
public $UNAVAILABLE = 'Non-Disponible';
public $XMLSUPPORT = 'support xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Vous pouvez continuer l\'installation, le fichier de configuration sera 
	affiché à la fin du processus, vous n\'aurez qu\'à le copier/coller puis le transférer.';
public $SESSIONSAVEPATH = 'Chemin des Sessions';
public $SUPPORTED_DBS = 'Bases de Données Supportées';
public $SUPPORTED_DBS_INFO = 'Liste des Bases de Données Supportées par votre système. Notez qu\'il est possible 
	que certaines autres soient disponibles (SQLite).';
public $NOTSET = 'Non réglé';
public $RECOMMENDEDSETTINGS = 'Paramètres recommandés';
public $RECOMMENDEDSETTINGS01 = 'Ces paramètres sont recommandés pour PHP et assure une complète compatibilité avec Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Cependant, Elxis pourra tout de même fonctionner si vos paramètres ne sont pas tous a recommandé';
public $DIRECTIVE = 'Directive';
public $RECOMMENDED = 'Recommandé';
public $ACTUAL = 'Actuel';
public $SAFEMODE = 'Mode Safe';
public $DISPLAYERRORS = 'Affichages des Erreurs';
public $FILEUPLOADS = 'Transfert de Fichiers';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Permissions sur les Répertoires et Fichiers';
public $DIRFPERM01 = 'En fonction de la situation Elxis peut avoir besoin d\'écrire dans d\'autres dossiers. Par exemple, 
au cours de l\'installation, Elxis aura besoin de télécharger des fichiers dans le répertoire "modules". Si vous 
voyez "Non-modifiable" vous pouvez changer les autorisations du répertoire pour permettre à Elxis d\'écrire 
vers ceux-ci, pour un maximum de sécurité, vous pouvez remettre à non-modifiable une fois l\'action terminée.';
public $DIRFPERM02 = 'Pour qu\'Elxis fonctionne correctement il a besoin de dossiers <strong>cache</strong> et 
	<strong>tmpr</strong> pour être à affichage. S\'ils veuillez ne pas être writeable rendez-les writeable.';
public $ELXIS_RELEASED = 'Le CMS Elxis est un Logiciel Libre réalisé sous licence GNU/GPL.';
public $INSTALL_LANG = 'Sélectionnez la langue d\'installation';
public $DISABLE_FUNC = 'Pour la sécurité de votre site nous vous recommandons de désactiver les fonctions PHP suivantes dans le fichier php.ini:';
public $FTP_NOTE = 'Si vous activez le serveur FTP plus tard, Elxis sera fonctionnel, même si certains répertoires sont en lectures-seuls ';
public $OTHER_RECOM = 'Autres Recommandations';
public $OUR_RECOM_ELXIS = 'Nos recommandations pour vous faciliter la vie avec Elxis.';
public $SERVER_OS = 'OS du Serveur';
public $HTTP_SERVER = 'Serveur HTTP';
public $BROWSER = 'Navigateur';
public $SCREEN_RES = 'Résolution d\'écran';
public $OR_GREATER = 'ou meilleurs';
public $SHOW_HIDE = 'Afficher/Cacher';
public $SFMODALERT1 = 'VOTRE SERVEUR PHP FONCTIONNE EN SAFE MODE!';
public $SFMODALERT2 = 'Beaucoup de composants, d\'extensions tierces pour Elxis rencontrent des problèmes en safe mode.';
public $GNU_LICENSE = 'Licence GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Pour continuer l\'installation de Elxis veuillez lire la licence sur Elxis 
	et si vous êtres d\'accord veuillez cocher la case à la fin de la licence ***';
public $UNDERSTAND_GNUGPL = 'Je comprends que ce logiciel est libre et sous licence GNU/GPL';
public $MSG_HOSTNAME = 'Entrez le Nom du serveur';
public $MSG_DBUSERNAME = 'Entrez le Nom de la base de données';
public $MSG_DBNAMEPATH = 'Veuillez entrer un nom ou le chemin de la base de données';
public $MSG_SURE = 'Êtes-vous sur que vos paramètres sont corrects? \n Elxis va maintenant tenter d écrire les données dans votre base avec les paramètres que vous lui avez fourni';
public $DBCONFIGURATION = 'Configuration de la Base de Données';
public $DBCONF_1 = 'Veuillez entrer le Nom du Serveur sur lequel Elxis est installé';
public $DBCONF_2 = 'Sélectionnez le type de base de données que vous voulez que Elxis utilise';
public $DBCONF_3 = 'Entrez le nom ou le chemin de la base de données. Pour éviter des problèmes lors de la création de la base de données 
	Elxis va vérifier que la base n\'est pas existante.';
public $DBCONF_4 = 'Entrez les Préfixe des tables que vous voulez que Elxis utilise.';
public $DBCONF_5 = 'Entrez le nom d\'utilisateur et le mot de passe de la base de données. Soyez sûr que cet utilisateur existe et qu\'il posséde les priviléges requis.';
public $OTHER_SETTINGS = 'Autres paramètres';
public $DBTYPE = 'Type de Base de Données';
public $DBTYPE_COMMENT = 'Habituellement "MySQL"';
public $DBNAME = 'Nom de la base de données';
public $DBNAME_COMMENT = 'Certains serveurs n\autorise pas le choix des noms de base de données par site. Utilisez les préfixes des tables pour les emplacements des sites elxis.'; 
public $DBPATH = 'Chemin de la base de données';
public $DBPATH_COMMENT = 'Certains types de bases de données, préfére Access, InterBase et FireBird, 
	et exige de mettre un fichier de base de données au lieu d\'un nom de base de données. Dans ce cas veuillez mettre, ici, 
	le chemin vers le nom du fichier. Exemple: /opt/firebird/exemples/elxisdatabase.fdb';
public $HOSTNAME = 'Nom du serveur';
public $USLOCALHOST = 'Habituellement "localhot"';
public $DBUSER = 'Nom d\'utilisateur de la base de données';
public $DBUSER_COMMENT = 'Soit "root" ou un nom d\'utilisateur fourni par l\'hébergeur';
public $DBPASS = 'Mot de Passe de la base de données';
public $DBPASS_COMMENT = 'Pour la sécurité du site l\'utilisation d\'un mot de passe est obligatoire pour le compte mysql';
public $VERIFY_DBPASS = 'Vérification du mot de passe';
public $VERIFY_DBPASS_COMMENT = 'Retapez votre mot de passe pour vérification';
public $DBPREFIX = 'Préfixe des tables';
public $DBPREFIX_COMMENT = 'Ne pas utiliser "old_" car celle-ci peut être utilisée pour les sauvegardes des tables';
public $DBDROP = 'Supprimer les tables existantes';
public $DBBACKUP = 'Sauvegarder les anciennes tables';
public $DBBACKUP_COMMENT = 'Toute sauvegarde de tables d\'une installation précédente de Elxis sera remplacée';
public $INSTALL_SAMPLE = 'Installer des exemples de données';
public $SAMPLEPACK = 'Pack exemples de données';
public $SAMPLEPACKD = 'Elxis permet de mettre dans votre site des contenus et apparences pour pouvoir commencer 
	en installant un pack de démonstration. Vous pouvez sélectionner ou pas 
	d\'installer en partie des exemples (Non Recommandé).';
public $NOSAMPLE = 'Aucun (Non recommandé)';
public $DEFAULTPACK = 'Elxis par Défaut';
public $PASS_NOTMATCH = 'Le mots de passe de base de données fourni n\'est pas correct';
public $CNOT_CONDB = 'Impossible de se connecter à la base de données.';
public $FAIL_CREATEDB = 'La création de la base de données %s a échoué';
public $ENTERSITENAME = 'Veuillez entrer un nom de Site';
public $STEPDB_SUCCESS = 'L\'étape précédente a été accomplie avec succès. Vous pouvez maintenant continuer d\'entrer les paramètres de votre site';
public $STEPDB_FAIL = 'Au moins une erreur fatale s\'est produite pendant l\'étape précédente. Vous 
	ne pouvez pas continuer. Veuillez revenir en arrière et corriger les paramètres de votre base de données. Les messages 
	d\'erreurs Elxis sont:';
public $SITENAME_INFO = 'Saisissez le nom de votre site Elxis. Le nom du site est utilisé dans les mails, faites en sorte qu\'il soit parlant.';
public $SITENAME = 'Nom du Site';
public $SITENAME_EG = 'Par exemple: Mon site Elxis';
public $OFFSET = 'Décalage';
public $SUGOFFSET = 'Décalage suggéré';
public $OFFSETDESC = 'Différence d\'heure entre votre serveur et votre ordinateur. Si vous voulez synchroniser Elxis avec votre heure locale veuillez mettre le bon décalage.';
public $SERVERTIME = 'Heure Serveur';
public $LOCALTIME = 'Votre heure locale';
public $DBINFOEMPTY = 'Les information de la base de données sont vides/imprécis!';
public $SITENAME_EMPTY = 'Le nom du site n\'a pas été fourni';
public $DEFLANGUNPUB = 'La langue par défaut de la partie public n\'a pas été publié!';
public $URL = 'URL';
public $PATH = 'Chemin';
public $URLPATH_DESC = 'Si les chemins, les URL vous semblent corrects, veuillez ne pas les changer. Si vous n\'êtes pas sûr de vous 
	veuillez contacter votre hébergeur ou votre administrateur. Habituellement les valeurs affichées fonctionneront pour votre site.';
public $DBFILE_NOEXIST = 'Le fichier de la base de données n\'existe pas!';
public $ADODB_MISSES = 'Fichier ADOdb requis non trouvé!';
public $SITEURL_EMPTY = 'Veuillez entrer l\'URL du site';
public $ABSPATH_EMPTY = 'Veuillez entrer le chemin absolu de votre site';
public $PERSONAL_INFO = 'Informations Personnelles';
public $YOUREMAIL = 'Votre adresse email';
public $ADMINRNAME= 'Nom réel de l\'Administrateur';
public $ADMINUNAME = 'Identifiant Administrateur';
public $ADMINPASS = 'Mot de Passe Administrateur';
public $CHANGEPROFILE = 'Après l\'installation vous pourrez vous connecter sur votre nouveau site, changer les informations et réglages de votre profil.';
public $FATAL_ERRORMSGS = 'Au moins une erreur fatale s\'est produite. Vous ne pouvez pas continuer. 
Les messages d\'erreurs Elxis sont:';
public $EMPTYNAME = 'Vous devez donner un vrai nom.';
public $EMPTYPASS = 'Mot de Passe Administrateur non renseigné.';
public $VALIDEMAIL = 'Vous devez donner une adresse email valide.';
public $FTPACCESS = 'Accès FTP';
public $FTPINFO = 'En permettant l\'accès au serveur FTP vous pouvez modifier les problèmes de permissions à certains fichiers. 
	Si vous activez l\'accès au FTP, Elxis aura la possibilité de modifier à l\'écriture sur les répertoires/fichiers qui ne sont pas modifiables via PHP. L\'installeur de Elxis 
	pouura ne pas pouvoir sauvegarder le fichier de configuration de votre site, il vous faudra le créer, copier et coller les informations
	manuellement puis le transférer.';
public $USEFTP = 'Identifiant FTP';
public $FTPHOST = 'Serveur FTP';
public $FTPPATH = 'Chemin FTP';
public $FTPUSER = 'Utilisateur FTP';
public $FTPPASS = 'Mot de Passe FTP';
public $FTPPORT = 'Port FTP';
public $MOSTPROB = 'Plus probablement:';
public $FTPHOST_EMPTY = 'Vous devez fournir un nom de serveur ftp';
public $FTPPATH_EMPTY = 'Vous devez fournir un chemin FTP';
public $FTPUSER_EMPTY = 'Vous devez fournir un utilisateur FTP';
public $FTPPASS_EMPTY = 'Vous devez fournir un mot de passe FTP';
public $FTPPORT_EMPTY = 'Vous devez fournir un port FTP';
public $FTPCONERROR = 'Impossible de se connecter au serveur FTP';
public $FTPUNSUPPORT = 'Vos paramètres PHP ne supportent pas la connection par FTP';
public $CONFSITEDOWN = 'Le site est fermé pour maintenance.<br />Veuillez repasser un peu plus tard.';
public $CONFSITEDOWNERR = 'Le site est temporairement indisponible.<br />Veuillez en aviser l Administrateur';
public $CONGRATS = 'Félicitations!';
public $ELXINSTSUC = 'Elxis a été installé avec succès.';
public $THANKUSELX = 'Merci d\'utiliser Elxis,';
public $CREDITS = 'Crédits';
public $CREDITSELXGO = 'A Ioannis Sannos (Elxis Team) pour le developpement de Elxis.';
public $CREDITSELXCO = 'À Ivan Trebjesanin (équipe d\'Elxis) et de membre de la Communauté d\'Elxis pour leur aide et à idées sur rendre Elxis meilleur.';
public $CREDITSELXRTL = 'À Farhad Sakhaei (la Communauté d\'Elxis) pour sa contribution sur rendre Elxis RTL compatible.';
public $CREDITSELXTR = 'Aux Traducteurs pour leurs contributions à faire de Elxis un CMS utilisable dans plusieurs langues.';
public $OTHERTHANK = 'A tous les developpeurs qui ont contribué et contribuent aux développements en Open Source de Elxis, ainsi que leur travail.';
public $CONFBYHAND = 'L\'installateur n\'a pas pu sauvegarder le fichier de configuration dû aux problèmes de permissions. 
	Vous devez transférer le fichier manuellement. Cliquez dans l\'espace de texte pour mettre en surbrillance tout le code et copiez le. 
	Coller le dans le fichier nommé "configuration.php" et transférez le directement à la racine de Elxis. 
	Attention: Le fichier doit être sauvegardé au format UTF-8';
public $LANG_SETTINGS = 'Elxis a une interface unique multilangues que vous pouvez mettre par défaut 
	à la partie administration et public, mais aussi publier d\'autres langues. 
	Notez que vous pouvez placer individuellement dans l\'administration de Elxis, des éléments de contenu, modules etc 
	et les faire apparaître avec différentes combinaisons de langues.';
public $DEF_FRONTL = 'Langue par défaut pour la partie administration';
public $PUBL_LANGS = 'Langues Publiées';
public $DEF_BACKL = 'Langue par défaut sur la partie public';
public $LANGUAGE = 'Langue';
public $SELECT = 'sélection';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates pour le CMS Elxis';
public $DOWNLOADS = 'Téléchargements';
public $DOWNLOADSTITLE = 'Télecharger des extensions pour Elxis';

//elxis 2009.0
public $STEP = 'Etape';
public $RESTARTCONF = 'Êtes-vous sûr de vouloir redémarrer l installation?';
public $DBCONSETS = 'Paramètre de connexion à la base de données';
public $DBCONSETSD = 'Remplissez les champs nécessaires afin qu\'Elxis puisse se connecter à la base de données et ainsi importer les données.';
public $CONTLAYOUT = 'Contenu et mise en page';
public $TMPCONFIGF = 'Fichier de configuration temporaire';
public $TMPCONFIGFD = 'Elxis utilise un fichier temporaire pour stocker les paramètres de configuration au cours de la procédure d\'installation. 
Elxis installer doit être en mesure d\'écrire dans ce dossier. Donc, il faut: soit mettre ce fichier en écriture ou activer l\'accès FTP pour 
qu\'il soit en mesure d\'écrire via une connexion FTP.';
public $CHECKFTP = 'Vérifier les paramètres FTP';
public $FAILED = 'Échec';
public $SUCCESS = 'Succès';
public $FTPWRONGROOT = 'Connecté au FTP, mais le répertoire de Elxis n\'existe pas. Vérifiez le chemin du FTP.';
public $FTPNOELXROOT = 'Connecté au FTP, mais le FTP ne contient pas une installation d\'Elxis. Vérifiez le chemin du FTP.';
public $FTPSUCCESS = 'Connexion et détection de l\'installation d\'Elxis. Vos paramètres FTP sont corrects.';
public $FTPPATHD = 'Chemin relatif à partir de votre dossier racine pour l\'installation d\'Elxis sans les slash (/).';
public $CNOTWRTMPCFG = 'Impossible d\'écrire dans le fichier de configuration temporaire (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s pilote est supporté par Elxis"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s pilote est supporté par votre système"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s pilote n\'est pas supporté par Elxis"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s pilote n\'est pas supporté par votre système"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s support des pilotes par Elxis est expérimental"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Cache statique';
public $STATICCACHED = 'Le cache statique est un système de cache qui stocke les fichiers générés dynamiquement pour les pages HTML par Elxis 
et les mets en mémoire. La mise en cache des pages peuvent être rappelées de la mémoire sans avoir à ré-exécuter le code PHP ou 
à ré-interroger la base de données. Le cache statique met en cache des pages entières au lieu de simples blocs HTML. L\'utilisation du cache statique 
permet d\'améliorer la charge sur les sites web de grosse taille et améliore notablement la vitesse.';
public $SEFURLS = 'Moteur de Recherche Friendly URLs';
public $SEFURLSD = 'Si activé (vivement recommandé) Elxis va générer les moteurs de recherche et Friendly URL 
au lieu du standard. Les URL SEO PRO augmentera le classement de votre site dans les moteurs de recherche et les pages seront 
beaucoup plus facile à retenir pour vos visiteurs. En plus, toutes les variables PHP seront retirée des URL, ceci afin de 
rendre votre site plus sûr contre les pirates informatiques.';
public $RENAMEHTACC = 'Cliquer ici pour renommer <strong>htaccess.txt</strong> en <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Si cela ne fonctionne pas, c\'est que SEO PRO est réglé sur OFF, indépendamment de votre réglage 
(il vous sera possible de l\'activer manuellement plus tard).';
public $HTACCEXIST = 'Un fichier .htaccess existe déjà dans le dossier Elxis! Vous devez activer manuellement SEO PRO.';
public $SEOPROSRVS = 'SEO PRO ne fonctionne que sous les serveurs Web:<br /> 
Apache, Lighttpd, ou tout autre serveur web compatible avec le mod_rewrite.<br /> 
IIS avec l\'utilisation de Ionic Isapi Rewrite Filter.';
public $SETSEOPROY = 'Veuillez mettre SEO PRO à OUI';
public $FEATENLATER = '	Cette fonctionnalité peut également être activé dans l\'administration de Elxis.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Le template définit l\'apparence de votre site Web. Sélectionnez le modèle par défaut pour votre site. 
Vous pouvez ensuite modifier votre sélection ou télécharger et installer d\'autres templates.';
public $CREDITSELXWI = 'Pour Kostas Stathopoulos et la Team Elxis Documentation pour leurs contributions au Wiki d\'Elxis.';
public $NOWWHAT = 'Et maintenant?';
public $DELINSTFOL = 'Supprimer le dossier d\'installation (installation/).';
public $AUTODELINSTFOL = 'Supprimer automatiquement le répertoire d\'installation.';
public $AUTODELFAILMAN = 'Si cela échoue, supprimez manuellement le dossier d\'installation.';
public $BENGUIDESWIKI = 'Les guides du Débutant sont sur le Wiki Elxis.';
public $VISITFORUMHLP = 'Visitez le forum d\'Elxis pour obtenir de l\'aide.';
public $VISITNEWSITE = 'Visitez notre nouveau site web.';

}

?>