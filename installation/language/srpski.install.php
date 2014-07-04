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
* @description: Srpski installation Language
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
public $LANGNAME = 'Српски'; //This language written in your language
public $CLOSE = 'Затварање';
public $MOVE = 'Премештај';
public $NOTE = 'Белешка';
public $SUGGESTIONS = 'Сугестије';
public $RESTARTINST = 'Рестарт инсталације';
public $WRITABLE = 'Откључано';
public $UNWRITABLE = 'Закључано';
public $HELP = 'Помоћ';
public $COMPLETED = 'Завршено';
public $PRE_INSTALLATION_CHECK = 'Преинсталациона провера';
public $LICENSE = 'Лиценца';
public $ELXIS_WEB_INSTALLER = 'Elxis - Веб инсталатор';
public $DEFAULT_AGREE = 'Молимо Вас да прочитате/прихватите лиценцу пре наставка инсталације';
public $ALT_ELXIS_INSTALLATION = 'Elxis инсталација';
public $DATABASE = 'База';
public $SITE_NAME = 'Име сајта';
public $SITE_SETTINGS = 'Подешавања сајта';
public $FINISH = 'Крај';
public $NEXT = 'Даље >>';
public $BACK = '<< Назад';
public $INSTALLTEXT_01 = 'Уколико је било која од ових ставки означена црвеном бојом, молимо Вас да 
	да учините све што је потребно да исправите грешке. Уколико то не урадите, Elxis инсталације неће радити како треба.';
public $INSTALLTEXT_02 = 'Преинсталациона провера за';
public $INSTALL_PHP_VERSION = 'PHP верзија >= 5.0.0';
public $NO = 'Не';
public $YES = 'Да';
public $ZLIBSUPPORT = 'zlib компресија';
public $AVAILABLE = 'Доступно';
public $UNAVAILABLE = 'Недоступно';
public $XMLSUPPORT = 'xml подршка';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Још увек можете наставити инсталацију. Конфигурациони подаци ће бити приказани касније. 
    Једноставно копирајте ове податке и направите фајл који ћете додати на сервер.';
public $SESSIONSAVEPATH = 'Путања чувања сесије';
public $SUPPORTED_DBS = 'Подржане базе';
public $SUPPORTED_DBS_INFO = 'Листа база које Ваш систем подржава. Имајте у виду да 
	и неке друге могу бити подржане (нпр. SQLite).';
public $NOTSET = 'Недефинисано';
public $RECOMMENDEDSETTINGS = 'Препоручена подешавања';
public $RECOMMENDEDSETTINGS01 = 'Ова подешавања су препоручена за PHP како би се осигурала пуна компатибилност са Elxis-ом.';
public $RECOMMENDEDSETTINGS02 = 'Ипак, Elxis је у стању да функционише чак и ако подешавања нису у потпуности иста као препоручена';
public $DIRECTIVE = 'Директива';
public $RECOMMENDED = 'Препоручено';
public $ACTUAL = 'Тренутно';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'Укључено';
public $OFF = 'Искључено';
public $DIRFPERM = 'Дозволе фајлова и директоријума';
public $DIRFPERM01 = 'У зависности од ситуације, Elxis ће можда морати да уписује и у неке друге директоријуме. На пример, 
током инсталације Elxis ће морати да дода неке фајлове у директоријум "modules". Уколико негде видите "Закључано" промените дозволе 
директоријума, како би Elxis могао у њих да уписује или, за максималну сигурност, оставите их закључаним 
а откључајте их непосредно пре инсталације модула.';
public $DIRFPERM02 = 'Како би Elxis правилно функционисао, неопходно је да директоријуми <strong>cache</strong> 
	и <strong>tmpr</strong> буду откључани. Уколико није тако, молимо Вас да промените дозволе поменутих директоријума.';
