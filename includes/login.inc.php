<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'login_model.inc.php';


        $errors = [];

        if (is_input_empty( $username, $pwd)) {
            $errors["empty_input"] = 'Please fill in all fields!';
        }

        $result=get_user($pdo, $username);

        if(is_username_wrong($result)) {
            $errors['login_incorrect'] = 'Incorrect username or password!';
        }
        if(!is_username_wrong($result) && is_password_wrong($pwd, $result['pwd'])) {
            $errors['login_incorrect'] = 'Incorrect username or password!';
        }

        require_once 'config_session.inc.php';
        if ($errors) {
            $_SESSION['errors_login'] = $errors;

            header("Location: ../index.php");
            exit();
        }

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_username'] = htmlspecialchars($result['username']);
        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");
        exit();
    } catch (\Throwable $th) {
        die("Connection Failed" . $th->getMessage());
    }

} else {
    header("Location: ../index.php");
    exit();
}