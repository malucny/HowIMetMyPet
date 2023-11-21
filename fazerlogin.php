<html>
<head>
    <title>Fazer Login</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f7ee65;
        color: #4272bc;
        margin: 0;
        padding: 0;
    }
     .login-container {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #4272bc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }
     .login-container h2 {
        text-align: center;
    }
     .login-container form {
        text-align: left;
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
            border: 1px solid #4272bc;
        }
        .login-container form input[type="submit"] {
            background-color: #4272bc;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .login-container form input[type="submit"]:hover {
            background-color: #2a4b7c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Fazer Login</h2>
        <form action="loginbd.php" method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario"><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>

    <?php
    session_start();

    // verifica se o usuário está realmente logado;

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  
} else {
    // Se estiver logado, exibe essa mensagemna página de login;
    echo '<h2>Bem-vindo!</h2>';
    echo '<p>Seu Login foi bem sucedido <3.</p>';
}
?>
