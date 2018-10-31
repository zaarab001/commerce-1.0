-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 01:20 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2h_mobile`
--
CREATE DATABASE IF NOT EXISTS `2h_mobile` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2h_mobile`;

-- --------------------------------------------------------

--
-- Table structure for table `pending_withdrawal`
--

CREATE TABLE IF NOT EXISTS `pending_withdrawal` (
  `pw_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `date_withdraw` datetime NOT NULL,
  PRIMARY KEY (`pw_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_2hmobile`
--

CREATE TABLE IF NOT EXISTS `users_2hmobile` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` varchar(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `bank_account_name` varchar(50) NOT NULL,
  `date_reg` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_2hmobile`
--

INSERT INTO `users_2hmobile` (`user_id`, `ref_id`, `full_name`, `phone_number`, `email`, `password`, `bank_name`, `account_number`, `bank_account_name`, `date_reg`) VALUES
(1, '2h0001', 'Memunat Manzuma', '08160730725', 'zaarab001@gmail.com', 'fbade9e36a3f36d3d676c1b808451dd7', 'GTBank', '0154590012', 'Memunat Manzuma', '2018-08-12'),
(2, '2h00021818', 'Salihu Abdulkadir', '08064663601', 'salihulapai@gmail.com', '2dfbf5c049ea0b1d8988626c406fab06', 'UBA', '2059095316', 'A Salihu ', '2018-08-16'),
(3, '2h18000308', 'Usman Musa', '08033445566', 'nmzh001@gmai.com', '7b774effe4a349c6dd82ad4f4f21d34c', 'First Bank', '2659095313', 'Usman Musa', '2018-08-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
