<?php
include '../bd/conexao.php';
include '../menuBootstrap.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
<div class="container text-center" style="padding-top: 8vh;">
        <div class="jumbotron">
        <h4 class="display-4" style="text-transform: uppercase; font-family: Arial;">Cadastro de Empresas</h4>
            <p class="lead">Para realizar o cadastro da Sua empresa, tenha em mãos os dados necessários.</p>
        </div>
    </div>

    <div class="container  mb-3">
        <form method="post" name="empresa" action="cadastrar.php">

            <div class="jumbotron ">
            <div class="pt-5">
                    <h5 style="text-transform: uppercase; font-family: Arial;">Dados para Cadastro:</h5>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nomeEmpresa">Nome / Razão Social da Empresa</label>
                            <input type="text" name="nomeEmpresa" class="form-control" id="nome" aria-describedby="nomeEmpresa" placeholder="Nome Empresa" required>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" maxlength="15" class="form-control" id="cnpj" aria-describedby="cnpj" placeholder="CNPJ valido" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inscEst">Inscrição Estadual</label>
                            <input type="text" name="inscEst" class="form-control" id="inscEst" aria-describedby="inscEst" placeholder="Inscrição Estadual" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="cep">CEP:</label>
                            <input type="text" id="Cep" name="cep" class="form-control" aria-describedby="Cep" placeholder="Digite um CEP" required>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="rua">Rua</label>
                            <input type="text" id="Rua" name="rua" class="form-control" aria-describedby="Rua" placeholder="Rua da Felicidade" required>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="numero">Numero</label>
                            <input type="text" id="Numero" name="numero" class="form-control" aria-describedby="numero" placeholder="Nº" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="complemento">Complemento</label>
                            <input type="text" id="Complemento" name="complemento" class="form-control" aria-describedby="Complemento" placeholder="Complemento" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="Bairro" name="bairro" class="form-control" aria-describedby="Bairro" placeholder="Bairro" required>
                        </div><br>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="Cidade" name="cidade" class="form-control" aria-describedby="Cidade" placeholder="Cidade" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="estado">Estado</label>
                            <input type="text" id="Estado" name="estado" class="form-control" aria-describedby="Estado" placeholder="Estado" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="emailcomercial">Email</label>
                            <input type="text" name="emailComercial" class="form-control" aria-describedby="emailcomercial" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="telcomercial">Tel</label>
                            <input type="text" name="telComercial" class="form-control" aria-describedby="telcomercial" placeholder="Telefone comercial" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celcomercial">Cel</label>
                            <input type="text" name="celComercial" class="form-control" aria-describedby="celcomercial" placeholder="Celular/Fax" required>
                        </div>                        
                    </div>

                    <hr><h5 class="pb-5" style="text-transform: uppercase; font-family: Arial;">Contatos do Profissional Responsavel</h5>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nomeResponsavel">Nome Completo</label>
                            <input type="text" name="nomeResponsavel" class="form-control" id="nomeResponsavel" aria-describedby="nomeResponsavel" placeholder="Nome Completo" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="rg">Documento de Identidade</label>
                            <input type="text" name="rg" class="form-control" id="rg" aria-describedby="rg" placeholder="RG" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="emailResponsavel">Email</label>
                            <input type="text" name="emailResponsavel" class="form-control" id="emailResponsavel" aria-describedby="emailResponsavel" placeholder="Email do Responsavel" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celResponsavel">Celular</label>
                            <input type="text" name="celResponsavel" class="form-control" id="celResponsavel" aria-describedby="celResponsavel" placeholder="Celular" required>
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