/*
SQLyog Community v9.63 
MySQL - 5.6.14-log : Database - event_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`event_management` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `event_management`;

/*Table structure for table `co_ordinator_master` */

DROP TABLE IF EXISTS `co_ordinator_master`;

CREATE TABLE `co_ordinator_master` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_name` varchar(200) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `co_type` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `co_ordinator_master` */

/*Table structure for table `college_master` */

DROP TABLE IF EXISTS `college_master`;

CREATE TABLE `college_master` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(200) DEFAULT NULL,
  `address` text,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `college_master` */

insert  into `college_master`(`college_id`,`college_name`,`address`,`created_on`) values (1,'test','test','2016-02-16 16:22:33'),(2,'sdfdf sd','asdfasdf','2016-02-16 16:22:39'),(3,'aasdfasfas fasdf','as dfas d','2016-02-16 16:28:36'),(4,'d','d','2016-02-16 16:28:38'),(5,'d','d','2016-02-16 16:28:42');

/*Table structure for table `department_master` */

DROP TABLE IF EXISTS `department_master`;

CREATE TABLE `department_master` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(200) DEFAULT NULL,
  `dept_short_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `department_master` */

insert  into `department_master`(`dept_id`,`dept_name`,`dept_short_name`) values (1,'Computer Science','CST'),(2,'Information Technology','IT'),(3,'Electronics & Telecommunication','E & TC'),(4,'Mechanical Engineering','MECH'),(5,'Civil Engineering','CIVIL');

/*Table structure for table `event_master` */

DROP TABLE IF EXISTS `event_master`;

CREATE TABLE `event_master` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `co_id` int(11) DEFAULT NULL,
  `student_co_head` varchar(100) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `event_type` varchar(25) DEFAULT NULL,
  `registration_fees` int(10) DEFAULT NULL,
  `no_of_participants` int(10) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `event_master` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
