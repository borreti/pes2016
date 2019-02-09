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
-- Table structure for table `tbl_clubes`
--

DROP TABLE IF EXISTS `tbl_clubes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_clubes` (
  `ChavePrimaria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Escudo` varchar(50) NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  PRIMARY KEY (`ChavePrimaria`),
  UNIQUE KEY `Nome` (`Nome`),
  UNIQUE KEY `Escudo` (`Escudo`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clubes`
--

LOCK TABLES `tbl_clubes` WRITE;
/*!40000 ALTER TABLE `tbl_clubes` DISABLE KEYS */;
INSERT INTO `tbl_clubes` VALUES (7,'Chelsea','Chelsea.png','INGLATERRA'),(8,'Arsenal','Arsenal.png','INGLATERRA'),(9,'AS Roma','AS_Roma.png','ITALIA'),(10,'Vitesse','Vitesse.png','HOLANDA'),(11,'Sampdoria','Sampdoria.png','ITALIA'),(12,'Cesena','Cesena.png','ITALIA'),(13,'Ganzoracio','Null','ITALIA'),(14,'Hellas Verona','Hellas_Verona.png','ITALIA'),(15,'Genoa CFC','Genoa.png','ITALIA'),(16,'Udinese Calcio','Udinese_Calcio.png','ITALIA'),(17,'Liverpool','Liverpool.png','INGLATERRA'),(19,'Atalanta BC','Atalanta.png','ITALIA'),(20,'Chievo Verona','Chievo_Verona.png','ITALIA'),(21,'Internacional','Internacional.png','BRASIL'),(22,'Corinthians','Corinthians','BRASIL'),(23,'Velez Sarsfield','Velez_Sarsfield.png','ARGENTINA'),(24,'Boca Juniors','Boca_Juniors.png','ARGENTINA'),(25,'Twente','Twente.png','HOLANDA'),(26,'Milan','Milan.png','ITALIA'),(27,'Kashiwa Reysol','Kashiwa_Reysol.png','JAPAO'),(28,'Quilmes','Quilmes.png','ARGENTINA'),(29,'Lazio','Lazio.png','ITALIA'),(30,'Fluminense','Fluminense.png','BRASIL'),(32,'Sao Paulo','Sao_Paulo.png','BRASIL'),(33,'Atletico Mineiro','Atletico_Mineiro.png','BRASIL'),(34,'Napoli','Napoli.png','ITALIA'),(35,'Bayern Munique','Bayern_Munique.png','ALEMANHA'),(36,'Tottenham','Tottenham.png','INGLATERRA'),(37,'Newcastle United','Newcastle_United.png','INGLATERRA'),(38,'Teesside','Teesside.png','INGLATERRA'),(39,'Valencia','Valencia.png','ESPANHA'),(40,'Barcelona','Barcelona.png','ESPANHA'),(41,'Real Madrid','Real_Madrid.png','ESPANHA'),(42,'Atletico Madrid','Atletico_Madrid.png','ESPANHA'),(43,'Girondins De Bordeaux','Girondins_De_Bordeaux.png','FRANCA'),(44,'Paris Saint Germain','Paris_Saint_Germain.png','FRANCA'),(45,'Nantes','Nantes.png','FRANCA'),(46,'Estac Troyes','Estac_Troyes.png','FRANCA'),(47,'Lengerblitz','Lengerblitz.png','ALEMANHA'),(48,'Flamengo','Flamengo.png','BRASIL'),(49,'Gremio','Gremio.png','BRASIL'),(50,'Palmeiras','Palmeiras.png','BRASIL'),(51,'Internazionale','Internazionale.png','ITALIA'),(52,'Everton','Everton.png','INGLATERRA'),(53,'Monaco','Monaco.png','FRANCA'),(54,'River Plate','River_Plate.png','ARGENTINA'),(55,'Manchester City','Manchester_City.png','INGLATERRA'),(56,'Santos','Santos.png','BRASIL'),(57,'Juventus','Juventus.png','ITALIA'),(58,'Stoke City','Stoke_City.png','INGLATERRA'),(59,'Metz','Metz.png','FRANCA'),(60,'Cruzeiro','Cruzeiro.png','BRASIL'),(61,'Feyenoord','Feyenoord.png','HOLANDA'),(62,'Saint Etienne','Saint_Etienne.png','FRANCA'),(63,'Giberchampu','Giberchampu.png','ARGENTINA'),(64,'Meraszilho','Meraszilho.png','PORTUGAL'),(65,'Montpellier Herault','Montpellier_Herault.png','FRANCA'),(66,'Benfica','Benfica.png','PORTUGAL'),(67,'Atletico Paranaense','Atletico_Paranaense.png','BRASIL'),(68,'Bournemouth','Bournemouth.png','INGLATERRA'),(69,'Stade De Reims','Stade_De_Reims.png','ALEMANHA'),(70,'Olympique De Marseille','Olympique_De_Marseille.png','FRANCA'),(71,'Nacional','Nacional.png','ARGENTINA'),(72,'Fiorentina','Fiorentina.png','ITALIA');
/*!40000 ALTER TABLE `tbl_clubes` ENABLE KEYS */;
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
