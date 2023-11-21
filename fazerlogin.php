
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
    echo '<p>Seu Login foi concluído.</p>';
}
?>
