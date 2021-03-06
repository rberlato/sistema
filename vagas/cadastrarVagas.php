<?php
session_start();
include '../bd/conexao.php';
include_once('../menuBootstrap.php');
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
    <div class="container" style="padding-top: 8vh;">
        <div class="jumbotron ">
            <h4 class="display-4 text-center" style="text-transform: uppercase; font-family: Arial;">Cadastro de De vagas</h4>
            <p class="lead">Para cadastrar uma vaga, você precisar ser uma Empresa cadastrada ! <br>Caso não tenha sua empresa cadastrada,
                clique <a href="http://192.168.0.111/sistema/empresas/cad_empresas.php">aqui</a> para realizar o cadastro da Sua empresa</p>
            <h5 class="text-muted text-center">Tenha em mãos os dados necessários.</h5>
        </div>
    </div>

    <div class="container">
        <form method="post" name="titulo" action="cadastrar.php">
            <div class="jumbotron ">
                <div class="pt-5">
                    <h5 style="text-transform: uppercase; font-family: Arial;">Dados para Cadastro:</h5>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="titulo">Titulo da Vaga</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="titulo" placeholder="Titulo da Vaga" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="criador">Criador</label>
                            <input type="text" name="criador" maxlength="15" class="form-control" id="criador" aria-describedby="criador" placeholder="criador" <?= $_SESSION['nome'] ?>>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="empresa">Empresa</label>
                            <input type="text" name="empresa" class="form-control" id="empresa" aria-describedby="empresa" placeholder="Empresa" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição da Vaga:</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="5"></textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ativa">
                            <label class="form-check-label pr-3" for="ativa">Ativa</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="pausada" checked>
                            <label class="form-check-label" for="pausada">Pausada</label>
                        </div>

                        <div class="form-group col-md-12 pt-5">
                            <button type="submit" name="salvar" value="cadastrar" class="btn btn-primary">Cadastrar Vaga</button>
                        </div>



                    </div>
                </div>
        </form>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>

</body>

</html>