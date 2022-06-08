<?php
include_once '../../bd/conexao.php';
$id = $_GET['id'];
mysqli_set_charset($conexao, "utf8");
$sql = "SELECT * FROM empresas WHERE  id = '$id' LIMIT 1";
$result = mysqli_query($conexao, $sql);
while ($i = mysqli_fetch_array($result)) {
    $id =           trim($i['id']);
    $nomeEmpresa =  trim($i['nomeEmpresa']);
    $cnpj =         trim($i['cnpj']);
    $inscEst =      trim($i['inscEst']);
    $endereco =     trim($i['endereco']);
    $numero =       trim($i['numero']);
    $complemento =  trim($i['complemento']);
    $bairro =       trim($i['bairro']);
    $cidade =       trim($i['cidade']);
    $estado =       trim($i['estado']);
    $cep =          trim($i['cep']);
    $emailEmpresa = trim($i['emailEmpresa']);
    $telefone =     trim($i['telcomercial']);
    $celEmpresa =   trim($i['celEmpresa']);
    $responsavel =  trim($i['nomeResponsavel']);
    $rg =           trim($i['rg']);
    $emailResp =    trim($i['emailResponsavel']);
    $celResponsavel =   trim($i['celResponsavel']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/cad_empresas.css">
    <!-- <link rel="stylesheet" href="../../css/geral.css"> -->
</head>


<body>
    <!-- Pesquisa Empresa -->
    <div class="container mt-5">
        <form method="get" name="busca" action="pesquisa.php">
            <div class="form-row">
                <div class="form-group col-md-11">
                    <input type="text" name="busca" class="form-control" id="busca" aria-describedby="busca" placeholder="Para Editar o cadastro da empresa, Pesquise-a pelo nome" required>

                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <button type="submit" name="pesquisar" value="pesquisar" class="btn btn-primary">Pesquisar</button>
                    </div>
                </div>
            </div>
        </form>
        <hr class="my-4">
    </div>

    <!-- Editar Empresa -->
    <div class="container">
        <div class="jumbotron">
            <h4 class="display-4">Atualização do Cadastro de Empresas</h4>
            <p class="lead">Para realizar a atualização no cadastro da Sua empresa, Preencha diretamente os campos necessários.</p>
        </div>
    </div>

    <!-- Envia para Edição -->
    <div class="container mb-3">
        <form method="post" name="empresa" action="atualizar.php">
            <div class="jumbotron ">
                <div class="container-fluid cad_empresas">
                    <h5>Dados para Cadastro:</h5><br>
                    <label for="nomeEmpresa">Nome / Razão Social da Empresa</label>
                    <input type="text" name="nomeEmpresa" class="form-control" id="nome" aria-describedby="nomeEmpresa" placeholder="Nome Empresa" required value="<?php echo $nomeEmpresa ?>">
                    <br>
                    <div class="form-row">

                        <div>
                            <input type="hidden" name="id" class="form-control" id="id" aria-describedby="id" required value="<?php echo $id ?>">
                        </div>

                        <div class="col">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" maxlength="15" class="form-control" id="cnpj" aria-describedby="cnpj" placeholder="CNPJ valido" required value="<?php echo $cnpj ?>">
                        </div>
                        <div class="col">
                            <label for="inscEst">Inscrição Estadual</label>
                            <input type="text" name="inscEst" class="form-control" id="inscEst" aria-describedby="inscEst" placeholder="Inscrição Estadual" required value="<?php echo $inscEst ?>">
                        </div>
                    </div><br>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="endereco" aria-describedby="endereco" placeholder="Rua da Felicidade, Nº 45" required value="<?php echo $endereco ?>">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="numero">Numero</label>
                            <input type="text" name="numero" class="form-control" id="numero" aria-describedby="numero" placeholder="Nº" required value="<?php echo $numero ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento" aria-describedby="complemento" placeholder="Complemento" required value="<?php echo $complemento ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" aria-describedby="bairro" placeholder="Bairro" required value="<?php echo $bairro ?>">
                        </div><br>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="cidade" aria-describedby="cidade" placeholder="Cidade" requiredvalue="<?php echo $cidade ?>">
                        </div>


                        <div class="form-group col-md-2">
                            <label for="estado">Estado</label>
                            <select id="estado" class="form-control" value="<?php echo $estado ?>">
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapá</option>
                                <option>Bahia</option>
                                <option>Amazonas</option>
                                <option>Distrito Federal</option>
                                <option>Espírito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option selected>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                                <option>Ceará</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" class="form-control" id="cep" aria-describedby="cep" placeholder="Digite um CEP" required value="<?php echo $cep ?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="emailEmpresa">Email</label>
                            <input type="text" name="emailEmpresa" class="form-control" id="emailEmpresa" aria-describedby="emailEmpresa" placeholder="Email" required value="<?php echo $emailEmpresa ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="telcomercial">Tel</label>
                            <input type="text" name="telcomercial" class="form-control" id="telcomercial" aria-describedby="telcomercial" placeholder="Telefone comercial" required value="<?php echo $telefone ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celEmpresa">Cel</label>
                            <input type="text" name="celEmpresa" class="form-control" id="celEmpresa" aria-describedby="celEmpresa" placeholder="Celular/Fax" required value="<?php echo $celEmpresa ?>">
                        </div>
                    </div>
                    <hr>
                    <h5>Contatos do Profissional Responsavel</h5><br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nomeResponsavel">Nome Completo</label>
                            <input type="text" name="nomeResponsavel" class="form-control" id="nomeResponsavel" aria-describedby="nomeResponsavel" placeholder="Nome Completo" required value="<?php echo $responsavel ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="rg">Documento de Identidade</label>
                            <input type="text" name="rg" class="form-control" id="rg" aria-describedby="rg" placeholder="RG" required value="<?php echo $rg ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="emailResponsavel">Email</label>
                            <input type="text" name="emailResponsavel" class="form-control" id="emailResponsavel" aria-describedby="emailResponsavel" placeholder="Email do Responsavel" required value="<?php echo $emailResp ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="celResponsavel">Celular</label>
                            <input type="text" name="celResponsavel" class="form-control" id="celResponsavel" aria-describedby="celResponsavel" placeholder="Celular" required value="<?php echo $celResponsavel ?>">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <!-- <input type="submit" name="salvar" value="Cadastrar"> -->
                            <a class="btn btn-secondary" href="http://192.168.0.111/sistema/cadastro/empresas/cad_empresas.php">Cadastrar Nova Empresa</a>
                            <button type="submit" name="salvar" value="Cadastrar" class="btn btn-warning">Atualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>