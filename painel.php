<?php
session_start();

include_once('bd/conexao.php');
include_once('menuBootstrap.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>


<body class="bg-init">
    <div class="pt-5 ">
        <section class="py-5 container">
            <div class="row py-lg-5 nameSession">
                <div class="col-lg-6 col-md-8 mx-auto text-center">
                    <h1 class="p-5">Olá <?= $_SESSION['nome'] ?></h1>
                    <p class="lead">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <a href="http://192.168.0.111/sistema/vagas/index.php" class="btn btn-primary btn-sm my-2">Ver todas as Vagas Disponiveis</a>
                    <a href="http://192.168.0.111/sistema/vagas/index.php" class="btn btn-primary btn-sm my-2">Ver Vagas por Empresas</a>
                    <a href="http://192.168.0.111/sistema/vagas/index.php" class="btn btn-success btn-sm btn-block my-2">Cadastre seu Curriculum</a>
                </div>
            </div>
        </section>

        <article class=" p-2">
            <div class="col-lg-6 col-md-8 mx-auto ">
                <h2 class="row py-lg-2 ">Para Empresas</h2>
                <h5>Como escrever uma descrição eficaz de vaga</h5>
                <p class="lead">A utilização de títulos e descrições de vagas de fácil entendimento ao usuário é uma das melhores maneiras de aumentar a exposição das suas vagas a candidatos relevantes no Indeed. Pelo fato do Indeed ser um motor de busca, títulos eficazes e descrições de vagas detalhadas resultam no melhor resultado possível para os termos de busca dos candidatos. Com isso, mais candidatos qualificados irão clicar e se candidatar às suas vagas.</p>

                <h5>Como escrever um título de vaga eficaz:</h5>

                <ul class="lead">
                    <li> Títulos de vagas eficazes são concisos e específicos. </li>
                    <li> Descreva o tipo de trabalho a ser realizado. Se estiver à procura de candidatos com experiência em uma determinada área, especifique a área e isto irá resultar em candidatos mais qualificados. Por exemplo: “Representante de Vendas Farmacêuticas” é mais assertivo do que “Representante de Vendas”. </li>
                    <li> Especifique o nível de carreira da vaga. Se estiver procurando candidatos com um certo nível de experiência, especifique-o. Por exemplo: Contabilidade - recém-formado. </li>
                </ul>

                <h5> É melhor evitar: </h5>

                <ul class="lead">
                    <li> Títulos de vagas longos, que mais parecem descrições de vagas.</li>
                    <li> Jargões internos, números de referência e siglas que não são usados por candidatos e provavelmente não serão utilizados na busca de emprego.</li>
                    <li>Pontos de exclamação. </li>
                </ul>

                <h5> Como escrever uma descrição de vaga eficaz: </h5>

                <p class="lead">A descrição da vaga deve ser detalhada o suficiente para que o candidato possa determinar se é qualificado para a vaga. Deve também conter detalhes importantes sobre a sua empresa, como a cultura empresarial e os benefícios oferecidos aos funcionários.</p>

                <h5>Uma descrição de vaga eficaz geralmente responde às seguintes perguntas:</h5>

                <h5>O que a vaga oferece e como é a empresa?</h5>

                <ul class="lead">
                    <li> Utilize palavras-chave relevantes e termos que descrevam a função e suas responsabilidades.</li>
                    <li> Forneça informações referentes ao estilo da empresa e à cultura empresarial.</li>
                </ul>

                <h5>Sou qualificado para esta vaga?</h5>
                <ul>
                    <li>Especifique a escolaridade e as certificações necessárias.</li>
                    <li> Indique os anos de experiência desejados. </li>
                </ul>

            </div>
        </article>
    </div>

</body>


</html>