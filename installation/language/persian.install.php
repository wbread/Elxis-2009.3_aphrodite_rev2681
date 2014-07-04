<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Farhad Sakhaei
* @link: http://www.farsicms.com
* @email: farhad0@gmail.com
* @description: Persian installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'دستیابی مستقیم به این مكان مجاز نمی باشد.' );


class iLanguage {

public $RTL = 1; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'fa'; //2-letter country code 
public $LANGNAME = 'فارسی'; //This language, written in your language
public $CLOSE = 'بستن';
public $MOVE = 'انتقال';
public $NOTE = 'نكته';
public $SUGGESTIONS = 'پیشنهادات';
public $RESTARTINST = 'شروع مجدد نصب';
public $WRITABLE = 'قابل نوشتن';
public $UNWRITABLE = 'غیر قابل نوشتن';
public $HELP = 'راهنمایی';
public $COMPLETED = 'كامل شد';
public $PRE_INSTALLATION_CHECK = 'بررسی قبل از نصب';
public $LICENSE = 'لیسانس';
public $ELXIS_WEB_INSTALLER = 'Elxis - نصب كننده وب';
public $DEFAULT_AGREE = 'لطفا جهت ادامه نصب لیسانس را خوانده/قبول كنید';
public $ALT_ELXIS_INSTALLATION = 'نصب Elxis';
public $DATABASE = 'پایگاه داده';
public $SITE_NAME = 'نام سایت';
public $SITE_SETTINGS = 'تنظیمات سایت';
public $FINISH = 'پایان';
public $NEXT = 'بعدی >>';
public $BACK = '<< قبلی';
public $INSTALLTEXT_01 = 'اگر هر كدام از این آیتم ها با قرمز پر رنگ شده اند پس لطفا اقدامات لازم جهت تصحیح آنها را انجام فرمائید. اشتباه در انجام آنها ممكن است منجر به نصب غیر صحیح توابع Elxis شود.';
public $INSTALLTEXT_02 = 'بررسی قبل از نصب برای';
public $INSTALL_PHP_VERSION = 'نسخه پی اچ پی => ۴.۳.۰';
public $NO = 'خیر';
public $YES = 'بله';
public $ZLIBSUPPORT = 'پشتیبانی از فشرده ساز zlib';
public $AVAILABLE = 'قابل دسترس';
public $UNAVAILABLE = 'غیر قابل دسترس';
public $XMLSUPPORT = 'پشتیبانی از xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'شما هنوز می توانید به نصب ادامه دهید زیرا فایل configuration در پایان نمایش داده خواهد شد ، فقط آن را كپی كرده و در یك فایل بچسبانید و آپلود نمائید.';
public $SESSIONSAVEPATH = 'مسیر ذخیره جلسه';
public $SUPPORTED_DBS = 'پایگاه داده های پشتیبانی شده';
public $SUPPORTED_DBS_INFO = 'لیست پایگاه داده های پشتیبانی شده توسط سیستم شما. نكته اینكه ممكن است برخی دیگر نیز همچنین قابل دسترس باشند (مانند SQLite).';
public $NOTSET = 'تنظیم نشده';
public $RECOMMENDEDSETTINGS = 'تنظیمات پیشنهاد شده';
public $RECOMMENDEDSETTINGS01 = 'این تنظیمات برای PHP جهت اطمینان از سازگاری كامل با Elxis توصیه شده است.';
public $RECOMMENDEDSETTINGS02 = 'هر چند ، Elxis هنوز عملیاتی خواهد بود اگر تنظیمات شما كاملا با نمونه های پیشنهاد شده همسان نباشد';
public $DIRECTIVE = 'رهنمود';
public $RECOMMENDED = 'توصیه شده';
public $ACTUAL = 'حقیقی';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'روشن';
public $OFF = 'خاموش';
public $DIRFPERM = 'مجوز های فایل و فهرست';
public $DIRFPERM01 = 'بسته به وضعیت ، Elxis ممكن است نیاز به نوشتن بر روی دیگر پوشه ها نیز داشته باشد. به عنوان مثال در طول نصب یك ماژول ، Elxis نیاز به آپلود فایل ها در پوشه "modules" دارد. در صورتی كه شما "غیر قابل نوشتن" را می بینید ، می توانید مجوزها را بر روی فهرست تغییر دهید تا به Elxis اجازه دهید كه بتواند در آن بنویسد یا ، برای حداكثر امنیت ، شما ممكن است آن را غیر قابل نوشتن رها نمائید و فقط قبل از اینكه می خواهید از آن استفاده نمائید آن را قابل نوشتن نمائید.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'سیستم مدیریت محتوای Elxis یك نرم افزار آزاد منتشر شده تحت لیسانس GNU/GPL می باشد.';
public $INSTALL_LANG = 'انتخاب زبان نصب';
public $DISABLE_FUNC = 'برای ایمنی سایت شما ما همچنین توصیه می كنیم كه شما این توابع PHP را (اگر شما از آنها استفاده نمی كنید) در فایل php.ini غیر فعال نمائید:';
public $FTP_NOTE = 'اگر شما FTP را بعدا فعال نمائید ، Elxis عملیاتی خواهد بود حتی اگر برخی از این پوشه ها فقط خواندنی باشند.';
public $OTHER_RECOM = 'توصیه های دیگر';
public $OUR_RECOM_ELXIS = 'توصیه های ما برای راحتی شما با یا بدون Elxis می باشد.';
public $SERVER_OS = 'سیستم عامل سرور';
public $HTTP_SERVER = 'سرور HTTP';
public $BROWSER = 'مرورگر';
public $SCREEN_RES = 'وضوح تصویر';
public $OR_GREATER = 'یا بزرگتر';
public $SHOW_HIDE = 'نمایش/عدم نمایش';
public $SFMODALERT1 = 'PHP شما تحت SAFE MODE در حال اجرا می باشد!';
public $SFMODALERT2 = 'خیلی از قابلیت های Elxis ، اجزاء و الحاقات ثالث با اجرای تحت Safe Mode مشكل دارند.';
public $GNU_LICENSE = 'لیسانس GNU/GPL';
public $INSTALL_TOCONTINUE = '*** جهت ادامه نصب Elxis شما باید لیسانس Elxis را خوانده و اگر شما موافق هستید جعبه زیر لیسانس را تیك بزنید ***';
public $UNDERSTAND_GNUGPL = 'من متوجه هستم كه این نرم افزار تحت لیسانس GNU/GPL منتشر شده است';
public $MSG_HOSTNAME = 'لطفا یك نام میزبان (Host) ';
public $MSG_DBUSERNAME = 'لطفا یك نام كاربری پایگاه داده وارد نمائید';
public $MSG_DBNAMEPATH = 'لطفا نام پایگاه داده جدیدتان وارد نمائید';
public $MSG_SURE = 'آیا از درستی این تنظیمات اطمینان دارید؟ \nElxis هم اكنون تلاش می كند تا پایگاه داده را با تنظیماتی كه شما ارائه كردید اسكان دهد';
public $DBCONFIGURATION = 'پیكربندی پایگاه داده';
public $DBCONF_1 = 'لطفا نام میزبان (Hostname) سروری كه Elxis بایستی بر روی آن نصب شود را وارد نمائید';
public $DBCONF_2 = 'نوع پایگاه داده ای كه قصد دارید Elxis از آن استفاده نماید را انتخاب نمائید';
public $DBCONF_3 = 'نام پایگاه داده یا مسیر را وارد نمائید. جهت جلوگیری از بروز مشكلات ایجاد پایگاه داده توسط نصب كننده Elxis ، اطمینان حاصل كنید كه پایگاه داده در حال حاضر موجود است.';
public $DBCONF_4 = 'پیشوند نام جدولی كه باید توسط این نمونه Elxis استفاده شود را وارد نمائید.';
public $DBCONF_5 = 'نام كاربری و كلمه عبور پایگاه داده را وارد نمائید. اطمینان حاصل كنید كه كاربر در حال حاضر وجود دارد و تمام مزایای لازمه را دارد.';
public $OTHER_SETTINGS = 'تنظیمات دیگر';
public $DBTYPE = 'نوع پایگاه داده';
public $DBTYPE_COMMENT = 'معمولا "MySQL"';
public $DBNAME = 'نام پایگاه داده';
public $DBNAME_COMMENT = 'برخی از میزبان ها فقط نام پایگاه داده مشخصی را برای هر سایت مجاز می سازند. از پیشوند جدول در این حالت برای سایت های Elxis مورد نظر استفاده نمائید.'; 
public $DBPATH = 'مسیر پایگاه داده';
public $DBPATH_COMMENT = 'برخی از انواع پایگاه های داده ها ، مانند Access ، InterBase و FireBird ، نیاز به تنظیم یك فایل پایگاه داده به جای نام پایگاه داده دارند. در این حالت لطفا در اینجا مسیر این فایل را تایپ نمائید . مثال: opt/firebird/examples/elxisdatabase.fdb/';
public $HOSTNAME = 'نام میزبان';
public $USLOCALHOST = 'معمولا "localhost"';
public $DBUSER = 'نام كاربری پایگاه داده';
public $DBUSER_COMMENT = 'هر چیزی مثل "root" یا یك نام كاربری داده شده توسط میزبان';
public $DBPASS = 'كلمه عبور پایگاه داده';
public $DBPASS_COMMENT = 'برای ایمنی سایت استفاده از یك كلمه عبور برای حساب كاربری mysql اجباری است';
public $VERIFY_DBPASS = 'تأیید كلمه عبور پایگاه داده';
public $VERIFY_DBPASS_COMMENT = 'جهت تأیید ، كلمه عبور را مجددا تایپ نمائید';
public $DBPREFIX = 'پیشوند جدول پایگاه داده';
public $DBPREFIX_COMMENT = 'از "old_" استفاده ننمائید به دلیل اینكه برای جداول پشتیبان استفاده شده است';
public $DBDROP = 'حذف جداول موجود';
public $DBBACKUP = 'پشتیبان گیری از جداول قدیم';
public $DBBACKUP_COMMENT = 'هر جدول پشتیبان موجود از نصب های Elxis قبل جایگزین خواهند شد';
public $INSTALL_SAMPLE = 'نصب داده های نمونه';
public $SAMPLEPACK = 'بسته داده نمونه';
public $SAMPLEPACKD = 'Elxis به شما اجازه می دهد تا محتوا و ظاهر سایت خود را از شروع ، با انتخاب مناسب ترین بسته ، داده نمونه سایتتان را تعیین نمائید. شما همچنین می توانید خیر را جهت عدم نصب داده های نمونه انتخاب نمائید (توصیه نمی شود).';
public $NOSAMPLE = 'هیچ كدام (توصیه نمی شود)';
public $DEFAULTPACK = 'پیشفرض Elxis';
public $PASS_NOTMATCH = 'كلمه عبور های پایگاه داده ارائه شده همسان نمی باشند.';
public $CNOT_CONDB = 'عدم توانایی جهت ارتباط با پایگاه داده.';
public $FAIL_CREATEDB = 'نا موفق در ایجاد پایگاه داده %s';
public $ENTERSITENAME = 'لطفا یك نام سایت وارد نمائید';
public $STEPDB_SUCCESS = 'مرحله قبلی با موفقیت كامل شد. شما هم اكنون می توانید با وارد كردن پارامتر های سایتتان ادامه دهید.';
public $STEPDB_FAIL = 'حداقل یك خطای مخرب در طول مرحله قبلی رخ داد . شما نمی توانید ادامه دهید. لطفا بازگشته و تنظیمات پایگاه داده را تصحیح نمائید. پیغام های خطای نصب كننده Elxis به شرح زیر است:';
public $SITENAME_INFO = 'نامی برای سایت خود تایپ نمائید. این نام در پیغام های ایمیل مورد استفاده قرار می گیرد پس آن را چیزی پر معنی تعریف نمائید.';
public $SITENAME = 'نام سایت';
public $SITENAME_EG = 'مثال خانه Elxis';
public $OFFSET = 'انحراف';
public $SUGOFFSET = 'انحراف پیشنهاد شده';
public $OFFSETDESC = 'تفاوت زمانی بین سرور و كامپوتر شما به ساعت. اگر شما مایل به همزمان سازی Elxis با زمان محلی تان می باشید ، اختصاص انحراف را تنظیم نمائید.';
public $SERVERTIME = 'زمان سرور';
public $LOCALTIME = 'زمان محلی شما';
public $DBINFOEMPTY = 'اطلاعات پایگاه داده خالی/نادرست هستند!';
public $SITENAME_EMPTY = 'نام سایت ارائه نشده است';
public $DEFLANGUNPUB = 'زبان پیشفرض بخش جلویی منتشر نشده است!';
public $URL = 'URL';
public $PATH = 'مسیر';
public $URLPATH_DESC = 'اگر URL و مسیر درست به نظر می رسند پس لطفا آنها را تغییر ندهید. اگر شما مطمئن نیستید پس لطفا با ارائه دهنده سرویس اینترنت یا مدیرتان تماس حاصل نمائید. معمولا مقادیر نمایش داده شده برای سایت شما كار خواهند كرد.';
public $DBFILE_NOEXIST = 'فایل پایگاه داده وجود ندارد!';
public $ADODB_MISSES = 'فایل های ADOdb لازم وجود ندارند!';
public $SITEURL_EMPTY = 'لطفا URL سایت را وارد نمائید';
public $ABSPATH_EMPTY = 'لطفا مسیر مطلق سایتتان را وارد نمائید';
public $PERSONAL_INFO = 'اطلاعات شخصی';
public $YOUREMAIL = 'ایمیل شما';
public $ADMINRNAME= 'نام حقیقی مدیر اصلی';
public $ADMINUNAME = 'نام كاربری مدیر اصلی';
public $ADMINPASS = 'كلمه عبور مدیر اصلی';
public $CHANGEPROFILE = 'بعد از نصب شما می توانید به سایت جدیدتان وارد شوید ، اطلاعات بالا را تغییر دهید و نیمرخ خود را تنظیم نمائید.';
public $FATAL_ERRORMSGS = 'حداقل یك خطای مخرب رخ داد. شما نمی توانید ادامه دهید. پیغام های خطای نصب كننده Elxis به شرح زیر است:';
public $EMPTYNAME = 'شما باید نام حقیقی تان را ارائه نمائید.';
public $EMPTYPASS = 'كلمه عبور مدیر خالی است.';
public $VALIDEMAIL = 'شما باید یك آدرس ایمیل مدیر معتبر ارائه نمائید.';
public $FTPACCESS = 'دستیابی FTP';
public $FTPINFO = 'فعال كردن دسترسی FTP روی فایل ها بسیاری از مشكلات مرتبط با فایل در ارتباط با مجوز ها را حل می سازد. اگر شما FTP را فعال نمائید قادر خواهید بود تا بر روی فایل ها/پوشه هایی كه توسط PHP غیر قابل نوشتن هستند ، بنویسید. نصب كننده Elxis قادر خواهد بود تا فایل پیكربندی نهایی را در سایت شما ذخیره نماید ، به طریق دیگر شما مجبور خواهید بود تا به صورت دستی آن را ایجاد و آپلود نمائید.';
public $USEFTP = 'استفاده از FTP';
public $FTPHOST = 'میزبان FTP';
public $FTPPATH = 'مسیر FTP';
public $FTPUSER = 'كاربر FTP';
public $FTPPASS = 'كلمه عبور FTP';
public $FTPPORT = 'پورت FTP';
public $MOSTPROB = 'احتمال زیاد:';
public $FTPHOST_EMPTY = 'شما باید یك میزبان FTP ارائه نمائید';
public $FTPPATH_EMPTY = 'شما باید یك مسیر FTP ارائه نمائید';
public $FTPUSER_EMPTY = 'شما باید یك كاربر FTP ارائه نمائید';
public $FTPPASS_EMPTY = 'شما باید یك كلمه عبور FTP ارائه نمائید';
public $FTPPORT_EMPTY = 'شما باید یك پورت FTP ارائه نمائید';
public $FTPCONERROR = 'عدم توانایی در ارتباط با میزبان FTP';
public $FTPUNSUPPORT = 'تنظیمات PHP شما ارتباطات FTP را پشتیبانی نمی كنند';
public $CONFSITEDOWN = 'این سایت برای نگهداری و تعمیر از كار افتاده است.<br /> لطفا بزودی مجددا بررسی نمائید.';
public $CONFSITEDOWNERR = 'این سایت به طور موقت غیر قابل دسترسی می باشد.<br /> لطفا مدیر اصلی سیستم را آگاه سازید';
public $CONGRATS = 'تبریك!';
public $ELXINSTSUC = 'Elxis با موفقیت در سایت شما نصب شد.';
public $THANKUSELX = 'با تشكر فراوان برای استفاده از Elxis ، ';
public $CREDITS = 'Credits';
public $CREDITSELXGO = 'برای Ioannis Sannos برای توسعه Elxis (تیم Elxis).';
public $CREDITSELXCO = 'از Ivan Trebjesanin (تیم Elxis) و اعضای انجمن Elxis Community برای كمك ها و ایده هایشان در بهتر كردن Elxis.';
public $CREDITSELXRTL = 'از فرهاد سخایی (انجمنElxis) برای همكاری او در ایجاد سازگاری راست به چپ در Elxis.';
public $CREDITSELXTR = 'برای مترجمین برای كمك هایشان جهت ایجاد ارتباط سیستم مدیریت محتوای Elxis با زبان محلی كاربران.';
public $OTHERTHANK = 'برای تمامی توسعه دهندگانی كه در انجمن منبع باز شركت كردند و Elxis از بخشی از كار آنها استفاده می كند.';
public $CONFBYHAND = 'نصب كننده نمی تواند فایل پیكربندی را به دلیل موارد مجوز ها در سایت تان ذخیره نماید. شما مجبور خواهید بود تا كد زیر را به صورت دستی آپلود نمائید. در ناحیه متنی كلیك نمائید تا تمام كد پر رنگ شود. آن را در یك فایل php چسبانده و نام آن را "configuration.php" قرار داده و آن را در ریشه پوشه Elxis خود قرار دهید. توجه: فایل بایستی با رمزگذاری UTF-8 ذخیره شود.';
public $LANG_SETTINGS = 'Elxis یك رابط چند زبانه بی همتا دارد كه به شما اجازه می دهد تا زبان های پیشفرض بخش جلویی و بخش مدیریت را تنظیم نمائید ، و همچنین می توان بیشتر از یك زبان منتشر شده برای بخش جلویی داشت. نكته اینكه بعدا در مدیریت Elxis می توانید آیتم های محتوا ، ماژول های انفرادی و غیره را جهت نمایش با تركیب های زبان های تعیین شده ، تنظیم نمائید.';
public $DEF_FRONTL = 'زبان پیشفرض بخش جلویی';
public $PUBL_LANGS = 'زبان های منتشر شده';
public $DEF_BACKL = 'زبان بخش مدیریت پیشفرض';
public $LANGUAGE = 'زبان';
public $SELECT = 'انتخاب';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates for Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis extensions';

//elxis 2009.0
public $STEP = 'مرحله';
public $RESTARTCONF = 'آیا شما از شروع مجدد نصب اطمینان دارید؟';
public $DBCONSETS = 'تنظیمات ارتباط پایگاه داده';
public $DBCONSETSD = 'اطلاعات مورد نیاز را پر نمائید تا اینكه Elxis بتواند با پایگاه داده ارتباط بر قرار كند و داده های پایه را وارد نماید.';
public $CONTLAYOUT = 'محتوا و طرح بندی';
public $TMPCONFIGF = 'فایل پیكربندی موقت';
public $TMPCONFIGFD = 'Elxis از یك فایل موقت جهت ذخیره پارامترهای پیكربندی در طول رویه نصب استفاده می كند. نصب كننده Elxis باید قادر باشد تا بر روی این فایل بنویسد. بنابراین شما باید یا این فایل را قابل نوشتن نمائید و یا دستیابی FTP را جهت قادر شدن نصب كننده برای نوشتن روی آن با استفاده از یك ارتباط FTP فعال نمائید.';
public $CHECKFTP = 'بررسی تنظیمات FTP';
public $FAILED = 'ناموفق';
public $SUCCESS = 'موفق';
public $FTPWRONGROOT = 'ارتباط با FTP برقرار شد اما فهرست داده شده Elxis وجود ندارد. مقدار ریشه FTP را بررسی نمائید.';
public $FTPNOELXROOT = 'ارتباط با FTP برقرار شد اما ریشه FTP داده شده حاوی نصب Elxis نمی باشد. مقدار ریشه FTP را بررسی نمائید.';
public $FTPSUCCESS = 'ارتباط موفق و نصب Elxis تشخیص داده شد. تنظیمات FTP شما صحیح می باشد.';
public $FTPPATHD = 'مسیر نسبی از پوشه ریشه FTP شما تا نصب Elxis بدون علامت ممیز در انتها (/).';
public $CNOTWRTMPCFG = 'عدم توانایی جهت نوشتن در فایل پیكربندی موقت (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "راه انداز %s توسط Elxis پشتیبانی می شود"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "راه انداز %s توسط سیستم شما پشتیبانی می شود"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "راه انداز %s توسط Elxis پشتیبانی نمی شود"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "راه انداز %s توسط سیستم شما پشتیبانی نمی شود"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "راه انداز %s توسط Elxis به صورت آزمایشی پشتیبانی می شود"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'ذخیره گاه ایستا (Static Cache)';
public $STATICCACHED = 'ذخیره گاه ایستا (Static Cache) یك سیستم ذخیره گاه فایل می باشد كه صفحات HTML تولید شده به صورت پویا توسط Elxis را در یك نوع از حافظه ذخیره می كند. صفحات ذخیره شده می توانند مجددا بدون نیاز به اجرای مجدد كد PHP یا درخواست مجدد از پایگاه داده از حافظه فراخوانی شوند. ذخیره گاه ایستا كل صفحات را به جای بلوك های HTML تكی ذخیره می كنند. استفاده از ذخیره گاه ایستا در وب سایت های با بار سنگین منجر به بهبود سرعت قابل تو.جهی می شود.';
public $SEFURLS = 'URL موافق با موتورهای جستجو';
public $SEFURLSD = 'در صورت فعال بودن (توصیه زیاد) Elxis ، URL های موافق با موتور های جستجو و انسان را به جای نوع های استاندارد تولید خواهد كرد. URL های SEO PRO باعث بالا رفتن رتبه سایت تان در موتورهای جستجو خواهد شد و صفحات جهت به خاطر سپردن توسط بازدید كنندگان سایت تان ، بسیار آسان تر خواهند شد. بعلاوه تمامی متغیر های PHP از URL ها حذف خواهند شد تا سایت تان در مقابل هكرها ایمن تر شود.';
public $RENAMEHTACC = 'جهت تغییر نام <strong>htaccess.txt</strong> به <strong>.htaccess</strong> اینجا را كلیك نمائید.';
public $RENAMEHTACC2 = 'در صورتی كه این نا موفق شود سپس SEO PRO صرفنظر از تنظیمات شما در اینجا به غیر فعال تنظیم خواهد شد (شما بعدا قادر خواهید بود تا آن را به صورت دستی فعال نمائید).';
public $HTACCEXIST = 'یك فایل .htaccess در حال حاضر در پوشه ریشه Elxis وجود دارد! شما باید SEO PRO را به صورت دستی فعال نمائید.';
public $SEOPROSRVS = 'SEO PRO فقط تحت سرورهای وب زیر كار می كند:<br />Apache ، Lighttpd ، یا دیگر سرورهای وب با پشتیبانی mod_rewrite.<br />IIS با استفاده از فیلتر Ionic Isapi Rewrite.';
public $SETSEOPROY = 'لطفا SEO PRO را به بله تنظیم نمائید';
public $FEATENLATER = 'این ویژگی همچنین می تواند بعدا از داخل مدیریت Elxis فعال شود.';
public $TEMPLATE = 'قالب';
public $TEMPLATEDESC = 'قالب ظاهر وب سایت شما را تعیین می نماید. قالب پیشفرض را برای وب سایت تان انتخاب نمائید. شما می توانید انتخاب تان را بعدا تغییر دهید یا قالب های اضافی را دانلود و نصب نمائید.';
public $CREDITSELXWI = 'از Kostas Stathopoulos و تیم مستند سازی Elxis برای كمك شان جهت Elxis Wiki.';
public $NOWWHAT = 'حالا چه؟';
public $DELINSTFOL = 'پوشه installation را به صورت كامل حذف نمائید (installation/).';
public $AUTODELINSTFOL = 'حذف اتوماتیك پوشه نصب.';
public $AUTODELFAILMAN = 'در صورتی كه این كار ناموفق شود ، سپس پوشه نصب را به صورت دستی حذف نمائید.';
public $BENGUIDESWIKI = 'راهنمای تازه كاران در Elxis Wiki.';
public $VISITFORUMHLP = 'بازدید از تالار گفتمان Elxis برای راهنمایی.';
public $VISITNEWSITE = 'بازدید از وب سایت جدید شما.';

}

?>