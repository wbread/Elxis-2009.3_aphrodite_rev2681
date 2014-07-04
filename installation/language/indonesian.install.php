<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Zaenal Mutaqin
* @link: http://www.elxis.org
* @email: info@elxis.org
* @description: Indonesian installation Language
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
public $XMLLANG = 'id'; //2-letter country code
public $LANGNAME = 'Bahasa Indonesia'; //This language written in your language
public $CLOSE = 'Tutup';
public $MOVE = 'Pindah';
public $NOTE = 'Catatan';
public $SUGGESTIONS = 'Saran';
public $RESTARTINST = 'Mulai lagi instalasi';
public $WRITABLE = 'Bisa ditulis';
public $UNWRITABLE = 'Tidak bisa ditulis';
public $HELP = 'Bantuan';
public $COMPLETED = 'Selesai';
public $PRE_INSTALLATION_CHECK = 'Pemeriksaan Pra-instalasi';
public $LICENSE = 'Lisensi';
public $ELXIS_WEB_INSTALLER = 'Instalator Web - Elxis';
public $DEFAULT_AGREE = 'Harap membaca/menerima lisensi untuk melanjutkan instalasi';
public $ALT_ELXIS_INSTALLATION = 'Instalasi Elxis';
public $DATABASE = 'Database';
public $SITE_NAME = 'Nama situs';
public $SITE_SETTINGS = 'Setelan Situs';
public $FINISH = 'Selesai';
public $NEXT = 'Lanjut >>';
public $BACK = '<< Kembali';
public $INSTALLTEXT_01 = 'Jika salah satu dari item ini diterangi merah, harap mengambil tindakan untuk membetulkannya.
	Gagal melakukannya dapat menyebabkan instalasi Elxis Anda tidak berfungsi dengan benar.';
public $INSTALLTEXT_02 = 'Pemeriksaan Pra-instalasi untuk';
public $INSTALL_PHP_VERSION = 'PHP versi >= 5.0.0';
public $NO = 'Tidak';
public $YES = 'Ya';
public $ZLIBSUPPORT = 'dukungan kompresi zlib';
public $AVAILABLE = 'Tersedia';
public $UNAVAILABLE = 'Tidak tersedia';
public $XMLSUPPORT = 'dukungan xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'Anda masih dapat melanjutkan instalasi. Konfigurasi akan ditampilkan kemudian.
    Cukup copy & paste teks ini dan kemudian upload file.';
public $SESSIONSAVEPATH = 'Path penyimpanan Sesi';
public $SUPPORTED_DBS = 'Database didukung';
public $SUPPORTED_DBS_INFO = 'Daftar database yang didukung oleh sistem Anda. Catatan bahwa yang lainnya juga
	tersedeia (seperti SQLite).';
public $NOTSET = 'Tidak ditetapkan';
public $RECOMMENDEDSETTINGS = 'Setelan Direkomendasikan';
public $RECOMMENDEDSETTINGS01 = 'Setelan ini direkomendasikan untuk PHP guna memastikan kompatibilitas penuh dengan Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Akan tetapi, Elxis masih akan beroperasi jika setelan Anda tidak begitu sama dengan yang direkomendasikan';
public $DIRECTIVE = 'Direktif';
public $RECOMMENDED = 'Direkomendasikan';
public $ACTUAL = 'Kenyataan';
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
public $DIRFPERM = 'Perijinan File dan Direktori';
public $DIRFPERM01 = 'Tergantung pada situasi Elxis mingkin perlu menuliskan  folder lain juga. Contohnya saat instalasi modul
Elxis harus meng-upload file pada folder "modules". Jika Anda melihat "Tidak bisa ditulis" Anda harus mengubah perijinan
pada direktori untuk mengijinkan Elxis agar bisa menulis ke sana atau, untuk keamanan maksimum, Anda dapat membiarkannya tidak bisa ditulis dan jadikan bisa
ditulis hanya sebelum Anda menggunakannya.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Elxis CMS adalah Software Bebas yang dirilis dengan lisensi GNU/GPL.';
public $INSTALL_LANG = 'Pilih bahasa instalasi';
public $DISABLE_FUNC = 'Untuk keamanan situs Anda, kami juga merekomendasikan guna mematikan fungsi PHP dalam php.ini (jika Anda tidak memakainya):';
public $FTP_NOTE = 'Jika Anda menghidupkan FTP kemudian, Elxis akan berfungsi jika beberapa folder-folder ini hanya-baca.';
public $OTHER_RECOM = 'Rekomendasi Lainnya';
public $OUR_RECOM_ELXIS = 'Rekomendasi kami untuk memudahkan hidup Anda dengan atau tanpa Elxis.';
public $SERVER_OS = 'Server OS';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Browser';
public $SCREEN_RES = 'Resolusi layar';
public $OR_GREATER = 'atau lebih besar';
public $SHOW_HIDE = 'Tampilkan/Sembunyikan';
public $SFMODALERT1 = 'PHP BERJALAN DENGAN MODE SAFE!';
public $SFMODALERT2 = 'Banyak fitur Elxis, komponen dan ekstensi pihak ketiga mempunyai masalah jika berjalan di bawah mode safe.';
public $GNU_LICENSE = 'Lisensi GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Untuk melanjutkan menginstalasi Elxis silahkan baca lisensi Elxis
	dan jika Anda setuju, centang kotak di bawah lisesnsi ***';
