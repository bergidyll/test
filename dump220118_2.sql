-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: vereinsverwaltung_db
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
-- Table structure for table `ablesung`
--

DROP TABLE IF EXISTS `ablesung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ablesung` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parzelle_id` int DEFAULT NULL,
  `jahr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stromzaehlernummer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stromzaehlerstand` decimal(10,2) DEFAULT NULL,
  `stromdiff` decimal(10,2) DEFAULT NULL,
  `stromzaehlertausch` tinyint(1) DEFAULT NULL,
  `stromzaehlerstand_alt` decimal(10,2) DEFAULT NULL,
  `stromzaehlernummer_alt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wasserstand_alt` decimal(10,2) DEFAULT NULL,
  `wasserstand` decimal(10,2) DEFAULT NULL,
  `wasserzaehlernummer_alt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wasserzaehlernummer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wasserdiff` decimal(10,2) DEFAULT NULL,
  `wasserzaehlertausch` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_48B6028727C7C766` (`parzelle_id`),
  CONSTRAINT `FK_48B6028727C7C766` FOREIGN KEY (`parzelle_id`) REFERENCES `parzellen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ablesung`
--

LOCK TABLES `ablesung` WRITE;
/*!40000 ALTER TABLE `ablesung` DISABLE KEYS */;
INSERT INTO `ablesung` VALUES (8,1,'2020','11111',100.00,NULL,0,NULL,NULL,NULL,15.00,NULL,'01001001',NULL,NULL),(17,2,'2019','1212',20.50,20.50,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,2,'2020','1212',32.00,11.50,0,20.50,'1212',NULL,NULL,NULL,NULL,NULL,NULL),(19,2,'2021','1313',50.00,18.00,1,32.00,'1313',NULL,NULL,NULL,NULL,NULL,NULL),(20,3,'2019','4444',5.00,5.00,0,NULL,NULL,NULL,100.20,NULL,'09009',100.20,NULL),(23,1,'2021','11111',145.00,45.00,0,100.00,'11111',15.00,20.40,'01001001','01001001',5.40,NULL),(24,5,'2021','0000',30.00,5.00,0,25.00,'0000',39.80,42.50,'1111','1111',2.70,NULL);
/*!40000 ALTER TABLE `ablesung` ENABLE KEYS */;
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
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20211229092240','2021-12-29 10:23:24',153),('DoctrineMigrations\\Version20211229100625','2021-12-29 11:06:34',129),('DoctrineMigrations\\Version20211229104615','2021-12-29 11:46:22',142),('DoctrineMigrations\\Version20211229111338','2021-12-29 12:13:43',525),('DoctrineMigrations\\Version20211229113419','2021-12-30 13:11:34',15),('DoctrineMigrations\\Version20211229113626','2021-12-30 13:11:34',0),('DoctrineMigrations\\Version20211230120946','2021-12-30 13:11:34',770),('DoctrineMigrations\\Version20211230121858','2021-12-30 13:19:05',909),('DoctrineMigrations\\Version20211231100823','2021-12-31 11:08:28',164),('DoctrineMigrations\\Version20211231102843','2021-12-31 11:28:49',803),('DoctrineMigrations\\Version20220101110812','2022-01-01 12:08:17',1545),('DoctrineMigrations\\Version20220101111622','2022-01-01 12:17:08',128),('DoctrineMigrations\\Version20220102160854','2022-01-02 17:09:03',166),('DoctrineMigrations\\Version20220102161414','2022-01-02 17:14:19',544),('DoctrineMigrations\\Version20220102161712','2022-01-02 17:17:15',126),('DoctrineMigrations\\Version20220104063835','2022-01-04 07:38:45',194),('DoctrineMigrations\\Version20220104064201','2022-01-04 07:43:10',101),('DoctrineMigrations\\Version20220104064441','2022-01-04 07:45:17',19),('DoctrineMigrations\\Version20220104065447','2022-01-04 07:54:54',336),('DoctrineMigrations\\Version20220104071156','2022-01-04 08:12:02',520),('DoctrineMigrations\\Version20220104103618','2022-01-04 11:37:38',3),('DoctrineMigrations\\Version20220104103853','2022-01-04 11:39:11',96),('DoctrineMigrations\\Version20220105163253','2022-01-05 17:32:56',141),('DoctrineMigrations\\Version20220106065315','2022-01-06 07:53:19',389),('DoctrineMigrations\\Version20220106071257','2022-01-06 08:13:00',111),('DoctrineMigrations\\Version20220106074342','2022-01-06 08:43:45',145),('DoctrineMigrations\\Version20220106080155','2022-01-06 09:01:59',118),('DoctrineMigrations\\Version20220106081028','2022-01-06 09:10:31',104),('DoctrineMigrations\\Version20220106084515','2022-01-06 09:45:17',118),('DoctrineMigrations\\Version20220106092834','2022-01-06 10:28:36',206),('DoctrineMigrations\\Version20220106095133','2022-01-06 10:51:36',107),('DoctrineMigrations\\Version20220106095224','2022-01-06 10:55:29',17),('DoctrineMigrations\\Version20220106095321','2022-01-06 10:55:29',0),('DoctrineMigrations\\Version20220106095420','2022-01-06 11:08:32',264),('DoctrineMigrations\\Version20220106100917','2022-01-06 11:09:20',183),('DoctrineMigrations\\Version20220107104850','2022-01-07 11:48:54',161),('DoctrineMigrations\\Version20220107105504','2022-01-07 11:55:07',142),('DoctrineMigrations\\Version20220107105709','2022-01-07 11:57:14',961),('DoctrineMigrations\\Version20220107110854','2022-01-07 12:09:02',748),('DoctrineMigrations\\Version20220107124855','2022-01-07 13:49:00',197),('DoctrineMigrations\\Version20220108161256','2022-01-08 17:13:01',116),('DoctrineMigrations\\Version20220109092200','2022-01-09 10:22:05',110),('DoctrineMigrations\\Version20220109104638','2022-01-09 11:46:43',126),('DoctrineMigrations\\Version20220111075349','2022-01-11 08:53:54',164),('DoctrineMigrations\\Version20220111151750','2022-01-11 16:18:12',418),('DoctrineMigrations\\Version20220112144543','2022-01-12 15:45:46',130),('DoctrineMigrations\\Version20220112145348','2022-01-12 15:53:51',171),('DoctrineMigrations\\Version20220112150617','2022-01-12 16:06:21',156),('DoctrineMigrations\\Version20220112150737','2022-01-12 16:07:44',318),('DoctrineMigrations\\Version20220112155606','2022-01-12 16:56:14',312),('DoctrineMigrations\\Version20220113155718','2022-01-13 16:57:22',107),('DoctrineMigrations\\Version20220114064442','2022-01-14 07:44:46',140),('DoctrineMigrations\\Version20220114095811','2022-01-14 16:48:51',21),('DoctrineMigrations\\Version20220114100120','2022-01-14 16:48:51',0),('DoctrineMigrations\\Version20220114100251','2022-01-14 16:48:51',0),('DoctrineMigrations\\Version20220114154824','2022-01-14 16:48:51',132),('DoctrineMigrations\\Version20220114165844','2022-01-14 17:58:53',116),('DoctrineMigrations\\Version20220115151725','2022-01-15 16:17:29',125),('DoctrineMigrations\\Version20220115154136','2022-01-15 16:41:41',192),('DoctrineMigrations\\Version20220115160303','2022-01-15 17:03:10',148);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitglieder`
--

