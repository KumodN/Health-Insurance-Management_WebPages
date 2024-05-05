-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 07:05 AM
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
-- Database: `medicarehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_ID`, `name`, `email`, `number`, `message`, `date`) VALUES
(1, 'Kumod', 'kumodnenuk@gmail.com', 761130407, 'hello world', '2024-05-03 12:06:08'),
(26, 'alex', 'alex123@gmail.com', 12345546, 'hell alex rfgrfrfrf', '2024-05-04 19:20:33'),
(27, 'Malindu', 'malindu66@hotmail.com', 710474781, 'Hello how are you', '2024-05-05 09:52:43'),
(28, 'Tharuka', 'tharuka654@yahoo.com', 784569852, 'HI . Im interested more about to learn more about your health Policies.', '2024-05-05 09:56:36'),
(29, 'Savindu', 'savindu99@gmail.com', 774123685, 'Good morning. Ive recently experienced a change in employment status and need to update my health insurance information.', '2024-05-05 09:58:21'),
(30, 'Lakshan', 'lakshan222@gmai.com', 714582369, 'Hi Im inquiring about the availability of dental and vision coverage', '2024-05-05 10:01:54'),
(31, 'Delete me', 'deleteme45@gmail.com', 123456789, 'Please delete me for test purposes!', '2024-05-05 10:03:12'),
(32, 'Edit me', 'editme@yahoo.com', 1236543210, 'Edit me for testing purposes', '2024-05-05 10:03:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
