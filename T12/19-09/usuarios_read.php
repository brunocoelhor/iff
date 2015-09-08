<?php
  session_start();
  require("conexao.php");
  include("header.php");


$query = "SELECT * FROM login";

$usuarios = mysqli_query($conexao, $query);?>
<table class="table table-striped">
<tr class="text-center">
  <th>Nome</th>
  <th>Email</th>
  <th>Atualizar</th>
  <th>Deletar</th>
</tr>

<?php
while ($dado =  mysqli_fetch_array($usuarios)) {?>
  <tr>
    <td><?php echo $dado['nome']; ?></td>
    <td><?php echo $dado['login']; ?></td>
    <td><a href="#" class="btn btn-warning">Alterar</a></td>
    <td><a href="#" class="btn btn-danger">Excluir</a></td>
  </tr>

<?php } ?>
</table>
