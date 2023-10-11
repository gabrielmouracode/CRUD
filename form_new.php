<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="container text-center">
        <h1>Informe os dados a serem inseridos</h1>
        <form action="create.php" method="post" class="d-flex flex-column justify-content-center align-items-center text-start">
            <div class="mb-3 col-5">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="Nome" name="nome">           
            </div>
            <div class="mb-3 col-5">
                <label for="nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento">
            </div>
            <div class="mb-3 col-5">
                <label for="profissao" class="form-label">Curso</label>
                <input type="text" class="form-control" id="curso" name="curso">
            </div>
            <button type="submit" class="btn btn-primary col-5">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>