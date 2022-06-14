<?php
require_once 'conexao.php';
//-------------------------------------//
$id =           trim($_POST['id']);
$titulo =       trim($_POST['titulo']);
$criador =      trim($_POST['criador']);
$empresa =      trim($_POST['empresa']);
$descricao =    trim($_POST['descricao']);


$sql = "UPDATE vagas SET titulo='$titulo', criador='$criador', empresa='$empresa', descricao='$descricao' WHERE id='$id'";

if(mysqli_query($conexao, $sql)){
    header("Location: index.php");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();


