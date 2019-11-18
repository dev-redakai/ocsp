-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2018 at 01:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `a_name` varchar(20) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`a_name`, `a_email`, `a_password`) VALUES
('admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `subject` varchar(540) NOT NULL,
  `at_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `c_email`, `country`, `subject`, `at_time`) VALUES
(1, 'Sashi', 'sashi@gmail.com', 'India', 'asdasdsasdsdfsfgasfd', '2018-10-31 06:00:56'),
(2, 'Manikant', 'manikant@gmail.com', 'India', 'igdipaysgfpiuydgfwpefg', '2018-10-31 06:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_about` varchar(550) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`c_id`, `c_name`, `c_about`) VALUES
(25, 'DataBase Management System', 'DataBase Management System is a software for creating and managing databases. '),
(26, 'Operating Systems', 'An Operating System is system software that manages computer hardware and software resources.'),
(36, 'Digital Circuits', 'A digital circuit is a circuit where the signal must be one of two discrete levels.'),
(27, 'Computational Intelligence', 'CI refers to the ability of a computer to learn a specific task from data or experimental observation.'),
(37, 'Cyber Security', 'Cybersecurity is the protection of internet-connected systems from cyberattacks. '),
(38, 'Neuro Linguistic Programming', 'NLP is an approach to communication, personal development, and psychotherapy.'),
(39, 'C Programming', 'C is a powerful general-purpose programming language. It is fast and portable.'),
(40, 'Java', 'Java Programming Language is concurrent, class-based, object-oriented.'),
(41, 'Deep Learning', 'DL is part of a broader family of machine learning methods based on learning data representations.');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(5) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `c_id` int(5) NOT NULL,
  `fcty_email` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `at_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `stu_email`, `c_id`, `fcty_email`, `msg`, `at_time`) VALUES
(3, 'sashi@gmail.com', 27, 'jitu@gmail.com', 'Hello..can i know when would be the next test.', '2018-11-01 12:27:33'),
(4, 'sashi@gmail.com', 27, 'jitu@gmail.com', 'If anyone knows that...just inform it', '2018-11-01 12:28:22'),
(5, 'shikha@gmail.com', 27, 'jitu@gmail.com', 'Yeah it is on next monday', '2018-11-01 12:28:42'),
(6, 'manikant@gmail.com', 27, 'jitu@gmail.com', 'okay', '2018-11-01 12:28:53'),
(7, 'sashi@gmail.com', 27, 'jitu@gmail.com', 'can we get the documentation of the latest class?', '2018-11-01 12:29:55'),
(9, 'deepshikha@gmail.com', 27, 'jitu@gmail.com', 'i have a doubt in 7th chapter.', '2018-11-01 12:24:16'),
(10, 'deepshikha@gmail.com', 27, 'jitu@gmail.com', 'how to solve problem 7 ?', '2018-11-01 12:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `fcty_course`
--

CREATE TABLE `fcty_course` (
  `c_id` int(11) NOT NULL,
  `fcty_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fcty_course`
--

INSERT INTO `fcty_course` (`c_id`, `fcty_email`) VALUES
(25, 'jitu@gmail.com'),
(25, 'pandyanathan@gmail.com'),
(26, 'manoj@gmail.com'),
(26, 'pandyanathan@gmail.com'),
(27, 'jitu@gmail.com'),
(27, 'manoj@gmail.com'),
(38, 'divya@gmail.com'),
(39, 'komal@gmail.com'),
(40, 'komal@gmail.com'),
(41, 'divya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fcty_register`
--

