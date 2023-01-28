<?php
include $_SERVER['DOCUMENT_ROOT'] . "/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.sso.php"; 
include $_SERVER['DOCUMENT_ROOT'] . "/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.register.php"; 
include $_SERVER['DOCUMENT_ROOT'] . "/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.login.php";
?>
<html lang="en-US">
 <head>
  <title>Habboquest - Index</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Index" />
  <meta property="og:description" content="Checkout habboquest, Make friends play in events and travel around!" />
  <meta property="og:image" content="habboquest.png" />
  <meta property="og:url" content="http://habbo.quest" />
  <meta property="og:site_name" content="habboquest" />
  <meta name="robots" content="index, follow"/>
  <link rel="canonical" href="http://habbo.quest"/>
  <link rel="stylesheet" href="http://localhost/habboquest_template/habboquest_css/style.habboquest.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
 </head>
 <body>
 <center>
 <br><br><br><br><br><br><br><br><br><br><br>
  <img src="http://localhost/habboquest_template/habboquest_images/habboquest.gif"></img><br><br>
  <div id="habboquest-login">
   <?php
    if ($habboquestEnable['habboquestPluginBetaLogin'] == true) {
      echo "
      <form method='POST'>
       <input type='text' name='habboquestUsername' placeholder='Username...'/><br>
       <input type='password' name='habboquestPassword' placeholder='Password...'/><br>
       <input type='password' name='habboquestBetaCode' placeholder='Beta Code...'/><br><br>
       <button type='submit' name='habboquestLogin'>Login</button>
      </form>
      ";
    } else {
      echo "
      <form method='POST'>
       <input type='text' name='habboquestUsername' placeholder='Username...'/><br>
       <input type='password' name='habboquestPassword' placeholder='Password...'/><br><br>
       <button type='submit' name='habboquestLogin'>Login</button>
      </form>
      ";
    }
   ?>
   <button onClick="getElementById('habboquest-login').style.display = 'none'; 
                    getElementById('habboquest-register').style.display = 'block';">Register</button>
  </div>
  <div id="habboquest-register">
   <form method="POST">
    <input type="text" name="habboquestUsername" placeholder="Username..."/><br>
    <input type="email" name="habboquestMail" placeholder="Email..."/><br>
    <input type="text" name="habboquestRefferal" placeholder="Reffered By..."/><br>
    <input type="password" name="habboquestPassword" placeholder="Password..."/><br>
    <input type="password" name="habboquestPasswordRetype" placeholder="Retype Password..."/><br><br>
    <button type="submit" name="habboquestRegister">Register</button>
   </form>
   <button onClick="getElementById('habboquest-login').style.display = 'block'; 
                    getElementById('habboquest-register').style.display = 'none';">Login</button>
  </div><br>
  Written & Designed by Declan, Goddy, Kela<br>
   &copy; habbo.quest, All rights reserved<br>
 </center>
 </body>
</html>