public $UNDERSTAND_GNUGPL = 'Saya mengerti bahwa software dirilis di bawah Lisensi GNU/GPL';
public $MSG_HOSTNAME = 'Silahkan masukkan nama Host';
public $MSG_DBUSERNAME = 'Silahkan masukkan Nama Pengguna Database';
public $MSG_DBNAMEPATH = 'Silahkan masukkan Nama atau Path database';
public $MSG_SURE = 'Anda yakin setelan ini benar? \n Elxis sekarang akan mencoba untuk menguraikan Database dengan setelan yang Anda sertakan';
public $DBCONFIGURATION = 'Konfigurasi Database';
public $DBCONF_1 = 'Silahkan masukkan nama host server di mana Elxis akan diinstalasi';
public $DBCONF_2 = 'Pilih jenis database yang akan digunakan Elxis';
public $DBCONF_3 = 'Masukkan nama database atau pathway. Guna menghindari pembuatan database oleh
	instalator Elxis, pastikan database sudah ada.';
public $DBCONF_4 = 'Masukkan nama prefiks tabel yang akan dipakai Elxis ini.';
public $DBCONF_5 = 'Masukkan nama pengguna dan kata sandi. Pastikan nama pengguna sudah ada dan memiliki semua privilege yang diperlukan.';
public $OTHER_SETTINGS = 'Setelan Lainnya';
public $DBTYPE = 'Tipe Database';
public $DBTYPE_COMMENT = 'Biasanya "MySQL"';
public $DBNAME = 'Nama Database';
public $DBNAME_COMMENT = 'Beberapa hosts hanya membolehkan nama DB per situs. Gunakan prefiks tabel untuk membedakan situs Elxis.';
public $DBPATH = 'Path Database';
public $DBPATH_COMMENT = 'Beberapa jenis database, seperti Access, InterBase dan FireBird,
	perlu menyetel file database daripada nama database. Dalam hal ini, silahkan tulis di sini
	path ke file ini. Contoh: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Nama Host';
public $USLOCALHOST = 'Biasanya "localhost"';
public $DBUSER = 'Nama Pengguna Database';
public $DBUSER_COMMENT = 'Baik sebagai "root" atau nama pengguna yang diberikan oleh hoster';
public $DBPASS = 'Kata sandi Database';
public $DBPASS_COMMENT = 'Untuk keamanan situs Anda, penggunaan kata sandi untuk akun mysql adalah sebuah keharusan';
public $VERIFY_DBPASS = 'Verifikasi Kata sandi Database';
public $VERIFY_DBPASS_COMMENT = 'Ketik ulang kata sandi untuk verifikasi';
public $DBPREFIX = 'Prefiks Tabel Database';
public $DBPREFIX_COMMENT = 'Jangan gunakan "old_" karena ini dipakai untuk tabel backup';
public $DBDROP = 'Buang Tabel Yang Ada';
public $DBBACKUP = 'Backup Tabel Lama';
public $DBBACKUP_COMMENT = 'Setiap tabel backup yang sudah ada dari instalasi Elxis sebelumnya akan ditimpa';
public $INSTALL_SAMPLE = 'Instalasi Contoh Data';
public $SAMPLEPACK = 'Paket data contoh';
public $SAMPLEPACKD = 'Elxis mengijinkan untuk menetapkan konten situs Anda dan tampilannya dari awal
	dengan memilih Paket Data Contoh yang paling cocok untuk kebutuhan situs Anda. Anda juga bisa memilih untuk tidak
	menginstalasi data contoh sama sekali (Tidak Direkomendasikan).';
