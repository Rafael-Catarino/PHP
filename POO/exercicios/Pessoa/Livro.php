<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totalPaginas;
  private $paginaAtual;
  private $aberto;
  private $leitor;

  public function __construct($titulo, $autor, $paginas, $leitor)
  {
    $this->setTitulo($titulo);
    $this->setAutor($autor);
    $this->setTotalPaginas($paginas);
    $this->setPaginaAtual(0);
    $this->setAberto(false);
    $this->setLeitor($leitor);
  }

  public function detalhes()
  {
    echo "<hr>Livro {$this->getTitulo()} Escrito por {$this->getAutor()}";
    echo "<br> {$this->getTotalPaginas()} Páginas";
    echo "<br> Sendo lido por: {$this->getLeitor()->getNome()}";
  }

  private function getTitulo()
  {
    return $this->titulo;
  }

  private function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  private function getAutor()
  {
    return $this->autor;
  }

  private function setAutor($autor)
  {
    $this->autor = $autor;
  }

  private function getTotalPaginas()
  {
    return $this->totalPaginas;
  }

  private function setTotalPaginas($totalPaginas)
  {
    $this->totalPaginas = $totalPaginas;
  }

  private function getPaginaAtual()
  {
    return $this->paginaAtual;
  }

  private function setPaginaAtual($paginaAtual)
  {
    $this->paginaAtual = $paginaAtual;
  }

  private function getAberto()
  {
    return $this->aberto;
  }

  private function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }

  private function getLeitor()
  {
    return $this->leitor;
  }

  private function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }


  public function abrir()
  {
    $this->setAberto(true);
  }

  public function fechar()
  {
    $this->setAberto(false);
  }

  public function folear($pagina)
  {
    if ($pagina > $this->getTotalPaginas()) {
      $this->setPaginaAtual(0);
    } else {
      $this->setPaginaAtual($pagina);
    }
  }

  public function avançarPaginas()
  {
    $this->setPaginaAtual($this->getPaginaAtual() + 1);
  }
  public function voltarPaginas()
  {
    $this->setPaginaAtual($this->getPaginaAtual() - 1);
  }
}
