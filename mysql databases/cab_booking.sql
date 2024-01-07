-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 12:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab_booking`
--

CREATE TABLE `cab_booking` (
  `user_id` int(100) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `drop_loc` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `btime` time(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cab_booking`
--

INSERT INTO `cab_booking` (`user_id`, `requirement`, `pickup`, `drop_loc`, `bdate`, `btime`, `name`, `email`, `phone`, `image`, `user`) VALUES
(1, '####', '####', '####', '2023-10-15', '18:00:00.00', 'admin', 'admin@gmail.com', 8777644951, '', 'admin'),
(2, 'sixseater', 'kolkata', 'howrah', '2023-10-16', '10:00:00.00', 'Shilarchana', 'shila@gmail.com', 9876543210, './upload/1697368525__DSC0460.jpg', 'client'),
(3, 'fourseater', 'kolkata', 'howrah', '2023-10-21', '22:50:00.00', 'Payel', 'payelbanerjee9319@gmail.com', 8777644951, './upload/1697619037__DSC0460.jpg', 'client'),
(4, 'fourseater', 'kolkata', 'howrah', '2023-10-18', '17:45:00.00', 'Payel Banerjee', 'parlsbanerjee@gmail.com', 8777644951, './upload/1697368859__DSC0430.jpg', 'client'),
(6, 'twowheeler', 'kolkata', 'howrah', '2023-10-21', '14:54:00.00', 'Payel Banerjee', 'p@gmail.com', 8777644951, './upload/1697793569__DSC0354-2.jpg', 'client'),
(7, 'sixseater', 'howrah', 'kolkata', '2023-10-29', '14:52:00.00', 'Payel Banerjee', 'payelbanerjee@gmail.com', 8777644951, './upload/1697793640__DSC0388-2.jpg', 'client'),
(8, 'sixseater', 'howrah', 'kolkata', '2023-10-28', '15:41:00.00', 'Payel Banerjee', 'pb@gmail.com', 8777644951, './upload/1697796409__DSC0402.jpg', 'client'),
(9, 'fourseater', 'howrah', 'kolkata', '2023-10-27', '22:37:00.00', 'Payel Banerjee', 'payelbaner@gmail.com', 8777644951, './upload/1697796468__DSC0329.jpg', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cab_booking`
--
ALTER TABLE `cab_booking`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cab_booking`
--
ALTER TABLE `cab_booking`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