public $NOSAMPLE = 'Tidak Ada (Tidak Direkomendasikan)';
public $DEFAULTPACK = 'Standar Elxis';
public $PASS_NOTMATCH = 'Kata sandi database yang disertakan tidak sama.';
public $CNOT_CONDB = 'Tidak dapat menyambung ke database.';
public $FAIL_CREATEDB = 'Gagal membuat database %s';
public $ENTERSITENAME = 'Silahkan masukkan Nama Situs';
public $STEPDB_SUCCESS = 'Langkah sebelumnya sudah selesai dengan sukses. Sekarang Anda dapat melanjutkan mengisi parameter situs.';
public $STEPDB_FAIL = 'Setidaknya satu kesalahan fatal terjadi selama langkah sebelumnya. Anda
	tidak bisa melanjutkan. Silahkan kembali dan betulkan setelan database. Pesan kesalahan instalator Elxis
	adalah sebagai berikut:';
public $SITENAME_INFO = 'Ketik nama untuk situs Elxis Anda. Nama ini dpakai dalam pesan email, maka buatlah sesuatu yang berarti.';
public $SITENAME = 'Nama Situs';
public $SITENAME_EG = 'contoh, The Home of Elxis';
public $OFFSET = 'Ofset';
public $SUGOFFSET = 'Ofset yang disarankan';
public $OFFSETDESC = 'Perbedaan waktu dalam jam antara server dan komputer Anda. Jika Anda ingin mensinkronisasi waktu lokal Anda, tetapkan ofset yang benar.';
public $SERVERTIME = 'Waktu server';
public $LOCALTIME = 'Waktu lokal Anda';
public $DBINFOEMPTY = 'Informasi database kosong/tidak akurat!';
public $SITENAME_EMPTY = 'Nama situs belum dilengkapi';
public $DEFLANGUNPUB = 'Bahasa Latar-Depan standar tidak diterbitkan!';
public $URL = 'URL';
public $PATH = 'Path';
public $URLPATH_DESC = 'Jika URL dan Path terlihat benar maka tidak perlu diubah. Jika Anda tidak yakin maka
	silahkan hubungi ISP atau administrator sistem Anda. Biasanya nilai yang ditampilkan akan bekerja untuk situs Anda.';
public $DBFILE_NOEXIST = 'File database tidak ada!';
public $ADODB_MISSES = 'File ADOdb yang diperlukan hilang!';
public $SITEURL_EMPTY = 'Silahkan masukkan URL situs';
public $ABSPATH_EMPTY = 'Silahkan masukkan path absolut ke situs Anda';
public $PERSONAL_INFO = 'Informasi Personal';
public $YOUREMAIL = 'E-mail Anda';
public $ADMINRNAME= 'Nama Asli Administrator';
public $ADMINUNAME = 'Nama pengguna Administrator';
public $ADMINPASS = 'Kata sandi Administrator';
public $CHANGEPROFILE = 'Setelah instalasi Anda dapat masuk ke situs baru Anda, mengubah informasi di atas dan menyiapkan profil Anda.';
public $FATAL_ERRORMSGS = 'Setidaknya satu kesalahan fatal terjadi. Anda tidak dapat melanjutkan.
Pesan kesalahan instalator Elxis adalah sebagai berikut:';
public $EMPTYNAME = 'Anda harus melengkapi nama asli Anda.';
public $EMPTYPASS = 'Kata sandi Administrator kosong.';
public $VALIDEMAIL = 'Anda harus menyertakan alamat e-mail admin yang benar.';
public $FTPACCESS = 'Akses FTP';
public $FTPINFO = 'Menghidupkan akses FTP melalui file memecahkan banyak masalah atas file dengan perijinan.
	Jika Anda menghidupkan FTP, Elxis akan bisa menulisa pada folder/file yang tidak bisa ditulis oleh PHP. Instalator Elxis
	juga akan bisa menyimpan file konfigurasi akhir ke situs Anda, Sebaliknya Anda mungkin harus
	membuat dan meng-upload secara manual.';
