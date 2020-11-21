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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>139</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/139.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/slick-theme.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/slick.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/139.less', 'css/139.css');
        ?>
    </head>
    <body >
    <?php include '../139/12.php'; ?>
    <?php include '../139/14.php'; ?>
    <?php include '../139/19.php'; ?>
    <?php include '../139/20.php'; ?>
    <?php include '../139/21.php'; ?>
    <?php include '../139/22.php'; ?>
    <?php include '../139/24.php'; ?>
    <?php include '../139/26.php'; ?>
    <?php include '../139/27.php'; ?>
    <?php include '../139/32.php'; ?>
    <?php include '../139/33.php'; ?>
    <?php include '../139/34.php'; ?>
    <script src="<?php echo $url_path ?>/js/site.js"></script>
    </body>
</html>