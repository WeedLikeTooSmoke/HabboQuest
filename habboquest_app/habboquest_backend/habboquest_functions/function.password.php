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
 * habboquest Function Password
 */

function passwordHash($pass) {

    // Returns an encrypted password
    return password_hash($pass, PASSWORD_DEFAULT);
}

function passwordVerify($pass, $password) {

    // Checks if the inputted password is the same password as the encrypted password
    if (password_verify($pass, $password)) {

        // Passwords match
        return true;
    } else {

        // Passwords dont match
        return false;
    }
}