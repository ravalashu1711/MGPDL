-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 06:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `license`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `con_password` varchar(30) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `name`, `email`, `password`, `con_password`, `status`, `created_date`, `updated_date`) VALUES
(1, 'chirag', 'Chirag@gmail.com', '1234', '1234', 'Active', '0000-00-00 00:00:00', '2017-02-18 12:24:48'),
(2, 'Roshni', 'Roshni@gmail.com', '12345', '12345', 'Active', '0000-00-00 00:00:00', '2017-02-17 09:58:40'),
(3, 'roshni148', 'roshni', '123', '1234', 'Active', '2017-02-10 12:34:13', '0000-00-00 00:00:00'),
(4, 'roshni148', 'ccccc', 'ccccc', 'ccccc', 'Active', '2017-02-10 12:57:56', '0000-00-00 00:00:00'),
(5, 'chi', 'ccc', 'bbb', 'b', 'Active', '2017-02-10 13:02:39', '0000-00-00 00:00:00'),
(6, 'chi', 'ccc', 'bbb', 'b', 'Active', '2017-02-10 13:11:05', '0000-00-00 00:00:00'),
(7, 'ccc', 'nnnn', 'vvvv', 'bbb', 'Active', '2017-02-10 13:12:06', '0000-00-00 00:00:00'),
(8, 'sss', 'aaa', 'hhhh', 'vbbb', 'Active', '2017-02-11 12:21:21', '0000-00-00 00:00:00'),
(9, '123', '123', '123', '1', '', '2017-02-13 14:30:16', '0000-00-00 00:00:00'),
(10, 'ritu', 'roshnibhraman1422@gmail.com', '123', '123', 'Active', '2017-02-17 09:47:00', '0000-00-00 00:00:00');

