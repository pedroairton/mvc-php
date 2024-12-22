<?php

namespace core;

class Router{

    private $controller = "Site";
    private $method= "home"; // default method
    private $param = [];
    public function __construct() {
        echo '<pre>';
        $router = $this->url();
        if(file_exists(__DIR__ . '/../app/controllers/' . ucfirst($router[1]) . '.php')){
            $this->controller = ucfirst($router[1]);
            unset($router[1]);
        }
        // var_dump($router);
        $class = "\\app\\controllers\\" . $this->controller;
        $object = new $class;

        if(isset($router[2]) and method_exists($class, $router[2])){
            $this->method = $router[2];
            unset($router[2]);
        }

        $this->param = $router ? array_values($router) : [];

        call_user_func([$object, $this->method], $this->param);
    }
    private function url(){
        $parse_url = explode("/", $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        return $parse_url;
    }
}