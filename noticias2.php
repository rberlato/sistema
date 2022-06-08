<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/noticias.css">

    <link rel="stylesheet" type="text/css" href="css/wallpaper.css">

    <title>Feed de Noticias - TecMundo</title>
</head>

<body class="wallpaper">
    <?php
    include_once('verifica_login.php');
    include './menu.php';
    include './app/Feed/Globo.php';
    ?>
    <div class="container-rss">

        <?php

        //DEPENDENCIAS
        use \App\Feed\Globo;

        //INSTANCIA DO FEED
        $objFeed = new Globo;

        //DATA DE ATUALIZAÇÃO
        $lastUpdate = date('d/m/Y à\s H:i:s', strtotime($objFeed->getLastUpdate()));

        //VARIAVEL CONTENDO OS DADOS DO LAYOUT DO ITENS DO FEED
        $items = '';
        $image = '';


            foreach (($objFeed->getItems()) as $image) {
            //IMAGEM DO ITEM
                $image .= '<br><br><div class="card">
                               <div class="card-image">
                                   <figure>
                                       <img src="' . $image->link . '" class="card-img-top" alt="' . $image->title . '">
                                   </figure>
                               </div>
                            </div>';
            }

            //ITERA TODAS AS POSIÇÕES DOS ITENS NO FEED
            foreach (($objFeed->getItems()) as $item) {
            //LAYOUT DO CARD
                $items .= '<div class="card">
                               <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                        <p class="title is-6">' . $item->category . '</p>
                                        <p class="subtitle is-4">' . $item->title . '</p>
                                    </div>
                                </div>

                                <div class="content" >' . $item->description . '<br>
                                    <br><time>Data de atualização:'.$lastUpdate.' </time>
                                </div>
                            </div>';
            }


        ?>


        <div class="wallpaper">

            <!-- <img src="<?= $objFeed->getLogo() ?>" alt=""> -->

            <h1><?= $objFeed->getTitle() ?></h1>
            <p><?= $objFeed->getDescription() ?></p>
            <p><?= $lastUpdate ?></p>

        </div>

        <div>
            <a href="./painel.php"></a>
            <?= $items ?>
        </div>

        <div>
        </div>

    </div>

</body>

</html>