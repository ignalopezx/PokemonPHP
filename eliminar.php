<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la búsqueda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
?>
<div class="agregarPokemon">

    <form action="eliminarPokemon.php" method="post" enctype="multipart/form-data">

        <input type="submit" name="eliminar" value="Eliminar">
    </form>
</div>
</body>
</html>