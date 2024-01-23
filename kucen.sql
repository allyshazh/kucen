-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 08:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kucen`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(99) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `num` int(15) NOT NULL,
  `dates` date NOT NULL,
  `daten` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `age`, `remark`, `num`, `dates`, `daten`, `gender`, `service`) VALUES
(8, 'killua', 4, 'jahat suka gigit', 999458949, '2021-06-29', '2021-07-07', 'Male', 'Spa'),
(9, 'nyot', 2, 'busuk', 2147483647, '2021-07-08', '2021-07-10', 'Female', 'Spa'),
(11, 'nani', 2, 'comel je', 1110483882, '2021-07-01', '2021-07-03', 'Female', 'Hotel'),
(12, 'gon', 1, 'energetic', 110483882, '2021-07-01', '2021-07-09', 'Male', 'Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`) VALUES
('Nurul Liyana', 'nrl.liyana01@gmail.com', 'i ned elp my cat hungy'),
('Lee', 'wusyaname@yahoo.com', 'can i come n pet all cats pls'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('', '', ''),
('Nurul Liyana', 'nrl.liyana01@gmail.com', 'oisdhfosdf'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `custID` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` int(10) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`custID`, `email`, `firstname`, `lastname`, `phone`, `password1`, `password2`) VALUES
('60dc261bba09c', 'syhmi23@gmail.com', 'Ahmad', 'Syahmi', 176350603, '123', '123'),
('60dc29e2afa86', 'katycat.perry123@gmail.com', 'Nurul', 'Liyana', 483882, 'hgfhfgh', 'hfghfgh'),
('60dc2ae458311', 'nrl.liyana01@gmail.com', 'Nurul', 'Liyana', 483882, 'edgfsf', 'sdfsdff'),
('60dd3c305f83e', 'wusyaname@gmail.com', 'Nurul', 'Liyana', 483882, 'lee010101', 'lee010101'),
('60ded7cd5d90e', 'nixon@yahoo.com', 'Nixon', 'Nyangau', 1234567891, '321', '321'),
('60deee394c0f5', 'nixon@gmail.com', 'nixon', 'nyangau', 2147483647, '432', '432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`custID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
