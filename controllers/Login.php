<?php

class Controller
{
    public function login($email, $password)
    {
        $user = new User($email, $password);
        $_SESSION["data"] = $user->getData();
        if (!empty($_SESSION["data"])) {
            return $_SESSION["data"]["varEmail"];
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /index.php', true, 303);
        exit;
    }
}