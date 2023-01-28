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
 * habboquest Page Plugin Staff
 */

if ($habboquestEnable['habboquestPluginStaff'] == true) {
    $getPermissions = $db->prepare("SELECT id, rank_name, level FROM permissions WHERE id in (8,7,6,5)  ORDER BY id DESC");
    $getPermissions->execute();
    if ($getPermissions->RowCount() > 0) {
        while ($permissions = $getPermissions->fetch()) {
            echo "
            <div class='habboquest-staff'>
            ";
            $getStaff = $db->prepare("SELECT id, username, motto, look FROM users WHERE rank = :rank_id");
            $getStaff->bindParam(":rank_id", $permissions['level']);
            $getStaff->execute();
            if ($getStaff->RowCount() > 0) {
                while ($staff = $getStaff->fetch()) {
                    echo "
                    <div style='width: 45px; display: inline-block; margin-left: 30px;'>
                     <img style='margin-top: 15px; z-index: 2; position: relative;' src='".xss("http://www.habbo.nl/habbo-imaging/avatarimage?figure={$staff['look']}&size=b&direction=3&head_direction=3&")."'></img>
                     <img style='margin-left: 2.5px; margin-top: -20px; z-index: 1;' src='http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif'></img>
                    </div>
                    ";
                }
            } else {
                echo "
                <div class='habboquest-staff-none'>
                 There currently arnt any ".xss($permissions['rank_name'])."('s)
                </div>
                ";
            }
            echo "</div>";
        }
    }
}