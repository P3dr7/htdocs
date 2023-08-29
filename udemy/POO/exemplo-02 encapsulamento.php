<?php 

class Pessoa{
    public $nome="Rasmus Rendovki";
    protected $idade= 48;
    private $senha = "12345";

    public function verDados(){
        echo $this ->nome . "<br/>";
        echo $this ->idade . "<br/>";
        echo $this -> senha."<br/>";
    }


}

class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this)."<br/>";
        echo $this ->nome . "<br/>";
        echo $this ->idade . "<br/>";
        }
}

$objeto = new programador();
//echo $objeto ->nome . "<br/>";

echo $objeto->verDados();
?>