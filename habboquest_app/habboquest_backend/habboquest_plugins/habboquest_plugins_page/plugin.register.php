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
 * habboquest Page Plugin Register
 */

if ($habboquestEnable['habboquestPluginRegister'] == true) {
    if (isset($_POST['habboquestRegister'])) {
        if (!empty($_POST['habboquestUsername'])) {
            if (strlen($_POST['habboquestUsername']) > 0) {
                $habboquestUsernameCheck = $db->prepare("SELECT username FROM users WHERE username = :username");
                $habboquestUsernameCheck->bindParam(":username", $_POST['habboquestUsername']);
                $habboquestUsernameCheck->execute();
                if (!$habboquestUsernameCheck->RowCount() > 0) {
                    if (!empty($_POST['habboquestMail'])) {
                        if (filter_var($_POST['habboquestMail'], FILTER_VALIDATE_EMAIL)) {
                            $habboquestEmailCheck = $db->prepare("SELECT mail FROM users WHERE mail = :mail");
                            $habboquestEmailCheck->bindParam(":mail", $_POST['habboquestMail']);
                            $habboquestEmailCheck->execute();
                            if (!$habboquestEmailCheck->RowCount() > 0) {
                                if (!empty($_POST['habboquestPassword'])) {
                                    if (!empty($_POST['habboquestPasswordRetype'])) {
                                        if ($_POST['habboquestPassword'] == $_POST['habboquestPasswordRetype']) {
                                            if (empty($_POST['habboquestRefferal'])) {
                                                $_POST['habboquestRefferal'] = $habboquestPlugin['habboquestOwnerUsernameRefferal'];
                                            }
                                            $password = passwordHash($_POST['habboquestPassword']);
                                            $ip = userIp();

                                            $habboquestRegister = $db->prepare("INSERT INTO users 
                                            (username, password, mail, ip_register, ip_current, auth_ticket, reffered_by) VALUES 
                                            (:username, :password, :mail, :ip_register, :ip_current, :auth_ticket, :reffered_by)");
                                            $habboquestRegister->bindParam(":username", $_POST['habboquestUsername']);
                                            $habboquestRegister->bindParam(":password", $password);
                                            $habboquestRegister->bindParam(":mail", $_POST['habboquestMail']);
                                            $habboquestRegister->bindParam(":ip_register", $ip);
                                            $habboquestRegister->bindParam(":ip_current", $ip);
                                            $habboquestRegister->bindParam(":auth_ticket", $habboquestSSO);
                                            $habboquestRegister->bindParam(":reffered_by", $_POST['habboquestRefferal']);
                                            $habboquestRegister->execute();

                                            webhook("habbo.quest", "{$_POST['habboquestUsername']}, Just registered at habbo.quest, Go say hello! https://habbo.quest/profile/{$_POST['habboquestUsername']}", $habboquestWebhook['habboquestWebhookRegister']);
                                        } else {
                                            $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterPasswordsDontMatch'];
                                        }
                                    } else {
                                        $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterPasswordEmpty'];
                                    }
                                } else {
                                    $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterPasswordEmpty'];
                                }
                            } else {
                                $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterMailIsTaken'];
                            }
                        } else {
                            $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterInvalidMail'];
                        }
                    } else {
                        $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterMailEmpty'];
                    }
                } else {
                    $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterUsernameIsTaken'];
                }
            } else {
                $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterUsernameLength'];
            }
        } else {
            $habboquestRegisterError = $habboquestLanguage['habboquestPluginRegisterUsernameEmpty'];
        }
    }
}