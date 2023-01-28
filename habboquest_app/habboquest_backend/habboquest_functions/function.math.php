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
 * habboquest Function Math
 */

function randomNumber($min, $max) {

    // Return a random integer from inbetween $min and $max amount
    return random_int($min, $max);
}

function multipleOf($num, $multiple) {

    // Check if $num is a multiple of $multiple
    if ($num % $multiple === 0) {
        return true;
    } else {
        return false;
    }
}