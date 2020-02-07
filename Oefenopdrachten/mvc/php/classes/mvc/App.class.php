<?php
    namespace mvc;

    class App{
        private $router;
        
        public function __construct(){
            $this->router = new \mvc\Router();
        }


        public function __toString(){
            try {
                $controllerString = $this->router->getController(); 
                $controller = new $controllerString(null);
                // $view->getHTML();
                $viewString = $this->router->getView(); 
                $view = new $viewString($controller, null);
                return $view->getHTML();
            } catch (Exception $e) {
                return $e->getMessage;
            }
        }
    }
?>