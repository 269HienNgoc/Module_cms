<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1-header">
    <div class="container">
        <div class="image-carousel">
            <nav class="row">
                <div class="logo  col-md-2">
                    <a class="navbar-brand" href="#">
                        <img src="http://<?php echo $url_path ?>/images/logo-wp.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li>
                            <a href="#" class="home">Home <i class="fas fa-angle-right"></i> </a>
                            <!---menu đa cấp-->
                            <ul>
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
                            <ul>
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
                                    <a class="nav-link" href="#">Shop <i class="fas fa-angle-right"></i></a>
                                    <!---menu đa cấp-->
                                    <ul>
                                        <li>
                                            <a class="nav-link" href="#">Checkout</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">Cart</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#">My account</a>
                                        </li>
                                    </ul>
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
                </div>
                <div class="right  col-md-2">
                    <span class="gold">8 800 </span>
                    <span>353-24-55</span>
                </div>
            </nav>
        </div>
    </div>
</div>