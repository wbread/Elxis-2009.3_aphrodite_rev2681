<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: momo-i
* @link: http://www.momo-i.org/
* @email: webmaster@momo-i.org
* @description: Japanese installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'この場所への直接アクセスは許可されていません。' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'ja'; //2-letter country code 
public $LANGNAME = '日本語'; //This language, written in your language
public $CLOSE = '閉じる';
public $MOVE = '移動';
public $NOTE = '注';
public $SUGGESTIONS = '提案';
public $RESTARTINST = 'インストール再開';
public $WRITABLE = '書込可能';
public $UNWRITABLE = '書込不可';
public $HELP = 'ヘルプ';
public $COMPLETED = '完了済み';
public $PRE_INSTALLATION_CHECK = 'インストール事前チェック';
public $LICENSE = 'ライセンス';
public $ELXIS_WEB_INSTALLER = 'Elxis - ウェブインストーラ';
public $DEFAULT_AGREE = 'インストールを続けるためにはライセンスを良く読み、同意をしてください';
public $ALT_ELXIS_INSTALLATION = 'Elxisインストール';
public $DATABASE = 'データベース';
public $SITE_NAME = 'サイト名';
public $SITE_SETTINGS = 'サイト設定';
public $FINISH = '完了';
public $NEXT = '次へ >>';
public $BACK = '<< 戻る';
public $INSTALLTEXT_01 = 'これらの項目のいずれかが赤でハイライトされているなら、それらを修正してください。
	修正しないとElxisのインストールが正しく機能しないかもしれません。';
public $INSTALLTEXT_02 = 'インストール事前チェック：';
public $INSTALL_PHP_VERSION = 'PHP バージョン >= 5.0.0';
public $NO = 'いいえ';
public $YES = 'はい';
public $ZLIBSUPPORT = 'zlib 圧縮サポート';
public $AVAILABLE = '有効';
public $UNAVAILABLE = '無効';
public $XMLSUPPORT = 'xml サポート';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = '設定がおわったときに表示されたものをコピーアンドペーストそしてアップロードすることで
	今までどおりインストールを続けることができます。';
public $SESSIONSAVEPATH = 'セッション保存パス';
public $SUPPORTED_DBS = 'サポート済みデータベース';
public $SUPPORTED_DBS_INFO = 'システムでサポートされたデータベースの一覧です。
	恐らく他のものも利用可能かもしれない(SQLite等)事に注意してください。';
public $NOTSET = '未設定';
public $RECOMMENDEDSETTINGS = '推奨設定';
public $RECOMMENDEDSETTINGS01 = 'これらの設定はElxisで完全な互換性を保つためにPHPでお勧めするものです。';
public $RECOMMENDEDSETTINGS02 = 'しかしながら、Elxisはあなたの設定が推奨設定ではなくても動かすことはできるでしょう。';
public $DIRECTIVE = 'ディレクティブ';
public $RECOMMENDED = '推奨';
public $ACTUAL = '現在';
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
public $DIRFPERM = 'ディレクトリとファイルのパーミッション';
public $DIRFPERM01 = 'Elxisが正しく機能するように確実にファイル又はディレクトリへの
	書き込み・アクセスができる必要があります。「書き込み不可」が表示されているなら、
	Elxisが書き込みできるようにファイル又はディレクトリのパーミッションを変更する必要があります。';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';

public $ELXIS_RELEASED = 'Elxis CMSはGNU/GPLライセンスの下フリーソフトとしてリリースされています。';
public $INSTALL_LANG = 'インストールに使用する言語を選択してください';
public $DISABLE_FUNC = 'サイトを安全にするために、これらのPHP関数を無効にする(他で使っていないなら)事をお勧めします：';
public $FTP_NOTE = '後でFTPを可能にするなら、いくつかのフォルダは読込のみでもElxisは機能するでしょう。';
public $OTHER_RECOM = 'その他の推奨';
public $OUR_RECOM_ELXIS = 'Elxisのあるなしに関わらずより簡単にするためのお勧めです。';
public $SERVER_OS = 'サーバ OS';
public $HTTP_SERVER = 'HTTP サーバ';
public $BROWSER = 'ブラウザ';
public $SCREEN_RES = 'スクリーン解像度';
public $OR_GREATER = 'またはそれ以上';
public $SHOW_HIDE = '表示/非表示';
public $SFMODALERT1 = 'PHPはセーフモード下で動作しています！';
public $SFMODALERT2 = '多くのElxisの機能、コンポーネント、そしてサードパーティの拡張はセーフモードで動作させる場合に問題があります。';
public $GNU_LICENSE = 'GNU/GPL ライセンス';
public $INSTALL_TOCONTINUE = '*** インストールを続けるためにライセンスの
	下のチェックボックスにチェックする必要があります ***';
