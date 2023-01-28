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
 * habboquest Page Plugin Hottest Rooms
 */

if ($habboquestEnable['habboquestPluginRecentPurchases'] == true) {
    $getPurchases = $db->prepare("SELECT * FROM habboquest_transactions ORDER BY id DESC LIMIT 5");
    $getPurchases->execute();
    if ($getPurchases->RowCount() > 0) {
        while ($purchases = $getPurchases->fetch()) {
            echo "
            <div class='habboquest-recent-purchases-placeholder'>
            <a href='/profile/{$purchases['transaction_username']}'>{$purchases['transaction_username']}</a> - {$purchases['transaction_description']}
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-recent-purchases-none'>
        Nobody has made any purchases!
        </div>
        ";
    }
}