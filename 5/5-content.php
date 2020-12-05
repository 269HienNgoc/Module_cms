<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }

    $less = new lessc;
    $less->compileFile('less/5.less', 'css/5.css');

?>

<div class="type5">
    <div class="container-5">
        <div class="row">
            <div class="col-xs-12 col-12">
                <div class="col-lg-6 col-xl-3 section-special small-section">
                    <div class="content">
                        <p class="p1"> Services</p>
                        <h3>Let’s Start An Education!</h3>
                        <h6>We want our clients to feel awesome and unique.</h6>
                        <div class="owl-custom-nav hidden-below-lg">
                            <a href="#" class="owl-prev"><i class="fa fa-chevron-left"></i></a>
                            <a href="#" class="owl-next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-xl-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="img5">
                                <img src="./images/5_images_1.png" alt="">
                            </div>

                            <div class="item-content">
                                <div class="link">
                                    <a href="#" rel="tag">Delivery</a>
                                </div>
                                <h5 class="mt1">
                                    <a href="#">KiteSchool</a>
                                </h5>
                                <p class="mt0">
                                Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.</p>
                            </div>
                        
                           
                        </div>
                        <div class="col-md-3">
                            <div class="img5">
                                <img src="./images/5_images_2.png" alt="">
                            </div>
                            <div class="item-content">
                                <div class="link">
                                    <a href="#" rel="tag">Delivery</a>
                                </div>
                                <h5 class="mt1">
                                    <a href="#">Sailing</a>
                                </h5>
                                <p class="mt0">
                                Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.</p>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="img5">
                                <img src="./images/5_images_3.png" alt="">
                            </div>
                            <div class="item-content">
                                <div class="link">
                                    <a href="#" rel="tag">Delivery</a>
                                </div>
                                <h5 class="mt1">
                                    <a href="#">Kite Repairs</a>
                                </h5>
                                <p class="mt0">
                                Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.</p>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="img5">
                                <img src="./images/5_images_4.png" alt="">
                            </div>
                            <div class="item-content">
                                <div class="link">
                                    <a href="#" rel="tag">Delivery</a>
                                </div>
                                <h5 class="mt1">
                                    <a href="#">Equipment</a>
                                </h5>
                                <p class="mt0">
                                Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.</p>
                            </div>
                            
                            
                        </div>
                    </div>
                    

                </div>
        </div>
    </div>
</div>