<?php
session_start();
include('conexao.php');
//barrandop falso login

if (!$_SESSION['email']){
    header('Location:index.php');
}
?>

<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD-Criar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="create.css">
</head>
<body>
<header>
    Olá, <?php echo  $_SESSION['email'];?>! Seja bem vindo ao Grupo Prominas.
    </br>
    Antes de começarmos, gostariamos que preenchesse algumas informações.
    </br>
    <a href="logout.php">Logout</a>
</header>
<section class="cadastro">
    <div class="container">
        <div class="links">
            <a class="cadastrar" href="index.php">Cadastrar</a>
            <a class="listar" href="listar.php">Listar</a>
            <a class="editar" href="editar.php">Editar</a>
        </div>

        <h1>Cadastrar Usuário</h1>
        <?php
        if (isset( $_SESSION['msg']))
            echo  $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
        <form method="post" action="criar.php">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Seu nome...">
            </br></br>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Seu email...">
            </br></br>
            <input type="submit" value="Cadastrar">
        </form>
        </form>
    </div>
</section>





</body>
</html>