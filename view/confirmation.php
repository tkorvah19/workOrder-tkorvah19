<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<<html>
    <head>
        <meta charset="UTF-8">
        <title>Fitness Tracker</title>
        <link rel="stylesheet" type="text/css" href="style1.css" >
    </head>
    <main>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="confirm_registration">
            <body>
                

                <h1> Registration Completed </h1>

                <label> First Name:</label>
                <span> <?php xecho($user->getFirstName()); ?> </span> <br>

                <label> Last Name:</label>
                <span> <?php xecho($user->getLastName()); ?> </span><br>

                <label> User Name:</label>
                <span> <?php xecho($user->getUserName()); ?> </span><br>

                <label> Email Address:</label>
                <span> <?php xecho($user->getEmail()); ?> </span><br>

                <a href="index.php?action=show_form">Registration Page</a> <br>
                <a href="index.php?action=show_Login">Go to Login</a>

            </body>
        </form>
    </main>

</html>
