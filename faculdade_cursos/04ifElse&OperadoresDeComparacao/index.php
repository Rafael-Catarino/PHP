<?php
/*
  Os opreradores && e AND retorna a mesma coisa.
  Assim como os operadores || e OR retorna a mesma coisa
*/

date_default_timezone_set("America/Sao_Paulo");
$hora = date("H");

function saudacaoComIfElse(int $hora): string
{

  if ($hora >= 6 && $hora < 12) {
    return "Bom Dia!!";
  } else if ($hora > 11 && $hora < 19) {
    return "Boa Tarde!!";
  } else if ($hora > 18 && $hora < 23) {
    return "Boa Noite!!";
  } else {
    return "Boa Madrugada!!";
  }
}

function saudacaoComSwitch(int $hora): string
{
  switch ($hora) {
    case $hora > 6 && $hora < 12:
      return "Bom Dia!!";
    case $hora > 12 && $hora < 18:
      return "Boa Tarde!!";
    case $hora > 18:
      return "Boa Noite!!";
    default:
      return "Boa Madrugada!!";
  }
}

echo saudacaoComIfElse($hora);
echo "<hr/>";
echo saudacaoComSwitch($hora);
