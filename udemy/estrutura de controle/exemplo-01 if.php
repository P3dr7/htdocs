<?php

$qualASuaIdade = 125;
$idadeCrianca= 12;
$idadeMaior= 18;
$idadeMelhor= 65;

if($qualASuaIdade < $idadeCrianca){
    echo "crianca";

} else if($qualASuaIdade < $idadeMaior){
    echo "Adolecente";
} else if($qualASuaIdade < $idadeMelhor){
    echo " Adulto";
} else {
    echo "idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"maior de idade";

?>