--
-- Triggers `admin_login`
--
DELIMITER $$
CREATE TRIGGER `a_created_date` BEFORE INSERT ON `admin_login` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `a_updated_date` BEFORE UPDATE ON `admin_login` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `ad_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `discription` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`ad_id`, `title`, `url`, `discription`, `status`, `created_date`, `updated_date`) VALUES
(1, 'News', 'image/news/sports', 'Display News ', 'Inactive', '0000-00-00 00:00:00', '2017-02-09 12:04:39');

--
-- Triggers `advertisement`
--
DELIMITER $$
CREATE TRIGGER `ad_created_date` BEFORE INSERT ON `advertisement` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ad_updated_date` BEFORE UPDATE ON `advertisement` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ap_id` int(5) NOT NULL,
  `u_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ap_type` varchar(20) NOT NULL,
  `ap_date` date NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `u_id`, `name`, `ap_type`, `ap_date`, `status`, `created_date`, `updated_date`) VALUES
(17, 0, 'Patel Chirag D.', 'New License', '2017-03-22', 'Active', '2017-03-10 21:45:15', '0000-00-00 00:00:00'),
(18, 0, 'Patel Roshni D.', 'Renew License', '0055-05-05', 'Active', '2017-03-10 22:05:26', '0000-00-00 00:00:00'),
(19, 0, 'patel asha d', 'New License', '1995-08-05', 'Active', '2017-03-11 09:22:14', '0000-00-00 00:00:00'),
(20, 0, 'Patel Chirag D.', 'New License', '2017-03-24', 'Active', '2017-03-11 09:32:54', '0000-00-00 00:00:00'),
(21, 0, 'Roshni', 'New License', '2017-03-24', 'Active', '2017-03-22 23:52:04', '0000-00-00 00:00:00'),
(22, 0, 'Roshni', 'New License', '0055-05-05', 'Active', '2017-03-23 00:00:00', '0000-00-00 00:00:00'),
(23, 0, 'Patel Roshni D.', 'Renew License', '2017-03-18', 'Active', '2017-03-23 00:14:11', '0000-00-00 00:00:00'),
(24, 0, 'Patel Roshni D.', 'New License', '2017-03-30', 'Active', '2017-03-23 11:41:14', '0000-00-00 00:00:00'),
(25, 0, '$name', '$ap_type', '0000-00-00', 'Active', '2017-03-24 10:46:59', '0000-00-00 00:00:00'),
(26, 6, 'Chirag', 'Renew License', '2017-03-03', 'Active', '2017-03-24 10:48:58', '2017-03-24 11:05:00'),
(27, 6, 'Chirag', 'New License', '2017-03-03', 'Active', '2017-03-24 10:50:00', '0000-00-00 00:00:00'),
(28, 6, 'Chirag', 'New License', '2017-03-03', 'Active', '2017-03-24 10:51:08', '0000-00-00 00:00:00'),
(29, 6, 'Chirag', 'New License', '2017-03-03', 'Active', '2017-03-24 10:52:01', '0000-00-00 00:00:00'),
(30, 6, 'Chirag', 'New License', '2017-03-31', 'Active', '2017-03-24 10:52:31', '0000-00-00 00:00:00'),
(31, 6, 'Chirag', 'New License', '2017-03-31', 'Active', '2017-03-24 10:54:46', '0000-00-00 00:00:00'),
(32, 6, 'Chirag', 'New License', '2018-02-22', 'Active', '2017-03-24 11:12:33', '0000-00-00 00:00:00'),
(33, 65, 'Patel Chirag D.', 'New License', '2017-03-29', 'Active', '2017-03-24 13:44:30', '0000-00-00 00:00:00'),
(34, 5, 'Patel Chirag D.', 'New License', '2017-03-22', 'Active', '2017-03-25 01:06:30', '0000-00-00 00:00:00'),
(35, 5, 'Patel Chirag D.', 'Renew License', '2017-03-24', 'Active', '2017-03-25 01:08:49', '0000-00-00 00:00:00'),
(36, 71, 'Patel Roshni D.', 'New License', '2017-03-09', 'Active', '2017-03-25 09:38:46', '0000-00-00 00:00:00'),
(37, 7, 'Patel Chirag D.', 'Renew License', '2017-03-25', 'Active', '2017-03-25 10:28:08', '0000-00-00 00:00:00');

--
-- Triggers `appointment`
--
DELIMITER $$
CREATE TRIGGER `ap_created_date` BEFORE INSERT ON `appointment` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ap_updated_date` BEFORE UPDATE ON `appointment` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `created_date`, `updated_date`) VALUES
(1, 'New License', 'Active', '2017-01-26 17:00:29', '2017-02-09 12:18:30'),
(2, 'Permanent License ', 'Inactive', '2017-01-26 17:01:55', '2017-01-31 18:05:53'),
(3, 'Renew License', 'Active', '2017-01-26 18:05:10', '0000-00-00 00:00:00');

--
-- Triggers `category`
--
DELIMITER $$
CREATE TRIGGER `cat_created_date` BEFORE INSERT ON `category` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cat_updated_date` BEFORE UPDATE ON `category` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `cmp_id` int(5) NOT NULL,
  `cmp_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`cmp_id`, `cmp_name`, `email`, `contact_no`, `address`, `logo`, `status`, `created_date`, `updated_date`) VALUES
(1, 'WaytoWeb', 'waytoweb@gmail.com', 999999999, 'Mahesana', 'map.png', 'Active', '2017-01-29 12:38:31', '2017-02-09 12:33:17');

--
-- Triggers `company_info`
--
DELIMITER $$
CREATE TRIGGER `cmp_created_date` BEFORE INSERT ON `company_info` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cmp_updated_date` BEFORE UPDATE ON `company_info` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `d_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`d_id`, `title`, `file`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Aadhar Card', 'user_form.php', 'Active', '2017-01-26 11:32:18', '2017-02-09 12:47:31'),
(2, 'Aadhar Card', 'user_action.php', 'Active', '2017-01-26 17:45:32', '0000-00-00 00:00:00');

