-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 05:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sydneysoft_birthdaysandbeyond`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(11) NOT NULL,
  `card_img` varchar(255) NOT NULL,
  `card_title` varchar(255) NOT NULL,
  `card_desc` text NOT NULL,
  `card_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `card_img`, `card_title`, `card_desc`, `card_price`) VALUES
(1, 'img\\BC00040.png', 'Birthday Card 1', '', 45.88),
(2, 'img\\BC00080.jpg', 'Birthday Card 2', '', 48.88),
(3, 'img\\BC00079.jpg', 'Birthday Card 3', '', 34.88),
(4, 'img\\BC00067.jpg', 'Birthday Card 4', '', 56.88);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$passwordencyptdnoatack'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `randSalt`) VALUES
(9, 'test123', 'mughal@gmail.com', '123456', '$2y$10$passwordencyptdnoatack'),
(11, 'owais123', 'owais@gmail.com', 'asd123', '$2y$10$passwordencyptdnoatack'),
(12, 'user123', 'user@gmail.com', 'asd123', '$2y$10$passwordencyptdnoatack'),
(14, 'ausafmughal', 'ausaf@gmail.com', '$2y$10$passwordencyptdnoatace5.4hNfalmHgM07tCOnOxmVLULI7X/.m', '$2y$10$passwordencyptdnoatack'),
(15, 'AtifRauf_a', 'atif@gmail.com', '$2y$10$passwordencyptdnoatace83rWEl4Ufow3J1f1hoOLPu0qwHru65C', '$2y$10$passwordencyptdnoatack'),
(16, 'test12r3', 'test12r3@gmail.com', '$2y$10$passwordencyptdnoatace83rWEl4Ufow3J1f1hoOLPu0qwHru65C', '$2y$10$passwordencyptdnoatack'),
(17, 'testuser', 'testuser@gmail.com', '$2y$10$passwordencyptdnoatace83rWEl4Ufow3J1f1hoOLPu0qwHru65C', '$2y$10$passwordencyptdnoatack'),
(18, 'user1233', 'user1234@gmail.com', '$2y$10$passwordencyptdnoatace83rWEl4Ufow3J1f1hoOLPu0qwHru65C', '$2y$10$passwordencyptdnoatack'),
(19, 'dfjgj', 'dfhj@gmail.com', '$2y$10$passwordencyptdnoatace83rWEl4Ufow3J1f1hoOLPu0qwHru65C', '$2y$10$passwordencyptdnoatack');

-- --------------------------------------------------------

--
-- Table structure for table `usermeta`
--

CREATE TABLE `usermeta` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`,`email`,`password`) USING BTREE;

--
-- Indexes for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usermeta`
--
ALTER TABLE `usermeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
