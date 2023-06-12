
<?php

session_start();
include("../config.php");

$usuario=$_REQUEST["usuario"];
$senha=$_REQUEST["senha"];


//$func=$_REQUEST["funcionario"];
$sql="SELECT * FROM funcionarios WHERE usuario='{$usuario}'AND senha='{$senha}' ";


$res=$conn->query($sql);

if($row = $res->fetch_object()){
    $_SESSION["nome"]=$row->nome;
    $_SESSION['dinheiro']=$row->dinheiro;
    $_SESSION["start"]="nao";
    switch($row->funcionario){    
        
        
        case "gerente":
        header("Location: ../index.php");
        break;

            
        case "hospede":
            header("Location: ../ACadastro/Agerente.php");
            break;

            
        case "recepcionista":
        header("Location: ../ACadastro/ARecepcionista.php");
        break;
    
    
    }
   
}else{
    header("Location: ../Alogin/login.php");  
}

?>