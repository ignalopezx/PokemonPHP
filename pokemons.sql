CREATE DATABASE IF NOT EXISTS pokemons;

USE pokemons;

CREATE TABLE IF NOT EXISTS pokemon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador INT UNIQUE NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    tipo1 VARCHAR(20) NOT NULL,
    tipo2 VARCHAR(20) DEFAULT NULL,
    descripcion VARCHAR(255) NOT NULL
);

INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo1, tipo2, descripcion) VALUES
(1, 'imagenes/Charmander.png', 'Charmander', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'imagenes/Charmeleon.png', 'Charmeleon', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'imagenes/Charizard.png', 'Charizard', 'Fuego', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'imagenes/Bulbasaur.png', 'Bulbasaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(5, 'imagenes/Ivysaur.png', 'Ivysaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'imagenes/Venusaur.png', 'Venusaur', 'Planta', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(7, 'imagenes/Growlithe.png', 'Growlithe', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(8, 'imagenes/Arcanine.png', 'Arcanine', 'Fuego', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(9, 'imagenes/Golduck.png', 'Golduck', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(10, 'imagenes/Gastly.png', 'Gastly', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(11, 'imagenes/Haunter.png', 'Haunter', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(12, 'imagenes/Gengar.png', 'Gengar', 'Fantasma', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(13, 'imagenes/Rhyhorn.png', 'Rhyhorn', 'Tierra', 'Roca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(14, 'imagenes/Rhydon.png', 'Rhydon', 'Tierra', 'Roca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(15, 'imagenes/Electabuzz.png', 'Electabuzz', 'Eléctrico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(16, 'imagenes/Scyther.png', 'Scyther', 'Bicho', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(17, 'imagenes/Magikarp.png', 'Magikarp', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(18, 'imagenes/Gyarados.png', 'Gyarados', 'Agua', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(19, 'imagenes/Eevee.png', 'Eevee', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(20, 'imagenes/Jolteon.png', 'Jolteon', 'Eléctrico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(21, 'imagenes/Vaporeon.png', 'Vaporeon', 'Agua', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(22, 'imagenes/Kabuto.png', 'Kabuto', 'Roca', 'Agua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(23, 'imagenes/Kabutops.png', 'Kabutops', 'Roca', 'Agua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(24, 'imagenes/Aerodactyl.png', 'Aerodactyl', 'Roca', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(25, 'imagenes/Snorlax.png', 'Snorlax', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(26, 'imagenes/Zapdos.png', 'Zapdos', 'Eléctrico', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(27, 'imagenes/Dratini.png', 'Dratini', 'Dragón', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(28, 'imagenes/Dragonair.png', 'Dragonair', 'Dragón', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(29, 'imagenes/Dragonite.png', 'Dragonite', 'Dragón', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(30, 'imagenes/Mewtwo.png', 'Mewtwo', 'Psíquico', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(31, 'imagenes/Farfetch.png', 'Farfetch', 'Normal', 'Volador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(32, 'imagenes/Ratata.png', 'Ratata', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(33, 'imagenes/Raticate.png', 'Raticate', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(34, 'imagenes/Ekans.png', 'Ekans', 'Veneno', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(35, 'imagenes/Arbok.png', 'Arbok', 'Veneno', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(36, 'imagenes/Sandshrew.png', 'Sandshrew', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(37, 'imagenes/Sandslash.png', 'Sandslash', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(38, 'imagenes/Kakuna.png', 'Kakuna', 'Bicho', 'Veneno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(39, 'imagenes/Meowth.png', 'Meowth', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(40, 'imagenes/Paras.png', 'Paras', 'Bicho', 'Planta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(41, 'imagenes/Parasect.png', 'Parasect', 'Bicho', 'Planta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(42, 'imagenes/Ditto.png', 'Ditto', 'Normal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(43, 'imagenes/Diglett.png', 'Diglett', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(44, 'imagenes/Dugtrio.png', 'Dugtrio', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(45, 'imagenes/Slowpoke.png', 'Slowpoke', 'Agua', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(46, 'imagenes/Slowbro.png', 'SlowBRO', 'Agua', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(47, 'imagenes/Exeggcute.png', 'Exeggcute', 'Planta', 'Psíquico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(48, 'imagenes/Hitmonlee.png', 'Hitmonlee', 'Lucha', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(49, 'imagenes/Marowak.png', 'Marowak', 'Tierra', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(50, 'imagenes/Cloyster.png', 'Cloyster', 'Agua', 'Hielo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador INT UNIQUE NOT NULL,
    usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL
);

INSERT INTO users (numero_identificador, usuario, contraseña) VALUES
(1,"admin", "admin");
