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
 * habboquest Page Plugin Register
 */

if ($habboquestEnable['habboquestPluginNews'] == true) {
    $habboquestNews = $db->prepare("SELECT * FROM habboquest_news ORDER BY id DESC LIMIT 3");
    $habboquestNews->execute();
    if ($habboquestNews->RowCount() > 0) {
        $num = 1;
        while ($news = $habboquestNews->fetch()) {
            echo "
            <div class='habboquest-news-placeholder'>
             <div class='habboquest-news-id'>{$news['id']}</div>
             <div class='habboquest-news-title'>".xss($news['news_title'])."</div><br>
             <div class='habboquest-news-description'>".xss($news['news_subtitle'])."</div>
            </div>
            ";
            $num++;
        }
    }
}