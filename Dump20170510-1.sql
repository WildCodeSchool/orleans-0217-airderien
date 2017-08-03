-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: air_de_rien
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `calendrier`
--

DROP TABLE IF EXISTS `calendrier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieuSpectacle` varchar(45) DEFAULT NULL,
  `dateSpectacle` varchar(50) DEFAULT NULL,
  `spectacleId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calendrier_spectacle1_idx` (`spectacleId`),
  CONSTRAINT `fk_calendrier_spectacle1` FOREIGN KEY (`spectacleId`) REFERENCES `spectacle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendrier`
--

LOCK TABLES `calendrier` WRITE;
/*!40000 ALTER TABLE `calendrier` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendrier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compagnie`
--

DROP TABLE IF EXISTS `compagnie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compagnie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lienPhotoCompagnie` varchar(250) DEFAULT NULL,
  `descriptionCompagnie` longtext,
  `emailCompagnie` varchar(70) DEFAULT NULL,
  `telCompagnie` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compagnie`
--

LOCK TABLES `compagnie` WRITE;
/*!40000 ALTER TABLE `compagnie` DISABLE KEYS */;
INSERT INTO `compagnie` VALUES (1,'bg.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat lacinia massa, vel consectetur massa facilisis in. Maecenas rhoncus, lacus et fringilla pretium, odio libero volutpat leo, at iaculis turpis lacus eget quam. Sed sagittis euismod nulla, ac faucibus nibh pellentesque a. Cras faucibus eget metus eget rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam bibendum nunc turpis, a hendrerit lacus laoreet id. Duis feugiat, nunc non eleifend imperdiet, sem quam condimentum sapien, vel vulputate ex tortor quis libero. Fusce eu arcu vel mauris gravida pulvinar non quis enim. Morbi vitae odio ligula. Sed egestas dapibus lorem. Praesent a ex venenatis, ultrices diam sed, varius dui. Fusce finibus metus sed risus suscipit ullamcorper. Maecenas dictum viverra quam eu porttitor. Morbi gravida quam et orci euismod, ac sollicitudin odio sollicitudin.','commelair2rien@gmail.com','06.02.23.57.30');
/*!40000 ALTER TABLE `compagnie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreMedia` varchar(45) DEFAULT NULL,
  `lienPhoto` varchar(250) DEFAULT NULL,
  `spectacleId` int(11) DEFAULT NULL,
  `afficher` int(2) DEFAULT NULL,
  `affectation` int(1) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `lienVideo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_media_spectacle1_idx` (`spectacleId`),
  CONSTRAINT `fk_media_spectacle1` FOREIGN KEY (`spectacleId`) REFERENCES `spectacle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'sos','so+stephane2.jpg',1,NULL,1,'photo',NULL),(2,'sas','trio2.jpg',NULL,NULL,1,'photo',NULL),(3,'sds','sophie+nadine2.jpg',1,NULL,1,'photo',NULL),(5,'ggg','sophie+nath.jpg',1,NULL,NULL,'photo',NULL),(6,'Vidéo','',NULL,NULL,1,'video','Jc-2VY_TDYQ'),(7,'Vidéo','',1,NULL,1,'video','Jc-2VY_TDYQ'),(8,'Vidéo','',1,NULL,NULL,'video','Jc-2VY_TDYQ'),(9,'Vidéo','',1,NULL,1,'video','Jc-2VY_TDYQ'),(10,'Vidéo','',NULL,NULL,1,'video','kaIZWjItReI');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomMembre` varchar(45) DEFAULT NULL,
  `prenomMembre` varchar(45) DEFAULT NULL,
  `lienPhotoMembre` varchar(250) DEFAULT NULL,
  `descriptionMembre` mediumtext,
  `facebookMembre` varchar(255) DEFAULT NULL,
  `mailMembre` varchar(255) DEFAULT NULL,
  `lienMembre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membre`
--

LOCK TABLES `membre` WRITE;
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` VALUES (1,'Mauchamp','Karine','karine.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','www.facebook.fr','membre1@gmail.fr','Google.fr'),(2,'Bardot','Nathalie','nath.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','www.facebook.com','membre2@free.fr','Yaou.fr'),(5,'Petiot','Stéphane','stephane.jpg','Stéphane joue aussi de la guitare et nous aidera pour la partie musicale sur certains morceaux','www.facebook.com','membre3@free.fr','Yaou.fr'),(8,'Blondeau','Nadine','nadine.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','','',''),(9,'','Sophia','sophia.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','','','www.123.com'),(10,'','Jérôme','jerome.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','','123@mail.com',''),(11,'','Chrystel','chrystel.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.','','',''),(12,'Schmitt','Sophie','sophie.jpg','Fusce sit amet viverra justo. Pellentesque convallis eget nisi quis ultrices. Etiam iaculis quis nulla a molestie. Etiam ex purus, commodo vitae sem in, lacinia efficitur nulla. Curabitur ullamcorper lobortis enim a gravida. Maecenas orci dui, hendrerit nec lacinia ac, varius non metus. Nam dapibus neque ligula, ut lobortis leo aliquam aliquam.',NULL,NULL,NULL);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomPartenaire` varchar(45) DEFAULT NULL,
  `lienLogoPartenaire` varchar(45) DEFAULT NULL,
  `lienSitePartenaire` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partenaire`
--

LOCK TABLES `partenaire` WRITE;
/*!40000 ALTER TABLE `partenaire` DISABLE KEYS */;
INSERT INTO `partenaire` VALUES (1,'Wild Code School','logo_orange_pastille.png','https://wildcodeschool.fr/');
/*!40000 ALTER TABLE `partenaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomPersonnage` varchar(45) DEFAULT NULL,
  `prenomPersonnage` varchar(45) DEFAULT NULL,
  `descriptionPersonnage` longtext,
  `photoPersonnage` varchar(250) DEFAULT NULL,
  `spectacleId` int(11) DEFAULT NULL,
  `membreId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_personnage_spectacle1_idx` (`spectacleId`),
  KEY `fk_personnage_membre1_idx` (`membreId`),
  CONSTRAINT `fk_personnage_membre1` FOREIGN KEY (`membreId`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_personnage_spectacle1` FOREIGN KEY (`spectacleId`) REFERENCES `spectacle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnage`
--

LOCK TABLES `personnage` WRITE;
/*!40000 ALTER TABLE `personnage` DISABLE KEYS */;
INSERT INTO `personnage` VALUES (1,'','Alix','Mère de Simon et Camille,sœur de Juliette.\r\n                                Droite,conformiste,elle a consacré sa vie au domaine viticole familial,et laissé de côté sa vie de femme après son divorce.\r\n                                Présidente,directrice générale,elle veut tout maîtriser,le domaine et la vie de son entourage','karine.jpg',1,10),(2,'','Juliette','Sœur d\' Alix,artiste peintre.Elle a élevé ses neveux et les considèrent comme les enfants quelle n\' à jamais eus.','nath.jpg',1,9);
/*!40000 ALTER TABLE `personnage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revueDePresse`
--

DROP TABLE IF EXISTS `revueDePresse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revueDePresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreArticle` varchar(45) DEFAULT NULL,
  `texteArticle` longtext,
  `lienPhotoArticle` varchar(250) DEFAULT NULL,
  `dateArticle` varchar(50) DEFAULT NULL,
  `spectacleId` int(11) DEFAULT NULL,
  `journal` varchar(70) DEFAULT NULL,
  `auteur` varchar(70) DEFAULT NULL,
  `afficher` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_revue_de_presse_spectacle1_idx` (`spectacleId`),
  CONSTRAINT `fk_revue_de_presse_spectacle1` FOREIGN KEY (`spectacleId`) REFERENCES `spectacle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revueDePresse`
--

LOCK TABLES `revueDePresse` WRITE;
/*!40000 ALTER TABLE `revueDePresse` DISABLE KEYS */;
INSERT INTO `revueDePresse` VALUES (3,'Grand succes','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in justo purus. Suspendisse potenti. Vivamus libero odio, sollicitudin nec orci sit amet, cursus dictum lacus. Donec at purus augue. Donec lobortis euismod turpiseu bibendum. Proin consectetur turpis hendrerit sapien pellentesque tincidunt. Donec nisi quam',NULL,'2017-02-21',1,'Le journal du Centre','Mary Jane',1),(4,'devin qui vient ..','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in justo purus. Suspendisse potenti. Vivamus libero odio, sollicitudin nec orci sit',NULL,'2017-02-21',NULL,'La République du Centre','Luis Frank',1),(5,'blablabla','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in justo purus. Suspendisse potenti. Vivamus libero odio, sollicitudin nec orci sit amet, cursus dictum lacus. Donec at purus augue. Donec lobortis euismod turpis eu bibendum. Proin consectetur turpis hendrerit sapien pellentesque tincidunt. Donec nisi quam, imperdiet ac lacus sed, sodales auctor mi. Donec sit amet eros,sed lectus scelerisque consectetur. Curabitur tristique dignissim risus ac eleifend.',NULL,'2017-02-21',1,'La République du Centre','John Doe',1);
/*!40000 ALTER TABLE `revueDePresse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spectacle`
--

DROP TABLE IF EXISTS `spectacle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spectacle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreSpect` varchar(45) DEFAULT NULL,
  `photoSpect` varchar(250) DEFAULT NULL,
  `descriptionSpect` longtext,
  `active` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectacle`
--

LOCK TABLES `spectacle` WRITE;
/*!40000 ALTER TABLE `spectacle` DISABLE KEYS */;
INSERT INTO `spectacle` VALUES (1,'Devine qui vient dîner','groupe1.jpg','Dans un vignoble réputé sur la cote bourguignonne,un événement se prépare\r\n\r\nSimon ,le fils de la maison est amoureux, il a hâte de présenter l\'élue de son coeur à sa famille,la jolie Angelina\r\n\r\nMais sa mère,l\' intransigeante Alix a d autres projets pour lui.elle pense que Claire,son bras droit,ex fiancée de Simon est la femme idéale pour le seconder à la tête du domaine familial .\r\n\r\nSimon déterminé organise un diner auquel il convie ses futurs beaux parents,mais rien ne se passe comme prévu\r\n\r\nAngelo, père hyperprotecteur veut garder sa fille adorée pour lui,et ne cache pas sa désapprobation .Sa femme, la compréhensive Claudia aura forte a faire pour le raisonner,et apaiser les tensions de cette journée.Sans compter que Claire mettra tout en œuvre pour le reconquérir pour enfin devenir la maitresse des lieux.Heureusement il peut compter sur sa soeur Camille , et sur sa tante ,Juliette pour l\'aider à surmonter l\' atmosphère étouffante de ce rendez-vous familial.','1');
/*!40000 ALTER TABLE `spectacle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-10 16:04:56
