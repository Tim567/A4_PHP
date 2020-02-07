<?php
namespace mvc;

class Router{

    private $route;
    private $view;
    private $controller;
    private $model;

    public function __construct(){
        require_once(LOCAL_ROOT. "php/Routes.php");
        if (isset($_GET['route'])){
            $this->route = explode("/" , $_GET['route']);
        }
        $this->route = isset($routes[$this->getRoute()])? $this->getRoute() : DEFAULT_ROUTE;
        $this->controller = "\\mvc\\controllers\\". $routes[$this->route]['controller'];
        $this->view = "\\views\\". $routes[$this->route]['view'];
        // $this->model = "\\models\\". $routes[$this->route]['model'];
    }

    private function getRoute(){
        return count($this->route) > 0 ? $this->route[0] : DEFAULT_ROUTE;
    }
    public function getView(){
        return $this->view;
    }
    public function getController(){
        return $this->controller;
    }
}
?>