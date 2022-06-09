<?php
include_once('conexao.php');
include_once('menu.php');

// print_r($_SESSION);
if ((isset($_SESSION['usuario']) == true) and (isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login - Rafael Berlato </title>
    <link rel="stylesheet" href="../css/geral.css">
</head>


<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Empresas Cadastradas</h1>
        </div>

        <table class="table jumbotron">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM empresas";
            $result = mysqli_query($conexao, $sql);

            while ($i = mysqli_fetch_assoc($result)) {
                echo '
                <tbody>
                    <tr>
                        <th scope="row">' . $i['id'] . '</th>
                        <th>' . $i['nomeEmpresa'] . '</th>
                        <th>' . $i['celEmpresa'] . '</th>
                        <th>' . $i['cnpj'] . '</th>
                        <th><a href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();"><img src="../image/trash.svg" alt=""></a></th>
                        <th><a href="editar.php?id=' . $i['id'] . '"><img src="../image/pencil.svg" alt=""></a></th>
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

<script>
    function deletar() {
        if (confirm("Deseja Deletar esse Registro ?"))
            document.forms[0].submit();
        else
            return false;
    }
</script>

</html>