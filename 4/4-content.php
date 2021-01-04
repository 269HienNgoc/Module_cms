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
    $less->compileFile('less/4.less', 'css/4.css');

?>


<div class="type-4">
  <div class="container">
    <div class="row align-center">
  
      <div class="col-xs-12 col-12 col-lg-8 col-xl-7  ol4">
        
          <div class="col-xs-12 col-12 col-lg-8 col-xs7 title_4">
            <p class="p1"> Advantages</p>
            <h3>Why Learn How To Kitesur With Us?</h3>
            <h6>We want our client to feel awesome and unique.</h6>
            <br>
            <br>
              <div class="row cot">
                <div class="col-md-4">
                
                <img src="./images/h1.png" alt="">
                    <h2>251</h2>
                    <p>Safest spot home to flat and shallow</p>
                  </div>
                <div class="col-md-4">
                    <img src="./images/h2.png" alt="">
                    <h2>72</h2>
                    <p>Safest spot home to flat and shallow</p>
              </div>
                <div class="col-md-4">
                    <img src="./images/h3.png" alt="">
                    <h2>193</h2>
                    <p>Safest spot home to flat and shallow</p>
                </div>
        
    
     
       
      </div>
      
    </div>
  </div>

</div>

</div>


</div>
</div>