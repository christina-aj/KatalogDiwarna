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

-- Dumping structure for table katalog_diwarna.testimonial
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id_testi` int NOT NULL AUTO_INCREMENT,
  `nama_testi` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `note_testi` varchar(255) COLLATE armscii8_bin NOT NULL,
  `desc_testi` longtext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`id_testi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table katalog_diwarna.testimonial: ~2 rows (approximately)
DELETE FROM `testimonial`;
INSERT INTO `testimonial` (`id_testi`, `nama_testi`, `note_testi`, `desc_testi`) VALUES
	(1, 'Jack', 'Cetak Badge', 'Terimakasih Kak barang telah kami terima dengan selamat dan baik keren pokoknya keren temen2 yg lain yang ingin order, gak perlu ragu hasil memuaskan pelayanan baik. pokoke mantep lah'),
	(2, 'Marlin\r\n', 'Kaus Kaki', 'Hasilnya sangat rapi dan mantep, keren dan ngga meleset dari request. Yang mau order gas aja deh dijamin cakepp hasilnya. Pelayanan ramah walau banyak request haha');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
