<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
            <section class="mainVisual">
                <div class="main_slide">
                    <div class="itm">01</div>
                    <div class="itm">02</div>
                    <div class="itm">03</div>
                </div>
            </section>
        </main>
<?php
include_once(G5_THEME_PATH.'/tail.php');