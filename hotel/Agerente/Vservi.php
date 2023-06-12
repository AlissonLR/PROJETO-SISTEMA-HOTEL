
<?php 
include('../config.php');
$nome=$_REQUEST['nome'];
$valor=$_REQUEST['valor'];
$descricao=$_REQUEST['descricao'];
$servip=$_REQUEST['serp'];

$sql="INSERT INTO servicos(id,nome,valor,descricao,servp) values(
'',
'{$nome}',
'{$valor}',
'{$descricao}',
'{$servip}'
)";

$conn->query($sql);
header("Location: ../index.php");




?>