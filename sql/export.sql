-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2021 at 10:52 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Seats`
--

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
                          `user` int(250) NOT NULL,
                          `fullDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `used`, `day`, `hour`, `bar`, `user`, `fullDate`) VALUES
(4, 23, 'Saturday', '08:51', 5, 1, '15/05/21'),
(5, 34, 'Saturday', '10:19', 7, 2, '15/05/21'),
(6, 14, 'Saturday', '10:19', 6, 2, '15/05/21'),
(7, 25, 'Saturday', '10:19', 2, 2, '15/05/21'),
(8, 56, 'Saturday', '10:19', 1, 2, '15/05/21'),
(9, 56, 'Saturday', '10:19', 2, 1, '15/05/21'),
(10, 22, 'Saturday', '10:19', 7, 1, '15/05/21'),
(11, 45, 'Saturday', '10:45', 1, 1, '15/05/21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
    ADD PRIMARY KEY (`id`),
  ADD KEY `report_ibfk_1` (`bar`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
    MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
    ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`bar`) REFERENCES `Bar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2021 at 10:52 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Seats`
--

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
                          `user` int(250) NOT NULL,
                          `fullDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `used`, `day`, `hour`, `bar`, `user`, `fullDate`) VALUES
(4, 23, 'Saturday', '08:51', 5, 1, '15/05/21'),
(5, 34, 'Saturday', '10:19', 7, 2, '15/05/21'),
(6, 14, 'Saturday', '10:19', 6, 2, '15/05/21'),
(7, 25, 'Saturday', '10:19', 2, 2, '15/05/21'),
(8, 56, 'Saturday', '10:19', 1, 2, '15/05/21'),
(9, 56, 'Saturday', '10:19', 2, 1, '15/05/21'),
(10, 22, 'Saturday', '10:19', 7, 1, '15/05/21'),
(11, 45, 'Saturday', '10:45', 1, 1, '15/05/21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
    ADD PRIMARY KEY (`id`),
  ADD KEY `report_ibfk_1` (`bar`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
    MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
    ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`bar`) REFERENCES `Bar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
