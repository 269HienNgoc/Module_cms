<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-22-content">

  <div class="container">
    <div class="account">
      <div class="login">
        <h2>Log in</h2>
        <form action="#" method="POST">
          <div class="form-group dangnhap">
            <input type="text" class="form-control" placeholder="Username or email address *">
            <input type="password" class="form-control" placeholder="Password *">
          </div>
          <button type="submit">Log in</button>
          <div class="lost">
            <a href="#">Lost your password?</a>
          </div>
        </form>
      </div>


      <h2>Registration</h2>
      <form action="#" method="POST" role="form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username *">
          <input type="text" class="form-control" placeholder="Email address *">
          <input type="password" class="form-control" placeholder="Password *">
        </div>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
</div>