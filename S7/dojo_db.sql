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
  `OTHER_FB_LINK` varchar(1000) DEFAULT NULL,
  `SCHOOL_MNGR` varchar(200) DEFAULT NULL,
  `MANAGER_EMAIL` varchar(200) DEFAULT NULL,
  `MANAGER_NUM` varchar(50) DEFAULT NULL,
  `TECH_MANAGER` varchar(200) DEFAULT NULL,
  `TECH_MANAGER_EMAIL` varchar(300) DEFAULT NULL,
  `TECH_MANAGER_NUM` varchar(50) DEFAULT NULL,
  `LEAD_EMAIL` varchar(200) DEFAULT NULL,
  `LEAD_NUM` varchar(50) DEFAULT NULL,
  `LOGO_URL` varchar(1000) DEFAULT NULL,
  `UPLOAD_IMG_URLS` varchar(2000) DEFAULT NULL,
  `COMPANY_BIO` varchar(1000) DEFAULT NULL,
  `SPECIAL_NOTES` varchar(500) DEFAULT NULL,
  `IS_EMAIL_SENT` enum('Y','N') NOT NULL DEFAULT 'N',
  `CREATED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFIED_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_DTLS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=705 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_dtls`
--

LOCK TABLES `user_dtls` WRITE;
/*!40000 ALTER TABLE `user_dtls` DISABLE KEYS */;
INSERT INTO `user_dtls` VALUES (701,'DN2017701','Piyush','piyush.jadhav@repleteinc.com','9096409749','Test','Testlink','TestProgram1,testprogram2','Fblink1','fblink1,fblink2','Piyush','testmanage@repleteinc.com','9096409749','Piyush','piyush.jadhav@repleteinc.com','9096409749','piyush.jadhav@repleteinc.com','9096409749',NULL,NULL,NULL,NULL,'Y','2017-03-06 09:09:52','2017-03-06 13:30:14'),(702,'DN2017702','Piyush','piyush.jadhav@repleteinc.com','9096409749','Test','Testlink','TestProgram1,testprogram2','Fblink1','fblink1,fblink2','Piyush','piyush.jadhav@repleteinc.com','9096409749','Piyush','piyush.jadhav@repleteinc.com','9096409749','piyush.jadhav@repleteinc.com','9096409749',NULL,NULL,NULL,NULL,'Y','2017-03-06 09:10:23','2017-03-06 09:10:23'),(703,'DN2017703','Sean Noble','tikuholopo@gmail.com','240','Kameko Russo','Laborum Ut quis eum cumque qui','Non quo esse consectetur est cillum dolores non ipsum consequat Neque aut','In incididunt aperiam irure harum voluptatem aliquip cumque nobis dolore cupiditate ducimus ut autem ipsam non','Sequi aut est eaque autem omnis unde maiores','Libero provident expedita cupidatat rerum in duis occaecat dolores enim','towowol@gmail.com','528','Culpa in aperiam est ut dicta autem rerum perferendis aliquip est qui dolore quibusdam error nesciunt similique tempore pariatur Quos','tamule@hotmail.com','825','tikuholopo@gmail.com,cigefafem@yahoo.com','240,528','Uploads/Sean_Noble_240/1._1488891575.png','Uploads/Sean_Noble_240/Chrysanthemum._1488891575.jpg,Uploads/Sean_Noble_240/Desert._1488891575.jpg,Uploads/Sean_Noble_240/Hydrangeas._1488891575.jpg,Uploads/Sean_Noble_240/Jellyfish._1488891575.jpg,Uploads/Sean_Noble_240/Koala._1488891575.jpg,Uploads/Sean_Noble_240/Lighthouse._1488891575.jpg,Uploads/Sean_Noble_240/Penguins._1488891575.jpg,Uploads/Sean_Noble_240/pic_1._1488891575.jpg,Uploads/Sean_Noble_240/Tulips._1488891575.jpg',NULL,NULL,'Y','2017-03-07 12:59:35','2017-03-07 12:59:35'),(704,'DN2017704','Yen Manning','piyush.jadhav@repleteinc.com','411','Kameko Hester','Fugiat excepturi corrupti qui ipsam','Veniam illo et voluptatem obcaecati provident quia','Reprehenderit a ut dolores sed voluptatem Ipsa ratione qui rerum harum quod reprehenderit voluptatem illo saepe fuga','Explicabo Suscipit possimus est praesentium cupiditate maxime et natus sunt sint tenetur adipisci quasi atque irure labore aut earum','Odit pariatur Commodo placeat optio quis omnis dolore nulla rem nostrum dolor proident autem eveniet et quia irure','fusicymag@yahoo.com','14','Et autem architecto eum quis','motenop@yahoo.com','386','piyush.jadhav@repleteinc.com,fusicymag@yahoo.com','14','Uploads/Yen_Manning_411/Chrysanthemum.jpg','Uploads/Yen_Manning_411/Chrysanthemum._1488892988.jpg,Uploads/Yen_Manning_411/Desert.jpg,Uploads/Yen_Manning_411/Hydrangeas.jpg,Uploads/Yen_Manning_411/Jellyfish.jpg,Uploads/Yen_Manning_411/Koala.jpg,Uploads/Yen_Manning_411/Lighthouse.jpg,Uploads/Yen_Manning_411/Penguins.jpg,Uploads/Yen_Manning_411/pic_1.jpg,Uploads/Yen_Manning_411/Tulips.jpg','Ipsum molestias omnis suscipit dolorum ratione do qui voluptatibus ex fuga. Saepe dolorem reiciendis.','Harum eos magni incididunt nesciunt, velit sed consectetur, voluptas eum unde laboris optio, aut ipsa.','Y','2017-03-07 13:23:08','2017-03-07 13:23:09');
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

-- Dump completed on 2017-03-07 18:55:49
