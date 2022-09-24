-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 05:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `parent_id` text DEFAULT '0',
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `parent_id`, `name`) VALUES
(14, '0', 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`) VALUES
(1, 'arpan', 'arpan@gmail.com', '$2y$10$I//0AqYZRDIC.uPkF7VKwu77AoZ.twmWX6jNBDmNBBaDDjum2tQoG'),
(2, 'mahwish', 'mah@gmail.com', '$2y$10$Pz5z/qXY0FNrVNsWE6TM7.9WTBW9tJfHngaZ5qs1AOw3.9/w7VB3a'),
(3, 'mahwish', 'mah@gmail.com', '$2y$10$jjopKrrZM1IZ9qqcCSiDUuR8CCSCa2jzcR66cIo89Lc5ubYC54/aO'),
(4, 'jkhkjhasd', 'abc@gmail.com', '$2y$10$AXUeDkS6Db29RhnZ6XXTxerEnhHNUzD1QYDjxyCkPBho2Ns/eFVLe'),
(5, 'kaka', 'kaka@gmail.com', '$2y$10$wBugkSUpkddD9QloFqqatu9bAnHCm/ZRYGzI3sY./VGCGSYlbM./q'),
(6, 'sagar', 'sagar@hentai.com', '$2y$10$FRXRvc5LsWnDNbFYv3ZQvOEibpRWuKBRWFILXk/nmZbjZ1ZX666Fm'),
(7, 'dada', 'dada@gmail.com', '$2y$10$dGnrugatCHeeDX4nJ4Ozi.9IMLbissxCgKk46wD8cUlnpPjYUZ4ie');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'protiva kundu', 'pro@gmail.com', '$2y$10$/FAfVJKWKRAcxoAO7mN.b.m8jf63d3P3MHWDEI01WCKOfcyh1MqSa'),
(2, 'protiva kundu', 'ajg@gmail.com', '$2y$10$tEuGQnoLYr0XRPeF5Z1FueuSpP/lQIvbJtbJZFbbp217V.qB8ctfC'),
(3, 'protiva kundu', 'ajg@gmail.comj', '$2y$10$nww0ZsUeJ1LNdyDw5rSt3uCZjyYnasOsmsU6hPa505KvBSv4tASDK'),
(6, 'n n', 'ajg@gmail.commn', '$2y$10$CjfcwWVA/bXqXBzWI7gEbO4v1UNzWS6LeB5SwFgB2lY2vfV56jsFG'),
(7, 'n n', 'ajg@gmail.commnm', '$2y$10$Llq4ylrsArRbYyUgmzTukuuvcodFgwJEMO9bi.L8Nep5Wn.MNL732'),
(8, 'mn kj', 'ajg@gmail.comkjkjlj', '$2y$10$E7iclWMh/rioE0R/lvFHZuNuLF9klCsKrnkIWHJTC8Q68YlUr/0UO'),
(9, 'Prativa Kundu', 'protiva@gmail.com', '$2y$10$g6ts9CHulSM0Yjz3T7r4audCKkLgL5fRoKG1k6XWsPuK0AyaTiB7a'),
(10, 'mahwi noor', 'mah@gmail.com', '$2y$10$GXsW0Ll1Tp3liCrhy8FKROpOEWDKDhPasoxp1bWM0Rs0MCWYXMFci'),
(12, 'arpan bh', 'arpan@gmail.con', '$2y$10$NMzZw2xgwIF8dntkRi5sgeFgHq.P7eKEpjzM6dYbR58uHfh73.8zu'),
(15, 'admin admin', 'admin@gmail.com', '$2y$10$HJeHbyDEtt8eUDLZb4qTqOUkgfwFoAp3/HCKhdD8GXrvo588ItHHC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
