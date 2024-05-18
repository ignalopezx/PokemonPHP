<?php

class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getUsuario($usuario, $contraseña)
    {
        $result = $this->database->query("SELECT * FROM users WHERE usuario = '$usuario' AND contraseña = '$contraseña'");

        return $result;
    }


    public function getPokemons()
    {
        return $this->database->query("SELECT * FROM pokemon");
    }

}