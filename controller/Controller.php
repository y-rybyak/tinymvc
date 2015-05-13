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
        $result = $this->user->getlogin();
        if (!empty($_REQUEST['email'])) {
            if ($result == $_REQUEST['email']) {
                include MAIN_ROOT . '/view/profile.php';
            }
            else {
                include MAIN_ROOT . '/view/login.php';
            }
        }
        else {
            include MAIN_ROOT . '/view/login.php';
        }
    }
}