public $ELXIS_RELEASED = 'Elxis CMS је бесплатни софтвер објављен под GNU/GPL лиценцом.';
public $INSTALL_LANG = 'Избор језика инсталације';
public $DISABLE_FUNC = 'Ради сигурности Вашег сајта, препоручујемо Вам да искључите следеће PHP функције путем фајла php.ini (уколико их не користите):';
public $FTP_NOTE = 'Уколико касније укључите FTP, Elxis ће бити функционалан чак и ако су неки фајлови/директоријуми закључани.';
public $OTHER_RECOM = 'Остале препоруке';
public $OUR_RECOM_ELXIS = 'Наше препоруке за лакши живот, са или без Elxis-а.';
public $SERVER_OS = 'OS сервера';
public $HTTP_SERVER = 'HTTP сервер';
public $BROWSER = 'Браузер';
public $SCREEN_RES = 'Резолуција монитора';
public $OR_GREATER = 'или више';
public $SHOW_HIDE = 'Приказ/Скривање';
public $SFMODALERT1 = 'ВАШ PHP РАДИ У SAFE MODE-у!';
public $SFMODALERT2 = 'Многе Elxis функције, компоненте и екстензије имају проблем са SAFE MODE-ом.';
public $GNU_LICENSE = 'GNU/GPL лиценца';
public $INSTALL_TOCONTINUE = '*** Пре наставка инсталације инсталације, молимо Вас да прочитате Elxis лиценцу 
	и штиклирате поље испод, уколико се слажете са условима. ***';
public $UNDERSTAND_GNUGPL = 'Разумем да је овај софтвер објављен под GNU/GPL лиценцом';
public $MSG_HOSTNAME = 'Унесите име домаћина';
public $MSG_DBUSERNAME = 'Унесите име корисника базе';
public $MSG_DBNAMEPATH = 'Унесите име базе или путању';
public $MSG_SURE = 'Да ли сте сигурни да су ова подешавања тачна? \n Elxis ће пробати да попуни базу користећи унета подешавања';
public $DBCONFIGURATION = 'Конфигурација базе';
public $DBCONF_1 = 'Унесите име сервера домаћина на коме ће Elxis бити инсталиран';
public $DBCONF_2 = 'Изаберите тип базе коју ће Elxis користити';
public $DBCONF_3 = 'Унесите име бате или путању. Како бисте избегли могуће проблеме који могу настати 
	ако Elxis инсталатор прави базу, најпре проверите да ли та база постоји.';
public $DBCONF_4 = 'Унесите префикс базе који ће користити ова Elxis инсталација.';
public $DBCONF_5 = 'Унесите име корисника базе и лозинку. Најпре проверите да ли корисник постоји, и да ли има одгаварајуће привилегије.';
public $OTHER_SETTINGS = 'Остала подешавања';
public $DBTYPE = 'Тип базе';
public $DBTYPE_COMMENT = 'Уобичајено "MySQL"';
public $DBNAME = 'Име базе';
public $DBNAME_COMMENT = 'Неки домаћини дозвољавају само одређена имена базе према датом сајту. Користите префикс како бисте раздвојили различите Elxis инсталације.'; 
public $DBPATH = 'Путања базе';
public $DBPATH_COMMENT = 'Неки типови база, као нпр. Access, InterBase и FireBird, 
	захтевају да унесете путању базе. У случају да користите неки од ових типова базе, унесите 
	овде путању до фајла базе. Пример: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Домаћин';
public $USLOCALHOST = 'Уобичајено "localhost"';
public $DBUSER = 'Име корисника базе';
public $DBUSER_COMMENT = 'Или "root" или корисничко име које Вам је доделио домаћин';
public $DBPASS = 'Лозинка базе';
public $DBPASS_COMMENT = 'Зарад сигурности Вашег сајта, лозинка је обавезна';
public $VERIFY_DBPASS = 'Провера лозинке';
public $VERIFY_DBPASS_COMMENT = 'Поново унесите лозинку ради провере';
public $DBPREFIX = 'Префикс табела базе';
public $DBPREFIX_COMMENT = 'Немојте користити "old_" јер ће овај префикс бити коришћен за бекап базе';
public $DBDROP = 'Брисање постојећих табела';
public $DBBACKUP = 'Бекап постојећих табела';
public $DBBACKUP_COMMENT = 'Све постојеће табеле из претходног бекапа Elxis инсталације биће обрисане';
public $INSTALL_SAMPLE = 'Инсталације показних садржаја';
public $SAMPLEPACK = 'Показни пакет садржаја';
public $SAMPLEPACKD = 'Elxis омогућава избор садржаја и изгледа сајта од самог почетка, 
	тако што ћете изабрати показни пакет садржаја. Такође, можете одлучити 
	iда не инсталирате ниједан пакет (није препоручљиво).';
