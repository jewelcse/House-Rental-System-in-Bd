-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 08:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houserent`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `booking_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_rent` text NOT NULL,
  `house_address` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`booking_id`, `house_id`, `house_name`, `house_rent`, `house_address`, `user_firstname`, `user_lastname`, `user_email`) VALUES
(9, 10, 'jewel vila', '20000', 'House-47, Road-35A, Gulshan-2, Dhaka.', 'Jewel', 'Chowdhury', 'jewelcse045@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Luxary'),
(2, 'Middle'),
(3, 'Simple');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_image` text NOT NULL,
  `house_rent` text NOT NULL,
  `added_date` date NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `booking_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `user_id`, `category`, `house_name`, `house_image`, `house_rent`, `added_date`, `description`, `address`, `booking_status`) VALUES
(1, 0, 1, 'Hazi mansion', 'Hazi manson.jpg', '18000', '2018-07-07', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-35A, Gulshan-2, Dhaka.', 0),
(5, 0, 2, 'Rakib House', 'Ma manson.jpg', '12000', '2018-07-07', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-9, Barishal.', 0),
(6, 0, 1, 'Foysal Cutter', 'Chowdhury Cuter.jpg', '13000', '2018-07-18', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-9, Barishal.', 0),
(7, 0, 1, 'Kzaman Vila', 'Hazi manson.jpg', '14000', '2018-07-07', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-9, Barishal.', 0),
(8, 0, 2, 'Showkat Vila', 'download (7).jpg', '16500', '2018-07-07', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-9, Barishal.', 0),
(9, 0, 1, 'Bellal Place', 'images (3).jpg', '18000', '2018-07-18', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-35A, Gulshan-2, Dhaka.', 0),
(10, 0, 1, 'jewel vila', 'images (1).jpg', '20000', '2018-07-07', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>\r\n<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-35A, Gulshan-2, Dhaka.', 1),
(13, 5, 2, 'ohidul vila', 'images (2).jpg', '20000', '2018-07-07', 'Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).\r\n\r\nReservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).					\r\n					', 'à¦•à§à¦¶à¦²à¦¾,à¦•à§‹à¦Ÿà¦¾à¦²à¦¿à¦ªà¦¾à¦¡à¦¼à¦¾,à¦—à§‹à¦ªà¦¾à¦²à¦—à¦žà§à¦œ', 0),
(14, 4, 1, 'Ma manson', 'download (2).jpg', '25000', '2018-07-18', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below). Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'Barishal , rupatoli', 0),
(15, 4, 3, 'Hazi mansion', 'download (6).jpg', '5000', '2018-07-21', '<p>Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below). Reservations may be made by phone or online and are confirmed with a credit card charge of $25.00 per room. The charge will be applied to the balance due at checkout, unless the reservation is changed or canceled (see policies below).</p>', 'House-47, Road-9, Barishal.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_password`) VALUES
(4, 'aminul', 'islam', 'aminulcse', 'aminul@gmail.com', '12345'),
(5, 'ohidul', 'islam', 'ohidulcse', 'ohid@hmail.com', 'csebu'),
(6, 'Asiq', 'islam', 'asiqcse', 'asiq@gmail.com', '12345'),
(7, 'Jewel', 'Chowdhury', 'jewelcse', 'jewelcse045@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
