<?php $this->title = "Accueil - Auto Retro Chic";?>
<h1>Bienvenue sur le site du club</h1>
<h2>AUTORETRO CHIC</h2>
<p>Dans les années 30 et 40, les constructeurs automobiles français allièrent à l’aérodynamisme de la carrosserie, l'esthétisme stylistique.
Au cours d'une trentaine d’années on était passé de la voiture à caisse carrée, dérivée du fiacre ou de la calèche, aux somptueuses carrosseries aux courbes et galbes voluptueux. L'élan dynamique et affiné des lignes se mariait à l'ondoiement et aux volutes des ailes, capots, habitacles et coffres. 
Dès lors, Les profils s'étirent en mouvance féminine, les proues, parées de chromes, s'élargissent et se virilisent avec cette retenue tout à fait remarquable dans l’agressivité, les poupes s'abaissent et s’allongent, la ligne de fuite veut que l'auto colle à la route.</p>
<h3>Dernières voitures :</h3>
<?php foreach($voitures as $voiture): ?>
    <img src=<?="'public/images/autos/".$voiture['image']."'"?> alt="">
<?php endforeach; ?>