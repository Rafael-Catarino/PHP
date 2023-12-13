<?php
// A outra forma de conexão é mais recomendada por da para se conectar com qualquer outro SGBD.
// Nessa conexão vc teria que trocar todo o codigo de conexão.

// posso usar tanto o variavel como constante nesse caso.
// $hostname = "localhost";
// $usuario = "root";
// $senha = "Carate12@";
// $bancodedados = "curso_php";

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', 'Carate12@');
define('DBNAME', 'curso_php');
define("PORT", "3306");

try {
  $connection = mysqli_connect(HOST, USER, PASSWORD, DBNAME, PORT);
  echo "Banco conectado.";
} catch (Exception $e) {
  echo "Falha ao conectar: " . $e->getMessage();
} finally {
  echo "<br> Fim conexão.";
}

$res = $connection->query("INSERT INTO pessoa(nome, telefone, email) VALUE ('heuiw', '342786', 'kdshaj@')");
