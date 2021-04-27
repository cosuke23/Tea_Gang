-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 03:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mcj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`Id` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `Name`, `Email`, `Address`, `Contact`) VALUES
(1, 'salon', 'salon', 'essentials', 'salon@gmail.com', 'asdvfsdjfm', 2147483647),
(2, 'cojul', '123', 'Julius', 'Cojul@yahoo.com', 'bahay', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `arrangement`
--

CREATE TABLE IF NOT EXISTS `arrangement` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int(23) NOT NULL,
  `price` int(23) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`flower_id`, `img`, `name`, `price`, `qty`, `type`) VALUES
(1, 'b1.jpg', 'basket1', 800, 20, 'arrangement'),
(2, 'b2.jpg', 'basket2', 700, 20, 'arrangement'),
(3, 'b3.jpg', 'basket3', 700, 20, 'arrangement'),
(4, 'b4.jpg', 'basket4', 900, 20, 'arrangement'),
(5, 'b5.jpg', 'basket5', 700, 20, 'arrangement'),
(6, 'b6.jpg', 'basket6', 700, 20, 'arrangement');

-- --------------------------------------------------------

--
-- Table structure for table `bouqet`
--

CREATE TABLE IF NOT EXISTS `bouqet` (
`flower_id` int(23) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bouqet`
--

INSERT INTO `bouqet` (`flower_id`, `img`, `name`, `price`, `qty`, `type`) VALUES
(1, 'bou1.jpg', 'bouquet', 700, 25, 'arrangement'),
(2, 'bou2.jpg', 'bouquet', 800, 25, 'arrangement'),
(3, 'bou3.jpg', 'bouquet', 800, 25, 'arrangement'),
(4, 'bou4.jpg', 'bouquet', 800, 25, 'arrangement'),
(5, 'bou5.jpg', 'bouquet', 800, 25, 'arrangement'),
(6, 'bou6.jpg', 'bouquet', 800, 25, 'arrangement');

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE IF NOT EXISTS `box` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`flower_id`, `img`, `name`, `price`, `qty`) VALUES
(1, 'b1.jpg', 'b1', 500, 23),
(2, 'b2.jpg', 'b2', 500, 23),
(3, 'b3.jpg', 'b3', 500, 23),
(4, 'b4.jpg', 'b4', 500, 23),
(5, 'b5.jpg', 'b5', 500, 23),
(6, 'b6.jpg', 'b6', 500, 23);

-- --------------------------------------------------------

--
-- Table structure for table `boxs`
--

CREATE TABLE IF NOT EXISTS `boxs` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxs`
--

INSERT INTO `boxs` (`flower_id`, `img`, `name`, `price`, `qty`, `type`) VALUES
(1, 'b1.jpg', 'b1', 500, 23, 'arrangement'),
(2, 'b2.jpg', 'b2', 500, 23, 'arrangement'),
(3, 'b3.jpg', 'b3', 500, 23, 'arrangement'),
(4, 'b4.jpg', 'b4', 500, 23, 'arrangement'),
(5, 'b5.jpg', 'b5', 500, 23, 'arrangement'),
(6, 'b6.jpg', 'b6', 500, 23, 'arrangement');

-- --------------------------------------------------------

--
-- Table structure for table `carnation`
--

CREATE TABLE IF NOT EXISTS `carnation` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carnation`
--

INSERT INTO `carnation` (`flower_id`, `img`, `name`, `price`, `qty`) VALUES
(1, 'c1.png', 'carnation1', 45, 35),
(2, 'c2.png', 'carnation2', 45, 35),
(3, 'c3.png', 'carnation3', 45, 35),
(4, 'c4.png', 'carnation4', 45, 35),
(5, 'c5.png', 'carnation5', 45, 35),
(6, 'c6.png', 'carnation6', 45, 35),
(7, 'c7.png', 'carnation7', 45, 35);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`Id` int(11) NOT NULL,
  `Customer_Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Salonista` varchar(40) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Service` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Cus_Id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Customer_Name`, `Email`, `Contact`, `Salonista`, `Category`, `Service`, `Price`, `Day`, `Time`, `Cus_Id`) VALUES
(15, 'Chacha', 'chacha@gmail.com', '09123785102', '1', 'Body Treatment', '1', 1, '02/19/2015', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(23) NOT NULL,
  `Category` varchar(250) NOT NULL,
  `price` int(100) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `Category`, `price`, `status`) VALUES
(1, 'Decoration', 0, 'available'),
(2, 'Occations', 15000, 'available'),
(3, 'Ready to deliver', 10000, 'available'),
(4, 'Fomal events', 10000, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE IF NOT EXISTS `cover` (
`cover_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int(23) NOT NULL,
  `price` int(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cover`
--

INSERT INTO `cover` (`cover_id`, `img`, `name`, `qty`, `price`) VALUES
(1, 'floral.png', 'Floral Red', 24, 25),
(2, 'floral1.png', 'side pink', 24, 25),
(3, 'floral2.png', 'floral pink', 24, 25),
(4, 'pink.png', 'Lady pink', 24, 25),
(5, 'red.png', 'Lovely Red', 24, 25);

-- --------------------------------------------------------

--
-- Table structure for table `cover_temp`
--

CREATE TABLE IF NOT EXISTS `cover_temp` (
`cnt` int(23) NOT NULL,
  `id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(23) NOT NULL,
  `total` int(23) NOT NULL,
  `cus_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cover_temp`
--

INSERT INTO `cover_temp` (`cnt`, `id`, `img`, `name`, `qty`, `total`, `cus_name`) VALUES
(1, 3, 'floral2.png', 'floral pink', 3, 75, 'cojul');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Contact`, `Username`, `Password`) VALUES
(19, 'rensie', 'rensie@yahoo.com', '09123456789', 'rensie', 'rensie');

-- --------------------------------------------------------

--
-- Table structure for table `declined`
--

CREATE TABLE IF NOT EXISTS `declined` (
`Id` int(11) NOT NULL,
  `Cus_Id` int(11) NOT NULL,
  `Customer_Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Salonista` varchar(40) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Service` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declined`
--

INSERT INTO `declined` (`Id`, `Cus_Id`, `Customer_Name`, `Email`, `Contact`, `Salonista`, `Category`, `Service`, `Price`, `Day`, `Time`, `Status`) VALUES
(1, 1, 'Chacha', 'sdada', 'a', '1', 'Body Treatment', '1', 1, '02/27/2015', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE IF NOT EXISTS `flowers` (
`flower_id` int(23) NOT NULL,
  `img` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`flower_id`, `img`, `name`, `price`, `qty`, `status`) VALUES
(1, 'rose.png', 'rose', 35, 20, 'available'),
(2, 'lavander.png', 'lavander', 35, 20, 'available'),
(3, 'carnation.png', 'carnation', 40, 20, 'Avalilable'),
(4, 'sunflower.png', 'sunflower', 45, 20, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `lavander`
--

CREATE TABLE IF NOT EXISTS `lavander` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lavander`
--

INSERT INTO `lavander` (`flower_id`, `img`, `name`, `price`, `qty`) VALUES
(1, 'l1.png', 'lavander1', 35, 20),
(2, 'l2.png', 'lavander2', 35, 20),
(3, 'l3.png', 'lavander3', 35, 20);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
`Id` int(11) NOT NULL,
  `Cus_Id` int(11) NOT NULL,
  `Customer_Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Salonista` varchar(40) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Service` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`Id`, `Cus_Id`, `Customer_Name`, `Email`, `Contact`, `Salonista`, `Category`, `Service`, `Price`, `Day`, `Time`, `Status`) VALUES
(35, 1, 'Chacha', 'chacha@gmail.com', '09123785102', 'chacha2', 'Decoration', 'Hot Stone Massage', 200, '', '2hrs', 'Accepted'),
(36, 0, '', '', '', '', '', '', 0, '', '', ''),
(37, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(38, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(39, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(40, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(41, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(42, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(43, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(44, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(45, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(46, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(47, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(48, 0, '', '', '', '', '', '', 0, '', '', ''),
(49, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', ''),
(50, 1, 'Chacha ', 'sdada ', '09485827213', '1 ', 'Decoration', '1 ', 1, '02/28/2015 ', '1 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int(23) NOT NULL,
  `total` int(23) NOT NULL,
  `cus_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`flower_id`, `img`, `name`, `qty`, `total`, `cus_name`) VALUES
(2, '', '', 0, 0, ''),
(2, '', '', 0, 0, ''),
(2, '', '', 0, 0, ''),
(2, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rose`
--

CREATE TABLE IF NOT EXISTS `rose` (
`flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose`
--

INSERT INTO `rose` (`flower_id`, `img`, `name`, `price`, `qty`) VALUES
(1, 'r1.png', 'rose1', 35, '20'),
(2, 'r2.png', 'rose2', 35, '20'),
(3, 'r3.png', 'rose3', 35, '20'),
(4, 'r4.png', 'rose4', 35, '20'),
(5, 'r5.png', 'rose5', 35, '20'),
(6, 'r6.png', 'rose6', 35, '20'),
(7, 'r7.png', 'rose7', 35, '20');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
`cnt` int(23) NOT NULL,
  `id` varchar(23) NOT NULL,
  `flower_id` int(23) NOT NULL,
  `img` varchar(63) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(23) NOT NULL,
  `qty` int(23) NOT NULL,
  `total` varchar(250) NOT NULL,
  `cus_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`cnt`, `id`, `flower_id`, `img`, `name`, `price`, `qty`, `total`, `cus_name`) VALUES
(49, '19', 2, 'r2.png', 'rose2', 35, 2, '70', 'rensie'),
(50, '19', 2, 'l2.png', 'lavander2', 35, 1, '35', 'rensie'),
(51, '19', 2, 'l2.png', 'lavander2', 35, 1, '35', 'rensie'),
(52, '19', 2, 'l2.png', 'lavander2', 35, 1, '35', 'rensie'),
(53, '19', 2, 'l2.png', 'lavander2', 35, 1, '35', 'rensie'),
(54, '19', 2, 'b2.jpg', 'basket2', 700, 1, '700', 'rensie');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `view_id` int(23) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`view_id`, `name`, `img`) VALUES
(112, 'top', 'top.jpg'),
(112, 'side1', 'side1.jpg'),
(112, 'side2', 'side2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `arrangement`
--
ALTER TABLE `arrangement`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `bouqet`
--
ALTER TABLE `bouqet`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `boxs`
--
ALTER TABLE `boxs`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `carnation`
--
ALTER TABLE `carnation`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
 ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `cover_temp`
--
ALTER TABLE `cover_temp`
 ADD PRIMARY KEY (`cnt`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declined`
--
ALTER TABLE `declined`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `lavander`
--
ALTER TABLE `lavander`
 ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rose`
--
ALTER TABLE `rose`
 ADD PRIMARY KEY (`flower_id`);

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
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `arrangement`
--
ALTER TABLE `arrangement`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bouqet`
--
ALTER TABLE `bouqet`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `boxs`
--
ALTER TABLE `boxs`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `carnation`
--
ALTER TABLE `carnation`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
MODIFY `cover_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cover_temp`
--
ALTER TABLE `cover_temp`
MODIFY `cnt` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `declined`
--
ALTER TABLE `declined`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lavander`
--
ALTER TABLE `lavander`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `rose`
--
ALTER TABLE `rose`
MODIFY `flower_id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
MODIFY `cnt` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
