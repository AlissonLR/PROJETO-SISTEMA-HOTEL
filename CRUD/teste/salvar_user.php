<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $data_nascimento=$_POST["data_nascimento"];

            $sql = "INSERT INTO USUARIO (Nome, Email, data_nascimento) 
                    VALUES ('{$nome}', '{$email}', '{$data_nascimento}')";

            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            else{
                echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
                echo "<script>location.href='?page=listar';</script>";
            
            }
            break;
        case "editar":

            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $data_nascimento=$_POST["data_nascimento"];

            $sql = "UPDATE USUARIO SET Nome = '{$nome}', Email='{$email}',data_nascimento='{$data_nascimento}' WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Editado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            else{
                echo "<script>alert('Não foi possivel editar o usuario');</script>";
                echo "<script>location.href='?page=listar';</script>";
            
            }
            break;
        case "excluir":
            $sql = "DELETE FROM USUARIO WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Excluído com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            else{
                echo "<script>alert('Não foi possivel excluir o usuario');</script>";
                echo "<script>location.href='?page=listar';</script>";
            
            }
            break;
    }