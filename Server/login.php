<?php

if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}

session_start();
require_once 'classes/Auth.class.php';

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Authorization</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
	 <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->
	 <script type="text/javascript" src="js/placeholder.js"></script>
  </head>

  <body>

    <div class="container">

      <?php if (Auth\User::isAuthorized()): ?>
    
      <h1>Your are welcome!</h1>

      <form class="ajax" method="post" action="ajax.php">
          <input type="hidden" name="act" value="logout">
          <div class="form-actions">
              <button class="btn btn-large btn-primary" type="submit">Logout</button>
          </div>
      </form>

      <?php else: ?>

      <form id="slick-login" class="form-signin ajax" method="post" action="module/ajax.php">
        <div class="main-error alert alert-error hide"></div>

        <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
        <input name="username" type="text" class="input-block-level" placeholder="Username" autofocus>
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <!-- <label class="checkbox"> -->
          <div id="remember"> <input name="remember-me" type="checkbox" value="remember-me" checked> Remember me</div>
        <!-- </label> -->
        <input type="hidden" name="act" value="login">
        <input class="btn btn-large btn-primary" type="submit" value="Sing in">
    
        <!-- <div class="alert alert-info" style="margin-top:15px;">
            <p>Not have an account? <a href="register.php">Register it.</a>
        </div> -->
      </form>

      <?php endif; ?>

    </div> <!-- /container -->

   	<script src="vendor/jquery-2.0.3.min.js"></script>
    <script src="js/ajax-form.js"></script>

  </body>
</html>
