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
 * habboquest Class Users
 */

class Users {
    public static function getUserInfo($column) {
        global $db;
        $getUserInfo = $db->prepare("SELECT $column FROM users WHERE username = :username");
        $getUserInfo->bindParam(":username", $_SESSION['habboquestUsername']);
        $getUserInfo->execute();
        if ($getUserInfo->RowCount() > 0) {
            $info = $getUserInfo->fetch();
            return $info[$column];
        }
    }
    public static function checkOtherUserInfo($table, $column, $item) {
        global $db;
        $getUserInfo = $db->prepare("SELECT $column FROM $table WHERE $column = :username");
        $getUserInfo->bindParam(":username", $item);
        $getUserInfo->execute();
        if ($getUserInfo->RowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public static function isOnline() {
        global $db;
        $isOnline = $db->prepare("SELECT online FROM users WHERE username = :username AND online = '0'");
        $isOnline->bindParam(":username", $_SESSION['habboquestUsername']);
        $isOnline->execute();
        if ($isOnline->RowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }
}