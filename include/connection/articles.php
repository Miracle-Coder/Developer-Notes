<?php

$per_page = 5;
$page = 1;

if ( isset($_GET['page']) )
{
    $page = (int) $_GET['page'];
}
$total_count = R::count('articles');


$total_page = ceil($total_count/$per_page);
if ( $page <=1 || $page > $total_page )
{
    $page = 1;
}
$offset = ($per_page * $page) - $per_page;


$articles_home_page = R::findCollection('articles', "ORDER BY `views` DESC LIMIT $offset,$per_page ");

while( $item = $articles_home_page->next() )
{
?>
<article class="main-article">
    <div class="article-image wow bounceInLeft" data-wow-duration="2.5s" data-wow-offset="150" style="background-image: url(/images/<?php echo $item['image']; ?>);"></div>
    <div class="content-article wow bounceInLeft" data-wow-duration="2.5s" data-wow-offset="50">
        <div class="content-article-header">
            <div class="entry-meta">
                <div class="row">
                    <div class="col-md-8 article-posted wow bounceInLeft" data-wow-duration="2.9s" data-wow-offset="50">
                        <span class="posted-on">Posted on <a href="#" class="link-animated"><?php echo $item['pubdate']; ?></a> </span>
                        <span class="posted-in">Posted in <a href="http://developer-notes.h1n.ru/include/pages/categories.php?id=<?php echo $item['categories_id']; ?>" class="link-animated"><?php echo $item['categories_name']; ?></a></span>
                    </div>
                    <div class="col-md-4 article-likes-simple wow bounceInLeft" data-wow-duration="4s" data-wow-offset="50">
                        
                        <div class="article-comment">
                            <a href="#" class="link-animated">
                                            <span class="comments-link-icon">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>
                                <span class="comments-link"><?php echo $item['views']; ?> views</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="article-header-title wow bounceInLeft" data-wow-duration="2.9s" data-wow-offset="50"><a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></h2>
        </div>
        <div class="content-article-body wow fadeIn" data-wow-duration="4s" data-wow-offset="50">
            <div class="content-article-body-text">
                <p>
                    <span class="dropcap"><?php echo mb_substr($item['text'], 0, 1, 'utf-8'); ?></span>
                    <?php echo substr($item['text'], 1, 1000) . '...'; ?>
                </p>

            </div>
            <div class="custom-more wow bounceInLeft" data-wow-duration="2.5s" data-wow-offset="50">
                <a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>" class="link-animated">Continue Reading</a>
            </div>
        </div>
        <div class="post-share">
            <ul class="social-nav model-7">
                <li class="wow bounceInLeft" data-wow-duration="2.5s" data-wow-offset="50"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="wow bounceInLeft" data-wow-duration="2.2s" data-wow-offset="50">
                    <a href="#" class="facebook"> <i class="fa fa-facebook"></i></a>
                </li>
                <li class="wow bounceInLeft" data-wow-duration="2s" data-wow-offset="50"><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li class="wow bounceInLeft" data-wow-duration="1.8s" data-wow-offset="50"><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li class="wow bounceInLeft" data-wow-duration="1.6s" data-wow-offset="50"><a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
            </ul>
        </div>
    </div>
</article>
<?php
}
echo '<div class="paginator">';
if ($page > 1)
{
echo '<div class="button-container-3-left">';
                       echo '<span class="mas">Prev</span>';
echo '<button id="work" type="button" name="Hover" onclick="window.location.href=\'http://developer-notes.h1n.ru/index.php?page='.($page - 1).'\'"> Prev';
echo '</button>';
echo '</div>';

}
if ($page < $total_page)
{
    echo '<div class="button-container-3-right">';
    echo '<span class="mas">Next</span>';
    echo '<button id="work" type="button" name="Hover" onclick="window.location.href=\'http://developer-notes.h1n.ru/index.php?page='.($page + 1).'\'"> Next';
    echo '</button>';
    echo '</div>';
}
echo '</div>';
?>



