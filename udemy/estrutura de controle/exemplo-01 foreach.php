<?php

$meses = array(
    "Janeiro", "Fevereiro","Marco",
    "abril", "Maio","junho",
    "julho", "Agosto","setembro",
    "outubro", "novembro","dezembro"
);

foreach ($meses as $index => $mes) {
    echo "Indice: ". $index."<br>";
    echo "O mes e: ". $mes. "<br>";
    echo "<br>";
}

?>