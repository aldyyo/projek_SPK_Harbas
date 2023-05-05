-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 03:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_yatim`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mentah`
--

CREATE TABLE `data_mentah` (
  `id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sekolah` int(2) NOT NULL,
  `tanggungan` int(2) NOT NULL,
  `penghasilan` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mentah`
--

INSERT INTO `data_mentah` (`id`, `nama`, `sekolah`, `tanggungan`, `penghasilan`, `status`) VALUES
(1, 'Eka', 2, 1, 2, 3),
(2, 'Yasmin', 2, 2, 3, 3),
(3, 'Andika', 3, 3, 4, 3),
(4, 'Farhan', 4, 3, 3, 1),
(5, 'Dewi', 2, 2, 3, 3),
(6, 'Sagi', 4, 2, 4, 5),
(7, 'Yudo', 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rank_tb`
--

CREATE TABLE `rank_tb` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank_tb`
--

INSERT INTO `rank_tb` (`id`, `nama`, `score`) VALUES
('KEL401SAG', 'Sagi', 0.901314),
('KEL402AND', 'Andika', 0.743475),
('KEL403YAS', 'Yasmin', 0.480811),
('KEL404DEW', 'Dewi', 0.480811),
('KEL405FAR', 'Farhan', 0.438105),
('KEL406EKA', 'Eka', 0.256525),
('KEL407YUD', 'Yudo', 0.1256);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mentah`
--
ALTER TABLE `data_mentah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_tb`
--
ALTER TABLE `rank_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mentah`
--
ALTER TABLE `data_mentah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
