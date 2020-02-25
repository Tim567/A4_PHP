<?php
namespace views;
class PageView extends \mvc\View{
    public function getHTML(){
        $data = $this->model->getData();
        $string = '';
        for ($i=0; $i < count($data); $i++) { 
            $string .= $data[$i].'</br>';
        }
        return $string;
    }
}
?>