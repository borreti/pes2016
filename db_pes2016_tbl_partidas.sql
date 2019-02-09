-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_pes2016
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `tbl_partidas`
--

DROP TABLE IF EXISTS `tbl_partidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_partidas` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `TimeCasa` int(11) DEFAULT NULL,
  `TimeFora` int(11) DEFAULT NULL,
  `GTc` int(11) NOT NULL,
  `GTf` int(11) NOT NULL,
  `Vencedor` int(11) DEFAULT NULL,
  `TipoDeJogo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `TimeCasa` (`TimeCasa`),
  KEY `TimeFora` (`TimeFora`),
  KEY `Vencedor` (`Vencedor`),
  KEY `TipoDeJogo` (`TipoDeJogo`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_partidas`
--

LOCK TABLES `tbl_partidas` WRITE;
/*!40000 ALTER TABLE `tbl_partidas` DISABLE KEYS */;
INSERT INTO `tbl_partidas` VALUES (12,21,22,3,1,21,18),(13,23,24,1,0,23,20),(14,9,26,3,0,9,5),(15,9,27,5,0,9,22),(16,9,28,5,0,9,22),(17,9,29,2,0,9,5),(18,30,32,2,1,30,17),(19,33,30,5,2,33,18),(20,9,34,1,0,9,5),(21,29,9,0,6,9,6),(22,35,9,0,4,9,23),(23,17,7,4,0,17,1),(24,36,17,4,2,36,2),(25,37,38,1,0,37,4),(26,39,40,1,0,39,9),(27,42,41,1,0,42,10),(28,44,43,1,0,44,13),(29,45,46,1,0,45,14),(30,47,42,0,1,42,24),(31,9,29,2,1,9,7),(32,9,42,1,2,42,25),(33,9,43,0,1,9,23),(34,24,48,0,1,48,26),(35,9,48,1,2,48,22),(36,9,20,1,0,9,5),(37,49,50,0,1,50,18),(38,34,9,3,0,34,5),(39,51,9,0,2,9,6),(40,17,40,0,2,40,23),(41,36,7,1,0,36,24),(42,41,42,1,0,41,10),(43,39,40,2,0,39,9),(44,17,8,2,1,17,1),(45,52,38,4,3,52,2),(46,44,46,1,0,44,13),(47,53,45,2,1,53,14),(48,39,41,2,1,39,11),(49,41,39,2,0,41,11),(50,32,54,0,1,54,26),(51,54,32,4,0,54,26);
/*!40000 ALTER TABLE `tbl_partidas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-12 11:27:48
