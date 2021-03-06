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
$less->compileFile('less/2.less', 'css/2.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Module</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/2.less', 'css/2.css');
    ?>
</head>

<body>
    <?php include '../2/2-content.php'?>
    
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>

    <script>

$('.owl-img').owlCarousel({
    items:1,
    lazyLoad:true,
    loop:true,
    margin:10
});
    </script>
</body>

</html>