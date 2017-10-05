<?php
require_once '../db/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog</title>

    <!-- jQuery -->
    <script src="/js/jquery-3.2.1.min.js"></script>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Carousel -->
    <script type="text/javascript">
        var browser			= navigator.userAgent;
        var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
        var isMobile		= false;
        if(browser.match(browserRegex)) {
            isMobile			= true;
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){
                window.scrollTo(0,1);
            }
        }
    </script>
    <link rel="stylesheet" href="/libs/slider/css/amazium.css">
    <link rel="stylesheet" href="/libs/slider/css/base.css">
    <link rel="stylesheet" href="/libs/slider/css/everslider.css">
    <link rel="stylesheet" href="/libs/slider/css/everslider-custom.css">
    <link rel="stylesheet" href="/libs/slider/css/layout.css">
    <script src="/libs/slider/js/jquery.easing.1.3.js"></script>
    <script src="/libs/slider/js/jquery.everslider.js"></script>
    <script src="/libs/slider/js/jquery.mousewheel.js"></script>
    <script src="/libs/slider/js/jquery.scrollUp.min.js"></script>
    <script src="/libs/slider/js/respond.min.js"></script>

    <!-- Bootstrap core JavaScript --->





    <!--- Font Awesome --->
    <link rel="stylesheet" href="/css/font awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font awesome/css/font-awesome.min.css">



    <!--- Windy --->
    <link rel="stylesheet" href="/libs/windy/css/windy.css">
    <script src="/libs/windy/js/modernizr.custom.79639.js"></script>
    <script src="/libs/windy/js/jquery.windy.js"></script>






</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="load">
        <div class="dot"></div>
        <div class="outline"><span></span></div>
    </div>
</div>


<div id="Wrapper">

    <!-- Top Menu -->

    <main id="main-menu">


        <?php include '../connection/header_menu.php' ?>


        <!-- Login modal window animation -->



        <?php include '../connection/users.php' ?>




    </main>



    <!-- Image Logo -->




    <div class="header-img-logo">
        <img src="/images/wefcwefcwe.png" alt="">
    </div>





    <!-- fullwidth slider -->

    <?php include '../connection/slider_carousel.php' ?>


    <!-- Content -->

    <div class="blog_content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Main article -->

                    <?php

                    $search_q = trim(strip_tags(stripcslashes(htmlspecialchars($_GET["search"]))));
                    if ($search_q == ""){
                        echo '<div class="search-result">The search field is not filled correctly.</div>';
                    }
                    else
                    {

                    $articles_search = R::find('articles', 'title LIKE :title ORDER BY `views` DESC LIMIT 5', array(':title' => '%'.$search_q.'%'));
                    $search_c = count($articles_search);

                    ?>
                    <div class="search-result">On request <strong>"<?php echo $search_q; ?>"</strong> found <?php echo $search_c; ?> matches.</div>
                    <?php

                    foreach( $articles_search as $item )
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
                                                <div class="article-likes">
                                                    <a href="#" class="link-animated">
                                            <span title="Мне нравится эта статья" class="article-likes-heart">
                                                <i class="fa fa-heart fa-1" aria-hidden="true"></i>
                                                <span class="article-likes-count"><?php echo $item['likes']; ?> likes</span>
                                            </span>
                                                    </a>
                                                </div>
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
                    }
                    ?>





                </div>





                <!-- Right main block -->
                <div class="col-md-4">


                    <!-- Search -->


                    <div class="search wow flipInX" data-wow-duration="2.5s" data-wow-offset="150">
                        <div class="search-text">
                            <span>Lost Something?</span>
                        </div>
                        <form action="http://developer-notes.h1n.ru/include/connection/search.php" method="GET" id="serach-form">
                            <input class="search-input" name="search" type="search" placeholder="Search" required>

                        </form>
                    </div>




                    <!-- Accordian Categories -->


                    <?php include '../connection/accordian_categories.php' ?>




                    <!--We recommend -->



                    <?php include '../connection/we_recommend.php' ?>








                    <!-- Comments -->

                    <div class="new-comments wow fadeInRight" data-wow-duration="2.5s" data-wow-offset="150">

                        <div class="new-comments-tittle">
                            <span>New Comments</span>
                        </div>
                        <div class="new-comments-content">
                            <div class="new-comments-item">
                                <div class="author-avatar">
                                    <img src="/images/avatar-1.png" alt="">
                                </div>
                                <div class="new-comments-desk">
                                    <div class="author">
                                        <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name">Priler</a>
                                       </span>
                                    </div>
                                    <div class="new-comments-posted-in">
                                        <span>
                                            <em class="fa fa-newspaper-o"></em>
                                            in<a href="#" class="article-categories"> «Trending Music»</a>
                                        </span>
                                    </div>
                                    <div class="new-comments-text">
                                        <span>Wizard by Garrix is very good, you can listen it in SoundCloud, ok.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments-item">
                                <div class="author-avatar">
                                    <img src="/images/avatar-2.png" alt="">
                                </div>
                                <div class="new-comments-desk">
                                    <div class="author">
                                        <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name">Priler</a>
                                       </span>
                                    </div>
                                    <div class="new-comments-posted-in">
                                        <span>
                                            <em class="fa fa-newspaper-o"></em>
                                             in<a href="#" class="article-categories"> «Trending Music»</a>
                                        </span>
                                    </div>
                                    <div class="new-comments-text">
                                        <span>Today so far, graphics in games is phantastic, who know's what will be in future? ...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments-item">
                                <div class="author-avatar">
                                    <img src="/images/avatar-3.png" alt="">
                                </div>
                                <div class="new-comments-desk">
                                    <div class="author">
                                        <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name">Priler</a>
                                       </span>
                                    </div>
                                    <div class="new-comments-posted-in">
                                        <span>
                                            <em class="fa fa-newspaper-o"></em>
                                             in<a href="#" class="article-categories"> «Trending Music»</a>
                                        </span>
                                    </div>
                                    <div class="new-comments-text">
                                        <span>Even though it's looks more like "Philosophy" stuff, you always know when Typography looks great ...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments-item">
                                <div class="author-avatar">
                                    <img src="/images/avatar-4.png" alt="">
                                </div>
                                <div class="new-comments-desk">
                                    <div class="author">
                                        <span>
                                           <em class="fa fa-user"></em>
                                           <a href="#" class="author-name">Priler</a>
                                       </span>
                                    </div>
                                    <div class="new-comments-posted-in">
                                        <span>
                                            <em class="fa fa-newspaper-o"></em>
                                             in<a href="#" class="article-categories"> «Trending Music»</a>
                                        </span>
                                    </div>
                                    <div class="new-comments-text">
                                        <span>True story, pal. Code should be beautiful at least for the sake of extensibility...</span>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>


                    <!-- Windy -->


                    <?php include '../connection/top_5_materials.php' ?>


                </div>












            </div>
        </div>





    </div>


    <!-- Footer-->



    <?php include '../connection/footer.php' ?>




    <script type="text/javascript">
        $(function(){
            $.scrollUp({animation: 'slide'});
            $('a[href="#"]').click(function(){ return false; });
        });
    </script>





</div>

<script src="/libs/wow-animation/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image_slider').everslider({
            mode: 'normal',
            moveSlides: 1
        });
    });
</script>


<script src="/js/main.js" defer></script>

<script src="/jquery.timeago.js"></script>
<script src="/jquery.timeago.ru.js"></script>




</body>
</html>
