<?php
namespace mvc\controllers;
class RedirectController extends \mvc\Controller{
    function __construct(){
        header("Location: page");

    }
}
?>