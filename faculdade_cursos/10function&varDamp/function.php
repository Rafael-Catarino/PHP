<?php

//Tipos de dados no PHP

$string = "texto";
$int = 10;
$float = 9.99;
$boll = true;
$nulo = null;

#Informa qual é o tipo da variavel.
var_dump($string);
echo "<hr/>";
var_dump($int);
echo "<hr/>";
var_dump($float);
echo "<hr/>";
var_dump($boll);
echo "<hr/>";
var_dump($nulo);
echo "<hr/>";


$number = 200;
$texto = "Eu sou o Rafael";
$limite = 50;

function saudacao(string $num): string # Define o tipo de retorno da função como inteiro.
{
    return $num;
}

function num(int $number): int
{
    return $number;
}

function resumirTexto(string $texto, int $limite, string $continue = "...")
{
    return $texto . " " . $limite . $continue;
}

$arrNota = array(1, 3, 5, 7, 9, 12, 6, 4, 20, 18);

function calculaMedia($arrNota): float
{
    $soma = 0;
    for ($i = 0; $i < count($arrNota); $i++) {
        $soma = $soma + $arrNota[$i];
    }
    return $soma / count($arrNota);
}


echo calculaMedia($arrNota);
echo "<hr>";
echo saudacao("Bom dia!");
echo "<hr>";
echo num($number);
echo "<hr/>";
echo resumirTexto($texto, $limite);
echo "<hr/>";
