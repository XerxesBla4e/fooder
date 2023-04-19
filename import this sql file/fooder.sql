-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2021 at 07:05 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `username`, `password`) VALUES
(3, 'manzi', 'pidson', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) DEFAULT NULL,
  `image_name` varchar(25) DEFAULT NULL,
  `featured` varchar(4) DEFAULT NULL,
  `active` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(8, 'local', 'Food_Category_934.jpg', 'Yes', 'Yes'),
(7, 'International', 'Food_Category_798.jpg', 'Yes', 'Yes'),
(9, 'hybrid', 'Food_Category_195.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

DROP TABLE IF EXISTS `tbl_food`;
CREATE TABLE IF NOT EXISTS `tbl_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) DEFAULT NULL,
  `description` varchar(25) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `image_name` varchar(25) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(25) DEFAULT NULL,
  `active` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(7, 'momo', 'yummiest', '437.00', 'Food_Name_109.jpg', 9, 'Yes', 'No'),
(6, 'Pizza', 'yummy', '234.00', 'Food_Name_255.jpg', 9, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food` varchar(25) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `customer_name` varchar(25) DEFAULT NULL,
  `customer_contact` varchar(25) DEFAULT NULL,
  `customer_email` varchar(25) DEFAULT NULL,
  `customer_address` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Pizza', '234.00', 1, 234, '2021-05-16 16:36:40', 'Ordered', 'pidson ', '0785463574', 'manzipiddy@gmail.com', ' kampala'),
(2, 'Pizza', '234.00', 1, 234, '2021-05-16 16:37:43', 'Delivered', 'pidson ', '0785463574', 'manzipiddy@gmail.com', ' kasa'),
(3, 'Pizza', '234.00', 1, 234, '2021-05-16 16:46:26', 'Ordered', 'pidson  ', '0785463574', 'manzipiddy@gmail.com', ' kla'),
(4, 'Pizza', '234.00', 3, 702, '2021-05-16 16:48:03', 'Ordered', 'pidson  ', '0785463574', 'manzipiddy@gmail.com', ' kla'),
(5, 'Pizza', '234.00', 3, 702, '2021-05-16 16:48:52', 'Ordered', 'piddy ', '0774118491', 'mugb@gmail.com', ' mbarara'),
(6, 'Pizza', '234.00', 2, 468, '2021-05-16 16:49:42', 'Ordered', 'piddy ', '0774118491', 'manzipidson@gmail.com', ' mbarara'),
(7, 'Pizza', '234.00', 2, 468, '2021-05-16 16:50:36', 'Ordered', 'piddy ', '0774118491', 'manzipiddy@gmail.com', ' mbarara'),
(8, 'Pizza', '234.00', 2, 468, '2021-05-16 16:51:01', 'Delivered', 'piddy ', '0774118491', 'manzipiddy@gmail.com', ' mbarara'),
(9, 'Pizza', '234.00', 2, 468, '2021-05-16 16:51:43', 'Delivered', 'manzi ', '0774118491', 'manzipidson@gmail.com', ' mbarara'),
(10, 'Pizza', '234.00', 1, 234, '2021-05-17 04:33:59', 'Ordered', ' ', '', '', ' '),
(11, 'Pizza', '234.00', 1, 234, '2021-05-17 04:34:49', 'Ordered', 'pidson ', 'rgthgtght', '', ' kampala'),
(12, 'Pizza', '234.00', 1, 234, '2021-05-17 04:42:12', 'Ordered', 'Manzi ', 'ggthythtry', 'manzipiddy@gmail.com', ' kampala'),
(13, 'Pizza', '234.00', 1, 234, '2021-05-17 04:46:20', 'Ordered', 'Manzi  ', '122', 'manzipiddy@gmail.com', ' kampala'),
(14, 'Pizza', '234.00', 1, 234, '2021-05-17 04:54:25', 'Ordered', 'Manzi ', '1222', 'manzipiddy@gmail.com', ' kampala'),
(15, 'Pizza', '234.00', 1, 234, '2021-05-17 05:09:01', 'Ordered', '22443434 ', 'dgggr', 'manzipiddy@gmail.com', ' mfmfm'),
(16, 'Pizza', '234.00', 1, 234, '2021-05-18 07:02:20', 'Ordered', 'Manzi  ', '0785463574', 'manzipiddy@gmail.com', ' kampala');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
