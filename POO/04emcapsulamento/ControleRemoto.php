<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador
{
  // Atributos
  private $volume;
  private $ligado;
  private $tocando;
  // metodos especiais
  public function __construct()
  {
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocando(false);
  }

  private function getVolume()
  {
    return $this->volume;
  }

  private function setVolume($volume)
  {
    $this->volume = $volume;
  }

  private function getLigado()
  {
    return $this->ligado;
  }

  private function setLigado($Ligado)
  {
    $this->ligado = $Ligado;
  }

  private function getTocando()
  {
    return $this->tocando;
  }

  private function setTocando($tocando)
  {
    $this->tocando = $tocando;
  }

  public function ligar()
  {
    $this->setLigado(true);
  }

  public function desligar()
  {
    $this->setLigado(false);
  }

  public function abrirMenu()
  {
    echo "<P>----- MENU -----</p>";
    echo "<br>Está ligado? ";
    echo $this->getLigado() ? "Sim" : "Não";
    echo "<br>Está tocando? ";
    echo $this->getTocando() ? "Sim" : "Não";
    echo "<br>Volume: " . $this->getVolume();
    for ($i = 0; $i <= $this->getVolume(); $i += 10) {
      echo "|";
    }
    echo "<br>";
  }

  public function fecharMenu()
  {
    echo "Fechando Menu...";
  }

  public function maisVolume()
  {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() + 10);
    } else {
      echo "<p>ERRO! Não posso aumentar o volume.</p>";
    }
  }

  public function menosVolume()
  {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() - 10);
    } else {
      echo "<p>ERRO! Não posso aumentar o volume.</p>";
    }
  }

  public function ligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() > 0) {
      $this->setVolume(0);
    }
  }

  public function desligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() < 0) {
      $this->setVolume(50);
    }
  }

  public function play()
  {
    if ($this->getLigado() && !($this->getTocando())) {
      $this->setTocando(true);
    }
  }

  public function pause()
  {
    if ($this->getLigado() && $this->getTocando()) {
      $this->setTocando(false);
    }
  }
}