--
-- Triggers `document`
--
DELIMITER $$
CREATE TRIGGER `d_created_date` BEFORE INSERT ON `document` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `d_updated_date` BEFORE UPDATE ON `document` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `e_id` int(5) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`e_id`, `to`, `from`, `subject`, `message`, `created_date`, `updated_date`) VALUES
(1, 'chirag', 'mehul', 'for reg only.', 'hiiiiiiiii', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'chirag@gmail.com', 'roshni@gmail.com', 'For Renew License', 'HOW R U?', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Triggers `email`
--
DELIMITER $$
CREATE TRIGGER `e_created_date` BEFORE INSERT ON `email` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `e_updated_date` BEFORE UPDATE ON `email` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `f_id` int(5) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `question`, `answer`, `status`, `created_date`, `updated_date`) VALUES
(2, 'what is your name?', 'Chirag', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'What Is Your Name?', 'Roshni', 'Active', '2017-01-26 18:06:15', '2017-01-26 18:06:34');

--
-- Triggers `faq`
--
DELIMITER $$
CREATE TRIGGER `f_created_date` BEFORE INSERT ON `faq` FOR EACH ROW SET New.created_date= NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `f_updated_date` BEFORE UPDATE ON `faq` FOR EACH ROW SET New.updated_date= NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fd_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fd_id`, `name`, `email`, `subject`, `message`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Chirag', 'Chiragpatel@gmail.com', 'Learning License', 'Hi How R U ?????', 'Active', '2017-01-26 22:38:41', '2017-02-09 12:53:02'),
(2, 'roshni', 'Roshni@gmail.com', 'dgdt', '', 'Active', '2017-02-20 13:01:25', '0000-00-00 00:00:00'),
(3, 'roshni', 'Roshni@gmail.com', 'dgdt', 'hiii', 'Active', '2017-02-20 13:04:04', '0000-00-00 00:00:00'),
(4, '', 'Chiragpatel8595@gmail.com', '', '', 'Active', '2017-03-03 21:55:34', '0000-00-00 00:00:00'),
(5, 'Roshni', 'Roshni@gmail.com', 'for reg only', 'hii', 'Active', '2017-03-04 10:24:11', '0000-00-00 00:00:00'),
(6, 'Roshni', 'Roshni@gmail.com', 'for reg only', 'hii', 'Active', '2017-03-04 10:27:42', '0000-00-00 00:00:00'),
(7, 'Nootan', 'Nootan@gmail.com', 'Alllll', 'Hiiiii', 'Active', '2017-03-04 12:15:55', '0000-00-00 00:00:00'),
(8, 'Chirag Patel', 'Chiragpatel8595@gmail.com', '', '', 'Active', '2017-03-07 21:09:58', '0000-00-00 00:00:00'),
(9, 'asha patel', 'asha@gmail.com', 'for reg only', 'hiiiii', 'Active', '2017-03-11 09:25:02', '0000-00-00 00:00:00'),
(10, 'asha patel', 'asha@gmail.com', 'for reg only', 'hiiiii', 'Active', '2017-03-11 09:26:21', '0000-00-00 00:00:00'),
(11, 'Patel Chirag D.', 'chiragpatel8595@gmail.com', 'For Registration', 'Hiiiiiii', 'Active', '2017-03-24 12:25:15', '0000-00-00 00:00:00');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `fd_created_date` BEFORE INSERT ON `feedback` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `fd_updated_date` BEFORE UPDATE ON `feedback` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `g_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `photo` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`g_id`, `title`, `discription`, `photo`, `status`, `created_date`, `updated_date`) VALUES
(1, 'image', 'License Pic   ', 'FB_IMG_1475906181075_1476040587855.jpg', 'Active', '2017-01-26 23:53:48', '2017-02-07 13:16:50');

--
-- Triggers `gallary`
--
DELIMITER $$
CREATE TRIGGER `g_created_date` BEFORE INSERT ON `gallary` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `g_updated_date` BEFORE UPDATE ON `gallary` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `l_id` int(5) NOT NULL,
  `l_no` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `lic_type` varchar(40) NOT NULL,
  `exp_date` date NOT NULL,
  `start_date` date NOT NULL,
  `address` text NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `license_type`
--

