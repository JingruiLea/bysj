-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: test1
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `callboard`
--

DROP TABLE IF EXISTS `callboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `callboard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `html` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `callboard`
--

LOCK TABLES `callboard` WRITE;
/*!40000 ALTER TABLE `callboard` DISABLE KEYS */;
INSERT INTO `callboard` VALUES (1,1,'涓浗浜烘皯绔欒捣鏉ヤ簡','姣涙辰涓?,'10086','鎴戠埍涓浗, 鎴戠埍鎴戠殑绁栧浗, 鎴戠埍涓崕浜烘皯.','null','2019-05-07 09:55:46','2019-05-11 13:34:06'),(2,0,'An application for C茅u-Arduino','Jingrui.lea','','鎴戞槸涓€涓ぇ濂戒汉','','2019-05-08 10:29:41','2019-05-08 10:29:41');
/*!40000 ALTER TABLE `callboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checkins`
--

DROP TABLE IF EXISTS `checkins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `checkins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `checkintime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teachername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkins`
--

LOCK TABLES `checkins` WRITE;
/*!40000 ALTER TABLE `checkins` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classfees`
--

DROP TABLE IF EXISTS `classfees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `classfees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classfees`
--

LOCK TABLES `classfees` WRITE;
/*!40000 ALTER TABLE `classfees` DISABLE KEYS */;
INSERT INTO `classfees` VALUES (1,'鏀跺叆','1500','1500','姣忎汉鐝垂50鍏?,'2019-05-19 11:43:59','2019-05-19 11:43:59'),(2,'鏀嚭','20','1480','鎵撳嵃璐?,'2019-05-19 11:44:32','2019-05-19 11:44:32');
/*!40000 ALTER TABLE `classfees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homeworks`
--

DROP TABLE IF EXISTS `homeworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `homeworks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `homeworkname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentusername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeworks`
--

LOCK TABLES `homeworks` WRITE;
/*!40000 ALTER TABLE `homeworks` DISABLE KEYS */;
INSERT INTO `homeworks` VALUES (1,'iwanli','鏁板绗竴娆″搴綔涓?,'20164965','鏉庝簳鐟?,'homework/5975b82ec14e4ef6f68f795f2137b517.jpeg',NULL,'2019-05-19 06:17:35');
/*!40000 ALTER TABLE `homeworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '鑿滃崟鍏崇郴',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鑿滃崟鍚嶇О',
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鍥炬爣',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鑿滃崟瀵瑰簲鐨勬潈闄?,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鑿滃崟閾炬帴鍦板潃',
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鑿滃崟楂樹寒鍦板潃',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鎻忚堪',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '鎺掑簭',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,0,'鎺у埗鍙?,'fa fa-dashboard','system.index','admin/dash','admin/dash','鍚庡彴棣栭〉',4,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(2,0,'绯荤粺绠＄悊','fa fa-cog','system.manage','','admin/role*,admin/permission*,admin/user*,admin/menu*,admin/log*','绯荤粺鍔熻兘绠＄悊',3,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(3,2,'瀛︾敓绠＄悊','fa fa-users','user.list','admin/user','admin/user*','鏄剧ず鐢ㄦ埛绠＄悊',3,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(4,2,'瑙掕壊绠＄悊','fa fa-male','role.list','admin/role','admin/role*','鏄剧ず瑙掕壊绠＄悊',2,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(5,2,'鏉冮檺绠＄悊','fa fa-paper-plane','permission.list','admin/permission','admin/permission*','鏄剧ず鏉冮檺绠＄悊',6,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(6,2,'鑿滃崟绠＄悊','fa fa-navicon','menu.list','admin/menu','admin/menu*','鏄剧ず鑿滃崟绠＄悊',5,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(7,2,'绯荤粺鏃ュ織','fa fa-file-text-o','log.all','admin/log','admin/log*','鏄剧ず绯荤粺鏃ュ織',4,'2019-05-06 08:28:18','2019-05-14 09:44:46'),(8,0,'鍏憡鏉?,'','callboard.system','callboard','callboard','鍏憡鏉?,2,'2019-05-07 02:12:56','2019-05-14 09:44:46'),(9,2,'鍏憡绠＄悊','','admin.callboard','/admin/callboard','','鍏憡鏉跨鐞?,7,'2019-05-07 10:14:14','2019-05-14 09:44:46'),(10,0,'绛惧埌','','checkin.user','/admin/checkin','/admin/checkin','/admin/checkin',1,'2019-05-14 03:38:21','2019-05-14 09:44:46'),(11,2,'鏌ョ湅绛惧埌','','checkin.admin','/admin/checkinlist','/admin/checkin','鏌ョ湅绛惧埌',1,'2019-05-14 07:20:08','2019-05-14 09:44:46'),(12,0,'瀹屽杽涓汉淇℃伅','','info.user','/userinfo','/userinfo','/userinfo',5,'2019-05-14 09:44:40','2019-05-14 09:44:46'),(13,0,'浣滀笟鎻愪氦','','homework.user','/homework','/homework','鎻愪氦浣滀笟',0,'2019-05-17 07:31:10','2019-05-17 07:31:10'),(14,0,'鐝垂缁熻','','checkin.user','/classfee','/classfee','鐝垂绠＄悊',0,'2019-05-19 11:11:09','2019-05-19 11:22:59'),(15,0,'闅忔満鎶藉彇','','checkin.user','/random','','',0,'2019-05-19 11:57:31','2019-05-19 11:57:31'),(16,0,'鐢熸棩鎻愰啋','','checkin.user','/birthday','/birthday','鐢熸棩鎻愰啋',0,'2019-05-19 12:35:49','2019-05-19 12:35:49');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2015_01_15_105324_create_roles_table',1),(4,'2015_01_15_114412_create_role_user_table',1),(5,'2015_01_26_115212_create_permissions_table',1),(6,'2015_01_26_115523_create_permission_role_table',1),(7,'2015_02_09_132439_create_permission_user_table',1),(8,'2016_11_03_173731_create_menus_table',1),(9,'2019_05_07_113750_callboard',2),(11,'2019_05_07_114018_create_callboard_table',3),(13,'2019_05_14_144526_create_checkin_table',4),(15,'2019_05_14_175857_create_userinfo_table',5),(16,'2019_05_17_153507_create_homework_table',6),(18,'2019_05_19_192618_create_classfee_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(2,2,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(3,3,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(4,4,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(5,5,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(6,6,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(7,7,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(8,8,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(9,9,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(10,10,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(11,11,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(12,12,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(13,13,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(14,14,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(15,15,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(16,16,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(17,17,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(18,18,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(19,19,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(20,20,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(21,21,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(22,22,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(23,23,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(24,24,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(25,25,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(26,26,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(27,27,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(28,28,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(29,1,2,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(30,2,2,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(31,29,1,'2019-05-07 02:14:30','2019-05-07 02:14:30'),(32,29,2,'2019-05-07 10:14:54','2019-05-07 10:14:54'),(33,30,1,'2019-05-07 10:15:55','2019-05-07 10:15:55'),(34,31,2,'2019-05-14 03:39:18','2019-05-14 03:39:18'),(35,31,1,'2019-05-14 03:39:26','2019-05-14 03:39:26'),(36,32,1,'2019-05-14 07:21:56','2019-05-14 07:21:56'),(37,33,2,'2019-05-14 09:45:34','2019-05-14 09:45:34'),(38,33,1,'2019-05-14 09:46:02','2019-05-14 09:46:02'),(39,34,1,'2019-05-17 07:31:57','2019-05-17 07:31:57');
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
INSERT INTO `permission_user` VALUES (1,1,6,'2019-05-06 15:15:37','2019-05-06 15:15:37'),(2,4,6,'2019-05-06 15:15:37','2019-05-06 15:15:37'),(3,8,6,'2019-05-06 15:15:37','2019-05-06 15:15:37'),(4,2,6,'2019-05-06 15:20:40','2019-05-06 15:20:40'),(5,3,6,'2019-05-06 15:20:40','2019-05-06 15:20:40'),(6,5,6,'2019-05-06 15:20:40','2019-05-06 15:20:40'),(7,7,6,'2019-05-06 15:20:40','2019-05-06 15:20:40');
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'鐧诲綍鍚庡彴鏉冮檺','system.login','鐧诲綍鍚庡彴鏉冮檺1','','2019-05-06 08:28:17','2019-05-08 03:23:56'),(2,'鍚庡彴棣栭〉','system.index','鍚庡彴棣栭〉',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(3,'绯荤粺绠＄悊','system.manage','绯荤粺绠＄悊',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(4,'鏄剧ず鑿滃崟鍒楄〃','menu.list','鏄剧ず鑿滃崟鍒楄〃',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(5,'鍒涘缓鑿滃崟','menu.create','鍒涘缓鑿滃崟',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(6,'鍒犻櫎鑿滃崟','menu.destroy','鍒犻櫎鑿滃崟',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(7,'淇敼鑿滃崟','menu.edit','淇敼鑿滃崟',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(8,'鏌ョ湅鑿滃崟','menu.show','鏌ョ湅鑿滃崟',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(9,'鏄剧ず瑙掕壊鍒楄〃','role.list','鏄剧ず瑙掕壊鍒楄〃',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(10,'鍒涘缓瑙掕壊','role.create','鍒涘缓瑙掕壊',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(11,'鍒犻櫎瑙掕壊','role.destroy','鍒犻櫎瑙掕壊',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(12,'淇敼瑙掕壊','role.edit','淇敼瑙掕壊',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(13,'鏌ョ湅瑙掕壊鏉冮檺','role.show','鏌ョ湅瑙掕壊鏉冮檺',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(14,'鏄剧ず鏉冮檺鍒楄〃','permission.list','鏄剧ず鏉冮檺鍒楄〃',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(15,'鍒涘缓鏉冮檺','permission.create','鍒涘缓鏉冮檺',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(16,'鍒犻櫎鏉冮檺','permission.destroy','鍒犻櫎鏉冮檺',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(17,'淇敼鏉冮檺','permission.edit','淇敼鏉冮檺',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(18,'鏄剧ず鐢ㄦ埛鍒楄〃','user.list','鏄剧ず鐢ㄦ埛鍒楄〃',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(19,'鍒涘缓鐢ㄦ埛','user.create','鍒涘缓鐢ㄦ埛',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(20,'淇敼鐢ㄦ埛','user.edit','淇敼鐢ㄦ埛',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(21,'鍒犻櫎鐢ㄦ埛','user.destroy','鍒犻櫎鐢ㄦ埛',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(22,'鏌ョ湅鐢ㄦ埛淇℃伅','user.show','鏌ョ湅鐢ㄦ埛淇℃伅',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(23,'淇敼鐢ㄦ埛瀵嗙爜','user.reset','淇敼鐢ㄦ埛瀵嗙爜',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(24,'鏃ュ織绠＄悊','log.list','鏃ュ織绠＄悊',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(25,'鍒犻櫎鏃ュ織','log.destroy','鍒犻櫎鏃ュ織',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(26,'鏌ョ湅鏃ュ織','log.show','鏌ョ湅鏃ュ織',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(27,'涓嬭浇鏃ュ織','log.download','涓嬭浇鏃ュ織',NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(28,'绛涢€夋棩蹇椾俊鎭?,'log.filter','绛涢€夋棩蹇椾俊鎭?,NULL,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(29,'鏌ョ湅鍏憡鏉?,'callboard.system','鏌ョ湅鍏憡鏉?,'','2019-05-07 02:14:18','2019-05-07 10:41:12'),(30,'鍏憡绠＄悊','callboard.admin','鍏憡绠＄悊','','2019-05-07 10:15:27','2019-05-07 10:41:25'),(31,'绛惧埌','checkin.user','no','','2019-05-14 03:39:07','2019-05-14 03:39:07'),(32,'鏌ョ湅绛惧埌','checkin.admin','鏌ョ湅绛惧埌','','2019-05-14 07:21:44','2019-05-14 07:21:44'),(33,'瀹屽杽涓汉淇℃伅','info.user','/userinfo','','2019-05-14 09:45:16','2019-05-14 09:45:16'),(34,'浣滀笟鎻愪氦','homework.user','浣滀笟鎻愪氦','','2019-05-17 07:31:34','2019-05-17 07:31:34');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(2,2,2,'2019-05-06 08:28:18','2019-05-06 08:28:18'),(3,2,3,'2019-05-06 08:28:18','2019-05-06 08:28:18'),(4,2,4,'2019-05-06 08:28:18','2019-05-06 08:28:18'),(5,2,6,'2019-05-06 15:03:03','2019-05-06 15:03:03'),(8,2,35,'2019-05-17 02:52:46','2019-05-17 02:52:46');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'瓒呯骇绠＄悊鍛?,'admin','瓒呯骇绠＄悊鍛?,1,'2019-05-06 08:28:17','2019-05-06 08:28:17'),(2,'鏅€氱敤鎴?,'user','鏅€氱敤鎴?,1,'2019-05-06 08:28:17','2019-05-06 08:28:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfos`
--

DROP TABLE IF EXISTS `userinfos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `userinfos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qq` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfos`
--

LOCK TABLES `userinfos` WRITE;
/*!40000 ALTER TABLE `userinfos` DISABLE KEYS */;
INSERT INTO `userinfos` VALUES (4,'123456','concon','鐢?,'姹?,'娓呭崕澶у','1998-03-23','19988998888','12312311','IMG_20180519_155428.jpg','2019-05-17 07:04:03','2019-05-17 07:04:03');
/*!40000 ALTER TABLE `userinfos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '鐢ㄦ埛鍚?,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '璐﹀彿',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '閭',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'鏅氶粠','iwanli','709344897@qq.com','$2y$10$76o.H0DOsbTppulomJRhEukmCBx0NgOZ/C7qag52ovz2VZWt1eT6e','MIGDaIz0RpTfJrDqSzRLQYICosG0HHEr18GARLWuLgqOeokv33EuaFeOKqxE','2019-05-06 08:28:17','2019-05-19 04:59:53'),(2,'Barry Beier Jr.','Maia','kshlerin.kayli@example.com','$2y$10$i0dAvWm6kXPGWFIjiB3Rkug2fgfvRsAfhu8dCZsOISw959DlA9QZ6','X0322y2CAa','2019-05-06 08:28:18','2019-05-06 08:28:18'),(3,'Dr. Ignacio Sporer II','Geovanny','augusta.damore@example.org','$2y$10$KSz4/1pEQH/qpv5IdoiP1uhmdWAGPZyyFakB8nLVtAzEDRpke7C6m','wbTq6KDb0y','2019-05-06 08:28:18','2019-05-06 08:28:18'),(4,'Prof. Bud Anderson','Hilda','king.runte@example.net','$2y$10$yJKsRgBmaaY8WGfXQFzoreNylyNGccDnmqpVs5VMxkGmfpqN5fn9e','XA67xArJcW','2019-05-06 08:28:18','2019-05-06 08:28:18'),(6,'鑽х厡绉戞妧','20164965','s@11.com','$2y$10$w1AtGg2X2XciFeYO28Dooe2r3/etRUPyrSejVxuFquLt/lJuD7W2y','uhjhBsHZaSxyIVFQIHcyTQIVkH9WH3T2qAbnWt36jAbFuybIGexeNqvd92tr','2019-05-06 14:52:57','2019-05-06 15:21:38'),(35,'concon','123456','concon@qqq.com','$2y$10$N.sry5xZqNBvCRVeiUaB6.teCP0XbQGN3oGVYMFCSqhWbUClIhIKO','5jvZnNJb4NsMdjIp2RBUttSbpSy16wgZTxiBaa2LYfjFksJR31MEYKKklENI','2019-05-17 02:52:46','2019-05-17 07:30:16');
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

-- Dump completed on 2019-05-19 22:08:47
