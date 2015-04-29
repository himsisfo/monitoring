-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 04:03 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nohpcad` varchar(12) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nohp`, `nohpcad`, `user_id`) VALUES
(2, 'Amanda Pratama Putra', '087863969334', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `areakerja`
--

CREATE TABLE IF NOT EXISTS `areakerja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nokorwil` varchar(4) NOT NULL,
  `nokortim` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nokorwil` (`nokorwil`,`nokortim`),
  KEY `nokortim` (`nokortim`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `areakerja`
--

INSERT INTO `areakerja` (`id`, `nokorwil`, `nokortim`) VALUES
(1, 'KW01', 'KT202');

-- --------------------------------------------------------

--
-- Table structure for table `areakerjadosen`
--

CREATE TABLE IF NOT EXISTS `areakerjadosen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iddosen` varchar(4) NOT NULL,
  `nokortim` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iddosen` (`iddosen`,`nokortim`),
  KEY `nokortim` (`nokortim`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `areakerjadosen`
--

INSERT INTO `areakerjadosen` (`id`, `iddosen`, `nokortim`) VALUES
(1, 'DS01', 'KT202');

-- --------------------------------------------------------

--
-- Table structure for table `backupwilkerjakorwil`
--

CREATE TABLE IF NOT EXISTS `backupwilkerjakorwil` (
  `nokortim` char(5) NOT NULL COMMENT '3 digit kode, dengan digit pertama bernilai 1(Bandar Lampung), 2(Lampung Tengah), & 3 (Pringsewu) ',
  `nokorwil` varchar(4) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nohpcad` varchar(12) DEFAULT NULL COMMENT 'nomor cadangan, default null.'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='untuk pembagian kortim di masing2 wilayah';

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
  `id` int(10) unsigned NOT NULL,
  `bidang` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id`, `bidang`) VALUES
(1, 'Ekonomi'),
(2, 'Sosial Kependudukan');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE IF NOT EXISTS `broadcast` (
  `idinbox` int(4) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `idpengirim` varchar(12) NOT NULL,
  `idpenerima` varchar(10000) NOT NULL,
  `pesan` varchar(400) NOT NULL,
  PRIMARY KEY (`idinbox`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `iddosen` varchar(4) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `nohp` varchar(12) NOT NULL,
  `nohpcad` varchar(12) NOT NULL,
  `kota` varchar(2) NOT NULL,
  `wilayah` int(1) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`iddosen`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `nama`, `jabatan`, `nohp`, `nohpcad`, `kota`, `wilayah`, `password`, `user_id`, `updated_at`, `created_at`, `image`) VALUES
('DS01', 'Admin ganteng jadi dosen', NULL, '', '', '', 0, '', 1, '2015-02-16 02:28:20', '2015-02-15 01:18:45', ''),
('DS02', 'tesganti nama', NULL, '', '', '', 0, '', 8, '2015-02-15 07:53:07', '2015-02-15 07:22:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `ganti`
--

CREATE TABLE IF NOT EXISTS `ganti` (
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `kode` char(5) NOT NULL,
  `nolama` varchar(12) NOT NULL,
  `nobaru` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `idinbox` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `sender` varchar(12) NOT NULL,
  `message` varchar(480) NOT NULL,
  PRIMARY KEY (`idinbox`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='inbox (dikoneksikan dengan NowSMS)' AUTO_INCREMENT=7967 ;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(10) unsigned NOT NULL,
  `namajabatan` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `namajabatan`) VALUES
(1, 'Dosen'),
(2, 'Korwil'),
(3, 'Kortim'),
(4, 'PCL'),
(5, 'Admin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `idkecamatan` char(3) NOT NULL COMMENT 'kode kecamatan terdiri dari 3 digit angka.',
  `namakecamatan` varchar(20) NOT NULL,
  `nokorwil` varchar(4) NOT NULL COMMENT 'merefer ke tabel korwil',
  `kota` varchar(2) NOT NULL COMMENT 'nilai kota, 1 untuk semarang, 2 untuk solo.',
  UNIQUE KEY `namakecamatan` (`namakecamatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='berisi kode kecamatan yg terpilih sbg pencacahan.';

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idkecamatan`, `namakecamatan`, `nokorwil`, `kota`) VALUES
('010', 'TELUK BETUNG BARAT', 'KW11', '71'),
('020', 'TELUK BETUNG SELATAN', 'KW14', '71'),
('030', 'PANJANG', 'KW14', '71'),
('040', 'TANJUNG KARANG TIMUR', 'KW14', '71'),
('050', 'TELUK BETUNG UTARA', 'KW11', '71'),
('060', 'TANJUNG KARANG PUSAT', 'KW11', '71'),
('070', 'TANJUNG KARANG BARAT', 'KW12', '71'),
('080', 'KEDATON', 'KW13', '71'),
('090', 'SUKARAME', 'KW13', '71'),
('081', 'RAJABASA ', 'KW12', '71'),
('082', 'TANJUNG SENANG', 'KW13', '71'),
('091', 'SUKABUMI', 'KW13', '71'),
('111', 'WAY SEPUTIH', 'KW22', '05'),
('100', 'SEPUTIH MATARAM', 'KW22', '05'),
('080', 'TERBANGGI BESAR', 'KW23', '05'),
('060', 'PUNGGUR', 'KW23', '05'),
('040', 'GUNUNG SUGIH', 'KW23', '05'),
('020', 'KALIREJO', 'KW25', '05'),
('012', 'PUBIAN', 'KW21', '05'),
('050', 'GADING REJO', 'KW33', '10'),
('040', 'PRINGSEWU', 'KW31', '10'),
('130', 'SEPUTIH SURABAYA', 'KW24', '05'),
('010', 'PARDASUKA', 'KW33', '10'),
('020', 'AMBARAWA ', 'KW33', '10'),
('030', 'PAGELARAN', 'KW31', '10'),
('060', 'SUKOHARJO', 'KW32', '10'),
('070', 'BANYUMAS', 'KW32', '10'),
('080', 'ADI LUWIH', 'KW32', '10'),
('071', 'KEMILING', 'KW12', '71');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `idkelurahan` char(3) NOT NULL COMMENT 'kode kelurahan terdiri dari 3 digit angka.',
  `namakelurahan` varchar(20) NOT NULL,
  `idkecamatan` char(3) NOT NULL COMMENT 'merefer ke tabel kecamatan.',
  `kota` varchar(2) NOT NULL COMMENT 'nilai kota, 71 untuk Bandar Lampung, 05 untuk Lampung Tengah, dan 10 untuk Pringsewu',
  KEY `idkelurahan` (`idkelurahan`),
  KEY `idkelurahan_2` (`idkelurahan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='berisi kode kelurahan yg terpilih sbg pencacahan.';

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`idkelurahan`, `namakelurahan`, `idkecamatan`, `kota`) VALUES
('001', 'SUKAMAJU', '010', '71'),
('002', 'KETEGUHAN', '010', '71'),
('003', 'KOTA KARANG', '010', '71'),
('004', 'PERWATA', '010', '71'),
('005', 'BAKUNG', '010', '71'),
('006', 'KURIPAN', '010', '71'),
('007', 'N O GADING', '010', '71'),
('008', 'SUKARAME II', '010', '71'),
('001', 'GEDONG PAKUON', '020', '71'),
('002', 'TALANG', '020', '71'),
('003', 'PESAWAHAN', '020', '71'),
('005', 'KANGKUNG', '020', '71'),
('006', 'BUMI WARAS', '020', '71'),
('007', 'PECOH RAYA', '020', '71'),
('008', 'SUKARAJA', '020', '71'),
('009', 'GARUNTANG', '020', '71'),
('010', 'WAY LUNIK', '020', '71'),
('011', 'KETAPANG', '020', '71'),
('001', 'SRENGSEM', '030', '71'),
('002', 'PANJANG SELATAN', '030', '71'),
('003', 'PANJANG UTARA', '030', '71'),
('004', 'PIDADA', '030', '71'),
('006', 'WAY LAGA', '030', '71'),
('007', 'WAY GUBAK', '030', '71'),
('009', 'KARANG MARITIM', '030', '71'),
('004', 'KEBONJERUK', '040', '71'),
('005', 'SAWAH LAMA', '040', '71'),
('007', 'JAGA BAYA I', '040', '71'),
('001', 'RAWA LAUT', '040', '71'),
('003', 'SUKADANA HAM', '070', '71'),
('002', 'SUSUNAN BARU', '070', '71'),
('004', 'SUKAJAWA', '070', '71'),
('005', 'GEDONG AIR', '070', '71'),
('006', 'SEGALA MIDER', '070', '71'),
('001', 'DURIAN PAYUNG', '060', '71'),
('002', 'GOTONG ROYONG', '060', '71'),
('001', 'SUMBER AGUNG ', '071', '71'),
('003', 'TANJUNG AGUNG', '040', '71'),
('009', 'TANJUNG RAYA', '040', '71'),
('006', 'SAWAH BREBES', '040', '71'),
('008', 'KEDAMAIAN', '040', '71'),
('001', 'KUPANG KOTA', '050', '71'),
('003', 'KUPANG TEBA', '050', '71'),
('004', 'KUPANG RAYA', '050', '71'),
('006', 'SUMUR BATU', '050', '71'),
('007', 'GULAK GALIK', '050', '71'),
('008', 'PENGAJARAN', '050', '71'),
('009', 'SUMUR PUTRI', '050', '71'),
('001', 'SUKAMENANTI', '080', '71'),
('002', 'SIDODADI', '080', '71'),
('003', 'SURABAYA', '080', '71'),
('005', 'KEDATON', '080', '71'),
('006', 'LABUHAN RATU', '080', '71'),
('004', 'PERUMNAS WAY HALIM', '080', '71'),
('002', 'RAJABASA', '081', '71'),
('009', 'KAMPUNG BARU', '080', '71'),
('003', 'RAJABASA RAYA', '081', '71'),
('013', 'SEPANG JAYA', '080', '71'),
('003', 'GUNUNG SULAH', '090', '71'),
('004', 'WAY HALIM PERMAI', '090', '71'),
('005', 'SUKARAME', '090', '71'),
('002', 'JAGABAYA III', '091', '71'),
('009', 'WAY DADI', '090', '71'),
('010', 'HARAPAN JAYA', '090', '71'),
('006', 'ADI JAYA', '080', '05'),
('008', 'YUKUM JAYA', '080', '05'),
('009', 'INDRA PUTRA SUBING', '080', '05'),
('010', 'KARANG ENDAH', '080', '05'),
('011', 'NAMBAH DADI', '080', '05'),
('012', 'ONO HARJO', '080', '05'),
('001', 'NUNGGAL REJO', '060', '05'),
('013', 'TERBANGGI BESAR', '080', '05'),
('007', 'TOTO KATON', '060', '05'),
('008', 'TANGGUL ANGIN', '060', '05'),
('015', 'BANDAR JAYA TIMUR', '080', '05'),
('010', 'MOJO PAHIT', '060', '05'),
('016', 'BANDAR JAYA BARAT', '080', '05'),
('011', 'ASTO MULYO', '060', '05'),
('012', 'SIDO MULYO', '060', '05'),
('030', 'BUYUT UTARA', '040', '05'),
('029', 'BUYUT ILIR', '040', '05'),
('028', 'PUTRA BUYUT', '040', '05'),
('027', 'BUYUT UDIK', '040', '05'),
('016', 'SINAR NEGERI', '012', '05'),
('014', 'SEGALA MIDER', '012', '05'),
('012', 'NEGERI KEPAYUNGAN', '012', '05'),
('009', 'GUNUNG HAJI', '012', '05'),
('007', 'SANGUN RATU', '012', '05'),
('005', 'PAYUNG REJO', '012', '05'),
('003', 'PAYUNG MAKMUR', '012', '05'),
('001', 'KOTA BATU', '012', '05'),
('022', 'PONCO WARNO', '020', '05'),
('020', 'WATU AGUNG', '020', '05'),
('019', 'SUKOSARI', '020', '05'),
('018', 'SRI DADI', '020', '05'),
('001', 'PAJANG', '010', '05'),
('005', 'SRIWEDARI', '010', '05'),
('007', 'PURWOSARI', '010', '05'),
('008', 'SONDAKAN', '010', '05'),
('009', 'KERTEN', '010', '05'),
('011', 'KARANGASEM', '010', '05'),
('017', 'SRI MULYO', '020', '05'),
('008', 'KALI DADI', '020', '05'),
('007', 'KALI WUNGU', '020', '05'),
('005', 'BALAI REJO', '020', '05'),
('004', 'KALI REJO', '020', '05'),
('002', 'SEMANGGI', '030', '05'),
('001', 'JOYOSURAN', '030', '05'),
('004', 'BALURWATI', '030', '05'),
('006', 'KAUMAN', '030', '05'),
('008', 'KEDUNG LUMBU', '030', '05'),
('009', 'SANGKRAH', '030', '05'),
('017', 'TERBANGGI SUBING', '040', '05'),
('019', 'TERBANGGI AGUNG', '040', '05'),
('021', 'KOMERING AGUNG', '040', '05'),
('022', 'KOMERING PUTIH', '040', '05'),
('023', 'PAJAR BULAN', '040', '05'),
('024', 'SEPUTIH JAYA', '040', '05'),
('026', 'GUNUNG SUGIH', '040', '05'),
('001', 'MANGKUBUMEN', '050', '05'),
('003', 'KEPRABON', '050', '05'),
('006', 'KESTALAN', '050', '05'),
('008', 'GILINGAN', '050', '05'),
('009', 'MANAHAN', '050', '05'),
('010', 'SUMBER', '050', '05'),
('011', 'NUSUKAN', '050', '05'),
('012', 'KADIPIRO', '050', '05'),
('013', 'BANYU ANYAR', '050', '05'),
('002', 'KOTA BARU', '040', '71'),
('011', 'CAMPANG RAYA', '040', '71'),
('010', 'BATU PUTUK', '050', '71'),
('009', 'GUNUNG TERANG', '070', '71'),
('004', 'PELITA', '060', '71'),
('005', 'PALAPA', '060', '71'),
('006', 'KALIAWI', '060', '71'),
('007', 'KELAPA TIGA', '060', '71'),
('008', 'TANJUNG KARANG', '060', '71'),
('010', 'PASIR GINTUNG', '060', '71'),
('002', 'KEDAUNG', '071', '71'),
('004', 'BERINGIN RAYA', '071', '71'),
('005', 'SUMBER REJO', '071', '71'),
('006', 'KEMILING PERMAI I', '071', '71'),
('007', 'LANGKA PURA', '071', '71'),
('004', 'RAJABASA JAYA', '081', '71'),
('001', 'LABUHAN DALAM', '082', '71'),
('002', 'TANJUNG SENANG', '082', '71'),
('003', 'WAY KANDIS', '082', '71'),
('004', 'PERUMNAS WAY KANDIS', '082', '71'),
('001', 'JAGABAYA II', '091', '71'),
('003', 'TANJUNG BARU', '091', '71'),
('004', 'KALIBALAU KENCANA', '091', '71'),
('005', 'SUKABUMI INDAH', '091', '71'),
('006', 'SUKABUMI', '091', '71'),
('001', 'FAJAR MATARAM', '100', '05'),
('007', 'WIRATA AGUNG MATARAM', '100', '05'),
('003', 'REJOSARI MATARAM', '100', '05'),
('004', 'SUMBER AGUNG MATARAM', '100', '05'),
('005', 'UTAMA JAYA MATARAM', '100', '05'),
('008', 'VARIA AGUNG', '100', '05'),
('010', 'BUMI SETIA MATARAM', '100', '05'),
('011', 'DHARMA AGUNG MATARAM', '100', '05'),
('013', 'BANJAR AGUNG MATARAM', '100', '05'),
('002', 'SRI BUDAYA', '111', '05'),
('004', 'SRI BUSONO', '111', '05'),
('006', 'SANGGA BUANA', '111', '05'),
('001', 'GAYA BARU ENAM', '130', '05'),
('002', 'RAWA BETIK', '130', '05'),
('012', 'GAYA BARU TUJUH', '130', '05'),
('014', 'SRI KATON', '130', '05'),
('015', 'GAYA BARU DUA', '130', '05'),
('016', 'GAYA BARU TIGA', '130', '05'),
('019', 'SRI MULYA JAYA', '130', '05'),
('020', 'GAYA BARU SATU', '130', '05'),
('022', 'MATARAM ILIR', '130', '05'),
('005', 'KEDAUNG', '010', '10'),
('007', 'RANTAU TIJANG', '010', '10'),
('008', 'PARDASUKA', '010', '10'),
('013', 'WARGO MULYO', '010', '10'),
('014', 'PUJODADI', '010', '10'),
('015', 'SUKOREJO', '010', '10'),
('018', 'SIDODADI', '010', '10'),
('001', 'KRESNOMULYO', '020', '10'),
('002', 'SUMBER AGUNG', '020', '10'),
('003', 'AMBARAWA', '020', '10'),
('004', 'AMBARAWA BARAT', '020', '10'),
('006', 'JATI AGUNG', '020', '10'),
('007', 'MARGODADI', '020', '10'),
('001', 'CANDI RETNO', '030', '10'),
('002', 'TANJUNG DALAM ', '030', '10'),
('004', 'KARANGSARI', '030', '10'),
('005', 'GUMUK MAS', '030', '10'),
('006', 'PATOMAN', '030', '10'),
('007', 'PAGELARAN', '030', '10'),
('008', 'SUKARATU', '030', '10'),
('010', 'LUGUSARI', '030', '10'),
('011', 'PANUTAN', '030', '10'),
('012', 'BUMI RATU', '030', '10'),
('014', 'KEMILIN', '030', '10'),
('015', 'NEGLASARI', '030', '10'),
('017', 'GIRI TUNGGAL', '030', '10'),
('018', 'MARGOSARI', '030', '10'),
('020', 'PAMENANG', '030', '10'),
('021', 'FAJAR MULIA', '030', '10'),
('023', 'PASIR UKIR', '030', '10'),
('024', 'GUMUK REJO ', '030', '10'),
('007', 'MARGAKAYA', '040', '10'),
('008', 'WALUYOJATI', '040', '10'),
('009', 'PAJAR ESUK', '040', '10'),
('011', 'SIDOHARJO', '040', '10'),
('012', 'PODOMORO', '040', '10'),
('013', 'BUMI ARUM', '040', '10'),
('015', 'PAJAR AGUNG', '040', '10'),
('016', 'PRINGSEWU UTARA', '040', '10'),
('017', 'PRINGSEWU SELATAN', '040', '10'),
('018', 'PRINGSEWU BARAT', '040', '10'),
('019', 'PRINGSEWU TIMUR', '040', '10'),
('020', 'REJOSARI', '040', '10'),
('021', 'BUMI AYU', '040', '10'),
('001', 'PAREREJO', '050', '10'),
('002', 'BLITAREJO', '050', '10'),
('004', 'BULUKARTO', '050', '10'),
('005', 'WATES', '050', '10'),
('006', 'BULUREJO', '050', '10'),
('007', 'TAMBAK REJO', '050', '10'),
('008', 'WONODADI', '050', '10'),
('009', 'GADING REJO', '050', '10'),
('010', 'TEGALSARI', '050', '10'),
('011', 'TULUNG AGUNG', '050', '10'),
('012', 'JOGYAKARTA', '050', '10'),
('013', 'KEDIRI', '050', '10'),
('014', 'MATARAM', '050', '10'),
('015', 'WONOSARI', '050', '10'),
('002', 'SINAR BARU', '060', '10'),
('003', 'SUKOHARJO I', '060', '10'),
('004', 'SUKOHARJO II', '060', '10'),
('006', 'PANGGUNG REJO', '060', '10'),
('007', 'PANDANSARI', '060', '10'),
('008', 'PANDAN SURAT', '060', '10'),
('009', 'SUKOHARJO III', '060', '10'),
('011', 'SUKOYOSO', '060', '10'),
('012', 'SILIWANGI', '060', '10'),
('001', 'WAYA KRUI', '070', '10'),
('003', 'NUSA WUNGU', '070', '10'),
('005', 'BANJARREJO', '070', '10'),
('006', 'SRIWUNGU', '070', '10'),
('007', 'BANYUWANGI', '070', '10'),
('022', 'WARIGINSARI BARAT ', '060', '10'),
('009', 'SINAR MULIA', '070', '10'),
('008', 'BANYUMAS', '070', '10'),
('005', 'BANDUNG BARU', '080', '10'),
('006', 'WARINGINSARI TIMUR', '080', '10'),
('008', 'ENGGAL REJO', '080', '10'),
('010', 'ADI LUWIH', '080', '10'),
('011', 'PURWODADI', '080', '10');

-- --------------------------------------------------------

--
-- Table structure for table `kortim`
--

CREATE TABLE IF NOT EXISTS `kortim` (
  `nama` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nohpcad` varchar(13) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nim` varchar(7) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nokortim` varchar(5) NOT NULL,
  PRIMARY KEY (`nokortim`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kortim`
--

INSERT INTO `kortim` (`nama`, `nohp`, `nohpcad`, `user_id`, `updated_at`, `created_at`, `nim`, `image`, `nokortim`) VALUES
('KT202', '', NULL, 5, '2015-02-15 15:16:45', '2015-02-15 00:36:49', '', '', 'KT202');

-- --------------------------------------------------------

--
-- Table structure for table `korwil`
--

CREATE TABLE IF NOT EXISTS `korwil` (
  `nokorwil` varchar(4) NOT NULL,
  `nim` varchar(7) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `nohpcad` varchar(12) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`nokorwil`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='1 korlap & 5 korwil semarang AND 2 korwil surakarta.';

--
-- Dumping data for table `korwil`
--

INSERT INTO `korwil` (`nokorwil`, `nim`, `nama`, `nohp`, `nohpcad`, `image`, `user_id`, `updated_at`, `created_at`) VALUES
('KW01', '', 'Mukhlis', '', '', NULL, 11, '2015-02-15 08:42:28', '2015-02-15 08:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `kota` varchar(2) NOT NULL,
  `namakota` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota`, `namakota`) VALUES
('71', 'BANDAR LAMPUNG'),
('05', 'LAMPUNG TENGAH'),
('10', 'PRINGSEWU');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_06_100141_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nbs`
--

CREATE TABLE IF NOT EXISTS `nbs` (
  `nokortim` varchar(5) NOT NULL,
  `kota` varchar(2) NOT NULL,
  `idkecamatan` char(3) NOT NULL,
  `idkelurahan` char(3) NOT NULL,
  `nbs` char(4) NOT NULL DEFAULT '',
  `listing` int(1) NOT NULL DEFAULT '0',
  `b2r1` int(3) DEFAULT NULL,
  `b2r2` int(4) DEFAULT NULL,
  `b2r3` int(4) DEFAULT NULL,
  `b2r4` int(4) DEFAULT NULL,
  `b2r5` int(4) DEFAULT NULL,
  `b2r6` int(4) DEFAULT NULL,
  `b2r7` int(4) DEFAULT NULL,
  `b2r8` int(4) DEFAULT NULL,
  `cacah` int(2) NOT NULL DEFAULT '0',
  `cacahnr` int(2) NOT NULL DEFAULT '0',
  `maxcacah` int(2) NOT NULL DEFAULT '40',
  `bebanListing` int(3) NOT NULL DEFAULT '0' COMMENT 'Jumlah ruta berdasarkan hasil SP 2010',
  `progressListing` int(3) NOT NULL DEFAULT '0' COMMENT 'banyak ruta yang sudah dilisting',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `nokortim` (`nokortim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='untuk listing (0 belum, 1 sudah) & cleaning (cacah,maxcacah)' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `idoutbox` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `reciever` varchar(12) NOT NULL,
  `message` varchar(480) NOT NULL,
  PRIMARY KEY (`idoutbox`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='tabel untuk outbox, jadi pesan yang dikirim akan masuk ke si' AUTO_INCREMENT=9708 ;

-- --------------------------------------------------------

--
-- Table structure for table `pcl`
--

CREATE TABLE IF NOT EXISTS `pcl` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `namapcl` int(11) NOT NULL,
  `nohp` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nim` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `idproblem` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `sender` varchar(12) NOT NULL,
  `problem` varchar(10000) NOT NULL,
  `tanggapan` varchar(10000) NOT NULL,
  PRIMARY KEY (`idproblem`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='inbox (dikoneksikan dengan NowSMS)' AUTO_INCREMENT=128 ;

-- --------------------------------------------------------

--
-- Table structure for table `progrec`
--

CREATE TABLE IF NOT EXISTS `progrec` (
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(8) NOT NULL,
  `kota` int(1) NOT NULL,
  `idkec` char(3) NOT NULL,
  `idkel` char(3) NOT NULL,
  `nbs` char(4) NOT NULL,
  `nourutart` int(2) unsigned zerofill DEFAULT NULL,
  `kegiatan` varchar(17) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '$2y$10$uskmBHbhTD5pgoBLkSOz1.B1iqRjFZ7/XBRX9.ACuAbxFMq.osG.e',
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_bidang` int(10) unsigned NOT NULL,
  `id_jabatan` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `daerah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kerabat` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_bidang` (`id_bidang`),
  KEY `id_jabatan` (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `id_bidang`, `id_jabatan`, `image`, `description`, `alamat`, `daerah`, `twitter`, `kerabat`) VALUES
(1, 'adminganteng', '$2y$10$z0XcwFWwHnDtcCWt4srfh.m.ZQb4NoTwvhNy6WLALA80sZHt5mWMu', '', '2xaxgLhEAvl7c1XlSTdUVMNDAHrS6sz4yy11x6nicgzUwYuMGBGwOmtHAtB7', '0000-00-00 00:00:00', '2015-02-16 03:05:11', 1, 1, 'assets/image//5d862032dc4046f349b1b5278bc61d964bb5b6df.jpg', 'Saya admin ganteng, saya bisa menjelma menjadi siapa saja', 'Bonasel 2', '', '', ''),
(3, 'pkl', '$2y$10$uskmBHbhTD5pgoBLkSOz1.B1iqRjFZ7/XBRX9.ACuAbxFMq.osG.e', 'pkl54@stis.ac.id', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 5, '', '', '', '', '', ''),
(5, 'KT202', '$2y$10$oaV0Dls2FtoHu.1e4r2rjesUTqcOP3kZ/1gWiH7FLYAGDAxS5N6fm', 'kt202@stis.ac.id', 'YWUokGfcCsEzlVlPyfslrYmvCmdBXiR8QTSkwgaSvuxAdvPsS8N4CVExW6mU', '2015-02-15 00:36:49', '2015-02-15 04:02:24', 1, 3, '', 'Aku Hanyalah manusia biasa yang tidak suka berputus asa', 'Bonasel 2', 'NTB', '@suparjo', ''),
(7, 'dosen1', '$2y$10$jGt8tckmyIZP2yZ1LidNfOf.Wi1u.A1zQDYQegW.SpTlezp4MRUXG', 'mandes95@gmail.com', 'cLMExqoIBoqPYKa46yYNp3rdlRdjBDOr6i1K0sQCoauGdOXvxxSt4E3hB0K7', '2015-02-15 01:18:44', '2015-02-15 02:57:15', 1, 1, '', 'Test Update profile', 'Gang Ayub', 'NTB', '@mandes95', '087863969334'),
(8, 'tesdaftar', '$2y$10$KrNhYwv5ZNZ4Ed0wwJ1fSuzR2QkoxDAj1D0DQiIt2VMpnGwryar7S', 'alfaradiobarkah@gmail.com', 'GRmqUvBEpQg7JB23xIbMKiTDdTiHMfohJWsuhYdIIhnmDN4WYotpGBA5a2jZ', '2015-02-15 07:22:41', '2015-02-15 08:38:05', 1, 1, 'assets/image//3abf93381e1b1703c731fda9ceab0ec196848610.jpg', '', '', '', '', ''),
(11, 'teskorwil', '$2y$10$UPlywi2/ojUKdFhRlN.dButIdD8PesF8veMJTTG663eLu.lZ5x0ie', 'mandes95@yahoo.com', 'AELBcZV9KM6ti62InLmQMq7zfaPg7wbPnyebKMYWlwh7L8LzMCCraajdG6iC', '2015-02-15 08:40:22', '2015-02-16 02:20:33', 1, 2, 'assets/image//27690a2361319c303ddd9ee2bfcd755f83ae7b71.png', 'Nama Gue Mukhlis, gw tampan', 'barkah family', 'Lampung', '@mukehelis', '087863969334');

-- --------------------------------------------------------

--
-- Table structure for table `wilkerjakorwil`
--

CREATE TABLE IF NOT EXISTS `wilkerjakorwil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nokorwil` varchar(4) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `nohpcad` varchar(12) DEFAULT NULL,
  `nokortim` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nokorwil` (`nokorwil`),
  KEY `nokorwil_2` (`nokorwil`),
  KEY `nokorwil_3` (`nokorwil`),
  KEY `nokortim` (`nokortim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `areakerja`
--
ALTER TABLE `areakerja`
  ADD CONSTRAINT `areakerja_ibfk_1` FOREIGN KEY (`nokortim`) REFERENCES `kortim` (`nokortim`) ON UPDATE CASCADE;

--
-- Constraints for table `areakerjadosen`
--
ALTER TABLE `areakerjadosen`
  ADD CONSTRAINT `areakerjadosen_ibfk_1` FOREIGN KEY (`iddosen`) REFERENCES `dosen` (`iddosen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `areakerjadosen_ibfk_2` FOREIGN KEY (`nokortim`) REFERENCES `kortim` (`nokortim`) ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `kortim`
--
ALTER TABLE `kortim`
  ADD CONSTRAINT `kortim_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pcl`
--
ALTER TABLE `pcl`
  ADD CONSTRAINT `pcl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
