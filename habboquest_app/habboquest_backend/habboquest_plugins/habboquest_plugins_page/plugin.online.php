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
 * habboquest Page Plugin Register
 */

if ($habboquestEnable['habboquestPluginOnline'] == true) {
    $getOnline = $db->prepare("SELECT username, look, online FROM users WHERE online = '1'");
    $getOnline->execute();
    if ($getOnline->RowCount() > 0) {
        while ($online = $getOnline->fetch()) {
            echo "
            <div style='width: 45px; display: inline-block; margin-left: 30px;' class='habboquest-online-placeholder'>
             <img style='margin-top: 15px; z-index: 2; position: relative;' src='".xss("http://www.habbo.nl/habbo-imaging/avatarimage?figure={$online['look']}&size=b&direction=3&head_direction=3&")."'></img>
             <img style='margin-left: 2.5px; margin-top: -20px; z-index: 1;' src='http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif'></img>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-online-none'>
         No one is currently playing, check back later...    
        </div>
        ";
    }
}