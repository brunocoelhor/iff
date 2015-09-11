<?php
require("conexao.php");
$id = mysql_escape_string($_GET['id']);

//echo $id;

$query = "DELETE FROM alunos WHERE (id = '".$id."')";
// Executa a query
$deletar = mysqli_query($conexao, $query);
if ($deletar) {
echo "Os Alunos foram deletados com sucesso!";
} else {
echo "Não foi possível deletar os alunos, tente novamente.";
echo "Dados sobre o erro:" . mysql_error();
}
