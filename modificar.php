<?php

$database = "pokemons";
$pass = "";
$user = "root";
$conexion = new mysqli("localhost", $user, $pass, $database);

$id = $_GET['id'];

$sql = "SELECT * 
        FROM pokemon 
        WHERE id = $id";

$resultado = $conexion->query($sql);
$pokemon = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la búsqueda</title>
    <link rel="stylesheet" href="abmestilos.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
?>
<div class="modificacion">

    <form action="modificarPokemon.php" method="post">
    <input type="hidden" name="id" value="<?php echo $pokemon['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $pokemon['nombre'] ?>" required><br>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $pokemon['numero_identificador'] ?>" required><br>

        <label for="tipo1">Tipo 1:</label>
        <select id="tipo1" name="tipo1"  required>
            <option value="<?php echo $pokemon['tipo1'] ?>"><?php echo $pokemon['tipo1'] ?></option>
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
            <option ><?php echo (!$pokemon['tipo2']) ? "seleccionar un tipo" : $pokemon['tipo2'] ?></option>
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
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required><?php echo $pokemon['descripcion'] ?></textarea><br>

        <input class="button" type="submit" name="modificar" value="Modificar">
    </form>
</div>
</body>
</html>