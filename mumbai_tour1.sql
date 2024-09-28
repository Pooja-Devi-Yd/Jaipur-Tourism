-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 04:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mumbai_tour1`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments_table`
--

CREATE TABLE `payments_table` (
  `id` int(25) NOT NULL,
  `Payments` varchar(100) NOT NULL,
  `card` varchar(100) NOT NULL,
  `card_holder` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Card_nunmber` varchar(100) NOT NULL,
  `Expiry_month` varchar(100) NOT NULL,
  `Expiry_year` varchar(100) NOT NULL,
  `CVV_number` varchar(100) NOT NULL,
  `payee_name` varchar(100) NOT NULL,
  `payee_contact` varchar(50) NOT NULL,
  `payee_address` varchar(255) NOT NULL,
  `payee_email` varchar(50) NOT NULL,
  `Submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `travel_info`
--

CREATE TABLE `travel_info` (
  `id` int(25) NOT NULL,
  `from_journey` varchar(255) NOT NULL,
  `to_journey` varchar(255) NOT NULL,
  `journeydate` varchar(255) NOT NULL,
  `returndate` varchar(255) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `Price_bus` varchar(255) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `travel_info_private`
--

CREATE TABLE `travel_info_private` (
  `id` int(25) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `from_journey2` varchar(255) NOT NULL,
  `to_journey2` varchar(255) NOT NULL,
  `journeydate2` varchar(255) NOT NULL,
  `returndate2` varchar(255) NOT NULL,
  `name_pri` varchar(100) NOT NULL,
  `contact_pri` varchar(100) NOT NULL,
  `address_pri` varchar(255) NOT NULL,
  `email_pri` varchar(100) NOT NULL,
  `Bus_price` varchar(100) NOT NULL,
  `Car_price` varchar(100) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments_table`
--
ALTER TABLE `payments_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_info`
--
ALTER TABLE `travel_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_info_private`
--
ALTER TABLE `travel_info_private`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments_table`
--
ALTER TABLE `payments_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `travel_info`
--
ALTER TABLE `travel_info`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `travel_info_private`
--
ALTER TABLE `travel_info_private`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
