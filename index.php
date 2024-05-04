<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        include("header.php");
        include("search-bar.php");
        echo "<td colspan='5' style='padding-bottom: 10px;'></td>";
    ?>
    <?php
        include "mostrar_tablas.php";
        mostrar_pokemons();
        
        if (isset($_GET['buscar'])) {
            $pokemon_id = $_GET['buscar'];
            header("Location: vistaPokemon.php?id=$pokemon_id");
            exit();
        }
    ?>
</body>
</html>


