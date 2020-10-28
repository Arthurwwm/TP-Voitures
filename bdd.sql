-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2020 at 12:58 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `autoRetro`
--

-- --------------------------------------------------------

--
-- Table structure for table `CONSTRUCTEUR`
--

CREATE TABLE `CONSTRUCTEUR` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `image_fondateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CONSTRUCTEUR`
--

INSERT INTO `CONSTRUCTEUR` (`id`, `nom`, `resume`, `logo`, `image_fondateur`) VALUES
(1, 'Bugatti', 'Difficile d’écrire sur cette marque française la plus renommée et la plus connue dans l’histoire de l’automobile. Ettore Bugatti fabrique sa première voiture en 1898. Il travaille pour de grandes marques comme DE DIETRICH, MATHIS, DEUTZ et PEUGEOT. En 1910, il décide de fabriquer ses propres véhicules et s’installe en ALSACE (Allemagne à cette époque). Ses automobiles seront le fleuron de la technologie de l’époque et, ont remporté de nombreux trophées. L’apogée de sa gloire apparaît en 1926 avec un véhicule d’exception qui restera à jamais ce que l’on faisait de mieux dans la démesure : plus de 3 tonnes. La ROYALE TYPE 41.Avec ses voitures, Bugatti engrangera plus de 2000 victoires en courses automobiles. Puis suivront des modèles de tourisme, et, plus fiables. Après plusieurs propriétaires, la marque sera reprise par VAG.', 'bugatti.png', 'jean-bugatti.jpg'),
(2, 'Delage', 'Louis Delage fonde sa marque en 1903 et se lance dans la fabrication de voiture de sport de luxe. La marque est à son apogée à la fin d es années 20 et au début des années 30. De nombreux carrossiers réputés utiliseront la base de ses chassis (Chaperon, Devillers, Pourtaut) pour réaliser de magnifiques modèles qui se distingueront dans de nombreux concours d’élégance jusqu’à la fin des années 30 ; malheureusement la crise de 1929 met en péril l’entreprise qui est reprise par son concurrent DELAGE qui survivra en cohabitation avec la marque.\r\n\r\n', 'delage.png', 'louis-delage.jpg'),
(3, 'Talbot Lago', 'Le nom de Lord TALBOT apparait pour la première fois dans le monde automobile associé à celui de CLEMENT pour la première création de CLEMENT TALBOT en 1902. Mais en 1920, le groupe fusionne pour former S.T.D( SUNBEAN TALBOT DARRACQ). En France les voitures produites le sont sous l’appellation « TALBOT ». elles sont des concurrentes directes des DELAGE ou DELAHAYE. TALBOT souffre de la crise économique du début des années 30, le groupe est dissout en 1933.\r\n\r\nC’est en 1934 que Anthony Lago prend la direction de l’entreprise, les voitures produites s’appellent désormais « TALBOT-LAGO. Les modèles s’inspirent à la fois des producteurs britanniques et Françaises de l’époque : ils s’appellent « baby », « major », et « master » ; et, disposent de moteurs 3l à 4 litres 5. Les grands carrossiers s’intéressent à ces châssis, la compétition n’est pas oubliée et TALBOT s’illustre tant en grand prix qu’aux 24 Heures du MANS.\r\n\r\nLa décision est prise de produire un modèle moins élitiste, ce sera la TALBOT LAGO BABY avec une motorisation de 2,5 litres, développant 100cv.\r\n\r\nMais, la clientèle est de moins en moins nombreuse, et, en 1958, TALBOT est racheté par SIMCA.', 'Talbot.jpg', 'Adolphe_Clément-Bayard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `LIVREDOR`
--

CREATE TABLE `LIVREDOR` (
  `id` int(11) NOT NULL,
  `dateEnvoi` date DEFAULT NULL,
  `pseudo` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `note` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LIVREDOR`
--

INSERT INTO `LIVREDOR` (`id`, `dateEnvoi`, `pseudo`, `message`, `note`) VALUES
(35, '2020-10-28', 'Norbert', 'Incroyable site d\'une beauté sans pareil', 5),
(36, '2020-10-28', 'GreenSolider', 'LES VOITURES POLLUENT VOUS NAVEZ PAS HONTE ??!', 1),
(37, '2020-10-28', 'xXx_Fan-2-TuninG', 'Ca manque de néons ...', 2),
(38, '2020-10-28', 'Robert', 'vidéo de chat', 1),
(39, '2020-10-28', 'Robert', 'vidéo de chat', 1),
(40, '2020-10-28', 'Pascaline', 'Site de qualité !', 4),
(41, '2020-10-28', 'Agence Web', 'Bonjour, seriez-vous interessé par un stage ?', 5),
(42, '2020-10-28', 'ALO', 'NULE SE CITE ', 1),
(43, '2020-10-28', 'Ta femme', 'tu as oublié tes clefs dans la cuisine...', 5),
(44, '2020-10-28', 'Bonjour', 'J\'aime les voitures.', 4),
(45, '2020-10-28', 'Ah', 'Il fallait un dernier commentaire pour la page 2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `VOITURE`
--

CREATE TABLE `VOITURE` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `année_construct` int(4) NOT NULL,
  `resume` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_constructeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `VOITURE`
--

INSERT INTO `VOITURE` (`id`, `nom`, `année_construct`, `resume`, `image`, `id_constructeur`) VALUES
(1, 'Type 28', 1922, 'La Bugatti Type 28 est un prototype produit à un seul exemplaire par le constructeur automobile français Bugatti, conçue par Ettore Bugatti entre 1920 et 1921.\r\n\r\nLa Type 28 est mue par un moteur 8 cylindres en ligne à 2 carburateurs Bugatti, d\'une cylindrée de 2 991 cm3, développant une puissance maximale de 80 ch à 3 400 tr/min1.', 'Bugatti-Type28-1922.png', 1),
(2, 'D8-120', 1936, 'La Delage D8-120 est un modèle automobile de grand luxe de la marque Delage fabriquée entre 1936 et 1939 par Delahaye.Basée sur un châssis court, la D8-120 est la version sport de la D8-100.\r\n\r\nLa D8-120 est la dernière Delage à moteur 8 cylindres. Celui-ci a été conçu par Delahaye.\r\n\r\nPrésentée pour la première fois au Salon de Paris 1936 sous la forme d\'un coach Aérosport sans montant central dû au carrossier Letourneur et Marchand, la D8-120 est l\'une des plus belles Delage.', 'Delage-D8-120-19361939.png', 2),
(3, 'Type 32', 1923, 'La Bugatti Type 32 ou Bugatti Type 32 Tank est une voiture de compétition automobile de 1923 du constructeur automobile Bugatti1, carrossée par une carrosserie de course Tank (Bugatti).', 'Bugatti32-1923.png', 1),
(4, 'Type 57', 1937, 'La Bugatti Type 57 est un des modèles les plus emblématiques et mythiques de la marque de voiture de sport de luxe et de prestige Bugatti, et de l\'automobile de sport de luxe mondiale des années 1930. Ultime création d\'élite, de record de vitesse, de grand luxe, de prix, et d\'excellence mécanique de Jean Bugatti (fils héritier d\'Ettore Bugatti) elle est présentée au Salon de Paris 1933, commercialisée à 685 exemplaires en de nombreuses variantes de carrosserie individualisées, entre mars 1934 à mai 1940, et victorieuse en particulier des Rallye des Alpes françaises 1935, Grand Prix automobile de France 1936, 24 Heures du Mans 1937, et 24 Heures du Mans 19392. En 2010 la première des trois Bugatti Type 57SC Atlantic 1936 (déclinée du concept-car Bugatti Aérolithe de 1935) est vendue aux enchères à la Collection Peter Mullin, pour une somme entre 30 et 40 millions de dollars (entre 23 et 31 millions d\'euros), voiture la plus chère à ce moment, record battu depuis par une Ferrari 250 GTO', 'BugattiB57-1937.png', 1),
(5, 'Type 41', 1936, 'La Bugatti Type 41 ou Bugatti Royale est une voiture limousine sportive de prestige du constructeur automobile Bugatti, construite entre 1926 et 1933 en sept exemplaires par Ettore Bugatti et son fils Jean Bugatti (le premier modèle prototype longtemps disparu et reconstruit d\'origine est achevé en 2017, un modèle est assemblé par les frères Schlumpf dans les années 1960 à partir de pièces détachées d\'origines, et une réplique exacte existe en Allemagne). Elle est considérée comme une des voitures de collection les plus exceptionnelles et chères de l\'histoire de l\'automobile, de par son histoire, sa rareté, et de par ses caractéristiques exceptionnelles pour son temps1.', 'BugattiB41-1936.png', 1),
(6, 'Saoutchic', 1949, 'ogrei goreig oierg oegn oergn oierngo ienboien boienr oibneori nboeribn oeirnb oeibno eirnboeir nboiern boiernbo ienrobi neroib neobin oeibn oeibn oeirbno eribnoeri nboerinb oeirnb oeirnbo inerboi neboi nerobin eobn eoribneo inborein eorn ebn eoibn oeinb en', 'Talbot-Saoutchic-19481953.png', 3),
(7, 'T26', 1949, 'La Talbot-Lago T26C est une monoplace de Formule 1 à moteur atmosphérique (6 cylindres en ligne, 4 482 cm3), créée en 1948 par la firme Talbot-Lago en remplacement de la Talbot T150C (née en 1936). Moins puissante que ses concurrentes italiennes suralimentées (Alfa Romeo 158, Maserati 4CLT-48, Ferrari 125), cette voiture très homogène s\'est néanmoins montrée une concurrente redoutable grâce à sa remarquable sobriété, lui permettant d\'accomplir cinq cents kilomètres sans ravitailler1. Elle a notamment remporté le Grand Prix de Belgique 1949 avec Louis Rosier et le Grand Prix de France cette même année aux mains de Louis Chiron, qui s\'était déjà imposé en 1947 avec une T26. En 1950 la version Grand Sport (GS) gagna les 24 Heures du Mans avec Louis Rosier et son fils Jean-Louis, et ensuite la première édition des 12 Heures de Casablanca en 1952, avec Charles Pozzi et Lucien Vincent.\r\n\r\nFin 1949 apparut la version double allumage (T26C-DA), d\'une puissance de l\'ordre de 275 à 280 chevaux. Cette version disputera le Championnat du monde de Formule 1 1950, devenant ainsi la première voiture française à participer : elle permit à Louis Rosier de terminer quatrième au classement général et de remporter les Grands Prix d\'Albi et des Pays-Bas (tous deux hors championnat) cette même année.', 'Talbot-T26-1947.png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CONSTRUCTEUR`
--
ALTER TABLE `CONSTRUCTEUR`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `LIVREDOR`
--
ALTER TABLE `LIVREDOR`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `VOITURE`
--
ALTER TABLE `VOITURE`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_constructeur` (`id_constructeur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CONSTRUCTEUR`
--
ALTER TABLE `CONSTRUCTEUR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `LIVREDOR`
--
ALTER TABLE `LIVREDOR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `VOITURE`
--
ALTER TABLE `VOITURE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `VOITURE`
--
ALTER TABLE `VOITURE`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`id_constructeur`) REFERENCES `CONSTRUCTEUR` (`id`);
