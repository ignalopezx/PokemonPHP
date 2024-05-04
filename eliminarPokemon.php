<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pokemon WHERE id=$id";

    $database = "pokemons";
    $pass = "";
    $user = "root";
    $conexion = new mysqli("localhost", $user, $pass, $database);

    if ($conexion->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error al eliminar al pokemon: " . $conexion->error;
    }
}