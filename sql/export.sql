-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 14, 2021 at 10:57 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Seats`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bar`
--

CREATE TABLE `Bar` (
                       `id` int(250) NOT NULL,
                       `seats` int(250) NOT NULL,
                       `name` varchar(250) NOT NULL,
                       `city` varchar(250) NOT NULL,
                       `address` varchar(250) NOT NULL,
                       `longitude` varchar(250) NOT NULL,
                       `latitude` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bar`
--

INSERT INTO `Bar` (`id`, `seats`, `name`, `city`, `address`, `longitude`, `latitude`) VALUES
(1, 25, 'Biri Bar Udine', 'Udine', 'Via Piemonte 84', '13.234569062949127', '46.08650448946553'),
(2, 20, 'BarLume Udine', 'Udine', 'Vicolo Pulesi 6', '13.233470369412558', '46.064332209653024'),
(5, 16, 'Bar Alla Rocca Udine', 'Udine', 'P.za Guglielmo Marconi 8', '13.23430262708424', '46.06499021751462'),
(6, 12, 'Hell\'s bistrot', 'Udine', 'Corte Savorgnan', '13.235262513591529', '46.06198685798241'),
(7, 22, 'Tal Cûr di Buri', 'Buttrio', 'Via Cividale 26/1/A', '13.335442630684007', '46.01633285272148');

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `id` int(250) NOT NULL,
  `used` int(250) NOT NULL,
  `day` varchar(250) NOT NULL,
  `hour` varchar(250) NOT NULL,
  `bar` int(250) NOT NULL,
  `user` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `used`, `day`, `hour`, `bar`, `user`) VALUES
(1, 23, 'Friday', '10:53', 1, 1),
(2, 12, 'Friday', '10:54', 1, 1),
(3, 21, 'Friday', '10:55', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `isAdmin`, `email`, `name`, `lastname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin@admin.com', 'Alessandro', 'Ligugnana'),
(2, 'pippo', '0c88028bf3aa6a6a143ed846f2be1ea4', 0, 'pippo@gmail.com', 'Filippo', 'Inzaghi'),
(3, 'Ambraa', '41f9a6f19fb77f2527b6a74b8adfda5d', 0, 'ambrabb@gmail.com', 'Ambra', 'Bortolotti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bar`
--
ALTER TABLE `Bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_ibfk_1` (`bar`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bar`
--
ALTER TABLE `Bar`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`bar`) REFERENCES `Bar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
