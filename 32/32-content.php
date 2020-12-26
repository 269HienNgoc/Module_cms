<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-32-content">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="comment">
          <div class="row">
            <div class="col-md-2">
              <img src="http://<?php echo $url_path ?>/images/riddle.jpg" alt="anh">
            </div>
            <div class="col-md-10">
              <h4>Robert I. Riddle</h4>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
              <i class="fas fa-reply"></i> Reply
              <div class="child-top">
                <div class="row">
                  <div class="col-md-2">
                    <img src="http://<?php echo $url_path ?>/images/riddle.jpg" alt="anh">
                  </div>
                  <div class="col-md-10">
                    <h4>Robert I. Riddle</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                    <i class="fas fa-reply"></i> Reply
                  </div>
                </div>
              </div>
              <div class="child-bottom">
                <div class="row">
                  <div class="col-md-2">
                    <img src="http://<?php echo $url_path ?>/images/riddle.jpg" alt="anh">
                  </div>
                  <div class="col-md-10">
                    <h4>Robert I. Riddle</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                    <i class="fas fa-reply"></i> Reply
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <img src="http://<?php echo $url_path ?>/images/riddle.jpg" alt="anh">
            </div>
            <div class="col-md-10">
              <h4>Robert I. Riddle</h4>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
              <i class="fas fa-reply"></i> Reply
            </div>
          </div>
        </div>
        <div class="form-comment">
          <h5>4 comments</h5>
          <form action="#" method="POST">
            <div class="flex">
              <input type="text" class="form-control name" placeholder="Name">
              <input type="text" class="form-control email" placeholder="Email">
            </div>
            <br>
            <textarea name="mota" class="form-control" cols="45" rows="4" placeholder="Write a comment"></textarea>
            <br>
            <input type="checkbox"> Save my name, email, and website in this browser for the next time I comment.
          </form>
        </div>
        <div class="send">
          <button>Send</button>
        </div>
      </div>
    </div>
  </div>
</div>