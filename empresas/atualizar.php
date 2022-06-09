<?php
require_once 'conexao.php';
//-------------------------------------//
$id =           trim($_POST['id']);
$nomeEmpresa =  trim($_POST['nomeEmpresa']);
$cnpj =         trim($_POST['cnpj']);
$inscEst =      trim($_POST['inscEst']);
$endereco =     trim($_POST['endereco']);
$numero =       trim($_POST['numero']);
$complemento =  trim($_POST['complemento']);
$bairro =       trim($_POST['bairro']);
$cidade =       trim($_POST['cidade']);
$estado =       trim($_POST['estado']);
$cep =          trim($_POST['cep']);
$emailEmpresa = trim($_POST['emailEmpresa']);
$telefone =     trim($_POST['telcomercial']);
$celEmpresa =   trim($_POST['celEmpresa']);
$responsavel =  trim($_POST['nomeResponsavel']);
$rg =           trim($_POST['rg']);
$emailResp =    trim($_POST['emailResponsavel']);
$celResponsavel =   trim($_POST['celResponsavel']);


$sql = "UPDATE empresas SET nomeEmpresa='$nomeEmpresa', cnpj='$cnpj', inscEst='$inscEst', endereco='$endereco', 
                            numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado', 
                            cep='$cep', emailEmpresa='$emailEmpresa', telcomercial='$telefone', celEmpresa='$celEmpresa', 
                            nomeResponsavel='$responsavel', rg='$rg', emailResponsavel='$emailResp', 
                            celResponsavel='$celResponsavel' WHERE id='$id'";

if(mysqli_query($conexao, $sql)){
    header("Location: editar.php?id=$id");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();


