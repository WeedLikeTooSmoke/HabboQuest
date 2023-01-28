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

if ($habboquestEnable['habboquestPluginInventoryLottery'] == true) {
    $getInventory = $db->prepare("SELECT username, ticket_type, ticket_won, ticket_used FROM habboquest_lottery_tickets WHERE username = :username AND ticket_used = '0'");
    $getInventory->bindParam(":username", $_SESSION['habboquestUsername']);
    $getInventory->execute();
    if ($getInventory->RowCount() > 0) {
        $num = 0;
        while ($inventory = $getInventory->fetch()) {
            if ($inventory['ticket_used'] != 1 && $inventory['ticket_won'] == 1) {
                echo "
                <div class='habboquest-inventory-placeholder'>
                 <img style='margin-left: 25px; margin-top: 25px;' src='http://localhost/habboquest_template/habboquest_images/crates/rare.png'></img>
                </div>
                ";
                $num++;
            }
        }
        if ($num == 0) {
            echo "
            <div class='habboquest-inventory-empty'>
             You currently dont have any winning lottery tickets!
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-inventory-empty'>
         You currently dont have any winning lottery tickets!
        </div>
        ";
    }
}