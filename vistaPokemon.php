<?php
$database = "pokemons";
$pass = ""; // Contraseña vacía para el usuario root
$user = "root";
$conexion = new mysqli("localhost", $user, $pass, $database);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener el Pokémon buscado por su ID
if (isset($_GET['id'])) {
    $pokemon_id = $_GET['id'];
    $sql = "SELECT * FROM pokemon WHERE id = $pokemon_id";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar datos del Pokémon
        $pokemon = $result->fetch_assoc();
    } else {
        echo "No se encontró el Pokémon.";
    }
} else {
    echo "ID de Pokémon no proporcionado.";
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <section class="section-pokemon">
        <div class="pokemon-container">
            <h1 style="text-align: center; margin:20px;">Detalles del Pokémon</h1>
            <?php
            // Conexión a la base de datos
            $database = "pokemons";
            $pass = "";
            $user = "root";
            $conexion = new mysqli("localhost", $user, $pass, $database);

            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }

            // Obtener el Pokémon buscado por su ID
            if (isset($_GET['id'])) {
                $pokemon_id = $_GET['id'];
                $sql = "SELECT * FROM pokemon WHERE id = $pokemon_id";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar datos del Pokémon
                    $pokemon = $result->fetch_assoc();
            ?>
                    <div style="display:flex; align-items:center; justify-content:center; width:100%;">
                        <img class="pokemon-img" src="<?php echo $pokemon['imagen']; ?>" alt="Imagen de <?php echo $pokemon['nombre']; ?>">
                    </div>
                    <div class="pokemon-info">
                        <p><strong>Número de Identificador:</strong> <?php echo $pokemon['numero_identificador']; ?></p>
                        <p><strong>Nombre:</strong> <?php echo $pokemon['nombre']; ?></p>
                        <p><strong>Tipo 1:</strong> <?php echo $pokemon['tipo1']; ?></p>
                        <p><strong>Tipo 2:</strong> <?php echo $pokemon['tipo2']; ?></p>
                        <p><strong>Descripción:</strong> <?php echo $pokemon['descripcion']; ?></p>
                        <!-- Aquí podrías mostrar más detalles del Pokémon según tu base de datos -->
                    </div>
                    <div style="text-align: center; margin-bottom: 2rem; margin-top:2.5rem;">
                        <a href="index.php" class="btn-back" style="text-decoration:none;">Volver</a>
                    </div>
            <?php
                } else {
                    echo "<p>No se encontró el Pokémon.</p>";
                }
            } else {
                echo "<p>ID de Pokémon no proporcionado.</p>";
            }

            $conexion->close();
            ?>
        </div>
    </section>
</body>

</html>