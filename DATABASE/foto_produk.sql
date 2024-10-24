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

-- Dumping structure for table katalog_diwarna.foto_produk
CREATE TABLE IF NOT EXISTS `foto_produk` (
  `id_foto_produk` int NOT NULL AUTO_INCREMENT,
  `alt_foto_produk` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `text_foto_produk` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `desc_foto_produk` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `url_foto_produk` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  PRIMARY KEY (`id_foto_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.foto_produk: ~8 rows (approximately)
DELETE FROM `foto_produk`;
INSERT INTO `foto_produk` (`id_foto_produk`, `alt_foto_produk`, `text_foto_produk`, `desc_foto_produk`, `url_foto_produk`) VALUES
	(1, 'KAOS KAKI TEMBOK DUKUH', 'KAOS KAKI', 'SDN TEMBOK DUKUH', '/assets/images/produk/1-SDN-TEMBOK-DUKUH.png'),
	(2, 'BADGE MADRASAH', 'BADGE BORDIR', 'MADRASAH AT TIBYAN', '/assets/images/produk/2-MADRASAH-AT-TIBYAN.png'),
	(3, 'KAOS KAKI SMP NEGERI 1', 'KAOS KAKI', 'SMP NEGERI 1 KOTABARU', '/assets/images/produk/3-SMP-NEGERI-1-KOTABARU.png'),
	(4, 'BADGE SMK NEGRI 3', 'BADGE BORDIR', 'SMK NEGERI 3', '/assets/images/produk/4-SMK-NEGERI-3.png'),
	(5, 'KAOS KAKI TK ADHYAKSA', 'KAOS KAKI', 'TK ADHYAKSA VIII', '/assets/images/produk/5-TK-ADHYAKSA-VIII.png'),
	(6, 'BADGE TK KRISTEN', 'BADGE BORDIR', 'TK KRISTEN PELITA KASIH', '/assets/images/produk/6-TK-KRISTEN-PELITA-KASIH.png'),
	(7, 'BADGE NEGERI LUWUK', 'BADGE BORDIR', 'SMA NEGERI LUWUK', '/assets/images/produk/7-SMA-NEGERI-LUWUK.png'),
	(222, 'BADGE TIMOR TENGAH', 'BADGE BORDIR', 'TIMOR TENGAH SELATAN', '/assets/images/produk/8-TIMOR-TENGAH-SELATAN.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
