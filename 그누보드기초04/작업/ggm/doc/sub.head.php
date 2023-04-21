<div id="subPage">
            <section id="subTitle">
                <div class="inner">
                <? 
                if($board['bo_subject']) {
                    echo $board['bo_subject'];
                } else {
                    echo $title;
                }
                ?>
                / <?=$as_company?>
                </div>
            </section>
            <section id="subContent">
                <div class="f_inner sub_content">
                    <article class="article">
                        <h2><strong>
                        <? 
                        if($board['bo_subject']) {
                            echo $board['bo_subject'];
                        } else {
                            echo $title;
                        }
                        ?>
                        </strong> / <span><?=$as_company?></span></h2>
                        <div class="content">