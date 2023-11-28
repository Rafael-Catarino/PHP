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
    require_once "ContaBanco.php";
    $c1 = new ContaBanco();
    echo "<hr>";
    $c1->abrirConta("CC");
    $c1->setNumConta(1111);
    $c1->setNomeDono("Rafael");
    $c1->depositar(300);
    $c1->pagarMensal();
    print_r($c1);
    echo "<hr>";



    $c2 = new ContaBanco();
    echo "<hr>";
    $c2->abrirConta("CP");
    $c2->setNumConta(2222);
    $c2->setNomeDono("Fafa");
    $c2->depositar(500);
    $c2->sacar(100);
    $c2->pagarMensal();
    $c2->sacar(570);
    $c2->fecharConta();
    print_r($c2);
    echo "<hr>";

    ?>
  </pre>
</body>

</html>