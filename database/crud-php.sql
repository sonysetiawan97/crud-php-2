-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 04:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablekaryawan`
--

CREATE TABLE `tablekaryawan` (
  `idKaryawan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tempatLahir` varchar(50) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablekaryawan`
--

INSERT INTO `tablekaryawan` (`idKaryawan`, `nama`, `alamat`, `email`, `tempatLahir`, `tanggalLahir`, `gender`) VALUES
(4, 'Sony Setiawan', 'Duta Bumi 3 Q/22 Harapan Indah, Kota Bekasi', 'sonysetiawanred@gmail.com', 'Jakarta', '1997-09-02', 'Pria');

--
-- Triggers `tablekaryawan`
--
DELIMITER $$
CREATE TRIGGER `after_insert_ChangeNIK` AFTER INSERT ON `tablekaryawan` FOR EACH ROW INSERT INTO tablenikkaryawan VALUES(
    (SELECT idKaryawan FROM tablekaryawan WHERE idKaryawan = new.idKaryawan),(
    SELECT CONCAT('k','',CONCAT((SELECT DATE_FORMAT(CURDATE(), '%y')),'',CONCAT((SELECT DATE_FORMAT(CURDATE(), '%m')),'',(SELECT lpad(`idKaryawan`, 5, '0') FROM `tablekaryawan` WHERE idKaryawan = new.idKaryawan)))) FROM tablekaryawan WHERE idKaryawan = new.idKaryawan
))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tablekeahlian`
--

CREATE TABLE `tablekeahlian` (
  `idKeahlian` int(11) NOT NULL,
  `namaKeahlian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tablekeahliankaryawan`
--

CREATE TABLE `tablekeahliankaryawan` (
  `idKeahlian` int(11) NOT NULL,
  `idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tablenikkaryawan`
--

CREATE TABLE `tablenikkaryawan` (
  `idKaryawan` int(11) DEFAULT NULL,
  `nik` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablenikkaryawan`
--

INSERT INTO `tablenikkaryawan` (`idKaryawan`, `nik`) VALUES
(4, 'k90900004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablekaryawan`
--
ALTER TABLE `tablekaryawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `tablekeahlian`
--
ALTER TABLE `tablekeahlian`
  ADD PRIMARY KEY (`idKeahlian`);

--
-- Indexes for table `tablekeahliankaryawan`
--
ALTER TABLE `tablekeahliankaryawan`
  ADD KEY `idKeahlian` (`idKeahlian`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `tablenikkaryawan`
--
ALTER TABLE `tablenikkaryawan`
  ADD UNIQUE KEY `idKaryawan` (`idKaryawan`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablekaryawan`
--
ALTER TABLE `tablekaryawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tablekeahlian`
--
ALTER TABLE `tablekeahlian`
  MODIFY `idKeahlian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tablekeahliankaryawan`
--
ALTER TABLE `tablekeahliankaryawan`
  ADD CONSTRAINT `tablekeahliankaryawan_ibfk_1` FOREIGN KEY (`idKeahlian`) REFERENCES `tablekeahlian` (`idKeahlian`),
  ADD CONSTRAINT `tablekeahliankaryawan_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `tablekaryawan` (`idKaryawan`);

--
-- Constraints for table `tablenikkaryawan`
--
ALTER TABLE `tablenikkaryawan`
  ADD CONSTRAINT `tablenikkaryawan_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `tablekaryawan` (`idKaryawan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
