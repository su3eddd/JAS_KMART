-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2024 at 02:22 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u460391009_kmart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `about_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `about_content`) VALUES
(1, 'pola');

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestseller`
--

INSERT INTO `bestseller` (`id`, `name`, `price`, `image`) VALUES
(12, 'Kimchi', '100', 'kimchi.png'),
(13, 'Jin Ramen Spicy', '70', 'jin_ramen_spicy.png'),
(14, 'Samyang Buldak Cream Carbonara ', '75', 'cream_carbonara_buldak.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `price`, `image`) VALUES
(3, 'Bibimbap', '100', 'bibimbap.png'),
(4, 'Kimchi', '100', 'kimchi.png'),
(5, 'Sotteok', '75', 'sotteok.png');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `image`) VALUES
(3, 'WOONGJIN 170 Days Apple Juice Drink', '220', '170 days apple.png'),
(4, 'CANTABILE FLAVORED POUCH DRINK ', '50', 'cantabile.png'),
(5, 'Cantata | Lotte Chilsung drink', '60', 'cantata coffee.png'),
(6, 'Lotte Chilsung Cider', '110', 'chilsung cider.png'),
(7, 'Lotte Chilsung Orange', '110', 'chilsung orang.png'),
(8, 'Dr. aloe', '160', 'dr. aloe.png'),
(9, 'ice talk', '60', 'ice talk.png'),
(10, 'Korean Pouch Drinks', '50', 'jardin korean puch.png'),
(11, 'Jardin Zero Grape', '40', 'jardin zero grape.png'),
(12, 'Jardin Zero Peach', '40', 'jardin zero peach.png'),
(13, 'Lotte Milkis (Original) ', '50', 'milkis.png'),
(14, 'Soju', '70', 'soju.png'),
(15, 'Supreme Gold Coffee', '50', 'supreme gold coffee.png'),
(16, 'VTalk', '50', 'vtalk.png'),
(17, 'Welch', '40', 'welch.png'),
(18, 'Seoul Chocolate', '47', 'seoul_choco.png'),
(19, 'Seoul White ', '46', 'seoul_white.png'),
(20, 'Jetty Chocolate Drink', '40', 'jetty.png'),
(21, ' Binggrae Lychee and Peach MIlk', '47', 'lychee.png'),
(22, 'Binggrae Banana MIlk', '47', 'Binggrae-Banana-Milk.png'),
(23, 'Binggrae Strawberry', '47', 'strawberry.png'),
(24, 'Binggrae Melon Mlik', '47', 'melon.png');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_facebook` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ice_cream`
--

CREATE TABLE `ice_cream` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ice_cream`
--

INSERT INTO `ice_cream` (`id`, `name`, `price`, `image`) VALUES
(3, 'Binggrae Peach Ice bar', '30', 'binggrae peach ice bar.png'),
(4, 'Binggrae Power cap', '30', 'binggrae power cap.png'),
(5, 'Double Bianco', '50', 'double bianco.png'),
(6, 'Fanfare Ice Cream', '40', 'fanfare ice cream.png'),
(7, 'The Excellent ', '40', 'excellent.png'),
(8, 'Lotte Ghana Choco Ice Cream Tube', '39', 'LOTTE-GHANA-ICE-BAR.png'),
(9, 'Lotte Pepero Almond Ice Cream Bar', '39', 'LOTTE-PEPERO-ICE-ALMOND.png'),
(10, 'Lotte Pepero Peanut Ice Cream Bar', '39', 'LOTTE-PEPERO-ICE-PEANUT.png'),
(11, 'Binggrae Samanco Red Bean', '40', 'samanco_red_bean.png'),
(12, 'Binggrae Samanco Green Tea', '40', 'samanco_green_tea.png'),
(13, 'Binggrae Samanco Chocolate', '40', 'samanco choco.png'),
(14, 'Samanco Original', '40', 'samanco.png'),
(15, 'Kitkat Ice Cream', '99', 'snack_lotte_milk_candy-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `meat`
--

CREATE TABLE `meat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meat`
--

INSERT INTO `meat` (`id`, `name`, `price`, `image`) VALUES
(3, 'Vienna Sausage', '40', 'vienna sausage.png'),
(4, 'vegetable Dumplings', '40', 'vegetable dumplings.png'),
(5, 'Slice Kimbap ham', '50', 'slice kimbap ham.png'),
(6, 'Shabu Shabu balls', '60', 'shabu shabu balls.png');

-- --------------------------------------------------------

--
-- Table structure for table `newarrival`
--

CREATE TABLE `newarrival` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newarrival`
--

