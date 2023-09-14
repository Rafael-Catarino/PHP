<?php
// Uma forma de se criar um array
$arr = array(5);

$arr[0] = "Carro";
$arr[1] = "Avião";
$arr[2] = "Navio";
$arr[3] = "Moto";
$arr[4] = "Ônibus";

//Outra forma de se criar um array
$vet = ["Carro", "Avião", "Navio", "Moto", "Ônibus"];

for ($index = 0; $index < count($arr); $index++) {
  echo $arr[$index] . " - " . $vet[$index];
  echo "<br>";
}


echo "<hr>";
// Tanto o count(array, modo) quanto o sizeof(array, mod) retorna o tamanho de um array.
echo count($vet) . " " .  sizeof($vet) . "<br>";
echo "<hr>";


$vet2 = array("Nome" => "Rafael", "Cidade" => "RJ", "Curso" => "PHP");

foreach ($vet2 as $index => $valor) {
  echo "$index - $valor <br>";
}

echo "<hr/>";

//Matriz
$arrCar = array(
  array("UNO", 30000),
  array("GOL", 40000),
  array("EUV", 70000)
);

echo "Carro " . $arrCar[0][0] . " - Valor: " . $arrCar[0][1] . "<br/>";
echo "Carro " . $arrCar[1][0] . " - Valor: " . $arrCar[1][1] . "<br/>";
echo "Carro " . $arrCar[2][0] . " - Valor: " . $arrCar[2][1] . "<br/>";
