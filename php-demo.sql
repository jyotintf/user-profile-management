-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2023 at 07:13 PM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Password` varchar(35) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `CreationDate`, `Password`, `Image`) VALUES
(25, 'test1', 'test1', 7412589632, 'test@gmail.com', 'test', '2023-07-21 12:45:20', '123456789', 'design.png'),
(26, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 12:25:21', '123456789', 'Screenshot from 2023-07-04 13-09-29.png'),
(27, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 12:25:21', '123456789', 'Screenshot from 2023-07-04 13-09-29.png'),
(28, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 12:50:12', '12', 'Screenshot from 2023-07-04 13-09-29.png'),
(29, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 12:57:33', '25f9e794323b453885f5181f1b624d0b', 'Screenshot from 2023-07-04 13-09-29.png'),
(30, 'test', 'test', 9874563212, 'test@gmail.com', 'test', '2023-07-21 13:09:29', '479d10d08ccbc27fc44a60d6d8b4337a', 'Screenshot from 2023-07-04 13-09-29.png'),
(31, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 13:10:29', '90e6603798946041192f6db6e300fc2a', 'Screenshot from 2023-07-04 13-09-29.png'),
(32, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 13:12:45', 'da84b2792c99fea157cd9e359a3c8916', 'Screenshot from 2023-07-04 13-09-29.png'),
(33, 'test', 'test', 7412589632, 'test@gmail.com', 'test', '2023-07-21 13:25:22', '25f9e794323b453885f5181f1b624d0b', 'Screenshot from 2023-07-04 13-09-29.png'),
(34, 'test', 'test', 7412589632, 'test1@gmail.com', 'test', '2023-07-21 13:29:45', '25f9e794323b453885f5181f1b624d0b', 'Screenshot from 2023-07-04 13-09-29.png'),
(35, 'test', 'test', 7412589632, 'test2@gmail.com', 'test', '2023-07-21 13:31:21', '25f9e794323b453885f5181f1b624d0b', 'Screenshot from 2023-07-04 13-09-29.png'),
(36, 'test', 'test', 7412589632, 'test4@gmail.com', 'test', '2023-07-21 13:32:19', '25f9e794323b453885f5181f1b624d0b', 'Screenshot from 2023-07-04 13-09-29.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
