-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2019 at 02:33 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_fire`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(6) NOT NULL,
  `user_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `user_mobile`, `user_address`, `user_email`, `user_password`, `user_type`) VALUES
('GRQsDLOVIEkZ1KcU', 'shikha', '6767676788', 'Lko', 'shikha22@gmail.com', '1234', 2),
('Oa8uH5Y0PGLp1iwg', 'abc', '44555567', 'Rbl', 'abc@gmail.com', '1111', 2),
('pEJwFkj6Vmebi0s4', 'shikha', '6767676788', 'Lko', 'shikha@gmail.com', 'asdf', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
