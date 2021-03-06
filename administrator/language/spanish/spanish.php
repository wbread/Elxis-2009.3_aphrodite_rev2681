<?php 
/**
* @version: 2009.2
* @copyright: Copyright (C) 2006-2010 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Admin Language
* @author: Elxis Team
* @translator: Ricard Lozano
* @link: http://www.rlozano.com
* @description: Spanish administration Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


define('_ISO','charset=UTF-8');

class standardLanguage {

public $A_XML_LANGUAGE = 'es'; //2-letter language code
public $A_ALERT_SELECT_TO = 'Seleccione el elemento que desee';
public $A_ALERT_SELECT_PUB = 'Seleccione el elemento que desee publicar';
public $A_ALERT_SELECT_PUB_LIST = 'Seleccione el elemento que desee establecer como predeterminado';
public $A_ALERT_ITEM_ASSIGN = 'Seleccione el elemento que desee asignar';
public $A_ALERT_SELECT_UNPUBLISH = 'Seleccione el elemento que desee despublicar';
public $A_ALERT_SELECT_ARCHIVE = 'Seleccione el elemento que desee archivar';
public $A_ALERT_SELECT_UNARCHIVE = 'Seleccione el elemento que desee desarchivar';
public $A_ALERT_SELECT_EDIT = 'Seleccione el elemento que desee editar';
public $A_ALERT_SELECT_DELETE = 'Seleccione el elemento que desee eliminar';
public $A_ALERT_CONFIRM_DELETE = '¿Está seguro de que desea eliminar los elementos seleccionados? ';
public $A_ALERT_ENTER_PASSWORD = 'Especifique una contraseña'; 
public $A_ALERT_INCORRECT = 'Usuario, contraseña o nivel de acceso incorrectos. Vuelva a intentarlo.';
public $A_ALERT_INCORRECT_TRY = 'Usuario o contraseña incorrectos. Vuelva a intentarlo.';
public $A_ALERT_ALPHA = 'El archivo debe contener solamente caracteres alfanuméricos, sin espacios.';
public $A_ALERT_IMAGE_UPLOAD = 'Seleccione la imagen que desee subir';
public $A_ALERT_IMAGE_EXISTS = 'Ya existe una imagen denominada';
public $A_ALERT_IMAGE_FILENAME = 'El archivo debe ser gif, png, jpg, bmp, swf, doc, xls o ppt';
public $A_ALERT_UPLOAD_FAILED = 'Error al subir';
public $A_ALERT_UPLOAD_SUC = 'Se ha subido correctamente';
public $A_ALERT_VALIDATE_NAME = 'Debe especificar un nombre.';
public $A_PLSSELECTCAT = 'Seleccione una categoría';
public $A_ALERT_SELECT_MENU = 'Seleccione un tipo de menú';
public $A_ALERT_ENTER_NAME_MENUITEM = 'Especifique un nombre para este menú';
public $A_GO = 'Ir';
public $A_HELP = 'Ayuda';
public $A_WARNING = 'Advertencia';
public $A_NEWORDERSAVED = 'Nuevo orden guardado';
public $A_SAVEORDER = 'Guardar orden';
public $A_MENULINKS_WHEN_SAVED = 'Enlaces de menú disponibles al guardar';
public $A_NEW_ITEM_LAST = 'Los artículos nuevos al final. El orden puede cambiarse después de guardar el artículo.';
public $A_NEW_ITEM_FIRST = 'Los artículos nuevos al principio.  El orden puede cambiarse después de guardar el artículo.';
public $A_SELECT_IMAGE = '- Seleccionar imagen -';
public $A_SELECTUSER = '- Seleccionar usuario -';
public $A_ALL_SECTIONS = '- Todas las secciones -';
public $A_ALL_SECTIONS2 = 'Todas las secciones';
public $A_ALL_CATEGORIES = '- Todas las categorías -';
public $A_ALL_CATEGORIES2 = 'Todas las categorías';
public $A_ALL_AUTHORS = '- Todos los autores -';
public $A_ALL_POSITIONS = '- Todas las posiciones -';
public $A_ALL_TYPES = '- Todos los tipos -';
public $A_ALL_LANGS = '- Todos los idiomas -';
public $A_IS = 'es';
public $A_CREATE_CAT = 'Primero debe crear una categoría';
public $A_URL = 'URL';
public $A_FIRST = 'Primero';
public $A_LAST = 'Último';
public $A_FP_MANAGER = 'Administrador de la página de inicio';
public $A_CLIENT = 'Cliente';
public $A_ADMINISTRATOR = 'Administración';
public $A_SITE = 'Sitio';
public $A_WRITABLE = 'Modificable';
public $A_UNWRITABLE = 'No modificable';
public $A_MKUNWRAFSV = 'Proteger contra escritura al guardar';
public $A_MKOV_UNWRAFSV = 'Sobrescribir protección de escritura al guardar';
public $A_UNKNOWN = 'Desconocido';
public $A_ORDER = 'Orden';
public $A_ACCESS = 'Acceso';
public $A_TYPE = 'Tipo';
public $A_FILE = 'Archivo';
public $A_NAME = 'Nombre';
public $A_ACCESSLEVEL = 'Nivel de acceso';
public $A_PUBLISHED = 'Publicado';
public $A_UNPUBLISHED = 'No publicado';
public $A_PARAMETERS = 'Parámetros';
public $A_NO = 'No';
public $A_YES = 'Sí';
public $A_THEMODULE = 'El módulo';
public $A_TITLE = 'Título';
public $A_MODULE = 'Módulo';
public $A_LANGUAGE = 'Idioma';
public $A_LINK = 'Enlace';
public $A_PUBLISHING = 'Publicación';
public $A_METAINFO = 'Metaetiquetas';
public $A_LINKTOMENU = 'Crear enlace de menú';
public $A_IMAGES = 'Imágenes';
public $A_PUBLISHINGINFO = 'Información de publicación';
public $A_ORDERING = 'Orden';
public $A_FILTERSECTION = 'Filtrar sección';
public $A_FILTERCATEGORY = 'Filtrar categoría';
public $A_FILTERAUTHOR = 'Filtrar autor';
public $A_FILTERGROUP = 'Filtrar grupo';
public $A_IMAGEINFO = 'Información de imágenes';
public $A_IMAGE = 'Imagen';
public $A_MOSIMAGE = 'Control de MOSImage';
public $A_SUBFOLDER = 'Subcarpeta';
public $A_GALLERY = 'Imágenes de la galería';
public $A_ADD = 'Agregar';
public $A_CONTENTIMAGES = 'Imágenes del contenido';
public $A_UP = 'Arriba';
public $A_DOWN = 'Abajo';
public $A_REMOVE = 'Quitar';
public $A_EDITIMAGE = 'Editar imagen seleccionada';
public $A_SOURCE = 'Código fuente';
public $A_IMAGEALIGN = 'Alinear imagen';
public $A_ALTTEXT = 'Texto alt';
public $A_IMAGEBORDER = 'Borde';
public $A_IMAGECAPTION = 'Texto al pie';
public $A_IMAGECAPTIONPOS = 'Posición del pie';
public $A_IMAGECAPTIONALIGN = 'Alinear pie';
public $A_WIDTH = 'Ancho pie (px)';
public $A_PARAMCONTROL = 'Control de parámetros';
public $A_PARCONTROLEXPL = '* Estos parámetros sólo afectan a la página del artículo completo *';
public $A_METADATA = 'Metaetiquetas';
public $A_KEYWORDS = 'Palabras clave';
public $A_DESCRIPTION = 'Descripción';
public $A_SELECTAMENU = 'Seleccionar menú';
public $A_MENUITEMNAME = 'Enlace de menú';
public $A_EXMENULINKS = 'Enlaces de menú existentes';
public $A_NONE = 'Ninguno';
public $A_NOT_AUTH = 'No está autorizado a ver esta página.';
public $A_LOGIN_NOADMINS = 'No puede iniciar una sesión. No hay ningún superadministrador configurado.';
public $A_LOGIN_NOGROUPS = 'No puede iniciar una sesión. No se han definido grupos de administración.';
public $A_ADMINISTRATION = 'Administración';
public $A_PREVIEW = 'Vista previa';
public $A_EDITUSER = 'Editar usuario';
public $A_EDITCATEGORY = 'Editar categoría';
public $A_EDITSECTION = 'Editar sección';
public $A_MOVE = 'Mover';
public $A_COPY = 'Copiar';
public $A_UNINSTALL = 'Desinstalar';
public $A_UPLOAD = 'Subir';
public $A_CREATE = 'Crear';
public $A_PUBLISH = 'Publicar';
public $A_UNPUBLISH = 'No publicar';
public $A_DELETE = 'Eliminar';
public $A_TRASH = 'Eliminar';
public $A_ITEMS = 'artículos';
public $A_SEARCH = 'Búsqueda';
public $A_SECTLANGES = 'Idiomas de la sección';
public $A_CATLANGES = 'Idiomas de la categoría';
public $A_FILTLANG = 'Filtrar idioma';
public $A_LANGCONFL = 'Conflicto entre idiomas';
public $A_LANGCONM1 = '¡Los parámetros de idioma de la sección donde se encuentra esta categoría no permiten mostrar esta categoría!';
public $A_TOP = 'Arriba';
public $A_BOTTOM = 'Abajo';
public $A_NO_USER = 'Sin usuario';
public $A_TOOLS = 'Herramientas';
public $A_USERNAME = 'Usuario';
public $A_PASSWORD = 'Contraseña';
public $A_WELCOME_ELXIS = '¡Bienvenido!';
public $A_USE_VALIDUP = 'Especifique un nombre de usuario y una contraseña que sean válidos para acceder a la consola de administración.';
public $A_SELECT_LANG = 'Seleccione su idioma preferido para esta sesión. ';
public $A_WARNING_JAVASCRIPT = 'Importante: Su navegador debe tener Javascript activado para que la administración funcione correctamente';
public $A_LOGIN = 'Iniciar sesión';
public $A_GENERATE_TIME = 'Pagina generada en %f segundos';
public $A_LOGOUT = 'Cerrar sesión';
public $A_CONTENTPREVIEW = 'Vista previa del artículo';
public $A_CLOSE = 'Cerrar';
public $A_PRINT = 'Imprimir';
public $A_MODULEPREVIEW = 'Vista previa del módulo';
public $A_POLLPREVIEW = 'Vista previa de la encuesta';
public $A_RESULTS = 'Mostrados';
public $A_VOTE = 'Votar';
public $A_UPLOADAFILE = 'Subir un archivo';
public $A_FILEUPLOAD = 'Subir archivo';
public $A_UPLOADIMAGE = 'Subir imagen';
public $A_SELITEMMOV = 'Seleccione el elemento que desee mover';
public $A_MENU_HOME = 'Inicio'; 
public $A_MENU_GC = 'Configuración global';
public $A_MENU_SITE_MENU ='Administración del sitio';
public $A_MENU_CONFIGURATION = 'Configuración';
public $A_MENU_SITELANS = 'Idiomas del sitio';
public $A_MENU_LANGUAGES = 'Idiomas';
public $A_MENU_MANAGE_LANG = 'Administrar idiomas';
public $A_MENU_LANG_MANAGE = 'Administrador de idiomas';
public $A_MENU_ADMINLANGS = 'Idiomas de la administración';
public $A_MENU_INSTALL = 'Instalar';
public $A_MENU_INSTALL_LANG = 'Instalar idiomas';
public $A_MENU_MEDIA_MANAGE = 'Administrador multimedia';
public $A_MENU_MANAGE_MEDIA = 'Administrar archivos multimedia';
public $A_MENU_NEW_WINDOW = 'En una nueva ventana';
public $A_MENU_INLINE = 'En línea';
public $A_MENU_INLINE_POS = 'En línea con posiciones';
public $A_MENU_STATISTICS = 'Estadísticas';
public $A_MENU_STATISTICS_SITE = 'Estadísticas del sitio';
public $A_MENU_BROWSER = 'Navegador, sistema operativo, dominio';
public $A_MENU_PAGE_IMP = 'Impresiones de páginas';
public $A_MENU_SEARCH_TEXT = 'Texto buscado';
public $A_MENU_TEMP_MANAGE = 'Administrador de plantillas';
public $A_MENU_TEMP_CHANGE = 'Cambiar plantilla del sitio';
public $A_MENU_SITE_TEMP = 'Plantillas - Sitio';
public $A_MENU_ADMIN_TEMP = 'Plantillas - Administración';
public $A_MENU_LOGIN_SCREENS = 'Plantillas - Acceso a la administración';
public $A_MENU_ADMIN_CHANGE_TEMP = 'Cambiar plantilla de la administración';
public $A_MENU_MODUL_POS = 'Posición de los módulos';
public $A_MENU_TEMP_POS = 'Posiciones de la plantilla';
public $A_MENU_TRASH_MANAGE = 'Administrador de la papelera';
public $A_MENU_MANAGE_TRASH = 'Administrar papelera';
public $A_MENU_USER_MANAGE = 'Administrador de usuarios';
public $A_MENU_MANAGE_USER = 'Administrar usuarios';
public $A_MENU_ADD_EDIT = 'Agregar/Editar usuarios';
public $A_MENU_MASS_MAIL = 'Correo masivo';
public $A_MENU_MAIL_USERS = 'Enviar un email a un grupo de usuarios registrados';
public $A_MENU_MANAGE_STR = 'Administrar estructura del sitio';
public $A_MENU_MANAGER = 'Administrador de menús';
public $A_MENU_CONTENT = 'Contenido';
public $A_MENU_CONTENT_MANAGE = 'Administrador de contenidos';
public $A_MENU_CONTENT_MANAGERS = 'Administradores de contenidos';
public $A_MENU_MANAGE_CONTENT = 'Administrar artículos';
public $A_MENU_MANAGE_CONTACTS = 'Administrar contactos';
public $A_MENU_ITEMS = 'Artículos';
public $A_MENU_ADDNEDIT = 'Agregar/Editar';
public $A_MENU_ARCHIVE = 'Archivar';
public $A_MENU_OTHER_MANAGE = 'Otros administradores';
public $A_MENU_ITEMS_FRONT = 'Administrar artículos de la página de inicio';
public $A_MENU_ITEMS_CONTENT = 'Administrar páginas estáticas';
public $A_MENU_STATICMANAGER = 'Administrador de páginas estáticas';
public $A_MENU_ITEMS_ARCHIVE = 'Administrar artículos archivados';
public $A_MENU_ARCHIVE_MANAGE = 'Administrador del archivo';
public $A_MENU_CONTENT_SEC = 'Administrar secciones';
public $A_MENU_CONTENT_CAT = 'Administrar categorías';
public $A_MENU_COMPONENTS = 'Componentes';
public $A_MENU_INST_UNST = 'Instalar/Desinstalar';
public $A_MENU_MORE_COMP = 'Más componentes';
public $A_MENU_MODULES = 'Módulos';
public $A_MENU_INSTALL_CUST = 'Instalar módulos adicionales';
public $A_MENU_SITE_MOD = 'Módulos del sitio';
public $A_MENU_SITE_MOD_MANAGE = 'Administrar módulos del sitio';
public $A_MENU_ADMIN_MOD = 'Módulos de la administración';
public $A_MENU_ADMIN_MOD_MANAGE = 'Administrar módulos de la administración';
public $A_MENU_MAMBOTS = 'Bots';
public $A_MENU_CUSTOM_MAMBOT = 'Instalar bots personalizados';
public $A_MENU_SITE_MAMBOTS = 'Bots del sitio';
public $A_MENU_MAMBOT_MANAGE = 'Administrar bots del sitio';
public $A_MENU_MESSAGES = 'Mensajes';
public $A_MENU_INBOX = 'Bandeja de entrada';
public $A_MENU_PRIV_MSG = 'Mensajes privados';
public $A_MENU_GLOBAL_CHECK = 'Desbloqueo global de artículos';
public $A_MENU_CHECK_INOUT = 'Desbloquear en el sistema todos los artículos que estaban bloqueados';
public $A_MENU_SYSTEM_INFO = 'Información del sistema';
public $A_MENU_CLEAN_CACHE = 'Vaciar caché';
public $A_MENU_CLEAN_CACHE_ITEMS = 'Elimina todo el contenido de la caché';
public $A_MENU_BIG_THANKS = 'Muchas gracias a todas las personas que han contribuido';
public $A_MENU_SUPPORT = 'Soporte';
public $A_MENU_SYSTEM = 'Sistema';
public $A_MENU_GLOSSARY = 'Glosario';
public $A_MENU_SYSTEM_MANAGMENT = 'Administración del sistema';
public $A_MENU_MODULE_MANAGMENT = 'Administración de módulos';
public $A_MENU_MAMBOT_MANAGMENT = 'Administración de bots';
public $A_MENU_MESSAGING_MANAGMENT = 'Administración de mensajería';
public $A_MENU_COMPONENT_MANAGMENT = 'Administración de componentes';
public $A_MENU_MENU_MANAGMENT = 'Administración de menús';
public $A_MENU_INSTALLERS = 'Instaladores';
public $A_MENU_INSTALLER_LIST = 'Lista de instaladores';
public $A_MENU_CONTENT_BYSEC = 'Artículos por secciones';
public $A_MENU_SYSTEMINFO = 'Ver información del sistema';
public $A_MENU_ACCSMANG = 'Administrador de acceso';
public $A_MENU_CBL = 'Artículos por idioma';
public $A_MENU_AL = 'Todos los idiomas';
public $A_USERS = 'Usuarios';
public $A_EXTRAFIELDS = 'Campos adicionales';
public $A_LATESTADDED = 'Contenido agregado más recientemente';
public $A_USERSONLINE = 'Usuarios conectados';
public $A_MAIL = 'Email';
public $A_MOSTPOPULARITEMS = 'Artículos más leídos';
public $A_CREATED = 'Creado';
public $A_HITS = 'Visitas';
public $A_HELPDESC = 'Centro de ayuda de Elxis. Muestra la Ayuda en línea. ';
public $A_MENUMANAGERDESC = 'Para ver, agregar, modificar o eliminar los menús.';
public $A_FPAGEMANAGERDESC = 'Para personalizar el componente de la página de inicio.';
public $A_STATICONTMANAGER = 'Administrador de páginas estáticas';
public $A_STATICMANDESC = 'Para ver todas las páginas estáticas. Las páginas estáticas no pertenecen a secciones ni categorías. ';
public $A_SECTIONMANAGER = 'Administrador de secciones';
public $A_SECTIONMANDESC = 'Para ver, agregar o eliminar secciones.';
public $A_CATEGORYMANAGER = 'Administrador de categorías';
public $A_CATEGORYMANDESC = 'Para ver, editar, agregar o eliminar categorías.';
public $A_ALLCONTENTITEMS = 'Administrador de artículos';
public $A_DISPLALLCONTITEMS = 'Para ver todos los artículos de las secciones y categorías.';
public $A_TRASH_MANDESC = 'Para vaciar la papelera o restaurar los elementos eliminados.';
public $A_GLOBAL_CONFDESC = 'Para modificar los parámetros de la configuración global.';
public $A_DATABASEMANAGER = 'Administrador de la base de datos';
public $A_DATABASEMANDESC = 'Para realizar una copia de seguridad de la base de datos, repararla u optimizarla.';
public $A_ACCESSMANDESC = 'Para administrar los grupos de usuarios y los permisos del sitio.';
public $A_MENUMEDIAMANDESC = 'Para ver, agregar o eliminar imágenes y otros archivos multimedia.';
public $A_MENUUSERMANDESC = 'Para ver, agregar o eliminar usuarios. Para cambiar grupos o contraseñas.';
public $A_WELCOMEMSG = 'Bienvenido';
public $A_WELCOMEMSGDESC = 'Use el menú de la izquierda para navegar.';
public $A_LANGMANDESC = 'Para administrar los idiomas del sitio.';
public $A_TOOLSDESC = 'Estas pequeñas aplicaciones pueden funcionar dentro del sistema o de manera totalmente independiente. ';
public $A_ELXIS_REGISTRATION = 'Registro de Elxis';
public $A_NEW = 'Nuevo';
public $A_DEFAULT = 'Predeterminado';
public $A_ASSIGN = 'Asignar';
public $A_UNARCHIVE = 'Desarchivar';
public $A_EDIT = 'Editar';
public $A_SAVE = 'Guardar';
public $A_BACK = 'Atrás';
public $A_CANCEL = 'Cancelar';
public $A_APPLY = 'Aplicar';
public $A_OF = 'de';
public $A_NORECORDSFOUND = 'No se encuentran entradas';
public $A_FIRSTPAGE = 'Primera página';
public $A_PREVIOUSPAGE = 'Página anterior';
public $A_NEXTPAGE = 'Página siguiente';
public $A_ENDPAGE = 'Página final';
public $A_PREVIOUS = 'Anterior';
public $A_NEXT = 'Siguiente';
public $A_END = 'Fin';
public $A_DISPLAY = 'Mostrar';
public $A_MOVE_UP = 'Mover arriba';
public $A_MOVE_DOWN = 'Mover abajo';
public $A_START = 'Inicio';
public $A_NAVNEXT = ' Siguiente &gt;';
public $A_NAVEND = ' Fin &gt;&gt;';
public $A_NAVPREV = '&lt; Anterior';
public $A_NAVSTART = '&lt;&lt; Inicio';
public $A_CHECKEDOUT = 'Bloqueado';
public $A_FRONTPAGE = 'Inicio';
public $A_IMAGEPOSITION = 'Posición de la imagen';
public $A_FILTER = 'Filtrar';
public $A_FILTERTYPE = 'Filtrar tipo';
public $A_REORDER = 'Reordenar';
public $A_SECTION = 'Sección';
public $A_CATEGORY = 'Categoría';
public $A_AUTHOR = 'Autor';
public $A_NB = '#';
public $A_NBACTIVE = 'Activos';
public $A_NBTRASH = 'En la papelera';
public $A_COMP_CREATE_MENU_LINK = '¿Está seguro de que desea crear un nuevo enlace de menú? \nSe perderán todos los cambios del contenido que no se hayan guardado.';
public $A_CREATEMENUIT = 'Se creará un nuevo enlace en el menú seleccionado.';
public $A_COMP_MENU_TYPE_SELECT = 'Seleccione el tipo de menú';
public $A_MENU = 'Menú';
public $A_ITEMNAME = 'Nombre del enlace';
public $A_STATE = 'Estado';
public $A_TRASHED = 'En la papelera';
public $A_LINKTOUSER = 'Enlazado con un usuario';
public $A_CONTACT = 'Contacto';
public $A_EMAIL = 'Email';
public $A_ID = 'ID';
public $A_EXPIRED = 'Caducado';
public $A_ARCHIVED = 'Archivado';
public $A_SELITEMTO = 'Seleccione el elemento que desee';
public $A_DATE = 'Fecha';
public $A_ISCEDITANADM = 'está siendo editado por otro administrador';
public $A_USER = 'Usuario';
public $A_ARCHIVE = 'Archivar';
public $A_ITEMID = 'Itemid';
public $A_CID = 'CID';
public $A_MISCEL = 'Miscelánea';
public $A_LINKS = 'Enlaces';
public $A_ITEMSTRASHED = 'Elemento(s) enviado(s) a la papelera';
public $A_COMPONENT = 'Componente';
public $A_POSITION = 'Posición ';
public $A_ENABLED = 'Activado';
public $A_DISABLED = 'Desactivado';
public $A_SETTSUCSAVED = 'Parámetros guardados correctamente';
public $A_ASSIGNED = 'Asignado';
public $A_VERSION = 'Versión';
public $A_TEMPLATES = 'Plantillas';
public $A_FILTERED = 'Filtrado';
public $A_CPUBLISHINFO = 'Información de publicación';
public $A_NEVER = 'Nunca';
public $A_GROUP = 'Grupo';
public $A_PARITEM = 'Elemento superior';
public $A_BLOG = 'Blog';
public $A_DETAILS = 'Detalles';
public $A_CATEGORS = 'Categorías';
public $A_ALIGN = 'Alinear';
public $A_LINKNAME = 'Nombre del enlace';
public $A_SSCHITEM = 'Cambios del artículo guardados correctamente';
public $A_SSAVITEM = 'Artículo guardado correctamente';
public $A_AUTHMAIL = 'Email del autor';
public $A_MENUS_CNTSCARC = 'Sección de contenidos archivados';
public $A_MENUS_CCTCATBL = 'Tabla - Categoría de contactos';
public $A_MENUS_NFDCATBL = 'Tabla - Categoría de servicios de noticias';
public $A_MENUS_WBLCATBL = 'Tabla - Categoría de enlaces web';
public $A_MENUS_CNTCNTBL = 'Tabla - Categoría de artículos';
public $A_MENUS_CNTCTBLG = 'Blog - Categoría de artículos';
public $A_MENUS_CNTCTARBLG = 'Blog - Categoría de artículos archivados';
public $A_LOGGEDUSRS = 'Usuarios conectados actualmente';
public $A_FORCELOGOUT = 'Forzar el cierre de sesión del usuario';
public $A_SELECTED = 'seleccionado';
public $A_ERROR = 'Error';
public $A_ALL = 'Todos';
public $A_TRANSLATE = 'Traducir';
public $A_TRMKSELECT = 'Seleccione el artículo que desee traducir';
public $A_SELCOSECT = '- Seleccionar sección de contenidos -';
public $A_SELCOCAT = '- Seleccionar categoría de contenidos -';
public $A_SELMENU = '- Seleccionar menú -';
public $A_NOTUSEIMAG = '- No usar imagen -';
public $A_USEDEFIMAG = '- Usar imagen predeterminada -';
public $A_SHOW_ADVANCED = 'Mostrar detalles avanzados';
public $A_HIDE_ADVANCED = 'Ocultar detalles avanzados';
public $A_GLBALSEMULTN = 'Emulación de Register Globals';
public $A_GLBALSEMULCMP = 'Emulación del parámetro Registrer Globals. Cuando está desactivado, es posible que algunos componentes de terceros no funcionen correctamente.';
public $A_DONTCHMODNFL = 'No aplicar CHMOD a los nuevos archivos (usar valores del servidor)';
public $A_CHMODNEWFLS = 'Aplicar CHMOD a los nuevos archivos';
public $A_TO = 'a';
public $A_COMP_CONTENT_MANAGER = 'Manager';
public $A_COMP_FRONT_PAGE_ITEMS = 'Artículos de la página de inicio';
public $A_SUPER_ADMIN = 'Superadministrador';
public $A_COMP_FRONT_COUNT_NUM = 'El parámetro \'Número\' debe tener un valor numérico';
public $A_COMP_FRONT_INTRO_NUM = 'El parámetro \'Intro\' debe tener un valor numérico';
public $A_COMP_FRONT_WELCOME = 'Bienvenido';
public $A_COMP_FRONT_IDONOT = 'No hay nada que mostrar';
public $A_COMP_LANG_INSTALL = 'Idiomas instalados';
public $A_COMP_LANG_FILE = 'Idioma del archivo';
public $A_INSTALL_COMP_UPL_NEW = 'Subir nuevo componente';
public $A_BRIDGES = 'Bridges';
public $A_BRIDGE = 'Bridge';
public $SOFTDISK = 'SoftDisk';
public $ADDSOCUT = 'Agregar acceso directo';
public $A_MANSOCUTS = 'Administrar accesos directos';
public $A_SHORTCUTS = 'Accesos directos';
public $A_SEOTITLE = 'Título SEO';
public $A_SEOTEMPTY = '¡El título SEO no puede estar vacío!';
public $A_SEOTHELP = 'Sólo puede usar caracteres latinos en minúscula, números, guiones y guiones bajos. ¡El título SEO debe ser exclusivo en su sección/categoría! Use títulos SEO exclusivos y fácilmente identificativos.';
public $A_SEOTLARGER = 'Pruebe con un título más largo.';
public $A_SEOTSUG = 'Título SEO sugerido';
public $A_SEOTVAL = 'Validar título SEO';
public $A_SEOTEXIST = 'El título SEO ya existe.';
public $A_VALID = 'Válido';
public $A_INVALID = 'No válido';
public $A_POLL_MANAGER = 'Administrador de encuestas';
public $A_SUB_CONTENT = 'Contenido enviado';
public $A_LOGIN_CLOAK = 'Máscara del acceso a la administración';
public $A_LOGIN_CLOAKD = 'Escriba en la barra de direcciones del navegador la URL de la página de acceso a la administración.';
public $A_NEWSFEEDS = 'Servicios de noticias';
public $A_BANNERS = 'Banners';
public $A_MAN_BANNERS = 'Administrar banners';
public $A_MAN_CLIENTS = 'Administrar clientes';
public $A_CONTACTS = 'Contactos';
public $A_CONT_CATEGORS = 'Categorías de contactos';
public $A_WEBL_ITEMS = 'Enlaces web';
public $A_WEBL_CATEGORS = 'Categorías de enlaces web';
public $A_MAN_DB = 'Administrar base de datos';
public $A_VIEW_BACKUPSB = 'Ver copias de seguridad';
public $A_MON_STATS = 'Supervisar estadísticas';
public $A_MON_TABLES = 'Supervisar tablas';
public $A_SYNDICATE = 'Sindicar';
public $A_MAN_NEWSFEEDS = 'Administrar servicios de noticias';
public $A_NEWSFEED_CATS = 'Categorías de servicios de noticias';
public $A_TPASS_LASTACT = 'Tiempo transcurrido desde la última actividad';
public $A_VISITORS = 'visitantes';
public $A_HOURS = 'horas';
public $A_HOUR = 'hora';
public $A_MINUTES = 'minutos';
public $A_MINUTE = 'minuto';
public $A_SECONDS = 'segundos';
public $A_SECOND = 'segundo';
public $A_TIMESESSEXP = 'Tiempo que queda para que caduque la sesión';
public $A_SESSEXPIRED = '¡La sesión ha caducado!';
//elxis 2008.1
public $A_ELXISBLOG = 'Elxis Blog';
//2009.0
public $A_C_NEWSLETTER = 'Newsletter';
public $A_C_SHOPPINGCART = 'Carro de compras';
public $A_C_DOWNLOADS = 'Transferencias directas';
public $A_C_GALLERY = 'Galería';
//2009.2
public $A_CHK_UPDATES = 'Buscar actualizaciones';

}

?>