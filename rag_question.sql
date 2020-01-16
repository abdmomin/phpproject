-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 10:23 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tx_rag_question`
--

-- --------------------------------------------------------

--
-- Table structure for table `rag_question`
--

CREATE TABLE `rag_question` (
  `id` int(11) NOT NULL,
  `jan` int(100) NOT NULL,
  `feb` int(100) NOT NULL,
  `mar` int(100) NOT NULL,
  `apr` int(100) NOT NULL,
  `may` int(100) NOT NULL,
  `jun` int(100) NOT NULL,
  `jul` int(100) NOT NULL,
  `aug` int(100) NOT NULL,
  `sep` int(100) NOT NULL,
  `oct` int(100) NOT NULL,
  `nov` int(100) NOT NULL,
  `dece` int(100) NOT NULL,
  `remark` int(100) NOT NULL,
  `year` int(50) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `school_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rag_question`
--

INSERT INTO `rag_question` (`id`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dece`, `remark`, `year`, `question_id`, `school_id`) VALUES
(1224, 453, 55, 656, 44, 55, 45, 0, 0, 0, 0, 0, 0, 0, 2018, 'q1', 1104),
(1225, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q2', 1104),
(1226, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q3', 1104),
(1227, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q4', 1104),
(1228, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q5', 1104),
(1229, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q6', 1104),
(1230, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q7', 1104),
(1231, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q8', 1104),
(1232, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q9', 1104),
(1233, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q10', 1104),
(1234, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2018, 'q11', 1104);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rag_question`
--
ALTER TABLE `rag_question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rag_question`
--
ALTER TABLE `rag_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
