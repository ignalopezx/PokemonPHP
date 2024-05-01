<?php
session_start();
if (isset($_GET['id'])) {
    //$id = 51;
    $id = $_GET['id'];

    $sql = "DELETE FROM pokemon WHERE id=$id";

    $database = "pokemons";
    $pass = "";
    $user = "root";
    $conexion = new mysqli("localhost", $user, $pass, $database);

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente.";
        header('Location: index.php');
    } else {
        echo "Error al eliminar usuario: " . $conexion->error;
    }
}