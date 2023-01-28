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
 * habboquest Page Plugin Timetable
 */

if ($habboquestEnable['habboquestPluginTimetable'] == true) {
    $time = dateTime("+0 hour");
    $time = explode("-", $time);
    $hour = $time[0];
    $day  = $time[1];
    $month= $time[2];
    $year = $time[3];
    $getTimetable = $db->prepare("SELECT * FROM habboquest_timetable WHERE month = :month ORDER BY day DESC, hour DESC LIMIT 28");
    $getTimetable->bindParam(":month", $month);
    $getTimetable->execute();
    if ($getTimetable->RowCount() > 0) {
        while ($timetable = $getTimetable->fetch()) {
            echo "
            <div class='habboquest-timetable-placeholder'>
             <div class='habboquest-timetable-time'>".xss($timetable['hour']).":00</div>
             <div class='habboquest-timetable-type'><a href='http://localhost/profile/".xss($timetable['username'])."'>".xss($timetable['username'])."</a><br>".xss($timetable['event_name'])."</a></div>
            </div>
            ";
        }
    } else {
        echo "
        <div class='habboquest-timetable-none'>
         No one has currently booked a slot for this months events...
        </div>
        ";
    }
}