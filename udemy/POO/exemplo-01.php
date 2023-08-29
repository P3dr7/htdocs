<?php

class Pessoa{

    public $nome;//atributo
    
    public function falar(){//metodo

        return "meu nome e ".$this->nome;

    }
}
$pedro = new Pessoa();
$pedro ->nome="Pedro Henrique";
echo $pedro ->falar();
?>