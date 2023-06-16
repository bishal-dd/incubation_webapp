/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - incubation_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`incubation_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `incubation_db`;

/*Table structure for table `t_about_details` */

DROP TABLE IF EXISTS `t_about_details`;

CREATE TABLE `t_about_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT NULL,
  `type` enum('Objectives','Vision','Mission') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_about_details` */

/*Table structure for table `t_admin_master` */

DROP TABLE IF EXISTS `t_admin_master`;

CREATE TABLE `t_admin_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(8) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_admin_master` */

insert  into `t_admin_master`(`id`,`name`,`email`,`password`,`phone_no`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'Bishal','gwg@gmail.com','$2y$10$7k.JPJakB1KB41dGSq7LruzpPxaQYQaZ8MJIYVSvOS6PEFYlsVGr.','1111111','Inactive',NULL,NULL,'2023-06-16 08:21:09',1),
(34,'bishal','dhakalbishal930@gmail.com','$2y$10$tx1jWK7tAL1ce8MezYPaZeumY.3E36tUlQIgVl9ft2HOIeKlRln36','11','Inactive','2023-06-16 08:00:49',1,'2023-06-16 08:21:01',1),
(35,'lkl','d@gmail.com','$2y$10$Fv291qXgvvZh92rgn/SYeO3sarwKAdME8acSP84Mf1O/jHiw6vQXW','22','Inactive','2023-06-16 08:01:44',1,NULL,NULL);

/*Table structure for table `t_advisory_master` */

DROP TABLE IF EXISTS `t_advisory_master`;

CREATE TABLE `t_advisory_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `affiliation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_advisory_master` */

/*Table structure for table `t_event_master` */

DROP TABLE IF EXISTS `t_event_master`;

CREATE TABLE `t_event_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_event_master` */

/*Table structure for table `t_feedback_master` */

DROP TABLE IF EXISTS `t_feedback_master`;

CREATE TABLE `t_feedback_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_no` int(8) DEFAULT NULL,
  `feedback_message` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_feedback_master` */

/*Table structure for table `t_incubates` */

DROP TABLE IF EXISTS `t_incubates`;

CREATE TABLE `t_incubates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_incubates` */

/*Table structure for table `t_mentors` */

DROP TABLE IF EXISTS `t_mentors`;

CREATE TABLE `t_mentors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `affiliation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_mentors` */

/*Table structure for table `t_slider` */

DROP TABLE IF EXISTS `t_slider`;

CREATE TABLE `t_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_slider` */

insert  into `t_slider`(`id`,`name`,`image`,`created_at`,`created_by`,`updated_at`,`updated_by`,`text`) values 
(6,'new','1686949764_IMG_8416.JPG','2023-06-16 09:09:24',1,NULL,NULL,'ddddddddd'),
(8,'de','1686949984_IMG_8321.JPG','2023-06-16 09:13:04',1,NULL,NULL,'sssssss');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
