<?php 

$frase = "A repeticao e a mae da retencao";

$palavra = "mae";

// mostra o local onde esta na variavel 
$q = strpos($frase, $palavra);

//mostra o que tem antes de onde voce mandou, na variavel q vai ate 16
// entao vai mostrar "a repeticao e a"
// o 0 e de onde vc quer comecar a procurar
$texto = substr($frase, 0, $q + strlen($palavra));

var_dump($texto);

echo "<br>";

//mostra o que vem depois da onde vc pede 
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
?>