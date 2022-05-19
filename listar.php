<?php
session_start();
include("conexao.php");
?>
<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD-Listar</title>
    <link rel="stylesheet" href="listar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="cadastro">
<<<<<<< HEAD
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdown">
            <li><a class="dropdown-item" href="painel.php">Minha Conta</a></li>
            <li><a class="dropdown-item" href="listar.php">Listar</a></li>
            <li><a class="dropdown-item" href="editar.php">Editar</a></li>
        </ul>
=======
    <div class="container">
        <div class="links">
            <a class="cadastrar" href="create.php">Cadastrar</a>
            <a class="listar" href="listar.php">Listar</a>
            <a class="editar" href="editar.php">Editar</a>
        </div>
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995
    </div>
</section>
<h1>Listar Usuário</h1>
<!--PUXAR A LISTAGEM-->
<?php
if (isset( $_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
//PAGINAÇÃO/QUANTIDADE DE ITENS NA PAGINA/VISUALIZAÇÃO
$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

<<<<<<< HEAD
$qnt_result_pg =4;
=======
$qnt_result_pg =2;
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995

$inicio = ($qnt_result_pg * $pagina)- $qnt_result_pg;
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
<<<<<<< HEAD
        <th scope="col">Aniversario</th>
=======
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995
    </tr>
    </thead>
    <tbody>
<?php
//EXIBIR A LISTAGEM
<<<<<<< HEAD
$result = "SELECT * FROM cadastro LIMIT $inicio, $qnt_result_pg";
=======
$result = "SELECT * FROM teste LIMIT $inicio, $qnt_result_pg";
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995

$resultado = mysqli_query($mysqli, $result);
while($row_user = mysqli_fetch_assoc($resultado)){
?>
    <tr>
        <th scope="row"><?php echo $row_user['id']; ?></th>
<<<<<<< HEAD
        <td><?php echo $row_user['username']; ?></td>
        <td><?php echo $row_user['email']; ?></td>
        <td><?php echo $row_user['birthday']; ?></td>
=======
        <td><?php echo $row_user['nome']; ?></td>
        <td><?php echo $row_user['email']; ?></td>
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995

    </tr>
<?php
//    echo "</br>".$row_user['id'];
//    echo "</br>".$row_user['nome'];
//    echo "</br>".$row_user['email']."<hr>";
}
?>
    </tbody>
</table>
<?php

//QUANTIDADE DE PAGINAS
<<<<<<< HEAD
$result_pg = "SELECT COUNT(id) AS num_result FROM cadastro";
=======
$result_pg = "SELECT COUNT(id) AS num_result FROM teste";
>>>>>>> 906b3e10848263ec6c87cb395e1c2fa9e2814995
$resultado_pg = mysqli_query($mysqli, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
?>
<?php
//LIMITAR A QUANTIDADE DE LINKS
$max_links = 2;
?>
<div class="paginação">
<?php
echo "<a href='listar.php?pagina=1'>Primeira </a>";
for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina -1; $pag_ant++){
    if($pag_ant >= 1){
        echo "<a class='ant' href='listar.php?pagina=$pag_ant'>$pag_ant </a>";
    }
}
echo "$pagina";
for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
    if($pag_dep <= $quantidade_pg){
        echo "<a class='num' href='listar.php?pagina=$pag_dep'>$pag_dep </a>";
    }

}

echo "<a class='dep' href='listar.php?pagina=$quantidade_pg'>Ultima</a>"
?>
</div>

</body>
</html>