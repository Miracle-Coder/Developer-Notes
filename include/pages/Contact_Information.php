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
    <title>Developer Notes</title>


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


    <!--- Font Awesome --->
    <link rel="stylesheet" href="/css/font awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font awesome/css/font-awesome.min.css">

    <!--- Fonts --->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">


    <!--- Windy --->
    <link rel="stylesheet" href="/libs/windy/css/windy.css">


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



    <!-- particles.js container -->

    <div id="particles-js"></div>

    <div class="header-img-logo">

        <img class="header-img-logo-top" src="/images/dokkenNelsonLogoDNonly.png">
        <div class="header-img-logo-bottom">Developer Notes</div>

    </div>




    <!-- fullwidth slider -->


    <?php include '../connection/slider_carousel.php' ?>


    <!-- Content -->

    <div class="blog_content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Main article -->

                    <article class="main-article">
                        <div class="article-image" style="background-image: url(/images/l_contact_animation.gif);"></div>
                        <div class="content-article">
                            <div class="content-article-header">
                                <div class="entry-meta">
                                    <div class="row">
                                        <div class="col-md-8 article-posted">
                                            <span class="posted-on"></span>
                                            <span class="posted-in"></span>
                                        </div>
                                        <div class="col-md-4 article-likes-simple">

                                            <div class="article-comment">
                                                <a href="#" class="link-animated">
                                            <span class="comments-link-icon">
                                            </span>
                                                    <span class="comments-link"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="article-header-title"><a href="#">About Blog</a></h2>
                            </div>
                            <div class="content-article-body">
                                <div class="content-article-body-text">
                                    <p>
                                        <span class="dropcap">L</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula, orci sed fermentum bibendum, ipsum ligula tristique ante, ut bibendum felis dui ut ex. Donec et nunc vestibulum, rhoncus libero in, fringilla orci. Etiam pulvinar ultricies nibh, vel eleifend ex luctus congue. In orci sapien, blandit et risus sit amet, ultrices tempor neque. Curabitur pulvinar mollis leo ut lobortis. Sed eleifend, enim ac hendrerit posuere, mi enim faucibus justo, vitae euismod purus est at lorem. Nam suscipit dolor eget molestie interdum. Ut at fermentum dui, in suscipit ex. Nullam mauris arcu, venenatis eget auctor sit amet, venenatis sed nunc. Ut rutrum purus eu ultrices bibendum. In hac habitasse platea dictumst. Donec et mattis nibh, a sagittis justo. Sed quis lectus a urna mattis sagittis. Suspendisse non nibh vitae lorem iaculis elementum. In hac habitasse platea dictumst. Vestibulum vitae mi in nulla condimentum blandit vel nec velit.

                                        Proin lacinia sem vitae elementum volutpat. Cras gravida, sapien vitae commodo efficitur, ex nisi tincidunt diam, tempus ornare elit sapien sed sapien. Ut vulputate felis neque, rhoncus tincidunt urna auctor nec. Aliquam pretium auctor diam, et lobortis risus dictum id. Quisque a ultricies nunc. Etiam dapibus malesuada tincidunt. Ut interdum lorem in purus ullamcorper volutpat. Vestibulum egestas diam et est eleifend consequat.

                                        Nullam ipsum urna, posuere a sagittis rutrum, laoreet non nisi. Proin at ornare urna, in ullamcorper mi. Vestibulum consequat ex et neque venenatis, id congue ante porttitor. In mollis mauris et dui tincidunt vestibulum. In cursus tincidunt malesuada. Duis metus lectus, mollis et interdum et, varius in purus. Vestibulum maximus sed neque efficitur tempus. Nullam mattis condimentum gravida. Vestibulum lacus dui, maximus vel lorem vitae, facilisis lobortis dolor. Cras faucibus hendrerit lacinia.

                                        Morbi tempor accumsan quam tempus imperdiet. Donec non felis at turpis semper vulputate. Aenean sagittis, erat eget mattis hendrerit, orci magna pulvinar ipsum, at condimentum ex leo eu sem. Integer venenatis auctor neque nec malesuada. Nullam nisl lectus, sagittis non tellus ac, convallis dictum felis. Aliquam facilisis dignissim nisi, sed porta eros posuere in. Phasellus sit amet viverra magna, ac volutpat eros. Donec ultrices ornare quam, eget placerat diam mollis eget. In sodales magna eu nulla congue sollicitudin. Curabitur fermentum bibendum facilisis.

                                        Integer finibus bibendum orci, at congue erat ullamcorper id. Vivamus ut tortor eget mi mollis laoreet eu et enim. Vestibulum ultricies ipsum id lorem semper, in sagittis lectus bibendum. Suspendisse eleifend velit semper, interdum lacus quis, semper ante. Curabitur commodo libero non diam gravida, in pulvinar tortor accumsan. Etiam euismod posuere ex sed aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tellus odio, porta ac enim ut, luctus semper diam. Praesent id ultricies velit. Donec consectetur volutpat ante, quis mollis libero. Phasellus quis ipsum non lectus suscipit bibendum. Cras ultricies vehicula dolor, vel efficitur ipsum tempus sit amet.
                                    </p>

                                </div>

                            </div>
                            <div class="post-share">
                                <ul class="social-nav model-7">
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li>
                                        <a href="#" class="facebook"> <i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                </div>


                <!-- Right main block -->
                <div class="col-md-4">


                    <!-- Search -->


                    <div class="search">
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

                    <?php include '../connection/new_comments.php' ?>


                    <!-- Windy -->


                    <?php include '../connection/top_5_materials.php' ?>


                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->


    <?php include '../connection/footer.php' ?>


    <!-- jQuery -->

    <script src="/js/jquery-3.2.1.min.js"></script>


    <!-- Slider JS -->

    <script src="/libs/slider/js/jquery.easing.1.3.js" defer></script>
    <script src="/libs/slider/js/jquery.everslider.js" defer></script>
    <script src="/libs/slider/js/jquery.mousewheel.js" defer></script>
    <script src="/libs/slider/js/jquery.scrollUp.min.js" defer></script>
    <script src="/libs/slider/js/respond.min.js" defer></script>

    <!-- Windy JS -->

    <script src="/libs/windy/js/modernizr.custom.79639.js" defer></script>
    <script src="/libs/windy/js/jquery.windy.js" defer></script>

    <!--- Scroll --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.min.js.map" defer></script>

    <script type="text/javascript" defer>
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
<script type="text/javascript" defer>
    $(document).ready(function(){
        $('#image_slider').everslider({
            mode: 'normal',
            moveSlides: 1
        });
    });
</script>


<script src="/js/main.js" defer></script>
<script src="/jquery.timeago.js" defer></script>
<script src="/jquery.timeago.ru.js" defer></script>

<!-- particles scripts -->

<script src="/js/particles.js" defer></script>
<script src="/js/app.js" defer></script>




</body>
</html>