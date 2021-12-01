<?php
$usuario = 'root';
$senha = '';
$base_de_dados = 'empresa';
$host = 'localhost';

$conexao = new PDO("mysql:host=$host;dbname=$base_de_dados", $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
