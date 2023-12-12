<?php
require_once "Aluno.php";
class Bolsista extends Aluno
{
  private $bolsa;

  public function renovaBolsa()
  {
    echo "Bolsa renovada";
  }


  public function pagarMensalidade()
  {
    echo "<p>{$this->getNome()} é bolsista! Então paga com desconto!";
  }

  public function getBolsa()
  {
    return $this->bolsa;
  }

  public function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }
}
