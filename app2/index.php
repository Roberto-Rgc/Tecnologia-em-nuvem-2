<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Contato</title>
</head>
<body>
  <h1>Fale Conosco</h1>

  <form method="post" action="">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <label for="mensagem">Mensagem:</label><br>
    <textarea name="mensagem" id="mensagem" rows="5" required></textarea><br><br>

    <input type="submit" value="Enviar">
  </form>

  <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //coleta osdados do formulário
  $nome =htmlspecialchars($_POST["nome"]);
  $email =htmlspecialchars($_POST["email"]);
  $mensagem =htmlspecialchars($_POST["mensagem"]);

  // exibe os dados (em uma aplicaçãoreal,você poderia salvar ou enviar por email)

  echo"<h2>Dados Recebidos:</h2>";
  echo"<p><strong>Nome</strong>$nome</p>";
  echo"<p><strong>email</strong>$email</p>";
  echo"<p><strong>mensagem</strong>$mensagem</p>";
  
}
  ?>
</body>
</html>
