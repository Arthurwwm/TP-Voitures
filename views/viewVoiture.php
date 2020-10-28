<?php $this->title = $voiture['constrNom'].' '.$voiture['voitNom']; ?>
    <h1><?=$voiture['constrNom'].' '.$voiture['voitNom']?></h1>
    <a href="?action=annee&annee=<?=$voiture['année_construct']?>" class="lienBasique"><h2><?=$voiture['année_construct']?></h2></a>
    <img src="public/images/autos/<?=$voiture['image']?>" alt="" class="pageVoitureAuto">
    <p><?=$voiture['resume']?></p>