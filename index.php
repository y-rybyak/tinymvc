<?php
session_start();
if (!empty($_SESSION["data"])) {
    header('Location: /application/view/view_profile.php', true, 303);
    exit;
}
else {
    header('Location: /application/view/view_login.php', true, 303);
    exit;
}