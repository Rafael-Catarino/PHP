<?php
class Carro
{
  var $tipo; //1=Passeio / 2=Esporte / 3=Utilitário
  var $velMax;
  var $velocidade;
  var $nome;
  var $liga;

  function Carro($tipo, $nome)
  {
    $this->tipo = $tipo;
    $this->liga = false;
    $this->velocidade = 0;
    $this->nome = $nome;

    if ($tipo == 1) {
      $this->velMax = 160;
    } else if ($tipo == 2) {
      $this->velMax = 300;
    } else {
      $this->velMax = 100;
    }
  }

  function ligaCarro()
  {
    $this->liga = true;
  }

  function desligaCarro()
  {
    $this->liga = false;
  }

  function aumentaVelocidade($vel)
  {
    if ($vel > $this->velMax) {
      $this->velocidade = $this->velMax;
    } else {
      $this->velocidade = $vel;
    }
  }

  function id()
  {
    echo "Nome do carro:" . $this->nome;
    echo "<br> Tipo do carro:" . $this->tipo;
    echo "<br> Velocidade Máxima:" . $this->velMax;
    if ($this->liga) {
      echo "<br> Este carro está LIGAGO";
    } else {
      echo "<br> Desligado";
    }
  }
}
