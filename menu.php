<?php
include_once('bd/conexao.php');

// verifica se o usuário é administrador, caso sim, exibi os botões para excluir e editar
$consulta_user = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $consulta_user);
$dados = mysqli_fetch_array($result);

$nome = $dados['nome'];
$email = $dados['email'];
$adm = $dados['adm'];
$user = '';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar  <?= $_SESSION['nome'] ?></title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/menu.css" />
</head>


<body>
    <header class="fixed-top">
        <nav>
            <a href="http://192.168.0.111/sistema/painel.php" style="text-transform: uppercase; color: #fff;"> <?= $_SESSION['nome'] ?></a>

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class="nav-list">
                <li><a href="http://192.168.0.111/sistema/empresas/index.php">Empresas</a></li>
                <li><a href="http://192.168.0.111/sistema/vagas/index.php">Vagas</a></li>

                <li><a href="http://192.168.0.111/sistema/comentarios/coments.php">Comentarios</a></li>
            </ul>

            <div class="d-flex">
                <a href="http://192.168.0.111/sistema/logout.php" class="btn btn-danger btn-sm" role="button">Sair</a>
            </div>

        </nav>
    </header>
    <script src="./js/mobile-navbar.js"></script>
</body>

</html>