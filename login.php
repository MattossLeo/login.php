<?php
include("conexao.php");
session_start();
//variaveis do campo do login

$mail = $_POST['email'] ;
$password = $_POST['password'];
//verificar os dados dos campos email e password

if(empty($_POST['email']) || empty($_POST['password'])){
	header('Location: index.php');
	exit();
}
echo "oi";
$query = "SELECT * FROM cadastro where email= '{$mail}' AND password = md5('{$password}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if ( $row == 1 ) {
	$_SESSION['email'] = $mail;
	header('Location: painel.php');
}
else {
	header( 'Location : index.php' );-
	exit();
}

























































//$access = array(
//    [
//        'user'=> 'warley',
//        'pass' => '1237456'
//    ],
//    [
//        'user' => 'leo',
//        'pass' => '123'
//    ],
//    [
//        'user' => 'douglas',
//        'pass' => '321654'
//    ],
//    [
//        'user' => 'thayrone',
//        'pass' => '159753'
//    ],
//    [
//        'user' => 'igor',
//        'pass' => '357951'
//    ],
//    [
//        'user' => 'arthur',
//        'pass' => '987654'
//    ],
//    [
//        'user' => 'Bulba',
//        'pass' => 'ssauro',
//        'mail' => 'bulbassaurograss@pokemon.com'
//    ],
//
//
//);

//procura dentro do array o usuario digitado no formulario
//foreach ($access as $key=> $username){
//    if ($username['user'] == $mail && $username['pass'] == $password){
//        $validar_login = array('user'=> $username['user'], 'senha' => $username['pass']);
//    }
//
//}
////validar login do usuario
//
//if($validar_login ==true){
//    echo "login realizado";
//}else{
//    header("Location: index.php");
//}