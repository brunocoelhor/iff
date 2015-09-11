<?php
  require("conexao.php");
  include("header.php");


$query = "SELECT * FROM alunos";

$usuarios = mysqli_query($conexao, $query);

print_r($usuarios);
?>
<a href="alunos_form_create.php" class="btn btn-success pull-right">Cadastrar</a>

<hr>

<table class="table table-striped">
  <tr class="text-center">
    <th>Foto</th>
    <th>Nome</th>
    <th>Turma</th>
    <th>Atualizar</th>
    <th>Deletar</th>
  </tr>
  <?php
  while ($dado =  mysqli_fetch_array($usuarios)):?>
    <tr>
      <td><img class="img-responsive img-circle img-aluno" src="<?php echo $dado['foto']; ?>" alt="<?php echo $dado['nome']; ?>" /></td>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['turma_id']; ?></td>
      <td><a href="#" class="btn btn-warning">Alterar</a></td>
      <td><a href="alunos_delete.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger">Excluir</a></td>
    </tr>

  <?php endwhile; ?>
</table>
