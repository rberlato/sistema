<?php
require_once 'conexao.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
    <link rel="stylesheet" href="../../css/geral.css">
    boo
</head>


<body>

    <div class="container">
        <?php
        
        $id = $_GET['id'];
        $sql = "DELETE FROM empresas where  id = '$id'";
        if(mysqli_query($conexao, $sql)){
            header("Location: cad_empresas.php");
        }else{
            echo 'Erro Interno';
        }
        ?>
    </div>


</body>

</html>