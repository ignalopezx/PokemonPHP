CREATE DATABASE IF NOT EXISTS pokemons;

USE pokemons;

CREATE TABLE IF NOT EXISTS pokemon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador INT UNIQUE NOT NULL ,
    imagen VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    tipo1 VARCHAR(20) NOT NULL,
    tipo2 VARCHAR(20) DEFAULT NULL,
    descripcion VARCHAR(255) NOT NULL
);

INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo1, tipo2, descripcion) VALUES
(1, 'pokemons/Charmander.png', 'Charmander', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'pokemons/Charmeleon.png', 'Charmeleon', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'pokemons/Charizard.png', 'Charizard', 'Fuego', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'pokemons/Bulbasaur.png', 'Bulbasaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(5, 'pokemons/Ivysaur.png', 'Ivysaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'pokemons/Venusaur.png', 'Venusaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(7, 'pokemons/Growlithe.png', 'Growlithe', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(8, 'pokemons/Arcanine.png', 'Arcanine', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(9, 'pokemons/Golduck.png', 'Golduck', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(10, 'pokemons/Gastly.png', 'Gastly', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(11, 'pokemons/Haunter.png', 'Haunter', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(12, 'pokemons/Gengar.png', 'Gengar', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(13, 'pokemons/Rhyhorn.png', 'Rhyhorn', 'Tierra', 'Roca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(14, 'pokemons/Rhydon.png', 'Rhydon', 'Tierra', 'Roca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(15, 'pokemons/Electabuzz.png', 'Electabuzz', 'Eléctrico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(16, 'pokemons/Scyther.png', 'Scyther', 'Bicho', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(17, 'pokemons/Magikarp.png', 'Magikarp', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(18, 'pokemons/Gyarados.png', 'Gyarados', 'Agua', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(19, 'pokemons/Eevee.png', 'Eevee', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(20, 'pokemons/Jolteon.png', 'Jolteon', 'Eléctrico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(21, 'pokemons/Vaporeon.png', 'Vaporeon', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(22, 'pokemons/Kabuto.png', 'Kabuto', 'Roca', 'Agua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(23, 'pokemons/Kabutops.png', 'Kabutops', 'Roca', 'Agua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(24, 'pokemons/Aerodactyl.png', 'Aerodactyl', 'Roca', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(25, 'pokemons/Snorlax.png', 'Snorlax', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(26, 'pokemons/Zapdos.png', 'Zapdos', 'Eléctrico', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(27, 'pokemons/Dratini.png', 'Dratini', 'Dragón', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(28, 'pokemons/Dragonair.png', 'Dragonair', 'Dragón', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(29, 'pokemons/Dragonite.png', 'Dragonite', 'Dragón', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(30, 'pokemons/Mewtwo.png', 'Mewtwo', 'Psíquico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(31, 'pokemons/Farfetch.png', 'Farfetch', 'Normal', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(32, 'pokemons/Ratata.png', 'Ratata', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(33, 'pokemons/Raticate.png', 'Raticate', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(34, 'pokemons/Ekans.png', 'Ekans', 'Veneno', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(35, 'pokemons/Arbok.png', 'Arbok', 'Veneno', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(36, 'pokemons/Sandshrew.png', 'Sandshrew', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(37, 'pokemons/Sandslash.png', 'Sandslash', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(38, 'pokemons/Kakuna.png', 'Kakuna', 'Bicho', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(39, 'pokemons/Meowth.png', 'Meowth', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(40, 'pokemons/Paras.png', 'Paras', 'Bicho', 'Planta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(41, 'pokemons/Parasect.png', 'Parasect', 'Bicho', 'Planta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(42, 'pokemons/Ditto.png', 'Ditto', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(43, 'pokemons/Diglett.png', 'Diglett', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(44, 'pokemons/Dugtrio.png', 'Dugtrio', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(45, 'pokemons/Slowpoke.png', 'Slowpoke', 'Agua', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(46, 'pokemons/Slowbro.png', 'SlowBRO', 'Agua', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(47, 'pokemons/Exeggcute.png', 'Exeggcute', 'Planta', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(48, 'pokemons/Hitmonlee.png', 'Hitmonlee', 'Lucha', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(49, 'pokemons/Marowak.png', 'Marowak', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(50, 'pokemons/Cloyster.png', 'Cloyster', 'Agua', 'Hielo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador INT UNIQUE NOT NULL,
    usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL
);

INSERT INTO users (numero_identificador, usuario, contraseña) VALUES
(1,"admin", "admin");
