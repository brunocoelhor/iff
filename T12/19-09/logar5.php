<?php
  require("conexao.php");
  include("header.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "SELECT * FROM usuario WHERE email='$email' AND
senha='$senha'";

$usuario = mysqli_query($conexao, $query);

print_r($usuario);
