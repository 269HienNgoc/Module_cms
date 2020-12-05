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
    $less->compileFile('less/12.less', 'css/12.css');

?>
<div class="type-12">
    <div class="container content_12">
        <span class="aboutus_12">Team</span>
        <h1 class="name_12">We Are Energetic Experts</h1>
        <span class="text_12">We want our clients to feel awesome and unique.</span>

         <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#"><img src="..\images\12_img_1.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>John L.Brookins</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div>
        
      </div>
      <div class="swiper-slide"><a href="#"><img src="..\images\12_img_2.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>Anna R. Swanson</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div></div>
      <div class="swiper-slide"><a href="#"><img src="..\images\12_img_3.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>Leonor S. Hill</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div></div>
      <div class="swiper-slide"><a href="#"><img src="..\images\12_img_4.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>Merlin L. Pena</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div></div>
        <div class="swiper-slide">
        <a href="#"><img src="..\images\12_img_5.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>Maria M. Costa</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div>
        
      </div>
      <div class="swiper-slide">
        <a href="#"><img src="..\images\12_img_6.png" class="img_12" alt=""></a><br>
        <a href="#" class="name_12"><h2>Bernard M. Jones</h2></a><br>
        <p class="middle_text_12">Kite Teacher</p><br>
        <div class="icons_12">
            <a href="#" class="fa fa-facebook fs_12"></a>
            <a href="#" class="fa fa-paper-plane fs_12"></a>
            <a href="#" class="fa fa-linkedin fs_12"></a>
            <a href="#" class="fa fa-instagram fs_12"></a>
            <a href="#" class="fa fa-youtube-play fs_12_yt"></a>
        </div>
        
      </div>
    </div>
    
  </div>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

    </div>
</div>