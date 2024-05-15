<?php

include_once ("Configuration.php");

session_start();

$router = Configuration::getRouter();

if (!isset($_SESSION["usuario"]) OR $_SESSION["usuario"] != "admin") {
    $url = $_SERVER['REQUEST_URI'];
    if ($url == "/pokemons/add") {
        header("Location: /pokemons");
        exit();
    }
}


$controller = isset($_GET["controller"]) ? $_GET["controller"] : "" ;
$action = isset($_GET["action"]) ? $_GET["action"] : "" ;

$router->route($controller, $action);

//index.php?controller=tours&action=get
//tours/get