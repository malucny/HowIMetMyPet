
<h2> Fale conosco</h2>
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