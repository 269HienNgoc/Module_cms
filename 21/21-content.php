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
    $less->compileFile('less/21.less', 'css/21.css');

?>

<div class="type21">
    <div class="container ner_21">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumbs-woocommerce">
                    <li>
                        <a class="active" href="#">
                            <span>Shopping cart</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <span>Checkout details</span>
                        </a>
                    </li>
                    <li>
                        <span class="o_21">Order complete</span>
                    </li>
                </ul>
                <div class="divider-55"></div>
            </div>
            <div class="col-12 column-main">
                <article id="post-3350" class="post-3350 page type-page status-publish hentry">
                    <div class="item-content entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
                            <p class="return-to-shop">
                                <a class="button wc-backward" href="#">
                                    Return to shop </a>
                            </p>

                        </div>
                    </div>
            </div>
        </div>