<?php

declare(strict_types=1);

function is_input_empty($email, $username, $pwd)
{
    if (empty($email) || empty($username) || empty($pwd)) {
        return true;
    }
    return false;
}

function is_email_invalid($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}
function is_username_taken($pdo, $username)
{
    if (get_username($pdo, $username)) {
        return true;
    }
    return false;
}
function is_email_registered($pdo, $email)
{
    if (get_email($pdo, $email)) {
        return true;
    }
    return false;
}

