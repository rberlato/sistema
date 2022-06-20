<?php
require_once '../bd/conexao.php';
//-------------------------------------//
$nomeEmpresa =    trim($_POST['nomeEmpresa']);
$cnpj =           trim($_POST['cnpj']);
$inscEst =        trim($_POST['inscEst']);
$cep =            trim($_POST['cep']);
$rua =            trim($_POST['rua']);
$numero =         trim($_POST['numero']);
$complemento =    trim($_POST['complemento']);
$bairro =         trim($_POST['bairro']);
$cidade =         trim($_POST['cidade']);
$estado =         trim($_POST['estado']);
$emailComercial = trim($_POST['emailComercial']);
$telComercial =   trim($_POST['telComercial']);
$celComercial =   trim($_POST['celComercial']);
$responsavel =    trim($_POST['nomeResponsavel']);
$rg =             trim($_POST['rg']);
$emailResp =      trim($_POST['emailResponsavel']);
$celResponsavel = trim($_POST['celResponsavel']);

$sql = "INSERT INTO empresas (nomeEmpresa, cnpj, inscEst, 
                    cep, rua, numero, complemento, 
                    cidade, bairro, estado, 
                    emailComercial, telcomercial, celComercial, 
                    nomeResponsavel, rg, emailResponsavel, celResponsavel)
                     
                    VALUES ('$nomeEmpresa','$cnpj','$inscEst',
                    '$cep','$rua','$numero','$complemento',
                    '$bairro','$cidade','$estado', 
                    '$emailComercial','$telComercial','$celComercial',
                    '$responsavel','$rg','$emailResp','$celResponsavel')";

if(mysqli_query($conexao, $sql)){
    header("Location: cad_empresas.php");
}else{
    echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
}
$conexao->close();


