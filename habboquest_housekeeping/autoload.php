<?php
/******************************************************/
/* Copyright (C) Habbo.quest Inc, All Rights Reserved */
/*   Written and designed by Declan David Wilkinson   */
/*     Do with these files as you wish, No limits     */
/******************************************************/

/**
 * habboquest Plugins
 */
include $_SERVER['DOCUMENT_ROOT'] . "/habboquest_app/habboquest_backend/habboquest_plugins/plugin.session.php";
foreach (glob($_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_backend/habboquest_plugins/*.php") as $plugins) {
    include $plugins;
}

/**
 * habboquest Configs
 */
foreach (glob($_SERVER['DOCUMENT_ROOT']."/habboquest_app/*.php") as $configs) {
    include $configs;
}

/**
 * habboquest Functions
 */
foreach (glob($_SERVER['DOCUMENT_ROOT']."/habboquest_app/habboquest_backend/habboquest_functions/*.php") as $functions) {
    include $functions;
}

/**
 * habboquest Classes
 */
foreach (glob($_SERVER['DOCUMENT_ROOT']."/habboquest_housekeeping/habboquest_backend/habboquest_classes/*.php") as $classes) {
    include $classes;
}