public $NOSAMPLE = 'Ништа (није препоручљиво)';
public $DEFAULTPACK = 'Elxis предефинисано';
public $PASS_NOTMATCH = 'Унете лозинке се не поклапају.';
public $CNOT_CONDB = 'Не могу да се повежем са базом.';
public $FAIL_CREATEDB = 'Не могу да направим %s';
public $ENTERSITENAME = 'Унесите име сајта';
public $STEPDB_SUCCESS = 'Претходни корак је успешно завршен. Можете наставити тако што ћете унети име сајта.';
public $STEPDB_FAIL = 'Дошло је до најмање једне критичне грешке у претходном кораку. Не 
	можете да наставите. Молимо Вас да се вратите корак назад и исправите грешке. Elxis 
	не може да нстави инсталацију због следеће грешке:';
public $SITENAME_INFO = 'Унесите овде име Вашег Elxis сајта. Ово име се користи при слању е-поште, зато се потрудите да буде смислено.';
public $SITENAME = 'Име сајта';
public $SITENAME_EG = 'н.п.р. Elxis сајт';
public $OFFSET = 'Одступање';
public $SUGOFFSET = 'Препоручено одступање';
public $OFFSETDESC = 'Временска разлика између времена на серверу и Вашем рачунару (у сатима). Ако желите да синхронизујете Elxis са Вашм локалним временом, подесите одступање.';
public $SERVERTIME = 'Време на серверу';
public $LOCALTIME = 'Ваше локално време';
public $DBINFOEMPTY = 'Информације о бази су празне или нетачне!';
public $SITENAME_EMPTY = 'Име сајта није уписано';
public $DEFLANGUNPUB = 'Предефинисани јавни језик је одјављен!';
public $URL = 'URL';
public $PATH = 'Путања';
public $URLPATH_DESC = 'Уколико URL и путања изгледају тачно, ништа не мењајте. Уколико нисте сигурни, 
	молимо Вас да контактирате администратора система. Приказане вредности су најчешће тачне.';
public $DBFILE_NOEXIST = 'Фајл базе не постоји!';
public $ADODB_MISSES = 'Захтевани ADOdb фајлови не постоје!';
public $SITEURL_EMPTY = 'Унесите URL сајта';
public $ABSPATH_EMPTY = 'Унесите апсолутну путању до Вашег сајта';
public $PERSONAL_INFO = 'Личне информације';
public $YOUREMAIL = 'Ваша е-пошта';
public $ADMINRNAME= 'Стварно име администратора';
public $ADMINUNAME = 'Корисничко име администратора';
public $ADMINPASS = 'Администраторска лозинка';
public $CHANGEPROFILE = 'Након инсталације можете се пријавити на Ваш нови сајт, изменити ове информације, и уредити свој профил.';
public $FATAL_ERRORMSGS = 'Дошло је до најмање једне критичне грешке. Не можете да наставите. 
Elxis не може да настави због следеће грешке:';
public $EMPTYNAME = 'Морате унети стварно име.';
public $EMPTYPASS = 'Администраторска лозинка је празна.';
public $VALIDEMAIL = 'Морате унети тачну адресу е-поште администратора.';
public $FTPACCESS = 'FTP приступ';
public $FTPINFO = 'Омогућавање FTP приступа фајловима решава многе проблеме са њиховим дозволама. 
	Уколико омогућите FTP, Elxis ће бити у стању да пише пофајловима по који су закључани за PHP. Такође, Elxis инсталатор 
	ће бити у стању да сачува коначну конфигурацију коју бисте у супротном морали 
	ручно да направите и додате на сајт.';
