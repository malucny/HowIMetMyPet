CREATE DATABASE projetofinal;

CREATE TABLE adocao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    email VARCHAR(100),
    pet ENUM('nico', 'romeu', 'fany', 'frederico', 'haru', 'mavis'),
    mensagem TEXT
);