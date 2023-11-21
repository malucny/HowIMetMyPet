<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

// coloca os dados na tabela "adocao"

    $sql = "INSERT INTO login (usuario, senha) VALUES ('$usuario', '$senha')";

        if ($conexao->query($sql) === TRUE) {

            echo "Login efetuado com sucesso!";

        } else {

            echo "Erro no login:" . $sql . "<br>" . $conexao->error;

        }

}

// fecha a conexão

$conexao->close();

?>
