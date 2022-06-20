<?php
include('../verifica_login.php');
include('../bd/conexao.php')

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/geral.css">
    <title>Comentários</title>
</head>

<body>
    <?php include('../menu.php'); ?>

    <div class="bg">
        <div class="center blur">

            <h2 style="color: #000;">comentários</h2>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu Nome">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="msg" class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="Enviar Mensagem" id="enviar">
                </div>
            </form>
            <br><br>
        </div>


        <?php
        $cont = "select count(*) from mensagens;";


        $sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
        $result = mysqli_query($conexao, $sql);

        if ($cont > 0) {
            while ($i = mysqli_fetch_assoc($result)) {
                echo '
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-body text-success">
                        <h6 class="card-title"> ' . $i['id'] . '</h6>
                        <h5 class="card-title">' . $i['nome'] . '</h5>
                        <p class="card-text">' . $i['msg'] . '</p>
                        <p class="card-text">' . $i['data_msg'] . '</p>
                        <a class="btn btn-danger" href="excluir.php?id=' . $i['id'] . '" onclick="return deletar();">Excluir</a>
                        <a class="btn btn-warning" href="editar.php?id=' . $i['id'] . '">Editar</a>
                    </div>
                </div>';
            };
        } else {
            echo "Não há mensagem.";
        }

        ?>

    </div>
</body>

</html>