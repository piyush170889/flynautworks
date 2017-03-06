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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_dtls`
--

LOCK TABLES `user_dtls` WRITE;
/*!40000 ALTER TABLE `user_dtls` DISABLE KEYS */;
INSERT INTO `user_dtls` VALUES (1,NULL,'ownername','owneremail@example.com','1234567890','schoolnm','schoolweblink','programoffered','fblink','otherfblink','schoolmngr','manageremail','managernum','techmanager','techmanageremail','techmanagernum','leademail','leadnum','N','2017-03-02 16:29:23','2017-03-02 16:29:23'),(2,NULL,'ownername','owneremail@example.com','1234567890','schoolnm','schoolweblink','programoffered','fblink','otherfblink','schoolmngr','manageremail','managernum','techmanager','techmanageremail','techmanagernum','leademail','leadnum','N','2017-03-02 16:29:23','2017-03-02 16:29:23'),(3,NULL,'test','test@gmail.com','123548790','test','test','test','test','test','test','test@gmail.com','7894561230','test','test@gmail.com','123456987','test@gmail.com','123','N','2017-03-02 16:29:23','2017-03-02 16:29:23'),(4,NULL,'test','test@gmail.com','123548790','test','test','test','test','test','test','test@gmail.com','7894561230','test','test@gmail.com','123456987','test@gmail.com','123','N','2017-03-02 16:32:06','2017-03-02 16:32:06'),(5,NULL,'same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','N','2017-03-02 16:34:30','2017-03-02 16:34:30'),(6,NULL,'same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','N','2017-03-02 16:35:15','2017-03-02 16:35:15'),(7,NULL,'same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','N','2017-03-02 16:37:04','2017-03-02 16:37:04'),(8,'8','same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','Y','2017-03-02 16:39:41','2017-03-02 16:39:41'),(9,NULL,'same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','N','2017-03-02 16:42:02','2017-03-02 16:42:02'),(10,'10','same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','Y','2017-03-02 16:44:18','2017-03-02 16:44:18'),(11,'11','same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','Y','2017-03-02 17:07:39','2017-03-02 17:07:39'),(12,'12','same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','Y','2017-03-02 17:08:31','2017-03-02 17:08:31'),(13,'13','same','same@same.com','123','same','same','same','same','same','same','same@same.com','12354','same','same@gmail.com','78941','same@same.com','12361','Y','2017-03-02 17:15:58','2017-03-02 17:15:58'),(14,'14','Piyush','piyushjadhav65@gmail.com','9096409749','Test School','test@gmail.com','ajaknlkdalka','askjdbkjsd','sdvb sdk','shbcjas','sdjkj@ksbdkjds.com','7896541230','sefvsd','qwe@asd.com','7895641230','sdjknjskd@ksdks.com','1236547890','Y','2017-03-02 17:31:03','2017-03-02 17:31:03'),(15,'15','Piyush','piyushjadhav65@gmail.com','9096409749','Test School','test@gmail.com','ajaknlkdalka','askjdbkjsd','sdvb sdk','shbcjas','sdjkj@ksbdkjds.com','7896541230','sefvsd','qwe@asd.com','7895641230','sdjknjskd@ksdks.com','1236547890','Y','2017-03-02 17:32:28','2017-03-02 17:32:29'),(16,'16','Piyush','piyushjadhav65@gmail.com','9096409749','TestSchool','aksbka','asnalsln','alksnlaks','alsnlaks','asknakls','asa@jksndks.com','7894561230','sdnsd','sdknsl@bskjdkjsd.com','7896541230','sjkbjs@jksdnklsd.com','1234567890','Y','2017-03-02 17:40:12','2017-03-02 17:40:12'),(17,'17','Piyush','piyushjadhav65@gmail.com','9096409749','TestSchool','aksbka','asnalsln','alksnlaks','alsnlaks','asknakls','asa@jksndks.com','7894561230','sdnsd','sdknsl@bskjdkjsd.com','7896541230','sjkbjs@jksdnklsd.com','1234567890','Y','2017-03-02 17:49:21','2017-03-02 17:49:21');
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

-- Dump completed on 2017-03-02 23:23:35
