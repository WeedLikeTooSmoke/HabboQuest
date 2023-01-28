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

if ($habboquestEnable['habboquestPluginHottestRooms'] == true) {
    $getRooms = $db->prepare("SELECT owner_name, name, users FROM rooms WHERE users > '0' ORDER BY users DESC");
    $getRooms->execute();
    if ($getRooms->RowCount() > 0) {
        while ($rooms = $getRooms->fetch()) {
            echo "
            <div class='habboquest-hottest-rooms-placeholder'>
            <a href='/client'>{$rooms['name']}</a> - <a href='/online'>{$rooms['users']}</a>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-hottest-rooms-none'>
        There are no users in any rooms<br> right now!
        </div>
        ";
    }
}