-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2021 at 09:40 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agro`
--
CREATE DATABASE IF NOT EXISTS `agro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agro`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(5) NOT NULL,
  `pass` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(25) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dates` varchar(15) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `mobile_no`, `email`, `dates`, `msg`) VALUES
('Test', '9876543210', 'test@gmail.com', '12/24/2020', 'test'),
('Test3', '9876543210', 'test3@gmail.com', '12/15/2020', 'test3'),
('Test3', '9876543210', 'test3@gmail.com', '12/15/2020', 'Test3');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `mobile_no`, `email`, `msg`) VALUES
('Test', '9876543210', 'tech@outlook.com', 'test'),
('Test3', '9876543210', 'test3@gmail.com', 'test3'),
('Test3', '9876543210', 'test3@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `name` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`name`, `mobile_no`, `email`) VALUES
('Test', '9876543210', ''),
('Test3', '9876543210', ''),
('Test3', '9876543210', 'test3@gmail.com'),
('Test4', '7894561230', 'test4@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
