<?php

class User
{
    private $data = [];

    public function __construct($email, $password)
    {
        $dbh = new PDO('mysql:host=localhost; dbname=registration; charset=UTF8', 'root', '6710omne8864');
        $sth = $dbh->prepare("SELECT varEmail, intId, varFirstName, varSurname, isTeacher, varPasswordHash FROM user WHERE varEmail = :email AND varPasswordHash = :passwordHash");
        $sth->execute([':email' => $email, ':passwordHash' => md5($password)]);
        $this->data = $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function getData()
    {
        return $this->data;
    }
}