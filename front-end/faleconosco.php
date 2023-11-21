<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<div style="background-image: linear-gradient(#f7ee65, white); border-top-style:solid; border-color:#f7ee65; text-align:center;">
  <h2 style= "font-size:25px; color:#4272bc; font-weight:bolder">FALE CONOSCO</h2>
  <h3 style= "font-size:18px; color:darkslategray; font-weight:bolder"> Envie sugestões e dúvidas para nós. Sua opinião nos ajuda a melhorar!</h3>
  
  <br></br>
  <p style= "font-size:15px; color:darkslategray; font-weight:bolder">Telefone: 83 999999999</p>
  <p style= "font-size:15px; color:darkslategray; font-weight:bolder">E-mail: him_mypet@hotmail.com</p>
  <br></br>

  <form action="?pg=sucesso" method="post">
    <label style="font-size:15px; color:darkslategray; font-weight:bolder">Nome:</label>
    <input type="text" name="nome"/><br>
    <label style="font-size:15px; color:darkslategray; font-weight:bolder">E-mail:</label>
    <input type="text" name="email"/><br>
    <label style="font-size:15px; color:darkslategray; font-weight:bolder">Assunto:</label>
    <select name="assunto">
      <option value="Sugestão">Sugestão</option>
      <option value="Dúvida">Dúvida</option>
      <option value="Reclamação">Reclamação</option>
    </select><br>
    <label style= "font-size:15px; color:darkslategray; font-weight:bolder">Mensagem:</label>
    <textarea name="mensagem"></textarea><br>
    <input type="submit" value="Enviar"/>
  </form>
</div>