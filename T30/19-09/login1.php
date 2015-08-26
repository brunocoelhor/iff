<?php include("header.php"); ?>
    <div>
        <h1 class="text-center">Início PHP</h1>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
          <?php
          $email = "bruno@bruno.com";
          $senha = "123456";

          if($email = "bruno@bruno.com"){
            echo "Seu email está coreto";
          }else{
            echo "Seu email está incorreto";
          }
           ?>
        </div>
        <div class="col-md-4"></div>
    </div>


<?php include("footer.php"); ?>
