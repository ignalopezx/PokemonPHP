<?php

class PokemonsModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getPokemons()
    {
        return $this->database->query("SELECT * FROM pokemon");
    }



    public function getPokemonById($id)
    {
        return $this->database->query("SELECT * FROM pokemon WHERE id = '$id'");
    }


    public function getPokemonByName($nombre)
    {
        return $this->database->query("SELECT * FROM pokemon WHERE nombre LIKE '%$nombre%'");
    }

    public function getPokemonBynumero($numero)
    {
        return $this->database->query("SELECT * FROM pokemon WHERE numero = $numero");
    }


    public function addPokemon($nombre, $numero, $nombreImagen, $tipo1, $tipo2, $descripcion)
    {
        $this->database->execute("INSERT INTO pokemon (nombre, numero_identificador, imagen, tipo1, tipo2, descripcion) 
                VALUES ('$nombre', '$numero', 'pokemons/$nombreImagen', '$tipo1', '$tipo2', '$descripcion')");
    }

    public function updatePokemon($id, $nombre, $numero, $tipo1, $tipo2, $descripcion)
    {
        $this->database->execute("UPDATE pokemon SET nombre='$nombre', numero_identificador='$numero', tipo1='$tipo1', tipo2='$tipo2', descripcion='$descripcion' WHERE id=$id");
    }


    public function deletePokemon($id)
    {
        $this->database->execute("DELETE FROM pokemon WHERE id=$id");
    }

    public function getTipos()
    {
        $result = $this->database->query("SELECT DISTINCT tipo1 FROM pokemon");
        return $result;
    }
}
?>

