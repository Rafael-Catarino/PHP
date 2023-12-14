<?php
require_once "DataBase.php";
$d = new DataBase('127.0.0.1', 'root', '', 'curso_php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
  <?php
  // $d->insertPerson("Juvenal", 999999999, "juvenal@gmail.com");
  // $d->deletePerson(13);
  // $d->updatePerson("Milena@gamil.com", 12, "Milena", 888888888);
  $res = $d->selectOnePerson(7);
  var_dump($res);

  ?>
</pre>
</body>

</html>