
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//set default value of variables for initial page load
if (!isset($userName)) {
    $userName = '';
}
if (!isset($password)) {
    $password = '';
}
if (!isset($errorMessageLogin)) {
    $errorMessageLogin = '';
}
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title></title>
    </head>
    <main class="mainlogin">
        <body>

            <h1>Login Page</h1>
            <br>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="login">


                <div id="data">

                    <div class="error"><?php xecho($errorMessageLogin); ?></div>
                    <br>

                    <label>User Name:</label>
                    <input type="text" name="userName" autofocus
                           value="<?php xecho($userName); ?>"> &nbsp; <?php if (!empty($errorMessageUser)) { ?> 
                        <span class="error"><?php xecho($errorMessageUser); ?></span> <?php } ?>
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password"
                           value="<?php xecho($password); ?>"> &nbsp; <?php if (!empty($errorPassword)) { ?> 
                        <span class="error"><?php xecho($errorPassword); ?></span> <?php } ?>
                    <br>
                    

                    <div id="buttons">
                        <label>&nbsp;</label>
                        <input type="submit" value="Login"><br>
                    </div>
                    
                    
                    <br>
                    
                    <a href="index.php?action=Home">Go Back to Home Page</a><br>
                    <br>
                    
                    <a href="#">Contact your administrator if your forgot your UserID or Password</a><br>

                    </form>
                    </body>
                    </main>
                    </html>