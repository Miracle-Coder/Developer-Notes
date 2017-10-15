<?php
$to_5_materials  = R::findCollection('articles', 'ORDER BY `likes` DESC LIMIT 5 ');
?>

<div class="windy-main wow zoomInRight" data-wow-duration="2.7s" data-wow-offset="150">
    <span>Top 5 Materials</span>


    <div class="windy-demo">
        <ul id="wi-el" class="wi-container" style="background-image: url(images/article-1.jpg);">

            <?php
            while( $item = $to_5_materials->next() )
            {
            ?>

            <li class="" style="background-image: url(/images/<?php echo $item['image']; ?>);">
<div class="windy_info">
                <div class="windy_article_name">
                    <p><a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></p>
                </div>
                <div class="windy-posted">
                    <div class="button-container-1">
                        <span class="mas"><?php echo $item['categories_name']; ?></span>
                        <button id='work' type="button" name="Hover" onclick="window.location.href='http://developer-notes.h1n.ru/include/pages/categories.php?id=<?php echo $item['id']; ?>';"><?php echo $item['categories_name']; ?>  </button>
                    </div>
                </div>
                <div class="windy-meta">
                                    <span>
                                            <em class="fa fa-clock-o"></em>
                                            <abbr class="timeago" title="<?php echo $item['pubdate']; ?>"></abbr>

                                    </span>
                                    <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name">Priler</a>
                                    </span>
                                    <span>
                                            <em class="fa fa-commenting-o"></em>
                                                <?php echo $item['comment']; ?>
                                    </span>
                </div>
</div>
            </li>

                <?php
            }
            ?>



        </ul>
        <nav>
            <span id="nav-prev">prev</span>
            <span id="nav-next">next</span>
        </nav>
    </div>

</div>