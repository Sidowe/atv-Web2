<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCampus = $_GET['idCampus'];

try{
    $sql = "delete from campus where idCampus = " . $idCampus;
    $conexao->exec($sql);
    echo "Removido com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}
header('Location: ../../view/cursos/buscarCurso.php');
?>