public $USEFTP = 'Употреба FTP';
public $FTPHOST = 'FTP домаћин';
public $FTPPATH = 'FTP путања';
public $FTPUSER = 'FTP корисник';
public $FTPPASS = 'FTP лозинка';
public $FTPPORT = 'FTP port';
public $MOSTPROB = 'Највероватније:';
public $FTPHOST_EMPTY = 'Морате унети FTP домаћина';
public $FTPPATH_EMPTY = 'Морате унети FTP путању';
public $FTPUSER_EMPTY = 'Морате унети FTP корисника';
public $FTPPASS_EMPTY = 'Морате унети FTP лозинку';
public $FTPPORT_EMPTY = 'Морате унети FTP port';
public $FTPCONERROR = 'Не могу да се повежем са FTP домаћином';
public $FTPUNSUPPORT = 'Ваша PHP подешавања не омогућавају FTP повезивање';
public $CONFSITEDOWN = 'Сајт је тренутно недоступан због одржавања.<br />Молимо Вас да дођете касније.';
public $CONFSITEDOWNERR = 'Сајт је тренутно недоступан.<br />Молимо Вас да обавестите администратора';
public $CONGRATS = 'Честитамо!';
public $ELXINSTSUC = 'Elxis је успешно инсталиран на Ваш сајт.';
public $THANKUSELX = 'Хвала што користите Elxis,';
public $CREDITS = 'Захвалност';
public $CREDITSELXGO = 'Ioannis-у Sannos-у (Elxis Team) за развој Elxis-а.';
public $CREDITSELXCO = 'Ивану Требјешанину (Elxis Team) и члановима Elxis Community за њихову помоћ и идеје које чине Elxis бољим.';
public $CREDITSELXRTL = 'Фархаду Сакеију (Elxis Community) јер је учинио да Elxis буде RTL компатибилан.';
public $CREDITSELXTR = 'Преводиоцима на свом доприносу да Elxis буде CMS који поштује матерњи језик својих корисника.';
public $OTHERTHANK = 'Свим програмерима који су допринели Open Source заједници и Elxis-у кроз делове кôда које користи.';
public $CONFBYHAND = 'Инсталатор не може да сачува конфигурациони фајл због проблема са дозволама за писање/читање. 
	Следећи кôд ћете морати да додате ручно. Кликните на текст да бисте изабрали цео кôд. 
	Залепите га у php фајл назван "configuration.php" и додајте је у корени Elxis директоријум. 
	Пажња: Фајл мора бити сачуван као UTF-8';
public $LANG_SETTINGS = 'Elxis користи јединствени вишејезички интерфејс, који Вам омогућава избор 
	предефинисаних јавних и администраторских језика, као и више објављених јавних језика. 
	Запамтите да можете касније, кроз Elxis администрацију, да подесите ставке садржаја, модуле, итд. 
	према одговарајућој комбинацији језика.';
public $DEF_FRONTL = 'Предефинисани јавни језик';
public $PUBL_LANGS = 'Објављени језици';
public $DEF_BACKL = 'Предефинисани језик администрације';
public $LANGUAGE = 'Језик';
public $SELECT = 'избор';
public $TEMPLATES = 'Шаблони';
public $TEMPLATESTITLE = 'Шаблони за Elxis CMS';
public $DOWNLOADS = 'Преузимања';
public $DOWNLOADSTITLE = 'Преузмите екстензије за Elxis';

