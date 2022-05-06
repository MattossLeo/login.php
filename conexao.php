<?php
//definiçao das configuraçoes da conexao.

$host = "localhost";
$usuario = "root";
$senha ="";
$bd ="cadastro";

//conexao com o banco de dados

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli -> connect_errno){
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}else{
    echo "Conexao realizada com sucesso!!";
}
//Recebendo dados do cadastro
$mail = $_POST['email'];
$password =md5($_POST['password']);
$username = $_POST['username'];
$birthday = $_POST['birthday'];


//listagem de dados
$consulta = "SELECT * FROM cadastro";
$con = $mysqli->query($consulta) or die($mysqli->error);
$dado = $con->fetch_array();
$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
$query = "SELECT * FROM cadastro  WHERE email = '$mail' AND  username = '$username' ";
$consulta = $mysqli->query($query);
while ($res = $consulta->fetch_array()) {
    echo "<pre>";
    print_r($res);
    echo "<pre>";

    if($consulta == true){
        echo "<script> alert('Voce ja possui login com esse email.')</script>";
    }
}




// inserir dados no database

//$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";

//if (mysqli_query($mysqli, $inserir)){
//   echo "<script>alert('Cadastro realizado com exito')</script>";
//   header("location: index.php");
//}else{
//    echo "erro";
//}
