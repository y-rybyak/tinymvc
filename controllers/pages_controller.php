<?php

class PagesController
{
    public function home()
    {
        require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }

    public function login(){
        $posts = Post::all();
        var_dump($posts);
        //var_dump($_REQUEST);
    }
}