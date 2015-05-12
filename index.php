<?php
require_once('connection.php');
require_once('models/BaseModel.php');
require_once('models/post.php');
require_once('models/authors.php');


if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}

require_once('views/layout.php');