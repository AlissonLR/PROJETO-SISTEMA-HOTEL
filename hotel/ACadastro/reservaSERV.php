

<?php 
session_start();
include('../config.php');
$id=$_REQUEST["id"];
$valor=$_REQUEST['valor'];


//fazer rezerva e desrezervar
if($_SESSION['dinheiro']>$valor){

    $dinheiroOP;

//procura dinheiro
$sql1="SELECT * FROM funcionarios WHERE nome='{$_SESSION['nome']}'";
$res1=$conn->query($sql1);
$row1=$res1->fetch_object();

//procura desconto
$sql2="SELECT * FROM servicos WHERE nome='{$id}'";
$res2=$conn->query($sql2);
$row2=$res2->fetch_object();

$_SESSION[$row2->$servp]='solicitado';

//cauculo para atualizar o dinheiro
$dinheiroOP=($row1->dinheiro)-(($row2->valor)+($row2->valor)*($row2->desconto));

//atualizando valores

$sql4="UPDATE funcionarios SET dinheiro='{$dinheiroOP}' WHERE nome='{$_SESSION['nome']}'";

//executando operacoes

$res=$conn->query($sql4);
 
if($res==true){

    echo "<script type='javascript'>alert('reservado com sucesso');</script>";

    header("Location: ../Acadastro/Agerente.php");
}else{

    echo "<script type='javascript'>alert('nao reservado com sucesso');</script>";
    header("Location: ../Acadastro/Agerente.php");

}}else{
  
        header("Location: ../Acadastro/Agerente.php");
    

}


