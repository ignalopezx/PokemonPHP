<?php
function mostrar_pokemons($busqueda = "") {
    $conexion = new mysqli("localhost", "root", "", "pokemons");
    if ($conexion->connect_error) {
        die("Error de conexión con la base de dátos: " . $conexion->connect_error);
    }
    $consulta = "SELECT * FROM pokemon";
    if (!empty($busqueda)) {
        $consulta .= " WHERE nombre LIKE '%$busqueda%'";
    }
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Imagen</th>";
        echo "<th>Tipo 1</th>";
        echo "<th>Tipo 2</th>";
        echo "<th>Número Identificador</th>";
        echo "<th>Nombre</th>";
        echo "</tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='{$fila['imagen']}' alt='{$fila['nombre']}' width='100px' height='100px'></td>";
            echo "<td><img src='tipoPokemon/tipo_{$fila['tipo1']}.png' alt='{$fila['tipo1']}'</td>";
            echo "<td><img src='tipoPokemon/tipo_{$fila['tipo2']}.png' alt=''</td>"; // Esta columna aparece en blanco si el pokemon no tieene tipo 2
            echo "<td>{$fila['numero_identificador']}</td>";
            echo "<td>{$fila['nombre']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='font-size: 35px; font-weight: bold; text-align: center;'>Pokémon no encontrado</p>";
        $sql_todos = "SELECT * FROM pokemon";
        $resultado_todos = mysqli_query($conexion, $sql_todos);
        if (!$resultado_todos) {
            die("Error al ejecutar la consulta: " . mysqli_error($conexion));
        }
        echo "<table>";
        echo "<tr><th>Imagen</th><th>Tipo 1</th><th>Tipo 2</th><th>Número Identificador</th><th>Nombre</th></tr>";
        while ($fila = mysqli_fetch_assoc($resultado_todos)) {
            echo "<tr>";
            echo "<td><img src='{$fila['imagen']}' alt='{$fila['nombre']}' width='100px' height='100px'></td>";
            echo "<td><img src='tipoPokemon/tipo_{$fila['tipo1']}.png' alt='{$fila['tipo1']}'</td>";
            echo "<td><img src='tipoPokemon/tipo_{$fila['tipo2']}.png' alt=''</td>";
            echo "<td>{$fila['numero_identificador']}</td>";
            echo "<td>{$fila['nombre']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    $conexion->close();
}


?>


