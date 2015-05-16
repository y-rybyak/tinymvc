<?php
include_once(MAIN_ROOT . "/model/User.php");

class Controller
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function invoke()
    {
        if (!empty($_REQUEST['email']) AND !empty($_REQUEST['password'])) {
            $result = $this->user->getlogin($_REQUEST['email'], $_REQUEST['password']);
            if ($result == $_REQUEST['email']) {
                include MAIN_ROOT . '/view/profile.php';
            } else {
                include MAIN_ROOT . '/view/login.php';
            }
        } else {
            include MAIN_ROOT . '/view/login.php';
        }
    }
}