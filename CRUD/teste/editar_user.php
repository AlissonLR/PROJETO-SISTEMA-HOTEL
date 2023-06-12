<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>PROJETO CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1>EDITAR USUÁRIO</h1>

    <?php
        $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    
    ?>
    
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo "$row->id"?>">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo "$row->nome"?>">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo "$row->email"?>">

        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento"value="<?php echo "$row->data_nascimento"?>">

        <button type="submit">Enviar</button>
    </form>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>