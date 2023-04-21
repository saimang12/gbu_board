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

<header>
    <h1>
        <a href="/">내가만든 홈페이지</a>
    </h1>
    <nav>
        <ul>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/m011.php">회사소개</a></li>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/m012.php">오시는길</a></li>
            <li><a href="/bbs/board.php?bo_table=qa">문어게시판</a></li>
            <li><a href="/bbs/board.php?bo_table=notice">알려드린다.</a></li>
            <li><a href="/bbs/board.php?bo_table=gallery">사진갤러리</a></li>
        </ul>
    </nav>
    <div class="num">
    <?= $num ?> 번 째 페이지임...
    </div>

<script>
    var num = <?= $num ?>;
    $('nav li').eq(num-1).addClass('on')
</script>
<style>
    li>a {
        font-size: 50px;
    }

    li.on>a {
        font-size: 100px;
    }
</style>

</header>