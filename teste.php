<?php
session_start();
?>
<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD-Criar</title>
</head>
<body>
<a href="teste.php">Cadastrar</a>
<br>
<a href="teste04.php">Listar</a>
<h1>Cadastrar Usuário</h1>
<?php
if (isset( $_SESSION['msg']))
    echo  $_SESSION['msg'];
    unset($_SESSION['msg']);
?>
<form method="post" action="teste03.php">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Seu nome...">
    </br></br>
    <label>Email:</label>
    <input type="email" name="email" placeholder="Seu email...">
    </br></br>
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>