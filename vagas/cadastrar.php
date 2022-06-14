<?php
require_once 'conexao.php';
//-------------------------------------//
$titulo =       trim($_POST['titulo']);
$criador =      trim($_POST['criador']);
$empresa =      trim($_POST['empresa']);
$descricao =    trim($_POST['descricao']);



$sql = "INSERT INTO vagas (titulo, criador, empresa, descricao)                     
                    VALUES ('$titulo','$criador','$empresa',
                    '$descricao')";

if(mysqli_query($conexao, $sql)){
    header("Location: cadastrarVagas.php");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();