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
 * habboquest Page Plugin News Main
 */

if ($habboquestEnable['habboquestPluginNewsMain'] == true) {
    $getNews = $db->prepare("SELECT * FROM habboquest_news WHERE id = :id");
    $getNews->bindParam(":id", $_GET['id']);
    $getNews->execute();
    if ($getNews->RowCount() > 0) {
        $news = $getNews->fetch();
        echo "
        {$news['news_title']} <br><br>
        {$news['news_subtitle']} <br><br>
        {$news['news_description']}
        ";
    }
}