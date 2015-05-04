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
        header('Location: ../view/view_login.php', true, 303);
        exit;
    }
} else {
    header('Location: ../view/view_login.php', true, 303);
    exit;
}