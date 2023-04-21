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
                <div class="main_slide">
                    <div class="itm">
                        <strong>
                            아파트입주청소
                        </strong>
                        <span>
                            신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소
                        </span>
                        <p>
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                        </p>
                    </div>
                    <div class="itm">
                        <strong>
                            이사/상가청소
                        </strong>
                        <span>
                            오랫동안 누적된 공간의 묵은 때, 찌든 때, 누적된 먼지와 세균들을 이사하기전에 청소
                        </span>
                        <p>
                            신축 건물은 공사기간 중 쌓인 미세먼지/유해성분들이 곳곳에 산재해 있습니다.
                            입추청소를 맡기시면 유해성분 제거하고 청결한 환경을 만드실 수 있습니다.
                        </p>
                    </div>
                    <div class="itm">
                        <strong>
                            사무실청소
                        </strong>
                        <span>
                            쾌적한 업무 환경을 만들고, 능률적인 업무를수행하기 위해 반드시 필요한 청소
                        </span>
                        <p>
                            쾌적한 업무 환경을 만들고, 능률적인 업무를 수행하기 위해 반드시 필요한 청소 작업 입니다.
                            사무실청소에 있어서 가장 중요한 점은 빠른 시간 내에 완벽한 작업을 마무리 하는 것이 중요합니다.
                        </p>
                    </div>
                </div>
            </section>


            <section id="mainLink">
                <ul class="f_inner main_link">
                    <li>
                        <a href="">
                            <span>icon</span>
                            <strong>깔끄미소개</strong>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>icon</span>
                            <strong>아파트입주청소</strong>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>icon</span>
                            <strong>이사/상가청소</strong>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>icon</span>
                            <strong>사무실청소</strong>
                        </a>
                    </li>
                    <li class="customer">
                        <a href="tel:<?=$as_tel?>"><?=$as_tel?></a>
                        <p><?=$as_description?></p>
                        <i class="xi-user-o"></i>
                    </li>
                </ul>
            </section>


            <section id="mainContent">
                <ul class="f_inner main_content">
                    <li>
                        <a href="<?php echo G5_THEME_URL ?>/doc/m012.php">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/images/main_s011.jpg" alt="">
                            </figure>
                            <strong>부산 아파트입주청소</strong>
                            <p>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                                보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                                구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/images/main_s012.jpg" alt="">
                            </figure>
                            <strong>부산 이사/상가청소</strong>
                            <p>신축 건물은 공사기간 중 쌓인 미세먼지/유해성분들이 곳곳에 산재해 있습니다.
                                입추청소를 맡기시면 유해성분 제거하고 청결한 환경을 만드실 수 있습니다.</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/images/main_s013.jpg" alt="">
                            </figure>
                            <strong>부산 사무실청소</strong>
                            <p>쾌적한 업무 환경을 만들고, 능률적인 업무를 수행하기 위해 반드시 필요한 청소 작업 입니다.
                                사무실청소에 있어서 가장 중요한 점은 빠른 시간 내에 완벽한 작업을 마무리 하는 것이 중요합니다.</p>
                        </a>
                    </li>
                </ul>
            </section>


            <section id="mainCustomer">
                <ul class="f_inner main_customer">
                    <li>
                        <h3><?=$as_company?>에서 알려드립니다. 
                        <a href="/bbs/board.php?bo_table=notice"><i class="xi-plus"></i></a></h3>
                        <!-- 최근게시물... -->
                        <?php echo latest('theme/notice', 'notice', 4, 23);?>
                    </li>
                    <li>
                        <div class="map_case">
                            <!-- * 카카오맵 - 지도퍼가기 -->
                            <!-- 1. 지도 노드 -->
                            <div id="daumRoughmapContainer1673489417425"
                                class="root_daum_roughmap root_daum_roughmap_landing map_con"></div>

                            <!--
                                2. 설치 스크립트
                                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                            -->
                            <script charset="UTF-8" class="daum_roughmap_loader_script"
                                src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                            <!-- 3. 실행 스크립트 -->
                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                    "timestamp": "1673489417425",
                                    "key": "2dec9",
                                    //"mapWidth": "640",
                                    //"mapHeight": "360"
                                }).render();
                            </script>
                        </div>
                    </li>
                </ul>
            </section>
        </main>




<?php
include_once(G5_THEME_PATH.'/tail.php');
