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
<div class="modificacion">

    <form action="abmPokemon.php" method="post">
        <input type="hidden" name="id" value="ID">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required><br>

        <label for="tipo1">Tipo 1:</label>
        <select id="tipo1" name="tipo1" required>
            <option value="">Selecciona un tipo</option>
            <?php
            $ruta_imagenes = 'tipoPokemon';
            $archivos = scandir($ruta_imagenes);
            foreach ($archivos as $archivo) {
                if (strpos($archivo, 'tipo_') === 0 && strpos($archivo, '_icono.png') === false && strpos($archivo, '.png') !== false) {
                    $tipo = str_replace(array('tipo_', '.png'), '', $archivo);
                    echo "<option value='$tipo'>$tipo</option>";
                }
            }
            ?>
        </select><br>

        <label for="tipo2">Tipo 2:</label>
        <select id="tipo2" name="tipo2">
            <option value="">Selecciona un tipo</option>
            <?php
            foreach ($archivos as $archivo) {
                if (strpos($archivo, 'tipo_') === 0 && strpos($archivo, '_icono.png') === false && strpos($archivo, '.png') !== false) {
                    $tipo = str_replace(array('tipo_', '.png'), '', $archivo);
                    echo "<option value='$tipo'>$tipo</option>";
                }
            }
            ?>
        </select><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br>

        <input type="submit" name="modificar" value="Modificar">
    </form>
</div>
</body>
</html>