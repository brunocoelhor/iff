<?php
  require("conexao.php");
  include("header.php");

  $id = mysql_escape_string($_GET['id']);

  $query = "SELECT * FROM alunos WHERE (id = '".$id."')";

  $usuarios = mysqli_query($conexao, $query);

  $dado = mysqli_fetch_assoc($usuarios);
?>
    <div>
        <h1 class="text-center">Atualizar Alunos</h1>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 box">
          <form action="alunos_update.php" method="post">
            <div class="form-group">
              <input type="hidden" name="id" class="form-control" placeholder="Nome" value="<?php echo $dado['id']; ?>">
            </div>
            <div class="form-group">
              <label for="txtNome">Nome</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $dado['nome']; ?>">
            </div>
            <div class="form-group">
              <label for="txtNome">Foto</label>
              <input type="text" name="foto" class="form-control" placeholder="Foto" value="<?php echo $dado['foto']; ?>">
            </div>
            <div class="form-group">
              <label for="txtNome">Id da Turma</label>
              <input type="text" name="turma_id" class="form-control" placeholder="Turma" value="<?php echo $dado['turma_id']; ?>">
            </div>
            <button type="submit" class="btn pull-right btn-dark">Enviar</button>
          </form>
        </div>
        <div class="col-md-4"></div>
    </div>


<?php include("footer.php"); ?>
