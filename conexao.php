<?php 
    $server_name = "localhost";   
    $user_name = "root";
    $password = "";
    $data_base = "quintafeira";

    $conn = mysqli_connect($server_name, $user_name, $password, $data_base);

    if(!$conn){
        die("Falha na conexão com banco de dados:" . mysqli_connect_error());
    }

    // echo "Conexão realizada com sucesso!";
    // mysqli_close($conn);
?>