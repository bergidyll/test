-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: garden_manager
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `club` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundingdate` date DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankiban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankbic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registernumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registercourt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amounthours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counthours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountnational` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountfederal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountregional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountactivemember` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountpassivemember` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountpaper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountparking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountdeposit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertytaxa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertytaxb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricpricefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricpricecounter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waterprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waterpricefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waterpricecounter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umlage_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_1_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_2_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_3_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_4_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_5_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_1_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_2_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_3_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_4_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_5_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club`
--

LOCK TABLES `club` WRITE;
/*!40000 ALTER TABLE `club` DISABLE KEYS */;
INSERT INTO `club` VALUES (1,'Kleingartenverein \"Bergidyll\" Flöha / Plaue e.V.','1930-04-09','09557','Flöha / Plaue','Friedrich-Ludwig-Jahn-Straße','03726','kontakt@bergidyll.info','DE 11111','rererer','Sparkasse Mittelsachsen','Vereinsregister','VR 999','Amtsgericht Chemnitz','35','5','2.5','1','13','30','10','12','120','330','0.08','20000,00','3.7','5','0.35','5','85','3','2.5','18','Instandhaltungsumlage','40','Umlage Gartenheim','12',NULL,NULL,NULL,'Kollektivversicherung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0.2',NULL,NULL,NULL,NULL,NULL,'000/000/0000'),(2,'Kleingartenverein \"Beridyll\" Flöha / Plaue e.V.',NULL,'09557','Flöha','Friedrich-Ludwig-Jahn-Straße','3434','kontakt@bergidyll.info','DE 11111','rererer','Sparkasse Mittelsachsen','Vereinsregister','VR 999','Amtsgericht Chemnitz','30,00','5','2,00','1,00','13,00','30,00','0,00','12,00','120,00','300,00','0,08','20000,00','3,50','5,00','0,30','5,00','85,00','3,00','2,50','15,00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Kleingartenverein \"Beridyll\" Flöha / Plaue e.V.',NULL,'09557','Flöha','Friedrich-Ludwig-Jahn-Straße','3434','kontakt@bergidyll.info','DE 11111','rererer','Sparkasse Mittelsachsen','Vereinsregister','VR 999','Amtsgericht Chemnitz','30,00','5','2,00','1,00','13,00','30,00','0,00','12,00','120,00','300,00','0,08','20000,00','3,50','5,00','0,30','5,00','85,00','3,00','2,50','15,00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Kleingartenverein \"Beridyll\" Flöha / Plaue e.V.',NULL,'09557','Flöha','Friedrich-Ludwig-Jahn-Straße','3434','kontakt@bergidyll.info','DE 11111','rererer','Sparkasse Mittelsachsen','Vereinsregister','VR 999','Amtsgericht Chemnitz','30,00','5','2,00','1,00','13,00','30,00','0,00','12,00','120,00','300,00','0,08','20000,00','3,50','5,00','0,30','5,00','85,00','3,00','2,50','15,00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Hallo Welt',NULL,'43432','sfddsfdf','sfdf','43543','fdfds@fdfd.de','dads','sdasdasd','dasdsa','sad','dsad','dasd','5','3','44','44','44','4','4','100','100','200','0.5','1000','100','1000','0.3','5','30','3','10','100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20211124163941','2021-11-24 17:39:58',151),('DoctrineMigrations\\Version20211124164146','2021-11-24 17:41:52',175),('DoctrineMigrations\\Version20211124164836','2021-11-24 17:48:40',204),('DoctrineMigrations\\Version20211124202822','2021-11-24 21:28:34',107),('DoctrineMigrations\\Version20211124203940','2021-11-24 21:45:46',300),('DoctrineMigrations\\Version20211125162442','2021-11-25 17:25:39',174),('DoctrineMigrations\\Version20211125200611','2021-11-25 21:06:25',112),('DoctrineMigrations\\Version20211127140206','2021-11-27 15:02:19',157),('DoctrineMigrations\\Version20211130143732','2021-11-30 15:37:53',898),('DoctrineMigrations\\Version20211130151035','2021-11-30 16:12:45',668),('DoctrineMigrations\\Version20211130153646','2021-11-30 16:36:57',1122),('DoctrineMigrations\\Version20211130154341','2021-11-30 16:43:46',324),('DoctrineMigrations\\Version20211203140827','2021-12-03 15:14:52',647),('DoctrineMigrations\\Version20211203185651','2021-12-03 20:33:29',16),('DoctrineMigrations\\Version20211203190007','2021-12-03 20:33:29',0),('DoctrineMigrations\\Version20211203190108','2021-12-03 20:33:29',128),('DoctrineMigrations\\Version20211203194534','2021-12-03 21:57:29',476),('DoctrineMigrations\\Version20211203205529','2021-12-03 21:57:30',0),('DoctrineMigrations\\Version20211203210150','2021-12-03 22:02:40',542),('DoctrineMigrations\\Version20211204095155','2021-12-04 10:55:47',113),('DoctrineMigrations\\Version20211204104242','2021-12-04 11:43:36',135),('DoctrineMigrations\\Version20211206153012','2021-12-06 16:42:07',17),('DoctrineMigrations\\Version20211206154441','2021-12-06 16:45:20',17),('DoctrineMigrations\\Version20211206154847','2021-12-06 17:07:17',299),('DoctrineMigrations\\Version20211206162350',NULL,NULL),('DoctrineMigrations\\Version20211206170154',NULL,NULL),('DoctrineMigrations\\Version20211206185202','2021-12-06 19:54:40',389),('DoctrineMigrations\\Version20211206190700','2021-12-06 20:07:39',451),('DoctrineMigrations\\Version20211206191318','2021-12-14 08:46:59',870),('DoctrineMigrations\\Version20211214074614','2021-12-14 08:47:00',728),('DoctrineMigrations\\Version20211214131459','2021-12-14 14:21:36',13),('DoctrineMigrations\\Version20211214131611','2021-12-14 14:21:36',94),('DoctrineMigrations\\Version20211214131952','2021-12-14 14:23:05',14),('DoctrineMigrations\\Version20211214134245','2021-12-14 14:44:03',456),('DoctrineMigrations\\Version20211214141721',NULL,NULL),('DoctrineMigrations\\Version20211214142611',NULL,NULL),('DoctrineMigrations\\Version20211214143141',NULL,NULL),('DoctrineMigrations\\Version20211214150223',NULL,NULL),('DoctrineMigrations\\Version20211214150416',NULL,NULL),('DoctrineMigrations\\Version20211214150830','2021-12-14 16:09:53',11),('DoctrineMigrations\\Version20211215073650','2021-12-15 08:39:17',453),('DoctrineMigrations\\Version20211215080138','2021-12-15 09:04:13',1414),('DoctrineMigrations\\Version20211215110757','2021-12-15 12:08:35',179),('DoctrineMigrations\\Version20211215185031','2021-12-15 19:51:59',327),('DoctrineMigrations\\Version20211217082957','2021-12-17 09:30:39',175),('DoctrineMigrations\\Version20211217092010','2021-12-17 10:20:48',117),('DoctrineMigrations\\Version20211217122822','2021-12-17 13:29:24',455),('DoctrineMigrations\\Version20211217132300','2021-12-17 14:23:42',256),('DoctrineMigrations\\Version20211220130053','2021-12-20 14:02:02',312),('DoctrineMigrations\\Version20211220145032','2021-12-20 15:51:15',134),('DoctrineMigrations\\Version20211220145457','2021-12-20 15:55:25',113),('DoctrineMigrations\\Version20211220182746','2021-12-20 19:28:26',150),('DoctrineMigrations\\Version20211222071123','2021-12-22 08:11:59',139),('DoctrineMigrations\\Version20211222142525','2021-12-22 15:25:58',188),('DoctrineMigrations\\Version20211227125315','2021-12-27 14:24:15',442);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_year`
--

