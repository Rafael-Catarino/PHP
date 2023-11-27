<?php
class ContaBanco
{
  public $numConta;
  protected $tipo;
  private $nomeDono;
  private $saldo;
  private $status;

  public function __construct()
  {
    $this->setSaldo(0);
    $this->setStatus(false);
  }

  public function getNumConta()
  {
    return $this->numConta;
  }

  public function setNumConta($numConta)
  {
    $this->numConta = $numConta;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function getNomeDono()
  {
    return $this->nomeDono;
  }

  public function setNomeDono($nomeDono)
  {
    $this->nomeDono = $nomeDono;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function setSaldo($valor)
  {
    $this->saldo = $valor;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function abrirConta($tipo)
  {
    $this->setTipo($tipo);

    if ($tipo == "CC") {
      $this->setSaldo(50);
    } elseif ($tipo == "CP") {
      $this->setSaldo(150);
    }

    $this->setStatus(true);
  }

  public function fecharConta()
  {
    if ($this->getSaldo() == 0) {
      $this->setStatus(false);
      echo "<p>Conta fechado com sucesso.</p>";
    } elseif ($this->getSaldo() > 0) {
      echo "<p>A conta não pode ser fechada, pôs tem dinheiro nela.</p>";
    } else {
      echo "<p>A conta não pode ser fechada, pôs tem débito nela.</p>";
    }
  }

  public function depositar($valor)
  {
    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $valor);
      echo "<p>Seu dinheiro foi depositado. Seu saldo é de: {$this->getSaldo()}</p>";
    } else {
      echo "<p>Sua conta está fechada. Favor abrir uma nova conta</p>";
    }
  }

  public function sacar($valor)
  {
    if ($this->getStatus()) {
      if ($this->getSaldo() >= $valor) {
        $this->setSaldo($this->getSaldo() - $valor);
        echo "<p>Seu dinheiro foi sacado. Seu saldo é de: {$this->getSaldo()}</p>";
      } else {
        echo "<p>Você não tem saldo suficiente para fazer esse saque. Seu saldo é de: {$this->getSaldo()}</p>";
      }
    } else {
      echo "<p>Sua conta está fechada. Favor abrir uma nova conta</p>";
    }
  }

  public function pagarMensal()
  {
    if ($this->getTipo() == "CC") {
      $v = 12;
    } else if ($this->getTipo() == "CP") {
      $v = 20;
    }

    if ($this->getStatus()) {
      if ($this->getSaldo() > $v) {
        $this->setSaldo($this->getSaldo() + $v);
      } else {
        echo "<p>Saldo insuficiente.</p>";
      }
    } else {
      echo "<p>Conta não foi aberta.</p>";
    }
  }
}
