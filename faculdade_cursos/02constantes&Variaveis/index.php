<?php
//em php uma variável é declarada com o $ no começo.
$numero1 = 10;
$numero2 = 20;
$texto = "Rafael";
$bool = false;

//Escrevendo os conteudos de uma variavel.
echo "Numero1 - $numero1 <br> Numero2 - $numero2 <br> $numero1 + $numero2 = " . $numero1 + $numero2 . "<br> Texto: $texto <br> Bool: $bool";

// constantes
define("nome", "Rafael");
define("pi", "3,14");

//Escrevendo os conteudos das constantes.
echo "<hr>";
echo "Nome: " . nome . "<br>" . "PI: " . pi;

//constante pré definida
echo "<hr>";
echo "Caminho para o arquivo:  " . __FILE__;
echo "<hr>";
echo "<br>" . "Versão do PHP: " . PHP_VERSION;
echo "<hr>";
echo "<br>" . "Diretorio: " . __DIR__;
echo "<hr>";
echo "<br>" . "Versão do Sistema Operacional:" . PHP_OS;