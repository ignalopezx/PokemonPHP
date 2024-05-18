<?php

class LoginController
{
    private $model;
    private $presenter;

    public function __construct($model, $presenter)
    {
        $this->model = $model;
        $this->presenter = $presenter;
    }


    public function login()
    {
            $pokemons = $this->model->getPokemons();
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            $usuario = $this->model->getUsuario($usuario, $contraseña);
            if ($usuario) {
                $_SESSION["usuario"] = $usuario;
                $this->presenter->render("view/pokemonsView.mustache", ["usuario" => $usuario, "pokemons" => $pokemons]);
            } else {
                header("Location: /pokemons");
                exit();
            }
    }



    public function logout()
    {
        $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        session_destroy();

        header("Location: /pokemons/get");
        exit;
    }

}