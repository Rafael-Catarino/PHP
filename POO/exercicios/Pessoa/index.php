<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <pre>
    <?php
    require_once "Pessoa.php";
    require_once "Livro.php";
    $p = array();
    $p[0] = new Pessoa("Rafael", 29, "M");
    $p[1] = new Pessoa("Fafa", 25, "F");

    $l = array();
    $l[0] = new Livro("Pense e Enriqueça", "Napoleon Hill", 367, $p[0]);
    $l[1] = new Livro("As armas da persuasão: Como influenciar e não se deixar influenciar", "Robert B. Cialdini", 304, $p[1]);

    $l[0]->abrir();
    $l[0]->folear(500);
    // $l[0]->avançarPaginas();
    // $l[0]->avançarPaginas();
    // $l[0]->voltarPaginas();
    $l[0]->detalhes();

    $l[1]->detalhes();
    ?>
  </pre>

</body>

</html>