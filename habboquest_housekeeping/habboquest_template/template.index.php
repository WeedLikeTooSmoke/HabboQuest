<?php
include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_backend/habboquest_plugins/habboquest_plugins_admin_page/habboquest.admin.login.php";
?>
<html lang="en-US">
 <head>
  <title>Habboquest - Housekeeping Login</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Housekeeping Login" />
  <meta property="og:description" content="Checkout habboquest, Make friends play in events and travel around!" />
  <meta property="og:image" content="habboquest.png" />
  <meta property="og:url" content="https://habboquest.pw" />
  <meta property="og:site_name" content="habboquest" />
  <meta name="robots" content="index, follow"/>
  <link rel="canonical" href="https://habboquest.nl"/>
  <link rel="stylesheet" href="http://localhost/habboquest_template/habboquest_css/style.habboquest.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
 </head>
 <body>
 <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center>
   <img src="http://localhost/habboquest_template/habboquest_images/habboquest.gif"></img><br><br>
   <form method="POST">
    <div id="habboquest-login-credentials">
     <input type="text" name="habboquestAdminUsername" placeholder="Username..."/><br>
     <input type="password" name="habboquestAdminPassword" placeholder="Password..."/><br>
    </div>
    <div id="habboquest-login-pincode">
     <input type="password" name="habboquestAdminPinCode" placeholder="Pin Code..."/><br>
    </div>
    <button id="habboquest-login-complete" type="submit" name="habboquestAdminLogin">Login</button>
   </form>
   <button onClick="
    getElementById('habboquest-login-credentials').style.display = 'none';
    getElementById('habboquest-login-one').style.display = 'none';
    getElementById('habboquest-login-two').style.display = 'inline-block';
    getElementById('habboquest-login-complete').style.display = 'inline-block';
    getElementById('habboquest-login-pincode').style.display = 'block';" id="habboquest-login-one" class="habboquest-login-button">
    Next <i class="fa-solid fa-angle-right"></i>
   </button>
   <button onClick="
    getElementById('habboquest-login-credentials').style.display = 'inline-block';
    getElementById('habboquest-login-one').style.display = 'inline-block';
    getElementById('habboquest-login-two').style.display = 'none';
    getElementById('habboquest-login-complete').style.display = 'none';
    getElementById('habboquest-login-pincode').style.display = 'none';" id="habboquest-login-two" class="habboquest-login-button">
    <i class="fa-solid fa-angle-left"></i> Back
   </button><br><br>
  Written & Designed by Declan, Goddy, Kela<br>
   &copy; habbo.quest, All rights reserved<br>
  </center>
 </body>
</html>