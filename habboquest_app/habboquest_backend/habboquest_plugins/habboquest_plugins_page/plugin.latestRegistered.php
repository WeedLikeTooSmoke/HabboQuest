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
 * habboquest Page Plugin Latest Registered
 */

if ($habboquestEnable['habboquestPluginLatestRegistered'] == true) {
    $getUsers = $db->prepare("SELECT username FROM users ORDER BY id DESC LIMIT 20");
    $getUsers->execute();
    if ($getUsers->RowCount() > 0) {
        while ($users = $getUsers->fetch()) {
            echo "
            <div class='habboquest-latest-register-placeholder'>
             <a href='/profile/{$users['username']}'>{$users['username']}</a>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-latest-register-none'>
         Nobody has registered yet!
        </div>
        ";
    }
}