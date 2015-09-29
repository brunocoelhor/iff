<?php
  require("conexao.php");
  include("header.php");


$query = "SELECT * FROM alunos";
$turmas = "SELECT * FROM turma";

$usuarios = mysqli_query($conexao, $query);
$turmas = mysqli_query($conexao, $turmas);

//print_r($usuarios);
?>
<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#cadAlunos">Cadastrar</button>

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
      <td><img class="img-responsive img-circle img-aluno" src="img/<?php echo $dado['foto']; ?>" alt="<?php echo $dado['nome']; ?>" /></td>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['turma_id']; ?></td>
      <td><a href="alunos_form_update.php?id=<?php echo $dado['id']; ?>" class="btn btn-warning">Alterar</a></td>
      <td><a href="alunos_delete.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger">Excluir</a></td>
    </tr>

  <?php endwhile; ?>
</table>


<!-- Modal -->
<div class="modal fade" id="cadAlunos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Aluno</h4>
      </div>
      <div class="modal-body">
        <form action="alunos_create.php" method="post">
          <div class="form-group">
            <label for="txtNome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="txtNome">Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
            <div class="form-group">
              <label for="turma">Turma</label>
              <select class="form-control">
                <?php
                while ($turma =  mysqli_fetch_array($turmas)):?>
                <option value="<?php echo $turma['id']; ?>"><?php echo utf8_encode($turma['nome']); ?></option>
                <?php endwhile ?>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn pull-right btn-dark">Enviar</button>
        </div>

        </form>

    </div>
  </div>
</div>

<?php

  include("footer.php");
