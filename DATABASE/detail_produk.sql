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

-- Dumping structure for table katalog_diwarna.detail_produk
CREATE TABLE IF NOT EXISTS `detail_produk` (
  `id_detail_p` int NOT NULL AUTO_INCREMENT,
  `katalog_awal_id` int NOT NULL,
  `deskripsi_detail_p` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `list_desk_detail_p` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penutup_detail_p` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `linkwa_detail_p` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '#',
  PRIMARY KEY (`id_detail_p`) USING BTREE,
  KEY `katalog_awal_id` (`katalog_awal_id`),
  CONSTRAINT `fk-katalog_awal_id` FOREIGN KEY (`katalog_awal_id`) REFERENCES `katalog_awal` (`katalog_awal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.detail_produk: ~9 rows (approximately)
DELETE FROM `detail_produk`;
INSERT INTO `detail_produk` (`id_detail_p`, `katalog_awal_id`, `deskripsi_detail_p`, `list_desk_detail_p`, `penutup_detail_p`, `linkwa_detail_p`) VALUES
	(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', 'https://wa.me/6285731710407?text=tess'),
	(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(3, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(4, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(5, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(6, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(7, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(8, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#'),
	(9, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.', '#');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
