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
 * habboquest Plugin Configuration
 */

$habboquestPlugin = array(
    // Random Avatar Generator
    "habboquestPluginStarterAvatar" => "hr-115-42.hd-195-19.ch-3030-82.lg-275-1408.fa-1201.ca-1804-64",

    // Refferal Plugin Owners Username
    "habboquestOwnerUsernameRefferal" => "Declan",

    // Buy Crate Cost
    "habboquestPluginCrateCost1" => 25,
    "habboquestPluginCrateCost2" => 125,
    "habboquestPluginCrateCost3" => 225,
    "habboquestPluginCrateCost4" => 325,
    
    // Buy Lottery Ticket Cost
    "habboquestPluginBuyLotteryCost1" => 5,
    "habboquestPluginBuyLotteryCost2" => 50,
    "habboquestPluginBuyLotteryCost3" => 175,

    // Buy VIP Cost
    "habboquestPluginBuyVIPCost1" => 25,
    "habboquestPluginBuyVIPCost2" => 75,
    "habboquestPluginBuyVIPCost3" => 175,

    // Buy Currencys Cost
    "habboquestPluginBuyCurrencysCredits1Cost" => 5,
    "habboquestPluginBuyCurrencysCredits2Cost" => 20,
    "habboquestPluginBuyCurrencysCredits3Cost" => 50,
    "habboquestPluginBuyCurrencysDuckets1Cost" => 5,
    "habboquestPluginBuyCurrencysDuckets2Cost" => 10,
    "habboquestPluginBuyCurrencysDuckets3Cost" => 20,
    "habboquestPluginBuyCurrencysDiamonds1Cost" => 10,
    "habboquestPluginBuyCurrencysDiamonds2Cost" => 25,
    "habboquestPluginBuyCurrencysDiamonds3Cost" => 60,
    // Buy Currencys Amount
    "habboquestPluginBuyCurrencysCredits1Amount" => 1000,
    "habboquestPluginBuyCurrencysCredits2Amount" => 5000,
    "habboquestPluginBuyCurrencysCredits3Amount" => 15000,
    "habboquestPluginBuyCurrencysDuckets1Amount" => 15000,
    "habboquestPluginBuyCurrencysDuckets2Amount" => 50000,
    "habboquestPluginBuyCurrencysDuckets3Amount" => 150000,
    "habboquestPluginBuyCurrencysDiamonds1Amount" => 100,
    "habboquestPluginBuyCurrencysDiamonds2Amount" => 250,
    "habboquestPluginBuyCurrencysDiamonds3Amount" => 750,

    "habboquestPluginAnnouncement" => "<center><i style='font-size: 19px;' class='fa fa-triangle-exclamation'></i> &nbsp;&nbsp;&nbsp;Welcome to Habbo.quest beta, Website is currently still being worked on!</center>",
    "habboquestPluginChangeUsernameCost" => 5
);