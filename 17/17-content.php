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
    $less->compileFile('less/17.less', 'css/17.css');

?>
<div class="type-17">
    <div class="container content_17">
      <div class="row">
        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_1.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>John L.Brookins</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>

        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_2.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>Anna R. Swanson</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>

        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_3.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>Leonor S. Hill</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_4.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>Merlin L. Pena</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>

        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_5.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>Maria M. Costa</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>

        <div class="col-md-3 active_17">
          <a href="#"><img src="../17/images/17_img_6.png" class="img_17" alt=""></a><br>
          <a href="#" class="name_17">
          <h2>Bernard M. Jones</h2></a><br>
          <p class="middle_text_17">Kite Teacher</p><br>
          <div class="icons_17">
              <a href="#" class="fa fa-facebook fs_17"></a>
              <a href="#" class="fa fa-paper-plane fs_17"></a>
              <a href="#" class="fa fa-linkedin fs_17"></a>
              <a href="#" class="fa fa-instagram fs_17"></a>
              <a href="#" class="fa fa-youtube-play fs_17_yt"></a>
          </div>
        </div>
      </div>
    </div>
</div>