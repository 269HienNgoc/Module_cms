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
    $less->compileFile('less/36.less', 'css/36.css');

?>
<div class="type-36">
    <div class="container content_36">
        <span class="aboutus_36">Testimonials</span>
        <h1 class="name_36">What People Say</h1>
        <span class="text_36">We want our clients to feel awesome and unique.</span>

         <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">

      
      <div class="swiper-slide">
        <img src="../36/images/36_img_1.png" class="img_36" alt="">

        <div class="down_36"></div>
        
        <a href="#" class="name_36"><h2>Sylvia J. Roberts</h2></a><br>
        <p class="middle_text_36">As a sales gamification company, we were skeptical to work with a consultant to</p><br>
        <div class="icons_36">
            <a href="#" class="fa fa-facebook fs_36"></a>
            <a href="#" class="fa fa-twitter fs_36"></a>
            <a href="#" class="fa fa-linkedin fs_36"></a>
        </div>
        
      </div>

      <div class="swiper-slide">
        

        <div class="down_36_a"></div>
        
        <a href="#" class="name_36"><h2>Christopher T. Storm</h2></a><br>
        <p class="middle_text_36">As a sales gamification company, we were skeptical to work with a consultant to</p><br>
        <div class="icons_36">
            <a href="#" class="fa fa-facebook fs_36"></a>
            <a href="#" class="fa fa-twitter fs_36"></a>
            <a href="#" class="fa fa-linkedin fs_36"></a>
        </div>
        <img src="../36/images/36_img_2.png" class="img_36" alt="">
        
      </div>

      <div class="swiper-slide">
        <img src="../36/images/36_img_3.png" class="img_36" alt="">

        <div class="down_36"></div>
        
        <a href="#" class="name_36"><h2>Andrew D. Chandler</h2></a><br>
        <p class="middle_text_36">As a sales gamification company, we were skeptical to work with a consultant to</p><br>
        <div class="icons_36">
            <a href="#" class="fa fa-facebook fs_36"></a>
            <a href="#" class="fa fa-twitter fs_36"></a>
            <a href="#" class="fa fa-linkedin fs_36"></a>
        </div>
        
      </div>

      <div class="swiper-slide">
        

        <div class="down_36_a"></div>
        
        <a href="#" class="name_36"><h2>Margaret R. Delarosa</h2></a><br>
        <p class="middle_text_36">As a sales gamification company, we were skeptical to work with a consultant to</p><br>
        <div class="icons_36">
            <a href="#" class="fa fa-facebook fs_36"></a>
            <a href="#" class="fa fa-twitter fs_36"></a>
            <a href="#" class="fa fa-linkedin fs_36"></a>
        </div>
        <img src="../36/images/36_img_4,.png" class="img_36" alt="">
        
      </div>
    </div>
    
  </div>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 2,
      slidesPerGroup: 4,
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