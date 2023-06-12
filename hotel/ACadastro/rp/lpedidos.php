
<?php




$sql='SELECT * FROM pedidos';

$res=$conn->query($sql);


echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>nome</th>";
echo  "<th>valor</th>";
echo  "<th>descrição</th>";
echo  "<th>tipo</th>";
echo  "<th></th>";



while($row=$res->fetch_object())
{
   
  
    echo "<form action='Vpedido.php' method='POST'>";
    echo "<tr><td><label>nome:</label> {$row->nome}<br></td>";
    echo "<td><label></label> {$row->valor}<br></td>";
    echo "<td><label></label> {$row->descricao}<br></td>";
    echo "<td><label></label> {$row->tipo}<br></td>";
    echo "<input type='hidden' name='id' value='{$row->id}'>";
    echo "<input type='hidden' name='valor' value='{$row->valor}'>";

    echo"<td> <button>aceitar<br></td>"; 

    echo "</form>";
}
echo"</table>";




?>