//elxis 2009.0
public $STEP = 'Корак';
public $RESTARTCONF = 'Да ли сте сигурни да желите да рестартујете инсталацију?';
public $DBCONSETS = 'Подешавања базе';
public $DBCONSETSD = 'Унесите податке потребне да се Elxis повеже са базом и унесе садржаје.';
public $CONTLAYOUT = 'Садржај и изглед';
public $TMPCONFIGF = 'Привремени конфигурациони фајл';
public $TMPCONFIGFD = 'Elxis користи привремени фајл за чување конфигурационих података. 
Elxis инсталатору мора бити омогућено писање по овом фајлу. Стога морате да проверите да ли је фајл откључан за писање, или да укључите FTP приступ 
како би инсталатор могао да пише користећи FTP конекцију.';
public $CHECKFTP = 'Провера FTP подешавања';
public $FAILED = 'Неуспешно';
public $SUCCESS = 'Успешно';
public $FTPWRONGROOT = 'FTP повезивање је упешно, али дати Elxis директоријум не постоји. Проверите FTP корен.';
public $FTPNOELXROOT = 'FTP повезивање је упешно, али Elxis инсталација не постоји. Проверите FTP корен.';
public $FTPSUCCESS = 'Successfull connection and detetion of Elxis installation. Your FTP settings are correct.';
public $FTPPATHD = 'Релативна путања од FTP корена до директоријума са Elxis инсталацијом без завршне косе црте (/).';
public $CNOTWRTMPCFG = 'Уписивање у привремени конфигурациони фајл није могуће (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s је подржан у Elxis-у"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "%s је подржан од стране Вашег система"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "%s није подржан у Elxis-у"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "%s није подржан од стране Вашег система"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "%s подршка је експериментална у Elxis-у"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Статички кеш';
public $STATICCACHED = 'Статички кеш је систем који чува комлетан HTML који Elxis динамички генерише 
у неку врсту меморије. Кеширане странице могу бити позване без потребе да их PHP поново генерише 
и позива из базе. Сттички кеш чува целе странице уместо само појединих HTML блокова. Употреба статичког кеша 
на оптерећеним серверима доводи до видљивог убрзања.';
public $SEFURLS = 'Оптимизовани URL-ови';
public $SEFURLSD = 'Уколико је укључено (препоручено) Elxis ће генерисати URL-ове разумљиве људима ипретраживачима  
уместо стандардних. SEO PRO URL-ови ће драстично побољшати Вашу позицију код претрживача,  
а Ваши посетиоци ће много лакше памтити линкове. Додатно, PHP променљиве неће бити видљиве у URL-овима,  
што ће хакерима отежати посао.';
public $RENAMEHTACC = 'Кликните овде да преименујете <strong>htaccess.txt</strong> у <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Уколико ова операција не успе, SEO PRO ће бити постављен на Искључено упркос овде постављеном подешавању 
(моћи ћете ручно да укључите касније).';
public $HTACCEXIST = 'Фајл .htaccess Већ постоји у Elxis кореном директоријуму! Морате ручно да укључите SEO PRO.';
public $SEOPROSRVS = 'SEO PRO ће радити само на следећим серверима:<br />
Apache, Lighttpd, као и свим серверима са mod_rewrite подршком.<br />
IIS уз употребу Ionic Isapi Rewrite филтера.';
public $SETSEOPROY = 'Поставите SEO PRO на Да';
public $FEATENLATER = 'Ова могућност може бити укључена касније из Elxis администрације.';
public $TEMPLATE = 'Шаблон';
public $TEMPLATEDESC = 'Шаблон дефинише изглед Вашег сајта. Изаберите предефинисани шаблон за Ваш сајт. 
Касније можете да измените свој избор и преузмете друге шаблоне.';
public $CREDITSELXWI = 'Kostas-у Stathopoulos-у и Elxis Documentation Team-у за допринос Elxis Wiki-ју.';
public $NOWWHAT = 'Шта сад?';
public $DELINSTFOL = 'Обришите installation директоријум (installation/) и све фајлове у њему.';
public $AUTODELINSTFOL = 'Аутоматско брисање installation директоријума.';
public $AUTODELFAILMAN = 'Уколико ова операција не успе, обришите директоријум installation ручно.';
public $BENGUIDESWIKI = 'Упутства за почетнике на Elxis Wiki.';
public $VISITFORUMHLP = 'Потражите помоћ на Elxis форуму.';
public $VISITNEWSITE = 'Посетите свој нови сајт.';

}

?>