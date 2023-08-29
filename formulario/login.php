<?php
    session_start();
    $firstname = addslashes($_POST['first-name']);
    $lastname = addslashes($_POST['last-name']);
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['new-password']);
    $age = addslashes($_POST['age']);
    $bio = addslashes($_POST['bio']);

    
    
    $sql = "INSERT INTO form (first_name,last_name,email,password,account,age,bio)
            VALUES ($firstname,$lastname,$email,$password,$age,$bio)";

    include('config.php');
    echo "$firstname,$lastname,$email,$password,$age,$bio"
?>