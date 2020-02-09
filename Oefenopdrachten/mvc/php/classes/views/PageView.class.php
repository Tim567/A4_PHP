<?php
namespace views;
class PageView extends \mvc\View{
    public function getHTML(){
        return $this->model->getData();
    }
}
?>