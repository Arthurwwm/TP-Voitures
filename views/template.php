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
        <a href="?action=index">ACCUEIL</a>
        <a href="?action=constructeurs">LES CONSTRUCTEURS</a>
        <a href="?action=voitures">LES VOITURES</a>
    </nav>
    <main>
<?= $content ?>
    </main>
    <footer>
        LE FOOTER OUI
    </footer>
</body>
</html>