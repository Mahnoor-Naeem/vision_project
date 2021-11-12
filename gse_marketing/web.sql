-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 04:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `display_home` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`, `display_home`) VALUES
(1, 'Automotive Repair Shop', 'fas fa-tools', 1),
(2, 'Car Wash', 'fas fa-car', 0),
(3, 'Barber Shop', 'fas fa-cut', 1),
(4, 'Beauty Salon', 'fas fa-spray-can', 1),
(5, 'College & University', 'fas fa-graduation-cap', 0),
(6, 'School', 'fas fa-school', 0),
(7, 'Bank', 'fas fa-money-check-alt', 0),
(8, 'Food & Beverage', 'fas fa-utensils', 1),
(9, 'Grocery Store', 'fas fa-shopping-cart', 0),
(10, 'Restaurant', 'fas fa-hamburger', 0),
(11, 'Photography Videography', 'fas fa-video', 1),
(12, 'Medical & Health', 'fas fa-clinic-medical', 0),
(13, 'Pharmacy', 'fas fa-mortar-pestle', 1),
(14, 'Optician', 'fas fa-prescription', 0),
(15, 'Real Estate', 'fas fa-laptop-house', 0),
(16, 'Shopping & Retail', 'fas fa-store', 0),
(17, 'Bookstore', 'fas fa-swatchbook', 0),
(18, 'Home & Garden Store', 'fas fa-seedling', 1),
(19, 'Mobile Phone Shop', 'fas fa-mobile-alt', 0),
(20, 'Shopping Mall', 'fas fa-shopping-bag', 0),
(21, 'Sporting Goods Store', 'fas fa-table-tennis', 0),
(22, 'Sports & Recreation', 'fas fa-futbol', 0),
(23, 'Travel & Transportation', 'fas fa-bus-alt', 1),
(24, 'Books & Magazines ', 'fas fa-book', 0);

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
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_img` varchar(255) NOT NULL,
  `shop_rating` float NOT NULL,
  `shop_logo` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `shop_desc` varchar(255) NOT NULL,
  `shop_email` varchar(255) NOT NULL,
  `shop_phone` varchar(255) NOT NULL,
  `shop_map` varchar(255) NOT NULL,
  `shop_url` varchar(255) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_img`, `shop_rating`, `shop_logo`, `shop_address`, `shop_desc`, `shop_email`, `shop_phone`, `shop_map`, `shop_url`, `cat_id`) VALUES
(1, 'Moos \'n\' Clucks', 'moornclucks.jpg', 4.2, 'moornclucks-logo.jpg', 'Allah Noor Apartment، Block 7 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh', 'Back in 2017 two best friends came together with an aim to bring premium burgers to Gulshan. One loved chicken fillets, the other fancied beef patties. That’s how Moos ‘n’ Clucks was born.', 'moornclucks@gmail.com', '0312 1662662', '!1m14!1m8!1m3!1d50105.231273647434!2d67.10025201826865!3d24.92948398100519!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e003cf0a5c6630f!2sMoos%20&#39;n&#39;%20Clucks!5e0!3m2!1sen!2s!4v1636353632888!5m2!1sen!2s', 'https://www.moosnclucks.com/', 8),
(2, 'Lavish Hair And Beauty Salon', 'lavish.jpg', 3.6, 'lavish-logo.jpg', '259, Opp Printing Press, Main Jinnah Ave, near Bank Al Habib, Gulshan E Amin Chs Malir Halt, Karachi, Karachi City, Sindh', 'Gulshan: C-26, Near Eastern Sweets, Gulshan-e-Iqbal, Blk 10-A, Main Rashid Minhas Road, Khi______Dha: Shop No 1, Building 22-C, Rahat Lane 1, Dha Phase 6, Khi_____Malir Halt: 259, Opp Printing Press, Main Jinnah Avenue, Near Bank Al Habib, Malir Halt, Kh', 'lavish_hair_and_beauty_saloon@outlook.com', '0321 3420429', '!1m18!1m12!1m3!1d3619.323847547566!2d67.17375951437158!3d24.88693285032652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33957a7452883%3A0x95be465e70389db!2sLavish%20Hair%20And%20Beauty%20Salon%20Malir%20Halt%20Branch!5e0!3m2!1sen!2s!4v1636355163', 'https://www.facebook.com/LavishSaloon', 4),
(3, 'ROYAL ICE & SPICE', 'royaliceandspice.jpg', 4.1, 'royaliceandspice-logo.jpg', '1-C, Sindhi Muslim Cooperative Housing Society Block A Sindhi Muslim CHS (SMCHS), Karachi, Karachi City, Sindh 75500', 'Royal ice & spice has been located in Sindhi Muslim since 1988 with a loyal and dedicated following. A lot has changed in the neighborhood since then, but the Royalâ€™s mission has never wavered: warm, familiar faces, and delicious, consistent food at rea', 'royaliceandspice@gmail.com', '0300 8243510', '!1m18!1m12!1m3!1d3620.0270516418254!2d67.0524072143711!3d24.862925651283373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e85bac9c91d%3A0xd2112f6b23176ff0!2sRoyal%20Ice%20%26%20Spice!5e0!3m2!1sen!2s!4v1636356220251!5m2!1sen!2s', 'https://royaliceandspice.com/', 8);

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
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`),
  ADD KEY `cat_id` (`cat_id`);

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
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
