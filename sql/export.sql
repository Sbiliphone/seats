-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 13, 2021 at 10:12 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Fatture`
--
CREATE DATABASE IF NOT EXISTS `Fatture` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Fatture`;

-- --------------------------------------------------------

--
-- Table structure for table `Azienda`
--

CREATE TABLE `Azienda` (
                           `id` int(250) NOT NULL,
                           `Name` varchar(250) NOT NULL,
                           `Address` varchar(250) DEFAULT NULL,
                           `CAP` int(250) DEFAULT NULL,
                           `City` varchar(250) DEFAULT NULL,
                           `State` varchar(250) DEFAULT NULL,
                           `TelephoneNumber` int(250) DEFAULT NULL,
                           `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Azienda`
--

INSERT INTO `Azienda` (`id`, `Name`, `Address`, `CAP`, `City`, `State`, `TelephoneNumber`, `Email`) VALUES
(1, 'LiguCompany', 'Via Cividale 38', 33040, 'Cividale', 'Udine', 331276121, 'alessandro.ligugnana@gmail.com'),
(2, 'Apple', 'Via Copertino 12', 75022, 'Copertino', 'Lecce', 345127892, 'apple@apple.com'),
(3, 'Finestre', 'Via Don Bosco 8', 33010, 'Udine', 'Udine', 342522012, 'finestra@finestra.org'),
(4, 'Bearzi', 'Via Don Bosco 15', 3310, 'Udine', 'Udine', 343252189, 'bearzi@bearzi.it'),
(5, 'Punte Company', 'Via Puntel 88', 33333, 'Chiavris', 'Udine', 333345261, 'puntel@superleague.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Azienda`
--
ALTER TABLE `Azienda`
    ADD PRIMARY KEY (`id`);
--
-- Database: `gallery`
--
CREATE DATABASE IF NOT EXISTS `gallery` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gallery`;

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE `app_user` (
                            `id` int(11) NOT NULL,
                            `username` varchar(255) NOT NULL,
                            `password` varchar(255) NOT NULL,
                            `isAdmin` tinyint(1) DEFAULT NULL,
                            `email` varchar(255) DEFAULT NULL,
                            `name` varchar(255) DEFAULT NULL,
                            `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`id`, `username`, `password`, `isAdmin`, `email`, `name`, `lastname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'adad@email.ocm', 'ael', 'adad');

-- --------------------------------------------------------

--
-- Table structure for table `immagine`
--

CREATE TABLE `immagine` (
                            `id` int(11) NOT NULL,
                            `src` varchar(255) NOT NULL,
                            `titolo` varchar(255) NOT NULL,
                            `utente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
    ADD UNIQUE KEY `id` (`id`) USING BTREE,
    ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `immagine`
--
ALTER TABLE `immagine`
    ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `immagine`
--
ALTER TABLE `immagine`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `Seats`
--
CREATE DATABASE IF NOT EXISTS `Seats` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Seats`;

-- --------------------------------------------------------

--
-- Table structure for table `Bar`
--

CREATE TABLE `Bar` (
                       `id` int(250) NOT NULL,
                       `seats` int(250) DEFAULT NULL,
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
(1, 23, 'Biri Bar Udine', 'Udine', 'Via Piemonte 84', '13.234569062949127', '46.08650448946553'),
(2, 43, 'BarLume Udine', 'Udine', 'Vicolo Pulesi 6', '13.233470369412558', '46.064332209653024'),
(3, 12, 'Bar Alla Rocca Udine', 'Udine', 'P.za Guglielmo Marconi 8', '13.23430262708424', '46.06499021751462'),
(4, 16, 'Hell\'s bistrot', 'Udine', 'Corte Savorgnan', '13.235262513591529', '46.06198685798241');

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
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