CREATE TABLE `license_type` (
  `lic_id` int(5) NOT NULL,
  `lic_type` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license_type`
--

INSERT INTO `license_type` (`lic_id`, `lic_type`, `created_date`, `updated_date`) VALUES
(1, 'Learner  License', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Permanent  License', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Renew License', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Triggers `license_type`
--
DELIMITER $$
CREATE TRIGGER `lic_created_date` BEFORE INSERT ON `license_type` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `lic_updated_date` BEFORE UPDATE ON `license_type` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `new_license`
--

CREATE TABLE `new_license` (
  `nl_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `b_group` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `document` text NOT NULL,
  `lic_cat` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_license`
--

INSERT INTO `new_license` (`nl_id`, `name`, `email`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `lic_cat`, `status`, `created_date`, `updated_date`) VALUES
(65, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'B612_20170305_134331.jpg', 'FVG-Motorcycles', 'Active', '2017-03-24 13:37:44', '2017-03-25 00:22:32'),
(66, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '2017-03-25 00:31:11', '0000-00-00 00:00:00'),
(67, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '2017-03-25 00:46:11', '0000-00-00 00:00:00'),
(68, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '2017-03-25 00:47:38', '0000-00-00 00:00:00'),
(69, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '2017-03-25 00:52:09', '0000-00-00 00:00:00'),
(70, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'B612_20170305_134721-1.jpg', 'FVG-Motorcycles', 'Active', '2017-03-25 00:56:35', '0000-00-00 00:00:00'),
(71, 'Patel Roshni D.', 'Roshni@gmail.com', 'visnagar', 384315, 'Kadi', 'Gujarat', 'India', '9965123654', '1995-05-14', 'vijapur', 22, 'A-', 'mca', '1480007445575_tmp.jpg', 'Light Motor Vehicle', 'Active', '2017-03-25 09:35:48', '0000-00-00 00:00:00'),
(72, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'BCA', '10464257_10152468297619123_5189830050556797626_n.jpg', 'FVG-Motorcycles', 'Active', '2017-03-25 10:21:57', '0000-00-00 00:00:00'),
(73, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'alia & varun remodified.jpg', 'FVG-Motorcycles', 'Active', '2017-03-25 10:23:00', '0000-00-00 00:00:00'),
(74, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'alia & varun remodified.jpg', 'FVG-Motorcycles', 'Active', '2017-03-25 10:24:09', '0000-00-00 00:00:00'),
(75, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'alia & varun remodified.jpg', 'FVG-Motorcycles', 'Active', '2017-03-25 10:26:07', '0000-00-00 00:00:00');

--
-- Triggers `new_license`
--
DELIMITER $$
CREATE TRIGGER `nl_created_date` BEFORE INSERT ON `new_license` FOR EACH ROW SET NEW.created_date = Now()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nl_updated_date` BEFORE UPDATE ON `new_license` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  `pay_by` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `u_id`, `name`, `pay_type`, `amount`, `pay_by`, `bank`, `status`, `created_date`, `updated_date`) VALUES
(1, 0, '$name', '$pay_type', 0, '$pay_by', '$bank', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 'Chirag', 'New License', 250, 'CreditCard', 'BOB', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 6, 'Chirag', 'Renew License', 250, 'CreditCard', 'BOB', 'Active', '2017-03-24 10:05:57', '2017-03-24 11:07:04'),
(4, 6, 'Chirag', 'New License', 250, 'CreditCard', 'BOB', 'Active', '2017-03-24 10:08:50', '0000-00-00 00:00:00'),
(6, 6, 'Chirag', 'New License', 250, 'DebitCard', 'BOB', 'Active', '2017-03-24 10:22:06', '0000-00-00 00:00:00'),
(7, 65, 'Patel Chirag D.', 'New License', 250, 'DebitCard', 'DENA', 'Active', '2017-03-24 13:41:54', '0000-00-00 00:00:00'),
(8, 5, 'Patel Chirag D.', 'Renew License', 250, 'DebitCard', 'SBI', 'Active', '2017-03-25 01:03:57', '0000-00-00 00:00:00'),
(9, 71, 'Patel Roshni D.', 'New License', 250, 'CreditCard', 'DENA', 'Active', '2017-03-25 09:36:59', '0000-00-00 00:00:00'),
(10, 7, 'Patel Chirag D.', 'Renew License', 250, 'DebitCard', '', 'Active', '2017-03-25 10:27:40', '0000-00-00 00:00:00');