public $USEFTP = 'Pakai FTP';
public $FTPHOST = 'Host FTP';
public $FTPPATH = 'Path FTP';
public $FTPUSER = 'Pengguna FTP';
public $FTPPASS = 'Sandi FTP';
public $FTPPORT = 'Port FTP';
public $MOSTPROB = 'Umumnya mungkin:';
public $FTPHOST_EMPTY = 'Anda harus melengkapi host FTP';
public $FTPPATH_EMPTY = 'Anda harus melengkapi path FTP';
public $FTPUSER_EMPTY = 'Anda harus melengkapi pengguna FTP';
public $FTPPASS_EMPTY = 'Anda harus melengkapi sandi FTP';
public $FTPPORT_EMPTY = 'Anda harus melengkapi port FTP';
public $FTPCONERROR = 'Tidak dapat menyambung ke host FTP';
public $FTPUNSUPPORT = 'Setelan PHP Anda tidak mendukung koneksi FTP';
public $CONFSITEDOWN = 'Situs ini sedang dimatikan untuk pemeliharaan.<br />Silahkan periksa kembali lagi nanti.';
public $CONFSITEDOWNERR = 'Situs ini tidak tersedia untuk sementara.<br />Silahkan beritahu Administrator Sistem';
public $CONGRATS = 'Selamat!';
public $ELXINSTSUC = 'Elxis terinstalasi dengan sukses pada situs Anda.';
public $THANKUSELX = 'Terima kasih telah menggunakan Elxis,';
public $CREDITS = 'Penghargaan';
public $CREDITSELXGO = 'Kepada Ioannis Sannos (Tim Elxis) atas pengembangan Elxis.';
public $CREDITSELXCO = 'Kepada Ivan Trebjesanin (Tim Elxis) dan anggota Komunitas Elxis atas bantuan dan idenya menjadikan Elxis lebih baik.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Kepada para Penerjemah atas kontribusinya pada pembuatan Elxis, sebuah CMS yang menghargai bahasa asli pengguna.';
public $OTHERTHANK = 'Kepada semua para pengembang yang telah berkontribusi ke komunitas Open Source dan sebagian dari pekerjaan mereka yang dipakai oleh Elxis.';
public $CONFBYHAND = 'Instalator tidak bisa menyimpan file konfigurasi ke situs Anda karena masalah perijinan.
	Anda harus meng-upload kode berikut secara manual. Klik dalam area teks untuk menerangi seluruh kode.
	Paste dalam file php yang dinamai "configuration.php" dan upload ke dalam folder teratas Elxis Anda.
	Perhatian: File harus disimpan sebagai UTF-8';
public $LANG_SETTINGS = 'Elxis memiliki antarmuka multilingual unik yang membolehkan Anda untuk menetapkan bahasa standar
	Latar-Depan dan Latar-Belakang. Mengijinkan lebih dari satu bahasa diterbitkan untuk Latar-Depan.
	Catatan bahwa nanti dalam administrasi Elxis Anda dapat menetapkan secara individu item-item konten, modul, dll,
	agar muncul dengan kombinasi bahasa tertentu.';
public $DEF_FRONTL = 'Bahasa Standar Latar-Depan';
public $PUBL_LANGS = 'Bahasa dipublikasi';
public $DEF_BACKL = 'Bahasa Standar Latar-Belakang';
public $LANGUAGE = 'Bahasa';
public $SELECT = 'pilih';
public $TEMPLATES = 'Template';
public $TEMPLATESTITLE = 'Template untuk Elxis CMS';
public $DOWNLOADS = 'Download';
public $DOWNLOADSTITLE = 'Download ekstensi Elxis';

