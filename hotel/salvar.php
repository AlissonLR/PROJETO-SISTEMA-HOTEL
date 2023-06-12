<?php

switch(@$_REQUEST["acao"]){

case "cadastrar":

    $nome=@$_POST["nome"];
    $cpf=@$_POST["cpf"];
    $usuario=@$_POST["usuario"];
    $senha=@$_POST["senha"];
    $supervisor=@$_POST["supervisor"];
    $funcionario=@$_POST["funcionario"];

    $sql="INSERT INTO funcionarios(id,nome,cpf,supervisor,usuario,senha,funcionario)

     VALUES ( 
        '',
    '{$nome}',
    '{$cpf}',
    '{$supervisor}',
    '{$usuario}',
    '{$senha}',
    '{$funcionario}')";

    $res= $conn->query($sql);

    if($res==true){

        echo "certo";

        echo "<a link='index.php'>HOME</a>";
    }else{

        echo "errado";
    }

    break;

case "excluir":

    $nome= @$_POST["usuario"];
    $sql="DELETE FROM funcionarios WHERE usuario='{$nome}'";
    $conn->query($sql);
    echo "<a href='index.php'>home</a>";

    break;

case "editar":


    $nome=@$_POST["nome"];
    $cpf=@$_POST["cpf"];
    $usuario=@$_POST["usuario"];
    $senha=@$_POST["senha"];
    $supervisor=@$_POST["supervisor"];
    $email=@$_POST["email"];
    $funcionario=@$_POST["funcionario"];

   $sql=" UPDATE funcionarios SET nome='{$nome}',cpf='{$cpf}',supervisor='{ $supervisor}',usuario='{$usuario}'
   ,senha='{$senha}',email='{ $email}' WHERE nome='{$nome}'";
    $res=$conn->query($sql);




    break;

default:

    break;





}


?>
