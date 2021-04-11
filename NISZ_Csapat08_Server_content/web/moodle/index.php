<?php
include 'config.php';
require_once 'lib/accesslib.php';

if (!empty($CFG->maintenance_enabled) and !$hasmaintenanceaccess) {
    header("location: https://youtu.be/9jK-NcRmVcw?t=108");
}

// Teszteléshez
//print_r(json_decode(json_encode($SESSION), true));

$sessionArray = json_decode(json_encode($SESSION), true);

if(isloggedin() && $USER->id != 1) {
    $SESSION->SAJTLOGIN = true;

    if(user_has_role_assignment($USER->id, 12)){
        $SESSION->EMPLOYEE = true;
    } else {
        $SESSION->EMPLOYEE = false;
    }
} else {
    $SESSION->SAJTLOGIN = false;
}

$contents = file_get_contents ("home.html");
$contents = str_replace("{{isLoggedIn}}", $SESSION->SAJTLOGIN ? "true" : "false", $contents);
$contents = str_replace("{{isWorker}}", $SESSION->EMPLOYEE ? "true" : "false", $contents);
$contents = str_replace("{{userId}}", $USER->id, $contents);

echo $contents;