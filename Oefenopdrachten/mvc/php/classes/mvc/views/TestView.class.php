<?php
    namespace mvc\views;

    class TestView extends \mvc\View {
        public function getHTML(){
            $klik = $this->controller->getData("klik");
            $output = "";
            $output.= "<h1>".$klik++."</h1>";
            $output.= "<a href=\"test?klik=$klik\">klik</a>";
            $output.= "<br>";
            return $output;
        }
    }
?>