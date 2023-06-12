
<?php

$sql1="SELECT * FROM estruturas WHERE pessoa='{$_SESSION['nome']}'";
$res1=$conn->query($sql1);
$res2=$conn->query($sql1);


if($res1->fetch_object()){
$sql="SELECT * FROM servicos";
$res=$conn->query($sql);


echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>Serviço </th>";
echo  "<th>valor com <br> desconto</th>";
echo  "<th>descrição</th>";
echo  "<th>solicitar</th>";



while($rowES=$res2->fetch_object()){
while($rowServico=$res->fetch_object()){

 if($rowServico->servp==$rowES->tipo){


   $val= (($rowServico->valor)-($rowServico->valor)*($rowServico->desconto));
    echo "<form action='reservaSERV.php' method='POST'>";
    echo "<tr><td><label>serviço:</label> {$rowServico->nome}<br></td>";
    echo "<td><label></label> {$val}<br></td>";
    echo "<td><label></label> {$rowServico->descricao}<br></td>";
    echo "<input type='hidden' name='id' value='{$rowServico->nome}'>";
    echo "<input type='hidden' name='valor' value='{$rowServico->valor}'>";
    echo "<td><label></label>" ;

    if($_SESSION[$rowServico->servp]!='solicitado'){
    echo" <button>solicitar<br>";
    }else{
    echo" <button>dessolicitar<br>"; 
  
    }
    echo "</form>";
}}}
}else{
    
    echo"<h1>Reserve algo antes de entrar nessa pagina</h1>";
    }
  

echo"</table>";
?>
