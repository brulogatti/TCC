DROP SCHEMA IF EXISTS agua;
CREATE SCHEMA agua;
USE agua;

CREATE TABLE IF NOT EXISTS usuarios(
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    data_nasc VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    token VARCHAR(255) DEFAULT NULL,
    tipo VARCHAR(255)NOT NULL,
    PRIMARY KEY (id)
) AUTO_INCREMENT=1000;

CREATE TABLE IF NOT EXISTS categorias(
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nome_categoria VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_categoria)
) AUTO_INCREMENT=1000;

CREATE TABLE IF NOT EXISTS materiais(
    id_materiais INT NOT NULL AUTO_INCREMENT,
    nome_material VARCHAR(255) NOT NULL,
    video VARCHAR(255), 
    noticia VARCHAR(255),
    doc VARCHAR(255),
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (id_materiais)
) AUTO_INCREMENT=1000;