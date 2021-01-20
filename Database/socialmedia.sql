-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `sr no` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`sr no`, `message`, `time`) VALUES
(1, 'Hello this is our first post', '2021-01-15 04:22:23'),
(31, 'Welcome to New Social', '2021-01-15 08:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `rnrathod@mitaoe.ac.in`
--

CREATE TABLE `rnrathod@mitaoe.ac.in` (
  `sr no` int(11) NOT NULL,
  `message` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rnrathod@mitaoe.ac.in`
--

INSERT INTO `rnrathod@mitaoe.ac.in` (`sr no`, `message`, `filename`, `time`) VALUES
(4, 'Hello Ritesh This is a testing process to check the Image', 'wp2902275-black-and-green-wallpaper-hd.jpg', '2021-01-20 06:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `s@gmail.com`
--

CREATE TABLE `s@gmail.com` (
  `sr no` int(11) NOT NULL,
  `message` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s@gmail.com`
--

INSERT INTO `s@gmail.com` (`sr no`, `message`, `filename`, `time`) VALUES
(1, 'Hello This is anothet', 'wp2727716-wallpaper-black-green.jpg', '2021-01-20 06:22:15'),
(2, 'This is another Test', '1.jpg', '2021-01-20 06:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno.` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno.`, `name`, `email`, `password`) VALUES
(13, 'RITESH RATHOD', 'rnrathod@mitaoe.ac.in', 'r'),
(14, 'rnrathod', 's@gmail.com', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `rnrathod@mitaoe.ac.in`
--
ALTER TABLE `rnrathod@mitaoe.ac.in`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `s@gmail.com`
--
ALTER TABLE `s@gmail.com`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`srno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rnrathod@mitaoe.ac.in`
--
ALTER TABLE `rnrathod@mitaoe.ac.in`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s@gmail.com`
--
ALTER TABLE `s@gmail.com`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `srno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
