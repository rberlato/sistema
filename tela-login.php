<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login - Rafael Berlato </title>


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/geral.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body class="contianer bg-init">
    <section>
        <div class="card" id="login">
            <div class="card-body">
                <h3 class="alert-heading text-light"><strong>Faça seu Login</strong> </h3>
                <div>
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>

                        <div class="alert alert-danger" role="alert">
                            <p class="alert-heading">ERRO: Usuário ou senha inválidos.</p>
                        </div>

                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <?php
                    if (isset($_SESSION['status_cadastro'])) :
                    ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Muito bem!</h4>
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="./tela-login.php">aqui</a></p>
                        </div>

                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php
                    if (isset($_SESSION['usuario_existe'])) :
                    ?>
                        <div class="alert alert-warning" role="alert">
                            <p class="alert-heading">O usuário escolhido já existe.</p>
                            <p> Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>

                </div>

                <form action="login.php" method="post" id="frmLogin">

                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" id="frmLogin" class="form-control" placeholder="Seu Email" autofocus="">
                    </div>

                    <!-- <div class="form-group">
                        <label>Login</label>
                        <input name="usuario" type="text" class="form-control" placeholder="Seu usuário" autofocus="" required>
                    </div> -->

                    <div class="form-group pb-3">
                        <label>Senha</label>
                        <input name="senha" type="password" id="frmLogin" class="form-control" placeholder="Sua senha">
                    </div>

                    <button type="submit" class="btn btn-success btn-sm btn-block" id="entrarSistema">Entrar</button>


                </form>


                <strong>
                    <h3 class="pt-5 text-white">Ainda não é cadastrado ? </h3>
                    <h6> Não fique de fora dessa, não perca essa oportunidade. </h6>
                    <strong> cadastre-se <a class="text-danger" href="tela-Cadastro.php">Aqui</a></strong>
                </strong>
            </div>
        </div>
    </section>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#entrarSistema').click(function() {

            vazios = validarFormVazio('frmLogin');

            if (vazios > 0) {
                alert("Campos Obrigatórios!!");
                return false;
            }

            dados = $('#frmLogin').serialize();

            $.ajax({
                type: "POST",
                data: dados,
                url: "./tela-login.php",
                success: function(r) {
                    //alert(r);

                    if (r == 1) {
                        window.location = "./tela-login.php";
                    } else {
                        alert("Acesso Negado!!");
                    }
                }
            });
        });
    });
</script>