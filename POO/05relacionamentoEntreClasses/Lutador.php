<?php
class Lutador
{
  // Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  // metodos
  public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
  {
    $this->setNome($nome);
    $this->setNacionalidade($nacionalidade);
    $this->setIdade($idade);
    $this->setAltura($altura);
    $this->setPeso($peso);
    $this->setVitoria($vitorias);
    $this->setDerrotas($derrotas);
    $this->setEmpates($empates);
  }

  public function apresentar()
  {
    echo "---------------------------------------";
    echo "<p>Lutador: {$this->getNome()}</p>";
    echo "<p>Origem: {$this->getNacionalidade()}</p>";
    echo "<p>{$this->getIdade()} amos</p>";
    echo "<p>{$this->getAltura()} m de altura</p>";
    echo "<p>Pesando: {$this->getPeso()}</p>";
    echo "<p>Ganhou: {$this->getVitorias()}</p>";
    echo "<p>Perdeu: {$this->getDerrotas()}</p>";
    echo "<p>Empatou: {$this->getEmpates()}</p>";
    echo "---------------------------------------<br>";
  }

  public function status()
  {
    echo "---------------------------------------";
    echo "<p>{$this->getNome()} é um {$this->getCategoria()}</p>";
    echo "<p>{$this->getVitorias()} vitórias</p>";
    echo "<p>{$this->getDerrotas()} derrotas</p>";
    echo "<p>{$this->getEmpates()} empates</p>";
    echo "---------------------------------------";
  }

  public function ganharLuta()
  {
    $this->setVitoria($this->getVitorias() + 1);
  }

  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }

  private function getNome()
  {
    return $this->nome;
  }

  private function setNome($nome)
  {
    $this->nome = $nome;
  }

  private function getNacionalidade()
  {
    return $this->nacionalidade;
  }

  private function setNacionalidade($nacionalidade)
  {
    $this->nacionalidade = $nacionalidade;
  }

  private function getIdade()
  {
    return $this->idade;
  }

  private function setIdade($idade)
  {
    $this->idade = $idade;
  }

  private function getAltura()
  {
    return $this->altura;
  }

  private function setAltura($altura)
  {
    $this->altura = $altura;
  }

  private function getPeso()
  {
    return $this->peso;
  }

  private function setPeso($peso)
  {
    $this->peso = $peso;
    $this->setCategoria();
  }

  private function getCategoria()
  {
    return $this->categoria;
  }

  private function setCategoria()
  {
    if ($this->peso < 52.2) {
      $this->categoria = "Invalido.";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Peso Leve.";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Peso Medio.";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Peso Pesado";
    } else {
      $this->categoria = "Invalido";
    }
  }

  private function getVitorias()
  {
    return $this->vitorias;
  }

  private function setVitoria($vitorias)
  {
    $this->vitorias = $vitorias;
  }

  private function getDerrotas()
  {
    return $this->derrotas;
  }

  private function setDerrotas($derrotas)
  {
    $this->derrotas = $derrotas;
  }

  private function getEmpates()
  {
    return $this->empates;
  }

  private function setEmpates($empates)
  {
    $this->empates = $empates;
  }
}
