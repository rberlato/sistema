<?php
require_once '../../bd/conexao.php';
//-------------------------------------//
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




$sql = "INSERT INTO empresas (nomeEmpresa, cnpj, inscEst, endereco, numero, complemento, cidade, bairro, estado, 
                    cep, emailEmpresa, telcomercial, celEmpresa, nomeResponsavel, rg, emailResponsavel, celResponsavel) 
                    VALUES ('$nomeEmpresa','$cnpj','$inscEst','$endereco','$numero','$complemento','$bairro','$cidade','$estado','$cep',
                    '$emailEmpresa','$telefone','$celEmpresa','$responsavel','$rg','$emailResp','$celResponsavel')";

if(mysqli_query($conexao, $sql)){
    header("Location: cad_empresas.php");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();