public $UNDERSTAND_GNUGPL = 'このソフトはGNU/GPLライセンス下でリリースされたことを理解しました';
public $MSG_HOSTNAME = 'ホスト名を入力してください';
public $MSG_DBUSERNAME = 'データベースのユーザ名を入力してください';
public $MSG_DBNAMEPATH = 'データベース名又はパスを入力してください';
public $MSG_SURE = 'これらの設定は正しいですか？\nElxisは現在あなたが設定したものでデータベースに設定を試みます';
public $DBCONFIGURATION = 'データベース設定';
public $DBCONF_1 = 'Elxisをインストールするサーバのホスト名を入力してください';
public $DBCONF_2 = 'Elxisで使用するデータベースのタイプを選択してください';
public $DBCONF_3 = 'データベース名かパスを入力してください。データベースが既に存在することで
	Elxisのインストーラでデータベースの作成における問題を必ず回避してください。';
public $DBCONF_4 = 'このElxisインスタンスで使用されるテーブル名のプレフィックスを入力してください。';
public $DBCONF_5 = 'データベースのユーザ名とパスワードを入力してください。ユーザは既に存在しており、全ての必要な特権を持っていることを確実にしてください。';
public $OTHER_SETTINGS = 'その他設定';
public $DBTYPE = 'データベースタイプ';
public $DBTYPE_COMMENT = '通常は「MySQL」';
public $DBNAME = 'データベース名';
public $DBNAME_COMMENT = 'いくつかのホストはサイト毎に信頼できるDB名しか許可していません。この場合、異なったElxisサイトにテーブルプレフィックスを使用してください。'; 
public $DBPATH = 'データベースパス';
public $DBPATH_COMMENT = 'データベースのいくつかのタイプ(Access、InterBase、FireBirdなど)は
	データベース名の代わりにデータベースファイル名の設定が必要です。
	この場合、ここへファイルのパスを記入してください。';
public $HOSTNAME = 'ホスト名';
public $USLOCALHOST = '通常は「localhost」';
public $DBUSER = 'データベースユーザ名';
public $DBUSER_COMMENT = '「root」として動かせるいずれかか、管理者に与えられたユーザ名のどちらか';
public $DBPASS = 'データベースパスワード';
public $DBPASS_COMMENT = 'サイトの安全のためにMysqlアカウントのパスワードを使用することは必須です';
public $VERIFY_DBPASS = 'データベースパスワードの確認';
public $VERIFY_DBPASS_COMMENT = '確認のためにパスワードを再入力してください';
public $DBPREFIX = 'データベースのテーブルプレフィックス';
public $DBPREFIX_COMMENT = '「old_」はテーブルのバックアップ時に使用されるため使わないでください。';
public $DBDROP = '既存のテーブルを削除する';
public $DBBACKUP = '古いテーブルをバックアップする';
public $DBBACKUP_COMMENT = '前のElxisインストールからどんな既存のテーブルのバックアップも置き換えられるでしょう。';
public $INSTALL_SAMPLE = 'サンプルデータのインストール';
public $SAMPLEPACK = 'サンプルデータのパッケージ';
public $SAMPLEPACKD = 'Elxisはサイトのサンプルデータパッケージを最も適切なものを
	選択することによって、始めからサイトのコンテンツ及び外観を指定することを可能にします。
	更に、サンプルデータを全くインストールしないこと(推奨しません)も可能です。';
