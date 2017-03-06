-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: dojo_db
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `order_dtls`
--

DROP TABLE IF EXISTS `order_dtls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_dtls` (
  `ORDER_DTLS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCT_NUM` varchar(15) NOT NULL,
  `ORDER_ID` varchar(100) NOT NULL,
  `ALERT_OF_PURCHASE_EMAILS` varchar(1000) NOT NULL,
  `CREATED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ORDER_DTLS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_dtls`
--

LOCK TABLES `order_dtls` WRITE;
/*!40000 ALTER TABLE `order_dtls` DISABLE KEYS */;
INSERT INTO `order_dtls` VALUES (1,'DN2017701','','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:41:20','2017-03-06 13:41:20'),(2,'DN2017701','','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:42:05','2017-03-06 13:42:05'),(3,'DN2017701','PI22205552','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:43:36','2017-03-06 13:43:36'),(4,'DN2017701','PI53704151','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:46:25','2017-03-06 13:46:25'),(5,'DN2017701','PI85470460','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:47:24','2017-03-06 13:47:24'),(6,'DN2017701','PI92350463','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:47:51','2017-03-06 13:47:51'),(7,'DN2017701','PI17555319','piyush.jadhav@repleteinc.com,testmanage@repleteinc.com,test2@gmail.com','2017-03-06 13:49:29','2017-03-06 13:49:29');
/*!40000 ALTER TABLE `order_dtls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_dtls`
--

DROP TABLE IF EXISTS `user_dtls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_dtls` (
  `USER_DTLS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCT_NUM` varchar(10) DEFAULT NULL,
  `OWNER_NAME` varchar(200) DEFAULT NULL,
  `OWNER_MAIL` varchar(300) DEFAULT NULL,
  `OWNER_NUM` varchar(50) DEFAULT NULL,
  `SCHOOL_NM` varchar(500) DEFAULT NULL,
  `SCHOOL_WEB_LINK` varchar(500) DEFAULT NULL,
  `PROGRAM_OFFRD` varchar(1000) DEFAULT NULL,
  `FB_LINK` varchar(300) DEFAULT NULL,
  `OTHER_FB_LINK` varchar(300) DEFAULT NULL,
  `SCHOOL_MNGR` varchar(200) DEFAULT NULL,
  `MANAGER_EMAIL` varchar(200) DEFAULT NULL,
  `MANAGER_NUM` varchar(50) DEFAULT NULL,
  `TECH_MANAGER` varchar(50) DEFAULT NULL,
  `TECH_MANAGER_EMAIL` varchar(200) DEFAULT NULL,
  `TECH_MANAGER_NUM` varchar(50) DEFAULT NULL,
  `LEAD_EMAIL` varchar(200) DEFAULT NULL,
  `LEAD_NUM` varchar(50) DEFAULT NULL,
  `IS_EMAIL_SENT` enum('Y','N') NOT NULL DEFAULT 'N',
  `CREATED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_DTLS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=703 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_dtls`
--

LOCK TABLES `user_dtls` WRITE;
/*!40000 ALTER TABLE `user_dtls` DISABLE KEYS */;
INSERT INTO `user_dtls` VALUES (701,'DN2017701','Piyush','piyush.jadhav@repleteinc.com','9096409749','Test','Testlink','TestProgram1,testprogram2','Fblink1','fblink1,fblink2','Piyush','testmanage@repleteinc.com','9096409749','Piyush','piyush.jadhav@repleteinc.com','9096409749','piyush.jadhav@repleteinc.com','9096409749','Y','2017-03-06 09:09:52','2017-03-06 13:30:14'),(702,'DN2017702','Piyush','piyush.jadhav@repleteinc.com','9096409749','Test','Testlink','TestProgram1,testprogram2','Fblink1','fblink1,fblink2','Piyush','piyush.jadhav@repleteinc.com','9096409749','Piyush','piyush.jadhav@repleteinc.com','9096409749','piyush.jadhav@repleteinc.com','9096409749','Y','2017-03-06 09:10:23','2017-03-06 09:10:23');
/*!40000 ALTER TABLE `user_dtls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dojo_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-06 19:34:43
