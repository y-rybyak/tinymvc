<?php
include_once(MAIN_ROOT . "/model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        // it call the getlogin() function of model class and store the return value of this function into the result variable.
        $result = $this->model->getlogin();
        if ($result == 'login') {
            include MAIN_ROOT . '/view/profile.php';
        } else {
            include MAIN_ROOT . '/view/login.php';
        }
    }
}