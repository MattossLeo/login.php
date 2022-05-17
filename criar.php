<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$dado = array($nome, $mail);



$result = "INSERT INTO teste (nome, email, create_data) VALUE ('$nome', '$mail', NOW())";
$resultado = mysqli_query($mysqli, $result);

if(mysqli_insert_id($mysqli)){
    $_SESSION['msg'] ='Usuario cadastrado com sucesso';
    header("Location: create.php");
}else{
    header("Location: index.php");
}