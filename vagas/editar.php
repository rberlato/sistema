<?php

include_once 'conexao.php';

$id = $_GET['id'];
mysqli_set_charset($conexao, "utf8");

$sql = "SELECT * FROM empresas WHERE  id = '$id' LIMIT 1";
$result = mysqli_query($conexao, $sql);

while ($i = mysqli_fetch_array($result)) {
    $id =                   trim($i['id']);

    $titulo =       trim($_POST['titulo']);
    $criador =      trim($_POST['criador']);
    $empresa =      trim($_POST['empresa']);
    $descricao =    trim($_POST['descricao']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <!-- <link rel="stylesheet" href="../../css/geral.css"> -->
</head>


<body class="p-5">
    <?php include_once('../menu.php')?>
    <div class="container ">
        <div class="jumbotron ">
            <h4 class="display-4" style="text-transform: uppercase; font-family: Arial;">Edição das vagas</h4>
            <h5 class="text-muted">Tenha em mãos os dados necessários.</h5>
        </div>
    </div>





    <div class="container">
        <form method="post" name="titulo" action="cadastrar.php">
            <div class="jumbotron ">
                <div class="">
                    <h5 class="pb-5" style="text-transform: uppercase; font-family: Arial;">Dados para Cadastro:</h5>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="titulo">Titulo da Vaga</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="titulo" placeholder="Titulo da Vaga" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="criador">Criador</label>
                            <input type="text" name="criador" maxlength="15" class="form-control" id="criador" aria-describedby="criador" placeholder="criador" required>
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



                        <script src="../js/jquery.js"></script>
                    </div>
                </div>
        </form>
    </div>



</body>

</html>