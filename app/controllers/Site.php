<?php

namespace app\controllers;

class Site{
    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }
    public function about(){
        require_once __DIR__ . '/../views/about.php';
    }
    public function contact(){
        require_once __DIR__ . '/../views/contact.php';
    }
    public function cadastro(){
        require_once __DIR__ . '/../views/cadastro.php';
    }
}