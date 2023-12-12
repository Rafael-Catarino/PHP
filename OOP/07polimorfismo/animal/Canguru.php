<?php
require_once "Mamiferos.php";
class Canguru extends Mamifero
{
  public function usarBolsa()
  {
    echo "<p>Usando a bolsa.</p>";
  }

  public function locomover()
  {
    echo "<p>Pulando...</p>";
  }

  public function emitirSom()
  {
    echo "<p>Som de Canguru.</p>";
  }
}
