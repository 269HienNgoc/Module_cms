<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NgocHai
 */

?>



<?php wp_footer(); ?>

<body>
    <script>
        $('.owl-img').owlCarousel({
            items: 1,
            lazyLoad: true,
            loop: true,
            margin: 10
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        });
    </script>


    <div class="type-10">
        <div class="navigation">
            <div class="container">
                <div class="content">
                    <h3>Get 30% Off Your First Order</h3>
                    <h6>Join our newsletter to receive the latest <br> updates and promotions.</h6>

                    <form>
                        <input type="text" name="email" placeholder="Enter Your Email" />
                        <button type="submit">Book a Lesson</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="known">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="logo_10" alt="">
                            <p class="text_left_10">
                                The estuary is the well-known kite spot in the lagoon. Two launches are possible.
                            </p>
                            <div class="icon">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-tumblr-square"></i></a>
                                <a href="#"><i class="fab fa-instagram-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="menu_10">
                            <h3 class="title_10">Userful Link</h3>
                            <div class="menu_footer_10">
                                <ul class="menu_count">
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Home Blocks</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">About</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Team</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Contacts</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Pricing</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Typography</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Shop</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Services</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">FAQ</a></li>
                                    <li class="menu_10_homeblock"><a href="#" class="menu_10_items">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title_10">Portfolio</h3>
                        <div class="menu_footer_img_10">
                            <ul>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_1.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_2.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_3.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_4.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_5.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img_10" src="<?php bloginfo('template_url'); ?>/images/10_img_6.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>