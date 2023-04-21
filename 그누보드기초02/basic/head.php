<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<div class="Wrap">
        <header id="header">
            <div class="inner">
                <h1>
                    <a href="/">
                        <img src="<?php echo G5_THEME_URL; ?>/img/logo.png" alt="">
                        <i class="fa fa-bath"></i> home</a>
                </h1>
                <nav>
                    <ul>
                        <li><a href="/bbs/board.php?bo_table=free">자유게시판</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                        <li><a href="/bbs/board.php?bo_table=gallery">갤러리</a></li>
                        <li><a href="/adm" target="_blank">관리자</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bg">
                
            </div>
        </header>