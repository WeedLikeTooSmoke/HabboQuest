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
 * habboquest Page Plugin Staff Donate
 */

if ($habboquestEnable['habboquestPluginStaffDonate'] == true) {
    $getStaff = $db->prepare("SELECT username, look, motto, paypal_name, rank FROM users WHERE rank > '4' ORDER BY rank DESC");
    $getStaff->execute();
    if ($getStaff->RowCount() > 0) {
        while ($staff = $getStaff->fetch()) {
            echo "
            <div class='habboquest-staff-donations-placeholder'>
             <img style='position: absolute; margin-left: 23px; margin-top: 20px;' src='".xss("http://www.habbo.nl/habbo-imaging/avatarimage?figure={$staff['look']}&action=std,wav,crr=1&gesture=sml&direction=3&head_direction=3&size=n&img_format=png")."'></img>
             <img style='margin-top: 105px; margin-left: 25px;' src='http://localhost/habboquest_template/habboquest_images/bg_avatar_stage.gif'></img>
             <div class='habboquest-staff-donations-placeholder-info'>
              <a href='http://localhost/profile/".xss($staff['username'])."'>".xss($staff['username'])."</a>
             </div>
             <a target='_blank'href='https://www.paypal.com/paypalme/".xss($staff['paypal_name'])."'>Donate</a>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-staff-donations-placeholder-none'>
         There are currently no staff to donate too!
        </div>
        ";
    }
}