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
 * habboquest Page Plugin Inventory
 */

if ($habboquestEnable['habboquestPluginInventoryCrates'] == true) {
    $getInventory = $db->prepare("SELECT username, crate_name, claimed FROM habboquest_crates WHERE username = :username AND claimed = '0'");
    $getInventory->bindParam(":username", $_SESSION['habboquestUsername']);
    $getInventory->execute();
    if ($getInventory->RowCount() > 0) {
        while ($inventory = $getInventory->fetch()) {
            echo "
            <div class='habboquest-inventory-placeholder'>
             <img style='margin-left: 25px; margin-top: 25px;' src='http://localhost/habboquest_template/habboquest_images/crates/".xss($inventory['crate_name']).".png'></img>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-inventory-empty'>
         You currently dont have any crates!
        </div>
        ";
    }
}