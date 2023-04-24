<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Curso</h1>
            </div>
        </div>
        <form action="../../repositorio/curso/salvarCurso.php" method="POST">
            <div class="row mb-3">
              
                <div class="col col-md-4">
                    <label class="form-label" for="idnome">Nome do curso</label>
                    <input class="form-control" type="text" name="NomeCurso" id="nomeC">
                    <label class="form-label" for="idnome">Nota do curso</label>
                    <input class="form-control" type="number" name="NotaCurso" id="notaC">
               
                </div>
            </div>
            
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html>