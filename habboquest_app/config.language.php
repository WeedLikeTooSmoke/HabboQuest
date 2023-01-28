<?php
/******************************************************/
/* Copyright (C) Habbo.quest Inc, All Rights Reserved */
/*   Written and designed by Declan David Wilkinson   */
/*     Do with these files as you wish, No limits     */
/******************************************************/

/**
 * habboquest Plugins
 */
include_once $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/plugin.defined.php";

/**
 * habboquest Language Configuration
 */

$habboquestLanguage = array(
    // Plugin Buy Crate
    "habboquestCrateOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestCrateNotEnoughPointsCommon" => "You cannot afford to buy a common crate!",
    "habboquestCrateNotEnoughPointsUncommon" => "You cannot afford to buy a uncommon crate!",
    "habboquestCrateNotEnoughPointsRare" => "You cannot afford to buy a rare crate!",
    "habboquestCrateNotEnoughPointsUltraRare" => "You cannot afford to buy a ultra rare crate!",

    // Plugin Buy Lottery Tickets
    "habboquestLotteryBuyTicketNotEnoughPointsDaily" => "You cannot afford to buy a daily lottery ticket!",
    "habboquestLotteryBuyTicketNotEnoughPointsWeekly" => "You cannot afford to buy a weekly lottery ticket!",
    "habboquestLotteryBuyTicketNotEnoughPointsMonthly" => "You cannot afford to buy a monthly lottery ticket!",
    "habboquestLotteryBuyTicketNotEnoughPointsYearly" => "You cannot afford to buy a yearly lottery ticket!",
    "habboquestLotteryBuyTicketAlreadyBoughtDaily" => "You have already bought a ticket today!",
    "habboquestLotteryBuyTicketAlreadyBoughtWeekly" => "You have already bought a ticket this week!",
    "habboquestLotteryBuyTicketAlreadyBoughtMonthly" => "You have already bought a ticket this month!",
    "habboquestLotteryBuyTicketAlreadyBoughtYearly" => "You have already bought a ticket this year!",

    // Plugin Buy Bronze VIP
    "habboquestBuyVIPBronzeOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyVIPBronzeHigherRank" => "You are already or higher than bronze vip!",
    "habboquestBuyVIPBronzeNotEnoughPoints" => "You cannot afford to buy bronze vip!",

    // Plugin Buy Silver VIP
    "habboquestBuyVIPSilverOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyVIPSilverHigherRank" => "You are already or higher than Silver vip!",
    "habboquestBuyVIPSilverEnoughPoints" => "You cannot afford to buy silver vip!",

    // Plugin Buy Gold VIP
    "habboquestBuyVIPGoldOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyVIPGoldHigherRank" => "You are already or higher than Gold vip!",
    "habboquestBuyVIPGoldNotEnoughPoints" => "You cannot afford to buy gold vip!",

    // Plugin Buy Credits
    "habboquestBuyCreditsOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyCreditsNotEnoughPoints" => "You cannot afford to buy this credits pack!",

    // Plugin Buy Credits
    "habboquestBuyDucketsOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyDucketsNotEnoughPoints" => "You cannot afford to buy this duckets pack!",

    // Plugin Buy Credits
    "habboquestBuyDiamondsOnClient" => "You cannot buy anything from the store while you are online on the client!",
    "habboquestBuyDiamondsNotEnoughPoints" => "You cannot afford to buy this diamonds pack!",

    // Plugin Register English
    "habboquestPluginRegisterPasswordsDontMatch" => "The passwords you entered dont match!",
    "habboquestPluginRegisterPasswordEmpty" => "Please, Enter a password!",
    "habboquestPluginRegisterMailIsTaken" => "Sorry but that email is taken!",
    "habboquestPluginRegisterInvalidMail" => "Please, Enter a valid email address!",
    "habboquestPluginRegisterMailEmpty" => "Please, Enter an email address!",
    "habboquestPluginRegisterUsernameIsTaken" => "Sorry but the username is taken!",
    "habboquestPluginRegisterUsernameLength" => "Sorry but your username needs to be longer than 3 characters",
    "habboquestPluginRegisterUsernameEmpty" => "Please, Enter a username!",

    // Plugin Login English
    "habboquestPluginBetaCodeWrong" => "The beta code you entered was wrong, Please try again!",
    "habboquestPluginLoginWrongPassword" => "The password you entered was not the correct password!",
    "habboquestPluginLoginUsernameDontExist" => "That user dont exist!",
    "habboquestPluginBetaCodeEmpty" => "Please, Enter your beta code!",
    "habboquestPluginUsernameEmpty" => "Please, Enter a username!",
    "habboquestPluginPasswordEmpty" => "Please, Enter a password!",

    // Plugin Change Mail English
    "habboquestPasswordWrong" => "The password you entered was not the correct password!",
    "habboquestChangeMailUserDontExist" => "That user dont exist!",
    "habboquestPasswordEmpty" => "Please, Enter a password!",
    "habboquestMailEmpty" => "Please, Enter an email address!",
    "habboquestChangeMailSameMail" => "Please, Enter a different mail to your old mail!",

    // Plugin Change Password English
    "habboquestChangePasswordWrongPassword" => "The password you entered was not the correct password!",
    "habboquestChangePasswordUserDontExist" => "That user dont exist!",
    "habboquestChangePasswordNewPasswordEmpty" => "Please, Enter your new password!",
    "habboquestChangePasswordOldPasswordEmpty" => "Please, Enter your old password!",
    "habboquestChangePasswordSamePassword" => "Please, Enter a different password to your old password!",

    // Plugin Change Username English
    "habboquestChangeUsernameSameName" => "Sorry but you cannot change your username to the username you already have!",
    "habboquestChangeUsernameCantAfford" => "Sorry but it lookes like you cannot afford to change your name!",
    "habboquestChangeUsernamePasswordWrong" => "The password you entered was not the correct password!",
    "habboquestChangeUsernameUserDontExist" => "That user dont exist!",
    "habboquestChangeUsernamePasswordEmpty" => "Please, Enter a password!",
    "habboquestChangeUsernameNewUsernameEmpty" => "Please, Enter a new username!"
);