DROP TABLE IF EXISTS `invoice_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice_year` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plots_id` int DEFAULT NULL,
  `invoicedate` date NOT NULL,
  `addelectriccounter` tinyint(1) NOT NULL,
  `addwatercounter` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9471152901E80B8` (`plots_id`),
  CONSTRAINT `FK_B9471152901E80B8` FOREIGN KEY (`plots_id`) REFERENCES `plots` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_year`
--

LOCK TABLES `invoice_year` WRITE;
/*!40000 ALTER TABLE `invoice_year` DISABLE KEYS */;
INSERT INTO `invoice_year` VALUES (1,'J-2022toto:gartennummer',1,'2021-12-17',0,0),(2,'J 2021-003',2,'2021-12-18',0,0),(3,'J-2021toto:gartennummer',3,'2021-12-12',1,0),(4,'J 2021 - 011',12,'2021-12-12',0,0),(5,'J 2021 - 011',12,'2021-12-12',0,0),(6,'J-2022toto:gartennummer',12,'2021-12-12',0,0);
/*!40000 ALTER TABLE `invoice_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membersince` date DEFAULT NULL,
  `clubpaper` tinyint(1) DEFAULT NULL,
  `parking` tinyint(1) NOT NULL,
  `notice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clubfunction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberstate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `freepaymentfee` tinyint(1) NOT NULL,
  `freepaymentpaper` tinyint(1) NOT NULL,
  `freepaymenthours` tinyint(1) NOT NULL,
  `deposit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parkingcount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdat` date NOT NULL,
  `updatedat` date NOT NULL,
  `gardennumber_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45A0D2FFD6C77DFE` (`gardennumber_id`),
  CONSTRAINT `FK_45A0D2FFD6C77DFE` FOREIGN KEY (`gardennumber_id`) REFERENCES `plots` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Frau',NULL,'Gerda','Beispiel','gerda.beispiel@example.com','04534333322','09557','Flöha Plaue','Südstraße 3','1967-02-12',NULL,'1975-03-01',0,1,NULL,'','A',0,1,1,'200','1','2021-12-15','2021-12-22',1),(2,'Frau','2021-001','Max','Mustermann','max@example.com','+4912345678899000','09557','Flöha','Augustusburger Str. 100','1958-01-01',NULL,'1980-02-20',0,1,NULL,'stellv. Vorsitzender','A',0,0,0,NULL,'1','2021-12-20','2021-12-21',7),(4,'Herr',NULL,'Paul','Paulson','paule.paulson@meinedomain.de','123098873234','09112','Chemnitz','Adelsbergstraße 3a','1980-01-01',NULL,NULL,0,0,NULL,'Elektrokommission','E',1,0,1,NULL,NULL,'2021-12-14','2021-12-14',NULL),(5,'Frau',NULL,'Bernd','Müööer','max@example.com','+4912345678899000','09557','Flöha','Augustusburger Str. 100','1950-12-24','Maler',NULL,0,0,NULL,'','A',0,0,0,NULL,NULL,'2021-12-20','2021-12-20',2),(7,'Frau',NULL,'Hans','Hansen','hans@example.com','04534333322','09557','Flöha','Südstraße 3','1978-04-23',NULL,NULL,0,0,NULL,'','P',0,0,0,NULL,NULL,'2021-12-14','2021-12-14',7),(9,'Frau','2021-005','Betina','Bett','bett@test.de','111111','09112','Chemnitz','Wolgograder Allee 190','1950-12-30','Verkäuferin',NULL,0,1,'Das ist eine Bemerkung','','A',0,0,0,'300','1','2021-12-14','2021-12-27',6),(10,'Herr',NULL,'Egon','Olsen','olsen@egan.com',NULL,'1234','Kopenhagen','Knast 1','1948-06-02','Schauspieler','1978-10-23',1,0,NULL,'','A',1,1,1,NULL,NULL,'2021-12-15','2021-12-27',3),(11,'Frau',NULL,'Jane','Doe','jane@doe.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,'','A',0,0,0,NULL,NULL,'2021-12-15','2021-12-15',9),(12,'Frau',NULL,'Maxümülian','Buschkowki','bella@example.com','03423434','1234','Musterhausen','Hauptstraße 11','2005-01-04',NULL,NULL,0,0,NULL,'','A',0,0,1,NULL,NULL,'2021-12-20','2021-12-20',12),(13,'Frau',NULL,'Johannes','Doe','doe@mail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,'','P',0,0,0,NULL,NULL,'2021-12-15','2021-12-15',9),(14,'Frau',NULL,'Ernst','Ernstings',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,'','A',0,0,1,NULL,NULL,'2021-12-15','2021-12-15',10),(15,'Frau',NULL,'Lorem','Ipsum','ipsum@dolor.com','432432','09557','Flöha','Grüne Aue 1','1956-06-12',NULL,NULL,0,0,NULL,'Vorsitzender','A',0,0,1,NULL,NULL,'2021-12-20','2021-12-21',5),(16,'Herr',NULL,'Stone','John','stone@stone.com','3244','09112','Chemnitz','Adelsbergstraße 92',NULL,'Mechaniker',NULL,0,0,NULL,'','P',0,0,0,NULL,NULL,'2021-10-03','2021-12-21',NULL),(17,'Frau',NULL,'Mia','Wong','mia@web.de','453 454354 4444','09117','Chemnitz','Wolgograder Allee 22a','1972-10-23',NULL,'2021-12-01',0,0,NULL,'','P',0,0,0,NULL,NULL,'2021-12-21','2021-12-21',NULL),(18,'Frau',NULL,'Max','Maxen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,'','A',0,0,0,NULL,NULL,'2021-12-21','2021-12-21',4),(19,'Frau',NULL,'dsfdf','sfsdfd','ffsd@test.de','3423242','423432','fdsfdfdf','sdfsdff','1999-12-12',NULL,'2022-01-01',0,0,NULL,'','A',0,0,0,'300.00',NULL,'2021-12-27','2022-01-08',13);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plots`
--

DROP TABLE IF EXISTS `plots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plots` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haselectric` tinyint(1) NOT NULL,
  `haswater` tinyint(1) NOT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci,
  `plotstate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedat` date DEFAULT NULL,
  `members_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8FD44F00BD01F5ED` (`members_id`),
  CONSTRAINT `FK_8FD44F00BD01F5ED` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plots`
--

LOCK TABLES `plots` WRITE;
/*!40000 ALTER TABLE `plots` DISABLE KEYS */;
INSERT INTO `plots` VALUES (1,'001','Am Wald','235',1,1,'Hallo halo','Verpachtet','2021-12-21',NULL),(2,'003','Oberer Weg','500',1,1,NULL,'Verpachtet','2021-12-14',NULL),(3,'002','Am Geräteschuppen','311',1,1,'Hallo Welt erwer$%$%3','Verpachtet','2021-12-21',NULL),(4,'004','Oberer Weg','300',1,1,'Hallo Welt','Verpachtet','2021-12-28',NULL),(5,'005','Oberer Weg','300',1,1,'Lorem ipsum dolor sit amet','Gekündigt','2021-12-14',NULL),(6,'006','Oberer Weg','320',1,1,NULL,'Verpachtet',NULL,NULL),(7,'007','Am Wald','300',1,0,NULL,'Verpachtet','2021-12-22',NULL),(9,'008','Am Wald','224',1,1,NULL,'Verpachtet','2021-12-15',NULL),(10,'009','Am Wald','300',1,1,'Test','Verpachtet','2021-12-28',NULL),(11,'010','Oberer Weg','345',0,0,NULL,'Frei','2021-12-15',NULL),(12,'011','Am Wald','400',1,1,NULL,'Verpachtet','2021-12-15',NULL),(13,'013','Am Wald','312',1,1,NULL,'Frei','2022-01-08',NULL);
/*!40000 ALTER TABLE `plots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `readings`
--

