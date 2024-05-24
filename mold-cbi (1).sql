-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 05:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mold-cbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'Damang Maulana Wirapraja', '$2y$10$6KtSXDf9CYxiSHw/1hpx9ej7HQINAGZ1vsiuxOO2bdl/iye.owJPy', 'admin'),
(2, 'damang', '$2y$10$6KtSXDf9CYxiSHw/1hpx9ej7HQINAGZ1vsiuxOO2bdl/iye.owJPy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_mold`
--

CREATE TABLE `detail_mold` (
  `Id` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Mold_Id` int(10) DEFAULT NULL,
  `Part_Name` varchar(255) NOT NULL,
  `Gambar_Mold` varchar(255) NOT NULL,
  `Deskripsi_Mold` varchar(255) NOT NULL,
  `Gambar_Part` varchar(255) NOT NULL,
  `Deskripsi_Part` varchar(255) NOT NULL,
  `Gambar_Runner` varchar(255) NOT NULL,
  `Deskripsi_Runner` varchar(255) NOT NULL,
  `Tanggal_Update` date NOT NULL,
  `Posisi_Mold` varchar(255) NOT NULL,
  `Drawing_Produk` varchar(255) NOT NULL,
  `Subject_Mold` varchar(10) NOT NULL,
  `Subject_Tool` varchar(255) NOT NULL,
  `Subject_Mesin` varchar(255) NOT NULL,
  `Subject_Produk` varchar(10) NOT NULL,
  `Subject_Proses` varchar(10) NOT NULL,
  `Subcount_Suplier` varchar(50) NOT NULL,
  `Validasi_Ke` varchar(10) NOT NULL,
  `LK3` varchar(10) NOT NULL,
  `Spesifikasi` varchar(255) NOT NULL,
  `Hasil_Verifikasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_mold`
--

INSERT INTO `detail_mold` (`Id`, `User_ID`, `Mold_Id`, `Part_Name`, `Gambar_Mold`, `Deskripsi_Mold`, `Gambar_Part`, `Deskripsi_Part`, `Gambar_Runner`, `Deskripsi_Runner`, `Tanggal_Update`, `Posisi_Mold`, `Drawing_Produk`, `Subject_Mold`, `Subject_Tool`, `Subject_Mesin`, `Subject_Produk`, `Subject_Proses`, `Subcount_Suplier`, `Validasi_Ke`, `LK3`, `Spesifikasi`, `Hasil_Verifikasi`) VALUES
(23, 2, 1, 'Cover N12 D', '1715844989_9879cee8795a49013cb8.jpg', 'Berat : 10grm , Dimensi : 12cm x 5cm', '1715844989_445d5e2aaa982c2e7284.jpg', 'Berat : 10gram', '1715844989_8625d857ff2cb1b7dd46.jpg', 'Berat banget', '2024-05-16', 'jakarta', '1715844989_dd5fc9e3eec015422785.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'PT KIM', '1', 'ya', 'bagus', 0),
(24, 2, NULL, 'Cover NS40 GS type #1', '1715845749_e4ab22c9f7afccde8968.csv', 'ya', '1715845749_a5120b6b82b30fc5f3ce.csv', 'ya', '1715845749_7350e4af34d4629d6e8f.csv', 'ya', '2024-05-16', 'jakarta', '1715845748_9c291ebcb95c4352aa77.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'PT KIM', '3', 'ya', 'bagus', 0),
(25, 2, NULL, 'Cover N12 D', '1715846426_5d56f6882fea6ed45988.csv', 'ya', '1715846426_2434980c90b784b46bcb.csv', 'ya', '1715846426_a9b411bbe5d598e58a4b.csv', 'ya', '2024-05-16', 'Bekasi', '1715846426_671154244a658948ba46.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'pt tim', '4', 'ya', 'ya', 0),
(26, 2, NULL, 'Cover NS40 GS type #2', '1715846645_5dcc1cab8d7cacfc4045.csv', 'ya', '1715846645_1c00b5e00e27551d4388.csv', 'ya', '1715846645_4c3c8473dc6c002a0cd0.csv', 'ya', '2024-05-16', 'Banten', '1715846645_87e337fc003ab0d7d084.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'pt kim', 'asodh', 'ndksnf', 'sda', 0),
(27, 2, 2, 'Cover NS40 GS type #1', '1715846817_816e0298c3ca32660087.csv', 'ya', '1715846818_7be3ce8ab2ddcc23a991.csv', 'ya', '1715846818_772f3541a99d2da9f79d.csv', 'ya', '2024-05-16', 'bekasi', '1715846817_b78be9bcfe870225cf05.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'ya', '5', 'ya', 'ya', 0),
(28, 2, 4, 'Cover NS40 GS type #3 ', '1716266498_c130624e4682f60c5af6.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716266498_df56a4141617157ddbc5.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716266498_a9da84ca7f2113fc9628.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '2024-05-21', 'jakarta', '1716266498_8c623924e87c1579e15e.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'PT KIC', '1', 'ya', 'good', 0),
(29, 2, 2, 'Cover NS40 GS type #1', '1716273459_e34b9a5a7f5e48b8b052.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716273459_c9aef0c0331d498674fb.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716273459_71a738ef558ed5bb2fd1.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '2024-05-21', 'jakarta', '1716273459_847c0a70c0be7232af1b.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'PT KIM', '1', '2', 'Dimensi : 12cm x 14cm , Berat : 12gram', 0),
(30, 2, 3, 'Cover NS40 GS type #2', '1716273900_818f6da352371a4a83ec.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716273900_1b3824b19b60d4727a49.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716273900_975a5baea4cc8de9c5f3.png', 'Dimensi : 12cm x 14cm , Berat : 12gram', '2024-05-21', 'jakarta', '1716273900_a2b2f2bec153f5b047e0.pdf', 'baru', 'baru', 'baru', 'baru', 'baru', 'pt tim', '5', 'ya', 'Dimensi masih bagus', 0),
(31, 2, 2, 'Cover NS40 GS type #1', '1716513490_65d8ea0dbab97ebf18ed.jpeg', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716513490_3223a60d7975595630bc.jpeg', 'Dimensi : 12cm x 14cm , Berat : 12gram', '1716513490_21991a1e57ca3495a599.jpeg', 'Dimensi : 12cm x 14cm , Berat : 12gram', '2024-05-24', 'jakarta', '1716513490_7617a986d53469c4af68.pdf', 'modifikasi', 'baru', 'modifikasi', 'baru', 'baru', 'PT KIM', '1', 'tidak', 'masih bagus', 2),
(32, 2, 52, 'Handle MF', '1716516638_07997755e5b8f9c7b76f.jpeg', 'dimensi 12cm x 12cm', '1716516638_2321c9f7cdcc2421948d.jpeg', 'dimensi 12cm x 12cm', '1716516638_36e2e5d5bf94a2d3c132.jpeg', 'dimensi 12cm x 12cm', '2024-05-24', 'jakarta', '1716516638_e4e9d01245ed6852a1a7.pdf', 'modifikasi', 'modifikasi', 'modifikasi', 'baru', 'baru', 'PT.KIM', '1', 'tidak', 'dimensi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2024-05-13-084555', 'App\\Database\\Migrations\\CreateMoldCbiTable', 'default', 'App', 1715841228, 1),
(3, '2024-05-15-061317', 'App\\Database\\Migrations\\DetailMold', 'default', 'App', 1715841228, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mold_cbi`
--

CREATE TABLE `mold_cbi` (
  `Mold_ID` int(11) UNSIGNED NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Part_Name` varchar(50) DEFAULT NULL,
  `Part_Number` varchar(50) DEFAULT NULL,
  `Lampiran_Dimensi_PDF` varchar(255) DEFAULT NULL,
  `Lampiran_Gambar` varchar(255) DEFAULT NULL,
  `Tanggal_Update` date DEFAULT NULL,
  `Kode_Mold` int(11) DEFAULT NULL,
  `Mold_Maker` varchar(50) DEFAULT NULL,
  `Posisi_Mold` varchar(255) DEFAULT NULL,
  `Subject_Mold` varchar(10) DEFAULT NULL,
  `Subject_Tool` varchar(10) DEFAULT NULL,
  `Subject_Mesin` varchar(10) DEFAULT NULL,
  `Subject_Produk` varchar(10) DEFAULT NULL,
  `Subject_Proses` varchar(10) DEFAULT NULL,
  `Nama_VerifMold` varchar(50) DEFAULT NULL,
  `Tipe_VerifMold` varchar(50) DEFAULT NULL,
  `Subcount_VerifMold` varchar(50) DEFAULT NULL,
  `Verifikasi_VerifMold` varchar(50) DEFAULT NULL,
  `LK3_VerifMold` varchar(50) DEFAULT NULL,
  `Spesifikasi` varchar(255) DEFAULT NULL,
  `Hasil_Verifikasi` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mold_item`
--

CREATE TABLE `mold_item` (
  `NO.` int(11) NOT NULL,
  `ITEM` varchar(255) DEFAULT NULL,
  `MADE_IN` varchar(255) DEFAULT NULL,
  `STATUS` varchar(255) DEFAULT NULL,
  `Material` varchar(255) DEFAULT NULL,
  `SUPPLIER_2022` varchar(255) DEFAULT NULL,
  `SUPPLIER_2023` varchar(255) DEFAULT NULL,
  `SUPPLIER_2024` varchar(255) DEFAULT NULL,
  `TONNAGE` decimal(10,2) DEFAULT NULL,
  `PART` decimal(10,2) DEFAULT NULL,
  `RUNNER` decimal(10,2) DEFAULT NULL,
  `CYCLE_TIME` decimal(10,2) DEFAULT NULL,
  `DIMENSI_MOLD` varchar(255) DEFAULT NULL,
  `CAVITY` int(11) DEFAULT NULL,
  `CORE` int(11) DEFAULT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mold_item`
--

INSERT INTO `mold_item` (`NO.`, `ITEM`, `MADE_IN`, `STATUS`, `Material`, `SUPPLIER_2022`, `SUPPLIER_2023`, `SUPPLIER_2024`, `TONNAGE`, `PART`, `RUNNER`, `CYCLE_TIME`, `DIMENSI_MOLD`, `CAVITY`, `CORE`, `KETERANGAN`) VALUES
(1, 'Cover N12 D', 'Import', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '210.00', '262.00', '0.01', '75.00', '450X540X357', 1, 1, 'Masspro'),
(2, 'Cover NS40 GS type #1', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '160.00', '0.13', '0.01', '75.00', '400X400X420', 1, 1, 'Masspro'),
(3, 'Cover NS40 GS type #2', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '160.00', '119.00', '0.01', '75.00', '450X400X415', 1, 1, 'Masspro'),
(4, 'Cover NS40 GS type #3 ', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '160.00', '119.00', '0.01', '75.00', '400X400X420', 1, 1, 'Masspro'),
(5, 'Cover NS40 CBI type #1 ', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '160.00', '119.00', '0.01', '75.00', '400X400X390', 1, 1, 'Masspro'),
(6, 'Cover NS40 CBI type #2', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '160.00', '119.00', '4.30', '75.00', '450X400X386', 1, 1, 'Masspro'),
(7, 'Cover NS40MF DH NEW', 'QMOLD 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '220.00', '207.60', '2.40', '75.00', '385x350x400', 1, 1, 'Belum Masspro'),
(8, 'Cover NS60 GS type #1 ', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '180.00', '0.16', '4.50', '75.00', '450X400X415', 1, 1, 'Masspro'),
(9, 'Cover NS60 GS type #2', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '180.00', '127.00', '4.50', '75.00', '450X400X420', 1, 1, 'Masspro'),
(10, 'Cover NS60 CBI type #1', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '180.00', '127.00', '4.50', '75.00', '500X400X395', 1, 1, 'Masspro'),
(11, 'Cover NS60 CBI type #2 ', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '180.00', '127.00', '4.50', '75.00', '500X400X395', 1, 1, 'Masspro'),
(12, 'Cover N50 Handle CBI Butterfly #1 CHC1', '2006', 'INACTIVE 2010', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '210.00', '0.01', '4.50', '65.00', '500X400X420', 1, 1, 'old model'),
(13, 'Cover N50 Handle CBI Butterfly #2 CHC2', '2006', 'INACTIVE 2010', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '210.00', '140.00', '4.50', '65.00', '500X400X420', 1, 1, 'old model'),
(14, 'Cover N50 Handle GS #1', '2007', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '210.00', '0.16', '0.01', '75.00', '400X400X390', 1, 1, 'Masspro'),
(15, 'Cover N50 Handle GS #2', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '210.00', '135.00', '4.50', '75.00', '400X400X390', 1, 1, 'Masspro'),
(16, 'Cover N50 Handle GS #3', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '210.00', '135.00', '4.50', '75.00', '400X400X390', 1, 1, 'Masspro'),
(17, 'Cover N50 NON HANDLE/GS', 'SEMYUNG  2007    ', 'INACTIVE 2012', 'PP.Copolymer', 'PCL', '                                                                                                                                                                                       ', 'PCL', '350.00', '0.27', '4.50', '75.00', '700X600X365', 2, 2, 'old model Mold milik GS (pinjam)'),
(18, 'Cover 55D23 ', 'QMOLD 2014', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.17', '8.50', '70.00', '450X450X280', 2, 2, 'Masspro'),
(19, 'Cover N70 #1', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '220.00', '0.19', '6.20', '75.00', '550X450X405', 1, 1, 'Masspro'),
(20, 'Cover N70 #2', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '220.00', '178.00', '6.20', '75.00', '445X450X350', 1, 1, 'Masspro'),
(21, 'Cover N100', '2009', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '350.00', '0.36', '10.40', '75.00', '800X650X505', 1, 1, 'Masspro'),
(22, 'Cover N120', '2009', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '350.00', '0.05', '11.70', '75.00', '800X650X505', 1, 1, 'Masspro'),
(23, 'Cover N150', '2009', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.47', '9.30', '75.00', '800X650X505', 1, 1, 'Masspro'),
(24, 'Cover N200', '2009', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '2.18', '0.03', '75.00', '800X650X550', 1, 1, 'Masspro'),
(25, 'Cover 12N24', '2007', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '180.00', '0.19', '0.00', '65.00', '400X400X440', 1, 1, 'Masspro'),
(26, 'Cover DIN MF 544', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.23', '6.30', '65.00', '400X450X380', 1, 1, 'Masspro'),
(27, 'Cover DIN MF 555', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.26', '6.10', '65.00', '450X450X395', 1, 1, 'Masspro'),
(28, 'Cover DIN MF 566', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.29', '7.50', '65.00', '400X400X450', 1, 1, 'Masspro'),
(29, 'Cover MF LN3   New', 'QMOLD 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '200.00', '331.10', '10.30', '0.00', '415x450x500', 1, 1, 'Belum Masspro'),
(30, 'Cover DIN MF 588', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '220.00', '0.35', '6.10', '65.00', '450X400580', 1, 1, 'Masspro'),
(31, 'Cover JIS MF NS40', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '220.00', '0.15', '70.00', '65.00', '350X400X400', 2, 2, 'Masspro'),
(32, 'Cover JIS MF NS60', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.17', '7.10', '65.00', '350X400X450', 2, 2, 'Masspro'),
(33, 'Cover JIS MF N50/NS50', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '250.00', '299.40', '8.40', '65.00', '400X415X450', 2, 2, 'Masspro'),
(34, 'Cover JIS MF N70 ZZ', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '250.00', '0.27', '9.20', '65.00', '500X400X400', 1, 1, 'Masspro'),
(35, 'Cover N100 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '250.00', '0.37', '12.60', '76.80', '600X550X500', 1, 1, 'Masspro'),
(36, 'Cover N120 MF', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '250.00', '0.60', '15.60', '70.00', '750X600X415', 1, 1, 'Masspro'),
(37, 'Cover N150 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '250.00', '0.46', '20.20', '85.00', '750X600X425', 1, 1, 'Masspro'),
(38, 'Cover N200 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.63', '19.30', '70.10', '750X700X600', 1, 1, 'Masspro'),
(39, 'Cover 55D23 MF', 'QMOLD 2013', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.28', '8.00', '80.00', '450X450X375', 1, 1, 'Masspro'),
(40, 'Cover BCI-4D200-MF', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.59', '0.00', '85.00', '500X650X405', 1, 1, 'Masspro'),
(41, 'Cover SG100CT ', 'QMOLD 2020', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '180.00', '0.26', '0.01', '85.00', '390x500x550', 1, 1, 'Masspro'),
(42, 'Cover MCB QT5Z', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '100.00', '28.70', '4.30', '30.00', '350X300X220', 1, 1, 'Masspro'),
(43, 'Cover MCB QM5Z.3B', 'PCL 2013', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '100.00', '39.40', '3.60', '30.00', '350X300X220', 1, 1, 'Masspro'),
(44, 'Cover TZ5S MCB KIT / FAMILY', 'PCL 2017', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '220.00', '0.04', '0.00', '43.00', '350X350X330', 1, 1, 'Masspro'),
(45, 'Handle N50/70 GS type Butterfly CHC', '2007', 'INACTIVE 2010', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '210.00', '0.16', '0.01', '75.00', '400X400X390', 1, 1, 'Masspro'),
(46, 'Handle N50/70 GS type C1', '2007', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '120.00', '10.80', '11.40', '55.00', '450X360X300', 4, 4, 'Masspro'),
(47, 'Handle N50/70 GS type C2', '2018', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '120.00', '10.80', '11.40', '55.00', '450X360X300', 4, 4, 'Masspro'),
(48, 'Handle NS40', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '130.00', '44.00', '5.00', '90.00', '400X450X310', 2, 2, 'Masspro'),
(49, 'Handle NS60', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '130.00', '55.00', '6.50', '90.00', '450X450X350', 2, 2, 'Masspro'),
(50, 'Handle NS40/60 GS type', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '80.00', '8.00', '6.00', '90.00', '350X400X270', 2, 2, 'Masspro'),
(51, 'Handle 12N24', '2007', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '120.00', '10.90', '4.40', '55.00', '400X400X255', 2, 2, 'Masspro'),
(52, 'Handle MF', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '50.00', '9.00', '3.30', '30.00', '300X320X250', 2, 2, 'Masspro'),
(53, 'Handle N150/N200 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '22.50', '5.40', '30.00', '400X400X255', 2, 2, 'Masspro'),
(54, 'Handle N100 NEW', 'PCL 2020', 'NEW / INACTIVE', 'PC.Makrolon 2405 Transfaran', 'TOP LINE', 'CBI', 'CBI', '100.00', '13.70', '4.20', '45.70', '340x350x320', 4, 0, 'Belum Masspro'),
(55, 'Vent Plug F18-22', '2007', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '220.00', '0.00', '25.40', '50.00', '350X525X350', 8, 8, 'Masspro'),
(56, 'Vent Plug G18-A50 C-1', '2006', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '130.00', '0.00', '25.00', '50.00', '445X350X425', 10, 10, 'Masspro'),
(57, 'Vent Plug G18-A50 C-2', '2008', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '210.00', '38.00', '25.00', '50.00', '445X350X425', 10, 10, 'Masspro'),
(58, 'Vent Plug G18-A50 C-3', 'QMOLD 2017', 'ACTIVE', 'PP.Copolymer', 'TOP LINE', 'MFA', 'MFA', '120.00', '3.00', '11.80', '50.00', '450X450X280', 10, 10, 'Masspro'),
(59, 'Vent Plug G30-A9', '2007', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '220.00', '0.01', '25.00', '50.00', '500X360X430', 8, 8, 'Masspro'),
(60, 'Vent Plug MF 16-22C BLKNEM', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '50.00', '0.19', '6.20', '35.00', '450X300X225', 6, 6, 'Masspro'),
(61, 'Vent Plug MCB TZ5S', 'PCL 2012', 'ACTIVE', 'LLDPE Asrene UI 2650', 'PCL', 'PCL', 'PCL', '80.00', '4.90', '3.40', '20.00', '350X300X220', 2, 2, 'Masspro'),
(62, 'Vent Plug LN3  17.22 New', 'QMOLD 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '200.00', '14.60', '8.80', '10.00', '335x350x550', 8, 8, 'Belum Masspro'),
(63, 'Top Cover 12N24', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '120.00', '0.21', '4.40', '45.00', '400X450X290', 2, 2, 'Masspro'),
(64, 'Top Cover DIN MF 544', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '184.00', '2.80', '40.00', '400X450X290', 2, 2, 'Masspro'),
(65, 'Top Cover DIN MF 555', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '5.00', '2.70', '40.00', '450X450X300', 2, 2, 'Masspro'),
(66, 'Top Cover DIN MF 566', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '65.00', '4.20', '40.00', '450X320X500', 2, 2, 'Masspro'),
(67, 'Top Cover DIN MF 588', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '82.00', '4.30', '40.00', '450X320X550', 2, 2, 'Masspro'),
(68, 'Top Cover JIS MF NS40', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.04', '3.50', '40.00', '400X275X350', 2, 2, 'Masspro'),
(69, 'Top Cover JIS MF NS60', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.05', '3.00', '40.00', '400X275X455', 2, 2, 'Masspro'),
(70, 'Top Cover JIS MF N50/NS 50', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.09', '3.50', '40.00', '450X320X500', 2, 2, 'Masspro'),
(71, 'Top Cover JIS MF N70 ZZ', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '79.00', '3.90', '45.00', '550X450X320', 2, 2, 'Masspro'),
(72, 'Top Vent Plug MF 16-22C BLKNEM', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '50.00', '0.00', '2.50', '20.00', '255X230X175', 8, 8, 'Masspro'),
(73, 'Top Cover N120 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '180.70', '2.20', '65.00', '500X450X340', 2, 2, 'Masspro'),
(74, 'Top Cover N150 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '230.00', '5.50', '65.00', '500X500X370', 2, 2, 'Masspro'),
(75, 'Top Cover N200 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '344.20', '3.50', '68.00', '750X700X600', 2, 2, 'Masspro'),
(76, 'Top Cover N100 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '238.00', '2.70', '68.00', '600X550X500', 2, 2, 'Masspro'),
(77, 'Top Cover MCB QT5Z', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'Natamas', 'Natamas', '80.00', '3.00', '3.50', '20.00', '350X300X220', 2, 2, 'Masspro'),
(78, 'Top Cover MCB QM5Z.3B', 'PCL 2013', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '4.00', '4.00', '25.00', '350X300X220', 1, 1, 'Masspro'),
(79, 'Top Cover 55D23 MF', 'QMOLD 2013', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '180.00', '0.11', '8.50', '70.00', '450X450X280', 2, 2, 'Masspro'),
(80, 'Top Cover BCI-4D200-MF', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.37', '4.00', '65.00', '700X385X245', 1, 1, 'Masspro'),
(81, 'Top Cover MF LN3 New', 'QMOLD 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '200.00', '122.80', '5.80', '0.00', '340x500x500', 2, 2, 'Belum Masspro'),
(82, 'Container 12N24 ', '2007', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '400.00', '355.40', '2.20', '65.00', '600X650X560', 1, 1, 'Masspro'),
(83, 'Container N12 D', 'Import', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.69', '4.50', '90.00', '600X650X560', 1, 1, 'Masspro'),
(84, 'Container NS40 2K #1 OE', 'SEMYUNG 2007', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '350.00', '0.51', '2.50', '90.00', '700X630X650', 1, 1, 'Masspro'),
(85, 'Container NS40 2K #2  / LC203 (2015)', 'SEMYUNG 2008', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '450.00', '0.52', '4.50', '90.00', '700X700X660', 1, 1, 'Modif rib ke  LC203 (2015)'),
(86, 'Container NS40 2K #3 / LC220  (2021)', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '450.00', '0.54', '4.50', '90.00', '700X700X660', 1, 1, 'Modif rib ke  LC220  (2021)'),
(87, 'Container NS40 2k #4', 'QMOLD 2017', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '350.00', '0.50', '2.40', '70.00', '700X750X665', 1, 1, 'Masspro'),
(88, 'Container NS60 #1', 'SEMYUNG 2007', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '350.00', '0.57', '2.60', '75.00', '700X750X640', 1, 1, 'Masspro'),
(89, 'Container NS60 #2', 'SEMYUNG 2008', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '550.00', '0.55', '2.30', '90.00', '700X750X665', 1, 1, 'Masspro'),
(90, 'Container NS50 MF', 'SEMYUNG 2006', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '450.00', '723.60', '4.20', '90.00', '750X800X665', 1, 1, 'Masspro'),
(91, 'Container N50 LC-209 #1', 'SEMYUNG 2008', 'INACTIVE 2022', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.80', '3.60', '75.00', '800X700X640', 1, 1, 'InActive karena Dimensi tidak sama'),
(92, 'Container N50 LC-209 #2', 'Pandawa 2014', 'INACTIVE 2017', 'PP.Copolymer', 'YAUP', 'YAUP', 'YAUP', '360.00', '0.79', '5.00', '85.00', '500X500X543', 1, 1, 'Inactive mold rusak cavity retak'),
(93, 'Container N50 LC-209 #3', 'QMOLD 2019', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '350.00', '0.80', '0.00', '90.00', '650X680X595', 1, 1, 'Masspro'),
(94, 'Container N50 LC-257 #2', 'SEMYUNG 2008', 'INACTIVE 2022', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '801.00', '3.60', '75.00', '800X700X640', 1, 1, 'InActive karena Dimensi tidak sama'),
(95, 'Container N50 LC-257 #3', 'QMOLD 2014', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '400.00', '0.84', '4.00', '75.00', '650X680X595', 1, 1, 'Masspro'),
(96, 'Container N50 LC-257 #4 ', 'QMOLD 2020', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '400.00', '0.79', '3.80', '75.00', '670x550x600', 1, 1, 'Masspro'),
(97, 'Container N50 LC-313 #1                      ', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '757.60', '3.70', '75.00', '800X700X640', 1, 1, 'Masspro'),
(98, 'Container N50 LC-375 #1', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '350.00', '0.74', '3.00', '90.00', '750X800X665', 1, 1, 'Masspro'),
(99, 'Container N70 #2/ LC421', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.90', '2.40', '75.00', '800X700X640', 1, 1, 'Masspro'),
(100, 'Container N70 #1/LC300 #1', 'SEMYUNG 2008', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.88', '2.90', '75.00', '800X700X640', 1, 1, 'Modif area PW miror  Juli  2021/Cancel'),
(101, 'Container N70 LC300 #2', 'PCL 2016', 'INACTIVE2021', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '360.00', '0.88', '2.90', '75.00', '700X750X665', 1, 1, 'Inactive mold rusak cavity retak'),
(102, 'Container N70LC283 ', 'PCL 2019', 'ACTIVE', 'PP.Copolymer', 'API / AUP', 'API / AUP', 'API / AUP', '360.00', '0.88', '0.00', '90.00', '650X680X595', 1, 1, 'Masspro'),
(103, 'Container N70LC375 ', 'QMOLD 2019', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '360.00', '0.86', '0.00', '70.00', '703X700X550', 1, 1, 'Masspro'),
(104, 'Container N100', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'YAUP', 'YAUP', 'YAUP', '450.00', '1.22', '2.90', '90.00', '950X890X690', 1, 1, 'Masspro'),
(105, 'Container N120', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'YAUP', 'YAUP', 'YAUP', '850.00', '1.41', '7.20', '90.00', '950X890X690', 1, 1, 'Masspro'),
(106, 'Container N150', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'YAUP', 'YAUP', 'YAUP', '1050.00', '1.69', '3.20', '110.00', '1100X990X737', 1, 1, 'Masspro'),
(107, 'Container N200', 'SEMYUNG 2009', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '850.00', '2.18', '3.60', '111.00', '1100X1060X743', 1, 1, 'Masspro'),
(108, 'Container SG100CT ', 'QMOLD 2020', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '880.00', '1.49', '0.00', '120.00', '650x600x692', 1, 1, 'Masspro'),
(109, 'Container N50 MF LC 375 & LC329', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '350.00', '0.70', '4.00', '90.00', '600X650X560', 1, 1, 'Masspro'),
(110, 'Container N50MF LC310', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'DYNAPLAST 5', 'DYNAPLAST 5', 'DYNAPLAST 5', '350.00', '0.73', '4.68', '84.00', '650X730X612', 1, 1, 'Masspro'),
(111, 'Container N50MF LC275 Core / LC252', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'DYNAPLAST 5', 'DYNAPLAST 5', 'DYNAPLAST 5', '350.00', '0.73', '4.49', '84.00', '650X700X612', 1, 1, 'Masspro'),
(112, 'Container N50MFLC210', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'DYNAPLAST 5', 'DYNAPLAST 5', 'DYNAPLAST 5', '350.00', '0.76', '4.63', '84.00', '650X730X612', 1, 1, 'Masspro'),
(113, 'Container N50MFLC243 Core ', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'PCL Pinjam', 'PCL Pinjam', 'PCL Pinjam', '350.00', '0.00', '0.00', '84.00', '650X730X612', 1, 1, 'Masspro'),
(114, 'Container 55D23 MF', 'PCL 2013', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '360.00', '0.75', '4.00', '75.00', '500X500X543', 1, 1, 'Masspro'),
(115, 'Container N70MF ZZ', 'SEMYUNG 2007', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '859.00', '3.50', '90.00', '800X800X655', 1, 1, 'Modif area PW miror  Des 2021'),
(116, 'Container N70MFLC329 ', 'PCL 2019', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '360.00', '0.00', '0.00', '90.00', '700X750X665', 1, 1, 'Masspro'),
(117, 'Container N70MFLC386 ', 'QMOLD 2019', 'ACTIVE', 'PP.Copolymer', 'QMOLD ', 'QMOLD ', 'QMOLD ', '480.00', '0.83', '4.50', '75.00', '650X800X705', 1, 1, 'Masspro'),
(118, 'Container N100 MF', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '450.00', '12.00', '3.50', '90.00', '750X700X600', 1, 1, 'Masspro'),
(119, 'Container BCI-4D200-MF', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '880.00', '0.98', '0.00', '110.00', '1030X800X684', 1, 1, 'Masspro'),
(120, 'Container DIN MF 544', '2007', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.57', '3.50', '85.00', '650X680X595', 1, 1, 'Masspro'),
(121, 'Container DIN MF 555', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.61', '3.60', '75.00', '655X680X605', 1, 1, 'Masspro'),
(122, 'Container DIN MF 566', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.64', '3.40', '75.00', '720X680X615', 1, 1, 'Masspro'),
(123, 'Container DIN MF 588', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '350.00', '0.71', '2.80', '75.00', '750X650X625', 1, 1, 'Masspro'),
(124, 'Container MCB QT5Z', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '120.00', '93.20', '4.60', '65.00', '255X288X282', 1, 1, 'Masspro'),
(125, 'Container MCB QM5Z.3B', 'PCL 2012', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '130.00', '126.70', '3.50', '56.00', '255X288X282', 1, 1, 'Masspro'),
(126, 'Container TZ6V MCB', 'PCL 2016', 'ACTIVE', 'PP.Copolymer', 'TIM ', 'TIM ', 'TIM ', '250.00', '0.00', '0.00', '87.00', '450X450X280', 1, 1, 'Masspro'),
(127, 'Ball Acid Indicator blue & red', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', '30.00', '12.00', '8.20', '20.00', '150X200X190', 16, 16, 'Masspro'),
(128, 'Battery indicator Holder (CAP)', 'PCL 2011', 'ACTIVE', 'Acrilyc,Pmma', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', '30.00', '32.00', '4.50', '20.00', '300X200X195', 16, 16, 'Masspro'),
(129, 'Battery indicator Body', 'PCL 2011', 'ACTIVE', ' Sumipex 88364', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', 'PRESHION ENGPLAS', '30.00', '45.00', '4.20', '20.00', '300X300X310', 8, 8, 'Masspro'),
(130, 'Terminal Protector', 'PCL 2011', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '3.00', '3.20', '20.00', '300X350X245', 4, 4, 'Masspro'),
(131, 'Terminal CAP B10 Positif New', 'PCL 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '1.54', '10.28', '4.00', '300X350X245', 8, 8, 'Belum Masspro'),
(132, 'Terminal CAP B10 Negatif New', 'PCL 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '1.52', '10.28', '4.00', '300X350X245', 8, 8, 'Belum Masspro'),
(133, 'Terminal CAP B7   Positif New', 'PCL 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '1.35', '10.26', '4.00', '300X350X245', 8, 8, 'Belum Masspro'),
(134, 'Terminal CAP B7   Negatif New', 'PCL 2020', 'NEW / INACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '1.40', '10.26', '4.00', '300X350X245', 8, 8, 'Belum Masspro'),
(135, 'Mold Tere MCB / TX04', 'TAIWAN 2012', 'ACTIVE', 'PP.Copolymer', 'TIM', 'TIM', 'TIM', '80.00', '1.00', '16.80', '30.00', '300X300X220', 4, 4, 'Masspro'),
(136, 'Mold Tere MCB QM5B', 'EDC 2014', 'ACTIVE', 'PP.Copolymer', 'QMOLD  ', 'QMOLD  ', 'QMOLD  ', '50.00', '1.00', '20.30', '30.00', '250X250X250', 4, 4, 'Masspro'),
(137, 'Acid Bottle TZ5S', 'QPI2017', 'ACTIVE', 'HDPE 70% + LLDPE 30%', 'QPI', 'Natamas', 'Natamas', '1.00', '33.50', '0.00', '40.00', '155x200x150', 1, 1, 'Masspro'),
(138, 'Acid Bottle TZ7V', 'QPI2017', 'ACTIVE', 'HDPE 70% + LLDPE 30%', 'QPI', 'Natamas', 'Natamas', '1.00', '34.50', '0.00', '40.00', '155x300x150', 1, 1, 'Masspro'),
(139, 'Rope Handle RP 365', 'PCL 2017', 'ACTIVE', 'HDPE Vene 5218', 'PCM', 'PCM', 'PCM', '50.00', '8.00', '1.45', '65.00', '250X250X215', 2, 2, 'Masspro'),
(140, 'Insert Core Cont N50MF329 Core ', 'PCL 2018', 'ACTIVE', 'PP.Copolymer', 'PCM', 'PCM', 'PCM', '350.00', '0.73', '0.00', '84.00', '400x550x320', 1, 1, 'Masspro'),
(141, 'Insert Core Spacer 6D & 8D', 'PCM 2020', 'ACTIVE', 'PP.Copolymer', 'PCL', 'PCL', 'PCL', '80.00', '0.00', '0.00', '0.00', '250X250X215', 1, 0, 'Masspro'),
(142, 'Container N100LC393 New', 'QMOLD 2023', 'ACTIVE', 'PP.Copolymer', '', 'QMOLD  ', 'QMOLD  ', '650.00', '1.20', '5.00', '110.00', '950X890X690', 1, 1, 'Masspro'),
(143, 'Container NS60LC232 New', 'QMOLD 2023', 'ACTIVE', 'PP.Copolymer', '', 'QMOLD  ', 'QMOLD  ', '350.00', '600.50', '5.00', '85.00', '550X500X660', 1, 1, 'Masspro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Company`, `Address`, `role`) VALUES
(1, 'raja', '123', 'TIM', 'BEKASI', 'user'),
(2, 'Fauzi', '$2y$10$2iT/uhfRYJLElpJcfbJU3eqTYP16fFE9sTw.w68p6wVd2stxrjCFy', 'PCL', 'JAKARTA', 'user'),
(3, 'adam', '$2y$10$D3/ObR3TqYslJ1J92Mt/qul6LCCgBYVEeIA4sReijmepSBlnk7MSG', 'QMOLD', 'KARAWANG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_mold`
--
ALTER TABLE `detail_mold`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_user_id` (`User_ID`),
  ADD KEY `fk_mold_id` (`Mold_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mold_cbi`
--
ALTER TABLE `mold_cbi`
  ADD PRIMARY KEY (`Mold_ID`),
  ADD KEY `mold_cbi_User_ID_foreign` (`User_ID`);

--
-- Indexes for table `mold_item`
--
ALTER TABLE `mold_item`
  ADD PRIMARY KEY (`NO.`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_mold`
--
ALTER TABLE `detail_mold`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mold_cbi`
--
ALTER TABLE `mold_cbi`
  MODIFY `Mold_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_mold`
--
ALTER TABLE `detail_mold`
  ADD CONSTRAINT `fk_mold_id` FOREIGN KEY (`Mold_Id`) REFERENCES `mold_item` (`NO.`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Constraints for table `mold_cbi`
--
ALTER TABLE `mold_cbi`
  ADD CONSTRAINT `mold_cbi_User_ID_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
