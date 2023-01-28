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
 * habboquest Page Plugin Buy Currencys
 */

if ($habboquestEnable['habboquestPluginBuyCurrencys'] == true) {
    if (isset($_POST['habboquestBuyCredits1'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysCredits1Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET credits = credits + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysCredits1Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysCredits1Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits1Amount']} credits";
                $transactionType = "Buy Credits";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits1Amount']} credits at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsOnClient'];
            }
        } else {
            $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyCredits2'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysCredits2Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET credits = credits + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysCredits2Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysCredits2Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits2Amount']} credits";
                $transactionType = "Buy Credits";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits2Amount']} credits at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsOnClient'];
            }
        } else {
            $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyCredits3'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysCredits3Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET credits = credits + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysCredits3Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysCredits3Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits3Amount']} credits";
                $transactionType = "Buy Credits";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysCredits3Amount']} credits at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsOnClient'];
            }
        } else {
            $habboquestBuyCredits = $habboquestLanguage['habboquestBuyCreditsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDuckets1'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDuckets1Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET pixels = pixels + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets1Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets1Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets1Amount']} duckets";
                $transactionType = "Buy Duckets";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets1Amount']} Duckets at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsOnClient'];
            }
        } else {
            $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDuckets2'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDuckets2Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET pixels = pixels + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets2Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets2Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets2Amount']} duckets";
                $transactionType = "Buy Duckets";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets2Amount']} Duckets at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsOnClient'];
            }
        } else {
            $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDuckets3'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDuckets3Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET pixels = pixels + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets3Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDuckets3Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets3Amount']} duckets";
                $transactionType = "Buy Duckets";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDuckets3Amount']} Duckets at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsOnClient'];
            }
        } else {
            $habboquestBuyDuckets = $habboquestLanguage['habboquestBuyDucketsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDiamonds1'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds1Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET points = points + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds1Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds1Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds1Amount']} diamonds";
                $transactionType = "Buy Diamonds";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds1Amount']} Diamonds at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsOnClient'];
            }
        } else {
            $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDiamonds2'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds2Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET points = points + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds2Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds2Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds2Amount']} diamonds";
                $transactionType = "Buy Diamonds";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds2Amount']} Diamonds at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsOnClient'];
            }
        } else {
            $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsNotEnoughPoints'];
        }
    }
    if (isset($_POST['habboquestBuyDiamonds3'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds3Cost']) {
            if (Users::isOnline()) {
                $makePurchase = $db->prepare("UPDATE users SET points = points + :amount, cms_points = cms_points - :points WHERE username = :username");
                $makePurchase->bindParam(":points", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds3Cost']);
                $makePurchase->bindParam(":username", $_SESSION['habboquestUsername']);
                $makePurchase->bindParam(":amount", $habboquestPlugin['habboquestPluginBuyCurrencysDiamonds3Amount']);
                $makePurchase->execute();

                $transactionIp = userIp();
                $transactionTime = strtotime("now");
                $transactionDescription = "Bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds3Amount']} diamonds";
                $transactionType = "Buy Diamonds";

                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                $habboquestTransaction->execute();

                webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought {$habboquestPlugin['habboquestPluginBuyCurrencysDiamonds3Amount']} Diamonds at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
            } else {
                $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsOnClient'];
            }
        } else {
            $habboquestBuyDiamonds = $habboquestLanguage['habboquestBuyDiamondsNotEnoughPoints'];
        }
    }
}