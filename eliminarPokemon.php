<?php
if (isset($_POST['eliminar'])) {
    $id = 53;

    $sql = "DELETE FROM pokemon WHERE id=$id";

    $database = "pokemons";
    $pass = "";
    $user = "root";
    $conexion = new mysqli("localhost", $user, $pass, $database);

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar usuario: " . $conexion->error;
    }
}