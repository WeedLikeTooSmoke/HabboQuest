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
 * HabboQuest Page Plugin Random Avatar Generator
 */

if ($habboquestEnable['habboquestPluginRandomAvatarGen'] == true) {
    $getAvatar = $db->prepare("SELECT look FROM users");
    $getAvatar->execute();
    if ($getAvatar->RowCount() > 0) {
        $num = randomChance(1, $getAvatar->RowCount());
        $getAvatar = $db->prepare("SELECT look FROM users WHERE id = :num");
        $getAvatar->bindParam(":num", $num);
        $getAvatar->execute();
        $avatar = $getAvatar->fetch();
        $avatar = $avatar['look'];
    } else {
        $avatar = $habboquestPlugin['habboquestPluginStarterAvatar'];
    }
}