

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOTEL DA EEEP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./ARecepcionista.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page2=novo">Cadastra Hospede</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page2=lpedidos">Lista pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page2=excluir">Excluir Hospedes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar fim-->


<?php

    include("../config.php");
    
switch(@$_REQUEST["page2"]){

case "novo":
   // include("cadastro/novo.php");
    include("ARecepcionista.php");
    break;

case "listar":
    include("cadastro/listar.php");
    break;

case "salvar":
    include("salvar.php");
    break;

    case "excluir":
      include("excluir.php");
      break;

      case "lpedidos":
        include("./rp/lpedidos.php");
        break;
    
default:
include("./rp/rphome.php");
    break;

}
?>

