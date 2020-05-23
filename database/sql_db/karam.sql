-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2019 at 06:25 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(15) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ans_id`, `ques_id`, `emp_id`, `answer`, `date`, `time`) VALUES
(1, 1, 3, 'Delhi', '2019-07-07', '16:53:57'),
(2, 2, 3, 'Canberra', '2019-07-07', '16:58:02'),
(3, 6, 10, 'It is not available', '2019-07-07', '17:08:45'),
(4, 2, 3, 'Canberra', '2019-07-07', '17:44:40'),
(5, 5, 2, 'M K reddy', '2019-07-07', '18:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `CV` varchar(200) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'notselect',
  `date` varchar(12) NOT NULL,
  `time` varchar(15) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`apply_id`, `name`, `gender`, `dob`, `email`, `mobile`, `CV`, `status`, `date`, `time`) VALUES
(4, 'Ajay Mehra', 'male', '1998-10-05', 'ajay@gmail.com', '8790657213', '\r\nIMG_20171230_174617_HDR.jpg', 'notselect', '2019-07-10', '17:54:28'),
(3, 'Ragini Mishra', 'female', '1997-02-21', 'ragini@gmail.com', '6754239081', '\r\nIMG_20171230_085547.jpg', 'selected', '2019-07-10', '17:49:52'),
(5, 'Ajay Mehta', 'male', '1998-10-05', 'ajaymehta@gmail.com', '9876301246', '\r\nIMG_20171230_174617_HDR.jpg', 'selected', '2019-07-10', '17:56:09'),
(6, 'Shalini Gupta', 'female', '1982-07-02', 'shalini@gmail.com', '7821092374', '\r\nIMG_20171231_203000.jpg', 'notselect', '2019-07-10', '18:26:10'),
(7, 'Akash Mitra', 'male', '1994-07-14', 'akash@gmail.com', '7809229611', '\r\ncognizant latest_Pattern_Questions_with_Solutions_-_14(1).docx', 'selected', '2019-07-11', '07:48:30'),
(8, 'Payal Sharma', 'female', '2019-07-01', 'payal@gmail.com', '7801230981', '\r\nAnshul_sir.docx', 'selected', '2019-07-11', '07:52:09'),
(9, 'Radha Mishra', 'female', '1994-07-19', 'radha@gmail.com', '9002134897', '\r\nAsif_sir.docx', 'selected', '2019-07-11', '08:03:35'),
(10, 'Sanjay Sharma', 'male', '1996-07-28', 'sanjay@gmail.com', '9808712312', 'nit_bhopal_sapient.docx', 'selected', '2019-07-11', '10:45:02'),
(11, 'Saurabh Verma', 'male', '2000-01-22', 'saurabh@gmail.com', '8887706519', 'nit_calicut_sapient.JPG', 'selected', '2019-07-11', '11:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(60) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(15) NOT NULL,
  PRIMARY KEY (`emp_id`,`date`),
  KEY `att_id` (`att_id`),
  KEY `att_id_2` (`att_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`att_id`, `emp_id`, `emp_name`, `dept`, `status`, `date`, `time`) VALUES
