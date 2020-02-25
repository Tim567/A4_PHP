<?php
namespace mvc\models;
class PageModel extends \mvc\Model{
    public function getData(){
        $users = ['Tim', 'Jordi', 'Lars', 'Ruben'];
        return $users;
    }
}
?>