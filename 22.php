<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-22">
    <div class="grey-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="comments-wrap">
                        <!-- title -->
                        <h4 class="extra-margin">
                            No Comments </h4>
                        <!--.title -->

                        <!-- comments -->
                        <div class="comment-content comments">
                        </div>
                        <!-- .comments -->

                        <!-- comments pagination -->
                        <!-- .comments pagination -->
                    </div>
                    <div class="leave-comment">

                        <h4 class="extra-margin">
                            Leave Comment </h4>

                        <div id="contact_form">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">or cancel reply</a></small></h3>
                                <p class="must-log-in">You must be <a href="../wp-logincd0f.html?redirect_to=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2Ffull-width%2F">logged in</a> to post a comment.</p>
                            </div><!-- #respond -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>