-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ciu_Students
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'admin','info@ciu.edu.tr','56e2be945b73828d4cc745e5221bad28','2023-01-24 18:33:43'),(3,'Poulpartner','mistapaulifidi@gmail.com','2e69f107d4be5f743461cb66d55d5e6e','2023-01-25 01:08:10');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciu_students`
--

DROP TABLE IF EXISTS `ciu_students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciu_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `c_address` varchar(10) DEFAULT NULL,
  `marital_status` varchar(11) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `date_of_entry` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciu_students`
--

LOCK TABLES `ciu_students` WRITE;
/*!40000 ALTER TABLE `ciu_students` DISABLE KEYS */;
INSERT INTO `ciu_students` VALUES (1,'Peter','John','John','577856786578','jkdjk@gmail.com','2023-01-01','happy home','single','bangladeshi','bioengineering','2023-01-25 09:34:13'),(2,'Mehmet','Albert','Abel','47646745767','gjkgjk@gmail.com','1990-02-07','nidsyeyg','single','Turkey','plant_productionT','2023-01-24 21:50:18'),(3,'John','Farrel','Williams','789678967899','jgjkgjk@gmail.com','1990-02-07','v53zohwk','single','Nigeria','accounting_finance','2023-01-21 08:28:50'),(4,'Fazil','Peace','Kucuk','7867896789688','hkgkjgjkk@gmail.com','1990-02-07','asjkgasjkf','widowed','Germany','architecture','2023-01-21 08:28:50'),(5,'Favour','Akpan','Williams','0897089987','tuiiutiuo@gmail.com','1990-02-07','dfhsgfgasj','widowed','France','artificial_intelligence_engineering','2023-01-21 08:28:50'),(6,'Paul','Jowel','Ifidi','78967896978','yfyufyug@gmail.com','1990-02-07','qwdjkgajfa','no_answer','Cyprus','bioengineering','2023-01-21 08:28:50'),(7,'John','Frank','Smith','7896896989','rsdrfdd@gmail.com','1990-02-07','sdfjksdjkf','no_answer','Cyprus','business_administration','2023-01-21 08:28:50'),(15,'Cyprus','International','University','+903926711111','info@ciu.edu.tr','2023-01-10','99258 Nico','married','albanian','artificial_intelligence_engineering','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ciu_students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-25 11:21:40
