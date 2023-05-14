
<?php
session_start();
?>

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
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page3=novo">Cadastra Gerente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page3=listar">Lista Gerente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page3=excluir">Excluir Gerente</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">1</a></li>
            <li><a class="dropdown-item" href="#">2</a></li>
            <li><a class="dropdown-item" href="#">3</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar fim-->

<?php

    include("../config.php");
    
switch(@$_REQUEST["page4"]){

case "novo":
   // include("cadastro/novo.php");
    include("adm.php");
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
      case "excluirF":
        include("excluirF.php");
        break;
    
default:
  
    break;

}
?>

<h1>AREA DE CADASTRO/GERENTES</h1>

<form action="?page=salvar" method="POST">

<div>
    <input type="hidden" name="acao"value="cadastrar">
    <input type="hidden" name="funcionario" value="gerente">
<label for="">NOME</label>
<br>
<input type="text" name="nome">
<br>
<label for="">SOBRENOME</label>
<br>
<input type="text" name="sobrenome">
<br>
<label for="">CPF</label>
<br>
<input type="text" name="cpf">
<br>
<label for="">USUARIO</label>
<br>
<input type="text" name="usuario">
<br>
<label for="">SENHA</label>
<br>
<input type="text" name="senha">
<br>
<label for="">EMAIL</label>
<br>
<input type="text" name="email">
<br>
<label for="">NUMERO</label>
<br>
<input type="text" name="numero">
<br>
</div>

<button>enviar</button>

</form>
