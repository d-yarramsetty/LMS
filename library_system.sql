-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Tim e: May 11, 2023 at 01:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` text NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `password`) VALUES
('srini', 'srini'),
('dinesh', 'dinesh'),
('yaswanth', 'yaswanth');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` text NOT NULL,
  `author` text NOT NULL,
  `id` int(11) NOT NULL,
  `rent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `author`, `id`, `rent`) VALUES
('python', 'dinesh', 1, 0),
('dbms', 'xxxxx', 2, 0),
('oops', 'rrrr', 3, 0),
('Cloud computing', 'ccc', 4, 80),
('Applied Data', 'SSS', 5, 50),
('Think and Grow Rich', 'Steve Harvey', 6, 100),
('The Lighthouse Princess', 'Wardell', 7, 75),
('Reading Ideas', 'Libro', 8, 10),
('SHOCK', 'VAISHNAVI', 9, 5),
('software engineering', 'nnnnn', 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `name` text NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  `rent` int(11) NOT NULL,
  `deadline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`sid`, `bid`, `name`, `author`, `date`, `rent`, `deadline`) VALUES
(285, 1, 'python', 'dinesh', '2023-05-11', 0, 1686434400),
(285, 10, 'software engineering', 'nnnnn', '2023-05-11', 50, 1686434400),
(289, 2, 'dbms', 'xxxxx', '2023-05-11', 0, 1686434400),
(290, 4, 'Cloud computing', 'ccc', '2023-05-11', 80, 1686434400),
(333, 3, 'oops', 'rrrr', '2023-05-11', 0, 1686434400),
(333, 4, 'Cloud computing', 'ccc', '2023-05-11', 80, 1686434400),
(333, 9, 'SHOCK', 'VAISHNAVI', '2023-05-11', 5, 1686434400);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `name` text NOT NULL,
  `author` text NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `author`, `sid`) VALUES
('Cyber Security', 'Mr', 329),
('a passage to india', 'e.m.forster', 333);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `sem` text NOT NULL,
  `password` longtext NOT NULL,
  `email` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `name`, `branch`, `sem`, `password`, `email`) VALUES
(285, 'dinesh', 'Computer Engineering', '3', 'd02f9eeeab3c10406e510f722877f8c6233e53cf', 'dineshmanikanta123@gmail.com'),
(289, 'yaswanth', 'Computer Engineering', '6', 'dbfdeb4ed40b5f7bd794b8701e83c670fc6f424e', 'yaswanth@srmap.edu.in'),
(290, 'vinay', 'Civil Engineering', '6', 'd17670f349e3e89f2b06d7c02c3a4f7338bb9ee0', 'vinay@srmap.edu.in'),
(329, 'tangi', 'Information Technology', '5', '540ee2ef2417573bdd2f8ec06a17844642286966', 'tangi@srmap.edu.in'),
(333, 'Vaishnavi', 'Civil Engineering', '4', '5c5111f0d9ec91c02a1a00b7a6013268081440c5', 'vaishnavi_tirumalasetty@srmap.edu.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `aid` (`aid`) USING HASH;

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`sid`,`bid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `sid` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