//elxis 2009.0
public $STEP = 'Langkah';
public $RESTARTCONF = 'Anda yakin ingin memulai ulang instalasi?';
public $DBCONSETS = 'Setelan koneksi Database';
public $DBCONSETSD = 'Isi informasi yang diperlukan agar Elxis dapat menyambung ke database dan mengimpor data dasar.';
public $CONTLAYOUT = 'Konten dan tata letak';
public $TMPCONFIGF = 'File konfigurasi sementara';
public $TMPCONFIGFD = 'Elxis menggunakan file temporal untuk menyimpan parameter konfigurasi selama prosedur instalasi.
Instalator Elxis harus bisa menulis pada file ini. Maka Anda harus menjadikan file ini bisa ditulis atau hidupkan akses FTP agar
instalator bisa menuliskannya menggunakan koneksi FTP.';
public $CHECKFTP = 'Periksa setelan FTP';
public $FAILED = 'Gagal';
public $SUCCESS = 'Sukses';
public $FTPWRONGROOT = 'Tersambung ke FTP tapi direktori Elxis tidak ada. Periksa nilai FTP Root.';
public $FTPNOELXROOT = 'Tersambung ke FTP tapi FTP Root tidak berisi instalasi Elxis. Periksa nilai FTP Root.';
public $FTPSUCCESS = 'Koneksi dan deteksi instalasi Elxis sukses. Setelan FTP Anda benar.';
public $FTPPATHD = 'Path relatif dari folder FTP root Anda ke instalasi Elxis tanpa garis miring (/).';
public $CNOTWRTMPCFG = 'Tidak bisa menulis ke file konfigurasi (installation/tmpconfig.php)';
public $DRIVERSUPELXIS = "Driver %s tidak didukung oleh Elxis"; //translators help: filled in by database type (driver)
public $DRIVERSUPSYS = "Driver %s tidak didukung oleh sistem Anda"; //translators help: filled in by database type (driver)
public $DRIVERNSUPELXIS = "Driver %s tidak didukung oleh Elxis"; //translators help: filled in by database type (driver)
public $DRIVERNSUPSYS = "Driver %s tidak didukung oleh sistem Anda"; //translators help: filled in by database type (driver)
public $DRIVERSUPELXEXP = "Driver %s mendukung Elxis secara eksperimental"; //translators help: filled in by database type (driver)
public $STATICCACHE = 'Cache statis';
public $STATICCACHED = 'Cache statis adalah file sistem cache yang menyimpan halaman HTML yang dibuat secara dinamis oleh Elxis
ke semacam memori. Halaman yang di-cache dapat dpanggil dari memori tanpa perlu menjalankan kembali kode PHP atau
meng-queri database. Cache statis meng-cache seluruh halaman daripada sat blok HTML tunggal. Pemakaian cache statis
pada situs web berbeban berat akan menghasilkan peningkatan kecepatan.';
public $SEFURLS = 'URL Ramah Mesin Pencari';
public $SEFURLSD = 'Jika dihidupkan (sangat direkomendasikan) Elxis akan menghasilkan URL yang ramah Mesin Pencari dan Manusia
daripada yang standar. URL SEO PRO akan mempercepat peringkat situs Anda dalam mesin pencarian dan halaman akan lebih
mudah diingat oleh pengunjung situs. Sebagai tambahan, semua variabel PHP akan dihapus dari URL
dan menjadikan situs Anda lebih aman terhadap serangan hacker.';
public $RENAMEHTACC = 'Klik di sini untuk mengganti nama <strong>htaccess.txt</strong> ke <strong>.htaccess</strong>.';
public $RENAMEHTACC2 = 'Jika ini gagal maka SEO PRO akan disetel OFF mengabaikan setelan Anda di sini
(Anda akan bisa menghidupkannya secara manual nanti).';
public $HTACCEXIST = 'File .htaccess sudah ada dalam folder root Elxis! Anda harus menghidupkan SEO PRO secara manual.';
public $SEOPROSRVS = 'SEO PRO hanya akan bekerja di bawah server web:<br />
Apache, Lighttpd, atau server web lain yang kompatibel dengan dukungan mod_rewrite.<br />
IIS dengan Ionic Isapi Rewrite filter.';
public $SETSEOPROY = 'Silahkan setel SEO PRO menjadi YES';
public $FEATENLATER = 'Fitur ini juga akan dihidupkan kemudian dari dalam administrasi Elxis.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Template mendefinisikan penampilan situs web Anda. Pilih template standar untuk situs web Anda.
Anda dapat mengganti pilihan Anda setelah ini atau men-download dan menginstalasi template tambahan.';
public $CREDITSELXWI = 'Kepada Kostas Stathopoulos dan Tim Dokumentasi Elxis atas kontribusinya ke Elxis Wiki.';
public $NOWWHAT = 'Sekarang apa?';
public $DELINSTFOL = 'Hapus seluruh folder instalasi (installation/).';
public $AUTODELINSTFOL = 'Secara otomatis menghapus folder instalasi.';
public $AUTODELFAILMAN = 'Jika ini gagal, maka silahkan hapus folder instalasi secara manual.';
public $BENGUIDESWIKI = 'Bimbingan Pemula pada Elxis Wiki.';
public $VISITFORUMHLP = 'Kunjungi Forum Elxis untuk bantuan.';
public $VISITNEWSITE = 'Kunjungi situs web baru Anda.';

}

?>