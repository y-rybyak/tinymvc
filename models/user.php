<?php

class User extends BaseModel
{
    public static $tableName = 'users';
    public static $primaryKey = 'id';

    public $id;
    public $name;

    public static function login($login, $password)
    {
        self::search([
            'login'=>$login,
            'password'=>$password
        ]);

    }
}