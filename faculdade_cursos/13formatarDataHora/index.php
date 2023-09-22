<?php

date_default_timezone_set("America/Sao_Paulo");

$data = Date("d/m/Y H:i:s");

echo $data;

$dia = date("d");
$mes = date("m");
$ano = date("y");
// Se passar o argumento para o date com o "y" minusculo o date retorna o ano com 2 digitos, já se passar com o "Y" maiusculo o date retorna o ano com 2 digitos. EX:
echo "<br> Letra minuscula: " . date("y") . "<br> Letra maiuscula: " .  date("Y");

echo "<br> $dia / $mes / $ano";
