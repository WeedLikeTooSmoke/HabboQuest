<?php include $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/habboquest_plugins_page/plugin.buyCurrencys.php"; ?>
<html lang="en-US">
 <head>
  <title>Habboquest - Currencys</title>
  <meta charset="utf-8" />
  <meta name="title" content="habboquest"/>
  <meta name="description" content="habboquest, 24/7 radio streaming and the latest habbo information!">
  <meta name="keywords" content="Friends, Habbo, Credits, Duckets, Diamonds, Events, Staff, Radio, Fansite">
  <meta name="author" content="Declan David Wilkinson">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="habboquest - Currencys" />
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
  <?php
    if (!empty($habboquestBuyCredits)){ echo "<div class='habboquest-cms-error'><div class='habboquest-nav-container'>&nbsp;&nbsp;<i style='font-size: 19px;' class='fa fa-triangle-exclamation'></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$habboquestBuyCredits</div></div>"; }
    if (!empty($habboquestBuyDuckets)){ echo "<div class='habboquest-cms-error'><div class='habboquest-nav-container'>&nbsp;&nbsp;<i style='font-size: 19px;' class='fa fa-triangle-exclamation'></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$habboquestBuyDuckets</div></div>"; }
    if (!empty($habboquestBuyDiamonds)){ echo "<div class='habboquest-cms-error'><div class='habboquest-nav-container'>&nbsp;&nbsp;<i style='font-size: 19px;' class='fa fa-triangle-exclamation'></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$habboquestBuyDiamonds</div></div>"; }
  ?>
  <div class="habboquest-content">
   <div class="habboquest-content-grid">
    <div class="habboquest-content-grid-a-1">
     <div class="habboquest-currency-credits">
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Credits pack <br>
         (1000 for 5 points) 
        </div>
        <button type='submit' name='habboquestBuyCredits1'>Buy Credits</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Credits pack <br>
         (5000 for 20 points)
        </div>
        <button type='submit' name='habboquestBuyCredits2'>Buy Credits</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Credits pack <br>
         (15000 for 50 points)
        </div>
        <button type='submit' name='habboquestBuyCredits3'>Buy Credits</button>
       </form>
      </div>
     </div>
     <div class="habboquest-currency-duckets">
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Duckets pack <br>
         (15000 for 5 points)
        </div>
        <button type='submit' name='habboquestBuyDuckets1'>Buy Duckets</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Duckets pack <br>
         (50000 for 10 points)
        </div>
        <button type='submit' name='habboquestBuyDuckets2'>Buy Duckets</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
       <form method='POST'>
        <div class="habboquest-currency-form">
         Duckets pack <br>
         (150000 for 20 points)
        </div>
        <button type='submit' name='habboquestBuyDuckets3'>Buy Duckets</button>
       </form>
      </div>
     </div>
     <div class="habboquest-currency-diamonds">
      <div class="habboquest-currency-credits-placeholder">
      <form method='POST'>
        <div class="habboquest-currency-form">
         Diamonds pack <br>
         (100 for 10 points)
        </div>
        <button type='submit' name='habboquestBuyDiamonds1'>Buy Diamonds</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
      <form method='POST'>
        <div class="habboquest-currency-form">
         Diamonds pack <br>
         (250 for 25 points)
        </div>
        <button type='submit' name='habboquestBuyDiamonds2'>Buy Diamonds</button>
       </form>
      </div>
      <div class="habboquest-currency-credits-placeholder">
      <form method='POST'>
        <div class="habboquest-currency-form">
         Diamonds pack <br>
         (750 for 60 points)
        </div>
        <button type='submit' name='habboquestBuyDiamonds3'>Buy Diamonds</button>
       </form>
      </div>
     </div>
     <div class="habboquest-footer">
      &copy; 2022 - <?php echo date('Y'); ?> <a href="http://localhost/index">Habbo.quest.</a> All rights reserved.<br>
      Written & Designed by <a href="http://localhost/profile/Declan">Declan.</a>
     </div>
    </div>
    <div class="habboquest-content-grid-a-2">
     <div class="habboquest-shop-habbo">
      <div class="habboquest-shop-habbo-placeholder">
       <img style="z-index: 2; position: relative; margin-left: 25px; margin-top: 10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo xss(Users::getUserInfo('look')) ?>&size=b&direction=3&head_direction=3&"></img>
       <img style="position: absolute; margin-left: -62.5px; margin-top: 95px; z-index: 1;" src="http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif"></img>
       <div class="habboquest-shop-habbo-placeholder-username"><?= $_SESSION['habboquestUsername'] ?></div>
       <div class="habboquest-shop-habbo-placeholder-points"><?= users::getUserInfo("cms_points"); ?> Points</div>
      </div>
     </div>
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