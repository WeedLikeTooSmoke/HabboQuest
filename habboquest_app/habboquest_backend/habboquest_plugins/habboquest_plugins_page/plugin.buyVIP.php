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
 * habboquest Page Plugin Buy VIP
 */

if ($habboquestEnable['habboquestPluginBuyVIP'] == true) {
    if (isset($_POST['habboquestBuyVIPBronze'])) {
        if (Users::getUserInfo('cms_points') >= $habboquestPlugin['habboquestPluginBuyVIPCost1']) {
            if (Users::getUserInfo('rank') === 1) {
                if (Users::isOnline()) {
                    $makePurchase = $db->prepare("UPDATE users SET rank = rank + 1, cms_points = cms_points - :points WHERE username = :username");
                    $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyVIPCost1']);
                    $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                    $makePurchase->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Bronze VIP";
                    $transactionType = "Buy VIP";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought bronze VIP at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestBuyVIPBronze = $habboquestLanguage['habboquestBuyVIPBronzeOnClient'];
                }
            } else {
                $habboquestBuyVIPBronze = $habboquestLanguage['habboquestBuyVIPBronzeHigherRank'];
            }
        } else {
            $habboquestBuyVIPBronze = $habboquestLanguage['habboquestBuyVIPBronzeNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyVIPSilver'])) {
        if (Users::getUserInfo('cms_points') >= $habboquestPlugin['habboquestPluginBuyVIPCost2']) {
            if (Users::getUserInfo('rank') === 2) {
                if (Users::isOnline()) {
                    $makePurchase = $db->prepare("UPDATE users SET rank = rank + 1, cms_points = cms_points - :points WHERE username = :username");
                    $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyVIPCost1']);
                    $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                    $makePurchase->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Silver VIP";
                    $transactionType = "Buy VIP";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought silver VIP at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestBuyVIPSilver= $habboquestLanguage['habboquestBuyVIPSilverOnClient'];
                }
            } else {
                $habboquestBuyVIPSilver = $habboquestLanguage['habboquestBuyVIPSilverHigherRank'];
            }
        } else {
            $habboquestBuyVIPSilver = $habboquestLanguage['habboquestBuyVIPSilverEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyVIPGold'])) {
        if (Users::getUserInfo('cms_points') >= $habboquestPlugin['habboquestPluginBuyVIPCost3']) {
            if (Users::getUserInfo('rank') === 3) {
                if (Users::isOnline()) {
                    $makePurchase = $db->prepare("UPDATE users SET rank = rank + 1, cms_points = cms_points - :points WHERE username = :username");
                    $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyVIPCost1']);
                    $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                    $makePurchase->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Gold VIP";
                    $transactionType = "Buy VIP";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought gold VIP at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestBuyVIPGold = $habboquestLanguage['habboquestBuyVIPGoldOnClient'];
                }
            } else {
                $habboquestBuyVIPGold = $habboquestLanguage['habboquestBuyVIPGoldHigherRank'];
            }
        } else {
            $habboquestBuyVIPGold = $habboquestLanguage['habboquestBuyVIPGoldNotEnoughPoints'];
        }
    }
}