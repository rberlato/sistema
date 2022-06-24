<?php
include_once('bd/conexao.php');


// verifica se o usuário é administrador, caso sim, exibi os botões para excluir e editar
$consulta_user = "SELECT * FROM usuarios";

$result = mysqli_query($conexao, $consulta_user);
$dados = mysqli_fetch_array($result);

$nome = $dados['nome'];
$email = $dados['email'];
$adm = $dados['adm'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $_SESSION['nome'] ?></title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://192.168.0.111/sistema/painel.php"> <?php echo $_SESSION['nome'] ?></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Atualizações</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://192.168.0.111/sistema/time">Time</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Vagas</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="http://192.168.0.111/sistema/vagas">Vagas</a></li>
                            <li><a class="dropdown-item" href="http://192.168.0.111/sistema/empresas">Empresas</a></li>
                            <li><a class="dropdown-item" href="http://192.168.0.111/sistema/time/">Time</a></li>
                            <li><a class="dropdown-item" href="#">Quiz</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="http://192.168.0.111/sistema/logout.php" class="btn btn-danger btn-sm">Sair</a>


        </div>
    </nav>



















    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>