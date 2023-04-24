<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}


$NomeCurso = $_POST['NomeCurso'];
$NotaCurso = $_POST['NotaCurso'];


try{
    $sql = "insert into curso(NomeCurso,NotaCurso) values ('$NomeCurso',$NotaCurso)";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>