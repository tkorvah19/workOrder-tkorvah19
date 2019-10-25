<!DOCTYPE html>
<!--
Project Name: Fitness Tracker
Developer: Tarnue Korvah
Date: 5-28-2019
-->

<?php
//my profile and all users nav (just display) logical check
//set default value of variables for initial page load 
//comments

if (!isset($firstName)) {
    $firstName = '';
}
if (!isset($lastName)) {
    $lastName = '';
}
if (!isset($userName)) {
    $userName = '';
}
if (!isset($email)) {
    $email = '';
}
$password = '';
$password1 = '';
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Fitness Tracking</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <main class="mainlogin">
        <body>

            <!--Reference: https://phppot.com/php/php-user-registration-form/    -->
            <h1>User Registration </h1>

            <form action="index.php" method="post">
                <input type="hidden" name="action" value="register_user">


                <div id="data">
                    <label>First Name:</label>
                    <input type="text" name="firstName"
                           value="<?php xecho($firstName); ?>"> &nbsp; <?php if (!empty($errorMessageFirst)) { ?> 
                        <span class="error"><?php xecho($errorMessageFirst); ?></span> <?php } ?>
                    <br>

                    <label>Last Name:</label>
                    <input type="text" name="lastName"
                           value="<?php xecho($lastName); ?>"> &nbsp; <?php if (!empty($errorMessageLast)) { ?> 
                        <span class="error"><?php xecho($errorMessageLast); ?></span> <?php } ?>
                    <br>

                    <label>Email Address:</label>
                    <input type="text" name="email"
                           value="<?php xecho($email); ?>"> &nbsp; <?php if (!empty($errorMessageEmail)) { ?> 
                        <span class="error"><?php xecho($errorMessageEmail); ?></span> <?php } ?>
                    <br>

                    <label>User Name:</label>
                    <input type="text" name="userName"
                           value="<?php xecho($userName); ?>"> &nbsp; <?php if (!empty($errorMessageUser)) { ?> 
                        <span class="error"><?php xecho($errorMessageUser); ?></span> <?php } ?>
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password"
                           value="<?php xecho($password); ?>"> &nbsp; <?php if (!empty($errorMessagePassword)) { ?> 
                        <span class="error"><?php xecho($errorMessagePassword); ?></span><?php } ?>
                    <br>

                    <label>Retype password:</label>
                    <input type="password" name="password1"
                           value="<?php xecho($password1); ?>"> &nbsp; <?php if (!empty($errorMessagePassword)) { ?> 
                        <span class="error"><?php xecho($errorMessagePassword); ?></span><?php } ?>
                    <br>


                </div>
                <div id="rdButton"> 
                    <input type="radio" name="user_type" value="administrators"> Administrators<br>
                    <input type="radio" name="user_type" value="Engineers"> Engineers<br>
                    <input type="radio" name="user_type" value="Enployees"> Employees<br>
                </div>   

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="register"><br>
                </div>
                <a href="index.php?action=nothing">Back to Login Page</a><br>
            </form>

        </body>
    </main>
</html>