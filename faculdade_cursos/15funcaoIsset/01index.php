<?php
// a função isset serve para verificar se um objeto, variavel ou um valor passado existe ou não dentro do nosso arquivo.

$aula = "";

if (isset($aula)) {
  echo "foi definida.";
} else {
  echo "não foi definida";
}