(1, 1, 'Prem Kagrani', 'HR', 'present', '2019-07-05', '23:42:45'),
(2, 2, 'Divya Srivastava', 'HR', 'present', '2019-07-05', '23:42:45'),
(3, 7, 'Saurabh Jaiswal', 'INVENTORY', 'present', '2019-07-05', '23:42:53'),
(4, 5, 'Rohit Kumar', 'WORKSHOP', 'present', '2019-07-05', '23:43:01'),
(5, 6, 'Priyanka Singh', 'WORKSHOP', 'present', '2019-07-05', '23:43:01'),
(6, 8, 'Aman Gupta', 'MARKETING', 'present', '2019-07-05', '23:43:12'),
(7, 9, 'Pooja Mishra', 'PRODUCTION', 'present', '2019-07-05', '23:43:26'),
(8, 3, 'Shweta Kumari', 'ACCOUNTS', 'present', '2019-07-05', '23:43:34'),
(9, 4, 'Prashant Kishore', 'ACCOUNTS', 'present', '2019-07-05', '23:43:34'),
(10, 9, 'Pooja Mishra', 'PRODUCTION', 'present', '2019-07-06', '13:46:45'),
(11, 3, 'Shweta Kumari', 'ACCOUNTS', 'present', '2019-07-06', '14:14:22'),
(12, 4, 'Prashant Kishore', 'ACCOUNTS', 'present', '2019-07-06', '14:14:22'),
(13, 1, 'Prem Kagrani', 'HR', 'present', '2019-07-07', '10:34:47'),
(14, 2, 'Divya Srivastava', 'HR', 'absent', '2019-07-07', '10:34:47'),
(15, 3, 'Shweta Kumari', 'ACCOUNTS', 'present', '2019-07-07', '10:35:14'),
(16, 4, 'Prashant Kishore', 'ACCOUNTS', 'present', '2019-07-07', '10:35:14'),
(17, 9, 'Pooja Mishra', 'PRODUCTION', 'absent', '2019-07-07', '19:04:32'),
(18, 10, 'Kavita Saxena', 'PRODUCTION', 'present', '2019-07-07', '19:04:32'),
(19, 3, 'Shweta Kumari', 'ACCOUNTS', 'present', '2019-07-08', '13:22:41'),
(20, 4, 'Prashant Kishore', 'ACCOUNTS', 'present', '2019-07-08', '13:22:41'),
(21, 8, 'Aman Gupta', 'MARKETING', 'present', '2019-07-08', '15:02:53'),
(22, 9, 'Pooja Mishra', 'MARKETING', 'present', '2019-07-08', '15:02:53'),
(23, 12, 'Srishti Surbhi', 'MARKETING', 'present', '2019-07-08', '15:02:53'),
(24, 1, 'Prem Kagrani', 'HR', 'absent', '2019-07-09', '14:12:21'),
(25, 2, 'Divya Srivastava', 'HR', 'absent', '2019-07-09', '14:12:21'),
(26, 3, 'Shweta Kumari', 'ACCOUNTS', 'absent', '2019-07-09', '14:17:27'),
(27, 4, 'Prashant Kishore', 'ACCOUNTS', 'absent', '2019-07-09', '14:17:27'),
(28, 7, 'Saurabh Jaiswal', 'INVENTORY', 'absent', '2019-07-09', '14:17:32'),
(29, 5, 'Rohit Kumar', 'WORKSHOP', 'absent', '2019-07-09', '14:17:36'),
(30, 6, 'Priyanka Singh', 'WORKSHOP', 'absent', '2019-07-09', '14:17:36'),
(31, 8, 'Aman Gupta', 'MARKETING', 'absent', '2019-07-09', '14:17:40'),
(32, 9, 'Pooja Mishra', 'MARKETING', 'absent', '2019-07-09', '14:17:40'),
(33, 12, 'Srishti Surbhi', 'MARKETING', 'absent', '2019-07-09', '14:17:40'),
(34, 10, 'Kavita Saxena', 'PRODUCTION', 'absent', '2019-07-09', '14:17:43'),
(35, 13, 'Ankit Sinha', 'PRODUCTION', 'absent', '2019-07-09', '14:17:43'),
(36, 11, 'Anamika Kumari', 'SALES', 'absent', '2019-07-09', '14:17:47'),
(37, 1, 'Prem Kagrani', 'HR', 'present', '2019-07-11', '07:40:57'),
(38, 2, 'Divya Srivastava', 'HR', 'present', '2019-07-11', '07:40:57'),
(39, 3, 'Shweta Kumari', 'ACCOUNTS', 'absent', '2019-07-11', '07:41:01'),
(40, 4, 'Prashant Kishore', 'ACCOUNTS', 'present', '2019-07-11', '07:41:01'),
(41, 7, 'Saurabh Jaiswal', 'INVENTORY', 'present', '2019-07-11', '07:41:04'),
(42, 5, 'Rohit Kumar', 'WORKSHOP', 'present', '2019-07-11', '07:41:08'),
(43, 6, 'Priyanka Singh', 'WORKSHOP', 'absent', '2019-07-11', '07:41:08'),
(44, 14, 'Rahul Sharma', 'WORKSHOP', 'absent', '2019-07-11', '07:41:08'),
(45, 8, 'Aman Gupta', 'MARKETING', 'present', '2019-07-11', '07:41:12'),
(46, 9, 'Pooja Mishra', 'MARKETING', 'absent', '2019-07-11', '07:41:12'),
(47, 12, 'Srishti Surbhi', 'MARKETING', 'present', '2019-07-11', '07:41:12'),
(48, 10, 'Kavita Saxena', 'PRODUCTION', 'present', '2019-07-11', '07:41:15'),
(49, 13, 'Ankit Sinha', 'PRODUCTION', 'present', '2019-07-11', '07:41:15'),
(50, 15, 'Ashwin Pandey', 'PRODUCTION', 'present', '2019-07-11', '07:41:15'),
(51, 11, 'Anamika Kumari', 'SALES', 'present', '2019-07-11', '07:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE IF NOT EXISTS `tbl_dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`dept_id`, `name`, `description`, `curdate`) VALUES
(1, 'HR', 'Human Resource', '2019-07-05'),
(2, 'ACCOUNTS', 'Companies finance related department', '2019-07-05'),
(3, 'INVENTORY', 'Stock related department', '2019-07-05'),
(4, 'WORKSHOP', 'Conducting workshop for the employees.', '2019-07-05'),
(5, 'MARKETING', 'Sales and Purchases related department', '2019-07-05'),
(6, 'PRODUCTION', 'Ascertains the production of products', '2019-07-05'),
(7, 'SALES', 'Related to sales of product', '2019-07-08'),
(8, 'HOUSE KEEPING', 'Manages clerkal staff', '2019-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desig`
--

CREATE TABLE IF NOT EXISTS `tbl_desig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desig_name` varchar(60) NOT NULL,
  `dept_name` varchar(60) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_desig`
--

INSERT INTO `tbl_desig` (`id`, `desig_name`, `dept_name`, `curdate`) VALUES
(1, 'CLERK', 'INVENTORY', '2019-07-09'),
(2, 'MANAGER', 'ACCOUNTS', '2019-07-09'),
(3, 'OFFICER', 'HR', '2019-07-09'),
(4, 'MANAGER', 'WORKSHOP', '2019-07-09'),
(5, 'OFFICER', 'MARKETING', '2019-07-09'),
(6, 'CLERK', 'PRODUCTION', '2019-07-09'),
(7, 'MANAGER', 'SALES', '2019-07-09'),
(8, 'MANAGER', 'HOUSE KEEPING', '2019-07-09'),
(10, 'CLERK', 'WORKSHOP', '2019-07-09'),
(11, 'CLERK', 'ACCOUNTS', '2019-07-10'),
(12, 'OFFICER', 'ACCOUNTS', '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE IF NOT EXISTS `tbl_emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `department` varchar(20) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `currdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`id`, `first_name`, `last_name`, `gender`, `mobile`, `email`, `password`, `address`, `department`, `designation`, `filename`, `currdate`) VALUES
(1, 'Prem', 'Kagrani', 'male', '8657890076', 'prem@gmail.com', 'prem', 'Lucknow', 'HR', 'MANAGER', 'baby.jpg', '2019-07-03'),
(2, 'Divya', 'Srivastava', 'female', '9532292740', 'divya@gmail.com', 'divya', 'Delhi', 'HR', 'MANAGER', 'b8bb04fa012f3d26ad7c29eaf3e60feb--evil-minions-the-minions.jpg', '2019-07-03'),
(3, 'Shweta', 'Kumari', 'female', '9800765890', 'shweta@gmail.com', 'shweta', 'Mumbai', 'ACCOUNTS', 'CLERK', 'b8bb04fa012f3d26ad7c29eaf3e60feb--evil-minions-the-minions.jpg', '2019-07-03'),
(4, 'Prashant', 'Kishore', 'male', '7739766918', 'prashant@gmail.com', 'prashant', 'Ranchi', 'ACCOUNTS', 'OFFICER', 'Cloudy Sunfall.png', '2019-07-03'),
(5, 'Rohit', 'Kumar', 'male', '9876008976', 'rohit@gmail.com', 'rohit', 'Lucknow', 'WORKSHOP', 'MANAGER', 'c647d9f.jpg', '2019-07-03'),
(6, 'Priyanka', 'Singh', 'female', '6789780978', 'priyanka@gmail.com', 'priyanka', 'Ahemdabad', 'WORKSHOP', 'OFFICER', 'b1e5611.jpg', '2019-07-03'),
(7, 'Saurabh', 'Jaiswal', 'male', '8978095634', 'saurabh@gmail.com', 'saurabh', 'Sitapur', 'INVENTORY', 'OFFICER', 'GmDqj.jpg', '2019-07-03'),
(8, 'Aman', 'Gupta', 'male', '9876543023', 'aman@gmail.com', 'aman', 'Banglore', 'MARKETING', 'CLERK', 'international_creative(3)_&_84600732-a5b7-474a-b8ef-6984b29f34cc.jpg', '2019-07-03'),
(9, 'Pooja', 'Mishra', 'female', '7890657890', 'pooja@gmail.com', 'pooja', 'Banglore', 'MARKETING', 'CLERK', 'b_drop.png', '2019-07-05'),
(10, 'Kavita', 'Saxena', 'female', '8976234509', 'kavita@gmail.com', 'kavita', 'Agra', 'PRODUCTION', 'CLERK', '', '2019-07-07'),
(11, 'Anamika', 'Kumari', 'female', '8769087796', 'anamika@gmail.com', 'anamika', 'Ranchi', 'SALES', 'OFFICER', '', '2019-07-08'),
(12, 'Srishti', 'Surbhi', 'female', '9876098756', 'srishti@gmail.com', 'srishti', 'Gumla', 'MARKETING', 'MANAGER', 'IMG_20171231_202903.jpg', '2019-07-08'),
(13, 'Ankit', 'Sinha', 'male', '9876541230', 'ankit@gmail.com', 'ankit', 'Ranchi', 'PRODUCTION', 'OFFICER', 'IMG_20171230_174407_HDR.jpg', '2019-07-08'),
(14, 'Rahul', 'Sharma', 'male', '8765901212', 'rahul@gmail.com', 'rahul', 'Banglore', 'WORKSHOP', 'MANAGER', 'IMG_20171231_202840.jpg', '2019-07-09'),
(15, 'Ashwin', 'Pandey', 'male', '8765109273', 'ashwin@gmail.com', 'ashwin', 'Delhi', 'PRODUCTION', 'CLERK', 'IMG_20171231_203109.jpg', '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interview`
--

CREATE TABLE IF NOT EXISTS `tbl_interview` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `curdate` varchar(12) NOT NULL,
  `curtime` varchar(12) NOT NULL,
  `final` varchar(20) NOT NULL DEFAULT 'undone',
  PRIMARY KEY (`int_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_interview`
--

INSERT INTO `tbl_interview` (`int_id`, `name`, `email`, `mobile`, `date`, `time`, `curdate`, `curtime`, `final`) VALUES
(1, 'Ajay', 'ajay@gmail.com', '8790657213	', '2019-07-18', '11:00', '2019-07-10', '19:42:34', 'undone'),
(2, 'Akash', 'akash@gmail.com', '7809229611	', '2019-07-19', '11:00', '2019-07-11', '07:53:20', 'done'),
(3, 'Radha', 'radha@gmail.com', '9002134897', '2019-07-27', '1:00', '2019-07-11', '08:04:06', 'done'),
(4, 'Sanjay', 'sanjay@gmail.com', '9808712312', '2019-07-25', '4:00', '2019-07-11', '10:45:37', 'undone'),
(5, 'Payal', 'payal@gmail.com', '7801230981', '2019-07-26', '2:00', '2019-07-11', '10:51:42', 'done'),
(6, 'Saurabh', 'saurabh@gmail.com', '8887706519', '2019-07-18', '11', '2019-07-11', '11:23:53', 'done'),
(7, 'Saurabh', 'saurabh@gmail.com', '8887706519', '2019-07-18', '11:00', '2019-07-11', '11:24:08', 'undone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `leave_from` varchar(10) NOT NULL,
  `leave_to` varchar(10) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(11) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`leave_id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leave_id`, `id`, `leave_from`, `leave_to`, `reason`, `status`, `curdate`) VALUES
(1, 8, '2019-07-05', '2019-07-07', 'sick leave', 'pending', '2019-07-03'),
(2, 2, '2019-07-04', '2019-07-11', 'going home', 'confirm', '2019-07-03'),
(3, 2, '2019-07-04', '2019-07-05', 'sick', 'pending', '2019-07-03'),
(4, 4, '2019-07-12', '2019-07-20', 'sick', 'confirm', '2019-07-03'),
(5, 4, '2019-07-06', '2019-07-14', 'examinations', 'pending', '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide',
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`note_id`, `title`, `description`, `status`, `role`) VALUES
(1, 'Job Vacancy', 'Job vacancy for Inventory.', 'Show', 'Public'),
(2, 'Holiday', 'On account of jayanti there will a holiday on monday.', 'Show', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE IF NOT EXISTS `tbl_ques` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`q_id`, `emp_id`, `ques`, `date`, `time`) VALUES
(1, 3, 'What is the capital of India?', '2019-07-06', '19:01:36'),
(2, 3, 'What is the capital of Australia?', '2019-07-06', '19:03:40'),
(3, 8, 'What is Photosynthesis?', '2019-07-06', '19:57:38'),
(4, 1, 'Is there a leave this thursday?', '2019-07-06', '23:10:11'),
(5, 6, 'Who is the head of Marketing department?', '2019-07-07', '13:40:11'),
(6, 10, 'please give me Technical department information.', '2019-07-07', '17:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(60) NOT NULL,
  `desig` varchar(60) NOT NULL,
  `paygrade` varchar(14) NOT NULL,
  `basic` varchar(14) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`sal_id`, `dept`, `desig`, `paygrade`, `basic`) VALUES
(1, 'WORKSHOP', 'CLERK', '400', '12000'),
(2, 'HR', 'OFFICER', '2667', '80010'),
(3, 'ACCOUNTS', 'MANAGER', '1667', '50010'),
(4, 'INVENTORY', 'CLERK', '334', '10020'),
(5, 'WORKSHOP', 'MANAGER', '1000', '30000'),
(6, 'MARKETING', 'OFFICER', '1000', '30000'),
(7, 'PRODUCTION', 'CLERK', '400', '12000'),
(8, 'SALES', 'MANAGER', '1167', '35010'),
(9, 'HOUSE KEEPING', 'MANAGER', '667', '20010'),
(11, 'ACCOUNTS', 'CLERK', '300', '9000'),
(12, 'ACCOUNTS', 'OFFICER', '700', '21000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `set_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(200) NOT NULL,
  `mode` varchar(200) NOT NULL DEFAULT 'locked',
  PRIMARY KEY (`set_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`set_id`, `setting`, `mode`) VALUES
(1, 'attendance', 'unlocked'),
(2, 'access', 'admin');
