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
 * habboquest Class Database
 */

class Database {
    // Create Connection To The Database
    public static function connect() {
        global $db, $habboquestDatabase;
        try {
            $db = new PDO("mysql:host={$habboquestDatabase['host']};dbname=".$habboquestDatabase['database'],$habboquestDatabase['username'],$habboquestDatabase['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        } catch (PDOException $e) {
            die($e);
        }
    }
}

/**
 * Start Connection To The Database
 */
Database::connect();