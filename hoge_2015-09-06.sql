# ************************************************************
# Sequel Pro SQL dump
# バージョン 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# ホスト: 127.0.0.1 (MySQL 5.6.25)
# データベース: hoge
# 作成時刻: 2015-09-05 23:58:05 +0000
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
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
