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
  require "Caneta.php";

  //Intancia diferentes de uma mesma classe criando objetos diferentes.
  //1º OBJ
  $c1 = new Caneta;
  $c1->modelo = "BIC cristal";
  $c1->cor = "Azul";

  // $c1->ponta = 0.5; Nesse caso eu não vou conseguir alterar o atributo por que ele está como privado.
  // $c2->carga = 99; Nesse caso eu também não vou conseguir alterar o atributo por que ele está como protegido.

  $c1->rabiscar();
  $c1->tampar();

  print_r($c1);

  $c1->rabiscar();

  // $c1->destampar();

  ?>
</pre>


</body>

</html>