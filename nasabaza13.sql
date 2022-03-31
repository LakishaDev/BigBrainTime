-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bbt
CREATE DATABASE IF NOT EXISTS `bbt` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bbt`;

-- Dumping structure for table bbt.donatori
CREATE TABLE IF NOT EXISTS `donatori` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `lozinka` varchar(255) NOT NULL DEFAULT '',
  `ime` varchar(50) NOT NULL DEFAULT '',
  `prezime` varchar(50) NOT NULL DEFAULT '',
  `korisnickoIme` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bbt.donatori: ~0 rows (approximately)
/*!40000 ALTER TABLE `donatori` DISABLE KEYS */;
/*!40000 ALTER TABLE `donatori` ENABLE KEYS */;

-- Dumping structure for table bbt.primaoci
CREATE TABLE IF NOT EXISTS `primaoci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '',
  `lozinka` varchar(255) NOT NULL DEFAULT '',
  `ime` varchar(50) NOT NULL DEFAULT '',
  `prezime` varchar(50) NOT NULL DEFAULT '',
  `slika` longtext DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bbt.primaoci: ~7 rows (approximately)
/*!40000 ALTER TABLE `primaoci` DISABLE KEYS */;
INSERT INTO `primaoci` (`id`, `email`, `lozinka`, `ime`, `prezime`, `slika`) VALUES
	(1, '', '', 'Maka', 'Nikolic@gmail.com', NULL),
	(2, '', '', 'op', '', NULL),
	(3, '', '', 'Lazar', 'lazar.cve@gmail.com', NULL),
	(4, '', 'Lakisha2004', 'Maka', '123@gmail.com', NULL),
	(5, '456@gmail.com', 'lakikaki', 'Maka', 'Nikolic', NULL),
	(6, '', '', '', '', NULL),
	(7, 'lazar.cve@gmail.com', 'Lakiakaki123', 'Lazar', 'Cvetanovic', NULL);
/*!40000 ALTER TABLE `primaoci` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
