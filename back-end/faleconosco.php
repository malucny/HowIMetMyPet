<html>
<head>
    <title>Fale Conosco</title>
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
    <div class="contact-form">
    <h2>Fale conosco</h2>
    <form action="recebido.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>

        <label for="email">E-mail:</label>
        <input type="text" name="email"><br>

        <label for="assunto">Assunto:</label>
        <select name="assunto">
        <option value="Sugestões">Sugestões</option>
        <option value="Reclamações">Reclamações</option>
        <option value="Dúvidas">Dúvidas</option>
        </select><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea name="mensagem"></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
