<?php

session_start();

if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $tipo1 = $_POST['tipo1'];
    $tipo2 = $_POST['tipo2'];
    $descripcion = $_POST['descripcion'];

if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK){
    $nombreImagen = $_FILES['archivo']['name'];
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    $carpetaDestino = 'imagenes';

    if(move_uploaded_file($rutaTemporal, $carpetaDestino . '/' . $nombreImagen)) {

        $sql= "INSERT INTO pokemon (nombre, numero_identificador, imagen, tipo1, tipo2, descripcion) 
                VALUES ('$nombre', '$numero', '$nombreImagen', '$tipo1', '$tipo2', '$descripcion')";

        $database = "pokemons";
        $pass = "";
        $user = "root";
        $conexion = new mysqli("localhost", $user, $pass, $database);

            if ($conexion->query($sql) === TRUE) {
                echo "Pokemon agregado correctamente.";
                header("location: index.php");
                exit();
            } else {
                echo "Error al agregar Pokemon: " . $conexion->error;
            }
        } else {
        echo "Error al subir la imagen.";
            }
    } else {
        echo "Error: No se ha subido una imagen.";
        }
}


