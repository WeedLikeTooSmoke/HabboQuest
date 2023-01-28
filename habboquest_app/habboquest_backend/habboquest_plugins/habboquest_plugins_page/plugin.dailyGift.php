<?php
/******************************************************/
/* Copyright (C) Habbo.quest Inc, All Rights Reserved */
/*   Written and designed by Declan David Wilkinson   */
/*     Do with these files as you wish, No limits     */
/******************************************************/

/**
 * HabboQuest Plugins
 */
include_once $_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_plugins/plugin.defined.php";

/**
 * HabboQuest Page Plugin Daily Gift
 */

if ($habboquestEnable['habboquestPluginDailyGift'] == true) {
    $dailyGiftCheck = $db->prepare("SELECT id, username FROM habboquest_daily_gift WHERE username = :username AND day = :day");
    $dailyGiftCheck->bindParam(":username", $_SESSION['habboquestUsername']);
    $dailyGiftCheck->bindParam(":day", $day);
    $dailyGiftCheck->execute();
    if ($dailyGiftCheck->RowCount() == 0) {
        
    } else {
        $dailyGiftError = $habboquestLanguage[''];
    }
}