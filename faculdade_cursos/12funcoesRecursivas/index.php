<?php

function subtracao(int $num): void
{
  if ($num != 0) {
    echo "O valor é $num <br>";
    subtracao($num - 1);
  }
}

subtracao(10);

function fatorial(int $numero): int
{
  if ($numero < 0) {
    return -1;
  }
  if ($numero <= 1) {
    return 1;
  }
  return $numero * fatorial($numero - 1);
}

echo fatorial(1);
