<?php
session_start();

if (!isset($_SESSION['logado'])) {
  header('location:index.php?msg=erro');
  exit;
}
?>
