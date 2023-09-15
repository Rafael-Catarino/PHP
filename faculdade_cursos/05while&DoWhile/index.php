<?php

function tabuadaComWhile(int $num): void
{
  $i = 0;
  while ($i <= 10) {
    echo "$num X $i = " . $i * $num . "<br/>";
    $i++;
  }
}

function tabuadaComDoWhile(int $num): void
{
  $i = 0;
  do {
    echo "$num X $i = " . $i * $num . "<br/>";
    $i++;
  } while ($i <= 10);
}

tabuadaComWhile(5);
echo "<hr>";
tabuadaComDoWhile(7);
