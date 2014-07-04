<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Mustafa Aydemir (ahdes)
* @link: http://www.elxisturkiye.org
* @email: ahdes@elxisturkiye.org
* @description: Turkish installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Bu alana doğrudan erişim engellenmiştir.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'tr'; //2-letter country code 
public $LANGNAME = 'Turkish'; //This language written in your language
public $CLOSE = 'Kapalı';
public $MOVE = 'Taşı';
public $NOTE = 'Not';
public $SUGGESTIONS = 'Öneriler';
public $RESTARTINST = 'Yeniden Kur';
public $WRITABLE = 'Yazılabilir';
public $UNWRITABLE = 'Yazılamaz';
public $HELP = 'Yardım';
public $COMPLETED = 'Tamamlandı';
public $PRE_INSTALLATION_CHECK = 'Kurulum öncesi kontrol';
public $LICENSE = 'Lisans';
public $ELXIS_WEB_INSTALLER = 'Elxis - Web Yükleyicisi';
public $DEFAULT_AGREE = 'Lütfen yüklemeye devam edebilmek için lisansı okuyup/onaylayın';
public $ALT_ELXIS_INSTALLATION = 'Elxis Kurulum';
public $DATABASE = 'Veritabanı';
public $SITE_NAME = 'Site adı';
public $SITE_SETTINGS = 'Site ayarları';
public $FINISH = 'Son';
public $NEXT = 'Sonraki >>';
public $BACK = '<< Önceki';
public $INSTALLTEXT_01 = 'Her hangi bir öge kırmızı olarak görünüyorsa, onu düzeltmek için gereken işlemi yapın. Hatanın devamı halinde Elxis kurulumunuza düzgün olarak devam edemeyebilirsiniz';
public $INSTALLTEXT_02 = 'Kurulum Öncesi Kontrol';
public $INSTALL_PHP_VERSION = 'PHP sürümü >= 5.0.0';
public $NO = 'Hayır';
public $YES = 'Evet';
public $ZLIBSUPPORT = 'zlib sıkıştırma desteği';
public $AVAILABLE = 'Uygun';
public $UNAVAILABLE = 'Uygun Değil';
public $XMLSUPPORT = 'xml desteği';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Yapılandırma dosya veya dizini yazılabilir değil aşağıdaki kodların tümünü seçip kopyala & yapıştır yöntemiyle ayar dosyasınızın içine ekleyin ve ana dizine atın.';
public $SESSIONSAVEPATH = 'Oturum kayıt yolu';
public $SUPPORTED_DBS = 'Desteklenen veritabanları';
public $SUPPORTED_DBS_INFO = 'Listedekilerden renklendirilmiş olanlar, sisteminiz desteklediği veritabanlarıdır. Bunlar bir veya bir kaç tane olabilirler (SQLite gibi).';
public $NOTSET = 'Ayarlı değil';
public $RECOMMENDEDSETTINGS = 'Önerilen ayarlar';
public $RECOMMENDEDSETTINGS01 = 'Buradaki ayarlar, PHP ayarlarınızın Elxis sistemi için önerilen ayarlara uyumluluğunu denetler';
public $RECOMMENDEDSETTINGS02 = 'Elxis ancak bu ayarların tamamen uyumlu olması durumunda tam verimle çalışabilir';
public $DIRECTIVE = 'Yönerge';
public $RECOMMENDED = 'Önerilenler';
public $ACTUAL = 'Güncel';
public $SAFEMODE = 'Safe Mode';
public $DISPLAYERRORS = 'Display Errors';
public $FILEUPLOADS = 'File Uploads';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Session auto start';
public $ALLOWURLFOPEN = 'Allow URL fopen';
public $ON = 'On';
public $OFF = 'Off';
public $DIRFPERM = 'Dizin ve Dosya İzinleri';
public $DIRFPERM01 = 'Duruma göre Elxis in diğer klasörlere de yazması gerekebilir. Örneğin bir 
modül kurulumu esnasında Elxis "modüller" klasörüne dosyaları yüklemek için klasörün yazılabilir 
olmasına ihtiyaç duyacaktır. Azami güvenlik için dizin erişim izinleri "Yazılamaz" olmalı ve sadece 
kullanacağınız zaman yazılabilir yapılmalıdır.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS GNU/GPL Lisansı altında yayınlanan ücretsiz bir yazılımdır.';
public $INSTALL_LANG = 'Lütfen Yükleme Dilini Seçin';
public $DISABLE_FUNC = 'Siteniz için önerilen PHP fonksiyonlarının kapalı olmaması gerekir (bunları yinede kullanmak isterseniz aşağıdaki ayarları yapın):';
public $FTP_NOTE = 'Daha sonra FTP ile sitenize bağlanıp buradaki Elxis dosya ve dizinlerimi daha sonra sadece okunabilir yapabilirsiniz.';
public $OTHER_RECOM = 'Diğer Önerilenler';
public $OUR_RECOM_ELXIS = 'Elxis işlemlerini kolaylaştırmak için önerilerimiz.';
public $SERVER_OS = 'Sunucu OS';
public $HTTP_SERVER = 'HTTP Sunucu';
public $BROWSER = 'Tarayıcı';
public $SCREEN_RES = 'Ekran Çözünürlülüğü';
public $OR_GREATER = 'veya daha üstü';
public $SHOW_HIDE = 'Göster/Gizle';
public $SFMODALERT1 = 'PHP AYARLARINIZDA GÜVENLİ MOD AÇIK!';
public $SFMODALERT2 = 'Bazı Elxis uygulamaları, bileşen ve üçüncü parti yazılımlarının çalışmasında problem olacaktır. Bunun sebebi sunucunuzda Güvenli Modun açık olmasıdır.';
public $GNU_LICENSE = 'GNU/GPL Lisansı';
public $INSTALL_TOCONTINUE = '*** Elxis kurulumuna devam edebilmek için lisansın hemen altındaki kutucuğu işaretleyin ***';
public $UNDERSTAND_GNUGPL = 'GNU/GPL altında yayınlanan programın lisans şartlarını kabul ediyorum';
public $MSG_HOSTNAME = 'Lütfen Sunucu Adını Yazın';
public $MSG_DBUSERNAME = 'Lütfen Veritabanı Kullanıcı Adını Yazın';
public $MSG_DBNAMEPATH = 'Lütfen Veritabanı Adını ya da yolunu yazın';
public $MSG_SURE = 'Bu ayarların doğruluğundan emin misiniz? Elxis şimdi Veritabanınızın tablolarını güncelleyecek';
public $DBCONFIGURATION = 'Veritabanı Ayarları';
public $DBCONF_1 = 'Lütfen Elxis in kurulacağı sunucunun adını yazın';
public $DBCONF_2 = 'Lütfen Elxis için kullanılacak veritabanı türünü seçin';
public $DBCONF_3 = 'Lütfen Veritabanı Adını ya da yolunu yazın. Elxis için  önceden veritabanı oluşturduğunuzdan emin olun.';
public $DBCONF_4 = 'Elxis tarafından kullanılacak tablo ön ekini girin.';
public $DBCONF_5 = 'Veritabanı Kullanıcı Adını ve şifreyi girin. Tüm gereksinimlerin varlığından emin olun. ';
public $OTHER_SETTINGS = 'Diğer ayarlar';
public $DBTYPE = 'Veritabanı türü';
public $DBTYPE_COMMENT = 'Genellikle "MySQL"';
public $DBNAME = 'Veritabanı Adı';
public $DBNAME_COMMENT = 'Some hosts allow only a certain DB name per site. Use table prefix in this case to distinct Elxis sites.'; 
public $DBPATH = 'Veritabanı Yolu';
public $DBPATH_COMMENT = 'Access, InterBase ve FireBird gibi veritabanı türleri için bir veritabanı adı yerine bir veritabanı dosyası gerektirir. Bu yüzden lütfen buraya bu dosyanın yolunu yazın. Örneğin: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Sunucu Adı';
public $USLOCALHOST = 'Genellikle "localhost"';
public $DBUSER = 'Veritabanı Kullanıcı Adı';
public $DBUSER_COMMENT = 'Bu bazen "root" olur. Eğer sunucunuz size veritabanı oluştururken bir kullanıcı adı verdiyse onu kullanın.';
public $DBPASS = 'Veritabanı Şifresi';
public $DBPASS_COMMENT = 'Sitenizin güvenliği için gerekli mysql veritabanı şifresidir';
public $VERIFY_DBPASS = 'Veritabanı Şifre Tekrarı';
public $VERIFY_DBPASS_COMMENT = 'Onay için şifreyi tekrar yazın';
public $DBPREFIX = 'Veritabanı Tablo Öneki';
public $DBPREFIX_COMMENT = 'Yedeklenecek tablolarda kullanılacağından "old_" ön ekini kullanmayın.';
public $DBDROP = 'Varolan Tabloları Kaldır';
public $DBBACKUP = 'Eski Tabloları Yedekle';
public $DBBACKUP_COMMENT = 'Elxis yükleyicisinin eski tabloların yedeğini alabilmesi için işaretleyin';
public $INSTALL_SAMPLE = 'Örnek Veriyi Yükle';
public $SAMPLEPACK = 'Örnek Veri paketi';
public $SAMPLEPACKD = 'Elxis bir örnek veri paketi ile başlamanıza imkan verir. Dilerseniz örnek veriyi yüklemeye bilirsiniz. (Tavsiye Edilmez.).';
public $NOSAMPLE = 'Yok (Tavsiye Edilmez)';
public $DEFAULTPACK = 'Elxis Varsayılan';
public $PASS_NOTMATCH = 'Veritabanı şifreleri eşleşmiyor.';
public $CNOT_CONDB = 'Veritabanı ile bağlantı kurulamadı.';
public $FAIL_CREATEDB = '%s veritabanı oluşturma hatası';
public $ENTERSITENAME = 'Lütfen bir site adı girin';
public $STEPDB_SUCCESS = 'Önceki adım başarıyla tamamlandı. Sitenizin parametrelerini girmeye devam edebilirsiniz.';
public $STEPDB_FAIL = 'Önceki adımda bir hata meydana geldi. Devam edemezsiniz. Lütfen geri dönün ve veritabanı bilgilerini kontrol edin. Elxis yükleyicisi hata mesajları:';
public $SITENAME_INFO = 'Elxis sitenizin adını yazın. Bu isim sitenizden gönderilecek e-postalarda kullanılacak. Dolayısıyla anlamlı birşey olmalıdır.';
public $SITENAME = 'Site Adı';
public $SITENAME_EG = 'örnek: Benim Elxis Sitem';
public $OFFSET = 'Ayar';
public $SUGOFFSET = 'Önerilen ayar';
public $OFFSETDESC = 'Bilgisayarınız ile sunucu arasında zaman farkı. Eğer yerel saatinizi Elxis ile senkronize etmek isterseniz  uygun ayarlamayı yapmalısınız.';
public $SERVERTIME = 'Sunucu zamanı';
public $LOCALTIME = 'Yerel Saat';
public $DBINFOEMPTY = 'Veritabanı bilgileri boş/hatalı!';
public $SITENAME_EMPTY = 'Site adı bulunamadı.';
public $DEFLANGUNPUB = 'Varsayılan Ön-Yüz dili yayınlanmadı!';
public $URL = 'URL';
public $PATH = 'Yol';
public $URLPATH_DESC = 'URL ve Yol doğru ise değiştirmeyin. Emin değilseniz lütfen ISP veya yöneticiniz ile görüşün. Genellikle bu değerler sitenizin çalışması için gereken şekildedir.';
public $DBFILE_NOEXIST = 'Veritabanı dosyası bulunamadı!';
public $ADODB_MISSES = 'Gereken ADOdb dosyaları yok!';
public $SITEURL_EMPTY = 'Lütfen sitenin URL adresini girin';
public $ABSPATH_EMPTY = 'Lütfen sitenin tam yolunu girin';
public $PERSONAL_INFO = 'Kişisel Bilgi';
public $YOUREMAIL = 'E-posta adresiniz';
public $ADMINRNAME= 'Yöneticinin Gerçek İsmi';
public $ADMINUNAME = 'Yöneticinin Kullanıcı Adı';
public $ADMINPASS = 'Yöneticinin Şifresi';
public $CHANGEPROFILE = 'Kurulumdan sonra sitenize giriş yapabilir, profil bilgilerinizi değiştirebilirsiniz.';
public $FATAL_ERRORMSGS = 'Önemli bir hata meydana geldi. Devam edemezsiniz. 
Elxis yükleyicisi hata mesajları:';
public $EMPTYNAME = 'Gerçek isminizi yazmalısınız...';
public $EMPTYPASS = 'Yönetici şifresi boş.';
public $VALIDEMAIL = 'Geçerli bir e-posta adresi girmelisiniz.';
public $FTPACCESS = 'FTP Erişimi';
public $FTPINFO = 'FTP erişimini aktif etmek, dosyalar üzerindeki bir çok dosya-bağlantı problemlemlerinin dosya izinleri yoluyla çözülebilmesi için gereklidir.
FTP erişimini aktif ederseniz, Elxis PHP tarafından yazılamaz yapılan klasörlere/dosyalara yazabilecektir. 	 Aynı zamanda Elxis kurucusu, sitenin configuration dosyasını kaydedebilecek. Aksi halde bu dosyayı elle oluşturmanız gerekecek.';
public $USEFTP = 'FTP Kullanımı';
public $FTPHOST = 'FTP sunucusu';
public $FTPPATH = 'FTP yolu';
public $FTPUSER = 'FTP kullanıcısı';
public $FTPPASS = 'FTP şifresi';
public $FTPPORT = 'FTP girişi';
public $MOSTPROB = 'En büyük olasılık:';
public $FTPHOST_EMPTY = 'Bir FTP sunucusu gerekli';
public $FTPPATH_EMPTY = 'Bir FTP yolu gerekli';
public $FTPUSER_EMPTY = 'Bir FTP kullanıcısı gerekli';
public $FTPPASS_EMPTY = 'Bir FTP şifresi gerekli';
public $FTPPORT_EMPTY = 'Bir FTP girişi gerekli';
public $FTPCONERROR = 'FTP sunucusuna bağlanılamadı';
public $FTPUNSUPPORT = 'PHP ayarlarınız FTP bağlantısını desteklemiyor';
public $CONFSITEDOWN = 'Bu site bakım altındadır.<br /> Lütfen daha sonra tekrar deneyin.';
public $CONFSITEDOWNERR = 'Bu site geçici olarak uygun değildir.<br /> Lütfen sistem yöneticisini uyarınız';
public $CONGRATS = 'Tebrikler!';
public $ELXINSTSUC = 'Elxis başarıyla kuruldu.';
public $THANKUSELX = 'Elxis kullandığınız için çok teşekkür ederiz,';
public $CREDITS = 'Teşekkür';
public $CREDITSELXGO = 'Ioannis Sannos (Elxis Takımı) -  Elxis sistemini geliştirdiği için.';
public $CREDITSELXCO = 'Ivan Trebjesanin (Elxis Takımı) ve Elxis topluluğu üyesi - yardımları ve fikirleri için.';
public $CREDITSELXRTL = 'Farhad Sakhaei (Elxis Takımı) - Elxis RTL ye olan katkıları için.';
public $CREDITSELXTR = 'Çevirmenler - Elxis sistemini her kullanıcının kendi dilinde kullanabildiği bir CMS olmasını sağladıkları için.';
public $OTHERTHANK = 'Elxis de kodlarını kullandığımız tüm açık kaynak (Open Source) geliştiricilerine.';
public $CONFBYHAND = 'Kurucu, sitenizin dosya izinleri uygun olmadığından configuration dosyasını kaydedemedi.
	Aşağıdaki tüm kodları kopyalayıp bir metin editörüne yapıştırın ve "configuration.php" adıyla kaydedip, Elxis ana dizinine yükleyin.
	Dikkat: Dosyayı UTF-8 karakter biçeminde kaydedin';
