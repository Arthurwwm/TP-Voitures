<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title><?= $this->title ?></title>
</head>
<body>
    <nav>
        <img src="public/icons/AutoRetroChic.png" alt="logo association">
        <h1>AutoRétro Chic</h1>
        <div id='liensNav'>
            <a href="?action=index">ACCUEIL</a>
            <a href="?action=constructeurs">LES CONSTRUCTEURS</a>
            <a href="?action=voitures">LES VOITURES</a>
        </div>
        <span id="openMenu"><img src="public/icons/iconeHamburger.png" alt="icone hamburger" id='iconeBurger'></span>
    </nav>
    <main>
<?= $content ?>
    </main>
    <footer>
        <span><a href="?action=livreor">Livre d'or</a></span><br>
        <small>&copy; Copyright 2020, Julien Nadal-Larios</small> 
    </footer>
    <script src="public/script.js"></script>
</body>
</html>