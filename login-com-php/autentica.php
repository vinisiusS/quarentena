<?php

if (isset($_POST['usuario']) && isset($_POST['senha']) ) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  # aqui validamos os valores vindos nas variáveis!
  if($usuario == 'admin' && $senha == '123') {
    echo 'Bem vindo!';
  } else {
    header("location:index.php?msg=erro_login");
  }

} else {
  header("location:index.php?msg=erro_dados");
}

?>
