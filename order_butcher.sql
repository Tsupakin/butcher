-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 05:18 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_butcher`
--

CREATE TABLE `order_butcher` (
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `MenuID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Amount` int(3) NOT NULL,
  `Tab` int(2) NOT NULL,
  `DateofOrder` date DEFAULT NULL,
  `Price` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_butcher`
--

INSERT INTO `order_butcher` (`OrderID`, `MenuID`, `Amount`, `Tab`, `DateofOrder`, `Price`) VALUES
(00009, 002, 1, 2, '2017-02-23', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_butcher`
--
ALTER TABLE `order_butcher`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_butcher`
--
ALTER TABLE `order_butcher`
  MODIFY `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
