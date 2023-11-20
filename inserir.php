<!DOCTYPE html>
<html>
<head>
    <title>Cadastro para adoção de pets</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Cadastro para adoção de pets</h1>
    <form action="inserirbd.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"><br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <label>Pet:</label>
        <select name="escolhaOpcao" id="escolhaOpcao">
            <option value="romeu">Romeu</option>
            <option value="nico">Nico</option>
            <option value="fany">Fany</option>
            <option value="frederico">Frederico</option>
            <option value="haru">Haru</option>
            <option value="mavis">Mavis</option>
        </select><br>
        <label>Por que você quer esse pet?</label>
        <textarea name="texto"></textarea><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
