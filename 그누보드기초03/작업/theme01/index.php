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
            <section id="mainVisual">
                <div class="mainSlide">
                    <div class="itm itm01"></div>
                    <div class="itm itm02"></div>
                    <div class="itm itm03"></div>
                </div>
                <div class="mainSlogan">
                    <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolore iure laboriosam quidem
                        ducimus ipsa ratione neque culpa debitis fugiat.</p>
                </div>
            </section>
            <section id="mainContent" class="section">
                <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolore iure laboriosam quidem
                    ducimus ipsa ratione neque culpa debitis fugiat.</p>
                <div class="inner">
                    <figure>
                        <img src="<?php echo G5_THEME_URL ?>/img/main_con01.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?php echo G5_THEME_URL ?>/img/main_con02.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?php echo G5_THEME_URL ?>/img/main_con03.jpg" alt="">
                    </figure>
                </div>
            </section>
            <section id="mainCustomer" class="section">
                <div class="inner">
                    <div class="left">공지나올곳</div>
                    <div class="center">
                        회사소개 간략하게
                        <a href="">바로가기</a>
                    </div>
                    <div class="right">약도</div>
                </div>
            </section>
        </main>






<?php
include_once(G5_THEME_PATH.'/tail.php');