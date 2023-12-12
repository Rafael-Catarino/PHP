<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
  <?php
  require_once "Video.php";
  require_once "Gafanhoto.php";
  require_once "Visualizacao.php";

  $v[0] = new Video("Aula 1 de POO");
  $v[1] = new Video("Aula 12 de PHP");
  $v[2] = new Video("Aula 15 de HTML");

  print_r($v);

  $g[0] = new Gafanhoto("Rafael", 29, "M", "Catarino");
  $g[1] = new Gafanhoto("Milena", 22, "F", "Lena");
  print_r($g);

  $vis[0] = new Visualizacao($g[0], $v[2]);
  $vis[1] = new Visualizacao($g[0], $v[1]);
  $vis[2] = new Visualizacao($g[1], $v[2]);
  $vis[1]->avaliar();
  $vis[0]->avaliarNota(10);
  print_r($vis);

  ?>
  </pre>
</body>

</html>