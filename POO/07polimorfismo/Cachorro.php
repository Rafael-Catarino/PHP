<?php
require_once "Mamiferos.php";
class Cachorro extends Mamifero
{
  public function emitirSom()
  {
    echo "<p>Au!Au!Au!</p>";
  }

  public function enterraOssos()
  {
    echo "<p>Osso enterrado.</p>";
  }

  public function abanarRabo()
  {
    echo "<p>Abanando o rabo.</p>";
  }
}
