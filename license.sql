-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `a_id` int(5) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `con_password` varchar(30) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin_login` (`a_id`, `photo`, `name`, `email`, `password`, `con_password`, `status`, `created_date`, `updated_date`) VALUES
(1,	'whats_app_pic.jpg',	'Ashutosh',	'ravalashutosh17@gmail.com',	'123',	'123',	'Active',	'2018-11-17 09:13:40',	'2018-11-19 11:44:53'),
(11,	'High_Definition_3D_Play_Card_Two_Ace_Photos_for_Laptop_Background.jpg',	'Pooja',	'poojasoni@gmail.com',	'456',	'456',	'Active',	'2018-11-19 11:45:10',	'2018-11-19 11:48:41');

DELIMITER ;;

CREATE TRIGGER `a_created_date` BEFORE INSERT ON `admin_login` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `a_updated_date` BEFORE UPDATE ON `admin_login` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE `advertisement` (
  `ad_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `discription` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `advertisement` (`ad_id`, `title`, `url`, `discription`, `status`, `created_date`, `updated_date`) VALUES
(1,	'News',	'image/news/sports',	'Display News ',	'Inactive',	'0000-00-00 00:00:00',	'2017-02-09 12:04:39');

DELIMITER ;;

CREATE TRIGGER `ad_created_date` BEFORE INSERT ON `advertisement` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `ad_updated_date` BEFORE UPDATE ON `advertisement` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `ap_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ap_type` varchar(20) NOT NULL,
  `ap_date` date NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `appointment` (`ap_id`, `u_id`, `name`, `ap_type`, `ap_date`, `status`, `created_date`, `updated_date`) VALUES
(38,	36,	'Ashutosh Raval',	'Renew License',	'2019-06-17',	'Active',	'2018-11-19 10:47:11',	'2018-11-19 10:49:23');

DELIMITER ;;

CREATE TRIGGER `ap_created_date` BEFORE INSERT ON `appointment` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `ap_updated_date` BEFORE UPDATE ON `appointment` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `created_date`, `updated_date`) VALUES
(1,	'New License',	'Active',	'2018-11-19 10:50:57',	'2018-11-19 10:51:40'),
(2,	'Permanent License ',	'Inactive',	'2018-11-19 10:51:10',	'2018-11-19 10:51:10'),
(3,	'Renew License',	'Active',	'2018-11-19 10:51:19',	'2018-11-19 10:51:19');

DELIMITER ;;

