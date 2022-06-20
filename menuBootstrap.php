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
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

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
    <!-- <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://192.168.0.111/sistema/painel.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Time</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Procurar uma Vaga" aria-label="Search">
                </form>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <a class="navbar-brand" href="http://192.168.0.111/sistema/painel.php">   <?php echo $nome ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="http://192.168.0.111/sistema/vagas">Vagas</a></li>
                        <li><a class="dropdown-item" href="http://192.168.0.111/sistema/empresas">Empresas</a></li>
                        <li><a class="dropdown-item" href="#">Quiz</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <button type="button" class="close" aria-label="Close">
            <a href="http://192.168.0.111/sistema/logout.php" class="btn btn-danger btn-sm" role="button">Sair</a>
        </button>
    </nav>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>