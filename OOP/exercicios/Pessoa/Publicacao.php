<?php
interface Publicacao
{
  public function abrir();
  public function fechar();
  public function folear($pagina);
  public function avançarPaginas();
  public function voltarPaginas();
}
