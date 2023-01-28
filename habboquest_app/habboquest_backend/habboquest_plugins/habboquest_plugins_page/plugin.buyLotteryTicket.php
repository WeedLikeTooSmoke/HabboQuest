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
 * habboquest Page Plugin Lottery Ticket
 */

if ($habboquestEnable['habboquestPluginLottery'] == true) {
    if (isset($_POST['habboquestLotteryDaily'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyLotteryCost1']) {
            if (Users::isOnline()) {
                $time = dateTime("+0 hour");
                $time = explode("-", $time);
                $hour = $time[0];
                $day  = $time[1];
                $month= $time[2];
                $year = $time[3];
                $type = "Daily";

                $checkTicket = $db->prepare("SELECT username, day, month, year, ticket_type FROM habboquest_lottery_tickets WHERE username = :username AND day = :day AND month = :month AND year = :year AND ticket_type = :ticket_type");
                $checkTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                $checkTicket->bindParam(":day", $day);
                $checkTicket->bindParam(":month", $month);
                $checkTicket->bindParam(":year", $year);
                $checkTicket->bindParam(":ticket_type", $type);
                $checkTicket->execute();
                if ($checkTicket->RowCount() != 1) {
                    $ticketNumber = randomNumber(0,9).randomNumber(0,9).randomNumber(0,9).randomNumber(0,9);

                    $payTicket = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                    $payTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $payTicket->bindParam(":cost", $habboquestPlugin['habboquestPluginBuyLotteryCost1']);
                    $payTicket->execute();

                    $insertTicket = $db->prepare("INSERT INTO habboquest_lottery_tickets 
                    (username, ticket_type, ticket_number, day, month, year) VALUES 
                    (:username, :ticket_type, :ticket_number, :day, :month, :year)");
                    $insertTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $insertTicket->bindParam(":ticket_type", $type);
                    $insertTicket->bindParam(":ticket_number", $ticketNumber);
                    $insertTicket->bindParam(":day", $day);
                    $insertTicket->bindParam(":month", $month);
                    $insertTicket->bindParam(":year", $year);
                    $insertTicket->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Daily Lottery Ticket";
                    $transactionType = "Buy Yearly Daily Ticket";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a daily lottery ticket at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketAlreadyBoughtDaily'];
                }
            } else {
                $habboquestLotteryError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketNotEnoughPointsDaily'];
        }
    }
    if (isset($_POST['habboquestLotteryMonthly'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyLotteryCost2']) {
            if (Users::isOnline()) {
                $time = dateTime("+0 hour");
                $time = explode("-", $time);
                $hour = $time[0];
                $day  = $time[1];
                $month= $time[2];
                $year = $time[3];
                $type = "monthly";

                $checkTicket = $db->prepare("SELECT username, month, year, ticket_type FROM habboquest_lottery_tickets WHERE username = :username AND month = :month AND year = :year AND ticket_type = :ticket_type");
                $checkTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                $checkTicket->bindParam(":month", $month);
                $checkTicket->bindParam(":year", $year);
                $checkTicket->bindParam(":ticket_type", $type);
                $checkTicket->execute();
                if ($checkTicket->RowCount() != 1) {
                    $ticketNumber = randomNumber(0,9).randomNumber(0,9).randomNumber(0,9).randomNumber(0,9);

                    $payTicket = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                    $payTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $payTicket->bindParam(":cost", $habboquestPlugin['habboquestPluginBuyLotteryCost1']);
                    $payTicket->execute();

                    $insertTicket = $db->prepare("INSERT INTO habboquest_lottery_tickets 
                    (username, ticket_type, ticket_number, day, month, year) VALUES 
                    (:username, :ticket_type, :ticket_number, :day, :month, :year)");
                    $insertTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $insertTicket->bindParam(":ticket_type", $type);
                    $insertTicket->bindParam(":ticket_number", $ticketNumber);
                    $insertTicket->bindParam(":day", $day);
                    $insertTicket->bindParam(":month", $month);
                    $insertTicket->bindParam(":year", $year);
                    $insertTicket->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Monthly Lottery Ticket";
                    $transactionType = "Buy Monthly Lottery Ticket";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a monthly lottery ticket at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketAlreadyBoughtMonthly'];
                }
            } else {
                $habboquestLotteryError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketNotEnoughPointsMonthly'];
        }
    }
    if (isset($_POST['habboquestLotteryYearly'])) {
        if (Users::getUserInfo("cms_points") >= $habboquestPlugin['habboquestPluginBuyLotteryCost3']) {
            if (Users::isOnline()) {
                $time = dateTime("+0 hour");
                $time = explode("-", $time);
                $hour = $time[0];
                $day  = $time[1];
                $month= $time[2];
                $year = $time[3];
                $type = "yearly";

                $checkTicket = $db->prepare("SELECT username, year, ticket_type FROM habboquest_lottery_tickets WHERE username = :username AND year = :year AND ticket_type = :ticket_type");
                $checkTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                $checkTicket->bindParam(":year", $year);
                $checkTicket->bindParam(":ticket_type", $type);
                $checkTicket->execute();
                if ($checkTicket->RowCount() != 1) {
                    $ticketNumber = randomNumber(0,9).randomNumber(0,9).randomNumber(0,9).randomNumber(0,9);

                    $payTicket = $db->prepare("UPDATE users SET cms_points = cms_points - :cost WHERE username = :username");
                    $payTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $payTicket->bindParam(":cost", $habboquestPlugin['habboquestPluginBuyLotteryCost3']);
                    $payTicket->execute();

                    $insertTicket = $db->prepare("INSERT INTO habboquest_lottery_tickets 
                    (username, ticket_type, ticket_number, day, month, year) VALUES 
                    (:username, :ticket_type, :ticket_number, :day, :month, :year)");
                    $insertTicket->bindParam(":username", $_SESSION['habboquestUsername']);
                    $insertTicket->bindParam(":ticket_type", $type);
                    $insertTicket->bindParam(":ticket_number", $ticketNumber);
                    $insertTicket->bindParam(":day", $day);
                    $insertTicket->bindParam(":month", $month);
                    $insertTicket->bindParam(":year", $year);
                    $insertTicket->execute();

                    $transactionIp = userIp();
                    $transactionTime = strtotime("now");
                    $transactionDescription = "Bought Yearly Lottery Ticket";
                    $transactionType = "Buy Yearly Lottery Ticket";

                    $habboquestTransaction = $db->prepare("INSERT INTO habboquest_transactions 
                    (transaction_username, transaction_type, transaction_made, transaction_ip, transaction_description) VALUES 
                    (:transaction_username, :transaction_type, :transaction_made, :transaction_ip, :transaction_description)");
                    $habboquestTransaction->bindParam(":transaction_username", $_SESSION['habboquestUsername']);
                    $habboquestTransaction->bindParam(":transaction_type", $transactionType);
                    $habboquestTransaction->bindParam(":transaction_made", $transactionTime);
                    $habboquestTransaction->bindParam(":transaction_ip", $transactionIp);
                    $habboquestTransaction->bindParam(":transaction_description", $transactionDescription);
                    $habboquestTransaction->execute();

                    webhook("habbo.quest", "{$_SESSION['habboquestUsername']}, Just bought a yearly lottery ticket at habbo.quest, Go say hello! https://habbo.quest/profile/{$_SESSION['habboquestUsername']}", $habboquestWebhook['habboquestWebhookTransactions']);
                } else {
                    $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketAlreadyBoughtYearly'];
                }
            } else {
                $habboquestLotteryError = $habboquestLanguage['habboquestCrateOnClient'];
            }
        } else {
            $habboquestLotteryError = $habboquestLanguage['habboquestLotteryBuyTicketNotEnoughPointsYearly'];
        }
    }
}