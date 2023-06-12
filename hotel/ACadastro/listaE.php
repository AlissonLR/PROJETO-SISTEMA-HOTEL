

<?php
$sql="SELECT * FROM estruturas";
$res=$conn->query($sql);


echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>estrutura</th>";
echo  "<th>em uso</th>";
echo  "<th>capacidade</th>";
echo  "<th>valor com <br> desconto</th>";
echo  "<th></th>";

while($row=$res->fetch_object()){
   $val= (($row->valor)-($row->valor)*($row->desconto));
    echo "<form action='reserva.php' method='POST'>";
    echo "<tr><td><label>estrutura:</label> {$row->estrutura}<br></td>";
    echo "<td><label></label> {$row->ocupado}<br></td>";
    echo "<td><label></label> {$row->capacidade}<br></td>";
    echo "<td><label></label> {$val}<br></td>";
    echo "<input type='hidden' name='id' value='{$row->id}'>";
    echo "<input type='hidden' name='desreservar' value='{$row->ocupado}'>";
    echo "<input type='hidden' name='valor' value='{$row->valor}'>";
    echo "<td><label></label>" ;


    //butão
       if($_SESSION['nome']==$row->pessoa || $row->pessoa==''){
    if($row->ocupado=='nao')
    {echo" <button>reservar<br></td>";}else{
        echo" <button>cancelar<br></td>";
    }}
    echo "</form>";
}
echo"</table>";
?>
