<?php 
session_start();
include("bd/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

// Extrai somente os números
// $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
// Verifica se foi informado todos os digitos corretamente
// if (strlen($cpf) != 11) {
//     return false;
// }

// // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
// if (preg_match('/(\d)\1{10}/', $cpf)) {
//     return false;
// }

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: tela-login.php');
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('$nome','$email', '$usuario', '$senha')";

//verificando se o insert foi realizado.
if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = TRUE;
}

$conexao->close();

header('Location: tela-login.php');
exit;
