<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/139.less', 'css/139.css');
$less->compileFile('less/page.less', 'css/page.css');
$less->compileFile('less/styles.less', 'css/styles.css');
$less->compileFile('less/29.less', 'css/29.css');
$less->compileFile('less/30.less', 'css/30.css');
$less->compileFile('less/8.less', 'css/8.css');
$less->compileFile('less/6.less', 'css/6.css');
$less->compileFile('less/23.less', 'css/23.css');
$less->compileFile('less/34.less', 'css/34.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="<?php echo $url_path ?>/css/styles.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/139.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/page.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/29.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/30.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/8.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/6.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/23.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/34.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        $less->compileFile('less/6.less', 'css/6.css');
        
        ?>
    </head>
    <body >
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <script src="owl/src/js/jquery-3.5.1.min.js"></script>
        <script src="owl/dist/owl.carousel.min.js"></script>
        <!--BEGIN--Page element--->

        <?php include './templates/pages/6-module.php' ?>
        <div class="border" style="margin-top: 30px; margin-bottom: 30px;"></div>

        <!--END--Page element--->
       
    </body>
</html>