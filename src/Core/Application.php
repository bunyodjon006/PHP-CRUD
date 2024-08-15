<?php

namespace App\Core;

class Application
{
 public string $controller;
 public string $action;
 public string $params;

    public function __construct()
    {
         $this->params=$this->parseURL();

    }
    private function parseURL():array
    {
        if(isset($_GET['url'])){
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];

    }

}