CREATE TABLE `fcty_register` (
  `fcty_name` varchar(20) NOT NULL,
  `fcty_email` varchar(30) NOT NULL,
  `fcty_password` varchar(50) NOT NULL,
  `fcty_qualification` varchar(20) NOT NULL,
  `fcty_addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fcty_register`
--

INSERT INTO `fcty_register` (`fcty_name`, `fcty_email`, `fcty_password`, `fcty_qualification`, `fcty_addr`) VALUES
('Anjileena', 'anjileena@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut'),
('Divya', 'divya@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut'),
('Jitu', 'jitu@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut'),
('Komal', 'komal@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut'),
('Manoj', 'manoj@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut'),
('Dr.Pandyanathan', 'pandyanathan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'PHD', 'Nit Calicut');

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE `stu_course` (
  `c_id` int(5) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `fcty_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`c_id`, `stu_email`, `fcty_email`) VALUES
(25, 'deepshikha@gmail.com', 'pandyanathan@gmail.com'),
(25, 'manikant@gmail.com', 'pandyanathan@gmail.com'),
(25, 'sashi@gmail.com', 'pandyanathan@gmail.com'),
(25, 'shikha@gmail.com', 'pandyanathan@gmail.com'),
(26, 'manikant@gmail.com', 'manoj@gmail.com'),
(26, 'sashi@gmail.com', 'manoj@gmail.com'),
(26, 'shikha@gmail.com', 'manoj@gmail.com'),
(27, 'deepshikha@gmail.com', 'jitu@gmail.com'),
(27, 'manikant@gmail.com', 'jitu@gmail.com'),
(27, 'sashi@gmail.com', 'jitu@gmail.com'),
(27, 'shikha@gmail.com', 'jitu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stu_register`
--

CREATE TABLE `stu_register` (
  `stu_name` varchar(20) NOT NULL,
  `stu_email` varchar(40) NOT NULL,
  `stu_password` varchar(50) NOT NULL,
  `stu_phone` varchar(15) NOT NULL,
  `stu_stream` varchar(5) NOT NULL,
  `stu_addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_register`
--

INSERT INTO `stu_register` (`stu_name`, `stu_email`, `stu_password`, `stu_phone`, `stu_stream`, `stu_addr`) VALUES
('Deepshikha', 'deepshikha@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543210', 'MCA', 'Nit Calicut'),
('Harikant', 'harikant@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543221', 'MCA', 'Nit Calicut'),
('Manikant', 'manikant@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543210', 'MCA', 'Nit Calicut'),
('Sashi', 'sashi@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543210', 'MCA', 'Nit Calicut'),
('Shikha', 'shikha@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543210', 'MCA', 'Nit Calicut'),
('Vedprakash', 'vedprakash@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '9876543221', 'MCA', 'Nit Calicut');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  `fcty_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `file_name`, `path`, `c_id`, `fcty_email`) VALUES
(13, 'chapter07.pdf', 'upload/5bd8c3fca8be54.32925432.pdf', 27, 'jitu@gmail.com'),
(14, 'stack.pdf', 'upload/5bd979423fa7a8.94951078.pdf', 27, 'jitu@gmail.com'),
(16, 'familytree.pdf', 'upload/5bdab00870b573.69344033.pdf', 27, 'jitu@gmail.com'),
(17, 'Assgnt.pdf', 'upload/5bdaea995d81a2.05191660.pdf', 39, 'komal@gmail.com'),
(18, 'assignment.pdf', 'upload/5bdaeaba518237.74952020.pdf', 40, 'komal@gmail.com'),
(20, 'apl.pdf', 'upload/5bdaec828f3c99.90594257.pdf', 27, 'jitu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`a_email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_email` (`stu_email`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `fcty_email` (`fcty_email`);

--
-- Indexes for table `fcty_course`
--
ALTER TABLE `fcty_course`
  ADD PRIMARY KEY (`c_id`,`fcty_email`),
  ADD KEY `fcty_course_ibfk_1` (`fcty_email`);

--
-- Indexes for table `fcty_register`
--
ALTER TABLE `fcty_register`
  ADD PRIMARY KEY (`fcty_email`);

--
-- Indexes for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD PRIMARY KEY (`c_id`,`stu_email`,`fcty_email`),
  ADD KEY `stu_course_ibfk_2` (`stu_email`),
  ADD KEY `stu_course_ibfk_3` (`fcty_email`);

--
-- Indexes for table `stu_register`
--
ALTER TABLE `stu_register`
  ADD PRIMARY KEY (`stu_email`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_name` (`file_name`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `fcty_email` (`fcty_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `discussion_ibfk_1` FOREIGN KEY (`stu_email`) REFERENCES `stu_course` (`stu_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussion_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `stu_course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussion_ibfk_3` FOREIGN KEY (`fcty_email`) REFERENCES `stu_course` (`fcty_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fcty_course`
--
ALTER TABLE `fcty_course`
  ADD CONSTRAINT `fcty_course_ibfk_1` FOREIGN KEY (`fcty_email`) REFERENCES `fcty_register` (`fcty_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD CONSTRAINT `stu_course_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `fcty_course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stu_course_ibfk_2` FOREIGN KEY (`stu_email`) REFERENCES `stu_register` (`stu_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stu_course_ibfk_3` FOREIGN KEY (`fcty_email`) REFERENCES `fcty_course` (`fcty_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `fcty_course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`fcty_email`) REFERENCES `fcty_course` (`fcty_email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
