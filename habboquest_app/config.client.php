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
 * habboquest Client Configuration
 */

$habboquestClient = array(
    "habboquestEmulatorHost" => "localhost",
    "habboquestEmulatorPort" => "30000",
    "habboquestDiamondsEnabled" => true,
    "habboquestHotelUrl" => "http://localhost",
    "habboquestExternalVariables" => "http://localhost/swfs/gamedata/external_variables.txt",
    "habboquestExternalVariablesOverride" => "http://localhost/swfs/gamedata/override/external_override_variables.txt",
    "habboquestExternalTexts" => "http://localhost/swfs/gamedata/external_flash_texts.txt",
    "habboquestExternalTextsOverride" => "http://localhost/swfs/gamedata/override/external_flash_override_texts.txt",
    "habboquestProductData" => "http://localhost/swfs/gamedata/productdata.txt",
    "habboquestFurniData" => "http://localhost/swfs/gamedata/furnidata.xml",
    "habboquestFigureMap" => "http://localhost/swfs/gamedata/figuremap.xml",
    "habboquestFigureData" => "http://localhost/swfs/gamedata/figuredata.xml",
    "habboquestSwfsFolder" => "http://localhost/swfs/gordon/PRODUCTION-201611291003-338511768",
    "habboquestSwfsFolderSwf" => "http://localhost/swfs/gordon/PRODUCTION-201611291003-338511768/Habbo.swf"
);