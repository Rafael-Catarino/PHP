<?php
# Uma forma. 
$valor = 6;
if ($valor > 5) {
    echo $valor;
} else {
    echo 0;
}

echo "<hr>";
# Outra forma.
echo ($valor > 5 ? $valor : 0);

echo "<hr>";
# Outra forma.
echo ($valor > 5 ?: 0);
