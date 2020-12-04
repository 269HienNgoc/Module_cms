<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-9-content">
    <div class="container">
        <div class="content-top">
            <div class="row">
                <div class="col-md-3">
                    <div class="chieucao">
                        <img src="http://<?php echo $url_path ?>/images/testimonials_1.jpg" alt="logo" class="img-fluid">
                    </div>

                    <div class="dieuchinh relative">
                        <h6>Sylvia J. Roberts</h6>
                        <p>As a sales gamification company, we were skeptical to work with a consultant to</p>
                        
                        <div class="face">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-invision"></i></a>
                        </div>

                        <div class="icon">
                            <i class="fas fa-chevron-circle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dieuchinh ">
                        <h6>Andrew D. Chandler</h6>
                        <p>As a sales gamification company, we were skeptical to work with a consultant to</p>
                        
                        <div class="face">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-invision"></i></a>
                        </div>

                    </div>
                    <div class="chieucao relative">
                        <img src="http://<?php echo $url_path ?>/images/testimonials_2.jpg" alt="logo" class="img-fluid">

                        <div class="icon">
                            <i class="fas fa-chevron-circle-up"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="chieucao">
                        <img src="http://<?php echo $url_path ?>/images/testimonials_3.jpg" alt="logo" class="img-fluid">
                    </div>

                    <div class="dieuchinh relative">
                        <h6>Christopher T. Storm</h6>
                        <p>As a sales gamification company, we were skeptical to work with a consultant to</p>

                        <div class="face">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-invision"></i></a>
                        </div>

                        <div class="icon">
                            <i class="fas fa-chevron-circle-up"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dieuchinh relative">
                        <h6>Margaret R. Delarosa</h6>
                        <p>As a sales gamification company, we were skeptical to work with a consultant to</p>
                        
                        <div class="face">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-invision"></i></a>
                        </div>

                    </div>
                    <div class="chieucao relative">
                        <img src="http://<?php echo $url_path ?>/images/testimonials_4.jpg" alt="logo" class="img-fluid">

                        <div class="icon">
                            <i class="fas fa-chevron-circle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>