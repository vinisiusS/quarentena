<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  
  <div class="container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <div class="panel panel-default panel-login">
        <div class="panel-heading text-center">
          LOGIN
        </div>
        <div class="panel-body">
          <form action="autentica.php" method="POST">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </span>
              <input type="text" name="usuario" placeholder="Usuário" class="form-control">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
              </span>
              <input type="password" name="senha" placeholder="Senha" class="form-control">
            </div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-success">ENTRAR</button>
            </div>   
          </form>
        </div>

        <?php
        if (isset($_GET['msg'])) {
          $mensagem_ext = $_GET['msg'] == 'erro_login' ? 'Login inválido!' : 'Dados insuficientes!';
        ?>
          <div class="panel-footer text-center">
            <?php echo $mensagem_ext; ?>
          </div>
        <?php
        }
        ?>

      </div>
    </div>

    <div class="col-md-4"></div>
  </div>


</body>
</html>
