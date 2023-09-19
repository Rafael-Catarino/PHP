<?php
/*
O include é usado para incluir um arquivo(uma instrução) em um outro aquivo ou em uma pagina php.Pode ser incluido varios tipos de arquivos:testo, imagem...
*/
include "configuracao.php";

echo "<hr>";

/* 
Já o require é usado para arquivos importantes como banco de dados, pos ele não executa o resto da pagina.Ele é igual ao include porém se o arquivo não estiver disponivel, ele dá um error que bloqueia a pagina.
*/
require "sql.php";

echo "<h1> Olá, Tudo bem!</h1>";
