<?php
$mail = $_POST['email'];
$password = $_POST['password'];



//simulação usuario db

$dbusers = "leonardosousamattos@gmail.com";
$dbpass = "papa102030";
//if($dbusers == $mail && $dbpass == $password){
//    echo "</br>Login realizado com sucesso!!";
//} else{
//    header("Location: index.php");
//}



$access = array(
    [
        'user'=> 'warley',
        'pass' => '1237456'
    ],
    [
        'user' => 'leo',
        'pass' => '123'
    ],
    [
        'user' => 'douglas',
        'pass' => '321654'
    ],
    [
        'user' => 'thayrone',
        'pass' => '159753'
    ],
    [
        'user' => 'igor',
        'pass' => '357951'
    ],
    [
        'user' => 'arthur',
        'pass' => '987654'
    ],
    [
        'user' => 'Bulba',
        'pass' => 'ssauro',
        'mail' => 'bulbassaurograss@pokemon.com'
    ],


);

//procura dentro do array o usuario digitado no formulario
foreach ($access as $key=> $username){
    if ($username['user'] == $mail && $username['pass'] == $password){
        $validar_login = array('user'=> $username['user'], 'senha' => $username['pass']);
    }

}
//validar login do usuario

if($validar_login ==true){
    echo "login realizado";
}else{
    header("Location: index.php");
}