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
  require_once "Caneta.php";

  //Intancia diferentes de uma mesma classe criando objetos diferentes.
  //1º OBJ
  $c1 = new Caneta("BIC", "Azul", 0.5);
  print_r($c1);
  // $c1->setModelo("BIC");
  // $c1->setPonta(0.5);
  // $c1->ponta = 04; Nesse caso vai dar erro, porque eu não tenho acesso a atrubuto privado.
  // echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
  // // print_r($c1);


  $c2 = new Caneta("Kkk", "Verde", 1.0);
  print_r($c2);
  ?>
</pre>


</body>

</html>