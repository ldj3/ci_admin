<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Lock page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet" />
  <link href="public/css/style_responsive.css" rel="stylesheet" />
  <link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
  <script src="public/js/jquery-1.8.3.min.js"></script>
  <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/js/jquery.blockui.js"></script>
  <script src="public/js/scripts.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLOCK();
    });
  </script>
</head>
<body id="lock-body">
  <div class="lock-header">
      <!-- BEGIN LOGO -->
      <a href="index.php/home" id="logo" class="center">
          <img src="public/img/logo.png" alt="logo" class="center" />
      </a>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOCK -->
  <div id="lock">
    <!-- BEGIN LOCK FORM -->
    <form id="lockform" class="form-vertical no-padding no-margin" action="index.html">
      <div class="lock-title">
          <i class="icon-lock"></i>
          <h3>Locked</h3>
      </div>
      <div class="lock-avatar-row">
          <img src="img/lock-avatar.jpg" alt="">
      </div>
      <div class="control-wrap lock-identity">
          <h3>Dulal Khan</h3>
          <span>dkmosa@gmail.com</span>
          <div class="lock-form-row">
              <form action="index.html" class="form-search">
                  <div class="input-append">
                      <input type="password" placeholder="Password" class="m-wrap">
                      <button class="btn tarquoise" type="submit"><i class=" icon-arrow-right"></i></button>
                  </div>
                  <div class="relogin">
                      <a href="login.html">Not Dulal Khan ?</a>
                  </div>
              </form>
          </div>
      </div>

    </form>
    <!-- END LOCK FORM -->        
    
  </div>
  