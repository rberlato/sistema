<?php
session_start();

include_once('../bd/conexao.php');
include_once('../menuBootstrap.php');

// Realiza a consulta das empresas
$consulta_empresas = "SELECT * FROM empresas";
$result = mysqli_query($conexao, $consulta_empresas);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login - Rafael Berlato </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="padding-top: 5vh;">
        <div>
            <h1>Empresas Cadastradas
                <a class="btn btn-success btn-sm" href="cad_empresas.php">Nova Empresa</a>
            </h1>
        </div>
    </div>

    <div class="">
        <table class="table container-fluid text-center">
            <thead class="table-dark ">
                <tr class="table-striped">
                    <th scope="col">Codigo Empresa</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Celular do responsavel</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>

            <?php
            if ($_SESSION['nome'] == $nome) {
                $user =  $adm;
                echo $_SESSION['nome'] . ' com previlegios de administrador';
                while ($i = mysqli_fetch_array($result)) {
                    echo '
                    <tbody>
                        <tr class="text-center">
                                <th scope="row">' . $i['id'] . '</th>
                                <th>' . $i['nomeEmpresa'] . '</th>
                                <th>' . $i['cnpj'] . '</th>
                                <th>' . $i['telComercial'] . '</th>
                                <th>' . $i['celComercial'] . '</th>
                                <th>' . $i['celResponsavel'] . '</th>
                                <th><a class="btn btn-warning btn-sm" href="editar.php?id=' . $i['id'] . '">Atualizar </a>
                                <a class="btn btn-danger btn-sm" href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();">Excluir</a>    
                            </th>
                        </tr>
                    </tbody>
                        ';
                }
            } else {
                echo $_SESSION['nome'] . ' Não tem previlegios de administrador';
                while ($i = mysqli_fetch_array($result)) {
                    echo '
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">' . $i['id'] . '</th>
                            <th>' . $i['nomeEmpresa'] . '</th>
                            <th>' . $i['cnpj'] . '</th>
                            <th>' . $i['telComercial'] . '</th>
                            <th>' . $i['celComercial'] . '</th>
                            <th>' . $i['celResponsavel'] . '</th>
                            <th><a class="btn btn-warning btn-sm" href="editar.php?id=' . $i['id'] . '">Atualizar</a>                               
                        </th>
                    </tr>
                    </tbody>';
                }
            }
            ?>
        </table>
    </div>
</body>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.js"></script>
<script>
    function deletar() {
        if (confirm("Deseja Deletar esse Registro ?"))
            document.forms[0].submit();
        else
            return false;
    }
</script>

</html>