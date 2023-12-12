<?php
require "Carro.php";

$car1 = new Carro(2, "EcoSport");
$car1->id();
$car1->ligaCarro();

echo "<hr>";

$car2 = new Carro(1, "Gol");
$car2->id();
