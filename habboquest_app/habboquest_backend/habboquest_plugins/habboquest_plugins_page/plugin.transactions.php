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
 * habboquest Page Plugin Transactions
 */

if ($habboquestEnable['habboquestPluginTransactions'] == true) {
    $getTransactions = $db->prepare("SELECT * FROM habboquest_transactions ORDER BY id DESC");
    $getTransactions->execute();
    if ($getTransactions->RowCount() > 0) {
        while ($transactions = $getTransactions->fetch()) {
            echo "
            <div class='habboquest-transaction'>
             <div class='habboquest-transaction-name'>".xss($_SESSION['habboquestUsername'])."</div>
             <div class='habboquest-transaction-description'>".xss($transactions['transaction_description'])."</div>
             <div class='habboquest-transaction-made'>".xss($transactions['transaction_made'])."</div>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-transactions-none'>
         You havn't made any purchases on your account yet...
        </div>
        ";
    }
}