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
 * habboquest Page Plugin Lottery Ticket
 */

if ($habboquestEnable['habboquestPluginRareCrate'] == true) {
    if (isset($_POST['habboquestCommonCrate'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginCrateCost1']) {
            if (Users::isOnline()) {
                $crate = "common";

                $payCrate = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                $payCrate->bindParam(":cost", $habboquestPlugin['habboquestPluginCrateCost1']);
                $payCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $payCrate->execute();

                $insertCrate = $db->prepare("INSERT INTO habboquest_crates 
                (username, crate_name) VALUES 
                (:username, :crate)");
                $insertCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $insertCrate->bindParam(":crate", $crate);
                $insertCrate->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought Common Crate";
                $transactionType = "Buy Common Crate";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a common crate at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestCrateError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestCrateError = $habboquestLanguage['habboquestCrateNotEnoughPointsCommon'];
        }
    }
    if (isset($_POST['habboquestUncommonCrate'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginCrateCost2']) {
            if (Users::isOnline()) {
                $crate = "uncommon";

                $payCrate = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                $payCrate->bindParam(":cost", $habboquestPlugin['habboquestPluginCrateCost2']);
                $payCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $payCrate->execute();

                $insertCrate = $db->prepare("INSERT INTO habboquest_crates 
                (username, crate_name) VALUES 
                (:username, :crate)");
                $insertCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $insertCrate->bindParam(":crate", $crate);
                $insertCrate->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought Uncommon Crate";
                $transactionType = "Buy Uncommon Crate";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a uncommon crate at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestCrateError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestCrateError = $habboquestLanguage['habboquestCrateNotEnoughPointsUncommon'];
        }
    }
    if (isset($_POST['habboquestRareCrate'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginCrateCost3']) {
            if (Users::isOnline()) {
                $crate = "rare";

                $payCrate = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                $payCrate->bindParam(":cost", $habboquestPlugin['habboquestPluginCrateCost3']);
                $payCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $payCrate->execute();

                $insertCrate = $db->prepare("INSERT INTO habboquest_crates 
                (username, crate_name) VALUES 
                (:username, :crate)");
                $insertCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $insertCrate->bindParam(":crate", $crate);
                $insertCrate->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought Rare Crate";
                $transactionType = "Buy Rare Crate";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a rare crate at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestCrateError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestCrateError = $habboquestLanguage['habboquestCrateNotEnoughPointsRare'];
        }
    }
    if (isset($_POST['habboquestUltraRareCrate'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginCrateCost4']) {
            if (Users::isOnline()) {
                $crate = "ultrarare";

                $payCrate = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                $payCrate->bindParam(":cost", $habboquestPlugin['habboquestPluginCrateCost4']);
                $payCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $payCrate->execute();

                $insertCrate = $db->prepare("INSERT INTO habboquest_crates 
                (username, crate_name) VALUES 
                (:username, :crate)");
                $insertCrate->bindParam(":username", $_SESSION['habboquestUsername']);
                $insertCrate->bindParam(":crate", $crate);
                $insertCrate->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought Ultra Rare Crate";
                $transactionType = "Buy Ultra Rare Crate";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a ultra rare crate at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestCrateError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestCrateError = $habboquestLanguage['habboquestCrateNotEnoughPointsUltraRare'];
        }
    }
}