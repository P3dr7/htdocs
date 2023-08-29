<?php   

class Endereco{
    private $logadouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this -> logadouro=$a;
        $this -> numero=$b;
        $this -> cidade=$c;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

    
}

$meuEndenreco = new Endereco("Rua Carrancho", "397", "Arapongas");
var_dump($meuEndenreco);

unset($meuEndenreco);

?>