<?php
include_once('conexao.php');
include_once('verifica_login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/menu.css" />
</head>


<body>
    <header class="fixed-top">
        <nav>
            <a href="./painel.php" style="text-transform: uppercase; color: #fff;"> <?= $_SESSION['nome'] ?></a>


            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class="nav-list">
                <li><a href="../../rss/">Rss Tec Mundo</a></li>
                <li><a href="http://192.168.0.111/sistema/empresas/cad_empresas.php">Empresas</a></li>
                <li><a href="http://192.168.0.111/sistema/empresas/index.php" >Lista de Empresas </a></li>
            </ul>

            <div class="d-flex">
                <a href="../logout.php" class="btn btn-danger" role="button">Sair</a>
            </div>

        </nav>
    </header>

    <br><br>

    <script src="../js/mobile-navbar.js"></script>
</body>

</html>