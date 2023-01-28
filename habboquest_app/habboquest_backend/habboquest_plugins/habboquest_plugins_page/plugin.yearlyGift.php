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
 * HabboQuest Page Plugin Yearly Gift
 */

if ($habboquestEnable['habboquestPluginYearlyGift'] == true) {
    $yearlyGiftCheck = $db->prepare("SELECT id, username FROM habboquest_yearly_gift WHERE username = :username year AND  = :year");
    $yearlyGiftCheck->bindParam(":username", $_SESSION['habboquestUsername']);
    $yearlyGiftCheck->bindParam(":day", $day);
    $yearlyGiftCheck->execute();
    if ($yearlyGiftCheck->RowCount() == 0) {
        
    } else {
        $yearlyGiftError = $habboquestLanguage[''];
    }
}