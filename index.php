
<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/geral.css">

</head>

<body class="container bg">
    <img class="image-index" src="./image/work_tree.jpeg" alt="">
    <section class="container">
        <div>
            <h3>Teste Teste</h3>
            <p>Para saber mais entre ou
            <p>Ainda não tem cadastro ? Cadastre-se aqui</p><a class="btn btn-primary" href="http://192.168.0.111/sistema/tela-login.php">Para entrar</a>

            <div>
                <?php
                for ($i = 1; $i <= 2; $i++) {
                    echo '
                <span class="cards-index">
                    <img class="card-img-top" src="./image/work_one.jpeg" alt="Imagem de capa do card">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </span>
                ';
                }
                ?>
            </div>
        </div>

    </section>
</body>

</html>