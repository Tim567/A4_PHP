<?php
namespace views;

class DataView extends \mvc\View{
    public function getHTML(){
        $output="";
    
        if ($this->controller->getPostData("naam") == null && $this->controller->getPostData("email") == null){
            echo "<script>alert('HACKED')</script>";
        }
        else {
            $output .= "<h1>".$this->controller->getPostData("naam")."</h1>";
            $output .= "<h1>".$this->controller->getPostData("email")."</h1>";
        }
        return $output;
    }
}
?>
