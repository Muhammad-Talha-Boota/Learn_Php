-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 01:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cityname`) VALUES
(1, 'Gujranwala'),
(2, 'Sindh'),
(3, 'Karachi'),
(4, 'Kamoki'),
(5, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `course_n`
--

CREATE TABLE `course_n` (
  `coid` int(11) NOT NULL,
  `corsename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_n`
--

INSERT INTO `course_n` (`coid`, `corsename`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JS'),
(4, 'PHP'),
(5, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `emp_name`
--

CREATE TABLE `emp_name` (
  `eid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_name`
--

INSERT INTO `emp_name` (`eid`, `name`) VALUES
(1, 'Numman'),
(2, 'Talha'),
(3, 'Usama'),
(4, 'Tahir'),
(5, 'Rizwan');

-- --------------------------------------------------------

--
-- Table structure for table `emp_pay`
--

CREATE TABLE `emp_pay` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `salery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_pay`
--

INSERT INTO `emp_pay` (`id`, `name`, `salery`) VALUES
(1, 2, 15000),
(2, 4, 17000),
(3, 3, 13000),
(4, 1, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `first_year_stu`
--

CREATE TABLE `first_year_stu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pct` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `city` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_year_stu`
--

INSERT INTO `first_year_stu` (`id`, `name`, `pct`, `age`, `gender`, `city`, `course`) VALUES
(1, 'ali', 45, 19, 'M', 1, 2),
(2, 'Rumasa', 33, 20, 'F', 2, 3),
(3, 'Numman', 35, 21, 'M', 3, 4),
(4, 'Aliza', 85, 22, 'F', 4, 1),
(5, 'Zain', 35, 20, 'M', 5, 2),
(6, 'Khan', 90, 25, 'M', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quad`
--

CREATE TABLE `quad` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quad`
--

INSERT INTO `quad` (`id`, `name`, `DOB`) VALUES
(5, 'Gujjar', '2003-02-02'),
(6, 'Butt khan', '1910-11-08'),
(7, 'Jutt', '2012-12-03'),
(8, 'khan', '2002-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `std_rec`
--

CREATE TABLE `std_rec` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `city` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_rec`
--

INSERT INTO `std_rec` (`id`, `name`, `gender`, `age`, `city`) VALUES
(1, 'Final khan', 'Male', 20, 1),
(2, 'Romasa khan', 'Fe-male', 23, 2),
(3, 'Nisha Usman', 'Fe-male', 35, NULL),
(4, 'Arbaz khan', 'Male', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL CHECK (`age` >= 18),
  `phone` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `City` varchar(50) NOT NULL DEFAULT 'Gujranwala'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`id`, `name`, `age`, `phone`, `gender`, `City`) VALUES
(1, 'Ram kumar', 45, 376, 'M', 'Agra'),
(2, 'Sarita Kumari', 22, 354, 'F', 'Deldi'),
(3, 'Salman Khan', 25, 315, 'M', 'Bhopal'),
(4, 'Juhi Chawla ', 25, 314, 'F', 'Agra'),
(5, 'Anil Kapoorr', 23, 345, 'M', 'Bhopal'),
(6, 'John Abraham', 26, 322, 'M', 'Delhi'),
(7, 'Sahid kapoor', 20, 302, 'M', 'Agra');

-- --------------------------------------------------------

--
-- Table structure for table `web_lac`
--

CREATE TABLE `web_lac` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_lac`
--

INSERT INTO `web_lac` (`id`, `name`, `age`, `city`, `course`) VALUES
(1, 'Final', 19, 1, 3),
(2, 'Last', 27, 4, 2),
(3, 'Gul', 19, 3, 1),
(4, 'Asad', 28, 2, 4),
(5, 'Khan', 30, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_stu`
--

CREATE TABLE `web_stu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_stu`
--

INSERT INTO `web_stu` (`id`, `name`, `age`, `city`, `course`) VALUES
(1, 'AHMAD', 33, 5, 4),
(2, 'Kul', 27, 2, 1),
(3, 'Final', 28, 1, 1),
(4, 'Adnan', 25, 3, 2),
(5, 'Khan', 33, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course_n`
--
ALTER TABLE `course_n`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `emp_name`
--
ALTER TABLE `emp_name`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `emp_pay`
--
ALTER TABLE `emp_pay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `first_year_stu`
--
ALTER TABLE `first_year_stu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `quad`
--
ALTER TABLE `quad`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `std_rec`
--
ALTER TABLE `std_rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `web_lac`
--
ALTER TABLE `web_lac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `web_stu`
--
ALTER TABLE `web_stu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_n`
--
ALTER TABLE `course_n`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_name`
--
ALTER TABLE `emp_name`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `first_year_stu`
--
ALTER TABLE `first_year_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_lac`
--
ALTER TABLE `web_lac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `web_stu`
--
ALTER TABLE `web_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_pay`
--
ALTER TABLE `emp_pay`
  ADD CONSTRAINT `emp_pay_ibfk_1` FOREIGN KEY (`name`) REFERENCES `emp_name` (`eid`);

--
-- Constraints for table `first_year_stu`
--
ALTER TABLE `first_year_stu`
  ADD CONSTRAINT `first_year_stu_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_n` (`coid`);

--
-- Constraints for table `std_rec`
--
ALTER TABLE `std_rec`
  ADD CONSTRAINT `std_rec_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`cid`);

--
-- Constraints for table `web_lac`
--
ALTER TABLE `web_lac`
  ADD CONSTRAINT `web_lac_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`cid`);

--
-- Constraints for table `web_stu`
--
ALTER TABLE `web_stu`
  ADD CONSTRAINT `web_stu_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
