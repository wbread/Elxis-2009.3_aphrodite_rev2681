<?php 
/**
* @version: 2009.3
* @copyright: Copyright (C) 2006-2011 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Frontend Language
* @author: Elxis Team
* @translator: Herve Genna
* @link: http://www.landstargroup.org
* @email: herve.genna@landstargroup.org
* @description: Korean front-end language for Elxis CMS
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


define('_LANGUAGE','ko'); //Two-letter language code
define('_ISO','charset=UTF-8'); //leave it as is!
define('_ENQUIRY','문의');
define('_ENQUIRY_TEXT','이것은 이메일을 통한 문의입니다. %s from:');
define('_COPY_TEXT','다음은 고객이 보낸 메시지의 복사본입니다.%s via %s  ');
define('_COPY_SUBJECT','사본: ');
define('_THANK_MESSAGE','귀하의 이메일에 감사드립니다.');
define('_CLOAKING','이메일 주소는 스펨 보트에 의해서 보호되고 있습니다, 귀하의 자바스크립트를 활성화 해주세요');
define('_CONTACTS_DESC','이 웹사이트에 대한 연락처 목록입니다.');
define('_CONTACT_TITLE','연락처');
define('_EMAIL_DESCRIPTION','이 연락처로 이메일을 보내기:');
define('_NAME_PROMPT',' 이름을 이력해주세요');
define('_EMAIL_PROMPT',' 이메일 주소');
define('_MESSAGE_PROMPT',' 내용을 적어주세요');
define('_SEND_BUTTON','보내기');
define('_CONTACT_FORM_NC','양식을 작성하시여 유효한지 확인하시기 바랍니다.');
define('_CONTACT_TELEPHONE','일반 연락처');
define('_CONTACT_MOBILE','휴대폰 연락처');
define('_CONTACT_FAX','팩스');
define('_CONTACT_POSITION','직위');
define('_CONTACT_ADDRESS','주소');
define('_CONTACT_MISC','정보 및 내용');
define('_CONTACT_SEL','연락처를 선택해주세요');
define('_CONTACT_NONE','연락처의 세부내용이 없습니다.');
define('_EMAIL_A_COPY','메시지의 사본을 귀하의 메일주소로 보내기');
define('_CONTACT_DOWNLOAD_AS','정보 다운로드');
define('_VCARD','V카드');
define('_AUTHOR_BY', '참여자');
define('_WRITTEN_BY', '기술자');
define('_LAST_UPDATED', '최신업데이트');
define('_BACK','뒤로');
define('_LEGEND','전설');
define('_DATE','날짜');
define('_ORDER_DROPDOWN','주문');
define('_HEADER_TITLE','제품 제목');
define('_HEADER_AUTHOR','저자');
define('_HEADER_SUBMITTED','제출되었습니다');
define('_E_EDIT','수정');
define('_E_ADD','추가');
define('_E_WARNUSER','취소하거나 현재의 변경사항을 저장합니다');
define('_E_WARNTITLE','컨텐트 항목에 제목이 있어야합니다');
define('_E_WARNCAT','카테고리를 선택하십시오');
define('_E_CONTENT','컨텐트');
define('_E_TITLE','제목');
define('_E_CATEGORY','카테고리');
define('_E_INTRO','진입문자');
define('_E_MAIN','기본문자');
define('_E_MOSIMAGE','삽입 {mosimage}');
define('_E_IMAGES','이미지');
define('_E_GALLERY_IMAGES','갤러리 이미지');
define('_E_CONTENT_IMAGES','컨텐추 이미지');
define('_E_EDIT_IMAGE','수정 이미지');
define('_E_INSERT','삽입');
define('_E_UP','위');
define('_E_DOWN','아래');
define('_E_REMOVE','제거');
define('_E_SOURCE','출처');
define('_E_ALIGN','정렬');
define('_E_ALT','대체 텍스트');
define('_E_BORDER','경계');
define('_E_CAPTION','캡션');
define('_E_APPLY','적용');
define('_E_PUBLISHING','출력');
define('_E_STATE','상태');
define('_E_AUTHOR_ALIAS','저자별칭');
define('_E_ACCESS_LEVEL','액세스 수준');
define('_E_START_PUB','출력시작:');
define('_E_FINISH_PUB','출력종료:');
define('_E_SHOW_FP','초기화면에서 보여줍니다:');
define('_E_HIDE_TITLE','제품제목숨기기:');
define('_E_METADATA','메타데이타');
define('_E_KEYWORDS','키워드');
define('_E_SUBJECT','주제:');
define('_E_EXPIRES','유효기간:');
define('_E_VERSION','버젼:');
define('_E_ABOUT','관련사항');
define('_E_CREATED','만든날짜:');
define('_E_LAST_MOD','최종 수정일:');
define('_E_HITS','조회수');
define('_E_SAVE','저장');
define('_E_REGISTERED','등록된 사용자만 가능합니다');
define('_E_ITEM_INFO','상품정보');
define('_E_ITEM_SAVED','항목 성공적으로 저장되었습니다.');
define('_SECTION_ARCHIVE_EMPTY','이 섹션에 대한 현재 보관된 항목이 없습니다');
define('_CATEGORY_ARCHIVE_EMPTY','이 범주에 대한 현재 보관된 항목이 없습니다 ');
define('_HEADER_SECTION_ARCHIVE','섹션 아카이브');
define('_HEADER_CATEGORY_ARCHIVE','카테고리 아카이브');
define('_ARCHIVE_SEARCH_FAILURE','보관된 항목이 없습니다%s %s'); //Note:  values are month then year
define('_ARCHIVE_SEARCH_SUCCESS','여기에 보관된 항목의 위한 것입니다%s %s');// Note: values are month then year
define('_FILTER','필터');
define('_READ_MORE','더 읽기...');
define('_READ_MORE_REGISTER','더 읽기 위하여 회원 등록합니다...');
define('_MORE','기타...');
define('_ON_NEW_CONTENT', "새 콘텐츠 항목으로 제출되었습니다[ %s ] 항목 [ %s ] 섹션 [ %s ] 그리고 카테고리 [ %s ]" ); 
define('_SEL_CATEGORY','- 모든 카테고리-');
define('_SEL_SECTION','- 모든섹션-');
define('_SEL_AUTHOR','- 모든 작성자 -');
define('_SEL_POSITION','- 모든 게재 순위-');
define('_SEL_TYPE','- 모든 종류 -');
define('_EMPTY_CATEGORY','이 카테고리는 비어 있습니다');
define('_EMPTY_BLOG','항목이 표시가 없습니다');
define('_NOT_EXIST','귀하가 액세스하려는 페이지가 존재하지 않습니다.<br />메인 메뉴에서 페이지를 선택하여 지십시오.');
define('_NO_CATEGORIES','카테고리를 표시할 수 없습니다!');
define('_ALREADY_LOGIN','귀하는 이미 로그인되어 있습니다!');
define('_LOGOUT','로그아웃하시려면 클릭하십시오');
define('_LOGIN_TEXT','전체 액세스 권한을 얻으려면 로그인 및 비밀 번호 입력란을 사용하여 주세요');
define('_LOGIN_SUCCESS','귀하는 성공적으로 로그인 되었습니다');
define('_LOGOUT_SUCCESS','귀하는 성공적으로 로그아웃 되었습니다 ');
define('_LOGIN_DESCRIPTION','회원 전용  페이지에 이용을 원하시면 먼져 로그인 하여 주세요');
define('_LOGOUT_DESCRIPTION','귀하는 현재 회원 전용 페이지에 로그인 되었습니다 ');
define('_NEW_MESSAGE','비공개 메시지가 도착하였습니다');
define('_MESSAGE_FAILED','사용자가 메시지 사서함을 잠가 놓았습니다, 메시지를 성공적으로 보내지 못 하였습니다.');
define('_ELANG_ASC','오름차순');
define('_ELANG_DESC','내림차순');
define('_ELANG_THEMODULE', '모듈');
define('_ELANG_EDITANOTHER', '현재 다른 사용자에 의해 변경 되었습니다');
define('_ELANG_NEVER', '절대');
define('_ELANG_NOIMG', '이미지 아님');
define('_E_NOIMAGES', '이미지들이 아님');
define('_E_DBTYPE', 'DB 유형');
define('_E_DBVERSION', 'DB 버젼');
define('_E_ENABLED', '활성화됨');
define('_E_DISABLED', '비활성화됨');
define('_E_LANGUAGES', '언어');
define('_E_POWEREDBY', 'Powered by Elxis 2009');
define('_E_FEED_NAME','피드이름');
define('_E_NUM_ARTICLES','기사');
define('_E_FEED_LINK','피드링크');
define('_E_SEARCH','검색');
define('_E_SEARCH_KEYWORD','검색 키워드');
define('_E_SEARCH_TOTALF','전체 <strong>%d</strong> 검색결과.');
define('_E_SEARCH_AT','검색<strong>%s</strong> at');
define('_E_NORESULTS','검색 결과가 없습니다');
define('_E_IGNORED_KEY','하나 이상의 일반적인 단어는 검색시 무시');
define('_E_ANYWORDS','모든단어');
define('_E_ALLWORDS','전체 단어');
define('_E_PHRASE','정확한 문구');
define('_E_NEWEST_FIRST','가장 최근');
define('_E_OLDEST_FIRST','가장 최초');
define('_E_MOST_POPULAR','가장 인기있는순서');
define('_E_ALPHABETICAL','가나다순');
define('_E_SECTIONCATEG','섹션/카테고리');
define('_WEBLINKS_TITLE','웹 링크');
define('_E_WEBLINKS_DESC','웹링크 카테고리중 하나를 선택 후 방문하고자 하는 사이트의 URL을 선택하세요.');
define('_E_WEBLINK','웹 링크');
define('_E_SECTION','섹션');
define('_E_SUBMIT_LINK','웹 링크 제출');
define('_E_URL','URL');
define('_E_THEWEBLINK', '웹링크');
define('_E_MUSTURL', '귀하는 URL을 제공합니다');
define('_E_ALL_LANGUAGES', '모든 언어');
define('_E_SCREENSHOT', '스크린 샷');
define('_E_TIME','시간');
define('_E_MEMBERS','회원');
define('_E_NEWS','뉴스');
define('_E_LINKS','웹 링크');
define('_E_VISITORS','방문자');
define('_E_WE_HAVE', '우리의  ');
define('_E_AND', '그리고');
define('_E_GUEST_COUNT','1 게스트');
define('_E_GUESTS_COUNT','%s 게스트');
define('_E_MEMBER_COUNT','1 회원');
define('_E_MEMBERS_COUNT','%회원');
define('_E_ONLINE',' 온라인');
define('_E_NO_ONLINE','온라인상 사용자가 없습니다');
define('_NOT_AUTH','귀하는 리소르를 볼 권한이 없습니다.');
define('_DO_LOGIN','로그인 해야합니다.');
define('_HIGHER_ACCESS', '해당 리소스는 귀하보다 높은 액세스 수준이 필요합니다.');
define('_VALID_AZ09',"유효한 내용을 입력해주십시오 %s.  더 이상의  공간이 없습니다 %d 영문자와 숫자를 이용하여 주십시오 0-9,a-z, or A-Z");  //USE GEMINI, REMOVE IN 2007
define('_CMN_SHOW','보기');
define('_CMN_HIDE','숨기기');
define('_CMN_NAME','이름');
define('_CMN_DESCRIPTION','상세설명');
define('_CMN_SAVE','저장');
define('_CMN_PRINT','프린트');
define('_CMN_PDF','PDF');
define('_CMN_EMAIL','이메일');
define('_ICON_SEP','|');
define('_CMN_PARENT','부모');
define('_CMN_ORDERING','주문');
define('_CMN_ACCESS','액세스 수준');
define('_CMN_SELECT','선택');
define('_CMN_NEXT','다음');
define('_CMN_NEXT_ARROW'," &gt;&gt;");
define('_CMN_PREV','이전');
define('_CMN_PREV_ARROW',"&lt;&lt; ");
define('_CMN_SORT_NONE','정렬 안함');
define('_CMN_SORT_ASC','오름차순 정렬');
define('_CMN_SORT_DESC','내림차순 정렬');
define('_CMN_NEW','새로운');
define('_CMN_ARCHIVE','보관');
define('_CMN_UNARCHIVE','보관해제');
define('_CMN_TOP','맨위');
define('_CMN_BOTTOM','맨 아래');
define('_CMN_PUBLISHED','게시');
define('_CMN_UNPUBLISHED','게시되지 않은');
define('_CMN_EDIT_HTML','수정 HTML');
define('_CMN_EDIT_CSS','수정 CSS');
define('_CMN_DELETE','삭제');
define('_CMN_FOLDER','폴더');
define('_CMN_SUBFOLDER','하위폴더');
define('_CMN_OPTIONAL','선택사항');
define('_CMN_REQUIRED','필수');
define('_CMN_CONTINUE','계속');
define('_CMN_NEW_ITEM_LAST','새로운 항목은 맨 아래를 기본으로 합니다. 이 항목을 저장 후 주문 방법은 변경할 수 있습니다.');
define('_CMN_NEW_ITEM_FIRST','새로운 항목은 맨 아래를 기본으로 합니다. 이 항목을 저장 후 주문 방법은 변경할 수 있습니다.');
define('_LOGIN_INCOMPLETE','사용자 이름과 비밀 번호 입력란을 작성하십시오.');
define('_LOGIN_BLOCKED','귀하의 로그인이 차단되었습니다. 관리자에게 문의하시기 바랍니다.');
define('_LOGIN_INCORRECT','잘못된 사용자의 이름이나 암호입니다. 다시 시도해주십시오.');
define('_LOGIN_NOADMINS','귀하는 로그인할 수 없습니다. 관리자의 설정이 없습니다.');
define('_CMN_JAVASCRIPT','경고 Java Script가 제대로 작동하도록 설정해야합니다.');
define('_CMN_IFRAMES', '이 옵션은 제대로 작동하지 않습니다. 귀하의 브라우저가 지원하지 않는 인라인 프레임 입니다.');
define('_INSTALL_WARN','보안을위해  페이지를 새로고침 하거나 모든 파일 및 하위폴더를 삭제해 주시기 바랍니다.');
define('_TEMPLATE_WARN','<span style="color:#F00; font-weight:bold;">템플릿파일을 찿을 수 없습니다.');
define('_HANDLER','정의되지 않은 처리 유형입니다.');
define('_E_SELIMAGE','이미지 선택');
define('_TOC_JUMPTO','기술 자료 색인');
define('_E_SECTION_LIST','섹션리스트');
define('_E_SECTION_BLOG','섹션블러그');
define('_E_CATEGORY_LIST','카테고리 리스트');
define('_E_CATEGORY_BLOG','블러그 카테고리');
define('_BUTTON_VOTE','투표');
define('_BUTTON_RESULTS','결과');
define('_USERNAME','사용자명');
define('_LOST_PASSWORD','비밀 번호 알림');
define('_PASSWORD','비밀번호');
define('_BUTTON_LOGIN','로그인');
define('_BUTTON_LOGOUT','로그아웃');
define('_NO_ACCOUNT','아직 회원가입을 안하셨나요?');
define('_CREATE_ACCOUNT','계정만들기');
define('_VOTE_POOR','좋지않음');
define('_VOTE_BEST','좋음');
define('_USER_RATING','사용자 평가');
define('_RATE_BUTTON','평가');
define('_REMEMBER_ME','다시 알림');
define('_PN_PAGE','페이지');
define('_PN_OF','의');
define('_PN_START','시작');
define('_PN_END','끝');
define('_PN_DISPLAY_NR','디스플레이 #');
define('_PN_RESULTS','결과');
define('_EMAIL_TITLE','이메일 친구');
define('_EMAIL_FRIEND','친구에게 이 이메일 보내기');
define('_EMAIL_FRIEND_ADDR','친구의 이메일');
define('_EMAIL_YOUR_NAME','귀하의 이름');
define('_EMAIL_YOUR_MAIL','귀하의이메일 주소');
define('_SUBJECT_PROMPT',' 메시지 제목');
define('_BUTTON_SUBMIT_MAIL','이메일 보내기');
define('_EMAIL_ERR_NOINFO','귀하의 이메일과 받는 사람의 유효한 이메일 주소를 입력해야합니다.');
define('_EMAIL_MSG',"The following page from the %s web site has been sent to you by %s ( %s ).
You can access it at the following url:
%s");
define('_EMAIL_INFO','보낸사람');
define('_EMAIL_SENT','이항목을 보냈습니다.');
define('_PROMPT_CLOSE','창닫기');
define('_E_ALERT_ENABLED','쿠기가 활성화되어 있어야 됩니다!');
define('_ALREADY_VOTE','귀하는 오늘 설문조사에 대한 투료를 했습니다!');
define('_E_NO_SELECTION','아니요 선택 후 다시 시도해 주십시오.');
define('_THANKS','투표해주셔서 감사합니다!');
define('_E_SELECT_POLL','목록에서 설문조사를 선택해 주십시오.');
define('_JAN','1월');
define('_FEB','2월');
define('_MAR','3월');
define('_APR','4월');
define('_MAY','5월');
define('_JUN','6월');
define('_JUL','7월');
define('_AUG','8월');
define('_SEP','9월');
define('_OCT','10월');
define('_NOV','11월');
define('_DEC','12월');
define('_POLL_TITLE','투표결과');
define('_SURVEY_TITLE','투표제목:');
define('_E_NUM_VOTERS','투표자수');
define('_E_FIRST_VOTE','최초투표');
define('_E_LAST_VOTE','지난 투표');
define('_E_SEL_POLL','선택 설문 조사:');
define('_E_NOPOLL_RESULTS','설문조사에 대한 결과가 없습니다.');
define('_E_ERROR_PASS','죄송합니다, 해당 사용자가 발견되었습니다.');
define('_E_NEWPASS_MSG','사용자 계정에 관련된 이메일을 발송하였습니다.\n'
.'새로운 사용자에 의해 $mosConfig_live_site 새로운 비밀번호를  요청하는 메세지를 받았습니다.\n\n'
.' 귀하의 해로운 비밀번호는: $newpass\n\n이것에 대해 문의하지 않으셔도 문제없습니다.'
.' 귀하의 로그인시 에러가 발생하였습니다.'
.' 귀하가 원하시는 새로운 비밀번호로 변경하십시오.');
define('_E_NEWPASS_SUB',"새로운 비밀번호 %s");
define('_E_NEWPASS_SENT','새로운 사용자 암호가 생성 및 전송 되었습니다!');
define('_E_REGWARN_NAME','귀하의 이름을 입력하세요.'); //USE GEMINI, should be removed
define('_E_REGWARN_UNAME','사용자 이름을 입력하세요.'); //USE GEMINI, should be removed
define('_E_REGWARN_MAIL','유효한 사용자 이름을 입력하세요.'); //USE GEMINI, should be removed
define('_REGWARN_PASS','올바른 암호를 입력하세요 -- 6글자이상, 공백없이숫자와 문자는 다음에 해당하는 내용만 입력 가능합니다.0-9, a-z, or A-Z');
define('_E_REGWARN_VPASS1','비밀번호를 확인하십시요.');
define('_E_REGWARN_VPASS2','비밀번호가 일치하지 않습니다.  확인 후 다시 시도해주십시오.');
define('_E_REGWARN_INUSE','이 사용자 이름/비밀 번호를 이미 사용중입니다. 다른 계정으로 시도하십시오.'); //USE GEMINI, should be removed
define('_E_REGWARN_EMAIL_INUSE', '이 메일은  이미 등록되어 있습니다. 비밀번호를 잊었을경우  “비밀번호 알림” 을  클릭하시면 새 비밀번호를 메일로 발송해 드립니다.'); //USE GEMINI, should be removed
define('_E_SEND_SUB','계정 세부 정보 %s at %s');
define('_USEND_MSG_ACTIVATE', '안녕하세요. %s,

Thank you for registering at %s. Your account has been created but as a precaution, it must be activated by you before you can use it.
To activate the account, click on the following link or copy and paste it in your browser:
%s

After activation you may login to %s using the following username and password:

사용자 이름 - %s
비밀번호- %s');
define('_USEND_MSG', "안녕하세요 %s,

푸켓랜드스타에 회원등록을 진심으로 축하드립니다. %s.     

현재 로그인 상태입니다. %s 등록되어 있는 사용자 이름과 비밀번호를 이용해주십시오.");
define('_USEND_MSG_NOPASS','안녕하세요 $name,\n\n이미 사용자로 등록 되어 있습니다. $mosConfig_live_site.\n'
.'사용자 로그인을 해주세요 $mosConfig_live_site 사용자이름과 패스워드로 등록.\n\n'
.'이 메시지에 회신하지 마십시오. 이 항목은 자동으로 생성되며 정보 목적으로만 사용됩니다. \n');
define('_ASEND_MSG','안녕하세요 %s,

새로운 사용자로 등록되었습니다 %s.
이 이메일은 사용자의 세부사항을 포함합니다.:

이름- %s
이메일 - %s
사용자 이름 - %s

이 메시지에 회신하지 마십시오. 이 항목은 자동으로 생성되며 정보목적으로만 사용 됩니다.');
define('_REG_COMPLETE', '등록 완료');
define('_REG_NOWLOGIN', '로그인 하십시오.');
define('_REG_COMPLETE_ACTIVATE', '귀하의 계정이 생성되었습니다. 활성화 링크가 이메일로 전송되었습니다.'
.'귀하가 입력한 주소이니다. 인증 링크를 클릭하여 로그인을 먼저하주세요. 계정을 활성화 할 수 있습니다.');
define('_REG_ACTIVATE_COMPLETE', '정품인증완료 및 활성화를 마쳤습니다!');
define('_REG_ACACTNOWLOGIN', '귀하의 계정이 성공적으로 활성화 되었습니다. 이제 귀하의 사용자 이름과 비밀 번호를 이용하여 로그인하실 수 있습니다.');
define('_REG_COMPLETE_NOPASS','등록이 성공적으로 이루어졌습니다.<br />로그인 하시겠습니까?'); //Is this used?
define('_REG_ACTIVATE_NOT_FOUND', '잘못된 활성화 링크입니다. 이미 계정이 없거나 이미 다른 사용자가 있습니다 !  .');
define('_REG_TRYAGAIN_SECS', '몇 초 후에 다시 시도해보십시오!');
define('_E_LOSTPASS','비밀번호를 잊으셨나요?');
define('_NEW_PASS_DESC','사용자 이름과 이메일주소를 입력하신 후 보내기 단추를 클릭하세요. '
.'귀하는 곧 새 비밀 번호를 받게됩니다. 사이트에 액세스하려면 새 암호를 사용하여 주세요.');
define('_BUTTON_SEND_PASS','비밀번호 보내기');
define('_E_REGISTRATION','등록');
define('_E_FIELDS_REQUIRED','(*)표 표시된 입력란은 필수입니다.');
define('_E_SEND_REG','등록 보내기');
define('_SENDING_PASSWORD','비밀 번호는 위의 이메일 주소로 발송됩니다.'
.' 새로운 비밀 번호로 로그인 하실 수 있으며, 원하시면 변경도 가능합니다.');
define('_NEWSFLASH_BOX','특보!');
define('_MAINMENU_BOX','메인 메뉴');
define('_UMENU_TITLE','사용자 메뉴');
define('_E_HI','안녕하세요');
define('_SAVE_ERR','모든 입력란을 작성하십시오.');
define('_THANK_SUB','제출해 주셔서 감사합니다. 이것은 사이트에 게시되기 전에 검토하게 됩니다.');
define('_E_UPSIZE','귀하의 업로드 파일 크기는 15kb이하로 제한됩니다.');
define('_E_UPEXISTS','이미지 $userfile_name 이 이미 존해합니다. 파일 이름을 바꾼 후 다시 시도하십시오.');
define('_E_UPCOPY_FAIL','복사하지 못했습니다.');
define('_E_UPTYPE_WARN','귀하는GIF/JPG/PNG / JPEG종류의 파일만 업로드 하실 수 있습니다.');
define('_MAIL_SUB','사용자가 제출하였습니다.');
define('_E_NEWSUBBY', '사용자에 의해 새로운 제안이 만들어 졌습니다. %s');
define('_E_TYPESUB', '제출유형:');
define('_E_LOGINAPPR', '관리자가 귀하의 제안을 검토, 승인 하시길 원하시면 로그인 하여주십시오.');
define('_E_DONTRESPOND', '본 메시지에 응답하지 않으셔도 자동 생성됩니다.  귀하의 정보는 오직 정보 제공의 목적으로만 사용됩니다. ');
define('_PASS_VERR1','비밀번호 변경을 하기위해 다시한번 암호를 입력하여 주십시오.');
define('_PASS_VERR2','변경할 경우 비밀번호와 비밀번호 확인이 일치나는지 확인 하십시오 .');
define('_UNAME_INUSE','이 사용자 이름이 이미 사용 중입니다.');
define('_E_UPDATE','업데이트');
define('_E_USRDET_SAVED','귀하의 설정이 저장되었습니다.');
define('_USER_LOGIN','사용자 로그인');
define('_E_ALL','모두');
define('_E_LOGGEDIN','로그인');
define('_E_PROF_NOTEXIST','요청한 프로필이 존재하지 않습니다!');
define('_E_REQFIELDS_EMPTY','하나 이상의 필수 입력란이 비어 있습니다.');
define('_E_EDIT_YDETAILS','귀하의 세부 정보 를 수정합니다.');
define('_E_VERIFY_PASS','비밀번호 확인');
define('_E_SUBMIT_SUC','제출 성공');
define('_E_SUBMIT_SUCDESC','항목이 사이트 관리자에게 제출되었습니다. 사이트에 게시되기전에 검토하게 됩니다.');
define('_E_WELCOME','환영합니다!');
define('_E_WELCOME_DESC','저희 사이트의 사용자가 되신 것을 환영합니다.');
define('_E_ALL_CHECKED_IN','모든 항목이 확인 되었습니다.');
define('_E_CHECK_TABLE','확인 테이블');
define('_E_CHECKED_IN','체크인');
define('_CHECKED_IN_ITEMS',' 아이템');
define('_E_PASS_MATCH','비밀번호가 일치하지 않습니다.');
define('_E_VIEW_PROFILE','프로필 보기');
define('_E_MEMBERS_LIST','회원리스트');
define('_E_USER_PROFILE','사용자 프로필');
define('_E_REGDATE','등록일자');
define('_E_EDIT_PROFILE','프로필 수정');
define('_MAINMENU_HOME','* 이 메뉴의 [mainmenu] 는 사이트의 기본 홈페이지입니다. *'); //Is this needed in front-end?
define('_MAINMENU_DEL','* 귀하는 이 프로그램을 삭제할 수 없습니다. Elxis 프로그램이 정상적으로 작동하지 않을 수 있습니다. *'); //Is this needed in front-end?
define('_MENU_GROUP','* 하나 이상의 메뉴가 보여질 수 있습니다. *'); //Is this needed in front-end?
define('_E_SECCODE', '보안코드');
define('_E_TYPE_SECCODE', '보안코드 유형');
define('_E_INV_SECCODE', '잘못된 보안코드 입니다!');
define('_E_LANGUAGE', '언어');
define('_REG_VISITPROF', '귀하의 개인 정보를 수정하려면 로그인 후 프로필 페이지를 방문하여 주십시오.');
define('_E_PREFLANG', '원하시는 언어');
define('_E_STATUS', '상태');
define('_E_AVATAR', '아바타');
define('_E_UPLOADNEW', '새로운 업로드');
define('_E_WEBSITE', '웹사이트');
define('_E_BIRTHDATE', '생일');
define('_E_GENDER', '성별');
define('_E_MALE', '남성');
define('_E_FEMALE', '여성');
define('_E_LOCATION', '위치');
define('_E_OCCUPATION', '직업');
define('_E_SIGNATURE', '사인');
define('_ELX_ERROR', '에러');
define('_ELX_WARNING', '주의');
define('_REG_INVACTLINK', '잘못된 활성화 링크입니다!');
define('_E_BASICINFO', '기본 정보');
define('_E_ADDINFO', '추가 정보');
define('_E_USERGROUP', '사용자 그룹');
define('_E_AGE', '나이');
define('_E_WEHAVEREG', '저희 사이트는  <b>%s</b> 총회원이 등록되어 있습니다.');
define('_E_CLTOGGLORD', '머리글 정렬을 오름 차순이나 내림차순으로 변경하시고자 하시면다시 클릭하십시오 .');
define('_E_RANDOMUSERS', '임의의 사용자');
define('_E_USERSAREA', '사용자 영역');
define('_E_WEBLINKNA','귀하는 웹링크를 제출하실 수 없습니다!');
define('_E_WEBLINKADDH','새로운 웹링트를 제출 하시려면 아래 양식을 이용하세요.');
define('_E_REGDISABLED', '사용자 등록이 비활성화되어 있습니다!');
define('_E_NOREMPASS', '비밀번호를 기억하지 못하신다면 귀하의 프로필에서 새로운 비밀번호를 편집하세요.');
define('_E_RPASS_NADMIN', '사용자 %s 로부터 새로운 비밀번호 알림 서비스를 받았습니다. 새로운 비밀번호가 정상적으로 생성되었고 고객의 이메일로 발송되었습니다. '
.'변경사항에 대한 내용 확인을 원하지 않으시는 경우 USERS_RPASSMAIL 소프트 디스크에서 no를 선택해주십시오.');
define('_E_NOCPASSADM', 'For safety reasons it is not allowed for Super Administrators to reset their password using '
.'the Password Reminder form. Do so using a database manager such as phpMyAdmin and phpPgAdmin.');
define('_E_ACCACTIV', '계정 활성화');
define('_CONTACT_NOFOUND', '요청하신 문의 내용을 찿을 수 없거나 귀하는 해당 내용에 액세스할 수 없습니다.');
define('_PAGE_NOFOUND', '요청하신 페이지를 찿을수 없거나 귀하는 해당 내용에 액세스할 수 없습니다.');
define('_POLL_NOPOLLS', '설문내용이 없습니다.');
define('_POLL_VOTES', '투표');
define('_POLL_PAST', '과거 설문 조사');
define('_POLL_LOCKALERT', '이 설문 내용에 대한 투표는 더 이상은 진행 되지 않습니다.');
define('_POLL_POLLS', '여론조사');
define('_E_PAGE_NOTFOUND', '죄송합니다, 요청하신 페이지를 찿을 수 없습니다.');
define('_E_RETURNHOME', '홈 페이지로 돌아가기');
define('_E_VISITURLS', '다음 페이지 중 하나를 방문하여 주십시오');
define('_E_RELLINKS', '관련 링크');
define('_E_RATING_NOALLOW','평가 기사는 허용되지 않습니다!');
define('_E_VOTE_OUTRATE','귀하의 투표가 유효하지 않습니다!');
define('_E_VOTE_INVALID','귀하의 계정이 존재하지 않거나 귀하는 해당 내용에 액세스할 수 없습니다.');
define('_E_CONTENTSUB','콘텐프 케출');
define('_E_CONTENTSUBD1','이 페이지에서는 새로운 내용을 추가하거나 기존 편집이 가능합니다 .');
define('_E_CONTENTSUBD2','문서가 발행되면 관리자는 더  이상 수정 및 편집을 할 수 없습니다.!');
define('_E_SUBCON_NOALL','당신은 컨텐츠를 작성 할 수 없습니다!');
define('_E_CURARTICLYOU','현재로서는<strong>%d</strong>귀하가  쓰신 기사내용이 없습니다 .');
define('_E_SUBCONWAIT','승인을 기다리는 제출문서:');
define('_E_LASTPUBART','귀하가 마지막으로 기재하신 5개의 기사:');
define('_E_ADDCONTENT','콘텐츠 추가');
define('_E_EDITCONTENT','콘텐스 수정');
define('_E_SUGSECTION','추천 섹션');
define('_E_SUGCATEGORY','권장 카테고리');
define('_E_COMMENTS','댓글');
define('_E_REGAGREE','등록 계약');
define('_E_AGREE_REGTERM','나는 이용약관을 읽었으며 드록 이용 약관에 동의합니다.');
define('_E_MUSTC_RAGREE','당신은 등록 계약의 약관에 따라야합니다!');
define('_E_AUTONOMOUSPG','자체 페이지');
define('_E_ARCHIVED','보관');
define('_E_CHECKIN','체크-인');
define('_E_ALSOREAD','읽기');
define('_E_SPELL','맞춤법');

//elxis 2008.1
define('_E_SYNDICATE','신디케이트');
define('_E_LATESTNEWS','최근 뉴스');
define('_E_STATISTICS','통계');
define('_E_WHOSONLINE','현재 온라인 사용자');
define('_E_CHOOSETEMP','템플릿 선택');
define('_E_SECTIONS','섹션');
define('_E_RANDOMIMG','무작위 이미지');
define('_E_BANNERS','배너');
define('_REG_COMPLETE_MANACT', '귀하의 계정이 정상적으로 만들어 졌습니다. 관리자가 수동으로 귀하의 등록을 승인하고 귀하의 이메일로 통지 됩니다.');

//elxis 2009.0
define('_E_COMMENT', '댓글'); //(noun, i.e. 1 comment)
define('_E_VISITOR', '방문자');
define('_E_NOCOMMENTS', '댓글이 없습니다.');
define('_E_FIRSTCOMMENT', '이 문서에 댓글을 달아주세요!');
define('_E_MUSTLOGTOCOM', '댓글을 작성하시려면 먼져 로그인 해주세요.');
define('_E_POSTCOMMENT', '댓글 달기');
define('_E_COMCNOTEMPTY', '귀하의 댓글은 비워둘 수 없습니다!');
define('_E_COMPUBREV', '귀하의 댓글은 검토한 후 게시됩니다');
define('_E_ACCOUNT_EXPIRED', '귀하의 계정이 만료되었습니다!');
define('_E_ACCOUNT_EXPDATE', '계정 만료일');

//elxis 2009.2
define('_E_WONTPUBLISHED', '이것은 게시되지 않습니다');
define('_E_NOTIFYREPLY', '전자메일을 통해 알려드립니다.');
define('_E_NEWCOMMENT', '새로운 댓글');
define('_E_NEWCOMSARWATCH', "귀하의 댓글이 정상적으로 제출되었습니다 %s");
define('_E_STOPRECNOTIF', '이 문서에 대한 댓글에 대한 통보를 더 이상 받고싶지 않습니다.');
define('_E_EMAILNOTIFSTOP', '이 기사에 대한 전자 메일 알림이 중단 됩니다.');

?>