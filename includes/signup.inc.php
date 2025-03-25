<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_contr.inc.php';
        require_once 'signup_model.inc.php';


        $errors = [];

        if (is_input_empty($email, $username, $pwd)) {
            $errors["empty_input"] = 'Please fill in all fields!';
        }
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = 'Invalid Email used!';

        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = 'Username already Taken!';

        }
        if (is_email_registered($pdo, $username)) {
            $errors["email_used"] = 'Email already Registered!';

        }

        require_once 'config_session.inc.php';
        if ($errors) {
            $_SESSION['errors_signup'] = $errors;
            $signupData=["username"=>$username, "email"=>$email];
            $_SESSION['signup_data'] = $signupData;

            header("Location: ../index.php");
            exit();
        }

        create_user($pdo, $username, $pwd, $email);
        header("Location: ../index.php?signup=success");
        exit();
    } catch (\Throwable $th) {
        die("Connection Failed" . $th->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}