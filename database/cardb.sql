-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 11:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`) VALUES
(1, 'Aventador'),
(2, 'Hurcano'),
(3, 'Urus'),
(4, 'Limited Series'),
(5, 'Concept');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_model` int(11) NOT NULL,
  `car_price` double COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_model`, `car_price`, `car_image`) VALUES
(1, 'Lamborghini AVENTADOR SVJ', 1, 5000, 'car1.jpg'),
(2, 'Lamborghini HUCANO EVO', 2, 6000, 'car2.jpg'),
(3, 'Lamborghini URUS', 3, 6000, 'car3.jpg'),
(4, 'Lamborghini SIAN FKP 37', 4, 5500, 'car4.jpg'),
(5, 'Lamborghini TERZO MILLENNIO', 5, 6500, 'car5.jpg' ),
(6, 'Lamborghini ESTOQUE', 5, 7000, 'car6.jfif' ),
(7, 'Lamborghini AVENTADOR S', 1, 7890, 'car7.jpg' ),
(8, 'Lamborghini ASTERION', 5, 7654, 'car8.jpg' ),
(9, 'Lamborghini SIAN ROADSTER', 4, 7250, 'car9.jpg' ),
(10, 'Lamborghini HUCANO STO', 2, 7000, 'car10.jpg' ),
(11, 'Lamborghini URUS PEARL CAPSULE', 3, 6442 , 'car11.jpg' );

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(5, 'admin', '163adc9ad34f1a2fab2c7175ff939a03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `car_model` (`car_model`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `foreignkey_car_modelid` FOREIGN KEY (`car_model`) REFERENCES `model` (`model_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
