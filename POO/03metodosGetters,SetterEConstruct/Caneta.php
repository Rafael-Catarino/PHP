<?php
// Mudando a visibilidade
class Caneta
{

  //Atributos
  private $cor;
  private $modelo;
  private $ponta;
  private $tampada;


  //metodos

  public function __construct($m, $c, $p)
  {
    $this->setModelo($m);
    $this->setCor($c);
    $this->setPonta($p);
    $this->tampar();
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  public function getModelo()
  {
    return $this->modelo;
  }

  public function setModelo($m)
  {
    $this->modelo = $m;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function setPonta($p)
  {
    $this->ponta = $p;
  }

  public function getCor()
  {
    return $this->cor;
  }

  public function setCor($c)
  {
    $this->cor = $c;
  }
}
