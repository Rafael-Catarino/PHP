<?php
class DataBase
{
  private $connectBataBase;

  /*---------- Fazendo a Conexão ---------- */
  public function __construct($localhost, $user, $password, $dbname)
  {
    try {
      $this->connectBataBase = new PDO("mysql:host=" . $localhost . ";user=" . $user . ";password=" . $password . ";dbname=" . $dbname);
    } catch (PDOException $e) {
      echo "A conexão falhou e retornou a mensagem de erro: " . $e->getMessage();
    }
  }

  /*---------- Criando a Tabela se não tiver ----------*/
  public function createTable()
  {
    $res = $this->connectBataBase->prepare(
      "CREATE TABLE IF NOT EXISTS pessoa(
      id INT NOT NULL AUTO_INCREMENT,
      nome VARCHAR(30),
      telefone VARCHAR(30),
      email VARCHAR(30),
      PRIMARY KEY (id)
      )"
    );
    $res->execute();
  }

  /*---------- Inserindo Dados ----------*/
  public function insertPerson($nome, $tel, $email)
  {
    $res = $this->connectBataBase->prepare("INSERT INTO pessoa(nome, telefone, email) VALUE (:n, :t, :e)");
    $res->bindValue(":n", $nome);
    $res->bindValue(":t", $tel);
    $res->bindValue(":e", $email);
    $res->execute();
  }


  /*---------- Deletando Dados ----------*/
  public function deletePerson($id)
  {
    $res = $this->connectBataBase->prepare("DELETE FROM pessoa WHERE id = :id");
    $res->bindValue(":id", $id);
    $res->execute();
  }

  /*---------- Modificando Dados ----------*/
  public function updatePerson($em, $id, $n, $tel)
  {
    $res = $this->connectBataBase->prepare("UPDATE pessoa set nome = :n, telefone = :tel, email = :e WHERE id = :id");
    $res->bindValue(":e", "$em");
    $res->bindValue(":id", "$id");
    $res->bindValue(":n", "$n");
    $res->bindValue(":tel", "$tel");
    $res->execute();
  }

  /*---------- Selecionando Dados ---------- */
  function selectOnePerson($id)
  {
    // retorna a linha do banco que tem o id.
    $res = $this->connectBataBase->prepare("SELECT * FROM pessoa WHERE id = :id");
    $res->bindValue(":id", $id);
    $res->execute();

    //função que transforma a informação que vem do banco de dados em um array.
    $resultado = $res->fetch(PDO::FETCH_ASSOC);
    // Usada quando eu estou procurando por apenas uma unica informação(linha) no banco de dados.
    foreach ($resultado as $key => $value) {
      echo $key . ": " . $value . "<br>";
    }
  }

  /*---------- Seleciona todos os Dados ----------*/
  function selectPerson()
  {
    $res = $this->connectBataBase->prepare("SELECT * FROM pessoa ORDER BY nome"); // desse jeito ele vai ordenar por ordem alfabetica.
    $res->execute();

    $result = $res->fetchAll(PDO::FETCH_ASSOC);
    for ($i = 0; $i < count($result); $i++) {
      echo "<br>";
      foreach ($result[$i] as $key => $value) {
        echo $key . " = " . $value . " | ";
      }
    }
  }
}
