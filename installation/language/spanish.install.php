<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Ricard Lozano
* @link: http://www.rlozano.com
* @email: ricard@rlozano.com
* @description: Spanish installation Language
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
public $XMLLANG = 'es'; //2-letter country code 
public $LANGNAME = 'Español'; //This language, written in your language
public $CLOSE = 'Cerrar';
public $MOVE = 'Mover';
public $NOTE = 'Nota';
public $SUGGESTIONS = 'Sugerencias';
public $RESTARTINST = 'Reiniciar instalación';
public $WRITABLE = 'Modificable';
public $UNWRITABLE = 'No modificable';
public $HELP = 'Ayuda';
public $COMPLETED = 'Completado';
public $PRE_INSTALLATION_CHECK = 'Comprobación previa a la instalación';
public $LICENSE = 'Licencia';
public $ELXIS_WEB_INSTALLER = 'Programa de instalación de Elxis';
public $DEFAULT_AGREE = 'Lea y acepte los términos de la licencia para continuar la instalación.';
public $ALT_ELXIS_INSTALLATION = 'Instalación de Elxis';
public $DATABASE = 'Base de datos';
public $SITE_NAME = 'Nombre del sitio web';
public $SITE_SETTINGS = 'Configuración del sitio web';
public $FINISH = 'Finalizar';
public $NEXT = 'Siguiente &gt;&gt;';
public $BACK = '&lt;&lt; Atrás';
public $INSTALLTEXT_01 = 'Si alguno de los valores aparece resaltado en rojo, efect&uacute;e las correcciones oportunas. De lo contrario, es posible que la aplicación no funcione correctamente.';
public $INSTALLTEXT_02 = 'Comprobación previa a la instalación de';
public $INSTALL_PHP_VERSION = 'Versión de PHP &gt;= 5.0.0';
public $NO = 'No';
public $YES = 'Sí';
public $ZLIBSUPPORT = 'Soporte para compresión Zlib';
public $AVAILABLE = 'Disponible';
public $UNAVAILABLE = 'No disponible';
public $XMLSUPPORT = 'Soporte para XML';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Aun así, puede continuar la instalación, ya que al final del proceso se mostrará el contenido del archivo configuración. Sólo tendrá que copiarlo en un archivo con el mismo nombre y subirlo manualmente al servidor.';
public $SESSIONSAVEPATH = 'Session Save Path';
public $SUPPORTED_DBS = 'Bases de datos compatibles';
public $SUPPORTED_DBS_INFO = 'Lista de bases de datos que son compatibles con el sistema. Es posible que también haya otras disponibles (como SQLite).';
public $NOTSET = 'No definido';
public $RECOMMENDEDSETTINGS = 'Valores recomendados';
public $RECOMMENDEDSETTINGS01 = 'Estos valores de PHP son los recomendados para garantizar la total compatibilidad con la aplicación.';
public $RECOMMENDEDSETTINGS02 = 'Es posible que Elxis también funcione correctamente si los valores de su servidor no coinciden exactamente con los aquí indicados.';
public $DIRECTIVE = 'Directiva';
public $RECOMMENDED = 'Recomendado';
public $ACTUAL = 'Actual';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session Auto Start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'Activado';
public $OFF = 'Desactivado';
public $DIRFPERM = 'Permisos para carpetas y archivos';
public $DIRFPERM01 = 'Dependiendo de la situación Elxis pudo necesitar escribir a otras carpetas también. Por ejemplo durante 
un módulo la instalación Elxis necesitará cargar archivos en " de la carpeta; modules". Si usted ve el " Unwriteable" usted 
puede cambiar los permisos en directorio para permitir que Elxis pueda le escribe o, para la seguridad máxima, usted puede 
dejarla unwriteable y hacerla writeable momentos antes que usted va a utilizarla.';
public $DIRFPERM02 = 'Para que Elxis funcione correctamente él necesita las carpetas <strong>cache</strong> 
y <strong>tmpr</strong> ser escribibles. Si no son writeable por favor hágalas writeable.';
public $ELXIS_RELEASED = 'Elxis CMS es un software libre distribuido bajo licencia GNU/GPL.';
public $INSTALL_LANG = 'Seleccionar idioma para la instalación';
public $DISABLE_FUNC = 'Por razones de seguridad, le recomendamos que desactive en el archivo php.ini las siguientes funciones de PHP (si no las utiliza):';
public $FTP_NOTE = 'Si habilita el acceso FTP más adelante, Elxis funcionará correctamente aunque algunas de estas carpetas sean de sólo lectura.';
public $OTHER_RECOM = 'Otras recomendaciones';
public $OUR_RECOM_ELXIS = 'Nuestras recomendaciones, tanto si utiliza Elxis como si no.';
public $SERVER_OS = 'Sistema operativo del servidor';
public $HTTP_SERVER = 'Servidor HTTP';
public $BROWSER = 'Navegador';
public $SCREEN_RES = 'Resolución de pantalla';
public $OR_GREATER = 'o superior';
public $SHOW_HIDE = 'Mostrar/Ocultar';
public $SFMODALERT1 = '&iexcl;Su servidor ejecuta PHP en modo seguro (Safe Mode)!';
public $SFMODALERT2 = 'Muchas funciones, componentes y extensiones de terceros pueden tener problemas si Safe Mode está activado.';
public $GNU_LICENSE = 'Licencia GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Para continuar la instalación, debe leer y aceptar los términos de la licencia. Si los acepta, marque la casilla de la parte inferior ***';
public $UNDERSTAND_GNUGPL = 'Reconozco y acepto que este software se distribuye bajo licencia GNU/GPL';
public $MSG_HOSTNAME = 'Escriba el nombre del host';
public $MSG_DBUSERNAME = 'Escriba el nombre de usuario de la base de datos';
public $MSG_DBNAMEPATH = 'Escriba el nombre o la ruta de la base de datos';
public $MSG_SURE = '&iquest;Ha comprobado que todos los valores sean correctos? \n Elxis intentará implementar en la base de datos la configuración especificada.';
public $DBCONFIGURATION = 'Configuración de la base de datos';
public $DBCONF_1 = 'Escriba el nombre de host del servidor donde va a instalar Elxis.';
public $DBCONF_2 = 'Seleccione el tipo de base de datos que desea utilizar.';
public $DBCONF_3 = 'Escriba el nombre o la ruta de la base de datos. Para evitar problemas al crear la base de datos con el programa de instalación, aseg&uacute;rese de que la base de datos ya existe.';
public $DBCONF_4 = 'Escriba el prefijo que desea utilizar para las tablas.';
public $DBCONF_5 = 'Escriba el nombre de usuario y la contraseña de la base de datos. Aseg&uacute;rese de que el usuario ya existe y de que tiene todos los privilegios necesarios.';
public $OTHER_SETTINGS = 'Otros parámetros';
public $DBTYPE = 'Tipo de base de datos';
public $DBTYPE_COMMENT = 'Normalmente, "MySQL"';
public $DBNAME = 'Nombre de la base de datos';
public $DBNAME_COMMENT = 'Algunos sistemas host sólo permiten un determinado nombre de BD por cada sitio. Puede usar el prefijo de las tablas para diferenciar varias instalaciones de Elxis.'; 
public $DBPATH = 'Ruta de la base de datos';
public $DBPATH_COMMENT = 'Para algunos tipos de bases de datos (como Access, InterBase y FireBird) es necesario definir un archivo de base de datos en lugar de un nombre de base de datos. En tal caso, escriba aquí la ruta del archivo. Ejemplo: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Nombre del host';
public $USLOCALHOST = 'Normalmente, "localhost"';
public $DBUSER = 'Nombre de usuario de la base de datos';
public $DBUSER_COMMENT = 'Podría ser "root" o el nombre de usuario que le indique su proveedor de hosting.';
public $DBPASS = 'Contraseña de la base de datos';
public $DBPASS_COMMENT = 'Por razones de seguridad, es obligatorio utilizar una contraseña para MySQL.';
public $VERIFY_DBPASS = 'Confirmar contraseña de la base de datos';
public $VERIFY_DBPASS_COMMENT = 'Vuelva a escribir la contraseña para confirmarla.';
public $DBPREFIX = 'Prefijo de tabla de la base de datos';
public $DBPREFIX_COMMENT = 'No utilice "old_", ya que este prefijo está reservado para las copias de seguridad.';
public $DBDROP = 'Eliminar tablas existentes';
public $DBBACKUP = 'Crear copia de seguridad de tablas antiguas';
public $DBBACKUP_COMMENT = 'Permite crear una copia de seguridad de las tablas que serán sustuidas durante la instalación.';
public $INSTALL_SAMPLE = 'Instalar datos de ejemplo';
public $SAMPLEPACK = 'Paquete de datos de ejemplo';
public $SAMPLEPACKD = 'Elxis le permite determinar el contenido y el aspecto de su sitio web seleccionando el paquete de datos de ejemplo que desee. También puede optar por no instalar ning&uacute;n tipo de datos de ejemplo (no es recomendable).';
public $NOSAMPLE = 'Ninguno (no recomendado)';
public $DEFAULTPACK = 'Predeterminado de Elxis';
public $PASS_NOTMATCH = 'No coinciden las contraseñas que ha especificado para la base de datos.';
public $CNOT_CONDB = 'No se ha podido establecer conexión con la base de datos.';
public $FAIL_CREATEDB = 'Error al crear la base de datos %s';
public $ENTERSITENAME = 'Escriba el nombre del sitio web';
public $STEPDB_SUCCESS = 'El paso anterior se ha realizado correctamente. Puede continuar configurando los parámetros del sitio web.';
public $STEPDB_FAIL = 'Se ha producido al menos un error grave durante el paso anterior. No se puede continuar. Vuelva al paso anterior y corrija la configuración de la base de datos. El programa de instalación ha generado los siguientes mensajes de error:';
public $SITENAME_INFO = 'Escriba el nombre del sitio web. Conviene que sea un nombre significativo, ya que se usará en los mensajes de correo que envíe.';
public $SITENAME = 'Nombre del sitio web';
public $SITENAME_EG = '(por ejemplo, el nombre de su empresa)';
public $OFFSET = 'Zona horaria';
public $SUGOFFSET = 'Zona horaria sugerida';
public $OFFSETDESC = 'Diferencia horaria entre el servidor y su sistema. Si desea sincronizar la aplicación con la hora local, seleccione la zona horaria adecuada.';
public $SERVERTIME = 'Hora del servidor';
public $LOCALTIME = 'Hora local';
public $DBINFOEMPTY = '&iexcl;La base de datos está vacía o contiene información incorrecta!';
public $SITENAME_EMPTY = 'No ha especificado el nombre del sitio web';
public $DEFLANGUNPUB = '&iexcl;El idioma predeterminado del sitio web no está publicado!';
public $URL = 'URL';
public $PATH = 'Ruta';
public $URLPATH_DESC = 'Si la URL y la ruta parecen correctas, no las cambie. Ante cualquier duda, contacte con el administrador o con su proveedor de servicios de Internet (ISP). Normalmente, los valores iniciales son correctos y no hace falta modificarlos.';
public $DBFILE_NOEXIST = '&iexcl;No existe el archivo de la base de datos!';
public $ADODB_MISSES = '&iexcl;Faltan archivos de ADOdb que son obligatorios!';
public $SITEURL_EMPTY = 'Escriba la URL del sitio web';
public $ABSPATH_EMPTY = 'Escriba la ruta absoluta del sitio web';
public $PERSONAL_INFO = 'Datos personales';
public $YOUREMAIL = 'Su email';
public $ADMINRNAME= 'Nombre real del administrador';
public $ADMINUNAME = 'Nombre de usuario del administrador';
public $ADMINPASS = 'Contraseña del administrador';
public $CHANGEPROFILE = 'Una vez que finalice la instalación, podrá iniciar una sesión en el sitio web y cambiar esta información o configurar su perfil.';
public $FATAL_ERRORMSGS = 'Se ha producido al menos un error grave. No se puede continuar. El programa de instalación ha generado los siguientes mensajes de error:';
public $EMPTYNAME = 'Debe especificar su nombre real.';
public $EMPTYPASS = 'El campo de la contraseña del administrador está vacío.';
public $VALIDEMAIL = 'Debe especificar una dirección de correo válida como administrador.';
public $FTPACCESS = 'Acceso FTP';
public $FTPINFO = 'Activar el acceso por FTP para los archivos puede solucionar muchos de los problemas relacionados con los permisos. Si activa el acceso por FTP, la aplicación tendrá acceso de escritura sobre carpetas y archivos que no son modificables por PHP. El programa de instalación también podrá guardar el archivo de configuración definitivo. De lo contrario, tendrá que crearlo y subirlo al servidor manualmente.';
public $USEFTP = 'Usar FTP';
public $FTPHOST = 'Host de FTP';
public $FTPPATH = 'Ruta de FTP';
public $FTPUSER = 'Usuario de FTP';
public $FTPPASS = 'Contraseña de FTP';
public $FTPPORT = 'Puerto de FTP';
public $MOSTPROB = 'Lo más probable:';
public $FTPHOST_EMPTY = 'Debe especificar un host de FTP';
public $FTPPATH_EMPTY = 'Debe especificar una ruta de FTP';
public $FTPUSER_EMPTY = 'Debe especificar un usuario de FTP';
public $FTPPASS_EMPTY = 'Debe especificar una contraseña de FTP';
public $FTPPORT_EMPTY = 'Debe especificar un puerto de FTP';
public $FTPCONERROR = 'No se ha podido establecer conexión con el host de FTP';
public $FTPUNSUPPORT = 'La configuración de PHP de su servidor no admite conexiones por FTP';
public $CONFSITEDOWN = 'Estamos actualizando la web.<br />Vuelva a visitarnos pronto. Gracias.';
public $CONFSITEDOWNERR = 'Esta web no está disponible temporalmente.<br />Póngase en contacto con el administrador del sistema.';
public $CONGRATS = '&iexcl;Enhorabuena!';
public $ELXINSTSUC = 'Elxis se ha instalado correctamente.';
public $THANKUSELX = 'Muchas gracias por usar Elxis,';
public $CREDITS = 'Créditos';
public $CREDITSELXGO = 'A Ioannis Sannos (Elxis Team), desarrolladores de Elxis.';
public $CREDITSELXCO = 'Ivan Trebjesanin (Elxis Team) e a los miembros de la comunidad de Elxis, por ayudarnos a seguir mejorando la aplicación.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'A los traductores, por su desinteresada aportación para hacer que Elxis sea un CMS respetuoso con la lengua materna de los usuarios.';
public $OTHERTHANK = 'A todos los desarrolladores que forman parte de la comunidad Open Source y que de alguna manera han aportado código a Elxis.';
public $CONFBYHAND = 'No se ha podido guardar automáticamente el archivo de configuración debido a problemas con los permisos. Debe copiar el código y subirlo manualmente al servidor. Para resaltar todo el código, haga clic en el área de texto. Cópielo en un archivo php denominado "configuration.php" y coloque el archivo en la carpeta raíz de Elxis. Atención: El archivo debe guardarse en formato UTF-8.';
public $REMOVEINSTFOL = 'Borre completamente la carpeta "/installation" (no basta con cambiarla de nombre).';
public $LANG_SETTINGS = 'Elxis incorpora una exclusiva interfaz multiling&uuml;e que le permite seleccionar el idioma tanto del panel de administración como del sitio web (puede tener varios idiomas publicados). Asimismo, en el panel de administración puede asignar uno o varios idiomas individualmente para cada artículo, módulo, etc.';
public $DEF_FRONTL = 'Idioma predeterminado del sitio web';
public $PUBL_LANGS = 'Idiomas publicados';
public $DEF_BACKL = 'Idioma predeterminado de la administración';
public $LANGUAGE = 'Idioma';
public $SELECT = 'Seleccionar';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates for Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis extensions';

