<?php
//definiçao das configuraçoes da co

$host = "localhost";
$usuario = "root";
$senha ="";
$bd ="te03ste";

//conexao com o banco de dados

$mysqli = new mysqli($host, $usuario, $senha, $bd);
if ($mysqli -> connect_errno){
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
<<<<<<< HEAD
}

//Cadastro do usuario


//Recebendo dados do cadastro
//$mail = $_POST['email'];
//$password =md5($_POST['password']);
//$username = $_POST['username'];
//$birthday = $_POST['birthday'];


//listagem de dados


// Verificação de dados &&  inserir dados no database
//
//$query = "SELECT * FROM cadastro  WHERE email = '$mail' AND  username = '$username' ";
//$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
//$consulta = $mysqli->query($query);
//
//
//
//$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
//
//if (mysqli_query($mysqli, $inserir)){
//   echo "<script>alert('Cadastro realizado com exito')</script>";
//
//}else{
//    echo "erro";
//}
=======
}else{}
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995
