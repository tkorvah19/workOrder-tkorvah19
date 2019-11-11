<!DOCTYPE html>
<!--
Project: Work Order System
Programmer: Tarnue Korvah
Date: 10/25/2019
-->
<?php

require_once('model/User.php');
require_once('model/database.php');
require_once('model/Administrator.php');
require_once('model/AdministratorDB.php');

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
    
    case 'Home':

        include'view/home.php';
        die();
        break;
    
    case 'login':

        include'view/logon.php';
        die();
        break;
    
    case 'login_admin':

        include'view/admin_logon.php';
        die();
        break;
    
    case 'registriction':

        include'view/user_registration.php';
        die();
        break;
    
    case 'add_user':

        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $userName = filter_input(INPUT_POST, 'userName');
        $phone = filter_input(INPUT_POST, 'phone');
        $role = filter_input(INPUT_POST, 'role');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $password1 = filter_input(INPUT_POST, 'password1');
        
        //$matched = preg_match(pattern, subject);
        $passwordUpper = '/[A-Z]/';
        $passwordLower = '/[a-z]/';
        $passwordNumber = '/[0-9]/';
        $startsWithLetter = '/^[a-zA-Z]/';
        $startsLetterLength = '/^[a-zA-Z][a-zA-Z0-9]{3,29}$/'; //https://stackoverflow.com/questions/2821419/regular-expression-starting-and-ending-with-a-letter-accepting-only-letters


        if ($firstName == FALSE) {
            $errorMessageFirst = 'Must input a first name.';
        } else if (preg_match($startsWithLetter, $firstName) != 1) {
            $errorMessageFirst = 'First name must start with a letter.';
        } else {
            $errorMessageFirst = '';
        }


        if ($lastName == FALSE) {
            $errorMessageLast = 'Must input a last name.';
        } else if (preg_match($startsWithLetter, $lastName) != 1) {
            $errorMessageLast = 'Last name must start with a letter.';
        } else {
            $errorMessageLast = '';
        }

        if ($userName == FALSE) {
            $errorMessageUser = 'Must input a user name.';
        } else if (preg_match($startsLetterLength, $userName) != 1) {
            $errorMessageUser = 'Username must start with a letter and be 4 - 30 characters in length.';
        } else if ($userName === AdministratorDB::checkUsername($userName)) {
            $errorMessageUser = 'Username already taken.';
        } else {
            $errorMessageUser = '';
        }


        if ($email == FALSE) {
            $errorMessageEmail = 'Must input an email address.';
        } else if ($email === AdministratorDB::checkEmail($email)) {
            $errorMessageEmail = 'Email already taken.';
        } else {
            $errorMessageEmail = '';
        }
        
        if ($phone == FALSE) {
            $errorMessagePhone = 'Must input an email address.';
        } else if ($email === AdministratorDB::checkPhone($phone)) {
            $errorMessagePhone = 'phone already exit.';
        } else {
            $errorMessageEmail = '';
        }
        
        if ($role == FALSE) {
            $errorMessageRole = 'Must input role.';
        } else {
            $errorMessageRole = '';
        }


        if ($password == FALSE) {
            $errorMessagePassword = 'Must input a valid password.';
        } else if ($password != $password1) {
            $errorMessagePassword = 'Passwords do not match.';
        } else if (strlen($password) < 10) {
            $errorMessagePassword = 'Password must be at least 10 characters long';
        } else if (preg_match($passwordUpper, $password) != 1) {


            //{  if ($matched === 0)
            $errorMessagePassword = 'Password must include at least one UPPERCASE letter';
        }//}
        else if (preg_match($passwordNumber, $password) != 1) {


            //{  if ($matched === 0)
            $errorMessagePassword = 'Password must include at least one Number';
        }//}
        else if (preg_match($passwordLower, $password) != 1) {
            $errorMessagePassword = 'Password must include at least one LOWERCASE letter.';
        } else {
            $errorMessagePassword = '';
            $hash = password_hash($password, PASSWORD_BCRYPT, $options);
        }
        if ($errorMessageFirst != '') {
            include('view/user_registration.php');
            exit();
        } else if ($errorMessageLast != '') {
            include('view/user_registration.php');
            exit();
        } else if ($errorMessageUser != '') {
            include('view/user_registration.php');
            exit();
        } else if ($errorMessageEmail != '') {
            include('view/user_registration.php');
            exit();
        } else if ($errorMessagePassword != '') {
            include('view/user_registration.php');
            exit();
        }else if ($errorMessageRole != '') {
            include('view/user_registration.php');
            exit();
        }
            
        $admin = new Administrator($firstName, $lastName, $userName, $phone, $role, $email, $hash);
        AdministratorDB::addAdmin($admin);
        $admin = AdministratorDB::getAdministrator($userName);
        $_SESSION['admID'] = $admin->getAdmID();
        include 'view/confirmation.php';
        die();
        break;

    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>
