<?php
require_once "AcoesVideos.php";

class Video implements AcoesVideos
{
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  public function __construct($titulo)
  {
    $this->setTitulo($titulo);
    $this->setAvaliacao(1);
    $this->setViews(0);
    $this->setCurtidas(0);
    $this->setReproduzindo(false);
  }

  public function play()
  {
    $this->setReproduzindo(True);
  }
  public function pause()
  {
    $this->setReproduzindo(False);
  }
  public function like()
  {
    $this->setAvaliacao($this->getAvaliacao() + 1);
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  public function getAvaliacao()
  {
    return $this->avaliacao;
  }

  public function setAvaliacao($avaliacao)
  {
    $this->avaliacao = ($this->avaliacao + $avaliacao);
  }

  public function getViews()
  {
    return $this->views;
  }

  public function setViews($views)
  {
    $this->views = $views;
  }

  public function getCurtidas()
  {
    return $this->curtidas;
  }

  public function setCurtidas($curtidas)
  {
    $this->curtidas = $curtidas;
  }

  public function getReproduzindo()
  {
    return $this->reproduzindo;
  }

  public function setReproduzindo($reproduzindo)
  {
    $this->reproduzindo = $reproduzindo;
  }
}
