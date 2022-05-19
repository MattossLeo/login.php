<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

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

$query = "SELECT * FROM cadastro where email= '{$mail}' AND password = md5('{$password}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if ( $row == 1 ) {
	$_SESSION['email'] = $mail;
	header('Location: listar.php');
}
else {
	$_SESSION['usuario_invalido'] = true;
    header( 'Location: index.php');
	exit();
}
?>

</body>
</html>






















































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