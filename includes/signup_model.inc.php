<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindPARAM(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}
function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindPARAM(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}
function set_user(object $pdo, string $username, string $pwd ,string $email){
    $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd);";
    $stmt = $pdo->prepare($query);
    $options = [
        "cost" => 12,
    ];
    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt->bindPARAM(":username", $username);
    $stmt->bindPARAM(":email", $email);
    $stmt->bindPARAM(":pwd", $hashedpwd);
    $stmt->execute();
}