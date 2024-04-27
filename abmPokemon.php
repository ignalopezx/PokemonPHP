<?php
// Agregar Pokemon
function agregar(){
    if (isset($_POST['agregar'])) {
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $tipo1 = $_POST['tipo1'];
        $tipo2 = $_POST['tipo2'];
        $descripcion = $_POST['descripcion'];

        // Manejo de la imagen
//        $nombreImagen = $_FILES['imagen']['name'];
//        $rutaTemporal = $_FILES['imagen']['tmp_name'];
//        $carpetaDestino = 'ruta/a/tu/carpeta/imagenes/';

        $sql= "INSERT INTO pokemons (nombre, numero, tipo1, tipo2, descripcion) VALUES ('$nombre', '$numero', '$tipo1', $tipo2, $descripcion)";

        $database = "pokemons";
        $pass = "";
        $user = "root";
        $conexion = new mysqli("localhost", $user, $pass, $database);

        if ($conexion->query($sql) === TRUE) {
            echo "Pokemon agregado correctamente.";
        } else {
            echo "Error al agregar Pokemon: " . $conexion->error;
        }
    }
}

//editar
function modificar()
{
    if (isset($_POST['modificar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $tipo1 = $_POST['tipo1'];
        $tipo2 = $_POST['tipo2'];
        $descripcion = $_POST['descripcion'];

        $sql = "UPDATE pokemons 
                SET nombre='$nombre', numero='$numero', tipo1='$tipo1', tipo2='$tipo2', descripcion='$descripcion' 
                WHERE id=$id";

        $database = "pokemons";
        $pass = "";
        $user = "root";
        $conexion = new mysqli("localhost", $user, $pass, $database);

        if ($conexion->query($sql) === TRUE) {
            echo "Usuario modificado correctamente.";
        } else {
            echo "Error al modificar usuario: " . $conexion->error;
        }
    }
}

// dar de baja
if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM pokemons WHERE id=$id";

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