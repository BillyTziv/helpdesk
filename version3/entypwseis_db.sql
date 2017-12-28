-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: entypwseis
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `Tasks`
--

DROP TABLE IF EXISTS `Tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) DEFAULT NULL,
  `taskName` varchar(255) DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `person` varchar(255) DEFAULT NULL,
  `entryDate` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tasks`
--

LOCK TABLES `Tasks` WRITE;
/*!40000 ALTER TABLE `Tasks` DISABLE KEYS */;
INSERT INTO `Tasks` VALUES (1,3,'Ημέρας παράδωσης σελίδων +3 μέρες?','','Giannis Tzoumpas','2017-09-14','+3 μέρες αύξηση σε όλα τα πακέτα',1),(2,3,'Υλικό για portfolio','','Giannis Tzoumpas','2017-09-14','Έχω κάνει επικοινωνία υπενθύμισης στην γραφίστρια',0),(3,3,' Χαρακτηριστικά πίνακα/ Μορφοποίηση ','','Giannis Tzoumpas','2017-09-14','Χρειάζομαι τα specs  και desk και mobile',1),(4,3,'Διόρθωση της επικοινωνίας','','Tzivaras Vasilis','2017-09-14','Επείγων ',1),(5,3,'Εξαγωγή χαρακτηριστικών τέλειου πίνακα','14/09/2017','Tzivaras Vasilis','14/09/2017','Ύψος κελιών, γραμματοσειρά, μέγεθος γραμματοσειράς και spaces before and after',1),(6,3,'Τιμές στο hosting','14/09/2017','Tzivaras Vasilis','14/09/2017','Να μπούν τιμές στο hosting service που έχουμε. Κάπως.',1),(7,2,'Sign in στα κοσμήματα','17/09/2017','Tzivaras Vasilis','14/09/2017','Κάπως να μπορώ να δω μερικά απο το portfolio , όχι όλα. Με λογαριασμούς.',0),(8,2,'Προσθήκη τιμής για μεταφορά hosting','17/09/2017','Tzivaras Vasilis','14/09/2017','Κάπου να μπει και αυτό, τιμές για μεταφορά hosting.',0),(9,1,'Δημιουργία tab στο μενού με τις υπηρεσίες','30/09/2017','Tzivaras Vasilis','14/09/2017','Το tab θα έχει Γραφιστική, hosting υπηρεσία, μετάφραση και δακτυλογράφηση.',1),(10,1,'Δημιουργία σελίδα για δακτυλογράφηση','30/09/2017','Tzivaras Vasilis','14/09/2017','Σελίδα για την δακτυλογράφηση, πληροφορίες στο τέλος του doc που έφτιαξε ο Γιαννης.',0),(11,1,'Σελίδα για την μετάφραση','30/09/2017','Tzivaras Vasilis','14/09/2017','Σελιδα αποκλειστικά για τις μεταφράσεις που κάνουμε.',1),(12,1,'Σελίδα για γραφιστική','30/09/2017','Tzivaras Vasilis','14/09/2017','Σελίδα για την γραφισιτκή που έχουμε, ενδεχομέως να δείξουμε και κάποια δουλεια μας.',1),(13,1,'Second theme','','Giannis Tzoumpas','2017-09-17','Σύγκριση του δεύτερου theme που ίσως χρειαστούμε.',1),(14,3,'SM Μαρία ','','Giannis Tzoumpas','2017-09-17','Δημιουργία content για τα sm  του Στάθη',1),(15,2,'Μπαταρίες Για newsletter','','Giannis Tzoumpas','','Αποστολή newsletter την τρίτη (Μπαταριές) ',0),(16,2,'Τηλέφωνο στον Ζαχαροπλάστη ','','Giannis Tzoumpas','2017-09-17','Τηλέφωνο στον Ζαχαροπλάστη την Δευτέρα',0),(17,2,'Τηλέφωνο στον Κοσμηματοπώλη  ','','Giannis Tzoumpas','2017-09-17','Τηλέφωνο στον Κοσμηματοπώλη την Δευτέρα',1),(18,1,'Εκκρεμότητες email  ','','Giannis Tzoumpas','2017-09-17','Typografos,iprint υπενθύμιση email',1),(19,1,'Γραφιστικά Μάγου','','Giannis Tzoumpas','2017-09-17','Επικοινωνία για την μακέτα του μάγου Τρίτη πρωί ',1),(20,1,'Φιλια Αρτας','','Giannis Tzoumpas','2017-09-17','Επικοινωνία για επιβεβαίωση μακέτας ',0),(21,1,'Δημιουργία δικού μας φυλλαδίου ','','Giannis Tzoumpas','2017-09-17','Δημιουργία δικού μας φυλλαδίου 10,000 τεμ Α5',0),(22,1,'Δημιουργία βινύλιου με στοιχεία πάνω  ','','Giannis Tzoumpas','2017-09-17','Δημιουργία βινύλιου με λογότυπα και στοιχεία πάνω ',1),(23,1,'Bill/Κάρτες/Φυλλάδια/Βινύλια ','','Giannis Tzoumpas','2017-09-17','Να δώσω στο Bill Κάρτες Φυλλάδια Βινύλια ',1),(24,2,'Διανομή Banner','','Giannis Tzoumpas','2017-09-17','Διανομή Banner Αύριο στις 8 το πρωί ',1),(25,2,'Δοκιμαστικό','30/09/2017','Tzivaras Vasilis','25/09/2017','Σβήσε το.',1),(26,2,'πληρωμη του ιντερνετ','2017-10-07','Giannis Tzoumpas','2017-09-25','πληρωμη του ιντερνετ 40ευρω',1);
/*!40000 ALTER TABLE `Tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `realName` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES ('vasilis','4e2304affac92fd2641187574b7d51db','Τζιβάρας Βασίλης'),('Bonn','368bdfaaf0dc36a27be35480d2cbcc67','Τζούμπας Ιωάννης'),('kgogouli','f74a10e1d6b2f32a47b8bcb53dac5345','Κωνσταντίνα Γωγούλη');
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

-- Dump completed on 2017-12-28 13:58:37
