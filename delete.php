<?php

    include_once("conexao.php");

    $id = $_GET["id"];

    if(!isset($id))
        header("location: index.php");
    if($id === "")
        header("location: index.php");

    $sql = "DELETE FROM PROFESSOR WHERE pk_professor=$id;";

    $query = mysqli_query($conn, $sql);

    if(mysqli_error($conn)=="")
        header("location: index.php");

    echo mysqli_error($conn)
?>