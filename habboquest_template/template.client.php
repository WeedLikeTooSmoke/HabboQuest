<?php
include $_SERVER['DOCUMENT_ROOT'] . "/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.sso.php"; 
?>
<!DOCTYPE html lang="en-US">
 <head>
  <title>Habboquest - Client</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Client" />
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
 <style>
            body{
                line-height:normal!important;
                background-color:#0E151C;
                margin:auto;
            }
            #client-div, #client-ui{
                display: block;       /* iframes are inline by default */
                background: #000;
                border: none;         /* Reset default border */
                height: 100vh;        /* Viewport-relative units */
                width: 100vw;
            }
        </style>
		     <iframe id="client-div" src="/habboquest_nitro/nitro-client/dist/index.html?sso=<?= Users::getUserInfo('auth_ticket') ?>"></iframe>
 </center>
 </body>
</html>