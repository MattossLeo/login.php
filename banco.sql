CREATE TABLE warley(
                        id INT(8) NOT NULL AUTO_INCREMENT,
                        nome VARCHAR (200) NOT NULL ,
                        nascimento DATE,
                        sexo VARCHAR (200),
                        peso INT(200),
                        altura INT(255),
                        nacionalidade VARCHAR (12),
                        PRIMARY KEY(id)
);

CREATE TABLE cadastro(
    id INT(8) NOT NULL AUTO_INCREMENT,
    email VARCHAR (200),
    username VARCHAR(200),
    password VARCHAR (200),
    birthday DATE,
    create_data TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
