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
    $less->compileFile('less/19.less', 'css/19.css');

?>
<div class="type-19">
    <div class="container">
        
                <div class="cottrai_19">
                <form action="#" class="searchForm_19">
                    <input type="search" id="" class="search-field_19" placeholder="Search" value="" name="s">
                    <button type="submit" class="btn_19" value="Search">Search</button>
                    <input type="hidden" class="" name="post_type" value="product">
                </form>
            </div>
                
                <div class="cottrai_19">
                    <h2>Categories</h2>
                    <ul class="menu_19">
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Kite-Surf</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Kiteboarding</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Kite</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Kiteschool</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Sailing</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Uncategorized</a></li>
                        <li class="menu_19_items"><a href="#" class="menu_19_items_hover">Windsurf</a></li>
                    </ul>
                </div>
                <div class="cottrai_19">
                    <h2>Viewed Products</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#"><img src="../19/images/19_img_1.png" class="img_19" alt=""></a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="text_19_a">Kitesurfing Kite Enduro <br> £250.00</a>
                        </div>
                            
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="#"><img src="../19/images/19_img_2.png" class="img_19" alt=""></a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="text_19_a">Kitesurfing Kite Enduro <br> £250.00</a>
                        </div>
                            
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="#"><img src="../19/images/19_img_3.png" class="img_19" alt=""></a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="text_19_a">Kitesurfing Kite Enduro <br> £250.00</a>
                        </div>
                            
                    </div>
                
                </div>
   </div> 
</div>