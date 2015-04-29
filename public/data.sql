-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2015 at 01:33 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a2800711_ekonomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `b1`
--

CREATE TABLE `b1` (
  `b1r1` varchar(2) NOT NULL DEFAULT '32' COMMENT 'provinsi = Jawa Barat',
  `b1r2` enum('02','09') NOT NULL COMMENT 'kabupaten/kota',
  `b1r3` varchar(3) NOT NULL COMMENT 'kecamatan',
  `b1r4` varchar(3) NOT NULL COMMENT 'Desa/kelurahan',
  `b1r5` enum('1','2') NOT NULL COMMENT 'klasifikasi desa/kelurahan',
  `b1r6` varchar(4) NOT NULL COMMENT 'Nomor Blok sensus',
  `b1r7` varchar(4) NOT NULL COMMENT 'Nomor urut bangunan fisik',
  `b1r8` varchar(4) NOT NULL COMMENT 'Nomor urut bangunan sensus',
  `b1r9` varchar(3) NOT NULL COMMENT 'Nomor urut rumah tangga sampel',
  `b1r10` varchar(2) NOT NULL COMMENT 'Nomor urut sampel',
  `b1r11` varchar(8) NOT NULL COMMENT 'Nomor kode sampel (NKS)',
  `b1r12` varchar(30) NOT NULL COMMENT 'Nama Penanggung Jawab',
  `b1r13` text NOT NULL COMMENT 'ALAMAT PJ',
  `b1r14` varchar(12) DEFAULT NULL COMMENT 'Nomor telp/HP Penanggung Jawab',
  `nks` varchar(30) NOT NULL COMMENT 'nomer kode sampel',
  PRIMARY KEY (`nks`),
  KEY `b1r2` (`b1r2`),
  KEY `b1r5` (`b1r5`),
  KEY `b1r2_2` (`b1r2`,`b1r5`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b1`
--

INSERT INTO `b1` VALUES('1', '02', '2', '1', '1', '1111', '111', '111', '121', '11', '71111111', 'solihin', 'Jalan/Gang :rekreasi\nRT/RW : 12/04Dusun : cilincing', '081', '11211111111');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '8542', '251', '254', '214', '32', '32147115', 'darkim', 'Jalan/Gang :rekreasi\nRT/RW : 12/4Dusun : cilincing', '089672870220', '11118542251');
INSERT INTO `b1` VALUES('1', '09', '1', '1', '1', '1111', '111', '111', '111', '12', '71111111', 'tisna', 'Jalan/Gang :rekreasi\nRT/RW : 12/1Dusun : cilincing', '08123456789', '12111111111');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '1234', '458', '329', '336', '12', '61486464', 'tasmin', 'Jalan/Gang :jln. rekreasi no.115 rt 12 rw 4\nRT/RW : 12/04Dusun : abc', '087788205779', '11111234458');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '2', '3524', '254', '254', '545', '12', '32145786', 'yunanto', 'Jalan/Gang :jln cilinci\nRT/RW : 12/04Dusun : cilinci', '-', '11113524254');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '1239', '675', '046', '886', '84', '66268654', 'nurman', 'Jalan/Gang :jln. rekreasi\nRT/RW : 12/04Dusun : cilincing', '085600000087', '11111239675');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '9975', '456', '944', '855', '56', '63897435', 'suderajat', 'Jalan/Gang :jln. rekreasi\nRT/RW : 12/04Dusun : jakarta', '0864856821', '11119975456');
INSERT INTO `b1` VALUES('1', '02', '1', '2', '1', '1234', '123', '123', '123', '12', '05000000', 'wasmih', 'Jalan/Gang :jl raya \nRT/RW : 05/04Dusun : cilincing', '000', '11121234123');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '1232', '123', '123', '123', '12', '05222222', 'rasmin', 'Jalan/Gang :jl aram\nRT/RW : 05/04Dusun : cilincing', '0000', '11111232123');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '1236', '123', '123', '123', '12', '05333333', 'warta kusuma', 'Jalan/Gang :jl cilincing lama\nRT/RW : 05/04Dusun : cilincing', '085716972609', '11111236123');
INSERT INTO `b1` VALUES('1', '02', '1', '1', '1', '5284', '254', '524', '245', '24', '54882479', 'supandi', 'Jalan/Gang :rekreasi\nRT/RW : 12/4Dusun : cirilinci', '08775425878', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b2`
--

CREATE TABLE `b2` (
  `b2r1s1` varchar(30) NOT NULL COMMENT 'nama pencacah',
  `b2r1s2` varchar(30) NOT NULL COMMENT 'nama pengawas/pemeriksa',
  `b2r2s1` varchar(7) NOT NULL COMMENT 'NIM pencacah',
  `b2r2s2` varchar(7) NOT NULL COMMENT 'NIM pengawas',
  `b2r3s1` date NOT NULL COMMENT 'tanggal pelaksana pencacah',
  `b2r3s2` date NOT NULL COMMENT 'tanggal pelaksanan pemeriksa',
  `b2r5` enum('1','2','3','4') NOT NULL COMMENT 'keterangan hasil pencacahan',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) NOT NULL,
  PRIMARY KEY (`nks`),
  KEY `b2r5` (`b2r5`),
  KEY `NKS_B1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b2`
--

INSERT INTO `b2` VALUES('', '', '', '', '0000-00-00', '0000-00-00', '', '11211111111', '11211111111');
INSERT INTO `b2` VALUES('Fauzi', 'Dedi', '12.6980', '12.7089', '2015-02-01', '2015-02-01', '1', '11118542251', '11118542251');
INSERT INTO `b2` VALUES('Amanda ', 'Syifa', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '12111111111', '12111111111');
INSERT INTO `b2` VALUES('Wiwik', 'Surya', '12.7389', '12.0000', '2015-02-01', '2015-02-01', '1', '11111234458', '11111234458');
INSERT INTO `b2` VALUES('Fauzi', 'Dedi', '12.6980', '12.7089', '2015-02-01', '2015-02-01', '1', '11113524254', '11113524254');
INSERT INTO `b2` VALUES('Shoim', 'Surya', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '11111239675', '11111239675');
INSERT INTO `b2` VALUES('Shoim', 'Surya', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '11119975456', '11119975456');
INSERT INTO `b2` VALUES('Elan', 'Elan', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '11121234123', '11121234123');
INSERT INTO `b2` VALUES('Elan', 'Arif', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '11111232123', '11111232123');
INSERT INTO `b2` VALUES('Elan', 'Arif', '12.0000', '12.0000', '2015-02-01', '2015-02-01', '1', '11111236123', '11111236123');
INSERT INTO `b2` VALUES('Fauzi', 'Dedy', '12.6980', '12.7080', '2015-02-01', '2015-02-01', '1', '11115284254', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b3`
--

CREATE TABLE `b3` (
  `b3r1` int(2) DEFAULT NULL COMMENT 'umur',
  `b3r2` enum('1','2') DEFAULT NULL COMMENT 'jenis Kelamin',
  `b3r3` enum('1','2','3') DEFAULT NULL COMMENT 'partisipasi sekolah',
  `b3r4` varchar(2) DEFAULT NULL COMMENT 'ijazah/sttb tertinggi',
  `b3r5s1` enum('1','2') DEFAULT NULL COMMENT 'dpt baca tulis latin',
  `b3r5s2` enum('1','2') DEFAULT NULL COMMENT 'dpt baca tulis arab',
  `b3r5s3` enum('1','2') DEFAULT NULL COMMENT 'dpt baca tulis lainnya',
  `b3r6s1` enum('1','2') DEFAULT NULL COMMENT 'pernah mengikuti penyuluhan',
  `b3r6s2` int(1) DEFAULT NULL COMMENT 'frekuensi penyuluhan',
  `b3r7s1` enum('1','2') DEFAULT NULL,
  `b3r7s2` int(1) DEFAULT NULL COMMENT 'jumlah tanggungan',
  `b3r8s1` int(1) DEFAULT NULL COMMENT 'lama melakukan penangkapan ikan',
  `b3r8s2` enum('1','2') DEFAULT NULL COMMENT 'berhenti menangkap',
  `b3r8s3` int(1) DEFAULT NULL COMMENT 'lama berhenti',
  `b3r9` int(2) DEFAULT NULL COMMENT 'frekuensi melaut',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) NOT NULL,
  KEY `b3r2` (`b3r2`),
  KEY `b3r3` (`b3r3`),
  KEY `b3r4` (`b3r4`),
  KEY `b3r5s1` (`b3r5s1`),
  KEY `b3r5s2` (`b3r5s2`),
  KEY `b3r5s3` (`b3r5s3`),
  KEY `b3r6s1` (`b3r6s1`),
  KEY `b3r8s2` (`b3r8s2`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b3`
--

INSERT INTO `b3` VALUES(26, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 14, '2', NULL, 30, '11113524254', '11113524254');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(26, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 14, '2', NULL, 30, '11113524254', '11113524254');
INSERT INTO `b3` VALUES(26, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 14, '2', NULL, 30, '11113524254', '11113524254');
INSERT INTO `b3` VALUES(26, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 14, '2', NULL, 30, '11113524254', '11113524254');
INSERT INTO `b3` VALUES(40, '1', '3', '1', '1', '1', '2', '1', 1, '2', NULL, 10, '1', 3, 20, '12111111111', '12111111111');
INSERT INTO `b3` VALUES(32, '1', '3', '2', '1', '2', '2', '1', 0, '2', NULL, 19, '2', NULL, 27, '11118542251', '11118542251');
INSERT INTO `b3` VALUES(32, '1', '3', '2', '1', '2', '2', '1', 0, '2', NULL, 19, '2', NULL, 27, '11118542251', '11118542251');
INSERT INTO `b3` VALUES(40, '1', '3', '1', '1', '1', '2', '1', 1, '2', NULL, 10, '1', 3, 20, '12111111111', '12111111111');
INSERT INTO `b3` VALUES(40, '1', '3', '1', '1', '1', '2', '1', 1, '2', NULL, 10, '1', 3, 20, '12111111111', '12111111111');
INSERT INTO `b3` VALUES(40, '1', '3', '1', '1', '1', '2', '1', 1, '2', NULL, 10, '1', 3, 20, '12111111111', '12111111111');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(35, '1', '3', '2', '1', '2', '2', '2', NULL, '2', NULL, 20, '1', 2, 25, '11111239675', '11111239675');
INSERT INTO `b3` VALUES(35, '1', '3', '2', '1', '2', '2', '2', NULL, '2', NULL, 20, '1', 2, 25, '11111239675', '11111239675');
INSERT INTO `b3` VALUES(35, '1', '3', '2', '1', '2', '2', '2', NULL, '2', NULL, 20, '1', 2, 25, '11111239675', '11111239675');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(60, '1', '3', '5', '1', '1', '1', '1', 3, '2', NULL, 25, '2', NULL, 30, '11119975456', '11119975456');
INSERT INTO `b3` VALUES(74, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 35, '1', 12, 0, '11121234123', '11121234123');
INSERT INTO `b3` VALUES(74, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 35, '1', 12, 0, '11121234123', '11121234123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(35, '1', '3', '4', '1', '2', '2', '2', NULL, '2', NULL, 15, '1', 3, 2, '11111236123', '11111236123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(35, '1', '3', '4', '1', '2', '2', '2', NULL, '2', NULL, 15, '1', 3, 2, '11111236123', '11111236123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(30, '1', '3', '1', '2', '2', '1', '2', NULL, '2', NULL, 15, '1', 2, 30, '11111232123', '11111232123');
INSERT INTO `b3` VALUES(31, '1', '3', '2', '1', '1', '2', '2', NULL, '1', 1, 10, '2', NULL, 28, '11115284254', '11115284254');
INSERT INTO `b3` VALUES(62, '1', '1', '0', '2', '2', '1', '1', 0, '2', NULL, 40, '1', 5, 30, '11111234458', '11111234458');
INSERT INTO `b3` VALUES(32, '1', '3', '2', '1', '2', '2', '1', 0, '2', NULL, 19, '2', NULL, 27, '11118542251', '11118542251');
INSERT INTO `b3` VALUES(26, '1', '3', '1', '1', '2', '2', '2', NULL, '2', NULL, 14, '2', NULL, 30, '11113524254', '11113524254');
INSERT INTO `b3` VALUES(35, '1', '3', '2', '1', '2', '2', '2', NULL, '2', NULL, 20, '1', 2, 25, '11111239675', '11111239675');

-- --------------------------------------------------------

--
-- Table structure for table `b4`
--

CREATE TABLE `b4` (
  `b4r1` enum('1','2') DEFAULT NULL COMMENT 'Apakah dalam melakukan operasi penangkapan ikan selama setahun yang lalu, menggunakan kapal/perahu?',
  `b4r2s1ad1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor < 5gt status milik sendiri',
  `b4r2s1ad1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor < 5gt status sewa',
  `b4r2s1ad1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor < 5gt status lainnya',
  `b4r2s1ad2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor < 5gt total',
  `b4r2s1bd1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 5-9,9 gt status milik sendiri',
  `b4r2s1bd1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 5-9,9 gt status sewa',
  `b4r2s1bd1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 5-9,9 gt status lainnya',
  `b4r2s1bd2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor 5-9,9 gt total',
  `b4r2s1cd1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 10-19,9 gt status milik sendiri',
  `b4r2s1cd1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 10-19,9 gt status sewa',
  `b4r2s1cd1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 10-19,9 gt status lainnya',
  `b4r2s1cd2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor 10-19,9 gt total',
  `b4r2s1dd1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 20-29,9 gt status milik sendiri',
  `b4r2s1dd1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 20-29,9 gt status sewa',
  `b4r2s1dd1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 20-29,9 gt status lainnya',
  `b4r2s1dd2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor 20-29,9 gt total',
  `b4r2s1ed1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 30-49,9 gt status milik sendiri',
  `b4r2s1ed1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 30-49,9 gt status sewa',
  `b4r2s1ed1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 30-49,9 gt status lainnya',
  `b4r2s1ed2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor 30-49,9 gt total',
  `b4r2s1fd1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 50-100 gt status milik sendiri',
  `b4r2s1fd1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 50-100 gt status sewa',
  `b4r2s1fd1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor 50-100 gt status lainnya',
  `b4r2s1fd2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor 50-100 gt total',
  `b4r2s1gd1t1` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor >100 gt status milik sendiri',
  `b4r2s1gd1t2` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor >100 gt status sewa',
  `b4r2s1gd1t3` int(2) DEFAULT NULL COMMENT 'jumlah kapal motor > 100 status lainnya',
  `b4r2s1gd2` int(3) DEFAULT NULL COMMENT 'jumlah kapal motor > 100 total',
  `b4r2s2d1t1` int(2) DEFAULT NULL COMMENT 'jumlah perahu motor tempel status milik sendiri ',
  `b4r2s2d1t2` int(2) DEFAULT NULL COMMENT 'jumlah perahu motor tempel status sewa',
  `b4r2s2d1t3` int(2) DEFAULT NULL COMMENT 'jumlah perahu motor tempel status lainnya',
  `b4r2s2d2` int(3) DEFAULT NULL COMMENT 'jumlah perahu motor tempel total',
  `b4r2s3d1t1` int(2) NOT NULL COMMENT 'perahu tanpa motor milik sendir',
  `b4r2s3d1t2` int(2) NOT NULL COMMENT 'perahu tanpa motor milik sewa',
  `b4r2s3d1t3` int(2) NOT NULL COMMENT 'perahu tanpa motor lainnya',
  `b4r2s3d2` int(3) NOT NULL COMMENT 'perahu tanpa motor total',
  `b4r2s3ad1t1` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor jukung status milik sendiri ',
  `b4r2s3ad1t2` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor jukung status sewa',
  `b4r2s3ad1t3` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor jukung status lainnya',
  `b4r2s3ad2` int(3) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor jukung total',
  `b4r2s3bd1t1` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan kecil < 7m status milik sendiri ',
  `b4r2s3bd1t2` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan kecil < 7m status sewa',
  `b4r2s3bd1t3` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan kecil < 7 m status lainnya',
  `b4r2s3bd2` int(3) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan kecil < 7 total',
  `b4r2s3cd1t1` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan 7-9.9 status milik sendiri ',
  `b4r2s3cd1t2` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan 7-9,9 status sewa',
  `b4r2s3cd1t3` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan 7-9,9 status lainnya',
  `b4r2s3cd2` int(3) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan 7-9,9 total',
  `b4r2s3dd1t1` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan >10m status milik sendiri ',
  `b4r2s3dd1t2` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan > 10m status sewa',
  `b4r2s3dd1t3` int(2) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan > 10m status lainnya',
  `b4r2s3dd2` int(3) DEFAULT NULL COMMENT 'jumlah perahu tanpa motor papan > 10m total',
  `b4r3s1d1t1` int(2) DEFAULT NULL COMMENT 'jumlah pukat tarik status milik sendiri',
  `b4r3s1d1t2` int(2) DEFAULT NULL COMMENT 'jumlah pukat tarik status sewa',
  `b4r3s1d1t3` int(2) DEFAULT NULL COMMENT 'jumlah pukat tarik status lainnya',
  `b4r3s1d2` int(3) DEFAULT NULL COMMENT 'jumlah pukat tarik status total',
  `b4r3s2d1t1` int(2) DEFAULT NULL COMMENT 'jumlah pukat kantong status milik sendiri',
  `b4r3s2d1t2` int(2) DEFAULT NULL COMMENT 'jumlah pukat kantong status sewa',
  `b4r3s2d1t3` int(2) DEFAULT NULL COMMENT 'jumlah pukat kantong status lainnya',
  `b4r3s2d2` int(3) DEFAULT NULL COMMENT 'jumlah pukat kantong total',
  `b4r3s3d1t1` int(2) DEFAULT NULL COMMENT 'jumlah pukat cincin status milik sendiri',
  `b4r3s3d1t2` int(2) DEFAULT NULL COMMENT 'jumlah pukat cincin status sewa',
  `b4r3s3d1t3` int(2) DEFAULT NULL COMMENT 'jumlah pukat cincin status lainnya',
  `b4r3s3d2` int(3) DEFAULT NULL COMMENT 'jumlah pukat cincin total',
  `b4r3s4d1t1` int(2) DEFAULT NULL COMMENT 'jumlah jaring insang status milik sendiri',
  `b4r3s4d1t2` int(2) DEFAULT NULL COMMENT 'jumlah jaring insang status sewa',
  `b4r3s4d1t3` int(2) DEFAULT NULL COMMENT 'jumlah jaring insang status lainnya',
  `b4r3s4d2` int(3) DEFAULT NULL COMMENT 'jumlah jaring insang total',
  `b4r3s5d1t1` int(2) DEFAULT NULL COMMENT 'jumlah jaring angkat status milik sendiri',
  `b4r3s5d1t2` int(2) DEFAULT NULL COMMENT 'jumlah jaring angkat status sewa',
  `b4r3s5d1t3` int(2) DEFAULT NULL COMMENT 'jumlah jaring angkat status lainnya',
  `b4r3s5d2` int(3) DEFAULT NULL COMMENT 'jumlah jaring angkat total',
  `b4r3s6d1t1` int(2) DEFAULT NULL COMMENT 'jumlah pancing status milik sendiri',
  `b4r3s6d1t2` int(2) DEFAULT NULL COMMENT 'jumlah pancing status sewa',
  `b4r3s6d1t3` int(2) DEFAULT NULL COMMENT 'jumlah pancing status lainnya',
  `b4r3s6d2` int(3) DEFAULT NULL COMMENT 'jumlah pancing total',
  `b4r3s7d1t1` int(2) DEFAULT NULL COMMENT 'jumlah perangkap status milik sendiri',
  `b4r3s7d1t2` int(2) DEFAULT NULL COMMENT 'jumlah perangkap status sewa',
  `b4r3s7d1t3` int(2) DEFAULT NULL COMMENT 'jumlah perangkap status lainnya',
  `b4r3s7d2` int(3) DEFAULT NULL COMMENT 'jumlah perangkap total',
  `b4r3s8d1t1` int(2) DEFAULT NULL COMMENT 'jumlah alat pengumpul status milik sendiri',
  `b4r3s8d1t2` int(2) DEFAULT NULL COMMENT 'jumlah alat pengumpul status sewa',
  `b4r3s8d1t3` int(2) DEFAULT NULL COMMENT 'jumlah alat pengumpul status lainnya',
  `b4r3s8d2` int(3) DEFAULT NULL COMMENT 'jumlah alat pengumpul total',
  `b4r3s9d1t1` int(2) DEFAULT NULL COMMENT 'jumlah muroami status milik sendiri',
  `b4r3s9d1t2` int(2) DEFAULT NULL COMMENT 'jumlah muroami status sewa',
  `b4r3s9d1t3` int(2) DEFAULT NULL COMMENT 'jumlah muroami status lainnya',
  `b4r3s9d2` int(3) DEFAULT NULL COMMENT 'jumlah muroami total',
  `b4r3s10d1t1` int(2) DEFAULT NULL COMMENT 'jumlah alat lainnya status milik sendiri',
  `b4r3s10d1t2` int(2) DEFAULT NULL COMMENT 'jumlah alat lainnya status sewa',
  `b4r3s10d1t3` int(2) DEFAULT NULL COMMENT 'jumlah alat lainnya status lainnya',
  `b4r3s10d2` int(3) DEFAULT NULL COMMENT 'jumlah alat lainnya total',
  `b4r4` enum('1','2','3','4','5') DEFAULT NULL COMMENT 'penggunaan alat bantu utama',
  `b4r5s1` enum('1','2') DEFAULT NULL COMMENT 'pernah perawatan sarana terakhir',
  `b4r5s2` int(1) DEFAULT NULL COMMENT 'frekuensi perawatan sarana terakhir',
  `b4r6` enum('1','2','3','4','5','6','7','8') DEFAULT NULL COMMENT 'sarana pengangkutan hasil tangkapan',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nks`),
  KEY `b4r4` (`b4r4`,`b4r5s1`,`b4r6`,`nks_b1`),
  KEY `nks_b1` (`nks_b1`),
  KEY `b4r5s1` (`b4r5s1`),
  KEY `b4r6` (`b4r6`),
  KEY `b4r4_2` (`b4r4`,`b4r5s1`,`b4r6`,`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b4`
--

INSERT INTO `b4` VALUES('1', NULL, NULL, NULL, 0, 3, 0, 0, 3, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 4, 0, 0, 4, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '1', '1', 1, '1', '11119975456', '11119975456');
INSERT INTO `b4` VALUES('1', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 1, 0, 0, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 400, NULL, NULL, 400, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '4', '2', NULL, '7', '12111111111', '12111111111');
INSERT INTO `b4` VALUES('1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 8, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4', '1', 1, '3', '11118542251', '11118542251');
INSERT INTO `b4` VALUES('1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4', '2', NULL, '8', '11113524254', '11113524254');
INSERT INTO `b4` VALUES('1', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 3, 0, 0, 3, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 30, 0, 0, 30, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '4', '1', 7, '1', '11121234123', '11121234123');
INSERT INTO `b4` VALUES('1', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 1, 0, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 1, 0, 0, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '4', '1', 3, '3', '11111232123', '11111232123');
INSERT INTO `b4` VALUES('1', NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 0, 0, 1, 1, '1', '1', 365, '7', '11111236123', '11111236123');
INSERT INTO `b4` VALUES('1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5', '1', 1, '3', '11115284254', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b5`
--

CREATE TABLE `b5` (
  `b5ar1` varchar(2) DEFAULT NULL COMMENT 'Jumlah hari trip terakhir',
  `b5ar2s1` varchar(4) DEFAULT NULL COMMENT 'Jenis ikan 1',
  `b5ar2s2` varchar(4) DEFAULT NULL COMMENT 'Jenis ikan 2',
  `b5ar2s3` varchar(4) DEFAULT NULL COMMENT 'Jenis ikan 3',
  `b5br3` decimal(7,1) DEFAULT NULL COMMENT 'Hasil Tangkapan pada trip terakhir kg',
  `b5br4` decimal(8,1) DEFAULT NULL COMMENT 'Nilai Hasil Tangkapan 000 rp',
  `b5br5` decimal(6,1) DEFAULT NULL COMMENT 'Rata rata Hasil Tangkapan Sebulan terakhir kg',
  `b5br6` decimal(7,1) DEFAULT NULL COMMENT 'rata rata Nilai Hasil Tangkapan sebulan 000 rp',
  `b5br7` int(3) DEFAULT NULL COMMENT 'banyak hari trip setahun',
  `b5br8` decimal(7,1) DEFAULT NULL COMMENT 'Hasil Tangkapan setahun terakhir',
  `b5br9` decimal(8,1) DEFAULT NULL COMMENT 'Nilai Hasil Tangkapan setahun terakhir 000 rp',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) DEFAULT NULL,
  KEY `b5ar2s1` (`b5ar2s1`),
  KEY `b5ar2s2` (`b5ar2s2`),
  KEY `b5ar2s3` (`b5ar2s3`),
  KEY `nks_b1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='V. Keterangan Hasil Tangkapan Usaha Pada Trip Terakhir';

--
-- Dumping data for table `b5`
--

INSERT INTO `b5` VALUES('1', '154', '241', '36', 60.0, 1600.0, 10.0, 10.0, 324, 3240.0, 3240.0, '11118542251', '11118542251');
INSERT INTO `b5` VALUES('1', '154', '241', '36', 60.0, 1600.0, 10.0, 10.0, 324, 3240.0, 3240.0, '11118542251', '11118542251');
INSERT INTO `b5` VALUES('1', '1', '0', '0', 10.0, 150000.0, 200.0, 150000.0, 200, 40000.0, 9999999.9, '12111111111', '12111111111');
INSERT INTO `b5` VALUES('1', '25', '21', '31', 1.5, 19.5, 100.0, 1300.0, 200, 20000.0, 260000.0, '11113524254', '11113524254');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '25', '21', '31', 1.5, 19.5, 100.0, 1300.0, 200, 20000.0, 260000.0, '11113524254', '11113524254');
INSERT INTO `b5` VALUES('1', '25', '21', '31', 1.5, 19.5, 100.0, 1300.0, 200, 20000.0, 260000.0, '11113524254', '11113524254');
INSERT INTO `b5` VALUES('1', '25', '21', '31', 1.5, 19.5, 100.0, 1300.0, 200, 20000.0, 260000.0, '11113524254', '11113524254');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '0', '0', 10.0, 150000.0, 200.0, 150000.0, 200, 40000.0, 9999999.9, '12111111111', '12111111111');
INSERT INTO `b5` VALUES('1', '1', '0', '0', 10.0, 150000.0, 200.0, 150000.0, 200, 40000.0, 9999999.9, '12111111111', '12111111111');
INSERT INTO `b5` VALUES('1', '1', '0', '0', 10.0, 150000.0, 200.0, 150000.0, 200, 40000.0, 9999999.9, '12111111111', '12111111111');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('3', '1', '2', '3', 50.0, 1000000.0, 250.0, 250.0, 300, 75000.0, 75000.0, '11111239675', '11111239675');
INSERT INTO `b5` VALUES('3', '1', '2', '3', 50.0, 1000000.0, 250.0, 250.0, 300, 75000.0, 75000.0, '11111239675', '11111239675');
INSERT INTO `b5` VALUES('3', '1', '2', '3', 50.0, 1000000.0, 250.0, 250.0, 300, 75000.0, 75000.0, '11111239675', '11111239675');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('3', '1', '2', '3', 5000.0, 50000.0, 200.0, 2000.0, 36, 7200.0, 72000.0, '11119975456', '11119975456');
INSERT INTO `b5` VALUES('1', '300', '0', '0', 50.0, 1500.0, 50.0, 1500.0, 365, 18250.0, 547500.0, '11121234123', '11121234123');
INSERT INTO `b5` VALUES('1', '300', '0', '0', 50.0, 1500.0, 50.0, 1500.0, 365, 18250.0, 547500.0, '11121234123', '11121234123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('10', '0', '0', '0', 3000.0, 40000.0, 3000.0, 75000.0, 24, 72000.0, 1800000.0, '11111236123', '11111236123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('10', '0', '0', '0', 3000.0, 40000.0, 3000.0, 75000.0, 24, 72000.0, 1800000.0, '11111236123', '11111236123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('1', '12', '0', '0', 12.0, 240.0, 20.0, 400.0, 365, 7300.0, 146000.0, '11111232123', '11111232123');
INSERT INTO `b5` VALUES('1', '524', '521', '87', 15.0, 300.0, 60.0, 450.0, 2685, 161100.0, 1208250.0, '11115284254', '11115284254');
INSERT INTO `b5` VALUES('1', '1', '2', '3', 7.0, 400000.0, 1.0, 40000.0, 6, 6.0, 240000.0, '11111234458', '11111234458');
INSERT INTO `b5` VALUES('1', '154', '241', '36', 60.0, 1600.0, 10.0, 10.0, 324, 3240.0, 3240.0, '11118542251', '11118542251');
INSERT INTO `b5` VALUES('1', '25', '21', '31', 1.5, 19.5, 100.0, 1300.0, 200, 20000.0, 260000.0, '11113524254', '11113524254');
INSERT INTO `b5` VALUES('3', '1', '2', '3', 50.0, 1000000.0, 250.0, 250.0, 300, 75000.0, 75000.0, '11111239675', '11111239675');

-- --------------------------------------------------------

--
-- Table structure for table `b6`
--

CREATE TABLE `b6` (
  `b6r1` enum('1','2','3','4') DEFAULT NULL COMMENT 'penjualan hasil pemasaran',
  `b6r2s1` double DEFAULT NULL COMMENT 'Persentase distribusi penangkapan di darat',
  `b6r2s2` double DEFAULT NULL COMMENT 'Persentase distribusi penangkapan di laut',
  `b6r3s1` double DEFAULT NULL COMMENT 'Presentase penjualan di TPI/PPI/PP/Tangkahan',
  `b6r3s2` double DEFAULT NULL COMMENT 'Presentase penjualan di luar TPI/PPI/PP/Tangkahan',
  `b6r3s3` double DEFAULT NULL COMMENT 'Presentase penjualan yang dikonsumsi sendiri',
  `b6r3s4` double DEFAULT NULL COMMENT 'Presentase penjualan yang dibagikan kepada awak kapal',
  `b6r3s5` double DEFAULT NULL COMMENT 'Presentase penjualan lainnya',
  `b6r3s6` double DEFAULT NULL COMMENT 'Jumlah ',
  `b6r4` enum('1','2','3','4','5','6','7','8') DEFAULT NULL COMMENT 'Penjualan terbanyak ke',
  `b6r5s1` enum('1','2') DEFAULT NULL COMMENT 'Pernah mengalami kesulitan',
  `b6r5s2` enum('1','2','3','4','5') DEFAULT NULL COMMENT 'Penyebab kesulitan',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) NOT NULL,
  PRIMARY KEY (`nks`),
  KEY `b6r1` (`b6r1`),
  KEY `nks_b1` (`nks_b1`),
  KEY `b6r5s2` (`b6r5s2`),
  KEY `b6r5s1` (`b6r5s1`),
  KEY `b6r4` (`b6r4`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='VI KETERANGAN PEMASARAN HASIL TANGKAPAN IKAN LAUT';

--
-- Dumping data for table `b6`
--

INSERT INTO `b6` VALUES('1', 100, 0, 80, 10, 0, 0, 10, 100, '1', '1', '4', '11118542251', '11118542251');
INSERT INTO `b6` VALUES('1', 100, 0, 90, 0, 10, 0, 0, 100, '1', '2', NULL, '12111111111', '12111111111');
INSERT INTO `b6` VALUES('1', 100, 0, 0, 100, 0, 0, 0, 100, '8', '2', NULL, '11111234458', '11111234458');
INSERT INTO `b6` VALUES('1', 100, 0, 0, 60, 10, 10, 20, 100, '5', '1', '4', '11113524254', '11113524254');
INSERT INTO `b6` VALUES('1', 100, 0, 0, 70, 30, 0, 0, 100, '5', '2', NULL, '11111239675', '11111239675');
INSERT INTO `b6` VALUES('1', 100, 0, 100, 0, 0, 0, 0, 100, '5', '1', '3', '11119975456', '11119975456');
INSERT INTO `b6` VALUES('1', 100, 0, 48, 0, 2, 1, 0, 51, '7', '1', '4', '11121234123', '11121234123');
INSERT INTO `b6` VALUES('1', 100, 0, 0, 99, 1, 0, 0, 100, '5', '2', NULL, '11111232123', '11111232123');
INSERT INTO `b6` VALUES('1', 100, 0, 100, 0, 0, 0, 0, 100, '7', '2', NULL, '11111236123', '11111236123');
INSERT INTO `b6` VALUES('1', 100, 0, 0, 80, 10, 0, 10, 100, '5', '2', NULL, '11115284254', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b7`
--

CREATE TABLE `b7` (
  `b7r1s1d1t1` int(3) DEFAULT NULL COMMENT 'jumlah pekerja dibayar laki laki',
  `b7r1s1d1t2` int(6) DEFAULT NULL COMMENT ' upah pekerja dibayar laki laki',
  `b7r1s1d2t1` int(3) DEFAULT NULL COMMENT 'jumlah pekerja tidak dibayar laki laki',
  `b7r1s1d2t2` int(6) DEFAULT NULL COMMENT 'perkiraan upah pekerja tidak dibayar laki laki',
  `b7r1s2d1t1` int(3) DEFAULT NULL COMMENT 'jumlah pekerja dibayar perempuan',
  `b7r1s2d1t2` int(6) DEFAULT NULL COMMENT 'upah pekerja dibayar perempuan',
  `b7r1s2d2t1` int(3) DEFAULT NULL COMMENT 'jumlah pekerja tidak dibayar perepuan',
  `b7r1s2d2t2` int(6) DEFAULT NULL COMMENT 'perkiraan upah pekerja tidak dibayar perempuan',
  `b7r2s1d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan bensin pembelian',
  `b7r2s1d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan bensin bukan pembelian',
  `b7r2s1d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan bensin',
  `b7r2s1d2` int(7) DEFAULT NULL COMMENT 'nilai bensin',
  `b7r2s2d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan solar pembelian',
  `b7r2s2d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan solar bukan pembelian',
  `b7r2s2d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan solar',
  `b7r2s2d2` int(7) DEFAULT NULL COMMENT 'nilai solar',
  `b7r2s3d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan minyak tanah pembelian',
  `b7r2s3d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan minyak tanah bukan pembelian',
  `b7r2s3d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan minyak tanah',
  `b7r2s3d2` int(7) DEFAULT NULL COMMENT 'nilai minyak tanah',
  `b7r2s4d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan oli pembelian',
  `b7r2s4d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan oli bukan pembelian',
  `b7r2s4d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan oli',
  `b7r2s4d2` int(7) DEFAULT NULL COMMENT 'nilai oli',
  `b7r2s5d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan garam pembelian',
  `b7r2s5d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan garam bukan pembelian',
  `b7r2s5d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan garam',
  `b7r2s5d2` int(7) DEFAULT NULL COMMENT 'nilai garam',
  `b7r2s6d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan es pembelian',
  `b7r2s6d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan es bukan pembelian',
  `b7r2s6d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan es',
  `b7r2s6d2` int(7) DEFAULT NULL COMMENT 'nilai es',
  `b7r2s7d1t1` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan umpan pembelian',
  `b7r2s7d1t2` decimal(3,1) DEFAULT NULL COMMENT 'banyaknya penggunaan umpan bukan pembelian',
  `b7r2s7d1t3` decimal(4,1) DEFAULT NULL COMMENT 'jumlah penggunaan umpan',
  `b7r2s7d2` int(7) DEFAULT NULL COMMENT 'nilai umpan',
  `b7r2s8d2` int(7) DEFAULT NULL COMMENT 'nilai perbekalan',
  `b7r2s9d2` int(7) DEFAULT NULL COMMENT 'nilai biaya pengangkutan',
  `b7r2s10d2` int(7) DEFAULT NULL COMMENT 'nilai sewa/perkiraan sewa sarama',
  `b7r2s11d2` int(7) DEFAULT NULL COMMENT 'nilai sewa/perkiraan sewa alat tangkap',
  `b7r2s12d2` int(7) DEFAULT NULL COMMENT 'nilai biaya pembuatan siup',
  `b7r2s13d2` int(7) DEFAULT NULL COMMENT 'nilai biaya pembuatan pas biru',
  `b7r2s14d2` int(7) DEFAULT NULL COMMENT 'biaya pungutan',
  `b7r2s15d2` int(7) DEFAULT NULL COMMENT 'biaya tambat kapal',
  `b7r2s16d2` int(7) DEFAULT NULL COMMENT 'pajak tak langsung',
  `b7r2s17d2` int(7) DEFAULT NULL COMMENT 'penyusutan kapal perahu',
  `b7r2s18d2` int(7) DEFAULT NULL COMMENT 'penyusutan alat tangkap',
  `b7r2s19d2` int(7) DEFAULT NULL COMMENT 'biaya lainnya',
  `b7r2s20d2` int(7) DEFAULT NULL COMMENT 'jumlah pengeluaran',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nks`),
  KEY `nks_b1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b7`
--

INSERT INTO `b7` VALUES(0, 0, 2, 600, 0, 0, 0, 0, 25.0, 0.0, 25.0, 22500, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 60000, 0, 0, 0, 250000, 50000, 0, 0, 0, 2000000, 25000, 0, 2407500, '11111234458', '11111234458');
INSERT INTO `b7` VALUES(0, 0, 3, 15, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 15.0, 0.0, 15.0, 98, 0.0, 0.0, 0.0, 0, 5.0, 0.0, 5.0, 190, 0.0, 0.0, 0.0, 0, 0.0, 0.5, 0.5, 12, 0.0, 0.0, 0.0, 0, 120000, 0, 0, 0, 100, 100, 0, 0, 0, 18000, 0, 300, 138800, '11113524254', '11113524254');
INSERT INTO `b7` VALUES(0, 0, 0, 0, 0, 0, 0, 0, 5.0, 0.0, 5.0, 35000, 1.0, 0.0, 1.0, 6500, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.3, 0.0, 0.3, 5000, 3.0, 0.0, 3.0, 10000, 30000, 0, 0, 0, 100000, 25000, 0, 0, 0, 0, 0, 0, 211500, '12111111111', '12111111111');
INSERT INTO `b7` VALUES(5, 125, 1, 100, 0, 0, 0, 0, 3.0, 0.0, 3.0, 24, 15.0, 0.0, 15.0, 12, 0.0, 0.0, 0.0, 0, 4.0, 0.0, 4.0, 56, 0.0, 0.0, 0.0, 0, 1.5, 0.0, 1.5, 38, 0.0, 0.0, 0.0, 0, 120, 25, 500, 0, 0, 150, 0, 0, 0, 0, 0, 700, 1625, '11118542251', '11118542251');
INSERT INTO `b7` VALUES(2, 80000, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 80.0, 0.0, 80.0, 600000, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 52, 15.0, 0.0, 15.0, 330000, 0.0, 0.0, 0.0, 0, 500, 45, 150, 0, 400, 200, 0, 0, 0, 400, 250, 0, 931997, '11111239675', '11111239675');
INSERT INTO `b7` VALUES(18, 70, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 50.0, 0.0, 50.0, 400, 0.0, 0.0, 0.0, 0, 2.0, 0.0, 2.0, 30, 0.0, 0.0, 0.0, 0, 1.0, 0.0, 1.0, 24, 0.0, 0.0, 0.0, 0, 150, 15, 0, 0, 0, 1500, 0, 0, 0, 5, 8, 0, 2132, '11119975456', '11119975456');
INSERT INTO `b7` VALUES(0, 0, 18, 500, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 99.9, 0.0, 120.0, 720, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 20.0, 0.0, 20.0, 100, 0.0, 0.0, 0.0, 0, 300, 450, 450, 0, 0, 200, 250, 0, 100, 4000, 200, 0, 6770, '11121234123', '11121234123');
INSERT INTO `b7` VALUES(0, 0, 3, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 15.0, 0.0, 15.0, 90, 0.0, 0.0, 0.0, 0, 4.0, 0.0, 4.0, 80, 0.0, 0.0, 0.0, 0, 0.5, 0.0, 0.5, 12500, 0.0, 0.0, 0.0, 0, 200, 0, 0, 0, 0, 70, 0, 0, 0, 1250, 0, 0, 14190, '11111232123', '11111232123');
INSERT INTO `b7` VALUES(0, 0, 10, 8800, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 99.9, 0.0, 999.9, 65000, 30.0, 0.0, 30.0, 300, 10.0, 0.0, 10.0, 350, 0.0, 0.0, 0.0, 0, 99.9, 0.0, 110.0, 2650, 0.0, 0.0, 0.0, 0, 17000, 240, 0, 0, 200, 1000, 0, 0, 0, 40000, 0, 0, 126740, '11111236123', '11111236123');
INSERT INTO `b7` VALUES(5, 50, 0, 0, 0, 0, 0, 0, 0.0, 0.0, 0.0, 0, 5.0, 0.0, 5.0, 35, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 99, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 0.0, 0.0, 0.0, 0, 20, 12, 250, 0, 0, 50, 0, 0, 0, 3000, 20, 0, 3486, '11115284254', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b8`
--

CREATE TABLE `b8` (
  `b8r1s1` enum('1','2') DEFAULT NULL COMMENT 'Keanggotaan koperasi',
  `b8r1s2` enum('1','2','3','4','5') DEFAULT NULL COMMENT 'Alasan tidak koperasi',
  `b8r2s1` enum('1','2') DEFAULT NULL COMMENT 'Keanggotaan KUB',
  `b8r2s2` enum('1','2','3','4','5') DEFAULT NULL COMMENT 'Tidak KUB',
  `b8r3s1` enum('1','2') DEFAULT NULL COMMENT 'Nasabah bank',
  `b8r3s2` enum('1','2','3','4','5','6') DEFAULT NULL COMMENT 'Alasan tidak nasabah bank',
  `b8r4s1d1` enum('1','2') DEFAULT NULL COMMENT 'modal sendiri',
  `b8r4s1d2` enum('1','2') DEFAULT NULL COMMENT 'MODAL kredit bank',
  `b8r4s1d3` enum('1','2') DEFAULT NULL COMMENT 'MODAL koperasi',
  `b8r4s1d4` enum('1','2') DEFAULT NULL COMMENT 'MODAL LEMBAGA KEUNGAN NON BANK',
  `b8r4s1d5` enum('1','2') DEFAULT NULL COMMENT 'MODAL PERORANGAN KELUARGA LAINNYA',
  `b8r4s2` enum('1','2') DEFAULT NULL COMMENT 'bUNGA MODAL perorangan',
  `b8r5` enum('1','2','3','4') DEFAULT NULL COMMENT 'kendala',
  `nks` varchar(30) NOT NULL,
  `nks_b1` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nks`),
  KEY `b8r1s1` (`b8r1s1`),
  KEY `b8r1s2` (`b8r1s2`),
  KEY `b8r2s1` (`b8r2s1`),
  KEY `b8r2s2` (`b8r2s2`),
  KEY `b8r3s1` (`b8r3s1`),
  KEY `b8r3s2` (`b8r3s2`),
  KEY `b8r4s1d1` (`b8r4s1d1`),
  KEY `b8r4s1d2` (`b8r4s1d2`),
  KEY `b8r4s1d3` (`b8r4s1d3`),
  KEY `b8r4s1d5` (`b8r4s1d5`),
  KEY `b8r4s2` (`b8r4s2`),
  KEY `b8r5` (`b8r5`),
  KEY `nks_b1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b8`
--

INSERT INTO `b8` VALUES('1', NULL, '1', NULL, '1', NULL, '1', '2', '2', '2', '2', NULL, '1', '11119975456', '11119975456');
INSERT INTO `b8` VALUES('1', NULL, '1', NULL, '2', '2', '2', '2', '1', '2', '2', NULL, '1', '11111239675', '11111239675');
INSERT INTO `b8` VALUES('', '', '', '', '', '', '', '', '', '', '', '', '', '11211111111', '11211111111');
INSERT INTO `b8` VALUES('2', '1', '1', NULL, '2', '5', '2', '2', '2', '2', '2', NULL, '4', '11118542251', '11118542251');
INSERT INTO `b8` VALUES('', '', '', '', '', '', '', '', '', '', '', '', '', '12111111111', '12111111111');
INSERT INTO `b8` VALUES('2', '5', '2', '4', '2', '2', '1', '2', '2', '2', '1', NULL, '4', '11113524254', '11113524254');
INSERT INTO `b8` VALUES('2', '5', '2', '2', '2', '4', '2', '2', '2', '2', '1', NULL, '3', '11111234458', '11111234458');
INSERT INTO `b8` VALUES('2', '1', '1', NULL, '2', '6', '1', '2', '2', '2', '2', NULL, '4', '11121234123', '11121234123');
INSERT INTO `b8` VALUES('2', '5', '2', '4', '2', '4', '1', '2', '2', '1', '2', NULL, '4', '11111232123', '11111232123');
INSERT INTO `b8` VALUES('2', '3', '2', '3', '1', NULL, '1', '2', '2', '2', '1', '2', '1', '11111236123', '11111236123');
INSERT INTO `b8` VALUES('2', '1', '1', NULL, '2', '2', '1', '2', '2', '2', '1', NULL, '4', '11115284254', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `b9`
--

CREATE TABLE `b9` (
  `nks` varchar(30) NOT NULL,
  `rarecase` text NOT NULL,
  `nks_b1` varchar(30) NOT NULL,
  PRIMARY KEY (`nks`),
  KEY `nks_b1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b9`
--

INSERT INTO `b9` VALUES('11119975456', '', '11119975456');
INSERT INTO `b9` VALUES('12111111111', '', '12111111111');
INSERT INTO `b9` VALUES('11118542251', '', '11118542251');
INSERT INTO `b9` VALUES('11211111111', '', '11211111111');
INSERT INTO `b9` VALUES('11111239675', '', '11111239675');
INSERT INTO `b9` VALUES('11113524254', '', '11113524254');
INSERT INTO `b9` VALUES('11111234458', '', '11111234458');
INSERT INTO `b9` VALUES('11121234123', '', '11121234123');
INSERT INTO `b9` VALUES('11111232123', '', '11111232123');
INSERT INTO `b9` VALUES('11111236123', '', '11111236123');
INSERT INTO `b9` VALUES('11115284254', '', '11115284254');

-- --------------------------------------------------------

--
-- Table structure for table `kodejenisikan`
--

CREATE TABLE `kodejenisikan` (
  `Kode` varchar(4) NOT NULL,
  `Keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`Kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kodejenisikan`
--

INSERT INTO `kodejenisikan` VALUES('5101', 'Albakora');
INSERT INTO `kodejenisikan` VALUES('5102', 'Alu-alu/Manggilala/Pucul');
INSERT INTO `kodejenisikan` VALUES('5103', 'Banyar');
INSERT INTO `kodejenisikan` VALUES('5104', 'Baronang');
INSERT INTO `kodejenisikan` VALUES('5105', 'Bawal Hitam');
INSERT INTO `kodejenisikan` VALUES('5106', 'Bawal Putih');
INSERT INTO `kodejenisikan` VALUES('5107', 'Belanak');
INSERT INTO `kodejenisikan` VALUES('5108', 'Beloso');
INSERT INTO `kodejenisikan` VALUES('5109', 'Bentong');
INSERT INTO `kodejenisikan` VALUES('5110', 'Beronang Kuning');
INSERT INTO `kodejenisikan` VALUES('5111', 'Beronang Lingkis');
INSERT INTO `kodejenisikan` VALUES('5112', 'Biji Nangka');
INSERT INTO `kodejenisikan` VALUES('5113', 'Biji Nangka Karang');
INSERT INTO `kodejenisikan` VALUES('5114', 'Cakalang');
INSERT INTO `kodejenisikan` VALUES('5115', 'Cendro');
INSERT INTO `kodejenisikan` VALUES('5116', 'Cucut Botol');
INSERT INTO `kodejenisikan` VALUES('5117', 'Cucut Lanyam');
INSERT INTO `kodejenisikan` VALUES('5118', 'Cucut Martil');
INSERT INTO `kodejenisikan` VALUES('5119', 'Cucut Tikut/Cucut Monyet');
INSERT INTO `kodejenisikan` VALUES('5120', 'Cumi-Cumi');
INSERT INTO `kodejenisikan` VALUES('5121', 'Daun Bambu/Talang-Talang');
INSERT INTO `kodejenisikan` VALUES('5122', 'Ekor Kuning/Pisang-Pisang');
INSERT INTO `kodejenisikan` VALUES('5123', 'Gerot-Gerot');
INSERT INTO `kodejenisikan` VALUES('5124', 'Golok-golok');
INSERT INTO `kodejenisikan` VALUES('5125', 'Gulamah/Tigaw aja');
INSERT INTO `kodejenisikan` VALUES('5126', 'Gurita');
INSERT INTO `kodejenisikan` VALUES('5127', 'Ikan gaji');
INSERT INTO `kodejenisikan` VALUES('5128', 'Ikan Layaran');
INSERT INTO `kodejenisikan` VALUES('5129', 'Ikan Lidah');
INSERT INTO `kodejenisikan` VALUES('5130', 'Ikan Nomei/Lomei');
INSERT INTO `kodejenisikan` VALUES('5131', 'Ikan Pedang');
INSERT INTO `kodejenisikan` VALUES('5132', 'Ikan Sebelah');
INSERT INTO `kodejenisikan` VALUES('5133', 'Ikan Terbang');
INSERT INTO `kodejenisikan` VALUES('5134', 'Japuh');
INSERT INTO `kodejenisikan` VALUES('5135', 'Julung-Julung');
INSERT INTO `kodejenisikan` VALUES('5136', 'Kakap Merah');
INSERT INTO `kodejenisikan` VALUES('5137', 'Kakap Putih');
INSERT INTO `kodejenisikan` VALUES('5138', 'Kapas-kapas');
INSERT INTO `kodejenisikan` VALUES('5139', 'Kembung');
INSERT INTO `kodejenisikan` VALUES('5140', 'Kepiting');
INSERT INTO `kodejenisikan` VALUES('5141', 'Kerang Darah');
INSERT INTO `kodejenisikan` VALUES('5142', 'Kerang Mutiara');
INSERT INTO `kodejenisikan` VALUES('5143', 'Kerapu Balong');
INSERT INTO `kodejenisikan` VALUES('5144', 'Kerapu Bebek');
INSERT INTO `kodejenisikan` VALUES('5145', 'Kerapu Karang');
INSERT INTO `kodejenisikan` VALUES('5146', 'Kerapu Lumpur');
INSERT INTO `kodejenisikan` VALUES('5147', 'Kerapu Sunu');
INSERT INTO `kodejenisikan` VALUES('5148', 'Kuniran');
INSERT INTO `kodejenisikan` VALUES('5149', 'Kurau');
INSERT INTO `kodejenisikan` VALUES('5150', 'Kurisi');
INSERT INTO `kodejenisikan` VALUES('5151', 'Kuro/Senangin');
INSERT INTO `kodejenisikan` VALUES('5152', 'Kuwe');
INSERT INTO `kodejenisikan` VALUES('5153', 'Layang');
INSERT INTO `kodejenisikan` VALUES('5154', 'Layur');
INSERT INTO `kodejenisikan` VALUES('5155', 'Lemadang');
INSERT INTO `kodejenisikan` VALUES('5156', 'Lemuru');
INSERT INTO `kodejenisikan` VALUES('5157', 'Lencam');
INSERT INTO `kodejenisikan` VALUES('5158', 'Lola/Susu Bundar');
INSERT INTO `kodejenisikan` VALUES('5159', 'Lolosi Biru');
INSERT INTO `kodejenisikan` VALUES('5160', 'Madidihang');
INSERT INTO `kodejenisikan` VALUES('5161', 'Manyung');
INSERT INTO `kodejenisikan` VALUES('5162', 'Pari');
INSERT INTO `kodejenisikan` VALUES('5163', 'Peperek Slipmouths');
INSERT INTO `kodejenisikan` VALUES('5164', 'Rajungan');
INSERT INTO `kodejenisikan` VALUES('5165', 'Remis');
INSERT INTO `kodejenisikan` VALUES('5166', 'Rumput Laut');
INSERT INTO `kodejenisikan` VALUES('5167', 'Selanget');
INSERT INTO `kodejenisikan` VALUES('5168', 'Selar');
INSERT INTO `kodejenisikan` VALUES('5169', 'Senuk');
INSERT INTO `kodejenisikan` VALUES('5170', 'Siro');
INSERT INTO `kodejenisikan` VALUES('5171', 'Slengseng');
INSERT INTO `kodejenisikan` VALUES('5172', 'Sotong');
INSERT INTO `kodejenisikan` VALUES('5173', 'Sunglir');
INSERT INTO `kodejenisikan` VALUES('5174', 'Swanggi');
INSERT INTO `kodejenisikan` VALUES('5175', 'Tembang');
INSERT INTO `kodejenisikan` VALUES('5176', 'Tenggiri');
INSERT INTO `kodejenisikan` VALUES('5177', 'Teri');
INSERT INTO `kodejenisikan` VALUES('5178', 'Teripang');
INSERT INTO `kodejenisikan` VALUES('5179', 'Terubuk');
INSERT INTO `kodejenisikan` VALUES('5180', 'Tetengkek');
INSERT INTO `kodejenisikan` VALUES('5181', 'Tiram');
INSERT INTO `kodejenisikan` VALUES('5182', 'Tongkol Abu-abu');
INSERT INTO `kodejenisikan` VALUES('5183', 'Tongkol Komo');
INSERT INTO `kodejenisikan` VALUES('5184', 'Tongkol Krai');
INSERT INTO `kodejenisikan` VALUES('5185', 'Tuna Mata Besar');
INSERT INTO `kodejenisikan` VALUES('5186', 'Tuna Sirip Biru');
INSERT INTO `kodejenisikan` VALUES('5187', 'Ubur-Ubur');
INSERT INTO `kodejenisikan` VALUES('5188', 'Udang Barong/Udang Karang');
INSERT INTO `kodejenisikan` VALUES('5189', 'Udang Dogol/Endeav or Pawn');
INSERT INTO `kodejenisikan` VALUES('5190', 'Udang Krosok');
INSERT INTO `kodejenisikan` VALUES('5191', 'Udang Putih/Jerbung');
INSERT INTO `kodejenisikan` VALUES('5192', 'Udang Ratu/Raja');
INSERT INTO `kodejenisikan` VALUES('5193', 'Udang Windu Jumbo');
INSERT INTO `kodejenisikan` VALUES('5194', 'Udang Lainnya');
INSERT INTO `kodejenisikan` VALUES('5199', 'Ikan Laut Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `optionb1r2`
--

CREATE TABLE `optionb1r2` (
  `kode` enum('02','09') NOT NULL COMMENT 'kode',
  `keterangan` varchar(30) NOT NULL COMMENT 'keterangan',
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb1r2`
--

INSERT INTO `optionb1r2` VALUES('02', 'SUKABUMI');
INSERT INTO `optionb1r2` VALUES('09', 'CIREBON');

-- --------------------------------------------------------

--
-- Table structure for table `optionb1r5`
--

CREATE TABLE `optionb1r5` (
  `KODE` enum('1','2') NOT NULL,
  `KETERANGAN` varchar(10) NOT NULL,
  PRIMARY KEY (`KODE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb1r5`
--


-- --------------------------------------------------------

--
-- Table structure for table `optionb2r5`
--

CREATE TABLE `optionb2r5` (
  `kode` enum('1','2','3','4') NOT NULL COMMENT 'kode',
  `keterangan` varchar(60) NOT NULL COMMENT 'keter',
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb2r5`
--

INSERT INTO `optionb2r5` VALUES('1', 'BERHASIL');
INSERT INTO `optionb2r5` VALUES('2', 'PINDAH BS');
INSERT INTO `optionb2r5` VALUES('3', 'TIDAK DAPAT DIWAWANCARAI');
INSERT INTO `optionb2r5` VALUES('4', 'MENOLAK');

-- --------------------------------------------------------

--
-- Table structure for table `optionb3r3`
--

CREATE TABLE `optionb3r3` (
  `kode` enum('1','2','3') NOT NULL COMMENT 'kode',
  `keterangan` varchar(30) NOT NULL COMMENT 'keterangan',
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb3r3`
--

INSERT INTO `optionb3r3` VALUES('1', 'tidak/belum pernah bersekolah');
INSERT INTO `optionb3r3` VALUES('2', 'masih bersekolah');
INSERT INTO `optionb3r3` VALUES('3', 'tidak bersekolah lagi');

-- --------------------------------------------------------

--
-- Table structure for table `optionb3r4`
--

CREATE TABLE `optionb3r4` (
  `kode` varchar(2) NOT NULL COMMENT 'kode',
  `keterangan` varchar(30) NOT NULL COMMENT 'keterangan',
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb3r4`
--

INSERT INTO `optionb3r4` VALUES('1', 'tidak memiliki ijazah SD');
INSERT INTO `optionb3r4` VALUES('10', 'SMK');
INSERT INTO `optionb3r4` VALUES('11', 'paket C');
INSERT INTO `optionb3r4` VALUES('12', 'D1/D2');
INSERT INTO `optionb3r4` VALUES('13', 'D3/Sarjana Muda');
INSERT INTO `optionb3r4` VALUES('14', 'D4/S1');
INSERT INTO `optionb3r4` VALUES('15', 'S2/S3');
INSERT INTO `optionb3r4` VALUES('2', 'SD/SDLB');
INSERT INTO `optionb3r4` VALUES('3', 'M. Ibtidaiyah');
INSERT INTO `optionb3r4` VALUES('4', 'paket A');
INSERT INTO `optionb3r4` VALUES('5', 'SMP/SMPLB');
INSERT INTO `optionb3r4` VALUES('6', 'M. Tsanawiyah');
INSERT INTO `optionb3r4` VALUES('7', 'paket B');
INSERT INTO `optionb3r4` VALUES('8', 'SMA/SMALB');
INSERT INTO `optionb3r4` VALUES('9', 'M. Aliyah');

-- --------------------------------------------------------

--
-- Table structure for table `optionb4r4`
--

CREATE TABLE `optionb4r4` (
  `kode` enum('1','2','3','4','5') NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb4r4`
--


-- --------------------------------------------------------

--
-- Table structure for table `optionb4r6`
--

CREATE TABLE `optionb4r6` (
  `kode` enum('1','2','3','4','6','5','7','8') NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb4r6`
--

INSERT INTO `optionb4r6` VALUES('1', 'kendaraan motor r 3 +');
INSERT INTO `optionb4r6` VALUES('2', 'kendaraan motor r2');
INSERT INTO `optionb4r6` VALUES('3', 'kendaraan tidak bermotor');
INSERT INTO `optionb4r6` VALUES('4', 'angkutan air');
INSERT INTO `optionb4r6` VALUES('6', 'tenaga hewan');
INSERT INTO `optionb4r6` VALUES('5', 'angkutan udara');
INSERT INTO `optionb4r6` VALUES('7', 'tenaga manusia');
INSERT INTO `optionb4r6` VALUES('8', 'tidak menggunakan');

-- --------------------------------------------------------

--
-- Table structure for table `optionb6r1`
--

CREATE TABLE `optionb6r1` (
  `kode` enum('1','2','3','5') NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb6r1`
--

INSERT INTO `optionb6r1` VALUES('1', 'dalam kab/kota');
INSERT INTO `optionb6r1` VALUES('2', 'luar kab/kota');
INSERT INTO `optionb6r1` VALUES('3', 'luar prov');
INSERT INTO `optionb6r1` VALUES('5', 'luar negeri');

-- --------------------------------------------------------

--
-- Table structure for table `optionb6r4`
--

CREATE TABLE `optionb6r4` (
  `kode` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb6r4`
--

INSERT INTO `optionb6r4` VALUES('1', 'TPI/PPI/PP/Tangkahan');
INSERT INTO `optionb6r4` VALUES('2', 'Eksportir');
INSERT INTO `optionb6r4` VALUES('3', 'Industri Pengolahan ikan');
INSERT INTO `optionb6r4` VALUES('4', 'Hotel, restoran rm');
INSERT INTO `optionb6r4` VALUES('5', 'Pedagang');
INSERT INTO `optionb6r4` VALUES('6', 'koperasi');
INSERT INTO `optionb6r4` VALUES('7', 'langsung');
INSERT INTO `optionb6r4` VALUES('8', 'lainyya');

-- --------------------------------------------------------

--
-- Table structure for table `optionb6r5`
--

CREATE TABLE `optionb6r5` (
  `kode` enum('1','2','3','4','5') NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb6r5`
--

INSERT INTO `optionb6r5` VALUES('1', 'sarana angk terbatas');
INSERT INTO `optionb6r5` VALUES('2', 'kualitas rendah');
INSERT INTO `optionb6r5` VALUES('3', 'produk melimpah');
INSERT INTO `optionb6r5` VALUES('4', 'harga rendah');
INSERT INTO `optionb6r5` VALUES('5', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `optionb8r1s2`
--

CREATE TABLE `optionb8r1s2` (
  `kode` enum('1','2','3','4','5') NOT NULL,
  `keterngan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb8r1s2`
--

INSERT INTO `optionb8r1s2` VALUES('1', 'tidak ada koperasi');
INSERT INTO `optionb8r1s2` VALUES('2', 'proses berbelit');
INSERT INTO `optionb8r1s2` VALUES('3', 'tidak seseuai dgn keb');
INSERT INTO `optionb8r1s2` VALUES('4', 'lokasi sulit dijangkau');
INSERT INTO `optionb8r1s2` VALUES('5', 'lainnta');

-- --------------------------------------------------------

--
-- Table structure for table `optionb8r2s2`
--

CREATE TABLE `optionb8r2s2` (
  `kode` enum('1','2','3','4') NOT NULL,
  `keterngan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb8r2s2`
--

INSERT INTO `optionb8r2s2` VALUES('1', 'belum ada kub');
INSERT INTO `optionb8r2s2` VALUES('2', 'merasa tidak perlu');
INSERT INTO `optionb8r2s2` VALUES('3', 'kurang informasi');
INSERT INTO `optionb8r2s2` VALUES('4', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `optionb8r3s2`
--

CREATE TABLE `optionb8r3s2` (
  `kode` enum('1','2','3','4','5','6') NOT NULL,
  `keterngan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb8r3s2`
--

INSERT INTO `optionb8r3s2` VALUES('1', 'tingkat pendapatan rendah');
INSERT INTO `optionb8r3s2` VALUES('2', 'prosedur rumit');
INSERT INTO `optionb8r3s2` VALUES('3', 'kurang informasi');
INSERT INTO `optionb8r3s2` VALUES('4', 'biaya administrasi tinggi');
INSERT INTO `optionb8r3s2` VALUES('5', 'lokasi jauh');
INSERT INTO `optionb8r3s2` VALUES('6', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `optionb8r5`
--

CREATE TABLE `optionb8r5` (
  `kode` enum('1','2','3','4') NOT NULL,
  `keterngan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionb8r5`
--

INSERT INTO `optionb8r5` VALUES('1', 'bunga tinggi');
INSERT INTO `optionb8r5` VALUES('2', 'waktu sempit');
INSERT INTO `optionb8r5` VALUES('3', 'jml pinjaman terbatas');
INSERT INTO `optionb8r5` VALUES('4', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `optionyatidak`
--

CREATE TABLE `optionyatidak` (
  `kode` enum('1','2') NOT NULL COMMENT 'kode',
  `keterangan` varchar(30) NOT NULL COMMENT 'keterangan',
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionyatidak`
--

INSERT INTO `optionyatidak` VALUES('1', 'ya');
INSERT INTO `optionyatidak` VALUES('2', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `nks` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nks_b1` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` int(1) NOT NULL,
  `waktumulai` text COLLATE latin1_general_ci NOT NULL,
  `waktuselesai` text COLLATE latin1_general_ci NOT NULL,
  `waktu` text COLLATE latin1_general_ci NOT NULL,
  `gpslong` text COLLATE latin1_general_ci NOT NULL,
  `gpslat` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11113524254', '11113524254', 1, '2015/02/01 09:42:41', '2015/02/01 11:14:47', '01:32:05:66', '106.93941175500024', '-6.097635718592238');
INSERT INTO `property` VALUES('11113524254', '11113524254', 1, '2015/02/01 09:42:41', '2015/02/01 11:14:47', '01:32:05:66', '106.93941175500024', '-6.097635718592238');
INSERT INTO `property` VALUES('11113524254', '11113524254', 1, '2015/02/01 09:42:41', '2015/02/01 11:14:47', '01:32:05:66', '106.93941175500024', '-6.097635718592238');
INSERT INTO `property` VALUES('11113524254', '11113524254', 1, '2015/02/01 09:42:41', '2015/02/01 11:14:47', '01:32:05:66', '106.93941175500024', '-6.097635718592238');
INSERT INTO `property` VALUES('11118542251', '11118542251', 1, '2015/02/01 11:45:20', '2015/02/01 12:24:58', '00:39:38:98', '106.93915449957476', '-6.096946521637638');
INSERT INTO `property` VALUES('11118542251', '11118542251', 1, '2015/02/01 11:45:20', '2015/02/01 12:24:58', '00:39:38:98', '106.93915449957476', '-6.096946521637638');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111239675', '11111239675', 1, '2015/02/01 11:09:28', '2015/02/01 11:34:52', '00:25:24:86', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111239675', '11111239675', 1, '2015/02/01 11:09:28', '2015/02/01 11:34:52', '00:25:24:86', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111239675', '11111239675', 1, '2015/02/01 11:09:28', '2015/02/01 11:34:52', '00:25:24:86', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11119975456', '11119975456', 1, '2015/02/01 14:23:17', '2015/02/01 14:48:57', '00:25:39:23', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11121234123', '11121234123', 1, '2015/02/01 09:38:57', '2015/02/01 10:13:13', '00:34:15:39', '106.939264', '-6.101748');
INSERT INTO `property` VALUES('11121234123', '11121234123', 1, '2015/02/01 09:38:57', '2015/02/01 10:13:13', '00:34:15:39', '106.939264', '-6.101748');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11111236123', '11111236123', 1, '2015/02/01 11:28:27', '2015/02/01 12:16:27', '00:48:00:55', '106.9367226', '-6.1045479');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11111236123', '11111236123', 1, '2015/02/01 11:28:27', '2015/02/01 12:16:27', '00:48:00:55', '106.9367226', '-6.1045479');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11111232123', '11111232123', 1, '2015/02/01 10:57:46', '2015/02/01 11:20:43', '00:22:57:41', '106.9390164', '-6.1019672');
INSERT INTO `property` VALUES('11115284254', '11115284254', 1, '2015/02/01 14:54:42', '2015/02/01 15:27:47', '00:33:04:44', '106.93863482251801', '-6.097173141608085');
INSERT INTO `property` VALUES('11111234458', '11111234458', 1, '2015/02/01 09:04:21', '2015/02/01 10:20:23', '01:16:02:51', '106.9342355', '-6.1021867');
INSERT INTO `property` VALUES('11118542251', '11118542251', 1, '2015/02/01 11:45:20', '2015/02/01 12:24:58', '00:39:38:98', '106.93915449957476', '-6.096946521637638');
INSERT INTO `property` VALUES('11113524254', '11113524254', 1, '2015/02/01 09:42:41', '2015/02/01 11:14:47', '01:32:05:66', '106.93941175500024', '-6.097635718592238');
INSERT INTO `property` VALUES('11111239675', '11111239675', 1, '2015/02/01 11:09:28', '2015/02/01 11:34:52', '00:25:24:86', '106.9342355', '-6.1021867');

-- --------------------------------------------------------

--
-- Table structure for table `transactioncapi`
--

CREATE TABLE `transactioncapi` (
  `nks` varchar(30) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  `waktumulai` time DEFAULT NULL,
  `waktuakhir` time DEFAULT NULL,
  `waktutotal` time DEFAULT NULL,
  `GPSlatitude` float(10,6) DEFAULT NULL,
  `GPSLongitude` float(10,6) DEFAULT NULL,
  `nks_b1` varchar(30) NOT NULL,
  PRIMARY KEY (`nks`),
  KEY `nks_b1` (`nks_b1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactioncapi`
--


-- --------------------------------------------------------

--
-- Table structure for table `uploaddata`
--

CREATE TABLE `uploaddata` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nks` varchar(30) NOT NULL,
  `nim` varchar(7) NOT NULL,
  `jenisUpload` enum('insert','update','','') NOT NULL,
  `status` enum('v','x') NOT NULL,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`date`),
  KEY `nks` (`nks`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaddata`
--

