<?php

$nome = "pedro ferri ";
//deixa em letras maisculas
$nome = strtoupper($nome);
echo $nome;
echo "<br>";

//converte tudo pra minusculo
$nome = strtolower($nome);
echo $nome;
echo "<br>";

//deixa apenas as primeiras letras em maiusculos de cada palavras
$nome = ucwords($nome);
echo $nome;
echo "<br>";

//deixa apenas a primeira letra da frase maiscula
$nome = ucfirst($nome);
echo $nome;
echo "<br>";
?>