-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2021 at 02:32 PM
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
                       `latitude` varchar(250) NOT NULL,
                       `timetables` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bar`
--

INSERT INTO `Bar` (`id`, `seats`, `name`, `city`, `address`, `longitude`, `latitude`, `timetables`) VALUES
(1, 25, 'Biri Bar Udine', 'Udine', 'Via Piemonte 84', '13.234569062949127', '46.08650448946553', '07:30-24:00'),
(2, 20, 'BarLume Udine', 'Udine', 'Vicolo Pulesi 6', '13.233470369412558', '46.064332209653024', '07:30-12:00 14:00-24:00'),
(5, 16, 'Bar Alla Rocca Udine', 'Udine', 'P.za Guglielmo Marconi 8', '13.23430262708424', '46.06499021751462', '07:00-23:00'),
(6, 12, 'Hell\'s bistrot', 'Udine', 'Corte Savorgnan', '13.235262513591529', '46.06198685798241', '06:30-22:00'),
(7, 22, 'Tal Cûr di Buri', 'Buttrio', 'Via Cividale 26/1/A', '13.335442630684007', '46.01633285272148', '14:00-24:00'),
(8, 16, 'Bar Al Duomo', 'Udine', 'Via Vittorio Veneto 30', '13.238233327161577', '46.06264804572599', '7:00-23:00'),
(9, 19, 'Delser', 'Udine', 'Via Cavour 18a', '13.234779442503342', '46.06240619068368', '7:00-13:00 15:00-24:00'),
(10, 28, 'Caffè Contarena', 'Udine', 'Via Cavour 1', '13.235268427161538', '46.06328091062551', '6:00-24:00'),
(11, 9, 'Bar Americano', 'Udine', 'Piazza Libertà 7', '13.236040348654356', '46.063162492850864', '14:00-23:00'),
(12, 34, 'Bar San Giacomo', 'Udine', 'Piazza Giacomo Matteotti 22', '13.233667160576246', '46.06340291685443', '6:30-24:00'),
(13, 40, 'Italian Secret', 'Udine', 'Piazza Giacomo Matteotti 18', '13.233469175334342', '46.06340909818938', '7:00-24:00'),
(14, 42, 'Osteria da Teresina', 'Udine', 'Via Paolo Sarpi 10/A', '13.23321606668251', '46.06438099764393', '8:00-23:00'),
(15, 18, 'Caffè Enoteca Rialto', 'Udine', 'Via Rialto 12', '13.23395781356849', '46.06238804310243', '6:00-22:00'),
(16, 17, 'Liberty', 'Udinedine', 'Via Mentana, Viaile del Ledra', '13.22681651820922', '46.064520074517546', '7:00-23:00');

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
                          `id` int(250) NOT NULL,
                          `used` int(250) NOT NULL,
                          `day` varchar(250) NOT NULL,
                          `bar` int(250) NOT NULL,
                          `user` int(250) NOT NULL,
                          `fullDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `used`, `day`, `bar`, `user`, `fullDate`) VALUES
(1, 11, 'Monday', 7, 1, '2021-05-03 12:30:00.000000'),
(4, 4, 'Saturday', 5, 1, '2021-05-15 08:51:00.000000'),
(5, 12, 'Saturday', 7, 2, '2021-05-22 10:19:00.000000'),
(6, 7, 'Saturday', 6, 2, '2021-05-22 10:19:30.000000'),
(7, 18, 'Saturday', 2, 2, '2021-05-22 10:19:00.000000'),
(8, 15, 'Saturday', 1, 2, '2021-05-01 10:19:00.000000'),
(9, 18, 'Friday', 2, 1, '2021-05-07 10:19:00.000000'),
(10, 22, 'Wednesday', 7, 1, '2021-05-12 10:19:00.000000'),
(11, 8, 'Wednesday', 1, 1, '2021-05-19 10:45:00.000000'),
(12, 10, 'Thursday', 1, 1, '2021-05-13 10:54:00.000000'),
(13, 12, 'Tuesday', 1, 1, '2021-05-18 23:49:00.000000'),
(14, 17, 'Wednesday', 2, 2, '2021-05-12 22:04:00.000000'),
(19, 13, 'Friday', 8, 1, '2021-05-21 12:14:00.000000'),
(20, 4, 'Sunday', 8, 1, '2021-05-09 12:16:00.000000'),
(24, 11, 'Sunday', 8, 1, '2021-05-09 12:36:30.000000'),
(27, 12, 'Friday', 9, 2, '2021-05-14 10:17:21.000000'),
(28, 15, 'Saturday', 9, 1, '2021-05-22 10:17:21.000000'),
(29, 26, 'Monday', 10, 2, '2021-05-16 10:18:49.000000'),
(30, 12, 'Tuesday', 10, 1, '2021-05-25 10:18:49.000000'),
(31, 3, 'Monday', 11, 1, '2021-05-10 10:20:59.000000'),
(32, 6, 'Wednesday', 12, 1, '2021-05-12 10:20:59.000000'),
(33, 12, 'Tuesday', 2, 1, '2021-05-25 10:24:32.000000'),
(34, 12, 'Tuesday', 2, 1, '2021-05-25 11:48:52.000000'),
(35, 36, 'Sunday', 13, 2, '2021-05-23 15:36:18.000000'),
(36, 15, 'Friday', 13, 1, '2021-05-14 15:36:18.000000'),
(37, 28, 'Thursday', 14, 2, '2021-05-06 15:38:25.000000'),
(38, 39, 'Monday', 14, 2, '2021-05-16 15:38:25.000000'),
(39, 5, 'Tuesday', 15, 1, '2021-05-18 15:39:30.000000'),
(40, 15, 'Friday', 15, 1, '2021-05-21 15:39:30.000000'),
(41, 12, 'Tuesday', 14, 1, '2021-05-25 03:41:35.000000'),
(42, 8, 'Tuesday', 5, 1, '2021-05-25 03:42:02.000000'),
(43, 12, 'Tuesday', 6, 1, '2021-05-25 03:42:22.000000'),
(44, 9, 'Tuesday', 7, 1, '2021-05-25 03:42:36.000000'),
(45, 2, 'Tuesday', 8, 1, '2021-05-25 03:42:47.000000'),
(46, 4, 'Tuesday', 9, 1, '2021-05-25 03:42:57.000000'),
(47, 8, 'Tuesday', 8, 1, '2021-05-25 03:43:14.000000'),
(48, 7, 'Tuesday', 11, 1, '2021-05-25 03:43:25.000000'),
(49, 11, 'Tuesday', 12, 1, '2021-05-25 03:43:36.000000'),
(50, 8, 'Tuesday', 6, 1, '2021-05-25 03:43:46.000000'),
(51, 6, 'Tuesday', 9, 1, '2021-05-25 03:44:09.000000'),
(52, 15, 'Tuesday', 13, 1, '2021-05-25 03:44:32.000000'),
(53, 0, 'Tuesday', 16, 1, '2021-05-25 03:58:12.000000'),
(54, 10, 'Tuesday', 16, 1, '2021-05-25 03:58:40.000000'),
(55, 10, 'Tuesday', 16, 1, '2021-05-25 03:58:46.000000'),
(56, 17, 'Tuesday', 16, 1, '2021-05-25 03:58:53.000000'),
(57, 6, 'Tuesday', 16, 1, '2021-05-25 03:59:04.000000');

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
(2, 'pippo', '0c88028bf3aa6a6a143ed846f2be1ea4', 0, 'pippo@gmail.com', 'Filippo', 'Inzaghi');

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
    MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
    MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
    ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`bar`) REFERENCES `Bar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
