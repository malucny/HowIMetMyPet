<?php

// conexão com o localhost

$localhost = "localhost";
$usuario = "root";
$senha = "";
$banco = "projetofinal";

// checa a conexão

$conexao = new mysqli($localhost, $usuario, $senha, $banco);

    if ($conexao->connect_errno) {

        echo "Erro de conexão";
    }
    
    else {

        echo "Conexão efetuada com sucesso! \n"; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $pet = $_POST["pet"];
        $mensagem = $_POST["mensagem"];

// coloca os dados na tabela "adocao"

    $sql = "INSERT INTO adocao (nome, sobrenome, email, pet, mensagem) VALUES ('$nome', '$sobrenome', '$email', '$pet', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {

            echo "Cadastro feito com sucesso! Aguarde para mais informações";

        } else {

            echo "Erro no cadastro:" . $sql . "<br>" . $conexao->error;

        }

}

// fecha a conexão

$conexao->close();

?>