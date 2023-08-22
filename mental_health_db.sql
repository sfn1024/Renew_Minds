-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 12:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `std_id` int(6) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_reg_number` varchar(20) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_contact` int(15) NOT NULL,
  `degree_id` int(6) NOT NULL,
  `std_acedamic_year` varchar(20) NOT NULL,
  `std_age` int(6) NOT NULL,
  `std_gender` varchar(20) NOT NULL,
  `mentor_id` int(6) NOT NULL,
  `std_language` varchar(20) NOT NULL,
  `std_datepicker` date NOT NULL,
  `std_timepicker` time NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`std_id`, `std_name`, `std_reg_number`, `std_email`, `std_contact`, `degree_id`, `std_acedamic_year`, `std_age`, `std_gender`, `mentor_id`, `std_language`, `std_datepicker`, `std_timepicker`, `date`) VALUES
(1, 'Shafni', 'ICT/20/008', 'sfn@gmail.com', 772587387, 2, '2nd', 23, 'Male', 2, 'Tamil', '2023-09-20', '20:03:00', '2023-08-01 15:03:15'),
(2, 'Sfn', 'ET/20/097', 'shafni@gmail.com', 752687387, 1, '4th', 25, 'null', 3, 'English', '2023-09-14', '20:04:00', '2023-08-01 15:04:37'),
(3, 'rgtr', 'ds1324234', 'fdgs@fdgdf', 325235, 0, '1st', 21, 'Other', 0, 'English', '2023-09-22', '19:50:00', '2023-08-01 15:50:37'),
(4, 'ereryr', '123432532', 'dfs@dgf', 5435346, 0, '2nd', 21, 'Other', 0, 'English', '2023-09-27', '22:22:00', '2023-08-01 18:22:06'),
(5, 'fedsgfs', '2353', 'afs@fgs', 34235, 0, '3rd', 25, 'Other', 0, 'Tamil', '2023-09-20', '17:06:00', '2023-08-01 20:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactno` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `education` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `name`, `email`, `contactno`, `address`, `education`, `gender`) VALUES
(1, 'shafni', 'shafniahmedsfn10@gmail.com', 772587387, 'fdfsd', '2nd Year', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degree_id` int(6) NOT NULL,
  `degree_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`degree_id`, `degree_name`) VALUES
(1, 'BST'),
(2, 'ICT'),
(3, 'PLT');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `mentor_id` int(6) NOT NULL,
  `mentor_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`mentor_id`, `mentor_name`) VALUES
(1, 'Dr. Abcd'),
(2, 'Dr. Deg'),
(3, 'Mr. jhon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `std_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `degree_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `mentor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
