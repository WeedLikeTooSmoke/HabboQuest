<?php
/******************************************************/
/*  Copyright (C) Clipstone Inc, All Rights Reserved  */
/*   Written and designed by Declan David Wilkinson   */
/*     Do with these files as you wish, No limits     */
/******************************************************/

/**
 * Setting this to your timezone will get the correct results for you
 * https://www.php.net/manual/en/timezones.php
 */
date_default_timezone_set("Europe/London");

/**
 * closedhabbo Autoload
 */
define("HABBOQUEST", true);
include "autoload.php";
Page::page();