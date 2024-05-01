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
        include("search-bar.php");
    ?>
    <div class="resultados">
        <?php
        include "mostrar_tablas.php";
        if (isset($_GET['buscar'])) {
            
            mostrar_pokemons($_GET['buscar']);
        } else {
            mostrar_pokemons();
        }
        ?>
    </div>
</body>
</html>
