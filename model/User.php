<?php

class User
{
    private $data = [];

    public function getlogin()
    {
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $dbh = new PDO('mysql:host=localhost; dbname=registration; charset=UTF8', 'root', '6710omne8864');
            $sth = $dbh->prepare("SELECT varEmail, intId, varFirstName, varSurname, isTeacher, varPasswordHash FROM user WHERE varEmail = :email AND varPasswordHash = :passwordHash");
            $sth->execute([':email' => $email, ':passwordHash' => md5($password)]);
            $this->data = $sth->fetch(PDO::FETCH_ASSOC);
            return $this->data["varEmail"];
        }
    }
}