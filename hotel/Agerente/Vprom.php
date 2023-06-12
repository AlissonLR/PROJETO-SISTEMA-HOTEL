
<?php 
$estrutura=$_REQUEST["es"];
$servico=$_REQUEST["se"];
$valor=floatval( $_REQUEST["promocao"]) /100;
include('../config.php');


if($estrutura){
$sql="UPDATE estruturas SET desconto='{$valor}' WHERE tipo='{$estrutura}'";
$conn->query($sql);
header("Location: ../index.php");

}



if($servico){

    $sql="UPDATE serviços SET desconto='{$valor}' WHERE tipo='{$servico}'";
    header("Location: ../index.php");
}



?>