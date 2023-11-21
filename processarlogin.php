

<?php
session_start();

if(isset($_POST['usuario']) && isset($_POST['senha'])) {

    $username_correto = 'admin';
    $password_correto = 'senha123';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

if ($username === $username_correto && $password === $password_correto) {

    $_SESSION['logged_in'] = true;

    //usuário vai ser redirecionado para a pagina principal após o login;
    header("Location: index.php");
    exit();
}
else {
    //campo preenchido incorretamente, volta ao formulário de login;
    header("Location:index.php?error=login_failed");
    exit(); 
}
} else {
    // Se os campos não foram preenchidos, redirecionar de volta para o formulário de login
    header("Location: index.php");
    exit();
}
?>
