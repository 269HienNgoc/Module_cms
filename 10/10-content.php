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
    $less->compileFile('less/10.less', 'css/10.css');

?>
<div class="type-10">
    <div class="container">
        
            <h2 class="title-10">Get 30% Off Your First Order</h2><br>
            <h5 class="text_left_10">
            Join our newsletter to receive the latest <br>updates and promotions.   </h5>

            <form>
                <div class="mc4wp-form-fields">
                    <div class=" mailchimp-1">
                        <span class="form-group">
                            <input type="email" name="email" class="form-control mail_10" placeholder="Enter Your Email" required="">
                        </span>
                        <button type="submit" class="btnBAL_10">Book a Lesson</button>
                    </div>
                    
                    
            </form>
            
        <div class="row">
            <div class="col-md-4 ">
                <img src="../10/images/logo.png" class="logo_10" alt="">
                <p class="text_left_10">
                    The estuary is the well-known kite spot in the lagoon. Two launches are possible.
                </p>

                <a href="#" class="fa fa-facebook fs_10 ">
                <a href="#" class="fa fa-tumblr fs_10 ">
                <a href="#" class="fa fa-instagram fs_10 ">
                <span class=""></span>
            </a>
            </div>
            <div class="col-md-4 ">
                <div  class="menu_10"><h3 class="title_10">Userful Link</h3>
                    <div class="menu_footer_10">
                        <ul class="menu_count">
                            <li  class="menu_10_homeblock"><a href="#"class="menu_10_items">Home Blocks</a></li>
                            <li  class="menu_10_homeblock"><a href="#"class="menu_10_items">About</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Team</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Contacts</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Pricing</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Typography</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Shop</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Services</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">FAQ</a></li>
                            <li  class="menu_10_homeblock"><a href="#" class="menu_10_items">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="title_10">Portfolio</h3>
                <div class="menu_footer_img_10">
                    <ul>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_1.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_3.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_4.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_5.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img class="img_10" src="../10/images/10_img_6.png" alt=""></a>
                        </li>
                    </ul>
                    </div>
            </div>
        </div>
    </div>
</div>