<?php
    $hostname = 'Localhost';
    $usuario = 'root';
    $senha = '';
    $bancodedados = 'formulario';

    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    } else 
    echo "Conectado ao bando de dados";
    
     $sql = "INSERT INTO form (id,first_name,last_name,email,password,account,age,bio)
     VALUES ('','$firstname','$lastname','$email','$password','$age','$bio')";
if (mysqli_query($mysqli, $sql)) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}
?>