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

    $sql = "INSERT INTO PROFESSOR (nome, nascimento, curso) VALUES ('$nome', '$nascimento', '$curso');";
    mysqli_query($conn, $sql);
    if(mysqli_error($conn)=="")
        header("location: index.php");
    echo $sql;
?>