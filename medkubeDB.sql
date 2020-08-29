-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 08:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medkube`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Message`) VALUES
(1, 'Shahzad Umar Baig', 'mirzashahzadahmedbaig@gmail.com', 'I am doing good'),
(2, 'Shahzad Umar Baig', 'mirzashahzadahmedbaig@gmail.com', 'I am doing my best to maintain this website'),
(3, 'Shahzad Umar Baig', 'mirzashahzadahmedbaig@gmail.com', 'I am doing my best to maintain this website for project'),
(4, 'ShahzadUmarBaig', 'mirzashahzadahmedbaig@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `inStock` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Title`, `Description`, `Price`, `inStock`, `Image`) VALUES
(1, 'Venice XR 75 MG', 'This medicine is prescription based', 480, 1, 'https://cdn.pixabay.com/photo/2016/12/26/17/28/food-1932466__340.jpg'),
(2, 'Efexor XR 75 MG', 'This medicine is only prescription Based', 780, 1, 'https://medicalstore.com.pk/wp-content/uploads/2019/02/Medical-store.pk_.com_.EFEXOR-75mg-Release-Capsules-2x7-2.jpg\r\n'),
(3, 'Panadol 10MG', 'Panadol for cold pain', 10, 1, 'https://cdn.pixabay.com/photo/2016/12/26/17/28/food-1932466__340.jpg'),
(5, 'Gaviscon', 'for bloating and heart burn', 80, 1, 'https://cdn.pixabay.com/photo/2016/12/26/17/28/food-1932466__340.jpg'),
(6, 'Gaviscon', 'used for bloating and heart burn', 80, 1, 'https://cdn.pixabay.com/photo/2016/12/26/17/28/food-1932466__340.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Contact`, `isAdmin`) VALUES
(36, 'Mirzashahzadahmedbaig@gmail.com', '123', '03125423390', 1),
(38, 'Shahzadumerbaig@gmail.com', '1234', '03242042774', 0),
(39, 'huzaifa@gmail.com', '123', '03125423369', 1),
(41, 'Shahzadbaig@gmail.com', '123', '03125423390', 0),
(42, 'Shahzadbaig@gmail.com', '123', '03125423390', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
