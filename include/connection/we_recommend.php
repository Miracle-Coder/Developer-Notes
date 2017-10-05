<?php
$we_recommend  = R::findCollection('articles', 'ORDER BY `comment` DESC LIMIT 5 ');
?>

<div class="we-recommend wow flipInY" data-wow-duration="2.5s" data-wow-offset="150">
    <div class="we-recommend-tittle">
        <span>We recommend</span>
    </div>
    <div id="image_slider" class="everslider image-slider">

        <ul class="es-slides">
            <?php
            while( $item = $we_recommend->next() )
            {
                ?>
            <li>
                <div class="featured-pic">
                    <img src="/images/<?php echo $item['image']; ?>" alt="">
                </div>
                <div class="image-caption">
                    <span><a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>"><?php echo mb_substr($item['title'], 0, 40, 'utf-8') . '...'; ?></a></span>
                </div>
            </li>

            <?php
            }
            ?>



        </ul>

    </div>
</div>