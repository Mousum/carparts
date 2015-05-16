-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2015 at 10:25 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carparts`
--
CREATE DATABASE IF NOT EXISTS `carparts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carparts`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_date` int(10) NOT NULL,
  `update_date` int(10) NOT NULL,
  `is_block` tinyint(4) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`, `create_date`, `update_date`, `is_block`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 121212, 121212, 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(150) NOT NULL,
  `create_date` int(15) NOT NULL,
  `update_date` int(15) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_image`
--

CREATE TABLE IF NOT EXISTS `content_image` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL,
  `image_location` varchar(150) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(10) NOT NULL,
  `department_name` varchar(20) NOT NULL,
  `department_description` varchar(100) NOT NULL,
  `model_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `engine_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE IF NOT EXISTS `engine` (
  `engine_id` int(10) NOT NULL AUTO_INCREMENT,
  `engine_name` varchar(100) NOT NULL,
  `engine_description` text NOT NULL,
  `engine_power` varchar(100) NOT NULL,
  `model_id` int(10) NOT NULL,
  PRIMARY KEY (`engine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(10) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `create_date` int(10) NOT NULL,
  `update_date` int(10) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(10) NOT NULL,
  `product_sub_dept_id` int(10) NOT NULL,
  `poduct_brand_id` int(10) NOT NULL,
  `product_model_id` int(10) NOT NULL,
  `product_engine_id` int(10) NOT NULL,
  `product_price` double NOT NULL,
  `create_date` int(10) NOT NULL,
  `update_date` int(10) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_front_page` tinyint(4) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL,
  `image_loctation` varchar(150) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_meta_description`
--

CREATE TABLE IF NOT EXISTS `product_meta_description` (
  `description_id` int(10) NOT NULL,
  `description_name` varchar(150) NOT NULL,
  `description_value` text NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_department`
--

CREATE TABLE IF NOT EXISTS `sub_department` (
  `sub_departmet_id` int(10) NOT NULL AUTO_INCREMENT,
  `department_id` int(10) NOT NULL,
  `sub_department_name` varchar(20) NOT NULL,
  `patent_id` int(10) NOT NULL,
  PRIMARY KEY (`sub_departmet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
