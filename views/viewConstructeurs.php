<?php $this->title = 'Liste des Constructeurs'?>
        <h1>Bienvenue sur le site du club</h1>
        <h2 id="titreIndex">AUTORETRO CHIC</h2>
        <h3>La liste des constructeurs</h3>
        <?php foreach($constructeurs as $constructeur){
            echo '<a href="?action=constructeur&id='.$constructeur['id'].'"><img src="public/images/logos/'.$constructeur['logo'].'"></a>';
        }