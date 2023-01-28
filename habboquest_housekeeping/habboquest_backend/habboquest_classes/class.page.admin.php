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
 * habboquest Class Page
 */

class Page {
    public static function page() {
        global $db, $habboquestEnable, $habboquestPlugin, $habboquestLanguage, $habboquestWebhook;
        $uri = $_SERVER['REQUEST_URI'];
        if (!isLoggedIn()) {
            header("Location: /index");
        }
        if (isset($_SESSION['habboquestAdminUsername'])) {
            switch ($uri) {
                case "/habboquest_housekeeping/index";
                header("Location: /habboquest_housekeeping/dashboard");
            }
        }
        if (!isset($_SESSION['habboquestAdminUsername'])) {
            switch ($uri) {
                case "/habboquest_housekeeping/dashboard";
                header("Location: /habboquest_housekeeping/index");
            }
        }
        switch ($uri) {
            case "/habboquest_housekeeping/";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_template/template.index.php";
            break;
            case "/habboquest_housekeeping/index";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_template/template.index.php";
            break;
            case "/habboquest_housekeeping/dashboard";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_template/template.dashboard.php";
            break;
            case "/habboquest_housekeeping/logout";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_template/template.logout.php";
            break;
            case "/habboquest_housekeeping/404";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_template/template.404.php";
            break;
            default;
            header("Location: /habboquest_housekeeping/404");
        }
    }
}