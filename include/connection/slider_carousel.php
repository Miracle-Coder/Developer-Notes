<?php

$articles = R::findCollection('articles', 'ORDER BY `pubdate` DESC LIMIT 7 ');

?>

<div class="slider-carousel">
    <div id="fullwidth_slider" class="everslider fullwidth-slider">
        <ul class="es-slides">
            <?php
            while( $item = $articles->next() )
            {
            ?>
            <li class="slider-image" style="background-image: url(/images/<?php echo $item['image']; ?>);">

                <div class="fullwidth-title">
                    <div>
                        <a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>">
                            <h2>Read</h2>
                            <h4>More</h4>
                        </a>
                    </div>
                </div>
                <span>
                <p><?php echo mb_substr($item['text'], 0, 100, 'utf-8') . '...'; ?></p>
            </span>

            </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>


