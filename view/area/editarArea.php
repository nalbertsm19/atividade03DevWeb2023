<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb2023'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar area</h1>
            </div>
        </div>
        <?php
        try{
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
        }catch(PDOException $e){
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }

        $idArea = $_GET['idArea'];

        try{
            $sql = "select * from area where idArea = " . $idArea;
            $resultado = $conexao->query($sql);
            if($resultado->rowCount() > 0){
                $linha = $resultado->fetch();
           
        ?>
        <form action="<?php echo $path; ?>/repositorio/campus/editarCampus.php" method="POST">
        <input value="<?php echo $linha['idArea'] ?>" type="text" name="idArea" id="idArea" hidden>
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" value="<?php echo $linha['nomeA'] ?>" type="text" name="nome" id="idArea">
                </div>
               
            </div>
            <?php 
                }
            }catch(PDOException $e){
                die("Ocorreu um erro " . $e->getMessage());
            }
            ?>
            <div class="row mb-3">
                <div class="col col-md-4">
                   
                    <input class="form-control" type="text" name="novaArea" id="idnovaarea">
                </div>
            
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html