//elxis 2009.0
public $STEP = 'Paso';
public $RESTARTCONF = '¿Está usted seguro usted deseo para recomenzar la instalación?';
public $DBCONSETS = 'Ajustes de la conexión de base de datos';
public $DBCONSETSD = 'Fill-in the needed information in order Elxis to connect to the database and import basic data.';
public $CONTLAYOUT = 'Contenido y disposición';
public $TMPCONFIGF = 'Temporary configuration file';
public $TMPCONFIGFD = 'Elxis uses a temporary file to store configuration parameters during the installation procedure. 
Elxis installer must be able to write on this file. So you must either make this file writeable or enable FTP access in order 
for the installer to be able to write on it using an FTP connection.';
public $CHECKFTP = 'Compruebe los ajustes del ftp';
public $FAILED = 'Fallado';
public $SUCCESS = 'Éxito';
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
public $SEFURLS = 'URL amistosos de los motores de la búsqueda';
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
public $FEATENLATER = 'Esta característica se puede también permitir más adelante dentro de la administración de Elxis.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Template defines your web site appearance. Select the default template for your web site. 
You can change your selection afterwards or download and install additional templates.';
public $CREDITSELXWI = 'To Kostas Stathopoulos and Elxis Documentation Team for their contribution to Elxis Wiki.';
public $NOWWHAT = '¿Ahora qué?';
public $DELINSTFOL = 'Completely delete installation folder (installation/).';
public $AUTODELINSTFOL = 'Automaticaly delete installation folder.';
public $AUTODELFAILMAN = 'If this fails, then delete installation folder manually.';
public $BENGUIDESWIKI = 'Beginner\'s guides at Elxis Wiki.';
public $VISITFORUMHLP = 'Visit Elxis forum for help.';
public $VISITNEWSITE = 'Visite su nuevo Web site.';

}

?>