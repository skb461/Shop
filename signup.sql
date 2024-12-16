-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 05:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'Skinpro', '500', 'cleanser.jpg'),
('2', 'Crystal', '1000', 'cream.jpg'),
('3', 'St.Ives', '800', 'scrub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `email`, `pass`) VALUES
(1, 'Admin_Barnali', 'admin123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bodywash`
--

CREATE TABLE `bodywash` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bodywash`
--

INSERT INTO `bodywash` (`product_id`, `Name`, `price`, `picture`) VALUES
('2', 'PALMOLIVE', '1000', 'bodywash2.jpg'),
('3', 'Dove', '750', 'bodywash3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'accessories'),
(2, 'bodywash'),
(4, 'products'),
(5, 'serum'),
(6, 'shampoo'),
(7, 'skincare'),
(8, 'soap'),
(9, 'sunscreen');

-- --------------------------------------------------------

--
-- Table structure for table `conditioner & treatment`
--

CREATE TABLE `conditioner & treatment` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conditioner & treatment`
--

INSERT INTO `conditioner & treatment` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'L\'OREAL Paris', '1500', 'LOreal.jpg'),
('2', 'TRESemme', '1600', 'Tresemme.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(25) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `num`, `mail`, `pass`, `address`) VALUES
(2, 'aby', 'ddd', '018387463782', 'hasansakib461@gmail.com', '12345', ''),
(3, 'Elicia', 'Rosa', '08053723507', 'brazagopal68@gmail.com', '23456', ''),
(11, 'abc', 'www', '01848263424', 'new12@gmail.com', '1234', 'Niribili, Savar, Dhaka'),
(12, 'rima', 'begum', '01848374076', 'barnaliart88@gmail.com', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `delivered_to` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `deliver_address` int(11) NOT NULL,
  `pay_method` int(11) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_img`, `price`, `category_id`, `updated_date`) VALUES
(1, 'shampoo1', 'dfasfajksfja', './uploads/mockup.jpg', 200, 6, '0000-00-00'),
(2, 'sunscreen', 'fjnkzjvldklakafj', './uploads/D&T.jpg', 300, 9, '0000-00-00'),
(3, 'Facial massage', 'fjnkzjvldklakafj', './uploads/roller.jpg', 200, 4, '0000-00-00'),
(4, 'Mix Bar', 'This elegant image showcases two hands gracefully holding two exquisite bottles of perfume, symbolizing the art of fragrance and personal expression. The sleek design of the bottles reflects sophistic', './uploads/fragrance.jpg', 400, 4, '0000-00-00'),
(5, 'Focular Set', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/all-cream.jpg', 1500, 4, '0000-00-00'),
(6, 'Kinfield Sunscreen', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/sun.jpg', 700, 4, '0000-00-00'),
(7, 'Kinfield Sunscreen', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/sun.jpg', 700, 9, '0000-00-00'),
(8, 'Pink cloud moisturizer', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/single.jpg', 1200, 4, '0000-00-00'),
(9, 'Skin lip oil', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/all_big.jpg', 240, 4, '0000-00-00'),
(10, 'Ultimate Radiance Shampoo', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/shampoo-bottle.jpg', 2400, 6, '0000-00-00'),
(11, 'Ultimate Radiance Shampoo', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/shampoo-bottle.jpg', 2400, 4, '0000-00-00'),
(12, 'Luseta Shampoo', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/1-green-shampoo.jpg', 1900, 4, '0000-00-00'),
(13, 'Skinpro', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/cleanser.jpg', 500, 1, '0000-00-00'),
(14, 'Crystal', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/cream.jpg', 1000, 1, '0000-00-00'),
(15, 'PALMOLIVE', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/bodywash2.jpg', 1000, 2, '0000-00-00'),
(16, 'Dove', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/bodywash3.jpg', 750, 2, '0000-00-00'),
(17, 'St.Ives', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/scrub.jpg', 800, 1, '0000-00-00'),
(18, 'Jumiso All Day Vitamin Brightning & Balancing', 'The sleek design of the bottles reflects sophistication, while the delicate positioning of the hands emphasizes the intimate connection between the wearer and their chosen scent.', './uploads/Jumiso.jpg', 1200, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `Name`, `price`, `picture`) VALUES
(1, 'Facial massage', '200', 'roller.jpg'),
(2, 'Mix Bar', '400', 'fragrance.jpg'),
(3, 'Focular Set', '1500', 'all-cream.jpg'),
(4, 'Kinfield Sunscreen', '700', 'sun.jpg'),
(5, 'Pink cloud moisturizer', '1200', 'single.jpg'),
(6, 'Skin lip oil', '240', 'all_big.jpg'),
(7, 'Ultimate Radiance Shampoo', '2400', 'shampoo-bottle.jpg'),
(8, 'Luseta Shampoo', '1900', '1-green-shampoo.jpg'),
(9, 'Dae Hair Oil', '1200', 'oil-on-eye.jpg'),
(10, 'Tree-Hut Watermelon Scrub', '2300', 'red.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `serum`
--

CREATE TABLE `serum` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serum`
--

INSERT INTO `serum` (`product_id`, `Name`, `price`, `picture`) VALUES
('2', 'Jumiso All Day Vitamin Brightning & Balancing', '1200', 'Jumiso.jpg'),
('3', 'RENNE', '1650', 'Renne.jpg'),
('4', 'Ordinary.', '950', 'Ordinary.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shampoo`
--

CREATE TABLE `shampoo` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shampoo`
--

INSERT INTO `shampoo` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'TRESemme', '2000', 'Tresemme.jpg'),
('2', 'PANTEEN', '1200', 'Pantene.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'WATERMIDE', '250', 'Mask.jpg'),
('2', 'LANBENA', '200', 'blackheadmask.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soap`
--

CREATE TABLE `soap` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soap`
--

INSERT INTO `soap` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'AMIXOLOGY SOAPS', '750', 'soap1.jpg'),
('2', 'SAIPUA', '800', 'soap2.jpg'),
('3', 'Dove', '250', 'soap3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sunscreen`
--

CREATE TABLE `sunscreen` (
  `product_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sunscreen`
--

INSERT INTO `sunscreen` (`product_id`, `Name`, `price`, `picture`) VALUES
('1', 'FOCALLURE', '1000', 'Focallure.png'),
('2', 'LAFZ UV Shield', '950', 'Lafz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `num` int(11) NOT NULL,
  `registered_at` date NOT NULL,
  `isAdmin` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`,`variation_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
