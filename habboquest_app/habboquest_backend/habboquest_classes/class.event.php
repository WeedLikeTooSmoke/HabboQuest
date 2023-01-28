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
 * habboquest Event
 */

class Event {
    public static function event($timeToAdd) {
        global $db;
        
        // Sort time given
        $time = dateTime($timeToAdd);
        $time = explode("-", $time);
        $hour = $time[0];
        $day  = $time[1];
        $month= $time[2];
        $year = $time[3];

        // fetch details from db after time math
        $event = $db->prepare("SELECT * FROM habboquest_timetable WHERE year = :year AND month = :month AND day = :day AND hour = :hour LIMIT 1");
        $event->bindParam(":year", $year);
        $event->bindParam(":month", $month);
        $event->bindParam(":day", $day);
        $event->bindParam(":hour", $hour);
        $event->execute();

        // check if anything was selected
        if ($event->RowCount() > 0) {

            // Fetch db details and assign to variable
            $eventData = $event->fetch();

            // There is data
            // Echo placeholder with db details
            echo "
            <div class='habboquest-event-image'>
             <div class='habboquest-event-time'>".xss($hour).":00</div>
             <div class='habboquest-event-username'><a href='http://localhost/profile/".xss($eventData['username'])."'>".xss($eventData['username'])."</a><br>".xss($eventData['event_name'])."</div>
            </div>
            ";
        } else {

            // There is no data
            // Echo alternate placeholder
            echo "
            <div class='habboquest-event-image'>
             <div class='habboquest-event-time'>".xss($hour).":00</div>
             <div class='habboquest-event-type'>Unbooked</div>
            </div>
            ";
        }
    }
}