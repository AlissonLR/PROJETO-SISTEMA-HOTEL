<?php

$hostname="localhost";
$bancodedados="db_hotel";
$usuario="root";
$senha="";

$conn= new mysqli($hostname,$usuario,$senha,$bancodedados);

if($conn->connect_error){
    echo"falha ao connectar";
}else{

   // echo"sucesso ao conectar <br>";
}

?>