public $NOSAMPLE = '無し(推奨しません)';
public $DEFAULTPACK = 'Elxisのデフォルト';
public $PASS_NOTMATCH = '入力されたデータベースパスワードが一致しません。';
public $CNOT_CONDB = 'データベースh接続できませんでした。';
public $FAIL_CREATEDB = 'データベース%sの作成に失敗しました';
public $ENTERSITENAME = 'サイト名を入力してください';
public $STEPDB_SUCCESS = '前の手順は完了しました。サイトのパラメータを入力して続けてください。';
public $STEPDB_FAIL = '前の手順で少なくとも一つ以上の致命的なエラーが発生しました。
	続けることができません。前のページに戻ってデータベースの設定を修正してください。
	以下はElxisインストーラのエラーメッセージです：';
public $SITENAME_INFO = 'サイトの名前を入力してください。この名前はメールのメッセージで使用されるため、重要なものにしてください。';
public $SITENAME = 'サイト名';
public $SITENAME_EG = '例: Elxisのホーム';
public $OFFSET = 'オフセット';
public $SUGOFFSET = '提案されたオフセット';
public $OFFSETDESC = 'サーバとあなたのPCの間の時差。現地時間にElxisを連動させたいなら適切にオフセットを設定してください。';
public $SERVERTIME = 'サーバ時間';
public $LOCALTIME = 'ローカル時間';
public $DBINFOEMPTY = 'データベース情報が空又は誤っています！';
public $SITENAME_EMPTY = 'サイト名が入力されていません';
public $DEFLANGUNPUB = 'デフォルトのフロントエンド言語は非公開です！';
public $URL = 'URL';
public $PATH = 'パス';
public $URLPATH_DESC = 'URLとパスが正しく見える場合、変更しないでください。確実では無い場合、
	ISPか管理者に連絡をしてください。通常表示された値はサイトで動作するでしょう。';
public $DBFILE_NOEXIST = 'データベースファイルが存在しません！';
public $ADODB_MISSES = '必要なADOdbファイルが見つかりません！';
public $SITEURL_EMPTY = 'サイトのURLを入力してください';
public $ABSPATH_EMPTY = 'サイトへの絶対パスを入力してください';
public $PERSONAL_INFO = '個人情報';
public $YOUREMAIL = 'メールアドレス';
public $ADMINRNAME= '管理者表示名';
public $ADMINUNAME = '管理者ユーザ名';
public $ADMINPASS = '管理者パスワード';
public $CHANGEPROFILE = 'インストール後新しいサイトにログインすることができます。上記情報の変更とプロフィールのセットアップをしてください。';
public $FATAL_ERRORMSGS = '少なくとも一つ以上のエラーが発生しました。続けることができません。
	以下はElxisインストーラのエラーメッセージです：';
public $EMPTYNAME = '表示名を入力してください。';
public $EMPTYPASS = '管理者パスワードが空です。';
public $VALIDEMAIL = '有効な管理者メールアドレスを入力してください。';
public $FTPACCESS = 'FTPアクセス';
public $FTPINFO = 'FTP経由でファイルにアクセスを可能にすると多くのファイルに関連するパーミッションの問題を解決します。
	FTPを可能にすればElxisはPHPで書き込むことができないフォルダやファイルへ書き込むことができるようになります。
	Elxisインストーラはサイトへ最終設定を保存することを可能にします。
	その他の方法として作成とアップロードを手動で行うことも可能です。';
