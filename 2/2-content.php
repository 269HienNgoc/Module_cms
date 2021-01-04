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
        <div class="owl-carousel owl-theme owl-img">
            <div class="item">
                <img src="http://<?php echo $url_path ?>/images/slide01.jpg" alt="logo">
                <div class="content">
                    <div class="writer">
                        <h3>WIND, WATER, LIFESTYLE.</h3>
                        <h2>KITE SCHOOL</h2>
                        <h6>CALIFORNIA</h6>
                        <button>Book A Lesson</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://<?php echo $url_path ?>/images/slide02.jpg" alt="logo">
                <div class="content">
                    <div class="writer">
                        <h3>WIND, WATER, LIFESTYLE.</h3>
                        <h2>KITE SCHOOL</h2>
                        <h6>CALIFORNIA</h6>
                        <button>Book A Lesson</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://<?php echo $url_path ?>/images/slide03.jpg" alt="logo">
                <div class="content">
                    <div class="writer">
                        <h3>WIND, WATER, LIFESTYLE.</h3>
                        <h2>KITE SCHOOL</h2>
                        <h6>CALIFORNIA</h6>
                        <button>Book A Lesson</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mui-ten-huong-len">
            <a href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>

</div>