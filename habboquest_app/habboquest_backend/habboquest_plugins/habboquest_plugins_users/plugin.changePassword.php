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
 * habboquest Users Plugin Change Password
 */

if ($habboquestEnable['habboquestPluginChangePassword'] == true) {
    if (isset($_POST['habboquestChangePassword'])) {
        if (!empty($_POST['habboquestOldPassword'])) {
            if (!empty($_POST['habboquestNewPassword'])) {
                $habboquestChangePasswordData = $db->prepare("SELECT username, password FROM users WHERE username = :username");
                $habboquestChangePasswordData->bindParam(":username", $_SESSION['habboquestUsername']);
                $habboquestChangePasswordData->execute();
                if ($habboquestChangePasswordData->RowCount() > 0) {
                    $habboquestOldPassword = $habboquestChangePasswordData->fetch();
                    if (passwordVerify($_POST['habboquestOldPassword'], $habboquestOldPassword['password'])) {
                        if (!passwordVerify($_POST['habboquestNewPassword'], $habboquestOldPassword['password'])) {
                            $password = passwordHash($_POST['habboquestNewPassword']);
                        
                            $habboquestChangePassword = $db->prepare("UPDATE users SET password = :password WHERE username = :username");
                            $habboquestChangePassword->bindParam(":username", $_SESSION['habboquestUsername']);
                            $habboquestChangePassword->bindParam(":password", $password);
                            $habboquestChangePassword->execute();

                            webhook("habbo.quest", "{$_POST['habboquestUsername']}, Just changed their password at habboquest.pw, http://localhost/profile/{$_POST['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTest']);
                            header("Location: /logout");
                        } else {
                            $habboquestChangePassError = $habboquestLanguage['habboquestChangePasswordSamePassword'];
                        }
                    } else {
                        $habboquestChangePassError = $habboquestLanguage['habboquestChangePasswordWrongPassword'];
                    }
                } else {
                    $habboquestChangePassError = $habboquestLanguage['habboquestChangePasswordUserDontExist'];
                }
            } else {
                $habboquestChangePassError = $habboquestLanguage['habboquestChangePasswordNewPasswordEmpty'];
            }
        } else {
            $habboquestChangePassError = $habboquestLanguage['habboquestChangePasswordOldPasswordEmpty'];
        }
    }
}