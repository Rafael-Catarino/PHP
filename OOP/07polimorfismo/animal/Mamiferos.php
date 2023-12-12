<?php
require_once "Animal.php";
class Mamifero extends Animal
{
  private $corPele;

  public function locomover()
  {
    echo "<p>Correndo...</p>";
  }

  public function alimentar()
  {
    echo "<p>Mamando.</p>";
  }

  public function emitirSom()
  {
    echo "<p>Som de mamifero.</p>";
  }

  public function getCorPele()
  {
    return $this->corPele;
  }

  public function setCorPele($corPele)
  {
    $this->corPele = $corPele;
  }
}
