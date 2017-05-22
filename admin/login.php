<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Área Administrativa</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
      
    <?php
    require_once './../menu.php';
    ?>

      <hr>
      <hr>
    
    <?php
        unset($_SESSION['usuarioId'],
              $_SESSION['usuarioNome'],
              $_SESSION['usuarioNivelAcesso'],
              $_SESSION['usuarioEmail'],
              $_SESSION['usuarioSenha']); 
    ?>
      

    <div class="container">
        
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Área Administrativa</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/_site/index.php">Home</a>
                    </li>
                    <li class="active">Área Administrativa</li>
                </ol>
            </div>
        </div>

      <div class="col-md-4 col-md-offset-4">
        <form class="form-signin" method="POST" action="valida_login.php">
            <h2 class="form-signin-heading">Somente para agentes:</h2>
            <label for="inputEmail" class="sr-only">Usuário</label>
            <input type="email" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus><br>
            
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar - me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
        <p class="text-center text-danger">
            <?php
                if(isset($_SESSION['loginERRO'])){
                    echo $_SESSION['loginERRO'];
                    unset($_SESSION['loginERRO']);
                }
            ?>
        </p>
      </div>
    </div> <!-- /container -->
    
    <hr>
        
    <?php
        require_once './../footer.php';
    ?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
