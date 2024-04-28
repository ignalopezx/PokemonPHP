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
    ?>
    <div class="resultados">
        <?php
        include "mostrar_tablas.php";
        mostrar_pokemons();
        
        if (isset($_GET['buscar'])) {
            $pokemon_id = $_GET['buscar'];
            // Redirigir a vistaPokemon.php con el ID del Pokémon buscado
            header("Location: vistaPokemon.php?id=$pokemon_id");
            exit(); // Asegura que el código se detenga después de la redirección
        }
    ?>
    </div>
</body>
</html>


