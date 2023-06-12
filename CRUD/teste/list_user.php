<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>PROJETO CRUD</title>
  
  </head>
  <body>
  
    <h1>Listar Usuário</h1>

    <?php
      $sql = "SELECT * FROM USUARIO";
      $res = $conn->query($sql);
      $qtd_res = $res->num_rows;
      if($qtd_res>0){
          echo " # ";
          echo " Nome ";
          echo " Email ";
          echo " Data ";
          echo " Ação <br>";
          while($row = $res->fetch_object()){
            echo "$row->id ";
            echo "$row->nome ";
            echo "$row->email ";
            echo "$row->data_nascimento ";
            echo "<button onclick=\"location.href='?page=editar&id=".$row->id."';\">EDITAR</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\">EXCLUIR</button><br>";
          }
      }
      else{
        echo "<script>alert('Nenhum Usuario encontrado!');";
      }
    ?>
 
  </body>