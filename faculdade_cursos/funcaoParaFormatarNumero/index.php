<?php

$numero = 1000;

function formatarValor(float $numero = null): string
{
    return "R$ " . number_format(($numero ? $numero : 0), 2, ',', '.');
}

$valor = formatarValor($numero);
echo $valor;

echo "<hr>";


function formatarNumero(string $numero = null): string
{
    return number_format(($numero ? $numero : 0), 0, ",", ".");
}

echo "R$ " . formatarNumero($numero);
