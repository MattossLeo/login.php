<?php
session_start();
?>
<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD-Criar</title>
    <link rel="stylesheet" href="edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="cadastro">
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
</section>
<h1 class="titulo">Editar Usuário</h1>
<?php
if (isset( $_SESSION['msg']))
    echo  $_SESSION['msg'];
unset($_SESSION['msg']);
?>
<form class="editar" method="post" action="process.php">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Seu nome...">
    </br></br>
    <label>Email:</label>
    <input type="email" name="email" placeholder="Seu email...">
    </br></br>
    <input type="submit" value="Editar">
</form>

</body>
</html>