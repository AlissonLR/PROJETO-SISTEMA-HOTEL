
<?php
session_start();
include("../config.php");
if($_SESSION["start"]=="nao"){
$_SESSION["quarto"]=' ';
$_SESSION["salao"]=' ';
$_SESSION["servicog"]=' ';
$_SESSION["start"]="sim";
}
    
$res= $conn->query("SELECT dinheiro FROM funcionarios WHERE nome='{$_SESSION['nome']}'");
$row=$res->fetch_object();
$dinheiro=$row->dinheiro;

echo"
<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <title>Bootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
  </head>
  <body>


  <!--navbar-->
  <nav class='navbar navbar-expand-lg bg-body-tertiary'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='#'>HOTEL DA EEEP bem vindo {$_SESSION['nome']}</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='../ACadastro/Agerente.php'>home</a>
        </li>
        <a class='nav-link active' aria-current='page' href='?page3=lserv'>Seus Serviços</a>

        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='?page3=sair'>Sair</a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            perfil
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='?page3=sair'>Sair</a></li>
            <li><a class='dropdown-item' href='#'>seus serviços</a></li>
            <li><a class='dropdown-item' href='#'>Something else here</a></li>
          </ul>
        </li>
      </ul>
      <label>seu                        dinheiro:{$dinheiro}</label>
    </div>
  </div>
</nav>
<!--navbar fim-->
";


    
switch(@$_REQUEST["page3"]){

case "novo":
   // include("cadastro/novo.php");
    include("Agerente.php");
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

      case "lserv":
        include("lserv.php");
        break;



      case "sair":
        header("Location: ../Alogin/login.php");
        break;


      case "excluirF":
        include("excluirF.php");
        break;
    
default:
    include("listaE.php");
    break;

}
?>


