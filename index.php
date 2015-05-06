<?php

include 'models/model_login.php';
include 'controllers/controller_login.php';

if (!empty($_POST["email"]) AND !empty($_POST["password"])) {
    $controller = new Controller();
    $email = $controller->login($_POST["email"], $_POST["password"]);
    if (!empty($email)) {
        include 'views/profile.php';
    } else {
        $error = "The username or password you entered is incorrect.";
        include 'views/login.php';
    }
} else if ((empty($_POST["email"]) XOR empty($_POST["password"]))) {
    $error = "Please fill both fields.";
    include 'views/login.php';
} else {
    include 'views/login.php';
}