<?php
  session_start();
  require("conexao.php");
  include("header.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'" or die("Error in the consult.." . mysqli_error($conexao));

//print_r($query);

echo "<br>";

$usuario = mysqli_query($conexao, $query);

//print_r(mysqli_num_rows($usuario));

$dados = mysqli_fetch_assoc($usuario);

$_SESSION['nome'] = $dados["nome"];

?>
<div>
    <h1 class="text-center">Painel do Administrador</h1>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center">
      <?php
        if (mysqli_num_rows($usuario) > 0){
          $_SESSION['logado'] = true;
          header("Location: painel.php");
        }else{
          echo "<h1>Login ou senha incorretos!</h1><br>";
                    echo "<a class='pull-right' href='login5.php'>Voltar</a>";

        }
       ?>
    </div>
    <div class="col-md-4"></div>
</div>


<?php include("footer.php"); ?>
