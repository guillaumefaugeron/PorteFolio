<?php

// src/Security
namespace guillaume\Security;

class CheckLogin
{
    public function __construct()
    {
        // $date = new \DateTime;
        // die($date->format('Y/m/d H:i:s'));
        session_start();
    }

    public function check(): void
    {
        if (
            !isset($_SESSION['is_logged_in']) ||
            $_SESSION['is_logged_in'] === false
        ) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/admin/login.php');
            exit();
        }
    }
}