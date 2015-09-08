<?php
    session_start();
    include("header.php");

    print_r($_SESSION);

    if(!isset($_SESSION['logado'])):
        header("Location: login6.php");
    endif;
          echo "<h1>Bem vindo ".$_SESSION['nome']." está logado no Painel Administrativo!</h1>";
    include("footer.php");
