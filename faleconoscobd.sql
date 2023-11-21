CREATE TABLE faleconosco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    assunto ENUM('sugestoes', 'reclamacao', 'duvidas'),
    mensagem TEXT
);