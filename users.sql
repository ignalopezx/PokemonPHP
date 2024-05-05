USE pokemons;

CREATE TABLE IF NOT EXISTS users (
                                     id INT AUTO_INCREMENT PRIMARY KEY,
                                     numero_identificador INT UNIQUE NOT NULL,
                                     usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL
    );

INSERT INTO users (numero_identificador, usuario, contraseña) VALUES
    (1,"admin", "admin");