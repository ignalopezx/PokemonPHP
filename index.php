<?php

include_once("Configuration.php");

session_start();

$router = Configuration::getRouter();

$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
$action = isset($_GET["action"]) ? $_GET["action"] : "";

$restrictedRoutes = [
    "pokemons" => ["update", "delete", "add"],
    "pokemon" => ["add", "update", "delete"],
];

function isRestrictedRoute($controller, $action, $restrictedRoutes)
{
    return isset($restrictedRoutes[$controller]) && in_array($action, $restrictedRoutes[$controller]);
}

if (isRestrictedRoute($controller, $action, $restrictedRoutes) && !isset($_SESSION["usuario"])) {
    header("Location: /pokemons/error");
    exit();
}

$router->route($controller, $action);