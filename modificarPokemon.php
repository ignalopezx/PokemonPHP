<?php

session_start();

if (isset($_POST['modificar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $tipo1 = $_POST['tipo1'];
        $tipo2 = $_POST['tipo2'];
        $descripcion = $_POST['descripcion'];

        $sql = "UPDATE pokemon
                SET nombre='$nombre', numero_identificador='$numero', tipo1='$tipo1', tipo2='$tipo2', descripcion='$descripcion' 
                WHERE id=$id";

        $database = "pokemons";
        $pass = "";
        $user = "root";
        $conexion = new mysqli("localhost", $user, $pass, $database);

        if ($conexion->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            include("header.php");
            echo "Error al modificar el pokemon: " . $conexion->error;
        }
    }

