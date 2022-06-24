<?php
//include_once('../../verifica_login.php');
//include_once('../../menu.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>


<body>

    <div class="container">
        <?php
        require_once 'conexao.php';

        $pesquisar = $_GET['busca'];
        $sql = "SELECT * FROM empresas where nomeResponsavel or nomeEmpresa like '%$pesquisar%'  ";
        $row = mysqli_query($conexao, $sql);

        while ($result = mysqli_fetch_assoc($row)) {
            echo '<strong>Empresa: </strong>'. $resulPesquisa = $result['nomeEmpresa'];
            echo ' <strong>Responsavel: </strong>  ' . $resulPesquisa = $result['nomeResponsavel'];
            echo '
            <div class="container jumbotron">
            <a class="btn btn-success" href="cad_empresas.php?id=' . $result['id'] . '">Cadastrar Novo</a>
                <a class="btn btn-danger" href="excluir.php?id=' . $result['id'] . '">Excluir</a>  
                <a class="btn btn-warning" href="editar.php?id=' . $result['id'] . '">Editar</a>
                <a class="btn btn-light" href="http://192.168.0.111/sistema/cadastro/empresas/cad_empresas.php">Voltar</a>
            </div><hr>';
        }
        ?>
    </div>
</body>

</html>