<?php
require_once '../bd/conexao.php';
require_once('../menuBootstrap.php');
//-------------------------------------//
$id = $_GET['id'];
mysqli_set_charset($conexao, "utf8");
$sql = "SELECT * FROM empresas WHERE  id = '$id' LIMIT 1";
$result = mysqli_query($conexao, $sql);
while ($i = mysqli_fetch_array($result)) {
    $id =                   trim($i['id']);
    $nomeEmpresa =          trim($i['nomeEmpresa']);
    $cnpj =                 trim($i['cnpj']);
    $inscEst =              trim($i['inscEst']);
    $cep =                  trim($i['cep']);
    $rua =                  trim($i['rua']);
    $numero =               trim($i['numero']);
    $complemento =          trim($i['complemento']);    
    $bairro =               trim($i['bairro']);
    $cidade =               trim($i['cidade']);
    $estado =               trim($i['estado']); 
    $emailComercial =       trim($i['emailComercial']);
    $telComercial =         trim($i['telComercial']);
    $celComercial =         trim($i['celComercial']);
    $responsavel =          trim($i['nomeResponsavel']);
    $rg =                   trim($i['rg']);
    $emailResp =            trim($i['emailResponsavel']);
    $celResponsavel =       trim($i['celResponsavel']);

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
</head>

<header class="container-fluid">
    <?php ?>
</header>

<body>
    <div class="container" style="padding-top: 8vh;">
        <div class="jumbotron">
        <h4 class="display-4" style="text-transform: uppercase; font-family: Arial;">Atualização do Cadastro de Empresas</h4>
            <p class="lead">Para realizar a atualização no cadastro da Sua empresa, Preencha diretamente os campos necessários.</p>
        </div>
    </div>

    <!-- Envia para Edição -->
    <div class="container mb-3">
        <form method="post" name="empresa" action="atualizar.php">

             <div class="jumbotron ">
                <div class="">
                <h5 class="pb-5" style="text-transform: uppercase; font-family: Arial;">Dados para Cadastro:</h5>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nomeEmpresa">Nome / Razão Social da Empresa</label>
                            <input type="text" name="nomeEmpresa" class="form-control" id="nome" aria-describedby="nomeEmpresa" placeholder="Nome Empresa" value="<?php echo $nomeEmpresa ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="id"></label>
                            <input type="hidden" name="id" class="form-control" id="id" aria-describedby="id" placeholder="id" value="<?php echo $id ?>">
                        </div>

                        <div class="form-group col-md-7">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" maxlength="15" class="form-control" id="cnpj" aria-describedby="cnpj" placeholder="CNPJ valido" value="<?php echo $cnpj ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inscEst">Inscrição Estadual</label>
                            <input type="text" name="inscEst" class="form-control" id="inscEst" aria-describedby="inscEst" placeholder="Inscrição Estadual" value="<?php echo $inscEst ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="cep">CEP:</label>
                            <input type="text" id="Cep" name="cep" class="form-control" aria-describedby="Cep" placeholder="Digite um CEP"  value="<?php echo $cep ?>">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="rua">Rua</label>
                            <input type="text" id="Rua" name="rua" class="form-control" aria-describedby="Rua" placeholder="Rua da Felicidade"  value="<?php echo $rua ?>" >
                        </div>
                        <div class="form-group col-md-1">
                            <label for="numero">Numero</label>
                            <input type="text" id="Numero" name="numero" class="form-control" aria-describedby="numero" placeholder="Nº"  value="<?php echo $numero ?>" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="complemento">Complemento</label>
                            <input type="text" id="Complemento" name="complemento" class="form-control" aria-describedby="Complemento" placeholder="Complemento"  value="<?php echo $complemento ?>" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="Bairro" name="bairro" class="form-control" aria-describedby="Bairro" placeholder="Bairro"  value="<?php echo $bairro ?>" >
                        </div><br>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="Cidade" name="cidade" class="form-control" aria-describedby="Cidade" placeholder="Cidade"  value="<?php echo $cidade ?>" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="estado">Estado</label>
                            <input type="text" id="Estado" name="estado" class="form-control" aria-describedby="Estado" placeholder="Estado"  value="<?php echo $estado ?>" >
                        </div>
                    </div>
                        <!-- campos de contato  -->
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="emailcomercial">Email</label>
                            <input type="text" name="emailComercial" class="form-control" aria-describedby="emailcomercial" placeholder="Email"  value="<?php echo $emailComercial ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="telcomercial">Tel</label>
                            <input type="text" name="telComercial" class="form-control" aria-describedby="telcomercial" placeholder="Telefone comercial"  value="<?php echo $telComercial ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celcomercial">Cel</label>
                            <input type="text" name="celComercial" class="form-control" aria-describedby="celcomercial" placeholder="Celular/Fax"  value="<?php echo $celComercial ?>">
                        </div>                        
                    </div>

                    <hr><h5 class="pb-5" style="text-transform: uppercase; font-family: Arial;">Contatos do Profissional Responsavel</h5>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nomeResponsavel">Nome Completo</label>
                            <input type="text" name="nomeResponsavel" class="form-control" id="nomeResponsavel" aria-describedby="nomeResponsavel" placeholder="Nome Completo"  value="<?php echo $responsavel ?>" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="rg">Documento de Identidade</label>
                            <input type="text" name="rg" class="form-control" id="rg" aria-describedby="rg" placeholder="RG"  value="<?php echo $rg ?>" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="emailResponsavel">Email</label>
                            <input type="text" name="emailResponsavel" class="form-control" id="emailResponsavel" aria-describedby="emailResponsavel" placeholder="Email do Responsavel" value="<?php echo $emailResp ?>" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celResponsavel">Celular</label>
                            <input type="text" name="celResponsavel" class="form-control" id="celResponsavel" aria-describedby="celResponsavel" placeholder="Celular"  value="<?php echo $celResponsavel ?>" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" name="salvar" value="cadastrar" class="btn btn-primary">Salvar Cadastro</button>
                        </div>
                    </div>

                    <script src="../js/jquery.js"></script>
                    <script src="../js/cep.js"></script>
                </div>
            </div>
        </form>
    </div>



</body>

</html>