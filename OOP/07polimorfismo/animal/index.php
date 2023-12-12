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
  require_once "Animal.php";
  require_once "Ave.php";
  require_once "Mamiferos.php";
  require_once "Peixe.php";
  require_once "Reptil.php";
  require_once "Canguru.php";
  require_once "Tartaruga.php";

  $m = new Mamifero();
  $m->setIdade("4 Anos.");
  $m->setMembros("2 Membros.");
  $m->setPeso("10kg.");
  $m->setCorPele("Branco.");
  print_r($m);
  $m->locomover();
  $m->alimentar();
  $m->emitirSom();
  echo "<hr>";

  $r = new Reptil();
  $r->setCorEscama("Azul.");
  $r->setPeso("2kg.");
  $r->setMembros("4 Membros.");
  $r->setIdade("1 Anos.");
  print_r($r);
  $r->locomover();
  $r->alimentar();
  $r->emitirSom();
  echo "<hr>";

  $p = new Peixe();
  $p->setCorEscama("Dourado.");
  $p->setIdade("1 anos.");
  $p->setMembros("Não tem membro.");
  $p->setPeso("100g");
  print_r($p);
  $p->locomover();
  $p->alimentar();
  $p->emitirSom();
  echo  "<hr>";

  $a = new Ave();
  $a->setCorPena("Azul");
  $a->setIdade("3 Anos.");
  $a->setMembros("2 Pernas.");
  $a->setPeso("10g");
  print_r($a);
  $a->locomover();
  $a->alimentar();
  $a->emitirSom();
  echo "<hr>";

  $c = new Canguru();
  $c->setCorPele("Marrom");
  $c->setIdade("10 Anos");
  $c->setMembros("4 Membros");
  $c->setPeso("34Kg");
  print_r($c);
  $c->locomover();
  $c->usarBolsa();
  $c->emitirSom();
  echo "<hr>";

  $t = new Tartaruga();
  $t->setCorPele("Verde");
  $t->setIdade("50 Anos");
  $t->setMembros("4 Membros");
  $t->setPeso("54Kg");
  print_r($t);
  $t->locomover();
  ?>
  
  </pre>
</body>

</html>