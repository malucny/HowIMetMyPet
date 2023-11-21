<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $assunto = $_POST["assunto"];
        $mensagem = $_POST["mensagem"];

// coloca os dados na tabela "adocao"

    $sql = "INSERT INTO faleconosco (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {

            echo "Envio concluído com sucesso! Aguarde para mais informações.";

        } else {

            echo "Erro no envio:" . $sql . "<br>" . $conexao->error;

        }

}

// fecha a conexão

$conexao->close();

?>