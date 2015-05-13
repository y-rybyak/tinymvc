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
        // it call the getlogin() function of model class and store the return value of this function into the result variable.
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