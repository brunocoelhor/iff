<?php

include("conexao.php");

$id = mysql_escape_string($_POST['id']);
$nome = mysql_escape_string($_POST['nome']);
$foto = mysql_escape_string($_POST['foto']);
$turma_id = mysql_escape_string($_POST['turma_id']);


$query = "UPDATE alunos SET nome = '".$nome."', foto = '".$foto."' WHERE (id = ".$id.")";

$atualiza = mysqli_query($conexao, $query);
if ($atualiza) {
echo "O aluno foi atualizado com sucesso!";
header("Location: alunos_read.php");
} else {
echo "Não foi possível atualizar .";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysqli_error();
}
