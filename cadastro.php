<strong>
    <h3>Ainda não é cadastrado ? </h3>
    <h6> Não fique de fora dessa, não perca essa oportunidade. </h6>
    <p> cadastre-se aqui </p>
</strong>
<hr>
<div>
    <?php
    if (isset($_SESSION['status_cadastro'])) :
    ?>
        <div class="alert alert-success" role="alert">
            <p>Cadastro realizado com Sucesso!</p>
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
            <p class="alert-heading">O usuário escolhido já existe. Informe outro e tente novamente.</p>
        </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>

    <div>
        <form action="./cadastrar.php" id="frmLogin" method="POST">

            <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Informe seu Nome" autofocus required>
            </div>

            <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="Informe seu email" required>
            </div>

            <div class="form-group">
                <input name="usuario" type="text" class="form-control" placeholder="Informe seu Usuário" required>
            </div>

            <div class="form-group">
                <input name="senha" class="form-control" type="password" placeholder="Informe sua Senha" minlength="1" required>
            </div>
            <hr>

            <button type="submit" class="btn btn-warning btn-md btn-block">Cadastrar</button>

        </form>
    </div>

</div>

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