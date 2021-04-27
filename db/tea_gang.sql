-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 03:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tea_gang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `img` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `Name`, `Email`, `Address`, `Contact`, `img`) VALUES
(2, 'joel', '123', 'Joel', 'Cojul@yahoo.com', 'bahayko', 2147483647, 'toki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `city` varchar(250) NOT NULL,
  `Lname` varchar(250) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `city`, `Lname`, `Name`, `Email`, `Contact`, `Address`, `Username`, `Password`) VALUES
(23, 'Calooca', 'Colminas', 'cojul', 'cojul@yahoo.com', '0921312312', 'bahay', 'cojul', '123'),
(24, 'Caloocan', 'Rozz', 'creator', 'creator@gmail.com', '346456', 'bahay', 'creator', '1'),
(25, 'Caloocan', 'Rozz', 'raizel', 'raizel@gmail.com', '357568568', 'bahay', 'noble', '1'),
(26, 'Valenzuela', 'Colminas', 'Julius', 'colminasjulius@gmail.com', '92057446262', '13-E Jacinto Street Marulas Valenzuela City', 'juls', '1234'),
(27, 'Valenzuela', 'Navaroo', 'Jayson', 'jaysonnavaroooo@gmail.com', '92057446262', '13-E Jacinto Street Marulas Valenzuela City', 'jayson', '123'),
(28, 'caloocan', 'talion', 'joel', 'jt@yahoo.com', '09167895432', 'caloocan', 'jt', '12345'),
(29, 'dyan lang ', 'ganda', 'step', 'dyandyan@yahoo.com', '09232323223', 'navotas', 'nenot', '123');

-- --------------------------------------------------------

--
-- Table structure for table `milk_tea`
--

CREATE TABLE `milk_tea` (
  `tea_id` int(11) NOT NULL,
  `name` varchar(63) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_size` varchar(63) NOT NULL,
  `img` varchar(63) NOT NULL,
  `status` varchar(63) NOT NULL,
  `flavor` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milk_tea`
--

INSERT INTO `milk_tea` (`tea_id`, `name`, `price`, `qty`, `product_size`, `img`, `status`, `flavor`) VALUES
(1, 'winter', 230, 245, 'L', 'tea5.png', 'Active', 'Winter Melon'),
(2, 'taro', 150, 199, 'L', 'tea2.png', 'Active', 'Taro'),
(3, 'tea3', 115, 200, 'L', 'tea3.png', 'InActive', 'Taro'),
(4, 'tea4', 150, 142, 'L', 'tea4.png', 'Active', 'Redvelvet'),
(5, 'tea5', 150, 200, 'L', 'tea5.png', 'InActive', 'Redvelvet'),
(6, 'MatchaRap', 200, 100, 'L', 'tea5.png', 'InActive', 'Matcha'),
(7, 'Winter Melon', 20, 101, 'L', '', 'InActive', 'Bubble'),
(8, 'Taro_tea', 20, 88, 'L', '', 'InActive', 'Taro');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `delivery` varchar(300) NOT NULL,
  `d_date` varchar(30) NOT NULL,
  `time` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `delivery_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `firstname`, `lastname`, `city`, `address`, `country`, `email`, `contact`, `payable`, `status`, `confirmation`, `delivery`, `d_date`, `time`, `payment`, `delivery_type`) VALUES
(116, 'joel', 'talion', '', 'caloocan', '', 'jt@yahoo.com', 2147483647, 840, 'Pending', '3706138', 'Hospital, Chapel, Pick Up or Other Instruction', '', '', 'BDO', ''),
(115, 'step', 'ganda', '', 'navotas', '', 'dyandyan@yahoo.com', 2147483647, 1680, 'Pending', '3952521', 'Hospital, Chapel, Pick Up or Other Instruction', '', '', 'BDO', ''),
(112, 'creator', 'Rozz', '', 'bahay', '', 'creator@gmail.com', 346456, 1680, 'To Deliver', '1062160', 'temple2', '2021-01-25', '', 'BDO', ''),
(113, 'creator', 'Rozz', '', 'bahay', '', 'creator@gmail.com', 346456, 1680, 'To Deliver', '4539300', 'Hospital, Chapel, Pick Up or Other Instruction', '2021-01-26', '', 'BDO', ''),
(114, 'creator', 'Rozz', '', 'bahay', '', 'creator@gmail.com', 346456, 3360, 'To Deliver', '2584551', 'Hospital, Chapel, Pick Up or Other Instruction', '2021-01-25', '', 'BDO', ''),
(111, 'creator', 'Rozz', '', 'bahay', '', 'creator@gmail.com', 346456, 1680, 'To Deliver', '1584134', 'temple', '2021-01-23', '', 'BDO', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int(23) NOT NULL,
  `total` int(23) NOT NULL,
  `cus_name` varchar(250) NOT NULL,
  `cnt` int(23) NOT NULL,
  `price` int(23) NOT NULL,
  `id` int(23) NOT NULL,
  `type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`flower_id`, `img`, `name`, `qty`, `total`, `cus_name`, `cnt`, `price`, `id`, `type`) VALUES
