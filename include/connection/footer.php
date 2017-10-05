<div id="footer">

    <div class="header-footer">
        <div class="row">
            <div class="col-md-7">
                <div class="footer-tittle wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="50">
                    Most comprehensive blog & magazine template ever.
                </div>
            </div>
            <div class="col-md-5">
                <div class="footer-info">
                    <div class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50"><strong>7,000</strong>users</div>
                    <div class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="50"><strong>10,000</strong>articles</div>
                    <div class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="50"><strong>35,000</strong>videos</div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-md-4">
                    <div class="tittle wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        About Us
                    </div>
                    <div class="footer-widget-text wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s" data-wow-offset="50">
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
                    <div class="tittle wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        Contact
                    </div>
                    <div class="footer-widget-text wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s" data-wow-offset="50">
                        <div>
                            <a href="#"><em class="fa fa-envelope-o"></em>Demidov05051992@gmail.com</a>
                        </div>
                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        Stay Connected
                    </div>
                    <div class="footer-widget-text wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s" data-wow-offset="50">
                        <p>Follow us on social networks and stay up to date with the latest news.</p>
                    </div>
                    <div class="social_icons">
                        <a href="#" class="social_icons--link social_icons--link-facebook wow bounceInLeft" target="_blank" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                            <i class="social_icons--icon  fa fa-facebook"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-twitter wow bounceInLeft" target="_blank"data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="50">
                            <i class="social_icons--icon  fa fa-twitter"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-google_plus wow bounceInLeft" target="_blank"data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="50">
                            <i class="social_icons--icon  fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-instagram wow bounceInLeft" target="_blank"data-wow-duration="1.5s" data-wow-delay="0.8s" data-wow-offset="50">
                            <i class="social_icons--icon  fa fa-instagram"></i>
                        </a>
                        <a href="#" class="social_icons--link social_icons--link-youtube wow bounceInLeft" target="_blank" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="50">
                            <i class="social_icons--icon  fa fa-youtube-play"></i>
                        </a>
                    </div>
                    <div class="footer-widget-divider"></div>
                </div>
                <div class="footer-widget col-md-4">
                    <div class="tittle wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        Recent Posts
                    </div>
                    <div class="footer-widget-img">
                        <?php
                        $articles = R::findCollection('articles', 'ORDER BY `pubdate` DESC LIMIT 4 ');

                        while( $item = $articles->next() )
                        {
                        ?>

                        <figure class="footer-widget-img-item wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
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
                    <div class="tittle wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        <em class="fa fa-shield"></em>
                        Email Newsletter
                    </div>
                    <div class="footer-widget-text wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s" data-wow-offset="50">
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
                    <div class="tittle wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        Search something
                    </div>
                    <div class="footer-search-form wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        <form action="#">
                            <div class="input-field">
                                <input id="footer-search-form-1" type="text" required="required">
                                <label for="footer-search-form-1" class="footer-search-label">What are you searching for? ...</label>
                                <button class="footer-search-form-1-button"><em class="fa fa-search"></em></button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-widget-divider"></div>
                    <div class="tittle wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        Today's most popular video
                    </div>
                    <div class="footer-video wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="50">
                        <iframe src="https://player.vimeo.com/video/137158633?color=ffffff&title=0&byline=0&portrait=0&badge=0" width="400" height="281" allowfullscreen></iframe>
                    </div>
                    <div class="footer-widget-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights wow fadeIn" data-wow-duration="2s" data-wow-offset="50">
        <div class="copyrights-content">
            © 2016 Kronos. Created with
            <em class="fa fa-heart"></em>
            by <a href="#">Priler Studio</a>
        </div>
    </div>

</div>