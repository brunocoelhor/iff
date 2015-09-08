<?php


function conectar(){
  $conexao = mysqli_connect("localhost", "root", "1234", "bruno");
  return $conexao;
}

function listar($tabela){
  $conexao = conectar();
  $listar = mysqli_query($conexao, "select * from $tabela");
  //  $dados = mysqli_fetch_array($listar);
  // return $dados;
  while ($res = mysqli_fetch_assoc($listar)){
  				$data[] = $res;
  			}

  			return $data;
}
  include("header.php");

print_r(listar('alunos'));

$alunos = listar('alunos');

foreach($alunos as $aluno):
  echo $aluno['nome'];
endforeach;
