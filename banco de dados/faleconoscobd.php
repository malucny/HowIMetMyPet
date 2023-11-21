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
        $email = $_POST["email"];
        $assunto = $_POST["assunto"];
        $mensagem = $_POST["mensagem"];

// coloca os dados na tabela "faleconosco"

    $sql = "INSERT INTO faleconosco (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {

            echo "Envio efetuado com sucesso! Aguarde para  mais informações.";

        } else {

            echo "Erro no envio:" . $sql . "<br>" . $conexao->error;

        }

}

// fecha a conexão

$conexao->close();

?>
