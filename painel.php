<?php
include_once('conexao.php');
include_once('menu.php');

// print_r($_SESSION);
if ((isset($_SESSION['usuario']) == true) and (isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
// $logado = $_SESSION['usuario'];
// if (!empty($_GET['search'])) {
//     $data = $_GET['search'];
//     $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
// } else {
//     $sql = "SELECT * FROM usuarios ORDER BY id DESC";
// }
// $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login - Rafael Berlato </title>
    <link rel="stylesheet" href="css/geral.css">
</head>


<body class="bg">

</body>

</html>