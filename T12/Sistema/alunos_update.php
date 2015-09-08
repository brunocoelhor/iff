<?php

include("conexao.php");

$id = 3;

$titulo = 'Vandalismo mata 10 mil árvores por ano no Rio de Janeiro';


$titulo = mysql_escape_string($titulo);

$query = "UPDATE alunos SET nome = '".$nome."', foto = '".$foto."' WHERE (`id` = ".$id.")";

$atualiza = mysqli_query($query);
if ($atualiza) {
echo "A notícia foi atualizada com sucesso!";
} else {
echo "Não foi possível atualizar as notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}
