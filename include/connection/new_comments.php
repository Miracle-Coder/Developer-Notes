<?php


$new_comments = R::findCollection('comments', 'ORDER BY `pubdate` DESC LIMIT 4');

?>

<div class="new-comments">

    <div class="new-comments-tittle">
        <span>New Comments</span>
    </div>
    <div class="new-comments-content">

<?php
while($item = $new_comments->next())
{

    ?>
        <div class="new-comments-item">
            <div class="author-avatar">
                <img src="/images/avatar-1.png" alt="">
            </div>
            <div class="new-comments-desk">
                <div class="author">
                                        <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name"><?php echo $item['author']; ?></a>
                                       </span>
                </div>
                <div class="new-comments-posted-in">
                                        <span>
                                            <em class="fa fa-newspaper-o"></em>
                                            in<a href="http://developer-notes.h1n.ru/include/pages/categories.php?id=<?php echo $item['categories_id']?>" class="article-categories"><?php echo $item['categories_name']; ?> </a>
                                        </span>
                </div>
                <div class="new-comments-text">
                    <span><?php echo mb_substr($item['text'], 0, 100, 'utf-8'); ?></span>
                </div>
            </div>
        </div>


        <?php
        }
        ?>


    </div>

</div>