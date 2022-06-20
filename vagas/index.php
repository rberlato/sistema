<?php
session_start();

include_once('../bd/conexao.php');
include_once('verifica_login.php');

include_once('../menuBootstrap.php');

// Realiza a consulta das vagas
$consulta_vagas = "SELECT * FROM vagas";
$result = mysqli_query($conexao, $consulta_vagas);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="padding-top: 8vh;">
        <div>
            <h1>Vagas Cadastradas
                <a class="btn btn-success btn-sm" href="cadastrarVagas.php">Nova Vaga</a>
            </h1>
        </div>
    </div>

    <div class="">
        <table class="table container-fluid text-center">
            <thead class="table-dark ">
                <tr class="table-striped">
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
            if ($_SESSION['nome'] == $nome) {
                $user =  $adm;
                echo $_SESSION['nome'] . ' com previlegios de administrador';
                while ($i = mysqli_fetch_assoc($result)) {
                    echo '
                    <tbody class="text-center">
                        <tr class="table-hover">
                            <th scope="row"> ' . $i['id'] . ' </th>
                            <th> ' . $i['titulo'] . ' </th>
                            <th> ' . $i['criador'] . ' </th>
                            <th> ' . $i['descricao'] . ' </th>
                            <th> ' . $i['empresa'] . ' </th>
                            <th> ' . $i['dataCadastro'] . ' </th>
                            <th> ' . $i['statusVaga'] . ' </th>
                            <th><a class="btn btn-warning btn-sm" href="editar.php?id=' . $i['id'] . '">Editar</a>
                            <a class="btn btn-danger btn-sm" href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();">Excluir</a>
                            </th>
                        </tr>
                    </tbody>
                            ';
                }
            } else {
                echo $_SESSION['nome'] . ' Não tem previlegios de administrador';
                while ($i = mysqli_fetch_assoc($result)) {
                    echo '
                    <tbody class="text-center">
                        <tr>
                            <th scope="row"> ' . $i['id'] . ' </th>
                            <th> ' . $i['titulo'] . ' </th>
                            <th> ' . $i['criador'] . ' </th>
                            <th> ' . $i['descricao'] . ' </th>
                            <th> ' . $i['empresa'] . ' </th>
                            <th> ' . $i['dataCadastro'] . ' </th>
                            <th> ' . $i['statusVaga'] . ' </th>
                            <th><a class="btn btn-warning btn-sm" href="editar.php?id=' . $i['id'] . '">Editar</a>
                            </th>
                        </tr>
                    </tbody>';
                }
            }
            ?>
        </table>
    </div>
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