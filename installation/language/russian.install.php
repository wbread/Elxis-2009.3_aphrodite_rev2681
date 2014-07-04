<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Coursar
* @link: http://www.elxis.ru
* @email: coursar@gmail.com
* @description: Russian installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Доступ запрещён.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'ru'; //2-letter country code 
public $LANGNAME = 'Русский'; //This language, written in your language
public $CLOSE = 'Закрыть';
public $MOVE = 'Переместить';
public $NOTE = 'Примечание';
public $SUGGESTIONS = 'Советы';
public $RESTARTINST = 'Начать установку заново';
public $WRITABLE = 'Доступен для записи';
public $UNWRITABLE = 'Не доступен для записи';
public $HELP = 'Помощь';
public $COMPLETED = 'Завершено';
public $PRE_INSTALLATION_CHECK = 'Предустановочная проверка';
public $LICENSE = 'Лицензия';
public $ELXIS_WEB_INSTALLER = 'Elxis - Веб Инсталлятор';
public $DEFAULT_AGREE = 'Пожалуйста, прочтите и согласитесь с условиями лицензии для продолжения установки';
public $ALT_ELXIS_INSTALLATION = 'Установка Elxis';
public $DATABASE = 'База Данных';
public $SITE_NAME = 'Название сайта';
public $SITE_SETTINGS = 'Настройки сайта';
public $FINISH = 'Финиш';
public $NEXT = 'Далее >>';
public $BACK = '<< Назад';
public $INSTALLTEXT_01 = 'Если один из этих пунктов выделен красным цветом, то необходимо принять меры для 
исправления указанных настроек. Невыполнение этих условий может привести к неправильной работе Elxis и невозможности установки.';
public $INSTALLTEXT_02 = 'Предустановочная проверка для';
public $INSTALL_PHP_VERSION = 'Версия PHP >= 5.0.0';
public $NO = 'Нет';
public $YES = 'Да';
public $ZLIBSUPPORT = 'Поддержка сжатия zlib';
public $AVAILABLE = 'Доступно';
public $UNAVAILABLE = 'Не доступно';
public $XMLSUPPORT = 'Поддержка xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Вы можете продолжать установку, содержимое файла конфигурации будет показано на завершающем 
этапе установки. Просто скопируйте его в  буфер, сохраните как файл configuration.php и загрузите на сайт по ftp.';
public $SESSIONSAVEPATH = 'Каталог хранения сессий (session save path)';
public $SUPPORTED_DBS = 'Поддерживаемые базы данных';
public $SUPPORTED_DBS_INFO = 'Список типов БД, поддерживаемых системой. Помните, что могут быть доступны и некторые 
другие БД (например, SQLite).';
public $NOTSET = 'Не установлено';
public $RECOMMENDEDSETTINGS = 'Рекомендуемые настройки';
public $RECOMMENDEDSETTINGS01 = 'Эти установки рекомендуются для обеспечения полной совместимости PHP с Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Однако Elxis может работать даже если не все указанные установки совпадают.';
public $DIRECTIVE = 'Директива';
public $RECOMMENDED = 'Рекомендовано';
public $ACTUAL = 'Сейчас';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Разрешить URL fopen';
public $ON = 'Вкл';
public $OFF = 'Выкл';
public $DIRFPERM = 'Права доступа для каталогов и файлов';
public $DIRFPERM01 = 'Возможно, Elxis необходимо будет осуществить запись в другие каталоги. Например, в процессе установки 
модулей Elxis необходимо загрузить файлы в каталог "modules". Если вы видите "Не доступен для записи" вы можете изменить
права на каталог для того, чтобы Elxis могла осуществить запись. Для максимальной безопасности, вы можете после этого 
вновь сделать их недоступными для записи.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS - бесплатное программное обеспечение, распространяемое под лицензией GNU/GPL.';
public $INSTALL_LANG = 'Выберите язык установки';
public $DISABLE_FUNC = 'Для обеспечения безопасности вашего сайта, рекомендуется отключить в php.ini (если вы их не используете) следующие PHP функции:';
public $FTP_NOTE = 'Если вы включите FTP позже, Elxis сможет работать, даже если некоторые из этих каталогов доступны только для чтения.';
public $OTHER_RECOM = 'Другие рекомендации';
public $OUR_RECOM_ELXIS = 'Наши рекомендации относительно используемого программного обеспечения для CMS Elxis.';
public $SERVER_OS = 'ОС сервера';
public $HTTP_SERVER = 'HTTP сервер';
public $BROWSER = 'Браузер';
public $SCREEN_RES = 'Разрешение монитора';
public $OR_GREATER = 'или выше';
public $SHOW_HIDE = 'Показать/Скрыть';
public $SFMODALERT1 = 'PHP ЗАПУЩЕН В РЕЖИМЕ SAFE MODE!';
public $SFMODALERT2 = 'Мнногие функции Elxis, компонентов и расширений имеют проблемы с режимом safe mode.';
public $GNU_LICENSE = 'Лицензия GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Для продолжения установки Elxis необходимо согласится с условиями лицензии 
(поставить галочку внизу) ***';
public $UNDERSTAND_GNUGPL = 'Я понимаю, что это программное обеспечение распространяется на условиях лицензии GNU/GPL';
public $MSG_HOSTNAME = 'Введите адрес хоста базы данных';
public $MSG_DBUSERNAME = 'Введите имя пользователя базы данных';
public $MSG_DBNAMEPATH = 'Введите имя/путь базы данных';
public $MSG_SURE = 'Вы уверены, что эти установки верны? \nElxis сейчас попытается установить связь с БД, используя указанные настройки';
public $DBCONFIGURATION = 'Конфигурация базы данных';
public $DBCONF_1 = 'Введите имя сервера баз данных для Elxis, на который будет произведена установка';
public $DBCONF_2 = 'Выберите тип базы данных, который вы будете использовать для Elxis';
public $DBCONF_3 = 'Введите пользователя базы данных, пароль и имя/путь базы данных, которые вы собираетесь 
использовать с Elxis. Для избежания проблем с созданием базы данных, предварительно создайте её..';
public $DBCONF_4 = 'Введите префикс таблиц для использования Elxis.';
public $DBCONF_5 = 'Введите имя пользователя базы данных и пароль. Убедитесь в том, что пользователь существует и обладает необходимыми привилегиями.';
public $OTHER_SETTINGS = 'Другие настройки';
public $DBTYPE = 'Тип Базы Данных';
public $DBTYPE_COMMENT = 'Обычно "MySQL"';
public $DBNAME = 'Имя базы данных';
public $DBNAME_COMMENT = 'Некоторые хосты разрешают только определённое имя БД для сайта. Используйте префикс таблицы для elxis сайтов.'; 
public $DBPATH = 'Путь БД';
public $DBPATH_COMMENT = 'Некоторые типы БД, например, Access, InterBase и FireBird, требуют указания путей к 
файлам базы данных вместо имени базы данных. В этом случае введите путь. 
Пример: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Хост';
public $USLOCALHOST = 'Обычно "localhost"';
public $DBUSER = 'Имя пользователя БД';
public $DBUSER_COMMENT = 'Укажите имя пользователя (root или то, которое было указано хостером)';
public $DBPASS = 'Пароль БД';
public $DBPASS_COMMENT = 'Для безопасности сайта используйте НЕ пустой пароль';
public $VERIFY_DBPASS = 'Подтверждение пароля';
public $VERIFY_DBPASS_COMMENT = 'Повторно введите пароль для подтверждения';
public $DBPREFIX = 'Префикс имён таблиц БД';
public $DBPREFIX_COMMENT = 'Не используйте префикс "old_", поскольку он применяется для резервной копии старых таблиц';
public $DBDROP = 'Удалить существующие таблицы';
public $DBBACKUP = 'Резервная копия старых таблиц';
public $DBBACKUP_COMMENT = 'Любые существующие резервные копии таблиц, созданные инсталлятором Elxis ранее, будут заменены';
public $INSTALL_SAMPLE = 'Установить демонстрационные данные';
public $SAMPLEPACK = 'Пакет демонстрационных данных';
public $SAMPLEPACKD = 'Elxis позволяет вам определить содержимое вашего сайта и его вид путём 
выбора наиболее подходящего для вас Пакета Демо-Данных. Вы также можете 
не устанавливать демо-данные (не рекомендуется).';
public $NOSAMPLE = 'Нет (Не рекомендуется)';
public $DEFAULTPACK = 'Elxis (по умолчанию)';
public $PASS_NOTMATCH = 'Неверный пароль БД.';
public $CNOT_CONDB = 'Не удаётся подключиться к базе данных.';
public $FAIL_CREATEDB = 'Ошибка создания базы данных %s';
public $ENTERSITENAME = 'Пожалуйста, введите Название сайта';
public $STEPDB_SUCCESS = 'Предыдущий этап успешно завершён. Теперь вы можете настроить параметры вашего сайта.';
public $STEPDB_FAIL = 'На предыдущем этапе установки произошла фатальная ошибка. Продолжение невозможно. 
Пожалуйста, вернитесь назад и исправьте настройки Базы Данных. 
Сообщения об ошибках инсталлятора Elxis:';
public $SITENAME_INFO = 'Введите название вашего сайта. Это название будет использовано в рассылках почтовых сообщений.';
public $SITENAME = 'Название сайта';
public $SITENAME_EG = 'Например, "Мой сайт Elxis"';
public $OFFSET = 'Смещение';
public $SUGOFFSET = 'Рекомендуемое смещение';
public $OFFSETDESC = 'Разница во времени между сервером и вашим компьютером. Если вы хотите синхронизировать Elxis с вашим локальным временем установите соответствующее смещение.';
public $SERVERTIME = 'Время сервера';
public $LOCALTIME = 'Ваше локальное время.';
public $DBINFOEMPTY = 'Информация о базе данных не указана/неверна!';
public $SITENAME_EMPTY = 'Не указано Название Сайта';
public $DEFLANGUNPUB = 'Не опубликован язык внешнего интерфейса по умолчанию!';
public $URL = 'URL';
public $PATH = 'Путь';
public $URLPATH_DESC = 'Если URL и Путь к сайту выглядят правильно, то изменять их не нужно. 
Если вы не уверены, свяжитесь с вашим провайдером или администратором. Обычно, отображаемые значения являются правильными.';
public $DBFILE_NOEXIST = 'Файл базы данных не существует!';
public $ADODB_MISSES = 'Необходимые файлы ADOdb не найдены!';
public $SITEURL_EMPTY = 'Пожалуйста, введите URL сайта';
public $ABSPATH_EMPTY = 'Пожалуйста, введите абсолютный путь к вашему сайту';
public $PERSONAL_INFO = 'Персональная информация';
public $YOUREMAIL = 'Ваш E-mail';
public $ADMINRNAME= 'Настоящее имя администратора';
public $ADMINUNAME = 'Логин администратора';
public $ADMINPASS = 'Пароль администратора';
public $CHANGEPROFILE = 'После установки вы можете авторизироваться на сайте, изменить персональную информацию и установить ваш профиль.';
public $FATAL_ERRORMSGS = 'Произошла фатальная ошибка. Продолжение невозможно. 
Сообщения инсталлятора Elxis:';
public $EMPTYNAME = 'Вы должны ввести ваше настоящее имя.';
public $EMPTYPASS = 'Пароль администратора пуст.';
public $VALIDEMAIL = 'Вы должны ввести действительный e-mail адрес администратора.';
public $FTPACCESS = 'FTP Доступ';
public $FTPINFO = 'Включение доступа к файлам по FTP решает многие проблемы с правами. 
Если вы включите FTP, то Elxis сможет производить запись в каталоги/файлы, которые были 
недоступны для записи при использовании PHP. Установщик Elxis сможет сохранить конфигурационный файл и 
вам не придётся создавать его и загружать на сайт (если каталог не доступен для записи).';
public $USEFTP = 'Использовать FTP';
public $FTPHOST = 'FTP хост';
public $FTPPATH = 'FTP путь';
public $FTPUSER = 'FTP пользователь';
public $FTPPASS = 'FTP пароль';
public $FTPPORT = 'FTP порт';
public $MOSTPROB = 'Наиболее вероятно:';
public $FTPHOST_EMPTY = 'Вы должны указать FTP хост';
public $FTPPATH_EMPTY = 'Вы должны указать FTP путь';
public $FTPUSER_EMPTY = 'Вы должны указать FTP пользователь';
public $FTPPASS_EMPTY = 'Вы должны указать FTP пароль';
public $FTPPORT_EMPTY = 'Вы должны указать FTP порт';
public $FTPCONERROR = 'Не удаётся соединиться с FTP хостом';
public $FTPUNSUPPORT = 'Настройки PHP не поддерживают FTP-соединения';
public $CONFSITEDOWN = 'Сайт закрыт на техническое обслуживание.<br />Пожалуйста, зайдите позже.';
public $CONFSITEDOWNERR = 'Сайт недоступен.<br />Пожалуйста, сообщите об этом Системному Администратору';
public $CONGRATS = 'Поздравления!';
public $ELXINSTSUC = 'Elxis успешно установлена на ваш сайт.';
public $THANKUSELX = 'Большое спасибо за использование Elxis,';
public $CREDITS = 'Благодарности:';
public $CREDITSELXGO = 'Ioannis Sannos (Elxis Team) за разработку Elxis.';
public $CREDITSELXCO = 'Ivan Trebjesanin (Elxis Team) и членам сообщества Elxis за их помощь и идеи в улучшении Elxis.';
public $CREDITSELXRTL = 'Farhad Sakhaei (сообщество Elxis) за его помощь в осуществлении поддержки RTL в Elxis.';
public $CREDITSELXTR = 'Переводчикам за их переводы на различные языки.';
public $OTHERTHANK = 'Всем разработчикам, которые поддерживают сообщество Open Source и используют Elxis.';
public $CONFBYHAND = 'Установщик не может сохранить конфигурационный файл для вашего сайта из-за проблем с правами доступа. 
	Вы должны загрузить этот код вручную. Выделите весь код в текстовом поле. 
	Вставьте его в php-файл, назовите его "configuration.php" и загрузите в коневой каталог Elxis. 
	Важно: файл должен быть сохранён в кодировке UTF-8';
