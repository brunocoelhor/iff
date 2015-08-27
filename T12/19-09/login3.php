<?php include("header.php"); ?>
    <div>
        <h1 class="text-center">Início PHP</h1>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 box">
          <form action="logar.php" method="post">
            <div class="form-group">
              <label for="txtEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="txtEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="txtPass">Senha</label>
              <input type="password" name="senha" class="form-control" id="txtPass" placeholder="Password">
            </div>
            <button type="submit" class="btn pull-right btn-dark">Submit</button>
          </form>
        </div>
        <div class="col-md-4"></div>
    </div>


<?php include("footer.php"); ?>
