<?php ?>
<h1>Les voiture de l'année <?=isset($_GET['annee'])?$_GET['annee']:null?></h1>
<?php
    foreach($voitures as $voiture){
        echo '<img src="public/images/autos/'.$voiture['image'].'">';
    }