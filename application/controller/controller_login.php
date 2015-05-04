<?php
session_start();
require_once('../model/model_login.php');
if (!empty($_POST["email"]) AND !empty($_POST["password"])) {
    $user = new User($_POST["email"], $_POST["password"]);
    $_SESSION["data"] = $user->getData();
    if (!empty($_SESSION["data"])) {
        header('Location: ../view/view_profile.php', true, 303);
        exit;
    }
    else {
        $_SESSION["error"] = "The email or password you entered is incorrect.";
        header('Location: ../view/view_login.php', true, 303);
        exit;
    }
} else {
    $_SESSION["error"] = "Please input email and password.";
    header('Location: ../view/view_login.php', true, 303);
    exit;
}