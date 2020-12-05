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
    $less->compileFile('less/14.less', 'css/14.css');

?>

<div class="type14">
    <div class="container cnt_14">
        <div class="row">
            <div class="col-xs-12 col-12 md_14">
                <p class="p1">Gallery</p>
                <h3>Our Photos & Videos</h3>
                <h6>We want our clients to feel awesome <br> and unique.</h6>
                <div class="isotope-wrapper isotope row c-gutter-5 c-mb-5 masonry-layout">
                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im4.png" alt="" class="item-media1">
                                        </div>
                                    </div>
                    </div>
                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im23.png" alt="" class="item-media2">
                                        </div>
                                    </div>
                    </div>

                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im12.png" alt="" class="item-media3">
                                        </div>
                                    </div>
                    </div>

                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im24.png" alt=""class="item-media4">
                                        </div>
                                    </div>
                    </div>

                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im26.png" alt="" class="item-media5">
                                        </div>
                                    </div>
                    </div>

                    <div class="isotope-item item-layout-tile  col-lg-4 gallery-wrap  ">
                                    <div class="vertical-item item-gallery content-absolute ds">
                                        <div class="item-media">
                                            <img src="./images/im25.png" alt="" class="item-media6">
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>