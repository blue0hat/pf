-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 10:28 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(810, 'TGI1', 1),
(811, 'TGI2', 1),
(812, 'TSDI1', 1),
(815, 'TSDI2', 1),
(854, 'TSSR1', 1),
(856, 'TSSR2', 1),
(857, 'TSMSA1', 1),
(859, 'TSMSA2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `cat` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `cat`, `status`) VALUES
(1, 'L\'entreprise et son environnement', 'TSDI1', 1),
(2, 'Comptabilité', 'TGI1', 1),
(3, 'Droit social', 'TGI1', 1),
(4, 'Comptabilité analytique', 'TGI2', 1),
(11, ' Gestion des approvisionnements', 'TGI2', 1),
(12, 'Gestion des entreprises', 'TGI1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `fonc` varchar(250) NOT NULL,
  `exp` text NOT NULL,
  `dob` varchar(250) NOT NULL,
  `jdate` varchar(250) NOT NULL,
  `sal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `lieudenaissance` varchar(255) NOT NULL,
  `sexe` varchar(25) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `class` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `join_date` int(11) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `telparents` varchar(25) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `emailparents` varchar(255) NOT NULL,
  `nomparents` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `prenom`, `name`, `lieudenaissance`, `sexe`, `category`, `class`, `dob`, `join_date`, `file`, `email`, `password`, `status`, `created_at`, `telparents`, `adresse`, `emailparents`, `nomparents`) VALUES
(38, 'hasna', 'borami', 'casa', 'Homme', 'TSDI2', '', '2020-01-01', 2020, 'd1ae0787e2c67f633cad27ad4cc59ddd.png', 'idrissi.hasnaa@hotmail.fr', '', 1, '2020-01-31 18:47:26', '', '', '', ''),
(39, 'ddd', 'md444', '', NULL, 'TGI1', 'hamza', '2020-01-02', 2020, '69cdfbbf344123f64cecd756221b8ca6.JPG', 'idrissi.hasnaa@hotmail.fr', '', 1, '2020-01-31 18:47:56', '', '', '', ''),
(41, 'hat', 'blue', 'casa', 'Homme', 'TSDI2', NULL, '1990-03-01', 2020, '8c66a812bb5c94eedd1d77e6729f93e4.jpg', 'blue0hat@gmail.com', '', 1, '2020-02-02 15:41:28', '0650505050', 'lot karim 255 ain chok', 'toto@toto.com', 'toto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=862;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
