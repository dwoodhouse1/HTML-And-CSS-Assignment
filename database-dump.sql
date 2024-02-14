-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 06:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `marketing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `company_name`, `telephone`, `message`, `marketing`) VALUES
(1, 'Drew', 'd@w.org', 'DrewCo', '322463456436', 'Hello', 'yes'),
(2, 'sd', 'a@a.com', 'Hehe', '234134552', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_alt` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `read_time` varchar(255) NOT NULL,
  `info` varchar(500) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `image_alt`, `title`, `read_time`, `info`, `author_image`, `author_name`, `date`, `counter`) VALUES
(1, 'img/october-notables-2023-m3Ok.png', 'Gary Cullen - Octobers Notable of the Month', 'October Notables 2023', '- 3 minute read', 'At Netmatters, we highly value the dedication and accomplishments of our staff. That is why each and...', 'img/netmatters-profile.png', 'Posted by Netmatters', '8th November 2023', 'one'),
(2, 'img/dieter-harper-FK2L.png', 'Dieter Harper', 'Dieter Harper - Netmatters 5 Year Legend', '- 3 minute read', 'Today we celebrate the amazing achievements of Dieter Harper as he champions the Netmatters Long Ser...', 'img/netmatters-profile.png', 'Posted by Netmatters', '7th November 2023', 'two'),
(3, 'img/new-langley-web-bhUy.png', 'New Langley Web Design Project Won', 'New Langley Web Design Project', '- 3 minute read', 'The Client Langley is a co-educational, inclusive, day and boarding school based in Norfolk. Establi...', 'img/netmatters-profile.png', 'Posted by Netmatters', '31st October 2023', 'three');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
