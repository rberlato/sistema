<?php
session_start();
require_once '../bd/conexao.php';
require_once('../menuBootstrap.php');
//-------------------------------------//
$id = $_GET['id'];
mysqli_set_charset($conexao, "utf8");

$sql = "SELECT * FROM vagas WHERE  id = '$id' LIMIT 1";
$result = mysqli_query($conexao, $sql);

while ($i = mysqli_fetch_array($result)) {
    $id =        trim($i['id']);
    $titulo =    trim($i['titulo']);
    $criador =   trim($i['criador']);
    $empresa =   trim($i['empresa']);
    $descricao = trim($i['descricao']);
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
    <link rel="stylesheet" href="../css/geral.css">
</head>

<body>
    <div class="container" style="padding-top: 8vh;">
        <div class="jumbotron">
            <h4 class="display-4" style="text-transform: uppercase; font-family: Arial;">Atualização de Vagas</h4>
            <p class="lead">Tenha em mãos os dados necessários.</p>
        </div>
    </div>

    <!-- Envia para Edição -->
    <div class="container">
        <form method="post" action="atualizar.php">
            <div class="jumbotron ">
                <div class="pt-5">
                    <h5 style="text-transform: uppercase; font-family: Arial;">Dados para Cadastro:</h5>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="titulo">Titulo da Vaga</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="titulo" placeholder="Titulo da Vaga" required value="<?php echo $titulo ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="id"></label>
                            <input type="hidden" name="id" class="form-control" id="id" aria-describedby="id" placeholder="id" value="<?php echo $id ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="criador">Criador</label>
                            <input type="text" name="criador" maxlength="15" class="form-control" id="criador" aria-describedby="criador" placeholder="criador" required value="<?php echo $criador ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="empresa">Empresa</label>
                            <input type="text" name="empresa" class="form-control" id="empresa" aria-describedby="empresa" placeholder="Empresa" required value="<?php echo $empresa ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição da Vaga:</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="8"><?php echo $descricao ?></textarea>
                            <!-- <input type="text" name="descricao" class="form-control" id="descricao" aria-describedby="descricao" placeholder="descricao" required value=""> -->

                            <!-- <textarea class="form-control" name="descricao" id="descricao" rows="5"><?php echo $descricao ?></textarea > -->
                        </div>

                        <div class="form-group col-md-12 pt-5">
                            <button type="submit" class="btn btn-primary">Gravar Novos Dados da Vaga</button>
                        </div>



                    </div>
                </div>
        </form>
    </div>
    
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.js"></script>

</body>

</html>