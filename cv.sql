CREATE DATABASE CV;

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` tinytext  NOT NULL,
  `Content` mediumtext  NOT NULL,
  `Level` tinytext ,
  PRIMARY KEY (`ID`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;



INSERT INTO `competences` (`ID`, `Name`, `Content`, `Level`) VALUES
(1, 'HTML/CSS/JS', 'Base en dévelopement front web.', '3/5'),
(2, 'PHP/SQL', 'Quelques expériences d\'interaction avec base des données dans un contexte de développement web.', '4/5'),
(3, 'Python ', 'Base en scripting python, quelques connaissance en interface graphique.', '4/5'),
(4, 'Virtualisation ', 'Expérince en virtualisation de parc d\'infrastructure réseau avec GNS3 et VMWare Workstation', '4/5'),
(5, 'C/C#', 'Quelques base en développement.', '2/5');


DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idContact` int(11) NOT NULL,
  `TitleMessage` tinytext NOT NULL,
  `E-mail` varchar(60) NOT NULL,
  `ContentMessage` longtext,
  PRIMARY KEY (`idContact`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;; 



INSERT INTO `contact` (`idContact`, `TitleMessage`, `E-mail`, `ContentMessage`) VALUES
(1, 'test', 'ifgheuhf@gmail.commdff', 'ezvdvqdvdvdzv');

-- --------------------------------------------------------



DROP TABLE IF EXISTS `diplomas`;
CREATE TABLE IF NOT EXISTS `diplomas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Year` varchar(10) DEFAULT NULL,
  `Name` mediumtext,
  `Content` mediumtext,
  PRIMARY KEY (`ID`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;


INSERT INTO `diplomas` (`ID`, `Year`, `Name`, `Content`) VALUES
(1, '2014', 'DNB', 'Bien'),
(2, '2017', 'Bac', 'Assez bien ');


DROP TABLE IF EXISTS `professionalexp`;
CREATE TABLE IF NOT EXISTS `professionalexp` (
  `idProfessionalExp` int(11) NOT NULL AUTO_INCREMENT,
  `Content` longtext NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Img` tinytext  NOT NULL,
  PRIMARY KEY (`idProfessionalExp`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;


INSERT INTO `professionalexp` (`idProfessionalExp`, `Content`, `Name`, `Img`) VALUES
(1, 'Préparateur de commande sur chariot de type CACES 1 auto-porté, pendant 1 mois et demi.', 'Travail étudiant', '<img class=\"image\" src=\"/img/caces.png\">'),
(2, 'Developpement dans l\'équipe de support réseau ERIKSON orange telecom', 'Stage Orange', '<img class=\"image\" src=\"/img/orange.png\">');


DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `ID` int(11) NOT NULL,
  `Content` mediumtext NOT NULL,
  `Name` tinytext NOT NULL,
  `Date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Projets_ID_uindex` (`ID`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;

INSERT INTO `projets` (`ID`, `Content`, `Name`, `Date`) VALUES
(1, 'Création d\'un cv en ligne', 'Porte Folio en ligne', '2018-2019'),
(2, 'Création d\'une maquette du reseau d\'un entreprise', 'Maquette inventaire plus', '2018-2019'),
(3, 'Développement d\'une application de suivie de plante ', 'Plante connectée', '2018-2019');


DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(11) NOT NULL,
  `Year` varchar(9) NOT NULL,
  `Content` mediumtext  NOT NULL,
  `Img` tinytext  NOT NULL,
  PRIMARY KEY (`ID`)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;


INSERT INTO `school` (`ID`, `Year`, `Content`, `Img`) VALUES
(1, '2010-2014', 'Collège Sainte-Marie La Grand Grange à 42400 Saint-Chamond.', '   '),
(2, '2014-2017', 'Lycée Sainte-Marie La Grand Grange à 42400 Saint-Chamond.', '<img class=\"image\" src=\"/img/SainteMarie.gif\">'),
(3, '2018', 'Diplôme d’ingénieur 1 er semestre effectué à l’ENISE en génie mécanique, à Saint-Etienne 42000.', '<img class=\"image\" src=\"/img/enise_logo.jpg\">'),
(4, '2018-2021', 'Bachelor informatique, Ynov Lyon.', '<img class=\"image\" src=\"/img/logoYnov.jpg\">');
COMMIT;

