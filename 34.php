<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-34">
    <div class="footer-blog-icon">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Tags</h2>
                    </div>
                    <div class="tags-title">
                        <ul class="nav nav-pills mb-3">
                            <li> <a href="#" class="tags">ancient</a></li>
                            <li> <a href="#" class="tags">art</a></li>
                            <li> <a href="#" class="tags">baltic</a></li>
                            <li> <a href="#" class="tags">beach</a></li>
                            <li> <a href="#" class="tags">capital</a></li>
                            <li> <a href="#" class="tags">east</a></li>
                            <li> <a href="#" class="tags">food</a></li>
                            <li><a href="#" class="tags">museum</a></li>
                            <li><a href="#" class="tags">nightlife</a></li>
                            <li><a href="#" class="tags">no sleep</a></li>
                            <li><a href="#" class="tags">party</a></li>
                            <li> <a href="#" class="tags">russia</a></li>
                            <li><a href="#" class="tags">sea</a></li>
                            <li><a href="#" class="tags">serbia</a></li>
                            <li><a href="#" class="tags">slavic</a></li>
                            <li> <a href="#" class="tags">spain</a></li>
                            <li><a href="#" class="tags">stallingrad</a></li>
                            <li><a href="#" class="tags">street</a></li>
                            <li><a href="#" class="tags">sunny</a></li>
                            <li><a href="#" class="tags">sweden</a></li>
                            <li> <a href="#" class="tags">usa</a></li>
                            <li><a href="#" class="tags">vacation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>