-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: catore
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'emdirtyo@gmail.com','307c8dd0cf17725b1708b5d51c490fd2','Mr','CaT');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help`
--

LOCK TABLES `help` WRITE;
/*!40000 ALTER TABLE `help` DISABLE KEYS */;
INSERT INTO `help` VALUES (1,'Mr Hacker','somemail.com','123',1503332446),(2,'Hesen','hesenov@mail.ru','Lorem Ipsum !',1503332493),(3,'Abdurahmon','abdurahmon@mail.ru','HALO WARS!',1503903071);
/*!40000 ALTER TABLE `help` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `order_date` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (4,'Кристина','123@gmail.com','Кордай 21 Ленин','Хочу купить телефон',1503651096);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(11) unsigned NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` text NOT NULL,
  `about` text NOT NULL,
  `code` varchar(50) NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `note` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,5,'STLab USB 1.1','https://i2.rozetka.ua/goods/1878661/stlab_u224_images_1878661808.jpg','Адаптер STLab USB 1.1 - RS-232 (COM) 1.5 м (U-224)','stlab-usb',359,''),(2,5,'Kingston HyperX Cloud','https://i2.rozetka.ua/goods/434611/kingston_hyperx_cloud_ii_gun_metal_images_434611672.jpg','Kingston HyperX Cloud II (KHX-HSCP-GM) Gun Metal','kingston-hyperx',7999,''),(3,5,'SteelSeries Flux','https://i2.rozetka.ua/goods/2093162/steelseries_51161_images_2093162883.jpg','SteelSeries Flux Headset Sims 4 (51161)','sims-4',975,''),(4,5,'1More Piston ','https://i2.rozetka.ua/goods/1801806/copy_1more_e1009_gy_5850f386ecce8_images_1801806757.jpg','1More Piston Fit Silver','fit-silver',579,''),(5,1,'Lenovo K5','https://i1.rozetka.ua/goods/1493025/copy_lenovo_k5_plus_sl_56f1731de05eb_images_1493025299.jpg','Lenovo K5 (A6020a40) Silver','lenovo-k5',4699,''),(6,1,'Samsung Galaxy S8 ','https://i1.rozetka.ua/goods/1894533/samsung_galaxy_s8_64gb_black_images_1894533427.jpg','Samsung Galaxy S8 64GB Midnight Black','galaxy-8',49999,''),(7,1,'Huawei Y3','https://i2.rozetka.ua/goods/1696720/copy_huawei_y3_ii_black_57b42a45e20a6_images_1696720883.jpg','Huawei Y3 II Gold + защитное стекло!','huawei-y3',6555,''),(8,2,'Asus ZenPad 8.0','https://i1.rozetka.ua/goods/1741167/asus_z380m_6a035a_images_1741167964.jpg','Asus ZenPad 8.0 16GB Dark Gray (Z380M-6A035A) + Чехол BeCover Smart Case в подарок!','asus-zenpad',6579,''),(9,2,'Cube T12','https://i2.rozetka.ua/goods/1885909/copy_cube_t12_u12gt_58cba0a2d3c6a_images_1885909196.jpg','Cube T12 (U12GT)','cube',4550,''),(10,4,'Impression CoolPlay ','https://i2.rozetka.ua/goods/2046762/copy_impression_81275_5940fd98af861_images_2046762384.jpg','Impression CoolPlay I6317 (86296)','coolplay',23990,''),(11,4,'ARTLINE Business','https://i1.rozetka.ua/goods/1894537/artline_business_b21_v01_images_1894537109.jpg','ARTLINE Business B21 v01 (B21v01)','art-bus',7599,''),(12,3,'Apple MacBook Air','https://i1.rozetka.ua/goods/1549665/copy_apple_macbook_air_13_mjvg2uaa_571a268ec7042_images_1549665335.jpg','Apple MacBook Air 13\" (MMGF2UA/A)','macbook-air',51670,''),(13,3,'Acer Aspire E5','https://i2.rozetka.ua/goods/1802392/copy_acer_nx_gdweu_047_5852aa0a43cfb_images_1802392146.jpg','Acer Aspire E5-575G-35M (NX.GDWEU.074) Obsidian Black','acer-aspire',15799,''),(14,3,'Asus VivoBook Max','https://i2.rozetka.ua/goods/1774150/asus_vivobook_max_x541uv_xo092d_images_1774150302.jpg','Asus VivoBook Max X541UV (X541UV-XO092D) Chocolate Black','asus-vivo',13799,''),(15,3,'Asus X540SA','https://i2.rozetka.ua/goods/1837219/copy_asus_x540sa_xx053d_587e16d86e022_images_1837219127.jpg','Asus X540SA (X540SA-XX404D) Chocolate Black','asus-chocolate',11111,''),(16,2,'Lenovo Tab 3-850 8\" WiFi 16GB Slate Black (ZA170148UA)2','https://i2.rozetka.ua/goods/1681520/copy_lenovo_tab3_za180022ua_579a148d94a7a_images_1681520656.jpg','Lenovo Tab 3-850 8\" WiFi 16GB Slate Black (ZA170148UA)','lenovo-tab-3',7569,''),(17,2,'Prestigio MultiPad Wize','https://i2.rozetka.ua/goods/1848276/prestigio_multipad_wize_pmt3131_3g_images_1848276224.jpg','Prestigio MultiPad Wize 3131 3G Black (PMT3131_3G_D)','prestigio-wize',5678,''),(18,2,'Samsung Galaxy Tab S2','https://i2.rozetka.ua/goods/1645056/copy_samsung_sm_t819nzkesek_5763c0001d1b2_images_1645056851.jpg','Samsung Galaxy Tab S2 9.7\" 2016 32GB LTE Bronze Gold (SM-T819NZDESEK)','galaxy-tab-s2',19568,''),(19,2,'Nomi Corsa','https://i1.rozetka.ua/goods/1752180/nomi_corsa_c070010_light_grey_images_1752180662.jpg','Nomi Corsa 3G 16GB C070010 Dark-Grey','nomi-corsa',2689,''),(20,2,'Apple A1550 iPad mini 4','https://i2.rozetka.ua/goods/1188895/apple_ipad_mini_4_4g_128gb_silver_images_1188895120.jpg','Apple A1550 iPad mini 4 Wi-Fi 4G 128GB (MK772RK/A) Silver Официальная гарантия!','ipad-mini-4',21999,'');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `name` varchar(120) NOT NULL,
  `rate` text NOT NULL,
  `rate_date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
INSERT INTO `rates` VALUES (1,1,'Sergey','Я удоблетворен покупкой, очень хороший телефон, спасибо)',1502703922),(2,2,'Oleg','В основном хорошая штука, но немного глючит...',1502703922),(3,2,'Misha','Мне понравилось, рекомендую...',1502703922),(4,1,'Kristina','неплохой телефон, но сервисы Google Play не работают:(',1502703922),(5,1,'Valeria','Ужассс(( не покупайте! Не тратьте деньги зря',1502703922),(6,3,'Alexey','Супер!!! Удовлетворен!',1502973894),(7,3,'<i class=\"fa fa-vk\"></i>','Lorem',1502981021),(8,3,'Hero','<i class=\"fa fa-facebook\"></i>',1502981053),(9,1,'Mr Lorem','Great!',1503134156),(10,11,'Loremich','Cool stuff bro!',1503333496),(11,7,'HACKIR','GUT!',1503904160);
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (5,'Аксессуары'),(3,'Ноутбуки'),(4,'ПК'),(2,'Планшеты'),(1,'Телефоны');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-28 21:11:42
