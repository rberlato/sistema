<?php 
//DEPENDENCIAS
use \App\Feed\TecMundo;
//INSTANCIA DO FEED
$obFeed = new TecMundo;
//DATA DE ATUALIZAÇÃO
$lastUpdate = date('d/m/Y à\s H:i:s', strtotime($obFeed->getLastUpdate()));
//VARIAVEL CONTENDO OS DADOS DO LAYOUT DO ITENS DO FEED
$items = '';
//ITERA TODAS AS POSIÇÕES DOS ITENS NO FEED
foreach($obFeed->getItems() as $item ){
    //IMAGEM DO ITEM
    $image = $item->enclosure->attributes()->url;
    //LAYOUT DO CARD
    $items .= '<div class="col-md-3">
                <div class="card text-dark h-100">
                    <div class="card-body">
                    <div class="card-header bg-primary">'.$item->category.'</div>
                    <h5 class="card-title">'.$item->title.'</h5>
                    <img src="'.$image.'" class="card-img-top" alt="'.$item->title.'">
                    <p class="card-text">'.$item->description.'</p>
                </div>
            </div>
        </div>';
}

?>

<div class="text-center">

    <!-- <img src="<?=$obFeed->getLogo()?>" alt="" class="mb-3"> -->

    <!-- <h1 class="mb-0"><?=$obFeed->getTitle()?></h1> -->
    <!-- <p class="mb-0"><?=$obFeed->getDescription()?></p> -->
    <!-- <p class="text-muted mb-4"><?=$lastUpdate?></p> -->

</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?=$items?> 
</div>


