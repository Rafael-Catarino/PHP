<?php
function tracaLinha(string $value)
{
  for ($i = 0; $i <= 70; $i++) {
    echo "-";
  }

  echo "<br> $value <br>";
}

tracaLinha("for");

function tabuadaComFor(int $value): void
{
  for ($i = 0; $i <= 10; $i++) {
    echo "$value X $i = " . $i * $value . "<br>";
  }
}

tabuadaComFor(2);

tracaLinha("for com array");


function utilizandoArrayComFor(int $tam, int $valTab)
{
  $arrValue = array($tam);

  for ($i = 0; $i <= $tam; $i++) {
    $arrValue[$i] = "$valTab X $i = " . $valTab * $i;
  }

  for ($i = 0; $i <= $tam; $i++) {
    echo "$arrValue[$i] <br>";
  }
}

utilizandoArrayComFor(10, 2);

tracaLinha("foreach");

$arrTransp = array("Carro", "Moto", "Trem", "Ônibus", "Avião", "Navio", "Bicicleta");

function usandoOForEach($arrTransp)
{
  foreach ($arrTransp as $veic) {
    echo "$veic <br>";
    if ($veic == "Trem") {
      break;
    }
  }
}

usandoOForEach($arrTransp);
