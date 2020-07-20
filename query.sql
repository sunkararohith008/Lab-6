-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Name : Rohith Preetham Sunkara
-- Student Id: 200449343

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE COMP1006_SUMMER2020; 
USE COMP1006_SUMMER2020; 
-- Database: `COMP1006_SUMMER2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
CREATE TABLE `persons` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar (100) NOT NULL,
  `email` varchar (100) NOT NULL,
  PRIMARY KEY (user_id)
); ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`user_id`, `first_name`, `last_name`, `email`) VALUES
(15, 'gopi', 'Sunkara', 'gopi@test.com'),
(16, 'rohith', 'Preetham', 'rohith@test.com'),
(17, 'sushmitha', 'sunkara', 'sushmitha@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
  
  CREATE TABLE `users`(
	`id` int(10) NOT NULL,
	`username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL
);

INSERT INTO `users`(`id`, `username`, `password`) VALUES
(16, 'Rohith', 'laxmi'),
(17, 'Sunkara', 'gopi');
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
