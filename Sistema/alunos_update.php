<?php

include("conexao.php");



$query = "UPDATE alunos SET nome = '".$nome."', foto = '".$foto."' WHERE (`id` = ".$id.")";

$atualiza = mysqli_query($query);
if ($atualiza) {
echo "A notícia foi atualizada com sucesso!";
} else {
echo "Não foi possível atualizar as notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}
