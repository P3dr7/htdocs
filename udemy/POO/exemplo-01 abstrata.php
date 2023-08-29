<?php

interface veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou ate ".$velocidade."Km/h";
    }

    public function freiar($velocidade){
        echo "O veiculo frenou ate ".$velocidade."Km/h";
    }
    
    public function trocarMarcha($marcha){
        echo "O veiculo de marcha ate a ".$marcha." Marcha";
    }
}

class DelRey extends Automovel{

    public function empurar(){

    }

}

$carro = new DelRey();
$carro->acelerar(200);

?>