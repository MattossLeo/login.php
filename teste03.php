<?php
 session_start();
include_once("conexao2teste.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$dado = array($nome, $mail);



$result = "INSERT INTO teste (nome, email, creat) VALUE ('$nome', '$mail', NOW())";
$resultado = mysqli_query($mysqli, $result);

if(mysqli_insert_id($mysqli)){
    $_SESSION['msg'] ='Usuario cadastrado com sucesso';
    header("Location: teste.php");
}else{
    header("Location: teste.php");
}