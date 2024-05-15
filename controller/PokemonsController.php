<?php
class PokemonsController
{

    private $model;

    private $presenter;

    public function __construct($model, $presenter)
    {
        $this->model = $model;
        $this->presenter = $presenter;
    }


    public function get()
    {
        $pokemons = $this->model->getPokemons();
        $this->presenter->render("view/pokemonsView.mustache", ["pokemons" => $pokemons]);
    }


    public function add()
    {
        $tipos = $this->model->getTipos();
        $this->presenter->render("view/addPokemonsView.mustache", ["tipos" => $tipos]);
    }


    public function view()
    {
        $id = $_GET["id"];
        $pokemon = $this->model->getPokemonById($id);
        $this->presenter->render("view/verPokemonView.mustache", ["pokemon" => $pokemon]);
    }


    public function delete()
    {
        $id = $_GET["id"];
        $this->model->deletePokemon($id);
        header("location:/pokemons");
        exit();
    }


    public function search()
    {
        if(isset($_GET["buscar"])) {
            $nombre = $_GET["buscar"];
            if(!empty($nombre)) {
                $pokemons = $this->model->getPokemonByName($nombre);
                if($pokemons) {
                    $this->presenter->render("view/pokemonsView.mustache", ["pokemons" => $pokemons]);
                } else {
                    $pokemons = $this->model->getPokemons();
                    $this->presenter->render("view/pokemonsView.mustache", ["pokemons" => $pokemons, "no_encontrado" => true]);
                }
            } else {
                $this->get();
            }
        }
    }


    public function update()
    {
        $id = $_GET['id'];
        $pokemon = $this->model->getPokemonById($id);
        $tipos = $this->model->getTipos();
        $this->presenter->render("view/modifyPokemonsView.mustache", ["pokemon"=>$pokemon,"tipos" => $tipos]);
    }

    public function procesarModificacion()
    {
        $id = $_POST["id"];
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $tipo1 = $_POST['tipo1'];
        $tipo2 = $_POST['tipo2'];
        $descripcion = $_POST['descripcion'];

        $this->model->updatePokemon($id, $nombre, $numero, $tipo1, $tipo2, $descripcion);
        header("location:/pokemons");
        exit();
    }


    public function procesarAlta()
    {
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $tipo1 = $_POST['tipo1'];
        $tipo2 = $_POST['tipo2'];
        $descripcion = $_POST['descripcion'];

        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $nombreImagen = $_FILES['archivo']['name'];
            $rutaTemporal = $_FILES['archivo']['tmp_name'];
            $carpetaDestino = 'public/image/pokemons';
            move_uploaded_file($rutaTemporal, $carpetaDestino . '/' . $nombreImagen);

            $this->model->addPokemon($nombre, $numero, $nombreImagen, $tipo1, $tipo2, $descripcion);
            header("location:/pokemons");
            exit();
        }
    }
}
?>

