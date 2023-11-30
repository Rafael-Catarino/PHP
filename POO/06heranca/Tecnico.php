<?php
require_once "Aluno.php";
class Tecnico extends Aluno
{
  private $registroProficional;

  public function praticar()
  {
    echo "Estou praticando";
  }

  public function getRegistroProficional()
  {
    return $this->registroProficional;
  }

  public function setRegistroProficional($registroProficional)
  {
    $this->registroProficional = $registroProficional;
  }
}
