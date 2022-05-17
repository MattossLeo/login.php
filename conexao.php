<?php
//definiçao das configuraçoes da conexao.

$host = "localhost";
$usuario = "root";
$senha ="";
$bd ="te03ste";

//conexao com o banco de dados

$mysqli = new mysqli($host, $usuario, $senha, $bd);
if ($mysqli -> connect_errno){
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}else{}