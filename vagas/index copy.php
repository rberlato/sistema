<?php
include_once('../bd/conexao.php');
include_once('../menu.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Login - Rafael Berlato </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/menu.css">
    </head>
    
    
    <body>
        <div class="container">
            <div class="" style="padding: 55px 0;">
            <h1>Vagas Cadastradas
                <a class="btn btn-success" href="cadastrarVagas.php">Nova Vaga</a>
            </h1>

        </div>
    </div>

    <?php include 'campo_pesquisa.php' ?>
    
    <div class="container-fluid">
        <table class="table table-striped table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Criador</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Data de cadastro</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            
            <?php
            $sql = "SELECT * FROM vagas";
            $result = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($result)) {
                echo '
                <tbody class="text-center">
                <tr>
                        <th scope="row">' . $i['id'] . '</th>
                        <th>' . $i['titulo'] . '</th>
                        <th>' . $i['criador'] . '</th>
                        <th>' . $i['descricao'] . '</th>
                        <th>' . $i['empresa'] . '</th>
                        <th>' . $i['dataCadastro'] . '</th>
                        <th>' . $i['statusVaga'] . '</th>                        
                        <th>
                        <a class="btn btn-warning" href="editar.php?id=' . $i['id'] . '">Editar</a>
                        <a class="btn btn-danger" href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();">Excluir</a>
                        </th>
                    </tr>
                </tbody>

                ';
            }
            ?>

        </table>

    </div>


    <!-- 
    <div class="container">
        <h1 class="mt-5">Usuários Cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($result)) {
                echo '
                <tbody>
                    <tr>
                        <th scope="row">' . $i['id'] . '</th>
                        <th>' . $i['nome'] . '</th>
                        <th>' . $i['email'] . '</th>
                        <th>' . $i['usuario'] . '</th>
                        <th><a href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();"><i class="bi bi-trash"></i>Deletar</a></th>
                    </tr>
                </tbody>

                ';
            }
            ?>

        </table>

    </div> -->


</body>

<script src="../js/menu.js"></script>
<script>
    function deletar() {
        if (confirm("Deseja Deletar esse Registro ?"))
            document.forms[0].submit();
        else
            return false;
    }
</script>

</html>