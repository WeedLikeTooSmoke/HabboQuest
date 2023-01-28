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
 * habboquest Page Plugin Leaderboard Credits
 */

if ($habboquestEnable['habboquestPluginLeaderboardCredits'] == true) {
    $getCredits = $db->prepare("SELECT username, credits, look FROM users ORDER BY credits DESC LIMIT 8");
    $getCredits->execute();
    if ($getCredits->RowCount() > 0) {
        while ($Credits = $getCredits->fetch()) {
            echo "
            <div class='habboquest-leaderboard-placeholder'>
             <img style='margin-left: 13.5px; margin-top: 15px; z-index: 2; position: relative;' src='".xss("http://www.habbo.nl/habbo-imaging/avatarimage?figure={$Credits['look']}&size=b&direction=3&head_direction=3&")."'></img>
             <img style='margin-left: 16px; margin-top: -20px; z-index: 1;' src='http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif'></img>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-leaderboard-none'>
         No one is currently rich enough yet...
        </div>
        ";
    }
}