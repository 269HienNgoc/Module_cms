<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12-header">
    <div class="image-carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="http://<?php echo $url_path ?>/images/slide01.jpg" alt="logo"></div>
            <div class="item"><img src="http://<?php echo $url_path ?>/images/slide02.jpg" alt="logo"></div>
            <div class="item"><img src="http://<?php echo $url_path ?>/images/slide03.jpg" alt="logo"></div>
        </div>
        <div class="container-fluid">
            <nav class="navbar row">
                <div class="logo  col-md-2">
                    <a class="navbar-brand" href="#">
                        <img src="http://<?php echo $url_path ?>/images/logo-wp.png" alt="logo">
                    </a>
                </div>
                <ul class="nav navbar-nav  col-md-8">
                    <li>
                        <a href="#" class="home">Home <i class="fas fa-angle-right"></i> </a>
                        <!---menu đa cấp-->
                        <ul class="submenu">
                            <li>
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Home Blocks</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li>
                        <a href="#">Pages <i class="fas fa-angle-right"></i> </a>
                        <!---menu đa cấp-->
                        <ul class="submenu">
                            <li>
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Team</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Shop</a>

                                <!---menu đa cấp-->
                                <!-- <ul class="submenu">
                                    <li>
                                        <a class="nav-link" href="#">Checkout</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Cart</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">My account</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li>
                                <a class="nav-link" href="#">Typography</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Elements</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">404</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="right  col-md-2">
                    <span class="gold">8 800 </span>
                    <span>353-24-55</span>
                </div>
            </nav>

            <div class="content">
                <h3>WIND, WATER, LIFESTYLE.</h3>
                <h2>KITE SCHOOL</h2>
                <h6>CALIFORNIA</h6>
                <button>Book A Lesson</button>
            </div>
        </div>
    </div>


    <div class="mui-ten-huong-len">
        <a href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</div>