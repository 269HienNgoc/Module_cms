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
    $less->compileFile('less/3.less', 'css/3.css');

?>
<div class="type-3">
    <div class="container">
        <div class="col-md-6 left_3" style="padding: 25px;">
            <span class="aboutus_3">About Us</span>
            <h1>Our Little History</h1>
            <span class="text_3">We want our clients to feel awesome and unique.</span>
            <div class="border-left-custom_3">
                <p>We specialize in private kitesurfing lessons, semi-private kitesurfing lessons!</p>
                <p>We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.</p>
            </div>
            <button class="btnBAL_3" type="">Book A Lesson</button>
            <button type="">Learn More</button>
        </div>
        <div class="col-md-6 right_3">
            <iframe class="video_3" width="570" height="456" src="https://www.youtube.com/embed/4KEAdBN7I1g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>