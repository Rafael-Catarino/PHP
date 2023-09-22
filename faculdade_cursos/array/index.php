<?php

function dataAtual(): string
{
  $diaMes = date("d");
  $diaSemana = date("w");
  $mes = date("n") - 1;
  $ano = date("Y");

  $nomesDiasDaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sabado"];

  $nomesDosMeses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Desembro"];

  $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ", " . $diaMes . " de " . $nomesDosMeses[$mes] . " de " . $ano;

  return $dataFormatada;
}

echo dataAtual();


echo "<hr>";


var_dump($_SERVER);
echo "<hr>";

// Retorna o elemento do Array.
echo $_SERVER["HTTP_HOST"];


echo "<hr>";
echo $_SERVER["SCRIPT_FILENAME"];

echo "<hr>";
// Formas de criar um Array.
$meses = array();
$dias = [];

$meses = [
  "j" => "Janeiro",
  "f" => "Fevereiro",
  "m" => "Março"
];
var_dump($meses);

echo "<hr>";
foreach ($meses as $chave => $valor) {
  echo $chave . " - " . "$valor" . "<br>";
}

echo "<hr>";
foreach ($meses as $valor) {
  echo $valor . "<br>";
}

echo "<hr>";
echo $meses["j"];
echo $meses[0];
