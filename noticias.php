<?php
include './menu.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/geral.css" />
   
    <title>Feed de Noticias - TecMundo</title>
</head>

<body class="container bg">
    <?php
    include './app/Feed/TecMundo.php';

    ?>

    <div>

        <?php

        //DEPENDENCIAS
        use \App\Feed\tecmundo;

        //INSTANCIA DO FEED
        $objFeed = new TecMundo;

        //DATA DE ATUALIZAÇÃO
        $lastUpdate = date(' d/m/Y à\s H:i:s', strtotime($objFeed->getLastUpdate()));

        //VARIAVEL CONTENDO OS DADOS DO LAYOUT DO ITENS DO FEED
        $items = '';


        //ITERA TODAS AS POSIÇÕES DOS ITENS NO FEED
        foreach ($objFeed->getItems() as $item) {
            //IMAGEM DO ITEM
            $image = $item->enclosure->attributes()->url;

            //LAYOUT DO CARD
            $items .= '
                        <br><br><div class="card">
                            <div class="card-image">
                                <figure>
                                    <img src="' . $image . '" class="card-img-top" alt="' . $item->title . '">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">' . $item->category . '</p>
                                        <p class="subtitle is-2">' . $item->title . '</p>
                                    </div>
                                </div>

                                <div class="content">' . $item->description . '<br>
                                    <time>Data de atualização:'.$lastUpdate.' </time>
                                </div>
                            </div>
                        </div>';
        }

        ?>


        <div class="wallpaper">

            <img src="<?= $objFeed->getLogo() ?>" alt="">

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

    </script>

</body>

</html>