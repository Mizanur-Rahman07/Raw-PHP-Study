-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 04:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mizan`
--

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(120) NOT NULL,
  `father_name` varchar(110) NOT NULL,
  `mother_name` varchar(110) NOT NULL,
  `gmail` varchar(70) NOT NULL,
  `phone_Number` varchar(30) NOT NULL,
  `age` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`student_id`, `student_name`, `father_name`, `mother_name`, `gmail`, `phone_Number`, `age`) VALUES
(2, 'frfr', 'dgd', 'xsd', '', '', '21'),
(3, 'frfr', 'dgd', 'xsd', '', '', '21'),
(4, 'frfr', 'dgd', 'xsd', '', '', '21');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(40) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stu_name`, `f_name`, `m_name`, `phone_num`, `email`, `gender`, `age`) VALUES
(38, 'Aslam', 'Salam', 'Salma', '0124578964', 'aslam@gmail.com', 'Male', '25'),
(39, 'Rafiq', 'Awal', 'Jahanara', '01457896348', 'rafiq@gmail.com', 'Male', '30'),
(40, 'Niman', 'Messi', 'Jerra', '5487693', 'naimar@gmail.com', 'Male', '27'),
(42, 'Rajib', 'Ruhul', 'Fatema', '0124578963', 'rajib@gmail.com', 'Male', '23'),
(43, 'johir', 'korim', 'kajol', '01245789654', 'johir@gmail.com', 'Male', '25'),
(44, 'Dreliz', 'Dabasis', 'Mosrast', '10576541', 'hbdufsag@gmail.com', 'Male', '21'),
(45, 'Dreliz', 'Dabasis', 'Mosrast', '10576541', 'hbdufsag@gmail.com', '', '21'),
(46, 'Testing', 'check father', 'check mother', 'check number', 'mgi@gmail.com', 'Other', 'check age'),
(47, 'Testing', 'check father', 'check mother', 'check number', 'mgi@gmail.com', '', 'check age'),
(48, 'Testing', 'check father', 'check mother', 'check number', 'mgi@gmail.com', '', 'check age');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_course` varchar(100) NOT NULL,
  `teacher_quality` varchar(20) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `gmail` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_course`, `teacher_quality`, `phone_number`, `gmail`, `gender`, `age`) VALUES
(11, 'Siam', 'math', 'Very good', '01478569325', 'siam@gmail', 'male', '34'),
(12, 'jasmin', 'english', 'good', '02457896587', 'jasmin@gma', 'female', '28'),
(13, 'Rojain', 'bangla', 'good', '035478965874', 'rojain@gma', 'male', '32'),
(14, '', '', '', '', '', '', ''),
(15, 'check teacher ', 'check course', 'check quality', 'check phone', 'check@gmai', 'check', '2'),
(16, 'check teacher ', 'check course', 'check quality', 'check phone', 'check@gmai', 'check', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
