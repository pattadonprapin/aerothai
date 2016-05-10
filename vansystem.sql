-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2016 at 10:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vansystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(2) NOT NULL,
  `vanNum` int(2) NOT NULL,
  `task` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `vanNum`, `task`) VALUES
(1, 2, 'asdasdasdasdasd'),
(2, 1, 'à¹„à¸› à¸”à¸¹à¸‡à¸²à¸™à¸ˆà¸±à¸‡à¸«à¸§à¸±'),
(3, 1, 'à¹„à¸› à¸”à¸¹à¸‡à¸²à¸™à¸ˆà¸±à¸‡à¸«à¸§à¸±'),
(4, 1, 'à¹„à¸› à¸”à¸¹à¸‡à¸²à¸™à¸ˆà¸±à¸‡à¸«à¸§à¸±'),
(5, 1, 'à¹„à¸› à¸”à¸¹à¸‡à¸²à¸™à¸ˆà¸±à¸‡à¸«à¸§à¸±');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(7) NOT NULL,
  `name` varchar(200) NOT NULL,
  `go` varchar(40) NOT NULL,
  `back` varchar(40) NOT NULL,
  `task` varchar(200) NOT NULL,
  `vanNum` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `go`, `back`, `task`, `vanNum`, `status`) VALUES
(4, 'asdasdasdasdasd', '2016-05-19T11:11', '2016-05-20T11:11', 'asdasdasdasdasd', '2', 'Accepted'),
(5, 'à¸“à¸±à¸à¸žà¸‡à¸¨à¹Œ à¸¥à¸±à¸‡à¸à¸²à¸£', '2016-05-23T11:11', '2016-05-24T16:00', 'à¹„à¸› à¸”à¸¹à¸‡à¸²à¸™à¸ˆà¸±à¸‡à¸«à¸§à¸±', '1', 'Accepted'),
(6, 'à¸ˆà¸£à¸±à¸ªà¸¨à¸£à¸µ', '2016-05-08T14:00', '2016-05-08T15:00', 'à¹„à¸› à¸ªà¹‚à¸¡à¸ªà¸£ à¹€à¸žà¸·à¹ˆà¸­à¹„à¸›à¸ªà¹ˆà¸‡à¸‚à¸­à¸‡', '2', 'Accepted'),
(7, 'à¸§à¸‡à¸¨à¸˜à¸£', '2016-05-08T13:30', '2016-05-08T14:30', 'à¹„à¸›à¸ªà¸™à¸²à¸¡à¸šà¸´à¸™à¹€à¸Šà¸µà¸¢à¸‡à¹ƒà¸«à¸¡à¹ˆ', 'à¸¢à¸±à¸‡à¹„à¸¡à¹ˆà¸¡à¸µà¸£à¸–à¸§à¹ˆà¸²à', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(3) NOT NULL,
  `van_id` int(4) NOT NULL,
  `task` varchar(40) NOT NULL,
  `go` varchar(30) NOT NULL,
  `back` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `van_id`, `task`, `go`, `back`, `status`) VALUES
(1, 1, 'go to chaing rai', '31/03/2016', '03/04/2559', 1),
(2, 1, 'go to BKK', '30/03/2016', '30/03/2016', 1),
(3, 1, 'go to home', '30/03/2016', '31/03/2016', 1),
(4, 2, 'go to Airport CNX', '30/03/2016', '31/03/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'admin2', '1234', 'เจ');

-- --------------------------------------------------------

--
-- Table structure for table `vandetail`
--

CREATE TABLE `vandetail` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `detail` varchar(30) NOT NULL,
  `driver` varchar(25) NOT NULL,
  `license` varchar(8) NOT NULL,
  `number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vandetail`
--

INSERT INTO `vandetail` (`id`, `name`, `detail`, `driver`, `license`, `number`) VALUES
(1, 'Toyota', '4 seat rows, turbo 3.0 D4D', 'Mr. Nattaphong Lungkrapin', 'JID-6787', 1),
(2, 'Toyota', 'VIP seat', 'Mr. J', 'TYU-3544', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vandetail`
--
ALTER TABLE `vandetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vandetail`
--
ALTER TABLE `vandetail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
