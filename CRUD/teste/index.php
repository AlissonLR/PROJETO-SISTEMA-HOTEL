<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>PROJETO CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Informática</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista de Usuários</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("new_user.php");
                break;
            case "listar":
                include("list_user.php");
                break;
            case "salvar":
                include("salvar_user.php");
                break;
            case "editar":
                include("editar_user.php");
                break;
            default:
                print "<h1>Bem Vindo!!!</h1>";
        }
    ?>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>