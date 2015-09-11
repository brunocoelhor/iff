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
  <tr>
    <td><img class="img-responsive img-circle img-aluno" src="<?php echo $dado['foto']; ?>" alt="<?php echo $dado['nome']; ?>" /></td>
    <td><?php echo $aluno['nome']; ?></td>
    <td><?php echo $dado['turma']; ?></td>
    <td><a href="#" class="btn btn-warning">Alterar</a></td>
    <td><a href="alunos_delete.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger">Excluir</a></td>
  </tr>
endforeach;
