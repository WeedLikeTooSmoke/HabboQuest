<html lang="en-US">
 <head>
  <title>Habboquest - Me</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Me" />
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
  <div class="habboquest-nav">
   <div class="habboquest-nav-container">
    <div class="habboquest-nav-grid">
     <div class="habboquest-nav-grid-a-1">
      <img src="http://localhost/habboquest_template/habboquest_images/habboquest.gif"></img>
     </div>
     <div class="habboquest-nav-grid-a-2">
      <a><i class="fa fa-user"></i>
      <div class="habboquest-nav-grid-other-link">
       <div onClick="location.href = '/me';"><?php echo $_SESSION['habboquestUsername']; ?></div>
       <div onClick="location.href = '/account';">Account</div>
       <div onClick="location.href = '/inventory';">Inventory</div>
       <div onClick="location.href = '/logout';">Logout</div>
      </div>
      </a>
      <a><i class="fa fa-users"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="location.href = '/leaderboard';">Leaderboard</div>
        <div onClick="location.href = '/online';">Online</div>
        <div onClick="location.href = '/news';">News</div>
        <div onClick="location.href = '/staff';">Staff</div>
        <div onClick="location.href = '/rarevalues';">Rare Values</div>
        <div onClick="location.href = '/timetable';">Timetable</div>
       </div>
      </a>
      <a><i class="fa fa-store"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="location.href = '/currencys';">Currencys</div>
        <div onClick="location.href = '/rarecrates';">Rare Crates</div>
        <div onClick="location.href = '/lottery';">Lottery Tickets</div>
        <div onClick="location.href = '/vip';">VIP</div>
        <div onClick="location.href = '/donate';">Donate</div>
       </div>
      </a>
      <a><i class="fa fa-hashtag"></i>
       <div class="habboquest-nav-grid-other-link">
        <div onClick="window.open('https://www.facebook.com/profile.php?id=100079706507732')">Facebook</div>
        <div onClick="window.open('https://twitter.com/habbo_quest')">Twitter</div>
        <div onClick="window.open('https://www.instagram.com/habbo.quest/')">Instagram</div>
        <div onClick="window.open('https://discord.gg/hJsNqw2C9x')">Discord</div>
       </div>
      </a>
     </div>
     <div class="habboquest-nav-grid-a-3">
      <a target="_BLANK" href="/client">Enter</a> 
      <a target="_BLANK" href="/habboquest_housekeeping/index">House Keeping</a> 
      <a href="/online"><?= Page::online(); ?> online</a>
     </div>
    </div>
   </div>   
  </div>
  <div class="habboquest-content">
   <div class="habboquest-content-grid">
    <div class="habboquest-content-grid-a-1">
     <div class="habboquest-small-user-profile">
      <img style="z-index: 2; position: relative;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo xss(Users::getUserInfo('look')) ?>&size=b&direction=3&head_direction=3&"></img>
      <img style="position: absolute; margin-left: -62.5px; margin-top: 135px; z-index: 1;" src="http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif"></img>
      <div class="habboquest-small-user-profile-grid">
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-id-badge"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("username")); ?></div>
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-cubes"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("pixels")); ?></div>
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-envelope"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("mail")); ?></div>
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-coins"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("credits")); ?></div>
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-message"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("motto")); ?></div>
       <div class="habboquest-small-user-profile-grid-a-1">&nbsp; <i class="fa fa-gem"></i> &nbsp; &nbsp; &nbsp; <?php echo xss(Users::getUserInfo("points")); ?></div>
      </div>
     </div>
     <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.announcement.php"; ?>
     <div class="habboquest-me-grid">
     <div class="habboquest-users-online">
      <img style="z-index: 9999; position: absolute; width: 100%; transform: scaleX(-1); opacity: 0.2;" src="http://localhost/habboquest_template/habboquest_images/banner.png"></img>
      <div class="habboquest-me-box">
       Habboquest's Hottest Rooms<br><br>
       <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.hottestRooms.php"; ?> 
      </div>
     </div>
     <div class="habboquest-hottest-rooms">
      <img style="z-index: 9999; position: absolute; width: 100%; transform: scaleX(-1); opacity: 0.2;" src="http://localhost/habboquest_template/habboquest_images/banner.png"></img>
      <div class="habboquest-me-box">
       Habboquest's Latest Purchases<br><br>
       <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.recentPurchases.php"; ?>
      </div>
     </div>  
     <div class="habboquest-users-online">
      <img style="z-index: 9999; position: absolute; width: 100%; transform: scaleX(-1); opacity: 0.2;" src="http://localhost/habboquest_template/habboquest_images/banner.png"></img>
      <div class="habboquest-me-box">
       Habboquest's User Of The Week<br><br>
       <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.uotw.php"; ?>
      </div>
     </div>
     <div class="habboquest-hottest-rooms">
      <img style="z-index: 9999; position: absolute; width: 100%; transform: scaleX(-1); opacity: 0.2;" src="http://localhost/habboquest_template/habboquest_images/banner.png"></img>
      <div class="habboquest-me-box">
       Habboquest's Latest Registered Users<br><br>
       <div class="habboquest-latest-register-placeholder-box">
        <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.latestRegistered.php"; ?>
       </div>
      </div>
     </div>
     </div>
     <div class="habboquest-footer">
      &copy; 2022 - <?php echo date('Y'); ?> <a href="http://localhost/index">Habbo.quest.</a> All rights reserved.<br>
      Written & Designed by <a href="http://localhost/profile/Declan">Declan.</a>
     </div>
    </div>
    <div class="habboquest-content-grid-a-2">
     <div class="habboquest-event">
      <?php 
      Event::event("+0 hour");
      Event::event("+1 hour");
      Event::event("+2 hour");
      ?>
     </div>
     <div class="habboquest-news">
      <?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.news.php"; ?>   
     </div>
    </div>   
   </div>
  </div>
 </body>
</html>