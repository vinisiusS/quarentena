<?php
include('conecta-bd.php');


# agora iremos trazer os dados do banco
$sql = $conexao->prepare('SELECT * FROM DEPARTAMENTOS ORDER BY nome');
$sql->execute();
$resultados = $sql->fetchAll();

# vamos percorrer o nosso vetor e lista-lo na UI
foreach ($resultados as $r) {
  echo $r['sigla'] . ' - ' . $r['nome'] . '<br>';
}
?>
