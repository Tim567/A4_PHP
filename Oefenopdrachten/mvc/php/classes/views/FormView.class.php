<?php
namespace views;

class FormView extends \mvc\View{
    public function getHTML(){
        $output="";
        $output.= '
        <form action="data" method="post">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="naam" id="naam" placeholder="Naam">
        <input type="submit" id="submit">
        </form>';
        return $output;
    }
}
?>
