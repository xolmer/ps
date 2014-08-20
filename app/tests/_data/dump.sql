-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: parsianmy
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.13.04.1

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
-- Table structure for table `assigned_roles`
--

DROP TABLE IF EXISTS `assigned_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_foreign` (`user_id`),
  KEY `assigned_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigned_roles`
--

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` VALUES (1,1,1);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(45) NOT NULL DEFAULT '',
  `country_code` char(2) NOT NULL DEFAULT '',
  `currency_code` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Andorra','AD','EUR'),(2,'United Arab Emirates','AE','AED'),(3,'Afghanistan','AF','AFN'),(4,'Antigua and Barbuda','AG','XCD'),(5,'Anguilla','AI','XCD'),(6,'Albania','AL','ALL'),(7,'Armenia','AM','AMD'),(8,'Angola','AO','AOA'),(9,'Antarctica','AQ',''),(10,'Argentina','AR','ARS'),(11,'American Samoa','AS','USD'),(12,'Austria','AT','EUR'),(13,'Australia','AU','AUD'),(14,'Aruba','AW','AWG'),(15,'Åland','AX','EUR'),(16,'Azerbaijan','AZ','AZN'),(17,'Bosnia and Herzegovina','BA','BAM'),(18,'Barbados','BB','BBD'),(19,'Bangladesh','BD','BDT'),(20,'Belgium','BE','EUR'),(21,'Burkina Faso','BF','XOF'),(22,'Bulgaria','BG','BGN'),(23,'Bahrain','BH','BHD'),(24,'Burundi','BI','BIF'),(25,'Benin','BJ','XOF'),(26,'Saint Barthélemy','BL','EUR'),(27,'Bermuda','BM','BMD'),(28,'Brunei','BN','BND'),(29,'Bolivia','BO','BOB'),(30,'Bonaire','BQ','USD'),(31,'Brazil','BR','BRL'),(32,'Bahamas','BS','BSD'),(33,'Bhutan','BT','BTN'),(34,'Bouvet Island','BV','NOK'),(35,'Botswana','BW','BWP'),(36,'Belarus','BY','BYR'),(37,'Belize','BZ','BZD'),(38,'Canada','CA','CAD'),(39,'Cocos [Keeling] Islands','CC','AUD'),(40,'Democratic Republic of the Congo','CD','CDF'),(41,'Central African Republic','CF','XAF'),(42,'Republic of the Congo','CG','XAF'),(43,'Switzerland','CH','CHF'),(44,'Ivory Coast','CI','XOF'),(45,'Cook Islands','CK','NZD'),(46,'Chile','CL','CLP'),(47,'Cameroon','CM','XAF'),(48,'China','CN','CNY'),(49,'Colombia','CO','COP'),(50,'Costa Rica','CR','CRC'),(51,'Cuba','CU','CUP'),(52,'Cape Verde','CV','CVE'),(53,'Curacao','CW','ANG'),(54,'Christmas Island','CX','AUD'),(55,'Cyprus','CY','EUR'),(56,'Czech Republic','CZ','CZK'),(57,'Germany','DE','EUR'),(58,'Djibouti','DJ','DJF'),(59,'Denmark','DK','DKK'),(60,'Dominica','DM','XCD'),(61,'Dominican Republic','DO','DOP'),(62,'Algeria','DZ','DZD'),(63,'Ecuador','EC','USD'),(64,'Estonia','EE','EUR'),(65,'Egypt','EG','EGP'),(66,'Western Sahara','EH','MAD'),(67,'Eritrea','ER','ERN'),(68,'Spain','ES','EUR'),(69,'Ethiopia','ET','ETB'),(70,'Finland','FI','EUR'),(71,'Fiji','FJ','FJD'),(72,'Falkland Islands','FK','FKP'),(73,'Micronesia','FM','USD'),(74,'Faroe Islands','FO','DKK'),(75,'France','FR','EUR'),(76,'Gabon','GA','XAF'),(77,'United Kingdom','GB','GBP'),(78,'Grenada','GD','XCD'),(79,'Georgia','GE','GEL'),(80,'French Guiana','GF','EUR'),(81,'Guernsey','GG','GBP'),(82,'Ghana','GH','GHS'),(83,'Gibraltar','GI','GIP'),(84,'Greenland','GL','DKK'),(85,'Gambia','GM','GMD'),(86,'Guinea','GN','GNF'),(87,'Guadeloupe','GP','EUR'),(88,'Equatorial Guinea','GQ','XAF'),(89,'Greece','GR','EUR'),(90,'South Georgia and the South Sandwich Islands','GS','GBP'),(91,'Guatemala','GT','GTQ'),(92,'Guam','GU','USD'),(93,'Guinea-Bissau','GW','XOF'),(94,'Guyana','GY','GYD'),(95,'Hong Kong','HK','HKD'),(96,'Heard Island and McDonald Islands','HM','AUD'),(97,'Honduras','HN','HNL'),(98,'Croatia','HR','HRK'),(99,'Haiti','HT','HTG'),(100,'Hungary','HU','HUF'),(101,'Indonesia','ID','IDR'),(102,'Ireland','IE','EUR'),(103,'Israel','IL','ILS'),(104,'Isle of Man','IM','GBP'),(105,'India','IN','INR'),(106,'British Indian Ocean Territory','IO','USD'),(107,'Iraq','IQ','IQD'),(108,'Iran','IR','IRR'),(109,'Iceland','IS','ISK'),(110,'Italy','IT','EUR'),(111,'Jersey','JE','GBP'),(112,'Jamaica','JM','JMD'),(113,'Jordan','JO','JOD'),(114,'Japan','JP','JPY'),(115,'Kenya','KE','KES'),(116,'Kyrgyzstan','KG','KGS'),(117,'Cambodia','KH','KHR'),(118,'Kiribati','KI','AUD'),(119,'Comoros','KM','KMF'),(120,'Saint Kitts and Nevis','KN','XCD'),(121,'North Korea','KP','KPW'),(122,'South Korea','KR','KRW'),(123,'Kuwait','KW','KWD'),(124,'Cayman Islands','KY','KYD'),(125,'Kazakhstan','KZ','KZT'),(126,'Laos','LA','LAK'),(127,'Lebanon','LB','LBP'),(128,'Saint Lucia','LC','XCD'),(129,'Liechtenstein','LI','CHF'),(130,'Sri Lanka','LK','LKR'),(131,'Liberia','LR','LRD'),(132,'Lesotho','LS','LSL'),(133,'Lithuania','LT','LTL'),(134,'Luxembourg','LU','EUR'),(135,'Latvia','LV','EUR'),(136,'Libya','LY','LYD'),(137,'Morocco','MA','MAD'),(138,'Monaco','MC','EUR'),(139,'Moldova','MD','MDL'),(140,'Montenegro','ME','EUR'),(141,'Saint Martin','MF','EUR'),(142,'Madagascar','MG','MGA'),(143,'Marshall Islands','MH','USD'),(144,'Macedonia','MK','MKD'),(145,'Mali','ML','XOF'),(146,'Myanmar [Burma]','MM','MMK'),(147,'Mongolia','MN','MNT'),(148,'Macao','MO','MOP'),(149,'Northern Mariana Islands','MP','USD'),(150,'Martinique','MQ','EUR'),(151,'Mauritania','MR','MRO'),(152,'Montserrat','MS','XCD'),(153,'Malta','MT','EUR'),(154,'Mauritius','MU','MUR'),(155,'Maldives','MV','MVR'),(156,'Malawi','MW','MWK'),(157,'Mexico','MX','MXN'),(158,'Malaysia','MY','MYR'),(159,'Mozambique','MZ','MZN'),(160,'Namibia','NA','NAD'),(161,'New Caledonia','NC','XPF'),(162,'Niger','NE','XOF'),(163,'Norfolk Island','NF','AUD'),(164,'Nigeria','NG','NGN'),(165,'Nicaragua','NI','NIO'),(166,'Netherlands','NL','EUR'),(167,'Norway','NO','NOK'),(168,'Nepal','NP','NPR'),(169,'Nauru','NR','AUD'),(170,'Niue','NU','NZD'),(171,'New Zealand','NZ','NZD'),(172,'Oman','OM','OMR'),(173,'Panama','PA','PAB'),(174,'Peru','PE','PEN'),(175,'French Polynesia','PF','XPF'),(176,'Papua New Guinea','PG','PGK'),(177,'Philippines','PH','PHP'),(178,'Pakistan','PK','PKR'),(179,'Poland','PL','PLN'),(180,'Saint Pierre and Miquelon','PM','EUR'),(181,'Pitcairn Islands','PN','NZD'),(182,'Puerto Rico','PR','USD'),(183,'Palestine','PS','ILS'),(184,'Portugal','PT','EUR'),(185,'Palau','PW','USD'),(186,'Paraguay','PY','PYG'),(187,'Qatar','QA','QAR'),(188,'Réunion','RE','EUR'),(189,'Romania','RO','RON'),(190,'Serbia','RS','RSD'),(191,'Russia','RU','RUB'),(192,'Rwanda','RW','RWF'),(193,'Saudi Arabia','SA','SAR'),(194,'Solomon Islands','SB','SBD'),(195,'Seychelles','SC','SCR'),(196,'Sudan','SD','SDG'),(197,'Sweden','SE','SEK'),(198,'Singapore','SG','SGD'),(199,'Saint Helena','SH','SHP'),(200,'Slovenia','SI','EUR'),(201,'Svalbard and Jan Mayen','SJ','NOK'),(202,'Slovakia','SK','EUR'),(203,'Sierra Leone','SL','SLL'),(204,'San Marino','SM','EUR'),(205,'Senegal','SN','XOF'),(206,'Somalia','SO','SOS'),(207,'Suriname','SR','SRD'),(208,'South Sudan','SS','SSP'),(209,'São Tomé and Príncipe','ST','STD'),(210,'El Salvador','SV','USD'),(211,'Sint Maarten','SX','ANG'),(212,'Syria','SY','SYP'),(213,'Swaziland','SZ','SZL'),(214,'Turks and Caicos Islands','TC','USD'),(215,'Chad','TD','XAF'),(216,'French Southern Territories','TF','EUR'),(217,'Togo','TG','XOF'),(218,'Thailand','TH','THB'),(219,'Tajikistan','TJ','TJS'),(220,'Tokelau','TK','NZD'),(221,'East Timor','TL','USD'),(222,'Turkmenistan','TM','TMT'),(223,'Tunisia','TN','TND'),(224,'Tonga','TO','TOP'),(225,'Turkey','TR','TRY'),(226,'Trinidad and Tobago','TT','TTD'),(227,'Tuvalu','TV','AUD'),(228,'Taiwan','TW','TWD'),(229,'Tanzania','TZ','TZS'),(230,'Ukraine','UA','UAH'),(231,'Uganda','UG','UGX'),(232,'U.S. Minor Outlying Islands','UM','USD'),(233,'United States','US','USD'),(234,'Uruguay','UY','UYU'),(235,'Uzbekistan','UZ','UZS'),(236,'Vatican City','VA','EUR'),(237,'Saint Vincent and the Grenadines','VC','XCD'),(238,'Venezuela','VE','VEF'),(239,'British Virgin Islands','VG','USD'),(240,'U.S. Virgin Islands','VI','USD'),(241,'U.S. Virgin Islands','VI','USD'),(242,'Vietnam','VN','VND'),(243,'Vanuatu','VU','VUV'),(244,'Wallis and Futuna','WF','XPF'),(245,'Samoa','WS','WST'),(246,'Kosovo','XK','EUR'),(247,'Yemen','YE','YER'),(248,'Mayotte','YT','EUR'),(249,'South Africa','ZA','ZAR'),(250,'Zambia','ZM','ZMK'),(251,'Zimbabwe','ZW','ZWL');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_addresses`
