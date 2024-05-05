<?php

if( isset($_GET["error"]) ){
    switch ($_GET["error"]){
        case 1:
            echo "<div style='background-color: aquamarine;color:red' >Usuario y contraseña invalidos </div> ";
            break;
        case 2:
            echo "<div style='background-color: aquamarine;color:red' >Debe completar los datos </div> ";
            break;
        case 3:
            echo "<div style='background-color: aquamarine;color:red' >LTA </div> ";
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
        <form action="login.php" method="post">
            <div class="container-inputs">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <button class="btn-login" type="submit">Login</button>
        </form>
    </div>
</header>