<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-26">
    <div class="footer-blog-icon">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Follow Us</h2>
                    </div>
                    <div class="widget-social">
                        <a href="#" class="icon"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="icon"> <span class="fa fa-twitter"></span></a>
                        <a href="#" class="icon"><span class="fa fa-google"></span></a>
                        <a href="#" class="icon"><span class="fa fa-linkedin"></span></a>
                        <a href="#" class="icon"><span class="fa fa-pinterest"></span></a>
                        <a href="#" class="icon"><span class="fa fa-youtube"></span></a>
                        <a href="#" class="icon"><span class="fa fa-flickr"></span></a>
                        <a href="#" class="icon"><span class="fa fa-behance"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
