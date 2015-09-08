<?php
  include("header.php");
?>
    <div>
        <h1 class="text-center">Cadastrar Alunos</h1>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 box">
          <form action="alunos_create.php" method="post">
            <div class="form-group">
              <label for="txtNome">Nome</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
              <label for="txtNome">Foto</label>
              <input type="text" name="foto" class="form-control" placeholder="Foto">
            </div>
            <div class="form-group">
              <label for="txtNome">Id da Turma</label>
              <input type="text" name="turma_id" class="form-control" placeholder="Turma">
            </div>
            <button type="submit" class="btn pull-right btn-dark">Enviar</button>
          </form>
        </div>
        <div class="col-md-4"></div>
    </div>


<?php include("footer.php"); ?>
