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
 * HabboQuest Page Plugin Monthly Gift
 */

if ($habboquestEnable['habboquestPluginMonthlyGift'] == true) {
    $monthlyGiftCheck = $db->prepare("SELECT id, username FROM habboquest_monthly_gift WHERE username = :username month AND  = :month");
    $monthlyGiftCheck->bindParam(":username", $_SESSION['habboquestUsername']);
    $monthlyGiftCheck->bindParam(":day", $day);
    $monthlyGiftCheck->execute();
    if ($monthlyGiftCheck->RowCount() == 0) {
        
    } else {
        $monthlyGiftError = $habboquestLanguage[''];
    }
}