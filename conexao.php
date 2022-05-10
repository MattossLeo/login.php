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



$mail = $_POST['email'];
$password =md5($_POST['password']);
$username = $_POST['username'];
$birthday = $_POST['birthday'];



$consulta = "SELECT * FROM cadastro where email = '$mail'";
$con = $mysqli->query($consulta) or die($mysqli->error);
while ($res = $con->fetch_array()) {
    $validate = true;

}

if($validate == true){
    echo "</br> este esmail ja esta cadastrado!";
}else{
    echo "</br>  vamosa cadastrar este e-mail agora !!!";
    $inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
    if (mysqli_query($mysqli, $inserir)){
       echo "<script>alert('Cadastro realizado com exito')</script>";
       //header("location: index.php");
    }else{
        echo "</br> erro ao cadastrar seu email!";
    }
}






























//Recebendo dados do cadastro
//$mail = $_POST['email'];
//$password =md5($_POST['password']);
//$username = $_POST['username'];
//$birthday = $_POST['birthday'];
//

//listagem de dados


// Verificação de dados &&  inserir dados no database

//$query = "SELECT * FROM cadastro  WHERE email = '$mail' AND  username = '$username' ";
//$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
//$consulta = $mysqli->query($query);



//$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";

//if (mysqli_query($mysqli, $inserir)){
//   echo "<script>alert('Cadastro realizado com exito')</script>";
//   header("location: index.php");
//}else{
//    echo "erro";
//}
