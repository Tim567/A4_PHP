<?php
    namespace mvc;

    class App{
        private $view;
        
        public function __construct(){
            $this->view = new views\TestView(null,null);
        }


        public function __toString(){
            return $this->view->getHTML();
        }
    }
?>