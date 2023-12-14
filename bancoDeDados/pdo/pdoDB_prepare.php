<?php
// O PDO permite que se for nescessário mudar o SGBD de um sistema não vai ser preciso modificar o codigo do sistema...
// Só vai precisar modificar o nome do SGBD de mysql para pgsql.


function connection()
{
  // Constantes para armazenamento das variáveis de conexão.
  define('HOST', '127.0.0.1');
  define('USER', 'root');
  define('PASSWORD', 'Carate12@');
  define('DBNAME', 'curso_php');
  //A porta é opcional.
  define('PORT', '3306');

  // Estabelecendo conexão com o SGBD msql.
  try {
    // A ordem não interfere na conexão;
    $connection = new PDO("mysql:host=" . HOST . ";user=" . USER . ";password=" . PASSWORD . ";dbname=" . DBNAME . ";port=" . PORT);
    echo "Banco conectado.";
  } catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
  } catch (Exception $e) {
    echo 'Erro generico ' . $e->getMessage();
  } finally {
    echo "<br> Fim conexão.";
  }
  return $connection;
}


// Estabelecando conexão com o SGBD Postgres.
// try {
//   $dsn = new PDO("pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
// } catch (PDOException $e) {
//   echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
// }


// --------------- cria uma tabela se não tiver ---------------
function createTable()
{
  $connection = connection();
  $res = $connection->prepare(
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

//createTable();

// --------------- Insert ---------------
function insertPerson($nome, $tel, $email)
{
  $connection = connection();
  $res = $connection->prepare("INSERT INTO pessoa(nome, telefone, email) VALUE (:n, :t, :e)");
  $res->bindValue(":n", $nome);
  $res->bindValue(":t", $tel);
  $res->bindValue(":e", $email);
  $res->execute();
}

//insertPerson("Rafael", "000000000", "rafael@gmail.com");

//-------------- Delete --------------
function deletePerson($id)
{
  $connection = connection();
  $res = $connection->prepare("DELETE FROM pessoa WHERE id = :id");
  $res->bindValue(":id", $id);
  $res->execute();
}

//deletePerson(2);

// -------------- Update --------------
function updatePerson($em, $id, $n, $tel)
{
  $connection = connection();
  $res = $connection->prepare("UPDATE pessoa set nome = :n, telefone = :tel, email = :e WHERE id = :id");
  $res->bindValue(":e", "$em");
  $res->bindValue(":id", "$id");
  $res->bindValue(":n", "$n");
  $res->bindValue(":tel", "$tel");
  $res->execute();
}

//updatePerson("zizi@gmail.com", 4, "Zizi", 777777777);

// ------------- Select uma pessoa --------------
function selectOnePerson($id)
{
  $connection = connection();
  // retorna a linha do banco que tem o id.
  $res = $connection->prepare("SELECT * FROM pessoa WHERE id = :id");
  $res->bindValue(":id", $id);
  $res->execute();

  //função que transforma a informação que vem do banco de dados em um array.
  $resultado = $res->fetch(PDO::FETCH_ASSOC);
  // Usada quando eu estou procurando por apenas uma unica informação(linha) no banco de dados.
  foreach ($resultado as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
}

//selectOnePerson(5);

// ------------- Select todas as pessoas --------------
function selectPerson()
{
  $connection = connection();
  $res = $connection->prepare("SELECT * FROM pessoa ORDER BY nome"); // desse jeito ele vai ordenar por ordem alfabetica.
  $res->execute();

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

selectPerson();
