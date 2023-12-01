<?php
require_once "Caneta.php";

//Intancia diferentes de uma mesma classe criando objetos diferentes.
//1º OBJ
$c1 = new caneta();
$c1->modelo = "BIC";
$c1->cor = "Azul";
$c1->ponta = 0.5;

// $c1->destampar();

$c1->rabiscar();
//$c1->rabiscar();
// print_r($c1);

echo "<hr>";

//2ºOBJ
$c2 = new Caneta();
$c2->cor = "Verde";
$c2->carga = 50;
$c2->tampar();
//$c2->rabiscar();
print_r($c2);
