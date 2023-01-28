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
 * habboquest Page Plugin Rare Values
 */

if ($habboquestEnable['habboquestPluginRareValues'] == true) {
    $getRareValues = $db->prepare("SELECT * FROM habboquest_rarevalues ORDER BY rare_cost");
    $getRareValues->execute();
    if ($getRareValues->RowCount() > 0) {
        while ($rareValues = $getRareValues->fetch()) {
            echo "
            <div class='habboquest-rarevalues-placeholder'>
             <img src='http://localhost/habboquest_template/habboquest_images/habboquest_rare_values/{$rareValues['rare_id']}.png'></img>
             <a class='habboquest-rarevalues-cost'>{$rareValues['rare_cost']}c</a>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-rarevalues-none'>
         There are no rare values right now...
        </div>
        ";
    }
}