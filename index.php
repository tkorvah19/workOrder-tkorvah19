<!DOCTYPE html>
<!--
Project: Work Order System
Programmer: Tarnue Korvah
Date: 10/25/2019
-->
<?php

//require_once('model/User.php');
//require_once('model/database.php');
//require_once('model/UserDB.php');
//require_once('model/fitnessData_db.php');
//require_once('model/Fitness.php');

session_start();

function xssafe($data, $encoding = 'UTF-8') {

    return htmlspecialchars($data, ENT_QUOTES | ENT_HTML401, $encoding);
}

function xecho($data) {

    echo xssafe($data);
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'nothing';
    }
}


$options = [
    'cost' => 6
];



switch ($action) {
    
    case 'nothing':

        include'view/home.php';
        die();
        break;
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>
