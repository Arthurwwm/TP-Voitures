<?php $this->title = $voiture['constrNom'].' '.$voiture['voitNom']; ?>
    <h1><?=$voiture['constrNom'].' '.$voiture['voitNom']?></h1>
    <h2><?=$voiture['année_construct']?></h2>
    <img src="public/images/autos/<?=$voiture['image']?>" alt="" class="pageVoitureAuto">
    <p><?=$voiture['resume']?></p>