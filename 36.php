<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-36">
    <!-- Flickity HTML init  -->
    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "groupCells": 1, "autoPlay": 2000}'>
        <div class="carousel-cell"> <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl1.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5>5 Sunny Days In Malaga</h5>
                </div>
            </a>
        </div>
        <div class="carousel-cell"> <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl2.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> Sightseeing in Novi Sad</h5>
                </div>
            </a></div>
        <div class="carousel-cell"> <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl3.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> Couple Of Days In Sunny Miami</h5>
                </div>
            </a></div>
        <div class="carousel-cell"> <a href="#"> <img src="http://<?php echo $url_path ?>/images/sl4.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> No Sleep In New York</h5>
                </div>
            </a></div>
    </div>
</div>