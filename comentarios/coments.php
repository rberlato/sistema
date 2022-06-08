<?php
session_start();

try {
    $pdo = new PDO("mysql:dbname=sistemas;host=127.0.0.1", "rafaelberlato", "berlato_admin@1902");
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}

if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome =  $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":msg", $mensagem);
    $sql->execute();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/geral.min.css">
    <title>Comentários</title>
</head>

<body>

    <div class="container pt-5">
        <h2>comentários</h2>

        <form method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome:</label>
                <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu Nome">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem:</label>
                <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar Mensagem" id="enviar">
            </div>
        </form>
        <br><br>


        <?php
        $sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
        $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $mensagem) {
        ?>
                <div class="card mt-3" style="width: 18rem; ">
                    <strong style="text-align: center"><?php echo $mensagem['nome']; ?></strong><br>
                    <div class="card-body">
                        <p class="card-text"> <?php echo $mensagem['msg']; ?> </p>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </div><br>
                </div>

        <?php
            };
        } else {
            echo "Não há mensagem.";
        }
        ?>

        
    </div>
</body>

</html>