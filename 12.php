<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-12">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xl-9 col-lg-9 col-9">
                <div class="img">
                    <a href="#" class="blog-item"><img src="http://<?php echo $url_path ?>/images/md-12.jpg" alt="img 1" class="img-fluid"></a>
                    <div class="article-caption">
                        <h3 class="blog-item-title">
                            <a href="#">
                                5 Sunny Days In Malaga </a>
                        </h3>
                        <div class="blog-item-meta">
                            Written on May 14, 2016 in <a href="#">Spain</a> 
                        </div>
                        <p>City, seaport and holiday resort on the Mediterranean in South Spain. Málaga is the heart of the Costa del Sol, a major tourist region. Birthplace of Picasso, the vibrant cosmopolitan city of Málaga is situated on the ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>