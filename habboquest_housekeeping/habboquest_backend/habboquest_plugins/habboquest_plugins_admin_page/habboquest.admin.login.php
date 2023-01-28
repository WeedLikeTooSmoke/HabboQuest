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
 * habboquest Admin Login
 */

if ($habboquestEnable['habboquestPluginAdminLogin'] == true) {
    if (isset($_POST['habboquestAdminLogin'])) {
        if (!empty($_POST['habboquestAdminUsername'])) {
            $habboquestAdminUsernameCheck = $db->prepare("SELECT username, password, pin_code, rank FROM users WHERE username = :username");
            $habboquestAdminUsernameCheck->bindParam(":username", $_POST['habboquestAdminUsername']);
            $habboquestAdminUsernameCheck->execute();
            if ($habboquestAdminUsernameCheck->RowCount() > 0) {
                if (!empty($_POST['habboquestAdminPassword'])) {
                    if (!empty($_POST['habboquestAdminPinCode'])) {
                        $habboquestAdminData = $habboquestAdminUsernameCheck->fetch();
                        if (passwordVerify($_POST['habboquestAdminPassword'], $habboquestAdminData['password'])) {
                            if ($_POST['habboquestAdminPinCode'] == $habboquestAdminData['pin_code']) {
                                if ($habboquestAdminData['rank'] > 4) {
                                    $_SESSION['habboquestAdminUsername'] = $habboquestAdminData['username'];
                                    webhook("habboquest.nl", "{$_POST['habboquestAdminUsername']}, Just logged into the staff housekeeping", $habboquestWebhook['habboquestWebhook']);
                                    header("Location: /habboquest_housekeeping/dashboard");
                                } else {
                                    header("Location: /index");
                                }
                            } else {
                                echo 1;
                            }
                        } else {
                            echo 1;
                        }
                    } else {
                        echo 1;
                    }
                } else {
                    echo 1;
                }
            } else {
                echo 1;
            }
        } else {
            echo 1;
        }
    }
}