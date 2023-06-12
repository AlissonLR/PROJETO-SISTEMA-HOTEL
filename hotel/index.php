<?php
session_start();
$nome=$_SESSION["nome"];
echo "
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
    <a class='navbar-brand' href='#'>HOTEL DA EEEP bem vindo {$nome}</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='index.php'>home</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='?page=novo'>Cadastra </a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='?page=listar'>Lista </a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='?page=excluir'>Excluir </a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='?page=sair'>Sair </a>
        </li>
        <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
          mais...
        </a>
        <ul class='dropdown-menu'>
          <li><a class='dropdown-item' href='?page=relatorio'>Relatorios</a></li>
          <li><a class='dropdown-item' href='?page=promocao'>Promoções</a></li>
          <li><a class='dropdown-item' href='?page=servico'>Serviços</a></li>
        </ul>
      </li>
       
      </ul>
    </div>
  </div>
</nav>
<!--navbar fim-->




<div class='container'>

"

?>
<?php


    include('config.php');
    
switch(@$_REQUEST['page']){

case 'novo':
   // include('cadastro/novo.php');
    include('cadastra.php');
    break;

case 'listar':
    include('cadastro/listar.php');
    break;

case 'salvar':
    include('salvar.php');
    break;

    case 'excluir':
      include('excluir.php');
      break;
      case 'excluirF':
        include('excluirF.php');
        break;

case 'promocao':
  include('./Agerente/promocoes.php');
  break;

case 'relatorio':
  include('./Agerente/relatorio.php');
    break;

case 'servico':
  include('./Agerente/servicos.php');
      break;

case 'sair':
  header("Location: ./Alogin/login.php");
default:
   echo "
   <div>
     <br>
     <br>
   <H3 class='test'>.Férias chegando e você está procurando
      um bom hotel para relaxar e deixar todas as preocupações de lado, não é mesmo? Então você precisa conhecer o hotel da EEEP. Quartos pensados e preparados para que a sua estadia seja confortável, um spa para você aproveitar uma massagem ou tratamento relaxante, uma equipe preparada e
      pronta para te ajudar. Faça a sua reserva agora mesmo!
       .</H3>
       </div>
   </div>";
    break;

}





?>


    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    
    <link rel='stylesheet' type='text/css' href='c.css' media='screen' />
  
  </body>
</html>