--
-- Triggers `payment`
--
DELIMITER $$
CREATE TRIGGER `pay_created_date` BEFORE INSERT ON `payment` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pay_updated_date` BEFORE UPDATE ON `payment` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post_query`
--

CREATE TABLE `post_query` (
  `q_id` int(5) NOT NULL,
  `q_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `document` varchar(50) NOT NULL,
  `q_reply` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_query`
--

INSERT INTO `post_query` (`q_id`, `q_no`, `name`, `email`, `title`, `discription`, `document`, `q_reply`, `status`, `created_date`, `updated_date`) VALUES
(1, 101, 'Chirag Patel', 'Chiragpatel@gmail.com', 'new license', 'How to get New License ?', 'Aadharcard', 'Visit Our Website', 'Active', '0000-00-00 00:00:00', '2017-02-09 13:04:57'),
(2, 102, 'Roshni', 'Roshni@gmail.com', 'Renew License', 'How to Renew License?', 'Aadhar Card', 'Please Visit Our Website', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 104, 'Patel Chirag D.', 'Chiragpatel@gmail.com', 'How to Get License ?', 'How to Get License ?', 'Aadhar Card', 'Visit Our Website', 'Active', '2017-01-31 18:28:59', '2017-01-31 18:29:23');

--
-- Triggers `post_query`
--
DELIMITER $$
CREATE TRIGGER `q_created_date` BEFORE INSERT ON `post_query` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `q_updated_date` BEFORE UPDATE ON `post_query` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `renew_license`
--

CREATE TABLE `renew_license` (
  `rl_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `b_group` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `document` text NOT NULL,
  `lic_cat` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renew_license`
--

INSERT INTO `renew_license` (`rl_id`, `name`, `email`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `lic_cat`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'B612_20170305_134721-1.jpg', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'B612_20170305_134721-1.jpg', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '$name', '$email', '$address', 0, '$city', '$state', '$country', '$mobile', '0000-00-00', '$place_of_birth', 0, '$b_group', '$education', '$document', '$lic_cat', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', '10464257_10152468297619123_5189830050556797626_n.jpg', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Patel Chirag D.', 'chiragpatel@gmail.com', 'Mahesana', 384001, 'Vijapur', 'Gujarat', 'India', '2147483647', '1995-05-08', 'Manasa', 21, 'A+', 'MCA', 'download (1).jpg', 'FVG-Motorcycles', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `r_license`
--

CREATE TABLE `r_license` (
  `rl_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `relative_name` varchar(30) NOT NULL,
  `lic_no` int(20) NOT NULL,
  `issue_date` date NOT NULL,
  `issuer_name` varchar(30) NOT NULL,
  `last_renew` varchar(30) NOT NULL,
  `no_of_renewal` int(5) NOT NULL,
  `renew_date` date NOT NULL,
  `class_of_vehicle` varchar(30) NOT NULL,
  `exp_date` date NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `mobile` int(12) NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `b_group` varchar(5) NOT NULL,
  `education` varchar(30) NOT NULL,
  `document` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_license`
--

INSERT INTO `r_license` (`rl_id`, `name`, `email`, `relative_name`, `lic_no`, `issue_date`, `issuer_name`, `last_renew`, `no_of_renewal`, `renew_date`, `class_of_vehicle`, `exp_date`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `status`, `created_date`, `updated_date`) VALUES
(2, 'Chirag Patel', 'Chiragpatel8595@gmail.com', 'Dineshbhai', 987654321, '2017-03-10', 'Roshni Patel', 'Roshni', 1, '2017-03-17', 'Two-Vehiler', '2017-03-12', 'Mahesana', 384001, 'Visnagar', 'Gujarat', 'India', 2147483647, '2017-03-10', 'Manasa', 22, 'A+', 'MCA', 'download (1).jpg', 'Active', '2017-03-07 21:12:00', '2017-03-07 21:20:33'),
(5, 'Roshni Patel', 'Roshnipatel8595@gmail.com', 'Dineshbhai', 987654321, '2017-03-10', 'Chirag Patel', 'Chirag', 1, '2017-03-17', 'Two-Vehiler', '2017-03-12', 'Mahesana', 384001, 'Visnagar', 'Gujarat', 'India', 2147483647, '2017-03-10', 'Manasa', 22, 'A+', 'MCA', 'download (1).jpg', 'Active', '2017-03-07 21:22:49', '2017-03-07 21:24:11'),
(6, 'Patel Chirag D.', 'Chiragpatel8595@gmail.com', 'Dineshbhai', 987654321, '2017-03-10', 'Roshni Patel', 'Roshni', 1, '2017-03-18', 'Two-Vehiler', '2017-03-08', 'Mahesana', 384001, 'Visnagar', 'Gujarat', 'India', 2147483647, '2017-03-10', 'Manasa', 22, 'A+', 'MCA', 'download (1).jpg', 'Active', '2017-03-07 21:29:16', '0000-00-00 00:00:00'),
(7, 'Patel Roshni D.', 'Roshni@gmail.com', 'Dineshbhai', 2147483647, '5555-05-05', 'Chirag Patel', 'Chirag', 2, '2222-02-22', 'Two-Vehiler', '3333-03-31', 'Visnagar', 384001, 'Visnagar', 'Gujarat', 'India', 2147483647, '1995-05-14', 'visnagar', 22, 'A+', 'MCA', 'images (2).jpg', 'Active', '2017-03-10 21:55:55', '0000-00-00 00:00:00'),
(8, 'Patel Chirag D.', '', '', 0, '0000-00-00', '', '', 0, '0000-00-00', '', '0000-00-00', 'Chitroda(Mota)', 0, 'Visnagar', '', '', 2147483647, '1995-05-08', '', 22, '', '', '', 'Active', '2017-03-10 22:48:45', '0000-00-00 00:00:00'),
(9, 'Roshni', 'Roshni@gmail.com', 'Dineshbhai', 123456789, '0055-05-05', 'a', 'b', 2, '0005-05-05', 'T', '0005-05-05', 'a', 123, 'Jhulasan', 'Gujarat', 'India', 2147483647, '1995-05-14', 'Visnagar', 22, 'AB+', 'Mca', 'IMG_20170306_075700_198.jpg', 'Active', '2017-03-23 12:46:22', '0000-00-00 00:00:00');

--
-- Triggers `r_license`
--
DELIMITER $$
CREATE TRIGGER `rl_created_date` BEFORE INSERT ON `r_license` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `rl_updated_date` BEFORE UPDATE ON `r_license` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(5) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `status`, `created_date`, `updated_date`) VALUES
(1, 1, 'Two Vehiler', 'Active', '0000-00-00 00:00:00', '2017-02-09 12:23:16');

--
-- Triggers `sub_category`
--
DELIMITER $$
CREATE TRIGGER `sub_cat_created_date` BEFORE INSERT ON `sub_category` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sub_cat_updated_date` BEFORE UPDATE ON `sub_category` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `t_id` int(5) NOT NULL,
  `question` text NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`, `status`, `created_date`, `updated_date`) VALUES
(14, 'Near a pedestrian crossing , When the pedestrians are waiting to cross the road , you should ..', 'Sound horn and proceed', 'Slow down , sound horn and pass', 'Stop the vehicle and wait till the pedestrians cro', 'Proceed', '3', 'Active', '2017-03-21 12:01:45', '0000-00-00 00:00:00'),
(15, 'You are approaching a narrow bridge , another vehicle is about to enter the bridge from opposite side , you should ..', 'Increse the speed and try to cross the bridge as f', 'put on the head light and pass the bridge', 'wait till the other vehicle crosses the bridge and', 'just pass the bridge', '3', 'Active', '2017-03-21 12:01:45', '0000-00-00 00:00:00'),
(16, 'When a vehicle is involved in an accident causing injury to any person..', 'Take the vehicle to the nearest police station and', 'stop the vehicle and report to the police station', 'Take all reasonable steps to secure medical attens', 'Take selfy with it', '3', 'Active', '2017-03-21 12:39:26', '0000-00-00 00:00:00'),
(17, 'On a road designated as one way', 'Parking is prohibited', 'Overtaking is prohibited', 'Should not drive in reverse gear', 'None Of Above', '3', 'Active', '2017-03-21 13:06:03', '0000-00-00 00:00:00'),
(18, 'You can overtake a vehicle in front', 'From the right side of that vehicle', 'Through the left side', 'Through the left side, if the road is wide', 'None Of Above', '1', 'Active', '2017-03-21 13:06:03', '0000-00-00 00:00:00'),
(19, 'When a vehicle approaches an unguarded railway level crossing, before crossing it, the driver shall', 'Stop the vehicle on the left side of the road, get', 'Sound horn and cross the track as fast as possible', 'Wait till the train passes', 'None Of Above', '1', 'Active', '2017-03-21 13:06:03', '0000-00-00 00:00:00'),
(20, 'Validity of learnerâ€™s licence', 'Till the driving licence is', '6 months from the date of issu', '30 day', '2 months', '2', 'Active', '2017-03-21 13:06:03', '0000-00-00 00:00:00');

--
-- Triggers `test`
--
DELIMITER $$
CREATE TRIGGER `t_created_date` BEFORE INSERT ON `test` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_updated_date` BEFORE UPDATE ON `test` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `u_id` int(5) NOT NULL,
  `photo` text NOT NULL,
  `aadhar_no` bigint(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `con_password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `city` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `birth_date` date NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `photo`, `aadhar_no`, `name`, `address`, `pincode`, `uname`, `password`, `con_password`, `email`, `gender`, `mobile`, `city`, `age`, `birth_date`, `status`, `created_date`, `updated_date`) VALUES
(34, 'B612_20170305_134721-1.jpg', 123456789145, 'Patel Chirag D.', 'Mahesana', 384315, 'chiragpatel8595@gmail.com', '123', '123', 'chiragpatel@gmail.com', 'Male', 9999999999, 'Visnagar', 21, '1995-05-08', 'Active', '2017-03-24 13:17:48', '2017-03-24 18:20:22'),
(35, '10005171_879029872182970_1117755487_n (1).jpg', 556985555, 'Patel Roshni D.', 'visnagar', 384315, 'roshni@gmail.com', '123', '123', 'Roshni@gmail.com', 'Female', 9965123654, 'Kadi', 22, '1995-05-14', 'Active', '2017-03-25 09:33:17', '0000-00-00 00:00:00');

--
-- Triggers `user_reg`
--
DELIMITER $$
CREATE TRIGGER `u_created_date` BEFORE INSERT ON `user_reg` FOR EACH ROW SET NEW.created_date = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_updated_date` BEFORE UPDATE ON `user_reg` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fd_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `license_type`
--
ALTER TABLE `license_type`
  ADD PRIMARY KEY (`lic_id`);

--
-- Indexes for table `new_license`
--
ALTER TABLE `new_license`
  ADD PRIMARY KEY (`nl_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `post_query`
--
ALTER TABLE `post_query`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `renew_license`
--
ALTER TABLE `renew_license`
  ADD PRIMARY KEY (`rl_id`);

--
-- Indexes for table `r_license`
--
ALTER TABLE `r_license`
  ADD PRIMARY KEY (`rl_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `ad_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ap_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `cmp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `d_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `license_type`
--
ALTER TABLE `license_type`
  MODIFY `lic_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `new_license`
--
ALTER TABLE `new_license`
  MODIFY `nl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `post_query`
--
ALTER TABLE `post_query`
  MODIFY `q_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `renew_license`
--
ALTER TABLE `renew_license`
  MODIFY `rl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `r_license`
--
ALTER TABLE `r_license`
  MODIFY `rl_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
