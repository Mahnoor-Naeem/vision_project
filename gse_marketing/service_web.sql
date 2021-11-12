-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 09:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'AC Install and Repair', 'ac.jpeg'),
(2, 'Microwave Repairing', 'microwave.jpg'),
(3, 'Plumbing Service', 'plumbing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_category` varchar(255) NOT NULL,
  `order_city` varchar(255) NOT NULL,
  `order_area` varchar(255) NOT NULL,
  `order_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_email`, `order_category`, `order_city`, `order_area`, `order_address`) VALUES
(1, 'Taha Farooqui', 'tahaa25@gmail.com', '', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(2, 'Taha Farooqui', 'tahaa25@gmail.com', '4', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(3, 'Taha Farooqui', 'tahaa25@gmail.com', '4', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(4, 'Taha Farooqui', 'tahaa25@gmail.com', '4', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(5, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '1', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(6, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '1', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(7, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '1', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(8, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '5', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(9, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '5', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(10, 'Muzammil Hussain', 'mohdtaha9901@gmail.com', '3', 'karachi', 'shah faisal colony', 'Bloack 4 House No 1201, Shah Faisal Colony'),
(11, 'Muzammil Hussain', 'mohdtaha9901@gmail.com', '3', 'karachi', 'shah faisal colony', 'Bloack 4 House No 1201, Shah Faisal Colony'),
(12, 'Taha Farooqui', 'mohdtaha9901@gmail.com', '2', 'karachi', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(13, 'shahrukh ', 'serbermz2020@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(14, 'shahrukh ', 'serbermz2020@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(15, 'shahrukh ', 'serbermz2020@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(16, 'shahrukh ', 'serbermz2020@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(17, 'Taha Farooqui', 'tahaa25@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan'),
(18, 'Taha Farooqui', 'tahaa25@gmail.com', '3', 'Shah Faisal Town', 'shah faisal colony', 'Shah Faisal Colony 5, Karachi, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `q_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `q_email` varchar(255) NOT NULL,
  `q_sub` varchar(255) NOT NULL,
  `q_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`q_id`, `q_name`, `q_email`, `q_sub`, `q_msg`) VALUES
(1, 'Taha Farooqui', 'tahaa25@gmail.com', 'Check', 'Great Work!'),
(2, 'Taha Farooqui', 'tahaa25@gmail.com', 'Check', 'Great Work!'),
(3, 'Taha Farooqui', 'tahaa25@gmail.com', 'Check', 'Great Work!'),
(4, 'Taha Farooqui', 'tahaa25@gmail.com', 'Check', 'Great Work!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'taha', 'taha@gmail.com', '1230045');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
