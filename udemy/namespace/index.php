<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro;
    $cad->setNome("Pedro Ferri");
    $cad->setEmail("Blablabla@unifil.br");
    $cad->setSenha("12345");

    $cad->registrarVenda();

?>