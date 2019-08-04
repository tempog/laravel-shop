-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,NULL,'2019-05-07 19:23:48'),(2,0,7,'系统管理','fa-tasks',NULL,NULL,NULL,'2019-08-04 19:07:43'),(3,2,8,'管理员','fa-users','auth/users',NULL,NULL,'2019-08-04 19:07:43'),(4,2,9,'角色','fa-user','auth/roles',NULL,NULL,'2019-08-04 19:07:43'),(5,2,10,'权限','fa-ban','auth/permissions',NULL,NULL,'2019-08-04 19:07:43'),(6,2,11,'菜单','fa-bars','auth/menu',NULL,NULL,'2019-08-04 19:07:43'),(7,2,12,'操作日志','fa-history','auth/logs',NULL,NULL,'2019-08-04 19:07:43'),(8,0,2,'用户管理','fa-users','/users',NULL,'2019-05-07 19:39:49','2019-05-07 19:40:00'),(9,0,4,'商品管理','fa-cubes','/products',NULL,'2019-05-07 20:32:47','2019-08-04 19:07:43'),(10,0,5,'订单管理','fa-rmb','/orders',NULL,'2019-06-12 00:49:49','2019-08-04 19:07:43'),(11,0,6,'优惠劵管理','fa-tags','/coupon_codes',NULL,'2019-07-16 21:48:55','2019-08-04 19:07:43'),(12,0,3,'类目管理','fa-bars','/categories',NULL,'2019-08-04 19:07:29','2019-08-04 19:07:43');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2019-05-07 19:46:04','2019-05-07 19:46:04'),(7,'订单管理','orders','','/orders','2019-06-12 00:53:26','2019-06-12 00:53:26'),(8,'商品管理','products','','/products*','2019-07-21 06:40:28','2019-07-21 06:40:28'),(9,'优惠劵管理','coupon_codes','','/coupon_codes*','2019-07-21 06:41:21','2019-07-21 06:41:21');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2019-05-07 19:14:11','2019-05-07 19:14:11'),(2,'运营','operator','2019-05-07 19:49:20','2019-05-07 19:49:20');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$N8XD41Ddk2afmWQJTq.EIOkAamG1DggDTlo1RcJeCw8RkW8wG3g1C','Administrator',NULL,'zifxhQXmqbpGQuqFdH5y2QLgJyLAnQQaDM9ZlOWeC6DiZ1s9tJtx46BW7Q8I','2019-05-07 19:14:11','2019-05-07 19:14:11'),(2,'operator','$2y$10$AqcQx0c2hmno1p6uBRW2Gul9lQ5AdPfGh1ry4IaEF3Kh7zltFjzgC','运营',NULL,'3NcuMpdyASnCjpF5uYhCdh4AOz78wAPUrq7H6GE649gb7YPx6STk7mrT6b4Q','2019-05-07 19:50:58','2019-07-21 06:43:12');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-04 20:50:27
