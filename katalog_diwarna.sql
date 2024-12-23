-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
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
CREATE DATABASE IF NOT EXISTS `katalog_diwarna` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `katalog_diwarna`;

-- Dumping structure for table katalog_diwarna.detail_produk
CREATE TABLE IF NOT EXISTS `detail_produk` (
  `id_detail_p` int(11) NOT NULL AUTO_INCREMENT,
  `katalog_awal_id` int(11) NOT NULL,
  `deskripsi_detail_p` longtext DEFAULT NULL,
  `bahan_detail_p` varchar(250) DEFAULT '-',
  `minim_detail_p` varchar(250) DEFAULT '-',
  `custom_detail_p` varchar(250) DEFAULT '-',
  `penutup_detail_p` longtext DEFAULT NULL,
  PRIMARY KEY (`id_detail_p`) USING BTREE,
  KEY `katalog_awal_id` (`katalog_awal_id`),
  CONSTRAINT `fk-katalog_awal_id` FOREIGN KEY (`katalog_awal_id`) REFERENCES `katalog_awal` (`katalog_awal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.detail_produk: ~9 rows (approximately)
DELETE FROM `detail_produk`;
INSERT INTO `detail_produk` (`id_detail_p`, `katalog_awal_id`, `deskripsi_detail_p`, `bahan_detail_p`, `minim_detail_p`, `custom_detail_p`, `penutup_detail_p`) VALUES
	(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '60 pcs', 'Custom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(3, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(4, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(5, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(6, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(7, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(8, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.'),
	(9, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet, lectus ante consequat eros, vehicula vehicula magna augue nec magna. Ut egestas rhoncus justo, at tempus quam faucibus eu. Nunc vestibulum convallis finibus. Vestibulum sed pellentesque ipsum, sed malesuada diam. ', 'Bahan Katun', '-', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In metus est, placerat in quam nec, imperdiet pulvinar elit. Suspendisse et sem et leo porttitor elementum vitae eget tortor. Aliquam velit metus, lacinia id ligula ac, porta volutpat elit. Maecenas condimentum, nibh sollicitudin mattis aliquet.');

-- Dumping structure for table katalog_diwarna.foto_produk
CREATE TABLE IF NOT EXISTS `foto_produk` (
  `id_foto_produk` int(11) NOT NULL AUTO_INCREMENT,
  `alt_foto_produk` varchar(250) DEFAULT NULL,
  `text_foto_produk` varchar(250) DEFAULT NULL,
  `desc_foto_produk` varchar(250) DEFAULT NULL,
  `url_foto_produk` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_foto_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- Dumping structure for table katalog_diwarna.foto_slide
CREATE TABLE IF NOT EXISTS `foto_slide` (
  `id_foto_slide` int(11) NOT NULL AUTO_INCREMENT,
  `judul_foto_slide` varchar(255) DEFAULT NULL,
  `desk_foto_slide` varchar(255) DEFAULT NULL,
  `alt_foto_slide` varchar(255) DEFAULT NULL,
  `url_foto_slide` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_foto_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.foto_slide: ~2 rows (approximately)
DELETE FROM `foto_slide`;
INSERT INTO `foto_slide` (`id_foto_slide`, `judul_foto_slide`, `desk_foto_slide`, `alt_foto_slide`, `url_foto_slide`) VALUES
	(1, 'Badge Untuk Segala Keperluan', 'Badge Bordir, Rajut, Sablon', 'Badge Bordir dll', '/assets/images/produk/slider1.png'),
	(2, 'Kaos Kaki Segala Keperluan', 'Dengan Bahan Terpilih', 'Kaos Kaki', '/assets/images/produk/slider2.png');

-- Dumping structure for table katalog_diwarna.katalog_awal
CREATE TABLE IF NOT EXISTS `katalog_awal` (
  `katalog_awal_id` int(11) NOT NULL AUTO_INCREMENT,
  `alt_k_awal` varchar(255) DEFAULT NULL,
  `text_k_awal` varchar(255) NOT NULL,
  `desc_k_awal` varchar(255) DEFAULT NULL,
  `url_k_awal` varchar(255) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`katalog_awal_id`),
  KEY `id_sub_kategori` (`id_sub_kategori`) USING BTREE,
  CONSTRAINT `FK-id_sub_kategori` FOREIGN KEY (`id_sub_kategori`) REFERENCES `sub_kategori` (`id_sub_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.katalog_awal: ~9 rows (approximately)
DELETE FROM `katalog_awal`;
INSERT INTO `katalog_awal` (`katalog_awal_id`, `alt_k_awal`, `text_k_awal`, `desc_k_awal`, `url_k_awal`, `id_sub_kategori`, `slug`) VALUES
	(1, 'badge-bordir', 'Badge Bordir', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge bordir - diwarna.com.jpg', 5, 'badge-bordir'),
	(2, 'badge-rajut', 'Badge Rajut', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge rajut - diwarna.com.jpg', 5, 'badge-rajut'),
	(3, 'badge-sablon', 'Badge Sablon', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge sablon - diwarna.com.jpg', 5, 'badge-sablon'),
	(4, 'topi-sekolah', 'Topi Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/topi sekolah - diwarna.com.jpg', 1, 'topi-sekolah'),
	(5, 'topi-promosi', 'Topi Promosi', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/topi promosi - diwarna.com.jpg', 1, 'topi-promosi'),
	(6, 'dasi-sekolah', 'Dasi Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/dasi sekolah - diwarna.com.jpg', 4, 'dasi-sekolah'),
	(7, 'sabuk-sekolah', 'Sabuk Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/sabuk sekolah - diwarna.com.jpg', 3, 'sabuk-sekolah'),
	(8, 'evolet-sekolah', 'Evolet Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/evolet sekolah - diwarna.com.jpg', 19, 'evolet-sekolah'),
	(9, 'kaos-kaki-sekolah', 'Kaos Kaki Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/kaos kaki sekolah - diwarna.com.jpg', 18, 'kaos-kaki-sekolah');

-- Dumping structure for table katalog_diwarna.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 tdk tampil, 1 tampil',
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.kategori: ~5 rows (approximately)
DELETE FROM `kategori`;
INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug`, `status`) VALUES
	(1, 'Pakaian', 'pakaian', 1),
	(2, 'Aksesoris', 'aksesoris', 1),
	(3, 'Suvenir', 'suvenir', 0),
	(4, 'Alat Tulis Kantor', 'atk', 0),
	(5, 'Percetakan', 'percetakan', 0);

-- Dumping structure for table katalog_diwarna.sub_kategori
CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub_kategori` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sub_kategori`),
  KEY `id_kategori` (`id_kategori`) USING BTREE,
  CONSTRAINT `FK-id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
	(19, 'Evolet Pundak', 2, 'evolet-pundak'),
	(20, 'meja', 2, 'mj');

-- Dumping structure for table katalog_diwarna.testimonial
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id_testi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_testi` varchar(255) NOT NULL,
  `note_testi` varchar(255) NOT NULL,
  `desc_testi` longtext NOT NULL,
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
