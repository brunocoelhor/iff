<?php

include("conexao.php");



$nome = mysql_escape_string($nome);
$email = mysql_escape_string($email);
$email = mysql_escape_string($email);

$query = "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('".$nome."', '".$email."', '".$senha."')";
// Executa a query
$inserir = mysql_query($query);
if ($inserir) {
echo "Usuário cadastrado com sucesso!";
} else {
echo "Não foi possível cadastrar o usuário.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}
