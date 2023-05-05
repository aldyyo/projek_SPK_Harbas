-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_spk_yatim
DROP DATABASE IF EXISTS `db_spk_yatim`;
CREATE DATABASE IF NOT EXISTS `db_spk_yatim` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_spk_yatim`;

-- Dumping structure for table db_spk_yatim.data_mentah
DROP TABLE IF EXISTS `data_mentah`;
CREATE TABLE IF NOT EXISTS `data_mentah` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `sekolah` int(2) NOT NULL,
  `tanggungan` int(2) NOT NULL,
  `penghasilan` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_spk_yatim.data_mentah: ~7 rows (approximately)
DELETE FROM `data_mentah`;
INSERT INTO `data_mentah` (`id`, `nama`, `sekolah`, `tanggungan`, `penghasilan`, `status`) VALUES
	(1, 'Eka', 2, 1, 2, 3),
	(2, 'Yasmin', 2, 2, 3, 3),
	(3, 'Andika', 3, 3, 4, 3),
	(4, 'Farhan', 4, 3, 3, 1),
	(5, 'Dewi', 2, 2, 3, 3),
	(6, 'Sagi', 4, 2, 4, 5),
	(7, 'Yudo', 1, 1, 3, 1);

-- Dumping structure for table db_spk_yatim.rank_tb
DROP TABLE IF EXISTS `rank_tb`;
CREATE TABLE IF NOT EXISTS `rank_tb` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `score` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_spk_yatim.rank_tb: ~7 rows (approximately)
DELETE FROM `rank_tb`;
INSERT INTO `rank_tb` (`id`, `nama`, `score`) VALUES
	('KEL401SAG', 'Sagi', 0.901314),
	('KEL402AND', 'Andika', 0.743475),
	('KEL403YAS', 'Yasmin', 0.480811),
	('KEL404DEW', 'Dewi', 0.480811),
	('KEL405FAR', 'Farhan', 0.438105),
	('KEL406EKA', 'Eka', 0.256525),
	('KEL407YUD', 'Yudo', 0.1256);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
