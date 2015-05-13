<?php
define('MAIN_ROOT', __DIR__);

include_once(MAIN_ROOT . "/controller/Controller.php");
$controller = new Controller();
$controller->invoke();