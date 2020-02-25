<?php
define("DEFAULT_ROUTE", "home");
$routes = array(
    "home" => array(
        "view" => "HomeView",
        "controller" => "HomeController",
        "model" => "HomeModel"
    ),
    "form" => array(
        "view" => "FormView",
        "controller" => "FormController",
    ),
    "test" => array(
        "view" => "TestView",
        "controller" => "TestController",
        "model" => "TestModel",
    ),
    "data" => array(
        "view" => "DataView",
        "controller" => "DataController"
    ),
    "page" => array(
        "view" => "PageView",
        "controller" => "PageController",
        "model" => "PageModel",
    ),
    "redirect"=> array(
        "controller" => "RedirectController"
    ),
)
?>