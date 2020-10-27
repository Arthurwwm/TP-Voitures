<?php $this->title = 'Liste des voitures' ?>
        <h1>Bienvenue sur le site du club</h1>
        <h2 id="titreIndex">AUTORETRO CHIC</h2>
        <h3>Galerie des voitures</h3>
        <?php
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        $parPage = 6;
        $pages = ceil($nbVoitures / $parPage);
            foreach($voitures as $voiture){
                echo '<a href="?action=voiture&id='.$voiture['id'].'"><img src="public/images/autos/'.$voiture['image'].'"></a>';
            }