-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortner-3139357bf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `time` int(33) NOT NULL,
  `reward` int(33) NOT NULL,
  `price` int(33) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `time`, `reward`, `price`, `level`, `status`) VALUES
(1, 'One', 10, 5000, 10, 2, 1),
(2, 'Alpha', 5, 10, 1, 2, 1),
(3, 'Green', 2, 1, 0, 2, 1),
(4, 'Premimim', 20, 10, 5, 2, 1),
(5, 'usman', 3, 1000, 200, 0, 1),
(6, 'Faizan Rauf', 2, 1053, 53, 0, 1),
(7, 'Alpha', 5, 1054, 154, 5, 1),
(8, 'a', 2, 1000, 10, 0, 1),
(9, 'a', 1, 1000, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `glink`
--

CREATE TABLE `glink` (
  `id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `link_id` int(100) NOT NULL,
  `generated_link` varchar(50) NOT NULL,
  `counts` int(100) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `glink`
--

INSERT INTO `glink` (`id`, `u_id`, `link_id`, `generated_link`, `counts`, `date`) VALUES
(1, 7, 5, 'http://localhost/ads/user/runlink.php?lid=5&u=7', 1, '31-10-2022'),
(2, 7, 4, 'http://localhost/ads/user/runlink.php?lid=4&u=7', 0, '31-10-2022'),
(3, 4, 5, 'http://localhost/ads/user/runlink.php?lid=5&u=4', 8, '31-10-2022'),
(4, 4, 3, 'http://localhost/ads/user/runlink.php?lid=3&u=4', 101, '31-10-2022'),
(5, 4, 2, 'http://localhost/ads/user/runlink.php?lid=2&u=4', 7, '31-10-2022'),
(6, 4, 4, 'http://localhost/ads/user/runlink.php?lid=4&u=4', 5, '31-10-2022'),
(7, 4, 9, 'http://localhost/ads/user/runlink.php?lid=9&u=4', 10, '31-10-2022'),
(8, 4, 8, 'http://localhost/ads/user/runlink.php?lid=8&u=4', 10, '31-10-2022'),
(9, 7, 11, 'http://localhost/ads/user/runlink.php?lid=11&u=7', 0, '31-10-2022'),
(10, 9, 11, 'http://localhost/ads/user/runlink.php?lid=11&u=9', 1, '31-10-2022');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link` varchar(255) NOT NULL,
  `slink` varchar(40) NOT NULL,
  `status` int(10) NOT NULL,
  `count` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `link`, `slink`, `status`, `count`) VALUES
(2, 'usman', 'http://localhost/phpmyadmin/index.php?route=/sql&db=shortner-3139357bf2&table=links&pos=0', 'abc', 0, 8),
(3, 'khan', 'http://localhost/ads/admin/addlink.php', 'll', 0, 1),
(4, 'Faizan Rauf', 'http://localhost/ads/admin/addlink.php', 'gg', 1, 1),
(5, 'Liam ', 'http://localhost/ads/admin/addlink.php', 'user', 0, 1),
(6, 'Blue', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=shortner-3139357bf2&table=user', 'alpha', 0, 0),
(7, 'a', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=shortner-3139357bf2&table=user', 'l', 0, 0),
(8, '', '', '', 1, 0),
(9, 'a', 'http://localhost/ads/admin/addlink.php', 'z', 0, 0),
(10, 'a', 'http://localhost/ads/admin/addlink.php', 's', 0, 0),
(11, 'a', 'http://localhost/ads/admin/addlink.php', 'ls', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(33) NOT NULL,
  `First Name` varchar(33) NOT NULL,
  `Last Name` varchar(33) NOT NULL,
  `Father Name` varchar(33) NOT NULL,
  `cnic` varchar(33) NOT NULL,
  `city` varchar(33) NOT NULL,
  `country` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `status` int(5) NOT NULL,
  `date` text NOT NULL,
  `earning` int(33) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `First Name`, `Last Name`, `Father Name`, `cnic`, `city`, `country`, `email`, `password`, `cno`, `status`, `date`, `earning`, `level`) VALUES
(1, '', '', '', '', '', '', '123', '', '', 1, '', 110, 0),
(2, 'Faizan Rauf', '', '', '', '', '', 'rauf00125@gmail.com', '47437', '', 2, '', 0, 0),
(3, 'Faizan Rauf', '', '', '', '', '', 'rauf00125@gmail.com', '47437', '', 0, '', 0, 0),
(4, 'Ali', '', '', '', '', '', 'rauf1@1.com', '1', '', 0, '30-Oct-22', 27869499, 5),
(5, 'Liam ', '', '', '', '', '', 'rauf00125@gmail.c', 'c', '', 0, '30-Oct-22', 100000, 0),
(7, 'ali', '', '', '', '', '', 'ali@ali.com', 'ali', '', 0, '31-Oct-22', 5509, 2),
(8, 'usman', '', '', '', '', '', 'us@u.com', 'u', '', 0, '31-Oct-22', 3800, 0),
(9, 'q', '', '', '', '', '', 'q@q.com', 'q', '', 0, '31-Oct-22', -10, 1),
(10, 'usman', '', '', '', '', '', 'usman@gmail.com', 'usman', '', 0, '15-Nov-22', 0, 0),
(11, 'ahmed', '', '', '', '', '', 'a@l.com', 'a', '', 0, '15-Nov-22', 0, 0),
(12, 'Alpha', '', '', '', '', '', 'rauf1@1.com', 'a', '', 0, '15-Nov-22', 0, 0),
(13, 'kamran', '', '', '', '', '', 'kamran@l.com', 'k', '', 0, '15-Nov-22', 0, 0),
(14, 'a', '', '', '', '', '', 'a@a.com', 'a', '', 0, '15-Nov-22', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `ad` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `user`, `ad`, `date`) VALUES
(1, 4, 4, '31-10-22'),
(2, 4, 4, '31-10-22'),
(3, 4, 1, '31-10-22'),
(4, 4, 4, '31'),
(5, 7, 4, '31'),
(6, 7, 3, '31'),
(7, 7, 1, '31'),
(8, 7, 2, '31'),
(9, 4, 3, '31'),
(10, 4, 1, '31'),
(11, 4, 2, '31'),
(12, 4, 7, '31'),
(13, 4, 7, '31'),
(14, 4, 7, '31'),
(15, 8, 5, '31'),
(16, 4, 7, '01'),
(17, 4, 7, '02'),
(18, 9, 9, '31'),
(19, 9, 8, '31');

-- --------------------------------------------------------

--
-- Table structure for table `widthdraw`
--

CREATE TABLE `widthdraw` (
  `id` int(11) NOT NULL,
  `user` int(22) NOT NULL,
  `amount` int(22) NOT NULL,
  `method` varchar(22) NOT NULL,
  `date` varchar(22) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `widthdraw`
--

INSERT INTO `widthdraw` (`id`, `user`, `amount`, `method`, `date`, `status`) VALUES
(1, 4, 4000, 'jazzcash', '31-Oct-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glink`
--
ALTER TABLE `glink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widthdraw`
--
ALTER TABLE `widthdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `glink`
--
ALTER TABLE `glink`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `widthdraw`
--
ALTER TABLE `widthdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
