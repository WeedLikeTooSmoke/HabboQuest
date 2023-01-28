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
 * habboquest Users Plugin Change Username
 */

if ($habboquestEnable['habboquestPluginChangeUsername'] == true) {
    if (isset($_POST['habboquestChangeUsername'])) {
        if (!empty($_POST['habboquestNewUsername'])) {
            if (!empty($_POST['habboquestPassword'])) {
                $habboquestChangeUsernameData = $db->prepare("SELECT username, password, cms_points FROM users WHERE username = :username");
                $habboquestChangeUsernameData->bindParam(":username", $_SESSION['habboquestUsername']);
                $habboquestChangeUsernameData->execute();
                if ($habboquestChangeUsernameData->RowCount() > 0) {
                    $habboquestChangeUsernamePassword = $habboquestChangeUsernameData->fetch();
                    if (passwordVerify($_POST['habboquestPassword'], $habboquestChangeUsernamePassword['password'])) {
                        if ($habboquestChangeUsernamePassword['cms_points'] >= $habboquestPlugin['habboquestPluginChangeUsernameCost']) {
                            if ($habboquestChangeUsernamePassword['username'] != $_POST['habboquestNewUsername']) {
                                $transactionIp = userIp();
                                $transactionTime = strtotime("now");
                                $transactionDescription = "Changed username from {$_SESSION['habboquestUsername']} to {$_POST['habboquestNewUsername']}";
                                $transactionType = "Change Username";

                                $habboquestChangeUsername = $db->prepare("UPDATE users SET username = :new_username, cms_points = cms_points - :cost WHERE username = :old_username");
                                $habboquestChangeUsername->bindParam(":new_username", $_POST['habboquestNewUsername']);
                                $habboquestChangeUsername->bindParam(":old_username", $_SESSION['habboquestUsername']);
                                $habboquestChangeUsername->bindParam(":cost", $habboquestPlugin['habboquestPluginChangeUsernameCost']);
                                $habboquestChangeUsername->execute();

                                $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                                (transaction_user_id, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                                (:transaction_user_id, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                                $habboquestTransaction->bindParam(":transaction_user_id", $_SESSION['habboquestId']);
                                $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                                $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                                $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                                $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                                $habboquestTransaction->execute();

                                webhook("habbo.quest", "{$_POST['habboquestNewUsername']}, Just changed their username from {$_SESSION['habboquestUsername']} to {$_POST['habboquestNewUsername']}, https://habbo.quest/profile/{$_POST['habboquestNewUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                                header("Location: /logout");
                            } else {
                                $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernameSameName'];
                            }
                        } else {
                            $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernameCantAfford'];
                        }
                    } else {
                        $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernamePasswordWrong'];
                    }
                } else {
                    $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernameUserDontExist'];
                }
            } else {
                $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernamePasswordEmpty'];
            }
        } else {
            $habboquestChangeNameError = $habboquestLanguage['habboquestChangeUsernameNewUsernameEmpty'];
        }
    }
}