CREATE TRIGGER `cat_created_date` BEFORE INSERT ON `category` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `cat_updated_date` BEFORE UPDATE ON `category` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `company_info`;
CREATE TABLE `company_info` (
  `cmp_id` int(5) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`cmp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `company_info` (`cmp_id`, `cmp_name`, `email`, `contact_no`, `address`, `logo`, `status`, `created_date`, `updated_date`) VALUES
(1,	'WaytoWeb',	'waytoweb@gmail.com',	999999999,	'Mahesana',	'map.png',	'Active',	'2017-01-29 12:38:31',	'2017-02-09 12:33:17');

DELIMITER ;;

CREATE TRIGGER `cmp_created_date` BEFORE INSERT ON `company_info` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `cmp_updated_date` BEFORE UPDATE ON `company_info` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `document`;
CREATE TABLE `document` (
  `d_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `document` (`d_id`, `title`, `file`, `status`, `created_date`, `updated_date`) VALUES
(1,	'Aadhar Card',	'user_form.php',	'Active',	'2017-01-26 11:32:18',	'2017-02-09 12:47:31'),
(2,	'Aadhar Card',	'user_action.php',	'Active',	'2017-01-26 17:45:32',	'0000-00-00 00:00:00');

DELIMITER ;;

CREATE TRIGGER `d_created_date` BEFORE INSERT ON `document` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `d_updated_date` BEFORE UPDATE ON `document` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `e_id` int(5) NOT NULL AUTO_INCREMENT,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `email` (`e_id`, `to`, `from`, `subject`, `message`, `created_date`, `updated_date`) VALUES
(1,	'chirag',	'mehul',	'for reg only.',	'hiiiiiiiii',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	'chirag@gmail.com',	'roshni@gmail.com',	'For Renew License',	'HOW R U?',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DELIMITER ;;

CREATE TRIGGER `e_created_date` BEFORE INSERT ON `email` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `e_updated_date` BEFORE UPDATE ON `email` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `faq` (`f_id`, `question`, `answer`, `status`, `created_date`, `updated_date`) VALUES
(2,	'what is your name?',	'Chirag',	'Active',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'What Is Your Name?',	'Roshni',	'Active',	'2017-01-26 18:06:15',	'2017-01-26 18:06:34');

DELIMITER ;;

CREATE TRIGGER `f_created_date` BEFORE INSERT ON `faq` FOR EACH ROW
SET New.created_date= NOW();;

CREATE TRIGGER `f_updated_date` BEFORE UPDATE ON `faq` FOR EACH ROW
SET New.updated_date= NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fd_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`fd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `feedback` (`fd_id`, `name`, `email`, `subject`, `message`, `status`, `created_date`, `updated_date`) VALUES
(12,	'Ashutosh',	'ravalashutosh17@gmail.com',	'appointment',	'You can give chance for select appointment date by user',	'Active',	'2018-11-19 10:54:39',	'2018-11-19 10:54:54');

DELIMITER ;;

CREATE TRIGGER `fd_created_date` BEFORE INSERT ON `feedback` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `fd_updated_date` BEFORE UPDATE ON `feedback` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE `gallary` (
  `g_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `photo` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallary` (`g_id`, `title`, `discription`, `photo`, `status`, `created_date`, `updated_date`) VALUES
(1,	'image',	'License Pic   ',	'FB_IMG_1475906181075_1476040587855.jpg',	'Active',	'2017-01-26 23:53:48',	'2017-02-07 13:16:50');

DELIMITER ;;

CREATE TRIGGER `g_created_date` BEFORE INSERT ON `gallary` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `g_updated_date` BEFORE UPDATE ON `gallary` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `license`;
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


DROP TABLE IF EXISTS `license_type`;
CREATE TABLE `license_type` (
  `lic_id` int(5) NOT NULL AUTO_INCREMENT,
  `lic_type` varchar(30) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`lic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `license_type` (`lic_id`, `lic_type`, `created_date`, `updated_date`) VALUES
(6,	'Learner License',	'2018-11-19 12:22:23',	'2018-11-19 12:27:20');

DELIMITER ;;

CREATE TRIGGER `lic_created_date` BEFORE INSERT ON `license_type` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `lic_updated_date` BEFORE UPDATE ON `license_type` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `new_license`;
CREATE TABLE `new_license` (
  `nl_id` int(5) NOT NULL AUTO_INCREMENT,
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
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`nl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `new_license` (`nl_id`, `name`, `email`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `lic_cat`, `status`, `created_date`, `updated_date`) VALUES
(90,	'Ashutosh Raval',	'ravalashutosh17@gmail.com',	'25 A Tulsinagar Society',	382870,	'Vijapur',	'gujarat',	'India',	'9725408903',	'1994-06-17',	'Visnagar',	25,	'A-',	'MCA',	'whats_app_pic.jpg',	'Light Motor Vehicle-Transport',	'Active',	'2018-11-19 09:35:10',	'2018-11-19 09:36:29');

DELIMITER ;;

CREATE TRIGGER `nl_created_date` BEFORE INSERT ON `new_license` FOR EACH ROW
SET NEW.created_date = Now();;

CREATE TRIGGER `nl_updated_date` BEFORE UPDATE ON `new_license` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  `pay_by` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DELIMITER ;;

CREATE TRIGGER `pay_created_date` BEFORE INSERT ON `payment` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `pay_updated_date` BEFORE UPDATE ON `payment` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `post_query`;
CREATE TABLE `post_query` (
  `q_id` int(5) NOT NULL AUTO_INCREMENT,
  `q_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `document` varchar(50) NOT NULL,
  `q_reply` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `post_query` (`q_id`, `q_no`, `name`, `email`, `title`, `discription`, `document`, `q_reply`, `status`, `created_date`, `updated_date`) VALUES
(1,	101,	'Chirag Patel',	'Chiragpatel@gmail.com',	'new license',	'How to get New License ?',	'Aadharcard',	'Visit Our Website',	'Active',	'0000-00-00 00:00:00',	'2017-02-09 13:04:57'),
(2,	102,	'Roshni',	'Roshni@gmail.com',	'Renew License',	'How to Renew License?',	'Aadhar Card',	'Please Visit Our Website',	'Active',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(4,	104,	'Patel Chirag D.',	'Chiragpatel@gmail.com',	'How to Get License ?',	'How to Get License ?',	'Aadhar Card',	'Visit Our Website',	'Active',	'2017-01-31 18:28:59',	'2017-01-31 18:29:23');

DELIMITER ;;

CREATE TRIGGER `q_created_date` BEFORE INSERT ON `post_query` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `q_updated_date` BEFORE UPDATE ON `post_query` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `renew_license`;
CREATE TABLE `renew_license` (
  `rl_id` int(5) NOT NULL AUTO_INCREMENT,
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
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`rl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `renew_license` (`rl_id`, `name`, `email`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `lic_cat`, `status`, `created_date`, `updated_date`) VALUES
(9,	'Ashutosh Raval',	'ravalashutosh17@gmail.com',	'25 A Tulsinagar Society',	382870,	'Vijapur',	'gujarat',	'India',	'9725408903',	'1994-11-17',	'Visnagar',	25,	'A-',	'MCA',	'whats_app_pic.jpg',	'FVG-Motorcycles',	'Active',	NULL,	NULL),
(10,	'Pooja',	'poojasoni@gmail.com',	'visnagar',	382865,	'Visnagar',	'Gujarat',	'India',	'8888888888',	'1995-05-17',	'Visnagar',	24,	'A+',	'MCA',	'High_Definition_3D_Play_Card_Two_Ace_Photos_for_Laptop_Background.jpg',	'Motorcycle more than 50cc',	'Active',	NULL,	NULL);

DROP TABLE IF EXISTS `r_license`;
CREATE TABLE `r_license` (
  `rl_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`rl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `r_license` (`rl_id`, `name`, `email`, `relative_name`, `lic_no`, `issue_date`, `issuer_name`, `last_renew`, `no_of_renewal`, `renew_date`, `class_of_vehicle`, `exp_date`, `address`, `pincode`, `city`, `state`, `country`, `mobile`, `birth_date`, `place_of_birth`, `age`, `b_group`, `education`, `document`, `status`, `created_date`, `updated_date`) VALUES
(2,	'Chirag Patel',	'Chiragpatel8595@gmail.com',	'Dineshbhai',	987654321,	'2017-03-10',	'Roshni Patel',	'Roshni',	1,	'2017-03-17',	'Two-Vehiler',	'2017-03-12',	'Mahesana',	384001,	'Visnagar',	'Gujarat',	'India',	2147483647,	'2017-03-10',	'Manasa',	22,	'A+',	'MCA',	'download (1).jpg',	'Active',	'2017-03-07 21:12:00',	'2017-03-07 21:20:33'),
(5,	'Roshni Patel',	'Roshnipatel8595@gmail.com',	'Dineshbhai',	987654321,	'2017-03-10',	'Chirag Patel',	'Chirag',	1,	'2017-03-17',	'Two-Vehiler',	'2017-03-12',	'Mahesana',	384001,	'Visnagar',	'Gujarat',	'India',	2147483647,	'2017-03-10',	'Manasa',	22,	'A+',	'MCA',	'download (1).jpg',	'Active',	'2017-03-07 21:22:49',	'2017-03-07 21:24:11'),
(6,	'Patel Chirag D.',	'Chiragpatel8595@gmail.com',	'Dineshbhai',	987654321,	'2017-03-10',	'Roshni Patel',	'Roshni',	1,	'2017-03-18',	'Two-Vehiler',	'2017-03-08',	'Mahesana',	384001,	'Visnagar',	'Gujarat',	'India',	2147483647,	'2017-03-10',	'Manasa',	22,	'A+',	'MCA',	'download (1).jpg',	'Active',	'2017-03-07 21:29:16',	'0000-00-00 00:00:00'),
(7,	'Patel Roshni D.',	'Roshni@gmail.com',	'Dineshbhai',	2147483647,	'5555-05-05',	'Chirag Patel',	'Chirag',	2,	'2222-02-22',	'Two-Vehiler',	'3333-03-31',	'Visnagar',	384001,	'Visnagar',	'Gujarat',	'India',	2147483647,	'1995-05-14',	'visnagar',	22,	'A+',	'MCA',	'images (2).jpg',	'Active',	'2017-03-10 21:55:55',	'0000-00-00 00:00:00'),
(8,	'Patel Chirag D.',	'',	'',	0,	'0000-00-00',	'',	'',	0,	'0000-00-00',	'',	'0000-00-00',	'Chitroda(Mota)',	0,	'Visnagar',	'',	'',	2147483647,	'1995-05-08',	'',	22,	'',	'',	'',	'Active',	'2017-03-10 22:48:45',	'0000-00-00 00:00:00'),
(9,	'Roshni',	'Roshni@gmail.com',	'Dineshbhai',	123456789,	'0055-05-05',	'a',	'b',	2,	'0005-05-05',	'T',	'0005-05-05',	'a',	123,	'Jhulasan',	'Gujarat',	'India',	2147483647,	'1995-05-14',	'Visnagar',	22,	'AB+',	'Mca',	'IMG_20170306_075700_198.jpg',	'Active',	'2017-03-23 12:46:22',	'0000-00-00 00:00:00');

DELIMITER ;;

CREATE TRIGGER `rl_created_date` BEFORE INSERT ON `r_license` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `rl_updated_date` BEFORE UPDATE ON `r_license` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE `sub_category` (
  `sub_cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_id` int(5) NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `foreign_key` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `status`, `created_date`, `updated_date`) VALUES
(1,	1,	'Two Vehiler',	'Active',	'0000-00-00 00:00:00',	'2017-02-09 12:23:16');

DELIMITER ;;

CREATE TRIGGER `sub_cat_created_date` BEFORE INSERT ON `sub_category` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `sub_cat_updated_date` BEFORE UPDATE ON `sub_category` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `t_id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test` (`t_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`, `status`, `created_date`, `updated_date`) VALUES
(14,	'Near a pedestrian crossing , When the pedestrians are waiting to cross the road , you should ..',	'Sound horn and proceed',	'Slow down , sound horn and pass',	'Stop the vehicle and wait till the pedestrians cro',	'Proceed',	'3',	'Active',	'2017-03-21 12:01:45',	'0000-00-00 00:00:00'),
(15,	'You are approaching a narrow bridge , another vehicle is about to enter the bridge from opposite side , you should ..',	'Increse the speed and try to cross the bridge as f',	'put on the head light and pass the bridge',	'wait till the other vehicle crosses the bridge and',	'just pass the bridge',	'3',	'Active',	'2017-03-21 12:01:45',	'0000-00-00 00:00:00'),
(16,	'When a vehicle is involved in an accident causing injury to any person..',	'Take the vehicle to the nearest police station and',	'stop the vehicle and report to the police station',	'Take all reasonable steps to secure medical attens',	'Take selfy with it',	'3',	'Active',	'2017-03-21 12:39:26',	'0000-00-00 00:00:00'),
(17,	'On a road designated as one way',	'Parking is prohibited',	'Overtaking is prohibited',	'Should not drive in reverse gear',	'None Of Above',	'3',	'Active',	'2017-03-21 13:06:03',	'0000-00-00 00:00:00'),
(18,	'You can overtake a vehicle in front',	'From the right side of that vehicle',	'Through the left side',	'Through the left side, if the road is wide',	'None Of Above',	'1',	'Active',	'2017-03-21 13:06:03',	'0000-00-00 00:00:00'),
(19,	'When a vehicle approaches an unguarded railway level crossing, before crossing it, the driver shall',	'Stop the vehicle on the left side of the road, get',	'Sound horn and cross the track as fast as possible',	'Wait till the train passes',	'None Of Above',	'1',	'Active',	'2017-03-21 13:06:03',	'0000-00-00 00:00:00'),
(20,	'Validity of learnerâ€™s licence',	'Till the driving licence is',	'6 months from the date of issu',	'30 day',	'2 months',	'2',	'Active',	'2017-03-21 13:06:03',	'0000-00-00 00:00:00');

DELIMITER ;;

CREATE TRIGGER `t_created_date` BEFORE INSERT ON `test` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `t_updated_date` BEFORE UPDATE ON `test` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE `user_reg` (
  `u_id` int(5) NOT NULL AUTO_INCREMENT,
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
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_reg` (`u_id`, `photo`, `aadhar_no`, `name`, `address`, `pincode`, `uname`, `password`, `con_password`, `email`, `gender`, `mobile`, `city`, `age`, `birth_date`, `status`, `created_date`, `updated_date`) VALUES
(36,	'whats_app_pic.jpg',	1277550087,	'Ashutosh',	'Vijapur',	382870,	'xyz@gmail.com',	'123',	'123',	'xyz@gmail.com',	'Male',	9725408903,	'Vijapur',	25,	'1994-11-17',	'Active',	'2018-11-19 09:55:15',	'2018-11-19 10:31:04');

DELIMITER ;;

CREATE TRIGGER `u_created_date` BEFORE INSERT ON `user_reg` FOR EACH ROW
SET NEW.created_date = NOW();;

CREATE TRIGGER `u_updated_date` BEFORE UPDATE ON `user_reg` FOR EACH ROW
SET NEW.updated_date = NOW();;

DELIMITER ;

-- 2018-11-19 06:59:45