--

DROP TABLE IF EXISTS `customer_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `customer_addresses_customer_id_index` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_addresses`
--

LOCK TABLES `customer_addresses` WRITE;
/*!40000 ALTER TABLE `customer_addresses` DISABLE KEYS */;
INSERT INTO `customer_addresses` VALUES (1,1,158,'401 - Block J - Seri Maya Condo','2014-08-17 06:09:32','2014-08-17 06:09:32'),(2,1,158,'B20-1 Saffron Condo - Jalan Sentul Indah','2014-08-17 06:09:32','2014-08-17 06:09:32'),(3,2,158,'401 - Block J - Seri Maya Condo','2014-08-17 06:10:55','2014-08-17 06:10:55'),(4,2,158,'B20-1 Saffron Condo - Jalan Sentul Indah','2014-08-17 06:10:55','2014-08-17 06:10:55'),(5,4,158,'401 - Block J - Seri Maya Condo','2014-08-17 06:13:01','2014-08-17 06:13:01');
/*!40000 ALTER TABLE `customer_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_bank_accounts`
--

DROP TABLE IF EXISTS `customer_bank_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_bank_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_holder_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `customer_bank_accounts_customer_id_index` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_bank_accounts`
--

LOCK TABLES `customer_bank_accounts` WRITE;
/*!40000 ALTER TABLE `customer_bank_accounts` DISABLE KEYS */;
INSERT INTO `customer_bank_accounts` VALUES (1,1,158,'CIMB Bank','MohammadReza Soltani','7011941875','','2014-08-17 06:09:32','2014-08-17 06:09:32'),(2,1,158,'Maybank','MohammadReza Soltani','112679080245','','2014-08-17 06:09:32','2014-08-17 06:09:32'),(3,1,158,'Affin Bank','Samira Soltani','55477465454','حساب بانکی متعلق به خواهر مشتری','2014-08-17 06:09:32','2014-08-17 06:09:32'),(4,2,158,'Affin Bank','Samira Soltani','55477465454','حساب بانکی متعلق به خواهر مشتری','2014-08-17 06:10:55','2014-08-17 06:10:55');
/*!40000 ALTER TABLE `customer_bank_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_contact_details`
--

DROP TABLE IF EXISTS `customer_contact_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_contact_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `customer_contact_details_customer_id_index` (`customer_id`),
  KEY `customer_contact_details_phone_number_index` (`phone_number`),
  KEY `customer_contact_details_mobile_number_index` (`mobile_number`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_contact_details`
--

LOCK TABLES `customer_contact_details` WRITE;
/*!40000 ALTER TABLE `customer_contact_details` DISABLE KEYS */;
INSERT INTO `customer_contact_details` VALUES (1,1,108,'00989171180394','00987116487034','','2014-08-17 06:09:32','2014-08-17 06:09:32'),(2,1,158,'014229204','','987422','2014-08-17 06:09:32','2014-08-17 06:09:32'),(3,2,108,'00989171180394','00987116487034','','2014-08-17 06:10:55','2014-08-17 06:10:55'),(4,2,158,'014229204','','987422','2014-08-17 06:10:55','2014-08-17 06:10:55'),(5,4,108,'00989171180394','00987116487034','','2014-08-17 06:13:01','2014-08-17 06:13:01');
/*!40000 ALTER TABLE `customer_contact_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_of_residence_id` int(11) NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identity_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `customers_full_name_index` (`full_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'محمد رضا ','سلطانی','','رحیم','45345','K17147315',158,'sahandfx@gmail.com',NULL,'last check','2014-08-17 06:09:32','2014-08-17 06:09:32'),(2,'محمد رضا ','سلطانی','','رحیم','45345','K17147315',158,'sahandfx@gmail.com',NULL,'last check','2014-08-17 06:10:55','2014-08-17 06:10:55'),(3,'محمد رضا ','سلطانی','','رحیم','45345','K17147315',158,'sahandfx@gmail.com',NULL,'last check','2014-08-17 06:11:27','2014-08-17 06:11:27'),(4,'محمد رضا ','سلطانی','','رحیم','45345','K17147315',158,'sahandfx@gmail.com',NULL,'last check','2014-08-17 06:13:01','2014-08-17 06:13:01'),(5,'محمد رضا ','سلطانی','','رحیم','45345','K17147315',158,'sahandfx@gmail.com',NULL,'last check','2014-08-17 06:13:27','2014-08-17 06:13:27');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_07_25_164303_create_customers_table',1),('2014_07_25_173945_create_customer_bank_accounts_Table',1),('2014_07_25_174027_create_customer_addresses_table',1),('2014_07_25_174058_create_customer_contact_details_table',1),('2014_07_25_214156_create_users_table',1),('2014_07_25_214713_entrust_setup_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super_administrator','2014-08-17 06:04:59','2014-08-17 06:04:59'),(2,'admin','2014-08-17 06:04:59','2014-08-17 06:04:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timezones`
--

DROP TABLE IF EXISTS `timezones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timezones` (
  `name` varchar(45) DEFAULT NULL,
  `offset` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timezones`
--

LOCK TABLES `timezones` WRITE;
/*!40000 ALTER TABLE `timezones` DISABLE KEYS */;
INSERT INTO `timezones` VALUES ('Pacific/Midway','(GMT-11:00) Midway Island'),('Pacific/Midway','(GMT-11:00) Midway Island'),('US/Samoa','(GMT-11:00) Samoa'),('US/Hawaii','(GMT-10:00) Hawaii'),('US/Alaska','(GMT-09:00) Alaska'),('US/Pacific','(GMT-08:00) Pacific Time (US &amp; Canada)'),('America/Tijuana','(GMT-08:00) Tijuana'),('US/Arizona','(GMT-07:00) Arizona'),('US/Mountain','(GMT-07:00) Mountain Time (US &amp; Canada)'),('America/Chihuahua','(GMT-07:00) Chihuahua'),('America/Mazatlan','(GMT-07:00) Mazatlan'),('America/Mexico_City','(GMT-06:00) Mexico City'),('America/Monterrey','(GMT-06:00) Monterrey'),('Canada/Saskatchewan','(GMT-06:00) Saskatchewan'),('US/Central','(GMT-06:00) Central Time (US &amp; Canada)'),('US/Eastern','(GMT-05:00) Eastern Time (US &amp; Canada)'),('US/East-Indiana','(GMT-05:00) Indiana (East)'),('America/Bogota','(GMT-05:00) Bogota'),('America/Lima','(GMT-05:00) Lima'),('America/Caracas','(GMT-04:30) Caracas'),('Canada/Atlantic','(GMT-04:00) Atlantic Time (Canada)'),('America/La_Paz','(GMT-04:00) La Paz'),('America/Santiago','(GMT-04:00) Santiago'),('Canada/Newfoundland','(GMT-03:30) Newfoundland'),('America/Buenos_Aires','(GMT-03:00) Buenos Aires'),('Greenland','(GMT-03:00) Greenland'),('Atlantic/Stanley','(GMT-02:00) Stanley'),('Atlantic/Azores','(GMT-01:00) Azores'),('Atlantic/Cape_Verde','(GMT-01:00) Cape Verde Is.'),('Africa/Casablanca','(GMT) Casablanca'),('Europe/Dublin','(GMT) Dublin'),('Europe/Lisbon','(GMT) Lisbon'),('Europe/London','(GMT) London'),('Africa/Monrovia','(GMT) Monrovia'),('Europe/Amsterdam','(GMT+01:00) Amsterdam'),('Europe/Belgrade','(GMT+01:00) Belgrade'),('Europe/Berlin','(GMT+01:00) Berlin'),('Europe/Bratislava','(GMT+01:00) Bratislava'),('Europe/Brussels','(GMT+01:00) Brussels'),('Europe/Budapest','(GMT+01:00) Budapest'),('Europe/Copenhagen','(GMT+01:00) Copenhagen'),('Europe/Ljubljana','(GMT+01:00) Ljubljana'),('Europe/Madrid','(GMT+01:00) Madrid'),('Europe/Paris','(GMT+01:00) Paris'),('Europe/Prague','(GMT+01:00) Prague'),('Europe/Rome','(GMT+01:00) Rome'),('Europe/Sarajevo','(GMT+01:00) Sarajevo'),('Europe/Skopje','(GMT+01:00) Skopje'),('Europe/Stockholm','(GMT+01:00) Stockholm'),('Europe/Vienna','(GMT+01:00) Vienna'),('Europe/Warsaw','(GMT+01:00) Warsaw'),('Europe/Zagreb','(GMT+01:00) Zagreb'),('Europe/Athens','(GMT+02:00) Athens'),('Europe/Bucharest','(GMT+02:00) Bucharest'),('Africa/Cairo','(GMT+02:00) Cairo'),('Africa/Harare','(GMT+02:00) Harare'),('Europe/Helsinki','(GMT+02:00) Helsinki'),('Europe/Istanbul','(GMT+02:00) Istanbul'),('Asia/Jerusalem','(GMT+02:00) Jerusalem'),('Europe/Kiev','(GMT+02:00) Kyiv'),('Europe/Minsk','(GMT+02:00) Minsk'),('Europe/Riga','(GMT+02:00) Riga'),('Europe/Sofia','(GMT+02:00) Sofia'),('Europe/Tallinn','(GMT+02:00) Tallinn'),('Europe/Vilnius','(GMT+02:00) Vilnius'),('Asia/Baghdad','(GMT+03:00) Baghdad'),('Asia/Kuwait','(GMT+03:00) Kuwait'),('Africa/Nairobi','(GMT+03:00) Nairobi'),('Asia/Riyadh','(GMT+03:00) Riyadh'),('Asia/Tehran','(GMT+03:30) Tehran'),('Europe/Moscow','(GMT+04:00) Moscow'),('Asia/Baku','(GMT+04:00) Baku'),('Europe/Volgograd','(GMT+04:00) Volgograd'),('Asia/Muscat','(GMT+04:00) Muscat'),('Asia/Tbilisi','(GMT+04:00) Tbilisi'),('Asia/Yerevan','(GMT+04:00) Yerevan'),('Asia/Kabul','(GMT+04:30) Kabul'),('Asia/Karachi','(GMT+05:00) Karachi'),('Asia/Tashkent','(GMT+05:00) Tashkent'),('Asia/Kolkata','(GMT+05:30) Kolkata'),('Asia/Kathmandu','(GMT+05:45) Kathmandu'),('Asia/Yekaterinburg','(GMT+06:00) Ekaterinburg'),('Asia/Almaty','(GMT+06:00) Almaty'),('Asia/Dhaka','(GMT+06:00) Dhaka'),('Asia/Novosibirsk','(GMT+07:00) Novosibirsk'),('Asia/Bangkok','(GMT+07:00) Bangkok'),('Asia/Jakarta','(GMT+07:00) Jakarta'),('Asia/Krasnoyarsk','(GMT+08:00) Krasnoyarsk'),('Asia/Chongqing','(GMT+08:00) Chongqing'),('Asia/Hong_Kong','(GMT+08:00) Hong Kong'),('Asia/Kuala_Lumpur','(GMT+08:00) Kuala Lumpur'),('Australia/Perth','(GMT+08:00) Perth'),('Asia/Singapore','(GMT+08:00) Singapore'),('Asia/Taipei','(GMT+08:00) Taipei'),('Asia/Ulaanbaatar','(GMT+08:00) Ulaan Bataar'),('Asia/Urumqi','(GMT+08:00) Urumqi'),('Asia/Irkutsk','(GMT+09:00) Irkutsk'),('Asia/Seoul','(GMT+09:00) Seoul'),('Asia/Tokyo','(GMT+09:00) Tokyo'),('Australia/Adelaide','(GMT+09:30) Adelaide'),('Australia/Darwin','(GMT+09:30) Darwin'),('Asia/Yakutsk','(GMT+10:00) Yakutsk'),('Australia/Brisbane','(GMT+10:00) Brisbane'),('Australia/Canberra','(GMT+10:00) Canberra'),('Pacific/Guam','(GMT+10:00) Guam'),('Australia/Hobart','(GMT+10:00) Hobart'),('Australia/Melbourne','(GMT+10:00) Melbourne'),('Pacific/Port_Moresby','(GMT+10:00) Port Moresby'),('Australia/Sydney','(GMT+10:00) Sydney'),('Asia/Vladivostok','(GMT+11:00) Vladivostok'),('Asia/Magadan','(GMT+12:00) Magadan'),('Pacific/Auckland','(GMT+12:00) Auckland'),('Pacific/Fiji','(GMT+12:00) Fiji');
/*!40000 ALTER TABLE `timezones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_of_residence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Asia/Kuala_Lumpur',
  `last_login` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'green',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mohammadreza','Soltani','saarang','$2y$10$WJW/Ztl68mntfMHJTj8YKeKQXN/xjcGPdaKH7c8PmzO.QSxUf.JjC','sahandfx@gmail.com','60142239204','',NULL,1,'Asia/Kuala_Lumpur','2014-08-19 22:35:57',NULL,'black','2014-08-17 06:04:59','2014-08-19 22:35:57'),(2,'Amir','Doe','testuser','$2y$10$nOoxKQpubfb9HJBaSaW89uNixgqz1uqtVnMee3DljxoTTbgoyyNk6','test@testuser.com','60142239204','108',NULL,1,'Asia/Tehran',NULL,NULL,'green','2014-08-19 22:35:26','2014-08-19 22:35:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-20  6:42:09
