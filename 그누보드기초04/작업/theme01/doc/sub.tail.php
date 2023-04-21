</div>
                </article>
                <aside id="aside">
<?php
    include G5_THEME_PATH.'/doc/nav.php';
?>
                </aside>
            </div>
        </div>

<?
 if($board['bo_table'] == 'qa') {
    $num = 3;
 } else if($board['bo_table'] == 'notice') {
    $num = 4;
 } else if($board['bo_table'] == 'gallery') {
    $num = 5;
 }
 ?>
    <script>
        $(function(){
            var num = <?= $num ?>;
            $('#aside ul>li').eq(num-1).addClass('on')
        })
    </script>