<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['senha']) ) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  # aqui validamos os valores vindos nas variáveis!
  if($usuario == 'admin' && $senha == '123') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';
    
    # redirecionar o usuario para a tela do sistema que precisa de login
    header('location:listar-clientes.php');
    exit;
  } else {
    header("location:index.php?msg=erro_login");
  }

} else {
  header("location:index.php?msg=erro_dados");
}

?>