INSERT INTO `newarrival` (`id`, `name`, `price`, `image`) VALUES
(9, 'Bibimbap', '100', 'bibimbap.png'),
(10, 'Double Bianco', '60', 'double bianco.png'),
(11, 'ice talk', '50', 'ice talk.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(24, 'SAMYANG Buldak Hot Chicken flavor Ramen', '47', 'Buldak_hot_chick.png'),
(25, 'SAMYANG Buldak Cheese flavor Ramen', '47', 'cheese_buldak.png'),
(26, 'OTTOGI Cheese Ramen', '38', 'cheese_ramen.png'),
(27, 'Ottogi Cheese Stir-Fried Ramen cup noodle', '35', 'cheese_ramen_cup.png'),
(28, 'Samyang Buldak Cream Carbonara ', '47', 'cream_carbonara_buldak.png'),
(29, 'Jin Ramen Spicy Cup', '45', 'jin_ramen_cup_spicy.png'),
(30, 'Jin Ramen Mild', '47', 'jin_ramen_mild.png'),
(31, 'Jin Ramen Mild Cup', '38', 'jin_ramen_mild_cup.png'),
(32, 'Jin Ramen Spicy', '47', 'jin_ramen_spicy.png'),
(33, 'Nongshim Kimchi Cup Noodles', '45', 'kimchi_cup_ramen.png'),
(34, 'Samyang Buldak Quattro Cheese ', '47', 'quatro_cheese_buldak.png'),
(35, 'Ottogi Real Cheese Ramen', '45', 'real_cheese_ramen.png'),
(36, 'Samyang Buldak Ramen (Rose Hot) ', '47', 'rose_buldak.png'),
(37, 'Nongshim Shin Ramyun ramen cup', '46', 'shin_ramyon.png'),
(38, 'Yukgaejang Cup Noodles', '46', 'yukgaejang_cup.png'),
(51, 'NONGSHIM Beef Bulgogi Flavor (fried noodle)', '45', 'beef_bulgogi.png'),
(53, 'Chapagetti', '50', 'chapagetti.png'),
(54, 'Bibimmyun', '40', 'bibimmyun.png'),
(55, 'Neoguri Spicy', '45', 'NEOGURI-HOT.png'),
(56, 'Buldak Original', '46', 'buldak orig.png');

-- --------------------------------------------------------

--
-- Table structure for table `seasoned`
--

CREATE TABLE `seasoned` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seasoned`
--

INSERT INTO `seasoned` (`id`, `name`, `price`, `image`) VALUES
(3, 'Gochujang', '60', 'gochujang.png'),
(4, 'Samjang', '100', 'samjang.png'),
(5, 'Ottogi seasame oil', '60', 'ottogi sesame oil.png'),
(6, 'Sempio shabu shabu soup base', '70', 'sempio shabu shabu soup base.png'),
(7, 'Ottogi Sesame Oil', '99', 'Ottogi-sesame-oil-removebg-preview.png'),
(8, 'Charipdong', '99', 'Choripdong-removebg-preview.png'),
(9, 'Daesang', '99', 'Daesang-removebg-preview.png'),
(10, 'Daesang Seasoning Salt', '99', 'daesang-seasoning-salt-95g-removebg-preview.png'),
(11, 'Sempio Crazy Hot ', '99', 'SempioCrazyHotTopokkiSauce110g-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `name`, `price`, `image`) VALUES
(4, 'Lotte Choco Pie', '34', 'choco pie.png'),
(6, 'Crunchy Rice Rolls', '50', 'crispy rice rolls.png'),
(7, 'Crown Choco hazelnut', '45', 'crown choco hazelnut.png'),
(8, 'Haitai Honey Butter Chip', '85', 'hitai honey butter.png'),
(9, 'Lotte Almonds', '70', 'lotte almond.png'),
(10, 'Lotte Binch', '100', 'lotte binch.png'),
(11, 'Lotte Ghana', '70', 'lotte ghana.png'),
(12, 'LOTTE KOKAL CORN Chips', '65', 'lotte kkogal corn chips.png'),
(13, 'Nongshim Banana Kick Snack', '85', 'nongshim banana kick.png'),
(14, 'Nongshim Onion Rings', '60', 'orion onion rings.png'),
(15, 'Orion Goraebap Baked Whale ', '40', 'orion whale.png'),
(16, 'Pepero', '85', 'peppero.png'),
(17, 'Seaweed (16pc)', '220', 'seaweed.png'),
(18, 'Pepero Original', '39', 'pepero_orig.png'),
(19, 'Lotte Chocolate Pie', '42', 'lotte_choco_pie.png'),
(22, 'Lotte Milk Candy', '49', 'snack_lotte_milk_candy-removebg-preview.png'),
(23, 'CW Yuha Cheesecake', '49', 'CW-YUZU-CHEESECAKE-SANDWICH-COOKIE-SNACK-190G-1-768x768-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `name`, `email`, `password`) VALUES
(3, 'admin!', 'admin@host.com', '98f6b474794d85f694762c9b52bbc351');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice_cream`
--
ALTER TABLE `ice_cream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat`
--
ALTER TABLE `meat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newarrival`
--
ALTER TABLE `newarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasoned`
--
ALTER TABLE `seasoned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bestseller`
--
ALTER TABLE `bestseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ice_cream`
--
ALTER TABLE `ice_cream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meat`
--
ALTER TABLE `meat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newarrival`
--
ALTER TABLE `newarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `seasoned`
--
ALTER TABLE `seasoned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
