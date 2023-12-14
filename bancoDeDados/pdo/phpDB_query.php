<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', 'Carate12@');
define('DBNAME', 'curso_php');
//define('PORT', '3306');

// --------------- conexão ---------------
function connection()
{
  try {
    $connection = new PDO("mysql:host=" . HOST . ";user=" . USER . ";password=" . PASSWORD . ";dbname=" . DBNAME);
  } catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
  } catch (Exception $e) {
    echo 'Erro generico ' . $e->getMessage();
  }

  return $connection;
}

// --------------- cria uma tabela se não tiver --------------- 
function createTable()
{
  $connection = Connection();
  $connection->query(
    "CREATE TABLE IF NOT EXISTS pessoa(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30),
  telefone VARCHAR(30),
  email VARCHAR(30),
  PRIMARY KEY (id)
  )"
  );
}

//createTable();

// --------------- Insert ---------------
function insertPerson($nome, $tel, $email)
{
  $connection = connection();
  $connection->query("INSERT INTO pessoa(nome, telefone, email) VALUE ('$nome', '$tel', '$email')");
}

insertPerson("Rafael", 999999999, "rafael@gmail.com");


//-------------- Delete --------------
function deletePerson($id)
{
  $connection = connection();
  $connection->query("DELETE FROM pessoa WHERE id = '$id'");
}

//deletePerson(1);

// -------------- Update --------------
function updatePerson($em, $id, $no, $tel)
{
  $connection = connection();
  $connection->query("UPDATE pessoa set email = '$em', nome = '$no', telefone = '$tel' WHERE id = '$id'");
}

//updatePerson("zizi@gmail.com", 4, "Zizi", 777777777);

function selectOnePerson($id)
{
  $connection = connection();
  $res = $connection->query("SELECT * FROM pessoa WHERE id = '$id'");

  //função que transforma a informação que vem do banco de dados em um array.
  $result = $res->fetch(PDO::FETCH_ASSOC);
  // Usada quando eu estou procurando por apenas uma unica informação(linha) no banco de dados.
  foreach ($result as $key => $value) {
    if ($key != "id") {
      echo $key . ": " . $value . " | ";
    }
  }
}

// selectOnePerson(5);


function selectPerson()
{
  $connection = connection();
  $res = $connection->query("SELECT * FROM pessoa ORDER BY id DESC"); //Desse jeiro ele vai ordenar por id decrescent.

  $result = $res->fetchAll(PDO::FETCH_ASSOC);
  for ($i = 0; $i < count($result); $i++) {
    echo "<br>";
    foreach ($result[$i] as $key => $value) {
      if ($key != "id") {
        echo $key . " = " . $value . " | ";
      }
    }
  }
}

SelectPerson();
