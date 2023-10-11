<?php
    include_once("conexao.php");
    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";

    if(!isset($_POST['nome']))
        header('location: index.php');


    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $curso = $_POST['curso'];
    $id = $_POST['id'];

    $sql = "UPDATE PROFESSOR SET nome='$nome', nascimento='$nascimento', curso='$curso' WHERE pk_professor=$id";
    $query = mysqli_query($conn, $sql);

    if(mysqli_error($conn)==""){
        $status = "true";
        $msg = "Registro alterado com sucesso!";
    }else{
        $status = "error";
        $msg = "Erro ao alterar registro!";
    }
      
    header("location: index.php?status=$status&msg=$msg");
?>