<?php
function mostrar_pokemons($busqueda = "")
{
    $database = "pokemons";
    $pass = "";
    $user = "root";
    $conexion = new mysqli("localhost", $user, $pass, $database);

    if ($conexion->connect_error) {
        die("Error de conexión con la base de dátos: " . $conexion->connect_error);
    }
    $consulta = "SELECT * FROM pokemon";

    if ($busqueda != "") {
        $consulta .= " WHERE nombre LIKE '%$busqueda%'";
    }
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        crearTabla($resultado);
    } else {
        echo "<p style='font-size: 35px; font-weight: bold; text-align: center;'>Pokémon no encontrado</p>";
        $sql_todos = "SELECT * FROM pokemon";
        $resultado_todos = $conexion->query($sql_todos);
        crearTabla($resultado_todos);
    }
    $conexion->close();
}

function crearTabla($resultado_busqueda)
{
    echo "<table style='width:100%;'>";
    echo "<tr style='border-bottom: 20px solid white; border-top: 2px solid white;'>";
    echo "<th class='espacio'>Imagen</th>";
    echo "<th class='espacio'>Tipo 1</th>";
    echo "<th class='espacio'>Tipo 2</th>";
    echo "<th class='espacio numero-columna'>Número</th>";
    echo "<th class='espacio'>Nombre</th>";
    echo "</tr>";
    while ($fila = mysqli_fetch_assoc($resultado_busqueda)) {
        echo "<tr>";
        echo "<td class='espacio-top'><img src='{$fila['imagen']}' alt='{$fila['nombre']}' width='100px' height='100px'></td>";
        echo "<td class='espacio-top'><img src='tipoPokemon/tipo_{$fila['tipo1']}.png' alt='{$fila['tipo1']}'</td>";
        if ($fila["tipo2"] != null) {
            echo "<td class='espacio-top'><img src='tipoPokemon/tipo_{$fila['tipo2']}.png' alt=''</td>";
        } else {
            echo "<td></td>";
        }
        echo "<td class='espacio-top numero-columna'>{$fila['numero_identificador']}</td>";
        echo "<td class='espacio-top'>{$fila['nombre']}</td>";
        echo "</tr>";
        
        // Agregar fila adicional para el botón "Ver"
        echo "<tr class='ver-row'>";
        echo "<td colspan='5' style='padding-bottom: 10px;'><a class='ver-button' href='vistaPokemon.php?id={$fila['id']}'>Ver</a></td>";
        echo "</tr>";
        // Agregar fila línea divisoria
        echo "<tr style='background-color: #fff; height:20px;'>";
        echo "<td colspan='5' style='background-color=background-color: #f2f;'></td>";
        echo "</tr>";
    }
    echo "</table>";
}
