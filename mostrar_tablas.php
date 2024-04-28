<?php

function mostrar_pokemons($busqueda = "") {
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

function crearTabla($resultado_busqueda) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Imagen</th>";
        echo "<th>Tipo 1</th>";
        echo "<th>Tipo 2</th>";
        echo "<th>Número Identificador</th>";
        echo "<th>Nombre</th>";
        echo "<th></th>";
        echo "</tr>";        
        while ($fila = mysqli_fetch_assoc($resultado_busqueda)) {
            echo "<tr>";
            echo "<td><img src='{$fila['imagen']}' alt='{$fila['nombre']}' width='100px' height='100px'></td>";
            echo "<td><img src='tipoPokemon/tipo_{$fila['tipo1']}.png' alt='{$fila['tipo1']}'</td>";
            if ($fila["tipo2"] != null) {
                echo "<td><img src='tipoPokemon/tipo_{$fila['tipo2']}.png' alt=''</td>";
            } else {
                echo "<td></td>";
            }
            echo "<td>{$fila['numero_identificador']}</td>";
            echo "<td>{$fila['nombre']}</td>";
            echo "<td><a class='ver-button' href='vistaPokemon.php?id={$fila['id']}'>Ver</a></td>"; // Botón "Ver" que redirige a vistaPokemon.php con el ID del Pokémon
            echo "</tr>";
        }
        echo "</table>";
}

?>


