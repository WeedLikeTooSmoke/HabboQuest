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
 * habboquest Page Plugin SSO
 */

 /**
 * Single Sign In 'SSO'
 * Generate SSO Ticket
 */
$sessionKey  = 'HabboQuest-'.substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 25).'-SSO';

/**
 * Check For The Correct Page To Use SSO
 */
if ($_SERVER['REQUEST_URI'] == '/client') {

    /**
     * Update SSO Ticket When Entering/Re-entering The Client
     * Assign Variables For SSO
     */
    $time = strtotime("now");
	$sso = $db->prepare("UPDATE users SET auth_ticket = :sso , last_online = :timenow WHERE id = :id");
	$sso->bindParam(':timenow',  $time);
	$sso->bindParam(':id', $_SESSION['habboId']);
	$sso->bindParam(':sso', $sessionKey);
	$sso->execute();
} else if ($_SERVER['REQUEST_URI'] == '/index') {

    /**
     * Assign SSO For User Registration
     */
	$habboquestSSO = $sessionKey;
}