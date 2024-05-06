<?php

session_start();

if (isset($_GET["error"])) {
    switch ($_GET["error"]) {
        case 1:
            echo "<div style='background-color: aquamarine;color:red' > Usuario o contraseña inválidos </div> ";
            break;
        case 2:
            echo "<div style='background-color: aquamarine;color:red' > Debe completar los datos </div> ";
            break;
    }
}

?>
<header>
    <div class="logo">
        <a href="index.php"><img src="imagenes/pokeball-logo.png" alt="pokeball-logo" width="50px" height="50px"></a>
    </div>
    <h1>Pokédex</h1>
    <div class="login">

    <?php
    if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] == "admin") {
        echo "<form action='logout.php' method='post'>";
        echo "<input type='submit' value='Cerrar Sesión' class='modificar-button' style='border-style:none;'>";
        echo "</form>";
    } else {
        echo "<form action='login.php' method='post'>
        <div class='container-inputs'>
        <input type='text' name='usuario' placeholder='Usuario'>
        <input type='password' name='contraseña' placeholder='Contraseña'>
        </div>
        <button class='btn-login' type='submit'>Login</button>
    </form>";
    };
    ?>

    </div>
</header>

