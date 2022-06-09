<?php
include_once('verifica_login.php');
include 'menu.php';
include './app/Feed/TecMundo.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/rss.css">

    <title>Feed Rss - TecMundo</title>
</head>

<body>
    <div class="container-rss">

        <?php

        //DEPENDENCIAS
        use \App\Feed\tecmundo;

        //INSTANCIA DO FEED
        $objFeed = new TecMundo;

        //DATA DE ATUALIZAÇÃO
        $lastUpdate = date('d/m/Y à\s H:i:s', strtotime($objFeed->getLastUpdate()));

        //VARIAVEL CONTENDO OS DADOS DO LAYOUT DO ITENS DO FEED
        $items = '';


        //ITERA TODAS AS POSIÇÕES DOS ITENS NO FEED
        foreach (($objFeed->getItems()) as $item) {
            //IMAGEM DO ITEM
            $image = $item->enclosure->attributes()->url;

            //LAYOUT DO CARD
            $items .= '
                        <div class="card">
                            <div class="card-image">
                                <figure style="width: 350px, justify-contente: center, align-itens:center">
                                    <img src="' . $image . '" class="card-img-top" alt="' . $item->title . '">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-6">' . $item->category . '</p>
                                        <p class="subtitle is-2">' . $item->title . '</p>
                                    </div>
                                </div>

                                <div class="content">' . $item->description . '<br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                            </div>
                        </div>';
        }

        ?>


        <div class="text-center">

            <!-- <img src="<?= $objFeed->getLogo() ?>" alt="" class="mb-3"> -->

            <h1 class="mb-0"><?= $objFeed->getTitle() ?></h1>
            <p class="mb-0"><?= $objFeed->getDescription() ?></p>
            <p class="text-muted mb-3"><?= $lastUpdate ?></p>

        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?= $items ?>
            <a href="./painel.php"></a>
        </div>

        <div>
        </div>

    </div>

    <script src="./js/menu.js">
    </script>

</body>

</html>