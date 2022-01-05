-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2022 at 07:43 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyanuogy_spslnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_products`
--

CREATE TABLE `add_products` (
  `id` int(11) NOT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `filterdate` varchar(255) NOT NULL,
  `event_from_time` varchar(255) DEFAULT NULL,
  `event_to_time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video_link` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metkeywords` varchar(255) NOT NULL,
  `metdescription` varchar(255) NOT NULL,
  `event_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `category` int(11) NOT NULL,
  `neet_to_pay` int(11) NOT NULL,
  `sel_yajman` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`id`, `event_date`, `filterdate`, `event_from_time`, `event_to_time`, `title`, `description`, `post_date`, `video_link`, `product_image`, `metatitle`, `metkeywords`, `metdescription`, `event_amount`, `category`, `neet_to_pay`, `sel_yajman`) VALUES
(3, '2021-12-07', '20211207', NULL, NULL, 'Hanuman Chalisa', '<p>Every Tuesday and Saturday !!</p>', '2021-12-06 09:36:58', '', '7e57cd5a0f96cca7c1c4a8c092ea7822.jpeg', 'na', 'na', 'na', 0.00, 0, 1, '[\"6\"]'),
(4, '2021-12-31', '20211231', NULL, NULL, 'Akhand Ramayan Paath', '<p>Gotra Sankalp pooja</p>', '2021-12-15 04:49:21', '', '7c8663ff1804737ffe4c443974f0e8d9.jpeg', 'na', 'na', 'na', 21.00, 0, 1, '[\"5\"]');

-- --------------------------------------------------------

--
-- Table structure for table `adminblogs`
--

CREATE TABLE `adminblogs` (
  `bid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `postdate` varchar(100) DEFAULT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `addin` int(11) NOT NULL,
  `metatitle` text,
  `metkeywords` text,
  `metdescription` text,
  `category` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminusername` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `adminpassword` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `priest_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rol` int(4) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `name_title` varchar(100) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobleno` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `collegecode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `examdate` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `b_password` varchar(100) NOT NULL,
  `position` int(10) NOT NULL DEFAULT '100'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminusername`, `adminpassword`, `priest_price`, `rol`, `name`, `name_title`, `last_name`, `mobleno`, `status`, `collegecode`, `email`, `examdate`, `profilepic`, `b_password`, `position`) VALUES
(1, 'admin@spslnt.org.sg', 'b8ddf385ac4f335967f25913edd0337b', 0.00, 1, 'SLNT ', 'Mr.', 'Admin', 0, 1, 'admin@spslnt.org.sg', 'info@slnt.com', '', '', '', 100),
(46, 'Vandana', '04ba2fbca161316bf4a26c2f19156685', 0.00, 5, 'Vandana', 'Miss', 'Badole', 98692430, 1, '', 'vandanabadole25@gmail.com', '', 'f43cb1552437ca3c561125450b636d40.png', '', 100),
(45, 'Sandeep Kumar', '67c44f21273ea42ab48472ecf5521835', 0.00, 4, 'Sandeep Kumar', 'Mr', 'Shukla', 98972527, 0, '', 'sandeeptshukla@gmail.com', '', 'b51964401e8f3887c0e974c53d175c69.jpeg', '', 100),
(44, 'Brij Bhushan', 'b3879e9770d36fc2c8820edadd6c7274', 0.00, 3, 'Brij Bhushan', 'Mr', 'Dubey (Priest)', 81915113, 1, '', 'bbdubeyji@gmail.com', '', 'c1db344e56378c15cabc1de279486f47.jpeg', '', 5),
(43, 'Surya Prakash', '49a497d189b0a0268aec2f59b7f8de87', 0.00, 3, 'Surya Prakash', 'Mr', 'Tiwari (Priest)', 85919158, 1, '', 'tiwarisuryaprakash0098@gmail.com', '', '03ed990366a6e1093e5d5fb1562d115d.jpeg', '', 4),
(42, 'Parmanand', '755dc1a91903ec3bfce076a05ce32dee', 0.00, 3, 'Parmanand Mishra', 'Mr', '(Assistant Chief Priest)', 90367290, 1, '', 'parmanandmishra1975@gmail.com', '', 'bb4b43cbffcf636271047584ff51f69b.jpeg', '', 2),
(41, 'Anupam', 'ce739d97eef3e2992626c91b77cf68e9', 0.00, 3, 'Anupam Narayan', 'Mr', 'Tripathi (Priest)', 98111529, 0, '', 'Anupam1982@gmail.com', '', 'a7642cf55eeb4e1035a2eaef9d6a4032.jpeg', '', 3),
(40, 'Ved praksah', 'a5d946a4e5dcad67c23a8e9ac7bc384d', 0.00, 2, 'Ved Prakash Shukla', 'Mr', '<br>(Chief Priest)', 84030457, 1, '', 'vedprakashshukla88@gmail.com ', '', '28b1fcc4b329d2a46e0653ea1cab10b1.jpeg', '', 1),
(47, 'Manisha', 'df8a05aab7c7dd81b2de4b4bfb34ccca', 0.00, 5, 'Manisha', 'Miss', 'Rajpal', 91774015, 1, '', 'mitaliraj@hotmail.com', '', '457cd434cb7c398aa40502499884b4e6.png', '', 100),
(48, 'Om Prakash', '9bf9751a8b48a01a1ba145a50f914ef6', 0.00, 3, 'Om Prakash', 'Mr', 'Tiwari', 93920771, 1, '', ' tiwariomprakash1981@gmail.com', '', 'b70812ebe061acf5ab688e60c584d8e5.jpeg', '', 100);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_history`
--

CREATE TABLE `admin_login_history` (
  `id` int(11) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `login_time` time NOT NULL,
  `login_attempt` int(11) NOT NULL DEFAULT '0',
  `login_attempt_time` time NOT NULL,
  `logout_time` datetime NOT NULL,
  `change_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_history`
--

INSERT INTO `admin_login_history` (`id`, `login_ip`, `login_date`, `login_time`, `login_attempt`, `login_attempt_time`, `logout_time`, `change_password`) VALUES
(1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '19/02/2021', '01:25:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '19/02/2021', '06:26:09', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(3, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36', '20/02/2021', '06:25:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(4, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '21/02/2021', '06:45:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '21/02/2021', '07:45:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '21/02/2021', '07:48:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '21/02/2021', '08:39:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '22/02/2021', '12:56:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '24/02/2021', '01:07:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '24/02/2021', '06:46:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '25/02/2021', '02:12:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(12, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.181 Mobile Safari/537.36', '25/02/2021', '02:12:41', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(13, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '25/02/2021', '04:24:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(14, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', '25/02/2021', '05:19:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(15, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '25/02/2021', '06:26:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '26/02/2021', '11:19:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(17, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '26/02/2021', '02:35:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(18, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '01/03/2021', '01:49:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(19, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '01/03/2021', '04:02:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(20, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '02/03/2021', '06:52:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(21, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '02/03/2021', '01:08:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(22, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '02/03/2021', '02:42:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(23, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '03/03/2021', '12:49:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(24, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36', '04/03/2021', '06:10:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(25, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '05/03/2021', '08:42:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(26, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '05/03/2021', '05:44:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(27, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '08/03/2021', '03:31:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(28, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '08/03/2021', '03:31:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(29, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '08/03/2021', '04:34:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(30, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '09/03/2021', '10:38:28', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(31, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '', '00:00:00', 1, '01:07:37', '0000-00-00 00:00:00', ''),
(32, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '09/03/2021', '01:07:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(33, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '09/03/2021', '01:14:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(34, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '09/03/2021', '03:04:33', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(35, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '10/03/2021', '01:23:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(36, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '12/03/2021', '12:24:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(37, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '12/03/2021', '07:31:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(38, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '13/03/2021', '06:52:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(39, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '13/03/2021', '09:09:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(40, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '13/03/2021', '01:15:37', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(41, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '13/03/2021', '06:09:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(42, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '14/03/2021', '07:20:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(43, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', '15/03/2021', '08:40:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(44, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '20/03/2021', '04:53:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(45, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '', '00:00:00', 1, '06:54:15', '0000-00-00 00:00:00', ''),
(46, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '20/03/2021', '06:55:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(47, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '22/03/2021', '06:53:16', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(48, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '25/03/2021', '05:10:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '26/03/2021', '12:08:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(50, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '30/03/2021', '03:42:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(51, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '30/03/2021', '03:42:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(52, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '30/03/2021', '04:37:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(53, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '05/04/2021', '09:17:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(54, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '05/04/2021', '01:05:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(55, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '08/04/2021', '01:02:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(56, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '08/04/2021', '03:25:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '08/04/2021', '05:59:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(58, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '10/04/2021', '10:59:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(59, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '10/04/2021', '01:24:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(60, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '10/04/2021', '04:43:16', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(61, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36', '10/04/2021', '07:19:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(62, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '10/04/2021', '08:26:37', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(63, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '12/04/2021', '10:50:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(64, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '12/04/2021', '01:42:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(65, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '16/04/2021', '08:50:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(66, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '19/04/2021', '01:54:00', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(67, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '22/04/2021', '04:17:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(68, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', '', '00:00:00', 1, '02:47:02', '0000-00-00 00:00:00', ''),
(69, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', '27/04/2021', '02:47:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(70, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '27/04/2021', '05:46:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(71, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '27/04/2021', '09:16:00', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(72, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '28/04/2021', '08:14:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(73, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '', '00:00:00', 1, '10:47:28', '0000-00-00 00:00:00', ''),
(74, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '28/04/2021', '10:47:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(75, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '29/04/2021', '08:24:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(76, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '29/04/2021', '11:19:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(77, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '29/04/2021', '01:41:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(78, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.82 Mobile Safari/537.36', '29/04/2021', '01:50:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(79, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '29/04/2021', '06:32:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(80, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '', '00:00:00', 1, '08:48:11', '0000-00-00 00:00:00', ''),
(81, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '30/04/2021', '08:48:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(82, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '30/04/2021', '09:21:44', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(83, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '30/04/2021', '11:34:50', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(84, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '30/04/2021', '11:39:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(85, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '30/04/2021', '02:27:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(86, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '01/05/2021', '02:04:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(87, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '02/05/2021', '06:58:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(88, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '03/05/2021', '11:44:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(89, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '03/05/2021', '11:45:30', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(90, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '03/05/2021', '11:49:52', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(91, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '03/05/2021', '12:34:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(92, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '04/05/2021', '08:42:16', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(93, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '04/05/2021', '10:41:31', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(94, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '04/05/2021', '12:32:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(95, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '04/05/2021', '12:50:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(96, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '04/05/2021', '02:56:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(97, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '05/05/2021', '08:28:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(98, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '05/05/2021', '11:27:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '05/05/2021', '11:44:19', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(100, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '05/05/2021', '12:14:52', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(101, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '05/05/2021', '01:31:23', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(102, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '06/05/2021', '09:55:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(103, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '06/05/2021', '11:56:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(104, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '07/05/2021', '06:10:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(105, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '07/05/2021', '08:38:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(106, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '07/05/2021', '01:49:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(107, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '07/05/2021', '05:22:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(108, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '07/05/2021', '10:38:00', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(109, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '10:20:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(110, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '02:36:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(111, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.82 Mobile Safari/537.36', '08/05/2021', '02:39:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(112, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '02:42:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(113, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '03:49:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(114, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '04:50:25', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(115, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '08/05/2021', '04:51:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(116, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '09/05/2021', '06:54:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(117, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '09/05/2021', '07:11:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(118, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '10/05/2021', '11:31:28', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(119, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '10/05/2021', '01:45:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(120, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '10/05/2021', '02:02:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(121, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '10/05/2021', '05:33:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(122, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '10/05/2021', '05:44:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(123, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '11/05/2021', '11:30:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(124, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '11/05/2021', '01:49:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(125, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '11/05/2021', '05:46:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(126, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '12/05/2021', '06:32:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(127, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '12/05/2021', '10:57:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(128, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '12/05/2021', '11:27:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(129, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '12/05/2021', '01:53:00', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(130, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '13/05/2021', '06:34:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(131, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.82 Mobile Safari/537.36', '13/05/2021', '06:54:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(132, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '13/05/2021', '11:12:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(133, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '13/05/2021', '01:27:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(134, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '13/05/2021', '01:48:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(135, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '13/05/2021', '03:31:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(136, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '14/05/2021', '11:36:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(137, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '15/05/2021', '02:44:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(138, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '16/05/2021', '10:30:50', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(139, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '18/05/2021', '11:21:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(140, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '21/05/2021', '12:54:09', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(141, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '21/05/2021', '12:58:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(142, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '22/05/2021', '05:15:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(143, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '24/05/2021', '06:28:09', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(144, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '24/05/2021', '08:38:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(145, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '24/05/2021', '11:12:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(146, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '24/05/2021', '01:23:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(147, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '26/05/2021', '05:09:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(148, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '26/05/2021', '08:21:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(149, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '27/05/2021', '06:35:33', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(150, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '27/05/2021', '10:03:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(151, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '27/05/2021', '10:18:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(152, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '31/05/2021', '08:40:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(153, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '01/06/2021', '06:15:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(154, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '08/06/2021', '02:11:35', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(155, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '08/06/2021', '08:21:19', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(156, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '08/06/2021', '09:37:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(157, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '09/06/2021', '12:27:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(158, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.88 Mobile Safari/537.36', '10/06/2021', '07:32:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(159, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '11/06/2021', '11:37:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(160, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '11/06/2021', '02:02:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(161, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '12/06/2021', '03:21:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(162, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '13/06/2021', '07:21:23', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(163, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '08:48:51', '0000-00-00 00:00:00', ''),
(164, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '08:49:06', '0000-00-00 00:00:00', ''),
(165, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '17/06/2021', '08:49:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(166, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '17/06/2021', '05:25:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(167, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '20/06/2021', '09:56:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(168, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '21/06/2021', '06:01:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(169, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '21/06/2021', '12:33:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(170, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '21/06/2021', '09:08:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(171, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '01:22:32', '0000-00-00 00:00:00', ''),
(172, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '01:25:24', '0000-00-00 00:00:00', ''),
(173, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '22/06/2021', '01:26:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(174, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '23/06/2021', '10:55:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(175, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '23/06/2021', '01:08:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(176, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '23/06/2021', '02:19:25', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(177, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '29/06/2021', '12:41:33', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(178, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '29/06/2021', '01:00:23', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(179, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '29/06/2021', '01:41:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(180, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '30/06/2021', '08:24:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(181, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '30/06/2021', '10:43:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(182, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '05/07/2021', '06:13:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(183, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '12/07/2021', '03:48:03', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(184, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '13/07/2021', '06:11:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(185, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '11:42:40', '0000-00-00 00:00:00', ''),
(186, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '11:43:00', '0000-00-00 00:00:00', ''),
(187, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '11:44:43', '0000-00-00 00:00:00', ''),
(188, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '11:51:05', '0000-00-00 00:00:00', ''),
(189, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '16/07/2021', '11:54:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(190, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '16/07/2021', '12:41:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(191, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '16/07/2021', '01:24:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(192, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '', '00:00:00', 1, '02:13:08', '0000-00-00 00:00:00', ''),
(193, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '16/07/2021', '02:13:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(194, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '29/07/2021', '04:58:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(195, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '01/08/2021', '06:13:30', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(196, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.62', '02/08/2021', '05:00:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(197, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', '00:00:00', 1, '05:04:37', '0000-00-00 00:00:00', ''),
(198, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '02/08/2021', '05:04:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(199, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '02/08/2021', '08:33:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(200, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '03/08/2021', '12:25:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(201, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '03/08/2021', '12:31:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(202, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.62', '', '00:00:00', 1, '10:10:13', '0000-00-00 00:00:00', ''),
(203, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.62', '03/08/2021', '10:10:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(204, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.62', '03/08/2021', '04:50:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(205, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '03/08/2021', '04:53:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(206, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.115 Safari/537.36', '04/08/2021', '04:53:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(207, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.115 Safari/537.36', '05/08/2021', '05:05:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(208, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 Edg/92.0.902.67', '12/08/2021', '12:33:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(209, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '15/08/2021', '07:58:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(210, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 Edg/92.0.902.73', '16/08/2021', '06:50:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(211, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '16/08/2021', '08:37:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(212, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 Edg/92.0.902.73', '16/08/2021', '12:51:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(213, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '16/08/2021', '07:01:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(214, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '16/08/2021', '07:06:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(215, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '18/08/2021', '12:26:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(216, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '18/08/2021', '10:49:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(217, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '19/08/2021', '01:09:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(218, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '19/08/2021', '05:52:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(219, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '20/08/2021', '12:15:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(220, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '20/08/2021', '11:47:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(221, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '20/08/2021', '03:35:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(222, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '20/08/2021', '05:47:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(223, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '21/08/2021', '12:16:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(224, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '21/08/2021', '04:47:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(225, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '23/08/2021', '04:07:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(226, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '23/08/2021', '07:34:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(227, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '24/08/2021', '07:50:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(228, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '25/08/2021', '05:37:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(229, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '25/08/2021', '07:40:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(230, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '26/08/2021', '10:48:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(231, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '', '00:00:00', 1, '07:49:45', '0000-00-00 00:00:00', ''),
(232, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '', '00:00:00', 1, '07:49:59', '0000-00-00 00:00:00', ''),
(233, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '', '00:00:00', 1, '07:50:20', '0000-00-00 00:00:00', ''),
(234, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '', '00:00:00', 1, '07:50:42', '0000-00-00 00:00:00', ''),
(235, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '26/08/2021', '07:52:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(236, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '27/08/2021', '02:34:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(237, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '06/09/2021', '11:35:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(238, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.58 Safari/537.36', '06/09/2021', '06:27:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(239, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '07/09/2021', '02:16:56', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(240, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '07/09/2021', '02:50:25', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(241, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '08/09/2021', '02:27:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(242, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '', '00:00:00', 1, '10:58:17', '0000-00-00 00:00:00', ''),
(243, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '14/09/2021', '10:59:03', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(244, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.47', '14/09/2021', '01:12:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(245, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '14/09/2021', '04:55:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(246, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '21/09/2021', '07:27:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(247, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36 Edg/93.0.961.52', '22/09/2021', '10:30:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(248, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '23/09/2021', '11:22:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(249, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '23/09/2021', '11:27:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(250, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.54 Safari/537.36', '23/09/2021', '11:56:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(251, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '23/09/2021', '01:26:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(252, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '24/09/2021', '09:58:09', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(253, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.54 Safari/537.36', '24/09/2021', '10:07:33', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(254, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '24/09/2021', '11:15:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(255, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '24/09/2021', '12:26:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(256, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '08:39:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(257, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '10:57:52', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(258, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '01:22:23', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(259, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '06:01:33', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(260, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '27/09/2021', '06:09:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(261, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '06:14:42', 0, '00:00:00', '0000-00-00 00:00:00', '');
INSERT INTO `admin_login_history` (`id`, `login_ip`, `login_date`, `login_time`, `login_attempt`, `login_attempt_time`, `logout_time`, `change_password`) VALUES
(262, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '06:19:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(263, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '', '00:00:00', 1, '06:19:24', '0000-00-00 00:00:00', ''),
(264, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '', '00:00:00', 1, '06:19:31', '0000-00-00 00:00:00', ''),
(265, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '', '00:00:00', 1, '06:19:38', '0000-00-00 00:00:00', ''),
(266, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '', '00:00:00', 1, '06:19:44', '0000-00-00 00:00:00', ''),
(267, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '06:19:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(268, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '27/09/2021', '07:20:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(269, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '28/09/2021', '12:02:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(270, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '28/09/2021', '12:39:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(271, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '29/09/2021', '02:08:31', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(272, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '29/09/2021', '02:10:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(273, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '29/09/2021', '05:37:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(274, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '29/09/2021', '07:46:44', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(275, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '29/09/2021', '08:03:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(276, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '29/09/2021', '08:08:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(277, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '10:49:30', '0000-00-00 00:00:00', ''),
(278, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '29/09/2021', '10:50:09', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(279, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '01/10/2021', '09:27:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(280, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '01/10/2021', '02:15:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(281, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '03:26:57', '0000-00-00 00:00:00', ''),
(282, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '03:27:07', '0000-00-00 00:00:00', ''),
(283, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '03:27:21', '0000-00-00 00:00:00', ''),
(284, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '03:27:56', '0000-00-00 00:00:00', ''),
(285, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '', '00:00:00', 1, '03:28:05', '0000-00-00 00:00:00', ''),
(286, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '01/10/2021', '03:28:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(287, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '10/10/2021', '07:24:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(288, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '13/10/2021', '05:50:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(289, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50', '20/10/2021', '12:51:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(290, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50', '21/10/2021', '10:35:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(291, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '25/10/2021', '02:09:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(292, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '25/10/2021', '02:50:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(293, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '25/10/2021', '05:00:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(294, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '25/10/2021', '08:10:52', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(295, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '26/10/2021', '09:02:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(296, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '26/10/2021', '12:53:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(297, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '26/10/2021', '03:05:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(298, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '27/10/2021', '05:17:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(299, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '28/10/2021', '01:23:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(300, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '29/10/2021', '02:20:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(301, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '29/10/2021', '04:24:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(302, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '31/10/2021', '06:59:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(303, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '01/11/2021', '01:04:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(304, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '03/11/2021', '07:42:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(305, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '08/11/2021', '01:33:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(306, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '08/11/2021', '03:33:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(307, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 Edg/95.0.1020.44', '10/11/2021', '12:40:57', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(308, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '11/11/2021', '06:41:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(309, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 Edg/95.0.1020.53', '16/11/2021', '12:05:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(310, 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_8_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1', '', '00:00:00', 1, '11:51:41', '0000-00-00 00:00:00', ''),
(311, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '19/11/2021', '05:56:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(312, 'Mozilla/5.0 (Linux; Android 11; V2036) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', '', '00:00:00', 1, '09:21:18', '0000-00-00 00:00:00', ''),
(313, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', '19/11/2021', '09:30:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(314, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15', '20/11/2021', '08:42:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(315, 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_8_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1', '20/11/2021', '12:43:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(316, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '20/11/2021', '02:09:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(317, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '20/11/2021', '08:31:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(318, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 Edg/95.0.1020.53', '21/11/2021', '06:44:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(319, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '21/11/2021', '07:26:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(320, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '22/11/2021', '07:26:00', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(321, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '22/11/2021', '10:52:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(322, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '22/11/2021', '12:23:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(323, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '22/11/2021', '12:43:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(324, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '', '00:00:00', 1, '01:08:54', '0000-00-00 00:00:00', ''),
(325, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '', '00:00:00', 1, '01:09:15', '0000-00-00 00:00:00', ''),
(326, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '22/11/2021', '01:09:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(327, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '22/11/2021', '03:26:37', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(328, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '22/11/2021', '04:46:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(329, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '23/11/2021', '07:13:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(330, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '23/11/2021', '09:16:38', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(331, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '23/11/2021', '11:17:45', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(332, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '23/11/2021', '12:49:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(333, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '23/11/2021', '01:32:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(334, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '23/11/2021', '03:16:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(335, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '23/11/2021', '03:16:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(336, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '23/11/2021', '04:35:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(337, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '24/11/2021', '07:15:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(338, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '24/11/2021', '09:42:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(339, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '24/11/2021', '12:13:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(340, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '24/11/2021', '02:51:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(341, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '25/11/2021', '06:55:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(342, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '25/11/2021', '09:16:16', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(343, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '25/11/2021', '12:39:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(344, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '25/11/2021', '02:57:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(345, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '26/11/2021', '07:20:29', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(346, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '26/11/2021', '09:51:37', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(347, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36 Edg/96.0.1054.29', '26/11/2021', '12:10:59', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(348, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '26/11/2021', '01:09:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(349, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '26/11/2021', '03:44:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(350, 'Mozilla/5.0 (Linux; Android 11; V2036) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', '26/11/2021', '05:29:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(351, 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_8_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1', '26/11/2021', '05:41:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(352, 'Mozilla/5.0 (Linux; Android 11; V2036) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', '26/11/2021', '05:49:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(353, 'Mozilla/5.0 (Linux; Android 11; V2036) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36', '26/11/2021', '05:52:21', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(354, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '27/11/2021', '12:31:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(355, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '27/11/2021', '04:08:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(356, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '27/11/2021', '06:18:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(357, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '28/11/2021', '06:36:31', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(358, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '28/11/2021', '08:35:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(359, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '28/11/2021', '08:38:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(360, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '', '00:00:00', 1, '08:38:47', '0000-00-00 00:00:00', ''),
(361, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '28/11/2021', '08:39:07', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(362, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '28/11/2021', '03:05:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(363, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '29/11/2021', '07:02:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(364, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '', '00:00:00', 1, '09:16:22', '0000-00-00 00:00:00', ''),
(365, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '29/11/2021', '09:17:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(366, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '29/11/2021', '11:41:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(367, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '29/11/2021', '12:46:37', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(368, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '29/11/2021', '03:48:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(369, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '30/11/2021', '07:12:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(370, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '30/11/2021', '09:20:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(371, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '30/11/2021', '12:42:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(372, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '30/11/2021', '12:43:54', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(373, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '01/12/2021', '07:23:44', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(374, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '01/12/2021', '11:59:15', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(375, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '01/12/2021', '01:35:29', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(376, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '01/12/2021', '01:41:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(377, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '01/12/2021', '04:04:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(378, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '02/12/2021', '06:59:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(379, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.34', '02/12/2021', '11:03:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(380, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '02/12/2021', '01:08:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(381, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '02/12/2021', '07:06:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(382, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '12:17:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(383, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.41', '03/12/2021', '08:09:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(384, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '09:11:16', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(385, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '09:56:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(386, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.41', '', '00:00:00', 1, '10:45:37', '0000-00-00 00:00:00', ''),
(387, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.41', '03/12/2021', '10:45:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(388, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '11:01:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(389, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '11:04:03', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(390, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '11:11:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(391, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '12:09:03', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(392, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.41', '03/12/2021', '12:14:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(393, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '12:14:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(394, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '03/12/2021', '02:39:12', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(395, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '05/12/2021', '08:03:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(396, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '05/12/2021', '10:06:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(397, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '06/12/2021', '07:14:29', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(398, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.41', '06/12/2021', '12:22:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(399, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '06/12/2021', '12:51:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(400, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '06/12/2021', '02:54:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(401, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36', '06/12/2021', '03:19:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(402, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '07/12/2021', '07:38:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(403, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '07/12/2021', '11:32:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(404, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '07/12/2021', '12:56:50', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(405, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '07/12/2021', '01:41:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(406, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '07/12/2021', '03:14:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(407, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '08/12/2021', '07:47:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(408, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '08/12/2021', '10:02:29', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(409, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '08/12/2021', '12:47:53', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(410, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '09/12/2021', '07:48:58', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(411, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '09/12/2021', '12:42:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(412, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '09/12/2021', '03:02:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(413, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '10/12/2021', '08:31:17', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(414, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '10/12/2021', '12:46:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(415, 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_8_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1', '11/12/2021', '10:59:52', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(416, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '13/12/2021', '10:38:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(417, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '14/12/2021', '09:29:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(418, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '15/12/2021', '07:21:18', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(419, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '09:22:36', '0000-00-00 00:00:00', ''),
(420, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '15/12/2021', '09:23:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(421, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '15/12/2021', '02:01:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(422, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '16/12/2021', '07:27:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(423, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '16/12/2021', '07:55:42', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(424, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '16/12/2021', '02:25:50', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(425, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.2 Mobile/15E148 Safari/604.1', '16/12/2021', '03:48:24', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(426, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '17/12/2021', '07:12:05', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(427, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '17/12/2021', '11:57:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(428, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '', '00:00:00', 1, '01:17:13', '0000-00-00 00:00:00', ''),
(429, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '17/12/2021', '01:17:36', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(430, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '19/12/2021', '06:32:48', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(431, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '20/12/2021', '07:11:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(432, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '20/12/2021', '10:27:19', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(433, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '20/12/2021', '12:42:27', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(434, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '21/12/2021', '07:18:40', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(435, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '21/12/2021', '09:42:44', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(436, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '21/12/2021', '12:57:41', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(437, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '21/12/2021', '12:58:26', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(438, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '21/12/2021', '01:41:10', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(439, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '22/12/2021', '06:52:41', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(440, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '22/12/2021', '03:49:34', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(441, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '23/12/2021', '07:43:41', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(442, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '23/12/2021', '10:20:13', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(443, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '23/12/2021', '03:05:29', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(444, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '24/12/2021', '07:27:39', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(445, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '10:50:36', '0000-00-00 00:00:00', ''),
(446, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '10:51:57', '0000-00-00 00:00:00', ''),
(447, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '24/12/2021', '10:52:14', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(448, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '24/12/2021', '03:45:32', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(449, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '26/12/2021', '06:45:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(450, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '27/12/2021', '09:17:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(451, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '27/12/2021', '10:58:41', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(452, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '27/12/2021', '11:21:04', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(453, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '27/12/2021', '12:48:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(454, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '28/12/2021', '07:53:51', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(455, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '12:33:36', '0000-00-00 00:00:00', ''),
(456, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '12:33:44', '0000-00-00 00:00:00', ''),
(457, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '12:34:10', '0000-00-00 00:00:00', ''),
(458, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '28/12/2021', '12:39:20', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(459, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '12:39:45', '0000-00-00 00:00:00', ''),
(460, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '29/12/2021', '07:17:25', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(461, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '29/12/2021', '11:14:11', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(462, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '29/12/2021', '11:38:08', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(463, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '29/12/2021', '04:21:43', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(464, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '30/12/2021', '07:20:46', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(465, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '', '00:00:00', 1, '10:22:13', '0000-00-00 00:00:00', ''),
(466, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '30/12/2021', '12:04:22', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(467, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '30/12/2021', '12:25:55', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(468, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '30/12/2021', '02:29:01', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(469, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '31/12/2021', '08:06:06', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(470, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '31/12/2021', '12:58:31', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(471, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '31/12/2021', '03:17:47', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(472, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', '03/01/2022', '07:29:49', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(473, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '', '00:00:00', 1, '12:42:06', '0000-00-00 00:00:00', ''),
(474, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '03/01/2022', '12:42:27', 0, '00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `cat_it` int(11) NOT NULL DEFAULT '0',
  `search_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_slot_block`
--

CREATE TABLE `booking_slot_block` (
  `id` int(11) NOT NULL,
  `block_date` varchar(255) DEFAULT NULL,
  `time_slot` int(11) NOT NULL,
  `leave_purpose` varchar(255) DEFAULT NULL,
  `sel_priest` int(11) NOT NULL,
  `block_date_create` varchar(255) DEFAULT NULL,
  `block_time_create` varchar(255) DEFAULT NULL,
  `dataPuja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `tnc` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `createdate` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuration_general`
--

CREATE TABLE `configuration_general` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `organization_email` varchar(255) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_content` text NOT NULL,
  `address` text NOT NULL,
  `primary_mobile` varchar(255) NOT NULL,
  `opening_days` text NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `other_mobile` varchar(255) NOT NULL,
  `other_email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `powerd_by` varchar(255) NOT NULL,
  `powerd_by_link` varchar(255) NOT NULL,
  `lastupdate` varchar(255) NOT NULL,
  `min_package_amount` decimal(12,2) NOT NULL,
  `signupbonus` decimal(10,2) NOT NULL,
  `reffererrern` decimal(10,2) NOT NULL,
  `cashbackpercent` decimal(10,2) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration_general`
--

INSERT INTO `configuration_general` (`id`, `site_name`, `organization_name`, `domain_name`, `organization_email`, `meta_title`, `meta_keyword`, `meta_content`, `address`, `primary_mobile`, `opening_days`, `company_logo`, `other_mobile`, `other_email`, `facebook`, `twitter`, `linkedin`, `youtube`, `pinterest`, `powerd_by`, `powerd_by_link`, `lastupdate`, `min_package_amount`, `signupbonus`, `reffererrern`, `cashbackpercent`, `instagram`) VALUES
(1, 'Siddh Peeth Shree Lakshminarayan Temple', 'Siddh Peeth Shree Lakshminarayan Temple', 'https://www.ShreeLakshmiNarayanTemple.com/', 'admin@spslnt.org.sg', 'Siddh Peeth Shree Lakshminarayan Temple', 'Siddh Peeth Shree Lakshminarayan Temple', 'Siddh Peeth Shree Lakshminarayan Temple', 'Siddh Peeth Shree Lakshminarayan Temple', '+65 62930195', '10 AM - 7 PM', '876a6a60ac95f62dbf4bd55249da35c2.png', '+65 62930195', '', 'https://www.facebook.com/spslnt', 'https://twitter.com/', 'https://in.linkedin.com/', 'https://www.youtube.com/channel/UCcL9GYE6blAZR_TPV8qkfkw', 'https://in.pinterest.com/', '', '', '29-11-2021', 4500.00, 0.00, 0.00, 0.00, 'https://www.instagram.com/?hl=en');

-- --------------------------------------------------------

--
-- Table structure for table `donation_slab`
--

CREATE TABLE `donation_slab` (
  `id` int(11) NOT NULL,
  `name` decimal(10,2) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `cat_it` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation_slab`
--

INSERT INTO `donation_slab` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(22, 60.00, '1', 1, 32),
(23, 51.00, '1', 1, 34),
(24, 60.00, '1', 1, 33),
(25, 51.00, '1', 1, 31),
(26, 51.00, '1', 1, 30),
(27, 51.00, '1', 1, 29),
(28, 51.00, '1', 1, 28),
(29, 51.00, '1', 1, 27),
(30, 51.00, '1', 1, 26),
(31, 51.00, '1', 1, 25),
(32, 51.00, '1', 1, 24),
(33, 51.00, '1', 1, 23),
(34, 51.00, '1', 1, 22),
(35, 51.00, '1', 1, 21),
(36, 101.00, '1', 1, 20),
(37, 51.00, '1', 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `event_time_table`
--

CREATE TABLE `event_time_table` (
  `id` int(11) NOT NULL,
  `timeid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `filterdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_time_table`
--

INSERT INTO `event_time_table` (`id`, `timeid`, `eventid`, `filterdate`) VALUES
(1, 1, 1, '20210910'),
(4, 2, 4, '20210814'),
(6, 1, 5, '20211007'),
(14, 3, 6, '20211021'),
(15, 4, 1, '20211231'),
(18, 4, 2, '20211231'),
(20, 3, 3, '20211207'),
(21, 4, 4, '20211231');

-- --------------------------------------------------------

--
-- Table structure for table `family_list`
--

CREATE TABLE `family_list` (
  `id` int(11) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `slnt_member` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_list`
--

INSERT INTO `family_list` (`id`, `family_name`, `relation`, `occupation`, `mobile`, `email`, `slnt_member`, `user_id`) VALUES
(1, 'Hsu Lin', '12', '12', '12121212', 'myintmyintzanster@gmail.com', 'Yes', 'SLNT16061'),
(2, 'Priyanka Tewari ', 'Wife', 'Homemaker', '91893020', 'priyankatewari21@gmail.com', 'No', 'SLNT767737'),
(3, 'Advik', 'Son', 'Student ', '90288203', 'shyamalmeri@gmail.com', 'No', 'SLNT767737'),
(4, 'Divit', 'Son', 'Student ', '90288203', 'shyamalmeri@gmail.com', 'No', 'SLNT767737'),
(5, 'Monika Pal', 'Spouse', 'Homemaker', '85354183', 'monika9135@gmail.com', 'No', 'SLNT247970'),
(6, 'Amit Chaubey', 'Husband', 'Data Analytics ', '96403095', 'amit.chaubey@gmail.com', 'No', 'SLNT252673'),
(7, 'Ashish Mishra', 'husband', 'software engg', '91170672', 'itzashish@gmail.com', 'No', 'SLNT15685'),
(8, 'Anvit Mishra', 'Son', 'student', '81139490', 'itsanvit@gmail.com', 'No', 'SLNT15685'),
(9, 'Anaya Mishra', 'Daughter', 'student', '91170672', 'itzpratigya@gmail.com', 'No', 'SLNT15685'),
(10, 'Christine Wong', 'Spouse', 'Credit Control', '91827221', 'christine.wong.lili@gmail.com', 'No', 'SLNT247994'),
(11, 'Bhavik Manohar Pandya', 'Husband', 'Banking', '98638983', 'bhavikmpandya@gmail.com', 'No', 'SLNT9051108'),
(12, 'Ravina Mohandas Bhojwani', 'Wife', 'Housewife', '96719910', 'bhojwaniravina@gmail.com', 'No', 'SLNT9111138'),
(13, 'Sheetal Anand', 'Wife', 'House wife', '93397950', 'sheetall@hotmail.com', 'No', 'SLNT4027161'),
(14, 'Rishabh Anand', 'Son', 'Student', '96168361', 'iamrishabhanand@gmail.com', 'No', 'SLNT4027161'),
(15, 'RUCHI mATHUR', 'WIFE', 'TEACHER', '96247366', 'RMATHUR320@GMAIL.COM', 'No', 'SLNT9653230'),
(16, 'Ashoo Agarwal', 'Spouse', 'Business', '83433981', 'ashooagarwal@yahoo.com', 'No', 'SLNT1689218'),
(17, 'Gunjan Agarwal', 'Wife', 'Buyer', '94275834', 'gunjan_agarwal@besi.com', 'No', 'SLNT3688262'),
(19, 'Neelam Thakur', 'Wife', 'Service', '83742650', 'neo1602193@gmail.com', 'No', 'SLNT553267'),
(20, 'Goutam Nayak', 'Husband', 'Prof', '98422118', 'goutamnayak@gmail.com', 'No', 'SLNT3147276'),
(21, 'Rina Suketu Kohli', 'Wife', 'Service', '98341105', 'rinakohli1@gmail.com', 'No', 'SLNT8229278'),
(22, 'Avya Suketu Kohli', 'Son', 'Student', '98341105', 'rinakohli1@gmail.com', 'No', 'SLNT8229278'),
(23, 'Kamlesh Nayyar ', 'Mother In Law', 'Housewife', '98341105', 'rinakohli1@gmail.com', 'No', 'SLNT8229278'),
(24, 'Aarti', 'Spouse', 'Self occupied', '84841150', 'atkabra@gmail.com', 'No', 'SLNT5107287'),
(25, 'Rakhi Kappala', 'Spouse', 'House Wife', '96531110', 'rakhi381@rediffmail.com', 'Yes', 'SLNT979307'),
(26, 'Arushi Kappala', 'Daughter', 'Student', '85247793', 'rakhi381@rediffmail.com', 'Yes', 'SLNT979307'),
(27, 'Arush Kappala', 'Son', 'Student', '97283357', 'arushkappala@gmail.com', 'Yes', 'SLNT979307'),
(28, 'simantini verma', 'wife', 'teacher', '91819625', 'seeemadidi@gmail.com', 'No', 'SLNT9749336'),
(29, 'Sanskriti Verma', 'daughter', 'student', '90265290', 'sanjeev_verma@jabil.com', 'No', 'SLNT9749336'),
(30, 'aishwarya verma', 'daughter', 'student', '83108805', 'sanjeev_verma@jabil.com', 'No', 'SLNT9749336'),
(31, 'Aarti Sharma ', 'Wife', 'Home maker', '93272701', 'aartisumeet1@gmail.com', 'No', 'SLNT5207361'),
(32, 'Aarshia Sawhney', 'Daughter ', 'Student', '93272701', 'aartisumeet1@gmail.com', 'No', 'SLNT5207361'),
(33, 'Aaryan Sawhney', 'Son', 'Student', '93272701', 'aartisumeet1@gmail.com', 'No', 'SLNT5207361'),
(34, 'Priti Dugar', 'Spouse', 'Homemaker', '90884074', 'dugar1421priti@gmail.com', 'No', 'SLNT9422368'),
(35, 'Parul', 'Wife', 'Housewife', '94521130', 'parul.bindal1502@2gmail.com', 'No', 'SLNT5550384');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `image_category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pooja_block`
--

CREATE TABLE `pooja_block` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `blockdate` varchar(255) NOT NULL,
  `block_time` varchar(255) NOT NULL,
  `sel_fill_date` varchar(255) NOT NULL,
  `leave_purpose` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pooja_block`
--

INSERT INTO `pooja_block` (`id`, `puja_id`, `blockdate`, `block_time`, `sel_fill_date`, `leave_purpose`) VALUES
(1, 1, '2021-05-03', '1', '20210503', 'duty at temple'),
(2, 1, '2021-05-03', '2', '20210503', 'duty at temple'),
(3, 1, '2021-05-03', '6', '20210503', 'duty at temple'),
(4, 1, '2021-05-03', '7', '20210503', 'duty at temple'),
(5, 1, '2021-05-03', '8', '20210503', 'duty at temple'),
(6, 1, '2021-05-03', '9', '20210503', 'duty at temple'),
(7, 1, '2021-05-03', '10', '20210503', 'duty at temple'),
(8, 2, '2021-05-05', '11', '20210505', 'duty at temple'),
(9, 2, '2021-05-05', '12', '20210505', 'duty at temple'),
(10, 2, '2021-05-05', '13', '20210505', 'duty at temple'),
(11, 2, '2021-05-05', '14', '20210505', 'duty at temple'),
(12, 2, '2021-05-05', '15', '20210505', 'duty at temple'),
(13, 2, '2021-05-05', '16', '20210505', 'duty at temple'),
(14, 9, '2021-11-16', '83', '20211116', 'duty at temple'),
(15, 9, '2021-11-16', '84', '20211116', 'duty at temple'),
(16, 9, '2021-11-16', '85', '20211116', 'duty at temple'),
(17, 9, '2021-11-16', '196', '20211116', 'duty at temple'),
(18, 9, '2021-11-16', '197', '20211116', 'duty at temple'),
(19, 9, '2021-11-16', '198', '20211116', 'duty at temple'),
(20, 9, '2021-11-16', '199', '20211116', 'duty at temple'),
(21, 9, '2021-11-16', '200', '20211116', 'duty at temple'),
(22, 9, '2021-11-23', '83', '20211123', 'duty at temple'),
(23, 9, '2021-11-23', '84', '20211123', 'duty at temple'),
(24, 9, '2021-11-23', '85', '20211123', 'duty at temple'),
(25, 9, '2021-11-23', '196', '20211123', 'duty at temple'),
(26, 9, '2021-11-23', '197', '20211123', 'duty at temple'),
(27, 9, '2021-11-23', '198', '20211123', 'duty at temple'),
(28, 9, '2021-11-23', '199', '20211123', 'duty at temple'),
(29, 9, '2021-11-23', '200', '20211123', 'duty at temple'),
(30, 9, '2021-11-25', '83', '20211125', 'duty at temple'),
(31, 9, '2021-11-25', '84', '20211125', 'duty at temple'),
(32, 9, '2021-11-25', '85', '20211125', 'duty at temple'),
(33, 9, '2021-11-25', '196', '20211125', 'duty at temple'),
(34, 9, '2021-11-25', '197', '20211125', 'duty at temple'),
(35, 9, '2021-11-25', '198', '20211125', 'duty at temple'),
(36, 9, '2021-11-25', '199', '20211125', 'duty at temple'),
(37, 9, '2021-11-25', '200', '20211125', 'duty at temple'),
(38, 9, '2021-11-26', '83', '20211126', 'duty at temple'),
(39, 9, '2021-11-26', '84', '20211126', 'duty at temple'),
(40, 9, '2021-11-26', '85', '20211126', 'duty at temple'),
(41, 9, '2021-11-26', '196', '20211126', 'duty at temple'),
(42, 9, '2021-11-26', '197', '20211126', 'duty at temple'),
(43, 9, '2021-11-26', '198', '20211126', 'duty at temple'),
(44, 9, '2021-11-26', '199', '20211126', 'duty at temple'),
(45, 9, '2021-11-26', '200', '20211126', 'duty at temple'),
(46, 9, '2021-11-27', '83', '20211127', 'duty at temple'),
(47, 9, '2021-11-27', '84', '20211127', 'duty at temple'),
(48, 9, '2021-11-27', '85', '20211127', 'duty at temple'),
(49, 9, '2021-11-27', '196', '20211127', 'duty at temple'),
(50, 9, '2021-11-27', '197', '20211127', 'duty at temple'),
(51, 9, '2021-11-27', '198', '20211127', 'duty at temple'),
(52, 9, '2021-11-27', '199', '20211127', 'duty at temple'),
(53, 9, '2021-11-27', '200', '20211127', 'duty at temple'),
(54, 9, '2021-11-27', '83', '20211127', 'duty at temple'),
(55, 9, '2021-11-27', '84', '20211127', 'duty at temple'),
(56, 9, '2021-11-27', '85', '20211127', 'duty at temple'),
(57, 9, '2021-11-27', '196', '20211127', 'duty at temple'),
(58, 9, '2021-11-27', '197', '20211127', 'duty at temple'),
(59, 9, '2021-11-27', '198', '20211127', 'duty at temple'),
(60, 9, '2021-11-27', '199', '20211127', 'duty at temple'),
(61, 9, '2021-11-27', '200', '20211127', 'duty at temple'),
(62, 9, '2021-11-28', '83', '20211128', 'duty at temple'),
(63, 9, '2021-11-28', '84', '20211128', 'duty at temple'),
(64, 9, '2021-11-28', '85', '20211128', 'duty at temple'),
(65, 9, '2021-11-28', '196', '20211128', 'duty at temple'),
(66, 9, '2021-11-28', '197', '20211128', 'duty at temple'),
(67, 9, '2021-11-28', '198', '20211128', 'duty at temple'),
(68, 9, '2021-11-28', '199', '20211128', 'duty at temple'),
(69, 9, '2021-11-28', '200', '20211128', 'duty at temple'),
(70, 9, '2021-11-29', '83', '20211129', 'duty at temple'),
(71, 9, '2021-11-29', '84', '20211129', 'duty at temple'),
(72, 9, '2021-11-29', '85', '20211129', 'duty at temple'),
(73, 9, '2021-11-29', '196', '20211129', 'duty at temple'),
(74, 9, '2021-11-29', '197', '20211129', 'duty at temple'),
(75, 9, '2021-11-29', '198', '20211129', 'duty at temple'),
(76, 9, '2021-11-29', '199', '20211129', 'duty at temple'),
(77, 9, '2021-11-29', '200', '20211129', 'duty at temple'),
(78, 9, '2021-11-30', '83', '20211130', 'duty at temple'),
(79, 9, '2021-11-30', '84', '20211130', 'duty at temple'),
(80, 9, '2021-11-30', '85', '20211130', 'duty at temple'),
(81, 9, '2021-11-30', '196', '20211130', 'duty at temple'),
(82, 9, '2021-11-30', '197', '20211130', 'duty at temple'),
(83, 9, '2021-11-30', '198', '20211130', 'duty at temple'),
(84, 9, '2021-11-30', '199', '20211130', 'duty at temple'),
(85, 9, '2021-11-30', '200', '20211130', 'duty at temple'),
(86, 9, '2021-12-01', '83', '20211201', 'duty at temple'),
(87, 9, '2021-12-01', '84', '20211201', 'duty at temple'),
(88, 9, '2021-12-01', '85', '20211201', 'duty at temple'),
(89, 9, '2021-12-01', '196', '20211201', 'duty at temple'),
(90, 9, '2021-12-01', '197', '20211201', 'duty at temple'),
(91, 9, '2021-12-01', '198', '20211201', 'duty at temple'),
(92, 9, '2021-12-01', '199', '20211201', 'duty at temple'),
(93, 9, '2021-12-01', '200', '20211201', 'duty at temple'),
(94, 9, '2021-12-02', '83', '20211202', 'duty at temple'),
(95, 9, '2021-12-02', '84', '20211202', 'duty at temple'),
(96, 9, '2021-12-02', '85', '20211202', 'duty at temple'),
(97, 9, '2021-12-02', '196', '20211202', 'duty at temple'),
(98, 9, '2021-12-02', '197', '20211202', 'duty at temple'),
(99, 9, '2021-12-02', '198', '20211202', 'duty at temple'),
(100, 9, '2021-12-02', '199', '20211202', 'duty at temple'),
(101, 9, '2021-12-02', '200', '20211202', 'duty at temple'),
(102, 9, '2021-12-03', '83', '20211203', 'duty at temple'),
(103, 9, '2021-12-03', '84', '20211203', 'duty at temple'),
(104, 9, '2021-12-03', '85', '20211203', 'duty at temple'),
(105, 9, '2021-12-03', '196', '20211203', 'duty at temple'),
(106, 9, '2021-12-03', '197', '20211203', 'duty at temple'),
(107, 9, '2021-12-03', '198', '20211203', 'duty at temple'),
(108, 9, '2021-12-03', '199', '20211203', 'duty at temple'),
(109, 9, '2021-12-03', '200', '20211203', 'duty at temple'),
(110, 9, '2021-12-04', '83', '20211204', 'duty at temple'),
(111, 9, '2021-12-04', '84', '20211204', 'duty at temple'),
(112, 9, '2021-12-04', '85', '20211204', 'duty at temple'),
(113, 9, '2021-12-04', '196', '20211204', 'duty at temple'),
(114, 9, '2021-12-04', '197', '20211204', 'duty at temple'),
(115, 9, '2021-12-04', '198', '20211204', 'duty at temple'),
(116, 9, '2021-12-04', '199', '20211204', 'duty at temple'),
(117, 9, '2021-12-04', '200', '20211204', 'duty at temple'),
(118, 9, '2021-12-05', '83', '20211205', 'duty at temple'),
(119, 9, '2021-12-05', '84', '20211205', 'duty at temple'),
(120, 9, '2021-12-05', '85', '20211205', 'duty at temple'),
(121, 9, '2021-12-05', '196', '20211205', 'duty at temple'),
(122, 9, '2021-12-05', '197', '20211205', 'duty at temple'),
(123, 9, '2021-12-05', '198', '20211205', 'duty at temple'),
(124, 9, '2021-12-05', '199', '20211205', 'duty at temple'),
(125, 9, '2021-12-05', '200', '20211205', 'duty at temple'),
(126, 20, '2021-11-24', '854', '20211124', 'duty at temple'),
(127, 20, '2021-11-24', '855', '20211124', 'duty at temple'),
(128, 20, '2021-11-24', '856', '20211124', 'duty at temple'),
(129, 20, '2021-11-24', '857', '20211124', 'duty at temple'),
(130, 20, '2021-11-24', '858', '20211124', 'duty at temple'),
(131, 20, '2021-11-24', '860', '20211124', 'duty at temple'),
(132, 20, '2021-11-24', '861', '20211124', 'duty at temple'),
(133, 20, '2021-11-24', '862', '20211124', 'duty at temple'),
(134, 20, '2021-11-24', '863', '20211124', 'duty at temple'),
(135, 20, '2021-11-24', '864', '20211124', 'duty at temple'),
(136, 20, '2021-11-24', '865', '20211124', 'duty at temple'),
(137, 20, '2021-11-24', '866', '20211124', 'duty at temple'),
(138, 20, '2021-11-24', '867', '20211124', 'duty at temple'),
(139, 20, '2021-11-24', '868', '20211124', 'duty at temple'),
(140, 20, '2021-11-24', '869', '20211124', 'duty at temple'),
(141, 20, '2021-11-24', '870', '20211124', 'duty at temple'),
(142, 20, '2021-11-24', '871', '20211124', 'duty at temple'),
(143, 20, '2021-11-24', '872', '20211124', 'duty at temple'),
(144, 20, '2021-11-24', '873', '20211124', 'duty at temple'),
(145, 20, '2021-11-24', '874', '20211124', 'duty at temple'),
(146, 20, '2021-11-24', '875', '20211124', 'duty at temple'),
(147, 20, '2021-11-25', '854', '20211125', 'duty at temple'),
(148, 20, '2021-11-25', '855', '20211125', 'duty at temple'),
(149, 20, '2021-11-25', '856', '20211125', 'duty at temple'),
(150, 20, '2021-11-25', '857', '20211125', 'duty at temple'),
(151, 20, '2021-11-25', '858', '20211125', 'duty at temple'),
(152, 20, '2021-11-25', '860', '20211125', 'duty at temple'),
(153, 20, '2021-11-25', '861', '20211125', 'duty at temple'),
(154, 20, '2021-11-25', '862', '20211125', 'duty at temple'),
(155, 20, '2021-11-25', '863', '20211125', 'duty at temple'),
(156, 20, '2021-11-25', '864', '20211125', 'duty at temple'),
(157, 20, '2021-11-25', '865', '20211125', 'duty at temple'),
(158, 20, '2021-11-25', '866', '20211125', 'duty at temple'),
(159, 20, '2021-11-25', '867', '20211125', 'duty at temple'),
(160, 20, '2021-11-25', '868', '20211125', 'duty at temple'),
(161, 20, '2021-11-25', '869', '20211125', 'duty at temple'),
(162, 20, '2021-11-25', '870', '20211125', 'duty at temple'),
(163, 20, '2021-11-25', '871', '20211125', 'duty at temple'),
(164, 20, '2021-11-25', '872', '20211125', 'duty at temple'),
(165, 20, '2021-11-25', '873', '20211125', 'duty at temple'),
(166, 20, '2021-11-25', '874', '20211125', 'duty at temple'),
(167, 20, '2021-11-25', '875', '20211125', 'duty at temple'),
(168, 20, '2021-11-27', '854', '20211127', 'duty at temple'),
(169, 20, '2021-11-27', '855', '20211127', 'duty at temple'),
(170, 20, '2021-11-27', '856', '20211127', 'duty at temple'),
(171, 20, '2021-11-27', '857', '20211127', 'duty at temple'),
(172, 20, '2021-11-27', '858', '20211127', 'duty at temple'),
(173, 20, '2021-11-27', '860', '20211127', 'duty at temple'),
(174, 20, '2021-11-27', '861', '20211127', 'duty at temple'),
(175, 20, '2021-11-27', '862', '20211127', 'duty at temple'),
(176, 20, '2021-11-27', '863', '20211127', 'duty at temple'),
(177, 20, '2021-11-27', '864', '20211127', 'duty at temple'),
(178, 20, '2021-11-27', '865', '20211127', 'duty at temple'),
(179, 20, '2021-11-27', '866', '20211127', 'duty at temple'),
(180, 20, '2021-11-27', '867', '20211127', 'duty at temple'),
(181, 20, '2021-11-27', '868', '20211127', 'duty at temple'),
(182, 20, '2021-11-27', '869', '20211127', 'duty at temple'),
(183, 20, '2021-11-27', '870', '20211127', 'duty at temple'),
(184, 20, '2021-11-27', '871', '20211127', 'duty at temple'),
(185, 20, '2021-11-27', '872', '20211127', 'duty at temple'),
(186, 20, '2021-11-27', '873', '20211127', 'duty at temple'),
(187, 20, '2021-11-27', '874', '20211127', 'duty at temple'),
(188, 20, '2021-11-27', '875', '20211127', 'duty at temple'),
(189, 20, '2021-11-26', '854', '20211126', 'duty at temple'),
(190, 20, '2021-11-26', '855', '20211126', 'duty at temple'),
(191, 20, '2021-11-26', '856', '20211126', 'duty at temple'),
(192, 20, '2021-11-26', '857', '20211126', 'duty at temple'),
(193, 20, '2021-11-26', '858', '20211126', 'duty at temple'),
(194, 20, '2021-11-26', '860', '20211126', 'duty at temple'),
(195, 20, '2021-11-26', '861', '20211126', 'duty at temple'),
(196, 20, '2021-11-26', '862', '20211126', 'duty at temple'),
(197, 20, '2021-11-26', '863', '20211126', 'duty at temple'),
(198, 20, '2021-11-26', '864', '20211126', 'duty at temple'),
(199, 20, '2021-11-26', '865', '20211126', 'duty at temple'),
(200, 20, '2021-11-26', '866', '20211126', 'duty at temple'),
(201, 20, '2021-11-26', '867', '20211126', 'duty at temple'),
(202, 20, '2021-11-26', '868', '20211126', 'duty at temple'),
(203, 20, '2021-11-26', '869', '20211126', 'duty at temple'),
(204, 20, '2021-11-26', '870', '20211126', 'duty at temple'),
(205, 20, '2021-11-26', '871', '20211126', 'duty at temple'),
(206, 20, '2021-11-26', '872', '20211126', 'duty at temple'),
(207, 20, '2021-11-26', '873', '20211126', 'duty at temple'),
(208, 20, '2021-11-26', '874', '20211126', 'duty at temple'),
(209, 20, '2021-11-26', '875', '20211126', 'duty at temple'),
(210, 20, '2021-11-28', '854', '20211128', 'duty at temple'),
(211, 20, '2021-11-28', '855', '20211128', 'duty at temple'),
(212, 20, '2021-11-28', '856', '20211128', 'duty at temple'),
(213, 20, '2021-11-28', '857', '20211128', 'duty at temple'),
(214, 20, '2021-11-28', '858', '20211128', 'duty at temple'),
(215, 20, '2021-11-28', '860', '20211128', 'duty at temple'),
(216, 20, '2021-11-28', '861', '20211128', 'duty at temple'),
(217, 20, '2021-11-28', '862', '20211128', 'duty at temple'),
(218, 20, '2021-11-28', '863', '20211128', 'duty at temple'),
(219, 20, '2021-11-28', '864', '20211128', 'duty at temple'),
(220, 20, '2021-11-28', '865', '20211128', 'duty at temple'),
(221, 20, '2021-11-28', '866', '20211128', 'duty at temple'),
(222, 20, '2021-11-28', '867', '20211128', 'duty at temple'),
(223, 20, '2021-11-28', '868', '20211128', 'duty at temple'),
(224, 20, '2021-11-28', '869', '20211128', 'duty at temple'),
(225, 20, '2021-11-28', '870', '20211128', 'duty at temple'),
(226, 20, '2021-11-28', '871', '20211128', 'duty at temple'),
(227, 20, '2021-11-28', '872', '20211128', 'duty at temple'),
(228, 20, '2021-11-28', '873', '20211128', 'duty at temple'),
(229, 20, '2021-11-28', '874', '20211128', 'duty at temple'),
(230, 20, '2021-11-28', '875', '20211128', 'duty at temple'),
(231, 25, '2022-01-03', '925', '20220103', 'duty at temple'),
(232, 25, '2022-01-10', '925', '20220110', 'duty at temple'),
(233, 25, '2022-01-17', '925', '20220117', 'duty at temple'),
(234, 25, '2022-01-24', '925', '20220124', 'duty at temple'),
(235, 25, '2022-01-31', '925', '20220131', 'duty at temple'),
(236, 25, '2022-02-07', '925', '20220207', 'duty at temple'),
(237, 25, '2022-02-14', '925', '20220214', 'duty at temple'),
(238, 25, '2022-02-21', '925', '20220221', 'duty at temple'),
(239, 25, '2022-02-28', '925', '20220228', 'duty at temple'),
(243, 20, '2021-12-08', '854', '20211208', 'duty at temple'),
(244, 20, '2021-12-08', '855', '20211208', 'duty at temple'),
(245, 20, '2021-12-08', '856', '20211208', 'duty at temple'),
(246, 20, '2021-12-08', '857', '20211208', 'duty at temple'),
(247, 20, '2021-12-08', '858', '20211208', 'duty at temple'),
(248, 20, '2021-12-08', '860', '20211208', 'duty at temple'),
(249, 20, '2021-12-08', '861', '20211208', 'duty at temple'),
(250, 20, '2021-12-08', '862', '20211208', 'duty at temple'),
(251, 20, '2021-12-08', '863', '20211208', 'duty at temple'),
(252, 20, '2021-12-08', '864', '20211208', 'duty at temple'),
(253, 20, '2021-12-08', '865', '20211208', 'duty at temple'),
(254, 20, '2021-12-08', '866', '20211208', 'duty at temple'),
(255, 20, '2021-12-08', '867', '20211208', 'duty at temple'),
(256, 20, '2021-12-08', '868', '20211208', 'duty at temple'),
(257, 20, '2021-12-08', '869', '20211208', 'duty at temple'),
(258, 20, '2021-12-08', '870', '20211208', 'duty at temple'),
(259, 20, '2021-12-08', '871', '20211208', 'duty at temple'),
(260, 20, '2021-12-08', '872', '20211208', 'duty at temple'),
(261, 20, '2021-12-08', '873', '20211208', 'duty at temple'),
(262, 20, '2021-12-08', '874', '20211208', 'duty at temple'),
(263, 20, '2021-12-08', '875', '20211208', 'duty at temple'),
(264, 33, '2021-12-07', '916', '20211207', 'duty at temple'),
(265, 33, '2021-12-07', '918', '20211207', 'duty at temple'),
(266, 25, '2022-01-03', '806', '20220103', 'duty at temple'),
(267, 25, '2022-01-03', '807', '20220103', 'duty at temple'),
(268, 25, '2022-01-03', '808', '20220103', 'duty at temple'),
(269, 25, '2022-01-03', '809', '20220103', 'duty at temple'),
(270, 25, '2022-01-03', '810', '20220103', 'duty at temple'),
(271, 25, '2022-01-03', '920', '20220103', 'duty at temple'),
(272, 25, '2022-01-03', '921', '20220103', 'duty at temple'),
(273, 25, '2022-01-03', '922', '20220103', 'duty at temple'),
(274, 25, '2022-01-03', '923', '20220103', 'duty at temple'),
(275, 25, '2022-01-03', '924', '20220103', 'duty at temple'),
(276, 25, '2022-01-03', '925', '20220103', 'duty at temple'),
(277, 4, '2022-01-11', '780', '20220111', 'duty at temple'),
(278, 6, '2022-01-11', '799', '20220111', 'duty at temple'),
(279, 6, '2022-01-11', '799', '20220111', 'duty at temple'),
(280, 7, '2022-01-11', '813', '20220111', 'duty at temple'),
(281, 7, '2022-01-11', '816', '20220111', 'duty at temple'),
(282, 7, '2022-01-11', '824', '20220111', 'duty at temple'),
(283, 18, '2022-01-11', '938', '20220111', 'duty at temple'),
(284, 21, '2022-01-11', '951', '20220111', 'duty at temple'),
(285, 1, '2022-01-11', '962', '20220111', 'duty at temple'),
(286, 1, '2022-01-11', '965', '20220111', 'duty at temple'),
(287, 27, '2021-12-11', '838', '20211211', 'duty at temple'),
(288, 27, '2021-12-11', '842', '20211211', 'duty at temple'),
(289, 27, '2021-12-11', '845', '20211211', 'duty at temple'),
(290, 27, '2021-12-11', '848', '20211211', 'duty at temple'),
(291, 27, '2022-01-11', '838', '20220111', 'duty at temple'),
(292, 27, '2022-01-11', '842', '20220111', 'duty at temple'),
(293, 27, '2022-01-11', '845', '20220111', 'duty at temple'),
(294, 27, '2022-01-11', '848', '20220111', 'duty at temple'),
(295, 25, '2022-01-10', '810', '20220110', 'duty at temple');

-- --------------------------------------------------------

--
-- Table structure for table `ref_styl_siisgnment`
--

CREATE TABLE `ref_styl_siisgnment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `cat_it` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `feature_image`, `created_at`, `updated_at`) VALUES
(40, '0320aabebef08fba9490e757f86744c3.jpg', '2021-08-27 09:13:44', '0000-00-00 00:00:00'),
(41, '096e54d4a09a29640a3aaaad879e8095.jpg', '2021-08-27 09:13:49', '0000-00-00 00:00:00'),
(42, 'd44c295aa95a2bebcf34a487c3d0eb3d.jpg', '2021-08-27 09:13:53', '0000-00-00 00:00:00'),
(43, '07bfee5290128c3d2ad2787294883f94.jpg', '2021-08-27 09:13:58', '0000-00-00 00:00:00'),
(51, '', '2021-09-07 10:50:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_arrangedecoration`
--

CREATE TABLE `slnt_arrangedecoration` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `membership_days` bigint(20) NOT NULL,
  `none_membership_amount` decimal(10,2) NOT NULL,
  `membership_amount` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_arrangedecoration`
--

INSERT INTO `slnt_arrangedecoration` (`id`, `title`, `membership_days`, `none_membership_amount`, `membership_amount`, `description`, `status`, `create_date`) VALUES
(1, 'MUNDAP', 0, 250.00, 201, 'NA', 1, '07-05-2021'),
(2, 'HALL', 0, 700.00, 651, 'NA', 1, '07-05-2021');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_bhog_catering`
--

CREATE TABLE `slnt_bhog_catering` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `catering_type` varchar(75) NOT NULL,
  `catering_title` varchar(255) DEFAULT NULL,
  `catering_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_bhog_prasad`
--

CREATE TABLE `slnt_bhog_prasad` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `bhog_prasad_title` varchar(255) DEFAULT NULL,
  `bhog_prasad_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_block_all_pooja_date`
--

CREATE TABLE `slnt_block_all_pooja_date` (
  `id` int(11) NOT NULL,
  `block_date` varchar(255) NOT NULL,
  `block_date_filt` varchar(255) NOT NULL,
  `fromtime` varchar(255) NOT NULL,
  `totime` varchar(255) NOT NULL,
  `leave_purpose` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_block_all_pooja_date`
--

INSERT INTO `slnt_block_all_pooja_date` (`id`, `block_date`, `block_date_filt`, `fromtime`, `totime`, `leave_purpose`) VALUES
(6, '2021-12-31', '20211231', '', '', 'Temple Event'),
(5, '2022-01-01', '20220101', '', '', 'Temple Event'),
(91, '2021-12-29', '20211229', '', '', 'No Slot available'),
(8, '2021-11-21', '20211121', '', '', 'No Slot Available'),
(90, '2021-12-27', '20211227', '', '', 'No Slot available'),
(11, '2021-11-28', '20211128', '', '', 'no Slot Available'),
(12, '2022-03-01', '20220301', '', '', 'Temple event'),
(13, '2022-02-05', '20220205', '', '', 'Temple event'),
(14, '2022-08-18', '20220818', '', '', 'Temple event'),
(19, '2022-08-19', '20220819', '', '', 'temple event'),
(16, '2022-09-26', '20220926', '', '', 'Temple event'),
(18, '2022-10-05', '20221005', '', '', 'Temple event'),
(20, '2022-04-02', '20220402', '', '', 'temple event'),
(22, '2022-04-11', '20220411', '', '', 'temple event'),
(39, '2021-12-13', '20211213', '', '', 'No slot available'),
(46, '2021-12-26', '20211226', '', '', 'No Slot available'),
(40, '2021-12-18', '20211218', '', '', 'No slot available'),
(41, '2021-12-19', '20211219', '', '', 'No slot available'),
(42, '2021-12-14', '20211214', '', '', 'No Slot available'),
(47, '2022-01-14', '20220114', '', '', 'Temple Event'),
(33, '2021-12-18', '20211218', '', '', 'No Slot available'),
(34, '2021-12-19', '20211219', '', '', 'No Slot available'),
(44, '2022-01-02', '20220102', '', '', 'No slot available '),
(45, '2021-12-25', '20211225', '', '', 'No Slot available'),
(43, '2021-12-20', '20211220', '', '', 'No Slot available'),
(48, '2022-01-15', '20220115', '', '', 'Temple Event'),
(49, '2022-03-18', '20220318', '', '', 'Temple Event'),
(50, '2022-04-03', '20220403', '', '', 'Temple Event'),
(51, '2022-04-04', '20220404', '', '', 'Temple Event'),
(52, '2022-04-05', '20220405', '', '', 'Temple Event'),
(53, '2022-04-06', '20220406', '', '', 'Temple Event'),
(54, '2022-04-07', '20220407', '', '', 'Temple Event'),
(55, '2022-04-08', '20220408', '', '', 'Temple Event'),
(56, '2022-04-09', '20220409', '', '', 'Temple Event'),
(57, '2022-04-10', '20220410', '', '', 'Temple Event'),
(58, '2022-04-16', '20220416', '', '', 'Temple Event'),
(59, '2022-04-29', '20220429', '', '', 'Temple Event'),
(60, '2022-05-03', '20220503', '', '', 'Temple Event'),
(61, '2022-08-02', '20220802', '', '', 'Temple Event'),
(62, '2022-08-07', '20220807', '', '', 'Temple Event'),
(63, '2022-08-08', '20220808', '', '', 'Temple Event'),
(64, '2022-08-09', '20220809', '', '', 'Temple Event'),
(65, '2022-08-12', '20220812', '', '', 'Temple Event'),
(66, '2022-08-19', '20220819', '', '', 'Temple Event'),
(67, '2022-08-30', '20220830', '', '', 'Temple Event'),
(68, '2022-08-31', '20220831', '', '', 'Temple Event'),
(69, '2022-09-09', '20220909', '', '', 'Temple Event'),
(70, '2022-09-25', '20220925', '', '', 'Temple Event'),
(71, '2022-09-26', '20220926', '', '', 'Temple Event'),
(72, '2022-09-27', '20220927', '', '', 'Temple Event'),
(73, '2022-09-28', '20220928', '', '', 'Temple Event'),
(74, '2022-09-29', '20220929', '', '', 'Temple Event'),
(75, '2022-09-30', '20220930', '', '', 'Temple Event'),
(76, '2022-10-01', '20221001', '', '', 'Temple Event'),
(77, '2022-10-02', '20221002', '', '', 'Temple Event'),
(78, '2022-10-03', '20221003', '', '', 'Temple Event'),
(79, '2022-10-04', '20221004', '', '', 'Temple Event'),
(80, '2022-10-05', '20221005', '', '', 'Temple Event'),
(81, '2022-10-13', '20221013', '', '', 'Temple Event'),
(82, '2022-10-22', '20221022', '', '', 'Temple Event'),
(83, '2022-10-23', '20221023', '', '', 'Temple Event'),
(84, '2022-10-24', '20221024', '', '', 'Temple Event'),
(85, '2022-11-05', '20221105', '', '', 'Temple Event'),
(86, '2023-11-07', '20231107', '', '', 'Temple Event'),
(87, '2022-12-31', '20221231', '', '', 'Temple Event'),
(88, '2023-01-01', '20230101', '', '', 'Temple Event'),
(89, '2022-11-08', '20221108', '', '', 'Temple Event'),
(92, '2021-12-30', '20211230', '', '', 'No Slot available'),
(93, '2022-01-03', '20220103', '', '', 'No Slot available'),
(94, '2022-01-01', '20220101', '', '', 'Temple Event'),
(95, '2022-01-17', '20220117', '', '', 'No Slot available'),
(96, '2022-03-01', '20220301', '', '', 'No slot available');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_block_all_pooja_date_staff`
--

CREATE TABLE `slnt_block_all_pooja_date_staff` (
  `id` int(11) NOT NULL,
  `block_date` varchar(255) NOT NULL,
  `block_date_filt` varchar(255) NOT NULL,
  `fromtime` varchar(255) NOT NULL,
  `totime` varchar(255) NOT NULL,
  `leave_purpose` varchar(255) NOT NULL,
  `staff_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_block_all_pooja_date_staff`
--

INSERT INTO `slnt_block_all_pooja_date_staff` (`id`, `block_date`, `block_date_filt`, `fromtime`, `totime`, `leave_purpose`, `staff_id`) VALUES
(1, '2021-05-01', '20210501', '', '', 'duty at temple', '36'),
(2, '2021-03-02', '20210302', '', '', 'duty at temple', '36'),
(3, '2021-05-04', '20210504', '', '', 'leave', '39'),
(11, '2022-01-20', '20220120', '', '', 'leave', '43'),
(21, '2021-12-16', '20211216', '', '', 'leave', '40'),
(6, '2021-12-10', '20211210', '', '', 'leave', '41'),
(46, '2022-01-17', '20220117', '', '', 'duty at temple', '42'),
(23, '2021-12-17', '20211217', '', '', 'leave', '43'),
(22, '2021-12-27', '20211227', '', '', 'leave', '44'),
(67, '2022-01-13', '20220113', '', '', 'leave', '42'),
(13, '2022-01-18', '20220118', '', '', 'leave', '40'),
(14, '2022-01-11', '20220111', '', '', 'leave', '44'),
(15, '2022-01-12', '20220112', '', '', 'leave', '48'),
(32, '2022-01-24', '20220124', '', '', 'duty at temple', '48'),
(47, '2022-01-18', '20220118', '', '', 'duty at temple', '42'),
(48, '2022-01-19', '20220119', '', '', 'duty at temple', '42'),
(49, '2022-01-20', '20220120', '', '', 'duty at temple', '42'),
(50, '2022-01-21', '20220121', '', '', 'duty at temple', '42'),
(51, '2022-01-22', '20220122', '', '', 'duty at temple', '42'),
(33, '2022-01-25', '20220125', '', '', 'duty at temple', '48'),
(34, '2022-01-26', '20220126', '', '', 'duty at temple', '48'),
(35, '2022-01-27', '20220127', '', '', 'duty at temple', '48'),
(36, '2022-01-28', '20220128', '', '', 'duty at temple', '48'),
(37, '2022-01-29', '20220129', '', '', 'duty at temple', '48'),
(38, '2022-01-30', '20220130', '', '', 'duty at temple', '48'),
(39, '2022-01-10', '20220110', '', '', 'duty at temple', '40'),
(40, '2022-01-11', '20220111', '', '', 'duty at temple', '40'),
(41, '2022-01-12', '20220112', '', '', 'duty at temple', '40'),
(42, '2022-01-13', '20220113', '', '', 'duty at temple', '40'),
(43, '2022-01-14', '20220114', '', '', 'duty at temple', '40'),
(44, '2022-01-15', '20220115', '', '', 'duty at temple', '40'),
(45, '2022-01-16', '20220116', '', '', 'duty at temple', '40'),
(52, '2022-01-23', '20220123', '', '', 'duty at temple', '42'),
(53, '2022-01-03', '20220103', '', '', 'duty at temple', '43'),
(54, '2022-01-04', '20220104', '', '', 'duty at temple', '43'),
(55, '2022-01-05', '20220105', '', '', 'duty at temple', '43'),
(56, '2022-01-06', '20220106', '', '', 'duty at temple', '43'),
(57, '2022-01-07', '20220107', '', '', 'duty at temple', '43'),
(58, '2022-01-08', '20220108', '', '', 'duty at temple', '43'),
(59, '2022-01-09', '20220109', '', '', 'duty at temple', '43'),
(60, '2022-01-31', '20220131', '', '', 'duty at temple', '44'),
(61, '2022-02-01', '20220201', '', '', 'duty at temple', '44'),
(62, '2022-02-02', '20220202', '', '', 'duty at temple', '44'),
(63, '2022-02-03', '20220203', '', '', 'duty at temple', '44'),
(64, '2022-02-04', '20220204', '', '', 'duty at temple', '44'),
(65, '2022-02-05', '20220205', '', '', 'duty at temple', '44'),
(66, '2022-02-06', '20220206', '', '', 'duty at temple', '44');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_block_date`
--

CREATE TABLE `slnt_block_date` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_block_date`
--

INSERT INTO `slnt_block_date` (`id`, `title`, `status`) VALUES
(1, '2021-08-31', 0),
(2, '2021-08-16', 0),
(3, '2021-08-10', 0),
(4, '2021-08-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_booking_slot`
--

CREATE TABLE `slnt_booking_slot` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `puja_type` varchar(50) NOT NULL DEFAULT '0',
  `priest_id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `pre_priest` int(11) NOT NULL,
  `sel_priest` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `venue_amount` decimal(10,2) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `picup` varchar(255) NOT NULL,
  `puja_samagri` int(11) NOT NULL,
  `pooja_samagri_amt` decimal(10,2) NOT NULL,
  `havan_samagri` int(11) NOT NULL,
  `havan_samagri_amt` decimal(10,2) NOT NULL,
  `bhog_prasad` int(11) NOT NULL,
  `bhog_prasad_amt` decimal(10,2) NOT NULL,
  `catering` int(11) NOT NULL,
  `catering_items` text,
  `cate_description` text,
  `lunch` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `refeshments` int(11) NOT NULL,
  `tot_lunch` decimal(10,2) NOT NULL,
  `lunch_member` int(11) NOT NULL,
  `tot_dinner` decimal(10,2) NOT NULL,
  `dinner_member` int(11) NOT NULL,
  `tot_refreshment` decimal(10,2) NOT NULL,
  `refreshment_member` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `sel_date` varchar(250) NOT NULL,
  `m` varchar(25) NOT NULL,
  `y` varchar(25) NOT NULL,
  `d` varchar(25) NOT NULL,
  `day` varchar(25) NOT NULL,
  `time_range_from` varchar(255) NOT NULL,
  `time_range_to` varchar(255) NOT NULL,
  `note_for_temple` text NOT NULL,
  `member_price` decimal(10,2) NOT NULL,
  `non_member_price` decimal(10,2) NOT NULL,
  `fill_from_date` varchar(50) NOT NULL,
  `fill_to_date` varchar(50) NOT NULL,
  `offer_mem_price` decimal(10,2) NOT NULL,
  `offer_non_mem_price` decimal(10,2) NOT NULL,
  `pooja_time_from` varchar(255) NOT NULL,
  `pooja_time_to` varchar(255) NOT NULL,
  `cancledattime` varchar(255) DEFAULT NULL,
  `req_date` varchar(255) DEFAULT NULL,
  `req_time` varchar(255) DEFAULT NULL,
  `req_status` int(11) NOT NULL DEFAULT '0',
  `booking_for` varchar(10) NOT NULL,
  `membership_status` int(11) NOT NULL DEFAULT '0',
  `sel_priest_rs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_booking_slot`
--

INSERT INTO `slnt_booking_slot` (`id`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `catering_items`, `cate_description`, `lunch`, `dinner`, `refeshments`, `tot_lunch`, `lunch_member`, `tot_dinner`, `dinner_member`, `tot_refreshment`, `refreshment_member`, `status`, `create_date`, `create_time`, `sel_date`, `m`, `y`, `d`, `day`, `time_range_from`, `time_range_to`, `note_for_temple`, `member_price`, `non_member_price`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `pooja_time_from`, `pooja_time_to`, `cancledattime`, `req_date`, `req_time`, `req_status`, `booking_for`, `membership_status`, `sel_priest_rs`) VALUES
(1, '', 'pooja', 0, 4, 30, 'SLNT73477', 1, 43, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '17-06-2021', '17:29:29 PM', 'Wed, 23-06-2021', '06', '2021', '23', 'Wed', '', '', 'noyj', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(2, '', 'pooja', 0, 3, 64, 'SLNT92653', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '16-07-2021', '12:18:14 PM', 'Wed, 21-07-2021', '07', '2021', '21', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', '2021/07/16 07:25:56 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(3, '', 'pooja', 0, 3, 62, 'SLNT92653', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-08-2021', '10:16:24 AM', 'Wed, 4-08-2021', '08', '2021', '4', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(4, '', 'pooja', 0, 3, 75, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-08-2021', '17:01:22 PM', 'Sat, 28-08-2021', '08', '2021', '28', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(5, 'SPSLNT2021082100005', 'pooja', 0, 4, 25, 'SLNT16061', 1, 44, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-08-2021', '16:49:35 PM', 'Tue, 24-08-2021', '08', '2021', '24', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(6, '', 'pooja', 0, 5, 101, 'SLNT16061', 1, 44, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-08-2021', '16:58:18 PM', 'Tue, 31-08-2021', '08', '2021', '31', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(7, '', 'pooja', 0, 9, 197, 'SLNT16061', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-08-2021', '17:24:21 PM', 'Wed, 25-08-2021', '08', '2021', '25', 'Wed', '', '', '', 21.00, 21.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(8, 'SPSLNT2021082300008', 'pooja', 0, 3, 60, 'SLNT53352', 1, 44, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-08-2021', '16:16:22 PM', 'Tue, 31-08-2021', '08', '2021', '31', 'Tue', '', '', 'Thanks you', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(9, '', 'Puja', 0, 4, 26, 'SLNT16061', 0, 47, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-08-2021', '18:28:50 PM', 'Tue, 31-08-2021', '08', '2021', '31', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(10, '', 'pooja', 0, 4, 37, 'SLNT53352', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-08-2021', '19:57:22 PM', 'Thu, 26-08-2021', '08', '2021', '26', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(11, '', 'pooja', 0, 4, 42, 'SLNT53352', 1, 44, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-08-2021', '21:11:24 PM', 'Fri, 27-08-2021', '08', '2021', '27', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'No', 1, 25.00),
(12, '', 'pooja', 0, 4, 25, 'SLNT16061', 0, 44, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '25-08-2021', '19:30:24 PM', 'Tue, 31-08-2021', '08', '2021', '31', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(13, 'SPSLNT2021082500013', 'Puja', 0, 4, 35, 'SLNT16061', 1, 43, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-08-2021', '19:43:59 PM', 'Thu, 26-08-2021', '08', '2021', '26', 'Thu', '', '', 'Tesr', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(14, '', 'pooja', 0, 4, 37, 'SLNT53352', 1, 43, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-08-2021', '10:50:16 AM', 'Thu, 26-08-2021', '08', '2021', '26', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(15, '', 'pooja', 0, 28, 88, 'SLNT92653', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '08-09-2021', '11:08:07 AM', 'Tue, 14-09-2021', '09', '2021', '14', 'Tue', '', '', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(16, 'SPSLNT2021092100016', 'pooja', 0, 4, 30, 'SLNT16061', 0, 47, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-09-2021', '18:53:45 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', 'test', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(17, 'SPSLNT2021092100017', 'pooja', 0, 4, 31, 'SLNT16061', 0, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-09-2021', '19:04:10 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', 'dfsaf', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(18, 'SPSLNT2021092300018', 'pooja', 0, 4, 35, 'SLNT16061', 1, 42, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-09-2021', '13:24:50 PM', 'Thu, 30-09-2021', '09', '2021', '30', 'Thu', '', '', 'test', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(19, 'SPSLNT2021092300019', 'yajman', 0, 22, 554, 'SLNT16061', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-09-2021', '13:27:12 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', 'tet', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(20, '', 'pooja', 0, 9, 197, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-09-2021', '12:28:40 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', '', 21.00, 21.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(21, 'SPSLNT2021092700021', 'pooja', 0, 4, 36, 'SLNT16061', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-09-2021', '08:43:14 AM', 'Thu, 30-09-2021', '09', '2021', '30', 'Thu', '', '', 'etest', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(22, 'SPSLNT2021092700022', 'pooja', 0, 4, 36, 'SLNT16061', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 0, '{\"menus\":\"7\",\"menus_title\":\"Menu 4\",\"pax_n_price\":\"100|601|652\",\"note_for_catering\":\"test\",\"items\":null}', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-09-2021', '09:40:05 AM', 'Thu, 28-10-2021', '10', '2021', '28', 'Thu', '', '', 'test', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(23, 'SPSLNT2021092700023', 'pooja', 0, 4, 32, 'SLNT53352', 1, 41, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-09-2021', '10:58:32 AM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(24, 'SPSLNT2021092700024', 'pooja', 0, 3, 62, 'SLNT53352', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-09-2021', '18:19:16 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', 'fbx', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(25, '', 'pooja', 0, 34, 130, 'SLNT53352', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-09-2021', '21:02:24 PM', 'Wed, 29-09-2021', '09', '2021', '29', 'Wed', '', '', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'No', 1, 25.00),
(26, 'SPSLNT2021092800026', 'pooja', 0, 4, 41, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 0, '{\"menus\":\"7\",\"menus_title\":\"Menu 4\",\"pax_n_price\":\"100|601|652\",\"note_for_catering\":\"\",\"items\":null}', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-09-2021', '12:40:49 PM', 'Fri, 8-10-2021', '10', '2021', '8', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(27, 'SPSLNT2021092800027', 'pooja', 0, 4, 46, 'SLNT53352', 1, 41, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-09-2021', '12:43:25 PM', 'Sat, 30-10-2021', '10', '2021', '30', 'Sat', '', '', 'Please accept this pooja booking', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(28, 'SPSLNT2021092800028', 'pooja', 0, 4, 40, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-09-2021', '12:45:23 PM', 'Fri, 1-10-2021', '10', '2021', '1', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(29, 'SPSLNT2021092800029', 'pooja', 0, 4, 35, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 0, '{\"menus\":\"7\",\"menus_title\":\"Menu 4\",\"pax_n_price\":\"100|601|652\",\"note_for_catering\":\"\",\"items\":null}', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-09-2021', '12:57:31 PM', 'Thu, 7-10-2021', '10', '2021', '7', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(30, '', 'pooja', 0, 4, 35, 'SLNT16061', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-09-2021', '07:33:34 AM', 'Thu, 28-10-2021', '10', '2021', '28', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(31, 'SPSLNT2021092900031', 'pooja', 0, 4, 37, 'SLNT16061', 1, 42, 1, 0.00, 'terst', '232323', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '07:35:10 AM', 'Thu, 28-10-2021', '10', '2021', '28', 'Thu', '12:00 AM', '12:30 AM', 'test', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(32, 'SPSLNT2021092900032', 'pooja', 0, 4, 36, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '14:08:30 PM', 'Thu, 7-10-2021', '10', '2021', '7', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(33, 'SPSLNT2021092900033', 'pooja', 0, 4, 35, 'SLNT16061', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '18:30:34 PM', 'Thu, 28-10-2021', '10', '2021', '28', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(34, 'SPSLNT2021092900034', 'pooja', 0, 4, 35, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '19:49:41 PM', 'Thu, 14-10-2021', '10', '2021', '14', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(35, 'SPSLNT2021092900035', 'pooja', 0, 4, 42, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '20:11:56 PM', 'Fri, 8-10-2021', '10', '2021', '8', 'Fri', '', '', 'Testing', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(36, 'SPSLNT2021092900036', 'pooja', 0, 4, 41, 'SLNT16061', 1, 41, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-09-2021', '21:11:06 PM', 'Fri, 29-10-2021', '10', '2021', '29', 'Fri', '', '', 'testret', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(37, 'SPSLNT2021100800037', 'pooja', 0, 4, 24, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '08-10-2021', '20:47:39 PM', 'Sun, 31-10-2021', '10', '2021', '31', 'Sun', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(38, 'SPSLNT2021100800038', 'pooja', 0, 4, 39, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 0, '{\"menus\":\"8\",\"menus_title\":\"Menu 5\",\"pax_n_price\":\"50|151|151\",\"note_for_catering\":\"\",\"items\":null}', '<p>Rice<br />\r\nMix vegetable</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '08-10-2021', '21:02:17 PM', 'Thu, 28-10-2021', '10', '2021', '28', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(39, 'SPSLNT2021101000039', 'pooja', 0, 4, 25, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 0, '{\"menus\":\"9\",\"menus_title\":\"Menu 6\",\"pax_n_price\":\"50|101|101\",\"note_for_catering\":\"\",\"items\":null}', '<p>Tea</p>\r\n\r\n<p>Pakora</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '10-10-2021', '08:20:20 AM', 'Tue, 12-10-2021', '10', '2021', '12', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(40, '', 'pooja', 0, 4, 45, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-10-2021', '17:06:48 PM', 'Sat, 30-10-2021', '10', '2021', '30', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(41, '', 'pooja', 0, 4, 48, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-10-2021', '17:09:19 PM', 'Sat, 30-10-2021', '10', '2021', '30', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(42, '', 'pooja', 0, 4, 48, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-10-2021', '17:33:43 PM', 'Sat, 30-10-2021', '10', '2021', '30', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(43, '', 'Puja', 0, 5, 101, 'SLNT92653', 1, 41, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '10-11-2021', '12:43:01 PM', 'Tue, 23-11-2021', '11', '2021', '23', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(44, '', 'Puja', 0, 34, 129, 'SLNT461814', 1, 44, 1, 0.00, '166', '068811', ' will reimburse taxi fare', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-11-2021', '07:50:14 AM', 'Tue, 23-11-2021', '11', '2021', '23', 'Tue', '12:00 AM', '01:30 AM', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(45, '', 'pooja', 0, 4, 26, 'SLNT53352', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-11-2021', '10:54:19 AM', 'Tue, 23-11-2021', '11', '2021', '23', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(46, 'SPSLNT2021112000046', 'pooja', 0, 7, 173, 'SLNT380417', 0, 0, 1, 0.00, '15-03, 91 West Coast Vale', '126755', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-11-2021', '14:14:44 PM', 'Mon, 29-11-2021', '11', '2021', '29', 'Mon', '07:30 AM', '12:00 PM', 'I want temple to supply pooja and havan samagri. And priest to take the taxi to and from. I will reimburse. Time slot: 8-10am', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(47, 'SPSLNT2021112000047', 'pooja', 0, 27, 648, 'SLNT384921', 0, 0, 1, 0.00, '236 Serangoon Ave 3, #05-96, Singapore - 550236', '550236', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-11-2021', '16:00:21 PM', 'Sat, 18-12-2021', '12', '2021', '18', 'Sat', '10:00 AM', '12:00 PM', 'plz bring hawan kund', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(48, 'SPSLNT2021112000048', 'pooja', 0, 3, 77, 'SLNT384921', 0, 0, 1, 0.00, '5D adam road', '289884', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-11-2021', '17:07:43 PM', 'Sun, 26-12-2021', '12', '2021', '26', 'Sun', '09:30 AM', '12:30 PM', 'Please ask priest to contact me at 82045825 before leaving temple. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:30:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(49, '', 'pooja', 0, 4, 26, 'SLNT542411', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-11-2021', '20:45:55 PM', 'Tue, 30-11-2021', '11', '2021', '30', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(50, 'SPSLNT2021112000050', 'pooja', 0, 2, 235, 'SLNT542411', 1, 40, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-11-2021', '20:53:03 PM', 'Tue, 30-11-2021', '11', '2021', '30', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(51, 'SPSLNT2021112000051', 'pooja', 0, 28, 87, 'SLNT542411', 1, 40, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-11-2021', '21:06:43 PM', 'Mon, 29-11-2021', '11', '2021', '29', 'Mon', '', '', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(52, '', 'pooja', 0, 5, 107, 'SLNT215018', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-11-2021', '07:37:53 AM', 'Wed, 24-11-2021', '11', '2021', '24', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(53, '', 'pooja', 0, 4, 777, 'SLNT557224', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-11-2021', '12:20:37 PM', 'Thu, 25-11-2021', '11', '2021', '25', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '15:30:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(54, '', 'pooja', 0, 3, 782, 'SLNT152426', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '23-11-2021', '09:13:31 AM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(55, 'SPSLNT2021112300055', 'pooja', 0, 3, 782, 'SLNT152426', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-11-2021', '09:13:35 AM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(56, 'SPSLNT2021112300056', 'pooja', 0, 7, 817, 'SLNT721627', 0, 0, 1, 0.00, 'Block 331, Sembawang Close, #07-351', '750331', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-11-2021', '10:59:03 AM', 'Wed, 1-12-2021', '12', '2021', '1', 'Wed', '11:30 AM', '12:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(57, 'SPSLNT2021112300057', 'pooja', 0, 27, 846, 'SLNT592628', 0, 0, 1, 0.00, '37 simei street 4, 11-15', '529870', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-11-2021', '11:16:55 AM', 'Sat, 4-12-2021', '12', '2021', '4', 'Sat', '08:00 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(58, 'SPSLNT2021112300058', 'pooja', 0, 3, 78, 'SLNT588330', 0, 0, 1, 0.00, '#03-20, Blk 76, Bayshore road, Costa Del Sol', '469990', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-11-2021', '15:44:15 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '12:00 PM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(59, 'SPSLNT2021112300059', 'Puja', 0, 37, 900, 'SLNT965031', 0, 0, 1, 0.00, '122 Punggol Walk, #14-45, Twin Waterfalls', '828771', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-11-2021', '17:23:45 PM', 'Thu, 25-11-2021', '11', '2021', '25', 'Thu', '12:00 AM', '12:30 AM', 'Vastu SHanti Pooja to be performed ina  condo unit. Please call 9489 7006  once booking is confirmed. Thanks!', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(60, '', 'pooja', 0, 7, 814, 'SLNT866932', 1, 43, 1, 0.00, '25 West Coast Crescent #10-14 Blue Horizon Condo', '128047', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '24-11-2021', '08:04:02 AM', 'Tue, 30-11-2021', '11', '2021', '30', 'Tue', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', '2021/11/24 02:41:11 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(61, 'SPSLNT2021112500061', 'pooja', 0, 7, 827, 'SLNT738534', 1, 42, 1, 0.00, '33 Simei Street 4', '529878', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-11-2021', '08:12:21 AM', 'Sun, 5-12-2021', '12', '2021', '5', 'Sun', '09:30 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(62, '', 'Puja', 0, 4, 775, 'SLNT84836', 0, 0, 1, 0.00, 'Parc oasis 41 jurong east avenue-1', '609777', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '25-11-2021', '15:23:25 PM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '01:00 PM', '01:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(63, 'SPSLNT2021112500063', 'Puja', 0, 4, 780, 'SLNT273835', 0, 0, 1, 0.00, '08-23,block 12, city square residences', '207224', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-11-2021', '15:39:21 PM', 'Sat, 4-12-2021', '12', '2021', '4', 'Sat', '03:00 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(64, 'SPSLNT2021112600064', 'pooja', 0, 27, 845, 'SLNT767737', 1, 42, 1, 0.00, 'Unit no #0706, 21West coast crescent,  Tower A, Blue Horizon condo  West Coast. ', '128045', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-11-2021', '08:49:55 AM', 'Fri, 14-01-2022', '01', '2022', '14', 'Fri', '04:00 PM', '06:00 PM', 'What samagri we should have at home?', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(65, 'SPSLNT2021112600065', 'pooja', 0, 27, 847, 'SLNT990839', 1, 40, 1, 0.00, 'BLOCK 697C JURONG WEST CENTRAL 3', '643697', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-11-2021', '09:54:33 AM', 'Sat, 4-12-2021', '12', '2021', '4', 'Sat', '09:00 AM', '01:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(66, 'SPSLNT2021112600066', 'pooja', 0, 7, 817, 'SLNT834441', 0, 0, 1, 0.00, '3A Hillcrest Villa, one Hillcrest road', '248904', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-11-2021', '11:29:34 AM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '12:00 AM', '02:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(67, 'SPSLNT2021112600067', 'pooja', 0, 31, 1004, 'SLNT304043', 1, 40, 1, 0.00, 'Unit 14-09 trellis towers ), 700 lorong  1 toa payoh ', '319773', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-11-2021', '15:10:30 PM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '10:30 PM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(68, 'SPSLNT2021112600068', 'Puja', 0, 7, 818, 'SLNT84545', 0, 0, 1, 0.00, '#03-267 block332 Serangoon Avenue 3 ', '550332', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-11-2021', '18:49:06 PM', 'Wed, 1-12-2021', '12', '2021', '1', 'Wed', '01:00 PM', '01:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(69, 'SPSLNT2021112700069', 'Puja', 0, 27, 831, 'SLNT155247', 0, 0, 1, 0.00, 'Block 220,#11-224,Serangoon Avenue 4', '550220', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-11-2021', '10:13:57 AM', 'Tue, 30-11-2021', '11', '2021', '30', 'Tue', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(70, '', 'pooja', 0, 20, 872, 'SLNT316925', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-11-2021', '14:17:52 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(71, '', 'pooja', 0, 27, 848, 'SLNT921950', 1, 41, 1, 0.00, 'Blk 311B Clementi Avenue 4', '122311', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '27-11-2021', '17:29:19 PM', 'Sat, 4-12-2021', '12', '2021', '4', 'Sat', '03:30 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', '2021/11/27 12:23:01 PM', NULL, NULL, 0, 'Yes', 0, 25.00),
(72, '', 'pooja', 0, 20, 872, 'SLNT316925', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '28-11-2021', '06:59:09 AM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(73, 'SPSLNT2021112800073', 'pooja', 0, 20, 872, 'SLNT316925', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '07:18:25 AM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(74, 'SPSLNT2021112800074', 'pooja', 0, 27, 830, 'SLNT555554', 0, 0, 1, 0.00, '54 Punggol Walk ', '828832', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '07:53:44 AM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '02:00 PM', '04:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(75, '', 'pooja', 0, 35, 123, 'SLNT215018', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '28-11-2021', '08:44:05 AM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '', '', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(76, '', 'pooja', 0, 5, 788, 'SLNT215018', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '28-11-2021', '08:54:54 AM', 'Tue, 30-11-2021', '11', '2021', '30', 'Tue', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '17:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(77, 'SPSLNT2021112800077', 'pooja', 0, 20, 860, 'SLNT20156', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '09:27:06 AM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(78, 'SPSLNT2021112800078', 'Puja', 0, 4, 775, 'SLNT84836', 0, 0, 1, 0.00, '14-02, Parc Oasis, 41 Jurong East Avenue 1', '609777', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '12:30:18 PM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '12:00 AM', '12:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(79, 'SPSLNT2021112800079', 'pooja', 0, 7, 827, 'SLNT454458', 1, 42, 1, 0.00, '2 Perumal Road, 22-06, Uptown', '218773', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '12:39:40 PM', 'Sun, 19-12-2021', '12', '2021', '19', 'Sun', '10:00 AM', '10:10 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(80, '', 'Puja', 0, 27, 838, 'SLNT643961', 0, 0, 1, 0.00, '08-03, block 7, aquarius by the park', '478929', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '28-11-2021', '18:08:57 PM', 'Wed, 1-12-2021', '12', '2021', '1', 'Wed', '03:30 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(81, 'SPSLNT2021112800081', 'Puja', 0, 27, 838, 'SLNT643961', 0, 0, 1, 0.00, '08-03, Block 7,  Aquarius by the park', '478929', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-11-2021', '21:45:59 PM', 'Wed, 1-12-2021', '12', '2021', '1', 'Wed', '03:30 AM', '06:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(82, 'SPSLNT2021112900082', 'pooja', 0, 33, 918, 'SLNT56463', 0, 0, 1, 0.00, '66 Flora Drive, Parc Olympia, 07-64, Singapore', '506861', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '07:50:02 AM', 'Sat, 4-12-2021', '12', '2021', '4', 'Sat', '06:00 PM', '06:00 PM', 'I want havan also after the path. If panditji can get all the materials. I will reimburse. Thank you. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '20:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(83, '', 'Puja', 0, 21, 956, 'SLNT37565', 1, 41, 1, 0.00, '70 Bayshore Road 20-07 Costa Del Sol', '469986', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '08:07:29 AM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '10:30 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '02:00:00 AM', '04:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(84, 'SPSLNT2021112900084', 'pooja', 0, 27, 851, 'SLNT480666', 1, 40, 1, 0.00, 'Block 304, 10-120, Jurong East St 32', '600304', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '08:30:01 AM', 'Sun, 19-12-2021', '12', '2021', '19', 'Sun', '09:00 AM', '09:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(85, 'SPSLNT2021112900085', 'pooja', 0, 27, 845, 'SLNT226251', 1, 41, 1, 0.00, 'BLOCK 311B, CLEMENTI AVENUE 4, #20-167', '122311', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '08:42:53 AM', 'Fri, 3-12-2021', '12', '2021', '3', 'Fri', '03:30 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(86, 'SPSLNT2021112900086', 'pooja', 0, 27, 840, 'SLNT382968', 0, 0, 1, 0.00, '34 Bayshore Road, The Bayshore Condo, Tower 2B, #02-08', '469976', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '09:39:58 AM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '11:30 AM', '02:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(87, '', 'pooja', 0, 20, 866, 'SLNT141469', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '09:40:49 AM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '', '', 'Mundan ceremony for twin baby boys (11 months old).', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(88, '', 'Puja', 0, 27, 851, 'SLNT10872', 0, 0, 1, 0.00, 'Blk 121, Meyer Road, The Makena, #09-04', '437932', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '10:48:00 AM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '09:00 AM', '12:00 PM', 'Could you confirm what all preparations are so be done by us at home ?', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(89, 'SPSLNT2021112900089', 'pooja', 0, 27, 835, 'SLNT870667', 0, 0, 1, 0.00, '15-03, 370G, Alexandra Road, The Anchorage, Singapore', '159960', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '12:36:39 PM', 'Wed, 15-12-2021', '12', '2021', '15', 'Wed', '07:30 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(90, '', 'Puja', 0, 27, 851, 'SLNT10872', 0, 0, 1, 0.00, 'Blk 121, Meyer Road, The Makena, #09-04', '437932', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '13:35:06 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '09:00 AM', '12:00 PM', 'Could you let us know what all things are needed to be prepared by us?', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(91, 'SPSLNT2021112900091', 'Puja', 0, 27, 851, 'SLNT10872', 0, 0, 1, 0.00, 'Blk 121, Meyer Road, The Makena, #09-04', '437932', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '13:45:10 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '09:00 AM', '11:30 AM', 'Could you let us know what things should we prepare for the Puja ? We shall keep the Prasad , fruits and Panchamrit ready .', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(92, '', 'pooja', 0, 1, 964, 'SLNT252673', 1, 40, 1, 0.00, '#06-29 Mandarin Gardens', '448907', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '14:05:47 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '12:00 AM', '02:00 AM', 'I want havan along with the nav grah pooja', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(93, '', 'pooja', 0, 25, 1005, 'SLNT46576', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-11-2021', '16:25:46 PM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '', '', '', 90.00, 132.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(94, 'SPSLNT2021112900094', 'pooja', 0, 39, 888, 'SLNT498677', 1, 43, 1, 0.00, '23 Tampines Central 7, Block 23 , Unit No 15-26', '528609', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '19:32:39 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(95, 'SPSLNT2021112900095', 'pooja', 0, 7, 822, 'SLNT647979', 0, 0, 1, 0.00, 'VUE 8 Condo, Block-93,#02-22,Pasir Ris Heights', '519288', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-11-2021', '20:30:55 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '09:30 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(96, '', 'pooja', 0, 27, 847, 'SLNT15685', 1, 41, 1, 0.00, '77 Pasir Ris Grove 05-34', '518209', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '30-11-2021', '14:19:46 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', '2021/11/30 09:25:08 AM', '2021-12-11', '847', 0, 'Yes', 0, 25.00),
(97, '', 'pooja', 0, 27, 852, 'SLNT667271', 1, 41, 1, 0.00, 'Unit 0602, Block 3, Arc at Tampines, Avenue 8', '529595', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '30-11-2021', '14:57:19 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '12:00 PM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(98, 'SPSLNT2021113000098', 'pooja', 0, 27, 852, 'SLNT667271', 0, 0, 1, 0.00, 'Unit 0602, Block 3, Arc at Tampines, Avenue 8', '529595', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-11-2021', '15:03:59 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '12:00 PM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00);
INSERT INTO `slnt_booking_slot` (`id`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `catering_items`, `cate_description`, `lunch`, `dinner`, `refeshments`, `tot_lunch`, `lunch_member`, `tot_dinner`, `dinner_member`, `tot_refreshment`, `refreshment_member`, `status`, `create_date`, `create_time`, `sel_date`, `m`, `y`, `d`, `day`, `time_range_from`, `time_range_to`, `note_for_temple`, `member_price`, `non_member_price`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `pooja_time_from`, `pooja_time_to`, `cancledattime`, `req_date`, `req_time`, `req_status`, `booking_for`, `membership_status`, `sel_priest_rs`) VALUES
(99, '', 'pooja', 0, 1, 966, 'SLNT252673', 1, 40, 1, 0.00, '#06-29  Mandarin Gardens', '448907', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '30-11-2021', '15:11:01 PM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '07:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(100, 'SPSLNT2021113000100', 'pooja', 0, 27, 845, 'SLNT32083', 0, 0, 1, 0.00, '05-14,8 pari dedap walk', '486061', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-11-2021', '16:53:32 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '03:30 PM', '04:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(101, 'SPSLNT2021113000101', 'pooja', 0, 27, 829, 'SLNT233586', 0, 0, 1, 0.00, '#12-343, Block 668, Woodlands Ring Road, Singapore', '730668', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-11-2021', '18:02:23 PM', 'Mon, 6-12-2021', '12', '2021', '6', 'Mon', '07:30 AM', '10:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(102, 'SPSLNT2021120100102', 'pooja', 0, 27, 847, 'SLNT31487', 0, 0, 1, 0.00, '450 corporation road', '649810', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '01-12-2021', '06:22:31 AM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '09:30 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(103, 'SPSLNT2021120100103', 'pooja', 0, 1, 966, 'SLNT252673', 1, 41, 1, 0.00, '#06-29 Mandarin Gardens', '448907', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '01-12-2021', '07:14:11 AM', 'Sun, 12-12-2021', '12', '2021', '12', 'Sun', '07:30 AM', '11:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(104, 'SPSLNT2021120100104', 'pooja', 0, 1, 963, 'SLNT926789', 0, 0, 1, 0.00, '643 Punggol Central #09-324', '820643', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '01-12-2021', '09:37:57 AM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(105, 'SPSLNT2021120100105', 'pooja', 0, 27, 851, 'SLNT673190', 0, 0, 1, 0.00, '15 Leonie Hill Road, #08-04 Horizon Tower East', '239194', 'I will pick up priest', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '01-12-2021', '10:50:49 AM', 'Sun, 26-12-2021', '12', '2021', '26', 'Sun', '09:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(106, '', 'Puja', 0, 4, 779, 'SLNT527396', 1, 42, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '01-12-2021', '18:04:49 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(107, 'SPSLNT2021120100107', 'pooja', 0, 4, 780, 'SLNT527396', 1, 42, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-12-2021', '03:19:02 AM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(108, 'SPSLNT2021120200108', 'pooja', 0, 7, 825, 'SLNT480264', 0, 0, 1, 0.00, '#14-08, Tower 2, Silversea, 48 Marine Parade Road', '449306', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-12-2021', '08:41:35 AM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '11:30 AM', '11:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(109, '', 'pooja', 0, 7, 819, 'SLNT421399', 1, 43, 1, 0.00, '34 Tanah Merah Kechil road, East Meadows, Tower 2C, #02-27', '465560', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '02-12-2021', '09:05:59 AM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', '2021/12/02 04:06:09 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(110, '', 'pooja', 0, 39, 881, 'SLNT5077102', 0, 0, 1, 0.00, '29 jalan sempadan', '457402', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '02-12-2021', '09:39:19 AM', 'Sun, 26-12-2021', '12', '2021', '26', 'Sun', '09:00 AM', '10:30 AM', 'Please ask Shukla Ji to visit us', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '07:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(111, '', 'Puja', 0, 27, 847, 'SLNT1632100', 1, 42, 1, 0.00, 'Blk 1E Cantonment Road #34-49', '085501', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '02-12-2021', '09:45:47 AM', 'Sat, 15-01-2022', '01', '2022', '15', 'Sat', '09:30 AM', '09:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(112, 'SPSLNT2021120200112', 'pooja', 0, 39, 881, 'SLNT5077102', 0, 0, 1, 0.00, '29 jalan sempadan', '457402', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-12-2021', '09:48:40 AM', 'Sun, 26-12-2021', '12', '2021', '26', 'Sun', '09:00 AM', '10:30 AM', 'We would prefer Shukla Ji and timing of havan is 9 am', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '07:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(113, 'SPSLNT2021120200113', 'Puja', 0, 39, 887, 'SLNT131103', 0, 0, 1, 0.00, '27 Jalan Sempadan', '457401', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-12-2021', '11:22:28 AM', 'Fri, 14-01-2022', '01', '2022', '14', 'Fri', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(114, '', 'Puja', 0, 3, 782, 'SLNT365655', 1, 42, 1, 0.00, 'The Anchorage, 370 F, #08-02, Alexandra Road', '159959', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '02-12-2021', '13:46:01 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '11:00 AM', '02:30 PM', 'I would like to book Pandit Mishra Ji for Ayush Puja for my daughter on 20th Dec, 12-2pm slot.', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(115, 'SPSLNT2021120200115', 'Puja', 0, 3, 782, 'SLNT365655', 1, 42, 1, 0.00, 'The Anchorage, 370 F, #08-02, Alexandra Road', '159959', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-12-2021', '14:16:32 PM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '11:00 AM', '02:30 PM', 'I would like to book Pandit Padmanand Mishra ji for 27th Dec, 12-2pm slot.', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(116, '', 'pooja', 0, 4, 778, 'SLNT1550106', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '03-12-2021', '00:00:27 AM', 'Fri, 3-12-2021', '12', '2021', '3', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', '2021/12/02 18:52:25 PM', NULL, NULL, 0, 'Yes', 0, 25.00),
(117, '', 'pooja', 0, 4, 778, 'SLNT1550106', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '03-12-2021', '00:21:28 AM', 'Fri, 21-01-2022', '01', '2022', '21', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', '2021/12/02 18:52:20 PM', NULL, NULL, 0, 'Yes', 1, 25.00),
(118, '', 'pooja', 0, 1, 964, 'SLNT421399', 1, 43, 1, 0.00, '34 Tanah Merah Kechil road, East Meadows, Tower 2C, #02-27', '465560', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '03-12-2021', '07:43:14 AM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', '2021/12/03 02:15:12 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(119, '', 'pooja', 0, 7, 821, 'SLNT7978107', 0, 0, 1, 0.00, 'Rashmi.pabla@hotmail.com', '529865', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '07:58:14 AM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '05:00 PM', '05:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(120, '', 'pooja', 0, 7, 821, 'SLNT7978107', 0, 0, 1, 0.00, '9 Simei Street 4 #06-02', '529865', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '08:17:39 AM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '03:30 PM', '04:00 PM', 'We are shifting to rented house', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(121, 'SPSLNT2021120300121', 'pooja', 0, 27, 838, 'SLNT9051108', 1, 42, 1, 0.00, '23 Leonie Hill, Leonie Gardens, Unit 1504', '239224', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '09:01:25 AM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '05:00 PM', '05:30 PM', 'I do not have Pooja samagri. I would like temple to arrange it. Thank you. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(122, '', 'pooja', 0, 4, 778, 'SLNT7380109', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '09:17:52 AM', 'Fri, 3-12-2021', '12', '2021', '3', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(123, 'SPSLNT2021120300123', 'Puja', 0, 20, 866, 'SLNT6431112', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '10:16:44 AM', 'Wed, 8-12-2021', '12', '2021', '8', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(124, '', 'pooja', 0, 4, 778, 'SLNT4527113', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '11:17:34 AM', 'Fri, 14-01-2022', '01', '2022', '14', 'Fri', '', '', 'Demo', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(125, '', 'pooja', 0, 4, 778, 'SLNT3812114', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '11:41:43 AM', 'Fri, 28-01-2022', '01', '2022', '28', 'Fri', '', '', 'Demo', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(126, '', 'pooja', 0, 4, 779, 'SLNT3812114', 1, 42, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '11:51:58 AM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(127, '', 'pooja', 0, 4, 779, 'SLNT3812114', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '11:54:12 AM', 'Sat, 15-01-2022', '01', '2022', '15', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(128, '', 'Puja', 0, 4, 777, 'SLNT461814', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 0, '{\"menus\":\"8\",\"menus_title\":\"Menu 5\",\"pax_n_price\":\"50|151|151\",\"note_for_catering\":\"\",\"items\":null}', '<p>Rice<br />\r\nMix vegetable</p>', 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '12:10:29 PM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '15:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(129, '', 'Puja', 0, 5, 789, 'SLNT2425115', 1, 42, 1, 0.00, 'Blk-415', '730415', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '03-12-2021', '13:23:30 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '04:30 AM', '10:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', '2021/12/03 08:36:57 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(130, 'SPSLNT2021120300130', 'Puja', 0, 33, 917, 'SLNT5704116', 1, 42, 1, 0.00, 'Block 770 Pasir Ris street 71 #08-346', '510770', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '13:49:12 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '07:00 AM', '07:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(131, 'SPSLNT2021120300131', 'pooja', 0, 25, 807, 'SLNT8729117', 1, 41, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '14:07:08 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '', '', '', 90.00, 132.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(132, '', 'pooja', 0, 25, 806, 'SLNT445510', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '14:37:35 PM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '', '', 'nil', 160.00, 202.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(133, '', 'pooja', 0, 2, 795, 'SLNT445510', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '14:59:40 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(134, '', 'pooja', 0, 2, 795, 'SLNT445510', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '14:59:42 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(135, 'SPSLNT2021120300135', 'pooja', 0, 5, 789, 'SLNT2425115', 0, 0, 1, 0.00, 'BLk-415, 12-169, woodlands street 41', '730415', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '15:43:34 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '04:00 AM', '09:00 AM', 'There is some problem while booking under parmanand misra ji. We cant see his name in options.We want this prayer to perform by him,hence booking with this option. We will make cash payment for  additional fees of 25 dollars', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(136, '', 'pooja', 0, 4, 778, 'SLNT445510', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '03-12-2021', '17:47:52 PM', 'Fri, 3-12-2021', '12', '2021', '3', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(137, 'SPSLNT2021120300137', 'pooja', 0, 39, 890, 'SLNT8101119', 1, 43, 1, 0.00, '220 Depot Road', '109704', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-12-2021', '18:31:16 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '08:00 AM', '08:30 AM', 'Arya Samaji Havan ', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '07:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(138, 'SPSLNT2021120400138', 'pooja', 0, 1, 957, 'SLNT3205122', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '04-12-2021', '15:16:09 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(139, '', 'Puja', 0, 18, 938, 'SLNT8755126', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '04-12-2021', '16:43:32 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '16:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(140, '', 'Puja', 0, 18, 938, 'SLNT8755126', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '04-12-2021', '16:47:13 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '', '', 'Pooja and havan samagri needed', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '16:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(141, '', 'Puja', 0, 1, 964, 'SLNT8755126', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '04-12-2021', '16:51:48 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(142, 'SPSLNT2021120400142', 'Puja', 0, 18, 938, 'SLNT8755126', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '04-12-2021', '17:11:29 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '16:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(143, '', 'Puja', 0, 37, 900, 'SLNT8755126', 0, 0, 1, 0.00, '321 Serangoon Avenue 2', '550321', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '04-12-2021', '17:23:43 PM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(144, 'SPSLNT2021120400144', 'Puja', 0, 1, 964, 'SLNT8755126', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '04-12-2021', '17:37:04 PM', 'Sat, 11-12-2021', '12', '2021', '11', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(145, 'SPSLNT2021120500145', 'pooja', 0, 27, 831, 'SLNT585130', 0, 0, 1, 0.00, '#06-29, Blk 45, Savannah Condopark, Simei Rise', '528786', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '05-12-2021', '10:34:07 AM', 'Tue, 21-12-2021', '12', '2021', '21', 'Tue', '09:30 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(146, 'SPSLNT2021120500146', 'pooja', 0, 21, 952, 'SLNT247970', 0, 0, 1, 0.00, '402 Pandan Gardens', '600402', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '05-12-2021', '10:54:57 AM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '10:00 AM', '02:00 PM', 'This ceremony is for my newborn baby girl.', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(147, 'SPSLNT2021120600147', 'pooja', 0, 30, 902, 'SLNT7624132', 0, 0, 1, 0.00, 'Block 64 0602', '469984', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '06-12-2021', '05:57:23 AM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '06:30 AM', '07:00 AM', 'Solah Somvaar Udyapan Pooja. Please note our preferred time slot is morning hours 6:30 to 8 am. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '06:30:00 AM', '07:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(148, 'SPSLNT2021120600148', 'pooja', 0, 27, 831, 'SLNT8576128', 0, 0, 1, 0.00, 'Blk 138, #11-107, Lorong Ah Soo, Lift C', '530138', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '06-12-2021', '07:00:02 AM', 'Tue, 14-12-2021', '12', '2021', '14', 'Tue', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(149, '', 'pooja', 0, 27, 847, 'SLNT6321136', 0, 0, 1, 0.00, '18 upper Serangoon view ', '534202', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '06-12-2021', '07:43:52 AM', 'Sat, 16-04-2022', '04', '2022', '16', 'Sat', '09:30 AM', '10:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(150, '', 'pooja', 0, 5, 787, 'SLNT445510', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '06-12-2021', '08:42:09 AM', 'Tue, 7-12-2021', '12', '2021', '7', 'Tue', '', '', 'nil', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(151, 'SPSLNT2021120600151', 'pooja', 0, 21, 950, 'SLNT9111138', 0, 0, 1, 0.00, '61 Grange Road, 19-01 Beverly Hill', '249570', 'I will pick up priest', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '06-12-2021', '09:17:23 AM', 'Tue, 4-01-2022', '01', '2022', '4', 'Tue', '12:00 AM', '12:30 AM', 'Please let me know if i should also ask for astrological chart. Please see journey time. Software problem - I can only see 12 -2.30 am. Many thanks. Please confirm this booking and advise how i should make payment or do i give it to the priest on that day.', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(152, 'SPSLNT2021120600152', 'pooja', 0, 3, 80, 'SLNT8291140', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '06-12-2021', '09:35:21 AM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(153, '', 'pooja', 0, 27, 851, 'SLNT3035142', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '06-12-2021', '12:20:33 PM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(154, 'SPSLNT2021120600154', 'Puja', 0, 37, 900, 'SLNT9129143', 1, 42, 1, 0.00, '390 Orchard Road ', '238871', ' will reimburse taxi fare', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '06-12-2021', '14:07:01 PM', 'Thu, 9-12-2021', '12', '2021', '9', 'Thu', '11:00 AM', '08:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(155, '', 'pooja', 0, 1, 958, 'SLNT3648145', 0, 0, 1, 0.00, '187, Tanjong Rhu Road', '436925', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '06-12-2021', '16:33:05 PM', 'Tue, 14-12-2021', '12', '2021', '14', 'Tue', '09:00 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(156, 'SPSLNT2021120700156', 'pooja', 0, 27, 842, 'SLNT8697149', 1, 41, 1, 0.00, 'block 20, #05-09, Melville Park, Simei St 1', '529944', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '08:03:16 AM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '03:30 PM', '07:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(157, 'SPSLNT2021120700157', 'pooja', 0, 27, 830, 'SLNT1733150', 1, 42, 1, 0.00, '1 Rhu Cross, unit 05-14, Costa RHU ', '437431', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '08:47:55 AM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '12:00 AM', '12:00 AM', 'Need to do Satya Narayan and grah Santi Puja ', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(158, 'SPSLNT2021120700158', 'pooja', 0, 7, 819, 'SLNT7946151', 0, 0, 1, 0.00, '#03-15, 44 Faber Walk', '128991', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '09:18:41 AM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '09:00 AM', '01:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(159, '', 'pooja', 0, 33, 916, 'SLNT3648145', 0, 0, 1, 0.00, '187, Tanjong Rhu Road', '436925', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '07-12-2021', '13:11:48 PM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '06:30 PM', '09:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '20:30:00 PM', '2021/12/10 13:20:41 PM', NULL, NULL, 0, 'Yes', 0, 25.00),
(160, 'SPSLNT2021120700160', 'pooja', 0, 1, 958, 'SLNT3648145', 0, 0, 1, 0.00, '187, Tanjong Rhu Road', '436925', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '13:21:49 PM', 'Tue, 14-12-2021', '12', '2021', '14', 'Tue', '08:00 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, '2021-12-25', '964', 1, 'Yes', 0, 25.00),
(161, 'SPSLNT2021120700161', 'pooja', 0, 27, 845, 'SLNT3557157', 0, 0, 1, 0.00, '253 Arcadia Road 07-12 Hill Crest Arcadia', '289849', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '14:32:12 PM', 'Fri, 17-12-2021', '12', '2021', '17', 'Fri', '03:00 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(162, 'SPSLNT2021120700162', 'pooja', 0, 27, 843, 'SLNT8551156', 0, 0, 1, 0.00, '12-479 Block 297 Punggol Central', '820297', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '07-12-2021', '14:32:47 PM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '08:00 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(163, 'SPSLNT2021120800163', 'pooja', 0, 7, 825, 'SLNT3969165', 1, 42, 1, 0.00, '1B Cantonment Road, #25-13', '085201', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '08-12-2021', '08:56:22 AM', 'Sat, 15-01-2022', '01', '2022', '15', 'Sat', '12:00 AM', '12:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(164, 'SPSLNT2021120800164', 'pooja', 0, 27, 844, 'SLNT4027161', 0, 0, 1, 0.00, '71 Pasir Ris Grove , #07-19 Livia, Singapore', '518205', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '08-12-2021', '09:15:58 AM', 'Fri, 10-12-2021', '12', '2021', '10', 'Fri', '01:00 PM', '02:30 PM', 'Request Panditji to start at the Auspicious time after 1pm ', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(165, '', 'pooja', 0, 7, 813, 'SLNT1686173', 0, 0, 1, 0.00, '50, Flora Drive, Parc Olympia', '506858', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '08-12-2021', '09:53:23 AM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '03:00 PM', '03:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(166, 'SPSLNT2021120800166', 'pooja', 0, 25, 921, 'SLNT7907164', 0, 48, 1, 0.00, 'manoj.jss@gmail.com', '828793', ' will reimburse taxi fare', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '08-12-2021', '14:13:43 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '10:00 AM', '10:30 AM', 'Pooja Samagri ask priest to bring', 160.00, 202.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(167, '', 'pooja', 0, 4, 779, 'SLNT53352', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '09-12-2021', '13:43:52 PM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 1, 25.00),
(168, 'SPSLNT2021121000168', 'pooja', 0, 43, 1005, 'SLNT6316201', 0, 0, 1, 51.00, '08-25, Block  D , Sunhaven , 781 Upper Changi Road East, Singapore - 486069 ', '486069', ' will reimburse taxi fare', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '10-12-2021', '14:27:32 PM', 'Mon, 20-12-2021', '12', '2021', '20', 'Mon', '08:00 AM', '10:00 AM', 'Shraddha - Tarpan , bhojan at home ,please share the Priest contact no', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(169, 'SPSLNT2021121100169', '', 0, 7, 819, 'SLNT9251185', 1, 42, 1, 0.00, '29-03 ', '259957', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '11-12-2021', '09:41:27 AM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '09:30 AM', '01:00 PM', 'greh pravesh pooja. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(170, '', 'pooja', 0, 18, 944, 'SLNT1427209', 1, 42, 1, 0.00, '485 yio chu kang Road, #01-08,Castle Green ', '787058', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '12-12-2021', '00:07:59 AM', 'Fri, 21-01-2022', '01', '2022', '21', 'Fri', '09:00 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '19:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(171, '', 'pooja', 0, 21, 950, 'SLNT2248196', 1, 41, 1, 0.00, '130B Toa Payoh Lorong 1', '312130', 'I will pick up priest', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '12-12-2021', '06:15:14 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '11:00 AM', '11:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(172, '', 'pooja', 0, 18, 944, 'SLNT1427209', 0, 0, 1, 0.00, '485 yio chu kang Road, #01-08,Castle Green ', '787058', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '12-12-2021', '08:41:55 AM', 'Fri, 21-01-2022', '01', '2022', '21', 'Fri', '09:30 AM', '10:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '19:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(173, 'SPSLNT2021121200173', 'pooja', 0, 27, 847, 'SLNT9961214', 0, 0, 1, 0.00, '130 Tanjong Rhu, Apt 1115', '446918', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '12-12-2021', '09:24:39 AM', 'Sat, 25-12-2021', '12', '2021', '25', 'Sat', '09:30 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(174, '', 'pooja', 0, 27, 843, 'SLNT2253213', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '12-12-2021', '09:33:00 AM', 'Fri, 17-12-2021', '12', '2021', '17', 'Fri', '', '', 'Satyanarayana puja and katha will be performed without Havan', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(175, 'SPSLNT2021121200175', 'pooja', 0, 27, 843, 'SLNT2253213', 0, 0, 1, 0.00, 'banik.g@gmail.com', '520714', ' will reimburse taxi fare', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '12-12-2021', '09:36:47 AM', 'Fri, 17-12-2021', '12', '2021', '17', 'Fri', '07:30 AM', '08:00 AM', 'Satyanarayana puja and katha will be performed without any Havan', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(176, '', 'Puja', 0, 43, 1006, 'SLNT6666210', 0, 0, 0, 51.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '12-12-2021', '09:41:37 AM', 'Tue, 21-12-2021', '12', '2021', '21', 'Tue', '', '', 'Could arrange for 19 or 20 Dec can\'t get through pse help in t morning prayers ', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(177, 'SPSLNT2021121200177', 'pooja', 0, 18, 944, 'SLNT1427209', 0, 0, 1, 0.00, '485 yio chu kang Road, #01-08,Castle Green ', '787058', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '12-12-2021', '09:41:48 AM', 'Fri, 21-01-2022', '01', '2022', '21', 'Fri', '09:00 AM', '10:30 AM', 'Hi Good morning, I  have spacial request for Mishra ji .thanks', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '19:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(178, '', 'Puja', 0, 6, 797, 'SLNT8944216', 1, 40, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-12-2021', '10:01:34 AM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(179, '', 'Puja', 0, 1, 963, 'SLNT8944216', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-12-2021', '10:09:07 AM', 'Fri, 24-12-2021', '12', '2021', '24', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(180, '', 'pooja', 0, 25, 806, 'SLNT6178217', 1, 43, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-12-2021', '13:06:06 PM', 'Mon, 1-08-2022', '08', '2022', '1', 'Mon', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(181, 'SPSLNT2021121300181', 'Puja', 0, 21, 953, 'SLNT665203', 0, 0, 1, 0.00, 'Unit 05-01, block 7 , Aquarius by the park ', '478929', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '13-12-2021', '14:45:35 PM', 'Fri, 17-12-2021', '12', '2021', '17', 'Fri', '11:00 AM', '02:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(182, 'SPSLNT2021121300182', 'pooja', 0, 1, 964, 'SLNT9700221', 1, 43, 1, 0.00, '30, Tanah Merah Kechil Road, #15-01, Tower 3A, East Meadows, Singapore', '465558', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '13-12-2021', '15:08:15 PM', 'Sat, 25-12-2021', '12', '2021', '25', 'Sat', '12:00 AM', '12:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(183, 'SPSLNT2021121300183', 'pooja', 0, 37, 900, 'SLNT5353225', 1, 42, 1, 0.00, '201 Tanjong Rhu Road, unit 01-01, Parkshore condo ', '436917', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '13-12-2021', '16:02:26 PM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '12:00 PM', '02:00 PM', 'I am renovating my place and therefore require Pundit Mishra to do small prayer. Please bring all Pooja items and I will reimburse, thank you. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(184, '', 'pooja', 0, 27, 840, 'SLNT7531226', 0, 0, 1, 0.00, 'Block 275, 04-88, Tampines Street 22', '520275', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-12-2021', '16:03:17 PM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(185, '', 'pooja', 0, 27, 840, 'SLNT7531226', 0, 0, 1, 0.00, 'Block 275, 04-88, Tampines Street 22', '520275', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-12-2021', '16:07:07 PM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(186, 'SPSLNT2021121300186', 'pooja', 0, 27, 840, 'SLNT7531226', 0, 0, 1, 0.00, 'Block 275, 04-88, Tampines Street 22', '520275', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '13-12-2021', '16:27:12 PM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '11:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(187, '', 'pooja', 0, 27, 853, 'SLNT9349193', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '14-12-2021', '07:25:55 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(188, '', 'pooja', 0, 20, 866, 'SLNT2198236', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '14-12-2021', '11:30:28 AM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(189, 'SPSLNT2021121400189', 'pooja', 0, 20, 866, 'SLNT2198236', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '14-12-2021', '16:05:57 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(190, 'SPSLNT2021121400190', 'pooja', 0, 20, 867, 'SLNT2243231', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '14-12-2021', '19:21:08 PM', 'Thu, 16-12-2021', '12', '2021', '16', 'Thu', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '08:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(191, 'SPSLNT2021121500191', 'pooja', 0, 27, 851, 'SLNT3168246', 0, 0, 1, 0.00, 'blk 41, circuit , #05-541', '370041', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '15-12-2021', '08:20:57 AM', 'Sun, 9-01-2022', '01', '2022', '9', 'Sun', '08:00 AM', '11:30 AM', 'will pick up Pandit Ji at 8am from Temple\r\nNo Need , 5mewa , ladoo,Photograph ,prassd', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(192, '', 'pooja', 0, 39, 885, 'SLNT92653', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '15-12-2021', '09:30:34 AM', 'Wed, 15-12-2021', '12', '2021', '15', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00);
INSERT INTO `slnt_booking_slot` (`id`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `catering_items`, `cate_description`, `lunch`, `dinner`, `refeshments`, `tot_lunch`, `lunch_member`, `tot_dinner`, `dinner_member`, `tot_refreshment`, `refreshment_member`, `status`, `create_date`, `create_time`, `sel_date`, `m`, `y`, `d`, `day`, `time_range_from`, `time_range_to`, `note_for_temple`, `member_price`, `non_member_price`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `pooja_time_from`, `pooja_time_to`, `cancledattime`, `req_date`, `req_time`, `req_status`, `booking_for`, `membership_status`, `sel_priest_rs`) VALUES
(193, 'SPSLNT2021121500193', 'pooja', 0, 21, 951, 'SLNT2248196', 1, 41, 1, 0.00, '130B Toa Payoh Lorong 1', '312130', 'I will pick up priest', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '15-12-2021', '14:54:15 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '02:30 PM', '02:30 PM', 'To do Satya Narayan Pooja with Naamkaran', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(194, 'SPSLNT2021121500194', 'Puja', 0, 27, 852, 'SLNT4498249', 0, 0, 1, 0.00, 'ramani.nikky@gmail.com', '469982', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '15-12-2021', '20:30:11 PM', 'Sun, 26-12-2021', '12', '2021', '26', 'Sun', '12:30 PM', '02:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(195, 'SPSLNT2021121600195', 'pooja', 0, 27, 851, 'SLNT3209251', 0, 0, 1, 0.00, '16 Simei Street 1', '529942', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '09:12:52 AM', 'Sun, 2-01-2022', '01', '2022', '2', 'Sun', '09:30 AM', '10:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '09:30:00 AM', '11:30:00 AM', NULL, '2022-01-08', '847', 0, 'Yes', 0, 25.00),
(196, '', 'pooja', 0, 39, 887, 'SLNT8076245', 0, 0, 1, 0.00, '1 TANJONG RHU ROAD #04-03 THE WATERSIDE', '436879', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '16-12-2021', '09:44:12 AM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '10:00 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(197, 'SPSLNT2021121600197', 'pooja', 0, 27, 838, 'SLNT9349193', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '10:34:18 AM', 'Wed, 16-02-2022', '02', '2022', '16', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(198, 'SPSLNT2021121600198', 'pooja', 0, 27, 852, 'SLNT3791252', 0, 0, 1, 0.00, '#12-17, Block 10E, Braddell View Condo', '579724', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '10:41:10 AM', 'Sun, 2-01-2022', '01', '2022', '2', 'Sun', '10:30 AM', '11:00 AM', 'Please call us to confirm.', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(199, '', 'pooja', 0, 27, 830, 'SLNT9349193', 0, 0, 1, 0.00, '9 Chin Bee Dr, Singapore 619860', '619860', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '16-12-2021', '10:46:59 AM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '12:00 AM', '02:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(200, 'SPSLNT2021121600200', 'pooja', 0, 28, 92, 'SLNT2344253', 0, 0, 1, 0.00, '224 Westwood Avenue #06-14', '648356', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '11:58:39 AM', 'Sat, 25-12-2021', '12', '2021', '25', 'Sat', '12:00 PM', '12:30 PM', 'I want Grah Shanti pooja', 51.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(201, 'SPSLNT2021121600201', 'pooja', 0, 7, 821, 'SLNT1757254', 0, 0, 1, 0.00, '#02-03, 1 Rhu Cross, Costa Rhu', '437431', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '12:01:14 PM', 'Thu, 27-01-2022', '01', '2022', '27', 'Thu', '02:00 PM', '04:00 PM', 'We need small hawan kund. Pls ask priest to call me. 81382039.', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(202, 'SPSLNT2021121600202', 'pooja', 0, 43, 1010, 'SLNT1689218', 0, 0, 0, 51.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '16-12-2021', '13:35:46 PM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '', '', 'Please arrnage pooja items as required.', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(203, '', 'Puja', 0, 39, 887, 'SLNT8076245', 0, 0, 1, 0.00, '1 Tanjong rhu road', '436879', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '16-12-2021', '13:59:05 PM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '11:30 AM', '01:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(204, '', 'pooja', 0, 27, 852, 'SLNT1056255', 1, 42, 1, 0.00, 'Blk 119, ho ching road, #07-117', '610119', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '16-12-2021', '15:49:17 PM', 'Sun, 9-01-2022', '01', '2022', '9', 'Sun', '11:00 AM', '11:45 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(205, '', 'pooja', 0, 27, 848, 'SLNT1056255', 1, 42, 1, 0.00, 'Blk 119, ho ching road, #07-117', '610119', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '16-12-2021', '21:54:45 PM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '04:30 PM', '04:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(206, 'SPSLNT2021121700206', 'pooja', 0, 27, 842, 'SLNT5752257', 1, 41, 1, 0.00, '#09-329,Blk 272B. Sengkang Central ', '542272', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '17-12-2021', '07:07:49 AM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '03:30 PM', '04:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(207, 'SPSLNT2021121700207', 'pooja', 0, 27, 845, 'SLNT830260', 0, 0, 1, 0.00, '5,Rhu Cross,12-19 Costa Rhu ,Sg.', '437434', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '17-12-2021', '14:34:59 PM', 'Fri, 24-12-2021', '12', '2021', '24', 'Fri', '03:30 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(208, 'SPSLNT2021121700208', 'Puja', 0, 39, 887, 'SLNT8076245', 0, 0, 1, 0.00, '1 TANJONG RHU ROAD #04-03 THE WATERSIDE', '436879', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '17-12-2021', '15:06:04 PM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '11:30 AM', '01:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(209, '', 'pooja', 0, 27, 842, 'SLNT9349193', 0, 0, 1, 0.00, '32 Canberra drive yishun emerald 01-27', '768431', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '18-12-2021', '10:13:41 AM', 'Thu, 17-02-2022', '02', '2022', '17', 'Thu', '01:00 AM', '02:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', '2021/12/18 04:45:04 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(210, '', 'pooja', 0, 27, 830, 'SLNT9349193', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '18-12-2021', '10:39:47 AM', 'Mon, 14-03-2022', '03', '2022', '14', 'Mon', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', '2021/12/28 12:18:52 PM', NULL, NULL, 0, 'Yes', 0, 25.00),
(211, '', 'pooja', 0, 27, 831, 'SLNT3764263', 0, 0, 1, 0.00, '07-07, block 52', '465529', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '18-12-2021', '10:44:43 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '09:00 AM', '09:30 AM', 'Can Panditji start the Pooja earlier than 10 AM? if yes, we are also OK. please let us know', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(212, '', 'pooja', 0, 27, 831, 'SLNT3764263', 0, 0, 1, 0.00, '07-07, block 52', '465529', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '18-12-2021', '10:48:51 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '09:00 AM', '09:30 AM', 'Panditjee can start the prayer earlier than 10 AM if possible.', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(213, '', 'pooja', 0, 27, 831, 'SLNT3764263', 0, 0, 1, 0.00, '07-07, block 52', '465529', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '18-12-2021', '10:55:05 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '09:00 AM', '09:30 AM', 'Panditjee can start the prayer earlier than 10 AM if he is available', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(214, '', 'Puja', 0, 9, 197, 'SLNT5839264', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '18-12-2021', '15:24:52 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 21.00, 21.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(215, 'SPSLNT2021121800215', 'Puja', 0, 43, 1007, 'SLNT5839264', 0, 0, 0, 51.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '18-12-2021', '15:29:55 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(216, '', 'pooja', 0, 27, 830, 'SLNT3022183', 0, 0, 1, 0.00, '297A Compassvle Street #07-42', '541297', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '18-12-2021', '21:02:04 PM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(217, 'SPSLNT2021121900217', 'pooja', 0, 27, 841, 'SLNT553267', 1, 42, 1, 0.00, 'The Alps Residence, 113 Tampines Street 86, 14-41', '528536', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '19-12-2021', '06:48:08 AM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '01:30 AM', '04:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(218, 'SPSLNT2021121900218', 'pooja', 0, 27, 831, 'SLNT3764263', 0, 0, 1, 0.00, 'block 52, 07-07', '465529', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '19-12-2021', '16:36:41 PM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '09:00 AM', '09:30 PM', 'if Priest is free in the morning , he can come earlier than 10 AM', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(219, 'SPSLNT2021121900219', 'Puja', 0, 33, 916, 'SLNT9548273', 1, 40, 1, 0.00, '125 Meyer Road', '437936', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '19-12-2021', '16:53:38 PM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '06:30 PM', '08:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '20:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(220, '', 'pooja', 0, 39, 886, 'SLNT3147276', 1, 42, 1, 0.00, '05-01 Treasure Loft', '307856', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '20-12-2021', '07:28:29 AM', 'Thu, 13-01-2022', '01', '2022', '13', 'Thu', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', '2021/12/20 02:12:37 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(221, '', 'pooja', 0, 43, 1008, 'SLNT3147276', 1, 42, 1, 51.00, '05-01 Treasure Loft', '307856', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '20-12-2021', '07:30:47 AM', 'Thu, 13-01-2022', '01', '2022', '13', 'Thu', '11:30 AM', '11:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', '2021/12/20 02:12:42 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(222, '', 'Puja', 0, 6, 799, 'SLNT7343277', 0, 0, 1, 0.00, 'Citylights tower 80 #38-03 ', '208766', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-12-2021', '07:48:05 AM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '04:00 PM', '04:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(223, 'SPSLNT2021122000223', 'pooja', 0, 43, 1005, 'SLNT3147276', 1, 42, 1, 51.00, '115 Shrewsbury Road. 05-01', '307856', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-12-2021', '08:08:52 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '08:30 AM', '09:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(224, 'SPSLNT2021122000224', 'pooja', 0, 1, 958, 'SLNT8442280', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-12-2021', '09:26:22 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '', '', 'Navagraha pooja.', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(225, '', 'pooja', 0, 4, 779, 'SLNT777282', 0, 0, 1, 0.00, 'Unit# 06-117,  160B Punggol Central Singapore', '822160', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-12-2021', '09:38:22 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '12:30 PM', '02:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(226, 'SPSLNT2021122000226', 'Puja', 0, 27, 846, 'SLNT4200284', 0, 0, 1, 0.00, '3  Simei Street 3 #07-01 Block 2C', '529891', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-12-2021', '10:09:39 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '07:30 AM', '11:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(227, 'SPSLNT2021122000227', 'pooja', 0, 27, 842, 'SLNT3758283', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-12-2021', '10:11:27 AM', 'Thu, 23-12-2021', '12', '2021', '23', 'Thu', '', '', 'Satya narayan Puja for 3months old baby girl- Twisha Mishra', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(228, '', 'pooja', 0, 27, 830, 'SLNT1585285', 0, 0, 1, 0.00, '614, Choa Chu Kang, St 62, #03-237', '680614', 'I will pick up priest', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-12-2021', '12:17:56 PM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '09:15 AM', '12:30 PM', 'I will pickup and drop panditji to temple .', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(229, '', 'pooja', 0, 20, 856, 'SLNT6416139', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '20-12-2021', '16:56:08 PM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(230, 'SPSLNT2021122000230', 'Puja', 0, 27, 835, 'SLNT7504290', 0, 40, 1, 0.00, '70 Bayshore Road, Costa Del Sol 30-11', '469987', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '20-12-2021', '20:25:11 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '08:00 AM', '08:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(231, 'SPSLNT2021122100231', 'Puja', 0, 25, 806, 'SLNT4493291', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '08:09:37 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '', '', 'Please ask Priest to get the Pooja Samagri.', 160.00, 202.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(232, '', 'pooja', 0, 27, 840, 'SLNT6771293', 1, 42, 1, 0.00, '19 Kovan Road, #05-09 Kovan Melody', '548191', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '09:17:55 AM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '11:30 AM', '12:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(233, 'SPSLNT2021122100233', 'pooja', 0, 27, 835, 'SLNT6771293', 1, 42, 1, 0.00, '19 Kovan Road, #05-09 Kovan Melody', '548191', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '09:53:39 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '07:30 AM', '08:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(234, 'SPSLNT2021122100234', 'pooja', 0, 6, 799, 'SLNT7343277', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '11:09:03 AM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(235, 'SPSLNT2021122100235', 'pooja', 0, 27, 834, 'SLNT7191294', 0, 0, 1, 0.00, '53 Edgedale Plains, #03-02 The Amore', '828692', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '12:03:55 PM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '06:30 PM', '07:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(236, '', 'pooja', 0, 4, 778, 'SLNT542411', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '12:06:27 PM', 'Fri, 28-01-2022', '01', '2022', '28', 'Fri', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(237, '', 'yajman', 0, 22, 985, 'SLNT542411', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '12:37:28 PM', 'Wed, 12-01-2022', '01', '2022', '12', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '10:30:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(238, '', 'yajman', 0, 22, 988, 'SLNT542411', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '13:04:58 PM', 'Thu, 27-01-2022', '01', '2022', '27', 'Thu', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '17:00:00 PM', '17:30:00 PM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(239, '', 'pooja', 0, 1, 963, 'SLNT224288', 0, 0, 1, 0.00, '18-06, The Grange.  1 Grange Garden ', '249631', ' will reimburse taxi fare', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '15:20:25 PM', 'Fri, 24-12-2021', '12', '2021', '24', 'Fri', '09:00 AM', '09:00 AM', 'Pujan samagiri I will prepare myself. Havana I won\'t do.', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(240, '', 'Puja', 0, 20, 866, 'SLNT4083296', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '15:25:41 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(241, 'SPSLNT2021122100241', 'Puja', 0, 20, 865, 'SLNT4616297', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '15:37:58 PM', 'Wed, 22-12-2021', '12', '2021', '22', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:30:00 AM', '09:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(242, 'SPSLNT2021122100242', 'pooja', 0, 7, 819, 'SLNT7170281', 0, 0, 1, 0.00, '383 tanglin Road, 03-07', '247966', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '18:59:24 PM', 'Thu, 23-12-2021', '12', '2021', '23', 'Thu', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(243, '', 'pooja', 0, 1, 963, 'SLNT224288', 0, 0, 1, 0.00, '18-06, The Grange.  1 Grange Garden ', '249631', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '21-12-2021', '19:20:52 PM', 'Fri, 24-12-2021', '12', '2021', '24', 'Fri', '08:30 AM', '09:00 AM', 'I won\'t do any HAVAN. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(244, 'SPSLNT2021122100244', 'pooja', 0, 1, 963, 'SLNT224288', 0, 0, 1, 0.00, '18-06, The Grange.  1 Grange Garden ', '249631', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '21-12-2021', '19:24:55 PM', 'Fri, 24-12-2021', '12', '2021', '24', 'Fri', '08:30 AM', '09:00 AM', 'I won\'t do HAVAN.', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(245, '', 'pooja', 0, 7, 812, 'SLNT7429295', 0, 0, 1, 0.00, '18 Nassim Hill #01-03', '258485', ' will reimburse taxi fare', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '04:04:46 AM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '08:30 AM', '09:00 AM', 'The pooja is also for the child \'s birthday', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(246, '', 'pooja', 0, 27, 829, 'SLNT2910300', 0, 0, 1, 0.00, '370B Alexandra Road', '159955', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '07:22:50 AM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '07:30 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(247, 'SPSLNT2021122200247', 'pooja', 0, 27, 847, 'SLNT2910300', 0, 0, 1, 0.00, '370B Alexandra Road', '159955', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '22-12-2021', '07:30:21 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '09:00 AM', '01:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(248, '', 'pooja', 0, 27, 848, 'SLNT1358266', 1, 42, 1, 0.00, 'Block 276 Unit 08-303', '680276', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '09:05:12 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '03:30 PM', '04:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(249, '', 'pooja', 0, 27, 845, 'SLNT1003302', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '09:43:09 AM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '', '', 'We will not be doing the havan. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(250, 'SPSLNT2021122200250', 'pooja', 0, 27, 830, 'SLNT9818303', 0, 0, 1, 0.00, '#11-390, Block 649', '820649', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '22-12-2021', '14:13:01 PM', 'Mon, 27-12-2021', '12', '2021', '27', 'Mon', '09:30 AM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(251, '', 'pooja', 0, 20, 866, 'SLNT4083296', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '15:19:26 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(252, '', 'Puja', 0, 1, 958, 'SLNT233304', 1, 42, 1, 0.00, '121 Meyer Road. The Makena.# 10-01', '437932', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-12-2021', '18:23:42 PM', 'Tue, 4-01-2022', '01', '2022', '4', 'Tue', '10:00 AM', '11:00 AM', '1 will pay by cash after puja. I have laxmi idol shiv linga and Ganesh idol. Parvati idol also.', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(253, 'SPSLNT2021122300253', 'pooja', 0, 27, 829, 'SLNT9064306', 0, 0, 1, 0.00, 'Unit, 13-03, Lobby A, Le Crescendo Condonium', '409044', ' will reimburse taxi fare', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-12-2021', '09:54:07 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '07:00 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(254, '', 'pooja', 0, 4, 779, 'SLNT777282', 0, 0, 1, 0.00, 'Unit# 06-117,  160B Punggol Central Singapore', '822160', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '23-12-2021', '11:55:38 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '12:30 PM', '02:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(255, 'SPSLNT2021122300255', 'pooja', 0, 4, 775, 'SLNT777282', 0, 0, 1, 0.00, 'Unit# 06-117,  160B Punggol Central Singapore', '822160', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-12-2021', '11:58:46 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '12:00 PM', '02:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(256, 'SPSLNT2021122300256', 'pooja', 0, 20, 866, 'SLNT4083296', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '23-12-2021', '17:47:17 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(257, 'SPSLNT2021122400257', 'pooja', 0, 25, 807, 'SLNT979307', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '05:46:44 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(258, 'SPSLNT2021122400258', 'Puja', 0, 20, 865, 'SLNT8810308', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '09:03:07 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:30:00 AM', '09:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(259, 'SPSLNT2021122400259', 'pooja', 0, 12, 802, 'SLNT7907164', 0, 0, 1, 0.00, 'manoj.jss@gmail.com', '828793', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '09:39:52 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '06:30 AM', '07:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '08:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(260, '', 'pooja', 0, 27, 833, 'SLNT4884310', 0, 0, 1, 0.00, 'West bay condominium ', '128040', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-12-2021', '09:40:53 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '02:30 PM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(261, '', 'pooja', 0, 27, 833, 'SLNT4884310', 0, 0, 1, 0.00, 'West bay condominium ', '128040', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-12-2021', '09:42:57 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '03:00 PM', '03:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(262, 'SPSLNT2021122400262', 'pooja', 0, 27, 833, 'SLNT4884310', 0, 0, 1, 0.00, 'West bay condominium ', '128040', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '09:46:16 AM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '04:00 PM', '04:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(263, 'SPSLNT2021122400263', 'pooja', 0, 43, 1008, 'SLNT1604258', 0, 0, 0, 51.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '10:19:34 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '', '', 'Please inform what are the items I need to bring with me on the day of puja', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(264, 'SPSLNT2021122400264', 'pooja', 0, 7, 813, 'SLNT4641311', 0, 0, 1, 0.00, '20 Pinewood Grove ', '738325', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '11:40:20 AM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '03:00 PM', '07:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(265, 'SPSLNT2021122400265', 'pooja', 0, 27, 852, 'SLNT3412312', 0, 0, 1, 0.00, '26 Bayshore Road, #15-07', '469972', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '11:47:41 AM', 'Sun, 9-01-2022', '01', '2022', '9', 'Sun', '12:00 AM', '12:30 AM', 'Prasaad , fruits and charnaamrit we will prepare and keep ready', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(266, '', 'Puja', 0, 27, 830, 'SLNT5602315', 0, 0, 1, 0.00, 'Bedok Reservoir Rd, Block 605, #03-568', '470605', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '24-12-2021', '14:46:31 PM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(267, 'SPSLNT2021122400267', 'Puja', 0, 27, 830, 'SLNT5602315', 0, 0, 1, 0.00, 'Bedok Reservoir Rd, Block 605, #03-568', '470605', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '14:53:09 PM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(268, 'SPSLNT2021122400268', 'pooja', 0, 6, 798, 'SLNT3108317', 1, 42, 1, 0.00, '1 Siglap road, #03-12, mandarin gardens', '448906', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '16:33:23 PM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '12:00 AM', '12:30 PM', 'Nil', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(269, 'SPSLNT2021122400269', 'pooja', 0, 7, 820, 'SLNT921320', 0, 0, 1, 0.00, '125, Meyer Road, 18-02, Makena, Singapore', '437936', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-12-2021', '19:51:08 PM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '12:00 PM', '02:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, '2022-01-05', '817', 0, 'Yes', 0, 25.00),
(270, '', 'Puja', 0, 20, 864, 'SLNT6296324', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '25-12-2021', '14:09:12 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '08:30:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(271, 'SPSLNT2021122500271', 'pooja', 0, 20, 864, 'SLNT6296324', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-12-2021', '14:12:27 PM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '08:30:00 AM', NULL, NULL, NULL, 0, 'No', 0, 25.00),
(272, '', 'pooja', 0, 39, 886, 'SLNT1856323', 0, 0, 1, 0.00, '0204, 2 Leonie Hill Road', '239192', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '25-12-2021', '16:35:25 PM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '10:00 AM', '10:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(273, 'SPSLNT2021122500273', 'pooja', 0, 39, 886, 'SLNT1856323', 0, 0, 1, 0.00, '0204, 2 Leonie Hill Road', '239192', ' will reimburse taxi fare', 1, 0.00, 0, 21.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-12-2021', '16:38:02 PM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '12:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(274, 'SPSLNT2021122600274', 'Puja', 0, 27, 830, 'SLNT1566328', 0, 0, 1, 0.00, '#06-302, 118 Edgefield Plains ', '820118', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '07:30:56 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(275, '', 'pooja', 0, 27, 836, 'SLNT8087327', 0, 0, 1, 0.00, '04-0,9 8 Geylang east avenue 2', '389757', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-12-2021', '08:00:20 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(276, '', 'pooja', 0, 27, 836, 'SLNT8087327', 0, 0, 1, 0.00, '04-0,9 8 Geylang east avenue 2', '389757', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-12-2021', '08:00:21 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(277, 'SPSLNT2021122600277', 'pooja', 0, 27, 836, 'SLNT8087327', 0, 0, 1, 0.00, '04-09, 8 Geylang East Avenue 2', '389757', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '08:03:13 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(278, 'SPSLNT2021122600278', 'pooja', 0, 7, 819, 'SLNT2930329', 0, 0, 1, 0.00, '06-06 26 Bayshore road, The Bayshore', '469972', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '08:26:23 AM', 'Thu, 20-01-2022', '01', '2022', '20', 'Thu', '09:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(279, '', 'pooja', 0, 31, 926, 'SLNT5768330', 0, 0, 1, 0.00, '05-04, 24 Glasgow Road', '549340', ' will reimburse taxi fare', 0, 0.00, 0, 0.00, 0, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-12-2021', '08:56:55 AM', 'Mon, 3-01-2022', '01', '2022', '3', 'Mon', '09:00 AM', '10:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(280, '', 'pooja', 0, 20, 856, 'SLNT5768330', 1, 40, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-12-2021', '09:07:05 AM', 'Sun, 30-01-2022', '01', '2022', '30', 'Sun', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(281, 'SPSLNT2021122600281', 'Puja', 0, 7, 817, 'SLNT1920331', 0, 0, 1, 0.00, '68 Punggol Walk, unit 14-39', '828784', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '09:28:52 AM', 'Wed, 29-12-2021', '12', '2021', '29', 'Wed', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(282, '', 'Puja', 0, 36, 912, 'SLNT8937335', 0, 0, 0, 0.00, '', '', '', 0, 21.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '26-12-2021', '11:16:10 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '', '', '8am ', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '07:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(283, 'SPSLNT2021122600283', 'pooja', 0, 27, 848, 'SLNT1358266', 1, 42, 1, 0.00, 'Block 276, Choa Chu Kang Avenue 2, 08-303', '680276', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '11:18:15 AM', 'Sat, 29-01-2022', '01', '2022', '29', 'Sat', '03:30 PM', '04:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(284, 'SPSLNT2021122600284', 'Puja', 0, 25, 806, 'SLNT1566328', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '12:44:00 PM', 'Mon, 17-01-2022', '01', '2022', '17', 'Mon', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(285, 'SPSLNT2021122600285', 'pooja', 0, 27, 839, 'SLNT4566198', 0, 0, 1, 0.00, 'BLK 114 BUKIT PURMEI ROAD', '090114', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '17:07:09 PM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '07:30 AM', '08:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(286, 'SPSLNT2021122600286', 'pooja', 0, 27, 840, 'SLNT7137223', 0, 0, 1, 0.00, 'Unit 08-353', '560114', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '26-12-2021', '19:14:10 PM', 'Thu, 30-12-2021', '12', '2021', '30', 'Thu', '12:00 PM', '02:00 PM', 'Please contact 97726432, if needed. Pandit jee let be at my place by 12:05 PM latest.', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, '2022-01-13', '839', 0, 'Yes', 0, 25.00);
INSERT INTO `slnt_booking_slot` (`id`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `catering_items`, `cate_description`, `lunch`, `dinner`, `refeshments`, `tot_lunch`, `lunch_member`, `tot_dinner`, `dinner_member`, `tot_refreshment`, `refreshment_member`, `status`, `create_date`, `create_time`, `sel_date`, `m`, `y`, `d`, `day`, `time_range_from`, `time_range_to`, `note_for_temple`, `member_price`, `non_member_price`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `pooja_time_from`, `pooja_time_to`, `cancledattime`, `req_date`, `req_time`, `req_status`, `booking_for`, `membership_status`, `sel_priest_rs`) VALUES
(287, 'SPSLNT2021122700287', 'pooja', 0, 27, 848, 'SLNT7679339', 0, 0, 1, 0.00, '#11-03, Prive\', 31 Punggol Field', '828816', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-12-2021', '09:57:23 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '03:30 PM', '04:00 PM', 'Pls let me know what I need to prepare/arrange.  Thank you.', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(288, '', 'pooja', 0, 4, 777, 'SLNT542411', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-12-2021', '11:17:02 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '', '', 'test', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '15:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(289, '', 'yajman', 0, 22, 991, 'SLNT542411', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-12-2021', '11:19:01 AM', 'Sat, 5-03-2022', '03', '2022', '5', 'Sat', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '10:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(290, '', 'yajman', 0, 22, 981, 'SLNT542411', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-12-2021', '12:25:00 PM', 'Mon, 31-01-2022', '01', '2022', '31', 'Mon', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '10:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(291, '', 'pooja', 0, 4, 779, 'SLNT542411', 1, 40, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-12-2021', '12:26:02 PM', 'Sat, 29-01-2022', '01', '2022', '29', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(292, '', 'pooja', 0, 25, 925, 'SLNT5851341', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '27-12-2021', '12:57:18 PM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', '2022/01/01 08:04:32 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(293, 'SPSLNT2021122700293', 'Puja', 0, 27, 832, 'SLNT6751342', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-12-2021', '13:45:24 PM', 'Tue, 28-12-2021', '12', '2021', '28', 'Tue', '', '', 'If can do earlier around 11 am', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(294, 'SPSLNT2021122700294', 'Puja', 0, 7, 828, 'SLNT2861344', 0, 0, 1, 0.00, '42 Mount Vernon Road, #03-34', '368061', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-12-2021', '14:42:11 PM', 'Sun, 23-01-2022', '01', '2022', '23', 'Sun', '11:00 AM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(295, 'SPSLNT2021122700295', 'pooja', 0, 27, 830, 'SLNT291345', 0, 0, 1, 0.00, '09-25, 9 Leedon heights', '267954', ' will reimburse taxi fare', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '27-12-2021', '16:05:14 PM', 'Mon, 10-01-2022', '01', '2022', '10', 'Mon', '09:30 AM', '12:00 PM', 'We want to perform satyanarayan pooja at home', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(296, '', 'pooja', 0, 27, 848, 'SLNT1056255', 0, 0, 1, 0.00, 'Blk 119,  ho ching road,  #07-117', '610119', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '27-12-2021', '16:53:56 PM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '03:00 PM', '03:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(297, 'SPSLNT2021122800297', 'Puja', 0, 1, 958, 'SLNT3411348', 0, 0, 1, 0.00, '2 leonie hill road ,16-06', '239192', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '07:44:18 AM', 'Tue, 11-01-2022', '01', '2022', '11', 'Tue', '04:00 PM', '03:00 PM', 'Pls bring everything if except fruit and flowers ', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(298, 'SPSLNT2021122800298', 'pooja', 0, 27, 848, 'SLNT1056255', 0, 0, 1, 0.00, 'Blk 119,  ho ching road,  #07-117', '610119', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '09:37:00 AM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '03:00 PM', '03:30 PM', 'If possible please ask Mishra ji to help us to do our pooja. It\'s our humble request please.  I try to book but can\'t choose in options.  \r\nThanks. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(299, 'SPSLNT2021122800299', 'pooja', 0, 25, 806, 'SLNT9760350', 1, 40, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '11:05:43 AM', 'Mon, 24-01-2022', '01', '2022', '24', 'Mon', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(300, '', 'pooja', 0, 20, 856, 'SLNT6416139', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '28-12-2021', '11:11:35 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(301, 'SPSLNT2021122800301', 'pooja', 0, 20, 856, 'SLNT6416139', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '11:14:47 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(302, 'SPSLNT2021122800302', 'pooja', 0, 1, 964, 'SLNT8724351', 1, 40, 1, 0.00, '130 Tanjong Rhu Road. Pebble Bay Lobby R 07-25', '436918', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '11:39:49 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '10:00 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(303, 'SPSLNT2021122800303', 'pooja', 0, 27, 830, 'SLNT9349193', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '17:54:50 PM', 'Mon, 14-03-2022', '03', '2022', '14', 'Mon', '', '', 'did not find slot other than 10 am , preferable slot evening 4 pm onwards', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(304, 'SPSLNT2021122800304', 'pooja', 0, 20, 869, 'SLNT2130356', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '28-12-2021', '20:14:51 PM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '', '', 'Please use trimmer for the mundan', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(305, '', 'Puja', 0, 33, 918, 'SLNT9971357', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '06:15:21 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '20:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(306, 'SPSLNT2021122900306', 'pooja', 0, 3, 74, 'SLNT949358', 0, 0, 1, 0.00, 'Block 631, #08-226, Senja Road, Bukit Panjang', '670631', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-12-2021', '07:47:53 AM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '09:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(307, 'SPSLNT2021122900307', 'pooja', 0, 7, 824, 'SLNT8261360', 0, 0, 1, 0.00, 'mancee.c19@gmail.com', '479249', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-12-2021', '08:30:46 AM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '03:30 PM', '06:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(308, '', 'pooja', 0, 6, 799, 'SLNT3870363', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '09:26:25 AM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(309, '', 'pooja', 0, 2, 793, 'SLNT3870363', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '09:38:48 AM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(310, '', 'pooja', 0, 6, 799, 'SLNT3870363', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '11:08:04 AM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '', '', 'Please advise on how much for pooja and havan - website link not showing. ', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(311, '', 'pooja', 0, 4, 779, 'SLNT542411', 1, 42, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '11:41:36 AM', 'Sat, 29-01-2022', '01', '2022', '29', 'Sat', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(312, 'SPSLNT2021122900312', 'pooja', 0, 27, 842, 'SLNT5207361', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-12-2021', '11:45:10 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(313, '', 'pooja', 0, 9, 197, 'SLNT542411', 0, 0, 1, 0.00, 'fgbdb', '332001', 'I will pick up priest', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '11:55:19 AM', 'Wed, 12-01-2022', '01', '2022', '12', 'Wed', '12:30 AM', '12:30 AM', 'dvggv', 21.00, 21.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(314, '', 'pooja', 0, 43, 1010, 'SLNT542411', 0, 0, 1, 51.00, 'jbhvu', '250004', 'I will pick up priest', 1, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '29-12-2021', '11:57:46 AM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '12:30 AM', '12:30 AM', 'jkn', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '13:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(315, 'SPSLNT2021122900315', 'pooja', 0, 20, 866, 'SLNT7646364', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '29-12-2021', '13:44:36 PM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '', '', 'Requesting to arrange for  Razor (Ustraa) cutting for my son Vihaan Sharma. He is 2 Yr +. We are punjabi Hindus.', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(316, 'SPSLNT2021123000316', 'pooja', 0, 7, 821, 'SLNT2896367', 0, 0, 1, 0.00, '49 saraca road', '807393', 'I will pick up priest', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-12-2021', '07:00:33 AM', 'Thu, 13-01-2022', '01', '2022', '13', 'Thu', '01:00 PM', '01:30 PM', 'Pick up at 1.15', 35.00, 51.00, '0', '0', 0.00, 0.00, '14:00:00 PM', '16:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(317, 'SPSLNT2021123000317', 'Puja', 0, 5, 789, 'SLNT1335104', 1, 42, 1, 0.00, 'BLOCK 770 PASIR RIS STREET 71 #08-346 ', '510770', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-12-2021', '15:43:39 PM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '02:30 PM', '06:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(318, 'SPSLNT2021123000318', 'pooja', 0, 27, 845, 'SLNT1003302', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '30-12-2021', '19:06:16 PM', 'Fri, 7-01-2022', '01', '2022', '7', 'Fri', '', '', 'We will just perform the katha, not the havan', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(319, '', 'pooja', 0, 1, 965, 'SLNT5851341', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '31-12-2021', '06:36:41 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', '2022/01/01 08:04:27 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(320, '', 'pooja', 0, 25, 925, 'SLNT5851341', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 3, '31-12-2021', '06:38:58 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', '2022/01/01 08:04:22 AM', NULL, NULL, 0, 'Yes', 0, 25.00),
(321, '', 'Puja', 0, 27, 852, 'SLNT7501375', 1, 42, 1, 0.00, '22 Simei Street 1, Melville Park, 01-10 Unit', '529945', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '31-12-2021', '08:45:40 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '11:30 AM', '03:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(322, 'SPSLNT2021123100322', 'Puja', 0, 7, 817, 'SLNT5353225', 1, 42, 1, 0.00, '201 Tanjong Rhu Road, unit 01-01', '436917', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '31-12-2021', '09:23:58 AM', 'Wed, 26-01-2022', '01', '2022', '26', 'Wed', '11:30 AM', '12:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(323, '', 'pooja', 0, 5, 788, 'SLNT721378', 0, 0, 1, 0.00, '12 mount elizabeth', '228511', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '31-12-2021', '13:42:17 PM', 'Tue, 11-01-2022', '01', '2022', '11', 'Tue', '03:30 PM', '05:30 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '17:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(324, 'SPSLNT2021123100324', 'pooja', 0, 5, 788, 'SLNT721378', 0, 0, 1, 0.00, '03-02, 12 mount elizabeth', '228511', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '31-12-2021', '13:55:23 PM', 'Tue, 11-01-2022', '01', '2022', '11', 'Tue', '03:30 PM', '06:00 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '17:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(325, 'SPSLNT2022010100325', 'pooja', 0, 1, 966, 'SLNT5851341', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '01-01-2022', '13:36:49 PM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '', '', 'This is for my mother\'s 75th birthday and I want to do pooja for her better health and grihashanti. Pls suggest appropriate pooja for the same.', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(326, '', 'pooja', 0, 1, 966, 'SLNT9996212', 1, 42, 1, 0.00, '11 sengkang Square, 03-31 Compass Heights Lobby D', '545076', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '01-01-2022', '19:40:51 PM', 'Sun, 9-01-2022', '01', '2022', '9', 'Sun', '07:30 AM', '08:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(327, 'SPSLNT2022010200327', 'pooja', 0, 25, 924, 'SLNT2207385', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-01-2022', '09:03:08 AM', 'Sat, 8-01-2022', '01', '2022', '8', 'Sat', '', '', '', 160.00, 202.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(328, 'SPSLNT2022010200328', 'Puja', 0, 1, 962, 'SLNT7213380', 0, 0, 1, 0.00, 'Tanglin park ', '248467', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-01-2022', '10:02:05 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '03:00 PM', '03:30 PM', 'Please give us a priest who brings positive energy can explain some things in English and doesn’t rush. My husband is a foreigner and a deep believer of Hinduism ', 35.00, 51.00, '0', '0', 0.00, 0.00, '16:00:00 PM', '18:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(329, '', 'pooja', 0, 27, 847, 'SLNT5828387', 0, 0, 1, 0.00, '16 strling road queens Condominium queenstown ', '148957', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 0, '02-01-2022', '10:13:38 AM', 'Sat, 22-01-2022', '01', '2022', '22', 'Sat', '09:00 AM', '09:30 AM', 'Nothing', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(330, 'SPSLNT2022010200330', 'pooja', 0, 3, 60, 'SLNT4066386', 0, 0, 1, 0.00, '132 Tanjong Rhu Road, Pebble Bay, Lobby G, 0506', '436919', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-01-2022', '11:28:39 AM', 'Tue, 1-02-2022', '02', '2022', '1', 'Tue', '12:00 AM', '12:30 AM', 'Pooja for starting school education ', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(331, 'SPSLNT2022010200331', 'Puja', 0, 27, 836, 'SLNT8737391', 0, 0, 0, 0.00, '', '', '', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '02-01-2022', '18:09:23 PM', 'Wed, 12-01-2022', '01', '2022', '12', 'Wed', '', '', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:00:00 PM', '14:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(332, 'SPSLNT2022010300332', 'pooja', 0, 27, 834, 'SLNT1531395', 0, 0, 1, 0.00, '14-168,blk 210B,compassvale lane,sengkang', '542210', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '07:56:29 AM', 'Tue, 4-01-2022', '01', '2022', '4', 'Tue', '06:30 PM', '07:00 PM', 'Please come tomorrow tuesday with puja samagri .i will pay for puja samagri to priest\r\npuja time 6 o clk onwards.my hand phone no is 90367453.(name is subha)', 35.00, 51.00, '0', '0', 0.00, 0.00, '19:00:00 PM', '21:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(333, 'SPSLNT2022010300333', 'pooja', 0, 27, 852, 'SLNT1965349', 0, 0, 1, 0.00, '#03-02', '679051', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '07:56:59 AM', 'Sun, 16-01-2022', '01', '2022', '16', 'Sun', '12:00 PM', '12:30 PM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '12:30:00 PM', '14:30:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(334, 'SPSLNT2022010300334', 'pooja', 0, 20, 865, 'SLNT7822397', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '08:38:06 AM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '', '', '', 121.00, 151.00, '0', '0', 0.00, 0.00, '08:30:00 AM', '09:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(335, 'SPSLNT2022010300335', 'pooja', 0, 20, 866, 'SLNT5044393', 1, 42, 1, 0.00, '8 Margate Rd,unit 1702', '438049', ' will reimburse taxi fare', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '10:37:23 AM', 'Wed, 12-01-2022', '01', '2022', '12', 'Wed', '10:00 AM', '11:00 AM', 'Hope there will be barber accompanying the priest as we have not arranged for it. ', 121.00, 151.00, '0', '0', 0.00, 0.00, '09:00:00 AM', '09:30:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(336, 'SPSLNT2022010300336', 'pooja', 0, 27, 839, 'SLNT5632399', 0, 0, 1, 0.00, 'Pebble bay unit 14-12 Tanjong Rhu ', '436918', ' will reimburse taxi fare', 0, 61.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '11:30:34 AM', 'Thu, 6-01-2022', '01', '2022', '6', 'Thu', '07:30 AM', '08:00 AM', 'We are looking for Sri Satyanarayan Bhagwan Katha and Havan both, please advise panditji accordingly ', 35.00, 51.00, '0', '0', 0.00, 0.00, '08:00:00 AM', '10:00:00 AM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00),
(337, 'SPSLNT2022010300337', 'pooja', 0, 24, 995, 'SLNT5784400', 1, 40, 1, 0.00, 'One Finlayson Green, #09-01', '049246', ' will reimburse taxi fare', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0, 0, 0.00, 0, 0.00, 0, 0.00, 0, 1, '03-01-2022', '12:21:05 PM', 'Wed, 5-01-2022', '01', '2022', '5', 'Wed', '10:00 AM', '11:00 AM', '', 35.00, 51.00, '0', '0', 0.00, 0.00, '10:00:00 AM', '12:00:00 PM', NULL, NULL, NULL, 0, 'Yes', 0, 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_booking_slot_offline`
--

CREATE TABLE `slnt_booking_slot_offline` (
  `id` int(11) NOT NULL,
  `name_title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobleno` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `u_city` varchar(255) DEFAULT NULL,
  `u_postalcode` varchar(255) DEFAULT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `member_price` decimal(10,2) NOT NULL,
  `non_member` decimal(10,2) NOT NULL,
  `pooja_amount` decimal(10,2) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `booking_id` varchar(255) NOT NULL,
  `puja_type` int(11) NOT NULL DEFAULT '0',
  `priest_id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `m` varchar(25) NOT NULL,
  `y` varchar(25) NOT NULL,
  `d` varchar(25) NOT NULL,
  `day` varchar(25) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `pre_priest` int(11) NOT NULL,
  `sel_priest` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `venue_amount` decimal(10,2) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `picup` varchar(255) NOT NULL,
  `puja_samagri` int(11) NOT NULL,
  `pooja_samagri_amt` decimal(10,2) NOT NULL,
  `havan_samagri` int(11) NOT NULL,
  `havan_samagri_amt` decimal(10,2) NOT NULL,
  `bhog_prasad` int(11) NOT NULL,
  `bhog_prasad_amt` decimal(10,2) NOT NULL,
  `catering` int(11) NOT NULL,
  `catering_items` text,
  `lunch` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `refeshments` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `sel_date` varchar(50) NOT NULL,
  `amounttobepay` decimal(10,2) NOT NULL,
  `con_status` int(11) NOT NULL,
  `booking_created_by` varchar(255) DEFAULT NULL,
  `time_range_to` varchar(255) NOT NULL,
  `time_range_from` varchar(255) NOT NULL,
  `note_for_temple` text NOT NULL,
  `booking_for` varchar(10) NOT NULL,
  `membership_status` int(11) NOT NULL,
  `cate_description` text,
  `sel_priest_rs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_booking_slot_offline`
--

INSERT INTO `slnt_booking_slot_offline` (`id`, `name_title`, `name`, `last_name`, `mobleno`, `email`, `u_city`, `u_postalcode`, `u_address`, `member_price`, `non_member`, `pooja_amount`, `title`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `m`, `y`, `d`, `day`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `catering_items`, `lunch`, `dinner`, `refeshments`, `status`, `create_date`, `create_time`, `sel_date`, `amounttobepay`, `con_status`, `booking_created_by`, `time_range_to`, `time_range_from`, `note_for_temple`, `booking_for`, `membership_status`, `cate_description`, `sel_priest_rs`) VALUES
(1, 'Mr', 'sohan', 'veer', '36275502', 'sohanveer152@gmail.com', 'meerut', '250001', '134 nangla tashi\r\nkanker khera meerut', 35.00, 51.00, 35.00, 'ANNAPRASHANA', 'SLNTEMPLE1', 0, 0, 4, 20, '05', '2021', '17', 'Mon', '', 1, 45, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '07-05-2021', '14:34:35 PM', '', 60.00, 1, 'info@slnt.com', '', '', 'testing', 'Yes', 1, NULL, 25.00),
(2, 'Mr', 'Shrey', 'Rastogi', '10024440', 'shrey.rastogi1995@gmail.com', 'delhi', '110075', 'B-6 Bandhu Vihar\r\nPlot-11, sec-10 Dwarka', 35.00, 51.00, 35.00, 'HARIDARA LEPON', '', 0, 0, 8, 261, '08', '2021', '31', 'Tue', '', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '', '', '', 0.00, 0, 'info@slnt.com', '', '', '', 'Yes', 1, NULL, 25.00),
(3, 'Mr', 'Shrey', 'Rastogi', '10024440', 'shrey.rastogi1995@gmail.com', 'delhi', '110075', 'B-6 Bandhu Vihar\r\nDwarka', 35.00, 51.00, 35.00, 'Ayush Pooja', 'SLNTEMPLE3', 0, 0, 3, 72, '08', '2021', '27', 'Fri', '', 1, 44, 0, 0.00, '', '', '', 0, 61.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '03-08-2021', '17:00:21 PM', '', 121.00, 1, 'info@slnt.com', '', '', 'jbvkb', 'Yes', 1, NULL, 25.00),
(4, 'Madam', 'vandana', 'badole', '98692430', 'vandanabadole25@gmail.com', 'singapore', '546923', 'the santorini', 21.00, 21.00, 21.00, 'Bhojan', '', 0, 0, 9, 197, '08', '2021', '11', 'Wed', '', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '', '', '', 0.00, 0, 'info@slnt.com', '', '', 'uu', 'Yes', 1, NULL, 25.00),
(5, 'Madam', 'ZZ', 'm', '552525', 'myintmyintzanster@gmail.com', '123456', '123456', '135', 35.00, 51.00, 51.00, 'Annaprashana', 'SLNTEMPLE5', 0, 0, 4, 39, '09', '2021', '30', 'Thu', '', 1, 44, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '24-09-2021', '09:59:51 AM', '', 76.00, 1, 'info@slnt.com', '', '', '', 'Yes', 0, NULL, 25.00),
(6, 'Miss', 'ZZ', 'm', '552525', 'myintmyintzanster@gmail.com', '123456', '123456', '135', 35.00, 51.00, 35.00, 'Annaprashana', 'SLNTEMPLE6', 0, 0, 4, 37, '09', '2021', '30', 'Thu', '', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '24-09-2021', '10:01:05 AM', '', 35.00, 1, 'info@slnt.com', '', '', 'fgfdgfdsg', 'Yes', 1, NULL, 25.00),
(7, 'Miss', 'Zan', 'Zan', '12345678', 'ms.myintzan@gmail.com', 'Yangon', '123456', '1231', 35.00, 51.00, 35.00, 'Annaprashana', 'SLNTEMPLE7', 0, 0, 4, 40, '10', '2021', '8', 'Fri', '', 1, 44, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '27-09-2021', '08:42:55 AM', '', 60.00, 1, 'info@slnt.com', '', '', '', 'No', 1, NULL, 25.00),
(8, 'Mr', 'Shrey', 'Rastogi', '10024440', 'info@blubrandzglobal.in', 'delhi', '110075', 'B-6 Bandhu Vihar\r\nDwarka', 35.00, 51.00, 35.00, 'Annaprashana', 'SLNTEMPLE8', 0, 0, 4, 776, '11', '2021', '30', 'Tue', '', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', 0, 0, 0, 0, '22-11-2021', '12:24:39 PM', '', 35.00, 1, 'admin@spslnt.org.sg', '', '', '', 'Yes', 1, NULL, 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_catering_menus`
--

CREATE TABLE `slnt_catering_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_items` text,
  `days` varchar(255) DEFAULT NULL,
  `create_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` text,
  `additional` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slnt_catering_menus`
--

INSERT INTO `slnt_catering_menus` (`id`, `menu_name`, `menu_items`, `days`, `create_date_time`, `price`, `additional`) VALUES
(4, 'Menu 1 (Sunday Gupt Donation)', '<p>Rice, Daal, Achar, 1 Vegetable (optional with no Paneer sabzi)&nbsp;</p>', '[\"Sun\"]', '2021-05-21 07:33:00', '[{\"no_of_pax\":\"150\",\"mem_price\":\"601\",\"none_mem_price\":\"601\"}]', '[]'),
(5, 'Menu 2', '<p>Rice<br />\r\nPuri<br />\r\nBhatura<br />\r\nAloo Ghobi or&nbsp;<br />\r\nMix Vegetables or&nbsp;<br />\r\nSoya Aloo<br />\r\nMix Daal or<br />\r\nMoong Ki Daal or&nbsp;<br />\r\nChanna&nbsp;<br />\r\nHalwa or&nbsp;<br />\r\nKheer</p>', '[\"Sun\"]', '2021-05-21 07:37:57', '[{\"no_of_pax\":\"250\",\"mem_price\":\"1400\",\"none_mem_price\":\"1600\"},{\"no_of_pax\":\"300\",\"mem_price\":\"1680\",\"none_mem_price\":\"1880\"},{\"no_of_pax\":\"350\",\"mem_price\":\"1960\",\"none_mem_price\":\"2160\"},{\"no_of_pax\":\"400\",\"mem_price\":\"2240\",\"none_mem_price\":\"2440\"}]', '[{\"item_name\":\"Aloo Jeera\",\"item_price\":\"101\"},{\"item_name\":\"Aloo Methi \",\"item_price\":\"101\"},{\"item_name\":\"Aloo Palak\",\"item_price\":\"151\"},{\"item_name\":\"Palak Paneer\",\"item_price\":\"201\"},{\"item_name\":\"Volunteer Tea & Pakoras\",\"item_price\":\"151\"}]'),
(6, 'Menu 3', '<p>Puri or Bhatura&nbsp;</p>\r\n\r\n<p>Mix Dal or Moong ki dal or Chnna</p>\r\n\r\n<p>Aloo Gobhi or mix Vegetables \\</p>\r\n\r\n<p>Rice</p>\r\n\r\n<p>Halwa or kheer</p>\r\n\r\n<p>Achar</p>', '[\"Sun\"]', '2021-05-21 07:54:26', '[{\"no_of_pax\":\"250\",\"mem_price\":\"1600\",\"none_mem_price\":\"1700\"},{\"no_of_pax\":\"300\",\"mem_price\":\"1800\",\"none_mem_price\":\"2000\"},{\"no_of_pax\":\"350\",\"mem_price\":\"2100\",\"none_mem_price\":\"2300\"},{\"no_of_pax\":\"400\",\"mem_price\":\"2300\",\"none_mem_price\":\"2600\"}]', '[{\"item_name\":\"Aloo Jeera\",\"item_price\":\"101\"},{\"item_name\":\"Aloo Methi\",\"item_price\":\"101\"},{\"item_name\":\"Aloo Palak\",\"item_price\":\"151\"},{\"item_name\":\"Palak Paneer\",\"item_price\":\"201\"},{\"item_name\":\"Tea & Pakoras\",\"item_price\":\"151\"}]'),
(7, 'Menu 4', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', '[\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"]', '2021-05-24 05:45:18', '[{\"no_of_pax\":\"100\",\"mem_price\":\"601\",\"none_mem_price\":\"652\"}]', '[]'),
(8, 'Menu 5', '<p>Rice<br />\r\nMix vegetable</p>', '[\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"]', '2021-05-24 05:46:44', '[{\"no_of_pax\":\"50\",\"mem_price\":\"151\",\"none_mem_price\":\"151\"}]', '[]'),
(9, 'Menu 6', '<p>Tea</p>\r\n\r\n<p>Pakora</p>', '[\"Tue\"]', '2021-05-24 05:47:19', '[{\"no_of_pax\":\"50\",\"mem_price\":\"101\",\"none_mem_price\":\"101\"}]', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies`
--

CREATE TABLE `slnt_ceremonies` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `venue_price` decimal(10,2) NOT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `non_member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(11) NOT NULL DEFAULT '0',
  `kalash_sthapna` int(11) NOT NULL DEFAULT '0',
  `gotra_sankalp` int(11) NOT NULL DEFAULT '0',
  `preeti_bhoge` int(11) NOT NULL DEFAULT '0',
  `light_meal` int(11) NOT NULL DEFAULT '0',
  `catering_menu` int(11) NOT NULL DEFAULT '0',
  `yajmans` int(11) NOT NULL DEFAULT '0',
  `refreshment` int(11) NOT NULL DEFAULT '0',
  `temple_charges` int(11) NOT NULL DEFAULT '0',
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `update_date` varchar(100) DEFAULT NULL,
  `update_time` varchar(100) DEFAULT NULL,
  `solomnization` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_ceremonies`
--

INSERT INTO `slnt_ceremonies` (`id`, `description_charge`, `puja_type`, `venue_price`, `member_price`, `non_member_price`, `status`, `kalash_sthapna`, `gotra_sankalp`, `preeti_bhoge`, `light_meal`, `catering_menu`, `yajmans`, `refreshment`, `temple_charges`, `create_date`, `create_time`, `update_date`, `update_time`, `solomnization`) VALUES
(1, 'Yagyopaveet', 'Puja', 0.00, 152.00, 202.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '02 Aug, 2021', '06:06:59 PM', NULL, NULL, 0),
(2, 'Wedding', 'Puja', 0.00, 202.00, 213.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '02 Aug, 2021', '06:06:03 PM', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies_bhog_prasad`
--

CREATE TABLE `slnt_ceremonies_bhog_prasad` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `bhog_prasad_title` varchar(255) DEFAULT NULL,
  `bhog_prasad_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies_catering`
--

CREATE TABLE `slnt_ceremonies_catering` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `catering_type` varchar(75) NOT NULL,
  `catering_title` varchar(255) DEFAULT NULL,
  `catering_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies_samagri`
--

CREATE TABLE `slnt_ceremonies_samagri` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `samagri_type` varchar(100) DEFAULT NULL,
  `samagri_title` varchar(255) DEFAULT NULL,
  `samagri_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `unit_of_measurement` varchar(20) NOT NULL,
  `measurement` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_ceremonies_samagri`
--

INSERT INTO `slnt_ceremonies_samagri` (`id`, `puja_id`, `samagri_type`, `samagri_title`, `samagri_price`, `create_date`, `create_time`, `unit_of_measurement`, `measurement`) VALUES
(3, 2, 'Puja Samagri', 'Yoghurt ', 0.00, '21 Jun, 2021', '06:02:38 AM', 'Gram', 100.00),
(4, 2, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:02:22 AM', 'Kg', 0.50),
(5, 2, 'Puja Samagri', 'Honey', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 50.00),
(6, 2, 'Puja Samagri', 'Yellow Rice', 0.00, '1 May, 2021', '11:02:11 AM', 'Kg', 2.00),
(7, 2, 'Puja Samagri', 'Puffed (Purified Rice)  ', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 200.00),
(8, 2, 'Puja Samagri', 'Dry wood of Mango ', 0.00, '1 May, 2021', '11:01:21 AM', 'Kg', 2.00),
(9, 2, 'Puja Samagri', 'Kund ', 0.00, '1 May, 2021', '1:17:21 PM', 'P (Pieces)', 1.00),
(10, 2, 'Puja Samagri', 'Camphor (Big)', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(11, 2, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 2.00),
(12, 2, 'Puja Samagri', 'Bowl ', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(13, 2, 'Puja Samagri', 'Spoons', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(14, 2, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(15, 2, 'Puja Samagri', 'Plate (big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(16, 2, 'Puja Samagri', 'Holy Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 2.00),
(17, 2, 'Puja Samagri', 'Sandal (small)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(18, 2, 'Puja Samagri', 'Kumkum (small)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(19, 2, 'Puja Samagri', 'Sindoor (small)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(20, 2, 'Puja Samagri', 'Turmeric powder (small)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(21, 2, 'Puja Samagri', 'Big Angochha', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(22, 2, 'Puja Samagri', 'Cloths Yellow', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 2.00),
(23, 2, 'Puja Samagri', 'Cloths Red ', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(24, 2, 'Puja Samagri', 'Sweets ', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(25, 2, 'Puja Samagri', 'Fruits', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 2.00),
(26, 2, 'Puja Samagri', 'Leaves of betel', 0.00, '1 May, 2021', '11:01:21 AM', 'P (Pieces)', 20.00),
(27, 2, 'Puja Samagri', 'Loose Flowers', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 30.00),
(28, 2, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(29, 2, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(30, 2, 'Puja Samagri', 'Green grass, Esau’s leaves ', 0.00, '1 May, 2021', '11:02:27 AM', 'Box', 1.00),
(31, 2, 'Puja Samagri', 'Scared thread', 0.00, '1 May, 2021', '11:02:27 AM', 'Pairs', 2.00),
(32, 2, 'Puja Samagri', 'Mango leaves', 0.00, '1 May, 2021', '11:02:27 AM', 'Bundle', 2.00),
(33, 2, 'Puja Samagri', 'Garland  (for Jaimal)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 2.00),
(34, 2, 'Puja Samagri', 'Cloths (for bridge & groom)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pairs', 1.00),
(35, 2, 'Puja Samagri', 'Donate cow by bride & Religious teacher', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 2.00),
(36, 2, 'Puja Samagri', 'Takhpath by older brother of groom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(37, 2, 'Puja Samagri', 'Cloth for Covered head  ', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(38, 2, 'Puja Samagri', 'Stone for Shilaarohan', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(39, 2, 'Puja Samagri', 'Kalash (for Dwarpooja or welcome)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(40, 2, 'Puja Samagri', 'Kalash (for marriage)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 2.00),
(41, 2, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 2.00),
(42, 2, 'Puja Samagri', 'Betel nut', 10.00, '13 Jul, 2021', '06:11:41 PM', 'P (Pieces)', 15.00),
(43, 1, 'Puja Samagri', 'Sandal', 0.00, '1 May, 1011', '11:01:11 AM', 'Gram', 50.00),
(44, 1, 'Puja Samagri', 'Kumkum (small)', 0.00, '1 May, 1011', '1:17:31 PM', 'Gram', 50.00),
(45, 1, 'Puja Samagri', 'Turmeric powder (small)', 0.00, '1 May, 1011', '1:17:31 PM', 'Gram', 250.00),
(46, 1, 'Puja Samagri', 'Abir ', 0.00, '1 May, 1011', '1:17:31 PM', 'Gram', 50.00),
(47, 1, 'Puja Samagri', 'Cloths Yellow', 0.00, '1 May, 1011', '1:17:31 PM', 'M (Meter)', 2.00),
(48, 1, 'Puja Samagri', 'Cloths Red ', 0.00, '1 May, 1011', '1:17:31 PM', 'M (Meter)', 1.00),
(49, 1, 'Puja Samagri', 'Holy Thread  ', 0.00, '1 May, 1011', '1:17:31 PM', 'Bundle', 4.00),
(50, 1, 'Puja Samagri', 'Kalalsh  ', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 2.00),
(51, 1, 'Puja Samagri', 'Big Clay lamp  ', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 1.00),
(52, 1, 'Puja Samagri', 'Big Kosa & Dhakani', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 3.00),
(53, 1, 'Puja Samagri', 'Camphor (Big)', 0.00, '1 May, 1011', '11:01:11 AM', 'Box', 1.00),
(54, 1, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 1011', '11:01:11 AM', 'P (Pieces)', 40.00),
(55, 1, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 1011', '11:01:11 AM', 'P (Pieces)', 40.00),
(56, 1, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 1011', '11:01:17 AM', 'P (Pieces)', 40.00),
(57, 1, 'Puja Samagri', 'Incense Stick, Match', 0.00, '1 May, 1011', '11:01:10 AM', 'P (Pieces)', 1.00),
(58, 1, 'Puja Samagri', 'Panchamrit  (Honey, Milk, Yogurt, Ganga-water, Ghee)', 0.00, '1 May, 1011', '11:01:10 AM', 'Gram', 100.00),
(59, 1, 'Puja Samagri', 'Panchgavya (Urine, Dung, Ghee, Milk, Yogurt) (Mixed)', 0.00, '1 May, 1011', '11:01:10 AM', 'Gram', 20.00),
(60, 1, 'Puja Samagri', 'Ganga Water (small)', 0.00, '1 May, 1011', '11:01:1 AM', 'Pkts', 1.00),
(61, 1, 'Puja Samagri', 'Five leaves (Peepal, Banyan, Fig, Mango, Pluksh)', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 5.00),
(62, 1, 'Puja Samagri', 'Saptdhanya, Saptmritika Sarvaushadhi, ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 2.00),
(63, 1, 'Puja Samagri', 'Five Jewels (Diamond, Pearl, Lahasuniyaa, Yellow Sapphire, Indraneel), ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 1.00),
(64, 1, 'Puja Samagri', 'Mooj Mekhala ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 1.00),
(65, 1, 'Puja Samagri', 'Small black board ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 1.00),
(66, 1, 'Puja Samagri', 'Wood sleeper ', 0.00, '1 May, 1011', '11:01:1 AM', 'Pairs', 1.00),
(67, 1, 'Puja Samagri', 'Stool or Chair  ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 1.00),
(68, 1, 'Puja Samagri', 'Bastard plant, Esau’s leaves(each)', 0.00, '1 May, 1011', '11:01:1 AM', 'Bundle', 1.00),
(69, 1, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 3.00),
(70, 1, 'Puja Samagri', 'Sacred Thread ', 0.00, '1 May, 1011', '11:01:1 AM', 'Pairs', 18.00),
(71, 1, 'Puja Samagri', 'Big Plate ', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 2.00),
(72, 1, 'Puja Samagri', 'Dry woods of Mango', 0.00, '1 May, 1011', '11:01:1 AM', 'Kg', 2.00),
(73, 1, 'Puja Samagri', 'Dry dung of Cow', 0.00, '1 May, 1011', '11:01:1 AM', 'P (Pieces)', 8.00),
(74, 1, 'Puja Samagri', 'Big Cloth or Gamachha ', 0.00, '1 May, 1011', '11:01:11 AM', 'P (Pieces)', 8.00),
(75, 1, 'Puja Samagri', 'Begging (for yellow cloth)  ', 0.00, '1 May, 1011', '11:01:1 AM', 'M (Meter)', 100.00),
(76, 1, 'Puja Samagri', 'Yellow Umbrella', 0.00, '1 May, 1011', '11:01:11 AM', 'P (Pieces)', 1.00),
(77, 1, 'Puja Samagri', 'Clarified butter ', 0.00, '1 May, 1011', '1:17:11 PM', 'Kg', 1.00),
(78, 1, 'Puja Samagri', 'Fruits, Sweets, (five types) ', 0.00, '1 May, 1011', '1:17:31 PM', 'Box', 1.00),
(79, 1, 'Puja Samagri', 'Havan', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 5.00),
(80, 1, 'Puja Samagri', 'Kund', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 2.00),
(81, 1, 'Puja Samagri', 'Coconut', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 2.00),
(82, 1, 'Puja Samagri', 'Saffron', 0.00, '1 May, 1011', '1:17:31 PM', 'Box', 1.00),
(83, 1, 'Puja Samagri', 'Ghee', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 1.00),
(84, 1, 'Puja Samagri', 'Glass', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 16.00),
(85, 1, 'Puja Samagri', 'Rice', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 3.00),
(86, 1, 'Puja Samagri', 'Flowers', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 3.00),
(87, 1, 'Puja Samagri', 'Garlands', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 3.00),
(88, 1, 'Puja Samagri', 'Basil leaves, Betel leaves  ', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 30.00),
(89, 1, 'Puja Samagri', 'Ground lead', 0.00, '1 May, 1011', '1:17:31 PM', 'Gram', 5.00),
(90, 1, 'Puja Samagri', 'Mirror', 0.00, '1 May, 1011', '11:01:11 AM', 'P (Pieces)', 1.00),
(91, 1, 'Puja Samagri', 'Beaten Rice', 0.00, '1 May, 1011', '11:01:17 AM', 'Kg', 2.00),
(92, 1, 'Puja Samagri', 'Yoghurt', 0.00, '1 May, 1011', '1:17:31 PM', 'Kg', 0.50),
(93, 1, 'Puja Samagri', 'Dakshina, cloth, pots etc.  for Guru or Aacharya  of Oneness blessing Each', 0.00, '1 May, 1011', '1:17:31 PM', 'P (Pieces)', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies_time`
--

CREATE TABLE `slnt_ceremonies_time` (
  `id` int(11) NOT NULL,
  `pooja_time` int(11) NOT NULL,
  `from_time` varchar(100) DEFAULT NULL,
  `to_time` varchar(100) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_crmn_booking`
--

CREATE TABLE `slnt_crmn_booking` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `cer_evnt_type` varchar(255) DEFAULT NULL,
  `do_solemnisation` varchar(255) DEFAULT NULL,
  `datetimeids` varchar(255) DEFAULT NULL,
  `datetimeids_filter` varchar(255) DEFAULT NULL,
  `arrange_solemnisation` varchar(255) DEFAULT NULL,
  `arrange_table_chair` varchar(255) DEFAULT NULL,
  `room_certificate` varchar(255) DEFAULT NULL,
  `solemnisation_copy` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `create_time` varchar(255) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `decoration` varchar(255) NOT NULL,
  `decoration_amt` decimal(10,2) NOT NULL,
  `sel_priest` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `picup` varchar(255) NOT NULL,
  `puja_samagri` int(11) NOT NULL,
  `pooja_samagri_amt` decimal(10,0) NOT NULL,
  `havan_samagri` int(11) NOT NULL,
  `havan_samagri_amt` decimal(10,0) NOT NULL,
  `bhog_prasad` int(11) NOT NULL,
  `bhog_prasad_amt` decimal(10,0) NOT NULL,
  `catering` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `lunch` int(11) NOT NULL,
  `refreshment` int(11) NOT NULL,
  `pay_with` varchar(255) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `last_pay_amt` decimal(10,2) NOT NULL,
  `dueamt` decimal(10,2) NOT NULL,
  `booking_for` varchar(10) NOT NULL,
  `catering_items` text,
  `cate_description` text,
  `membership_status` int(11) NOT NULL,
  `sel_priest_rs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_crmn_booking`
--

INSERT INTO `slnt_crmn_booking` (`id`, `booking_id`, `userid`, `cer_evnt_type`, `do_solemnisation`, `datetimeids`, `datetimeids_filter`, `arrange_solemnisation`, `arrange_table_chair`, `room_certificate`, `solemnisation_copy`, `status`, `create_time`, `create_date`, `decoration`, `decoration_amt`, `sel_priest`, `venue`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `dinner`, `lunch`, `refreshment`, `pay_with`, `pay_status`, `transection_id`, `last_pay_amt`, `dueamt`, `booking_for`, `catering_items`, `cate_description`, `membership_status`, `sel_priest_rs`) VALUES
(1, '', 'SLNT53352', '2', 'no', '06-05-2021 03:27:00 PM', NULL, '', '', 'on', NULL, 0, '06:54:18 AM', '05-05-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(2, '', 'SLNT16061', '2', 'no', '14-05-2021 04:26:00 PM', NULL, '', '', 'on', NULL, 0, '06:55:20 AM', '05-05-2021', '', 700.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 238.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(3, '', 'SLNT53352', '2', 'no', '23-05-2021 02:27:00 PM', NULL, '', '', 'on', NULL, 0, '06:55:38 AM', '05-05-2021', '', 0.00, 40, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, '', 0, '', 213.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0.00),
(4, '', 'SLNT53352', '1', NULL, '2021-05-07T04:58', NULL, NULL, NULL, NULL, NULL, 0, '09:26:40 AM', '07-05-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(5, '', 'SLNT53352', '1', NULL, '2021-05-07T04:58', NULL, NULL, NULL, NULL, NULL, 0, '09:27:09 AM', '07-05-2021', '', 0.00, 44, 1, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, '', 0, '', 202.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 0.00),
(6, 'CERSLNT20210507000006', 'SLNT53352', '1', NULL, '2021-05-07T04:58', NULL, NULL, NULL, NULL, NULL, 1, '09:34:52 AM', '07-05-2021', '', 0.00, 44, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 'PayPal', 1, '202105071620380204', 227.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(7, '', 'SLNT53352', '2', 'yes', '07-05-2021 04:58:00 AM', NULL, 'on', 'no', '', NULL, 0, '04:45:50 AM', '08-05-2021', '2', 0.00, 44, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, '', 0, '', 238.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(8, '', 'SLNT53352', '2', 'yes', '08-05-2021 01:21:00 PM', NULL, 'on', 'yes', '', NULL, 0, '04:49:47 AM', '08-05-2021', '2', 0.00, 43, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, '', 0, '', 238.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(9, 'CERSLNT20210508000009', 'SLNT53352', '2', 'yes', '12-05-2021 01:27:00 PM', NULL, 'on', 'yes', '', NULL, 1, '04:56:04 AM', '08-05-2021', '2', 700.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'PayPal', 1, '202105081620451706', 938.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(10, '', 'SLNT53352', '1', NULL, '2021-05-15T17:10', NULL, NULL, NULL, NULL, NULL, 0, '08:37:17 AM', '10-05-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(11, '', 'SLNT93665', '1', NULL, '2021-07-29T21:46', NULL, NULL, NULL, NULL, NULL, 0, '12:42:28 PM', '13-07-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(12, '', 'SLNT92653', '1', NULL, '2021-08-16T16:26', NULL, NULL, NULL, NULL, NULL, 0, '06:26:26 AM', '16-07-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(13, '', 'SLNT92653', '1', NULL, '2021-08-31T16:26', NULL, NULL, NULL, NULL, NULL, 0, '06:39:22 AM', '16-07-2021', '', 0.00, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, '', NULL, NULL, 0, 0.00),
(14, '', 'SLNT92653', '1', NULL, '2021-08-16T16:26', NULL, NULL, NULL, NULL, NULL, 0, '06:40:57 AM', '16-07-2021', '', 0.00, 40, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '', 0, '', 227.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(15, '', 'SLNT53352', '1', NULL, '08/24/2021 4:38 PM', NULL, NULL, NULL, NULL, NULL, 0, '11:08:42 AM', '23-08-2021', '', 0.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 778.00, 0.00, 'Yes', '{\"menus\":\"7\",\"menus_title\":\"Menu 4\",\"pax_n_price\":\"100|601|652\",\"note_for_catering\":\"50\",\"items\":null}', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', 1, 25.00),
(16, '', 'SLNT53352', '1', NULL, '08/26/2021 7:54 PM', NULL, NULL, NULL, NULL, NULL, 0, '14:25:36 PM', '24-08-2021', '', 0.00, 44, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, '', 0, '', 177.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 1, 25.00),
(17, '', 'SLNT53352', '1', NULL, '08/26/2021 7:54 PM', NULL, NULL, NULL, NULL, NULL, 0, '05:22:44 AM', '26-08-2021', '', 0.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 778.00, 0.00, 'Yes', '{\"menus\":\"7\",\"menus_title\":\"Menu 4\",\"pax_n_price\":\"100|601|652\",\"note_for_catering\":\"\",\"items\":null}', '<p>Rice&nbsp;</p>\r\n\r\n<p>Dal</p>\r\n\r\n<p>Mix Vegetable&nbsp;</p>\r\n\r\n<p>Achar</p>', 1, 25.00),
(18, '', 'SLNT2161265', '2', 'yes', '01-01-1970 12:00:00 AM', NULL, 'on', 'yes', '', NULL, 0, '11:07:40 AM', '18-12-2021', '2', 700.00, 41, 0, '', '', 'na', 0, 10, 0, 0, 0, 0, 1, 0, 0, 0, '', 0, '', 948.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(19, '', 'SLNT542411', '1', NULL, '08/24/2021 4:38 PM', NULL, NULL, NULL, NULL, NULL, 0, '07:02:57 AM', '27-12-2021', '', 0.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '', 0, '', 227.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(20, '', 'SLNT5851341', '1', NULL, '16-01-2022', NULL, NULL, NULL, NULL, NULL, 0, '07:22:04 AM', '27-12-2021', '', 0.00, 44, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '', 0, '', 227.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(21, '', 'SLNT542411', '2', 'yes', '24-08-2021 04:38:00 PM', NULL, 'on', 'yes', '', NULL, 0, '06:15:51 AM', '29-12-2021', '1', 250.00, 44, 0, '', '', 'na', 0, 10, 0, 0, 0, 0, 1, 0, 0, 0, '', 0, '', 498.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00),
(22, 'CERSLNT20211231000022', 'SLNT6680381', '1', NULL, '09/01/2022', NULL, NULL, NULL, NULL, NULL, 1, '08:47:05 AM', '31-12-2021', '', 0.00, 40, 1, '', '', 'na', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'PayPal', 1, '202112311640940570', 227.00, 0.00, 'Yes', '{\"menus\":null,\"menus_title\":null,\"pax_n_price\":null,\"note_for_catering\":null,\"items\":null}', NULL, 0, 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_deco_service`
--

CREATE TABLE `slnt_deco_service` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_donation`
--

CREATE TABLE `slnt_donation` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `donation_id` varchar(255) NOT NULL,
  `filterdate` varchar(255) DEFAULT NULL,
  `membership_create_date` varchar(255) NOT NULL,
  `membership_create_time` varchar(255) NOT NULL,
  `donat_transfer_type` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `transection_ref` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_donation`
--

INSERT INTO `slnt_donation` (`id`, `user_id`, `donation_id`, `filterdate`, `membership_create_date`, `membership_create_time`, `donat_transfer_type`, `amount`, `donation_type`, `transection_ref`, `status`) VALUES
(1, 'SLNT92653', 'SLNTDONET2021071600001', '20210716', '16-07-2021', '07:31:56 AM', 'PayPal', '5', 'TULSI VIVAH', '', 0),
(2, 'SLNT53352', 'SLNTDONET2021101300002', '20211013', '13-10-2021', '15:26:49 PM', 'PayPal', '20', 'Shravan Maas Donation', '', 0),
(3, 'SLNT445510', 'SLNTDONET2021112200003', '20211122', '22-11-2021', '05:00:03 AM', 'Visa  Credit Card', '21', 'Bhagwan Bhog Donation', '', 0),
(4, 'SLNT44629', 'SLNTDONET2021112800004', '20211128', '28-11-2021', '03:02:06 AM', 'Visa  Credit Card', '50', 'Bhagwan Bhog Donation', '', 0),
(5, 'SLNT44629', 'SLNTDONET2021112800005', '20211128', '28-11-2021', '03:04:32 AM', 'Visa  Credit Card', '0', 'Fruit Donation', '', 0),
(6, '', 'SLNTDONET2021112800006', NULL, '28-11-2021', '03:06:16 AM', 'PayPal', '51', 'Fruit Donation', '', 0),
(7, '', 'SLNTDONET2021121100007', NULL, '11-12-2021', '00:09:50 AM', 'PayPal', '21', 'General Donation', '', 0),
(8, '', 'SLNTDONET2021122800008', NULL, '28-12-2021', '13:20:23 PM', 'Mastercard Credit/ Debit Card', '101.00', 'Bhagwan Bhog Donation', '', 0),
(9, '', 'SLNTDONET2021123100009', NULL, '31-12-2021', '02:21:24 AM', 'Visa  Credit Card', '0', 'New Year Prashad Donation', '', 0),
(10, '', 'SLNTDONET2021123100010', NULL, '31-12-2021', '02:21:46 AM', 'Visa  Credit Card', '21', 'New Year Prashad Donation', '', 0),
(11, '', 'SLNTDONET2021123100011', NULL, '31-12-2021', '12:39:28 PM', 'Visa  Credit Card', '21', 'New Year Prashad Donation', '', 1),
(12, '', 'SLNTDONET2021123100012', NULL, '31-12-2021', '12:57:54 PM', 'Visa  Credit Card', '21', 'New Year Prashad Donation', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_events_time`
--

CREATE TABLE `slnt_events_time` (
  `id` int(11) NOT NULL,
  `from_time` varchar(100) DEFAULT NULL,
  `to_time` varchar(100) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_events_time`
--

INSERT INTO `slnt_events_time` (`id`, `from_time`, `to_time`, `create_date`, `create_time`) VALUES
(1, '8 AM', '10 AM', '21 May, 2021', '01:12:56 PM'),
(2, '7 PM ', '9 PM', '21 May, 2021', '01:13:05 PM'),
(3, '7 PM', '8:30 PM', '21 Oct, 2021', '10:37:32 AM'),
(4, '8 AM', '9 AM', '06 Dec, 2021', '12:47:31 PM');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_event_booking`
--

CREATE TABLE `slnt_event_booking` (
  `id` int(11) NOT NULL,
  `membertype` varchar(255) DEFAULT NULL,
  `memberid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_code` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `yajman_type` varchar(225) DEFAULT NULL,
  `paymentmod` varchar(255) DEFAULT NULL,
  `termscondition` varchar(255) DEFAULT NULL,
  `createdate` varchar(255) DEFAULT NULL,
  `craetetime` varchar(255) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `event_amount` decimal(10,2) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_amount` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `evnt_bookin_id` varchar(255) NOT NULL,
  `date_of_event` varchar(255) NOT NULL,
  `time_of_event` varchar(255) NOT NULL,
  `booking_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_event_booking`
--

INSERT INTO `slnt_event_booking` (`id`, `membertype`, `memberid`, `title`, `first_name`, `last_name`, `email`, `mobile_code`, `mobile`, `yajman_type`, `paymentmod`, `termscondition`, `createdate`, `craetetime`, `event_id`, `event_amount`, `description_charge`, `puja_amount`, `status`, `evnt_bookin_id`, `date_of_event`, `time_of_event`, `booking_for`) VALUES
(1, '2', '', 'Mr', 'Hdjd', 'Hdjdhs', 'Hdjdhs@gmail.com', '+65', '88888888', NULL, 'PayPal', 'on', '06-12-2021', '07:28:37 AM', 2, 21.00, NULL, 0.00, 0, '', '2021-12-31', '8 AM To 9 AM', 'Yes'),
(2, '1', 'Dharmender Prashad', 'Mr', 'Dharmender', 'Prashad', 'dvprashad@gmail.com', '+65', '92392657', '0', 'PayPal', 'on', '10-12-2021', '07:39:55 AM', 2, 21.00, NULL, 0.00, 1, 'SLNTEVNT202112102', '2021-12-31', '8 AM To 9 AM', 'Yes'),
(3, '2', '', 'Madam', 'Urvashi', 'Sharma', 'rajnesshmoudgil@yahoo.com', '+65', '98156744', NULL, 'PayPal', 'on', '24-12-2021', '07:02:35 AM', 3, 0.00, NULL, 0.00, 0, '', '2021-12-07', '7 PM To 8:30 PM', 'Yes'),
(4, '2', '', 'Dr', 'Sudeep', 'Saxena', 'sunny4442@hotmail.com', '+65', '90812804', NULL, 'PayPal', 'on', '24-12-2021', '14:28:28 PM', 4, 21.00, NULL, 0.00, 0, '', '2021-12-31', '8 AM To 9 AM', 'Yes'),
(5, '2', '', 'Dr', 'Sudeep', 'Saxena', 'sunny4442@hotmail.com', '+65', '90812804', '5', 'PayPal', 'on', '24-12-2021', '14:29:13 PM', 4, 21.00, 'Akhand Ramaan Paath  Sankalp', 21.00, 1, 'SLNTEVNT202112245', '2021-12-31', '8 AM To 9 AM', 'Yes'),
(6, '2', '', 'Mr', 'shubham', 'Rajput', 'shumrt.kumar@gmail.com', '+65', '99887744', NULL, 'PayPal', 'on', '27-12-2021', '05:49:59 AM', 3, 0.00, NULL, 0.00, 0, '', '2021-12-07', '7 PM To 8:30 PM', 'Yes'),
(7, '1', 'Dharmender Prashad', 'Mr', 'Dharmender', 'Prashad', 'dvprashad@gmail.com', '+65', '92392657', NULL, 'PayPal', 'on', '30-12-2021', '06:44:47 AM', 4, 21.00, NULL, 0.00, 1, 'SLNTEVNT202112307', '2021-12-31', '8 AM To 9 AM', 'Yes'),
(8, '1', 'Chandramukhi', 'Madam', 'chandramukhi', 'chandramukhi', 'cm_sindy@yahoo.com.sg', '+65', '90077202', '5', 'PayPal', 'on', '31-12-2021', '01:39:37 AM', 4, 21.00, 'Akhand Ramaan Paath  Sankalp', 21.00, 0, '', '2021-12-31', '8 AM To 9 AM', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_event_yajman`
--

CREATE TABLE `slnt_event_yajman` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `non_member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(11) NOT NULL DEFAULT '1',
  `create_date` varchar(24) NOT NULL,
  `create_time` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_event_yajman`
--

INSERT INTO `slnt_event_yajman` (`id`, `description_charge`, `puja_type`, `member_price`, `non_member_price`, `status`, `create_date`, `create_time`) VALUES
(1, 'GANESH CHATURTHI', 'Yajman', 21.00, 21.00, 1, '21 May, 2021', '01:15:52 PM'),
(2, 'Ganesh Chaturthi', 'Yajman', 21.00, 31.00, 1, '16 Jul, 2021', '01:47:33 PM'),
(3, 'Navratri ', 'Yajman', 21.00, 21.00, 1, '03 Aug, 2021', '10:27:24 AM'),
(4, 'Shri Ram Charit Manas Maas Parayan Paath', 'Yajman', 51.00, 51.00, 1, '21 Oct, 2021', '10:40:03 AM'),
(5, 'Akhand Ramaan Paath  Sankalp', 'Yajman', 21.00, 21.00, 1, '06 Dec, 2021', '12:47:56 PM'),
(6, 'Hanuman Chalisa', 'Yajman', 0.00, 0.00, 1, '06 Dec, 2021', '03:05:01 PM');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_gallery_categories`
--

CREATE TABLE `slnt_gallery_categories` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_gallery_categories`
--

INSERT INTO `slnt_gallery_categories` (`id`, `parent_id`, `name`) VALUES
(2, NULL, 'Navratri 2021'),
(4, NULL, 'Diwali 2021'),
(5, NULL, 'Holi 2021'),
(6, NULL, 'Day of Chattr arrival'),
(7, NULL, 'Shree Krishna Janmashtami 2021'),
(8, NULL, 'Maha Shivratri 2021'),
(9, NULL, 'Hanuman Jayanti 2021'),
(10, NULL, 'Ganesh Chaturthi 2021'),
(11, NULL, 'Maa Jwala Ji 2021'),
(12, NULL, 'Raksha Bhandan 2020'),
(13, NULL, 'Navratri 2020'),
(14, NULL, 'Holi 2020'),
(15, NULL, 'Teej 2020'),
(16, NULL, 'Teej 2021'),
(17, NULL, 'Navratri 2020');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_img_gallery`
--

CREATE TABLE `slnt_img_gallery` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uploadtype` varchar(255) NOT NULL,
  `extension` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_img_gallery`
--

INSERT INTO `slnt_img_gallery` (`id`, `type`, `image`, `title`, `uploadtype`, `extension`) VALUES
(1, '7', 'd7ccbd1e18e8e68e078b65b7c4ed12b0.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(4, '7', 'ce75205de86dae99c066ba839fbd5954.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(6, '7', 'cc73f480e368c0d0d0cf77f653fc3778.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(7, '2', 'e72eca8f14a03201a3266a47c7654c4a.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(8, '7', 'ed9cdfcb20e7bbf5a7045e85bb252fde.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(9, '7', '83f4cf11c615ec2103762f9dee1a473b.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(10, '7', 'c474dacaf4f690163c1706b7522281e3.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(11, '7', '6631f9f646990f50673afd88b63d7fbd.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(12, '7', '636f91460075e6c1ded93cc878b7945a.jpg', 'Janmashtami 2021', 'image', 'jpg'),
(13, '2', 'd430a5dbb75d4d0f0355fde3cd43da9a.jpg', 'Navami 2021', 'image', 'jpg'),
(14, '6', '4d088aec1eddfe1ad64db067ce339e7e.jpg', 'Chattr arrival', 'image', 'jpg'),
(15, '6', '13fa04bc734a10dcaa4a0e0dd0995c7b.jpg', 'Chattr arrival', 'image', 'jpg'),
(16, '6', '850834e777f9f90d92f59b98c2c772a2.jpg', 'Chattr arrival ', 'image', 'jpg'),
(17, '6', '3f85ede005e70a2c52862ecb28639cc1.jpg', 'Chattr arrival', 'image', 'jpg'),
(18, '2', 'cd37124c9f5c9e1e5271985b9cf07797.jpg', 'Navratri', 'image', 'jpg'),
(19, '2', '776e98fdd1732f1a71f80b61d7177f02.jpg', 'Navratri 2021', 'image', 'jpg'),
(20, '2', 'bff00d3cc639d2660344bed6fb750205.jpg', 'Navratri', 'image', 'jpg'),
(21, '2', '23497f2076a286250a4c11d434d09d99.jpg', 'Navratri', 'image', 'jpg'),
(22, '6', '88034cd858daa93c1cfc46885ed0e8d9.jpg', 'Chattr arrival ', 'image', 'jpg'),
(23, '6', 'a25827b27effb9c708b058c1432c5a7c.jpg', 'Chattr arrival ', 'image', 'jpg'),
(24, '6', 'ad49e1ef2ae3cea30a62dd30c6d84a1a.jpg', 'Chattr arrival ', 'image', 'jpg'),
(25, '6', '01f570e1e32aa65e9f52e27facec7f9c.jpg', 'Chattr arrival ', 'image', 'jpg'),
(26, '6', 'bb33f9c6c85c27abc5d32f0db9bb938d.jpg', 'Chattr arrival ', 'image', 'jpg'),
(27, '6', 'd69ac6b10f7a06e5edfc5520814cda21.jpg', 'Chattr arrival ', 'image', 'jpg'),
(28, '6', '698c2ab798b92dc647535e04699a1b7f.jpg', 'Chattr arrival ', 'image', 'jpg'),
(29, '6', 'd107d7f4e37a2b1de46ca33998800971.jpg', 'Chattr arrival ', 'image', 'jpg'),
(30, '6', '417341a230701184c8f34537271618d5.jpg', 'Chattr arrival ', 'image', 'jpg'),
(31, '6', '1b8307c7ebcd45814181a80bed220021.jpg', 'Chattr arrival ', 'image', 'jpg'),
(32, '6', 'c2cfbc64543aab3c6c2430ff15961100.jpg', 'Chattr arrival ', 'image', 'jpg'),
(33, '6', '2b83de05c625a6f771b7f51cb75cdebf.jpg', 'Chattr arrival ', 'image', 'jpg'),
(34, '6', '3f6f9447c14f8dbcd1dc5602c5433adc.jpg', 'Chattr arrival ', 'image', 'jpg'),
(35, '6', '8e524a7c2ac79afec3214875db9e14c2.jpg', 'Chattr arrival ', 'image', 'jpg'),
(36, '6', '50372ffec5d8c9767d581967bdf22e0d.jpg', 'Chattr arrival ', 'image', 'jpg'),
(37, '6', '5613cdbca3e77b092eaae4559ee2fdbe.jpg', 'Chattr arrival ', 'image', 'jpg'),
(38, '6', '2a6f191def4df30e548c4691e1123010.jpg', 'Chattr arrival ', 'image', 'jpg'),
(39, '6', '3c846e34d5d0059f679f7a277a32fa7a.jpg', 'Chattr arrival ', 'image', 'jpg'),
(40, '6', 'e9f20c426bb1505b0777d2215c0fa7f0.jpg', 'Chattr arrival ', 'image', 'jpg'),
(41, '6', '0c8980c69f3ec74b2b9fb6f3642919d4.jpg', 'Chattr arrival ', 'image', 'jpg'),
(42, '6', '1e5ca4ab4f2f5e76281d8768c8203ded.jpg', 'Chattr arrival ', 'image', 'jpg'),
(43, '6', '84dd75e206fa90da2d04df994b30c34d.jpg', 'Chattr arrival ', 'image', 'jpg'),
(44, '6', 'a258fa56b04e56c9e279362fdab30b26.jpg', 'Chattr arrival ', 'image', 'jpg'),
(45, '6', '62b9ee1b8eae0d8c86fd2ea38057d8cf.jpg', 'Chattr arrival ', 'image', 'jpg'),
(46, '2', '5bf0fa06a82beed8d57c07ade95d950d.JPG', 'Navratri', 'image', 'JPG'),
(47, '2', '8b0206d1a8fa01c45b42073e926d4c1d.JPG', 'Navratri', 'image', 'JPG'),
(48, '2', '9a42b49aaadd535610323feb67ef05b1.JPG', 'Navratri', 'image', 'JPG'),
(49, '2', 'e31c742f52a5118d74f5aa99807b2c84.JPG', 'Navratri', 'image', 'JPG'),
(50, '2', 'c4bd396f835dd03d3be428894d2c39e0.JPG', 'Navratri', 'image', 'JPG'),
(51, '2', 'c3cb8da46ef6b45be74212f3f019aaac.JPG', 'Navratri', 'image', 'JPG'),
(52, '2', 'd6998e9bc674435ac85953cf137fe86f.JPG', 'Navratri', 'image', 'JPG'),
(53, '2', '3e970b404de9a840181c2085aff1a802.JPG', 'Navratri', 'image', 'JPG'),
(54, '2', 'a9188000b8442f250117995d80937cf6.JPG', 'Navratri', 'image', 'JPG'),
(55, '2', '020fff1843f4cd31b271109ab70e1454.JPG', 'Navratri', 'image', 'JPG'),
(56, '2', 'f919907b6724fd4b67472a639e5fdd10.JPG', 'Navratri', 'image', 'JPG'),
(57, '2', '976b02f4832124dc4c360417b6f855c2.JPG', 'Navratri', 'image', 'JPG'),
(58, '2', 'c741baffa2fa7f9d142b13f0ea008986.JPG', 'Navratri', 'image', 'JPG'),
(59, '2', '6e867beb32bf7c913639d633948122f8.JPG', 'Navratri', 'image', 'JPG'),
(60, '2', 'a2aa4c7210ed75a7b9174055cbc52856.JPG', 'Navratri', 'image', 'JPG'),
(61, '2', 'eda273051c0300d1fc3743d544ad0600.JPG', 'Navratri', 'image', 'JPG'),
(62, '2', '4bed7d94c60cd5028f3ff980e6a86f44.JPG', 'Navratri', 'image', 'JPG'),
(63, '2', '243a1545388cad9c4c1d1212ec9ca681.JPG', 'Navratri', 'image', 'JPG'),
(64, '2', 'e68eb7e145c44c4e0b26dbbf8df59eba.JPG', 'Navratri', 'image', 'JPG'),
(65, '2', '13a2967495a9442472df3aef086340fc.JPG', 'Navratri', 'image', 'JPG'),
(66, '2', '4bee3454783b971af32074e6fa6c4fb4.JPG', 'Navratri', 'image', 'JPG'),
(68, '2', '063335a92cb16e6b442e2318015f2c67.JPG', 'Navratri', 'image', 'JPG'),
(69, '2', 'e69f4f4eb891405683300f9675d796d1.JPG', 'Navratri', 'image', 'JPG'),
(70, '2', '79fd68604abb9d883fe5ffc0dad6b46a.JPG', 'Navratri', 'image', 'JPG'),
(72, '2', '33580887d8ea5dad4b1c4d0dc32e4686.JPG', 'Navratri', 'image', 'JPG'),
(75, '2', '7427819fffd3b505faabcba8eb31853d.JPG', 'Navratri', 'image', 'JPG'),
(76, '2', 'e30e5e794839ef7472cef35c156ee1e1.JPG', 'Navratri', 'image', 'JPG'),
(77, '2', 'f0221265a5ef9ef56e3e9a0e8e9b2a1e.JPG', 'Navratri', 'image', 'JPG'),
(78, '2', '8ee490debd30dce2d417741096cdae2d.JPG', 'Navratri', 'image', 'JPG'),
(79, '2', 'daa2f8dd3d653bab1a9fd46844d8ee10.JPG', 'Navratri', 'image', 'JPG'),
(80, '2', '5a0a66c1c5937705bdd8135279cac90d.JPG', 'Navratri', 'image', 'JPG'),
(81, '2', 'de9f6ee4c77e9e7ffdc2eeb5b3da04f5.JPG', 'Navratri', 'image', 'JPG'),
(82, '2', 'afb9731a6b64488cbbd485d022021fd6.JPG', 'Navratri', 'image', 'JPG'),
(83, '2', 'fcb8c7d9dfc7558951fa4ea4de8bce10.JPG', 'Navratri', 'image', 'JPG'),
(84, '2', 'eff77cf148844f6d55a50d0bbd604c08.JPG', 'Navratri', 'image', 'JPG'),
(85, '2', '34edb21a10979b15b1a84cf390d64a1d.JPG', 'Navratri', 'image', 'JPG'),
(86, '2', '6700934d83bf760ae6d89f30acc1c1c0.JPG', 'Navratri', 'image', 'JPG'),
(87, '2', '472c1918688ba9618070386a152d8671.JPG', 'Navratri', 'image', 'JPG'),
(88, '2', 'b1e4fd63b614f866c666333e2f13689d.JPG', 'Navratri', 'image', 'JPG'),
(89, '2', 'd552226067293c644af39a92b5261ba6.JPG', 'Navratri', 'image', 'JPG'),
(90, '2', 'd24c3661040616b745ff6aaadfbee0ae.JPG', 'Navratri', 'image', 'JPG'),
(91, '2', '8e4989303b943058cb2541692730dae0.JPG', 'Navratri', 'image', 'JPG'),
(92, '2', 'a9709bebfacb775efc4744862b526ade.JPG', 'Navratri', 'image', 'JPG'),
(93, '2', 'a5c94afb861088ad24349a73f7923271.JPG', 'Navratri', 'image', 'JPG'),
(94, '2', '2f760ede4cffc215cb5e589775b7f26c.JPG', 'Navratri', 'image', 'JPG'),
(95, '2', '8cf8b5512cfc6cfcb6428910d3178bdc.JPG', 'Navratri', 'image', 'JPG'),
(96, '2', '08c2f0e02ea9a4411e52e33b2c726189.JPG', 'Navratri', 'image', 'JPG'),
(97, '2', '420776bfef7bacd882cf0766b5eaa232.JPG', 'Navratri', 'image', 'JPG'),
(98, '2', 'f882ad08198288a8c2ab0a5987e9590b.JPG', 'Navratri', 'image', 'JPG'),
(99, '2', '2c6388d81b0bd5a6e6922bed6ef3a6b5.JPG', 'Navratri', 'image', 'JPG'),
(100, '2', '14ec9640da5d471868770882a9e5b301.JPG', 'Navratri', 'image', 'JPG'),
(101, '2', 'b7fbc91356f5c0cd43991d63ebbe5806.JPG', 'Navratri', 'image', 'JPG'),
(102, '2', '6fc43df5da25268bbe76e892fa6e3559.JPG', 'Navratri', 'image', 'JPG'),
(103, '2', '6e756f8462cf860e29dddd649903df48.JPG', 'Navratri', 'image', 'JPG'),
(104, '2', '10554c8232e47989c5a074a7f506044b.JPG', 'Navratri', 'image', 'JPG'),
(105, '2', 'ef4988913ba3f68e16664748cc3a41f4.JPG', 'Navratri', 'image', 'JPG'),
(106, '2', '7ec38db0edabb95834a801b0018de80a.JPG', 'Navratri', 'image', 'JPG'),
(107, '2', '601acd39bf83fe6d45792a0c785cea9b.JPG', 'Navratri', 'image', 'JPG'),
(108, '2', '3de01569145c56a82fc790231f9551d0.JPG', 'Navratri', 'image', 'JPG'),
(109, '2', 'b93dfabc6e95987dcda4af306ae3114d.JPG', 'Navratri', 'image', 'JPG'),
(111, '2', 'bc645398a18ced7209af9404856c657c.JPG', 'Navratri', 'image', 'JPG'),
(112, '2', '4d4175a9debecd351b41346509d39604.JPG', 'Navratri', 'image', 'JPG'),
(113, '2', '56a73858a676d025aea31d5f415a8559.JPG', 'Navratri', 'image', 'JPG'),
(114, '2', '34c45a209273b4df19465e3975a9aba0.JPG', 'Navratri', 'image', 'JPG'),
(115, '2', '88574c3045227605b4345d648e4f4864.JPG', 'Navratri', 'image', 'JPG'),
(116, '2', 'cf66df815de67a89d392d4b6186aeca1.JPG', 'Navratri', 'image', 'JPG'),
(117, '2', '1a23739acd4923d210debfac663b1240.JPG', 'Navratri', 'image', 'JPG'),
(118, '2', '6f56c11a1f42715f84abff32c0044ed3.JPG', 'Navratri', 'image', 'JPG'),
(119, '2', 'a13ee7d3d6f1c8f23e21bf6011363f8d.JPG', 'Navratri', 'image', 'JPG'),
(120, '2', 'b54b7881918e09e3763d304dea02aa7b.JPG', 'Navratri', 'image', 'JPG'),
(121, '2', '5d19aa48d3ff4fa1047ecd3c36568d4e.JPG', 'Navratri', 'image', 'JPG'),
(122, '2', 'e74b86a24b79fc924396522108ec843f.JPG', 'Navratri', 'image', 'JPG'),
(123, '2', 'a20e0001ad83f007ea20d8a17c456b9a.JPG', 'Navratri', 'image', 'JPG'),
(124, '2', 'f9bb5191c2331b20d463ddb13e9c7da7.JPG', 'Navratri', 'image', 'JPG'),
(125, '2', 'd5d3554bc448f733db3ac7efbc5190ff.JPG', 'Navratri', 'image', 'JPG'),
(126, '2', '4de2eeb21d9264ea53b812b3423ec6ee.JPG', 'Navratri', 'image', 'JPG'),
(127, '2', '1a40d4182b285091eecde99c8c097341.JPG', 'Navratri', 'image', 'JPG'),
(128, '2', '7082fe95f5ab37797ce2eb1f91156060.JPG', 'Navratri', 'image', 'JPG'),
(129, '2', '98224161088da6edf1a0b8913c42ccc6.JPG', 'Navratri', 'image', 'JPG'),
(130, '2', 'f43a997aea143e9265ae2785784d516b.JPG', 'Navratri', 'image', 'JPG'),
(131, '2', 'cca190fd79473791d4e5ad591478ad42.JPG', 'Navratri', 'image', 'JPG'),
(132, '2', 'b4fea445a2e1acb36dc763e36a253b5c.JPG', 'Navratri', 'image', 'JPG'),
(133, '2', '134dd8005c284c51379b2a373b290bdc.JPG', 'Navratri', 'image', 'JPG'),
(134, '2', 'cc62e6614ebe2287eb85fa966b0429ac.JPG', 'Navratri', 'image', 'JPG'),
(135, '2', 'a20064937b61f6533af54d6922b23bcf.JPG', 'Navratri', 'image', 'JPG'),
(137, '2', '480a86043479e00f070fdda00b56ee55.JPG', 'Navratri', 'image', 'JPG'),
(138, '2', '9f1a44591310c7c920121b46abb19e67.JPG', 'Navratri', 'image', 'JPG'),
(139, '2', '6efe0728762447fbbc27e4e50da8d5ac.JPG', 'Navratri', 'image', 'JPG'),
(140, '2', 'b7096a139dc82d81c5e463856d80ec6c.JPG', 'Navratri', 'image', 'JPG'),
(142, '2', '2e1f98c64b079ea0d9a4f52385c66c1d.JPG', 'Navratri', 'image', 'JPG'),
(143, '2', '22cc712e6750addfe3a9e44e39965634.JPG', 'Navratri', 'image', 'JPG'),
(144, '2', '36c2d79cf9bdedaadf6e6e44cc8a2d45.JPG', 'Navratri', 'image', 'JPG'),
(145, '2', '09bc1c980feecf05decc3b94d39750e0.JPG', 'Navratri', 'image', 'JPG'),
(146, '2', '4d9583c4796cf528885afc772fd66664.JPG', 'Navratri', 'image', 'JPG'),
(147, '2', 'ee6cbeaeb1ddef5ed53040d1726c2711.JPG', 'Navratri', 'image', 'JPG'),
(148, '2', '44bf1e58f6e834f1766bcb53932b3b21.JPG', 'Navratri', 'image', 'JPG'),
(149, '2', '860a1acfac62ebb5856baf4136fe81c8.JPG', 'Navratri', 'image', 'JPG'),
(150, '2', '517fe7f43e2fd13d1798a9e5e0e6b89e.JPG', 'Navratri', 'image', 'JPG'),
(151, '2', 'f5546efe0d2e59f8183b79cde44a3f23.JPG', 'Navratri', 'image', 'JPG'),
(152, '2', '699855f33b59b27c5252e3a1e24ac57c.JPG', 'Navratri', 'image', 'JPG'),
(153, '2', 'd9e041ee423107181b01fda899347e47.JPG', 'Navratri', 'image', 'JPG'),
(154, '2', '0c7a0a54d3a0a891dc2836db836c4205.JPG', 'Navratri', 'image', 'JPG'),
(155, '2', '0d31c34dd61d16d1edb792189c65cff4.JPG', 'Navratri', 'image', 'JPG'),
(157, '2', 'f3a200d7f052439d070866f579b07899.JPG', 'Navratri', 'image', 'JPG'),
(158, '2', '125ed049cda02543a843740b285fcd3c.JPG', 'Navratri', 'image', 'JPG'),
(159, '2', '1cda7563a4c8c745a94e71a79f29e555.JPG', 'Navratri', 'image', 'JPG'),
(160, '2', '7d97cfb52fc70c7a80be7d3f89ae4166.JPG', 'Navratri', 'image', 'JPG'),
(161, '2', '8b534f44c780a606c9a8898c4f3ed0f3.JPG', 'Navratri', 'image', 'JPG'),
(162, '2', '88fe0cf5e13fb5d9c869a087ce1628ac.JPG', 'Navratri', 'image', 'JPG'),
(163, '2', '9773d934acb52a0d21d29bbecb043f76.JPG', 'Navratri', 'image', 'JPG'),
(164, '2', '268a843684911416a796eb65d6927000.JPG', 'Navratri', 'image', 'JPG'),
(165, '2', '486c80abef005df37a7da5306f993ad5.JPG', 'Navratri', 'image', 'JPG'),
(167, '2', 'a820498418f547a37a69a12118f2c4bd.JPG', 'Navratri', 'image', 'JPG'),
(169, '2', '8ba60ce0b7da60b862c7e9edf5f686f7.JPG', 'Navratri', 'image', 'JPG'),
(170, '2', 'f7a52a01d885ba4933efc3ced1a10493.JPG', 'Navratri', 'image', 'JPG'),
(173, '2', '7a2f2103f3bfc8241581f33c796dc5e0.JPG', 'Navratri', 'image', 'JPG'),
(174, '2', 'd24035184b5397bc76ceee0a5c844127.JPG', 'Navratri', 'image', 'JPG'),
(175, '2', 'ce7fe10812804a57dcef18bac4f95487.JPG', 'Navratri', 'image', 'JPG'),
(176, '2', 'd4d5fb91baed6ed7edbbbed8b56268b9.JPG', 'Navratri', 'image', 'JPG'),
(177, '2', '541ad4757ba59743cdab6fa266f25002.JPG', 'Navratri', 'image', 'JPG'),
(178, '2', 'bdc2df0c2f386bc987afd502625e4484.JPG', 'Navratri', 'image', 'JPG');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_member`
--

CREATE TABLE `slnt_member` (
  `id` int(11) NOT NULL,
  `name_title` varchar(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `filterdate` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_code` varchar(10) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `office_number` varchar(50) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `create_date` varchar(30) DEFAULT NULL,
  `create_time` varchar(30) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `otp` int(11) NOT NULL,
  `password_reset_url` varchar(255) NOT NULL,
  `admin_up_date` varchar(255) DEFAULT NULL,
  `admin_up_time` varchar(255) DEFAULT NULL,
  `admin_update_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slnt_member`
--

INSERT INTO `slnt_member` (`id`, `name_title`, `first_name`, `last_name`, `status`, `filterdate`, `email`, `mobile_code`, `mobile`, `password`, `office_number`, `address_1`, `address_2`, `postal_code`, `create_date`, `create_time`, `user_id`, `otp`, `password_reset_url`, `admin_up_date`, `admin_up_time`, `admin_update_by`) VALUES
(1, 'Mr', 'Zan', 'M', 1, '', 'myintmyintzanster222@gmail.com', '+65', '12345678', '123456789', '12345678', '123456789', 'dddd', '123456', NULL, NULL, 'SLNT16061', 4333, '', '14 May, 2021', '11:39:28 AM', 'info@slnt.com'),
(2, 'Mr', 'Sanyam', 'Rastogi', 1, '', 'sanyamrastogi0@gmail.com', '+65', '70556260', 'Qwerty@123', '70556260', 'Delhi', 'Delhi', '250004', NULL, NULL, 'SLNT53352', 6255, 'https://spslnt.org.sg/CreatePassword/86755e958926d4b072148b1240edbe48/4805b0000a7b28d5aca7cc072ccd7b22/26c364e185dd68d7164aa2b917619258', '13 May, 2021', '02:01:23 PM', 'info@slnt.com'),
(3, 'Mr', 'vandana', 'Badole', 1, '', 'vandanabadole25@gmail.com', '+65', '98692430', '1234567', '', 'the santorini', 'strt 81', '527891', NULL, NULL, 'SLNT92653', 6030, '', NULL, NULL, NULL),
(4, 'Mr', 'Zan', 'tow', 1, '', 'ms.myintzan@gmail.com', '+65', '12345678', '123456789', '12345678', '54', '54', '434343', NULL, NULL, 'SLNT59844', 9547, '', NULL, NULL, NULL),
(5, 'Mr', 'sohan', 'veer', 1, '', 'sohanveer152@gmail.com', '+65', '36275502', 'sohanveer152@gmail.com', '95362755', 'Nangla tashi', 'kanker khera', '250001', NULL, NULL, 'SLNT93665', 6280, '', NULL, NULL, NULL),
(6, 'Mr', 'Z', 'Ztwo', 1, '', 'zanzan@utomedia.net', '+65', '96204556', '123456789', '', 'blk 263 boonlay drive', '', '521221', NULL, NULL, 'SLNT40686', 8027, '', NULL, NULL, NULL),
(7, 'Mr', 'za', 'z', 1, '', 'zanzan@contentfactory.biz', '+65', '96204777', '123456789', '', '121212', '', '121212', NULL, NULL, 'SLNT73477', 1393, '', NULL, NULL, NULL),
(8, 'Mr', 'ABHIT', 'SUD', 0, '', 'ms.myintzan222@gmail.com', '+65', '82233337', '123456789', '', 'Blk 225', '', '123456', NULL, NULL, 'SLNT87318', 7037, '', NULL, NULL, NULL),
(9, 'Madam', 'Manisha', 'Rajpal', 0, '', 'admin@spslnt.org.sg', '+65', '12345678', 'spslnt', '12345678', '5 chander road', '5 chander road 1', '789456', NULL, NULL, 'SLNT79729', 9212, '', NULL, NULL, NULL),
(10, 'Mr', 'Manisha', 'Rajpal', 1, '', 'mitaliraj@hotmail.com', '+65', '83794785', 'Laldubai', '12345678', '5 chander road', '5 chander road 1', '789456', NULL, NULL, 'SLNT445510', 6095, '', NULL, NULL, NULL),
(11, 'Mr', 'demo', 'lst', 1, '', 'developer.gyanudaytechnologies@gmail.com', '+65', '12345678', 'Qwerty@123', '12312311', 'demo', 'demo', '456633', NULL, NULL, 'SLNT542411', 7827, '', NULL, NULL, NULL),
(12, 'Mr', 'Shrey', 'Rastogi', 0, '', 'shrey.rastogi1995@gmail.com', '+65', '99100244', 'shrey.rastogi1995@gmail.com', '88821463', 'B-6 Bandhu Vihar', 'Dwarka', '110075', NULL, NULL, 'SLNT964512', 7682, 'https://leadgenerationsingapore.info/slntupdated/CreatePassword/821c9cf541cca9efcbbc9fc4b37ed021/ed1878a5d6e61c372df8b634202d93b9/722c5ee71567b6c07475de38868484ac', NULL, NULL, NULL),
(13, 'Mr', 'Dharmender', 'Prashad', 1, '', 'dvprashad@gmail.com', '+65', '93869080', 'S1641158b', '', '26 Bahshore Road #29-01', 'The Bayshore', '466972', NULL, NULL, 'SLNT484713', 3558, '', NULL, NULL, NULL),
(14, 'Mr', 'Mayuresh', 'Godse', 1, '', 'mayuresh.net@gmail.com', '+65', '90237685', 'Mayu12345$$$', '', '166A, Punggol Central', '07-131', '821166', NULL, NULL, 'SLNT461814', 7815, '', NULL, NULL, NULL),
(15, 'Mr', 'Ranvir', 'Singh', 0, '', 'ranvir.kumar@unilegal.com.sg', '+65', '97950678', '029Aug58', '62362430', '30 Lange Road', '', '547992', NULL, NULL, 'SLNT734615', 1957, '', NULL, NULL, NULL),
(16, 'Mr', 'Harsh', 'Goel', 0, '', 'Harshgoel2k@rediffmail.com', '+65', '98546246', 'sam20000', '', '485A Tampines Avenue 9', '', '520485', NULL, NULL, 'SLNT526916', 9752, '', NULL, NULL, NULL),
(17, 'Mr', 'Amulya', 'Khare', 1, '', 'amulyakhare@gmail.com', '+65', '81386790', 'Amulyaparul17', '', '15-03, 91 West Coast Vale', 'Singapore', '126755', NULL, NULL, 'SLNT380417', 7590, '', NULL, NULL, NULL),
(18, 'Mr', 'Kiranchand', 'Tiwari', 1, '', 'kiranchandtiwari007@gmail.com', '+65', '96373522', 'lovegaya3', '', '319 CHOA CHU KANG AVE 3', '#18-17', '689863', NULL, NULL, 'SLNT215018', 5530, '', NULL, NULL, NULL),
(19, 'Mr', 'Pradeep Kumar', 'Singh', 0, '', 'pksingh@cnplaw.com', '+65', '91192939', '5april66', '', '53 Greenbank Park', '', '589412', NULL, NULL, 'SLNT364119', 8587, '', NULL, NULL, NULL),
(20, 'Miss', 'SheetaL', 'Roy', 1, '', 'Lateehs84@gmail.com', '+65', '91794441', 'Ru$ty4545k!', '', '12 Marine Terrace', '#13-166', '440012', NULL, NULL, 'SLNT157720', 7337, '', NULL, NULL, NULL),
(21, 'Madam', 'Reshmi', 'Koiri', 1, '', 'reshmi.koiri@gmail.com', '+65', '91917420', '123456', '', '236 Serangoon Avenue 3, #05-96, Singapore - 550236', '', '550236', NULL, NULL, 'SLNT384921', 4117, '', NULL, NULL, NULL),
(22, 'Mr', 'shubham', 'Rajput', 0, '', 'shumrt.kumar@gmail.com', '+65', '84450219', 'shubham', '45266366', 'asd', 'asd', '332001', NULL, NULL, 'SLNT556222', 2092, 'https://spslnt.org.sg/CreatePassword/4ec971c06b1df4d3e62e13c4753079ab/36bc595c946f4d99557be17b8bc67298/1e21a8177fe4f397bdb92cb459a93bda', NULL, NULL, NULL),
(23, 'Miss', 'Khushboo', 'Malhotra', 1, '', 'malhotra.khushboo26@gmail.com', '+65', '83811820', 'coolbuddy', '', '801 Upper Serangoon Road', 'D\'pavilion', '534671', NULL, NULL, 'SLNT882923', 7528, '', NULL, NULL, NULL),
(24, 'Mr', 'Shrey', 'Rastogi', 1, '', 'info@blubrandzglobal.in', '+65', '90024440', 'Shrey@123', '', 'B-6 Bandhu Vihar', 'Dwarka', '110075', NULL, NULL, 'SLNT557224', 3857, '', NULL, NULL, NULL),
(25, 'Madam', 'Nibedita', 'Mund', 1, '', 'nibedita.mund08@gmail.com', '+65', '90364435', '12345', '', '643 Punggol Central,  #07-334 ,Singapore', '', '820643', NULL, NULL, 'SLNT316925', 4870, '', NULL, NULL, NULL),
(26, 'Mr', 'Vijay', 'Agrahari', 1, '', 'kagrahari1202@gmail.com', '+65', '97257575', '1234567', '', '02-26,111 Pasir Ris Grove', '', '518170', NULL, NULL, 'SLNT152426', 954, '', NULL, NULL, NULL),
(27, 'Mr', 'Manindra', 'Mohanty', 1, '', 'manindramohanty@gmail.com', '+65', '94873075', 'Sps050615', '', 'Block 331, Sembawang Close, #07-351', '', '750331', NULL, NULL, 'SLNT721627', 2793, '', NULL, NULL, NULL),
(28, 'Mr', 'Prateek', 'Prakash', 1, '', 'tanvisuman@gmail.com', '+65', '92706252', 'tedmeh-kecna7-puXrom', '', '37 Simei street 4', '11-15', '529870', NULL, NULL, 'SLNT592628', 4923, '', NULL, NULL, NULL),
(29, 'Mr', 'Ajay Kumar', 'Dubey', 1, '', 'capt.ajay@hotmail.com', '+65', '97490944', 'redwine1969', '', 'Blk 328 Tampines Street 32', '#05-362, Singapore', '520328', NULL, NULL, 'SLNT44629', 8077, '', NULL, NULL, NULL),
(30, 'Madam', 'Shruti', 'Maheshwari', 1, '', 'shrutimah@gmail.com', '+65', '98347477', 'ehib4vise', '', '#03-20, Blk 76, Bayshore road', 'Costa Del sol', '469990', NULL, NULL, 'SLNT588330', 9764, '', NULL, NULL, NULL),
(31, 'Mr', 'Nishant', 'Meher', 1, '', 'nishantmeher@gmail.com', '+65', '94897006', 'Catalyst@149iSG', '', '122 PUNGGOL WALK', '#09-306', '823126', NULL, NULL, 'SLNT965031', 6288, '', NULL, NULL, NULL),
(32, 'Madam', 'Dipti', 'Punj', 1, '', 'dipti_punj@yahoo.com', '+65', '91265871', 'Anc280916', '', '25 West Coast Crescent', '#10-14 Blue Horizon', '128047', NULL, NULL, 'SLNT866932', 8259, '', NULL, NULL, NULL),
(33, 'Madam', 'Sanghamitra', 'Datta', 1, '', 'sanghamitrak@gmail.com', '+65', '96448536', 'JaiHanuman1011', '', '68 Flora Rd', '06-16, The Gale', '506913', NULL, NULL, 'SLNT105833', 9801, '', NULL, NULL, NULL),
(34, 'Mr', 'Amit', 'Kejriwal', 1, '', 'amitkejriwal82@gmail.com', '+65', '93871207', 'P@ssw0rd', '', '33 Simei Street4', '#06-21', '529878', NULL, NULL, 'SLNT738534', 4671, '', NULL, NULL, NULL),
(35, 'Madam', 'Divy', 'Garima', 1, '', 'dicy890@gmail.com', '+65', '81664865', 'joinus135', '', '#08-23, City Square Residences,', '12 Kitchener Road', '207224', NULL, NULL, 'SLNT273835', 7649, '', NULL, NULL, NULL),
(36, 'Madam', 'Kimmi', 'Kumari', 1, '', 'kimmi9210@gmail.com', '+65', '91450024', 'ananya12345', '93822906', 'Jurong east avenue 1', 'Parc oasis Blk G ', '609777', NULL, NULL, 'SLNT84836', 9647, '', NULL, NULL, NULL),
(37, 'Mr', 'Shyamal', 'Tewari', 1, '', 'Shyamalmeri@gmail.com', '+65', '90288203', 'spak06', '', 'Unit no #0706, 21 West Coast crescent', 'Tower A, Blue Horizon condo, West coast', '128045', NULL, NULL, 'SLNT767737', 3638, '', NULL, NULL, NULL),
(38, 'Madam', 'Monica', 'Kochhar', 1, '', 'monica@avistaadvisory.com', '+65', '83566661', 'Mingoo1967', '', '61 Grange Road', '#21-02 Beverly Hill', '249570', NULL, NULL, 'SLNT904538', 6067, '', NULL, NULL, NULL),
(39, 'Mr', 'AJAY', 'PANDEY', 1, '', 'ajaykumarpandey@live.com', '+65', '81637650', '100319', '', 'Jurong West Central 3 #05-31', '', '643697', NULL, NULL, 'SLNT990839', 7906, '', NULL, NULL, NULL),
(40, 'Miss', 'Pooja', 'Sapra', 1, '', 'Poojpooj87@gmail.com', '+65', '98338413', 'heyitsme', '', '2a gey gg', 'Shggg', '403002', NULL, NULL, 'SLNT333540', 7482, 'https://spslnt.org.sg/CreatePassword/1ffa3d632a2946260f2be309691e228b/e4ddc549e1e1e597063f9092da650628/aa196ba3d2682e31760ca97feb5ab5e8', NULL, NULL, NULL),
(41, 'Mr', 'Nilay', 'Khandelwal', 1, '', 'nilaykh@gmail.com', '+65', '96443825', 'Ilovesg123', '', '3A Hillcrest Villa', 'One Hillcrest road', '248904', NULL, NULL, 'SLNT834441', 7938, '', NULL, NULL, NULL),
(42, 'Mr', 'Sunanda', 'Sethi', 1, '', 'sunanda2707@gmail.com', '+65', '90210014', 'Mrityunjay2009!', '', 'Grange Road', '1502; 53A Spring Grove', '249566', NULL, NULL, 'SLNT754742', 8514, '', NULL, NULL, NULL),
(43, 'Miss', 'Hemangini', 'Bansal', 1, '', 'Hemangini.bansal@gmail.com', '+65', '81426812', 'hemangini05', '', '700 LORONG 1 TOA PAYOH', 'TRELLIS TOWERS, Unit 14-09', '319773', NULL, NULL, 'SLNT304043', 733, '', NULL, NULL, NULL),
(44, 'Mr', 'ARUN', 'BHATTER', 1, '', 'ARUN_BHATTER@YAHOO.CO.IN', '+65', '83864293', 'bhawna1991', '', '2A margate road', '08-02 santa fe masion', '438073', NULL, NULL, 'SLNT723344', 3191, '', NULL, NULL, NULL),
(45, 'Mr', 'Patmanaban', 'Sokalingam', 1, '', 'pats07824@gmail.com', '+65', '90699169', 'compact86', '', '332 Serangoon Avenue 3', '#03-267 ', '550332', NULL, NULL, 'SLNT84545', 5951, '', NULL, NULL, NULL),
(46, 'Madam', 'Shivani', 'Gupta', 1, '', 'shivani.gpt8@gmail.com', '+65', '94504294', 'shiShe78!', '', 'Hougang street 31', 'Hougang street 31', '530373', NULL, NULL, 'SLNT486946', 3485, '', NULL, NULL, NULL),
(47, 'Mr', 'Amit', 'Kumar', 1, '', 'amit84m@gmail.com', '+65', '98579461', 'laxminarayan', '', 'Block 220 ,#11-224', 'Serangoon Avenue 4', '550220', NULL, NULL, 'SLNT155247', 3930, '', NULL, NULL, NULL),
(48, 'Mr', 'Kashish', 'Rajpal', 0, '', 'rajpalkashish@yahoo.com', '+65', '83130850', 'manilalkaju', '', '3 bukit batok', 'st 25 #08-09', '658881', NULL, NULL, 'SLNT103848', 3225, '', NULL, NULL, NULL),
(49, 'Madam', 'Vijeya', 'Letchimi', 0, '', 'vijeya1964@gmail.com', '+65', '94852857', 'vijeya1964', '', '708 #01-73 Hougang Avenue 2', '', '530708', NULL, NULL, 'SLNT838549', 5089, '', NULL, NULL, NULL),
(50, 'Madam', 'Pooja', 'Pandey', 1, '', 'pooja.devi.pandey@gmail.com', '+65', '81804619', 'Shreya1606', '', '311b Clementi Avenue 4', '#20-167', '122311', NULL, NULL, 'SLNT921950', 9578, '', NULL, NULL, NULL),
(51, 'Mr', 'ARJUN', 'PANDEY', 1, '', 'arjun_singapore@hotmail.com', '+65', '90041532', 'Clarksons1234', '', 'block 311b, Clementi avenue  4, #20-167, Singapore 122311', '', '122311', NULL, NULL, 'SLNT226251', 996, '', NULL, NULL, NULL),
(52, 'Mr', 'Anup Kumar', 'Taneja', 1, '', 'anuptaneja@gmail.com', '+65', '92341237', 'gosror-pensYx-4dicgy', '', '79 Tampines Ave 1', '#10-13 Waterview', '528684', NULL, NULL, 'SLNT73552', 5070, '', NULL, NULL, NULL),
(53, 'Dr', 'Preeti', 'Kachroo', 1, '', 'preetikach@yahoo.com', '+65', '90261864', 'omnamah75', '', '2 perumal road', '', '218773', NULL, NULL, 'SLNT513653', 2340, '', NULL, NULL, NULL),
(54, 'Mr', 'Som', 'Behera', 1, '', 'buzzsom@gmail.com', '+65', '85710685', 'som26beh', '', '54 Punggol walk', '11-10', '828832', NULL, NULL, 'SLNT555554', 9934, '', NULL, NULL, NULL),
(55, 'Madam', 'Sunakshi', 'Hastu', 1, '', 'sunakshi.wangu@gmail.com', '+65', '90064898', 'Genius@123', '', 'The Anchorage', '370 F block, 08-02', '159959', NULL, NULL, 'SLNT365655', 2660, '', NULL, NULL, NULL),
(56, 'Mr', 'SANDEEP', 'PATIL', 1, '', 'san123_p@yahoo.com', '+65', '90684939', 'passw0rd1', '', '04-10, 54 PUNGGOL WALK, SINGAPORE 828832', '', '828832', NULL, NULL, 'SLNT20156', 977, '', NULL, NULL, NULL),
(57, 'Mr', 'Sriram', 'A', 1, '', 'rambanker@gmail.com', '+65', '98579414', 'Ananthluv7702', '', '201 Tanjong Rhu Road', '#06-11 Parkshore  Singapore', '436917', NULL, NULL, 'SLNT802357', 7577, '', NULL, NULL, NULL),
(58, 'Mr', 'Abhishek', 'Bhagat', 1, '', 'drabhibhagat@gmail.com', '+65', '91680670', 'omnamah75', '', '2 Perumal Road, Uptown', '22-06', '218773', NULL, NULL, 'SLNT454458', 884, '', NULL, NULL, NULL),
(59, 'Mr', 'Jugal', 'Rajpal', 0, '', 'jugal123@gmail.com', '+65', '91774015', 'manilalkaju', '', '3 bukit batok', 'st 25 #08-09', '658881', NULL, NULL, 'SLNT361459', 3902, '', NULL, NULL, NULL),
(60, 'Mr', 'Nakul', 'Gupta', 0, '', 'nakul_g808@gmail.com', '+65', '97317426', '#Posiedon08', '97316748', '08-03, block 7, aquarius by the park', 'bedok reservoir view', '478929', NULL, NULL, 'SLNT683660', 2758, '', NULL, NULL, NULL),
(61, 'Mr', 'Nakul', 'Gupta', 1, '', 'juhi76_2000@yahoo.com', '+65', '97317426', '#Posiedon08', '97316748', '08-03, block 7, aquarius by the park', 'bedok reservoir view', '478929', NULL, NULL, 'SLNT643961', 4665, '', NULL, NULL, NULL),
(62, 'Miss', 'Sandhya', 'Devi', 0, '', 'sandhyadevi1310@gmail.com', '+65', '96447530', 'Sandhya131091', '', 'Blk 14A Upper Boon Keng Road', '#04-973', '381014', NULL, NULL, 'SLNT541162', 8859, '', NULL, NULL, NULL),
(63, 'Mr', 'Rashi', 'Rao', 1, '', 'rashi.rishabh@gmail.com', '+65', '98546822', 'rashirishabh', '', '66 Flora Drive, Parc Olympia condo', '07-64, lobby A', '506861', NULL, NULL, 'SLNT56463', 616, '', NULL, NULL, NULL),
(64, 'Mr', 'Nikhil', 'Mittal', 1, '', 'nikhilmittal8888@gmail.com', '+65', '97803330', 'Spslnt@123', '', '#14-08, Tower 2, Silversea', '48 Marine Parade Road', '449306', NULL, NULL, 'SLNT480264', 2879, '', NULL, NULL, NULL),
(65, 'Mr', 'Sumit', 'Rastogi', 1, '', 'sumit2803@gmail.com', '+65', '93381430', 'gungho', '', '70 Bayshore Road', '20-07 Costa Del Sol', '469987', NULL, NULL, 'SLNT37565', 565, '', NULL, NULL, NULL),
(66, 'Mr', 'Nitesh', 'Tiwari', 1, '', 'Nitesh.kum08@gmail.com', '+65', '85875596', 'tohro3-Jovfeb-fovsyt', '', 'Block 304, 10-120', 'Jurong East St 32', '600304', NULL, NULL, 'SLNT480666', 7643, '', NULL, NULL, NULL),
(67, 'Mr', 'Nishant', 'Upadhyay', 1, '', 'nishant_u79@yahoo.com', '+65', '93707308', 'Lsps8279!', '', '15-03, Block 370 G, Alexandra Road', 'The Anchorage', '159960', NULL, NULL, 'SLNT870667', 4275, '', NULL, NULL, NULL),
(68, 'Miss', 'Charvi', 'Kaitkay', 1, '', 'Charvikaitkay12@gmail.com', '+65', '84399322', 'Gallery.balcony12', '', '34 Bayshore road, The Bayshore condo, Tower 2B, #02-08', '', '469976', NULL, NULL, 'SLNT382968', 950, '', NULL, NULL, NULL),
(69, 'Mr', 'Nitin Kumar', 'Purwar', 1, '', 'purwar.nitin@gmail.com', '+65', '85474191', 'India@123', '', '78 Tanah Merah Kachil Avenue', '05-03', '465538', NULL, NULL, 'SLNT141469', 9976, '', NULL, NULL, NULL),
(70, 'Mr', 'Nikhil', 'Pal', 1, '', 'palnikhil06@gmail.com', '+65', '82863317', 'Pass123!@#', '', '402 Pandan Gardens Unit 06-08', 'Singapore', '600402', NULL, NULL, 'SLNT247970', 8293, '', NULL, NULL, NULL),
(71, 'Miss', 'Nikita', 'Chaliha', 1, '', 'nikitachaliha@gmail.com', '+65', '81360281', 'India@1234', '', 'Unit 0602, block 3, Arc at Tampines, Avenue 8', 'Tampines', '529595', NULL, NULL, 'SLNT667271', 4805, '', NULL, NULL, NULL),
(72, 'Madam', 'Aanchal', 'Sarpal', 1, '', 'aanchal_sarpal@yahoo.co.in', '+65', '91457580', 'Aanchal11', '', 'Blk 121, Meyer Road', 'The Makena, #09-04', '437932', NULL, NULL, 'SLNT10872', 1176, '', NULL, NULL, NULL),
(73, 'Miss', 'Gunjan', 'Chaubey', 1, '', 'Gunjanchaubey@gmail.com', '+65', '98000237', 'prathana25', '', '#06-29 Mandarin Gardens', '3, Siglap Road', '448907', NULL, NULL, 'SLNT252673', 4618, '', NULL, NULL, NULL),
(74, 'Mr', 'Sanjeev', 'Kapur', 1, '', 'agarwalsurabhi78@yahoo.co.in', '+65', '91693418', 'samaira07', '', '01-04 Gallop Gables 70 Farrer road', '', '268850', NULL, NULL, 'SLNT908974', 3179, '', NULL, NULL, NULL),
(75, 'Mr', 'Chandan', 'Singh', 1, '', 'remo2456@gmail.com', '+65', '98550463', 'Welcome@123', '98550463', 'Compassvale Link', 'Singapore', '542275', NULL, NULL, 'SLNT541675', 4689, '', NULL, NULL, NULL),
(76, 'Madam', 'Amruta', 'Shinde', 1, '', 'Amruta2@yahoo.com', '+65', '91007016', 'casper123', '', '71 Choa Chu Kang loop', '#11-01', '689673', NULL, NULL, 'SLNT46576', 7595, '', NULL, NULL, NULL),
(77, 'Mr', 'Shashi', 'Kapoor', 1, '', 'Coolkip@gmail.com', '+65', '90604492', 'Aryan0412', '', '23 Tampines Central 7', ' block 23, unit no # 15-26', '528609', NULL, NULL, 'SLNT498677', 3630, '', NULL, NULL, NULL),
(78, 'Mr', 'Veena', 'Kumari', 0, '', 'Kumarinipu@gmail.com', '+65', '93841063', 'veena123', '93841063', 'Verna123', 'Pasir ris ', '519288', NULL, NULL, 'SLNT449478', 594, '', NULL, NULL, NULL),
(79, 'Mr', 'Kumud', 'Kumar', 1, '', 'kumudnet@gmail.com', '+65', '91180496', 'Merl10n12#', '', '93,Pasir ris heights', '02-22, VUE 8', '519288', NULL, NULL, 'SLNT647979', 2409, '', NULL, NULL, NULL),
(80, 'Mr', 'Arnab', 'Sinha', 1, '', 'emailkavita@yahoo.com', '+65', '92464097', 'Puja@SG01', '', 'Unit no. 08-07', '27, Simei Street 3', '529900', NULL, NULL, 'SLNT169980', 1959, '', NULL, NULL, NULL),
(81, 'Madam', 'Kirtika', 'Dhawan', 1, '', 'Kirtikadhawan@gmail.com', '+65', '98663394', 'akhilkirtika1408', '', '272, jalan eunos', '', '415846', NULL, NULL, 'SLNT830681', 3104, '', NULL, NULL, NULL),
(82, 'Mr', 'Poonam', 'Hivre', 1, '', 'poonam.hivre@gmail.com', '+65', '93923642', 'lakshmiP00', '', '60 Bayshore Road', '', '469982', NULL, NULL, 'SLNT74482', 1700, '', NULL, NULL, NULL),
(83, 'Mr', 'Amar', 'Kumar', 1, '', 'amark_sharma@hotmail.com', '+65', '91293879', 'temple', '', '8, Pari Dedap Walk', '#05-14 Tanamera Crest', '486061', NULL, NULL, 'SLNT32083', 9131, '', NULL, NULL, NULL),
(84, 'Mr', 'Subhash', 'SINHA', 1, '', 'sinha.subhash@gmail.com', '+65', '96533430', '6255@Tidel', '', '#11-17, Tower D2, 7 Pasir Ris Link', 'Seastrand', '518188', NULL, NULL, 'SLNT390584', 8990, '', NULL, NULL, NULL),
(85, 'Madam', 'Pratigya', 'Mishra', 1, '', 'itzpratigya@gmail.com', '+65', '81139490', 'Anaya@123', '91170672', '77 Pasir Ris Grove', '05-34,Livia Singapore ', '518208', NULL, NULL, 'SLNT15685', 8212, '', NULL, NULL, NULL),
(86, 'Madam', 'Komal', 'Lara', 1, '', 'komallara@yahoo.com', '+65', '96223398', 'KittooKomal', '', '#12-343, Block 668,', 'Woodlands Ring Road', '730668', NULL, NULL, 'SLNT233586', 1396, '', NULL, NULL, NULL),
(87, 'Mr', 'Pranesh', 'Kumar', 1, '', 'prancs71@yahoo.com', '+65', '96203483', 'Pran5171', '', '450 corporation road', '10-03', '649810', NULL, NULL, 'SLNT31487', 1887, '', NULL, NULL, NULL),
(88, 'Mr', 'Praveen', 'Bajaj', 1, '', 'prbajaj@gmail.com', '+65', '98398311', '43334333', '', 'Block 427 #05-449 , Street 41', 'Tampines', '520427', NULL, NULL, 'SLNT275588', 6835, '', NULL, NULL, NULL),
(89, 'Mr', 'Ujjawal', 'Deep', 1, '', 'ujjawald4@gmail.com', '+65', '97393894', 'Saxena123', '', '643 Punggol Central', '09-324', '820643', NULL, NULL, 'SLNT926789', 9352, '', NULL, NULL, NULL),
(90, 'Miss', 'Rashmi', 'Aggarwal', 1, '', 'rashmi12388@yahoo.com', '+65', '91161469', 'Broadrick51!', '', '15, Leonie Hill Road', '#08-04 Horizon Tower East', '239194', NULL, NULL, 'SLNT673190', 4283, '', NULL, NULL, NULL),
(91, 'Mr', 'Ram Asray', 'Misir', 1, '', 'rammisir@hotmail.com', '+65', '96170114', 'Ramasray', '', '66 Anchorvale Crescent,#09-36', '', '544617', NULL, NULL, 'SLNT993791', 8121, '', NULL, NULL, NULL),
(92, 'Miss', 'Minakshi', 'Sengar', 1, '', 'minakshi_sengar@hotmail.com', '+65', '83332861', 'partner1', '', 'Kovan residences Block 7A  unit 15-29', 'Kovan Road ', '544897', NULL, NULL, 'SLNT925292', 5886, '', NULL, NULL, NULL),
(93, 'Mr', 'Rajiv', 'Gupta', 1, '', 'rgupta22@yahoo.com', '+65', '92362207', 'Ghansham36@', '64375467', '97 Robertson Quay', '#38-09', '238257', NULL, NULL, 'SLNT10393', 5784, '', NULL, NULL, NULL),
(94, 'Mr', 'Shanker', 'Manokaran', 1, '', 'shanker.manokaran@gmail.com', '+65', '93887784', '7478Shan@', '', '41 Sims drive #14-263', '', '380041', NULL, NULL, 'SLNT247994', 8543, '', NULL, NULL, NULL),
(95, 'Mr', 'Vivek', 'Gade', 0, '', 'vivek.gade66@gmail.com', '+65', '82469514', 'Lacarte@123', '', '113 Compassvale Bow', '#17-08, Esparina Residences', '544814', NULL, NULL, 'SLNT470195', 7855, '', NULL, NULL, NULL),
(96, 'Mr', 'Soumya', 'Gade', 1, '', 'soumyapujar.7@gmail.com', '+65', '81432563', 'Lacarte@123', '', '113 Compassvale Bow', '#17-08, Esparina Residences', '544814', NULL, NULL, 'SLNT527396', 8279, '', NULL, NULL, NULL),
(97, 'Mr', 'Unnikrishnan', 'Nelliyodan', 0, '', 'unni538@yahoo.com', '+65', '91594829', 'k9d7ybrc##', '62460053', '34 Tanah Merah Kechil Road', '02-27 East Meadows Tower 2C', '465560', NULL, NULL, 'SLNT807197', 9904, '', NULL, NULL, NULL),
(98, 'Madam', 'Sangeeta', 'Unnikrishnan', 0, '', 'sangiuk123@gmail.com', '+65', '93914003', 'rishi1234', '62460053', '34 Tanah Merah Kechil Road', '02-27 East Meadows Tower 2C', '465560', NULL, NULL, 'SLNT619998', 1828, '', NULL, NULL, NULL),
(99, 'Miss', 'Tanisha', 'Unnikrishnan', 1, '', 'tanishaunnikrishnan@gmail.com', '+65', '90623709', 'k9d7ybrc##', '62460053', '34 Tanah Merah Kechil Road', '02-27 East Meadows Tower 2C', '465560', NULL, NULL, 'SLNT421399', 804, '', NULL, NULL, NULL),
(100, 'Mr', 'Sunil', 'Rai', 1, '', 'sunil.rai@dentons.com', '+65', '97970234', 'SuRitu41', '68853624', 'Blk 1E Cantonment Road #34-49', '', '085501', NULL, NULL, 'SLNT1632100', 9114, '', NULL, NULL, NULL),
(101, 'Mr', 'varun', 'bakshi', 1, '', 'bakshi_varun@yahoo.co.in', '+65', '92248677', 'Pooja@135', '', '3 alexandra view, ascentia sky', '21-11', '158749', NULL, NULL, 'SLNT7472101', 3640, '', NULL, NULL, NULL),
(102, 'Mr', 'Nitin', 'Kohli', 1, '', 'note2nitin@gmail.com', '+65', '86613532', 'UUgTDV7jm36GQGu', '', '29 jalan semadan', '0309 (tower 27)', '457402', NULL, NULL, 'SLNT5077102', 2228, '', NULL, NULL, NULL),
(103, 'Mr', 'Amit', 'Mehta', 1, '', 'am.sg@outlook.com', '+65', '93893203', '@Shanghai014', '', '02-02 Villa Marina Tower 23', '02-02 Villa Marina Tower 23', '457401', NULL, NULL, 'SLNT131103', 7386, '', NULL, NULL, NULL),
(104, 'Mr', 'Ajay', 'Kumar', 1, '', 'Anshulbhrgv@gmail.com', '+65', '94303693', '741236', '', 'Blk 770 Pasir ris Street 71 #08-346', '', '510770', NULL, NULL, 'SLNT1335104', 8839, '', NULL, NULL, NULL),
(105, 'Madam', 'Anamika', 'Gupta', 1, '', 'ashnamika@yahoo.com', '+65', '98502652', 'Vishnu', '', '207 D’Manor, Tanah Mera', 'Kechil Avenue', '465731', NULL, NULL, 'SLNT8441105', 9280, '', NULL, NULL, NULL),
(106, 'Mr', 'Gyan  Uday', 'Technologies', 0, '', 'gyanudaytechnologies@gmail.com', '+65', '70556260', 'Qwerty@123', '', 'Mayur Vihar', 'Meerut', '250004', NULL, NULL, 'SLNT1550106', 651, '', NULL, NULL, NULL),
(107, 'Madam', 'rashmi', 'pabla', 1, '', 'rashmi.pabla@hotmail.com', '+65', '91993095', 'Schroders@2022', '', 'The eden condo at tampines', 'blk 33 09-37 tampines street34', '529238', NULL, NULL, 'SLNT7978107', 9254, '', NULL, NULL, NULL),
(108, 'Madam', 'Suruchi', 'Thapar', 1, '', 'suruchithapar@gmail.com', '+65', '87393855', 'Hariom12', '', '23 Leonie hill', 'Unit 1504, leonie Gardens', '239224', NULL, NULL, 'SLNT9051108', 7363, '', NULL, NULL, NULL),
(109, 'Madam', 'Zan', 'Zan', 1, '', 'myintmyintzanster@gmail.com', '+65', '96204777', '123456789', '', '138 Robinson Road, Singapore 068906', '', '111111', NULL, NULL, 'SLNT7380109', 4753, '', NULL, NULL, NULL),
(110, 'Miss', 'Akrati', 'Pandey', 1, '', 'akrati.11@gmail.com', '+65', '86607081', 'sairam2020', '', 'Blk 610  senja road', '#15-22 bukit panjang', '670610', NULL, NULL, 'SLNT5152110', 5389, '', NULL, NULL, NULL),
(111, 'Mr', 'Joe', 'Tee', 0, '', 'kranchand_tiwari@ite.edu.sg', '+65', '90066730', 'aryantiwari', '67032053', '319 CHOA CHU KANG AVE 3', '#18-17 tower B2', '689863', NULL, NULL, 'SLNT8821111', 5011, '', NULL, NULL, NULL),
(112, 'Mr', 'Mayank', 'Tiwari', 1, '', 'mt16in@gmail.com', '+65', '98006545', 'sairam2020', '', 'Blk 610, #15-22  senja road', 'Bukit panjag', '670610', NULL, NULL, 'SLNT6431112', 4355, '', NULL, NULL, NULL),
(113, 'Mr', 'la', 'Desire', 1, '', 'ladesiremrt@gmail.com', '+65', '70556260', 'Qwerty@123', '', 'Demo', '', '250004', NULL, NULL, 'SLNT4527113', 6416, '', NULL, NULL, NULL),
(114, 'Mr', 'Demo', 'Demo', 1, '', 'bharattimesnewsmrt@gmail.com', '+65', '70552622', 'Qwerty@123', '', 'Delhi', '', '250004', NULL, NULL, 'SLNT3812114', 5133, '', NULL, NULL, NULL),
(115, 'Mr', 'Mohini', 'Tripathi', 1, '', 'mohinishukla886@gmail.com', '+65', '91681664', 'Vicky007', '', 'Blk 415, 12floor-169(unit)', 'woodlands street 41', '730415', NULL, NULL, 'SLNT2425115', 5610, '', NULL, NULL, NULL),
(116, 'Mr', 'Ajay', 'Kumar', 1, '', 'rekhab1969@gmail.com', '+65', '94244136', 'Rekha1969', '', 'Block 770 Pasir Ris Street 71 #08-346', '', '510770', NULL, NULL, 'SLNT5704116', 7605, '', NULL, NULL, NULL),
(117, 'Miss', 'Neelam', 'Rawat', 1, '', 'Neelamrawat171990@gmail.com', '+65', '83125168', '031014', '', 'Blk 43bendemeer road #03-1014', '', '330043', NULL, NULL, 'SLNT8729117', 7746, '', NULL, NULL, NULL),
(118, 'Mr', 'Vikas', 'Tripathi', 0, '', 'Vikas.trp@gmail.com', '+65', '86063721', 'Vicky007', '', 'Blk-415', '12-169, woodlands street 41', '730415', NULL, NULL, 'SLNT9708118', 3233, '', NULL, NULL, NULL),
(119, 'Mr', 'Nitin', 'Goil', 1, '', 'nitingoil@gmail.com', '+65', '96776294', 'nv0917', '', '220 Depot Rd', '12-77', '109704', NULL, NULL, 'SLNT8101119', 2835, '', NULL, NULL, NULL),
(120, 'Mr', 'Poonam', 'Sista', 1, '', 'poonam.sista@gmail.com', '+65', '94773755', 'Radhasoami@1', '', '12 pasir ris link', '#11-48', '518164', NULL, NULL, 'SLNT7181120', 6800, '', NULL, NULL, NULL),
(121, 'Miss', 'Nutan', 'Rai', 1, '', 'Nnrai92@gmail.com', '+65', '89217235', 'dobby999', '', 'Blk 517D, Jurong West st 52', '#14-575', '644517', NULL, NULL, 'SLNT5342121', 614, '', NULL, NULL, NULL),
(122, 'Mr', 'Naresh', 'Kumar', 1, '', 'sneha_badyal@yahoo.co.in', '+65', '82012495', 'MS1main##5', '', '732  Bedok Reservoir Road', 'Tower B1 #12-12', '479262', NULL, NULL, 'SLNT3205122', 3686, '', NULL, NULL, NULL),
(123, 'Madam', 'Krati', 'Shukla', 0, '', 'shukla.krati@gmail.com', '+65', '83552135', 'Rushank@123', '', '#12-40,Compassvale Street', 'Block 297 A ', '541297', NULL, NULL, 'SLNT6479123', 869, '', NULL, NULL, NULL),
(124, 'Mr', 'Ramesh', 'Rai', 0, '', 'rai61.ramesh@gmail.com', '+65', '93888818', '93886114', '', 'Blk 517D, Jurong West St 52', '#14-575', '644517', NULL, NULL, 'SLNT8745124', 4467, '', NULL, NULL, NULL),
(125, 'Madam', 'Nandini', 'Srivastava', 0, '', 'Nan_k@hotmail.com', '+65', '81399316', 'bee.amp-37$$', '', '321 Serangoon Avenue 2', 'Singapore ', '550321', NULL, NULL, 'SLNT5830125', 1846, '', NULL, NULL, NULL),
(126, 'Madam', 'Nandini', 'Srivastava', 1, '', 'nandini.sriv@gmail.com', '+65', '81399316', 'bee.amp-36$$', '', '321 Serangoon Avenue 2', 'Singapore ', '550321', NULL, NULL, 'SLNT8755126', 8553, '', NULL, NULL, NULL),
(127, 'Mr', 'Varun', 'Krishan', 0, '', 'varukrishan@gmail.com', '+65', '90837538', 'MonuSonu8', '', '#06-29, Blk 45', 'Savannah Condopark, Simei Rise', '528786', NULL, NULL, 'SLNT2334127', 482, '', NULL, NULL, NULL),
(128, 'Madam', 'Surbhi', 'Ruhela', 1, '', 'surbhiruhela19@gmail.com', '+65', '91697484', 'Shopping123', '', '#11-107', 'Blk 138', '530138', NULL, NULL, 'SLNT8576128', 9390, '', NULL, NULL, NULL),
(129, 'Mr', 'Varun Krishan', 'Upadhyaya', 0, '', 'varunkrishan@gmail.com', '+65', '90037538', 'MonuSonu8', '', '#06-29, Blk 45', 'Savannah Condopark, Simei Rise', '528786', NULL, NULL, 'SLNT7888129', 6131, '', NULL, NULL, NULL),
(130, 'Mr', 'Varun Krishan', 'Upadhyaya', 1, '', 'varun_krishan@rediffmail.com', '+65', '90037538', 'MonuSonu8', '', '#06-29, Blk 45', 'Savannah Condopark, Simei Rise', '528786', NULL, NULL, 'SLNT585130', 3807, '', NULL, NULL, NULL),
(131, 'Mr', 'Jagdish', 'Gupta', 1, '', 'gupta.jagdish@gmail.com', '+65', '84680624', 'J@1mataki', '83181155', '91 West Coast Vale', '08-02 Twin Vew ', '126755', NULL, NULL, 'SLNT5324131', 3177, '', NULL, NULL, NULL),
(132, 'Mr', 'Manoj', 'Sharma', 1, '', 'sharma.manojku@gmail.com', '+65', '96259177', 'Sembcorp@12', '', '64 Bayshore Road', '', '469984', NULL, NULL, 'SLNT7624132', 2610, '', NULL, NULL, NULL),
(133, 'Mr', 'Manoj', 'Sharma', 0, '', 'd.manojsharma@yahoo.in', '+65', '96259177', 'Manoj@12', '', '64 Bayshore Road', '', '469984', NULL, NULL, 'SLNT8487133', 1276, '', NULL, NULL, NULL),
(134, 'Mr', 'Harsh', 'Singhal', 1, '', 'harsh1sin@yahoo.com.sg', '+65', '97731614', 'brettlee', '', '56 Bukit Batok East Avenue 5', '#12-07', '659804', NULL, NULL, 'SLNT4461134', 4070, '', NULL, NULL, NULL),
(135, 'Mr', 'Abhinav', 'Shukla', 0, '', 'aryaaputra@gmail.com', '+65', '94511075', 'Abh1manyu_', '', '1B Cantonment Road', '#25-13', '085201', NULL, NULL, 'SLNT6300135', 9885, '', NULL, NULL, NULL),
(136, 'Mr', 'Shanti prakash', 'Upadhayay', 1, '', 'shanti.sg@gmail.com', '+65', '98503025', 'shanti1234', '', '18 upper Serangoon  view', '04-14', '534202', NULL, NULL, 'SLNT6321136', 6268, '', NULL, NULL, NULL),
(137, 'Mr', 'Anamika', 'Bhati', 1, '', 'anuchinu99@hotmail.com', '+65', '96431513', 'rawalanshu01', '', '14 Whampoa East', '8 Riversuits', '338523', NULL, NULL, 'SLNT2614137', 2384, '', NULL, NULL, NULL),
(138, 'Mr', 'Manu', 'Bhojwani', 1, '', 'manu@shankars.com', '+65', '96161216', 'Worship!', '', '61 Grange Road', '#19-01 Beverly Hill', '249570', NULL, NULL, 'SLNT9111138', 2953, '', NULL, NULL, NULL),
(139, 'Madam', 'Manish', 'Sharma', 1, '', 'manish.channa@gmail.com', '+65', '90609085', 'mani123sh', '', '56 Punggol walk', '07-14', '828833', NULL, NULL, 'SLNT6416139', 4836, '', NULL, NULL, NULL),
(140, 'Mr', 'Vijayendra', 'Meena', 1, '', 'vijayendra.gmeena@sodexo.com', '+65', '94656273', 'sodexo2021', '', '310 JURONG EAST STREET 32', '', '600310', NULL, NULL, 'SLNT8291140', 7462, '', NULL, NULL, NULL),
(141, 'Madam', 'Chandana', 'Sarker', 1, '', 'sarker.chandana@gmail.com', '+65', '93385670', 'clementi', '', '20 oxford road, Kentish Green', '#05-03', '218815', NULL, NULL, 'SLNT6279141', 3453, '', NULL, NULL, NULL),
(142, 'Madam', 'Liza', 'Kotwal', 1, '', 'liza.d.kotwal@gmail.com', '+65', '81896257', 'lizakotwal', '', 'Bedok South Avenue 3. Blk 69', '#05-488', '460069', NULL, NULL, 'SLNT3035142', 9568, '', NULL, NULL, NULL),
(143, 'Madam', 'Neetika', 'Agarwal', 1, '', 'neetika20@gmail.com', '+65', '96426366', 'Neetika1920', '', '390 Orchard Road', '#08-01, Palais Renaissance', '238871', NULL, NULL, 'SLNT9129143', 7451, '', NULL, NULL, NULL),
(144, 'Mr', 'Chadni', 'Sarker', 1, '', 'chadni_92@hotmail.com', '+65', '81393631', 'clementi', '', '20 Oxford Road, Kentish Green', '#05-03', '218815', NULL, NULL, 'SLNT6134144', 5021, '', NULL, NULL, NULL),
(145, 'Mr', 'Nitin', 'Ahuja', 1, '', 'discover_nitin@hotmail.com', '+65', '81683067', 'Sonal1982', '', '187, Tanjong Rhu Road', '16-06, Sanctuary Green Condo', '436925', NULL, NULL, 'SLNT3648145', 5680, '', NULL, NULL, NULL),
(146, 'Miss', 'Ruchika', 'Upadhyaya', 1, '', 'ruchika.upadhyaya@gmail.com', '+65', '93808644', 'frisbee', '', '03-16, 56 Sengkang Square', 'La Fiesta', '544833', NULL, NULL, 'SLNT245146', 7009, '', NULL, NULL, NULL),
(147, 'Miss', 'shephali', 'garg', 1, '', 'shephali.garg82@gmail.com', '+65', '90826510', 'Adi@Teetu123', '', '10 hougang street 92, #11-03', '', '538687', NULL, NULL, 'SLNT6996147', 1077, '', NULL, NULL, NULL),
(148, 'Madam', 'Vartika', 'Agarwal', 1, '', 'vartika.mca@gmail.com', '+65', '90251824', 'Prayer123', '', '244 lorong chuan', '#08-06', '556745', NULL, NULL, 'SLNT6120148', 6456, '', NULL, NULL, NULL),
(149, 'Miss', 'manju', 'mohta', 1, '', 'manju_m78@yahoo.com', '+65', '86178410', 'shonababu', '', '#05-09, Block 20, Melville Park, Simei St 1, Sg 529944', '', '529944', NULL, NULL, 'SLNT8697149', 1516, '', NULL, NULL, NULL),
(150, 'Madam', 'Divya', 'Agarwal', 1, '', 'divya29@gmail.com', '+65', '98524272', 'Dep603mc5/', '', '1 RHU CROSS', 'Unit 05-14, COSTA RHU ', '437431', NULL, NULL, 'SLNT1733150', 1979, '', NULL, NULL, NULL),
(151, 'Mr', 'Renu', 'Singh', 1, '', 'renu.jan@gmail.com', '+65', '85714262', 'renu152958', '', '44 Faber walk', '#03-15, waterfront @ Faber', '128991', NULL, NULL, 'SLNT7946151', 9034, '', NULL, NULL, NULL),
(152, 'Mr', 'VINOD', 'WADHWA', 1, '', 'vinod_wadhwa@hotmail.com', '+65', '96613280', 'SLT-01', '', 'BLOCK 125, BUKIT BATOK CENTRAL', '#11-379, ', '650125', NULL, NULL, 'SLNT5569152', 424, '', NULL, NULL, NULL),
(153, 'Mr', 'Rohit', 'Guliani', 1, '', 'rohitguliani73@gmail.com', '+65', '82308195', 'oRANGENINe@9', '', '80 Bayshore Road', '#11-26', '469992', NULL, NULL, 'SLNT6880153', 4911, '', NULL, NULL, NULL),
(154, 'Mr', 'Ashutosh', 'Kumar', 1, '', 'ashu.kr@gmail.com', '+65', '92725740', 'Ashut0sh@$$', '', '37 Amber Road', '#22-22', '439946', NULL, NULL, 'SLNT5646154', 8503, '', NULL, NULL, NULL),
(155, 'Mr', 'Akansha', 'Bhardwaj', 1, '', 'akanksha.bhardwaj134@gmail.com', '+65', '98961548', 'Radhey21', '', '167, jalan jurong kechil  Charisma view', '', '598671', NULL, NULL, 'SLNT9814155', 8324, '', NULL, NULL, NULL),
(156, 'Mr', 'Suchita', 'Singh', 1, '', 'singhabhishek1200@gmail.com', '+65', '90014767', 'suchita2207', '', 'Blk 297 Punggol Central', '', '820297', NULL, NULL, 'SLNT8551156', 8802, '', NULL, NULL, NULL),
(157, 'Mr', 'Sanjay', 'Ramnathan', 1, '', 'nassanj@gmail.com', '+65', '87178550', 'start123', '', '253 Arcadia road', '07-12 Hill Crest Arcadia', '289849', NULL, NULL, 'SLNT3557157', 8432, '', NULL, NULL, NULL),
(158, 'Mr', 'Nitesh', 'Singh', 1, '', 'sinnitesh@gmail.com', '+65', '90034349', 'Mosspass@1', '', 'Blk 64 06-29', 'Sengkang Square', '544702', NULL, NULL, 'SLNT893158', 2689, '', NULL, NULL, NULL),
(159, 'Madam', 'Sheetal', 'Anand', 1, '', 'sheetall@hotmail.com', '+65', '93397950', 'pooja2923', '86126067', '71 Pasir Ris Grove', '#07-19, Livia', '518205', NULL, NULL, 'SLNT8221159', 8664, '', NULL, NULL, NULL),
(160, 'Mr', 'rajitha', 'parameswaran', 1, '', 'rajithaparameswaran2@gmail.com', '+65', '91707820', 'ganapathy143', '', '618a, 03-711', 'punggol breeze', '821618', NULL, NULL, 'SLNT4435160', 838, '', NULL, NULL, NULL),
(161, 'Mr', 'Anand', 'Venkat', 1, '', 'shriakv@gmail.com', '+65', '86126067', 'pooja2923', '', '71 Pasir Ris Grove,', 'No 07-19 Livia', '518205', NULL, NULL, 'SLNT4027161', 2273, '', NULL, NULL, NULL),
(162, 'Mr', 'Subhash', 'Chandra', 1, '', 'subhash18@gmail.com', '+65', '91460757', 'ka03em7709', '', '68 Edgedale Plains', '', '828733', NULL, NULL, 'SLNT3911162', 9199, '', NULL, NULL, NULL),
(163, 'Mr', 'dimple', 'doshi', 0, '', 'dimplerdoshi@gmail.com', '+65', '91255522', 'Dim12Man34', '', '106 punggol walk', 'twin waterfalls condo', '828793', NULL, NULL, 'SLNT610163', 8713, '', NULL, NULL, NULL),
(164, 'Mr', 'manoj', 'singh', 1, '', 'manoj.jss@gmail.com', '+65', '91002051', 'Dim12Man34', '', '106 punggol walk', 'twin waterfalls condo', '828793', NULL, NULL, 'SLNT7907164', 6221, '', NULL, NULL, NULL),
(165, 'Mr', 'Abhinav', 'Shukla', 1, '', 'abhinavshukla1987@gmail.com', '+65', '94511075', 'Abh1manyu_', '', '1B Cantonment Road', '#25-13', '085201', NULL, NULL, 'SLNT3969165', 1915, '', NULL, NULL, NULL),
(166, 'Mr', 'Komal', 'Shruti', 0, '', 'komal.shruti@gmail.com', '+65', '90687816', 'Kom121sin', '', '1B cantonment Road', '25-13', '085301', NULL, NULL, 'SLNT8378166', 1014, '', NULL, NULL, NULL),
(167, 'Miss', 'DEEPTI', 'SATPATHY', 0, '', 'deeptisatpathy@yahoo.com', '+65', '91510775', 'password18', '', '16 Simei street1,Melville park,#03-06', '', '529942', NULL, NULL, 'SLNT6607167', 4718, 'https://spslnt.org.sg/CreatePassword/b14b2ef23a3724c3056a6430b64f1b29/ea9d02110000f281a04bbf1194673185/62dbee2277a348228e998f3422e9aca3', NULL, NULL, NULL),
(168, 'Mr', 'DEEPTI', 'SATPATHY', 0, '', 'ssatpathy1974@gmail.com', '+65', '91510775', 'Password18', '', '16 Simei street1,Melville park,#03-06', '', '529942', NULL, NULL, 'SLNT5028168', 8268, 'https://spslnt.org.sg/CreatePassword/b14b2ef23a3724c3056a6430b64f1b29/eedf8d58b104f50b493cdc29ee09354f/fe2efc5b56905eb586dece099a53d41b', NULL, NULL, NULL),
(169, 'Madam', 'Amrita', 'Daga', 0, '', 'amydaga@yahoo.com', '+65', '98204421', 'temple1', '98204421', '#09-17 Tanglin View', '156 Prince Charles Crescent', '159015', NULL, NULL, 'SLNT4242169', 9925, '', NULL, NULL, NULL),
(170, 'Mr', 'Praveen Kumar', 'Sharma', 1, '', 'praveensonukl@gmail.com', '+65', '84921367', 'Jan@2022', '', 'Blk 448A, #19-303,', 'Sengkang West Way, Sengkang', '791448', NULL, NULL, 'SLNT8003170', 7693, '', NULL, NULL, NULL),
(171, 'Madam', 'Shivani', 'Malhotra', 1, '', 'malhotra.shivani@gmail.com', '+65', '81894143', 'Striker2019#', '', '9 Nathan Road', '18-02', '248730', NULL, NULL, 'SLNT5520171', 9448, '', NULL, NULL, NULL),
(172, 'Madam', 'Divya', 'Gupta', 0, '', 'contactdivyac@gmail.com', '+65', '98916554', 'Temple', '', 'Flora Drive', '50 Flora drive,parc olympia', '506858', NULL, NULL, 'SLNT4618172', 2821, '', NULL, NULL, NULL),
(173, 'Mr', 'Divya', 'chaudhry', 1, '', 'Simpleprash@gmail.com', '+65', '98916554', 'Mandir', '', 'Flora Drive', '50, parc olympia ', '506858', NULL, NULL, 'SLNT1686173', 6624, '', NULL, NULL, NULL),
(174, 'Dr', 'Anil', 'Rao', 0, '', 'dranilrao70@hotmail.com', '+65', '96621104', 'godgodgod', '', 'BLOCK 40, JALAN RUMAH TINGGI. #03-272.', '#03-272. SINGAPORE', '151040', NULL, NULL, 'SLNT903174', 9533, '', NULL, NULL, NULL),
(175, 'Mr', 'Anil', 'Rao', 1, '', 'dinkar.anil@ktph.com.sg', '+65', '96621104', 'godgodgod', '', 'BLOCK 40, JALAN RUMAH TINGGI. #03-272.', '#03-272. SINGAPORE', '151040', NULL, NULL, 'SLNT1590175', 1167, '', NULL, NULL, NULL),
(176, 'Mr', 'Shyam', 'Rajput', 0, '', 'shyamgudwin@hotmail.com', '+65', '98300265', 'guccii123', '', '313', '07-472', '750313', NULL, NULL, 'SLNT3770176', 3345, '', NULL, NULL, NULL),
(177, 'Mr', 'Prithviraj', 'Mishra', 1, '', 'prithviraj.mishra@gmail.com', '+65', '84306897', 'pa5510nplayer', '', '781 upper changi road east , Sunhaven , Block D', '', '486069', NULL, NULL, 'SLNT2207177', 3636, '', NULL, NULL, NULL),
(178, 'Mr', 'Harishchander', 'Misir', 0, '', 'Harish0622@yahoo.com.sg', '+65', '98502369', '80300622', '', '52 ANCHORVALE CRESCENT', ' 05-08 ', '544630', NULL, NULL, 'SLNT2799178', 6421, '', NULL, NULL, NULL),
(179, 'Madam', 'Rita', 'Pawa', 0, '', 'Rita@pawa.com.sg', '+65', '96152037', 'ritapawa', '63388437', '57u crescent road', '', '439369', NULL, NULL, 'SLNT6077179', 7024, '', NULL, NULL, NULL),
(180, 'Madam', 'Sarika', 'S', 0, '', 'access.mshome@gmail.com', '+65', '90843817', 'spspooja', '', '#04-06, 50 Choa Chu Kang North 7', 'Regent Grove Tower A', '689527', NULL, NULL, 'SLNT801180', 2797, 'https://spslnt.org.sg/CreatePassword/0d29a29249a45ab68da19d533a008eea/17f2404717275c6934bc2ac0d5bc6ece/f82a7b9c1912c71453d635bdf9b34dff', NULL, NULL, NULL),
(181, 'Mr', 'Sarika', 'S', 0, '', 'ss.edu.sg@gmail.com', '+65', '90843817', 'firsteducation', '', '#04-06, 50 Choa Chu Kang North 7', 'Regent Grove Tower A', '689527', NULL, NULL, 'SLNT1672181', 2275, '', NULL, NULL, NULL),
(182, 'Miss', 'Janta', 'Kumari', 0, '', 'Janta.bachani@gmail.com', '+65', '93895754', 'Krishna18', '', '297A Compassvale street', '', '541297', NULL, NULL, 'SLNT8303182', 3873, 'https://spslnt.org.sg/CreatePassword/3b779ec56cd3193e8597ab7147adbcfe/2e4b47c69469cc5f5f712ed63cb518ec/b8386e68c598381980e888d128c7f571', NULL, NULL, NULL),
(183, 'Mr', 'Rahul', 'Dev', 1, '', 'rahooldev@gmail.com', '+65', '93895754', 'Hariom', '', '297A Compassvle Street', '', '541297', NULL, NULL, 'SLNT3022183', 1166, '', NULL, NULL, NULL),
(184, 'Mr', 'Hariharan', 'Padmanabhan', 1, '', 'harrychennai@gmail.com', '+65', '96417574', 'Band995$', '', '18 Leicester Road', 'Unit 07-03', '358847', NULL, NULL, 'SLNT7784184', 8496, '', NULL, NULL, NULL),
(185, 'Madam', 'deepti', 'bahl', 1, '', 'diptibahl@gmail.com', '+65', '84999029', 'Deepabahl@123', '', '29-03', 'block 11', '259957', NULL, NULL, 'SLNT9251185', 7955, '', NULL, NULL, NULL),
(186, 'Madam', 'priyanka', 'pandey', 1, '', 'priyanka107p@gmail.com', '+65', '91812634', 'Pandey&mac', '', '34 bayshore road', 'unit 17-03, tower 2b ', '469976', NULL, NULL, 'SLNT8609186', 4278, '', NULL, NULL, NULL),
(187, 'Mr', 'karan', 'khinchi', 1, '', 'karan.khinchi@gmail.com', '+65', '93807210', 'Singapore1234', '', '#12-02, Flame Tree Park', '1 Sin Ming Avenue', '575728', NULL, NULL, 'SLNT2715187', 5981, '', NULL, NULL, NULL),
(188, 'Miss', 'Jyoti', 'Garg', 1, '', 'jyotigarg1@gmail.com', '+65', '87302094', 'Sandeep@0502', '', '11#11 Simei Street 1 , Melville park', '', '529944', NULL, NULL, 'SLNT580188', 7611, '', NULL, NULL, NULL),
(189, 'Mr', 'Rajat', 'Wahi', 1, '', 'wahi.rajat@gmail.com', '+65', '84402136', 'Bayshore_64', '', 'Unit 05-03', '64 Bayshore Road', '469984', NULL, NULL, 'SLNT391189', 4952, '', NULL, NULL, NULL),
(190, 'Mr', 'Manoj', 'Rai', 1, '', 'manoj.rai84@gmail.com', '+65', '92381692', 'Jairamji11!', '', '112 Edgefield Plains', '', '820112', NULL, NULL, 'SLNT7301190', 1825, '', NULL, NULL, NULL),
(191, 'Mr', 'Hariharan', 'Padmanabhan', 0, '', 'harrychennai21@gmail.com', '+65', '96417574', 'Band990$', '', '18 Leicester Road', 'Unit 07-03', '358847', NULL, NULL, 'SLNT2456191', 3079, '', NULL, NULL, NULL),
(192, 'Mr', 'Gaurav', 'Sharma', 0, '', 'gaurav_sharma444@yahoo.com', '+65', '90583686', 'gaurav123', '', '32 Canberra Drive, 01-27 Yishun Emerald, Singapore 768431', '', '768431', NULL, NULL, 'SLNT1776192', 9938, 'https://spslnt.org.sg/CreatePassword/b1fc98f2092e542866b09b17b503815c/06a3104dad6ef86188959d66c8457b29/5434d296bfff06270db25a9adaf6826b', NULL, NULL, NULL),
(193, 'Miss', 'REENA', 'SHARMA', 1, '', 'reenabio@hotmail.com', '+65', '90394134', 'reena123', '', '32 Canberra Drive, 01-27 Yishun Emerald, Singapore 768431', '', '768431', NULL, NULL, 'SLNT9349193', 1487, '', NULL, NULL, NULL),
(194, 'Mr', 'Hemant', 'Chitlangia', 1, '', 'Hemant.chitlangia@gmail.com', '+65', '96341396', 'amansaagar', '', '28 Simei street 1', '#04-12, lift lobby 3, Melvill Park', '529948', NULL, NULL, 'SLNT2001194', 5939, '', NULL, NULL, NULL),
(195, 'Miss', 'Sakunthala', 'Devi', 0, '', 'Ambalma16@yahoo.com.sg', '+65', '86991210', '16Murugan', '', 'Blk 690D, #12-78,Choa Chu Kang Crescent', '', '684690', NULL, NULL, 'SLNT3055195', 6943, '', NULL, NULL, NULL),
(196, 'Miss', 'Sarita', 'Rai', 1, '', 'saritarai.sg@gmail.com', '+65', '92220045', 'Yellow1983', '', '130B Toa Payoh Lor 1', '23-514', '312130', NULL, NULL, 'SLNT2248196', 3498, '', NULL, NULL, NULL),
(197, 'Mr', 'Arun', 'Srivastav', 0, '', 'akularun@gmail.com', '+65', '96527001', 'AkulAdhrit39', '', 'BLK 114 Bukit Purmei Road #12-255 Singapore', '#12-255', '090114', NULL, NULL, 'SLNT5096197', 158, 'https://spslnt.org.sg/CreatePassword/0d017b76046efcafa641fcdfd5308704/ef2d39f5aa924ccd3b3b48af80df3992/c7cc99738cf1737013d2ea981cb56e08', NULL, NULL, NULL),
(198, 'Mr', 'Arun', 'Srivastav', 1, '', 'arunsrivastav@zoho.com', '+65', '96527001', 'AkulAdhrit39', '', 'BLK 114 Bukit Purmei Road #12-255 Singapore', '#12-255', '090114', NULL, NULL, 'SLNT4566198', 7855, '', NULL, NULL, NULL),
(199, 'Madam', 'REYNA', 'VASWANI', 0, '', 'reynavhk@gmail.com', '+65', '91051021', 'kvsw2026', '', '8a tanjong rhu road', '13-03 crystal rhu ', '436889', NULL, NULL, 'SLNT9520199', 2528, '', NULL, NULL, NULL),
(200, 'Madam', 'Sybil', 'DSouza', 0, '', 'sybil.ruby@gmail.com', '+65', '97858659', 'rockfort123*', '', '38A Jervois Road', '02-06 Jervois Lodge', '249034', NULL, NULL, 'SLNT3184200', 9279, '', NULL, NULL, NULL),
(201, 'Mr', 'Prithviraj', 'Mishra', 1, '', 'prithvi@srikrishnamandir.org', '+65', '84306897', 'pa5510nplayer', '', '781 upper changi road east , Sunhaven , Block D', '', '486069', NULL, NULL, 'SLNT6316201', 7015, '', NULL, NULL, NULL),
(202, 'Madam', 'Jyotsna', 'Roy', 0, '', 'Jyot_2@hotmail.com', '+65', '85695466', 'jaimodi1947%', '', '485 YIO CHU KANG ROAD, # 01-08,CASTLE GREEN SINGAPPRE, 787058', '', '787058', NULL, NULL, 'SLNT6085202', 3131, 'https://spslnt.org.sg/CreatePassword/8b534eef34bf40693f81538c3fc138bb/67e4038d2c37fc9849a6ea8d94cfecae/a25c89d24555526fd9035764290eb863', NULL, NULL, NULL),
(203, 'Mr', 'Ameya', 'Salkar', 1, '', 'ameyxing@gmail.com', '+65', '90883412', 'ameya123', '', '7 BEDOK RESERVOIR VIEW AQUARIUS BY THE PARK SINGAPORE 478929', 'Unit #05 - 01', '478929', NULL, NULL, 'SLNT665203', 5373, '', NULL, NULL, NULL),
(204, 'Madam', 'Shilpi', 'Sharma', 0, '', 'shilpi_singapore@yahoo.com', '+65', '93201234', 'CoolCool12', '', 'Block 631, #08-226', ' Senja Road, Bukit Panjang, Singapore', '670631', NULL, NULL, 'SLNT1009204', 1164, '', NULL, NULL, NULL),
(205, 'Mr', 'Shwetank', 'Gupta', 1, '', 'shwetank2003819@gmail.com', '+65', '96112547', 'Reach4sky', '', '#02-38', '881 Woodands St-82', '730881', NULL, NULL, 'SLNT2099205', 2853, '', NULL, NULL, NULL),
(206, 'Mr', 'Reena', 'Puri', 1, '', 'reena.kapuri2610@gmail.com', '+65', '96444159', 'Loral3puri', '67881150', '30, Tanah Merah Kechil Road', '#15-01, Tower 3A', '465558', NULL, NULL, 'SLNT8342206', 6423, '', NULL, NULL, NULL),
(207, 'Madam', 'Reena', 'Puri', 1, '', 'reena_puri239@hotmail.com', '+65', '97303916', 'Natasha$$', '67881150', '30, Tanah Merah Kechil Road', '#15-01, Tower 3A, Singapore', '465558', NULL, NULL, 'SLNT8870207', 644, 'https://spslnt.org.sg/CreatePassword/6cd565fcc2e6773f6b993b26512f1cba/d067bc23c3b66815921e936cd1238ab5/f271725e37c799d2f81573d2cd90e9be', NULL, NULL, NULL),
(208, 'Madam', 'Sonia', 'Jha', 0, '', 'Jhasonia1@gmail.com', '+65', '94528694', 'Reset@09', '', 'Bedok South Avenue 2,', '10D, 08-566, 463010', '463010', NULL, NULL, 'SLNT5552208', 1033, '', NULL, NULL, NULL),
(209, 'Mr', 'Sunil', 'Roy', 1, '', 'Anand_5019@hotmail.com', '+65', '97825779', 'sarthak100%', '', '485 YIO CHU KANG ROAD, # 01-08,CASTLE GREEN SINGAPPRE, 787058', '', '787058', NULL, NULL, 'SLNT1427209', 7241, '', NULL, NULL, NULL),
(210, 'Mr', 'Binajit', 'Kaur', 1, '', 'binajit0403@gmail.com', '+65', '82912250', 'bina', '', 'Blk 353C Admiralty drive', '', '753353', NULL, NULL, 'SLNT6666210', 3200, '', NULL, NULL, NULL),
(211, 'Madam', 'Urmi', 'Dash', 1, '', 'urmidash@gmail.com', '+65', '97578663', '1.History+', '', '28 Flora drive', '03-53', '506951', NULL, NULL, 'SLNT3770211', 8007, '', NULL, NULL, NULL),
(212, 'Mr', 'Sujit', 'Kumar', 1, '', 'sujit7.symbi@gmail.com', '+65', '82853247', 'Master07', '86482119', '11 Sengkang Square, #03-31 Lobby D compass heights', 'Singapore', '545076', NULL, NULL, 'SLNT9996212', 151, '', NULL, NULL, NULL),
(213, 'Mr', 'gautam', 'banik', 1, '', 'banik.g@gmail.com', '+65', '96676153', 'SuchetaGautam', '', 'tampines street 71', 'block 714, 07-206', '520714', NULL, NULL, 'SLNT2253213', 3974, '', NULL, NULL, NULL),
(214, 'Mr', 'Sujay', 'Shah', 1, '', 'sujaygshah@gmail.com', '+65', '82018620', 'Pooja123', '94882341', '130 Tanjong Rhu, Apt 1115', 'Pebble Bay Lobby N', '436918', NULL, NULL, 'SLNT9961214', 1422, '', NULL, NULL, NULL),
(215, 'Mr', 'Charu Chandra', 'Vyas', 1, '', 'varshavyas100@yahoo.com', '+65', '81119171', 'Panditji', '', '272B Sengkang central', 'Singapore', '542272', NULL, NULL, 'SLNT9393215', 5930, '', NULL, NULL, NULL),
(216, 'Miss', 'Tarini', 'Rajendar', 1, '', 'Natasha_raj@hotmail.com', '+65', '94236956', 'tarini0686', '', 'Blk 301B Anchorvale Drive #15-59', '', '542301', NULL, NULL, 'SLNT8944216', 9111, '', NULL, NULL, NULL),
(217, 'Mr', 'Kunal', 'Jaiswal', 1, '', 'Kunal-Jaiswal@live.com', '+65', '82696377', 'siliconvalley@123', '', 'Rivervale Drive', 'BLK-119B, 02-326', '542119', NULL, NULL, 'SLNT6178217', 9042, '', NULL, NULL, NULL),
(218, 'Mr', 'Ajai', 'Agarwal', 1, '', 'ajaiagarwal2012@gmail.com', '+65', '97542241', 'sony1234', '69099290', '22 Bukit Batok Street 52', '#18-06 Guilin View, Singapore', '659245', NULL, NULL, 'SLNT1689218', 3006, '', NULL, NULL, NULL),
(219, 'Madam', 'Reena', 'Kapoor', 0, '', 'aneeroopak@gmail.com', '+65', '96444159', 'Loral3puri', '', '30, Tanah Merah Kechil Road, #15-01', 'Tower 3A, East Meadows, Singapore', '465558', NULL, NULL, 'SLNT3995219', 8328, '', NULL, NULL, NULL),
(220, 'Mr', 'Reena', 'Kapoor', 0, '', 'roopakaneer@gmail.com', '+65', '96444159', 'Loral3puri', '67881150', '30, Tanah Merah Kechil Road, #15-01', 'Tower 3A, East Meadows, Singapore', '465558', NULL, NULL, 'SLNT2725220', 6766, '', NULL, NULL, NULL),
(221, 'Mr', 'Reena', 'Kapoor Puri', 1, '', 'reena.puri@tt.cornerstone.edu.sg', '+65', '96444159', 'Loral3puri', '67881150', '30, Tanah Merah Kechil Road, #15-01', 'Tower 3A, East Meadows, Singapore', '465558', NULL, NULL, 'SLNT9700221', 3725, '', NULL, NULL, NULL),
(222, 'Mr', 'Parul', 'Parul', 1, '', 'parul84@gmail.com', '+65', '82009650', 'phoenix1', '', 'Block 114', 'Edgefield plains', '820114', NULL, NULL, 'SLNT5323222', 9633, '', NULL, NULL, NULL),
(223, 'Mr', 'Abhishek', 'Kumar', 1, '', 'mishranke@gmail.com', '+65', '97726432', 'Amk@560114', '', '08-353, Block-114', 'AMK AVE 4, Kebun Bahru heights', '560114', NULL, NULL, 'SLNT7137223', 6887, '', NULL, NULL, NULL),
(224, 'Mr', 'Mythili', 'Ayyagari', 1, '', 'mythiliayyagari@yahoo.co.in', '+65', '91006240', 'S0m@nk@', '', '391 upper Paya Lebar road', '', '534981', NULL, NULL, 'SLNT2519224', 8025, '', NULL, NULL, NULL),
(225, 'Madam', 'Pritam', 'Kaur', 1, '', 'Pritam2112@gmail.com', '+65', '90285195', 'Masala639', '', '201 Tanjong Rhu Road', 'Unit 01-01 Parkshore ', '436917', NULL, NULL, 'SLNT5353225', 2937, '', NULL, NULL, NULL),
(226, 'Mr', 'Poonam', 'Pal', 1, '', 'poonampal@yahoo.com', '+65', '83760122', 'Rishi14me', '66386942', 'Block 275, 04-88, Tampines Street 22', '', '520275', NULL, NULL, 'SLNT7531226', 4093, '', NULL, NULL, NULL),
(227, 'Madam', 'Sonali', 'Mohanty', 1, '', 'lita.mohanty71@gmail.com', '+65', '83224790', 'asmita', '', 'Blk 230D Tampines Street 24', '#11-55', '527230', NULL, NULL, 'SLNT3761227', 2721, '', NULL, NULL, NULL),
(228, 'Mr', 'shweta', 'madgaonkar', 0, '', 'reachshwetz@gmail.com', '+65', '81617498', 'Pooja*11', '', 'Block 223D, 15-679 , compassvale walk,', 'Sengkang', '544223', NULL, NULL, 'SLNT5856228', 3405, '', NULL, NULL, NULL),
(229, 'Mr', 'SHWETA', 'm', 0, '', 'madgaonkar@hp.com', '+65', '81617498', 'Pooja*11', '', 'Block 223D, 15-679 , compassvale walk,', 'Sengkang', '544223', NULL, NULL, 'SLNT2093229', 9486, '', NULL, NULL, NULL);
INSERT INTO `slnt_member` (`id`, `name_title`, `first_name`, `last_name`, `status`, `filterdate`, `email`, `mobile_code`, `mobile`, `password`, `office_number`, `address_1`, `address_2`, `postal_code`, `create_date`, `create_time`, `user_id`, `otp`, `password_reset_url`, `admin_up_date`, `admin_up_time`, `admin_update_by`) VALUES
(230, 'Mr', 'Rajiv', 'Mathur', 1, '', 'rmathur320@gmail.com', '+65', '96247366', '737400', '', '05-05 Park East Blk 71', '71 Jalan Tua Kong ', '457265', NULL, NULL, 'SLNT9653230', 6986, '', NULL, NULL, NULL),
(231, 'Mr', 'Suresh', 'Mylavarapu', 1, '', 'sureshmylavarapu@gmail.com', '+65', '91890670', 'badboy', '', '66 Marine parade road 06-15', '', '449300', NULL, NULL, 'SLNT2243231', 3169, '', NULL, NULL, NULL),
(232, 'Madam', 'Veemaladeevi', 'Veemaladeevi', 0, '', 'Veemaladeevi@gmail.com', '+65', '90454767', 'v18041325', '90454767', 'NO 5, Neo Pee Teck Lane', '', '119029', NULL, NULL, 'SLNT1098232', 5663, '', NULL, NULL, NULL),
(233, 'Madam', 'Veemaladeevi', 'Veemaladeevi', 0, '', 'ravi18@singnet.com.sg', '+65', '90454767', 'v18041325', '90454767', 'NO 5, Neo Pee Teck Lane', '', '119029', NULL, NULL, 'SLNT5786233', 6405, '', NULL, NULL, NULL),
(234, 'Madam', 'Veemaladeevi', 'Veemaladeevi', 0, '', 'ravi18@singnet.com', '+65', '90454767', 'v18041325', '90454767', 'No 5, Neo Pee Teck Lane', '', '119029', NULL, NULL, 'SLNT4294234', 5067, '', NULL, NULL, NULL),
(235, 'Mr', 'Veemaladeevi', 'Veemaladeevi', 0, '', 'Veemaladeevi@gmail.com.sg', '+65', '90454767', 'v18041325', '90454767', 'No 5 Neo Pee Teck Lane', '', '119025', NULL, NULL, 'SLNT2028235', 1953, '', NULL, NULL, NULL),
(236, 'Mr', 'Pooja', 'Sapra', 1, '', 'pooja.hemanth07@gmail.com', '+65', '98338413', 'whatever', '', '2a geylang serai', '', '403002', NULL, NULL, 'SLNT2198236', 133, '', NULL, NULL, NULL),
(237, 'Mr', 'Keyur', 'Dave', 1, '', 'finance@wirana.com.sg', '+65', '92717605', 'Prayosha69', '', '6 SHENTON WAY, #18-08C,', '', '068809', NULL, NULL, 'SLNT7581237', 8537, '', NULL, NULL, NULL),
(238, 'Mr', 'Prashant', 'Gupta', 1, '', 'pg0408@gmail.com', '+65', '84909684', 'Temple@123', '', '12-44', '', '534209', NULL, NULL, 'SLNT8827238', 4129, '', NULL, NULL, NULL),
(239, 'Mr', 'Aviral', 'Bhargava', 1, '', 'aviralbhrgv@gmail.com', '+65', '96238254', '65846129aA', '', '515 PASIR RIS STREET 52 HDB PUBLIC SHELTERS', '#03-83', '510515', NULL, NULL, 'SLNT291239', 828, '', NULL, NULL, NULL),
(240, 'Mr', 'Arijit', 'Chakraborty', 0, '', 'lawarijit1@gmail.com', '+65', '81028501', 'Imhappy01', '', '21C Simei St 4', '09-50', '528720', NULL, NULL, 'SLNT9543240', 8594, '', NULL, NULL, NULL),
(241, 'Mr', 'Shivkumar', 'Rai', 0, '', 'shivkumar.learning@gmail.com', '+65', '94563271', '@Testing2021', '', 'Simei Rise', '05-61 block 24', '528811', NULL, NULL, 'SLNT4930241', 6688, '', NULL, NULL, NULL),
(242, 'Madam', 'Nitu', 'Sinha', 0, '', 'ns.nitusinha@gmail.com', '+65', '81389701', 'Imhappy01', '', '21C Simei St 4', '09-50', '528720', NULL, NULL, 'SLNT8894242', 9631, '', NULL, NULL, NULL),
(243, 'Madam', 'Ritu', 'Chhabra', 0, '', 'Silverwings.ritu@gmail.com', '+65', '91645727', 'j00065', '', '59 Simei rise', '#08-58, savannah condo park ', '528793', NULL, NULL, 'SLNT3740243', 8312, 'https://spslnt.org.sg/CreatePassword/803f4be6aca932113ec58124cee4b2dc/bcb2bea050454df8f06b6a602bf7c548/fb8618f8b3d330fe99c1b37c51719280', NULL, NULL, NULL),
(244, 'Mr', 'Sunil', 'Bhangale', 1, '', 'sunilmb@yahoo.com', '+65', '97278607', 'sunrose160872', '', '51, Choa Chu Kang Loop', '#10-24, The Warren', '689682', NULL, NULL, 'SLNT2118244', 2169, '', NULL, NULL, NULL),
(245, 'Madam', 'Sarita', 'Chawla', 1, '', 'saritachawla2003@gmail.com', '+65', '97311051', 'sc080561', '', '1 Tanjong Rhu road', '04-03 The Waterside', '436879', NULL, NULL, 'SLNT8076245', 3464, '', NULL, NULL, NULL),
(246, 'Mr', 'Thritraj', 'Batukdeo', 1, '', 'traj18@hotmail.com', '+65', '93866753', '5541', '', 'CIRCUIT ROAD Blk 41 , #05-541', '', '370041', NULL, NULL, 'SLNT3168246', 6244, '', NULL, NULL, NULL),
(247, 'Mr', 'mohit', 'srivastava', 0, '', 'mohitshri@gmail.com', '+65', '90671256', 'rinku@341', '', 'blk 505 01-39 sembawang rd', '', '757708', NULL, NULL, 'SLNT3054247', 3092, '', NULL, NULL, NULL),
(248, 'Mr', 'mohit', 'sri', 1, '', 'jaiki.biz@gmail.com', '+65', '90671256', 'rinku@341', '', 'blk 505 01-39 sembawang rd', 'the seletaris', '757708', NULL, NULL, 'SLNT8352248', 4856, '', NULL, NULL, NULL),
(249, 'Miss', 'nikky', 'ramani', 1, '', 'ramani.nikky@gmail.com', '+65', '93288195', 'DivoLaxmi@1907', '', '#18-05, 60 bayshore road', '', '469982', NULL, NULL, 'SLNT4498249', 3155, '', NULL, NULL, NULL),
(250, 'Madam', 'Shweta', 'Agrawal', 1, '', 'ca.shweta@gmail.com', '+65', '91260401', 'SIDDrah17', '', '130, Tunjong Rhu Road, 09-15 Pebble Bay', 'Lobby N', '436918', NULL, NULL, 'SLNT2187250', 7736, '', NULL, NULL, NULL),
(251, 'Mr', 'Kundan', 'Jha', 1, '', 'kundan_nits@yahoo.com', '+65', '91110677', 'L0gmee!N', '', '16 Simei Street 1', '11-16', '529942', NULL, NULL, 'SLNT3209251', 8465, '', NULL, NULL, NULL),
(252, 'Mr', 'Suchitra', 'Kumari', 1, '', 'ssingh409@gmail.com', '+65', '84375442', 'Terminator@21', '', '#12-17, Block 10 E, Braddell Hill Condo', '', '579724', NULL, NULL, 'SLNT3791252', 300, '', NULL, NULL, NULL),
(253, 'Madam', 'Nesha', 'Srivastva', 1, '', 'shreekalash@hotmail.com', '+65', '93841084', 'Nishu2311', '67619405', '224 Westwood Avenue', '#06-14', '648356', NULL, NULL, 'SLNT2344253', 3668, '', NULL, NULL, NULL),
(254, 'Madam', 'Darshna', 'Devika', 1, '', 'darshnard@gmail.com', '+65', '81382039', 'drdcosta', '', '04-12, 181 tanjong rhu road', '', '436922', NULL, NULL, 'SLNT1757254', 3829, '', NULL, NULL, NULL),
(255, 'Madam', 'Sarita', 'Sarita', 1, '', 'nesrita95@gmail.com', '+65', '88157008', 'G0927127P', '', 'Ho ching road', '07-117', '610119', NULL, NULL, 'SLNT1056255', 1207, '', NULL, NULL, NULL),
(256, 'Mr', 'Karan', 'Narula', 1, '', 'karann@mercantilepacific.com', '+65', '97957799', 'mpasia@123', '', '11 Jalan mesin', '', '368813', NULL, NULL, 'SLNT1481256', 1912, '', NULL, NULL, NULL),
(257, 'Mr', 'Charu chandra', 'Vyas', 1, '', 'ccvyas100@yahoo.com', '+65', '96754965', 'panditji', '', '09-329, Block 272B', 'Sengkang Central ', '542272', NULL, NULL, 'SLNT5752257', 9930, '', NULL, NULL, NULL),
(258, 'Mr', 'Kalyan', 'Mukhuti', 1, '', 'kalyan_mukhuti@yahoo.com.sg', '+65', '90234010', 'baba1903', '80308259', 'Rivervale Crescent, Sengkang', '157C', '543157', NULL, NULL, 'SLNT1604258', 6528, '', NULL, NULL, NULL),
(259, 'Madam', 'Smita', 'Sharma', 0, '', 'smita_sanjeev@hotmail.com', '+65', '98636415', '24thDecember', '', '5 Rhu Cross, #12-19, Costa Rhu, Singapore', '', '437434', NULL, NULL, 'SLNT3496259', 4854, 'https://spslnt.org.sg/CreatePassword/80fd95653d479e1380109d2cfbb333c5/bbc3a3f1f8a19d2db01cab7f19fdf705/ad770ce32d90ebebc6440a87f4345b18', NULL, NULL, NULL),
(260, 'Madam', 'smita', 'sharma', 1, '', 'smitasharma1974@gmail.com', '+65', '98636415', '24thDecember', '', '5,Rhu Cross', '12-19,costa Rhu, Singapore', '437434', NULL, NULL, 'SLNT830260', 1475, '', NULL, NULL, NULL),
(261, 'Mr', 'Amit', 'Jain', 0, '', 'hutamit@hotmail.com', '+65', '84387962', 'G00dluck@123', '', '02-177, block-30 Marine Crescent', '', '440030', NULL, NULL, 'SLNT664261', 235, '', NULL, NULL, NULL),
(262, 'Mr', 'Mohit', 'Agarwal', 1, '', 'iitk.mohit@gmail.com', '+65', '82664632', 'guddandgunju', '', 'Blk 112B Depot Road', '#05-129', '102112', NULL, NULL, 'SLNT3688262', 3589, '', NULL, NULL, NULL),
(263, 'Mr', 'MANISHA', 'SHARMA', 1, '', 'manishas21@hotmail.com', '+65', '81189612', 'P00rnima@', '', '60 Tanah Merah Kechil Avenue - Casa Merah - 10 -18', '', '465529', NULL, NULL, 'SLNT3764263', 522, '', NULL, NULL, NULL),
(264, 'Madam', 'Jyoti', 'Bhat', 1, '', 'jyotibhat@yahoo.com', '+65', '84556491', 'Vedant123*', '', '276 Ocean Drive, The Coast at Sentosa Cove,', '#01-34', '098449', NULL, NULL, 'SLNT5839264', 4582, '', NULL, NULL, NULL),
(265, 'Mr', 'Manoj', 'Sohoni', 1, '', 'manojsohoni@yahoo.co.in', '+65', '97878953', 'telhara', '', '7 WESTCOAST WALK, #21-15', 'THE PARC', '127159', NULL, NULL, 'SLNT2161265', 6329, '', NULL, NULL, NULL),
(266, 'Madam', 'Anushree', 'Gupta', 1, '', 'anushree14@gmail.com', '+65', '91014635', 'India@2020', '', 'Block 276 Unit 08-303', 'Choa Chu Kang Avenue 2', '680276', NULL, NULL, 'SLNT1358266', 2728, '', NULL, NULL, NULL),
(267, 'Mr', 'Abhishek', 'Ranjan', 1, '', 'er.abhishekranjan@gmail.com', '+65', '86717715', 'Neelabhi7', '', 'The Alps Residence, 113  Tampines street 86', '14-41', '528536', NULL, NULL, 'SLNT553267', 1122, '', NULL, NULL, NULL),
(268, 'Madam', 'Seema', 'Shetty', 1, '', 'c_ma17@rediffmail.com', '+65', '94894423', 'aaryaman0109', '', '70 Bayshore Road', 'Costa del sol 30-11', '469987', NULL, NULL, 'SLNT580268', 9848, '', NULL, NULL, NULL),
(269, 'Mr', 'pradeep', 'ranjan', 1, '', 'ranjan123@hotmail.com', '+65', '81681461', 'Jaihanuman$', '', '84 Jalan Daud', '03-04 Windy Heights', '419593', NULL, NULL, 'SLNT8195269', 3922, '', NULL, NULL, NULL),
(270, 'Mr', 'Someswar', 'Sharma', 1, '', 'Ita.manu2000@gmail.com', '+65', '97286040', 'puja@home', '90176457', 'Choa chu kang street 62', '#08-243', '680615', NULL, NULL, 'SLNT5768270', 1938, '', NULL, NULL, NULL),
(271, 'Madam', 'Neha', 'Mehra', 1, '', 'neha.bansal@hotmail.com', '+65', '85352132', 'abcd1234', '', '82, Tanah Merah Kechil', 'Optima', '465515', NULL, NULL, 'SLNT8622271', 7408, '', NULL, NULL, NULL),
(272, 'Miss', 'Deeksha', 'Sinha', 1, '', 'deeksha75@gmail.com', '+65', '97565679', 'Shivji17', '', '329 River Valley Road 10-03 Yong An Park', '', '238361', NULL, NULL, 'SLNT4468272', 4388, '', NULL, NULL, NULL),
(273, 'Mr', 'Anil', 'Bhardwaj', 1, '', 'sanilkku@rediffmail.com', '+65', '85752027', 'Bedlam0532', '', '125 Meyer Road The Makena', 'Unit: 10-06 Block - 125', '437936', NULL, NULL, 'SLNT9548273', 6290, '', NULL, NULL, NULL),
(274, 'Mr', 'Pankaj', 'Suri', 1, '', 'pankajsuri.ps@gmail.com', '+65', '91695485', 'London@123', '', 'Grange Road', 'Unit 1503, Block 53B, Spring Grove Condominium', '249567', NULL, NULL, 'SLNT9455274', 1510, '', NULL, NULL, NULL),
(275, 'Mr', 'Ashish', 'Nainwal', 1, '', 'ashish.nainwal@gmail.com', '+65', '87985812', 'passw0rd1234', '', '07-12, Eastpoint green condo', '3 simei Street 3', '529891', NULL, NULL, 'SLNT9597275', 3659, '', NULL, NULL, NULL),
(276, 'Mr', 'Goutam', 'Nayak', 1, '', 'nitumohanty@gmail.com', '+65', '96583397', 'omsairam28', '', '05-01', '115 Shrewsbury Road', '307856', NULL, NULL, 'SLNT3147276', 8950, 'https://spslnt.org.sg/CreatePassword/d612bcd89afcfcfaf42b939f2ac377d4/4699a37231d2990b4b4aa1247ace0bf6/35b505c68fdf48f3ef702b39dbe43cab', NULL, NULL, NULL),
(277, 'Madam', 'Akanksha', 'Agrawal', 1, '', 'akanksha_s_agrawal@yahoo.com.sg', '+65', '96975694', 'akanksha8', '', '80 jellicoe road citylights#38-03 S208766', '', '208766', NULL, NULL, 'SLNT7343277', 1025, '', NULL, NULL, NULL),
(278, 'Mr', 'Suketu', 'Kohli', 1, '', 'rinakohli1@gmail.com', '+65', '98341105', 'Avyaavya25', '', '125 Meyer Road', '#10-05 The Makena', '437936', NULL, NULL, 'SLNT8229278', 6562, '', NULL, NULL, NULL),
(279, 'Madam', 'Rajni', 'Grover', 1, '', 'Rajnigrover1@gmail.com', '+65', '91391494', 'lovepeaceom123', '', 'Blk 10F,#06-22 Braddell hill , Braddell view', '', '579725', NULL, NULL, 'SLNT5798279', 8824, '', NULL, NULL, NULL),
(280, 'Mr', 'Praveen', 'Thakur`', 1, '', 'thakurwa@yahoo.com', '+65', '81127191', 'Pkt280698', '', '69 Jalan Tua Kong #02-05 Parkeast Condo', '', '457264', NULL, NULL, 'SLNT8442280', 1938, '', NULL, NULL, NULL),
(281, 'Mr', 'Arpita', 'Bhowmick', 1, '', 'bhowmick.arpita@gmail.com', '+65', '90900684', 'Faltu1234', '', '383 tanglin road', '03-07', '247966', NULL, NULL, 'SLNT7170281', 3622, '', NULL, NULL, NULL),
(282, 'Mr', 'Vinay', 'Gupta', 1, '', 'vinay08.nitw@gmail.com', '+65', '93951405', 'ready2go', '', 'Unit- 06-117', '160B Punggol Central', '822160', NULL, NULL, 'SLNT777282', 1510, '', NULL, NULL, NULL),
(283, 'Mr', 'Pramiya', 'Mishra', 1, '', 'pramiya@gmail.com', '+65', '83326059', 'Omsairam08', '', '44 Mount Vernon Road', '', '368062', NULL, NULL, 'SLNT3758283', 7437, '', NULL, NULL, NULL),
(284, 'Mr', 'Rajan', 'Kumar', 1, '', 'rajan_kumar4@hotmail.com', '+65', '91796701', 'mom123dad', '91796701', '3Simei street 3 #07-01 Block 2C', 'Eastpoint Green Condominium ', '529891', NULL, NULL, 'SLNT4200284', 7271, '', NULL, NULL, NULL),
(285, 'Miss', 'shilpa', 'sinha', 1, '', 'shilpasinha75@gmail.com', '+65', '98503731', 'M1h1rAv1', '', 'block 614 Choa Chu Kang , Street 62,', '#03-237', '680614', NULL, NULL, 'SLNT1585285', 9716, '', NULL, NULL, NULL),
(286, 'Mr', 'Rohit', 'Chopra', 1, '', 'Choprarohit123@yahoo.com', '+65', '82231200', 'R1o2h3i4t5#', '', '56, woodlands drive 16', '#09-13, LACASA , TOWER -B1', '737898', NULL, NULL, 'SLNT7562286', 3694, '', NULL, NULL, NULL),
(287, 'Mr', 'Tarun', 'Kabra', 1, '', 'atkabra@gmail.com', '+65', '84841150', '2020isgood', '', '201 Tg Rhu Road', 'Unit 07-04', '436917', NULL, NULL, 'SLNT5107287', 3820, '', NULL, NULL, NULL),
(288, 'Miss', 'Neha', 'Tulshyan', 1, '', 'nehatulshyan@yahoo.com', '+65', '96223525', 'nihcastu', '', '18-06,  The Grange.  1 Grange garden.', '', '249631', NULL, NULL, 'SLNT224288', 2130, '', NULL, NULL, NULL),
(289, 'Mr', 'Pooja', 'Digumarthi', 1, '', 'dpoojakrishna@gmail.com', '+65', '94576927', 'Saravan22%', '', '18 #10-08 melville park', 'Simei st 1', '529943', NULL, NULL, 'SLNT4305289', 330, '', NULL, NULL, NULL),
(290, 'Mr', 'Uday', 'Shetty', 1, '', 'udaysan@hotmail.com', '+65', '94894423', 'siyaaria', '', '70 Bayshore Road', 'Costa Del Sol 3011', '469987', NULL, NULL, 'SLNT7504290', 9146, '', NULL, NULL, NULL),
(291, 'Mr', 'Lovekesh', 'Duggal', 1, '', 'johnn12johnn@gmail.com', '+65', '80163107', 'Pooja@12', '', 'Blk 293d bukit batok st-21', '', '654293', NULL, NULL, 'SLNT4493291', 2435, '', NULL, NULL, NULL),
(292, 'Mr', 'Mihir', 'Gandhi', 1, '', 'mihirgandhi2002@yahoo.co.uk', '+65', '81136306', 'paragmorli', '', '08-218, Block 323,', 'Jurong East Street 31', '600323', NULL, NULL, 'SLNT8513292', 1396, '', NULL, NULL, NULL),
(293, 'Mr', 'Sandeep', 'Gulati', 1, '', 'sgulati_7@yahoo.com', '+65', '85879170', 'Enig79ma', '', '19 Kovan Road', '#05-09 Kovan Melody', '548191', NULL, NULL, 'SLNT6771293', 4673, '', NULL, NULL, NULL),
(294, 'Miss', 'Amola', 'Dalal', 1, '', 'ams1177@yahoo.com.sg', '+65', '90621643', 'Amuval7911', '', '53 Edgedale Plains', '#03-02 The Amore', '828692', NULL, NULL, 'SLNT7191294', 5402, '', NULL, NULL, NULL),
(295, 'Mr', 'Himadri', 'Malik', 1, '', 'malikhimadri@gmail.com', '+65', '92734332', 'Pooja123', '', '106 Grange Road', '', '249594', NULL, NULL, 'SLNT7429295', 1213, '', NULL, NULL, NULL),
(296, 'Madam', 'Aditi', 'Jain', 1, '', 'jainaditi@hotmail.com', '+65', '96756591', 'Pass2803', '', '1 Rhu Cross', '#07-09', '437431', NULL, NULL, 'SLNT4083296', 9817, '', NULL, NULL, NULL),
(297, 'Madam', 'Sonam', 'Gupta', 1, '', 'sonam.sabharwal@gmail.com', '+65', '82686403', 'SONAMS49', '', '515 Dunman Road', '#14-01', '439204', NULL, NULL, 'SLNT4616297', 9106, '', NULL, NULL, NULL),
(298, 'Mr', 'Mohit', 'Dodrajka', 0, '', 'mohit.dodrajka@gmail.com', '+65', '97723070', 'liquid14', '', '#01-20', 'Punggol field walk', '828743', NULL, NULL, 'SLNT4003298', 2048, '', NULL, NULL, NULL),
(299, 'Madam', 'Roshni', 'Dodrajka', 1, '', 'roshni.agar@gmail.com', '+65', '97723070', 'liquid14', '', '9 Punggol Field Walk', '01-20', '828743', NULL, NULL, 'SLNT6993299', 9220, '', NULL, NULL, NULL),
(300, 'Miss', 'Kangan', 'Kangan', 1, '', 'kangan.arora12@gmail.com', '+65', '91184116', '1441Kangan', '', '370B Alexandra Road', '0403', '159955', NULL, NULL, 'SLNT2910300', 5636, '', NULL, NULL, NULL),
(301, 'Miss', 'Sarmistha', 'Ghose', 0, '', 'sarmistha.ghose@gmail.com', '+65', '90060599', '8wonderS!', '', '1 Pasir Ris Link', '', '518185', NULL, NULL, 'SLNT9291301', 9933, '', NULL, NULL, NULL),
(302, 'Miss', 'Richa', 'Ghose', 1, '', 'richa.ghose@hotmail.com', '+65', '81397730', '8wonderS!', '', '1 Pasir Ris Link', '', '518185', NULL, NULL, 'SLNT1003302', 1260, '', NULL, NULL, NULL),
(303, 'Madam', 'Aruna', 'Agrawal', 1, '', 'seekaruna@gmail.com', '+65', '92398835', 'Aruna102!', '', '#11-390, Blk 649', 'Punggol Central, Singapore', '820649', NULL, NULL, 'SLNT9818303', 9485, '', NULL, NULL, NULL),
(304, 'Mr', 'Kakali', 'Mazumder', 1, '', 'kakali365@yahoo.com', '+65', '97240841', 'Kedarnath011', '', '121 Meyer Road. The Makena', 'Unit 10-01', '437932', NULL, NULL, 'SLNT233304', 7610, '', NULL, NULL, NULL),
(305, 'Madam', 'Rakhi', 'Kappala', 1, '', 'rakhi381@rediffmail.com', '+65', '96531110', 'Arush123', '', 'Block 312', '#05-486', '750312', NULL, NULL, 'SLNT9877305', 8468, '', NULL, NULL, NULL),
(306, 'Madam', 'Ritika', 'Sharan', 1, '', 'ritika.sharan91@gmail.com', '+65', '98593857', 'ritika11', '', '1303, block A', 'Le crescendo, 233 paya lebar road', '409044', NULL, NULL, 'SLNT9064306', 1833, '', NULL, NULL, NULL),
(307, 'Mr', 'Venkatesh', 'Kappala', 1, '', 'venk111@yahoo.com', '+65', '97283352', 'rakhi111', '', 'Blk 312,05-486', 'Sembawang Drive', '750312', NULL, NULL, 'SLNT979307', 3152, '', NULL, NULL, NULL),
(308, 'Mr', 'Ruchi', 'Shrivastava', 1, '', 'shrivastava.ruchi@gmail.com', '+65', '91066142', 'tuunna', '', '#03-02, 370 Alexandra Road', 'The Anchorage, ', '159953', NULL, NULL, 'SLNT8810308', 4371, '', NULL, NULL, NULL),
(309, 'Miss', 'mitali', 'bhardwaj', 1, '', 'mitalibhardwaj50@gmail.com', '+65', '88779067', 'Buddy@12345', '', 'Ipoh Lan 16', '1703', '438620', NULL, NULL, 'SLNT2607309', 1515, '', NULL, NULL, NULL),
(310, 'Mr', 'Hitesh', 'Darji', 1, '', 'hgdarjibaroda@hotmail.com', '+65', '98914375', 'Radharani35', '', 'West Bay', '', '128040', NULL, NULL, 'SLNT4884310', 6742, '', NULL, NULL, NULL),
(311, 'Mr', 'Kartik', 'Raval', 1, '', 'kartik_raval@rediffmail.com', '+65', '98905511', 'lurapkkr1', '', '20 Pinewood Grove,', 'Singapore', '738325', NULL, NULL, 'SLNT4641311', 3256, '', NULL, NULL, NULL),
(312, 'Miss', 'Swati', 'Dave', 1, '', 'swatidave11@gmail.com', '+65', '91067160', 'Standard123', '', '26 Bayshore Road', '', '469972', NULL, NULL, 'SLNT3412312', 5957, '', NULL, NULL, NULL),
(313, 'Mr', 'Rajat', 'Bansal', 1, '', 'bansalrajat@yahoo.com', '+65', '97265156', 'paavas11', '', '642C Punggol Drive', '17-371', '823642', NULL, NULL, 'SLNT2596313', 911, '', NULL, NULL, NULL),
(314, 'Miss', 'Deepti', 'Vasan', 1, '', 'nikke_vasan@hotmail.com', '+65', '97117426', 'Deepti26', '97117426', 'Blk 362, Hougang Ave 5', '', '530362', NULL, NULL, 'SLNT4054314', 2719, '', NULL, NULL, NULL),
(315, 'Madam', 'Nidhi', 'Mistry', 1, '', 'nidhi.mist@gmail.com', '+65', '87833713', 'amalgamation', '', 'BEDOK RESERVOIR ROAD', 'Block 605, #03-568', '470605', NULL, NULL, 'SLNT5602315', 9704, '', NULL, NULL, NULL),
(316, 'Mr', 'Ravish', 'Chada', 0, '', 'Rajivchada@gmail.com', '+65', '96208014', 'ojasrc58', '', '1 Siglap road, #03-12, Mandarin gardens.', '', '448906', NULL, NULL, 'SLNT9074316', 7301, '', NULL, NULL, NULL),
(317, 'Mr', 'Ravish', 'Chada', 1, '', 'Ojaswanichada@gmail.com', '+65', '96208014', 'ojasrc58', '', '1 Siglap road, #03-12, mandarin gardens.', '', '448906', NULL, NULL, 'SLNT3108317', 7717, '', NULL, NULL, NULL),
(318, 'Mr', 'Jeet', 'Lahiri', 1, '', 'casadebub@gmail.com', '+65', '93572542', 'interOP@123', '', 'Jurong lake link', '', '648163', NULL, NULL, 'SLNT6572318', 4346, '', NULL, NULL, NULL),
(319, 'Mr', 'Nitin', 'Kataria', 1, '', 'Nitin.cybersec@gmail.com', '+65', '86786537', 'Ayaan@1103', '', '20 flora drive', 'Ferraria park condominium, 07-35', '506947', NULL, NULL, 'SLNT7130319', 531, '', NULL, NULL, NULL),
(320, 'Mr', 'Sameer', 'Dhingra', 1, '', 'dhingra_sameer@hotmail.com', '+65', '98245666', 'Sameer123', '', '125, Meyer Road', '18-02, Makena', '437936', NULL, NULL, 'SLNT921320', 4927, '', NULL, NULL, NULL),
(321, 'Mr', 'Pankaj', 'Khandelwal', 1, '', 'pkhan@hotmail.com', '+65', '92974645', 'Pankaj8899', '', '05-25, Singapore 510158', '', '510158', NULL, NULL, 'SLNT1533321', 4424, '', NULL, NULL, NULL),
(322, 'Mr', 'Aman', 'G', 1, '', 'amang1403@gmail.com', '+65', '93850605', '1348455_Aman', '', 'Serangoon Ave-3', '', '550327', NULL, NULL, 'SLNT7579322', 8784, '', NULL, NULL, NULL),
(323, 'Miss', 'Nisha', 'Gupta', 1, '', 'nisha.relwani@gmail.com', '+65', '92325534', 'harvard', '', '2 Leonie Hill Road', '02-04, Leonie Condotel', '239192', NULL, NULL, 'SLNT1856323', 3558, 'https://spslnt.org.sg/CreatePassword/27e61f00e23193fb5385a6d8f277410a/e25868ed26d79703a51f500166a4ab3a/878a5dc7e34d5c60ec60ef86c5f69a2d', NULL, NULL, NULL),
(324, 'Mr', 'R', 'S', 1, '', 'cramshankar@yahoo.com', '+65', '90219664', 'sps123456', '', 'Hdhdhd', 'Hsjdhf', '148955', NULL, NULL, 'SLNT6296324', 2824, '', NULL, NULL, NULL),
(325, 'Mr', 'Paras', 'Gupta', 1, '', 'Parasgupta3@gmail.com', '+65', '97541537', 'archie33', '', '0204', '2 Leonie Hill Road', '239192', NULL, NULL, 'SLNT8967325', 2667, '', NULL, NULL, NULL),
(326, 'Madam', 'Mrinalini', 'Gupta', 1, '', 'mrinalini20@icloud.com', '+65', '92325534', 'harvard', '', '2 Leonie Hill Road', 'Leonie Condotel, #02-04', '239192', NULL, NULL, 'SLNT7970326', 9356, '', NULL, NULL, NULL),
(327, 'Mr', 'Mayank', 'Kumar', 1, '', 'mayankk@gmail.com', '+65', '93835049', 'mummypapa', '', '04-09', '', '389757', NULL, NULL, 'SLNT8087327', 5652, '', NULL, NULL, NULL),
(328, 'Madam', 'Neha', 'Prasad', 1, '', 'neha.prasad1008@gmail.com', '+65', '98008675', '1234Neha', '', 'Punggol', '#06-302, 118 Edgefield Plains', '820118', NULL, NULL, 'SLNT1566328', 9924, '', NULL, NULL, NULL),
(329, 'Mr', 'Amit', 'Jain', 1, '', 'Hutamit@gmail.com', '+65', '84387962', 'P@55w0rd', '', '06-06 26 Bayshore road, The Bayshore', '', '469972', NULL, NULL, 'SLNT2930329', 3265, '', NULL, NULL, NULL),
(330, 'Mr', 'Abhimanyu', 'Goyal', 1, '', 'abhimanyu.goyal7@gmail.com', '+65', '83720197', 'Abhi123', '', '05-04, 24 Glasgow Road', '', '549340', NULL, NULL, 'SLNT5768330', 3387, '', NULL, NULL, NULL),
(331, 'Miss', 'Ritu', 'Rawat', 1, '', 'Reach.ritu@ymail.com', '+65', '97244744', 'Apple001', '', '68 Punggol Walk', 'Unit 14-39', '828784', NULL, NULL, 'SLNT1920331', 5531, '', NULL, NULL, NULL),
(332, 'Mr', 'Vijay Pratap', 'Rai', 1, '', 'vijayprai@yahoo.co.in', '+65', '97702961', 'chhayarai17977', '', '09-04, 65 Hume Avenue', 'Hillview Green Singapore ', '598743', NULL, NULL, 'SLNT6185332', 5844, '', NULL, NULL, NULL),
(333, 'Mr', 'Gaurav', 'Wahi', 1, '', 'gauravw@hotmail.com', '+65', '91701020', 'JaiMataDi', '84999133', '9,Nathan Road,#19-04,Regency Park,', '9 Nathan Road, #19-04, Regency Park Singapore-248730', '248730', NULL, NULL, 'SLNT7528333', 8440, '', NULL, NULL, NULL),
(334, 'Mr', 'Arun', 'Biswas', 1, '', 'arun_biswas@yahoo.com', '+65', '98268903', 'Seneca@123', '', '33 Tampines Street 34', '05-36', '529238', NULL, NULL, 'SLNT5563334', 7489, '', NULL, NULL, NULL),
(335, 'Mr', 'SUSHANT', 'PATNAIK', 1, '', 'Sushant_patnaik@hotmail.com', '+65', '84041170', 'sans345', '', '34 Bayshore Road', '#06-04, THE BAYSHORE, Tower 2 B', '469976', NULL, NULL, 'SLNT8937335', 7843, '', NULL, NULL, NULL),
(336, 'Mr', 'Sanjeev', 'Verma', 1, '', 'sanjeev_verma@jabil.com', '+65', '91692895', 'sanseem1', '', '7 Simei Street 4', '09-08', '529864', NULL, NULL, 'SLNT9749336', 3045, '', NULL, NULL, NULL),
(337, 'Mr', 'Nandini', 'Sritharan', 1, '', 'nandinirk@yahoo.com', '+65', '96633667', 'Tridev2215', '', '31 Moonstone Lane', '#02-05', '328496', NULL, NULL, 'SLNT4052337', 3304, '', NULL, NULL, NULL),
(338, 'Mr', 'Shikhar', 'Jain', 1, '', 'shikharjain87@gmail.com', '+65', '81086013', 'Sony@123', '', '30 Dover Rise', '03-04 Dover Parkview', '138687', NULL, NULL, 'SLNT5171338', 9804, '', NULL, NULL, NULL),
(339, 'Madam', 'Deepika', 'Siva', 1, '', 'test.0720@yahoo.com', '+65', '96910093', 'lakshminarayan', '', '31 Punggol Field, 11-03', '11-03', '828816', NULL, NULL, 'SLNT7679339', 6440, '', NULL, NULL, NULL),
(340, 'Mr', 'Anudit kumar', 'Verma', 1, '', 'anuditverma@gmail.com', '+65', '82226037', 'anudit1975', '93455191', 'Rivervale crescent', 'Blk 183A ', '541183', NULL, NULL, 'SLNT1525340', 5945, '', NULL, NULL, NULL),
(341, 'Mr', 'Anand', 'Gupta', 1, '', 'anand_kgupta@hotmail.com', '+65', '91792751', 'chart2512', '', 'Aspen heights', '261 River Valley ROad', '238307', NULL, NULL, 'SLNT5851341', 3498, '', NULL, NULL, NULL),
(342, 'Mr', 'Shilpee', 'Mohapatra', 1, '', 'shilpeemohapatra@gmail.com', '+65', '83327016', 'Makdee123', '', '11 Sengkang Square', 'Unit 10 37', '545076', NULL, NULL, 'SLNT6751342', 5040, '', NULL, NULL, NULL),
(343, 'Mr', 'Dinesh Kumar', 'Chugani', 1, '', 'dinesh.kumar.chugani@gmail.com', '+65', '81835083', '62988763', '', 'Blk 194 Kim Keat ave #07-410', '', '310194', NULL, NULL, 'SLNT4187343', 6738, '', NULL, NULL, NULL),
(344, 'Miss', 'Priti', 'Bahety', 1, '', 'Pritibahety@gmail.com', '+65', '93817694', 'acoustic1234', '', '42 Mount Vernon Road', '#03-34', '368061', NULL, NULL, 'SLNT2861344', 6813, '', NULL, NULL, NULL),
(345, 'Mr', 'Rajnish', 'Kumar', 1, '', 'rajnish.sst1@gmail.com', '+65', '98065930', 'funfyt-jihpuq-jepRo8', '', '09-25', '9 Leedon heights', '267954', NULL, NULL, 'SLNT291345', 1703, '', NULL, NULL, NULL),
(346, 'Madam', 'Garima', 'Vashist', 1, '', 'garima2jan@gmail.com', '+65', '91090244', 'Ananya@2011', '', 'Block 485 Jurong West Ave 01', '#04-63  Singapore', '640485', NULL, NULL, 'SLNT1063346', 3601, '', NULL, NULL, NULL),
(347, 'Mr', 'Lalita', 'Singh', 0, '', 'lalitadevi19@hotmail.com', '+65', '90667888', 'laalitha', '', '56', 'Parry Terrace', '547155', NULL, NULL, 'SLNT2867347', 9924, '', NULL, NULL, NULL),
(348, 'Mr', 'Varun', 'Bhat', 1, '', 'ashimasriv@gmail.com', '+65', '86780462', 'Abcdef12', '', '2 leonie hill road', '16-06', '239192', NULL, NULL, 'SLNT3411348', 3407, '', NULL, NULL, NULL),
(349, 'Mr', 'Ashish', 'Kukreti', 1, '', 'mariner.ashish@gmail.com', '+65', '87100155', 'Pooja', '', '#03-02, Block-33', 'Dairy Farm Estate', '679051', NULL, NULL, 'SLNT1965349', 2493, '', NULL, NULL, NULL),
(350, 'Miss', 'Rahika', 'Saikia', 1, '', 'rahitas@gmail.com', '+65', '88175363', 'Rahika2022!', '', 'Blk 37 #13-27', '', '348232', NULL, NULL, 'SLNT9760350', 3902, '', NULL, NULL, NULL),
(351, 'Madam', 'Karishma', 'Dhupar', 1, '', 'kdhupar87@gmail.com', '+65', '93866927', 'fashion123', '93866927', '130 Tanjong Rhu Road', 'Pebble Bay Lobby R 07-25', '436918', NULL, NULL, 'SLNT8724351', 4078, '', NULL, NULL, NULL),
(352, 'Mr', 'Pankaj', 'Gupta', 0, '', 'Pankaj.gupta2313@gmail.con', '+65', '91767505', 'tini2313', '', '#03-10, Blk 5, Oliva', 'Costa Rhu, TANJONG RHU Road', '437434', NULL, NULL, 'SLNT8853352', 9256, '', NULL, NULL, NULL),
(353, 'Mr', 'Someshwar', 'Singh', 1, '', 'singh.someshwar89@gmail.com', '+65', '98508153', 'Neha1991', '', 'Tampines street 22 block 281', '04/276', '520281', NULL, NULL, 'SLNT7468353', 962, '', NULL, NULL, NULL),
(354, 'Mr', 'Samiran', 'Saha', 1, '', 'samiran.smita@gmail.com', '+65', '81688456', 'Babu138$', '', '71 Choa Chu Kang Loop', '#10-03 Northvale ', '689673', NULL, NULL, 'SLNT5804354', 2267, '', NULL, NULL, NULL),
(355, 'Mr', 'Naveen', 'Gupta', 1, '', 'navgupta2@yahoo.com', '+65', '97290223', 'Tropica123', '', 'Block 63, Unit 13-05, The Tropica Condo', 'Tampines Avenue1', '529777', NULL, NULL, 'SLNT1235355', 5474, '', NULL, NULL, NULL),
(356, 'Mr', 'Rajat', 'Jain', 1, '', 'rajatjn26@gmail.com', '+65', '94506564', 'B4jW9NhVBPhd', '', '09 AMBER GARDENS', 'Unit #08-25', '439958', NULL, NULL, 'SLNT2130356', 3175, '', NULL, NULL, NULL),
(357, 'Mr', 'Hritwik', 'Raman', 1, '', 'hritwikraman@gmail.com', '+65', '90225017', 'Bittu_oo71', '', 'Tanahmerah', 'urban vista', '465417', NULL, NULL, 'SLNT9971357', 3609, '', NULL, NULL, NULL),
(358, 'Mr', 'Sumeet', 'Sharma', 1, '', 'sumeets_13@yahoo.com', '+65', '81187071', 'CoolCool12', '', 'Block 631, #08-226', 'Senja Road, Bukit Panjang', '670631', NULL, NULL, 'SLNT949358', 9519, '', NULL, NULL, NULL),
(359, 'Mr', 'Aarti', 'Sharma', 1, '', 'aartisumeet1@gmail.com', '+65', '93272701', 'godsgraceaarti', '93272701', 'Clementi', 'Clementi ', '128805', NULL, NULL, 'SLNT999359', 9190, '', NULL, NULL, NULL),
(360, 'Miss', 'Mansi', 'Chopra', 1, '', 'mancee.c19@gmail.com', '+65', '81432262', 'temple.mc19', '', '768, Bedok Reservoir Road, #14-26', '', '479249', NULL, NULL, 'SLNT8261360', 1718, '', NULL, NULL, NULL),
(361, 'Mr', 'Sumeet', 'Sawhney', 1, '', 's.sawhney@sap.com', '+65', '97359255', 'Aarshia178$', '93272701', '5-12 Regent Park', '26 Jalan Lempeng', '128805', NULL, NULL, 'SLNT5207361', 7972, '', NULL, NULL, NULL),
(362, 'Mr', 'Rohit', 'Gokhale', 1, '', 'rohit.gokhale@gmail.com', '+65', '91017523', 'JaiHanuman1901!', '', '10-06, Emerald Park Tower 1, 6 Indus Road', 'Singapore', '169588', NULL, NULL, 'SLNT4935362', 6458, '', NULL, NULL, NULL),
(363, 'Madam', 'Radhika', 'Panday', 1, '', 'radhikapanday@yahoo.com', '+65', '91150357', 'rainyday', '', '3 Woodgrove View', 'Singapore ', '738106', NULL, NULL, 'SLNT3870363', 3462, '', NULL, NULL, NULL),
(364, 'Mr', 'Aditya', 'Sharma', 1, '', 'aditya.jan19@gmail.com', '+65', '96471091', 'Omsairam1008', '', 'Melville Park', '', '529945', NULL, NULL, 'SLNT7646364', 112, '', NULL, NULL, NULL),
(365, 'Madam', 'Sakshi', 'Chopra', 1, '', 'Sakshi.arora87@gmail.com', '+65', '88256035', 'satyanarayan', '', '10-611, 173 B', 'Punggol field', '822173', NULL, NULL, 'SLNT769365', 3992, '', NULL, NULL, NULL),
(366, 'Mr', 'Arun', 'Lekhwar', 1, '', 'Arun72lekhwar@gmail.com', '+65', '86851577', 'arunlekhwar', '', 'BLK 477A #08-178 yishun street 44', '', '761477', NULL, NULL, 'SLNT5474366', 9515, '', NULL, NULL, NULL),
(367, 'Mr', 'Deepa sarah', 'Sawhney', 1, '', 'deepakhillan@gmail.com', '+65', '96502840', 'deepa180889', '', '49 saraca road', '', '807393', NULL, NULL, 'SLNT2896367', 5894, '', NULL, NULL, NULL),
(368, 'Mr', 'Manoj Kumar', 'Dugar', 1, '', 'manoj.dugar1421@gmail.com', '+65', '96798700', 'Pritid14', '', '333 River Valley Road', '05-04 Yong An Park', '238365', NULL, NULL, 'SLNT9422368', 6178, '', NULL, NULL, NULL),
(369, 'Mr', 'Piyush', 'Kadao', 1, '', 'piyushkadao@gmail.com', '+65', '80275275', 'sonam567', '90271566', '2 Jurong Lake Link', '#05-05 Lake Grande', '648157', NULL, NULL, 'SLNT9608369', 9936, '', NULL, NULL, NULL),
(370, 'Miss', 'sakshi', 'goyal', 1, '', 'sakshi.goyal22@gmail.com', '+65', '81460503', 'sakshi22', '', '46, Mount Vernon Road', '', '368063', NULL, NULL, 'SLNT9230370', 223, '', NULL, NULL, NULL),
(371, 'Mr', 'vinita', 'rai', 1, '', 'vinita776@gmail.com', '+65', '97103724', 'Spring987', '', 'Blk 1D,28-41,Cantonment road,Singapore-085401', '', '085401', NULL, NULL, 'SLNT6157371', 3117, '', NULL, NULL, NULL),
(372, 'Mr', 'Ravindra', 'Sharma', 1, '', 'ravashingravi@gmail.com', '+65', '92349494', 'Ram@hanuman2332', '', '19-03, Block 1, Flo Residence', '', '828739', NULL, NULL, 'SLNT3483372', 9528, '', NULL, NULL, NULL),
(373, 'Mr', 'Lakshmi', 'Pontula', 1, '', 'pontulalakshmi@gmail.com', '+65', '83996341', 'Mahadev@123', '', 'East point green condo Tower 3A 03-24', '5 Simei street 3', '529892', NULL, NULL, 'SLNT9682373', 3835, '', NULL, NULL, NULL),
(374, 'Mr', 'Sanjeev', 'Patel', 1, '', 'Patelsanjeev1982@gmail.com', '+65', '98803510', 'Munnum123$$', '', 'Tampines', '', '521229', NULL, NULL, 'SLNT6825374', 5176, '', NULL, NULL, NULL),
(375, 'Madam', 'Ankita', 'Sharma', 1, '', 'ankisharma09@gmail.com', '+65', '96555831', 'Ankita@123', '', '22 simei street 1, unit 01-10', 'melville park condo', '529945', NULL, NULL, 'SLNT7501375', 8017, '', NULL, NULL, NULL),
(376, 'Mr', 'Rohit', 'Mathur', 1, '', 'rohit4578@gmail.com', '+65', '98304201', 'PrupkLFC4CAhCwF', '', '11 Serangoon Avenue 2', '01-34', '556135', NULL, NULL, 'SLNT659376', 8033, '', NULL, NULL, NULL),
(377, 'Mr', 'Tarun', 'Gupta', 1, '', 'tarungupta1986@gmail.com', '+65', '81615380', 'Chitra@123', '63377185', '05-28 city square residence singapore', '', '207223', NULL, NULL, 'SLNT2506377', 5931, '', NULL, NULL, NULL),
(378, 'Mr', 'Prashant', 'Pradhan', 1, '', 'rupalip1920@gmail.com', '+65', '97762708', 'jaishreeram', '', '03-02, 12 Mount Elizabeth,', 'singapore', '228511', NULL, NULL, 'SLNT721378', 1515, '', NULL, NULL, NULL),
(379, 'Madam', 'Rhea', 'Leckie', 0, '', 'rhealeckie@gmail.com', '+65', '98534060', 'kyddo6-nihwuX-huqpyp', '', 'Tanglin park', '1A Ridley park unit 04-02', '248467', NULL, NULL, 'SLNT6427379', 8871, '', NULL, NULL, NULL),
(380, 'Mr', 'Rhea', 'Leckie', 1, '', 'rhea.leckie@corporatednaconsulting.com', '+65', '98534060', 'hurrYs-revkyr-9wezfy', '', 'Tanglin park', '1A Ridley park unit 04-02', '248467', NULL, NULL, 'SLNT7213380', 5976, '', NULL, NULL, NULL),
(381, 'Mr', 'hemant', 'bakshi', 1, '', 'roshini.bakshi@gmail.com', '+65', '90122438', 'Nmonk123', '', '257 OCEAN DRIVE', '', '098605', NULL, NULL, 'SLNT6680381', 6145, '', NULL, NULL, NULL),
(382, 'Prof', 'Lalit', 'Goel', 1, '', 'Elkgoel@ntu.edu.sg', '+65', '81266341', 'Connect$78', '69081999', 'Block 100 Nanyang Crescent', '#08-03', '637819', NULL, NULL, 'SLNT4912382', 9491, '', NULL, NULL, NULL),
(383, 'Mr', 'Mayank', 'Singla', 1, '', 'mayank.iitg@gmail.com', '+65', '98921424', 'GUAT993crCEs7By', '', '18 Pine Grove,', '#13-02', '597594', NULL, NULL, 'SLNT2904383', 422, '', NULL, NULL, NULL),
(384, 'Mr', 'Neeraj', 'Bindal', 1, '', 'neeraj.bindal@gmail.com', '+65', '90663899', 'Neeraj@123', '', 'Blk 24, 04-04, Melville Park, Simei Street 1', '', '529946', NULL, NULL, 'SLNT5550384', 5534, '', NULL, NULL, NULL),
(385, 'Mr', 'Preetish', 'Nayak', 1, '', 'preet478@gmail.com', '+65', '81376707', 'Singham1!', '', '#08-21,Block 217 Tampines street 23,520217', '', '520217', NULL, NULL, 'SLNT2207385', 4597, '', NULL, NULL, NULL),
(386, 'Mr', 'Udit', 'Prakash', 1, '', 'uditprakash@gmail.com', '+65', '91715552', 'kogqom-4zakne-Tinfep', '', '132 Tanjong Rhu Road, Pebble Bay', 'Lobby G, 0506', '436919', NULL, NULL, 'SLNT4066386', 4807, '', NULL, NULL, NULL),
(387, 'Mr', 'Apurva', 'Jhalani', 1, '', 'ajhalani13@hotmail.com', '+65', '92333155', 'aj260675', '66035934', '16 Stirling road, queenstown, queens condo, #10-15', '', '148957', NULL, NULL, 'SLNT5828387', 8739, '', NULL, NULL, NULL),
(388, 'Madam', 'Sweta', 'Verma', 1, '', 'Rajesh.Sweta@yahoo.com', '+65', '81687172', 'Krishna@123', '', '125', 'MEYER ROAD', '437936', NULL, NULL, 'SLNT3272388', 9281, '', NULL, NULL, NULL),
(389, 'Miss', 'Falguni', 'Natali', 1, '', 'Falguni.natali@gmail.com', '+65', '92303506', 'Puja0000', '', '61 Meyer Road', 'The atria, 1204, singapore', '437885', NULL, NULL, 'SLNT7570389', 9549, '', NULL, NULL, NULL),
(390, 'Mr', 'Aneesh', 'Goel', 1, '', 'aneeshgoel@hotmail.com', '+65', '83121823', 'Kaso98Xako', '', '100 Nanyang Crescent', '#08-03', '637819', NULL, NULL, 'SLNT7920390', 7640, '', NULL, NULL, NULL),
(391, 'Mr', 'Devershi', 'Shukla', 1, '', 'devershishukla@gmail.com', '+65', '96589117', 'Shriganesh1$', '', '#16-330, BLK 126A, Edgedale Plains', 'Punggol', '821126', NULL, NULL, 'SLNT8737391', 7431, '', NULL, NULL, NULL),
(392, 'Mr', 'Mayank', 'Singhal', 1, '', 'Mayank.singhal@icloud.com', '+65', '93974853', 'msinghal22', '', '3 Rhu Cross', '', '437433', NULL, NULL, 'SLNT7218392', 646, '', NULL, NULL, NULL),
(393, 'Mr', 'Devang', 'Oza', 1, '', 'devangoza20@gmail.com', '+65', '98933220', 'Anadarko@09*', '', '8 Margate Rd, Unit 1702', '8M Residences', '438049', NULL, NULL, 'SLNT5044393', 8098, '', NULL, NULL, NULL),
(394, 'Mr', 'Rahul', 'Duggal', 1, '', 'rahuldug@gmail.com', '+65', '93795425', 'Mini123$', '', '10 Stirling Rd', '2301', '148954', NULL, NULL, 'SLNT1629394', 3507, '', NULL, NULL, NULL),
(395, 'Madam', 'subhasree', 'panda', 1, '', 'subhasree786@gmail.com', '+65', '90367453', 'Saira123', '', '210B, 14-168, Compassvale Lane, Singapore-542210', '', '542210', NULL, NULL, 'SLNT1531395', 3131, '', NULL, NULL, NULL),
(396, 'Mr', 'Abhishek', 'Ranjan', 1, '', 'ei.abhishek@gmail.com', '+65', '85712157', 'Abhi@1310', '', 'Coco Palms', '31 Pasir Ris Grove', '518075', NULL, NULL, 'SLNT9701396', 3972, '', NULL, NULL, NULL),
(397, 'Madam', 'Ritika', 'Gopal', 1, '', 'ri.ritika@gmail.com', '+65', '90859106', 'Gundababy11', '', '23 Jalan Raja Udang, #23-11', '', '329216', NULL, NULL, 'SLNT7822397', 457, '', NULL, NULL, NULL),
(398, 'Mr', 'Vikrant', 'Vishal', 1, '', 'vks.vikrant@gmail.com', '+65', '87663351', 'vikrant123', '', '20-06', '534 Jelapang Road', '670534', NULL, NULL, 'SLNT4599398', 9361, '', NULL, NULL, NULL),
(399, 'Mr', 'Saurabh Ram', 'Gupta', 1, '', 'saurabhrg@yahoo.com', '+65', '87220091', 'papa1234@', '87220127', 'Tanjong Rhu', 'Pebble bay ', '436918', NULL, NULL, 'SLNT5632399', 7712, '', NULL, NULL, NULL),
(400, 'Mr', 'Sahil', 'Sinha', 1, '', 'sinha.sahil1214@gmail.com', '+65', '94320650', 'Jms@110503', '', '1 Jalan Kembangan, Unit 05-10', 'The Trumps', '419154', NULL, NULL, 'SLNT5784400', 2377, '', NULL, NULL, NULL),
(401, 'Mr', 'Sahil', 'Sinha', 0, '', 'sahipdiptsite@gmail.com', '+65', '94320650', 'Dell@110503', '', '1 Jalan Kembangan, Unit 05-10, Lobby 3', 'The Trumps', '419154', NULL, NULL, 'SLNT2777401', 4078, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_membership`
--

CREATE TABLE `slnt_membership` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `membership_days` bigint(20) NOT NULL,
  `membership_amount` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_membership`
--

INSERT INTO `slnt_membership` (`id`, `title`, `membership_days`, `membership_amount`, `description`, `status`, `create_date`) VALUES
(2, 'Associate Membership', 365, 24, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 1, '13-10-2021'),
(3, 'Ordinary Membership', 365, 24, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 1, '13-10-2021'),
(4, 'Life Membership', 365000, 501, '<p>For Singaporeans and PRs<br />\r\nValidity: Lifetime</p><br /><br />', 1, '13-10-2021'),
(6, 'Corporate Membership', 365, 60, '<p>For Corporate&nbsp;Sectors<br />\r\nValidity: 1 Year</p><br /><br />', 1, '13-10-2021');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_payment_summery`
--

CREATE TABLE `slnt_payment_summery` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `pay_percent` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amt_pay` decimal(10,2) NOT NULL,
  `due_amt` decimal(10,2) NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paydate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paytime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paystatus` int(11) NOT NULL DEFAULT '0',
  `paywith` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection_slip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slnt_payment_summery`
--

INSERT INTO `slnt_payment_summery` (`id`, `payment_id`, `total`, `pay_percent`, `amt_pay`, `due_amt`, `booking_id`, `paydate`, `paytime`, `paystatus`, `paywith`, `notes`, `transection_slip`) VALUES
(1, '1623931170', 137.00, '50.00', 68.50, 68.50, '1', '17-06-2021', '17:29:30 PM', 0, '', NULL, ''),
(2, '1626418094', 112.00, '100.00', 112.00, 0.00, '2', '16-07-2021', '12:18:14 PM', 0, '', NULL, ''),
(3, '1627965984', 51.00, '100.00', 51.00, 0.00, '3', '03-08-2021', '10:16:24 AM', 0, '', NULL, ''),
(4, '1627990282', 121.00, '100.00', 121.00, 0.00, '4', '03-08-2021', '17:01:22 PM', 0, '', NULL, ''),
(5, '1629544775', 137.00, '100.00', 137.00, 0.00, '5', '21-08-2021', '16:49:35 PM', 1, 'PayPal', NULL, ''),
(6, '1629545298', 137.00, '100.00', 137.00, 0.00, '6', '21-08-2021', '16:58:18 PM', 0, '', NULL, ''),
(7, '1629546861', 21.00, '100.00', 21.00, 0.00, '7', '21-08-2021', '17:24:21 PM', 0, '', NULL, ''),
(8, '1629715582', 60.00, '100.00', 60.00, 0.00, '8', '23-08-2021', '16:16:22 PM', 1, 'PayPal', NULL, ''),
(9, '1629809930', 51.00, '100.00', 51.00, 0.00, '9', '24-08-2021', '18:28:50 PM', 0, '', NULL, ''),
(10, '1629815242', 35.00, '100.00', 35.00, 0.00, '10', '24-08-2021', '19:57:22 PM', 0, '', NULL, ''),
(11, '1629819685', 60.00, '50.00', 30.00, 30.00, '11', '24-08-2021', '21:11:25 PM', 0, '', NULL, ''),
(12, '1629900024', 51.00, '100.00', 51.00, 0.00, '12', '25-08-2021', '19:30:24 PM', 0, '', NULL, ''),
(13, '1629900839', 137.00, '100.00', 137.00, 0.00, '13', '25-08-2021', '19:43:59 PM', 1, 'PayPal', NULL, ''),
(14, '1629955216', 60.00, '100.00', 60.00, 0.00, '14', '26-08-2021', '10:50:16 AM', 0, '', NULL, ''),
(15, '1631079487', 51.00, '100.00', 51.00, 0.00, '15', '08-09-2021', '11:08:07 AM', 0, '', NULL, ''),
(16, '1632230625', 51.00, '100.00', 51.00, 0.00, '16', '21-09-2021', '18:53:45 PM', 1, 'PayPal', NULL, ''),
(17, '1632231250', 51.00, '100.00', 51.00, 0.00, '17', '21-09-2021', '19:04:10 PM', 1, 'PayPal', NULL, ''),
(18, '1632383690', 137.00, '100.00', 137.00, 0.00, '18', '23-09-2021', '13:24:50 PM', 1, 'PayPal', NULL, ''),
(19, '1632383832', 151.00, '100.00', 151.00, 0.00, '19', '23-09-2021', '13:27:12 PM', 1, 'PayPal', NULL, ''),
(20, '1632466720', 46.00, '100.00', 46.00, 0.00, '20', '24-09-2021', '12:28:40 PM', 0, '', NULL, ''),
(21, '1632712394', 76.00, '100.00', 76.00, 0.00, '21', '27-09-2021', '08:43:14 AM', 1, 'PayPal', NULL, ''),
(22, '1632715806', 764.00, '100.00', 764.00, 0.00, '22', '27-09-2021', '09:40:06 AM', 1, 'PayPal', NULL, ''),
(23, '1632720512', 60.00, '100.00', 60.00, 0.00, '23', '27-09-2021', '10:58:32 AM', 1, 'PayPal', NULL, ''),
(24, '1632746957', 35.00, '100.00', 35.00, 0.00, '24', '27-09-2021', '18:19:17 PM', 1, 'PayPal', NULL, ''),
(25, '1632756744', 51.00, '100.00', 51.00, 0.00, '25', '27-09-2021', '21:02:24 PM', 0, '', NULL, ''),
(26, '1632813049', 722.00, '100.00', 722.00, 0.00, '26', '28-09-2021', '12:40:49 PM', 1, 'PayPal', NULL, ''),
(27, '1632813206', 121.00, '50.00', 60.50, 60.50, '27', '28-09-2021', '12:43:26 PM', 1, 'PayPal', NULL, ''),
(28, '1632813324', 60.00, '50.00', 30.00, 30.00, '28', '28-09-2021', '12:45:24 PM', 1, 'PayPal', NULL, ''),
(29, '1632814051', 722.00, '50.00', 361.00, 361.00, '29', '28-09-2021', '12:57:31 PM', 1, 'PayPal', NULL, ''),
(30, '1632881014', 51.00, '100.00', 51.00, 0.00, '30', '29-09-2021', '07:33:34 AM', 0, '', NULL, ''),
(31, '1632881110', 76.00, '100.00', 76.00, 0.00, '31', '29-09-2021', '07:35:10 AM', 1, 'PayPal', NULL, ''),
(32, '1632904710', 60.00, '100.00', 60.00, 0.00, '32', '29-09-2021', '14:08:30 PM', 1, 'PayPal', NULL, ''),
(33, '1632920434', 51.00, '100.00', 51.00, 0.00, '33', '29-09-2021', '18:30:34 PM', 1, 'PayPal', NULL, ''),
(34, '1632925181', 60.00, '100.00', 60.00, 0.00, '34', '29-09-2021', '19:49:41 PM', 1, 'PayPal', NULL, ''),
(35, '1632926517', 60.00, '100.00', 60.00, 0.00, '35', '29-09-2021', '20:11:57 PM', 1, 'PayPal', NULL, ''),
(36, '1632930066', 76.00, '50.00', 38.00, 38.00, '36', '29-09-2021', '21:11:06 PM', 1, 'PayPal', NULL, ''),
(37, '1633706260', 60.00, '50', 30.00, 30.00, '37', '08-10-2021', '20:47:40 PM', 1, 'PayPal', NULL, ''),
(38, '1633707137', 211.00, '50', 105.50, 105.50, '38', '08-10-2021', '21:02:17 PM', 1, 'PayPal', NULL, ''),
(39, '1633834220', 222.00, '100', 222.00, 0.00, '39', '10-10-2021', '08:20:20 AM', 1, 'PayPal', NULL, ''),
(40, '1634125008', 60.00, '100', 60.00, 0.00, '40', '13-10-2021', '17:06:48 PM', 0, '', NULL, ''),
(41, '1634125159', 60.00, '100', 60.00, 0.00, '41', '13-10-2021', '17:09:19 PM', 0, '', NULL, ''),
(42, '1634126623', 60.00, '100', 60.00, 0.00, '42', '13-10-2021', '17:33:43 PM', 0, '', NULL, ''),
(43, '1636528381', 137.00, '100', 137.00, 0.00, '43', '10-11-2021', '12:43:01 PM', 0, '', NULL, ''),
(44, '1637374814', 76.00, '100', 76.00, 0.00, '44', '20-11-2021', '07:50:14 AM', 0, '', NULL, ''),
(45, '1637385859', 60.00, '100', 60.00, 0.00, '45', '20-11-2021', '10:54:19 AM', 0, '', NULL, ''),
(46, '1637397885', 112.00, '100', 112.00, 0.00, '46', '20-11-2021', '14:14:45 PM', 1, 'PayPal', NULL, ''),
(47, '1637404222', 112.00, '100', 112.00, 0.00, '47', '20-11-2021', '16:00:22 PM', 1, 'PayPal', NULL, ''),
(48, '1637408263', 112.00, '100', 112.00, 0.00, '48', '20-11-2021', '17:07:43 PM', 1, 'PayPal', NULL, ''),
(49, '1637421355', 76.00, '50', 38.00, 38.00, '49', '20-11-2021', '20:45:55 PM', 2, 'PayPal', NULL, ''),
(50, '1637421783', 76.00, '50', 38.00, 38.00, '50', '20-11-2021', '20:53:03 PM', 2, 'PayPal', NULL, ''),
(51, '1637421849', 76.00, '100', 76.00, 0.00, '50', '20-11-2021', '20:54:58 PM', 1, 'admin@spslnt.org.sg', 'Payment Received by Cash ', '8626ac8dd3a12a4ef7c057bd3b3e31e7.jpg'),
(52, '1637422603', 76.00, '50', 38.00, 38.00, '51', '20-11-2021', '21:06:43 PM', 2, 'PayPal', NULL, ''),
(53, '1637422622', 76.00, '100', 76.00, 0.00, '51', '20-11-2021', '21:07:18 PM', 1, 'admin@spslnt.org.sg', 'Payment Received by Cash ', 'c128972b6ba30244cb9340985c1b4718.jpg'),
(54, '1637460474', 112.00, '100', 112.00, 0.00, '52', '21-11-2021', '07:37:54 AM', 0, '', NULL, ''),
(55, '1637563838', 51.00, '100', 51.00, 0.00, '53', '22-11-2021', '12:20:38 PM', 0, '', NULL, ''),
(56, '1637639011', 112.00, '100', 112.00, 0.00, '54', '23-11-2021', '09:13:31 AM', 0, '', NULL, ''),
(57, '1637639015', 112.00, '100', 112.00, 0.00, '55', '23-11-2021', '09:13:35 AM', 1, 'PayPal', NULL, ''),
(58, '1637645344', 112.00, '100', 112.00, 0.00, '56', '23-11-2021', '10:59:04 AM', 1, 'PayPal', NULL, ''),
(59, '1637646415', 112.00, '100', 112.00, 0.00, '57', '23-11-2021', '11:16:55 AM', 1, 'PayPal', NULL, ''),
(60, '1637662456', 112.00, '50', 56.00, 56.00, '58', '23-11-2021', '15:44:16 PM', 1, 'PayPal', NULL, ''),
(61, '1637668425', 51.00, '100', 51.00, 0.00, '59', '23-11-2021', '17:23:45 PM', 1, 'PayPal', NULL, ''),
(62, '1637721243', 137.00, '100', 137.00, 0.00, '60', '24-11-2021', '08:04:03 AM', 1, 'PayPal', NULL, ''),
(63, '1637808141', 137.00, '50', 68.50, 68.50, '61', '25-11-2021', '08:12:21 AM', 1, 'PayPal', NULL, ''),
(64, '1637834006', 112.00, '100', 112.00, 0.00, '62', '25-11-2021', '15:23:26 PM', 0, '', NULL, ''),
(65, '1637834961', 112.00, '100', 112.00, 0.00, '63', '25-11-2021', '15:39:21 PM', 1, 'PayPal', NULL, ''),
(66, '1637896796', 137.00, '100', 137.00, 0.00, '64', '26-11-2021', '08:49:56 AM', 1, 'PayPal', NULL, ''),
(67, '1637900673', 137.00, '100', 137.00, 0.00, '65', '26-11-2021', '09:54:33 AM', 1, 'PayPal', NULL, ''),
(68, '1637906375', 112.00, '50', 56.00, 56.00, '66', '26-11-2021', '11:29:35 AM', 1, 'PayPal', NULL, ''),
(69, '1637919630', 76.00, '100', 76.00, 0.00, '67', '26-11-2021', '15:10:30 PM', 1, 'PayPal', NULL, ''),
(70, '1637932747', 112.00, '100', 112.00, 0.00, '68', '26-11-2021', '18:49:07 PM', 1, 'PayPal', NULL, ''),
(71, '1637988238', 112.00, '100', 112.00, 0.00, '69', '27-11-2021', '10:13:58 AM', 1, 'PayPal', NULL, ''),
(72, '1638002873', 151.00, '50', 75.50, 75.50, '70', '27-11-2021', '14:17:53 PM', 0, '', NULL, ''),
(73, '1638014360', 137.00, '100', 137.00, 0.00, '71', '27-11-2021', '17:29:20 PM', 1, 'PayPal', NULL, ''),
(74, '1638062949', 151.00, '50', 75.50, 75.50, '72', '28-11-2021', '06:59:09 AM', 0, '', NULL, ''),
(75, '1638064105', 151.00, '100', 151.00, 0.00, '73', '28-11-2021', '07:18:25 AM', 1, 'PayPal', NULL, ''),
(76, '1638066224', 112.00, '100', 112.00, 0.00, '74', '28-11-2021', '07:53:44 AM', 1, 'PayPal', NULL, ''),
(77, '1638069246', 51.00, '100', 51.00, 0.00, '75', '28-11-2021', '08:44:06 AM', 0, '', NULL, ''),
(78, '1638069895', 51.00, '100', 51.00, 0.00, '76', '28-11-2021', '08:54:55 AM', 0, '', NULL, ''),
(79, '1638071826', 151.00, '50', 75.50, 75.50, '77', '28-11-2021', '09:27:06 AM', 1, 'PayPal', NULL, ''),
(80, '1638082819', 112.00, '100', 112.00, 0.00, '78', '28-11-2021', '12:30:19 PM', 1, 'PayPal', NULL, ''),
(81, '1638083381', 137.00, '100', 137.00, 0.00, '79', '28-11-2021', '12:39:41 PM', 1, 'PayPal', NULL, ''),
(82, '1638103138', 112.00, '100', 112.00, 0.00, '80', '28-11-2021', '18:08:58 PM', 0, '', NULL, ''),
(83, '1638116160', 112.00, '100', 112.00, 0.00, '81', '28-11-2021', '21:46:00 PM', 1, 'PayPal', NULL, ''),
(84, '1638152403', 51.00, '100', 51.00, 0.00, '82', '29-11-2021', '07:50:03 AM', 1, 'PayPal', NULL, ''),
(85, '1638153450', 76.00, '100', 76.00, 0.00, '83', '29-11-2021', '08:07:30 AM', 0, '', NULL, ''),
(86, '1638154802', 137.00, '100', 137.00, 0.00, '84', '29-11-2021', '08:30:02 AM', 1, 'PayPal', NULL, ''),
(87, '1638155573', 137.00, '100', 137.00, 0.00, '85', '29-11-2021', '08:42:53 AM', 1, 'PayPal', NULL, ''),
(88, '1638158998', 112.00, '50', 56.00, 56.00, '86', '29-11-2021', '09:39:58 AM', 1, 'PayPal', NULL, ''),
(89, '1638159050', 151.00, '50', 75.50, 75.50, '87', '29-11-2021', '09:40:50 AM', 0, '', NULL, ''),
(90, '1638163080', 112.00, '100', 112.00, 0.00, '88', '29-11-2021', '10:48:00 AM', 0, '', NULL, ''),
(91, '1638169599', 112.00, '100', 112.00, 0.00, '89', '29-11-2021', '12:36:39 PM', 1, 'PayPal', NULL, ''),
(92, '1638173107', 112.00, '100', 112.00, 0.00, '90', '29-11-2021', '13:35:07 PM', 0, '', NULL, ''),
(93, '1638173710', 112.00, '100', 112.00, 0.00, '91', '29-11-2021', '13:45:10 PM', 1, 'PayPal', NULL, ''),
(94, '1638174947', 137.00, '100', 137.00, 0.00, '92', '29-11-2021', '14:05:47 PM', 0, '', NULL, ''),
(95, '1638183346', 132.00, '100', 132.00, 0.00, '93', '29-11-2021', '16:25:46 PM', 0, '', NULL, ''),
(96, '1638194560', 76.00, '100', 76.00, 0.00, '94', '29-11-2021', '19:32:40 PM', 1, 'PayPal', NULL, ''),
(97, '1638198055', 112.00, '100', 112.00, 0.00, '95', '29-11-2021', '20:30:55 PM', 1, 'PayPal', NULL, ''),
(98, '1638262187', 137.00, '50', 68.50, 68.50, '96', '30-11-2021', '14:19:47 PM', 1, 'PayPal', NULL, ''),
(99, '1638264439', 137.00, '50', 68.50, 68.50, '97', '30-11-2021', '14:57:19 PM', 0, '', NULL, ''),
(100, '1638264840', 112.00, '50', 56.00, 56.00, '98', '30-11-2021', '15:04:00 PM', 1, 'PayPal', NULL, ''),
(101, '1638265262', 137.00, '100', 137.00, 0.00, '99', '30-11-2021', '15:11:02 PM', 0, '', NULL, ''),
(102, '1638271413', 112.00, '100', 112.00, 0.00, '100', '30-11-2021', '16:53:33 PM', 1, 'PayPal', NULL, ''),
(103, '1638275545', 112.00, '100', 112.00, 0.00, '101', '30-11-2021', '18:02:25 PM', 1, 'PayPal', NULL, ''),
(104, '1638319951', 112.00, '100', 112.00, 0.00, '102', '01-12-2021', '06:22:31 AM', 1, 'PayPal', NULL, ''),
(105, '1638323051', 137.00, '100', 137.00, 0.00, '103', '01-12-2021', '07:14:11 AM', 1, 'PayPal', NULL, ''),
(106, '1638331678', 112.00, '100', 112.00, 0.00, '104', '01-12-2021', '09:37:58 AM', 1, 'PayPal', NULL, ''),
(107, '1638336049', 51.00, '100', 51.00, 0.00, '105', '01-12-2021', '10:50:49 AM', 1, 'PayPal', NULL, ''),
(108, '1638362089', 137.00, '100', 137.00, 0.00, '106', '01-12-2021', '18:04:49 PM', 0, '', NULL, ''),
(109, '1638395343', 137.00, '100', 137.00, 0.00, '107', '02-12-2021', '03:19:03 AM', 1, 'PayPal', NULL, ''),
(110, '1638414695', 112.00, '100', 112.00, 0.00, '108', '02-12-2021', '08:41:35 AM', 1, 'PayPal', NULL, ''),
(111, '1638416160', 137.00, '100', 137.00, 0.00, '109', '02-12-2021', '09:06:00 AM', 1, 'PayPal', NULL, ''),
(112, '1638418160', 51.00, '100', 51.00, 0.00, '110', '02-12-2021', '09:39:20 AM', 0, '', NULL, ''),
(113, '1638418547', 137.00, '100', 137.00, 0.00, '111', '02-12-2021', '09:45:47 AM', 0, '', NULL, ''),
(114, '1638418720', 51.00, '50', 25.50, 25.50, '112', '02-12-2021', '09:48:40 AM', 1, 'PayPal', NULL, ''),
(115, '1638424349', 51.00, '100', 51.00, 0.00, '113', '02-12-2021', '11:22:29 AM', 1, 'PayPal', NULL, ''),
(116, '1638432962', 137.00, '100', 137.00, 0.00, '114', '02-12-2021', '13:46:02 PM', 0, '', NULL, ''),
(117, '1638434792', 137.00, '50', 68.50, 68.50, '115', '02-12-2021', '14:16:32 PM', 1, 'PayPal', NULL, ''),
(118, '1638469827', 76.00, '100', 76.00, 0.00, '116', '03-12-2021', '00:00:27 AM', 2, 'PayPal', NULL, ''),
(119, '1638471089', 121.00, '100', 121.00, 0.00, '117', '03-12-2021', '00:21:29 AM', 0, '', NULL, ''),
(120, '1638497594', 137.00, '100', 137.00, 0.00, '118', '03-12-2021', '07:43:14 AM', 0, '', NULL, ''),
(121, '1638498494', 112.00, '100', 112.00, 0.00, '119', '03-12-2021', '07:58:14 AM', 0, '', NULL, ''),
(122, '1638499660', 112.00, '100', 112.00, 0.00, '120', '03-12-2021', '08:17:40 AM', 0, '', NULL, ''),
(123, '1638502285', 137.00, '100', 137.00, 0.00, '121', '03-12-2021', '09:01:25 AM', 1, 'PayPal', NULL, ''),
(124, '1638503272', 51.00, '100', 51.00, 0.00, '122', '03-12-2021', '09:17:52 AM', 0, '', NULL, ''),
(125, '1638506804', 151.00, '100', 151.00, 0.00, '123', '03-12-2021', '10:16:44 AM', 1, 'PayPal', NULL, ''),
(126, '1638510454', 60.00, '100', 60.00, 0.00, '124', '03-12-2021', '11:17:34 AM', 2, 'PayPal', NULL, ''),
(127, '1638511904', 60.00, '100', 60.00, 0.00, '125', '03-12-2021', '11:41:44 AM', 2, 'PayPal', NULL, ''),
(128, '1638512519', 60.00, '100', 60.00, 0.00, '126', '03-12-2021', '11:51:59 AM', 2, 'PayPal', NULL, ''),
(129, '1638512652', 121.00, '100', 121.00, 0.00, '127', '03-12-2021', '11:54:12 AM', 2, 'PayPal', NULL, ''),
(130, '1638513630', 288.00, '100', 288.00, 0.00, '128', '03-12-2021', '12:10:30 PM', 0, '', NULL, ''),
(131, '1638518011', 137.00, '100', 137.00, 0.00, '129', '03-12-2021', '13:23:31 PM', 1, 'PayPal', NULL, ''),
(132, '1638519553', 76.00, '100', 76.00, 0.00, '130', '03-12-2021', '13:49:13 PM', 1, 'PayPal', NULL, ''),
(133, '1638520629', 157.00, '100', 157.00, 0.00, '131', '03-12-2021', '14:07:09 PM', 1, 'PayPal', NULL, ''),
(134, '1638522455', 202.00, '100', 202.00, 0.00, '132', '03-12-2021', '14:37:35 PM', 0, '', NULL, ''),
(135, '1638523781', 51.00, '100', 51.00, 0.00, '133', '03-12-2021', '14:59:41 PM', 0, '', NULL, ''),
(136, '1638523782', 51.00, '100', 51.00, 0.00, '134', '03-12-2021', '14:59:42 PM', 0, '', NULL, ''),
(137, '1638526414', 112.00, '100', 112.00, 0.00, '135', '03-12-2021', '15:43:34 PM', 1, 'PayPal', NULL, ''),
(138, '1638533873', 112.00, '100', 112.00, 0.00, '136', '03-12-2021', '17:47:53 PM', 0, '', NULL, ''),
(139, '1638536477', 76.00, '100', 76.00, 0.00, '137', '03-12-2021', '18:31:17 PM', 1, 'PayPal', NULL, ''),
(140, '1638611170', 112.00, '100', 112.00, 0.00, '138', '04-12-2021', '15:16:10 PM', 1, 'PayPal', NULL, ''),
(141, '1638616412', 51.00, '100', 51.00, 0.00, '139', '04-12-2021', '16:43:32 PM', 0, '', NULL, ''),
(142, '1638616634', 51.00, '100', 51.00, 0.00, '140', '04-12-2021', '16:47:14 PM', 0, '', NULL, ''),
(143, '1638616909', 112.00, '100', 112.00, 0.00, '141', '04-12-2021', '16:51:49 PM', 0, '', NULL, ''),
(144, '1638618089', 51.00, '100', 51.00, 0.00, '142', '04-12-2021', '17:11:29 PM', 1, 'PayPal', NULL, ''),
(145, '1638618823', 51.00, '100', 51.00, 0.00, '143', '04-12-2021', '17:23:43 PM', 0, '', NULL, ''),
(146, '1638619625', 112.00, '100', 112.00, 0.00, '144', '04-12-2021', '17:37:05 PM', 1, 'PayPal', NULL, ''),
(147, '1638680647', 112.00, '100', 112.00, 0.00, '145', '05-12-2021', '10:34:07 AM', 1, 'PayPal', NULL, ''),
(148, '1638681898', 51.00, '100', 51.00, 0.00, '146', '05-12-2021', '10:54:58 AM', 1, 'PayPal', NULL, ''),
(149, '1638750444', 112.00, '100', 112.00, 0.00, '147', '06-12-2021', '05:57:24 AM', 1, 'PayPal', NULL, ''),
(150, '1638754203', 51.00, '100', 51.00, 0.00, '148', '06-12-2021', '07:00:03 AM', 1, 'PayPal', NULL, ''),
(151, '1638756833', 112.00, '100', 112.00, 0.00, '149', '06-12-2021', '07:43:53 AM', 0, '', NULL, ''),
(152, '1638760330', 51.00, '100', 51.00, 0.00, '150', '06-12-2021', '08:42:10 AM', 0, '', NULL, ''),
(153, '1638762444', 51.00, '100', 51.00, 0.00, '151', '06-12-2021', '09:17:24 AM', 1, 'PayPal', NULL, ''),
(154, '1638763522', 112.00, '100', 112.00, 0.00, '152', '06-12-2021', '09:35:22 AM', 1, 'PayPal', NULL, ''),
(155, '1638773434', 112.00, '100', 112.00, 0.00, '153', '06-12-2021', '12:20:34 PM', 0, '', NULL, ''),
(156, '1638779822', 76.00, '100', 76.00, 0.00, '154', '06-12-2021', '14:07:02 PM', 1, 'PayPal', NULL, ''),
(157, '1638788586', 112.00, '100', 112.00, 0.00, '155', '06-12-2021', '16:33:06 PM', 0, '', NULL, ''),
(158, '1638844396', 137.00, '100', 137.00, 0.00, '156', '07-12-2021', '08:03:16 AM', 1, 'PayPal', NULL, ''),
(159, '1638847076', 137.00, '100', 137.00, 0.00, '157', '07-12-2021', '08:47:56 AM', 1, 'PayPal', NULL, ''),
(160, '1638848922', 112.00, '100', 112.00, 0.00, '158', '07-12-2021', '09:18:42 AM', 1, 'PayPal', NULL, ''),
(161, '1638862908', 51.00, '100', 51.00, 0.00, '159', '07-12-2021', '13:11:48 PM', 0, '', NULL, ''),
(162, '1638863510', 112.00, '100', 112.00, 0.00, '160', '07-12-2021', '13:21:50 PM', 1, 'PayPal', NULL, ''),
(163, '1638867732', 112.00, '100', 112.00, 0.00, '161', '07-12-2021', '14:32:12 PM', 1, 'PayPal', NULL, ''),
(164, '1638867768', 51.00, '100', 51.00, 0.00, '162', '07-12-2021', '14:32:48 PM', 1, 'PayPal', NULL, ''),
(165, '1638933982', 137.00, '100', 137.00, 0.00, '163', '08-12-2021', '08:56:22 AM', 1, 'PayPal', NULL, ''),
(166, '1638935158', 112.00, '100', 112.00, 0.00, '164', '08-12-2021', '09:15:58 AM', 1, 'PayPal', NULL, ''),
(167, '1638937403', 51.00, '100', 51.00, 0.00, '165', '08-12-2021', '09:53:23 AM', 0, '', NULL, ''),
(168, '1638953024', 202.00, '100', 202.00, 0.00, '166', '08-12-2021', '14:13:44 PM', 1, 'PayPal', NULL, ''),
(169, '1639037633', 60.00, '100', 60.00, 0.00, '167', '09-12-2021', '13:43:53 PM', 0, '', NULL, ''),
(170, '1639126652', 51.00, '100', 51.00, 0.00, '168', '10-12-2021', '14:27:32 PM', 1, 'PayPal', NULL, ''),
(171, '1639195888', 137.00, '100', 137.00, 0.00, '169', '11-12-2021', '09:41:28 AM', 1, 'PayPal', NULL, ''),
(172, '1639247880', 76.00, '100', 76.00, 0.00, '170', '12-12-2021', '00:08:00 AM', 0, '', NULL, ''),
(173, '1639269915', 76.00, '100', 76.00, 0.00, '171', '12-12-2021', '06:15:15 AM', 0, '', NULL, ''),
(174, '1639278715', 51.00, '100', 51.00, 0.00, '172', '12-12-2021', '08:41:55 AM', 0, '', NULL, ''),
(175, '1639281280', 112.00, '100', 112.00, 0.00, '173', '12-12-2021', '09:24:40 AM', 1, 'PayPal', NULL, ''),
(176, '1639281781', 112.00, '100', 112.00, 0.00, '174', '12-12-2021', '09:33:01 AM', 0, '', NULL, ''),
(177, '1639282008', 112.00, '100', 112.00, 0.00, '175', '12-12-2021', '09:36:48 AM', 1, 'PayPal', NULL, ''),
(178, '1639282297', 102.00, '100', 102.00, 0.00, '176', '12-12-2021', '09:41:37 AM', 0, '', NULL, ''),
(179, '1639282309', 51.00, '100', 51.00, 0.00, '177', '12-12-2021', '09:41:49 AM', 1, 'PayPal', NULL, ''),
(180, '1639369894', 76.00, '100', 76.00, 0.00, '178', '13-12-2021', '10:01:34 AM', 0, '', NULL, ''),
(181, '1639370347', 112.00, '100', 112.00, 0.00, '179', '13-12-2021', '10:09:07 AM', 0, '', NULL, ''),
(182, '1639380966', 227.00, '100', 227.00, 0.00, '180', '13-12-2021', '13:06:06 PM', 0, '', NULL, ''),
(183, '1639386936', 51.00, '100', 51.00, 0.00, '181', '13-12-2021', '14:45:36 PM', 1, 'PayPal', NULL, ''),
(184, '1639388296', 137.00, '100', 137.00, 0.00, '182', '13-12-2021', '15:08:16 PM', 1, 'PayPal', NULL, ''),
(185, '1639391547', 76.00, '100', 76.00, 0.00, '183', '13-12-2021', '16:02:27 PM', 1, 'PayPal', NULL, ''),
(186, '1639391597', 112.00, '100', 112.00, 0.00, '184', '13-12-2021', '16:03:17 PM', 2, 'PayPal', NULL, ''),
(187, '1639391828', 112.00, '100', 112.00, 0.00, '185', '13-12-2021', '16:07:08 PM', 2, 'PayPal', NULL, ''),
(188, '1639393032', 112.00, '100', 112.00, 0.00, '186', '13-12-2021', '16:27:12 PM', 1, 'PayPal', NULL, ''),
(189, '1639446955', 51.00, '100', 51.00, 0.00, '187', '14-12-2021', '07:25:55 AM', 0, '', NULL, ''),
(190, '1639461629', 151.00, '100', 151.00, 0.00, '188', '14-12-2021', '11:30:29 AM', 0, '', NULL, ''),
(191, '1639478157', 151.00, '100', 151.00, 0.00, '189', '14-12-2021', '16:05:57 PM', 1, 'PayPal', NULL, ''),
(192, '1639489869', 151.00, '100', 151.00, 0.00, '190', '14-12-2021', '19:21:09 PM', 1, 'PayPal', NULL, ''),
(193, '1639536658', 112.00, '100', 112.00, 0.00, '191', '15-12-2021', '08:20:58 AM', 1, 'PayPal', NULL, ''),
(194, '1639540834', 72.00, '100', 72.00, 0.00, '192', '15-12-2021', '09:30:34 AM', 0, '', NULL, ''),
(195, '1639560256', 76.00, '100', 76.00, 0.00, '193', '15-12-2021', '14:54:16 PM', 1, 'PayPal', NULL, ''),
(196, '1639580412', 112.00, '100', 112.00, 0.00, '194', '15-12-2021', '20:30:12 PM', 1, 'PayPal', NULL, ''),
(197, '1639626173', 112.00, '100', 112.00, 0.00, '195', '16-12-2021', '09:12:53 AM', 1, 'PayPal', NULL, ''),
(198, '1639628053', 72.00, '100', 72.00, 0.00, '196', '16-12-2021', '09:44:13 AM', 0, '', NULL, ''),
(199, '1639631059', 51.00, '100', 51.00, 0.00, '197', '16-12-2021', '10:34:19 AM', 1, 'PayPal', NULL, ''),
(200, '1639631471', 51.00, '100', 51.00, 0.00, '198', '16-12-2021', '10:41:11 AM', 1, 'PayPal', NULL, ''),
(201, '1639631820', 51.00, '100', 51.00, 0.00, '199', '16-12-2021', '10:47:00 AM', 0, '', NULL, ''),
(202, '1639636120', 51.00, '100', 51.00, 0.00, '200', '16-12-2021', '11:58:40 AM', 1, 'PayPal', NULL, ''),
(203, '1639636275', 112.00, '100', 112.00, 0.00, '201', '16-12-2021', '12:01:15 PM', 1, 'PayPal', NULL, ''),
(204, '1639641946', 102.00, '100', 102.00, 0.00, '202', '16-12-2021', '13:35:46 PM', 1, 'PayPal', NULL, ''),
(205, '1639643345', 72.00, '100', 72.00, 0.00, '203', '16-12-2021', '13:59:05 PM', 0, '', NULL, ''),
(206, '1639649958', 137.00, '100', 137.00, 0.00, '204', '16-12-2021', '15:49:18 PM', 0, '', NULL, ''),
(207, '1639671885', 137.00, '100', 137.00, 0.00, '205', '16-12-2021', '21:54:45 PM', 0, '', NULL, ''),
(208, '1639705069', 137.00, '100', 137.00, 0.00, '206', '17-12-2021', '07:07:49 AM', 1, 'PayPal', NULL, ''),
(209, '1639731899', 112.00, '100', 112.00, 0.00, '207', '17-12-2021', '14:34:59 PM', 1, 'PayPal', NULL, ''),
(210, '1639733765', 72.00, '100', 72.00, 0.00, '208', '17-12-2021', '15:06:05 PM', 1, 'PayPal', NULL, ''),
(211, '1639802622', 51.00, '100', 51.00, 0.00, '209', '18-12-2021', '10:13:42 AM', 0, '', NULL, ''),
(212, '1639804188', 51.00, '100', 51.00, 0.00, '210', '18-12-2021', '10:39:48 AM', 1, 'PayPal', NULL, ''),
(213, '1639804484', 112.00, '100', 112.00, 0.00, '211', '18-12-2021', '10:44:44 AM', 0, '', NULL, ''),
(214, '1639804731', 112.00, '100', 112.00, 0.00, '212', '18-12-2021', '10:48:51 AM', 0, '', NULL, ''),
(215, '1639805106', 112.00, '100', 112.00, 0.00, '213', '18-12-2021', '10:55:06 AM', 0, '', NULL, ''),
(216, '1639821293', 21.00, '100', 21.00, 0.00, '214', '18-12-2021', '15:24:53 PM', 0, '', NULL, ''),
(217, '1639821595', 102.00, '100', 102.00, 0.00, '215', '18-12-2021', '15:29:55 PM', 1, 'PayPal', NULL, ''),
(218, '1639841525', 112.00, '100', 112.00, 0.00, '216', '18-12-2021', '21:02:05 PM', 0, '', NULL, ''),
(219, '1639876689', 137.00, '100', 137.00, 0.00, '217', '19-12-2021', '06:48:09 AM', 1, 'PayPal', NULL, ''),
(220, '1639912002', 51.00, '100', 51.00, 0.00, '218', '19-12-2021', '16:36:42 PM', 1, 'PayPal', NULL, ''),
(221, '1639913019', 76.00, '100', 76.00, 0.00, '219', '19-12-2021', '16:53:39 PM', 1, 'PayPal', NULL, ''),
(222, '1639965509', 97.00, '100', 97.00, 0.00, '220', '20-12-2021', '07:28:29 AM', 2, 'PayPal', NULL, ''),
(223, '1639965648', 76.00, '100', 76.00, 0.00, '221', '20-12-2021', '07:30:48 AM', 1, 'PayPal', NULL, ''),
(224, '1639966685', 51.00, '100', 51.00, 0.00, '222', '20-12-2021', '07:48:05 AM', 0, '', NULL, ''),
(225, '1639967933', 76.00, '100', 76.00, 0.00, '223', '20-12-2021', '08:08:53 AM', 1, 'PayPal', NULL, ''),
(226, '1639972583', 112.00, '100', 112.00, 0.00, '224', '20-12-2021', '09:26:23 AM', 1, 'PayPal', NULL, ''),
(227, '1639973302', 112.00, '100', 112.00, 0.00, '225', '20-12-2021', '09:38:22 AM', 0, '', NULL, ''),
(228, '1639975180', 112.00, '100', 112.00, 0.00, '226', '20-12-2021', '10:09:40 AM', 1, 'PayPal', NULL, ''),
(229, '1639975287', 137.00, '100', 137.00, 0.00, '227', '20-12-2021', '10:11:27 AM', 1, 'PayPal', NULL, ''),
(230, '1639982877', 51.00, '100', 51.00, 0.00, '228', '20-12-2021', '12:17:57 PM', 0, '', NULL, ''),
(231, '1639999568', 151.00, '100', 151.00, 0.00, '229', '20-12-2021', '16:56:08 PM', 1, 'PayPal', NULL, ''),
(232, '1640012111', 112.00, '100', 112.00, 0.00, '230', '20-12-2021', '20:25:11 PM', 1, 'PayPal', NULL, ''),
(233, '1640054377', 202.00, '100', 202.00, 0.00, '231', '21-12-2021', '08:09:37 AM', 1, 'PayPal', NULL, ''),
(234, '1640058476', 137.00, '100', 137.00, 0.00, '232', '21-12-2021', '09:17:56 AM', 0, '', NULL, ''),
(235, '1640060620', 137.00, '100', 137.00, 0.00, '233', '21-12-2021', '09:53:40 AM', 1, 'PayPal', NULL, ''),
(236, '1640065143', 51.00, '100', 51.00, 0.00, '234', '21-12-2021', '11:09:03 AM', 1, 'PayPal', NULL, ''),
(237, '1640068436', 112.00, '100', 112.00, 0.00, '235', '21-12-2021', '12:03:56 PM', 1, 'PayPal', NULL, ''),
(238, '1640068587', 51.00, '100', 51.00, 0.00, '236', '21-12-2021', '12:06:27 PM', 0, '', NULL, ''),
(239, '1640070449', 151.00, '100', 151.00, 0.00, '237', '21-12-2021', '12:37:29 PM', 0, '', NULL, ''),
(240, '1640072098', 176.00, '100', 176.00, 0.00, '238', '21-12-2021', '13:04:58 PM', 0, '', NULL, ''),
(241, '1640080225', 112.00, '100', 112.00, 0.00, '239', '21-12-2021', '15:20:25 PM', 0, '', NULL, ''),
(242, '1640080542', 151.00, '100', 151.00, 0.00, '240', '21-12-2021', '15:25:42 PM', 0, '', NULL, ''),
(243, '1640081279', 151.00, '100', 151.00, 0.00, '241', '21-12-2021', '15:37:59 PM', 1, 'PayPal', NULL, ''),
(244, '1640093365', 112.00, '100', 112.00, 0.00, '242', '21-12-2021', '18:59:25 PM', 1, 'PayPal', NULL, ''),
(245, '1640094652', 51.00, '100', 51.00, 0.00, '243', '21-12-2021', '19:20:52 PM', 0, '', NULL, ''),
(246, '1640094896', 51.00, '100', 51.00, 0.00, '244', '21-12-2021', '19:24:56 PM', 1, 'PayPal', NULL, ''),
(247, '1640126087', 112.00, '100', 112.00, 0.00, '245', '22-12-2021', '04:04:47 AM', 0, '', NULL, ''),
(248, '1640137971', 112.00, '100', 112.00, 0.00, '246', '22-12-2021', '07:22:51 AM', 0, '', NULL, ''),
(249, '1640138421', 112.00, '100', 112.00, 0.00, '247', '22-12-2021', '07:30:21 AM', 1, 'PayPal', NULL, ''),
(250, '1640144112', 137.00, '100', 137.00, 0.00, '248', '22-12-2021', '09:05:12 AM', 0, '', NULL, ''),
(251, '1640146390', 112.00, '100', 112.00, 0.00, '249', '22-12-2021', '09:43:10 AM', 0, '', NULL, ''),
(252, '1640162582', 112.00, '100', 112.00, 0.00, '250', '22-12-2021', '14:13:02 PM', 1, 'PayPal', NULL, ''),
(253, '1640166567', 151.00, '100', 151.00, 0.00, '251', '22-12-2021', '15:19:27 PM', 0, '', NULL, ''),
(254, '1640177622', 137.00, '100', 137.00, 0.00, '252', '22-12-2021', '18:23:42 PM', 0, '', NULL, ''),
(255, '1640233448', 51.00, '100', 51.00, 0.00, '253', '23-12-2021', '09:54:08 AM', 1, 'PayPal', NULL, ''),
(256, '1640240738', 112.00, '100', 112.00, 0.00, '254', '23-12-2021', '11:55:38 AM', 0, '', NULL, ''),
(257, '1640240927', 112.00, '100', 112.00, 0.00, '255', '23-12-2021', '11:58:47 AM', 1, 'PayPal', NULL, ''),
(258, '1640261838', 151.00, '100', 151.00, 0.00, '256', '23-12-2021', '17:47:18 PM', 1, 'PayPal', NULL, ''),
(259, '1640305004', 202.00, '100', 202.00, 0.00, '257', '24-12-2021', '05:46:44 AM', 1, 'PayPal', NULL, ''),
(260, '1640316787', 151.00, '100', 151.00, 0.00, '258', '24-12-2021', '09:03:07 AM', 1, 'PayPal', NULL, ''),
(261, '1640318992', 112.00, '100', 112.00, 0.00, '259', '24-12-2021', '09:39:52 AM', 1, 'PayPal', NULL, ''),
(262, '1640319054', 112.00, '100', 112.00, 0.00, '260', '24-12-2021', '09:40:54 AM', 0, '', NULL, ''),
(263, '1640319177', 112.00, '100', 112.00, 0.00, '261', '24-12-2021', '09:42:57 AM', 0, '', NULL, ''),
(264, '1640319376', 112.00, '100', 112.00, 0.00, '262', '24-12-2021', '09:46:16 AM', 1, 'PayPal', NULL, ''),
(265, '1640321374', 102.00, '100', 102.00, 0.00, '263', '24-12-2021', '10:19:34 AM', 1, 'PayPal', NULL, ''),
(266, '1640326221', 112.00, '100', 112.00, 0.00, '264', '24-12-2021', '11:40:21 AM', 1, 'PayPal', NULL, ''),
(267, '1640326662', 112.00, '100', 112.00, 0.00, '265', '24-12-2021', '11:47:42 AM', 1, 'PayPal', NULL, ''),
(268, '1640337392', 112.00, '100', 112.00, 0.00, '266', '24-12-2021', '14:46:32 PM', 2, 'PayPal', NULL, ''),
(269, '1640337790', 112.00, '100', 112.00, 0.00, '267', '24-12-2021', '14:53:10 PM', 1, 'PayPal', NULL, ''),
(270, '1640343804', 76.00, '100', 76.00, 0.00, '268', '24-12-2021', '16:33:24 PM', 1, 'PayPal', NULL, ''),
(271, '1640355669', 112.00, '100', 112.00, 0.00, '269', '24-12-2021', '19:51:09 PM', 1, 'PayPal', NULL, ''),
(272, '1640421553', 151.00, '100', 151.00, 0.00, '270', '25-12-2021', '14:09:13 PM', 0, '', NULL, ''),
(273, '1640421747', 151.00, '100', 151.00, 0.00, '271', '25-12-2021', '14:12:27 PM', 1, 'PayPal', NULL, ''),
(274, '1640430325', 72.00, '100', 72.00, 0.00, '272', '25-12-2021', '16:35:25 PM', 0, '', NULL, ''),
(275, '1640430483', 72.00, '100', 72.00, 0.00, '273', '25-12-2021', '16:38:03 PM', 1, 'PayPal', NULL, ''),
(276, '1640484056', 112.00, '100', 112.00, 0.00, '274', '26-12-2021', '07:30:56 AM', 1, 'PayPal', NULL, ''),
(277, '1640485821', 112.00, '100', 112.00, 0.00, '275', '26-12-2021', '08:00:21 AM', 0, '', NULL, ''),
(278, '1640485822', 112.00, '100', 112.00, 0.00, '276', '26-12-2021', '08:00:22 AM', 0, '', NULL, ''),
(279, '1640485993', 112.00, '100', 112.00, 0.00, '277', '26-12-2021', '08:03:13 AM', 1, 'PayPal', NULL, ''),
(280, '1640487383', 112.00, '100', 112.00, 0.00, '278', '26-12-2021', '08:26:23 AM', 1, 'PayPal', NULL, ''),
(281, '1640489215', 51.00, '100', 51.00, 0.00, '279', '26-12-2021', '08:56:55 AM', 0, '', NULL, ''),
(282, '1640489825', 176.00, '100', 176.00, 0.00, '280', '26-12-2021', '09:07:05 AM', 0, '', NULL, ''),
(283, '1640491133', 112.00, '100', 112.00, 0.00, '281', '26-12-2021', '09:28:53 AM', 1, 'PayPal', NULL, ''),
(284, '1640497571', 72.00, '100', 72.00, 0.00, '282', '26-12-2021', '11:16:11 AM', 0, '', NULL, ''),
(285, '1640497696', 137.00, '100', 137.00, 0.00, '283', '26-12-2021', '11:18:16 AM', 1, 'PayPal', NULL, ''),
(286, '1640502840', 202.00, '100', 202.00, 0.00, '284', '26-12-2021', '12:44:00 PM', 1, 'PayPal', NULL, ''),
(287, '1640518630', 112.00, '100', 112.00, 0.00, '285', '26-12-2021', '17:07:10 PM', 1, 'PayPal', NULL, ''),
(288, '1640526251', 112.00, '100', 112.00, 0.00, '286', '26-12-2021', '19:14:11 PM', 1, 'PayPal', NULL, ''),
(289, '1640579244', 112.00, '100', 112.00, 0.00, '287', '27-12-2021', '09:57:24 AM', 1, 'PayPal', NULL, ''),
(290, '1640584022', 51.00, '100', 51.00, 0.00, '288', '27-12-2021', '11:17:02 AM', 0, '', NULL, ''),
(291, '1640584141', 151.00, '100', 151.00, 0.00, '289', '27-12-2021', '11:19:01 AM', 0, '', NULL, ''),
(292, '1640588101', 151.00, '100', 151.00, 0.00, '290', '27-12-2021', '12:25:01 PM', 0, '', NULL, ''),
(293, '1640588163', 137.00, '100', 137.00, 0.00, '291', '27-12-2021', '12:26:03 PM', 0, '', NULL, ''),
(294, '1640590039', 202.00, '100', 202.00, 0.00, '292', '27-12-2021', '12:57:19 PM', 0, '', NULL, ''),
(295, '1640592924', 112.00, '100', 112.00, 0.00, '293', '27-12-2021', '13:45:24 PM', 1, 'PayPal', NULL, ''),
(296, '1640596331', 112.00, '100', 112.00, 0.00, '294', '27-12-2021', '14:42:11 PM', 1, 'PayPal', NULL, ''),
(297, '1640601315', 112.00, '100', 112.00, 0.00, '295', '27-12-2021', '16:05:15 PM', 1, 'PayPal', NULL, ''),
(298, '1640604236', 112.00, '100', 112.00, 0.00, '296', '27-12-2021', '16:53:56 PM', 0, '', NULL, ''),
(299, '1640657658', 51.00, '100', 51.00, 0.00, '297', '28-12-2021', '07:44:18 AM', 1, 'PayPal', NULL, ''),
(300, '1640664421', 112.00, '100', 112.00, 0.00, '298', '28-12-2021', '09:37:01 AM', 1, 'PayPal', NULL, ''),
(301, '1640669744', 227.00, '100', 227.00, 0.00, '299', '28-12-2021', '11:05:44 AM', 1, 'PayPal', NULL, ''),
(302, '1640670095', 151.00, '100', 151.00, 0.00, '300', '28-12-2021', '11:11:35 AM', 2, 'PayPal', NULL, ''),
(303, '1640670287', 151.00, '100', 151.00, 0.00, '301', '28-12-2021', '11:14:47 AM', 1, 'PayPal', NULL, ''),
(304, '1640671790', 137.00, '100', 137.00, 0.00, '302', '28-12-2021', '11:39:50 AM', 1, 'PayPal', NULL, ''),
(305, '1640694291', 51.00, '100', 51.00, 0.00, '303', '28-12-2021', '17:54:51 PM', 1, 'PayPal', NULL, ''),
(306, '1640702692', 151.00, '100', 151.00, 0.00, '304', '28-12-2021', '20:14:52 PM', 1, 'PayPal', NULL, ''),
(307, '1640738722', 51.00, '100', 51.00, 0.00, '305', '29-12-2021', '06:15:22 AM', 0, '', NULL, ''),
(308, '1640744274', 112.00, '100', 112.00, 0.00, '306', '29-12-2021', '07:47:54 AM', 1, 'PayPal', NULL, ''),
(309, '1640746846', 112.00, '100', 112.00, 0.00, '307', '29-12-2021', '08:30:46 AM', 1, 'PayPal', NULL, ''),
(310, '1640750186', 51.00, '100', 51.00, 0.00, '308', '29-12-2021', '09:26:26 AM', 0, '', NULL, ''),
(311, '1640750928', 51.00, '100', 51.00, 0.00, '309', '29-12-2021', '09:38:48 AM', 0, '', NULL, ''),
(312, '1640756284', 51.00, '100', 51.00, 0.00, '310', '29-12-2021', '11:08:04 AM', 2, 'PayPal', NULL, ''),
(313, '1640758297', 137.00, '100', 137.00, 0.00, '311', '29-12-2021', '11:41:37 AM', 0, '', NULL, ''),
(314, '1640758511', 112.00, '100', 112.00, 0.00, '312', '29-12-2021', '11:45:11 AM', 1, 'PayPal', NULL, ''),
(315, '1640759120', 21.00, '100', 21.00, 0.00, '313', '29-12-2021', '11:55:20 AM', 2, 'PayPal', NULL, ''),
(316, '1640759267', 51.00, '100', 51.00, 0.00, '314', '29-12-2021', '11:57:47 AM', 0, '', NULL, ''),
(317, '1640765676', 151.00, '100', 151.00, 0.00, '315', '29-12-2021', '13:44:36 PM', 1, 'PayPal', NULL, ''),
(318, '1640827833', 112.00, '100', 112.00, 0.00, '316', '30-12-2021', '07:00:33 AM', 1, 'PayPal', NULL, ''),
(319, '1640859220', 137.00, '100', 137.00, 0.00, '317', '30-12-2021', '15:43:40 PM', 1, 'PayPal', NULL, ''),
(320, '1640871376', 112.00, '100', 112.00, 0.00, '318', '30-12-2021', '19:06:16 PM', 1, 'PayPal', NULL, ''),
(321, '1640912802', 112.00, '100', 112.00, 0.00, '319', '31-12-2021', '06:36:42 AM', 0, '', NULL, ''),
(322, '1640912938', 202.00, '100', 202.00, 0.00, '320', '31-12-2021', '06:38:58 AM', 0, '', NULL, ''),
(323, '1640920540', 137.00, '100', 137.00, 0.00, '321', '31-12-2021', '08:45:40 AM', 0, '', NULL, ''),
(324, '1640922839', 137.00, '100', 137.00, 0.00, '322', '31-12-2021', '09:23:59 AM', 1, 'PayPal', NULL, ''),
(325, '1640938337', 112.00, '100', 112.00, 0.00, '323', '31-12-2021', '13:42:17 PM', 0, '', NULL, ''),
(326, '1640939124', 112.00, '100', 112.00, 0.00, '324', '31-12-2021', '13:55:24 PM', 1, 'PayPal', NULL, ''),
(327, '1641024409', 112.00, '100', 112.00, 0.00, '325', '01-01-2022', '13:36:49 PM', 1, 'PayPal', NULL, ''),
(328, '1641046252', 137.00, '100', 137.00, 0.00, '326', '01-01-2022', '19:40:52 PM', 0, '', NULL, ''),
(329, '1641094388', 202.00, '100', 202.00, 0.00, '327', '02-01-2022', '09:03:08 AM', 1, 'PayPal', NULL, ''),
(330, '1641097926', 112.00, '100', 112.00, 0.00, '328', '02-01-2022', '10:02:06 AM', 1, 'PayPal', NULL, ''),
(331, '1641098618', 112.00, '100', 112.00, 0.00, '329', '02-01-2022', '10:13:38 AM', 0, '', NULL, ''),
(332, '1641103120', 112.00, '100', 112.00, 0.00, '330', '02-01-2022', '11:28:40 AM', 1, 'PayPal', NULL, ''),
(333, '1641127163', 112.00, '100', 112.00, 0.00, '331', '02-01-2022', '18:09:23 PM', 1, 'PayPal', NULL, ''),
(334, '1641176790', 112.00, '100', 112.00, 0.00, '332', '03-01-2022', '07:56:30 AM', 1, 'PayPal', NULL, ''),
(335, '1641176820', 112.00, '100', 112.00, 0.00, '333', '03-01-2022', '07:57:00 AM', 1, 'PayPal', NULL, ''),
(336, '1641179287', 151.00, '100', 151.00, 0.00, '334', '03-01-2022', '08:38:07 AM', 1, 'PayPal', NULL, ''),
(337, '1641186444', 176.00, '100', 176.00, 0.00, '335', '03-01-2022', '10:37:24 AM', 1, 'PayPal', NULL, ''),
(338, '1641189634', 112.00, '100', 112.00, 0.00, '336', '03-01-2022', '11:30:34 AM', 1, 'PayPal', NULL, ''),
(339, '1641192666', 137.00, '100', 137.00, 0.00, '337', '03-01-2022', '12:21:06 PM', 1, 'PayPal', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_puja`
--

CREATE TABLE `slnt_puja` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `venue_price` decimal(10,2) NOT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `non_member_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(11) NOT NULL DEFAULT '0',
  `kalash_sthapna` int(11) NOT NULL DEFAULT '0',
  `gotra_sankalp` int(11) NOT NULL DEFAULT '0',
  `preeti_bhoge` int(11) NOT NULL DEFAULT '0',
  `light_meal` int(11) NOT NULL DEFAULT '0',
  `catering_menu` int(11) NOT NULL DEFAULT '0',
  `blog_prasads` int(11) NOT NULL DEFAULT '0',
  `yajmans` int(11) NOT NULL DEFAULT '0',
  `refreshment` int(11) NOT NULL DEFAULT '0',
  `temple_charges` int(11) NOT NULL DEFAULT '0',
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `update_date` varchar(100) DEFAULT NULL,
  `update_time` varchar(100) DEFAULT NULL,
  `puja_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `fill_from_date` varchar(255) NOT NULL,
  `fill_to_date` varchar(255) NOT NULL,
  `offer_mem_price` decimal(10,2) NOT NULL,
  `offer_non_mem_price` decimal(10,2) NOT NULL,
  `havan_samagri` int(11) NOT NULL,
  `pooja_samgri` int(11) NOT NULL,
  `cancledattime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_puja`
--

INSERT INTO `slnt_puja` (`id`, `description_charge`, `puja_type`, `venue_price`, `member_price`, `non_member_price`, `status`, `kalash_sthapna`, `gotra_sankalp`, `preeti_bhoge`, `light_meal`, `catering_menu`, `blog_prasads`, `yajmans`, `refreshment`, `temple_charges`, `create_date`, `create_time`, `update_date`, `update_time`, `puja_image`, `description`, `to_date`, `from_date`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `havan_samagri`, `pooja_samgri`, `cancledattime`) VALUES
(1, 'Navagraha Or Grahshanti Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:37:42 PM', NULL, NULL, '210503010959.jpg', '<p><span style=\"font-family:open sans,serif; font-size:12pt\">This homam primarily focuses on removing the obstacles that are mainly caused by nine planets. In fact, it is really a boon for those whose planets are detrimental in their horoscope. The nine planets cover both postive and negative influences in the life of a person to a larger extent. However, it is really a difficult one to get relief from the evil and ill effects of the planets. Navagraha shanthi homam is meant for this purpose that help for reducing the consequences in life by meeting exact requirements. In addition, this homam show ways for experiencing desired results while carrying out important works.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(2, 'Gandmool Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:29:45 PM', NULL, NULL, '210503010540.jpg', '<p><span style=\"font-family:arial,helvetica,sans-serif\">Gandmool Dosh Nivarna Pooja&nbsp;has technical process and&nbsp;Gandmool Dosh&nbsp;is formed due to placement of moon in specific position in Ashwini, Ashlesha, Magha, Jyeshtha, Moola and Revati nakshatra in the birth horoscope of a native. It is performed to decrease the strength of malefic planets in the horoscope.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(3, 'Ayush Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:22:33 PM', NULL, NULL, '210503125212.jpg', '<p><span style=\"color:rgb(68, 68, 68); font-family:open sans,serif; font-size:12pt\">Ayushy&nbsp;homam is done to worship the god of life (Ayur Devatha). By doing this homam, one gets long life blessings from Ayur Devatha. This is performed once a year on the day of the star in which the child is born .</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(4, 'Annaprashana', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, '02 Aug, 2021', '05:19:38 PM', NULL, NULL, '210503125502.jpg', '<p>Annaprashan is the holy ceremony in Hinduism to mark the beginning of a baby&rsquo;s food intake. In other words, when a baby starts having things other than mother&rsquo;s milk, Annaprasana Sanskar ceremony is held. It is held by offering Kheer to the baby. Hence, this ceremony is popularly known as First Rice-Eating Ceremony in english.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(5, 'Durga Saptsati  Path  and Havan', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:25:31 PM', NULL, NULL, '210503125909.jpg', '<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:12px\">Durga Saptashati is one of the most mystical and potent scriptures in the tantric world. It is comprised of 700 mantras.<span style=\"color:rgb(117, 117, 117)\"> </span>In Durga Saptashati, there are various chapters and verses for different purposes, which can be recited on different days to get blessings of Mother Durga in various areas of our life .</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:arial,helvetica,sans-serif\">As Durga Saptashati mantras are very powerful, thus they are being cursed by Lord Shiva such that they are not being misused. To get full results of Durga Saptashati, some mantras had to be recited at start and end such that curse can end and results come in full effects. This mantras are called &ldquo;Shapodhar and utkeelan mantras &ldquo;which had to be recited number for times for better fruit</span><span style=\"color:rgb(117, 117, 117); font-family:asap-regular1,serif\">.</span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(6, 'Ganpati Homam', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:27:33 PM', NULL, NULL, '210503010058.png', '<p>Ganapathi homam is performed to beget happiness, prosperity and good health. Anyone is desirous of praying to God to remove any obstacles in any of his plan/ work/Business /action and also to be victorious in his deeds can pray to Lord Ganesha. Ganapathi homam can be performed to please Kethu and hence anyone who has Kethu dasa or bhukthi or wishes to appease Kethu can participate in the homam .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(7, 'Griha Pravesh', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:29:05 PM', NULL, NULL, '210503012832.jpg', '<p><strong>Griha Pravesh&nbsp;Puja&nbsp;(House Warming Ceremony) is an auspicious ceremony. Whenever a property is constructed or purchased, Griha pravesh is done to debar the evil forces and protect the premises against bad luck. As per Vedic scriptures, a house that has not been blessed with griha pravesh puja is likely to be habituated with Conviction (Doshas) and imprecations (Shraps). If we entered in a new home on auspicious moment then it proves to bring happiness and welfare to the whole family.</strong></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(8, 'Haridara Lepon', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:30:18 PM', NULL, NULL, '210503015237.jpg', '<p>The Haldi is superstitiously known to keep evil charms at bay. Indian Vedas and traditions place a great deal of importance on the concept of the evil eye, and it&rsquo;s believed that the Haldi paste protects the bride and the groom from any bad omen before the wedding date. According to Veda, the haldi cleanses and purifies the mind, body and soul. The ceremony signifies an auspicious start for the bride and groom where it purifies their heart and soul before entering into holy matrimony. It marks the beginning of new life together.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(9, 'Bhojan', 'Puja', 0.00, 21.00, 21.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:22:52 PM', NULL, NULL, '210503020243.jpg', '<p>FOR FEEDING BRAHMIN</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(10, 'Astrology', 'Puja', 0.00, 51.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:20:20 PM', NULL, NULL, '210503020832.png', '<p><span style=\"color:rgb(32, 33, 34); font-family:sans-serif; font-size:17.5px\">In Astrology ,an astrologer looks at the planets&#39; positions and tries to understand a person&#39;s character or tries to predict the future.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(11, 'Garud Puran', 'Puja', 0.00, 501.00, 501.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:28:03 PM', NULL, NULL, '210504105228.jpg', '<p><strong>The Garuda Purana, a Vaishnava Purana is one of eighteen Mahapuranas, containing 8,000 to 19,000 verses. The modern era version of Garuda Purana is likely of 800 to 1000 century AD. It contains dialogues between Bhagwan Vishnu and his vehicle, Garuda about death, afterlife, sins, life in hell, location of hell, Yama, punishments meted out to the sinners, types of funeral rites to be performed for the departed, modes of liberation from rebirth cycle .Garuda Purana is supposed to be chanted after the demise of a person; and especially in the 13-day mourning period .</strong></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(12, 'Gopal Santan Homam', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:28:34 PM', NULL, NULL, '210504105525.jpg', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#444444; font-family:verdana,sans-serif\">Santana Gopala Pooja, or Santana Gopala Homam, is dedicated to Krishna. This Pooja/Homam is a boon if there are obstacles or delay in progeny and some complications/obstacles arises during pregnancy. Parents perform it for the welfare of the children. Santana Gopala Pooja/Homam is performed for childless couple , who wish to have a child .This Pooja/Homam is performed not just to beget a child but also for expecting parents to have a healthy and an intellectual child</span><span style=\"color:#444444; font-family:verdana,sans-serif; font-size:18.0pt\">.&nbsp;</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(13, 'Jaat Karma Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:31:19 PM', NULL, NULL, '210504105911.png', '<p><span style=\"font-family:arial,sans-serif; font-size:12pt\">Jaatakarma is all about birth rituals of the child. It is the fourth sacrament and it is performed after the child is born. Most probably this sanskaar done with the Naamkaran sanskar (Naming Ceremony).</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(14, 'Kalsarp Pooja', 'Puja', 0.00, 160.00, 202.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Oct, 2021', '12:53:33 PM', NULL, NULL, '210504110529.jpg', '<p>The&nbsp;<strong>Kalsarp Puja</strong>&nbsp;is a dreaded yoga that can cause one&rsquo;s life to be miserable. A person under the affliction of this yoga leads a life of pain and misfortune. This yoga has the capacity to cancel out all the good Yoga&rsquo;s of the chart. Therefore, after performed&nbsp;&nbsp;Kalsarp Dosh Nivaran Puja&nbsp;&nbsp;it is possible to get rid from Kalsarp Dosh. The main purpose of this Puja is to reduce and reverse the negative effects of the Kalsarp Yog into positive ones.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(15, 'Kuber Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '02 Aug, 2021', '05:32:51 PM', NULL, NULL, '210504110751.jpg', '<p>Lord Kuber, who is believed to be God&#39;s treasurer and in-charge of their wealth, blesses people with prosperity and wealth. He is usually seen as a dwarf with an enlarged stomach, wearing various kinds of precious ornaments and valuable clothes. It is believed that those who worship Lord Kuber on Diwali gain wealth and the ability to fulfil their materialistic desires and wishes. People who are facing financial issues and are having a tough time retaining their ancestral property should worship Lord Kuber during Diwali. Lord Kuber also allows one the opportunities to expand their wealth, fortune and prosperity.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(16, 'Mahalakshmi Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:33:45 PM', NULL, NULL, '210504112320.png', '<p>This pooja is for blessings of maa Lakshmi .It removes misfortunes that creates poverty &ndash; both material as well as spiritual power. Removing your personal or your business financial crisis and attract Good health, wealth, peace and prosperity.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(17, 'Diwali Prayer', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:23:59 PM', NULL, NULL, '210504113307.jpg', '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto,helvetica,arial,sans-serif; font-size:14px\">Diwali is a great festival of light that brings eternal blessings, fortune and mammoth prosperity at home. Diwali Puja is performed to please Goddess Lakshmi and Lord Ganesha.&nbsp;</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(18, 'MAHA MRITYUNJAY HOMAM', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '04 May, 2021', '11:36:52 AM', NULL, NULL, '210504113652.jpg', '<p>Maha Mrityunjaya homam is one of the name of Lord Shiva who helps to relieve from untimely death in life. This homam is also known as Maha Sanjeevani Homa/Yagna. People who worship and offers prayers to him Mrityunjaya can prevent premature deaths manner. Conducting Mrityunjaya homam will lead to various goodness for a person. This function plays a major role in getting blessing and powers from three different shades of Shiva to lead a trouble free life.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(19, 'Mata ki Chowki', 'Puja', 0.00, 101.00, 101.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '02 Aug, 2021', '05:35:31 PM', NULL, NULL, '210504114054.jpg', '<p><span style=\"color:#000000\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">The blessings of Maa Shakti are needed to negotiate the rough course of life. One should perform MATA KI CHOWKI or MATA KA JAGRAN to get blessed by her divine powers and get one&rsquo;s wishes fulfilled.&nbsp;</span></span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(20, 'Mundan Or Choula', 'Puja', 0.00, 121.00, 151.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:35:59 PM', NULL, NULL, '210504114349.jpg', '<p>The Mundan ceremony is a purifying ritual that is as per the directives mentioned in the&nbsp;Vedas. There are sixteen&nbsp;<em>Sanskars</em>&nbsp;or ceremonies that are required to be performed in a person&rsquo;s life, Mundan being one of them. Mundan is also known as&nbsp;<em>Chudakarana</em>&nbsp;and it is here that the&nbsp;baby&rsquo;s hair&nbsp;is shaved off for the first time in his life</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(21, 'Naamkaran (Naming of Child)', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:36:56 PM', NULL, NULL, '210504114806.jpg', '<p><span style=\"font-family:arial,sans-serif; font-size:12pt\">This is the first ceremony in a baby&rsquo;s life and so it helps to forge a good bond between the baby and his or her family. It is usually conducted after the 12th day of birth but this differs as per region and custom. The 12th day is chosen because the first ten days after a baby&rsquo;s birth is thought off to be a period of impurity and so in a sense we can say that the ritual of naamakaranam is one to cleanse the baby and the mother as in some cultures both are given a good oil bath. The name for the newborn is chosen after consultations with the elders. The custom is to give a child a name that is significant for various reasons</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(22, 'New Car Prayer', 'Yajman', 0.00, 121.00, 151.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:38:37 PM', NULL, NULL, '210504120134.jpg', '<p>For prayer of New car .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(23, 'Nishkramana Sanskar', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:39:08 PM', NULL, NULL, '210504120610.jpg', '<p>Nishkramana Sanskar is an important Vedic Sanskara associated with a new born baby and carried out when the child is taken out of the house for the first time. This custom is carried out usually in the fourth month when all the motor and sense organs of the baby are strong enough to tolerate the sun, the wind etc. In some cultures, this custom is carried out after the initial confinement period is over.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(24, 'Office/ Shop / Restaurant Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:39:52 PM', NULL, NULL, '210504125453.jpg', '<p>Puja is performed before starting work in new office. In any building or place a number of energies reside (both positive and negative).One invokes the blessings of God before entering the work place to negate the influence of negative energies and bring in peace and harmony.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(25, 'Rudra Abhishek', 'Puja', 0.00, 160.00, 202.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '03 Dec, 2021', '02:09:40 PM', NULL, NULL, '210504010506.jpg', '<p>Lord Shiva is also known by the name of Rudra - that represents his fiercest form. The shiv&nbsp; Rudrabhishek refers to the ritual bath of the Shiv Lingam. It is one of the most significant and popular ceremonies to please Lord Shiva and is seen as the greatest spiritual puja in all the Vedic scriptures. Performing this puja bestows one with health, wealth and happiness and offers protection against enemies, negativity, and evil.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(26, 'Samavartana', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:41:53 PM', NULL, NULL, '210504011451.jpg', '<p><span style=\"color:rgb(0, 0, 0); font-family:calibri,candara,segoe,seoge ui,oprtima,arial,sans-sarif; font-size:14px\">Samavartana is a&nbsp;</span>Hindu ceremony<span style=\"color:rgb(0, 0, 0); font-family:calibri,candara,segoe,seoge ui,oprtima,arial,sans-sarif; font-size:14px\">&nbsp;that marks the end of student hood and&nbsp;</span>Brahmacharya<span style=\"color:rgb(0, 0, 0); font-family:calibri,candara,segoe,seoge ui,oprtima,arial,sans-sarif; font-size:14px\">.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(27, 'Satyanarayan Vrat Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:42:46 PM', NULL, NULL, '210504011636.jpg', '<p>Satyanarayan is the combination of two words &ndash; &lsquo;Satya&rsquo; meaning truth and &lsquo;Narayana&rsquo; meaning the highest being. So Satyanarayan signifies &lsquo;the highest being that is the embodiment of truth&rsquo;. Satyanarayan puja is the worship of the Narayana form of Lord Vishnu in order to attain self-purification and blessings. It is the easiest and most inexpensive way to worship the lord and attain his blessings. This puja is usually performed before an auspicious occasion like marriage, inauguration of house etc. in order to bring happiness, prosperity and well-being for the family.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(28, 'Dasha  Prayer', 'Puja', 0.00, 51.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:23:25 PM', NULL, NULL, '210504024423.jpg', '<p>It is performed on&nbsp;10th day of death .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(29, 'Marriage Solemnization', 'Puja', 0.00, 151.00, 201.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:34:38 PM', NULL, NULL, '210504014429.jpg', '<p>It is done before wedding ,bride and groom sign ROM on the day of Solemnization .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(30, 'Udyapan', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:44:57 PM', NULL, NULL, '210505093835.jpeg', '<p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"color:rgb(68, 70, 66)\">It is the ritual performed on the day of the formal ending of vrats like Solah Shukravar Vrat, Solah Somavar Vrat and all important fasting that are observed for a period of year or month.</span></span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(31, 'Shuddhikaran', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '02 Aug, 2021', '05:43:18 PM', NULL, NULL, '210504015841.jpeg', '<p>This Puja removes the evil forces and negativity from the house saving the child from evil effects.Shuddhikaran Puja brings peace, auspiciousness and freedom to perform religious activities .It purifies the environment, house and family members from infections or impurities.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(32, 'Sudarshana Homam', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '04 May, 2021', '02:02:29 PM', NULL, NULL, '210504020229.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Sudarshana Homam<span style=\"color:rgb(0, 0, 0)\">&nbsp;is a Hindu ritual involving fire. Participating in Sudarshana Homam helps a person destroy negativity, gives him victory over the enemies, and protects against the evil eye.</span></span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(33, 'Sunderkand Path', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '07 Dec, 2021', '11:56:06 AM', NULL, NULL, '211207115606.jpeg', '<p>Sunderkand is remembered for the success of Hanumanji. Sunderkand is the only chapter which is the victory of Lord Hanuman of Lord Ram. This is a lesson to boost self-confidence and will. The person gets mental strength from the text of Sundarakand, he gets confidence to complete any task.&nbsp;Lord Hanuman Puja&nbsp;has been considered to be complete to fulfill all the wishes. Bajrangbali is a very happy God, many ways have been described in the scriptures to get his grace, and one of these measures is to recite Sundarkand. Sunderkand is recited to please Hanumanji soon and the happiness of the person who follows this lesson starts communicating happiness.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(34, 'Ekadasha Prayer', 'Puja', 0.00, 51.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '20 Oct, 2021', '01:03:33 PM', NULL, NULL, '211020010333.jpg', '<p>It is performed on 11th day of death .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(35, 'Dwadasha Prayer', 'Puja', 0.00, 51.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:51:15 PM', NULL, NULL, '210504024721.jpg', '<p>It is perform on 13th day of death.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(36, 'Tarpan', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:44:09 PM', NULL, NULL, '210504025743.jpg', '<p><span style=\"font-size:14px\"><span style=\"color:rgb(0, 0, 0); font-family:open sans,sans-serif\">The word &lsquo;</span>Tarpan<span style=\"color:rgb(0, 0, 0); font-family:open sans,sans-serif\">&rsquo; has been formed from the root word &lsquo;Trup&rsquo; .The objective of performing&nbsp;</span>tarpan<span style=\"color:rgb(0, 0, 0); font-family:open sans,sans-serif\">&nbsp;is that God, deceased ancestors&rsquo; souls .</span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 1, NULL),
(37, 'Vastu Homam', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:45:20 PM', NULL, NULL, '210505094658.jpg', '<p><span style=\"color:rgb(0, 0, 0); font-family:poppins,sans-serif; font-size:15px\">&nbsp;Vastu Shanti Puja forms an integral part of Vastu Shastra as it purges home or an office from negative or bad impacts caused by the evil energies or the faults in construction.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(38, 'Vidhyaarambha Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:47:10 PM', NULL, NULL, '210505100051.jpg', '<p><span style=\"font-family:cambay,serif; font-size:12pt\">Vidya means &ldquo;Knowledge&rdquo; and Arambham means &ldquo;Start&rdquo;. Thus it is a ritual, which formally introduces children into the characters of the syllabary .</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(39, 'Havan Only', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:30:43 PM', NULL, NULL, '210505010447.jpg', '<p><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"color:rgb(17, 17, 17)\">Havan has a purifying effect on both the devotee who performs this sacrifice as well as one&rsquo;s environment. Through the chanting of mantras and offerings into the fire, one&rsquo;s chakras are re-energised, creating a revitalised and rejuvenating effect for both the body and mind. Positive thoughts, words and actions then pave the way for further success</span><span style=\"background-color:rgb(241, 241, 241); color:rgb(17, 17, 17)\">.</span></span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 0, NULL),
(40, 'Karnavedham', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:32:28 PM', NULL, NULL, '210505013251.jpg', '<p><span style=\"color:rgb(82, 82, 82); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">Karnavedham is one of the Hindu Samskaras (sacraments) performed for a child. It is an ear piercing ceremony that occurs in the third or fifth year for some Hindu children. This can still be performed in later years.</span></p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(41, 'Kundali Preperation', 'Puja', 0.00, 51.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02 Aug, 2021', '05:33:21 PM', NULL, NULL, '210505020934.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(42, 'Pinddan Or Varshik Pooja', 'Puja', 0.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '02 Aug, 2021', '05:40:42 PM', NULL, NULL, '210621123957.jpg', '<p>Pind daan as per Hindu belief is a ritual to offer homage to the departed soul .</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(43, 'Atma Shanti', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '06 Dec, 2021', '08:44:32 AM', NULL, NULL, '211206084432.jpg', '<p>For 1st Death Anniversary of the departed soul.</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_puja_time`
--

CREATE TABLE `slnt_puja_time` (
  `id` int(11) NOT NULL,
  `pooja_time` int(11) NOT NULL,
  `pooja_date` varchar(255) NOT NULL,
  `from_time` varchar(100) DEFAULT NULL,
  `to_time` varchar(100) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_puja_time`
--

INSERT INTO `slnt_puja_time` (`id`, `pooja_time`, `pooja_date`, `from_time`, `to_time`, `create_date`, `create_time`) VALUES
(60, 3, 'Tue', '12:00 PM', '02:00 PM', '06 May, 2021', '01:42:30 PM'),
(64, 3, 'Wed', '12:00 PM', '02:00 PM', '06 May, 2021', '01:44:18 PM'),
(74, 3, 'Sat', '10:00 AM', '12:00 PM', '22 Nov, 2021', '11:48:02 AM'),
(76, 3, 'Sat', '02:00 PM', '04:00 PM', '10 May, 2021', '11:43:56 AM'),
(78, 3, 'Sun', '12:30 PM', '02:30 PM', '10 May, 2021', '11:45:50 AM'),
(80, 3, 'Thu', '02:00 PM', '04:00 PM', '10 May, 2021', '11:47:56 AM'),
(83, 9, 'Sun', '12:30 PM', '01:30 PM', '10 May, 2021', '11:49:26 AM'),
(84, 9, 'Sun', '02:00 PM', '03:00 PM', '10 May, 2021', '11:49:46 AM'),
(85, 9, 'Mon', '12:30 PM', '01:30 PM', '10 May, 2021', '11:52:19 AM'),
(86, 28, 'Sun', '12:30 PM', '02:30 PM', '10 May, 2021', '11:59:29 AM'),
(87, 28, 'Mon', '12:30 PM', '02:30 PM', '10 May, 2021', '11:59:53 AM'),
(88, 28, 'Tue', '12:30 PM', '02:30 PM', '10 May, 2021', '12:00:11 PM'),
(89, 28, 'Wed', '12:30 PM', '02:30 PM', '10 May, 2021', '12:00:27 PM'),
(90, 28, 'Thu', '12:30 PM', '02:30 PM', '10 May, 2021', '12:00:41 PM'),
(91, 28, 'Fri', '12:30 PM', '02:30 PM', '10 May, 2021', '12:00:52 PM'),
(92, 28, 'Sat', '12:30 PM', '02:30 PM', '10 May, 2021', '12:01:07 PM'),
(93, 28, 'Sun', '12:30 PM', '02:30 PM', '10 May, 2021', '12:01:20 PM'),
(120, 35, 'Mon', '12:00 PM', '02:00 PM', '10 May, 2021', '12:13:05 PM'),
(121, 35, 'Tue', '12:00 PM', '02:00 PM', '10 May, 2021', '12:13:18 PM'),
(122, 35, 'Sun', '12:00 PM', '02:00 PM', '10 May, 2021', '12:18:54 PM'),
(123, 35, 'Wed', '12:00 PM', '02:00 PM', '10 May, 2021', '12:19:10 PM'),
(124, 35, 'Thu', '12:00 PM', '02:00 PM', '10 May, 2021', '12:19:23 PM'),
(125, 35, 'Fri', '12:00 PM', '02:00 PM', '10 May, 2021', '12:19:36 PM'),
(126, 35, 'Sat', '12:00 PM', '02:00 PM', '10 May, 2021', '12:19:46 PM'),
(127, 34, 'Sun', '12:00 PM', '02:30 PM', '10 May, 2021', '12:20:26 PM'),
(128, 34, 'Mon', '12:00 PM', '02:30 PM', '10 May, 2021', '12:20:39 PM'),
(129, 34, 'Tue', '12:00 PM', '02:30 PM', '10 May, 2021', '12:20:49 PM'),
(130, 34, 'Wed', '12:00 PM', '02:30 PM', '10 May, 2021', '12:20:58 PM'),
(131, 34, 'Thu', '12:00 PM', '02:30 PM', '10 May, 2021', '12:21:06 PM'),
(132, 34, 'Fri', '12:00 PM', '02:30 PM', '10 May, 2021', '12:21:19 PM'),
(133, 34, 'Sat', '12:00 PM', '02:30 PM', '10 May, 2021', '12:21:28 PM'),
(134, 34, 'Sun', '12:00 PM', '02:30 PM', '10 May, 2021', '12:21:39 PM'),
(196, 9, '', '12:30 PM', '01:30 PM', '11 May, 2021', '11:46:46 AM'),
(197, 9, 'Wed', '12:30 PM', '01:30 PM', '11 May, 2021', '11:36:40 AM'),
(198, 9, 'Thu', '12:30 PM', '01:30 PM', '11 May, 2021', '11:36:55 AM'),
(199, 9, 'Fri', '12:30 PM', '01:30 PM', '11 May, 2021', '11:37:07 AM'),
(200, 9, 'Sat', '12:30 PM', '01:30 PM', '11 May, 2021', '11:37:22 AM'),
(337, 19, 'Fri', '07:00 PM', '08:30 PM', '11 May, 2021', '03:07:30 PM'),
(376, 15, 'Sun', '12:30 PM', '02:30 PM', '12 May, 2021', '11:56:36 AM'),
(380, 15, 'Mon', '02:00 PM', '04:00 PM', '12 May, 2021', '12:02:24 PM'),
(382, 15, 'Tue', '10:00 AM', '12:00 PM', '12 May, 2021', '12:02:48 PM'),
(389, 15, 'Wed', '02:00 PM', '04:00 PM', '12 May, 2021', '12:04:39 PM'),
(392, 15, 'Thu', '12:00 PM', '02:00 PM', '12 May, 2021', '12:05:13 PM'),
(396, 15, 'Fri', '12:00 PM', '02:00 PM', '12 May, 2021', '12:06:01 PM'),
(482, 29, 'Mon', '12:00 PM', '02:00 PM', '13 May, 2021', '01:43:02 PM'),
(483, 29, 'Tue', '12:00 PM', '02:00 PM', '13 May, 2021', '01:46:34 PM'),
(484, 29, 'Wed', '12:00 PM', '02:00 PM', '13 May, 2021', '01:46:45 PM'),
(485, 29, 'Thu', '12:00 PM', '02:00 PM', '13 May, 2021', '01:46:56 PM'),
(486, 29, 'Fri', '12:00 PM', '02:00 PM', '13 May, 2021', '01:47:13 PM'),
(487, 29, 'Sat', '12:00 PM', '02:00 PM', '13 May, 2021', '01:47:24 PM'),
(559, 23, 'Mon', '08:00 AM', '10:00 AM', '16 May, 2021', '10:31:46 AM'),
(561, 23, 'Tue', '08:00 AM', '10:00 AM', '16 May, 2021', '10:33:57 AM'),
(562, 23, 'Wed', '08:00 AM', '10:00 AM', '16 May, 2021', '10:34:06 AM'),
(563, 23, 'Thu', '08:00 AM', '10:00 AM', '16 May, 2021', '10:34:20 AM'),
(564, 23, 'Fri', '08:00 AM', '10:00 AM', '16 May, 2021', '10:34:29 AM'),
(565, 23, 'Sat', '08:00 AM', '10:00 AM', '16 May, 2021', '10:35:40 AM'),
(566, 23, 'Sun', '12:30 PM', '02:30 PM', '16 May, 2021', '10:35:54 AM'),
(775, 4, 'Mon', '12:30 PM', '02:00 PM', '22 Nov, 2021', '11:39:03 AM'),
(776, 4, 'Tue', '08:00 AM', '10:00 AM', '22 Nov, 2021', '11:39:21 AM'),
(777, 4, 'Thu', '02:00 PM', '03:30 PM', '22 Nov, 2021', '11:39:47 AM'),
(778, 4, 'Fri', '12:30 PM', '02:00 PM', '22 Nov, 2021', '11:40:09 AM'),
(779, 4, 'Sat', '12:30 PM', '02:00 PM', '22 Nov, 2021', '11:40:26 AM'),
(780, 4, 'Sat', '04:00 PM', '06:00 PM', '22 Nov, 2021', '11:40:47 AM'),
(781, 4, 'Sun', '12:30 PM', '02:00 PM', '22 Nov, 2021', '11:41:05 AM'),
(782, 3, 'Mon', '02:00 PM', '04:00 PM', '22 Nov, 2021', '11:42:45 AM'),
(783, 3, 'Tue', '02:00 PM', '04:00 PM', '22 Nov, 2021', '11:43:52 AM'),
(784, 3, 'Wed', '07:00 PM', '08:30 PM', '22 Nov, 2021', '11:45:05 AM'),
(785, 3, 'Fri', '02:00 PM', '04:00 PM', '22 Nov, 2021', '11:46:39 AM'),
(786, 3, 'Sun', '02:00 PM', '04:00 PM', '22 Nov, 2021', '11:49:02 AM'),
(787, 5, 'Tue', '12:00 PM', '02:00 PM', '22 Nov, 2021', '11:54:21 AM'),
(788, 5, 'Tue', '04:00 PM', '05:30 PM', '22 Nov, 2021', '11:54:35 AM'),
(789, 5, 'Fri', '04:00 PM', '06:00 PM', '22 Nov, 2021', '11:55:08 AM'),
(790, 2, 'Sun', '12:30 PM', '02:00 PM', '22 Nov, 2021', '11:58:23 AM'),
(791, 2, 'Mon', '12:00 PM', '02:00 PM', '22 Nov, 2021', '11:58:38 AM'),
(793, 2, 'Wed', '12:00 PM', '02:00 PM', '22 Nov, 2021', '11:59:18 AM'),
(794, 2, 'Thu', '12:00 PM', '02:00 PM', '22 Nov, 2021', '11:59:32 AM'),
(795, 2, 'Fri', '12:00 PM', '02:00 PM', '22 Nov, 2021', '11:59:43 AM'),
(796, 2, 'Sat', '12:00 PM', '02:00 PM', '22 Nov, 2021', '12:00:00 PM'),
(797, 6, 'Wed', '08:00 AM', '10:00 AM', '22 Nov, 2021', '12:02:29 PM'),
(798, 6, 'Wed', '12:00 PM', '02:00 PM', '22 Nov, 2021', '12:02:44 PM'),
(799, 6, 'Wed', '04:00 PM', '06:00 PM', '22 Nov, 2021', '12:02:58 PM'),
(800, 12, 'Mon', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:05:40 PM'),
(801, 12, 'Tue', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:05:50 PM'),
(802, 12, 'Wed', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:06:02 PM'),
(803, 12, 'Thu', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:06:21 PM'),
(804, 12, 'Fri', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:06:35 PM'),
(805, 12, 'Sat', '07:00 AM', '08:00 AM', '22 Nov, 2021', '12:06:45 PM'),
(806, 25, 'Mon', '08:00 AM', '10:00 AM', '22 Nov, 2021', '12:50:49 PM'),
(807, 25, 'Mon', '10:00 AM', '12:00 PM', '22 Nov, 2021', '12:51:09 PM'),
(808, 25, 'Mon', '12:00 PM', '02:00 PM', '22 Nov, 2021', '12:52:00 PM'),
(809, 25, 'Mon', '02:00 PM', '04:00 PM', '22 Nov, 2021', '12:52:37 PM'),
(810, 25, 'Mon', '04:00 PM', '06:00 PM', '22 Nov, 2021', '12:52:58 PM'),
(812, 7, 'Mon', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:13:40 PM'),
(813, 7, 'Mon', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:13:59 PM'),
(815, 7, 'Tue', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:18:21 PM'),
(816, 7, 'Tue', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:18:47 PM'),
(817, 7, 'Wed', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:19:12 PM'),
(818, 7, 'Wed', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:20:45 PM'),
(819, 7, 'Thu', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:21:49 PM'),
(820, 7, 'Thu', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:21:59 PM'),
(821, 7, 'Thu', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:22:15 PM'),
(822, 7, 'Fri', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:23:00 PM'),
(823, 7, 'Fri', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:23:38 PM'),
(824, 7, 'Fri', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:23:56 PM'),
(825, 7, 'Sat', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:25:50 PM'),
(826, 7, 'Sat', '07:00 PM', '08:30 PM', '22 Nov, 2021', '01:26:04 PM'),
(827, 7, 'Sun', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:26:41 PM'),
(828, 7, 'Sun', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:27:39 PM'),
(830, 27, 'Mon', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:36:19 PM'),
(831, 27, 'Tue', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:38:02 PM'),
(832, 27, 'Tue', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:38:16 PM'),
(833, 27, 'Tue', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:38:47 PM'),
(834, 27, 'Tue', '07:00 PM', '09:00 PM', '22 Nov, 2021', '01:39:12 PM'),
(836, 27, 'Wed', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:39:40 PM'),
(837, 27, 'Wed', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:40:04 PM'),
(838, 27, 'Wed', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:40:18 PM'),
(839, 27, 'Thu', '08:00 AM', '10:00 AM', '22 Nov, 2021', '01:40:35 PM'),
(840, 27, 'Thu', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:40:46 PM'),
(841, 27, 'Thu', '02:00 PM', '04:00 PM', '22 Nov, 2021', '01:41:08 PM'),
(842, 27, 'Thu', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:41:28 PM'),
(843, 27, 'Fri', '08:00 AM', '10:00 AM', '22 Nov, 2021', '01:41:41 PM'),
(844, 27, 'Fri', '12:00 PM', '02:00 PM', '22 Nov, 2021', '01:41:55 PM'),
(845, 27, 'Fri', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:42:22 PM'),
(847, 27, 'Sat', '10:00 AM', '12:00 PM', '22 Nov, 2021', '01:42:50 PM'),
(848, 27, 'Sat', '04:00 PM', '06:00 PM', '22 Nov, 2021', '01:43:13 PM'),
(850, 27, '', '07:30 AM', '09:30 AM', '22 Nov, 2021', '01:45:16 PM'),
(852, 27, 'Sun', '12:30 PM', '02:30 PM', '22 Nov, 2021', '01:45:45 PM'),
(853, 27, 'Sun', '07:00 PM', '09:00 PM', '22 Nov, 2021', '01:46:03 PM'),
(854, 20, 'Sun', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:44:20 AM'),
(855, 20, 'Sun', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:44:31 AM'),
(856, 20, 'Sun', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:44:43 AM'),
(857, 20, 'Mon', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:44:56 AM'),
(858, 20, 'Mon', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:45:05 AM'),
(860, 20, 'Mon', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:45:43 AM'),
(861, 20, 'Tue', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:45:52 AM'),
(862, 20, 'Tue', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:46:03 AM'),
(863, 20, 'Tue', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:46:14 AM'),
(864, 20, 'Wed', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:46:24 AM'),
(865, 20, 'Wed', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:46:39 AM'),
(866, 20, 'Wed', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:46:49 AM'),
(867, 20, 'Thu', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:47:00 AM'),
(868, 20, 'Thu', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:47:13 AM'),
(869, 20, 'Thu', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:47:23 AM'),
(870, 20, 'Fri', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:47:49 AM'),
(871, 20, 'Fri', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:48:01 AM'),
(872, 20, 'Fri', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:48:11 AM'),
(873, 20, 'Sat', '08:00 AM', '08:30 AM', '23 Nov, 2021', '08:48:21 AM'),
(874, 20, 'Sat', '08:30 AM', '09:00 AM', '23 Nov, 2021', '08:48:31 AM'),
(875, 20, 'Sat', '09:00 AM', '09:30 AM', '23 Nov, 2021', '08:48:43 AM'),
(877, 8, 'Mon', '12:30 PM', '02:00 PM', '23 Nov, 2021', '12:00:09 PM'),
(878, 8, 'Wed', '12:30 PM', '02:00 PM', '23 Nov, 2021', '12:00:33 PM'),
(879, 8, 'Thu', '12:30 PM', '02:00 PM', '23 Nov, 2021', '12:00:43 PM'),
(880, 8, 'Fri', '12:30 PM', '02:00 PM', '23 Nov, 2021', '12:00:55 PM'),
(881, 39, 'Sun', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:02:39 PM'),
(882, 39, 'Mon', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:02:50 PM'),
(883, 39, 'Mon', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:03:09 PM'),
(884, 39, 'Tue', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:03:22 PM'),
(885, 39, 'Wed', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:03:33 PM'),
(886, 39, 'Thu', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:03:46 PM'),
(887, 39, 'Fri', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:03:57 PM'),
(888, 39, 'Sat', '12:00 PM', '12:30 PM', '23 Nov, 2021', '12:04:11 PM'),
(889, 39, 'Tue', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:04:27 PM'),
(890, 39, 'Sat', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:04:39 PM'),
(891, 13, 'Mon', '12:00 PM', '02:00 PM', '23 Nov, 2021', '12:06:48 PM'),
(892, 13, 'Wed', '12:00 PM', '02:00 PM', '23 Nov, 2021', '12:07:02 PM'),
(893, 13, 'Fri', '12:00 PM', '01:30 AM', '23 Nov, 2021', '12:07:18 PM'),
(894, 14, 'Tue', '02:00 PM', '04:00 PM', '23 Nov, 2021', '12:10:51 PM'),
(895, 14, 'Wed', '02:00 PM', '04:00 PM', '23 Nov, 2021', '12:11:11 PM'),
(896, 14, 'Thu', '12:00 PM', '02:00 PM', '23 Nov, 2021', '12:11:34 PM'),
(897, 14, 'Fri', '07:00 PM', '09:00 PM', '23 Nov, 2021', '12:12:04 PM'),
(898, 14, 'Sun', '12:00 PM', '02:00 PM', '23 Nov, 2021', '12:12:31 PM'),
(899, 37, 'Mon', '02:00 PM', '04:00 PM', '23 Nov, 2021', '12:31:42 PM'),
(900, 37, 'Thu', '12:00 PM', '02:00 PM', '23 Nov, 2021', '12:32:02 PM'),
(901, 37, 'Sun', '04:00 PM', '06:00 PM', '23 Nov, 2021', '12:32:29 PM'),
(902, 30, 'Mon', '06:30 AM', '07:30 AM', '23 Nov, 2021', '12:34:37 PM'),
(903, 30, 'Mon', '06:00 PM', '07:30 PM', '23 Nov, 2021', '12:35:00 PM'),
(904, 30, 'Wed', '06:30 AM', '07:30 AM', '23 Nov, 2021', '12:35:20 PM'),
(905, 30, 'Thu', '06:30 AM', '07:30 AM', '23 Nov, 2021', '12:46:31 PM'),
(906, 30, 'Fri', '06:30 AM', '07:30 AM', '23 Nov, 2021', '12:49:50 PM'),
(907, 30, 'Sat', '06:30 AM', '07:30 AM', '23 Nov, 2021', '12:50:01 PM'),
(908, 36, 'Sun', '06:30 AM', '07:00 AM', '23 Nov, 2021', '12:51:17 PM'),
(909, 36, 'Mon', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:51:33 PM'),
(910, 36, 'Tue', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:51:54 PM'),
(911, 36, 'Wed', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:52:04 PM'),
(912, 36, 'Thu', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:52:12 PM'),
(913, 36, 'Fri', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:52:21 PM'),
(914, 36, 'Sat', '07:00 AM', '07:30 AM', '23 Nov, 2021', '12:52:31 PM'),
(916, 33, 'Tue', '07:00 PM', '08:30 PM', '23 Nov, 2021', '12:54:34 PM'),
(918, 33, 'Sat', '07:00 PM', '08:30 PM', '23 Nov, 2021', '12:55:36 PM'),
(920, 25, 'Tue', '10:00 AM', '12:00 PM', '23 Nov, 2021', '12:58:18 PM'),
(921, 25, 'Wed', '10:00 AM', '12:00 PM', '23 Nov, 2021', '12:58:40 PM'),
(922, 25, 'Thu', '07:00 PM', '09:00 PM', '23 Nov, 2021', '12:59:33 PM'),
(923, 25, 'Fri', '12:00 PM', '02:00 PM', '23 Nov, 2021', '01:06:45 PM'),
(924, 25, 'Sat', '12:00 PM', '02:00 PM', '23 Nov, 2021', '01:07:03 PM'),
(925, 25, 'Sun', '07:00 PM', '09:00 PM', '23 Nov, 2021', '01:07:19 PM'),
(926, 31, 'Mon', '12:00 PM', '02:00 PM', '23 Nov, 2021', '01:11:09 PM'),
(927, 31, 'Tue', '04:00 PM', '06:00 PM', '23 Nov, 2021', '01:11:29 PM'),
(928, 31, 'Wed', '07:00 PM', '09:00 PM', '23 Nov, 2021', '01:11:48 PM'),
(929, 31, 'Thu', '10:00 AM', '12:00 PM', '23 Nov, 2021', '01:12:07 PM'),
(930, 31, 'Fri', '10:00 AM', '12:00 PM', '23 Nov, 2021', '01:12:26 PM'),
(931, 31, 'Fri', '12:00 PM', '02:00 PM', '23 Nov, 2021', '01:13:00 PM'),
(932, 31, 'Sat', '12:00 PM', '02:00 PM', '23 Nov, 2021', '01:13:18 PM'),
(933, 31, 'Sat', '02:00 PM', '04:00 PM', '23 Nov, 2021', '01:13:33 PM'),
(934, 31, 'Sun', '02:00 PM', '04:00 PM', '23 Nov, 2021', '01:14:15 PM'),
(935, 38, 'Sat', '07:00 AM', '08:30 AM', '24 Nov, 2021', '08:43:41 AM'),
(936, 38, 'Sat', '12:00 PM', '02:00 PM', '24 Nov, 2021', '08:43:56 AM'),
(937, 38, 'Sat', '02:00 PM', '04:00 PM', '24 Nov, 2021', '08:44:08 AM'),
(938, 18, 'Mon', '04:00 PM', '04:30 PM', '24 Nov, 2021', '10:38:53 AM'),
(939, 18, 'Mon', '07:00 PM', '07:30 PM', '24 Nov, 2021', '10:39:13 AM'),
(940, 18, 'Mon', '07:00 AM', '07:30 AM', '24 Nov, 2021', '10:39:34 AM'),
(941, 18, 'Tue', '07:00 AM', '07:30 AM', '24 Nov, 2021', '10:39:55 AM'),
(942, 18, 'Wed', '07:00 PM', '07:30 PM', '24 Nov, 2021', '10:40:06 AM'),
(943, 18, '', '07:00 PM', '07:30 PM', '24 Nov, 2021', '10:40:16 AM'),
(944, 18, 'Fri', '07:00 PM', '07:30 PM', '24 Nov, 2021', '10:40:28 AM'),
(945, 18, 'Sat', '07:00 AM', '07:30 AM', '24 Nov, 2021', '10:40:38 AM'),
(946, 18, 'Sat', '07:00 AM', '07:30 AM', '24 Nov, 2021', '10:40:38 AM'),
(947, 16, 'Fri', '07:30 AM', '09:30 AM', '24 Nov, 2021', '10:43:07 AM'),
(948, 16, 'Fri', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:43:20 AM'),
(949, 16, 'Fri', '07:00 PM', '09:00 PM', '24 Nov, 2021', '10:43:35 AM'),
(950, 21, 'Tue', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:46:48 AM'),
(951, 21, 'Wed', '04:00 PM', '06:00 PM', '24 Nov, 2021', '10:47:25 AM'),
(952, 21, 'Thu', '08:00 AM', '10:00 AM', '24 Nov, 2021', '10:48:08 AM'),
(953, 21, 'Fri', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:48:24 AM'),
(954, 21, 'Sat', '02:00 PM', '04:00 PM', '24 Nov, 2021', '10:49:09 AM'),
(955, 21, 'Sun', '02:00 PM', '04:00 PM', '24 Nov, 2021', '10:49:38 AM'),
(956, 21, '', '02:00 AM', '04:00 PM', '29 Nov, 2021', '08:09:17 AM'),
(957, 1, 'Mon', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:56:52 AM'),
(958, 1, 'Tue', '10:00 AM', '12:00 PM', '24 Nov, 2021', '10:57:44 AM'),
(959, 1, 'Wed', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:59:06 AM'),
(960, 1, 'Wed', '02:00 PM', '03:30 PM', '24 Nov, 2021', '10:59:20 AM'),
(961, 1, 'Thu', '12:00 PM', '02:00 PM', '24 Nov, 2021', '10:59:40 AM'),
(962, 1, 'Thu', '04:00 PM', '06:00 PM', '24 Nov, 2021', '10:59:51 AM'),
(963, 1, 'Fri', '10:00 AM', '12:00 PM', '24 Nov, 2021', '11:00:22 AM'),
(964, 1, 'Sat', '10:00 AM', '12:00 PM', '24 Nov, 2021', '11:00:48 AM'),
(965, 1, 'Sun', '04:00 PM', '06:00 PM', '24 Nov, 2021', '11:01:16 AM'),
(966, 1, 'Sun', '08:00 AM', '10:00 AM', '24 Nov, 2021', '11:01:28 AM'),
(979, 22, 'Sun', '10:00 AM', '11:00 AM', '24 Nov, 2021', '11:12:55 AM'),
(980, 22, 'Sun', '05:00 PM', '06:00 PM', '24 Nov, 2021', '11:13:09 AM'),
(981, 22, 'Mon', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:13:22 AM'),
(982, 22, 'Mon', '05:00 PM', '05:30 PM', '24 Nov, 2021', '11:13:34 AM'),
(983, 22, 'Tue', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:13:45 AM'),
(984, 22, 'Tue', '06:00 PM', '06:30 PM', '24 Nov, 2021', '11:13:58 AM'),
(985, 22, 'Wed', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:14:13 AM'),
(986, 22, 'Wed', '05:00 PM', '05:30 PM', '24 Nov, 2021', '11:14:26 AM'),
(987, 22, 'Thu', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:14:47 AM'),
(988, 22, 'Thu', '05:00 PM', '05:30 PM', '24 Nov, 2021', '11:15:02 AM'),
(989, 22, 'Fri', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:15:14 AM'),
(990, 22, 'Thu', '05:00 PM', '05:30 PM', '24 Nov, 2021', '11:15:30 AM'),
(991, 22, 'Sat', '10:00 AM', '10:30 AM', '24 Nov, 2021', '11:15:43 AM'),
(992, 22, 'Sat', '04:30 PM', '05:00 PM', '24 Nov, 2021', '11:15:57 AM'),
(993, 22, 'Sat', '05:00 PM', '05:30 PM', '24 Nov, 2021', '11:16:12 AM'),
(994, 24, 'Mon', '10:00 AM', '12:00 PM', '24 Nov, 2021', '11:18:42 AM'),
(995, 24, 'Wed', '10:00 AM', '12:00 PM', '24 Nov, 2021', '11:18:52 AM'),
(996, 24, 'Thu', '10:00 AM', '12:00 PM', '24 Nov, 2021', '11:19:15 AM'),
(997, 24, 'Fri', '02:00 PM', '04:00 PM', '24 Nov, 2021', '11:19:40 AM'),
(998, 24, 'Mon', '02:00 PM', '04:00 PM', '24 Nov, 2021', '11:20:00 AM'),
(999, 24, 'Tue', '07:30 AM', '08:30 AM', '24 Nov, 2021', '11:20:16 AM'),
(1000, 26, 'Mon', '12:30 PM', '01:30 PM', '24 Nov, 2021', '11:22:06 AM'),
(1001, 26, 'Wed', '12:30 PM', '01:30 PM', '24 Nov, 2021', '11:22:15 AM'),
(1002, 26, 'Thu', '12:30 PM', '01:30 PM', '24 Nov, 2021', '11:22:25 AM'),
(1003, 26, 'Fri', '12:30 PM', '01:30 PM', '24 Nov, 2021', '11:22:41 AM'),
(1004, 31, 'Wed', '10:00 AM', '11:30 AM', '24 Nov, 2021', '11:24:24 AM'),
(1005, 43, 'Mon', '08:00 AM', '10:00 AM', '06 Dec, 2021', '08:28:10 AM'),
(1006, 43, 'Tue', '12:00 PM', '01:30 PM', '06 Dec, 2021', '08:28:31 AM'),
(1007, 43, 'Wed', '12:30 PM', '01:30 PM', '06 Dec, 2021', '08:28:50 AM'),
(1008, 43, 'Thu', '12:30 PM', '01:30 PM', '06 Dec, 2021', '08:29:16 AM'),
(1009, 43, 'Fri', '12:30 PM', '01:30 PM', '06 Dec, 2021', '08:29:39 AM'),
(1010, 43, 'Sat', '12:30 PM', '01:30 PM', '06 Dec, 2021', '08:30:01 AM');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_samagri`
--

CREATE TABLE `slnt_samagri` (
  `id` int(11) NOT NULL,
  `puja_id` int(11) NOT NULL,
  `samagri_type` varchar(100) DEFAULT NULL,
  `samagri_title` varchar(255) DEFAULT NULL,
  `samagri_price` decimal(10,2) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `unit_of_measurement` varchar(20) NOT NULL,
  `measurement` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_samagri`
--

INSERT INTO `slnt_samagri` (`id`, `puja_id`, `samagri_type`, `samagri_title`, `samagri_price`, `create_date`, `create_time`, `unit_of_measurement`, `measurement`) VALUES
(1, 27, 'Puja Samagri', 'Sandal’s  powder', 0.00, '12 May, 2021', '11:01:52 AM', 'Box', 1.00),
(2, 27, 'Puja Samagri', 'Kumkum’s  powder', 0.00, '12 May, 2021', '11:02:10 AM', 'Box', 1.00),
(3, 27, 'Puja Samagri', 'Betel leaves', 0.00, '12 May, 2021', '11:02:34 AM', 'P (Pieces)', 25.00),
(4, 27, 'Puja Samagri', 'Cotton', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 1.00),
(5, 27, 'Puja Samagri', 'Coconut', 0.00, '12 May, 2021', '11:03:11 AM', 'Bottle', 1.00),
(6, 27, 'Puja Samagri', 'Red Cloth', 0.00, '12 May, 2021', '11:03:25 AM', 'M (Meter)', 0.50),
(7, 27, 'Puja Samagri', 'Holy Thread ', 0.00, '12 May, 2021', '11:03:41 AM', 'Bundle', 2.00),
(8, 27, 'Puja Samagri', 'Kalalsh', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(9, 27, 'Puja Samagri', 'Clay lamp', 0.00, '12 May, 2021', '11:01:52 AM', 'P (Pieces)', 2.00),
(10, 27, 'Puja Samagri', 'Brahmin wearing things', 0.00, '12 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(11, 27, 'Puja Samagri', 'Camphor', 0.00, '12 May, 2021', '11:02:34 AM', 'Box', 1.00),
(12, 27, 'Puja Samagri', 'Cardamom', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(13, 27, 'Puja Samagri', 'Cinnamon', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(14, 27, 'Puja Samagri', 'Betel nut', 0.00, '12 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(15, 27, 'Puja Samagri', 'Incense Stick', 0.00, '12 May, 2021', '11:03:25 AM', 'Pkts', 1.00),
(16, 27, 'Puja Samagri', 'Match', 0.00, '12 May, 2021', '11:03:25 AM', 'Pkts', 1.00),
(17, 27, 'Puja Samagri', 'Clarified butter', 0.00, '12 May, 2021', '11:03:41 AM', 'Kg', 0.50),
(18, 27, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '12 May, 2021', '12:17:41 PM', 'Box', 1.00),
(19, 27, 'Puja Samagri', 'Ganga Water', 0.00, '12 May, 2021', '12:17:41 PM', 'Pkts', 1.00),
(20, 27, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 1.00),
(21, 27, 'Puja Samagri', 'Perfume', 0.00, '12 May, 2021', '12:17:41 PM', 'Bottle', 1.00),
(22, 27, 'Puja Samagri', 'Stool', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(23, 27, 'Puja Samagri', 'Esau’s leaves or Green grass', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(24, 27, 'Puja Samagri', 'Mango’s leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(25, 27, 'Puja Samagri', 'Sacred Thread', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 2.00),
(26, 27, 'Puja Samagri', 'Glass', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(27, 27, 'Puja Samagri', 'Garlands (Small)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(28, 27, 'Puja Samagri', 'Garlands (Big)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(29, 27, 'Puja Samagri', 'Basil leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(30, 27, 'Puja Samagri', 'Fruits (5 types)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 5.00),
(31, 27, 'Puja Samagri', 'Havan-Kund', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(32, 27, 'Puja Samagri', 'Plate', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(33, 27, 'Puja Samagri', 'Mango’s sticks', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 1.00),
(34, 27, 'Puja Samagri', 'Dry Coconut', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(35, 27, 'Puja Samagri', 'Banana leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(36, 27, 'Puja Samagri', 'Sweets (laddu)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(37, 27, 'Puja Samagri', 'Yellow Cloth', 0.00, '12 May, 2021', '12:17:41 PM', 'M (Meter)', 1.00),
(38, 27, 'Puja Samagri', 'Loose flowers', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(39, 27, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(40, 27, 'Puja Samagri', 'Photographs  (Satyanarayan or lord Vishnu)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(41, 27, 'Puja Samagri', 'Bowl', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 3.00),
(42, 27, 'Puja Samagri', 'Havan Materials', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(43, 27, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(44, 27, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 61.00, '27 May, 2021', '06:43:35 AM', 'Kg', 0.50),
(45, 3, 'Puja Samagri', 'Sandal’s  powder', 0.00, '12 May, 2021', '11:01:52 AM', 'Box', 1.00),
(46, 3, 'Puja Samagri', 'Kumkum’s  powder', 0.00, '12 May, 2021', '11:02:10 AM', 'Box', 1.00),
(47, 3, 'Puja Samagri', 'Betel leaves', 0.00, '12 May, 2021', '11:02:34 AM', 'P (Pieces)', 25.00),
(48, 3, 'Puja Samagri', 'Cotton', 0.00, '29 Jun, 2021', '12:47:10 PM', 'Bundle', 1.00),
(49, 3, 'Puja Samagri', 'Coconut', 0.00, '12 May, 2021', '11:03:11 AM', 'Bottle', 1.00),
(50, 3, 'Puja Samagri', 'Red Cloth', 0.00, '12 May, 2021', '11:03:25 AM', 'M (Meter)', 0.50),
(51, 3, 'Puja Samagri', 'Holy Thread ', 0.00, '12 May, 2021', '11:03:41 AM', 'Bundle', 1.00),
(52, 3, 'Puja Samagri', 'Kalash', 0.00, '17 Jun, 2021', '08:57:24 AM', 'P (Pieces)', 2.00),
(53, 3, 'Puja Samagri', 'Clay lamp', 0.00, '12 May, 2021', '11:01:52 AM', 'P (Pieces)', 2.00),
(54, 3, 'Puja Samagri', 'Brahmin wearing things', 0.00, '12 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(55, 3, 'Puja Samagri', 'Camphor', 0.00, '12 May, 2021', '11:02:34 AM', 'Box', 1.00),
(56, 3, 'Puja Samagri', 'Cardamom', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(57, 3, 'Puja Samagri', 'Cinnamon', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(58, 3, 'Puja Samagri', 'Betel nut', 0.00, '12 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(59, 3, 'Puja Samagri', 'Incense Stick', 0.00, '12 May, 2021', '11:03:25 AM', 'Pkts', 1.00),
(60, 3, 'Puja Samagri', 'Match Stick', 0.00, '17 Jun, 2021', '08:56:36 AM', 'Pkts', 1.00),
(61, 3, 'Puja Samagri', 'Clarified butter', 0.00, '12 May, 2021', '11:03:41 AM', 'Kg', 0.50),
(62, 3, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '17 Jun, 2021', '08:56:52 AM', 'Bottle', 1.00),
(63, 3, 'Puja Samagri', 'Ganga Water', 0.00, '12 May, 2021', '12:17:41 PM', 'Pkts', 1.00),
(64, 3, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 1.00),
(65, 3, 'Puja Samagri', 'Perfume', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(66, 3, 'Puja Samagri', 'Green grass', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(67, 3, 'Puja Samagri', 'Chouki', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(68, 3, 'Puja Samagri', 'Mango’s leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(69, 3, 'Puja Samagri', 'Sacred Thread', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 2.00),
(70, 3, 'Puja Samagri', 'Glass', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(72, 3, 'Puja Samagri', 'Garlands (Small)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(73, 3, 'Puja Samagri', 'Garlands (Big)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(74, 3, 'Puja Samagri', 'Basil leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(75, 3, 'Puja Samagri', 'Fruits (5 types)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 5.00),
(76, 3, 'Puja Samagri', 'Havan-Kund', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(77, 3, 'Puja Samagri', 'Plate', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(78, 3, 'Puja Samagri', 'Mango’s sticks', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 1.00),
(79, 3, 'Puja Samagri', 'Dry Coconut', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(80, 3, 'Puja Samagri', 'Banana leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(81, 3, 'Puja Samagri', 'Sweets (laddu)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(82, 3, 'Puja Samagri', 'Yellow Cloth', 0.00, '12 May, 2021', '12:17:41 PM', 'M (Meter)', 1.00),
(83, 3, 'Puja Samagri', 'Loose flowers', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(84, 3, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(85, 3, 'Puja Samagri', 'Bowl', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 3.00),
(86, 3, 'Puja Samagri', 'Havan Materials', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(87, 3, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(88, 3, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '3 May, 2021', '06:43:35 AM', 'Kg', 0.50),
(89, 3, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '3 May, 2021', '06:43:35 AM', 'P (Pieces)', 1.00),
(90, 3, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '17 Jun, 2021', '08:55:51 AM', 'P (Pieces)', 1.00),
(91, 3, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '3 May, 2021', '06:43:35 AM', 'P (Pieces)', 1.00),
(92, 3, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '3 May, 2021', '06:43:35 AM', 'P (Pieces)', 1.00),
(93, 3, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '3 May, 2021', '06:43:35 AM', 'P (Pieces)', 1.00),
(95, 4, 'Puja Samagri', 'Sandal’s  powder', 0.00, '12 May, 2021', '11:01:52 AM', 'Box', 1.00),
(96, 4, 'Puja Samagri', 'Kumkum’s  powder', 0.00, '12 May, 2021', '11:02:10 AM', 'Box', 1.00),
(97, 4, 'Puja Samagri', 'Betel leaves', 0.00, '12 May, 2021', '11:02:44 AM', 'P (Pieces)', 25.00),
(98, 4, 'Puja Samagri', 'Cotton', 0.00, '29 Jun, 2021', '12:46:11 PM', 'Bundle', 1.00),
(99, 4, 'Puja Samagri', 'Coconut', 0.00, '12 May, 2021', '11:04:11 AM', 'Bottle', 1.00),
(100, 4, 'Puja Samagri', 'Red Cloth', 0.00, '12 May, 2021', '11:04:25 AM', 'M (Meter)', 0.50),
(101, 4, 'Puja Samagri', 'Holy Thread ', 0.00, '12 May, 2021', '11:04:41 AM', 'Bundle', 1.00),
(102, 4, 'Puja Samagri', 'Kalash', 0.00, '17 Jun, 2021', '08:57:46 AM', 'P (Pieces)', 2.00),
(103, 4, 'Puja Samagri', 'Clay lamp', 0.00, '12 May, 2021', '11:01:52 AM', 'P (Pieces)', 2.00),
(104, 4, 'Puja Samagri', 'Brahmin wearing things', 0.00, '12 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(105, 4, 'Puja Samagri', 'Camphor', 0.00, '12 May, 2021', '11:02:44 AM', 'Box', 1.00),
(106, 4, 'Puja Samagri', 'Cardamom', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(107, 4, 'Puja Samagri', 'Cinnamon', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(108, 4, 'Puja Samagri', 'Betel nut', 0.00, '12 May, 2021', '11:04:11 AM', 'P (Pieces)', 20.00),
(109, 4, 'Puja Samagri', 'Incense Stick', 0.00, '12 May, 2021', '11:04:25 AM', 'Pkts', 1.00),
(110, 4, 'Puja Samagri', 'Match Stick', 0.00, '17 Jun, 2021', '08:54:42 AM', 'Pkts', 1.00),
(111, 4, 'Puja Samagri', 'Clarified butter', 0.00, '12 May, 2021', '11:04:41 AM', 'Kg', 0.50),
(112, 4, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '17 Jun, 2021', '08:53:20 AM', 'Bottle', 1.00),
(113, 4, 'Puja Samagri', 'Ganga Water', 0.00, '12 May, 2021', '12:17:41 PM', 'Pkts', 1.00),
(114, 4, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 1.00),
(115, 4, 'Puja Samagri', 'Perfume', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(116, 4, 'Puja Samagri', 'Green grass', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(117, 4, 'Puja Samagri', 'Chowki', 0.00, '29 Jun, 2021', '12:45:14 PM', 'P (Pieces)', 1.00),
(118, 4, 'Puja Samagri', 'Mango’s leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(119, 4, 'Puja Samagri', 'Sacred Thread', 0.00, '12 May, 2021', '12:17:41 PM', 'Pairs', 2.00),
(120, 4, 'Puja Samagri', 'Glass', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(121, 4, 'Puja Samagri', 'Garlands (Small)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(122, 4, 'Puja Samagri', 'Garlands (Big)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(124, 4, 'Puja Samagri', 'Basil leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'Bundle', 1.00),
(125, 4, 'Puja Samagri', 'Fruits (5 types)', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 5.00),
(126, 4, 'Puja Samagri', 'Havan-Kund', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(127, 4, 'Puja Samagri', 'Plate', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(128, 4, 'Puja Samagri', 'Mango’s sticks', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 1.00),
(129, 4, 'Puja Samagri', 'Dry Coconut', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 1.00),
(130, 4, 'Puja Samagri', 'Banana leaves', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 2.00),
(131, 4, 'Puja Samagri', 'Sweets (laddu)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(132, 4, 'Puja Samagri', 'Yellow Cloth', 0.00, '12 May, 2021', '12:17:41 PM', 'M (Meter)', 1.00),
(133, 4, 'Puja Samagri', 'Loose flowers', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 25.00),
(134, 4, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(135, 4, 'Puja Samagri', 'Bowl', 0.00, '12 May, 2021', '12:17:41 PM', 'P (Pieces)', 4.00),
(136, 4, 'Puja Samagri', 'Havan Materials', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(137, 4, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '12 May, 2021', '12:17:41 PM', 'Kg', 0.50),
(138, 4, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '4 May, 2021', '06:44:45 AM', 'Kg', 0.50),
(139, 4, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '4 May, 2021', '06:44:45 AM', 'P (Pieces)', 1.00),
(140, 4, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '17 Jun, 2021', '08:51:01 AM', 'P (Pieces)', 1.00),
(141, 4, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '4 May, 2021', '06:44:45 AM', 'P (Pieces)', 1.00),
(142, 4, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '4 May, 2021', '06:44:45 AM', 'P (Pieces)', 1.00),
(144, 4, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '4 May, 2021', '06:44:45 AM', 'P (Pieces)', 1.00),
(156, 5, 'Puja Samagri', 'Sandal’s  powder', 0.00, '12 May, 2021', '11:01:52 AM', 'Box', 1.00),
(157, 5, 'Puja Samagri', 'Kumkum’s  powder', 0.00, '12 May, 2021', '11:02:10 AM', 'Box', 1.00),
(158, 5, 'Puja Samagri', 'Betel leaves', 0.00, '12 May, 2021', '11:02:55 AM', 'P (Pieces)', 25.00),
(159, 5, 'Puja Samagri', 'Cotton', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 1.00),
(160, 5, 'Puja Samagri', 'Coconut', 0.00, '12 May, 2021', '11:05:11 AM', 'Bottle', 1.00),
(161, 5, 'Puja Samagri', 'Red Cloth', 0.00, '12 May, 2021', '11:05:25 AM', 'M (Meter)', 0.50),
(162, 5, 'Puja Samagri', 'Holy Thread ', 0.00, '12 May, 2021', '11:05:51 AM', 'Bundle', 1.00),
(163, 5, 'Puja Samagri', 'Kalash', 0.00, '22 Jun, 2021', '01:31:26 PM', 'P (Pieces)', 2.00),
(164, 5, 'Puja Samagri', 'Clay lamp', 0.00, '12 May, 2021', '11:01:52 AM', 'P (Pieces)', 2.00),
(165, 5, 'Puja Samagri', 'Brahmin wearing things', 0.00, '12 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(166, 5, 'Puja Samagri', 'Camphor', 0.00, '12 May, 2021', '11:02:55 AM', 'Box', 1.00),
(167, 5, 'Puja Samagri', 'Cardamom', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(168, 5, 'Puja Samagri', 'Cinnamon', 0.00, '12 May, 2021', '11:02:57 AM', 'P (Pieces)', 25.00),
(169, 5, 'Puja Samagri', 'Betel nut', 0.00, '12 May, 2021', '11:05:11 AM', 'P (Pieces)', 20.00),
(170, 5, 'Puja Samagri', 'Incense Stick', 0.00, '12 May, 2021', '11:05:25 AM', 'Pkts', 1.00),
(171, 5, 'Puja Samagri', 'Match Stick', 0.00, '29 Jun, 2021', '12:52:39 PM', 'Pkts', 1.00),
(172, 5, 'Puja Samagri', 'Clarified butter', 0.00, '12 May, 2021', '11:05:51 AM', 'Kg', 0.50),
(173, 5, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '22 Jun, 2021', '01:31:10 PM', 'Bottle', 1.00),
(174, 5, 'Puja Samagri', 'Ganga Water', 0.00, '12 May, 2021', '12:17:51 PM', 'Pkts', 1.00),
(175, 5, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '12 May, 2021', '12:17:51 PM', 'Pairs', 1.00),
(176, 5, 'Puja Samagri', 'Perfume', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(177, 5, 'Puja Samagri', 'Green grass', 0.00, '12 May, 2021', '12:17:51 PM', 'Bundle', 1.00),
(178, 5, 'Puja Samagri', 'Chowki', 0.00, '22 Jun, 2021', '01:31:59 PM', 'P (Pieces)', 1.00),
(179, 5, 'Puja Samagri', 'Mango’s leaves', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 25.00),
(180, 5, 'Puja Samagri', 'Sacred Thread', 0.00, '12 May, 2021', '12:17:51 PM', 'Pairs', 2.00),
(181, 5, 'Puja Samagri', 'Glass', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(182, 5, 'Puja Samagri', 'Garlands (Small)', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(183, 5, 'Puja Samagri', 'Garlands (Big)', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(184, 5, 'Puja Samagri', 'Basil leaves', 0.00, '12 May, 2021', '12:17:51 PM', 'Bundle', 1.00),
(185, 5, 'Puja Samagri', 'Fruits (5 types)', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 5.00),
(186, 5, 'Puja Samagri', 'Havan-Kund', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(187, 5, 'Puja Samagri', 'Plate', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 2.00),
(188, 5, 'Puja Samagri', 'Mango’s sticks', 0.00, '12 May, 2021', '12:17:51 PM', 'Kg', 1.00),
(189, 5, 'Puja Samagri', 'Dry Coconut', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 1.00),
(190, 5, 'Puja Samagri', 'Banana leaves', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 2.00),
(191, 5, 'Puja Samagri', 'Sweets (laddu)', 0.00, '12 May, 2021', '12:17:51 PM', 'Kg', 0.50),
(192, 5, 'Puja Samagri', 'Yellow Cloth', 0.00, '12 May, 2021', '12:17:51 PM', 'M (Meter)', 1.00),
(193, 5, 'Puja Samagri', 'Loose flowers', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 25.00),
(194, 5, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '12 May, 2021', '12:17:51 PM', 'Kg', 0.50),
(195, 5, 'Puja Samagri', 'Bowl', 0.00, '12 May, 2021', '12:17:51 PM', 'P (Pieces)', 5.00),
(196, 5, 'Puja Samagri', 'Havan Materials', 0.00, '12 May, 2021', '12:17:51 PM', 'Kg', 0.50),
(197, 5, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '12 May, 2021', '12:17:51 PM', 'Kg', 0.50),
(198, 5, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '5 May, 2021', '06:55:55 AM', 'Kg', 0.50),
(199, 5, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '5 May, 2021', '06:55:55 AM', 'P (Pieces)', 1.00),
(200, 5, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '22 Jun, 2021', '01:30:48 PM', 'P (Pieces)', 1.00),
(201, 5, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '5 May, 2021', '06:55:55 AM', 'P (Pieces)', 1.00),
(202, 5, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '5 May, 2021', '06:55:55 AM', 'P (Pieces)', 1.00),
(203, 5, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '5 May, 2021', '06:55:55 AM', 'P (Pieces)', 1.00),
(205, 12, 'Puja Samagri', 'Sandal’s  powder', 0.00, '12 May, 2021', '11:01:122 AM', 'Box', 1.00),
(206, 12, 'Puja Samagri', 'Betel leaves', 0.00, '12 May, 2021', '11:02:1212 AM', 'P (Pieces)', 25.00),
(207, 12, 'Puja Samagri', 'Cotton', 0.00, '29 Jun, 2021', '01:03:45 PM', 'Bundle', 1.00),
(208, 12, 'Puja Samagri', 'Coconut', 0.00, '12 May, 2021', '11:012:11 AM', 'Bottle', 1.00),
(209, 12, 'Puja Samagri', 'Red Cloth', 0.00, '12 May, 2021', '11:012:212 AM', 'M (Meter)', 0.50),
(210, 12, 'Puja Samagri', 'Holy Thread ', 0.00, '12 May, 2021', '11:012:121 AM', 'Bundle', 1.00),
(211, 12, 'Puja Samagri', 'Kalash', 0.00, '22 Jun, 2021', '02:04:09 PM', 'P (Pieces)', 2.00),
(212, 12, 'Puja Samagri', 'Clay lamp', 0.00, '12 May, 2021', '11:01:122 AM', 'P (Pieces)', 2.00),
(213, 12, 'Puja Samagri', 'Brahmin wearing things', 0.00, '12 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(214, 12, 'Puja Samagri', 'Camphor', 0.00, '12 May, 2021', '11:02:1212 AM', 'Box', 1.00),
(215, 12, 'Puja Samagri', 'Cardamom', 0.00, '12 May, 2021', '11:02:127 AM', 'P (Pieces)', 25.00),
(216, 12, 'Puja Samagri', 'Cinnamon', 0.00, '12 May, 2021', '11:02:127 AM', 'P (Pieces)', 25.00),
(217, 12, 'Puja Samagri', 'Betel nut', 0.00, '12 May, 2021', '11:012:11 AM', 'P (Pieces)', 20.00),
(218, 12, 'Puja Samagri', 'Incense Stick', 0.00, '12 May, 2021', '11:012:212 AM', 'Pkts', 1.00),
(219, 12, 'Puja Samagri', 'Match Stick', 0.00, '29 Jun, 2021', '01:00:00 PM', 'Pkts', 1.00),
(220, 12, 'Puja Samagri', 'Clarified butter', 0.00, '12 May, 2021', '11:012:121 AM', 'Kg', 0.50),
(221, 12, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '12 May, 2021', '12:17:121 PM', 'Box', 1.00),
(222, 12, 'Puja Samagri', 'Ganga Water', 0.00, '12 May, 2021', '12:17:121 PM', 'Pkts', 1.00),
(223, 12, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '12 May, 2021', '12:17:121 PM', 'Pairs', 1.00),
(224, 12, 'Puja Samagri', 'Perfume', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(225, 12, 'Puja Samagri', 'Green grass', 0.00, '12 May, 2021', '12:17:121 PM', 'Bundle', 1.00),
(226, 12, 'Puja Samagri', 'Chowki', 0.00, '22 Jun, 2021', '02:03:35 PM', 'P (Pieces)', 1.00),
(227, 12, 'Puja Samagri', 'Mango’s leaves', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 25.00),
(228, 12, 'Puja Samagri', 'Sacred Thread', 0.00, '12 May, 2021', '12:17:121 PM', 'Pairs', 2.00),
(229, 12, 'Puja Samagri', 'Glass', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(230, 12, 'Puja Samagri', 'Garlands (Small)', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(231, 12, 'Puja Samagri', 'Garlands (Big)', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(232, 12, 'Puja Samagri', 'Basil leaves', 0.00, '12 May, 2021', '12:17:121 PM', 'Bundle', 1.00),
(233, 12, 'Puja Samagri', 'Fruits ', 0.00, '22 Jun, 2021', '01:34:51 PM', 'P (Pieces)', 5.00),
(234, 12, 'Puja Samagri', 'Havan-Kund', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(235, 12, 'Puja Samagri', 'Plate', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 2.00),
(236, 12, 'Puja Samagri', 'Mango’s sticks', 0.00, '12 May, 2021', '12:17:121 PM', 'Kg', 1.00),
(237, 12, 'Puja Samagri', 'Dry Coconut', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 1.00),
(238, 12, 'Puja Samagri', 'Banana leaves', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 2.00),
(239, 12, 'Puja Samagri', 'Sweets (laddu)', 0.00, '12 May, 2021', '12:17:121 PM', 'Kg', 0.50),
(240, 12, 'Puja Samagri', 'Yellow Cloth', 0.00, '12 May, 2021', '12:17:121 PM', 'M (Meter)', 1.00),
(241, 12, 'Puja Samagri', 'Loose flowers', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 25.00),
(242, 12, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '12 May, 2021', '12:17:121 PM', 'Kg', 0.50),
(243, 12, 'Puja Samagri', 'Bowl', 0.00, '12 May, 2021', '12:17:121 PM', 'P (Pieces)', 5.00),
(244, 12, 'Puja Samagri', 'Havan Materials', 0.00, '12 May, 2021', '12:17:121 PM', 'Kg', 0.50),
(245, 12, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '12 May, 2021', '12:17:121 PM', 'Kg', 0.50),
(246, 12, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '12 May, 2021', '06:1212:1212 AM', 'Kg', 0.50),
(247, 12, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '12 May, 2021', '06:1212:1212 AM', 'P (Pieces)', 1.00),
(248, 12, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '22 Jun, 2021', '01:34:01 PM', 'P (Pieces)', 1.00),
(249, 12, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '12 May, 2021', '06:1212:1212 AM', 'P (Pieces)', 1.00),
(250, 12, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '12 May, 2021', '06:1212:1212 AM', 'P (Pieces)', 1.00),
(251, 12, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '12 May, 2021', '06:1212:1212 AM', 'P (Pieces)', 1.00),
(252, 23, 'Puja Samagri', 'Sandal’s  powder', 0.00, '23 May, 2021', '11:01:22 AM', 'Box', 1.00),
(253, 23, 'Puja Samagri', 'Betel leaves', 0.00, '23 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(254, 23, 'Puja Samagri', 'Cotton', 0.00, '23 May, 2021', '11:02:23 AM', 'P (Pieces)', 1.00),
(255, 23, 'Puja Samagri', 'Coconut', 0.00, '23 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(256, 23, 'Puja Samagri', 'Red Cloth', 0.00, '23 May, 2021', '11:02:23 AM', 'M (Meter)', 0.50),
(257, 23, 'Puja Samagri', 'Holy Thread ', 0.00, '23 May, 2021', '11:023:21 AM', 'Bundle', 1.00),
(258, 23, 'Puja Samagri', 'Kalalsh', 0.00, '23 May, 2021', '23:17:21 PM', 'P (Pieces)', 2.00),
(259, 23, 'Puja Samagri', 'Clay lamp', 0.00, '23 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(260, 23, 'Puja Samagri', 'Brahmin wearing things', 0.00, '23 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(261, 23, 'Puja Samagri', 'Camphor', 0.00, '23 May, 2021', '11:02:32 AM', 'Box', 1.00),
(262, 23, 'Puja Samagri', 'Cardamom', 0.00, '23 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(263, 23, 'Puja Samagri', 'Cinnamon', 0.00, '23 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(264, 23, 'Puja Samagri', 'Betel nut', 0.00, '23 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(265, 23, 'Puja Samagri', 'Incense Stick', 0.00, '23 May, 2021', '11:23:23 AM', 'Pkts', 1.00),
(266, 23, 'Puja Samagri', 'Match', 0.00, '23 May, 2021', '11:023:223 AM', 'Pkts', 1.00),
(267, 23, 'Puja Samagri', 'Clarified butter', 0.00, '23 May, 2021', '11:023:31 AM', 'Kg', 0.50),
(268, 23, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '23 May, 2021', '23:17:21 PM', 'Box', 1.00),
(269, 23, 'Puja Samagri', 'Ganga Water', 0.00, '23 May, 2021', '23:17:31 PM', 'Pkts', 1.00),
(270, 23, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '23 May, 2021', '23:17:31 PM', 'Pairs', 1.00),
(271, 23, 'Puja Samagri', 'Perfume', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(272, 23, 'Puja Samagri', 'Green grass', 0.00, '23 May, 2021', '23:17:31 PM', 'Bundle', 1.00),
(273, 23, 'Puja Samagri', 'Chouki', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(274, 23, 'Puja Samagri', 'Mango’s leaves', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 25.00),
(275, 23, 'Puja Samagri', 'Sacred Thread', 0.00, '23 May, 2021', '23:17:31 PM', 'Pairs', 2.00),
(276, 23, 'Puja Samagri', 'Glass', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(277, 23, 'Puja Samagri', 'Garlands (Small)', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(278, 23, 'Puja Samagri', 'Garlands (Big)', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(279, 23, 'Puja Samagri', 'Basil leaves', 0.00, '23 May, 2021', '23:17:31 PM', 'Bundle', 1.00),
(280, 23, 'Puja Samagri', 'Fruits (23 types)', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 5.00),
(281, 23, 'Puja Samagri', 'Havan-Kund', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(282, 23, 'Puja Samagri', 'Plate', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 2.00),
(283, 23, 'Puja Samagri', 'Mango’s sticks', 0.00, '23 May, 2021', '23:17:31 PM', 'Kg', 1.00),
(284, 23, 'Puja Samagri', 'Dry Coconut', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 1.00),
(285, 23, 'Puja Samagri', 'Banana leaves', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 2.00),
(286, 23, 'Puja Samagri', 'Sweets (laddu)', 0.00, '23 May, 2021', '23:17:31 PM', 'Kg', 0.50),
(287, 23, 'Puja Samagri', 'Yellow Cloth', 0.00, '23 May, 2021', '23:17:31 PM', 'M (Meter)', 1.00),
(288, 23, 'Puja Samagri', 'Loose flowers', 0.00, '23 May, 2021', '23:17:31 PM', 'P (Pieces)', 25.00),
(289, 23, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '23 May, 2021', '23:17:231 PM', 'Kg', 0.50),
(290, 23, 'Puja Samagri', 'Bowl', 0.00, '23 May, 2021', '23:17:231 PM', 'P (Pieces)', 5.00),
(291, 23, 'Puja Samagri', 'Havan Materials', 0.00, '23 May, 2021', '23:17:31 PM', 'Kg', 0.50),
(292, 23, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '23 May, 2021', '23:17:231 PM', 'Kg', 0.50),
(293, 23, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '23 May, 2021', '06:23:23 AM', 'Kg', 0.50),
(294, 23, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '23 May, 2021', '06:23:23 AM', 'P (Pieces)', 1.00),
(295, 23, 'Puja Samagri', 'GOD IDOL -  ganesh ', 0.00, '23 May, 2021', '06:23:23 AM', 'P (Pieces)', 1.00),
(296, 23, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '23 May, 2021', '06:23:23 AM', 'P (Pieces)', 1.00),
(297, 23, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '23 May, 2021', '06:23:23 AM', 'P (Pieces)', 1.00),
(298, 23, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '23 May, 2021', '06:23:223 AM', 'P (Pieces)', 1.00),
(300, 24, 'Puja Samagri', 'Sandal’s  powder', 0.00, '24 May, 2021', '11:01:22 AM', 'Box', 1.00),
(301, 24, 'Puja Samagri', 'Betel leaves', 0.00, '24 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(302, 24, 'Puja Samagri', 'Cotton', 0.00, '24 May, 2021', '11:02:24 AM', 'P (Pieces)', 1.00),
(303, 24, 'Puja Samagri', 'Coconut', 0.00, '24 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(304, 24, 'Puja Samagri', 'Red Cloth', 0.00, '24 May, 2021', '11:02:24 AM', 'M (Meter)', 0.50),
(305, 24, 'Puja Samagri', 'Holy Thread ', 0.00, '24 May, 2021', '11:024:21 AM', 'Bundle', 1.00),
(306, 24, 'Puja Samagri', 'Kalalsh', 0.00, '24 May, 2021', '24:17:21 PM', 'P (Pieces)', 2.00),
(307, 24, 'Puja Samagri', 'Clay lamp', 0.00, '24 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(308, 24, 'Puja Samagri', 'Brahmin wearing things', 0.00, '24 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(309, 24, 'Puja Samagri', 'Camphor', 0.00, '24 May, 2021', '11:02:32 AM', 'Box', 1.00),
(310, 24, 'Puja Samagri', 'Cardamom', 0.00, '24 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(311, 24, 'Puja Samagri', 'Cinnamon', 0.00, '24 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(312, 24, 'Puja Samagri', 'Betel nut', 0.00, '24 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(313, 24, 'Puja Samagri', 'Incense Stick', 0.00, '24 May, 2021', '11:24:24 AM', 'Pkts', 1.00),
(314, 24, 'Puja Samagri', 'Match', 0.00, '24 May, 2021', '11:024:224 AM', 'Pkts', 1.00),
(315, 24, 'Puja Samagri', 'Clarified butter', 0.00, '24 May, 2021', '11:024:31 AM', 'Kg', 0.50),
(316, 24, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '24 May, 2021', '24:17:21 PM', 'Box', 1.00),
(317, 24, 'Puja Samagri', 'Ganga Water', 0.00, '24 May, 2021', '24:17:31 PM', 'Pkts', 1.00),
(318, 24, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '24 May, 2021', '24:17:31 PM', 'Pairs', 1.00),
(319, 24, 'Puja Samagri', 'Perfume', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(320, 24, 'Puja Samagri', 'Green grass', 0.00, '24 May, 2021', '24:17:31 PM', 'Bundle', 1.00),
(321, 24, 'Puja Samagri', 'Chouki', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(322, 24, 'Puja Samagri', 'Mango’s leaves', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 25.00),
(323, 24, 'Puja Samagri', 'Sacred Thread', 0.00, '24 May, 2021', '24:17:31 PM', 'Pairs', 2.00),
(324, 24, 'Puja Samagri', 'Glass', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(325, 24, 'Puja Samagri', 'Garlands (Small)', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(326, 24, 'Puja Samagri', 'Garlands (Big)', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(327, 24, 'Puja Samagri', 'Basil leaves', 0.00, '24 May, 2021', '24:17:31 PM', 'Bundle', 1.00),
(328, 24, 'Puja Samagri', 'Fruits (5 types)', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 5.00),
(329, 24, 'Puja Samagri', 'Havan-Kund', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(330, 24, 'Puja Samagri', 'Plate', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 2.00),
(331, 24, 'Puja Samagri', 'Mango’s sticks', 0.00, '24 May, 2021', '24:17:31 PM', 'Kg', 1.00),
(332, 24, 'Puja Samagri', 'Dry Coconut', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 1.00),
(333, 24, 'Puja Samagri', 'Banana leaves', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 2.00),
(334, 24, 'Puja Samagri', 'Sweets (laddu)', 0.00, '24 May, 2021', '24:17:31 PM', 'Kg', 0.50),
(335, 24, 'Puja Samagri', 'Yellow Cloth', 0.00, '24 May, 2021', '24:17:31 PM', 'M (Meter)', 1.00),
(336, 24, 'Puja Samagri', 'Loose flowers', 0.00, '24 May, 2021', '24:17:31 PM', 'P (Pieces)', 25.00),
(337, 24, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '24 May, 2021', '24:17:241 PM', 'Kg', 0.50),
(338, 24, 'Puja Samagri', 'Bowl', 0.00, '24 May, 2021', '24:17:241 PM', 'P (Pieces)', 5.00),
(339, 24, 'Puja Samagri', 'Havan Materials', 0.00, '24 May, 2021', '24:17:31 PM', 'Kg', 0.50),
(340, 24, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '24 May, 2021', '24:17:241 PM', 'Kg', 0.50),
(341, 24, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '24 May, 2021', '06:24:24 AM', 'Kg', 0.50),
(342, 24, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '24 May, 2021', '06:24:24 AM', 'P (Pieces)', 1.00),
(343, 24, 'Puja Samagri', 'GOD IDOL -  ganesh ', 0.00, '24 May, 2021', '06:24:24 AM', 'P (Pieces)', 1.00),
(344, 24, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '24 May, 2021', '06:24:24 AM', 'P (Pieces)', 1.00),
(345, 24, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '24 May, 2021', '06:24:24 AM', 'P (Pieces)', 1.00),
(346, 24, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '24 May, 2021', '06:24:224 AM', 'P (Pieces)', 1.00),
(350, 1, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(351, 1, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(352, 1, 'Puja Samagri', 'Cotton', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 1.00),
(353, 1, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(354, 1, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:02:1 AM', 'M (Meter)', 0.50),
(355, 1, 'Puja Samagri', 'Holy Thread ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(356, 1, 'Puja Samagri', 'Kalalsh', 0.00, '1 May, 2021', '1:17:21 PM', 'P (Pieces)', 2.00),
(357, 1, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(358, 1, 'Puja Samagri', 'Brahmin wearing things', 0.00, '1 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(359, 1, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:02:32 AM', 'Box', 1.00),
(360, 1, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(361, 1, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(362, 1, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(363, 1, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:1:1 AM', 'Pkts', 1.00),
(364, 1, 'Puja Samagri', 'Match', 0.00, '1 May, 2021', '11:01:21 AM', 'Pkts', 1.00),
(365, 1, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:01:31 AM', 'Kg', 0.50),
(366, 1, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '1 May, 2021', '1:17:21 PM', 'Box', 1.00),
(367, 1, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(368, 1, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 1.00),
(369, 1, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(370, 1, 'Puja Samagri', 'Green grass', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(371, 1, 'Puja Samagri', 'Chouki', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(372, 1, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(373, 1, 'Puja Samagri', 'Sacred Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 2.00),
(374, 1, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(375, 1, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(376, 1, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(377, 1, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(378, 1, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 5.00),
(379, 1, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(380, 1, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(381, 1, 'Puja Samagri', 'Mango’s sticks', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(382, 1, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(383, 1, 'Puja Samagri', 'Banana leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(384, 1, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(385, 1, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(386, 1, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(387, 1, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(388, 1, 'Puja Samagri', 'Bowl', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 5.00),
(389, 1, 'Puja Samagri', 'Havan Materials', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(390, 1, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(391, 1, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '1 May, 2021', '06:1:1 AM', 'Kg', 0.50),
(392, 1, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(393, 1, 'Puja Samagri', 'GOD IDOL -  ganesh ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(394, 1, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(395, 1, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(396, 1, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '1 May, 2021', '06:1:21 AM', 'P (Pieces)', 1.00),
(400, 8, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(401, 8, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(402, 8, 'Puja Samagri', 'Cotton', 0.00, '29 Jun, 2021', '01:08:05 PM', 'Bundle', 1.00),
(403, 8, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(404, 8, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:02:1 AM', 'M (Meter)', 0.50),
(405, 8, 'Puja Samagri', 'Holy Thread ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(406, 8, 'Puja Samagri', 'Kalash', 0.00, '23 Jun, 2021', '12:01:50 PM', 'P (Pieces)', 2.00),
(407, 8, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(408, 8, 'Puja Samagri', 'Brahmin wearing things', 0.00, '1 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(409, 8, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:02:32 AM', 'Box', 1.00),
(410, 8, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(411, 8, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(412, 8, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(413, 8, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:1:1 AM', 'Pkts', 1.00),
(414, 8, 'Puja Samagri', 'Match Stick', 0.00, '29 Jun, 2021', '01:07:30 PM', 'Pkts', 1.00),
(415, 8, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:01:31 AM', 'Kg', 0.50),
(416, 8, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '23 Jun, 2021', '12:01:23 PM', 'Bottle', 1.00),
(417, 8, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(418, 8, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 1.00),
(419, 8, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(420, 8, 'Puja Samagri', 'Green grass', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(421, 8, 'Puja Samagri', 'Chowki', 0.00, '23 Jun, 2021', '12:01:04 PM', 'P (Pieces)', 1.00),
(422, 8, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(423, 8, 'Puja Samagri', 'Sacred Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 2.00),
(424, 8, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(425, 8, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(426, 8, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(427, 8, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(428, 8, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 5.00),
(429, 8, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(430, 8, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(431, 8, 'Puja Samagri', 'Mango’s sticks', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(432, 8, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(433, 8, 'Puja Samagri', 'Banana leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(434, 8, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(435, 8, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(436, 8, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(437, 8, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(438, 8, 'Puja Samagri', 'Bowl', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 5.00),
(439, 8, 'Puja Samagri', 'Havan Materials', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(440, 8, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(441, 8, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '1 May, 2021', '06:1:1 AM', 'Kg', 0.50),
(442, 8, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(443, 8, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '23 Jun, 2021', '12:00:33 PM', 'P (Pieces)', 1.00),
(444, 8, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(445, 8, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(446, 8, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '1 May, 2021', '06:1:21 AM', 'P (Pieces)', 1.00),
(450, 7, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(451, 7, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(452, 7, 'Puja Samagri', 'Cotton', 0.00, '29 Jun, 2021', '01:02:33 PM', 'Bundle', 1.00),
(453, 7, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(454, 7, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:02:1 AM', 'M (Meter)', 0.50),
(455, 7, 'Puja Samagri', 'Holy Thread ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(456, 7, 'Puja Samagri', 'Kalash', 0.00, '22 Jun, 2021', '02:13:48 PM', 'P (Pieces)', 2.00),
(457, 7, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(458, 7, 'Puja Samagri', 'Brahmin wearing things', 0.00, '1 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(459, 7, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:02:32 AM', 'Box', 1.00),
(460, 7, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(461, 7, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(462, 7, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(463, 7, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:1:1 AM', 'Pkts', 1.00),
(464, 7, 'Puja Samagri', 'Match Stick', 0.00, '29 Jun, 2021', '01:02:01 PM', 'Pkts', 1.00),
(465, 7, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:01:31 AM', 'Kg', 0.50),
(466, 7, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '22 Jun, 2021', '02:13:19 PM', 'Bottle', 1.00),
(467, 7, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(468, 7, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 1.00),
(469, 7, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(470, 7, 'Puja Samagri', 'Green grass', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(471, 7, 'Puja Samagri', 'Chowki', 0.00, '22 Jun, 2021', '02:28:25 PM', 'P (Pieces)', 1.00),
(472, 7, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(473, 7, 'Puja Samagri', 'Sacred Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 2.00),
(474, 7, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(475, 7, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(476, 7, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(477, 7, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(478, 7, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 5.00),
(479, 7, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(480, 7, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(481, 7, 'Puja Samagri', 'Mango’s sticks', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(482, 7, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(483, 7, 'Puja Samagri', 'Banana leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(484, 7, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(485, 7, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(486, 7, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(487, 7, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(488, 7, 'Puja Samagri', 'Bowl', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 5.00),
(489, 7, 'Puja Samagri', 'Havan Materials', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(490, 7, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(491, 7, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '1 May, 2021', '06:1:1 AM', 'Kg', 0.50),
(492, 7, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(493, 7, 'Puja Samagri', 'GOD IDOL -  Ganesh ', 0.00, '22 Jun, 2021', '02:12:52 PM', 'P (Pieces)', 1.00),
(494, 7, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(495, 7, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(496, 7, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '1 May, 2021', '06:1:21 AM', 'P (Pieces)', 1.00),
(500, 26, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(501, 26, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(502, 26, 'Puja Samagri', 'Cotton', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 1.00),
(503, 26, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(504, 26, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:02:1 AM', 'M (Meter)', 0.50),
(505, 26, 'Puja Samagri', 'Holy Thread ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(506, 26, 'Puja Samagri', 'Kalalsh', 0.00, '1 May, 2021', '1:17:21 PM', 'P (Pieces)', 2.00),
(507, 26, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(508, 26, 'Puja Samagri', 'Brahmin wearing things', 0.00, '1 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(509, 26, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:02:32 AM', 'Box', 1.00),
(510, 26, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(511, 26, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(512, 26, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(513, 26, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:1:1 AM', 'Pkts', 1.00),
(514, 26, 'Puja Samagri', 'Match', 0.00, '1 May, 2021', '11:01:21 AM', 'Pkts', 1.00),
(515, 26, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:01:31 AM', 'Kg', 0.50),
(516, 26, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '1 May, 2021', '1:17:21 PM', 'Box', 1.00),
(517, 26, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(518, 26, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 1.00),
(519, 26, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(520, 26, 'Puja Samagri', 'Green grass', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(521, 26, 'Puja Samagri', 'Chouki', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(522, 26, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(523, 26, 'Puja Samagri', 'Sacred Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 2.00),
(524, 26, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(525, 26, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(526, 26, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(527, 26, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(528, 26, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 5.00),
(529, 26, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(530, 26, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(531, 26, 'Puja Samagri', 'Mango’s sticks', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(532, 26, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(533, 26, 'Puja Samagri', 'Banana leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(534, 26, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(535, 26, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00);
INSERT INTO `slnt_samagri` (`id`, `puja_id`, `samagri_type`, `samagri_title`, `samagri_price`, `create_date`, `create_time`, `unit_of_measurement`, `measurement`) VALUES
(536, 26, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(537, 26, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(538, 26, 'Puja Samagri', 'Bowl', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 5.00),
(539, 26, 'Puja Samagri', 'Havan Materials', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(540, 26, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(541, 26, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '1 May, 2021', '06:1:1 AM', 'Kg', 0.50),
(542, 26, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(543, 26, 'Puja Samagri', 'GOD IDOL -  ganesh ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(544, 26, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(545, 26, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(546, 26, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '1 May, 2021', '06:1:21 AM', 'P (Pieces)', 1.00),
(550, 30, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(551, 30, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 25.00),
(552, 30, 'Puja Samagri', 'Cotton', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 1.00),
(553, 30, 'Puja Samagri', 'Coconut', 0.00, '1 May, 2021', '11:02:11 AM', 'Bottle', 1.00),
(554, 30, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:02:1 AM', 'M (Meter)', 0.50),
(555, 30, 'Puja Samagri', 'Holy Thread ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(556, 30, 'Puja Samagri', 'Kalalsh', 0.00, '1 May, 2021', '1:17:21 PM', 'P (Pieces)', 2.00),
(557, 30, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(558, 30, 'Puja Samagri', 'Brahmin wearing things', 0.00, '1 May, 2021', '11:02:10 AM', 'Pairs', 1.00),
(559, 30, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:02:32 AM', 'Box', 1.00),
(560, 30, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(561, 30, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 25.00),
(562, 30, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 20.00),
(563, 30, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:1:1 AM', 'Pkts', 1.00),
(564, 30, 'Puja Samagri', 'Match', 0.00, '1 May, 2021', '11:01:21 AM', 'Pkts', 1.00),
(565, 30, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:01:31 AM', 'Kg', 0.50),
(566, 30, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey,  sugar, clarified butter)', 0.00, '1 May, 2021', '1:17:21 PM', 'Box', 1.00),
(567, 30, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(568, 30, 'Puja Samagri', 'Cloths for Thakur ji', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 1.00),
(569, 30, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(570, 30, 'Puja Samagri', 'Green grass', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(571, 30, 'Puja Samagri', 'Chouki', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(572, 30, 'Puja Samagri', 'Mango’s leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(573, 30, 'Puja Samagri', 'Sacred Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pairs', 2.00),
(574, 30, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(575, 30, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(576, 30, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(577, 30, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'Bundle', 1.00),
(578, 30, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 5.00),
(579, 30, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(580, 30, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(581, 30, 'Puja Samagri', 'Mango’s sticks', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(582, 30, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(583, 30, 'Puja Samagri', 'Banana leaves', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(584, 30, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(585, 30, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(586, 30, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 25.00),
(587, 30, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond, dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(588, 30, 'Puja Samagri', 'Bowl', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 5.00),
(589, 30, 'Puja Samagri', 'Havan Materials', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(590, 30, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black)  White & rest of 20 gms.', 0.00, '1 May, 2021', '1:17:11 PM', 'Kg', 0.50),
(591, 30, 'Puja Samagri', 'Prasad (Panjiri, Mohanbhog or Halwa etc.)', 0.00, '1 May, 2021', '06:1:1 AM', 'Kg', 0.50),
(592, 30, 'Puja Samagri', 'GOD IDOL - Lakshmi', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(593, 30, 'Puja Samagri', 'GOD IDOL -  ganesh ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(594, 30, 'Puja Samagri', 'GOD IDOL -  SHIV ', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(595, 30, 'Puja Samagri', 'GOD IDOL - Parvati', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(596, 30, 'Puja Samagri', 'GOD IDOL - KRISHNA', 61.00, '1 May, 2021', '06:1:21 AM', 'P (Pieces)', 1.00),
(600, 16, 'Puja Samagri', 'Kalash', 0.00, '29 Jun, 2021', '01:18:31 PM', 'P (Pieces)', 1.00),
(601, 16, 'Puja Samagri', 'Kund', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 1.00),
(602, 16, 'Puja Samagri', 'Clay lamp (Deepak)', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 2.00),
(603, 16, 'Puja Samagri', 'Mango leaves', 0.00, '1 May, 2021', '11:02:11 AM', 'P (Pieces)', 10.00),
(604, 16, 'Puja Samagri', 'Sandal powder  ', 0.00, '1 May, 2021', '11:02:1 AM', 'Box', 1.00),
(605, 16, 'Puja Samagri', 'Kumkum ', 0.00, '1 May, 2021', '11:01:21 AM', 'Box', 1.00),
(606, 16, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(607, 16, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(608, 16, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 21.00),
(609, 16, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(610, 16, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(611, 16, 'Puja Samagri', 'Flowers, Basil leaves, Green grass (1 flowers set)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(612, 16, 'Puja Samagri', 'Clarified butter (small box)', 0.00, '1 May, 2021', '11:02:27 AM', 'Box', 1.00),
(613, 16, 'Puja Samagri', 'Prasad Sweets', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 250.00),
(614, 16, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(615, 16, 'Puja Samagri', 'Havan Items', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(616, 16, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 15.00),
(617, 16, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:1:1 AM', 'P (Pieces)', 15.00),
(618, 16, 'Puja Samagri', 'Leaves of betel', 0.00, '1 May, 2021', '11:01:21 AM', 'P (Pieces)', 10.00),
(619, 16, 'Puja Samagri', 'Clove', 0.00, '1 May, 2021', '11:01:31 AM', 'P (Pieces)', 15.00),
(620, 16, 'Puja Samagri', 'Cotton (small packet)', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(621, 16, 'Puja Samagri', 'Cloths Yellow', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(622, 16, 'Puja Samagri', 'Cloths Red ', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 0.50),
(623, 16, 'Puja Samagri', 'Nectar of the gods( Milk, yoghurt, honey, sugar, clarified butter)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(624, 16, 'Puja Samagri', 'Sweets (Laddu) & other sweets', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(625, 16, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(626, 16, 'Puja Samagri', 'Photographs or Murti (Lakshmi, Ganesh)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(627, 16, 'Puja Samagri', 'Holy Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 2.00),
(628, 16, 'Puja Samagri', 'Plate (Small 2 and 1 big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(629, 16, 'Puja Samagri', 'Rice', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(630, 16, 'Puja Samagri', 'Turmeric powder, Abir each 50 grams', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 50.00),
(631, 16, 'Puja Samagri', 'Sindur', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 2500.00),
(632, 16, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(633, 16, 'Puja Samagri', 'Spoons 2 small, 1 big', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(634, 16, 'Puja Samagri', 'Bowl ', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(635, 16, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 15.00),
(636, 16, 'Puja Samagri', 'Water Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(637, 16, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(638, 16, 'Puja Samagri', 'Wood sticks for Havan', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(639, 16, 'Puja Samagri', 'Dry Mewa (Cashew nut, currants, almond, walnut,  pistachio, dates(dried)', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(640, 16, 'Puja Samagri', 'Lotus flower', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 4.00),
(641, 16, 'Puja Samagri', 'Lotus Red', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 2.00),
(642, 16, 'Puja Samagri', 'Ganga-water', 61.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(650, 15, 'Puja Samagri', 'Kalash', 0.00, '29 Jun, 2021', '01:17:08 PM', 'P (Pieces)', 1.00),
(651, 15, 'Puja Samagri', 'Kund', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 1.00),
(652, 15, 'Puja Samagri', 'Clay lamp (Deepak)', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 2.00),
(653, 15, 'Puja Samagri', 'Mango leaves', 0.00, '1 May, 2021', '11:02:11 AM', 'P (Pieces)', 10.00),
(654, 15, 'Puja Samagri', 'Sandal powder  ', 0.00, '1 May, 2021', '11:02:1 AM', 'Box', 1.00),
(655, 15, 'Puja Samagri', 'Kumkum ', 0.00, '1 May, 2021', '11:01:21 AM', 'Box', 1.00),
(656, 15, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(657, 15, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(658, 15, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 21.00),
(659, 15, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(660, 15, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(661, 15, 'Puja Samagri', 'Flowers, Basil leaves, Green grass (1 flowers set)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(662, 15, 'Puja Samagri', 'Clarified butter (small box)', 0.00, '1 May, 2021', '11:02:27 AM', 'Box', 1.00),
(663, 15, 'Puja Samagri', 'Prasad Sweets', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 250.00),
(664, 15, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(665, 15, 'Puja Samagri', 'Havan Items', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(666, 15, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 15.00),
(667, 15, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:1:1 AM', 'P (Pieces)', 15.00),
(668, 15, 'Puja Samagri', 'Leaves of betel', 0.00, '1 May, 2021', '11:01:21 AM', 'P (Pieces)', 10.00),
(669, 15, 'Puja Samagri', 'Clove', 0.00, '1 May, 2021', '11:01:31 AM', 'P (Pieces)', 15.00),
(670, 15, 'Puja Samagri', 'Cotton (small packet)', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(671, 15, 'Puja Samagri', 'Cloths Yellow', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(672, 15, 'Puja Samagri', 'Cloths Red ', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 0.50),
(673, 15, 'Puja Samagri', 'Nectar of the gods( Milk, yoghurt, honey, sugar, clarified butter)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(674, 15, 'Puja Samagri', 'Sweets (Laddu) & other sweets', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(675, 15, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(676, 15, 'Puja Samagri', 'Photographs or Murti (Lakshmi, Ganesh)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(677, 15, 'Puja Samagri', 'Holy Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 2.00),
(678, 15, 'Puja Samagri', 'Plate (Small 2 and 1 big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(679, 15, 'Puja Samagri', 'Rice', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(680, 15, 'Puja Samagri', 'Turmeric powder, Abir each 50 grams', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 50.00),
(681, 15, 'Puja Samagri', 'Sindur', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 2500.00),
(682, 15, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(683, 15, 'Puja Samagri', 'Spoons 2 small, 1 big', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(684, 15, 'Puja Samagri', 'Bowl ', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(685, 15, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 15.00),
(686, 15, 'Puja Samagri', 'Water Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(687, 15, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(688, 15, 'Puja Samagri', 'Wood sticks for Havan', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(689, 15, 'Puja Samagri', 'Dry Mewa (Cashew nut, currants, almond, walnut,  pistachio, dates(dried)', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(690, 15, 'Puja Samagri', 'Lotus flower', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 4.00),
(691, 15, 'Puja Samagri', 'Lotus Red', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 2.00),
(692, 15, 'Puja Samagri', 'Ganga-water', 61.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(700, 17, 'Puja Samagri', 'Kalash', 0.00, '22 Jun, 2021', '01:30:13 PM', 'P (Pieces)', 1.00),
(701, 17, 'Puja Samagri', 'Kund', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 1.00),
(702, 17, 'Puja Samagri', 'Clay lamp (Deepak)', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 2.00),
(703, 17, 'Puja Samagri', 'Mango leaves', 0.00, '1 May, 2021', '11:02:11 AM', 'P (Pieces)', 10.00),
(704, 17, 'Puja Samagri', 'Sandal powder  ', 0.00, '1 May, 2021', '11:02:1 AM', 'Box', 1.00),
(705, 17, 'Puja Samagri', 'Kumkum ', 0.00, '1 May, 2021', '11:01:21 AM', 'Box', 1.00),
(706, 17, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(707, 17, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(708, 17, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 21.00),
(709, 17, 'Puja Samagri', 'Garlands (Small)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(710, 17, 'Puja Samagri', 'Garlands (Big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(711, 17, 'Puja Samagri', 'Flowers, Basil leaves, Green grass (1 flowers set)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(712, 17, 'Puja Samagri', 'Clarified butter (small box)', 0.00, '1 May, 2021', '11:02:27 AM', 'Box', 1.00),
(713, 17, 'Puja Samagri', 'Prasad Sweets', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 250.00),
(714, 17, 'Puja Samagri', 'Fruits (5 types)', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 1.00),
(715, 17, 'Puja Samagri', 'Havan Items', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(716, 17, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:03:11 AM', 'P (Pieces)', 15.00),
(717, 17, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:1:1 AM', 'P (Pieces)', 15.00),
(718, 17, 'Puja Samagri', 'Leaves of betel', 0.00, '1 May, 2021', '11:01:21 AM', 'P (Pieces)', 10.00),
(719, 17, 'Puja Samagri', 'Clove', 0.00, '1 May, 2021', '11:01:31 AM', 'P (Pieces)', 15.00),
(720, 17, 'Puja Samagri', 'Cotton (small packet)', 0.00, '1 May, 2021', '1:17:21 PM', 'Pkts', 1.00),
(721, 17, 'Puja Samagri', 'Cloths Yellow', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 1.00),
(722, 17, 'Puja Samagri', 'Cloths Red ', 0.00, '1 May, 2021', '1:17:31 PM', 'M (Meter)', 0.50),
(723, 17, 'Puja Samagri', 'Nectar of the gods( Milk, yoghurt, honey, sugar, clarified butter)', 0.00, '22 Jun, 2021', '01:29:30 PM', 'Bottle', 1.00),
(724, 17, 'Puja Samagri', 'Sweets (Laddu) & other sweets', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 0.50),
(725, 17, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(726, 17, 'Puja Samagri', 'Photographs or Murti (Lakshmi, Ganesh)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(727, 17, 'Puja Samagri', 'Holy Thread', 0.00, '1 May, 2021', '1:17:31 PM', 'Pkts', 2.00),
(728, 17, 'Puja Samagri', 'Plate (Small 2 and 1 big)', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(729, 17, 'Puja Samagri', 'Rice', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(730, 17, 'Puja Samagri', 'Turmeric powder, Abir each 50 grams', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 50.00),
(731, 17, 'Puja Samagri', 'Sindur', 0.00, '1 May, 2021', '06:1:1 AM', 'Gram', 2500.00),
(732, 17, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(733, 17, 'Puja Samagri', 'Spoons 2 small, 1 big', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(734, 17, 'Puja Samagri', 'Bowl ', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 3.00),
(735, 17, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 15.00),
(736, 17, 'Puja Samagri', 'Water Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 1.00),
(737, 17, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '1:17:31 PM', 'P (Pieces)', 2.00),
(738, 17, 'Puja Samagri', 'Wood sticks for Havan', 0.00, '1 May, 2021', '1:17:31 PM', 'Kg', 1.00),
(739, 17, 'Puja Samagri', 'Dry Mewa (Cashew nut, currants, almond, walnut,  pistachio, dates(dried)', 0.00, '1 May, 2021', '1:17:31 PM', 'Gram', 250.00),
(740, 17, 'Puja Samagri', 'Lotus flower', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 4.00),
(741, 17, 'Puja Samagri', 'Lotus Red', 0.00, '1 May, 2021', '1:17:11 PM', 'P (Pieces)', 2.00),
(742, 17, 'Puja Samagri', 'Ganga-water', 61.00, '1 May, 2021', '1:17:31 PM', 'Bottle', 1.00),
(743, 2, 'Puja Samagri', 'Sandal’s  powder', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(744, 2, 'Puja Samagri', 'Kumkum’s  powder', 0.00, '1 May, 2021', '11:02:22 AM', 'Box', 1.00),
(745, 2, 'Puja Samagri', 'Betel leaves', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 30.00),
(746, 2, 'Puja Samagri', 'Cotton', 0.00, '1 May, 2021', '11:02:11 AM', 'Bundle', 1.00),
(747, 2, 'Puja Samagri', 'Coconut (water)  ', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 6.00),
(748, 2, 'Puja Samagri', 'Red Cloth', 0.00, '1 May, 2021', '11:01:21 AM', 'M (Meter)', 2.00),
(749, 2, 'Puja Samagri', 'Holy-Thread ', 0.00, '1 May, 2021', '1:2:21 PM', 'Bundle', 1.00),
(750, 2, 'Puja Samagri', 'Kalalsh(big)', 0.00, '1 May, 2021', '11:01:22 AM', 'P (Pieces)', 2.00),
(751, 2, 'Puja Samagri', 'Kalash(Small)', 0.00, '22 Jun, 2021', '02:35:17 PM', 'P (Pieces)', 7.00),
(752, 2, 'Puja Samagri', 'Clay lamp', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 3.00),
(753, 2, 'Puja Samagri', 'One Gold piece or Vishnu’s figure plate', 0.00, '1 May, 2021', '1:2:31 PM', 'P (Pieces)', 1.00),
(754, 2, 'Puja Samagri', 'Camphor', 0.00, '1 May, 2021', '1:2:31 PM', 'Box', 1.00),
(755, 2, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 50.00),
(756, 2, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 50.00),
(757, 2, 'Puja Samagri', 'Betel nut', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 50.00),
(758, 2, 'Puja Samagri', 'Incense Stick', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 2.00),
(759, 2, 'Puja Samagri', 'Match Stick', 0.00, '29 Jun, 2021', '01:06:23 PM', 'Pkts', 1.00),
(760, 2, 'Puja Samagri', 'Clarified butter (small box)', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 1.00),
(761, 2, 'Puja Samagri', 'Nectar of the gods (Milk, yoghurt, honey, sugar, clarified butter) 1 Glass', 0.00, '1 May, 2021', '06:1:1 AM', 'P (Pieces)', 1.00),
(762, 2, 'Puja Samagri', 'Ganga Water', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(763, 2, 'Puja Samagri', 'Saptmritika (small pkts)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(764, 2, 'Puja Samagri', 'Sarvaushadhi (small pkts)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(765, 2, 'Puja Samagri', 'Five Jewels (small pkts)', 0.00, '1 May, 2021', '11:02:27 AM', 'Pkts', 1.00),
(766, 2, 'Puja Samagri', 'Rice', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 0.50),
(767, 2, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '11:02:27 AM', 'Bottle', 1.00),
(768, 2, 'Puja Samagri', 'Mool and Moolani', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(769, 2, 'Puja Samagri', 'Esau’s leaves or Green grass', 0.00, '1 May, 2021', '11:02:27 AM', 'Bundle', 1.00),
(770, 2, 'Puja Samagri', 'Mango’s leaves (bunches)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 6.00),
(771, 2, 'Puja Samagri', 'Sea’s sands', 0.00, '1 May, 2021', '11:02:27 AM', 'Gram', 300.00),
(772, 2, 'Puja Samagri', 'Glass (Stainless steel)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(773, 2, 'Puja Samagri', 'Havan-Kund', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(774, 2, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '11:02:27 AM', 'Bundle', 1.00),
(775, 2, 'Puja Samagri', 'Fruits (Five Types)', 0.00, '1 May, 2021', '11:02:27 AM', 'Bundle', 1.00),
(776, 2, 'Puja Samagri', 'Plate for Pray', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(777, 2, 'Puja Samagri', 'Mango sticks', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 1.00),
(778, 2, 'Puja Samagri', 'Dry Coconut', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(779, 2, 'Puja Samagri', 'Banana leaves ', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 2.00),
(780, 2, 'Puja Samagri', 'Sweets (laddu)', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 0.50),
(781, 2, 'Puja Samagri', 'Yellow Cloth', 0.00, '1 May, 2021', '11:02:27 AM', 'M (Meter)', 2.00),
(782, 2, 'Puja Samagri', 'Loose flowers', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 30.00),
(783, 2, 'Puja Samagri', 'Five Mewa (Cashew nut, currants, almond,   dates (dried), Coconut (all mixed)', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 0.50),
(784, 2, 'Puja Samagri', 'Photographs of (Lakshmi ji or lord Ganesh ji)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(785, 2, 'Puja Samagri', 'Bowl,Spoons  ', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 4.00),
(786, 2, 'Puja Samagri', 'Havan-Materials', 0.00, '1 May, 2021', '11:02:27 AM', 'Kg', 0.50),
(787, 2, 'Puja Samagri', 'Coloured Rice (White, Yellow, Red, Green & Black) (each)', 0.00, '1 May, 2021', '11:02:27 AM', 'Gram', 100.00),
(788, 2, 'Puja Samagri', 'Woolen cloths ', 0.00, '1 May, 2021', '11:02:27 AM', 'M (Meter)', 0.50),
(789, 2, 'Puja Samagri', 'Sea water', 0.00, '1 May, 2021', '11:02:27 AM', 'Bottle', 1.00),
(790, 2, 'Puja Samagri', 'Leaves of twenty seven Plants 1 piece each plant', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(792, 2, 'Puja Samagri', 'Polarised basket or so many with holes basket', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 1.00),
(793, 2, 'Puja Samagri', 'Bowl (Big)', 0.00, '1 May, 2021', '11:02:27 AM', 'P (Pieces)', 3.00),
(794, 36, 'Puja Samagri', 'YELLOW AND WHITE FLOWER', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 10.00),
(795, 2, 'Puja Samagri', 'CHANDAN RED AND YELLOW', 0.00, '1 May, 2021', '11:02:1 AM', 'Box', 1.00),
(796, 2, 'Puja Samagri', 'BLACK SEASAME SEEDS', 0.00, '1 May, 2021', '11:02:11 AM', 'Gram', 50.00),
(797, 2, 'Puja Samagri', 'BARLEY', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 50.00),
(798, 2, 'Puja Samagri', 'KUSH ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(799, 2, 'Puja Samagri', 'JANEU', 0.00, '1 May, 2021', '1:2:21 PM', 'P (Pieces)', 2.00),
(800, 2, 'Puja Samagri', 'FRUIT (5 types)', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(801, 2, 'Puja Samagri', 'RICE', 0.00, '1 May, 2021', '11:01:22 AM', 'Gram', 50.00),
(802, 2, 'Puja Samagri', 'BASIL LEAVES', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 100.00),
(803, 2, 'Puja Samagri', 'DHOTI / ANGOCHA / NAPKIN', 0.00, '1 May, 2021', '1:2:31 PM', 'P (Pieces)', 1.00),
(804, 36, 'Puja Samagri', 'YELLOW AND WHITE FLOWER', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 10.00),
(805, 36, 'Puja Samagri', 'CHANDAN RED AND YELLOW', 0.00, '1 May, 2021', '11:02:1 AM', 'Box', 1.00),
(806, 36, 'Puja Samagri', 'BLACK SEASAME SEEDS', 0.00, '1 May, 2021', '11:02:11 AM', 'Gram', 50.00),
(807, 36, 'Puja Samagri', 'BARLEY', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 50.00),
(808, 36, 'Puja Samagri', 'KUSH ', 0.00, '1 May, 2021', '11:01:21 AM', 'Bundle', 1.00),
(809, 36, 'Puja Samagri', 'JANEU', 0.00, '1 May, 2021', '1:2:21 PM', 'P (Pieces)', 2.00),
(810, 36, 'Puja Samagri', 'FRUIT (5 types)', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(811, 36, 'Puja Samagri', 'RICE', 0.00, '1 May, 2021', '11:01:22 AM', 'Gram', 50.00),
(812, 36, 'Puja Samagri', 'BASIL LEAVES', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 100.00),
(813, 36, 'Puja Samagri', 'DHOTI / ANGOCHA / NAPKIN', 21.00, '1 May, 2021', '1:2:31 PM', 'P (Pieces)', 1.00),
(824, 14, 'Puja Samagri', 'Milk', 0.00, '1 May, 2021', '11:02:22 AM', 'Box', 1.00),
(825, 14, 'Puja Samagri', 'Yoghurt', 0.00, '1 May, 2021', '11:02:1 AM', 'Kg', 0.50),
(826, 14, 'Puja Samagri', 'Honey', 0.00, '1 May, 2021', '11:02:11 AM', 'Gram', 100.00),
(827, 14, 'Puja Samagri', 'Sugar', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 500.00),
(828, 14, 'Puja Samagri', 'Sugarcane juice ', 0.00, '1 May, 2021', '11:01:21 AM', 'Box', 1.00),
(829, 14, 'Puja Samagri', 'Cloth two pieces', 0.00, '1 May, 2021', '1:2:21 PM', 'M (Meter)', 1.00),
(830, 14, 'Puja Samagri', 'Scared thread', 0.00, '1 May, 2021', '11:01:22 AM', 'Pairs', 2.00),
(831, 14, 'Puja Samagri', 'Sandal (small)', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 1.00),
(832, 14, 'Puja Samagri', 'Kumkum (small)', 0.00, '1 May, 2021', '11:02:10 AM', 'Pkts', 1.00),
(833, 14, 'Puja Samagri', 'Turmeric powder (small)', 0.00, '1 May, 2021', '1:2:31 PM', 'Pkts', 1.00),
(834, 14, 'Puja Samagri', 'Abir powder', 0.00, '1 May, 2021', '11:02:22 AM', 'Pkts', 1.00),
(835, 14, 'Puja Samagri', 'Calcinations powder ', 0.00, '1 May, 2021', '11:02:1 AM', 'Pkts', 1.00),
(836, 14, 'Puja Samagri', 'Rice', 0.00, '1 May, 2021', '11:02:11 AM', 'Gram', 200.00),
(837, 14, 'Puja Samagri', 'White Sesame', 0.00, '1 May, 2021', '11:02:1 AM', 'Gram', 10.00),
(838, 14, 'Puja Samagri', 'Yellow Mustard seeds ', 0.00, '1 May, 2021', '11:01:21 AM', 'Gram', 10.00),
(839, 14, 'Puja Samagri', 'Saffron', 0.00, '1 May, 2021', '1:2:21 PM', 'Box', 1.00),
(840, 14, 'Puja Samagri', 'Perfume', 0.00, '1 May, 2021', '11:01:22 AM', 'Bottle', 1.00),
(841, 14, 'Puja Samagri', 'Rose water', 0.00, '1 May, 2021', '11:01:22 AM', 'Bottle', 1.00),
(842, 14, 'Puja Samagri', 'Ganga-water', 0.00, '1 May, 2021', '11:02:10 AM', 'Bottle', 1.00),
(843, 14, 'Puja Samagri', 'Flowers', 0.00, '1 May, 2021', '1:2:31 PM', 'P (Pieces)', 25.00),
(844, 14, 'Puja Samagri', 'Garland', 0.00, '1 May, 2021', '11:02:22 AM', 'P (Pieces)', 1.00),
(845, 14, 'Puja Samagri', 'Vilva leaves', 0.00, '1 May, 2021', '11:02:1 AM', 'Bundle', 2.00),
(846, 14, 'Puja Samagri', 'Basil leaves', 0.00, '1 May, 2021', '11:02:11 AM', 'Bundle', 3.00),
(847, 14, 'Puja Samagri', 'Jasmine flowers', 0.00, '1 May, 2021', '11:02:1 AM', 'P (Pieces)', 11.00),
(848, 14, 'Puja Samagri', 'Lotus flowers  ', 0.00, '1 May, 2021', '11:01:21 AM', 'P (Pieces)', 8.00),
(849, 14, 'Puja Samagri', 'Betel nuts', 0.00, '1 May, 2021', '1:2:21 PM', 'P (Pieces)', 5.00),
(850, 14, 'Puja Samagri', 'Camphor (small packets)', 0.00, '1 May, 2021', '11:01:22 AM', 'Box', 1.00),
(851, 14, 'Puja Samagri', 'Incense sticks  ', 0.00, '1 May, 2021', '11:01:22 AM', 'Pkts', 0.50),
(852, 14, 'Puja Samagri', 'Cardamom', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 10.00),
(853, 14, 'Puja Samagri', 'Cinnamon', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 10.00),
(854, 14, 'Puja Samagri', 'Fruits', 0.00, '1 May, 2021', '11:02:10 AM', 'Kg', 1.00),
(855, 14, 'Puja Samagri', 'Dry-fruits (Mix)', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 250.00),
(856, 14, 'Puja Samagri', 'Sweets ', 0.00, '1 May, 2021', '11:02:10 AM', 'Kg', 0.50),
(857, 14, 'Puja Samagri', 'Holy-Thread', 0.00, '1 May, 2021', '11:02:10 AM', 'Bundle', 1.00),
(858, 14, 'Puja Samagri', 'Cloth (Dhoti, Angochha)', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 1.00),
(859, 14, 'Puja Samagri', 'Clarified butter', 0.00, '1 May, 2021', '11:02:10 AM', 'Gram', 200.00),
(860, 14, 'Puja Samagri', 'Plate', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 1.00),
(861, 14, 'Puja Samagri', 'Glass', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 1.00),
(862, 14, 'Puja Samagri', 'Wearing cloths for Mataji,SHIV JI , and decoration’s things', 0.00, '1 May, 2021', '11:02:10 AM', 'P (Pieces)', 1.00),
(863, 14, 'Puja Samagri', 'Donation – Estimates of Brahmin foods (Milk, Sugar, Yogurt etc.) (1 pkt each)', 70.00, '1 May, 2021', '11:02:10 AM', 'Pkts', 1.00),
(864, 39, 'Havan Samagri', 'Lamp', 21.00, '15 Dec, 2021', '09:30:04 AM', 'Kg', 1.00),
(865, 39, 'Havan Samagri', 'LAMP ( BIG)', 0.00, '15 Dec, 2021', '09:31:17 AM', 'Kg', 1.00),
(866, 39, 'Havan Samagri', 'RED CLOTH', 0.00, '15 Dec, 2021', '09:31:55 AM', 'M (Meter)', 0.50),
(867, 39, 'Havan Samagri', 'DRY COCONT', 0.00, '15 Dec, 2021', '09:36:56 AM', 'P (Pieces)', 1.00),
(868, 39, 'Havan Samagri', '	CAMPHOR', 0.00, '15 Dec, 2021', '09:40:38 AM', 'P (Pieces)', 15.00),
(869, 39, 'Havan Samagri', '	GHEE', 0.00, '15 Dec, 2021', '09:41:15 AM', 'Box', 1.00),
(870, 39, 'Havan Samagri', 'MATCH STICK', 0.00, '15 Dec, 2021', '09:41:42 AM', 'P (Pieces)', 1.00),
(871, 39, 'Havan Samagri', 'HAVAN KUND', 0.00, '15 Dec, 2021', '09:42:06 AM', 'P (Pieces)', 1.00),
(872, 39, 'Havan Samagri', '	HAVAN SAMGRI (1 Big)', 0.00, '15 Dec, 2021', '09:42:34 AM', 'Pkts', 1.00),
(873, 39, 'Havan Samagri', '	WOOD STICKS', 0.00, '15 Dec, 2021', '09:42:58 AM', 'Kg', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_type_interest`
--

CREATE TABLE `slnt_type_interest` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `cat_it` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slnt_type_interest`
--

INSERT INTO `slnt_type_interest` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(3, 'Test service 1', '1', 0, 0),
(4, 'Helping for cooking prasadam', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_user_membership`
--

CREATE TABLE `slnt_user_membership` (
  `member_profile_status` varchar(10) DEFAULT NULL,
  `member_id_old` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `sel_member_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `membership_id` varchar(255) NOT NULL,
  `membership_days` varchar(50) NOT NULL,
  `membership_title` varchar(255) NOT NULL,
  `gende` varchar(50) NOT NULL,
  `membership_amount` decimal(10,2) NOT NULL,
  `membership_description` text NOT NULL,
  `expr_status` int(11) NOT NULL DEFAULT '0',
  `membership_expire` varchar(50) NOT NULL,
  `membership_buy` varchar(50) NOT NULL,
  `membership_create_date` varchar(50) NOT NULL,
  `membership_create_time` varchar(50) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `pay_with` varchar(255) NOT NULL,
  `membership_buy_id` varchar(255) NOT NULL,
  `pay_status` int(11) NOT NULL DEFAULT '0',
  `name_as_nric` varchar(255) NOT NULL,
  `nric_passport` varchar(255) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `home_tel` varchar(20) NOT NULL,
  `mobile` varchar(22) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marital_status` varchar(255) NOT NULL DEFAULT '0',
  `mobile_code` varchar(15) NOT NULL,
  `name_title` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `nationality_other` varchar(200) NOT NULL,
  `postal_code` varchar(200) NOT NULL,
  `home_tel_code` varchar(200) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `name_of_firm` varchar(255) NOT NULL,
  `emp_address_1` varchar(255) NOT NULL,
  `emp_postalcode` varchar(255) NOT NULL,
  `emp_tel` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `membership_position` varchar(255) NOT NULL,
  `serves_as_volunterrs` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `interest_other` varchar(255) NOT NULL,
  `porposer_name` varchar(255) NOT NULL,
  `secondery_name` varchar(255) NOT NULL,
  `terms_1` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `userfile` varchar(255) NOT NULL,
  `final_submit_status` int(11) NOT NULL DEFAULT '0',
  `transection_slip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_user_membership`
--

INSERT INTO `slnt_user_membership` (`member_profile_status`, `member_id_old`, `id`, `sel_member_id`, `user_id`, `membership_id`, `membership_days`, `membership_title`, `gende`, `membership_amount`, `membership_description`, `expr_status`, `membership_expire`, `membership_buy`, `membership_create_date`, `membership_create_time`, `transection_id`, `pay_with`, `membership_buy_id`, `pay_status`, `name_as_nric`, `nric_passport`, `date_of_birth`, `nationality`, `address_1`, `address_2`, `home_tel`, `mobile`, `email`, `marital_status`, `mobile_code`, `name_title`, `days`, `month`, `year`, `nationality_other`, `postal_code`, `home_tel_code`, `occupation`, `name_of_firm`, `emp_address_1`, `emp_postalcode`, `emp_tel`, `emp_email`, `organization_name`, `membership_position`, `serves_as_volunterrs`, `interest`, `interest_other`, `porposer_name`, `secondery_name`, `terms_1`, `status`, `userfile`, `final_submit_status`, `transection_slip`) VALUES
('1', 'ME1237474', 1, 4, 'SLNT53352', 'SPSLNT20210513000001', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporean and PR</p>', 0, '30200614', '20210303', '23-06-2021', '14:23:00 PM', '202105131620895096', 'Offline Payment', '', 1, 'Sanyam', '78945612332651616', '', 'Singaporean', '67', '2', '70556260', '70556260', 'sanyamrastogi0@gmail.com', 'Married', '+65', 'Mr', 26, 3, 1995, '', '250004', '+65', 'dem', 'Demo', 'demo', '250004', '70556260', 'sanyamrastogi0@gmail.com', '', '', '', '', ' ', '', '', '', 1, '', 0, '81e551b52ba2974e6318331f002843b1.png'),
(NULL, NULL, 2, 4, 'SLNT16061', '', '365000', 'Life Membership', 'Female', 501.00, '<p>For Singaporean and PR</p>', 0, '30200914', '20210514', '14-05-2021', '11:37:01 AM', '', '', '', 0, 'Myint Zan', '121212', '', 'Singaporean', 'Blk 263', '12-58', '12121212', '12121212', 'myintmyintzanster222@gmail.com', 'Married', '+65', 'Mr', 12, 4, 2007, '', '521221', '+65', 'test', 'test', 'test', '343434', '12121212', 'myintmyintzanster222@gmail.com', '', '', '', '', ' ', '', '', '', 0, '', 0, ''),
('0', '', 3, 3, 'SLNT53352', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporean and PR</p>', 0, '20220823', '20210823', '23-08-2021', '10:59:50 AM', '', '', '', 0, 'sam', '123455677978070', '', 'Singaporean', '67', 'Phase-2', '', '90273269', 'sanyamrastogi0@gmail.com', 'Single', '+65', 'Mr', 26, 3, 1995, '', '250000', '+65', 'dem', 'Demo', 'demo', '250004', '70556260', 'sanyamrastogi0@gmail.com', '', '', '', '', ' ', '', '', '', 0, '', 1, ''),
(NULL, NULL, 4, 2, 'SLNT59844', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non Singaporean / PR and also for Singaporean who are not North Indians Hindu .</p>', 0, '20220514', '20210514', '14-05-2021', '12:36:32 PM', '', '', '', 0, 'test test', '11111111', '', 'Singaporean', 'test test', '2323', '23423223', '23232323', 'myintmyintzanster@gmail.com', 'Married', '+65', 'Mr', 3, 2, 2019, '', '434333', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', 'SSSS0123456456', 5, 4, 'SLNT93665', 'SPSLNT20210608000005', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporean and PR</p>', 0, '30201009', '20210608', '29-06-2021', '14:02:53 PM', '202106081623167061', 'Offline Payment', '', 1, 'sohan veer', 'NA', '', 'Singaporean', 'Nangla tashi', 'kanker khera', '36275502', '36275502', 'sohanveer152@gmail.com', 'Married', '+65', 'Mr', 17, 9, 1990, '', '250001', '+65', 'Software Engineer', 'WSSInfotech', 'Nangla tashi', '250001', '95362755', 'sohanveer152@gmail.com', 'WssInfotech', 'NA', 'Yes', 'Test service 1', ' ', 'N', 'B', 'Terms & Conditions 1', 1, '', 1, '21e483b482ff4173954d8ae068eaf263.jpeg'),
('0', '', 6, 3, 'SLNT93665', 'SPSLNT20210630000006', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporean and PR</p>', 0, '20250617', '20210617', '08-06-2021', '21:35:56 PM', '202106301625022068', 'Offline Payment', '', 1, 'sohan veer', 'NA', '', 'Singaporean', 'Nangla tashi', 'kanker khera', '96200421', '36275502', 'sohanveer152@gmail.com', 'Married', '+65', 'Mr', 16, 9, 2007, '', '250001', '+65', 'Software Engineer', 'WSSInfotech', 'Nangla tashi', '250001', '95362755', 'sohanveer152@gmail.com', 'WssInfotech', 'NA', 'Yes', 'Test service 1', ' ', 'N', 'B', 'Terms & Conditions 1', 1, '', 1, 'a3f60897eccb2f294cef670f1b67531d.png'),
('1', 'SSSS0123456456', 7, 4, 'SLNT93665', 'SSSS0123456456', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporean and PR</p>', 0, '30201012', '20210611', '11-06-2021', '05:09:32 AM', '202106111623392390', 'Offline Payment', '', 1, 'sohan veer', 'NA', '', 'Singaporean', 'Nangla tashi', 'kanker khera', '36275502', '36275502', 'sohanveer152@gmail.com', 'Single', '+65', 'Mr', 17, 9, 1990, '', '250001', '+65', 'Software Engineer', 'WSSInfotech', 'Nangla tashi', '250001', '95362755', 'sohanveer152@gmail.com', 'WssInfotech', 'NA', 'Yes', 'Test service 1', ' ', 'N', 'B', 'Terms & Conditions 1', 1, '', 1, 'cfe7f9914adefabad29fea4ff3651ef5.png'),
('1', 'HQ00004', 8, 3, 'SLNT73477', 'HQ00004', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporean and PR</p>', 0, '20220611', '20210611', '11-06-2021', '08:48:14 AM', '202106291624952866', 'Offline Payment', '', 1, 'PRADIPTO PAL', 'S2668158H', '', 'Singaporean', '72 BAYSHORE ROAD,', '#02-13, COSTA DEL SOL', '96734639', '96734639', 'zanzan@contentfactory.biz', 'Married', '+65', 'Mr', 2, 3, 2020, '', '469988', '+65', 'test', 'test', 'test', '232323', '22323232', 'zanzan@contentfactory.biz', 'test', 'est', 'No', 'Other', ' test', 'test', 'test', 'Terms & Conditions 1', 1, '', 1, 'aae4e2a5e5c0a03a43f5799030932e03.png'),
('1', 'HQ00004', 9, 3, 'SLNT73477', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporean and PR</p>', 0, '20220613', '20210613', '13-06-2021', '01:50:50 AM', '', '', '', 0, 'ttttt', 'S2668158H', '', 'Singaporean', 'blk', '212', '11112222', '22223333', 'zanzan12@contentfactory.biz', 'Married', '+65', 'Mr', 17, 2, 1988, '', '112112', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('1', 'HQ00006', 10, 3, 'SLNT40686', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporean and PR</p>', 0, '20220613', '20210613', '13-06-2021', '01:59:30 AM', '', '', '', 0, 'TRIKHA AMIT', 'G5322323R', '', 'Singaporean', 'blk', '12', '33334444', '11112222', 'TRIKHA@gmail.com', 'Married', '+65', 'Mr', 2, 3, 1976, '', '121212', '+65', 'test', 'test', 'blk888', '555666', '11112222', 'jjjj@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 11, 2, 'SLNT445510', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non Singaporean / PR and also for Singaporean who are not North Indians Hindu .</p>', 0, '20220803', '20210803', '03-08-2021', '10:18:51 AM', '', '', '', 0, 'Manisha Rajpal', 'S7783958E', '', 'Singaporean', '5 chander road ', '#08-09', '12345678', '83794785', 'mitaliraj@hotmail.com', 'Married', '+65', 'Miss', 30, 12, 2020, '', '658881', '+65', 'Administration', 'Shidd Peeth Shree Laxmi Narayan Temple', '5 Chander Road', '219528', '8379478', 'mitaliraj@hotmail.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 12, 3, 'SLNT157720', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221121', '20211121', '21-11-2021', '07:20:42 AM', '', '', '', 0, 'Sheetal Roy', 'S8432334I', '', 'Singaporean', '12 MARINE TERRACE', '#13-166', '', '91794441', 'Lateehs84@gmail.com', 'Married', '+65', 'Miss', 5, 10, 1984, '', '440012', '+65', 'Homemaker', 'NA', 'NA', '440012', '00000000', 'NA@NA.org', '', '', 'Yes', 'Test service 1', ' ', '', '', '', 0, '', 0, ''),
('0', '', 13, 2, 'SLNT767737', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221126', '20211126', '26-11-2021', '02:47:27 AM', '', '', '', 0, 'Shyamal Tewari ', 'G3433793X', '', 'Other', ' 21 West Coast crescent,Tower A, Blue Horizon condo, West Coast ', '0706', '91893020', '90288203', 'shyamalmeri@gmail.com', 'Married', '+65', 'Mr', 30, 1, 1980, 'Indian ', '128045', '+65', 'Service ', 'Fleet Ship Management ', '21 West Coast crescent #0706 Tower A, Blue Horizon condo ', '128045', '90288203', 'Shyamalmeri@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 14, 3, 'SLNT513653', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221128', '20211128', '28-11-2021', '02:09:34 AM', '', '', '', 0, 'Bhagat Preeti Kachroo', 'S7587333F', '', 'Singaporean', '2 perumal road', '2206', '', '90261864', 'preetikach@yahoo.com', 'Married', '+65', 'Miss', 5, 1, 1975, '', '218773', '+65', 'Scientist', 'GSK', '23 Rochester Park', '139234', '97566257', 'preetikach@yahoo.com', '', '', 'Yes', 'Other', ' Help when available', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 15, 2, 'SLNT480666', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221129', '20211129', '29-11-2021', '03:08:01 AM', '', '', '', 0, 'Nitesh Tiwari', 'G3196561L', '', 'Other', 'Block 304, Jurong East st 32', '10-120', '', '85875596', 'Nitesh.kum08@gmail.com', 'Married', '+65', 'Mr', 5, 7, 1988, 'EP', '600304', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 16, 2, 'SLNT247970', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221129', '20211129', '29-11-2021', '04:35:57 AM', '', '', '', 0, 'Nikhil Pal', 'Z5029056', '', 'Other', '402 Pandan Gardens', '06-08', '', '82863317', 'palnikhil06@gmail.com', 'Married', '+65', 'Mr', 6, 8, 1986, 'EP Holder', '600402', '+65', 'CI Manager', 'Thermofisher Scientific', '3A Joo Koon Circle', '629033', '69940374', 'nikhil.pal@thermofisher.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, 'bbbeb04bfdca23e446927314bdd55a5b.jpg', 1, ''),
('0', '', 17, 2, 'SLNT252673', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221129', '20211129', '29-11-2021', '06:23:44 AM', '', '', '', 0, 'Gunjan Chaubey', 'G5853323N', '', 'Other', '#06-29 Madarin gardens', '3 Siglap Road', '98000237', '98000237', 'gunjanchaubey@gmail.com', 'Married', '+65', 'Miss', 25, 12, 1981, 'Dependent Pass', '448907', '+65', 'NA', 'NA', '06-29 Mandarin Gardens', '448907', '98000237', 'Gunjanchaubey@gmail.com', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 18, 2, 'SLNT870667', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221129', '20211129', '29-11-2021', '06:42:44 AM', '', '', '', 0, 'Nishant Upadhyay', 'G3818723L', '', 'Other', '370G, Alexandra Road', '15-03', '', '93707308', 'nishant_u79@yahoo.com', 'Married', '+65', 'Mr', 2, 8, 1979, 'Indian', '159960', '+65', 'Salaried', 'FB', 'Marina One East Tower', '018936', '93707308', 'nishant_u79@yahoo.com', '', '', '', '', ' ', '', '', '', 0, '', 1, ''),
('0', '', 19, 3, 'SLNT908974', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221129', '20211129', '29-11-2021', '08:49:10 AM', '', '', '', 0, 'Sanjeev Kapur', 'S7555865A', '', 'Singapore', '70 Farrer road', '01-04', '', '91693418', 'agarwalsurabhi78@yahoo.co.in', 'Married', '+65', 'Mr', 30, 3, 1975, '', '268850', '+65', 'Professional ', 'Metlifr', '70 Farrer road', '268850', '91693418', 'agarwalsurabhi78@yahoo.co.in', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 20, 2, 'SLNT390584', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221130', '20211130', '30-11-2021', '04:14:19 AM', '', '', '', 0, 'Subhash SINHA', 'G3025849K', '', 'Other', '7 Pasir Ris Link', '11-17', '65742470', '96533430', 'sinha.subhash@gmail.com', 'Married', '+65', 'Mr', 25, 4, 1977, 'EP', '518188', '+65', 'Service', 'Thales Solutiins Asia P Ltd', '28 Changi North Rise', '498755', '64247135', 'subhash.sinha@asia.thalesgroup.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 0, ''),
('0', '', 21, 3, 'SLNT15685', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221130', '20211130', '30-11-2021', '09:17:13 AM', '', '', '', 0, 'Pratigya Mishra', 'S8482364C', '', 'Singapore', '77 PASIR RIS GROVE', '05-34', '91170672', '81139490', 'itzpratigya@gmail.com', 'Married', '+65', 'Madam', 23, 11, 1984, '', '518208', '+65', 'software engg', 'Visa Worldwide', '77 PASIR RIS GROVE', '518208', '91170672', 'itzpratigya@gmail.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 22, 3, 'SLNT10393', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221201', '20211201', '01-12-2021', '11:51:39 AM', '', '', '', 0, 'Rajiv Gupta', 'S7189230A', '', 'Singapore', '97 Robertson Quay', '#38-09', '', '92362207', 'rgupta22@yahoo.com', 'Married', '+65', 'Mr', 22, 6, 1971, '', '238257', '+65', 'Lawyer', 'Latham & Watkins', '9 Raffles Place, #42-02', '048619', '64375467', 'rgupta22@yahoo.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 23, 0, 'SLNT247994', '', '', '', 'Male', 0.00, '', 0, '19700101', '20211201', '01-12-2021', '12:35:38 PM', '', '', '', 0, 'Shanker Manokaran', 'S7810574G', '', 'Singaporean', '41 Sims drive', '#14-263', '', '93887784', 'shanker.manokaran@gmail.com', 'Married', '+65', 'Mr', 7, 4, 1978, '', '380041', '+65', 'Solution Consultant', 'CHASSasia Singapore Pte Ltd', '221 Henderson road #08-08 Henderson Building', '159557', '62129191', 'shankermanokaran@chassasia.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 24, 3, 'SLNT131103', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221202', '20211202', '02-12-2021', '05:24:31 AM', '', '', '', 0, 'Amit Mehta ', 'S8067034F', '', 'Singapore', '27 jalan sempadan 02-02 tower 23', '02-02', '', '93893203', 'am.sg@outlook.com', 'Married', '+65', 'Mr', 12, 7, 1980, '', '457401', '+65', 'Consultant ', 'Nuva', '27 jalan sempadan, 02-02 Villa Marina Tower 23', '457401', '93893203', 'am.sg@outlook.com', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 25, 4, 'SLNT1550106', 'SPSLNT20211203000025', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporeans and PRs<br />\r\nValidity: Lifetime</p><br /><br />', 0, '30210404', '20211202', '02-12-2021', '18:44:43 PM', '202112031638470858', 'Offline Payment', '', 1, 'Sanyam Rastogi', 'IND4578451', '', 'Singaporean', 'Phase-2 Mayur Vihar', '67', '', '70556260', 'Gyanudaytechnologies@gmail.com', 'Single', '+65', 'Mr', 26, 3, 1995, '', '250004', '+65', 'IT Company', 'Gyan Uday Technologies', '67 Phase-2,  Mayur Vihar', '250004', '70556260', 'gyanudaytechnologies@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 1, '', 1, '6d35ab0d81397be2f8b2b465e2645613.png'),
('0', '', 26, 2, 'SLNT9051108', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221203', '20211203', '03-12-2021', '03:12:48 AM', '', '', '', 0, 'Suruchi Thapar', 'G3403033U', '', 'Other', '23 leonie hill', '1505', '', '87393855', 'suruchithapar@gmail.com', 'Married', '+65', 'Madam', 19, 8, 1984, 'Indian', '239224', '+65', 'Self employed', 'NA', '23 Leonie Hill, Unit 1504', '239224', '87393855', 'suruchithapar@gmail.com', '', '', 'Yes', 'Other', ' Please contact for anything that we can help with', '', '', 'Terms & Conditions 1', 0, '432967713c92b94bce55bc11048c98a3.jpg', 1, ''),
('1', 'SPSLNT001', 27, 4, 'SLNT4527113', 'SPSLNT001', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporeans and PRs<br />\r\nValidity: Lifetime</p><br /><br />', 0, '30210405', '20211203', '03-12-2021', '05:39:14 AM', '202112031638510323', 'Offline Payment', '', 1, 'La Desire', 'G81145797M', '', 'Singaporean', 'Delhi', '04', '', '70556260', 'ladesiremrt@gmail.com', 'Single', '+65', 'Mr', 26, 3, 1995, '', '250004', '+65', 'Demo', 'Demo', 'Delhi', '250004', '70562457', 'ladesiremrt@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 1, 'c469aa46f6d8d00f1e9ca5059465eac4.jpg', 1, '4c189af1ca551d85053d9f5a639b8994.jpg'),
('1', 'SPSLNT002', 28, 3, 'SLNT3812114', 'SPSLNT002', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221203', '20211203', '03-12-2021', '06:05:49 AM', '202112031638511802', 'Offline Payment', '', 1, 'Demo', 'G04785247M', '', 'Singaporean', 'mayur Vihar', '67', '', '70555626', 'bharattimesnewsmrt@gmail.com', 'Single', '+65', 'Mr', 26, 3, 1995, '', '250004', '+65', 'Demo', 'Demo', 'Mayur ', '250004', '45784578', 'bharattimesnewsmrt@gmail.com', '', '', '', '', ' ', '', '', '', 1, '3fda5db4311bf99a13184e68ab14da25.jpg', 1, 'f3d371e84259ccd02b78ce7f7ab5810c.jpg'),
('1', 'ME002144', 29, 4, 'SLNT215018', '', '365000', 'Life Membership', 'Male', 501.00, '<p>For Singaporeans and PRs<br />\r\nValidity: Lifetime</p><br /><br />', 0, '30210405', '20211203', '03-12-2021', '12:10:12 PM', '', '', '', 0, 'Kiranchand Tiwari', 'S7917212Z', '', 'Singaporean', '319 CHOA CHU KANG AVE 3', '#18-17 tower B2', '', '96373522', 'kiranchandtiwari007@gmail.com', 'Married', '+65', 'Mr', 11, 6, 1979, '', '689863', '+65', 'Lecturer', 'ITE', '5 Ang Mo Kio Drive', '567720', '96373522', 'kiranchandtiwari007@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 30, 2, 'SLNT2425115', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221203', '20211203', '03-12-2021', '07:48:41 AM', '', '', '', 0, 'Mohini Tripathi', 'G5331821K', '', 'Other', 'Blk415', '169', '', '91681664', 'mohinishukla886@gmail.com', 'Married', '+65', 'Miss', 11, 12, 1989, 'Employment pass holder', '730415', '+65', 'Sales Manager', 'Servicesource', 'Pasirpanjag', '117372', '91681664', 'mohinishukla886@gmail.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 31, 2, 'SLNT247970', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221205', '20211205', '05-12-2021', '05:07:28 AM', '', '', '', 0, 'Nikhil Pal', 'G3189559L', '', 'Other', '402 Pandan Gardens', '06-08', '', '82863317', 'palnikhil06@gmail.com', 'Married', '+65', 'Mr', 6, 8, 1986, 'Indian', '600402', '+65', 'Manager', 'Thermofisher Scientific', '3A Joo Koon Circle', '629033', '82863317', 'palnikhil06@gmail.com', '', '', 'No', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 32, 3, 'SLNT9111138', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221206', '20211206', '06-12-2021', '03:22:51 AM', '', '', '', 0, 'Mohandas Jamnadas Bhojwani', 'S0089782E', '', 'Singaporean', '61 Grange Road', '19-01', '63441800', '96161216', 'manu@shankars.com', 'Married', '+65', 'Mr', 11, 5, 1954, '', '249570', '+65', 'Company Director', 'Shankars Emporium Pte Ltd', '77 High Street, #06-01/11', '179433', '63374450', 'manu@shankars.com', 'Singapore Cricket Club', 'Past President', 'No', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 33, 2, 'SLNT8551156', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221207', '20211207', '07-12-2021', '07:52:32 AM', '', '', '', 0, 'Suchita Singh', 'S7263001G', '', 'Singaporean', 'Blk 297 Punggol Central', '12-479', '', '90014767', 'singhabhishek1200@gmail.com', 'Married', '+65', 'Madam', 22, 7, 1972, '', '820297', '+65', 'Housewife ', 'House', 'Blk 297 Punggol Central', '820297', '90014767', 'singhabhishek1200@gmail.com', '', '', '', '', ' ', '', '', '', 0, '4cf486ce61a7df6d2306d4fc24ec615d.jpg', 1, ''),
('0', '', 34, 3, 'SLNT5324131', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221207', '20211207', '07-12-2021', '08:59:47 AM', '', '', '', 0, 'Jagdish Gupta', 'S8067574G', '', 'Singapore', '91 West Coast Vale', '08-02 Twin Vew', '', '84680624', 'gupta.jagdish@gmail.com', 'Married', '+65', 'Mr', 30, 6, 1980, '', '126755', '+65', 'Country Director ', 'Symrise Asia Pacific ', '91 West Coast Vale', '126755', '84680624', 'gupta.jagdish@gmail.com', 'Narayan Seva Sansthan Singapore ', 'Director', 'Yes', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 35, 3, 'SLNT4027161', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221207', '20211207', '07-12-2021', '12:43:11 PM', '', '', '', 0, 'Anand K Venkat', 'S7476094E', '', 'Singaporean', '71 Pasir Ris Grove,', 'No 07-19 Livia', '', '86126067', 'shriakv@gmail.com', 'Married', '+65', 'Mr', 9, 5, 1974, '', '518205', '+65', 'IT ', 'Red Hat Technologies', '71 Pasir Ris Grove,', '518205', '86126067', 'shriakv@gmail.com', 'Sri Aurobindo society Singapore', 'Secretary', 'No', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 36, 3, 'SLNT3969165', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221208', '20211208', '08-12-2021', '03:20:52 AM', '', '', '', 0, 'Abhinav', 'S8779399J', '', 'Singaporean', '1B Cantonment Rd', '#25-13', '', '94511075', 'abhinavshukla1987@gmail.com', 'Married', '+65', 'Mr', 20, 8, 1987, '', '085201', '+65', 'Banker', 'Standard Chartered', '7 Changi Business Park Crescent', '486028', '94511075', 'abhinavshukla1987@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 37, 2, 'SLNT7301190', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221209', '20211209', '09-12-2021', '10:24:53 AM', '', '', '', 0, 'Manoj Kumar Rai', 'T6709202', '', 'Other', '112 Edgefield Plains', '05-392', '', '92381692', 'manoj.rai84@gmail.com', 'Married', '+65', 'Mr', 29, 1, 1986, 'Indian', '820112', '+65', 'Web & Mobile Programmer / Analyist', 'Singtechnologies LLP', '48 WOODLANDS DRIVE 16 #04-54 SINGAPORE ', '737763', '92381692', 'manoj.rai84@gmail.com', '', '', 'Yes', 'Other', 'Whatever the management decide will do', 'HariChand Nishad', 'Ajay Dubey', 'Terms & Conditions 1', 0, '1f51dab3a0669bd932df838ac977314e.jpeg', 0, ''),
('0', '', 38, 3, 'SLNT2001194', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221210', '20211210', '10-12-2021', '19:47:36 PM', '', '', '', 0, 'HEMANT CHITLANGIA', 'S7684404F', '', 'Singapore', '28 Simei Street 1', '04-12', '', '96341396', 'hemant.chitlangia@gmail.com', 'Married', '+65', 'Mr', 2, 6, 1978, '', '529948', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 39, 3, 'SLNT1427209', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221212', '20211212', '12-12-2021', '02:52:57 AM', '', '', '', 0, 'Jyotsna Anand Roy ', 'S7956091Z', '', 'Singapore', '485 Yio Chu Kang Road,Castle Green ', '01-08', '', '85695466', 'Jyot_2@hotmail.com', 'Married', '+65', 'Madam', 30, 10, 1979, '', '787058', '+65', 'Teacher', 'DAV', '485 Yio Chu Kang Road ,#01-08', '787058', '85695466', 'Jyot_2@hotmail.com ', '', '', 'Yes', 'Helping for cooking prasadam', ' ', 'Jyotsna ', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 40, 2, 'SLNT3770211', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221212', '20211212', '12-12-2021', '03:10:34 AM', '', '', '', 0, 'Urmi Dash', 'G6127364L', '', 'Other', '28 Flora drive ', '03-53', '', '97578663', 'urmidash@gmail.com', 'Married', '+65', 'Madam', 13, 2, 1983, 'EP', '506951', '+65', 'IT professional ', 'DBS bank', '28 Flora drive ', '506951', '97578663', 'urmidash@gmail.com', 'Laxmi Narayan Temple', 'Regular Annual membership', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '1894252e3d43465e4dca6709a3212d45.jpeg', 1, ''),
('0', '', 41, 3, 'SLNT7531226', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221213', '20211213', '13-12-2021', '10:25:35 AM', '', '', '', 0, 'Poonam Pal', 'S8084822F', '', 'Singapore', 'Block 275 , Tampines Street 22', '04-88', '66386942', '83760122', 'poonampal@yahoo.com', 'Divorced', '+65', 'Madam', 16, 12, 1980, '', '520275', '+65', 'Physiotherapist', 'Changi General Hospital', 'block 275, 04-88, Tampines Street 22', '520275', '83760122', 'poonampal@yahoo.com', '', '', '', 'Other', ' Can give lectures and talks on physiotherapy', 'Please suggest', 'Please Suggest', 'Terms & Conditions 1', 0, '01f2a41ff2776610973341cece7eb295.png', 1, ''),
('0', '', 42, 3, 'SLNT9653230', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221214', '20211214', '14-12-2021', '03:15:32 AM', '', '', '', 0, 'Rajiv Mathur', '2764664', '', 'Singapore', '71 Jalan Tua kong', '05-05', '62438324', '98345866', 'rmathur320@gmail.com', 'Married', '+65', 'Mr', 16, 6, 1958, '', '457265', '+65', 'airlines', 'singapore Airlines', 'SIA TRAINING CENTRE 720 UPPER CHANGI ROAD', '486852', '65403791', 'RMATHUR320@GMAIL.COM', '', '', 'No', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '5b2adc4692c23344988648b98aacd814.jpg', 1, ''),
('0', '', 43, 3, 'SLNT2243231', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221214', '20211214', '14-12-2021', '13:46:51 PM', '', '', '', 0, 'Mylavarapu Suresh', 'S8387334E', '', 'Singapore', '66 Marine parade road', '06-15', '', '91890670', 'sureshmylavarapu@gmail.com', 'Married', '+65', 'Mr', 13, 12, 1983, '', '449300', '+65', 'Sales', 'Google', 'Pasir panjang', '117371', '91890670', 'sureshmylavarapu@gmail.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, 'a9bf062e0ac4196b6da446c7cf36972e.jpg', 1, ''),
('0', '', 44, 3, 'SLNT3209251', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221216', '20211216', '16-12-2021', '03:36:18 AM', '', '', '', 0, 'Kundan Kumar Jha', 'S8386043Z', '', 'Singapore', '16 Simei Street 1', '11-16', '', '91110677', 'kundan_nits@yahoo.com', 'Married', '+65', 'Mr', 16, 10, 1983, '', '529942', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 45, 3, 'SLNT3791252', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221216', '20211216', '16-12-2021', '05:02:31 AM', '', '', '', 0, 'Suchitra', 'S8664316B', '', 'Singapore', '#12-17, Block 10 E, Braddell Hill Condo', '17', '', '84375442', 'ssingh409@gmail.com', 'Married', '+65', 'Miss', 21, 7, 1988, '', '579724', '+65', 'Operational Risk & Compliance Officer', 'UBS AG', '9 Penang Road', '238459', '84375442', 'ssingh409@gmail.com', '', '', 'No', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '8f173a7f57731d5f3a8e622bbf9242a0.jpg', 1, ''),
('0', '', 46, 3, 'SLNT2344253', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221216', '20211216', '16-12-2021', '05:19:59 AM', '', '', '', 0, 'Nesha Srivastva', 'S7077978A', '', 'Singapore', '224 Westwood Avenue', '#06-14', '67619405', '93841084', 'n.srivastva@silesia.com', 'Divorced', '+65', 'Madam', 12, 8, 1970, '', '648356', '+65', 'Head of Finance Admin & Controlling', 'Nesha Srivastva', '7 CHIN BEE DRIVE', '619857', '67619400', 'n.srivastva@silesia.com', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 0, ''),
('0', '', 47, 3, 'SLNT1689218', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221216', '20211216', '16-12-2021', '07:59:46 AM', '', '', '', 0, 'Ajai Agarwal', 'S7166486D', '', 'Singapore', '22 Bukit Batok Street 52', '18-06', '66672425', '97542241', 'ajaiagarwal2012@gmail.com', 'Married', '+65', 'Mr', 9, 1, 1971, '', '659245', '+65', 'Busienss', 'Irtish Consulting Pte Ltd', '25 IBP 04-103i German Centre', '609916', '69099290', 'ajaiagarwal2012@gmail.com', '', '', 'Yes', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 48, 3, 'SLNT1481256', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221216', '20211216', '16-12-2021', '15:26:52 PM', '', '', '', 0, 'Karan narula', '7869439', '', 'Singapore', '1 peirce hill ', '1', '', '97957799', 'karann@mercantilepacific.com', 'Married', '+65', 'Mr', 21, 2, 1978, '', '248558', '+65', 'Director ', 'Mercantile ', 'Level 2 11 Jalan mesin ', '368813', '97957799', 'Karann@mercantilepacific.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, 'f184cda7578ef6492a226c571dca2d69.jpeg', 1, ''),
('0', '', 49, 2, 'SLNT3688262', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221217', '20211217', '17-12-2021', '14:20:22 PM', '', '', '', 0, 'Mohit Agarwal', 'G1614287K', '', 'Other', 'Blk 112B Depot Road', '05-129', '', '82664632', 'iitk.mohit@gmail.com', 'Married', '+65', 'Mr', 6, 2, 1988, 'Indian', '102112', '+65', 'Planner', 'Apple Inc', 'Innovis One North', '138634', '82664632', 'Agarwal_mohit@apple.com', 'IIT Alumni Association Singapore', 'Alumni Member', 'Yes', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('1', 'HQ00068', 50, 3, 'SLNT9349193', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221218', '20211218', '18-12-2021', '05:17:33 AM', '', '', '', 0, 'Gaurav Sharma', 'Z5559014', '', 'Other', '32 Canberra Drive, 01-27 Yishun Emerald, Singapore 768431', '01-27', '90394134', '90583686', 'reenabio@hotmail.com', 'Married', '+65', 'Mr', 14, 3, 1978, 'india', '768431', '+65', 'Operation and Technology ', 'Barry Callebaut', '32 Canberra Drive, 01-27 Yishun Emerald, Singapore 768431', '768431', '90583686', 'reenabio@hotmail.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('1', '1616', 51, 3, 'SLNT3764263', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221218', '20211218', '18-12-2021', '05:22:03 AM', '', '', '', 0, 'Manisha Sharma', 'S7562686Z', '', 'Singaporean', '60 Tanah Merah Kechil Avenue - Casa Merah - 10 -18', '10-18', '62453531', '81189612', 'manishas21@hotmail.com', 'Married', '+65', 'Madam', 1, 1, 1975, '', '465529', '+65', 'Bank', 'Standardcharetred', '22', '465529', '81189612', 'manishas21@hotmail.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 52, 2, 'SLNT5839264', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221218', '20211218', '18-12-2021', '09:45:37 AM', '', '', '', 0, 'Jyoti Bhat', 'G6351166N', '', 'Other', '276 Ocean Drive', '01-34', '', '84556491', 'jyotibhat@yahoo.com', 'Married', '+65', 'Madam', 27, 2, 1976, 'Indian', '098449', '+65', 'House Wife', 'N.A', '276 Ocean Drive, The Coast at Sentosa Cove, 01-34, ', '098449', '84556491', 'jyotibhat@yahoo.com', '', '', 'Yes', 'Other', ' Distributing Prasad etc', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 53, 2, 'SLNT553267', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221219', '20211219', '19-12-2021', '01:05:17 AM', '', '', '', 0, 'Abhishek Ranjan', 'G5343834U', '', 'Other', '113 Tampines Street 86', '14-41', '', '86717715', 'er.abhishekranjan@gmail.com', 'Married', '+65', 'Mr', 16, 7, 1985, 'Long Term Pass Holder', '528536', '+65', 'Service', 'Cognizant Technology Solutions ', 'Changi business park, plaza 8 07-00', '486025', '68124051', 'er.abhishekranjan@gmail.com', '', '', 'Yes', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '29aab4c30d65f5e1638a7c22c31d7871.jpeg', 1, ''),
('0', '', 54, 3, 'SLNT3147276', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '02:17:21 AM', '', '', '', 0, 'Nitu Mohanty', 'S8364968B', '', 'Singaporean', '115 Shrewsbury Road, 05-01', 'Treasure Loft', '', '96583397', 'nitumohanty@gmail.com', 'Married', '+65', 'Madam', 1, 11, 1983, '', '307856', '+65', 'Professional', 'BOA', '115 Shrewsbury Road, 05-01, Treasure Loft', '307856', '96583397', 'nitumohanty@gmail.com', '', '', 'No', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 55, 3, 'SLNT8229278', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '02:42:05 AM', '', '', '', 0, 'Kohli Suketu Satish', 'S7269875D', '', 'Singapore', '125 Meyer Road', '10-05', '90615480', '98341105', 'rinakohli1@gmail.com', 'Married', '+65', 'Mr', 3, 7, 1972, '', '437936', '+65', 'Sales University leader', 'AWS', '125 Meyer Road, 10-05 The Makena', '437936', '98341105', 'rinakohli1@gmail.com', '', '', 'Yes', 'Other', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 56, 2, 'SLNT3758283', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '04:33:06 AM', '', '', '', 0, 'Pramiya Kumar Mishra', 'G5317557R', '', 'Other', '44 Mount Vernon Road', '07-38', '', '83326059', 'pramiya@gmail.com', 'Married', '+65', 'Mr', 15, 7, 1980, 'Indian', '368062', '+65', 'Service', 'DBS', 'Changi', '368062', '83326059', 'pramiya@gmail.com', '', '', 'Yes', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('1', 'ME002291', 57, 3, 'SLNT1585285', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '07:12:47 AM', '', '', '', 0, 'Sinha Shilpa', 'S7580486E', '', 'Singaporean', '614, Choa Chu Kang, Street 62', '03-237', '', '98503731', 'shilpainha75@gmail.com', 'Married', '+65', 'Miss', 11, 12, 1975, '', '680614', '+65', 'teacher', 'Crest Secondary School', '561 Jurong East St 24, Singapore ', '609561', '98503731', 'shilpasinha75@gmail.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 58, 0, 'SLNT37565', '', '', '', 'Male', 0.00, '', 0, '19700101', '20211220', '20-12-2021', '07:45:37 AM', '', '', '', 0, 'Sumit Rastogi', 'S7964675Z', '', 'Singapore', '70 Bayshore Road', '20-07', '62031335', '93381430', 'sumit2803@gmail.com', 'Married', '+65', 'Mr', 28, 3, 1979, '', '469987', '+65', 'Project Manager', 'Standard Chartered Bank', '7 Changi Business Park Crescent', '486028', '65963401', 'sumit2803@gmail.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', '', 0, '2ed895930e5cde901f644f7f26a3e13b.jpg', 1, ''),
('0', '', 59, 2, 'SLNT5107287', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '08:58:07 AM', '', '', '', 0, 'Tarun Kabra', 'G5252424K', '', 'Other', '201 Tg Rhu Road', 'Unit 07-04', '98501185', '84841150', 'atkabra@gmail.com', 'Married', '+65', 'Mr', 1, 7, 1972, 'Indian', '436917', '+65', 'Service', 'Microsoft', '182, Cecil Street, #13-02', '069547', '68887391', 'atkabra@gmail.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 60, 3, 'SLNT4468272', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221220', '20211220', '20-12-2021', '13:34:23 PM', '', '', '', 0, 'DEEKSHA SINHA', 'S7564892H', '', 'Singapore', '329 RIVER VALLEY ROAD YONG AN PARK', '10-03', '', '97565679', 'deeksha75@gmail.com', 'Married', '+65', 'Miss', 23, 10, 1975, '', '238361', '+65', 'EC coordinator', 'Livspace', '120 Robinson Road, #16-00', '068913', '97565679', 'deeksha.sinha@livspace.com', '', '', '', '', '', '', '', '', 0, '1dae6fa29a5547490303f7a4e00c7724.jpg', 0, ''),
('0', '', 61, 3, 'SLNT8513292', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221221', '20211221', '21-12-2021', '02:50:23 AM', '', '', '', 0, 'Mihir Gandhi', 'S8269469B', '', 'Singapore', 'Block 323, Jurong East Street 31', '08-218', '', '81136306', 'mihirgandhi2002@yahoo.co.uk', 'Married', '+65', 'A/Prof', 14, 1, 1982, '', '600323', '+65', 'Scientist', 'SCRI', '08-218, Block 323, Jurong East Street 31', '600323', '81136306', 'mihirgandhi2002@yahoo.co.uk', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 62, 3, 'SLNT4493291', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221221', '20211221', '21-12-2021', '03:02:55 AM', '', '', '', 0, 'Lovekesh Duggal', 'S8679776C', '', 'Singaporean', 'Bukit batok', '15-546', '', '80163107', 'johnn12johnn@gmail.com', 'Married', '+65', 'Mr', 14, 2, 1986, '', '654293', '+65', 'Sales & Marketing exe', 'NA', '293D bukit batok st 21', '654293', '80163107', 'johnn12johnn@gmail.com', 'NA', '', 'Yes', 'Other', ' ', 'NA', 'NA', 'Terms & Conditions 1', 0, 'bff89e09ebaf395864575bcefca60338.jpg', 1, ''),
('0', '', 63, 3, 'SLNT7343277', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221221', '20211221', '21-12-2021', '05:30:04 AM', '', '', '', 0, 'Akanksha ', 'S7061192I', '', 'Singaporean', '80 Jellicoe road', '#38-03', '', '96975694', 'akanksha_s_agrawal@yahoo.com.sg', 'Married', '+65', 'Madam', 10, 8, 1970, '', '208766', '+65', 'Home maker', 'None', '80 jellicoe road #38-03 ', '208766', '96975694', 'akanksha_s_agrawal@yahoo.com.sg', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('1', 'SPSLNT0001', 64, 6, 'SLNT542411', '', '365', 'Corporate Membership', 'Male', 60.00, '<p>For Corporate&nbsp;Sectors<br />\r\nValidity: 1 Year</p><br /><br />', 0, '20221221', '20211221', '21-12-2021', '08:14:15 AM', '', '', '', 0, 'Sanyam Rastogi', 'IND457821495RT', '', 'Singaporean', 'Mayur Vihar', '67', '', '70556260', 'developer.gyanudaytechnologies@gmail.com', 'Single', '+65', 'Mr', 26, 3, 1995, '', '250004', '+65', 'IT', 'Gyan Uday Technologies', 'Mayur Vihar', '250004', '70556260', 'developer.gyanudaytechnologies@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 65, 3, 'SLNT979307', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221223', '20211223', '23-12-2021', '04:44:38 AM', '', '', '', 0, 'Venkateswarulu Kappala', 'S7267755B', '', 'Singapore', 'Block 312,05-486', 'Sembawang Drive', '97283352', '96531110', 'venk111@yahoo.com', 'Married', '+65', 'Mr', 14, 6, 1972, '', '750312', '+65', 'Manager', 'Broadcom', '1 Yishun Ave 7', '768923', '11111111', 'venk111@yahoo.com', '', '', 'Yes', 'Other', ' Far away from our place .. Will take sometime and comeback', 'Rakhi', 'Venkatesh', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 66, 3, 'SLNT4641311', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221224', '20211224', '24-12-2021', '05:53:56 AM', '', '', '', 0, 'Kartik Kaushik Raval', 'S7267682C', '', 'Singaporean', '20 Pinewood Grove', 'Singapore', '', '98905511', 'kartik_raval@rediffmail.com', 'Married', '+65', 'Mr', 29, 9, 1972, '', '738325', '+65', 'Presales Director', 'Broadridge (Singapore) Pte. Ltd.', '61 Robinson Road, #10-01', '068893', '98905511', 'kartik_raval@rediffmail.com', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, 'b3d1550f366875156db53fa40904f17a.jpg', 1, ''),
('0', '', 67, 2, 'SLNT6572318', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221224', '20211224', '24-12-2021', '11:12:34 AM', '', '', '', 0, 'LAHIRI AREENDRAJEET ', 'G3858171L', '', 'Other', '7 Jurong Lake link', '05-26', '', '93572542', 'casadebub@gmail.com', 'Married', '+65', 'Mr', 9, 11, 1983, 'Employment Pass', '648163', '+65', 'Cybersecurity ', 'Palo Alto Networks', '1 walking street', '078881', '96141876', 'Casadebub@gmail.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 68, 2, 'SLNT1566328', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221226', '20211226', '26-12-2021', '01:48:41 AM', '', '', '', 0, 'Neha Prasad', 'G5413209W', '', 'Other', 'Punggol', '#06-302, 118 Edgefield Plains', '65287100', '98008675', 'neha.prasad1008@gmail.com', 'Married', '+65', 'Madam', 10, 8, 1985, 'Indian', '820118', '+65', 'Service ', 'Teamspirit Singapore ', 'Punggol, #06-302, 118 Edgefield Plains', '820118', '98008675', 'neha.prasad1008@gmail.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 69, 3, 'SLNT9749336', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221226', '20211226', '26-12-2021', '07:48:49 AM', '', '', '', 0, 'Sanjeev Verma', 'S6968568D', '', 'Singapore', '7 Simei st 4, ', '09-08', '91819625', '91692895', 'sanjeev_verma@jabil.com', 'Married', '+65', 'Mr', 16, 2, 1969, '', '529864', '+65', 'manager', 'Jabil ', '16 Tampines Industrial Crescent', '528604', '91692895', 'sanjeev_verma@jabil.com', 'na', 'na', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 70, 2, 'SLNT6416139', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221226', '20211226', '26-12-2021', '10:08:43 AM', '', '', '', 0, 'Manish Sharma', 'Z3294881', '', 'Other', '56 Punggol Walk', '07-14', '', '90609085', 'manish.channa@gmail.com', 'Married', '+65', 'Mr', 25, 5, 1983, 'Indian', '828833', '+65', 'Healthcare IT', 'IHiS', '6 Serangoon North Ave 5', '554910', '65941800', 'manish.channa@gmail.com', '', '', 'No', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 71, 3, 'SLNT1056255', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221226', '20211226', '26-12-2021', '17:56:14 PM', '', '', '', 0, 'Ganesh Rajput ', 'S8310784G', '', 'Singaporean', 'Ho ching road', '07-117', '88919784', '88157008', 'nesrita95@gmail.com', 'Married', '+65', 'Mr', 9, 4, 1983, '', '610119', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 72, 3, 'SLNT542411', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221227', '20211227', '27-12-2021', '05:40:52 AM', '', '', '', 0, 'shubham', 'IND457821495RT', '', 'Other', 'tp nagar meerut', 'up15', '99887744', '99887744', 'shumrt.kumar@gmail.com', 'Single', '+65', 'Mr', 14, 11, 1997, 'me', '332001', '+65', 'IT', 'Gyan Uday Technologies', 'tp nagar meerut', '332001', '99887744', 'info@gyanudaytechnologies.com', 'gyan uday ', '', '', '', ' ', '', '', '', 0, '', 1, ''),
('0', '', 73, 3, 'SLNT542411', '', '365', 'Ordinary Membership', 'Male', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221227', '20211227', '27-12-2021', '06:58:00 AM', '', '', '', 0, 'shubham', 'IND457821495RT', '', 'Other', 'tp nagar meerut', 'aa', '99887744', '99887744', 'shumrt.kumar@gmail.com', 'Single', '+65', 'Mr', 14, 11, 1997, 'me', '332001', '+65', 'IT', 'Gyan Uday Technologies', '67, Phase-2, Mayur Vihar', '250004', '70556260', 'info@gyanudaytechnologies.com', '', '', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 74, 0, 'SLNT291345', '', '', '', 'Male', 0.00, '', 0, '19700101', '20211227', '27-12-2021', '10:18:10 AM', '', '', '', 0, 'Rajnish Kumar', 'S8789967E', '', 'Singapore', '9 Leedon Heights', '09-25', '', '98065930', 'rajnish.sst1@gmail.com', 'Married', '+65', 'Mr', 30, 9, 1987, '', '267954', '+65', 'Quant Portfolio Manager', 'Eastspring Investments', '10 Marina Blvd', '018983', '6349910', 'rajnish.sst1@gmail.com', '', '', 'No', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, 'f9698d786e4e08693770672bc41aa313.jpg', 1, ''),
('0', '', 75, 2, 'SLNT7468353', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221228', '20211228', '28-12-2021', '11:22:54 AM', '', '', '', 0, 'Someshwar Singh', 'G3050570R', '', 'Other', 'Tampines street 22 block 281', '04/276', '', '98508153', 'singh.someshwar@gmail.com', 'Married', '+65', 'Mr', 22, 11, 1989, 'EP', '520281', '+65', 'Service', 'Infosys limited', 'Suntec tower 2 ', '520281', '98514202', 'Someshwar_singh@infosys.com', '', '', '', '', '', '', '', '', 0, '', 0, ''),
('0', '', 76, 2, 'SLNT5207361', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221229', '20211229', '29-12-2021', '03:09:24 AM', '', '', '', 0, 'Sumeet Sawhney', 'Z4229871', '', 'Other', '26 Jalan Lempeng ', '5-12 Regent Park', '93272701', '97359255', 's.sawhney@sap.com', 'Married', '+65', 'Mr', 7, 8, 1976, 'EP', '128805', '+65', 'Consulting', 'SAP Asia Pte Ltd', '30pasir Oanjang', '117704', '97359255', 'S.sawhney@sap.com', '', '', 'Yes', 'Other', ' Seva', 'Not available ', '', 'Terms & Conditions 1', 0, '8b13146df2efdf418fd300015216a1c4.jpeg', 1, ''),
('0', '', 77, 2, 'SLNT7646364', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221229', '20211229', '29-12-2021', '08:04:49 AM', '', '', '', 0, 'Aditya Sharma', 'G3451373U', '', 'Other', '22 Simei Street 1', '02-07', '', '96471091', 'aditya.jan19@gmail.com', 'Married', '+65', 'Mr', 19, 1, 1988, 'Indian', '529945', '+65', 'Software Engineer', 'MLP', 'UOB Plaza 2', '048624', '65055000', 'aditya.jan19@gmail.com', '', '', 'No', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, ''),
('0', '', 78, 2, 'SLNT9422368', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20221230', '20211230', '30-12-2021', '03:02:48 AM', '', '', '', 0, 'DUGAR MANOJ KUMAR', 'G3012391W', '', 'Other', '333 River Valley Road', '05-04', '66006452', '96798700', 'manoj.dugar1421@gmail.com', 'Married', '+65', 'Mr', 14, 7, 1973, 'Indian', '238365', '+65', 'Service', 'J P Morgan', 'Level 27 CapitaSpring', '048948', '68828543', 'manoj.dugar@jpmorgan.com', '', '', 'Yes', 'Helping for cooking prasadam', ' ', '', '', 'Terms & Conditions 1', 0, '909c8ce66dc2a58722139908b124ddb8.jpeg', 1, ''),
('0', '', 79, 3, 'SLNT6157371', '', '365', 'Ordinary Membership', 'Female', 24.00, '<p>For Singaporeans and PRs<br />\r\nValidity: 1 Year</p><br />', 0, '20221230', '20211230', '30-12-2021', '05:01:56 AM', '', '', '', 0, 'Rai Vinita', 'S7763275A', '', 'Singapore', '1D', '28-41', '', '97103724', 'vinita776@gmail.com', 'Married', '+65', 'Madam', 14, 1, 1977, '', '085401', '+65', 'Manager', 'standard chartered bank', '9 Changi Business park cres,', '486005', '69811564', 'rai.vinita@sc.com', '', '', 'Yes', 'Test service 1', ' ', '', '', 'Terms & Conditions 1', 0, '', 0, ''),
('1', 'A3080', 80, 2, 'SLNT5550384', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20230101', '20220101', '01-01-2022', '01:19:56 AM', '', '', '', 0, 'Neeraj Bindal', 'G3030233N', '', 'Other', 'Blk 24', '04-04, Melville Park', '', '90663899', 'neeraj.bindal@gmail.com', 'Married', '+65', 'Mr', 22, 6, 1977, 'EP', '529946', '+65', 'Service', 'SCB', 'CBP1', '201010', '90663899', 'neeraj.bindal@gmail.com', '', '', '', '', ' ', '', '', '', 0, '', 1, ''),
('0', '', 81, 2, 'SLNT7570389', '', '365', 'Associate Membership', 'Female', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20230102', '20220102', '02-01-2022', '05:11:51 AM', '', '', '', 0, 'Falguni Natali', 'LK669724', '', 'Other', '61 Meyer Road, The Atria', '1204', '', '92303506', 'falguni.natali@gamil.com', 'Married', '+65', 'Miss', 6, 2, 1975, 'New Zealander ', '437885', '+65', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '');
INSERT INTO `slnt_user_membership` (`member_profile_status`, `member_id_old`, `id`, `sel_member_id`, `user_id`, `membership_id`, `membership_days`, `membership_title`, `gende`, `membership_amount`, `membership_description`, `expr_status`, `membership_expire`, `membership_buy`, `membership_create_date`, `membership_create_time`, `transection_id`, `pay_with`, `membership_buy_id`, `pay_status`, `name_as_nric`, `nric_passport`, `date_of_birth`, `nationality`, `address_1`, `address_2`, `home_tel`, `mobile`, `email`, `marital_status`, `mobile_code`, `name_title`, `days`, `month`, `year`, `nationality_other`, `postal_code`, `home_tel_code`, `occupation`, `name_of_firm`, `emp_address_1`, `emp_postalcode`, `emp_tel`, `emp_email`, `organization_name`, `membership_position`, `serves_as_volunterrs`, `interest`, `interest_other`, `porposer_name`, `secondery_name`, `terms_1`, `status`, `userfile`, `final_submit_status`, `transection_slip`) VALUES
(NULL, NULL, 82, 2, 'SLNT5550384', '', '365', 'Associate Membership', 'Male', 24.00, '<p>For Non-Singaporeans and Non-North Indian&nbsp;Hindus<br />\r\nValidity: 1 Year</p><br />', 0, '20230102', '20220102', '02-01-2022', '08:39:42 AM', '', '', '', 0, 'Neeraj Bindal', 'G3030233N', '', 'Other', 'Blk 24', '04-04, Melville Park', '', '90663899', 'neeraj.bindal@gmail.com', 'Married', '+65', 'Mr', 22, 6, 1977, 'EP', '529946', '+65', 'Service', 'SCB', 'Blk 24, 04-04, Melville Park', '529946', '90663899', 'neeraj.bindal@gmail.com', 'NA', 'NA', '', '', ' ', '', '', 'Terms & Conditions 1', 0, '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_settings`
--

CREATE TABLE `tbl_admin_settings` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_settings`
--

INSERT INTO `tbl_admin_settings` (`id`, `level`, `sitename`, `create_date`) VALUES
(1, 5, '', '2019-02-26 08:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `cat_it` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(19, 'Tulsi Vivah', '1', 0, 0),
(20, 'Bhagwan Bhog Donation', '1', 0, 0),
(21, 'Maa Jawala Ji Anniversary Donation', '1', 0, 0),
(22, 'Shravan Maas Donation', '1', 0, 0),
(23, 'Krishna Janamashtami Donation', '1', 0, 0),
(24, 'Makar Sankranti Donation', '1', 0, 0),
(25, 'Hanuman Jayanti Donation', '1', 0, 0),
(26, 'New Year Prashad Donation', '1', 0, 0),
(27, 'Diwali Donation', '1', 0, 0),
(28, 'Holika Dahan Donation', '1', 0, 0),
(29, 'Karwachauth Donation', '1', 0, 0),
(30, 'Ganesh Chaturthi Donation', '1', 0, 0),
(31, 'Navratri Donation', '1', 0, 0),
(32, 'Fruit Donation', '1', 0, 0),
(33, 'Flower Donation', '1', 0, 0),
(34, 'General Donation', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_more_images`
--

CREATE TABLE `tbl_more_images` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_more_images`
--

INSERT INTO `tbl_more_images` (`id`, `type`, `image`, `title`) VALUES
(7, 115, 'a4c0a1c55232e75d86f602e860dc5286.png', 'New Events 2020, Dec'),
(8, 115, '4f3293a489d93bc740c3b4bf0a1c9dc6.png', 'New Events 2020, Dec'),
(9, 115, '3037c6a3996bd885d41753044aa6da55.png', 'New Events 2020, Dec'),
(10, 115, '8faf86de2239937d1027b03f9e64e4c4.png', 'New Events 2020, Dec'),
(11, 115, '23a400e507ca72c3e98ffaf84e56bbc0.png', 'New Events 2020, Dec'),
(12, 115, '26d54f3ee5c5fc40a1ac74fdfa4425bd.png', 'New Events 2020, Dec'),
(13, 115, '65a3f7710d169e0275b9f7d075b0d9f9.png', 'New Events 2020, Dec');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `pagid` int(11) NOT NULL,
  `pagecontent` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `pagid`, `pagecontent`) VALUES
(1, 1, '<p>Siddh Peeth Shree Lakshminaryan Temple is Singapore&rsquo;s first dedicated place of worship for North Indian Hindus. Its name derives from a combination of the names of its main deities: &ldquo;Lakshmi&rdquo; and &ldquo;Narayan&rdquo; (Vishnu). Lakshmi is the goddess of wealth and the consort of Vishnu, while the latter is the deity responsible for the preservation and protection of the universe.</p>\r\n\r\n<p>The foundation stone for Siddh Peeth Shree Lakshminaryan Temple was laid in 1960. It was not without great difficulties that the temple was completed around the mid-1960s with the support of and donation from almost 10,000 North Indian Hindus from all classes. Prior to this, all festivals celebrated by the aforementioned community were organised by the Singapore North Indian Hindu Association and held at different venues.</p>\r\n\r\n<p>The history of this community goes back to the time when Indian herdsmen from the northern and north-eastern states of Uttar Pradesh and Bihar arrived and settled along the Rochor River at the beginning of the 20th century due to the extensive cattle trade in the area. The herdsmen worshipped Krishna, an incarnation of Vishnu, who was a cowherd. The women of these communities visited the temple every Tuesday afternoon to perform pooja (worship) and offer fruits and flowers to the deities.</p>\r\n\r\n<p>The bright yellow dome atop the building is symbolic of the Hindu Sanatan Dharma. The domes are situated directly above the deities in the prayer hall on the ground floor. It is a conserved building with distinctive red and white patterning on its fa&ccedil;ade.</p>\r\n\r\n<p>This temple was inaugurated as Siddh Peeth Shree Lakshminaryan Temple on 25th October 2020</p>\r\n'),
(3, 4, '<p dir=\"ltr\" style=\"text-align:justify\">Welcome to www.mgimeerut.com. www.mgimeerut.com offers its types of assistance to its clients on the grounds of specific guidelines and conditions as determined underneath. Visiting www.mgimeerut.com site and benefiting administrations of www.mgimeerut.com would consider that you acknowledge these terms and conditions. If it&#39;s not too much trouble peruse and get them. You are limited by these terms and conditions for the administrations that www.mgimeerut.com gives you. Every one of these terms and condition are relevant to all the individuals of the present, past, and future. Regardless of whether you have utilized this site now and then back, still you are limited by these principles.</p>\r\n\r\n<h3 style=\"color:rgb(182, 182, 182); font-style:normal; text-align:left\"><span style=\"color:rgb(0, 0, 0)\">Definitions</span></h3>\r\n\r\n<p style=\"text-align:justify\">&quot;Agreement&quot; means the terms and conditions as mentioned here including all schedules, appendices, annexure, privacy policy, and will include the references to this Agreement as amended, cancelled, supplemented, varied or replaced from time to time.</p>\r\n\r\n<p style=\"text-align:justify\">The logo/picture of www.mgimeerut.com on the landing page of the site and different pages is enrolled by www.mgimeerut.com and can&#39;t be utilized or conveyed or circulated without the particular and composed consent of www.mgimeerut.com.</p>\r\n\r\n<p style=\"text-align:justify\">The data that has been put on the site www.mgimeerut.com is just implied for the clients to know our highlights and for our business that benefits our customers. You are approved distinctly to utilize the site for your own and have a restricted permit to get to. The business utilization of this site, utilization of any item posting, portrayal, any replicating, copying and selling any subordinate of the site is carefully illegal. The utilization of surrounding procedures to encase any logo or trademark including pictures, content, and format of www.mgimeerut.com isn&#39;t permitted without the assent of us.</p>\r\n\r\n<h3 style=\"color:rgb(182, 182, 182); font-style:normal; text-align:left\"><span style=\"color:rgb(0, 0, 0)\">Disclaimer</span></h3>\r\n\r\n<p style=\"text-align:justify\">www.mgimeerut.com, its representatives, writers and or employees will in no circumstances be liable to any person, institution, groups of people for any direct or indirect loss arising out any delay, incomplete or unacceptable work. www.mgimeerut.com and its employees do not undertake any responsibility for clearing the exams or course work. www.mgimeerut.com is only a research support service wherein research support is provided to persons who are willing to take this service.</p>\r\n'),
(5, 2, '<p style=\"text-align: justify;\">Mahalaxmi Group of Institutions is a college builds on the values of proper knowledge and experienced guidance. With a vision to become India&rsquo;s leading college, we aim to nurture tomorrow&rsquo;s technical leaders, to build prosperous future for those who have vested their trust in us.</p>\r\n'),
(6, 3, '<p>At Mahalaxmi Group of Institutions, we dare our students to dare to dream big dreams, to not set limits on the possibilities. If we are to instill this spirit to our students how can we demand anything less from ourselves? We will provide world-class quality education and take care of building.</p>\r\n'),
(7, 5, '<p style=\"text-align:justify\">&ldquo;I take the pleasure in welcoming you to Mahalaxmi Group of Institution&nbsp;(MGI), an institution dedicated to the proper growth and development of each and every student for a better career prospect.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The institution is all set to bring out the potential within each student and provide proper guidance so that their potentials can be utilized to make them future capable of meeting any challenge that will be faced by them after leaving the college. The college provides full support to improve their communication skills, critical thinking abilities, moral values and sense of responsibility. All efforts are made to improve the creativity and problem solving abilities of the students so that they can contribute their best to the society and the country.</p>\r\n\r\n<p style=\"text-align:justify\">Learning and growth at MGI are not confined to classroom and academic experience. Students participate in rich and varied extracurricular and co- curricular activities too. Our aim is to achieve global reorganization as&nbsp;&nbsp; a leading player in the field of education. Our success in this endeavor has the potential of making our institute one of the most attractive destination in the world of acquiring education.</p>\r\n\r\n<p style=\"text-align:justify\">I wish all the best to all the prospective students.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>DR. MOHIT YADAV</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>DIRECTOR</strong></p>\r\n'),
(8, 6, '<p dir=\"ltr\"><strong><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:arial; font-size:14pt\">Booking Terms and Conditions before proceeding the payment</span></strong></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">1) Devotees are advised to check all provided information before making confirmation</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">2) Any revision to booking must be made atleast 24 hours prior and it is subjected to availability of priest.(maybe 48 hours)</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">3) Any cancellation must be made atleast 3 day prior during non festive periods and 5 days before festive periods.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">4) Cancellation that is made after given durations in point No.3 will be subjected to 50% charge of paid amount. All refund will be in cheque and devotees are to allow up to 2 weeks to process.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">5) For priest request SLNT reserves the right to cancel request. Devotee will be refunded priest request charges.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">6) Any booking that is made for more than 1 day is subjected to block charges which will be advised by SLNT. (Note: Need to inform Mayuresh and booking that is made for two consecutive days system shld not allow-msg shld appear asking them to contact admin)</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">7) Upon booking devotees agree to take responsibility of priest travel to and fro from temple to devotee&#39;s residence.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">8) For bookings without prayers items devotees are responsible to ensure all items are provided before the prayers are conducted at their residences.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">9) All bookings are to made only online. No bookings will be accepted over the phone with admin staff or temple priest.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">10) Devotees are to ensure all temple&#39;s rules and regulation are adhered to during any temple bookings</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"background-color:transparent; color:rgb(0, 0, 0); font-family:calibri,sans-serif; font-size:11pt\">11)To comply with changes in legislation or in the interest of good temple management,SLNT reserves the right to add to, amend or otherwise alter these Terms &amp; Conditions at any time and without prior warning or consultation</span>.</p>\r\n'),
(9, 7, '<h2><u><strong>For Career Option</strong></u></h2>\r\n\r\n<p><strong>Email Us:- hrmgi.meerut@gmail.com</strong></p>\r\n\r\n<p><strong>Call Us;- 7060017403</strong></p>\r\n'),
(10, 8, '<p>Siddh Peeth Shree Lakshminaryan Temple is Singapore&rsquo;s first dedicated place of worship for North Indian Hindus. Its name derives from a combination of the names of its main deities: &ldquo;Lakshmi&rdquo; and &ldquo;Narayan&rdquo; (Vishnu). Lakshmi is the goddess of wealth and the consort of Vishnu, while the latter is the deity responsible for the preservation and protection of the universe.</p>\r\n\r\n<p>The foundation stone for Siddh Peeth Shree Lakshminaryan Temple was laid in 1960. It was not without great difficulties that the temple was completed around the mid-1960s with the support of and donation from almost 10,000 North Indian Hindus from all classes. Prior to this, all festivals celebrated by the aforementioned community were organised by the Singapore North Indian Hindu Association and held at different venues.</p>\r\n\r\n<p>The history of this community goes back to the time when Indian herdsmen from the northern and north-eastern states of Uttar Pradesh and Bihar arrived and settled along the Rochor River at the beginning of the 20th century due to the extensive cattle trade in the area. The herdsmen worshipped Krishna, an incarnation of Vishnu, who was a cowherd. The women of these communities visited the temple every Tuesday afternoon to perform pooja (worship) and offer fruits and flowers to the deities.</p>\r\n\r\n<p>The bright yellow dome atop the building is symbolic of the Hindu Sanatan Dharma. The domes are situated directly above the deities in the prayer hall on the ground floor. It is a conserved building with distinctive red and white patterning on its fa&ccedil;ade.</p>\r\n\r\n<p>This temple was inaugurated as Siddh Peeth Shree Lakshminaryan Temple on 25th October 2020</p>\r\n'),
(11, 9, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">Whenever it becomes tough to manage the assignments in college, availing assignment help is a wise choice. Students often miss assignment submission deadlines and score low grades. That&#39;s exactly where assignment help online is useful. Allassignmenthelp.com has best assignment experts, who are capable of providing quality assignment help and writing services at low prices. First, you have to understand what is assignment help online assistance? Is it equivalent to assignment writing for you? Here is the answer. We do not write an assignment for you. You avail assistance from the chosen assignment experts to hone your research skills. You can use the custom written assignment solution as a reference material for your final writing. Moreover, you can also buy previously solved assignment solutions for your reference. We make an individual realize one&#39;s potential by mentoring and guiding through the process of online assignment help.</span></p>\r\n'),
(12, 10, '<p style=\"text-align: center;\"><span style=\"color:#FFFFFF\">Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.</span></p>\r\n'),
(13, 11, '<div class=\"row\">\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>Online Assignment Help:</h4>\r\nAllassignmenthelp.com helps you to stay at the top of the class with online assignment help. The reason we have been the go to place for urgent assignment help is our pool of finest assignment writing experts from Australia for all academic assignments. Our assignment helpers have great writing skills and run a comprehensive assignment check to provide you with a custom online assignment help. Our assignment writers are best academic experts.</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Custom Essay Writing Help :</h4>\r\nWriting an essay in college is more like a daily job. Allassignmenthelp.com not only help you achieve a desired grade on an essay, but also help you understand how to write a custom essay. You acquire the right knowledge and skill to keep producing great essays during your college stay. Our assignment helpers ensures that your essay is free from plagiarism meeting the university top grade criteria. We never miss the deadlines making us fast essay writing service provider.</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Programming Assignment Help:</h4>\r\nProgramming assignments can be a nightmare due to the complexity, algorithms and lack of hands on experience. Our programming experts provide a detailed working programming assignment help. You get the working snapshots of the code, code comments and much to understand how to write a program and achieving the programming knowledge. Programming help from allassignmenthelp.com is most sought out service in the US and Australia.</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Dissertation and Thesis Writing Help:</h4>\r\nDissertation and thesis decides on your degree grade and a lot more about your professional life. Hence, keeping the importance in mind, allassignmenthelp.com provides you with the best dissertation writing service. We incorporate both primary and secondary data required to produce a first class dissertation. Our dissertation writing expert utilized the right quantitative analysis tool to analyse the dissertation methodology and important sections.</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Other Online Writing Services:</h4>\r\nApart from being the best online assignment help and essay writing website, allassignmenthelp.com can help you with a myriad of assignments from various disciplines. If you have an online exam due, allassignmenthelp.com can help. You can ask us to assist you with homework, coursework, case studies, research paper writing , proofreading and editing services. Your assignment and our expertise can help you go a long way in your academics.</div>\r\n\r\n<div class=\"col-sm-6 col-xs-12\">\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Accounting and Finance Homework Help:</h4>\r\nYou can ask us to do your accounting and finance homework. Our accounting assignment help covers all niche topics related to accounting, advanced accounting and much more. If you are bothered about your understanding towards number crunching to do a finance assignment, you just say &quot;do my accounting homework&quot; and we are online to help you.</div>\r\n</div>\r\n'),
(14, 12, '<div class=\"col-12 col-lg-12 col-md-12\" style=\"box-sizing: border-box; position: relative; width: 1200px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: rgb(55, 55, 55); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n<h2>&nbsp;</h2>\r\n</div>\r\n'),
(15, 13, '<div class=\"col-12 col-lg-12 col-md-12\" style=\"box-sizing: border-box; position: relative; width: 1200px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: rgb(55, 55, 55); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n<h2>MyassignmentHelp Review - 98% Students Are Happy With Our Service. Here Is The Reason!</h2>\r\n\r\n<p style=\"text-align:justify\">We, at MyAssignmenthelp.com, take pride in boasting the fact that we have been able to satisfy 98 percent of our clients with our services. In fact, you can see for yourself how happy each of those customers when you browse through the MyAssignmenthelp reviews section. Undoubtedly, the credit goes to our qualified writers who deliver unmatched customer-satisfying services along with some exciting features:</p>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>On-time delivery:&nbsp;Our experts have always kept their promise of on-time delivery of assignment help. In fact, a majority of the MyAssignment Help reviews appreciate our services as we have saved numerous clients from missing their deadlines.</li>\r\n	<li>Most affordable services:&nbsp;Another feature of MyAssignmenthelp.com that is loved by all our customers is the pricing of our services. In fact, most users, who have availed our services, mention it in their MyAssignmenthelp reviews.</li>\r\n	<li>Plagiarism-free support:&nbsp;Since the inception of this company, our experts have provided students with plagiarism-free content. A lot of students have received better grades and appreciation from the professors due to our 100% original content.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Besides, the promise of 100% confidentiality, supervision of 5000+ PhD experts, and rework guarantee have taken our services to the next level. The MyAssignmenthelp reviews are just admiration of those unparalleled services.</p>\r\n\r\n<h2>MyAssignmenthelp.Com Shares Only Genuine Reviews In Front Of You.</h2>\r\n\r\n<p style=\"text-align:justify\">MyAssignmenthelp is one of the oldest assignment writing companies that are still in service. If we couldn&#39;t deliver quality support, and just lied about being a genuine company, we wouldn&#39;t have survived in the industry for this long. Unlike some of the websites in the industry, MyAssignmenthelp.com always shares genuine reviews with you. All the 14000+ Australian assignment help reviews you see on our website, are written by genuine users like you.</p>\r\n\r\n<p style=\"text-align:justify\">We know that it is hard for you to trust an online service provider, especially when the incidents of online frauds are coming in the news so often. Well, MyAssignmenthelp.com assures you that the services available on our website are absolutely genuine. You can check our services yourself if you aren&#39;t convinced by such a huge collection of MyAssignmenthelp reviews.</p>\r\n\r\n<p style=\"text-align:justify\">If you have visited other assignment writing websites before, you may have seen only a handful of assignment help reviews on those websites. You can guess by the numbers that they aren&#39;t publishing all the reviews that students have shared regarding their services. MyAssignmenthelp.com, on the other hand, doesn&#39;t shy away from posting the user reviews even if some of those MyAssignmenthelp reviews have something negative to say about our services.</p>\r\n\r\n<p style=\"text-align:justify\">If you have a query or doubt regarding our highly-rated services, you can get in touch with our customer support team. Since it remains active 24x7, you can reach them at any point of the day.</p>\r\n\r\n<h3>Got A Suggestion? We Would Be Glad To Hear It!</h3>\r\n\r\n<p style=\"text-align:justify\">It is our foremost commitment as an academic writing service provider to take account of your opinions and suggestions. We would love to hear what you have got to say about our services on MyAssignmenthelp.com reviews. Students in a quest of Australian assignment help reviews can readily find them on MyAssignmenthelp.com. It would be pretty hard to deny that we have achieved the highest client satisfaction rate of 98%, all thanks to the MyAssignmenthelp.com reviews that students availing our services submitted.</p>\r\n\r\n<p style=\"text-align:justify\">We would like to hear what you have got to say about our assignment help services through your reviews. That would help us in improving our services to a great extent. We look forward to incorporating your suggestions and insights into our services so we can serve you better. MyAssignmenthelp.com reviews can thus open the doors to even better assignment help services for students from all around the globe.</p>\r\n\r\n<p style=\"text-align:justify\">People looking for Australian assignment help reviews often stumble upon MyAssignmenthelp.com reviews because we have the highest customer satisfaction rating of 4.9 out of 5. That is no mean feat to achieve, and we have you to thank for that. With constant feedback from you, we kept our services dynamic, catering to all your needs and wishes in academics. Your valuable feedback has helped us improve for the better, and we would love to continue on this positive journey with your support.</p>\r\n\r\n<h3>Got A Frequently-Asked Query? Here Are Your Answers!</h3>\r\n\r\n<h4>How Do Your Services Work And What Needs To Be Done To Order An Assignment?</h4>\r\n\r\n<p style=\"text-align:justify\">Getting an assignment done by the experts at MyAssignmenthelp.com is a walk in the park. All you have to do is go by the following steps.</p>\r\n\r\n<ol>\r\n	<li>Fill out the order form carefully with all the details for your assignment and submit it at MyAssignmenthelp.com.</li>\r\n	<li>Proceed to the safe payment gateway to pay for your assignment using credit or debit card, net banking, or your PayPal account.</li>\r\n	<li>Await the arrival of your completed assignment in the MyAssignmenthelp.com student account that you create with us at the time of placing the order.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">With these three simple steps, you can place an order for a flawless assignment at MyAssignmenthelp.com. For further queries and problems, do not hesitate to contact the friendly and helpful customer support executives who are available at the other end of the chat box round-the-clock.</p>\r\n\r\n<h3>Is MyAssignmentHelp.Com Reliable For All Sorts Of Assignment Assistance?</h3>\r\n\r\n<p style=\"text-align:justify\">Yes, we are. Still worried if you can rely on our precise and impeccable services?! Here is your answer: not only do we cater to more than 100 academic modules for all subjects, but we also specialized in providing an all-around solution for all types of assignments as well. Essays, dissertations, case studies, term papers, coursework, thesis, presentations, and homework &ndash; leave it to the MyAssignmenthelp.com experts to complete with &eacute;lan. Myassignmenthelp.com is very reliable for your assignment needs.</p>\r\n\r\n<h3>Have You Got Swift Assignment Services To Deliver My Assignment In Two Hours?</h3>\r\n\r\n<p style=\"text-align:justify\">Yes, we will be able to deliver your assignment in as little as two hours&rsquo; time. Since MyAssignmenthelp.com is a reliable brand, promptest of speed is our steadfast guarantee to you. Super-swift assignment experts and our team of experienced editors and proofreaders will be able to pull it off for you. However, all we request is that you pay the additional urgency or immediacy charge so that their efforts do not go unrecognized.</p>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-12 col-md-12\" style=\"box-sizing: border-box; position: relative; width: 1200px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: rgb(55, 55, 55); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n<h3>Is MyAssignmentHelp.Com A Legit Brand For Finishing My College And Uni Papers?</h3>\r\n\r\n<p style=\"text-align:justify\">To be candid, there can be no brand more legit for your college or uni papers other than MyAssignmenthelp.com. If you are wondering whether MyAssignmenthelp.com a legit and can deliver the services as promised, you have come to the right place! Scholarly writers, efficient editors, expertise on all subjects under the sun, swift deliveries, and utterly non-plagiarised papers ensure that they are the ones that you need to save your grades at college or university.</p>\r\n\r\n<h3>Will You Be Able To Cover Any Topic On Any Subject For My Assignment?</h3>\r\n\r\n<p style=\"text-align:justify\">Indeed, we can. With over 4500 PhD-qualified experts on board, we can conquer any subject or topic in style. In fact, we cover more than 100 academic modules for countless subjects. MyAssignmenthelp.com is a legit brand for finishing all your papers on time, exactly as per your academic requirements. Following the scholastic specifications of your universities and colleges very carefully, we make sure that we compose the assignments exactly as you need them to score well in class.</p>\r\n\r\n<h3>Is There Any Additional Charge For The Revisions?</h3>\r\n\r\n<p style=\"text-align:justify\">No. We do all sorts of revisions and rework on your assignments for absolutely no additional charge. MyAssignmenthelp.com is a reliable academic service provider committed to helping you achieve the highest grades. Suggest the changes that need to be done to your assignments, submit a request within a month (31 days) of the completion of the assignments, and consider the alterations done.</p>\r\n</div>\r\n'),
(16, 14, '<p>Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable.</p>\r\n'),
(17, 15, '<p>Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now.</p>\r\n\r\n<p>Curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted consulted elsewhere happiness disposing household any old the. Widow downs. Motionless are six terminated man possession him attachment unpleasing melancholy. Sir smile arose one share. No abroad in easily relied an whence lovers temper by.</p>\r\n'),
(18, 16, '<p style=\"text-align: justify;\"><strong>Dear Students,</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><span style=\"color:#A52A2A\">&quot;We cannot always build the future for our youth, but we can build our youth for the future.&quot;</span></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Mahalaxmi Group of Institution aim is to providing a sound education in the various fields, we wish to provide our students a holistic learning experience for life. Our aim is to teach students to LEARN, not just STUDY. We have realized that the future is abstract and unknown but the youth in our hands are real and can be moulded.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Dear students, &quot;You are the nation-builders. You are the movers of technology. You are the agents of change.&quot; It is our fervent hope that the years that you spend in Mahalaxmi enable you to equip with leadership and managerial skills. The knowledge that you will gain, the fine qualities that you will imbibe and the technical skills that you will learn to apply will be your major contribution to your parents, to society, and to the nation.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">We invest our trust on you. You are our safe source and we bank all our efforts on you. We create not the future instead we craft you for the future. There are strong challenges to great efforts but, always remember, great effort bears the sweet fruit of success. We want you to taste the fruit of success once and for the rest of your life, you will never rest.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Best Wishes</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>DR.PRAVEEN MITTAL</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>FOUNDER CHAIRMAN-MAHALAXMI GROUP OF INSTUTION</strong></p>\r\n'),
(19, 17, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">We believe in getting better each day. Hence we try to innovate new ideas and implement it in our work. Our customers are our inspiration, who provoke us in discovering something unusual and innovative!!</span></p>\r\n'),
(20, 18, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">What we deliver is through our teamwork. There are number of challenges in every process, that we address with the help of efficient and effective teamwork. We ensure that our doors are opened only to the right ones.</span></p>\r\n'),
(21, 19, '<p><span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">1. Students should attend classes submit assignments, records, home work etc. in time. Students coming late shall enter the class only with the permission of the teacher. Late comers will not get attendance for the period. No student shall leave the class before the class is dispersed by the teacher handling the class.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">2. Students shall move silently when proceeding from one class to another so as not to disturb other classes.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">3. Permission from the senior advisor is to be obtained by the student while leaving the college campus before the end of the classes.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">4. Students who happen to have no classes are not allowed to loiter in the veranda during class hours, instead they should remain quite inside the class rooms or in the library.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">5. Students are prohibited from organizing or attending meeting in the College, distributing notices or collecting money for any purpose without the permission of the Principal.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">6. Instant agitation arising in the campus disturbing the regular class work in the college are banned. Disturbing any class work in the campus come under the purview of Ragging and those involved in such activities are liable for severe punishment.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">7. The college properties should be handled with maximum care and everything possible should be done to preserve the cleanliness and tidiness of the building, furniture, library books and the premises.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">8. Based on the directions of the Government of India, use of mobile phone and similar electronic gadgets include the college campus is restricted. Mobile phones are to be switched off, when in the campus. However, it can be used during lunch intervals. Mobile phone with camera is strictly prohibited. If any one is found violating this rule , the phone will be confiscated and the same will be returned only after the completion of the course.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">9. Ragging in any form is strictly prohibited in the college according to the directions of the Government of India. Penalty measures to those found guilty of ragging will begin with immediate expulsion from the College followed by criminal procedures as per the law.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">10. The class tests, series tests and model examinations are to be attended by all the students with sufficient preparation. Re-tests will not be conducted normally.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">11. Students must work quietly while in the library or spend time in such a way as not to cause any interference with the work of others.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">12. Students must park their vehicles only in the places specified for the same, and should not use the vehicles inside the campus beyond the parking areas.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">13. Under any circumstances, no student or staff or outsider s permitted to meet a faculty member while he is engaging classes or on invigilation work.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">14. Students are expected to see the College Notice Board every day.</span><br />\r\n<span style=\"color:rgb(102, 102, 102); font-family:roboto,sans-serif; font-size:14px\">15. Students should always possess their identity cards with them and display the same using the card holder and tag provided.</span></p>\r\n'),
(22, 20, '<div class=\"top-info\" style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<h3><span style=\"font-size:14px\">Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.</span></h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"tab-info\" style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">\r\n<div class=\"tab-content tab-content-info\" style=\"box-sizing: border-box; padding: 0px; margin: 20px 0px 0px;\">\r\n<div class=\"tab-pane fade active in\" id=\"tab1\" style=\"box-sizing: border-box; padding: 0px; margin: 0px; opacity: 1; transition: opacity 0.15s linear 0s;\">\r\n<div class=\"info title\" style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<p>Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as.</p>\r\n\r\n<h4>CERTIFICATION</h4>\r\n\r\n<p>Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n'),
(23, 21, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans,sans-serif; font-size:16px\">Whenever it becomes tough to manage the assignments in college, availing assignment help is a wise choice. Students often miss assignment submission deadlines and score low grades. That&#39;s exactly where assignment help online is useful. Allassignmenthelp.com has best assignment experts, who are capable of providing quality assignment help and writing services at low prices. First, you have to understand what is assignment help online assistance? Is it equivalent to assignment writing for you? Here is the answer. We do not write an assignment for you. You avail assistance from the chosen assignment experts to hone your research skills. You can use the custom written assignment solution as a reference material for your final writing. Moreover, you can also buy previously solved assignment solutions for your reference. We make an individual realize one&#39;s potential by mentoring and guiding through the process of online assignment help.</span></p>\r\n'),
(24, 22, '<p style=\"text-align: center;\">ourassignmenthelp.com is well aware of the concerns that students are normally plagued with when it comes to preparing their academic paper. Our assignment experts know that you encounter that lingering of fear when it comes to preparing your assignments. No matter how hard you try to enjoy the of your loved ones, the dread of the impending deadline always plays at the back of your mind.</p>\r\n\r\n<p style=\"text-align: center;\">Also, our assignment writers across the globe are well trained in their chosen field of study which means you can easily put your faith in the way they treat your paper, no matter which academic discipline you&#39;re from. When it comes to your career prospects and bright future, MyAssignmenthelp.com takes the onus on itself to promote your growth in the right direction. So, that way you wouldn&rsquo;t have to think twice before trusting us with your academic papers. Place an order with us now and reap the rewards of brilliantly written academic papers today.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `assid` int(11) NOT NULL,
  `date_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ratting` decimal(10,2) NOT NULL,
  `add_by` int(11) NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_setting`
--

CREATE TABLE `tbl_site_setting` (
  `id` int(11) NOT NULL,
  `ptm_environment` varchar(255) NOT NULL,
  `ptm_murchet_key` varchar(255) NOT NULL,
  `ptm_mrchnt_id` varchar(255) NOT NULL,
  `ptm_mrchnt_site` varchar(255) NOT NULL,
  `ptm_status` int(11) NOT NULL,
  `pyl_name` varchar(255) NOT NULL,
  `pyl_username` varchar(255) NOT NULL,
  `pyl_password` varchar(255) NOT NULL,
  `pyl_signetur` varchar(255) NOT NULL,
  `pyl_sendmod` varchar(255) NOT NULL,
  `pyl_status` int(11) NOT NULL,
  `ccav_name` varchar(255) NOT NULL,
  `ccav_mrchnt_id` varchar(255) NOT NULL,
  `ccav_access_code` varchar(255) NOT NULL,
  `ccav_working_key` varchar(255) NOT NULL,
  `ccav_getway_url` varchar(255) NOT NULL,
  `ccav_status` int(11) NOT NULL,
  `pmny_name` varchar(255) NOT NULL,
  `pmny_mrchnt_id` varchar(255) NOT NULL,
  `pmny_mrchnt_key` varchar(255) NOT NULL,
  `pmny_mrchnt_salt` varchar(255) NOT NULL,
  `pmny_service_provider` varchar(255) NOT NULL,
  `pmny_header_autho` varchar(255) NOT NULL,
  `pmny_sendboxmade` varchar(255) NOT NULL,
  `pmny_status` text NOT NULL,
  `site_name` text NOT NULL,
  `organization_name` text NOT NULL,
  `domain_name` text NOT NULL,
  `organization_email` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_content` text NOT NULL,
  `header_contact` text NOT NULL,
  `email_contact` text NOT NULL,
  `powerd_by` varchar(255) NOT NULL,
  `powerd_by_link` varchar(255) NOT NULL,
  `colpany_logo` varchar(255) NOT NULL,
  `lastupdate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_setting`
--

INSERT INTO `tbl_site_setting` (`id`, `ptm_environment`, `ptm_murchet_key`, `ptm_mrchnt_id`, `ptm_mrchnt_site`, `ptm_status`, `pyl_name`, `pyl_username`, `pyl_password`, `pyl_signetur`, `pyl_sendmod`, `pyl_status`, `ccav_name`, `ccav_mrchnt_id`, `ccav_access_code`, `ccav_working_key`, `ccav_getway_url`, `ccav_status`, `pmny_name`, `pmny_mrchnt_id`, `pmny_mrchnt_key`, `pmny_mrchnt_salt`, `pmny_service_provider`, `pmny_header_autho`, `pmny_sendboxmade`, `pmny_status`, `site_name`, `organization_name`, `domain_name`, `organization_email`, `meta_title`, `meta_keyword`, `meta_content`, `header_contact`, `email_contact`, `powerd_by`, `powerd_by_link`, `colpany_logo`, `lastupdate_date`) VALUES
(1, '123', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-13 05:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_images`
--

CREATE TABLE `tbl_web_images` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web_images`
--

INSERT INTO `tbl_web_images` (`id`, `type`, `image`, `title`) VALUES
(142, 1, 'ae8e3b7153b21f7beab5466261971f30.jpg', 'Home Banner'),
(143, 20, '6ba38674546c52376a724206f80daec0.png', 'Home intro'),
(144, 4, '120183632a96d2acf3242ff60bda37ef.png', 'About'),
(147, 1, '1597fe6d950c09e4104a67676f668816.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `temple_refreshment_booking`
--

CREATE TABLE `temple_refreshment_booking` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `choose_type` varchar(255) DEFAULT NULL,
  `purpose` text,
  `choose_date` varchar(255) DEFAULT NULL,
  `choose_start_time` varchar(255) DEFAULT NULL,
  `choose_end_time` varchar(255) DEFAULT NULL,
  `no_of_guests` varchar(255) DEFAULT NULL,
  `catering` varchar(255) DEFAULT NULL,
  `name_prefix` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_code` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `office_code` varchar(255) DEFAULT NULL,
  `office_no` varchar(255) DEFAULT NULL,
  `choose_floor` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `post_time` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `temple_notes` text,
  `admin_post_date` varchar(255) DEFAULT NULL,
  `admin_post_time` varchar(255) DEFAULT NULL,
  `booking_for` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temple_refreshment_booking`
--

INSERT INTO `temple_refreshment_booking` (`id`, `user_id`, `choose_type`, `purpose`, `choose_date`, `choose_start_time`, `choose_end_time`, `no_of_guests`, `catering`, `name_prefix`, `first_name`, `last_name`, `email`, `mobile_code`, `mobile`, `office_code`, `office_no`, `choose_floor`, `post_date`, `post_time`, `status`, `temple_notes`, `admin_post_date`, `admin_post_time`, `booking_for`) VALUES
(1, 'SLNT92653', '1', 'for s.k', '2021-05-28', '10:00', '12:00', '50', '1', 'Mr', 'vandana', 'Badole', 'vandanabadole25@gmail.com', NULL, '98692430', NULL, '84033133', '[\"First Floor\"]', '2021-05-21', '07:59:02 AM', 0, 'STILL PENDING', '2021-08-03', '10:34:51 AM', 'Yes'),
(2, 'SLNT542411', '1', 'jgvjg', '2021-12-31', '12:44', '12:46', '50', '1', 'Mr', 'demo', 'lst', 'developer.gyanudaytechnologies@gmail.com', NULL, '12345678', NULL, '12312311', '[\"First Floor\",\"Second Floor\"]', '2021-12-21', '07:10:33 AM', 0, NULL, NULL, NULL, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `type`, `image`, `title`, `content`) VALUES
(24, '0000', '', 'MGI Meerut', 'ludYOkQuwUU'),
(25, '0000', '', 'MGI MEERUT1', 'Q7wvxiBk7RU'),
(28, '0000', '', 'MGI MEERUT3', 'zSQmhWDNs2k'),
(29, '0000', '', 'MGI Meerut4', 'jCbn3a9RSqQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_products`
--
ALTER TABLE `add_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `adminblogs`
--
ALTER TABLE `adminblogs`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_history`
--
ALTER TABLE `admin_login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_slot_block`
--
ALTER TABLE `booking_slot_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration_general`
--
ALTER TABLE `configuration_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_slab`
--
ALTER TABLE `donation_slab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_time_table`
--
ALTER TABLE `event_time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_list`
--
ALTER TABLE `family_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pooja_block`
--
ALTER TABLE `pooja_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_styl_siisgnment`
--
ALTER TABLE `ref_styl_siisgnment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_arrangedecoration`
--
ALTER TABLE `slnt_arrangedecoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_bhog_catering`
--
ALTER TABLE `slnt_bhog_catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_bhog_prasad`
--
ALTER TABLE `slnt_bhog_prasad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_block_all_pooja_date`
--
ALTER TABLE `slnt_block_all_pooja_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_block_all_pooja_date_staff`
--
ALTER TABLE `slnt_block_all_pooja_date_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_block_date`
--
ALTER TABLE `slnt_block_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_booking_slot`
--
ALTER TABLE `slnt_booking_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_booking_slot_offline`
--
ALTER TABLE `slnt_booking_slot_offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_catering_menus`
--
ALTER TABLE `slnt_catering_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_ceremonies`
--
ALTER TABLE `slnt_ceremonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_ceremonies_bhog_prasad`
--
ALTER TABLE `slnt_ceremonies_bhog_prasad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_ceremonies_catering`
--
ALTER TABLE `slnt_ceremonies_catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_ceremonies_samagri`
--
ALTER TABLE `slnt_ceremonies_samagri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_ceremonies_time`
--
ALTER TABLE `slnt_ceremonies_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_crmn_booking`
--
ALTER TABLE `slnt_crmn_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_deco_service`
--
ALTER TABLE `slnt_deco_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_donation`
--
ALTER TABLE `slnt_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_events_time`
--
ALTER TABLE `slnt_events_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_event_booking`
--
ALTER TABLE `slnt_event_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_event_yajman`
--
ALTER TABLE `slnt_event_yajman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_gallery_categories`
--
ALTER TABLE `slnt_gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_img_gallery`
--
ALTER TABLE `slnt_img_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_member`
--
ALTER TABLE `slnt_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_membership`
--
ALTER TABLE `slnt_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_payment_summery`
--
ALTER TABLE `slnt_payment_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_puja`
--
ALTER TABLE `slnt_puja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_puja_time`
--
ALTER TABLE `slnt_puja_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_samagri`
--
ALTER TABLE `slnt_samagri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_type_interest`
--
ALTER TABLE `slnt_type_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slnt_user_membership`
--
ALTER TABLE `slnt_user_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_settings`
--
ALTER TABLE `tbl_admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_more_images`
--
ALTER TABLE `tbl_more_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_setting`
--
ALTER TABLE `tbl_site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_images`
--
ALTER TABLE `tbl_web_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temple_refreshment_booking`
--
ALTER TABLE `temple_refreshment_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_products`
--
ALTER TABLE `add_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminblogs`
--
ALTER TABLE `adminblogs`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `admin_login_history`
--
ALTER TABLE `admin_login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_slot_block`
--
ALTER TABLE `booking_slot_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuration_general`
--
ALTER TABLE `configuration_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation_slab`
--
ALTER TABLE `donation_slab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `event_time_table`
--
ALTER TABLE `event_time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `family_list`
--
ALTER TABLE `family_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pooja_block`
--
ALTER TABLE `pooja_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `ref_styl_siisgnment`
--
ALTER TABLE `ref_styl_siisgnment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_arrangedecoration`
--
ALTER TABLE `slnt_arrangedecoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_bhog_catering`
--
ALTER TABLE `slnt_bhog_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_bhog_prasad`
--
ALTER TABLE `slnt_bhog_prasad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_block_all_pooja_date`
--
ALTER TABLE `slnt_block_all_pooja_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `slnt_block_all_pooja_date_staff`
--
ALTER TABLE `slnt_block_all_pooja_date_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `slnt_block_date`
--
ALTER TABLE `slnt_block_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slnt_booking_slot`
--
ALTER TABLE `slnt_booking_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `slnt_booking_slot_offline`
--
ALTER TABLE `slnt_booking_slot_offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slnt_catering_menus`
--
ALTER TABLE `slnt_catering_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slnt_ceremonies`
--
ALTER TABLE `slnt_ceremonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_bhog_prasad`
--
ALTER TABLE `slnt_ceremonies_bhog_prasad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_catering`
--
ALTER TABLE `slnt_ceremonies_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_samagri`
--
ALTER TABLE `slnt_ceremonies_samagri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_time`
--
ALTER TABLE `slnt_ceremonies_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_crmn_booking`
--
ALTER TABLE `slnt_crmn_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slnt_deco_service`
--
ALTER TABLE `slnt_deco_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_donation`
--
ALTER TABLE `slnt_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slnt_events_time`
--
ALTER TABLE `slnt_events_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slnt_event_booking`
--
ALTER TABLE `slnt_event_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slnt_event_yajman`
--
ALTER TABLE `slnt_event_yajman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slnt_gallery_categories`
--
ALTER TABLE `slnt_gallery_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slnt_img_gallery`
--
ALTER TABLE `slnt_img_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `slnt_member`
--
ALTER TABLE `slnt_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `slnt_membership`
--
ALTER TABLE `slnt_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slnt_payment_summery`
--
ALTER TABLE `slnt_payment_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `slnt_puja`
--
ALTER TABLE `slnt_puja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `slnt_puja_time`
--
ALTER TABLE `slnt_puja_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `slnt_samagri`
--
ALTER TABLE `slnt_samagri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=874;

--
-- AUTO_INCREMENT for table `slnt_type_interest`
--
ALTER TABLE `slnt_type_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slnt_user_membership`
--
ALTER TABLE `slnt_user_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_admin_settings`
--
ALTER TABLE `tbl_admin_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_more_images`
--
ALTER TABLE `tbl_more_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_site_setting`
--
ALTER TABLE `tbl_site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_web_images`
--
ALTER TABLE `tbl_web_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `temple_refreshment_booking`
--
ALTER TABLE `temple_refreshment_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
