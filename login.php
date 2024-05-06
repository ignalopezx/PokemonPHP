<?php
session_start();
if ( isset($_POST["usuario"]) &&  isset($_POST["contraseña"]) ){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $esValido = consultarBD($usuario, $contraseña);

    if($esValido){
        session_start();
        $_SESSION["usuario"] = $usuario;

        header("location:index.php");
        exit();
    } else {
        header("location:index.php?error=1");
        exit();
    }

} else {
    header("location:index.php?error=2");
    exit();
}

function consultarBD($usuario, $contraseña)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pokemons";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    // Realizar consulta
    $sql = "SELECT * FROM users WHERE usuario = '" . $usuario . "' && contraseña = '" . $contraseña . "'";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) == 1;
}
