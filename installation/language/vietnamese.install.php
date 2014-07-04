<?php 
/**
* @version: 2009.0
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Installation Language
* @author: Elxis Team
* @translator: Nguyen Viet Thang ( ELPVN )
* @link: http://www.cgezine.com
* @email: elpvn@inbox.com
* @description: Vietnamese installation Language
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_ELXIS_INSTALLER' ) or die( 'Không cho phép truy xuất trực tiếp tới khu vực này.' );


class iLanguage {

public $RTL = 0; //1 for right to left languages (like persian/farsi)
public $ISO = 'UTF-8'; //Use only utf-8!
public $XMLLANG = 'vi'; //2-letter country code 
public $LANGNAME = 'Tiếng Việt'; //This language, written in your language
public $CLOSE = 'Đóng';
public $MOVE = 'Chuyển';
public $NOTE = 'Chú ý';
public $SUGGESTIONS = 'Các gợi ý';
public $RESTARTINST = 'Bắt đầu lại phần cài đặt';
public $WRITABLE = 'Cho phép ghi';
public $UNWRITABLE = 'Không cho ghi';
public $HELP = 'Trợ giúp';
public $COMPLETED = 'Đã hoàn tất';
public $PRE_INSTALLATION_CHECK = 'Kiểm tra trước khi cài đặt';
public $LICENSE = 'Giấy phép';
public $ELXIS_WEB_INSTALLER = 'Trình cài đặt Elxis';
public $DEFAULT_AGREE = 'Vui lòng đọc kỹ và chấp thuận bản thỏa thuận này để tiếp tục tiến hành cài đặt';
public $ALT_ELXIS_INSTALLATION = 'Trình cài đặt Elxis';
public $DATABASE = 'Cơ sở dữ liệu';
public $SITE_NAME = 'Tên website';
public $SITE_SETTINGS = 'Các thiết lập cho website';
public $FINISH = 'Kết thúc';
public $NEXT = 'Tiếp tục >>';
public $BACK = '<< Quay lại';
public $INSTALLTEXT_01 = 'Nếu có bất kỳ mục nào dưới đây được đánh dấu bằng màu đỏ thì hãy tìm cách sửa lại chúng cho chính xác. Nếu sai sót thì trình cài đặt của Elxis sẽ không hoạt động chính xác.';
public $INSTALLTEXT_02 = 'Kiểm tra trước lúc cài đặt cho';
public $INSTALL_PHP_VERSION = 'Phiên bản PHP >= 5.0.0';
public $NO = 'Từ chối';
public $YES = 'Đồng ý';
public $ZLIBSUPPORT = 'hỗ trợ nén zlib';
public $AVAILABLE = 'Có sẵn';
public $UNAVAILABLE = 'Không có sẵn';
public $XMLSUPPORT = 'hỗ trợ xml';
public $CONFIGURATION_PHP = 'configuration.php';
public $INSTALLTEXT_03 = 'bạn có thể vẫn tiếp tục việc cài đặt và phần cấu hình sẽ hiển thị lúc kết thúc cài đặt, bạn chỉ việc chép và dán phần này thành một file rồi sau đó upload lên server.';
public $SESSIONSAVEPATH = 'Đường dẫn lưu phiên làm việc (session)';
public $SUPPORTED_DBS = 'Các loại CSDL được hỗ trợ';
public $SUPPORTED_DBS_INFO = 'Danh sách các loại cơ sở dữ liệu được hỗ trợ bởi hệ thống của bạn. Lưu ý rằng có một số loại CSDL khác cũng được hỗ trợ (như SQLite).';
public $NOTSET = 'Không thiết lập';
public $RECOMMENDEDSETTINGS = 'Các thiết lập theo gợi ý';
public $RECOMMENDEDSETTINGS01 = 'Đây là các thiết lập theo khuyến cáo dành cho PHP để đảm bảo tương thích tốt nhất với Elxis.';
public $RECOMMENDEDSETTINGS02 = 'Mặt khác, Elxis vẫn sẽ thực thi nếu các thiết lập của bạn hơi khác một chút so với phần gợi ý';
public $DIRECTIVE = 'Theo hướng dẫn';
public $RECOMMENDED = 'Khuyến cáo';
public $ACTUAL = 'Thực tế';
public $SAFEMODE = 'Hệ Safe Mode';
public $DISPLAYERRORS = 'Hiển thị các lỗi';
public $FILEUPLOADS = 'Tải tệp tin';
public $MAGICGPC = 'Magic Quotes GPC';
public $MAGICRUNTIME = 'Magic Quotes Runtime';
public $REGISTERGLOBALS = 'Register Globals';
public $OUTPUTBUFFERING = 'Output Buffering';
public $SESSIONAUTO = 'Phiên làm việc tự khởi động';
public $ALLOWURLFOPEN = 'Cho phép URL fopen';
public $ON = 'Bật';
public $OFF = 'Tắt';
public $DIRFPERM = 'Phân quyền truy xuất thư mục và tệp tin';
public $DIRFPERM01 = 'Depending on the situation Elxis might need to write to other folders too. For instance during a module 
installation Elxis will need to upload files on folder "modules". If you see "Unwriteable" you can change the permissions 
on directory to allow Elxis to be able write to it or, for maximum security, you may leave it unwriteable and make it 
writeable just before you are going to use it.';
public $DIRFPERM02 = 'In order for Elxis to function properly it needs folders <strong>cache</strong> 
	and <strong>tmpr</strong> to be writable. If they are not writeable please make them writeable.';
public $ELXIS_RELEASED = 'Bộ mã nguồn Elxis CMS là một phần mềm miễn phí được phát hành theo thỏa thuận và sự cấp phép của tổ chức mã nguồn mở GNU/GPL.';
public $INSTALL_LANG = 'Chọn ngôn ngữ cài đặt';
public $DISABLE_FUNC = 'Để đảm bảo an toàn cho trang web của bạn, chúng tôi khuyên bạn nên tắt các chức năng PHP này trong tệp tin php.ini trên server (nếu bạn không cần dùng tới các chức năng đó):';
public $FTP_NOTE = 'Nếu sau này bạn cho phép giao thức FTP, Elxis sẽ tự động phân quyền cho thư mục và tệp tin dù các thư mục đó đã được đặt ở chế độ chỉ đọc (read-only).';
public $OTHER_RECOM = 'Các gợi ý khác';
public $OUR_RECOM_ELXIS = 'Các khuyến cáo của chúng tôi để giúp bạn thoải mái hơn trong khi giao tiếp và làm việc với Elxis.';
public $SERVER_OS = 'Hệ điều hành Server';
public $HTTP_SERVER = 'HTTP Server';
public $BROWSER = 'Trình duyệt';
public $SCREEN_RES = 'Độ phân giải màn hình';
public $OR_GREATER = 'hoặc cao hơn';
public $SHOW_HIDE = 'Hiển thị/Ẩn';
public $SFMODALERT1 = 'PHP CỦA BẠN ĐANG CHẠY Ở CHẾ ĐỘ SAFE-MODE!';
public $SFMODALERT2 = 'Nhiều tính năng, thành phần và các gói mở rộng của Elxis CMS gặp nhiều vấn đề về tương thích khi chạy trong hệ safe mode.';
public $GNU_LICENSE = 'Giấy phép và thỏa thuận của GNU/GPL';
public $INSTALL_TOCONTINUE = '*** Để tiếp tục cài đặt Elxis, bạn cần phải đọc kỹ giấy phép của Elxis và nếu đồng ý với các điều khoản đã nêu, xin vui lòng đánh dấu vào ô kiểm ở bên dưới ***';
public $UNDERSTAND_GNUGPL = 'Tôi hiểu rằng phần mềm này được phát hành theo sự cấp phép của tổ chức mã nguồn mở GNU/GPL';
public $MSG_HOSTNAME = 'Hãy nhập vào tên của Host';
public $MSG_DBUSERNAME = 'Hãy nhập tên người sử dụng CSDL';
public $MSG_DBNAMEPATH = 'Nhập tên CSDL hoặc đường dẫn';
public $MSG_SURE = 'Bạn đã đảm bảo rằng các thiết lập trên đây là chính xác? \n Giờ đây Elxis sẽ thử chuyển đến CSDL với các thiết lập mà bạn đã khai báo ở trên';
public $DBCONFIGURATION = 'Cấu hình cơ sở dữ liệu';
public $DBCONF_1 = 'Hãy nhập vào tên hostname của server mà bạn đang cài đặt Elxis CMS';
public $DBCONF_2 = 'Chọn loại CSDL mà bạn muốn Elxis sẽ sử dụng';
public $DBCONF_3 = 'Nhập tên cơ sở dữ liệu (CSDL) hoặc đường dẫn . Để tránh các vấn đề khi khởi tạo CSDL bằng trình cài đặt Elxis, bạn cần phải đảm bảo rằng đã có sẵn một CSDL để tiến hành cài đặt.';
public $DBCONF_4 = 'Hãy nhập tên bản tham chiếu (prefix) mà bạn muốn dùng cho Elxis.';
public $DBCONF_5 = 'Nhập tên người sử dụng CSDL và mật khẩu CSDL. Hãy đảm bảo rằng bạn đã có sẵn tên người dùng và được quyền thực thi tất cả các tác vụ với CSDL đó.';
public $OTHER_SETTINGS = 'Các thiết lập khác';
public $DBTYPE = 'Loại CSDL';
public $DBTYPE_COMMENT = 'Thường là "MySQL"';
public $DBNAME = 'Tên CSDL';
public $DBNAME_COMMENT = 'Một vài host chỉ cho sử dụng duy nhất một tên CSDL cho mỗi một site. Do vậy, trong trường hợp đó bạn cần sử dụng các bảng tham chiếu (table prefix) để dành riêng cho site sử dụng Elxis CMS.'; 
public $DBPATH = 'Đường dẫn CSDL';
public $DBPATH_COMMENT = 'Một vài loại cơ sở dữ liệu như Access, InterBase hay FireBird thường yêu cầu đặt một tệp tin CSDL thay vì một tên CSDL. Trong trường hợp này, bạn có thể ghi nó vào đây để dẫn tới tệp tin này. Chẳng hạn như: /opt/firebird/examples/elxisdatabase.fdb';
public $HOSTNAME = 'Tên Host';
public $USLOCALHOST = 'Thường là "localhost"';
public $DBUSER = 'Tên người dùng CSDL';
public $DBUSER_COMMENT = 'Đôi lúc có thể là "root" hoặc một tài khoản nào đó được cung cấp bởi dịch vụ lưu trữ web hoặc do bạn tạo ra';
public $DBPASS = 'Mật khẩu CSDL';
public $DBPASS_COMMENT = 'Để đảm bảo an toàn cho trang web, hãy sử dụng một mật khẩu cho tài khoản MySQL của bạn';
public $VERIFY_DBPASS = 'Xác nhận mật khẩu CSDL';
public $VERIFY_DBPASS_COMMENT = 'Vui lòng gõ lại mật khẩu để xác nhận';
public $DBPREFIX = 'Tên tham chiếu cho CSDL';
public $DBPREFIX_COMMENT = 'Đừng sử dụng "old_" vì tên tham chiếu này sẽ được dùng để tạo các tệp tin sao lưu dự phòng';
public $DBDROP = 'Xóa các bảng đã có sẵn';
public $DBBACKUP = 'Sao lưu các bảng tham chiếu cũ';
public $DBBACKUP_COMMENT = 'Bất kỳ bảng tham chiếu sao lưu nào có sẵn từ các lần cài đặt Elxis trước đây đều được thay thế';
public $INSTALL_SAMPLE = 'Cài thêm dữ liệu mẫu';
public $SAMPLEPACK = 'Các gói dữ liệu mẫu';
public $SAMPLEPACKD = 'Elxis CMS cho phép bạn chỉ định và trình bày trang web của mình ngay trong lúc cài đặt bằng cách chọn lựa các gói dữ liệu mẫu phù hợp với bạn. Bạn cũng có thể chọn không cài bất kỳ gói dữ liệu mẫu nào (Không khuyến cáo).';
public $NOSAMPLE = 'Không cài (Không khuyến cáo)';
public $DEFAULTPACK = 'Theo mặc định của Elxis';
public $PASS_NOTMATCH = 'Mật khẩu CSDL không khớp với CSDL mà bạn đã cung cấp.';
public $CNOT_CONDB = 'Không thể kết nối với CSDL.';
public $FAIL_CREATEDB = 'Việc khởi tạo CSDL %s đã thất bại';
public $ENTERSITENAME = 'Hãy nhập tên trang web';
public $STEPDB_SUCCESS = 'Các bước trước đây đã hoàn tất. Giờ đây bạn có thể tiếp tục đi vào các chi tiết khác của website.';
public $STEPDB_FAIL = 'Có ít nhất một lỗi nghiêm trọng đã xảy ra trong suốt quá trình các bước cài đặt trước. Bạn không thể tiếp tục cài đặt ! vui lòng quay lại và sửa lại các thiết lập cho CSDL. Trình cài đặt Elxis đã thông báo lỗi như sau:';
public $SITENAME_INFO = 'Hãy gõ tên website của bạn. Tên này sẽ được dùng trong nội dung các e-mail giao dịch, do vậy hãy đặt một tên thật ý nghĩa.';
public $SITENAME = 'Tên trang web';
public $SITENAME_EG = 'Ví dụ: SLNA-FC FORUM';
public $OFFSET = 'Múi giờ';
public $SUGOFFSET = 'Múi giờ gợi ý';
public $OFFSETDESC = 'Múi giờ khác nhau giữa server và máy tính của bạn. Nếu bạn muốn đồng bộ website với múi giờ địa phương của mình thì hãy đặt một múi giờ thích hợp.';
public $SERVERTIME = 'Múi giờ server';
public $LOCALTIME = 'Múi giờ địa phương của bạn';
public $DBINFOEMPTY = 'Thông tin CSDL đang bỏ trống hoặc không chính xác!';
public $SITENAME_EMPTY = 'Bạn chưa đặt tên cho trang web';
public $DEFLANGUNPUB = 'Ngôn ngữ mặc định của giao diện người dùng cuối chưa được công bố!';
public $URL = 'Địa chỉ URL';
public $PATH = 'Đường dẫn';
public $URLPATH_DESC = 'Nếu URL và đường dẫn có vẻ đã chính xác, thì vui lòng đừng sửa chúng. Nếu không chắc, hãy liên hệ với nhà cung cấp dịch vụ Internet (ISP) người quản trị. Thường thì các giá trị hiển thị ở đây tương ứng với website của bạn.';
public $DBFILE_NOEXIST = 'Tệp tin CSDL không tồn tại !';
public $ADODB_MISSES = 'Không thấy các tệp tin ADOdb yêu cầu!';
public $SITEURL_EMPTY = 'Hãy nhập địa chỉ của website';
public $ABSPATH_EMPTY = 'Hãy nhập đầy đủ đường dẫn tới website của bạn';
public $PERSONAL_INFO = 'Các thông tin cá nhân';
public $YOUREMAIL = 'Địa chỉ e-mail của bạn';
public $ADMINRNAME= 'Tên thật của người quản trị';
public $ADMINUNAME = 'Tên tài khoản quản trị';
public $ADMINPASS = 'Mật khẩu quản trị';
public $CHANGEPROFILE = 'Sau khi cài đặt bạn có thể đăng nhập vào website mới, thay đổi các thông tin ở trên và thiết lập hồ sơ của bạn.';
public $FATAL_ERRORMSGS = 'Có ít nhất một lỗi nghiêm trọng đã xảy ra. Bạn không thể tiếp tục cài đặt ! Dưới đây là các thông báo lỗi của trình cài đặt Elxis CMS:';
public $EMPTYNAME = 'Bạn phải cung cấp tên thật của người quản trị.';
public $EMPTYPASS = 'Mật khẩu quản trị đang bỏ trống.';
public $VALIDEMAIL = 'Bạn phải cung cấp một địa chỉ e-mail hợp lệ cho tài khoản quản trị.';
public $FTPACCESS = 'Truy xuất FTP';
public $FTPINFO = 'Cho phép truy xuất qua giao thức FTP với các tệp tin và thư mục để giải quyết các vấn đề liên quan tới phân quyền tệp tin.	Nếu bạn cho phép truy xuất qua FTP, thì Elxis CMS sẽ được phép ghi và sửa đổi bất kỳ tệp tin/thư mục nào qua giao thức PHP. Trình cài đặt Elxis cũng sẽ lưu tệp tin cấu hình cuối cùng tới website của bạn, nếu không bạn vẫn có thể tạo và tải nó lên server bằng phương pháp thủ công.';
public $USEFTP = 'Sử dụng FTP';
public $FTPHOST = 'FTP host';
public $FTPPATH = 'Đường dẫn FTP';
public $FTPUSER = 'Tài khoản FTP';
public $FTPPASS = 'Mật khẩu FTP';
public $FTPPORT = 'Cổng FTP';
public $MOSTPROB = 'Có lẽ là:';
public $FTPHOST_EMPTY = 'Bạn phải cung cấp một FTP host';
public $FTPPATH_EMPTY = 'Bạn phải cung cấp một đường dẫn FTP (path)';
public $FTPUSER_EMPTY = 'Bạn phải cung cấp một tài khoản FTP (tên người dùng)';
public $FTPPASS_EMPTY = 'Bạn phải cung cấp một mật khẩu FTP';
public $FTPPORT_EMPTY = 'Bạn phải cung cấp một cổng FTP (port thường là 21)';
public $FTPCONERROR = 'Không thể kết nối FTP tới máy chủ';
public $FTPUNSUPPORT = 'Các thiết lập PHP của bạn không hỗ trợ kết nối FTP';
public $CONFSITEDOWN = 'Website đang tạm thời đóng cửa để bảo trì.<br />Vui lòng quay lại trong ít phút tới!<br /><br />This site is down for maintenance.<br />Please check back again soon.';
public $CONFSITEDOWNERR = 'Trang này tạm thời đóng cửa.<br />Vui lòng báo cho người quản trị (nếu cần)';
public $CONGRATS = 'Xin chúc mừng!';
public $ELXINSTSUC = 'Elxis CMS đã cài đặt thành công trên server của bạn.';
public $THANKUSELX = 'Rất cảm ơn bạn đã sử dụng và tín nhiệm Elxis,';
public $CREDITS = 'Giới thiệu';
public $CREDITSELXGO = 'Xin chân thành cám ơn Ioannis Sannos đã phát triển dự án Elxis (Elxis Team).';
public $CREDITSELXCO = 'Cám ơn các thành viên cộng đồng Elxis Community với sự hỗ trợ và các ý tưởng của họ đã giúp Elxis ngày một hoàn thiện hơn.';
public $CREDITSELXRTL = 'To Farhad Sakhaei (Elxis Community) for his contribution on making Elxis RTL compatible.';
public $CREDITSELXTR = 'Cám ơn các biên dịch viên về sự đóng góp của họ để giúp Elxis CMS tiếp cận với nhiều ngôn ngữ khác nhau, giúp chúng tôi trở nên thân thiện và tiện lợi hơn.';
public $OTHERTHANK = ' Xin cám ơn tới tất cả các nhà phát triển thuộc cộng đồng mã nguồn mở (Open Source) và những người sử dụng Elxis cho công việc của họ.';
public $CONFBYHAND = 'Trình cài đặt không thể lưu vào tệp tin cấu hình của bạn do các vấn đề về phân quyền truy cập tệp tin. Bạn sẽ phải upload các mã sao bằng thủ công. Nhấp vào vùng mã được đánh dấu và chép nó lại. Sau đó hãy dán nó vào một tệp tin PHP còn trống với tên là "configuration.php" và tải nó lên thư mục cài Elxis trên server của bạn. Chú ý: Tệp tin này phải lưu theo chuẩn UTF-8';
public $REMOVEINSTFOL = 'Hãy xóa toàn bộ thư mục "/installation" (chứ đừng có chỉ đổi tên nó) và sẵn sàng duyệt trang web của bạn!';
public $LANG_SETTINGS = 'Elxis có một bộ giao diện đa ngôn ngữ, cho phép bạn đặt các ngôn ngữ mặc định cho giao diện người dùng cuối và giao diện nền của người quản trị, và cũng cung cấp nhiều hơn một ngôn ngữ dành cho giao diện người dùng cuối. Chú ý rằng, sau này người quản trị của Elxis vẫn có thể thiết lập các ngôn ngữ riêng cho từng mô-đul, thành phần đơn lẻ để kết hợp với ngôn ngữ mặc định.';
public $DEF_FRONTL = 'Ngôn ngữ người dùng mặc định';
public $PUBL_LANGS = 'Ngôn ngữ xuất bản';
public $DEF_BACKL = 'Ngôn quản trị mặc định';
public $LANGUAGE = 'Ngôn ngữ';
public $SELECT = 'chọn';
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