public $LANG_SETTINGS = 'Elxis поддерживает уникальный мультиязычный интерфейс, позволяющий 
вам устанавливать язык внешнего и внутреннего интерфейса, выбирать более одного опубликованного 
языка для внешнего интерфейса. Примечание: в панели управления Elxis вы можете установить отображение 
объектов содержимого, модулей и т.д. в зависимости от языковых комбинаций.';
public $DEF_FRONTL = 'Язык внешнего интерфейса по умолчанию';
public $PUBL_LANGS = 'Опубликованные языки';
public $DEF_BACKL = 'Язык внутреннего интерфейса по умолчанию';
public $LANGUAGE = 'Язык';
public $SELECT = 'выбрать';
public $TEMPLATES = 'Шаблоны';
public $TEMPLATESTITLE = 'Шаблоны для Elxis CMS';
public $DOWNLOADS = 'Расширения';
public $DOWNLOADSTITLE = 'Скачать расширения Elxis';

//elxis 2009.0
public $STEP = 'Шаг';
public $RESTARTCONF = 'Вы уверены, что хотите начать установку заново?';
public $DBCONSETS = 'Настройки соединения с базой данных';
public $DBCONSETSD = 'Заполните необходимую информацию для соединения Elxis с базой данных и импорта базовых данных.';
public $CONTLAYOUT = 'Контент и разметка';
public $TMPCONFIGF = 'Временный конфигурационный файл';
public $TMPCONFIGFD = 'Elxis использует временный файл для сохранения параметров конфигурации в процессе установки.
Для этого инсталлятору Elxis необходимо иметь возможность записи в этот файл.
Вы можете установить права на запись для этого файла или включить FTP доступ для инсталлятора.';
public $CHECKFTP = 'Проверить настройки FTP';
public $FAILED = 'Ошибка';
public $SUCCESS = 'Успешно';
public $FTPWRONGROOT = 'FTP подключен, но каталог Elxis не найден. Проверьте значение корня FTP.';
public $FTPNOELXROOT = 'FTP подключен, но корень FTP не содержит инсталлятора Elxis. Проверьте значение корня FTP.';
public $FTPSUCCESS = 'Успешное подключение и определение инсталлятора Elxis. FTP настройки верны.';
public $FTPPATHD = 'Относительный путь от корня FTP до инсталлятора Elxis без заключительного слэша (/).';
public $CNOTWRTMPCFG = 'Не удаётся осуществить запись во временный конфигурационный файл (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s поддерживается Elxis"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s поддерживается вашей системой"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s не поддерживается Elxis"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s не поддерживается вашей системой"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s поддерживается Elxis в экспериментальном режиме"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Static cache';
public $STATICCACHED = 'Static cache - файловая система кэширования, сохраняющая динамически генерируемые Elxis страницы 
в виде HTML страниц. Кэшированные страницы могут быть вызваны и отображены без полного повторного выполнения PHP кода или 
запроса к базе данных. Static cache кэширует целые страницы. Использование Static cache 
на высоконагруженных сайтах позволяет заметно ускорить загрузку страниц.';
public $SEFURLS = 'Дружественные URL';
public $SEFURLSD = 'Если включено (настоятельно рекомендуется), Elxis будет генерировать дружественные URL 
вместо стандартных. SEO PRO URL повысит положение вашего сайта в выдаче поисковых систем, и адреса страниц
будет легче запоминать посетителям вашего сайта. Помимо этого, все переменные PHP будут удалены из URL, 
что значительно обезопасит ваш сайт.';
public $RENAMEHTACC = 'Нажмите здесь для переименования <strong>htaccess.txt</strong> в <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'При возникновении ошибки SEO PRO будет отключен, несмотря на установленное здесь значение
(вы сможете включить SEO PRO позже вручную).';
public $HTACCEXIST = 'Файл .htaccess уже существует в корневом каталоге Elxis! Вам необходимо включить SEO PRO вручную.';
public $SEOPROSRVS = 'SEO PRO может работать только на следующих серверах:<br />
Apache, Lighttpd или другие веб-сервера с поддержкой mod_rewrite.<br />
IIS с использованием фильтра Ionic Isapi Rewrite.';
public $SETSEOPROY = 'Пожалуйста, включите SEO PRO';
public $FEATENLATER = 'Эта функция также может быть включена позднее в панели управления Elxis.';
public $TEMPLATE = 'Шаблон';
public $TEMPLATEDESC = 'Шаблон определяет внешний вид вашего сайта. Выберите шаблон по умолчанию для вашего сайта. 
Вы можете изменить свой выбор позже скачав и установив дополнительные шаблоны.';
public $CREDITSELXWI = 'Kostas Stathopoulos и Elxis Documentation Team за их вклад в Elxis Wiki.';
public $NOWWHAT = 'Что дальше?';
public $DELINSTFOL = 'Полностью удалите установочный каталог (installation/).';
public $AUTODELINSTFOL = 'Автоматически удалить установочный каталог.';
public $AUTODELFAILMAN = 'При возникновении ошибки удалите установочный каталог вручную.';
public $BENGUIDESWIKI = 'Руководство для начинающих на Elxis Wiki.';
public $VISITFORUMHLP = 'Посетите форум Elxis для получения помощи.';
public $VISITNEWSITE = 'Посетите ваш новый сайт.';

}

?>