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
 * habboquest Page Plugin Profile Badges
 */

if ($habboquestEnable['habboquestPluginProfileBadges'] == true) {
    $getBadges = $db->prepare("SELECT * FROM users_badges WHERE slot_id > '0' AND user_id = :user_id LIMIT 5");
    $getBadges->bindParam(":user_id", $_SESSION['habboquestId']);
    $getBadges->execute();
    if ($getBadges->RowCount() > 0) {
        while ($badges = $getBadges->fetch()) {
            echo "
            <img style='margin-left: 17.5px; margin-top: 17.5px;' src='https://127.0.0.1/habboquest_swfs/c_images/album1584/".xss($badges['badge_code']).".gif'></img>
            ";
        }
    } else {
        echo "
        
        ";
    }
}