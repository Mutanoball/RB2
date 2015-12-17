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
  PRIMARY KEY (`id`),
  KEY `iddistrict` (`iddistrict`),
  CONSTRAINT `Supply_ibfk_1` FOREIGN KEY (`iddistrict`) REFERENCES `District` (`iddistrict`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Supply`
--

LOCK TABLES `Supply` WRITE;
/*!40000 ALTER TABLE `Supply` DISABLE KEYS */;
INSERT INTO `Supply` VALUES (1,2200000,60,36100,2,1,'1',1,'2015-10-12','Салмышская, 56'),(2,2450000,72,33600,2,2,'2',2,'2015-10-05','Просторная, 15'),(3,3180000,86,36900,3,5,'3',4,'2015-10-16','Родимцева, 2'),(4,1560000,53,29000,2,3,'3',3,'2015-10-28','Восточная, 32'),(5,1640000,43,38100,1,6,'2',1,'2015-10-03','Джангильдина, 15'),(6,1320000,43,30400,1,14,'3',4,'2015-10-12','Диагностики, 8'),(7,2450000,72,34000,3,11,'1',3,'2015-10-14','Чкалова, 42'),(8,2685000,87,30800,3,10,'1',3,'2015-10-07','Пролетарская, 247'),(9,2990000,75,39400,2,12,'2',2,'2015-10-28','Потехина, 17'),(10,3200000,98,32400,3,8,'2',4,'2015-10-30','Салмышская, 72'),(11,2860000,85,33400,3,7,'2',1,'2015-10-02','Юркина, 28'),(12,3450000,95,36000,3,8,'3',1,'2015-10-11','Есимова, 3'),(13,2650000,91,29000,3,1,'3',1,'2015-10-13','Гаранькина, 5'),(14,2670000,79,33700,3,9,'1',3,'2015-10-05','Зиминская, 51'),(15,2220000,61,36200,2,5,'1',4,'2015-10-22','Джангильдина, 3/2');
/*!40000 ALTER TABLE `Supply` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-17  6:40:16
