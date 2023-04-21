<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<?php
if(!defined('_INDEX_')) { 
    include G5_THEME_PATH.'/doc/sub.tail.php';
}
?>


<footer id="footer" class="d_bg">
            <address>
            <?=$as_address?>
            </address>
            <ul class="f_con f_inner">
                <li>대표자 : <?=$as_name?></li>
                <li>사업자등록번호 : <?=$as_name?></li>
                <li>Tel : <a href="tel:<?=$as_tel?>"><?=$as_tel?></a></li>
                <li>e-mail : <a href="<?=$as_mail?>"><?=$as_mail?></a></li>
            </ul>
            <span class="copy">
                &copy; <?=$as_company?> All Rights Reserved.
            </span>
        </footer>


    </div>




<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>







<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>





<?php
include_once(G5_THEME_PATH."/tail.sub.php");