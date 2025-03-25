<?php

declare(strict_types=1);

function is_input_empty( $username, $pwd)
{
    if ( empty($username) || empty($pwd)) {
        return true;
    }
    return false;
}
function is_username_wrong($result)
{
    if (!$result) {
        return true;
    }
    return false;       
}
function is_password_wrong($pwd, $hashedpwd)
{
    if (password_verify($pwd, $hashedpwd)) {
        return false;
    }
    return true;       
}