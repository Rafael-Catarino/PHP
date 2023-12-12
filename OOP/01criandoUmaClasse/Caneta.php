<?php
class Caneta
{
  //Atributos
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  //metodos
  function rabiscar()
  {
    if ($this->tampada == true) {
      echo "ERRO! Caneta tapada, não posso rabiscar.";
    } else {
      echo "Estou rabiscando...";
    }
  }

  function tampar()
  {
    $this->tampada = true;
  }

  function destampar()
  {
    $this->tampada = false;
  }
}
