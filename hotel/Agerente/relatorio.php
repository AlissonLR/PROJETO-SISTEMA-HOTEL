
<h1>Relatorio</h1>

<?php 


echo"<h4>funcionarios cadastrados</h4>";
$sql="SELECT * FROM funcionarios
 where
 funcionario='recepcionista' OR funcionario='gerente' ";
$res = $conn->query($sql);
$nrows=$res->num_rows;

if($nrows>0){

    echo "<table class='table table-hover 
    table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>nome</th>";
    echo  "<th>cpf</th>";
    echo  "<th>usuario</th>";
    echo  "<th>funcionario</th>";
    echo  "<th>supervisor</th>";
    while($row = $res->fetch_object()){

     echo "<tr><td><label>nome:</label> {$row->nome}<br></td>";
     echo "<td><label>cpf:</label> {$row->cpf}<br></td>";
     echo "<td><label>usuario:</label> {$row->usuario}<br></td>";
     echo "<td><label>funcão:</label> {$row->funcionario}<br></td>";
     echo "<td><label>supervisor:</label> {$row->supervisor}</td></tr><br><br>";
     
    }
    echo"</table>";

}


echo"<h4>hospedes cadastrados</h4>";
$sql="SELECT * FROM funcionarios
 where
 funcionario='hospede' ";
$res = $conn->query($sql);
$nrows=$res->num_rows;

if($nrows>0){

    echo "<table class='table table-hover 
    table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>nome</th>";
    echo  "<th>cpf</th>";
    echo  "<th>usuario</th>";
    echo  "<th>funcionario</th>";
    echo  "<th>supervisor</th>";
    while($row = $res->fetch_object()){

     echo "<tr><td><label>nome:</label> {$row->nome}<br></td>";
     echo "<td><label>cpf:</label> {$row->cpf}<br></td>";
     echo "<td><label>usuario:</label> {$row->usuario}<br></td>";
     echo "<td><label>funcão:</label> {$row->funcionario}<br></td>";
     echo "<td><label>supervisor:</label> {$row->supervisor}</td></tr><br><br>";
     
    }
    echo"</table>";

}

echo"<h4> estado das estruturas</h4>";
$sql="SELECT * FROM estruturas";
$res=$conn->query($sql);


echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>estrutura</th>";
echo  "<th>em uso</th>";
echo  "<th>capacidade</th>";
echo  "<th>valor com <br> desconto</th>";
echo  "<th>valor</th>";
echo  "<th>desconto em decimal</th>";

echo  "<th>reservado para o(a):</th>";
echo  "<th></th>";

while($row=$res->fetch_object()){
   $val= (($row->valor)-($row->valor)*($row->desconto));
    echo "<form action='reserva.php' method='POST'>";
    echo "<tr><td><label>estrutura:</label> {$row->estrutura}<br></td>";
    echo "<td><label></label> {$row->ocupado}<br></td>";
    echo "<td><label></label> {$row->capacidade}<br></td>";
    echo "<td><label></label> {$val}<br></td>";
    echo "<td><label></label> {$row->valor}<br></td>";
    echo "<td><label></label> {$row->desconto}<br></td>";
    echo "<td><label></label> {$row->pessoa}<br></td>";
    echo "<input type='hidden' name='id' value='{$row->id}'>";
    echo "<input type='hidden' name='desreservar' value='{$row->ocupado}'>";
    echo "<input type='hidden' name='valor' value='{$row->valor}'>";
    echo "<td><label></label>" ;
}
echo"</table>";