DROP TABLE IF EXISTS `mitglieder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mitglieder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vorname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nachname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anrede` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geburtsdatum` date DEFAULT NULL,
  `parzelle_id` int DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strasse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plz` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ort` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funktion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beruf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eintrittsdatum` date DEFAULT NULL,
  `austrittsdatum` date DEFAULT NULL,
  `notiz` longtext COLLATE utf8mb4_unicode_ci,
  `parkplatz` tinyint(1) DEFAULT NULL,
  `parkplatzanzahl` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kaution` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zeitungsbezug` tinyint(1) DEFAULT NULL,
  `zb_pflichtstunden` tinyint(1) DEFAULT NULL,
  `zb_zeitung` tinyint(1) DEFAULT NULL,
  `zb_mitgliedsbeitrag` tinyint(1) DEFAULT NULL,
  `mitgliedsnummer` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdat` date DEFAULT NULL,
  `updatedat` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5FEB0C6A27C7C766` (`parzelle_id`),
  CONSTRAINT `FK_5FEB0C6A27C7C766` FOREIGN KEY (`parzelle_id`) REFERENCES `parzellen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitglieder`
--

LOCK TABLES `mitglieder` WRITE;
/*!40000 ALTER TABLE `mitglieder` DISABLE KEYS */;
INSERT INTO `mitglieder` VALUES (1,'Max','Muster','Herr','3432432',NULL,'1947-07-03',1,'A','Augustusburger Str. 101','09667','Flöha','Reihenwart','Maurer','2000-01-10',NULL,NULL,0,NULL,NULL,0,1,0,0,NULL,'2022-01-14','2022-01-15'),(2,'Max','Mustermann','Herr',NULL,NULL,NULL,2,'G','Augustusburger Str. 101','09557','Flöha','',NULL,'1980-05-01','2021-11-30',NULL,0,NULL,NULL,0,0,0,0,NULL,'2022-01-14','2022-01-14'),(4,'Gerda','Beispiel','Frau','04534333322','gerda.beispiel@example.com','1950-03-10',3,'A','südstraße 100','09557','Flöha','',NULL,'1980-05-15',NULL,NULL,0,NULL,NULL,0,0,0,0,NULL,'2022-01-14','2022-01-14'),(5,'Paul','Paulson','Herr','123098873234','paule.paulson@meinedomain.de','1970-12-12',1,'P','Adelsbergstraße 3a','09557','Chemnitz','Schriftführer','Maler','2010-01-01',NULL,'Eine Notiz zu Paul',1,'1','200',1,1,1,1,NULL,'2022-01-14','2022-01-15'),(6,'John','Doe','Herr','323123',NULL,'1945-04-30',5,'A','Clausstraße 55','09117','Chemnitz','','Maler','2021-01-01',NULL,NULL,1,'2','300',1,1,1,1,'3313','2022-01-14','2022-01-16'),(7,'Jane','Doe','Frau',NULL,NULL,'1971-03-12',5,'P',NULL,NULL,NULL,'',NULL,'1999-10-10',NULL,NULL,0,NULL,NULL,0,0,0,0,NULL,'2022-01-10','2022-01-14');
/*!40000 ALTER TABLE `mitglieder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `create_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (4,'Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','2022-01-13 00:00:00','Seitenglanz','I'),(5,'parturient','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','2022-01-13 00:00:00','Seitenglanz','W'),(6,'Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','2022-01-13 00:00:00','Seitenglanz','SW');
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parzellen`
--

DROP TABLE IF EXISTS `parzellen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parzellen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nummer` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groesse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bereich` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paechter_a` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paechter_p` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinkwasser` tinyint(1) DEFAULT NULL,
  `strom` tinyint(1) DEFAULT NULL,
  `notiz` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdat` date DEFAULT NULL,
  `updatedat` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parzellen`
--

LOCK TABLES `parzellen` WRITE;
/*!40000 ALTER TABLE `parzellen` DISABLE KEYS */;
INSERT INTO `parzellen` VALUES (1,'001','250.00','Hauptweg','Muster, Max','Paulson, Paul',1,1,'Eine Notiz','P','2022-01-14','2022-01-14'),(2,'002','300','Oberer Weg','Mustermann, Max',NULL,1,1,NULL,'G','2022-01-14','2022-01-14'),(3,'003','280','Hauptweg','Beispiel, Gerda',NULL,1,1,NULL,'P','2022-01-14','2022-01-14'),(5,'004','350','Hauptweg',NULL,NULL,0,0,NULL,'P','2022-01-14','2022-01-14'),(6,'005','450','Hauptweg',NULL,NULL,1,1,'Muss neu vermessen werden','F','2022-01-14','2022-01-14');
/*!40000 ALTER TABLE `parzellen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pflichtstunden`
--

DROP TABLE IF EXISTS `pflichtstunden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pflichtstunden` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jahr` date DEFAULT NULL,
  `anzahl` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bemerkung` longtext COLLATE utf8mb4_unicode_ci,
  `mitglieder_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3CD49F3FB86CFF65` (`mitglieder_id`),
  CONSTRAINT `FK_3CD49F3FB86CFF65` FOREIGN KEY (`mitglieder_id`) REFERENCES `mitglieder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pflichtstunden`
--

LOCK TABLES `pflichtstunden` WRITE;
/*!40000 ALTER TABLE `pflichtstunden` DISABLE KEYS */;
INSERT INTO `pflichtstunden` VALUES (1,'2022-01-01','3',NULL,2),(3,'2022-01-01','2',NULL,4),(5,'2022-01-01','2',NULL,5),(6,'2022-01-01','4',NULL,1),(8,'2021-01-01','2',NULL,2),(10,'2021-01-01','4',NULL,6);
/*!40000 ALTER TABLE `pflichtstunden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rechnungen`
--

DROP TABLE IF EXISTS `rechnungen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rechnungen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `datum` date DEFAULT NULL,
  `mitglieder_id` int DEFAULT NULL,
  `rechnungssumme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pflichtstunden` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rechnungsnummer` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pachtzins` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rechnungstyp` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faelligkeitsdatum` date DEFAULT NULL,
  `rechnungsstatus` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C6D2D35FB86CFF65` (`mitglieder_id`),
  CONSTRAINT `FK_C6D2D35FB86CFF65` FOREIGN KEY (`mitglieder_id`) REFERENCES `mitglieder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rechnungen`
--

LOCK TABLES `rechnungen` WRITE;
/*!40000 ALTER TABLE `rechnungen` DISABLE KEYS */;
INSERT INTO `rechnungen` VALUES (16,'2022-01-09',6,'2000.50',NULL,'J-2022-004','350','J','2022-03-09','O');
/*!40000 ALTER TABLE `rechnungen` ENABLE KEYS */;
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
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'kai.seitenglanz@bergidyll.info','[\"ROLE_ADMIN\"]','$2y$13$iAlscA3orcQND1twjZ9nmeN8Uxco49Vour0NwDiZb6IkzdfQ..c1m','Kai','Seitenglanz','2022-01-13 17:03:25'),(2,'kai.seitenglanz@t-online.de','[]','$2y$13$TZ4s4esC4bh/tgRymNIn8.MYpI5jCYlqkDPLnzcF4be5xa2JC747e','Gerda','Beispiel','2022-01-14 11:12:18');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verein`
--

DROP TABLE IF EXISTS `verein`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `verein` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gruendungsdatum` date DEFAULT NULL,
  `anschrift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registernummer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registergericht` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steuernummer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mitgliedsbeitrag_aktiv` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mitgliedsbeitrag_passiv` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pflichtstundensoll` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gartenpacht` decimal(10,2) DEFAULT NULL,
  `parkplatzpacht` decimal(10,2) DEFAULT NULL,
  `beitraglandesverband` decimal(10,2) DEFAULT NULL,
  `beitragbundesverband` decimal(10,2) DEFAULT NULL,
  `beitragregionalverband` decimal(10,2) DEFAULT NULL,
  `gesamtflaeche` decimal(30,2) DEFAULT NULL,
  `pflichtstundenbetrag` decimal(10,2) DEFAULT NULL,
  `kautionsbetrag` decimal(10,2) DEFAULT NULL,
  `zeitungsbetrag` decimal(10,2) DEFAULT NULL,
  `grundpreis_strom` decimal(10,2) DEFAULT NULL,
  `grundpreis_wasser` decimal(10,2) DEFAULT NULL,
  `fixkosten_strom` decimal(10,2) DEFAULT NULL,
  `fixkosten_wasser` decimal(10,2) DEFAULT NULL,
  `betrag_stromzaehlertausch` decimal(10,2) DEFAULT NULL,
  `betrag_wasserzaehlertausch` decimal(10,2) DEFAULT NULL,
  `vers_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_1_betrag` decimal(10,2) DEFAULT NULL,
  `vers_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_2_betrag` decimal(10,2) DEFAULT NULL,
  `vers_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_3_betrag` decimal(10,2) DEFAULT NULL,
  `vers_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_4_betrag` decimal(10,2) DEFAULT NULL,
  `vers_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vers_5_betrag` decimal(10,2) DEFAULT NULL,
  `umlage_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umlage_1_betrag` decimal(10,2) DEFAULT NULL,
  `umlage_2_betrag` decimal(10,2) DEFAULT NULL,
  `umlage_3_betrag` decimal(10,2) DEFAULT NULL,
  `umlage_4_betrag` decimal(10,2) DEFAULT NULL,
  `umlage_5_betrag` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verein`
--

LOCK TABLES `verein` WRITE;
/*!40000 ALTER TABLE `verein` DISABLE KEYS */;
INSERT INTO `verein` VALUES (1,'Beridyll',NULL,'Grüne Aue 14','09557','Flöha','+4912345678899000','max@example.com','Vereinsregister','VR 1111','Chmnitz','Sparkasse Mittelsachsem','DE 00000000000','WELDA43432','000/00/00','30',NULL,'5',0.08,120.00,NULL,NULL,NULL,23000.00,30.00,300.00,12.00,0.30,3.00,5.00,12.00,80.00,18.00,'Haftpflichtversicherung',0.25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Werterhaltungsumlage','Zaunbauumlage',NULL,NULL,NULL,40.00,10.00,NULL,NULL,NULL),(2,'Beridyll',NULL,'Grüne Aue 14','09557','Flöha','+4912345678899000','max@example.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `verein` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-18  8:08:12
