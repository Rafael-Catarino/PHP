<?php
date_default_timezone_set("America/Sao_Paulo");
$hora = date("H");

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

function switchCase(int $value): void
{
  switch ($value) {
    case 1:
      echo "Carro";
      break;
    case 2:
      echo "Moto";
      break;
    case 3:
      echo "Bicicleta";
      break;
    case 4:
      echo "Navio";
      break;
    case 5:
      echo "Avião";
      break;
    default:
      echo "Transporte inválido";
      break;
  }
}

function modoTransport(int $value): void
{
  switch ($value) {
    case ($value <= 3 and $value > 0):
      echo "Transporte Terrestre";
      break;
    case 4:
      echo "Navio";
      break;
    case 5:
      echo "Avião";
      break;
    default:
      echo "Transporte inválido";
      break;
  }
}

echo saudacaoComSwitch($hora);
echo "<hr/>";
$value = 1;
switchCase($value);
echo " - ";
modoTransport($value);
