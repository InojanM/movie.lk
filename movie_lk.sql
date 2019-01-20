-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 03:29 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('Inojan', 'inojan');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(6) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `movie_name`, `language`, `release_date`, `img_url`) VALUES
(1, 'Sarkar', 'tamil', '2018-12-12', 'sarkar.jpg'),
(2, 'Petta', 'Tamil', '2019-01-12', 'petta.jpg'),
(3, 'Viswasam', 'Tamil', '2019-02-08', 'visuwasam.jpg'),
(4, 'Hindi Movie', 'Hindi', '2019-01-10', 'hindi.jpg'),
(5, 'Aquaman', 'English', '2019-01-30', 'aqua_man.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(20) NOT NULL,
  `theater_name` text NOT NULL,
  `place` text NOT NULL,
  `contact_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `theater_name`, `place`, `contact_number`) VALUES
(1, 'Sellam Premier', 'Batticaloa', '0652020156'),
(2, 'Magic City', 'Colombo 04', '0112020256'),
(3, 'Raja', 'Jaffna', '0152020568'),
(4, 'Shanthi theater', 'Kallady', '0658599651');

-- --------------------------------------------------------

--
-- Table structure for table `theater_owner`
--

CREATE TABLE `theater_owner` (
  `id` int(6) NOT NULL,
  `user` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater_owner`
--

INSERT INTO `theater_owner` (`id`, `user`, `user_name`, `password`) VALUES
(1, 'Sellam Premier', 'sp', '12345'),
(2, 'Magic Cite ', 'mc', '23456'),
(3, 'Santhi', 'santhi', '34567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_owner`
--
ALTER TABLE `theater_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theater_owner`
--
ALTER TABLE `theater_owner`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
