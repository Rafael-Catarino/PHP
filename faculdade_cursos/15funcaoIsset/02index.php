<?php
if (isset($_POST["f_nome"]) != "") {
  $vnome = $_POST["f_nome"];
  echo "Nome: $vnome";
} else {
  echo "Dados não submetidos.";
?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 15</title>
  </head>

  <body>
    <form action="index.php" method="post">
      <label for="input-name">Nome:</label>
      <input type="text" name="f_nome" id="input-name">
      <input type="submit" value="Enviar">
    </form>
  </body>

  </html>

<?php
}
?>