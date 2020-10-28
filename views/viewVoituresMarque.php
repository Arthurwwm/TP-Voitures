<?php $this->title = '' ?>
<h1>Les voitures de la marque <?= $voitures[0]['constNom'] ?></h1>
<div id="voitureMarque">
<?php
    foreach($voitures as $voiture){
        echo '<a href="?action=voiture&id='.$voiture['idVoit'].'" class="lienFlex"><img src="public/images/autos/'.$voiture['image'].'" alt="voiture">'.$voiture['nomVoit'].'</a>';
    }
?>
</div>