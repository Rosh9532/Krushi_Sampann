-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 12:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `Username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`Username`, `password`) VALUES
('admin', '555');

-- --------------------------------------------------------

--
-- Table structure for table `bpost`
--

CREATE TABLE `bpost` (
  `pid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `pname` text NOT NULL,
  `pquant` int(100) NOT NULL,
  `pcat` text NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpost`
--

INSERT INTO `bpost` (`pid`, `bid`, `pname`, `pquant`, `pcat`, `price`) VALUES
(1, 1, 'wheat', 100, 'Grains', 25),
(4, 1, 'Garlic', 100, 'Vegetable', 200);

-- --------------------------------------------------------

--
-- Table structure for table `buyinfo`
--

CREATE TABLE `buyinfo` (
  `bid` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyinfo`
--

INSERT INTO `buyinfo` (`bid`, `Name`, `Username`, `Phone_no`, `aadhar`, `email`, `password`, `address`) VALUES
(1, 'BUYER 1', 'b1', 1234567890, 2147483647, 'b1@gmail.com', '123', 'aurangabad');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `cid` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `taluka` varchar(100) NOT NULL,
  `distric` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `gat_no` int(4) NOT NULL,
  `area` varchar(100) NOT NULL,
  `proof` varchar(100) NOT NULL,
  `crop` varchar(100) NOT NULL,
  `production` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`cid`, `email`, `username`, `password`, `Name`, `phoneNo`, `place`, `taluka`, `distric`, `state`, `gat_no`, `area`, `proof`, `crop`, `production`) VALUES
(1, 'f1@gmail.com', 'f1', '123', 'farmer 1', 1234567890, 'nipana', 'motala', 'buldhana', 'Maharashtra', 1234, '3', 'upload/New doc Dec 3, 2020 19.42.pdf', 'cotton', 25),
(2, 'f1@gmail.com', 'f3', '123', 'farmer 3', 1234567890, 'xyz', 'abc', 'tgd', 'Maharashtra', 1234, '3', 'upload/a.pdf', 'cotton', 12);

-- --------------------------------------------------------

--
-- Table structure for table `farminfo`
--

CREATE TABLE `farminfo` (
  `fid` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farminfo`
--

INSERT INTO `farminfo` (`fid`, `Name`, `Username`, `Phone_no`, `aadhar`, `email`, `password`, `address`) VALUES
(1, 'farmer 1', 'f1', 1234567890, 2147483647, 'f1@gmail.com', '123', 'At post Nipana , Tq Motala , dist . Buldhana'),
(2, 'farmer 2', 'f2', 1234567890, 2147483647, 'f2@gmail.com', '123', 'satara , maharastra.'),
(3, 'farmer 3', 'f3', 1234567890, 2147483647, 'f3@gmail.com', '123', 'At post Nipana , Tq Motala , dist . Buldhana');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Phone_no` int(255) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `email`, `Phone_no`, `query`) VALUES
('Roshni', 'rosh@gmail.com', 2147483647, 'Need more changes in website'),
('Tejashree', 'teju@gmail.com', 876543212, 'Nice'),
('Krushna', 'krish@gmail.com', 2147483647, 'Keep it up'),
('rosh', 'teju@gmail.com', 12345677, 'keep hustling');

-- --------------------------------------------------------

--
-- Table structure for table `fproduct`
--

CREATE TABLE `fproduct` (
  `fid` int(10) NOT NULL,
  `pid` int(255) NOT NULL,
  `dou` date NOT NULL DEFAULT current_timestamp(),
  `product` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `pimage` varchar(255) NOT NULL DEFAULT 'blank.png',
  `picStatus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fproduct`
--

INSERT INTO `fproduct` (`fid`, `pid`, `dou`, `product`, `pcat`, `pinfo`, `price`, `pimage`, `picStatus`) VALUES
(1, 1, '2020-12-17', 'Grapes', 'Fruit', '<p><strong>Rich&nbsp;</strong>and <strong>Fresh Grapes </strong>of<strong> <u>Nasik Valley ! Straight from our farms.&nbsp;<img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.8.0/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"', 200, 'Grapes1.jpg', 1),
(2, 2, '2020-12-17', 'Strawberry', 'Fruit', '<p><strong>Sweet</strong>&nbsp;,<strong>Bright </strong>red berries ! Grown in hills of&nbsp;<strong><em>Mahabaleswar .&nbsp;</em></strong></p>\r\n', 500, 'Strawberry2.jpg', 1),
(3, 3, '2020-12-17', 'Oranges', 'Fruit', '<p><strong>juicy oranges of Nagpur ...fresh!!!</strong></p>\r\n', 40, 'Oranges3.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpost`
--
ALTER TABLE `bpost`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `buyinfo`
--
ALTER TABLE `buyinfo`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `farminfo`
--
ALTER TABLE `farminfo`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpost`
--
ALTER TABLE `bpost`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buyinfo`
--
ALTER TABLE `buyinfo`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farminfo`
--
ALTER TABLE `farminfo`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fproduct`
--
ALTER TABLE `fproduct`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
