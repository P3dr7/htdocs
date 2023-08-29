<?php

class Documento {

    private $numero;
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this ->numero=$n;
    }

}

class cpf extends Documento{
    public function validar():bool
    {
        $numeroCPF = $this->getNumero();
        //validacao cpf
        return true;
    }
}
$doc = new cpf();

$doc->setNumero("12332109800");

$doc->validar();

if($doc->validar() == true){
    echo "Validacao correta"."<br/>";
    echo $doc->getNumero();

}

?>
