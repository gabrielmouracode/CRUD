<?php
    include_once("conexao.php");

    $sql = "select * from professor";

    $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Percistencia em banco de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="mb-5">CRUD - Data Base</h1>
        <p>CRUD é um acronico para ações realizadas em banco de dados onde:</p>
        <ul>
            <li>C - CREATE - CRIAR INFOMAÇÃO: (dados/registro) - SQL - INSERT; </li>
            <li>R - READ - LER INFORMAÇÃO: (dados/registro) - SQL - SELECT;</li>
            <li>U - UPDATE - ALTERAR INFORMAÇÃO: (dados/registro) - SQL - UPDATE</li>
            <li>D - DELETE - APAGAR DADOS: (dados/registro) - SQL - DELETE</li>
        </ul>
        <div class="d-flex justify-content-end">
            <a href="form_new.php" class="btn btn-primary">NOVO</a>
        </div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">CURSO</th>
            <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($query)){

                
            ?>
                <tr>
                    <th scope="row"><?php echo $row['pk_professor']?></th>
                    <td><?php echo $row['nome']?></td>
                    <td><?php echo $row['nascimento']?></td>
                    <td><?php echo $row['curso']?></td>
                    <td><strong><a href="form_update.php?id=<?php echo $row['pk_professor']?>">ALTERAR</a> | <a href="delete.php?id=<?php echo $row['pk_professor']?>">APAGAR</a></strong></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>