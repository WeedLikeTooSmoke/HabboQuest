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

if ($habboquestEnable['habboquestPluginInventory'] == true) {
    $getInventory = $db->prepare("SELECT item_id FROM items WHERE user_id = :id");
    $getInventory->bindParam(":id", $_SESSION['habboquestId']);
    $getInventory->execute();
    if ($getInventory->RowCount() > 0) {
        while ($inventory = $getInventory->fetch()) {
            echo "
            <div class='habboquest-inventory-placeholder'>
             <img style='margin-left: 25px; margin-top: 25px;' src='http://localhost/habboquest_template/habboquest_images/furni_by_id/".xss($inventory['item_id']).".png'></img>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-inventory-empty'>
         Your inventory is currently empty...
        </div>
        ";
    }
}