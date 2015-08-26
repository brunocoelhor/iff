<?php

$conexao = mysqli_connect("localhost", "root", "1234", "t12");

$usuarios = mysqli_query($conexao, "SELECT * FROM usuario");



foreach ($usuarios as $usuario):
  ?>
  <h1><?=$usuario[email]?></h1>
  <h2><?=$usuario[senha]?></h6>
  <br>
  <?php
endforeach;
