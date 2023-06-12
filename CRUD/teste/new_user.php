<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>PROJETO CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Email</label>
        <input type="text" name="email">

        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento">

        <button type="submit">Enviar</button>
    </form>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>