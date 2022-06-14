<?php
include_once('bd/conexao.php');
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/geral.css">

</head>


<body class="bg">
    <div class="pt-5">
        <section class="py-5 container-fluid blur">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">PRIMEIRO</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <a href="http://192.168.0.111/sistema/vagas/index.php" class="btn btn-primary my-2">Ver Vagas Disponiveis</a>
                    <a href="http://192.168.0.111/sistema/tela-login.php" class="btn btn-secondary my-2">Me Cadastrar</a>
                </div>
            </div>
        </section>


        <article class="blog-post container">
            <h2 class="blog-post-title mb-1">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <hr>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h2>Blockquotes</h2>
            <p>This is an example blockquote in action:</p>
            <blockquote class="blockquote">
                <p>Quoted text goes here.</p>
            </blockquote>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Example lists</h3>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
           
            <p>Most of these elements are styled by browsers with few modifications on our part.</p>
            <h2>Heading</h2>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Sub-heading</h3>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <pre><code>Example code block</code></pre>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
        </article>
    </div>
</body>

</html>