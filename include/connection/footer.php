<div id="footer">

    <div class="header-footer">
        <div class="row">
            <div class="col-md-7">
                <div class="footer-tittle">
                    Most comprehensive blog & magazine template ever.
                </div>
            </div>
            <div class="col-md-5">
                <div class="footer-info">
                    <div><strong>7,000</strong>users</div>
                    <div><strong>10,000</strong>articles</div>
                    <div><strong>35,000</strong>videos</div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-md-4">
                    <div class="tittle">
                        About Us
                    </div>
                    <div class="footer-widget-text">
                        Along with our creative team, we making powerful and trending HTML & WordPress Themes.
                        <br>
                        Our inspiration is in everything, we believe that every theme should be inspired by something in our beautiful world.
                        <br>
                        Follow us on Envato <a href="#">here</a>.
                        <br>
                        And if you have any questions, feel free to ask <a href="#">here</a>.
                        <br>
                        Also see our newsletter subscription <a href="#">here</a>.
                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle">
                        Contact
                    </div>
                    <div class="footer-widget-text">
                        <div>
                            <a href="#"><em class="fa fa-envelope-o"></em>MiracleCoderPHP@gmail.com</a>
                        </div>
                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle">
                        Stay Connected
                    </div>
                    <div class="footer-widget-text">
                        <p>Follow us on social networks and stay up to date with the latest news.</p>
                    </div>
                    <div class="social_icons">
                        <a href="#" class="social_icons--link social_icons--link-facebook" target="_blank">
                            <i class="social_icons--icon  fa fa-facebook"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-twitter" target="_blank">
                            <i class="social_icons--icon  fa fa-twitter"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-google_plus" target="_blank">
                            <i class="social_icons--icon  fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-instagram" target="_blank">
                            <i class="social_icons--icon  fa fa-instagram"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-youtube" target="_blank">
                            <i class="social_icons--icon  fa fa-youtube-play"></i>
                        </a>
                    </div>
                    <div class="footer-widget-divider"></div>
                </div>
                <div class="footer-widget col-md-4">
                    <div class="tittle">
                        Recent Posts
                    </div>
                    <div class="footer-widget-img">
                        <?php
                        $articles = R::findCollection('articles', 'ORDER BY `pubdate` DESC LIMIT 4 ');

                        while( $item = $articles->next() )
                        {
                        ?>

                        <figure class="footer-widget-img-item">
                            <img src="/images/<?php echo $item['image']; ?>" alt="sample94" />
                            <figcaption>
                                <h3>Read More</h3>
                            </figcaption>
                            <a href="http://developer-notes.h1n.ru/include/pages/article.php?id=<?php echo $item['id']; ?>"></a>
                        </figure>

                            <?php
                        }
                        ?>

                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle">
                        <em class="fa fa-shield"></em>
                        Email Newsletter
                    </div>
                    <div class="footer-widget-text">
                        <p>Subscribe for new content, updates, news, surveys & offers.
                            <br>
                            Only useful stuff, no spam.</p>

                        <form action="#">
                            <div class="input-field">
                                <input id="footer-subscribe-form-1" type="text" required="required">
                                <label for="footer-subscribe-form-1" class="footer-subscribe-label">Drop your email here</label>
                                <button class="footer-subscribe-form-1-button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-widget-divider"></div>
                </div>
                <div class="footer-widget col-md-4">
                    <div class="tittle">
                        Search something
                    </div>
                    <div class="footer-search-form">
                        <form action="http://developer-notes.h1n.ru/include/connection/search.php" method="GET">
                            <div class="input-field">
                                <input id="footer-search-form-1" name="search" type="search" required="required">
                                <label for="footer-search-form-1" class="footer-search-label">What are you searching for? ...</label>
                                <button class="footer-search-form-1-button"><em class="fa fa-search"></em></button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle">
                        Today's most popular video
                    </div>
                    <div class="footer-video">
                        <iframe src="https://player.vimeo.com/video/137158633?color=ffffff&title=0&byline=0&portrait=0&badge=0" width="400" height="281" allowfullscreen></iframe>
                    </div>
                    <div class="footer-widget-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="copyrights-content">
            © 2017 Developer-Notes. Created with
            <em class="fa fa-heart"></em>
            by <a href="#">DN Studio</a>
        </div>
    </div>

</div>