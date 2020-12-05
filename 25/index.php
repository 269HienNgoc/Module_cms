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
        <link href="<?php echo $url_path ?>/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        $less->compileFile('less/139.less', 'css/139.css');
        $less->compileFile('less/page.less', 'css/page.css');
        
        ?>
    </head>
    <body >
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <script src="owl/src/js/jquery-3.5.1.min.js"></script>
        <script src="owl/dist/owl.carousel.min.js"></script>


        <!--BEGIN--Page element--->

        <?php include './templates/pages/25-module.php' ?>
        <div class="border" style="margin-top: 30px; margin-bottom: 30px;"></div>
        <!--END--Page element--->

       
    </body>
</html>