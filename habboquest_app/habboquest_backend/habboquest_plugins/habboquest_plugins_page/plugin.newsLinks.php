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
 * habboquest Page Plugin News Links
 */

if ($habboquestEnable['habboquestPluginNewsLinks'] == true) {
    $getNews = $db->prepare("SELECT id, news_title FROM habboquest_news ORDER BY id DESC");
    $getNews->execute();
    if ($getNews->RowCount() > 0) {
        while ($news = $getNews->fetch()) {
            echo "
            <a href='/news/{$news['id']}'>".xss($news['news_title'])."</a>
            ";
        }
    } else {
        echo "
        <div class='habboquest-news'>
         There currently isnt any news...
        </div>
        ";
    }
}