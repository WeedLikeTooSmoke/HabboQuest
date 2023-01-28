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
 * habboquest Page Plugin User Of The Week
 */

if ($habboquestEnable['habboquestPluginUOTW'] == true) {
    $getUOTW = $db->prepare("SELECT * FROM habboquest_uotw ORDER BY id DESC LIMIT 5");
    $getUOTW->execute();
    if ($getUOTW->RowCount() > 0) {
        while ($uotw = $getUOTW->fetch()) {
            echo "
            <div class='habboquest-uotw-placeholder'>
            <a href='/profile/{$uotw['username']}'>{$uotw['username']}</a> - {$uotw['reason']}
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-uotw-none'>
        There are no users in any rooms<br> right now!
        </div>
        ";
    }
}