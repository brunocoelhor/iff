<?php

require("conexao.php");

$nome = mysql_escape_string($_POST['nome']);
$foto = mysql_escape_string($_POST['foto']);
$turma_id = mysql_escape_string($_POST['turma_id']);

$query = "INSERT INTO  alunos (nome ,foto ,turma_id) VALUES ('$nome', '$foto', '$turma_id');";


//echo $query;

$inserir = mysqli_query($conexao, $query);
if ($inserir) {
echo "Aluno inserido com sucesso";
header("Location: alunos_read.php");
} else {
  echo "Aluno não foi inserido sucesso";
echo mysql_error();
}
