<?php
namespace mvc;

Class Router{

    private $route;
    private $view;
    private $controller;
    private $model;

    public function __construct() {
        require_once(LOCAL_ROOT . "php/Routes.php");
        if(isset($_GET['route'])){
            $this->route = explode("/", $_GET['route']);
        }
        $route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;
        $controller = "\\controllers\\" . $routes[$route]['controller'];
        $view = "\\views\\" . $routes[$route]['view'];
        $model = "\\models\\" . $routes[$route]['model'];
    }

    private function getRoute(){
        return count($this->route) > 0 ? $this->route[0] : DEDAULT_ROUTE;
    }

    public function getView(){
        return $this->view;
    }
}
?>