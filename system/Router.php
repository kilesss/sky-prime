<?php

class Router
{


    // first word is controller name second is function name if its dont have second is view function
    public function getRoute()
    {
        if (parseEnv('isLocalhost') == 1){
            $controllerKey = 2;
            $functionKey = 3;
        }else{
            $controllerKey = 1;
            $functionKey = 2;
        }

        $explodedRoute = explode('/', $_SERVER['REQUEST_URI']);
        $controller = ucfirst($explodedRoute[$controllerKey]).'Controller';

        if (!file_exists('Controllers'.DIRECTORY_SEPARATOR.$controller.'.php')){
            echo "Route not found";die;
        }
        require_once 'Controllers'.DIRECTORY_SEPARATOR.$controller.'.php';
        $controller = 'Controllers\\'.$controller;
        $controllerInstance = new $controller();
        if (isset($explodedRoute[$functionKey])){
            $functionName = $explodedRoute[$functionKey];
            $controllerInstance->$functionName();
        }else{
            $controllerInstance->view();

        }
    }
}