
<h1>Listar</h1>

<?php 

$sql="SELECT * FROM funcionarios";
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

}else{
    echo " <br><h1>SEM RESULTADOS</h1>";

}




?>