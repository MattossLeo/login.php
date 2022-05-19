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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
        Menu
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdown">
        <li><a class="dropdown-item" href="painel.php">Minha Conta</a></li>
        <li><a class="dropdown-item" href="listar.php">Listar</a></li>
        <li><a class="dropdown-item" href="editar.php">Editar</a></li>
    </ul>
</div>
Olá, <?php echo  $_SESSION['email'];?>! Seja bem vindo ao Grupo Prominas.
</br>
Antes de começarmos, gostariamos que preenchesse algumas informações.
</br>
<a href="logout.php">Logout</a>
</body>
</html>