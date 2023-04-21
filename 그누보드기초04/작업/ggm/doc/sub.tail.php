</div>
                    </article>
                    <aside class="aside">
                        <div class="lnb">
<?php
     include G5_THEME_PATH.'/doc/nav.php';  
?>
                        </div>

                        <figure class="slogan">
                            <img src="<?php echo G5_THEME_URL ?>/images/slogan.png" alt="">
                        </figure>

                        <ul class="sub_customer">
                            <li>Tel : <a href="tel:051-331-3354">051-331-3354</a></li>
                            <li>e-mail : <a href="mailto:jjs3354@naver.com">jjs3354@naver.com</a></li>
                        </ul>

                    </aside>
                </div>
            </section>
        </div>


        <?
        if($board['bo_table'] == 'qa') {
            $num = 6;
        } else if($board['bo_table'] == 'gallery') {
            $num = 5;
        }
        ?>


        <script>
        $(function(){
            var num = <?= $num ?>;
            $('.lnb ul>li').eq(num-1).addClass('on');
        })
        </script>