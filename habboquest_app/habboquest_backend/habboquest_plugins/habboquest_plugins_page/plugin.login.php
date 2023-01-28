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
 * habboquest Page Plugin Login
 */

if ($habboquestEnable['habboquestPluginLogin'] == true) {
    if ($habboquestEnable['habboquestPluginBetaLogin'] == true) {
        if (isset($_POST['habboquestLogin'])) {
            if (!empty($_POST['habboquestUsername'])) {
                if (!empty($_POST['habboquestPassword'])) {
                    $habboquestLogin = $db->prepare("SELECT id, username, password, mail, beta_code FROM users WHERE username = :username");
                    $habboquestLogin->bindParam(":username", $_POST['habboquestUsername']);
                    $habboquestLogin->execute();
                    if (!empty($_POST['habboquestBetaCode'])) {
                        if ($habboquestLogin->RowCount() > 0) {
                            $login = $habboquestLogin->fetch();
                            if (passwordVerify($_POST['habboquestPassword'], $login['password'])) {
                                if ($_POST['habboquestBetaCode'] == $login['beta_code']) {
                                    $_SESSION['habboquestId'] = $login['id'];
                                    $_SESSION['habboquestUsername'] = $login['username'];
                                    $_SESSION['habboquestMail'] = $login['mail'];
        
                                    webhook("habbo.quest", "{$_POST['habboquestUsername']}, Just logged in at habbo.quest using their beta code, Go say hello! https://habbo.quest/profile/{$_POST['habboquestUsername']}", $habboquestWebhook['habboquestWebhookLogin']);
                                    header("Location: /me");
                                } else {
                                    $habboquestLoginError = $habboquestLanguage['habboquestPluginBetaCodeWrong'];
                                }
                            } else {
                                $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginWrongPassword'];
                            }
                        } else {
                            $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginUsernameDontExist'];
                        }
                    } else {
                        $habboquestLoginError = $habboquestLanguage['habboquestPluginBetaCodeEmpty'];
                    }
                } else {
                    $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginPasswordEmpty'];
                }
            } else {
                $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginUsernameEmpty'];
            }
        }
    } else {
        if (isset($_POST['habboquestLogin'])) {
            if (!empty($_POST['habboquestUsername'])) {
                if (!empty($_POST['habboquestPassword'])) {
                    $habboquestLogin = $db->prepare("SELECT id, username, password, mail FROM users WHERE username = :username");
                    $habboquestLogin->bindParam(":username", $_POST['habboquestUsername']);
                    $habboquestLogin->execute();
                    if ($habboquestLogin->RowCount() > 0) {
                        $login = $habboquestLogin->fetch();
                        if (passwordVerify($_POST['habboquestPassword'], $login['password'])) {
                            $_SESSION['habboquestId'] = $login['id'];
                            $_SESSION['habboquestUsername'] = $login['username'];
                            $_SESSION['habboquestMail'] = $login['mail'];
    
                            webhook("habbo.quest", "{$_POST['habboquestUsername']}, Just logged in at habbo.quest, Go say hello! https://habbo.quest/profile/{$_POST['habboquestUsername']}", $habboquestWebhook['habboquestWebhookLogin']);
                            header("Location: /me");
                        } else {
                            $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginWrongPassword'];
                        }
                    } else {
                        $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginUsernameDontExist'];
                    }
                } else {
                    $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginPasswordEmpty'];
                }
            } else {
                $habboquestLoginError = $habboquestLanguage['habboquestPluginLoginUsernameEmpty'];
            }
        }
    }
}