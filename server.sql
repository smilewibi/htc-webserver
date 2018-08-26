-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2015 at 06:02 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `server`
--
CREATE DATABASE IF NOT EXISTS `server` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `server`;

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `No_Registrasi` varchar(32) NOT NULL,
  `Kelompok` varchar(32) NOT NULL,
  `Program` varchar(32) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Tanggal` varchar(32) NOT NULL,
  `Waktu` varchar(32) NOT NULL,
  `Absensi` varchar(32) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`No`, `No_Registrasi`, `Kelompok`, `Program`, `Nama`, `Tanggal`, `Waktu`, `Absensi`) VALUES
(4, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '5 September 2015 ', '14:52:28 ', 'Hadir'),
(5, '1030016', 'Ibrahim', 'MIPA', 'Regina norma amanda anang putri', '5 September 2015 ', '14:53:05 ', 'Hadir'),
(6, '1030016', 'Ibrahim', 'MIPA', 'Isnaindah jasmine pertiwi', '5 September 2015 ', '14:54:38 ', 'Hadir'),
(7, '1010006', 'Al-Maidah', 'English', 'Lufthanza Rhama Almabruri', '5 September 2015 ', '16:32:06 ', 'Hadir'),
(8, '1010006', 'Al-Maidah', 'English', 'Tsania syanaya nafiatus sakinah', '5 September 2015 ', '16:32:29 ', 'Hadir'),
(9, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '5 September 2015 ', '17:07:30 ', 'Hadir'),
(10, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '5 September 2015 ', '17:07:34 ', 'Hadir'),
(11, '1010006', 'Al-Maidah', 'English', 'Tholut sulton akbar', '5 September 2015 ', '17:36:36 ', 'Alpa'),
(12, '1010006', 'Al-Maidah', 'English', 'Roihan Asti Ardiansyah', '5 September 2015 ', '17:36:51 ', 'Alpa'),
(13, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '5 September 2015 ', '17:37:01 ', 'Hadir'),
(14, '1010008', 'An-Nisa', 'English', 'Rahmad fajar wiguna', '8 September 2015 ', '14:15:38 ', 'Hadir'),
(15, '1010008', 'An-Nisa', 'English', 'Rahmad fajar wiguna', '8 September 2015 ', '14:38:03 ', 'Hadir'),
(16, '1010008', 'An-Nisa', 'English', 'Romy athaya arzaky', '8 September 2015 ', '14:38:43 ', 'Hadir'),
(17, '1010011', 'Al-Hijr', 'English', 'Lufthanza Rhama Almabruri', '8 September 2015 ', '14:39:27 ', 'Hadir'),
(18, '1030002', 'Ar-Rad', 'English', 'Intan nafi''ah ramadhany', '8 September 2015 ', '14:50:36 ', 'Hadir'),
(19, '1030002', 'Ar-Rad', 'English', 'Isnaindah jasmine pertiwi', '8 September 2015 ', '14:50:43 ', 'Hadir'),
(20, '1030002', 'Ar-Rad', 'English', 'Ricke amelia', '8 September 2015 ', '14:59:54 ', 'Hadir'),
(21, '1030002', 'Ar-Rad', 'English', 'Regina norma amanda anang putri', '8 September 2015 ', '15:34:12 ', 'Hadir'),
(22, '1020027', 'Yunus', 'English', 'Irsyad raditya', '8 September 2015 ', '16:39:23 ', 'Hadir'),
(23, '1020008', 'Al-A''raf', 'English', 'Juniar tri wicaksono', '8 September 2015 ', '19:03:22 ', 'Hadir'),
(24, '1020008', 'Al-A''raf', 'English', 'Abdul aziz amansyah', '8 September 2015 ', '19:06:02 ', 'Hadir'),
(25, '1020008', 'Al-A''raf', 'English', 'Krisna Wijaya', '8 September 2015 ', '19:06:57 ', 'Hadir'),
(26, '1020028', 'At-Taubah', 'All-Mapel', 'Trisnanto wahyu P', '8 September 2015 ', '19:20:11 ', 'Hadir'),
(27, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '8 September 2015 ', '19:20:24 ', 'Hadir'),
(28, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '8 September 2015 ', '19:20:44 ', 'Hadir'),
(29, '1020001', 'Hud', 'English', 'Galang Aji Santosa', '8 September 2015 ', '19:24:37 ', 'Hadir'),
(30, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '8 September 2015 ', '20:42:34 ', 'Hadir'),
(31, '1020001', 'Hud', 'English', 'Happief eqi firmanda', '8 September 2015 ', '20:57:10 ', 'Hadir'),
(32, '1020001', 'Hud', 'English', 'Athoriq palevi akhrom', '8 September 2015 ', '20:57:20 ', 'Hadir'),
(35, '1020001', 'Hud', 'English', 'Lailatul mahriza', '8 September 2015 ', '20:58:38 ', 'Hadir'),
(44, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '9 September 2015 ', '13:23:25 ', 'Hadir'),
(45, '1030002', 'Ar-Rad', 'English', 'Regina norma amanda anang putri', '9 September 2015 ', '14:55:24 ', 'Hadir'),
(46, '1030002', 'Ar-Rad', 'English', 'Intan nafi''ah ramadhany', '9 September 2015 ', '14:57:46 ', 'Hadir'),
(47, '1030002', 'Ar-Rad', 'English', 'Isnaindah jasmine pertiwi', '9 September 2015 ', '14:57:53 ', 'Hadir'),
(48, '1030002', 'Ar-Rad', 'English', 'Ricke amelia', '9 September 2015 ', '15:02:10 ', 'Hadir'),
(49, '1010006', 'Al-Maidah', 'English', 'Tsania syanaya nafiatus sakinah', '9 September 2015 ', '16:04:54 ', 'Hadir'),
(51, '1010006', 'Al-Maidah', 'English', 'Tholut sulton akbar', '9 September 2015 ', '16:39:35 ', 'Hadir'),
(52, '1010006', 'Al-Maidah', 'English', 'Roihan Asti Ardiansyah', '9 September 2015 ', '16:39:51 ', 'Hadir'),
(53, '1020005', 'Al-Anam', 'English', 'Intan Choiriyah Wibi Anisah', '9 September 2015 ', '16:42:32 ', 'Hadir'),
(55, '1020005', 'Al-Anam', 'English', 'Yesi Agista', '9 September 2015 ', '16:42:45 ', 'Hadir'),
(56, '1020005', 'Al-Anam', 'English', 'Erlangga wahyu utomo', '9 September 2015 ', '16:42:53 ', 'Hadir'),
(57, '1010006', 'Al-Maidah', 'English', 'Lufthanza Rhama Almabruri', '9 September 2015 ', '16:53:06 ', 'Hadir'),
(58, '1010003', 'Al-Baqarah', 'English', 'Nicolas Angga Ramadhan', '9 September 2015 ', '16:54:13 ', 'Hadir'),
(65, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '9 September 2015 ', '19:00:01 ', 'Hadir'),
(66, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '9 September 2015 ', '19:00:24 ', 'Hadir'),
(68, '1030011', 'Yusuf', 'English', 'Feryan Kurnia Dhandhy', '9 September 2015 ', '19:30:10 ', 'Hadir'),
(69, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '9 September 2015 ', '19:30:53 ', 'Hadir'),
(70, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '9 September 2015 ', '20:03:35 ', 'Ijin'),
(71, '1010011', 'Al-Hijr', 'English', 'Lufthanza Rhama Almabruri', '9 September 2015 ', '20:36:06 ', 'Hadir'),
(72, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '10 September 2015 ', '13:26:21 ', 'Hadir'),
(73, '1030016', 'Ibrahim', 'MIPA', 'Regina norma amanda anang putri', '10 September 2015 ', '14:49:14 ', 'Hadir'),
(74, '1030016', 'Ibrahim', 'MIPA', 'Isnaindah jasmine pertiwi', '10 September 2015 ', '14:49:58 ', 'Hadir'),
(75, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '10 September 2015 ', '14:50:29 ', 'Hadir'),
(77, '1030002', 'Ar-Rad', 'English', 'Regina norma amanda anang putri', '10 September 2015 ', '14:53:06 ', 'Hadir'),
(78, '1030002', 'Ar-Rad', 'English', 'Isnaindah jasmine pertiwi', '10 September 2015 ', '14:53:50 ', 'Hadir'),
(79, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '10 September 2015 ', '14:55:05 ', 'Hadir'),
(80, '1010006', 'Al-Maidah', 'English', 'Roihan Asti Ardiansyah', '10 September 2015 ', '16:25:33 ', 'Hadir'),
(81, '1030026', 'An-Nahl', 'MIPA', 'Almayda Rahmazani', '10 September 2015 ', '16:26:00 ', 'Hadir'),
(82, '1010006', 'Al-Maidah', 'English', 'Tsania syanaya nafiatus sakinah', '10 September 2015 ', '16:39:02 ', 'Hadir'),
(83, '1010011', 'Al-Hijr', 'English', 'Lufthanza Rhama Almabruri', '10 September 2015 ', '16:46:18 ', 'Hadir'),
(84, '1020001', 'Hud', 'English', 'Lailatul mahriza', '10 September 2015 ', '19:09:54 ', 'Hadir'),
(85, '1020001', 'Hud', 'English', 'Athoriq palevi akhrom', '10 September 2015 ', '19:10:12 ', 'Hadir'),
(86, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '10 September 2015 ', '19:10:28 ', 'Hadir'),
(87, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '10 September 2015 ', '19:11:09 ', 'Ijin'),
(88, '1020001', 'Hud', 'English', 'Galang Aji Santosa', '10 September 2015 ', '19:11:21 ', 'Ijin'),
(89, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '10 September 2015 ', '19:15:16 ', 'Hadir'),
(90, '1020028', 'At-Taubah', 'All-Mapel', 'Trisnanto wahyu P', '10 September 2015 ', '19:19:19 ', 'Ijin'),
(91, '1020028', 'At-Taubah', 'All-Mapel', 'Dewanda Ari Anastasya', '10 September 2015 ', '19:59:22 ', 'Hadir'),
(92, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '10 September 2015 ', '20:01:00 ', 'Ijin'),
(93, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '10 September 2015 ', '20:40:30 ', 'Hadir'),
(94, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '11 September 2015 ', '13:08:40 ', 'Hadir'),
(95, '1020027', 'Yunus', 'English', 'Irsyad raditya', '11 September 2015 ', '14:34:20 ', 'Hadir'),
(96, '1020008', 'Al-A''raf', 'English', 'Ayu aliysiah wahyudi', '11 September 2015 ', '14:41:28 ', 'Hadir'),
(97, '1030026', 'An-Nahl', 'MIPA', 'Almayda Rahmazani', '11 September 2015 ', '14:49:04 ', 'Hadir'),
(98, '1020008', 'Al-A''raf', 'English', 'Adam Sabili', '11 September 2015 ', '15:13:10 ', 'Hadir'),
(99, '1020008', 'Al-A''raf', 'English', 'Krisna Wijaya', '11 September 2015 ', '15:30:28 ', 'Hadir'),
(100, '1020008', 'Al-A''raf', 'English', 'Abdul aziz amansyah', '11 September 2015 ', '15:30:46 ', 'Hadir'),
(101, '1020027', 'Yunus', 'English', 'Taufan rafi''ud septiawan putra', '11 September 2015 ', '16:13:58 ', 'Hadir'),
(102, '1010003', 'Al-Baqarah', 'English', 'Alfian fahdly zakaria', '11 September 2015 ', '16:30:56 ', 'Hadir'),
(103, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '11 September 2015 ', '16:49:34 ', 'Hadir'),
(104, '1010003', 'Al-Baqarah', 'English', 'Nabila fatihah hanif', '11 September 2015 ', '17:10:36 ', 'Hadir'),
(105, '1020008', 'Al-A''raf', 'English', 'Juniar tri wicaksono', '11 September 2015 ', '17:11:55 ', 'Ijin'),
(106, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '11 September 2015 ', '19:01:41 ', 'Hadir'),
(107, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '11 September 2015 ', '19:03:42 ', 'Hadir'),
(108, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '11 September 2015 ', '19:04:18 ', 'Hadir'),
(109, '1020028', 'At-Taubah', 'All-Mapel', 'Trisnanto wahyu P', '11 September 2015 ', '19:20:58 ', 'Hadir'),
(110, '1010003', 'Al-Baqarah', 'English', 'Nicolas Angga Ramadhan', '11 September 2015 ', '19:41:46 ', 'Alpa'),
(111, '1020008', 'Al-A''raf', 'English', 'Vannia indah kharisma', '11 September 2015 ', '19:44:33 ', 'Alpa'),
(112, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '12 September 2015 ', '13:04:35 ', 'Hadir'),
(113, '1030016', 'Ibrahim', 'MIPA', 'Isnaindah jasmine pertiwi', '12 September 2015 ', '14:52:24 ', 'Hadir'),
(114, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '12 September 2015 ', '14:52:44 ', 'Hadir'),
(115, '1010003', 'Al-Baqarah', 'English', 'Nicolas Angga Ramadhan', '12 September 2015 ', '16:23:47 ', 'Hadir'),
(116, '1010003', 'Al-Baqarah', 'English', 'Alfian fahdly zakaria', '12 September 2015 ', '16:25:31 ', 'Hadir'),
(117, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '12 September 2015 ', '16:37:44 ', 'Hadir'),
(118, '1010003', 'Al-Baqarah', 'English', 'Nabila fatihah hanif', '12 September 2015 ', '16:40:12 ', 'Hadir'),
(119, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '12 September 2015 ', '17:05:04 ', 'Hadir'),
(120, '1030016', 'Ibrahim', 'MIPA', 'Regina norma amanda anang putri', '12 September 2015 ', '17:29:35 ', 'Ijin'),
(121, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '14 September 2015 ', '13:09:26 ', 'Hadir'),
(122, '1010008', 'An-Nisa', 'English', 'Romy athaya arzaky', '14 September 2015 ', '14:24:05 ', 'Hadir'),
(123, '1010008', 'An-Nisa', 'English', 'Rahmad fajar wiguna', '14 September 2015 ', '14:28:22 ', 'Hadir'),
(124, '1030016', 'Ibrahim', 'MIPA', 'Isnaindah jasmine pertiwi', '14 September 2015 ', '14:43:54 ', 'Hadir'),
(125, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '14 September 2015 ', '14:44:27 ', 'Hadir'),
(126, '1030016', 'Ibrahim', 'MIPA', 'Regina norma amanda anang putri', '14 September 2015 ', '15:04:45 ', 'Hadir'),
(127, '1030026', 'An-Nahl', 'MIPA', 'Almayda Rahmazani', '14 September 2015 ', '16:31:48 ', 'Hadir'),
(128, '1020005', 'Al-Anam', 'English', 'Yesi Agista', '14 September 2015 ', '16:33:24 ', 'Hadir'),
(129, '1020005', 'Al-Anam', 'English', 'Intan Choiriyah Wibi Anisah', '14 September 2015 ', '16:33:32 ', 'Hadir'),
(130, '1010002', 'Al-Imran', 'English', 'Reza afzaal faizullah taqy', '14 September 2015 ', '16:46:35 ', 'Hadir'),
(131, '1020005', 'Al-Anam', 'English', 'Erlangga wahyu utomo', '14 September 2015 ', '18:19:08 ', 'Hadir'),
(132, '1010002', 'Al-Imran', 'English', 'Akbar Rafli Hernanda', '14 September 2015 ', '18:45:43 ', 'Hadir'),
(133, '1010002', 'Al-Imran', 'English', 'Adrian', '14 September 2015 ', '18:46:13 ', 'Hadir'),
(134, '1010002', 'Al-Imran', 'English', 'Akbar Fayas', '14 September 2015 ', '18:46:21 ', 'Hadir'),
(135, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '14 September 2015 ', '18:58:47 ', 'Hadir'),
(136, '1030026', 'An-Nahl', 'MIPA', 'Givana Adhtyia Firananda', '14 September 2015 ', '19:00:49 ', 'Hadir'),
(137, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '14 September 2015 ', '19:02:07 ', 'Hadir'),
(138, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '14 September 2015 ', '19:06:40 ', 'Hadir'),
(139, '1020028', 'At-Taubah', 'All-Mapel', 'Trisnanto wahyu P', '14 September 2015 ', '19:47:45 ', 'Alpa'),
(140, '1030019', 'Al-Isro', 'All-Mapel', 'Arditias Alghofar Zaelani', '15 September 2015 ', '13:10:11 ', 'Hadir'),
(141, '1010008', 'An-Nisa', 'English', 'Rahmad fajar wiguna', '15 September 2015 ', '14:19:15 ', 'Hadir'),
(142, '1010008', 'An-Nisa', 'English', 'Rahmad fajar wiguna', '15 September 2015 ', '14:23:57 ', 'Hadir'),
(143, '1010008', 'An-Nisa', 'English', 'Romy athaya arzaky', '15 September 2015 ', '14:24:09 ', 'Hadir'),
(144, '1030002', 'Ar-Rad', 'English', 'Isnaindah jasmine pertiwi', '15 September 2015 ', '15:12:08 ', 'Hadir'),
(145, '1030015', 'Al-Anfal', 'MIPA', 'Juniar tri wicaksono', '15 September 2015 ', '15:13:10 ', 'Hadir'),
(146, '1030002', 'Ar-Rad', 'English', 'Regina norma amanda anang putri', '15 September 2015 ', '15:26:17 ', 'Hadir'),
(147, '1030002', 'Ar-Rad', 'English', 'Ricke amelia', '15 September 2015 ', '16:31:16 ', 'Hadir'),
(148, '1020027', 'Yunus', 'English', 'Irsyad raditya', '15 September 2015 ', '16:34:00 ', 'Hadir'),
(149, '1030026', 'An-Nahl', 'MIPA', 'Almayda Rahmazani', '15 September 2015 ', '16:47:33 ', 'Hadir'),
(150, '1030026', 'An-Nahl', 'MIPA', 'Givana Adhtyia Firananda', '15 September 2015 ', '16:48:15 ', 'Hadir'),
(151, '1020027', 'Yunus', 'English', 'Taufan rafi''ud septiawan putra', '15 September 2015 ', '16:49:55 ', 'Hadir'),
(152, '1020008', 'Al-A''raf', 'English', 'Ayu aliysiah wahyudi', '15 September 2015 ', '17:52:50 ', 'Hadir'),
(153, '1020008', 'Al-A''raf', 'English', 'Vannia indah kharisma', '15 September 2015 ', '18:37:47 ', 'Hadir'),
(154, '1020001', 'Hud', 'English', 'Happief eqi firmanda', '15 September 2015 ', '18:43:10 ', 'Ijin'),
(155, '1020028', 'At-Taubah', 'All-Mapel', 'Naufal athallah taqy', '15 September 2015 ', '18:56:23 ', 'Hadir'),
(156, '1020008', 'Al-A''raf', 'English', 'Krisna Wijaya', '15 September 2015 ', '18:59:46 ', 'Hadir'),
(157, '1020008', 'Al-A''raf', 'English', 'Abdul aziz amansyah', '15 September 2015 ', '18:59:56 ', 'Hadir'),
(158, '1020001', 'Hud', 'English', 'Athoriq palevi akhrom', '15 September 2015 ', '19:09:45 ', 'Hadir'),
(159, '1020028', 'At-Taubah', 'All-Mapel', 'Hwan Dwi Anggara', '15 September 2015 ', '19:15:20 ', 'Hadir'),
(160, '1020008', 'Al-A''raf', 'English', 'Adam Sabili', '15 September 2015 ', '19:15:36 ', 'Alpa'),
(161, '1020028', 'At-Taubah', 'All-Mapel', 'Tasya Dwi Kartika', '15 September 2015 ', '19:18:40 ', 'Hadir'),
(162, '1020008', 'Al-A''raf', 'English', 'Adam Sabili', '15 September 2015 ', '19:19:10 ', 'Hadir'),
(163, '1020008', 'Al-A''raf', 'English', 'Juniar tri wicaksono', '15 September 2015 ', '19:19:30 ', 'Hadir'),
(164, '1020028', 'At-Taubah', 'All-Mapel', 'Rizqi Agus Fadillah', '15 September 2015 ', '19:20:59 ', 'Sakit'),
(165, '1020028', 'At-Taubah', 'All-Mapel', 'Trisnanto wahyu P', '15 September 2015 ', '19:21:10 ', 'Hadir'),
(166, '1020001', 'Hud', 'English', 'Galang Aji Santosa', '15 September 2015 ', '19:45:19 ', 'Hadir'),
(167, '1020001', 'Hud', 'English', 'Lailatul mahriza', '15 September 2015 ', '19:45:33 ', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `Group` varchar(20) NOT NULL,
  `Program` varchar(32) NOT NULL,
  `No_Registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(35) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Nama_panggilan` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Tempat_Tanggal_Lahir` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Jenis_kelamin` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `No_Hp` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat_Lengkap` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Nama_ayah` varchar(35) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `No_Hp_Ayah` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Nama_Ibu` varchar(35) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `No_Hp_Ibu` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat_Orang_Tua` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Date_of_joint` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Sistem_Administrasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Catatan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`No_Registrasi`),
  UNIQUE KEY `No_Registrasi` (`No_Registrasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1030035 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`Group`, `Program`, `No_Registrasi`, `Nama`, `Nama_panggilan`, `Tempat_Tanggal_Lahir`, `Jenis_kelamin`, `No_Hp`, `Alamat_Lengkap`, `Nama_ayah`, `No_Hp_Ayah`, `Nama_Ibu`, `No_Hp_Ibu`, `Alamat_Orang_Tua`, `Date_of_joint`, `Sistem_Administrasi`, `Catatan`, `Foto`) VALUES
('Al-Imran', 'English', 1010002, 'Reza afzaal faizullah taqy', 'Reza', 'Malang, 8 Oktober 2005', 'Laki-laki', NULL, 'Jl. Batok Raya No 15\r\n', 'Suwarto', NULL, 'Khoiri anna', NULL, 'Jl. Batok Raya No 15\r\n', '08 Juli 2014', 'Null', NULL, ''),
('Al-Baqarah', 'English', 1010003, 'Alfian fahdly zakaria', 'Fahdly', 'Mojokerto, 19 November 2006', 'Laki-laki', NULL, 'Japan Raya, Jl. Ontoseno M10\r\n', 'Djalu nasnutub', '0815 5280 739', 'Chandra kirana akip', '0857 3017 5339', 'Japan Raya, Jl. Ontoseno M10\r\n', '05 Juli 2014', NULL, NULL, ''),
('-', '', 1010004, 'Talitha uzla zayyan', 'Ocha', 'Mojokerto, 27 Desember 2002', 'Perempuan', '0857 0707 9700', 'Balongcok, RT/RW : 01/01, Balongsari, Mojokerto\r\n', '(ALM) Kasiyanto', NULL, 'Meidia astutik', '0852 3023 5454', 'Balongcok, RT/RW : 01/01, Balongsari, Mojokerto\r\n', '07 Juli 2014', NULL, NULL, ''),
('-', '', 1010005, 'Rona nisrina fikri', 'Rona', 'Mojokerto, 04 Oktober 2003', 'Perempuan', NULL, 'Jl. Apel No. 04 Magersari Indah, Mojokerto\r\n', 'Moh. Fikri', NULL, 'Anik yuli widyastuti', NULL, 'Jl. Apel No. 04 Magersari Indah, Mojokerto\r\n', '07 Juli 2014', NULL, NULL, ''),
('Al-Maidah', 'English', 1010006, 'Tsania syanaya nafiatus sakinah', 'Tsania', 'Mojokerto, 05 September 2003', 'Perempuan', NULL, 'Ngares Kidul, Ngares, Gedeg, Kab. Mojokerto\r\n', 'Samsul jupri', '0857 3387 2408', 'Nurwati', '0857 0425 2533', 'Ngares Kidul, Ngares, Gedeg, Kab. Mojokerto\r\n', '07 Juli 2014', NULL, NULL, ''),
('Al-Maidah', 'English', 1010007, 'Tholut sulton akbar', 'Sulton', 'Mojokerto, 27 Maret 2003', 'Laki-laki', '0878 5641 4161', 'Sumolepen, Balongsari, mojokerto\r\n', 'Wasis suntoro', '0818 3244 64', 'Nuriyati', '0819 3882 3200', 'Sumolepen, Balongsari, mojokerto\r\n', '07 Juli 2014', NULL, NULL, ''),
('An-Nisa', 'English', 1010008, 'Rahmad fajar wiguna', 'Fajar', 'Sidoarjo, 09 Mei 2005', 'Laki-laki', '0881 4302 969', 'Munggon, RT/RW : XI/02, Tarik, Sidoarjo\r\n', 'Sentot Santoso', '0881 4302 969', 'Windi astuti', NULL, 'Munggon, RT/RW : XI/02, Tarik, Sidoarjo\r\n', 'Null', NULL, NULL, ''),
('An-Nisa', 'English', 1010009, 'Romy athaya arzaky', 'Romy', 'Mojokerto, 28 Juni 2003', 'Laki-laki', NULL, 'Karanglo, RT/RW : I/II, Wates, Magersari, Mojokert', 'Soelton fadil', '0881 9356 371', 'Khuma''idah', ' 0881 430 7483', 'Karanglo, RT/RW : I/II, Wates, Magersari, Mojokert', 'Null', NULL, NULL, ''),
('Al-Baqarah', 'English', 1010010, 'Nicolas Angga Ramadhan', 'Nico', '27 September 2006', 'Laki-laki', '085733041896', 'Griya Permata Meri Blok D2-48', 'Sujono', '00', 'Rumiati', '085733041896', 'Griya Permata Meri Blok D2-48', '6 Agustus 2014', 'Diangsur 3x', NULL, ''),
('Al-Hijr', 'English', 1010011, 'Lufthanza Rhama Almabruri', 'Rama', 'Jember, 9 April 2003', 'Laki-laki', '0', 'GPI Blok BA No.9, RT/RW: 08/04, Wates, Mojokerto', 'Moch. Saeroji', '08214815643', 'Wida Ningsih', '081230939661', 'GPI Blok BA No.9, RT/RW: 08/04, Wates, Mojokerto', '12 Maret 2015', '-', '*', ''),
('Hud', 'English', 1020001, 'Athoriq palevi akhrom', 'Thoriq', 'Mojokerto, 15 November 1999', 'Laki-laki', '0822 31866357', 'Sumolepen, Balongsari, mojokerto\r\n', 'Wasis suntoro', '0818 3244 64', 'Nuriyati', '0819 3882 3200', 'Sumolepen, Balongsari, mojokerto\r\n', '07 Juli 2014', NULL, NULL, ''),
('Hud', 'English', 1020002, 'Happief eqi firmanda', 'Eqi', 'Mojokerto, 02 Maret 2000', 'Laki-laki', '0857 5537 0981', 'Griya Permata Meri Blok E4-21, Mojokerto\r\n', 'Bimanda ramadhan', '0856 4854 6019', 'Elik nartiningsih', '0857 0620 4300', NULL, 'None', NULL, NULL, ''),
('-', '', 1020003, 'Syah adam baihaqi', 'Adam', 'Mojokerto, 29 September 2000', 'Laki-laki', '0821 3178 3306', 'Jl. Pandan Raya No.35, RT/RW 04/01, Wates, Mojoker', 'Tri yunianto', NULL, 'Luluk indah maria', ' 0812 1765 6321', 'Jl. Pandan Raya No.35, RT/RW 04/01, Wates, Mojoker', 'Null', NULL, NULL, ''),
('Hud', 'English', 1020004, 'Lailatul mahriza', 'Laila', 'Kediri, 11 Desember 1999', 'Perempuan', '0881 4303 454', 'Gedang, RT/RW : 02/08, Mlirip, Jetis, Kab. Mojoker', 'Sulkhan', '0881 4303 454', 'Nur isnani', NULL, 'Gedang, RT/RW : 02/08, Mlirip, Jetis, Kab. Mojoker', 'Null', NULL, NULL, ''),
('Al-Anam', 'English', 1020005, 'Erlangga wahyu utomo', 'Angga', 'Tulungagung, 28 Oktober 2001', 'Laki-laki', NULL, 'Salak No.69,Wates, Magersari, Mojokerto\r\n', 'Dwi utomo', '0813 3191 3288', 'Suningsih bayangkari', '0812 3046 9116', 'Salak No.69,Wates, Magersari, Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Al-A''raf', 'English', 1020008, 'Ayu aliysiah wahyudi', 'Ayu', 'Mojokerto, 17 Juli 2001', 'Perempuan', '0856 4540 6654', 'Ngranggan, RT/RW : 28/6, Ngrowo, Bangsal, Kab. Moj', 'Udiek Wahyudi', NULL, 'Lilik Istianah', ' 0857 4818 1518', 'Ngranggan, RT/RW : 28/6, Ngrowo, Bangsal, Kab. Moj', '11 Juli 2014', NULL, NULL, ''),
('Al-A''raf', 'English', 1020009, 'Abdul aziz amansyah', 'Aziz', 'Mojokerto, 05 Desember 2000', 'Laki-laki', '0857 9086 7743', 'Ngaranggon, RT/RW : 25/06, Ngrowo, Bangsal, Kab. M', 'Damanto', NULL, 'Titik siti fatimah', '0857 4599 4440', 'Ngaranggon, RT/RW : 25/06, Ngrowo, Bangsal, Kab. M', '11 Juli 2014', NULL, NULL, ''),
('Al-A''raf', 'English', 1020012, 'Juniar tri wicaksono', 'Juniar', 'Mjokerto, 20 Juni 2001', 'Laki-laki', NULL, 'Meri/Kuwung, RT/RW : 03/01, Magersari, Mojokerto\r\n', 'Marsudi', '0857 3177 5668', 'Hermin sulistyo rini', '0857 8526 6008', 'Meri/Kuwung, RT/RW : 03/01, Magersari, Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Al-A''raf', 'English', 1020013, 'Vannia indah kharisma', 'Vannia', 'Mojokerto, 04 Oktober 2000', 'Perempuan', '0857 4558 4097', 'Suromulang Barat 12/33, RT/RW : 32/8, Surodinawan,', 'Djasmani', '0812 1740 5276', 'Martini', ' 0822 3006 4119', 'Suromulang Barat 12/33, RT/RW : 32/8, Surodinawan,', 'Null', NULL, NULL, ''),
('-', '', 1020015, 'Ricky Priambudi Subagio', 'Ricky', 'Mojokerto, 25-03-2000', 'Laki-laki', '081333119181', 'Muria Raya No. 54, Mojokerto, Jawa Timur', 'H. Yunis Subagio', '0811372512', 'Yustianingsih', '081235160070', 'Muria Raya No. 54, Mojokerto, Jawa Timur', '25 Oktober 2014', NULL, '12x tatap muka diawal\r\n- free registration\r\n- biay', ''),
('-', '', 1020016, 'Moh. Galang Hizbullah', 'Galang', 'Mojokerto, 18 Desember 2000', 'Laki-laki', '00', 'Dusun Ngranggon, RT/RW 25/06, Ds. Ngrowo, Kec. Ban', 'Zainuri', '08123093711', 'Anita Hidayati', '082139390391', 'Dusun Ngranggon, RT/RW 25/06, Ds. Ngrowo, Kec. Ban', '28 Oktober 2014', 'Diangsur 9x', NULL, ''),
('Al-A''raf', 'English', 1020017, 'Krisna Wijaya', 'Krisna', 'Mojokerto, 9 Maret 2001', 'Laki-laki', '085704752430', 'Pendowo, RT/RW 24/05, Kel. Ngrowo, Kec. Bangsal, K', 'Buadi', '085655100311', 'Lilik Kususiah', '082232967090', 'Pendowo, RT/RW 24/05, Kel. Ngrowo, Kec. Bangsal, K', '23 Juli 2014', 'Diangsur 10x', NULL, ''),
('Al-Anam', 'English', 1020018, 'Yesi Agista', 'Gita', 'Mojokerto, 16 Agustus 2001', 'Perempuan', '00', 'Bancang, RT/RW 01/02, Wates, Kec. Magersari, Kota/', 'Yeko Sumaryanto', '085655055359', 'Ida Kustiah', '00', 'Bancang, RT/RW 01/02, Wates, Kec. Magersari, Kota/', 'null', 'null', NULL, ''),
('Al-Anam', 'English', 1020019, 'Intan Choiriyah Wibi Anisah', 'Intan', 'Mojokerto, 21 Mei 2002', 'Perempuan', '089679595474', 'Jl. Flamboyan, RT/RW 03/02, Kel. Wates, Kec. Mager', 'Bambang Wibi Sono', '00', 'Kasmi Astuti', '00', 'Jl. Flamboyan, RT/RW 03/02, Kel. Wates, Kec. Mager', '24 November 2014', 'null', NULL, ''),
('Yunus', 'English', 1020027, 'Irsyad raditya', 'Irsyad', '-', 'Laki-laki', '0', '-', '-', '0', '-', '0', '-', '-', '-', '-', ''),
('At-Taubah', 'All-Mapel', 1020028, 'Naufal athallah taqy', 'Naufal', '-', 'Laki-laki', '0', '-', '-', '0', '-', '0', '-', '-', '-', '-', ''),
('Yunus', 'English', 1020029, 'Taufan rafi''ud septiawan putra', 'Taufan', '-', 'Laki-laki', '0', '-', '-', '0', '-', '0', '-', '-', '-', '-', ''),
('At-Taubah', 'English+MIPA', 1020030, 'Trisnanto wahyu P', 'Trisnanto', '-', 'Laki-laki', '0', '-', '-', '0', '-', '0', '-', '-', '-', '-', ''),
('Al-A''raf', 'English', 1020037, 'Adam Sabili', 'Bili', '-', 'Laki-Laki', '0', '-', '-', '0', '-', '0', '-', '-', NULL, NULL, ''),
('Ar-Rad', 'English', 1030002, 'Regina norma amanda anang putri', 'Regina', 'Mojokerto, 23 Mei 1998', 'Perempuan', '0857 3001 7943', 'Sekarputih No. 428, Kedundung, Magersari, Mojokert', 'Anang ansori', NULL, 'nur rubaiyah', NULL, 'Sekarputih No. 428, Kedundung, Magersari, Mojokert', 'Null', NULL, NULL, ''),
('Ar-Rad', 'English', 1030004, 'Intan nafi''ah ramadhany', 'Intan', 'Jombang, 2 Januari 1998', 'Perempuan', '0857 3262 4540', 'Ngares Kidul, Ngares, Gedeg, Kab. Mojokerto\r\n', 'Samsul jupri', '0857 3387 2408', 'Nurwati', '0857 0425 2533', 'Ngares Kidul, Ngares, Gedeg, Kab. Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Ar-Rad', 'English', 1030005, 'Isnaindah jasmine pertiwi', 'Indah', 'Mojokerto, 13 Agustus 1997', 'Perempuan', '0856 0728 7053', 'Meri, RT/RW : 03/01, Mojokerto\r\n', 'Marsudi', '0857 3177 5668', 'Hermin sulistyo rini', ' 0857 8526 6008', 'Meri, RT/RW : 03/01, Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Ar-Rad', 'English', 1030006, 'Ricke amelia', 'Ricke', 'Mojokerto, 13 November 1997', 'Perempuan', '0815 1542 2385', 'Jl. Kepodang 9, Mengelo, Sooko, Kab. Mojokerto\r\n', 'Moh. Rukhan', ' 0856 4510 1318', 'Jum''atin', '0856 4601 6554', 'Jabon, Kab. Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Yusuf', 'English', 1030011, 'Feryan Kurnia Dhandhy', 'Dhandhy', 'Mojokerto, 5 September 1998', 'Laki-laki', '085731907111', 'Jln. Raya Pandan No. 31, RT/RW 004/001, Ds. Wates,', 'Dulhadi', '08179341881', 'Djuah', '08123284162', 'Jln. Raya Pandan No. 31, RT/RW 004/001, Ds. Wates,', '5 November 2014', 'null', NULL, ''),
('Al-Maidah', 'MIPA', 1030014, 'Lufthanza Rhama Almabruri', 'Rama', 'Jember, 9 April 2003', 'Laki-laki', '0', 'GPI Blok BA No.9, RT/RW: 08/04, Wates, Mojokerto', 'Moch. Saeroji', '08214815643', 'Wida Ningsih', '081230939661', 'GPI Blok BA No.9, RT/RW: 08/04, Wates, Mojokerto', '12 Maret 2015', '-', '*', ''),
('Al-Anfal', 'MIPA', 1030015, 'Juniar tri wicaksono', 'Juniar', 'Mjokerto, 20 Juni 2001', 'Laki-laki', NULL, 'Meri/Kuwung, RT/RW : 03/01, Magersari, Mojokerto\r\n', 'Marsudi', '0857 3177 5668', 'Hermin sulistyo rini', '0857 8526 6008', 'Meri/Kuwung, RT/RW : 03/01, Magersari, Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Ibrahim', 'MIPA', 1030016, 'Regina norma amanda anang putri', 'Regina', 'Mojokerto, 23 Mei 1998', 'Perempuan', '0857 3001 7943', 'Sekarputih No. 428, Kedundung, Magersari, Mojokert', 'Anang ansori', NULL, 'nur rubaiyah', NULL, 'Sekarputih No. 428, Kedundung, Magersari, Mojokert', 'Null', NULL, NULL, ''),
('Al-Isro', 'All-Mapel', 1030019, 'Arditias Alghofar Zaelani', 'Ardi', 'Malang', 'Laki-laki', '085731709250', 'Jl. Muria Raya no.52, Wates - Mojokerto', 'Suliadi', '0', 'Rianah', '0', 'Jl. Muria Raya no.52, Wates - Mojokerto', '24 Agustus 2015', 'Diangsur 10x', 'All-Mapel', 'foto/Koala.jpg'),
('Al-Baqarah', 'English', 1030020, 'Nabila fatihah hanif', 'Nabila', 'Mojokerto, 07 Agustus 2006', 'Perempuan', '0', 'Jl. Tangkuban Prahu IV no.24, Perum Kedundung - Mojokerto', 'Budi Kriswanto', '0818506432', 'Wahyu Haryanti', '08123044670', 'Jl. Tangkuban Prahu IV no.24, Perum Kedundung - Mojokerto', '27 Juli 2015', 'Diangsur 10x', '-', 'foto/Koala.jpg'),
('Hud', 'English', 1030021, 'Galang Aji Santosa', 'Galang', '-', 'Laki-laki', '0', '-', '-', '0', '-', '0', '-', '28 Juli 2015', 'Diangsur 10x', '-', 'foto/Koala.jpg'),
('At-Taubah', 'All-Mapel', 1030022, 'Tasya Dwi Kartika', 'Tasya', '15 Desember 1999', 'Perempuan', '085733962520', 'Jl. Raya Lawu No.20, Wates - Mojokerto', 'Slamet Imam Nawawi', '081330063309', 'Ayunda Heni Ferina', '08563400788', 'Jl. Raya Lawu No.20, Wates - Mojokerto', '26 Agustus 2015', 'Diangsur 10x', '-', 'foto/Koala.jpg'),
('At-Taubah', 'All-Mapel', 1030023, 'Rizqi Agus Fadillah', 'Rizqi', 'Surabaya, 07 Agustus 1999', 'Laki-laki', '081235783368', 'Jl. Galunggung VI/4, Perum Kedundung - Mojokerto', 'Sumirin', '081216726207', 'Indrawati', '0', 'Jl. Galunggung VI/4, Perum Kedundung - Mojokerto', '25 Agustus 2015', 'Diangsur 10x', '-', 'foto/Koala.jpg'),
('At-Taubah', 'All-Mapel', 1030024, 'Hwan Dwi Anggara', 'Hwan', 'Mojokerto, 24 November 1999', 'Laki-laki', '088806117727', 'Wates, Jl.Melati, Magersari - Mojokerto', '-', '08814300387', 'Imik Sayklis Siwardah', '08814303364', 'Wates, Jl.Melati, Magersari - Mojokerto', '01 September 2015', 'Diangsur 10x', '-', 'foto/Lighthouse.jpg'),
('Al-Maidah', 'English', 1030025, 'Roihan Asti Ardiansyah', 'Roi', 'Mojokerto, 18 Juli 2002', 'Laki-laki', '085730492046', 'Empunala no.245, Magersari - Mojokerto', 'Agus Suyamto', '0', 'Yuntatik Maria', '0', 'Empunala no.245, Magersari - Mojokerto', '04 Agustus 2015', 'Diangsur 10x', '-', 'foto/Koala.jpg'),
('An-Nahl', 'MIPA', 1030026, 'Almayda Rahmazani', 'Alma', 'Mojokerto, 07 Juni 1999', 'Perempuan', '082132607610', 'Kedungsari No.333, Gunung Gedangan - Mojokerto', 'Mansyur Fauzi', '081330030030', 'Nurul Hajati', '081330434818', 'Empunala no.245, Magersari - Mojokerto', '25 Agustus 2015', '-', '-', 'foto/Lighthouse.jpg'),
('At-Taubah', 'English', 1030027, 'Dewanda Ari Anastasya', 'Ari', 'Mojokerto, 21 Oktober 2000', 'Perempuan', '085259255722', 'Jl. Magersari Gg.01 No.08, Magersari - Mojokerto', 'Hari Wahyudi', '082131033602', 'Yuni Heryati', '081331316479', 'Jl. Magersari Gg.01 No.08, Magersari - Mojokerto', '-', '-', '-', 'foto/Lighthouse.jpg'),
('Ibrahim', 'MIPA', 1030028, 'Isnaindah jasmine pertiwi', 'Indah', 'Mojokerto, 13 Agustus 1997', 'Perempuan', '0856 0728 7053', 'Meri, RT/RW : 03/01, Mojokerto\r\n', 'Marsudi', '0857 3177 5668', 'Hermin sulistyo rini', ' 0857 8526 6008', 'Meri, RT/RW : 03/01, Mojokerto\r\n', 'Null', NULL, NULL, ''),
('Al-Anfal', 'MIPA', 1030029, 'Hana Wahyuningtyas', 'Hana', 'Mojokerto, 28 Desember 2000', 'Perempuan', '081330154681', 'Jl. Raya Meri', 'Ahmad Fathoni', '081330508798', 'Asmaul Choiro Yatiningsih', '085655086707', 'Jl. Raya Meri', '11 september 2015', 'null', 'null', 'foto/Chrysanthemum.jpg'),
('Al-Imran', 'regular', 1030030, 'Akbar Rafli Hernanda', 'Rafli', 'Mojokerto, 9 Januari 2006', 'Laki-laki', '  ', 'Jl. Rajasanegara 1 no. 87', 'Heri Agustono', '  ', 'Nur Laili Sholicah', '082244825166', 'Jl. Rajasanegara 1 no. 87', 'null', 'diangsur 12x', 'null', 'foto/Koala.jpg'),
('Al-Imran', 'regular', 1030031, 'Akbar Rafli Hernanda', 'Rafli', 'Mojokerto, 9 Januari 2006', 'Laki-laki', '  ', 'Jl. Rajasanegara 1 no. 87', 'Heri Agustono', '  ', 'Nur Laili Sholicah', '082244825166', 'Jl. Rajasanegara 1 no. 87', 'null', 'diangsur 12x', 'null', 'foto/Koala.jpg'),
('Al-Imran', 'regular', 1030032, 'Adrian', 'Adrian', 'Mojokerto, 2 Mei 2006', 'Laki-laki', '    ', 'Jl. Pandan GG 6 no. 5, Wates', 'Farukh Efendi', '     ', 'Noviari puspita', '  ', 'Jl. Pandan GG 6 no. 5, Wates', '   ', 'diangsur 12x', ' null', 'foto/Penguins.jpg'),
('Al-Imran', 'regular', 1030033, 'Akbar Fayas', 'Akbar', 'Mojokerto, 5 mei 2006', 'Laki-laki', '     ', 'Jl. Salak no 69, Wates', 'Dwi Utomo', '  ', 'Suningsih Bayangkari', '081230469116', 'Jl. Salak no 69, Wates', '   ', 'diangsur 12x', 'null', 'foto/Hydrangeas.jpg'),
('An-Nahl', 'regular', 1030034, 'Givana Adhtyia Firananda', 'Givana', 'Mojokerto, 6 April 2000', 'Perempuan', '081235199934', 'Perum Mutiara Garden AR/16, Lengkong', 'Hafidi S.H', '081357348667', 'Herawati', '082230574008', 'Perum Mutiara Garden AR/16, Lengkong', '14 september 2015', '   ', 'null', 'foto/Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `kls` varchar(11) NOT NULL,
  `Program` varchar(32) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `kelas` (`kls`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`No`, `kls`, `Program`) VALUES
(1, 'Al-Baqarah', 'English'),
(2, 'Al-Imran', 'English'),
(22, 'Al-Maidah', 'English'),
(24, 'At-Taubah', 'All Mapel'),
(26, 'Ar-Rad', 'English'),
(27, 'An-Nisa', 'English'),
(29, 'Al-A''raf', 'English'),
(30, 'Al-Anfal', 'MIPA'),
(31, 'Al-Hijr', 'MIPA'),
(32, 'Hud', 'English'),
(34, 'Al-Anam', 'English'),
(35, 'Yunus', 'English'),
(36, 'Ibrahim', 'MIPA'),
(37, 'Yusuf', 'English'),
(38, 'Al-Isro', 'All-Mapel'),
(39, 'An-Nahl', 'MIPA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `User` varbinary(20) NOT NULL,
  `Pass` varbinary(32) NOT NULL,
  `Akses` varchar(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `User`, `Pass`, `Akses`) VALUES
(1, 'admin1', 'htcmojokerto', 'admin'),
(2, 'admin2', 'htcmojokerto', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
