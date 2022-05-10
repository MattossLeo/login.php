<?php
session_start();
include("conexao2teste.php");
?>
<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD-Listar</title>
</head>
<body>
<a href="teste04.php">Listar</a>
<br>
<a href="teste.php">Cadastrar</a>
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

$qnt_result_pg =2;

$inicio = ($qnt_result_pg * $pagina)- $qnt_result_pg;

//EXIBIR A LISTAGEM
    $result = "SELECT * FROM teste LIMIT $inicio, $qnt_result_pg";

    $resultado = mysqli_query($mysqli, $result);
    while($row_user = mysqli_fetch_assoc($resultado)){
        echo "</br>".$row_user['id'];
        echo "</br>".$row_user['nome'];
        echo "</br>".$row_user['email']."<hr>";
    }
//QUANTIDADE DE PAGINAS
    $result_pg = "SELECT COUNT(id) AS num_result FROM teste";
    $resultado_pg = mysqli_query($mysqli, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    //LIMITAR A QUANTIDADE DE LINKS
    $max_links = 2;
    echo "<a href='teste04.php?pagina=1'>Primeira </a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina -1; $pag_ant++){
        if($pag_ant >= 1){
	        echo "<a href='teste04.php?pagina=$pag_ant'>$pag_ant </a>";
        }
    }
    echo "$pagina";
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
	    if($pag_dep <= $quantidade_pg){
		    echo "<a href='teste04.php?pagina=$pag_dep'>$pag_dep </a>";
	    }

    }

    echo "<a href='teste04.php?pagina=$quantidade_pg'>Ultima</a>"

?>

</body>
</html>