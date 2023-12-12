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
  require_once "Pessoa.php";
  require_once "Visitante.php";
  require_once "Aluno.php";
  require_once "Bolsista.php";
  require_once "Professor.php";
  require_once "Funcionario.php";
  require_once "Tecnico.php";


  $v1 = new Visitante();
  $v1->setNome("Renam");
  $v1->setIdade(50);
  $v1->setSexo("M");
  print_r($v1);
  echo "<hr>";

  $a1 = new Aluno();
  $a1->setNome("Lais");
  $a1->setIdade(28);
  $a1->setSexo("F");
  $a1->setMatricula(12345678);
  $a1->setCurso("ADS");

  print_r($a1);
  $a1->pagarMensalidade();
  echo "<hr>";

  $b1 = new Bolsista();
  $b1->setNome("Jubileu");
  $b1->setIdade(17);
  $b1->setSexo("M");
  $b1->setBolsa(12.5);
  $b1->setMatricula(11111111111);
  $b1->setCurso("ADM");
  print_r($b1);
  $b1->pagarMensalidade();
  echo "<hr>";

  // Tecnico
  $t1 = new Tecnico();
  $t1->setNome("Maria");
  $t1->setIdade(22);
  $t1->setSexo("F");
  $t1->setMatricula(22222222222);
  $t1->setCurso("Programação");
  $t1->setRegistroProficional(123);
  print_r($t1);
  $t1->praticar();
  echo "<hr>";

  $p3 = new Professor();
  $p3->setNome("Milena");
  $p3->setIdade(27);
  $p3->setSexo("F");
  $p3->setEspecialidade("Programação");
  $p3->setSalario(7000.00);
  print_r($p3);
  echo "<hr>";

  $p4 = new Funcionario();
  $p4->setNome("Rafael");
  $p4->setIdade(29);
  $p4->setSexo("M");
  $p4->setSetor("Limpesa");
  $p4->setTrabalhando("Limpando Banheiro");
  print_r($p4);
  echo "<hr>";
  ?>

  </pre>
</body>

</html>