-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 03:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Imagine` varchar(100) NOT NULL,
  `Culoare` varchar(50) NOT NULL,
  `Marime` varchar(50) NOT NULL,
  `Pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`ID`, `Nume`, `Imagine`, `Culoare`, `Marime`, `Pret`) VALUES
(1, 'Lalele', './images/yellowtulip.jpg', 'Galbene', 'Medii', 16),
(2, 'Trandafiri', './images/c4549e21c62b8eb75fa719533da8b8bewhiterose.jpg', 'Albi', 'Mici', 8),
(3, 'Garoafe', './images/ec688c2e75f9ff259c3ebed78f85de7emargarete.jpg', 'Rosii', 'Medii', 13),
(11, '', './images/7c9fe3d9acbcfab227902e35af515c2bwelcome1.jpg', '', '', 0),
(12, 'hei', './images/3edc6784307cd0b51c7f035edec93117flower3.jpg', 'Albi', 'Mediu', 11),
(13, '', './images/fc02d54e0e2e7f76cea641af34ed75e6flower2.jpg', '', '', 0),
(14, 'asas', './images/9b629f9c83b1429a536ab4bf4f1323953edc6784307cd0b51c7f035edec93117flower3.jpg', 'asas', 'asas', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
