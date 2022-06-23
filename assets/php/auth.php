<?php

function is_connect(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    };
    return !empty($_SESSION['connect']);
}

function user_connected(): void
{
    if (!is_connect()) {
        header('Location: login.php');
        exit();
    }
}
