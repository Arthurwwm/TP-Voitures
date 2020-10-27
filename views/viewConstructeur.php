<?php $this->title = $constructeur['nom']?>

<h2><?= $constructeur['nom']?></h2>
<img src="public/images/logos/<?= $constructeur['logo']?>" alt="logo">
<div class='pageConstruct'>
    <div>
        <img src="public/images/portraits/<?=$constructeur['image_fondateur']?>" alt="portrait "class="pageVoitureAuto">
    </div>
    <p>
        <?= $constructeur['resume']?>
    </p>
</div>
<a href="?action=voituresMarque&id=<?=$constructeur['id']?>" class="lienBasique"><h3>Les Voitures de la marque</h3></a>
    