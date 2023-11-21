<?php

// conexão com o localhost

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "projetofinal";

// checa a conexão

$conexao = new mysqli($localhost, $user, $password, $banco);

    if ($conexao->connect_errno) {

        echo "Erro de conexão";
    }
    
    else {

        echo "Conexão efetuada com sucesso! \n"; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

// coloca os dados na tabela "login"

    $sql = "INSERT INTO login (usuario, senha) VALUES ('$usuario', '$senha')";

        if ($conexao->query($sql) === TRUE) {

            echo "Login efetuado com sucesso.";

        } else {

            echo "Erro de login:" . $sql . "<br>" . $conexao->error;

        }

}

// fecha a conexão

$conexao->close();

?>