DROP TABLE IF EXISTS `readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `readings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` date DEFAULT NULL,
  `water_counternumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electric_counternumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electric_score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci,
  `plots_id` int DEFAULT NULL,
  `workinghours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1A14A4F1901E80B8` (`plots_id`),
  CONSTRAINT `FK_1A14A4F1901E80B8` FOREIGN KEY (`plots_id`) REFERENCES `plots` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `readings`
--

LOCK TABLES `readings` WRITE;
/*!40000 ALTER TABLE `readings` DISABLE KEYS */;
INSERT INTO `readings` VALUES (2,'2021-01-01','33231','20.6','4656456','199.3','Bemerkung zur Ablesung!',1,'2.5'),(8,'2020-01-01','89898','113','4334543','234.5',NULL,2,'3.5'),(9,'2021-01-01','2312321','345','343242345','45.6',NULL,3,'4.5'),(10,'2020-01-01','323243243432','12.4','3123213','200.4',NULL,12,'3'),(11,'2020-01-01','23432432','10','423434','15',NULL,1,'5'),(12,'2019-01-01',NULL,'2','342343','5.8',NULL,1,'3'),(13,'2019-01-01','34324234','1.6','rewrewr','2.5',NULL,9,NULL),(14,'2020-01-01','343242','5.1','34324323243','3.2',NULL,9,'3'),(15,'2021-01-01','34324','37','432432','44',NULL,9,'4'),(16,'2021-01-01','78786867','1.5','34233432434','10',NULL,12,'2');
/*!40000 ALTER TABLE `readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (6,'kai.seitenglanz@t-online.de','[\"ROLE_ADMIN\"]','$2y$13$.uI8WAW6lR2WmuvL/8oSFOVJvj41L.F36RQTVG/0G5H.LxoHUuZIC','Kai','Seitenglanu'),(7,'kai.seitenglanz@bergidyll.info','[]','$2y$13$vaenzJT0c8UUStRO2qd.tOqAp9g.UInWWZrZ355fPQfFOgFVyTOqG','Gerda','Beispiel'),(10,'beispiel@beispiel.de','[]','$2y$13$SDZjNjbZGuztRoyBhmsz2eEFTbXiN3kU.0cotF.wFr6J8wMMM2alC','Max','Mustermann');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-18  7:35:37
