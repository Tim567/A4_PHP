<?php
namespace views;

class TestView extends \mvc\View{
    public function getHTML(){
        // return 'dit is testView';
        $klik = $this->controller->getGetData("klik");
        $output = "";
        $output .= "<h1>".$klik++ ."</h1>";
        $output .= "<a href=\"test?klik=$klik\">klik</a>";
        $output .= "<br>";
        return $output;
    }
}

?>