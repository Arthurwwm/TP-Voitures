<?php $this->title = 'Liste des voitures' ?>
        <h1>Bienvenue sur le site du club</h1>
        <h2 id="titreIndex">AUTORETRO CHIC</h2>
        <h3>Galerie des voitures</h3>
        <?php

            foreach($voitures as $voiture){
                echo '<a href="?action=voiture&id='.$voiture['id'].'"><img src="public/images/autos/'.$voiture['image'].'"></a>';
            }
            echo '<div id="pages">Page : ';
            for($i=1;$i<=$nbPages;$i++){
                echo '<a href="?action=voitures&page='.$i.'">'.$i;
            }