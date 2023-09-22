<?php

function tabuadaComWhile(int $num)
{
  $numero = 1;

  while ($numero <= 10) {
    $mult = $numero * $num;

    echo $num . " X " . $numero . " = " . $mult . "<br>";

    $numero++;
  }
}

function tabuadaComFor(int $num)
{
  for ($numero = 1; $numero <= 10; $numero++) {
    $mult = $numero * $num;

    echo $num . " X " . $numero . " = " . $mult . "<br>";
  }
}
