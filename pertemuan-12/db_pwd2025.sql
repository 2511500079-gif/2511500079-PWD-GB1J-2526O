-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 11:13 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Monica Trie Hapsari', '2511500079@mahasiswa.atmaluhur.ac.id', 'Dihina tak tumbang di puji tak tuntuang', '2025-12-16 17:35:26'),
(2, 'Engrasia Masyithah', '2522500074@mahasiswa.atmaluhur.ac.id', 'jangan lemot yaa hihi', '2025-12-16 17:35:26'),
(3, 'Khairaan Yamani', '2522500075@mahasiswa.atmaluhur.ac.id', 'jangan malaassssh', '2025-12-16 17:35:26'),
(4, 'Junaidi jun', 'jun@jun.com', 'Maju sekali dunia one piece', '2025-12-16 17:35:26'),
(5, 'Junaidi jun', 'jun@jun.com', 'Maju sekali dunia one piece', '2025-12-16 17:35:26'),
(6, 'monica', '2511500079@mahasiswa.atmaluhur.ac.id', 'terus berusaha', '2025-12-16 17:35:26'),
(7, 'monica trie hapsari', '2511500079@mahasiswa.atmaluhur.ac.id', 'ohmaygad kaget', '2025-12-16 17:35:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
