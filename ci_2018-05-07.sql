# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.21)
# Database: ci
# Generation Time: 2018-05-07 10:40:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_administrators
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_administrators`;

CREATE TABLE `ci_administrators` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `ci_administrators` WRITE;
/*!40000 ALTER TABLE `ci_administrators` DISABLE KEYS */;

INSERT INTO `ci_administrators` (`id`, `name`, `password`, `phone`, `last_login`, `IP`, `create_at`, `update_at`)
VALUES
	(1,'admin','$2y$09$VYtkbrKQfZP91lhW42tr9eUOYxcQo7ilyaeTAFpoXYn/DBCPCbrrm','18200867489','2018-05-03 17:31:52',NULL,'2018-05-03 17:31:52','2018-05-03 17:31:52');

/*!40000 ALTER TABLE `ci_administrators` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_sidebar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sidebar`;

CREATE TABLE `ci_sidebar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_sidebar` varchar(255) NOT NULL DEFAULT '',
  `second_sidebar` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table ci_test
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_test`;

CREATE TABLE `ci_test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