public $USEFTP = 'FTPを使用する';
public $FTPHOST = 'FTPホスト';
public $FTPPATH = 'FTPパス';
public $FTPUSER = 'FTPユーザ名';
public $FTPPASS = 'FTPパスワード';
public $FTPPORT = 'FTPポート';
public $MOSTPROB = 'おそらく:';
public $FTPHOST_EMPTY = 'FTPのホスト名を入力してください';
public $FTPPATH_EMPTY = 'FTPのパスを入力してください';
public $FTPUSER_EMPTY = 'FTPのユーザを入力してください';
public $FTPPASS_EMPTY = 'FTPのパスワードを入力してください';
public $FTPPORT_EMPTY = 'FTPのポートを入力してください';
public $FTPCONERROR = 'FTPホストへ背う族で着ませんでした';
public $FTPUNSUPPORT = 'PHPの設定でFTPの接続がサポートされていません';
public $CONFSITEDOWN = 'このサイトはメンテナンスのため、停止中です。<br />後ほど確認してみてください。';
public $CONFSITEDOWNERR = 'このサイトは一時的に利用不可です。<br />システム管理者に指摘してください。';
public $CONGRATS = 'おめでとうございます！';
public $ELXINSTSUC = 'Elxisはあなたのサイトへのインストールに成功しました。';
public $THANKUSELX = 'Elxisを使用してくださりまことにありがとうございます。';
public $CREDITS = 'クレジット';
public $CREDITSELXGO = 'Elxis開発(Elxis Team)のIoannis SannosとIvan Trebjesaninへ。';
public $CREDITSELXCO = 'Elxisをより良くするためのアイデアおよびそれらの支援のためのElxisコミュニティメンバーへ。';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Elxisをユーザの母国語に関わるCMSにすることの貢献に対して翻訳者へ。';
public $OTHERTHANK = 'オープンソースコミュニティに寄与した全ての開発者へ、Elxisがそれらの仕事の一部を使用します。';
public $CONFBYHAND = 'インストーラはパーミッションの問題で設定ファイルを保存することができませんでした。
	手動で次のコードをアップロードしてください。テキスト領域をクリックすることでコードの全てを強調することができます。
	「configuration.php」という名のphpファイルにそれを貼り付けて、Elxisのルートフォルダにそれをアップロードしてください。
	注意：ファイルはUTF-8で保存されなければなりません。';
public $LANG_SETTINGS = 'Elxisにはあなたがデフォルトのフロントエンド言語とバックエンド言語を設定する
	ユニークな多言語インタフェースがあり、また1つ以上はフロントエンド(Ctrl+クリック)のために
	言語を公開できます。後で個々にElxisの管理画面でコンテンツアイテム、モジュールなど特定の
	言語の組み合わせで見えるように設定することができることに注意してください。';
public $DEF_FRONTL = 'デフォルトのフロントエンド言語';
public $PUBL_LANGS = '公開された言語';
public $DEF_BACKL = 'デフォルトのバックエンド言語';
public $LANGUAGE = '言語';
public $SELECT = '選択';
public $TEMPLATES = 'Templates';
public $TEMPLATESTITLE = 'Templates for Elxis CMS';
public $DOWNLOADS = 'Downloads';
public $DOWNLOADSTITLE = 'Download Elxis extensions';

//elxis 2009.0
public $STEP = 'Step';
public $RESTARTCONF = 'Are you sure you wish to restart the installation?';
public $DBCONSETS = 'Database connection settings';
public $DBCONSETSD = 'Fill-in the needed information in order Elxis to connect to the database and import basic data.';
public $CONTLAYOUT = 'Content and layout';
public $TMPCONFIGF = 'Temporary configuration file';
public $TMPCONFIGFD = 'Elxis uses a temporary file to store configuration parameters during the installation procedure. 
Elxis installer must be able to write on this file. So you must either make this file writeable or enable FTP access in order 
for the installer to be able to write on it using an FTP connection.';
public $CHECKFTP = 'Check FTP settings';
public $FAILED = 'Failed';
public $SUCCESS = 'Success';
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
public $SEFURLS = 'Search Engines Friendly URLs';
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
public $FEATENLATER = 'This feature can also be enabled later from within Elxis administration.';
public $TEMPLATE = 'Template';
public $TEMPLATEDESC = 'Template defines your web site appearance. Select the default template for your web site. 
You can change your selection afterwards or download and install additional templates.';
public $CREDITSELXWI = 'To Kostas Stathopoulos and Elxis Documentation Team for their contribution to Elxis Wiki.';
public $NOWWHAT = 'Now what?';
public $DELINSTFOL = 'Completely delete installation folder (installation/).';
public $AUTODELINSTFOL = 'Automaticaly delete installation folder.';
public $AUTODELFAILMAN = 'If this fails, then delete installation folder manually.';
public $BENGUIDESWIKI = 'Beginner\'s guides at Elxis Wiki.';
public $VISITFORUMHLP = 'Visit Elxis forum for help.';
public $VISITNEWSITE = 'Visit your new web site.';

}

?>