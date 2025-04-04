<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Signup</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div
        style="display: flex; justify-content: space-around; flex-direction: column; align-items: center; height: 100vh; gap: 20px;">
        <div>

            <h3>Login</h3>

            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
                <?php
                checkup_login_errors();
                ?>
        <div>


            <h3>Signup</h3>

            <form action="includes/signup.inc.php" method="post">
                <!-- <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="text" name="email" placeholder="Email"> -->
                <?php 
                signup_inputs();
                ?>
                <button>Signup</button>
            </form>
        </div>
    </div>
    <?php
    checkup_signup_errors();
    ?>
</body>

</html>