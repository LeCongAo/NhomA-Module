<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-15">
    <section class="box-banner-logo">
        <div class="container">
            <div class="conten">
                <div class="block-bannerlogo">
                    <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl1.jpg" alt="img 1" class="img-fluid"></a>
                </div>
                <div class="block-bannerlogo">
                    <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl2.jpg" alt="img 2" class="img-fluid"></a>
                </div>
                <div class="block-bannerlogo">
                    <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl3.jpg" alt="img 4" class="img-fluid"></a>
                </div>
                <div class="block-bannerlogo">
                    <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl4.jpg" alt="img 4" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>
</div>