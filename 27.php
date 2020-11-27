<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-27">
    <div class="footer-blog-icon">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Recent Posts</h2>
                    </div>
                    <div class="row row-widget">
                        <div class="col-md-2">
                            <div class="widget-image">
                                <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img1.jpg" alt="img 1" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="widget">
                                <div class="widget-a">
                                    <a href="#">5 Sunny Days In Malaga</a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i> May 14, 2016 <i class="fa fa-comment-o" id="cm"></i>2
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row row-widget">
                        <div class="col-md-2">
                            <div class="widget-image">
                                <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img2.jpg" alt="img 2" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="widget">
                                <div class="widget-a">
                                    <a href="#">Week In Volgograd</a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i> April 5, 2016 <i class="fa fa-comment-o" id="cm"></i>3
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row row-widget">
                        <div class="col-md-2">
                            <div class="widget-image">
                                <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img3.jpg" alt="img-3" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="widget">
                                <div class="widget-a">
                                    <a href="#">Spring In Sweden</a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i> April 1, 2016 <i class="fa fa-comment-o" id="cm"></i>2
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="title-wrap">
                        <h2 class="widget-title">Follow Us</h2>
                    </div>
                    <div class="widget-social-27">
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
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Instagram</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Tag</h2>
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
                    <div class="title-wrap">
                        <h2 class="widget-title">Search</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>