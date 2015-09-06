# ************************************************************
# Sequel Pro SQL dump
# バージョン 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# ホスト: 127.0.0.1 (MySQL 5.6.25)
# データベース: hoge
# 作成時刻: 2015-09-06 00:41:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `article_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `article_title` varchar(255) NOT NULL DEFAULT '',
  `category_id` varchar(255) NOT NULL DEFAULT '',
  `contains` text NOT NULL,
  `means` varchar(255) NOT NULL DEFAULT '',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;

INSERT INTO `article` (`article_id`, `user_id`, `article_title`, `category_id`, `contains`, `means`, `date`, `flag`)
VALUES
	(1,'a','s','hoge','s','s','2015-09-06 01:20:55',0),
	(2,'a','s','hoge','ã‚ã‚ã‚ã‚','s','2015-09-06 01:22:35',0),
	(3,'a','ã‚ã‚ã‚','hoge','ã‚ã‚ã‚','ã‚ã‚ã‚','2015-09-06 01:23:55',0),
	(4,'a','ã‚ã‚ã‚','hoge','ã‚ã‚ã‚','ã‚ã‚ã‚','2015-09-06 01:24:16',0),
	(5,'a','あああ','hoge','あああ','あああ','2015-09-06 01:24:37',0),
	(6,'a','a','hoge','aa','aaadsa','2015-09-06 01:40:00',0),
	(7,'a','aadsa','hoge','dsadsa','dasdsads','2015-09-06 03:13:11',0),
	(8,'a','sdふぁ','2','dfさfdさ','fsだfdさf','2015-09-06 08:10:57',0),
	(9,'a','sdふぁ','2','dfさfdさ','fsだfdさf','2015-09-06 08:11:48',0),
	(10,'','aaaa','1','aaaa','aaaaa','2015-09-06 08:57:30',0);

/*!40000 ALTER TABLE `article` ENABLE KEYS */;
# テーブルのダンプ category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` varchar(2) NOT NULL DEFAULT '',
  `category_name` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ help
# ------------------------------------------------------------

DROP TABLE IF EXISTS `help`;

CREATE TABLE `help` (
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `evaluation` tinyint(4) NOT NULL,
  `comment` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ matching
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matching`;

CREATE TABLE `matching` (
  `match_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `desi_user_id` varchar(255) NOT NULL DEFAULT '',
  `appeal` text NOT NULL,
  `chose_flag` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `matching` WRITE;
/*!40000 ALTER TABLE `matching` DISABLE KEYS */;

INSERT INTO `matching` (`match_id`, `article_id`, `user_id`, `desi_user_id`, `appeal`, `chose_flag`)
VALUES
	(1,1,'a','a','zzzzz',1),
	(2,1,'a','','zzzzz',0),
	(3,1,'a','','aaaa',0),
	(4,1,'a','eq','sdsds',0),
	(5,1,'a','a','sdsds',0),
	(6,1,'a','a','sasa',0),
	(7,7,'b','a','sasasada',1),
	(8,1,'a','a','',0),
	(9,2,'a','a','asasasa',0),
	(10,2,'','a','',0),
	(11,1,'','a','aaaa',0);

/*!40000 ALTER TABLE `matching` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `match_id` int(11) NOT NULL,
  `send_user_id` varchar(255) NOT NULL DEFAULT '',
  `receive_user_id` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;

INSERT INTO `message` (`message_id`, `match_id`, `send_user_id`, `receive_user_id`, `message`)
VALUES
	(1,7,'a','b','sasasdada'),
	(2,7,'a','b','sasasdada'),
	(3,1,'a','a','sasada');

/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `mailadress` varchar(255) NOT NULL DEFAULT '',
  `pr` text,
  `area` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`user_id`, `password`, `user_name`, `mailadress`, `pr`, `area`, `age`, `sex`)
VALUES
	('','','','',NULL,NULL,NULL,NULL),
	('a','a','aaa','aaa',NULL,NULL,NULL,NULL),
	('z','z','z','z',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
