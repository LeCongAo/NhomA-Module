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
$less->compileFile('less/12.less', 'css/12.css');
$less->compileFile('less/14.less', 'css/14.css');
$less->compileFile('less/19.less', 'css/19.css');
$less->compileFile('less/20.less', 'css/20.css');
$less->compileFile('less/21.less', 'css/21.css');
$less->compileFile('less/26.less', 'css/26.css');
$less->compileFile('less/27.less', 'css/27.css');
$less->compileFile('less/32.less', 'css/32.css');
$less->compileFile('less/34.less', 'css/34.css');
$less->compileFile('less/36.less', 'css/36.css');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>139</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/12.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/14.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/19.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/20.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/21.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/26.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/27.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/32.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/34.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/36.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/12.less', 'css/12.css');
    $less->compileFile('less/14.less', 'css/14.css');
    $less->compileFile('less/19.less', 'css/19.css');
    $less->compileFile('less/20.less', 'css/20.css');
    $less->compileFile('less/21.less', 'css/21.css');

    $less->compileFile('less/26.less', 'css/26.css');
    $less->compileFile('less/27.less', 'css/27.css');
    $less->compileFile('less/32.less', 'css/32.css');
    $less->compileFile('less/34.less', 'css/34.css');
    $less->compileFile('less/36.less', 'css/36.css');
    ?>
</head>

<body>
    <?php include './12.php'; ?>
    <?php include './14.php'; ?>
    <?php include './36.php'; ?>
    <?php include './19.php'; ?>
    <?php include './20.php'; ?>
    <?php include './21.php'; ?>
    <?php include './27.php'; ?>
    <?php include './26.php'; ?>
    <?php include './32.php'; ?>
    <?php include './34.php'; ?>
</body>

</html>