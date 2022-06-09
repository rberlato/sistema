<?php
include_once('conexao.php');
include_once('./verifica_login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/menu.css" />
</head>


<body>
    <header class="fixed-top">
        <nav>
            <span >
                <a href="./painel.php" style="text-transform: uppercase; color: #fff;"> <?= $_SESSION['nome'] ?></a>
            </span>

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class="nav-list">
                <li><a href="../sistema/rss/index.php">Rss Tec Mundo</a></li>
                <li><a href="noticias.php">Noticias Tec Mundo</a></li>
                <li><a href="http://192.168.0.111/sistema/rss/NoticiasG1.php">Noticias G1 Empregos</a></li>
                <li><a href="http://192.168.0.111/sistema/cadastro/empresas/cad_empresas.php">Empresas</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="http://192.168.0.111/sistema/comentarios/coments.php">Comentarios</a></li>
            </ul>

            <div class="d-flex">
                <a href="./logout.php" class="btn btn-danger" role="button">Sair</a>
            </div>

        </nav>
    </header>
    <script src="./js/mobile-navbar.js"></script>
</body>

</html>