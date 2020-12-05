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
    $less->compileFile('less/7.less', 'css/7.css');

?>
<div class="type7">
  <div class="container cnt_7">
      <div class="row">
        <div class="col-xs-12 col-12 tai_7">
          <p class="p1">Pricing</p>
          <h3>Kite Scholl Programs</h3>
          <h6>We want our clients to feel awesome and unique.</h6>
        </div>
        <div class="col-xs-12 col-12 col-lg-4 tan_7">
          <div class="jm1">
            <div class="price-wrap">
                            <span class="plan-sign">$</span>
                            <span class="plan-price">45</span>
            </div>
            <div class="plan-name">
                <h3 class="color-dark">
                    Private                </h3>
            </div>
          </div>
          <div class="jn1">
            <ul class="list">
              <li class="enen">Transfers to kalpitiya lagoon</li>
              <li class="enen">Course with IKO instructors</li>
              <li class="enen">3 nights accommodation</li>
              <li class="enen"> IKO card-certificate</li>
            </ul>
          </div>
          <button class="button">Book A Lesson</button>
        </div>
        <div class="col-xs-12 col-12 col-lg-4">
        <div class="jm2">
          <div class="price-wrap2">
                            <span class="plan-sign2">$</span>
                            <span class="plan-price2">52</span>
            </div>
            <div class="plan-name2">
                <h3 class="color-dark">
                   Semi Private                </h3>
            </div>
          </div>
          <div class="jn2">
            <ul class="list">
              <li class="enen">Transfers to kalpitiya lagoon</li>
              <li class="enen">Course with IKO instructors</li>
              <li class="enen">3 nights accommodation</li>
              <li class="enen"> IKO card-certificate</li>
            </ul>
          </div>
          <div class="bnn2">
          <button class="button2">Book A Lesson</button>
          </div>
         
        </div>
        <div class="col-xs-12 col-12 col-lg-4">
        <div class="jm1">
            <div class="price-wrap">
                            <span class="plan-sign">$</span>
                            <span class="plan-price">72</span>
            </div>
            <div class="plan-name">
                <h3 class="color-dark">
                    Gruop                </h3>
            </div>
          </div>
          <div class="jn1">
            <ul class="list">
              <li class="enen">Transfers to kalpitiya lagoon</li>
              <li class="enen">Course with IKO instructors</li>
              <li class="enen">3 nights accommodation</li>
              <li class="enen"> IKO card-certificate</li>
            </ul>
          </div>
          <button class="button">Book A Lesson</button>
        </div>
      </div>
  </div>
</div>

