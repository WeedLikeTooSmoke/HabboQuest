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
    public static function online() {
        global $db;
        $getOnlineUsers = $db->prepare("SELECT online FROM users WHERE online = '1'");
        $getOnlineUsers->execute();
        if ($getOnlineUsers->RowCount() > 0) {
            return $getOnlineUsers->RowCount();
        } else {
            return 0;
        }
    }
    public static function page() {
        global $db, $habboquestEnable, $habboquestPlugin, $habboquestLanguage, $habboquestWebhook, $habboquestClient, $habboquestDatabase;
        $uri = $_SERVER['REQUEST_URI'];
        if (isLoggedIn()) {
            switch ($uri) {
                case "/";
                case "/index";
                header("Location: /me");
            }
        }
        if (!isLoggedIn()) {
            switch ($uri) {
                case "/me";
                case "/client";
                header("Location: /index");
            }
        }
        if (isset($_GET['username']) || isset($_GET['id'])) {
            if (empty($_GET['username'])) {$_GET['username'] = 1;}
            if (empty($_GET['id'])) {$_GET['id'] = 1;}
            if (Users::checkOtherUserInfo("users", "username", $_GET['username']) || Users::checkOtherUserInfo("habboquest_news", "id", $_GET['id'])) {
                switch ($uri) {
                    case "/profile/".$_GET['username'];
                    include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.profile.php";
                    break;
                    case "/news/".$_GET['id'];
                    include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.news.php";
                    break;
                    default;
                    header("Location: /404");
                }
            } else {
                header("Location: /404");
            }
        } else {
            $uri_trimmed = trim($uri, "/");
            if (!file_exists($_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.$uri_trimmed.php")) {
                header("Location: /404");
            }
        }
        $uri_trimmed = trim("/", $uri);
        switch ($uri) {
            case "/";
            include header("Location: /index");
            break;
            case "/index";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.index.php";
            break;
            case "/me";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.me.php";
            break;
            case "/account";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.account.php";
            break;
            case "/inventory";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.inventory.php";
            break;
            case "/logout";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.logout.php";
            break;
            case "/leaderboard";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.leaderboard.php";
            break;
            case "/timetable";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.timetable.php";
            break;
            case "/online";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.online.php";
            break;
            case "/news";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.news.php";
            break;
            case "/staff";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.staff.php";
            break;
            case "/rarevalues";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.rarevalues.php";
            break;
            case "/donate";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.donate.php";
            break;
            case "/currencys";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.currencys.php";
            break;
            case "/lottery";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.lottery.php";
            break;
            case "/rarecrates";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.rarecrates.php";
            break;
            case "/vip";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.vip.php";
            break;
            case "/client";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.client.php";
            break;
            case "/404";
            include $_SERVER['DOCUMENT_ROOT']."/habboquest_template/template.404.php";
            break;
        }
    }
}