<?php

$conexao = mysqli_connect("localhost","root","1234","t12") or die("Error " . mysqli_error($conexao));

$email = "bruno@bruno.com";
$senha = "1234";

$query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'" or die("Error in the consult.." . mysqli_error($conexao));

$usuario = mysqli_query($conexao, $query);

while($row = mysqli_fetch_array($usuario)) {
  echo $row["email"] . "<br>";
  echo $row["senha"] . "<br><br>";
}
?>
