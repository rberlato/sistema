<?php
require_once '../bd/conexao.php';
//-------------------------------------//
$id =                   trim($_POST['id']);

$nomeEmpresa =          trim($_POST['nomeEmpresa']);
$cnpj =                 trim($_POST['cnpj']);
$inscEst =              trim($_POST['inscEst']);

$cep =                  trim($_POST['cep']);
$rua =                  trim($_POST['rua']);
$numero =               trim($_POST['numero']);
$complemento =          trim($_POST['complemento']);    
$bairro =               trim($_POST['bairro']);
$cidade =               trim($_POST['cidade']);
$estado =               trim($_POST['estado']); 

$emailComercial =       trim($_POST['emailComercial']);
$telComercial =         trim($_POST['telComercial']);
$celComercial =         trim($_POST['celComercial']);

$responsavel =          trim($_POST['nomeResponsavel']);
$rg =                   trim($_POST['rg']);
$emailResp =            trim($_POST['emailResponsavel']);
$celResponsavel =       trim($_POST['celResponsavel']);


$sql = "UPDATE empresas SET nomeEmpresa='$nomeEmpresa', cnpj='$cnpj', inscEst='$inscEst', cep='$cep', rua='$rua', numero='$numero', complemento='$complemento', 
                            bairro='$bairro', cidade='$cidade', estado='$estado', 
                            emailComercial='$emailComercial', telcomercial='$telComercial', celComercial='$celComercial', 
                            nomeResponsavel='$responsavel', rg='$rg', emailResponsavel='$emailResp', celResponsavel='$celResponsavel' WHERE id='$id'";

if(mysqli_query($conexao, $sql)){
    header("Location: index.php");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();


