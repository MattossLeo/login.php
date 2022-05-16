<?php
session_start();

//barrandop falso login

if (!$_SESSION['email']){
	header('Location:index.php');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
Olá, <?php echo  $_SESSION['email'];?>! Seja bem vindo ao Grupo Prominas.
</br>
Antes de começarmos, gostariamos que preenchesse algumas informações.
</br>
<a href="logout.php">Logout</a>
</body>
</html>