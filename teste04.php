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

$inicio =($qnt_result_pg * $pagina)- $qnt_result_pg;

//EXIBIR A LISTAGEM
    $result = "SELECT * FROM teste LIMIT $inicio, $qnt_result_pg";
    $resultado = mysqli_query($mysqli, $result);
    while($row_user = mysqli_fetch_assoc($resultado)){
        echo "</br>".$row_user['id'];
        echo "</br>".$row_user['nome'];
        echo "</br>".$row_user['email']."<hr>";
    }

?>

</body>
</html>