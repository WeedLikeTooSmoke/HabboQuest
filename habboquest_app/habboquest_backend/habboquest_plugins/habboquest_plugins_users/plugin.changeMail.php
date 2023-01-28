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
 * habboquest Users Plugin Change Mail
 */

if ($habboquestEnable['habboquestPluginChangeMail'] == true) {
    if (isset($_POST['habboquestChangeMail'])) {
        if (!empty($_POST['habboquestNewMail'])) {
            if (!empty($_POST['habboquestPassword'])) {
                $habboquestOldMailCheck = $db->prepare("SELECT username, password, mail FROM users WHERE username = :username");
                $habboquestOldMailCheck->bindParam(":username", $_SESSION['habboquestUsername']);
                $habboquestOldMailCheck->execute();
                if ($habboquestOldMailCheck->RowCount() > 0) {
                    $habboquestPasswordCheck = $habboquestOldMailCheck->fetch();
                    if (passwordVerify($_POST['habboquestPassword'], $habboquestPasswordCheck['password'])) {
                        if ($habboquestPasswordCheck['mail'] != $_POST['habboquestNewMail']) {
                            $habboquestChangeMail = $db->prepare("UPDATE users SET mail = :mail WHERE username = :username");
                            $habboquestChangeMail->bindParam(":username", $_SESSION['habboquestUsername']);
                            $habboquestChangeMail->bindParam(":mail", $_POST['habboquestNewMail']);
                            $habboquestChangeMail->execute();

                            webhook("habboquest.pw", "{$_SESSION['habboquestUsername']}, Just changed their mail at habboquest.pw, http://localhost/profile/{$_POST['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTest']);
                            header("Location: /logout");
                        } else {
                            $habboquestChangeMailError = $habboquestLanguage['habboquestChangeMailSameMail'];
                        }
                    } else {
                        $habboquestChangeMailError = $habboquestLanguage['habboquestChangeMailPasswordWrong'];
                    }
                } else {
                    $habboquestChangeMailError = $habboquestLanguage['habboquestChangeMailUserDontExist'];
                }
            } else {
                $habboquestChangeMailError = $habboquestLanguage['habboquestChangeMailPasswordEmpty'];
            }
        } else {
            $habboquestChangeMailError = $habboquestLanguage['habboquestChangeMailMailEmpty'];
        }
    }
}