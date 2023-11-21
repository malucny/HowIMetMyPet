
<head>
    <title>Fazer Login</title>
    <style>
        /* Estilos CSS para a div que envolve o formulário */
        .login-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
        }
        .login-container form {
            text-align: center;
        }
        .login-container form label {
            display: block;
            margin-bottom: 10px;
        }
        .login-container form input[type="text"],
        .login-container form input[type="password"],
        .login-container form input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .login-container form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .login-container form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<h2>Fazer Login</h2>
    <form action="processarlogin.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Entrar">
    </form>
 
 

<?php

session_start();

// Verificar se o usuário está realmente logado;
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  
} else {
    // Se estiver logado, exibe essa mensagemna página de login;
    echo '<h2>Bem-vindo!</h2>';
    echo '<p>Seu Login foi bem sucedido <3.</p>';
}
?>
