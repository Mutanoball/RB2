-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: RB2
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.12.04.1-log

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
-- Table structure for table `District`
--

DROP TABLE IF EXISTS `District`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `District` (
  `iddistrict` int(11) NOT NULL DEFAULT '0',
  `district` text,
  PRIMARY KEY (`iddistrict`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `District`
--

LOCK TABLES `District` WRITE;
/*!40000 ALTER TABLE `District` DISABLE KEYS */;
INSERT INTO `District` VALUES (1,'Степной'),(2,'Восточный'),(3,'Промышленный'),(4,'Южный');
/*!40000 ALTER TABLE `District` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Images`
--

DROP TABLE IF EXISTS `Images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Images` (
  `id` int(11) NOT NULL DEFAULT '0',
  `source` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Images`
--

LOCK TABLES `Images` WRITE;
/*!40000 ALTER TABLE `Images` DISABLE KEYS */;
INSERT INTO `Images` VALUES (1,'0000000001.jpg'),(2,'0000000002.jpg'),(3,'0000000003.jpg'),(4,'0000000004.jpg'),(5,'0000000005.jpg'),(6,'1501268290.jpg'),(7,'1501268831.jpg'),(8,'1501268836.jpg'),(9,'1501268838.jpg'),(10,'1501268847.jpg'),(11,'1623021581.jpg'),(12,'1623022598.jpg'),(13,'1623023033.jpg'),(14,'1623023645.jpg'),(15,'1719788869.jpg'),(16,'1719789502.jpg'),(17,'1719789893.jpg'),(18,'1719790584.jpg'),(19,'1719791160.jpg'),(20,'1777358260.jpg'),(21,'1777358557.jpg'),(22,'1777358835.jpg'),(23,'2095601391.jpg'),(24,'2095601405.jpg'),(25,'2095601456.jpg'),(26,'2095601458.jpg'),(27,'2095601519.jpg'),(28,'2095601520.jpg'),(29,'2095601522.jpg'),(30,'2095601580.jpg'),(31,'2095601582.jpg'),(32,'2095601586.jpg'),(33,'2095605554.jpg'),(34,'2095605574.jpg'),(35,'2095605588.jpg'),(36,'2095605604.jpg'),(37,'2096205833.jpg'),(38,'2096205839.jpg'),(39,'2096205840.jpg'),(40,'2096205843.jpg'),(41,'2096205845.jpg'),(42,'2096205846.jpg'),(43,'2096205847.jpg'),(44,'2096205848.jpg'),(45,'2096205850.jpg'),(46,'2096205853.jpg'),(47,'2096205854.jpg'),(48,'2096205855.jpg'),(49,'2096205856.jpg'),(50,'2096205858.jpg'),(51,'2096900027.jpg'),(52,'2118009044.jpg'),(53,'2118009084.jpg'),(54,'2133203133.jpg'),(55,'2133203140.jpg'),(56,'2151797829.jpg'),(57,'2151797981.jpg'),(58,'2151797982.jpg'),(59,'2151797994.jpg'),(60,'2151798008.jpg'),(61,'2151798012.jpg'),(62,'2151798013.jpg'),(63,'2151798016.jpg'),(64,'2151798017.jpg'),(65,'2151798018.jpg'),(66,'2151798019.jpg'),(67,'2151799087.jpg'),(68,'2151799088.jpg'),(69,'2151799090.jpg'),(70,'2151799109.jpg'),(71,'2151799114.jpg');
/*!40000 ALTER TABLE `Images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Offerimages`
--

DROP TABLE IF EXISTS `Offerimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Offerimages` (
  `idoffer` int(11) DEFAULT NULL,
  `idimage` int(11) DEFAULT NULL,
  KEY `idimage` (`idimage`),
  CONSTRAINT `Offerimages_ibfk_1` FOREIGN KEY (`idimage`) REFERENCES `Images` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Offerimages`
--

LOCK TABLES `Offerimages` WRITE;
/*!40000 ALTER TABLE `Offerimages` DISABLE KEYS */;
INSERT INTO `Offerimages` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(2,6),(2,7),(2,8),(2,9),(2,10),(3,11),(3,12),(3,13),(3,14),(3,15),(4,16),(4,17),(4,18),(4,19),(4,20),(5,21),(5,22),(5,23),(5,24),(5,25),(6,26),(6,27),(6,28),(6,29),(7,30),(7,31),(7,32),(7,33),(7,34),(8,35),(8,36),(8,37),(8,38),(8,39),(9,40),(9,41),(9,42),(9,43),(9,44),(10,45),(10,46),(10,47),(10,48),(10,49),(11,50),(11,51),(11,52),(11,53),(11,54),(12,55),(12,56),(12,57),(12,58),(12,59),(13,60),(13,61),(13,62),(13,63),(13,64),(14,65),(14,66),(14,67),(14,68),(14,69),(15,70),(15,71),(15,2),(15,2),(15,2);
/*!40000 ALTER TABLE `Offerimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Supply`
--

DROP TABLE IF EXISTS `Supply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Supply` (
  `id` int(11) NOT NULL DEFAULT '0',
  `price` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `metercost` int(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `storey` int(11) DEFAULT NULL,
  `stage` text,
  `iddistrict` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `address` text,
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iddistrict` (`iddistrict`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `Supply_ibfk_1` FOREIGN KEY (`iddistrict`) REFERENCES `District` (`iddistrict`),
  CONSTRAINT `Supply_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `Users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Supply`
--

LOCK TABLES `Supply` WRITE;
/*!40000 ALTER TABLE `Supply` DISABLE KEYS */;
INSERT INTO `Supply` VALUES (1,2200000,60,36100,2,1,'1',1,'2015-10-12','Салмышская, 56',4),(2,2450000,72,33600,2,2,'2',2,'2015-10-05','Просторная, 15',5),(3,3180000,86,36900,3,5,'3',4,'2015-10-16','Родимцева, 2',2),(4,1560000,53,29000,2,3,'3',3,'2015-10-28','Восточная, 32',7),(5,1640000,43,38100,1,6,'2',1,'2015-10-03','Джангильдина, 15',1),(6,1320000,43,30400,1,14,'3',4,'2015-10-12','Диагностики, 8',6),(7,2450000,72,34000,3,11,'1',3,'2015-10-14','Чкалова, 42',11),(8,2685000,87,30800,3,10,'1',3,'2015-10-07','Пролетарская, 247',8),(9,2990000,75,39400,2,12,'2',2,'2015-10-28','Потехина, 17',3),(10,3200000,98,32400,3,8,'2',4,'2015-10-30','Салмышская, 72',10),(11,2860000,85,33400,3,7,'2',1,'2015-10-02','Юркина, 28',12),(12,3450000,95,36000,3,8,'3',1,'2015-10-11','Есимова, 3',15),(13,2650000,91,29000,3,1,'3',1,'2015-10-13','Гаранькина, 5',14),(14,2670000,79,33700,3,9,'1',3,'2015-10-05','Зиминская, 51',9),(15,2220000,61,36200,2,5,'1',4,'2015-10-22','Джангильдина, 3/2',13);
/*!40000 ALTER TABLE `Supply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'Superuser','1234'),(2,'Kolya','1234'),(3,'Vasya','1234'),(4,'VaganPetrovich','1234'),(5,'ShakalIvanych','1234'),(6,'Shmara','1234'),(7,'Supershmara','1234'),(8,'Overlord_SuperShmar','1234'),(9,'SynShakala','1234'),(10,'AtesShakala','1234'),(11,'Nyasha','1234'),(12,'Nyusha','1234'),(13,'Nyosha','1234'),(14,'Nevermind','1234'),(15,'OhMyGodItsFullOfStars','1234');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-24 14:43:22