public $LANG_SETTINGS = 'Elxis eşsiz bir çok dilli arayüze sahiptir. Arayüzünde birden çok dilde yayın yapmanıza imkan verir.  
	Elxis yönetim panelinden içerik öğelerini, modülleri ..vd tüm öğeleri istediğiniz dillere göre tek tek ayarlayabilirsiniz.';
public $DEF_FRONTL = 'Varsayılan arayüz dili';
public $PUBL_LANGS = 'Yayınlanan diller';
public $DEF_BACKL = 'Varsayılan yönetim paneli dili';
public $LANGUAGE = 'Dil';
public $SELECT = 'seç';
public $TEMPLATES = 'Şablon';
public $TEMPLATESTITLE = 'Elxis CMS için şablonlar';
public $DOWNLOADS = 'İndir';
public $DOWNLOADSTITLE = 'Elxis eklentilerini indir';
//elxis 2009.0
public $STEP = 'Adım';
public $RESTARTCONF = 'Kurulumu yeniden başlatmak istediğinize emin misiniz?';
public $DBCONSETS = 'Veritabanı bağlantı ayarları';
public $DBCONSETSD = 'Elxis in veritabanına bağlanmak ve temel bilgileri girebilmek için ihtiyaç duyduğu bilgileri girin.';
public $CONTLAYOUT = 'İçerik ve düzen';
public $TMPCONFIGF = 'Geçici yapılandırma dosyası';
public $TMPCONFIGFD = 'Elxis kurulum işlemi sırasında yapılandırma parametrelerini depolamak için geçici bir tmp dosyası kullanır. Elxis kurucusu bu dosyanın üzerine yazabilmelidir. Bu yüzden bu dosyayı yazılabilir yapmalı ya da FTP erişimi açık olmalı ve kurucu dosyanın üzerine FTP bağlantısını kullanarak yazabilmelidir';
public $CHECKFTP = 'FTP ayarlarını kontrol et';
public $FAILED = 'Başarısız';
public $SUCCESS = 'Başarılı';
public $FTPWRONGROOT = 'FTP bağlantısı sağlandı fakat Elxis dizini hatalı. Lütfen kontrol edin.';
public $FTPNOELXROOT = 'FTP bağlantısı sağlandı fakat FTP bir Elxis kurulumu ihtiva etmiyor. Lütfen kontrol edin.';
public $FTPSUCCESS = 'Bağlantı başarılı. Bir Elxis kurulumu bulundu. FTP ayarlarınız doğrudur.';
public $FTPPATHD = 'FTP kök dizininizdeki Elxis kurulumunun yolu (/) slaşsız olmalıdır. ';
public $CNOTWRTMPCFG = 'Geçici yapılandırma dosyası yazılamaz (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "%s driver Elxis tarafından desteklenmektedir"; 
public $DRIVERSUPSYS = "%s driver sisteminiz tarafından desteklenmektedir"; 
public $DRIVERNSUPELXIS = "%s driver Elxis tarafından desteklenmemektedir"; 
public $DRIVERNSUPSYS = "%s driver sisteminiz tarafından desteklenmemektedir"; 
public $DRIVERSUPELXEXP = "%s driver Elxis tarafından deneysel olarak desteklenmektedir."; 
public $STATICCACHE = 'Statik önbellek';
public $STATICCACHED = 'Statik önbellek bir önbellekleme sistem dosyasıdır. Elxis tarafından dinamik olarak oluşturulur.  Önbelleklenmiş sayfalar yeniden hafızadan yeniden PHP kodu çalıştırmaya  ya da yeni veritabanı sorgusuna gerek olmadan çağırılabilir. Statik önbellek tek HTML blokları yerine tüm sayfaları önbellekler. Statik önbellek kullanımı özellikle büyük sitelerde kayda değer hız artışları sağlar.';
public $SEFURLS = 'Arama Motoru Dostu URLler';
public $SEFURLSD = 'Açıksa, (ısrarla tavsiye edilir) Elxis standartın yerine Arama Motoru Dostu oluşturur. SEO PRO URLler sitenizin arama motorlarında yükselmesini ve sayfaların ziyaretçileriniz tarafından daha kolaylıkla hatırlanmasını sağlar. Ayrıca tüm PHP değişkenleri sitenizin hackerlara karşı daha güvenli olabilmesi amacıyla URL lerden kaldırılacak.';
public $RENAMEHTACC = '<strong>htaccess.txt</strong> dosyasını <strong>.htaccess</strong> olarak yeniden adlandırın.';
public $RENAMEHTACC2 = 'Bu hatalıysa buradaki ayarlarınız ne olursa olsun SEO PRO OFF olarak ayarlanacaktır. (onu daha sonra elle ayarlayabileceksiniz).';
public $HTACCEXIST = 'Bir .htaccess dosyası hali hazırda Elxis kök dizinde mevcuttur! SEO PRO için onu elle etkinleştirmelisiniz.';
public $SEOPROSRVS = 'SEO PRO sadece aşağıdaki web sunucularında çalışır:<br />
Apache, Lighttpd, ya da mod_rewrite ile uyumlu diğer web sunucuları.<br />
IIS ile Ionic Isapi Rewrite filtresi kullanılır.';
public $SETSEOPROY = 'Lütfen SEO PRO ayarını EVET yapın';
public $FEATENLATER = 'Bu özellik daha sonra Elxis yönetim panelinden etkinleştirilebilir.';
public $TEMPLATE = 'Şablon';
public $TEMPLATEDESC = 'Şablon web sitesinin görünümü tanımlar. Web siteniz için varsayılan şablonu seçin. Daha sonra başka bir şoblon indirip onu kurabilirsiniz.';
public $CREDITSELXWI = 'Elxis Wiki, Kostas Stathopoulos ve Elxis Belge Takımının katkılarıyla.';
public $NOWWHAT = 'Şimdi ne olacak?';
public $DELINSTFOL = 'installation klasörünü tamamen silin (installation/).';
public $AUTODELINSTFOL = 'Otomatik olarak kurulum klasörünü silin.';
public $AUTODELFAILMAN = 'Bu başarısız olursa, yükleme klasörünü el ile  silin.';
public $BENGUIDESWIKI = 'Elxis Wiki başlangıç rehberi.';
public $VISITFORUMHLP = 'Yardım için Elxis forumlarını ziyaret edin.';
public $VISITNEWSITE = 'Yeni web sitenize gidin.';

}

?>