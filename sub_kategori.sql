-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for katalog_diwarna
CREATE DATABASE IF NOT EXISTS `katalog_diwarna` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `katalog_diwarna`;

-- Dumping structure for table katalog_diwarna.sub_kategori
CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `id_sub_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_sub_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_sub_kategori`),
  KEY `id_kategori` (`id_kategori`) USING BTREE,
  CONSTRAINT `FK-id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.sub_kategori: ~19 rows (approximately)
DELETE FROM `sub_kategori`;
INSERT INTO `sub_kategori` (`id_sub_kategori`, `nama_sub_kategori`, `id_kategori`, `slug`) VALUES
	(1, 'Topi', 1, 'topi'),
	(2, 'Kemeja', 1, 'kemeja'),
	(3, 'Sabuk', 1, 'sabuk'),
	(4, 'Dasi', 1, 'dasi'),
	(5, 'Badge', 2, 'badge'),
	(6, 'Stiker', 2, 'stiker'),
	(7, 'Kaos Polos', 1, 'kaos-polos'),
	(8, 'Kalender', 3, 'kalender'),
	(9, ' Mug', 3, 'mug'),
	(10, 'Pin', 3, 'pin'),
	(11, 'ID Card', 4, 'id-card'),
	(12, 'Bolpoin', 4, 'bolpoin'),
	(13, 'Payung', 3, 'payung'),
	(14, 'Jam Dinding', 3, 'jam-dinding'),
	(15, 'Cetak Kertas dan Jilid', 5, 'cetak-kertas-dan-jilid'),
	(16, 'Banner', 5, 'banner'),
	(17, 'Foto', 5, 'foto'),
	(18, 'Kaos Kaki', 1, 'kaos-kaki'),
	(19, 'Evolet Pundak', 2, 'evolet-pundak');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
