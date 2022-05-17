<?php

//error_reporting(0);
//ini_set(“display_errors”, 0 );

?>
<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>grupoprominas</title>
    <link rel="stylesheet" href="cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="sessao">
    <div class="container">
<form id="menuLogin" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input name="username" type="text" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Username"required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Password"required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Birthday</label>
        <input name="birthday" type="date" class="form-control form-input-style" id="exampleFormControlInput1"required>
    </div>
    <div class="group-button">
        <input name="registrar" type="submit" class="bnt-login" id="botao" value="Register">
    </div>

    <!--    Login:-->
    <!--    <input id="login" type="email">-->
    <!--    Password:-->
    <!--    <input id="password" type="password">-->
    <p class="cadastro">Possui login? Clique  <a href="http://leonardo.com:8080/wordpress/Prominas/index.php">Aqui</a>!</p>
</form>

<?php
include('conexao.php');
session_start();
error_reporting(0);
ini_set(“display_errors”, 0 );
if(!empty($_POST['registrar'])){
	$mail = $_POST['email'];
	$password =md5($_POST['password']);
	$username = $_POST['username'];
	$birthday = $_POST['birthday'];



	$consulta = "SELECT * FROM cadastro where email = '$mail'";
	$con = $mysqli->query($consulta) or die($mysqli->error);


	    while ( $res = $con->fetch_array() ) {
		    $validate = true;

	    }

//validaçao
	if($validate == true){
		echo "<div class='alert alert-danger' role='alert'>Este email ja esta cadastrado!</div>";
	}else{
		$inserir = "insert cadastro(username, email, password, birthday) value ('$username', '$mail', '$password', '$birthday')";
		if (mysqli_query($mysqli, $inserir)){
			echo "<div class='alert alert-success' role='alert'>Cadastro realizado com exito!</div>";
//			header("location: index.php");
		}
	}
}
?>
    </div>
</section>
</body>
</html>





