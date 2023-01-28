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
 * habboquest Page Plugin Announcement
 */

if ($habboquestEnable['habboquestPluginAnnouncement'] == true) {
    if (!empty($habboquestPlugin['habboquestPluginAnnouncement'])) {
        echo "
        <div class='habboquest-announcement'>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$habboquestPlugin['habboquestPluginAnnouncement']}
        </div>
        ";
    }
}