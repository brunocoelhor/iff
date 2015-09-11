<?php

function conectar(){
  $conexao = mysqli_connect("localhost", "root", "1234", "bruno");
  return $conexao;
}

function listar($tabela){
  $conexao = conectar();
  $listar = mysqli_query($conexao, "select * from $tabela");
  while ($res = mysqli_fetch_assoc($listar)){
    $data[] = $res;
  }
  return $data;
}