(2, '', '', 0, 0, '', 1, 0, 0, ''),
(2, '', '', 0, 0, '', 2, 0, 0, ''),
(2, '', '', 0, 0, '', 3, 0, 0, ''),
(2, '', '', 0, 0, '', 4, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 5, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 6, 0, 0, '1192683'),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 7, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 8, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 9, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 10, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 11, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 12, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 13, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 14, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 15, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 16, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 17, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 18, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 19, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 20, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 21, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 22, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 23, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 24, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 25, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 26, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 27, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 28, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 29, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 30, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 31, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 32, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 33, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 34, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 35, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 36, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 37, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 38, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 39, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 40, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 41, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 42, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 43, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 44, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 45, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 46, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 47, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 48, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 49, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 50, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 51, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 52, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 53, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 54, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 55, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 56, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 57, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 58, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 59, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 60, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 61, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 62, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 63, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 64, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 65, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 66, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 67, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 68, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 69, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 70, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 71, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 72, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 73, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 74, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 75, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 76, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 77, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 78, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 79, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 80, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 81, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 82, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 83, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 84, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 85, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 86, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 87, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 88, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 89, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 90, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 91, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 92, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 93, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 94, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 95, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 96, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 97, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 98, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 99, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 100, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 101, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 102, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 103, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 104, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 105, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 106, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 107, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 108, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 109, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 110, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 111, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 112, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 113, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 114, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 115, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 116, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 117, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 118, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 119, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 120, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 121, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 122, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 123, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 124, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 125, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 126, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 127, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 128, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 129, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 130, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 131, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 132, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 133, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 134, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 135, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 136, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 137, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 138, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 139, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 140, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 141, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 142, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 143, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 144, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 145, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 146, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 147, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 148, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 149, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 150, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 151, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 152, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 153, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 154, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 155, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 156, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 157, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 158, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 159, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 160, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 161, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 162, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 163, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 164, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 165, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 166, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 167, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 168, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 169, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 170, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 171, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 172, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 173, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 174, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 175, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 176, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 177, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 178, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 179, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 180, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 181, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 182, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 183, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 184, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 185, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 186, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 187, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 188, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 189, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 190, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 191, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 192, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 193, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 194, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 195, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 196, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 197, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 198, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 199, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 200, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 201, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 202, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 203, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 204, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 205, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 206, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 207, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 208, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 209, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 210, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 211, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 212, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 213, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 214, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 215, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 216, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 217, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 218, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 219, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 220, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 221, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 222, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 223, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 224, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 225, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 226, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 227, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 228, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 229, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 230, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 231, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 232, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 233, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 234, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 235, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 236, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 237, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 238, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 239, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 240, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 241, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 242, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 243, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 244, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 245, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 246, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 247, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 248, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 249, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 250, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 251, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 252, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 253, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 254, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 255, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 256, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 257, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 258, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 259, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 260, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 261, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 262, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 263, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 264, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 265, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 266, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 267, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 268, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 269, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 270, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 271, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 272, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 273, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 274, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 275, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 276, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 277, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 278, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 279, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 280, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 281, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 282, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 283, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 284, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 285, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 286, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 287, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 288, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 289, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 290, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 291, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 292, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 293, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 294, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 295, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 296, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 297, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 298, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 299, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 300, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 301, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 302, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 303, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 304, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 305, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 306, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 307, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 308, 0, 0, ''),
(2, '', '', 0, 0, '', 309, 0, 0, ''),
(2, '', '', 0, 0, '', 310, 0, 0, ''),
(2, '', '', 0, 0, '', 311, 0, 0, ''),
(2, '', '', 0, 0, '', 312, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 313, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 314, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 315, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 316, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 317, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 318, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 319, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 320, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 321, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 322, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 323, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 324, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 325, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 326, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 327, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 328, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 329, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 330, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 331, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 332, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 333, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 334, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 335, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 336, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 337, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 338, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 339, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 340, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 341, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 342, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 343, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 344, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 345, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 346, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 347, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 348, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 349, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 350, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 351, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 352, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 353, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 354, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 355, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 356, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 357, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 358, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 359, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 360, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 361, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 362, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 363, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 364, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 365, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 366, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 367, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 368, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 369, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 370, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 371, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 372, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 373, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 374, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 375, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 376, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 377, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 378, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 379, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 380, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 381, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 382, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 383, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 384, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 385, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 386, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 387, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 388, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 389, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 390, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 391, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 392, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 393, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 394, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 395, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 396, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 397, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 398, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 399, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 400, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 401, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 402, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 403, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 404, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 405, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 406, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 407, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 408, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 409, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 410, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 411, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 412, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 413, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 414, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 415, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 416, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 417, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 418, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 419, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 420, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 421, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 422, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 423, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 424, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 425, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 426, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 427, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 428, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 429, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 430, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 431, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 432, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 433, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 434, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 435, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 436, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 437, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 438, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 439, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 440, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 441, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 442, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 443, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 444, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 445, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 446, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 447, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 448, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 449, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 450, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 451, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 452, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 453, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 454, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 455, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 456, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 457, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 458, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 459, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 460, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 461, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 462, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 463, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 464, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 465, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 466, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 467, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 468, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 469, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 470, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 471, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 472, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 473, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 474, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 475, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 476, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 477, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 478, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 479, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 480, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 481, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 482, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 483, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 484, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 485, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 486, 0, 0, ''),
(2, 'l2.png', 'lavander2', 1, 35, 'rensie', 487, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 488, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 489, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 490, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 491, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 492, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 493, 0, 0, ''),
(1, 'v1.jpg', 'v1', 4, 7200, 'rensie', 494, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 495, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 496, 0, 0, ''),
(1, 'v1.jpg', 'v1', 2, 3600, 'rensie', 497, 0, 0, ''),
(1, 'v1.jpg', 'v1', 5, 9000, 'rensie', 498, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 499, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 500, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 501, 0, 0, ''),
(1, 'v1.jpg', 'v1', 1, 1800, 'rensie', 502, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 503, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 1, 800, 'rensie', 504, 0, 0, ''),
(4, 'b4.jpg', 'basket4', 1, 900, 'rensie', 505, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 506, 0, 0, ''),
(4, 'b4.jpg', 'basket4', 1, 900, 'rensie', 507, 0, 0, ''),
(6, 'b6.jpg', 'basket6', 1, 700, 'rensie', 508, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 509, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 510, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 1, 800, 'rensie', 511, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 512, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 4, 2800, 'rensie', 513, 0, 0, ''),
(3, 'b3.jpg', 'basket3', 1, 700, 'rensie', 514, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 2, 1600, 'rensie', 515, 0, 0, ''),
(5, 'b5.jpg', 'basket5', 1, 700, 'rensie', 516, 0, 0, ''),
(2, 'v2.jpg', 'v2', 17, 1700, 'rensie', 517, 0, 0, ''),
(1, 'v1.jpg', 'v1', 8, 1800, 'rensie', 518, 0, 0, ''),
(2, 'v2.jpg', 'v2', 17, 1700, 'rensie', 519, 0, 0, ''),
(3, 'v3.jpg', 'v3', 2, 1700, 'rensie', 520, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'rensie', 521, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 2, 800, 'rensie', 522, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 3, 700, 'rensie', 523, 0, 0, ''),
(4, 'b4.jpg', 'basket4', 2, 900, 'rensie', 524, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 1, 800, 'rensie', 525, 0, 0, ''),
(2, 'b2.jpg', 'basket2', 1, 700, 'creator', 527, 0, 0, ''),
(1, 'b1.jpg', 'basket1', 1, 800, 'creator', 528, 0, 0, ''),
(2, 'b2.png', 'basket2', 1, 700, 'cojul', 531, 700, 23, 'arrangement'),
(1, 'b1.png', 'basket1', 1, 800, 'cojul', 532, 800, 23, 'arrangement'),
(2, 'b2.png', 'basket2', 1, 700, 'cojul', 533, 700, 23, 'arrangement'),
(0, 'tea2.png', ',', 1, 150, 'joel', 534, 0, 28, ''),
(0, 'tea2.png', ',', 1, 150, 'joel', 535, 0, 28, ''),
(0, 'tea1.png', ',', 1, 230, 'joel', 536, 0, 28, ''),
(0, 'tea2.png', ',', 1, 168, 'joel', 537, 0, 28, ''),
(0, 'tea1.png', ',', 1, 258, 'joel', 538, 0, 28, ''),
(0, 'tea2.png', ',', 1, 168, 'joel', 539, 0, 28, ''),
(0, 'tea1.png', ',', 1, 258, 'joel', 540, 0, 28, ''),
(0, 'tea1.png', ',', 1, 258, 'joel', 541, 0, 28, ''),
(0, 'tea1.png', ',', 1, 258, 'joel', 542, 0, 28, ''),
(0, 'tea4.png', ',', 1, 168, 'cojul', 543, 0, 23, ''),
(0, 'tea4.png', ',', 2, 168, 'cojul', 544, 0, 23, ''),
(0, 'tea4.png', ',', 10, 168, 'creator', 545, 0, 24, ''),
(0, 'tea4.png', ',', 10, 168, 'creator', 546, 0, 24, ''),
(0, 'tea4.png', ',', 10, 168, 'creator', 547, 0, 24, ''),
(0, 'tea4.png', ',', 10, 168, 'creator', 548, 0, 24, ''),
(4, 'tea4.png', ',', 3, 168, 'creator', 549, 0, 24, ''),
(4, 'tea4.png', ',', 4, 168, 'creator', 550, 0, 24, ''),
(4, 'tea4.png', ',', 1, 168, 'creator', 551, 0, 24, ''),
(4, 'tea4.png', ',', 9, 168, 'creator', 552, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'creator', 553, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'creator', 554, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'creator', 555, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'creator', 556, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'creator', 557, 0, 24, ''),
(4, 'tea4.png', ',', 10, 168, 'step', 558, 0, 29, ''),
(2, 'tea2.png', ',', 5, 168, 'step', 559, 0, 29, ''),
(4, 'tea4.png', ',', 5, 168, 'joel', 560, 0, 28, '');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `cnt` int(23) NOT NULL,
  `id` varchar(23) NOT NULL,
  `flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `total` varchar(250) NOT NULL,
  `cus_name` varchar(250) NOT NULL,
  `type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`cnt`, `id`, `flower_id`, `img`, `name`, `price`, `qty`, `total`, `cus_name`, `type`) VALUES
(4, '29', 4, 'tea4.png', 'tea4', 150, 10, '1500', 'step', 'Milk Tea'),
(5, '29', 2, 'tea2.png', 'taro', 150, 5, '750', 'step', 'Milk Tea'),
(6, '28', 4, 'tea4.png', 'tea4', 150, 5, '750', 'joel', 'Milk Tea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_tea`
--
ALTER TABLE `milk_tea`
  ADD PRIMARY KEY (`tea_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`cnt`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`cnt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `milk_tea`
--
ALTER TABLE `milk_tea`
  MODIFY `tea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `cnt` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=561;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `cnt` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
