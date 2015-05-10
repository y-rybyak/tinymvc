<?php
print_r($_GET);
define('PROJECT_ROOT', __DIR__);
include PROJECT_ROOT . '/models/User.php';
include PROJECT_ROOT . '/controllers/Login.php';
$controller = new Controller();

if (!empty($_POST["email"]) AND !empty($_POST["password"])) {
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
}
/*
else if (!empty($_GET["logout"])) {
    print "lol";
    $controller->logout();
}
*/
else {
    include 'views/login.php';
}