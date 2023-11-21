<html>
<head>
    <title>Cadastro dde adoção</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7ee65;
            color: #4272bc;
            margin: 0;
            padding: 0;
        }
        .contact-form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #4272bc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }
        .contact-form h2 {
            text-align: center;
        }
        .contact-form label {
            display: block;
            margin-bottom: 10px;
        }
        .contact-form input[type="text"],
        .contact-form textarea,
        .contact-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .contact-form input[type="submit"] {
            background-color: #4272bc;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #2a4b7c;
        }
    </style>
</head>
<body>
    <div class="box">
    <h2>Cadastro de adoção</h2>
    <form action="inserirbd.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>

        <label for="sobrenome" class="labelInput">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>

        <label for="email">E-mail:</label>
        <input type="text" name="email"><br>

        <div class="inputBox">
                    <label for="pet">Pet:</label>
                    <select name="pet" id="pet">
                        <option value="romeu">Romeu</option>
                        <option value="nico">Nico</option>
                        <option value="fany">Fany</option>
                        <option value="frederico">Frederico</option>
                        <option value="haru">Haru</option>
                        <option value="mavis">Mavis</option>
                    </select>
                </div>
                <label for="mensagem">Por que você quer esse pet?</label>
                <textarea name="mensagem" id="mensagem"></textarea><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
</style>
