-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2024 at 01:46 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tution`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `batchid` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `batchname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`batchid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batchid`, `id`, `batchname`, `amount`) VALUES
(1, 0, '10', 1500),
(2, 0, '12', 2000),
(3, 0, '11', 1800),
(4, 0, 'bca', 2500),
(5, 0, 'bba', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bookingid` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `batchname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `parentmail` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `studentname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `id`, `batchname`, `parentmail`, `studentname`) VALUES
(1, 0, '10', 'sajeena', 'raiza'),
(2, 0, 'bca', 'navas', 'kaija'),
(3, 0, '12', 'rasheeda', 'faris');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

DROP TABLE IF EXISTS `class_schedule`;
CREATE TABLE IF NOT EXISTS `class_schedule` (
  `class_id` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `tutor_id` int NOT NULL,
  `batch_id` int NOT NULL,
  `batch` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tutor` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `stime` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `etime` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`class_id`, `id`, `tutor_id`, `batch_id`, `batch`, `subject`, `tutor`, `date`, `stime`, `etime`) VALUES
(1, 0, 0, 0, '10', 'maths', 'mathew', '2023-01-21', '6.00 am', '8.00 am'),
(2, 0, 0, 0, '12', 'all', 'mary', '2023-01-28', '9.00 am', '11.00 am'),
(3, 0, 0, 0, 'bca', 'coa', 'leena', '2023-02-03', '4.00 pm', '6.00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'navas', 'navas', 'parent'),
(2, 'admin', 'admin', 'admin'),
(3, 'leena', 'leena', 'tutor'),
(4, 'mohan', 'mohan', 'tutor'),
(5, 'mary', 'mary', 'tutor'),
(6, 'kaija', 'kaija', 'student'),
(7, 'faris', 'faris', 'student'),
(8, 'raiza', 'raiza', 'student'),
(9, 'rasheeda', 'rasheeda', 'parent'),
(10, 'sajeena', 'sajeena', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `parentid` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `firstname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `place` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`parentid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parentid`, `id`, `firstname`, `lastname`, `phone`, `place`, `email`) VALUES
(1, 0, 'navas', 'c a', 2147483647, 'kuzhivelippady', 'navas'),
(2, 0, 'rasheeda', 't v', 9876544, 'pallikkara', 'rasheeda'),
(3, 0, 'sajeena', 'h s', 98765544, 'kochi', 'sajeena');

-- --------------------------------------------------------

--
-- Table structure for table `pdffile`
--

DROP TABLE IF EXISTS `pdffile`;
CREATE TABLE IF NOT EXISTS `pdffile` (
  `pdf` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdffile`
--

INSERT INTO `pdffile` (`pdf`) VALUES
('hh'),
('data science 2022.pdf'),
('data science 2022.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

DROP TABLE IF EXISTS `studentattendance`;
CREATE TABLE IF NOT EXISTS `studentattendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `attend` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `att_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`id`, `student_id`, `name`, `attend`, `att_date`) VALUES
(1, 0, 'kaija', '', '0000-00-00'),
(2, 0, 'faris', '', '0000-00-00'),
(3, 0, 'raiza', '', '0000-00-00'),
(4, 1, 'kaija', 'present', '2023-02-05'),
(5, 2, 'faris', 'absent', '2023-02-05'),
(6, 3, 'raiza', 'absent', '2023-02-05'),
(7, 1, 'kaija', 'absent', '2023-02-28'),
(8, 2, 'faris', 'absent', '2023-02-28'),
(9, 3, 'raiza', 'absent', '2023-02-28'),
(10, 1, 'kaija', 'absent', '2023-02-28'),
(11, 2, 'faris', 'absent', '2023-02-28'),
(12, 3, 'raiza', 'absent', '2023-02-28'),
(13, 1, 'kaija', 'absent', '2023-02-28'),
(14, 2, 'faris', 'absent', '2023-02-28'),
(15, 3, 'raiza', 'absent', '2023-02-28'),
(16, 1, 'kaija', 'absent', '2023-02-28'),
(17, 2, 'faris', 'absent', '2023-02-28'),
(18, 3, 'raiza', 'absent', '2023-02-28'),
(19, 1, 'kaija', 'present', '2023-02-28'),
(20, 2, 'faris', 'present', '2023-02-28'),
(21, 3, 'raiza', 'absent', '2023-02-28'),
(22, 1, 'kaija', 'present', '2024-08-14'),
(23, 2, 'faris', 'absent', '2024-08-14'),
(24, 3, 'raiza', 'absent', '2024-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `studentid` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `firstname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `stdstudying` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `id`, `firstname`, `lastname`, `stdstudying`, `phone`, `email`) VALUES
(1, 0, 'kaija', 'c n', 'bca', 98746565, 'kaija'),
(2, 0, 'faris', 'mon', '11', 987655675, 'faris'),
(3, 0, 'raiza', 'fathima', '10', 2147483647, 'raiza');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectid` int NOT NULL AUTO_INCREMENT,
  `batchn` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`subjectid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `batchn`, `title`, `description`) VALUES
(1, 'bca', 'coa', 'theory'),
(2, '10', 'all', 'detailed'),
(3, '12', 'all', 'detailed'),
(4, '10', 'maths', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `tutor_id` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`tutor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tutor_id`, `id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(1, 0, 'leena', 'shekhar', '9846565758', 'leena'),
(2, 0, 'mohan', 'das', '765466775', 'mohan'),
(3, 0, 'mary', 'mol', '987645657', 'mary');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
