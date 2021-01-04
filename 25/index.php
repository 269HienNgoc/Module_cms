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
$less->compileFile('less/25.less', 'css/25.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/139.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/25.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body >
        
        <!--BEGIN--Page element--->
        <?php include './25-content.php' ?>
        <div class="border" style="margin-top: 30px; margin-bottom: 30px;"></div>
        <!--END--Page element--->

        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <script src="owl/src/js/jquery-3.5.1.min.js"></script>
        <script src="owl/dist/owl.carousel.min.js"></script>
       
    </body>
</html>