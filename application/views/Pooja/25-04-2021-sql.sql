-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2021 at 03:42 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecubebiz_slnt`
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
  `description` text DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT current_timestamp(),
  `video_link` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metkeywords` varchar(255) NOT NULL,
  `metdescription` varchar(255) NOT NULL,
  `event_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `category` int(11) NOT NULL,
  `neet_to_pay` int(11) NOT NULL,
  `sel_yajman` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`id`, `event_date`, `filterdate`, `event_from_time`, `event_to_time`, `title`, `description`, `post_date`, `video_link`, `product_image`, `metatitle`, `metkeywords`, `metdescription`, `event_amount`, `category`, `neet_to_pay`, `sel_yajman`) VALUES
(1, '2021-04-23', '20210423', NULL, NULL, 'test', '<p>test</p>', '2021-03-05 03:17:36', '', '632202ae16fd5f342c96949b78989b86.png', 'na', 'na', 'na', 20.00, 0, 1, '[\"2\",\"1\"]'),
(2, '2021-03-11', '20210311', NULL, NULL, 'MAHASHIVRATRI', '<p>SHIV POOJA</p>', '2021-03-09 05:20:00', '', 'dc8f487b210f580132db49e5d990e386.jpg', 'na', 'na', 'na', 151.00, 0, 1, NULL),
(3, '2021-04-13', '20210413', NULL, NULL, 'navratri', '<p>9 days prayer</p>', '2021-03-09 07:47:03', '', 'aa55b3b63584e3cf1cdf3b3f83f01ae7.png', 'na', 'na', 'na', 101.00, 0, 1, NULL),
(4, '2021-03-09', '20210309', NULL, NULL, 'testing events', '<p>Tesing of events</p>', '2021-03-09 11:05:56', '', 'dfd671e18c8106b5e7c6eaadae8c9b37.JPG', 'na', 'na', 'na', 2000.00, 0, 1, '[\"2\",\"1\"]'),
(5, '2021-08-20', '20210820', NULL, NULL, 'Janamashtami', '<p>shri krishna birth</p>\r\n\r\n<p>&nbsp;</p>', '2021-04-27 06:26:04', '', 'aaa140e9805f1d67d513307d83e8b6ed.jpg', 'na', 'na', 'na', 112.00, 0, 1, '[\"1\"]');

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
  `metatitle` text DEFAULT NULL,
  `metkeywords` text DEFAULT NULL,
  `metdescription` text DEFAULT NULL,
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
  `priest_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `rol` int(4) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `name_title` varchar(100) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobleno` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `collegecode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `examdate` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `b_password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminusername`, `adminpassword`, `priest_price`, `rol`, `name`, `name_title`, `last_name`, `mobleno`, `status`, `collegecode`, `email`, `examdate`, `profilepic`, `b_password`) VALUES
(1, 'info@slnt.com', '55819abe68c0bca3e8f7d462f5b4e180', 0.00, 1, 'SLNT ', 'Mr.', 'Admin', 0, 1, 'info@slnt.com', 'info@slnt.com', '', '', ''),
(39, 'ANUPAM ', 'b70dd1c5fda4347aa5a0b78ccc185328', 0.00, 1, 'ANUPAM ', 'Mr', 'TRIPATHI', 98111529, 1, '', 'ANUPAM@gmail.com', '', '831b80ef862ef1a82d47b3ddfea0fe79.png', ''),
(38, 'sandeep', '00dcf16d903e5890aaba465b0b1ba51f', 0.00, 4, 'sandeep', 'Mr', 'shukla', 98972527, 1, '', 'sandeepshukla@gmail.com', '', 'ba4c99b6104805ba1d7cb01ae7cd7151.jpg', ''),
(37, 'VANDANA', '35aa8af599ce2fe29c4d4d07f99a8f64', 0.00, 5, 'VANDANA', 'Miss', 'badole', 35547578, 1, '', 'Vandanabadole25@gmail.com', '', 'e90804088d5cdb5d555d007d59e7af94.jpeg', ''),
(36, 'BRIJ BHUSHAN', '7c9ac6879eb7f39f08448fba54477c27', 0.00, 1, 'BRIJ BHUSHAN', 'Mr', 'DUBEY', 56789053, 1, '', 'info@lakshminarayantemple.com', '', '0e254fdbcc3034205b5dbeab00aa90ee.jpg', ''),
(32, 'omakr upadhyay', 'bfd4dd46c5303a846960c728695f0152', 0.00, 4, 'Omkar', 'Mr', 'Upadha', 97975687, 1, '', 'omkar.upadhya.com', '', 'a32513566a65871024c19e39c3cfa4ca.jpg', ''),
(33, 'Demo', '7f82a3da7b6b954e96f193222b33165a', 0.00, 3, 'Demo', 'Mr', 'Priest', 36275502, 1, '', 'demo@gmail.com', '', 'd7f1a99a76416faaaafcc7890ab89381.png', ''),
(35, 'Manisha Rajpal', '1d66d463cad7d01870e94b53c56efcbd', 0.00, 5, 'Manisha', 'Miss', 'Rajpal', 91774015, 1, '', 'mitaliraj@hotmail.com', '', 'c93c317367b7bb725ae88f2362112579.JPG', ''),
(34, 'info@slnt.com', '55819abe68c0bca3e8f7d462f5b4e180', 0.00, 2, 'demo  ', 'Mr', 'cgf', 95362755, 1, '', 'DEMO@gnk.com', '', 'b6b17291159cb46cd42d083affadf99b.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_history`
--

CREATE TABLE `admin_login_history` (
  `id` int(11) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `login_time` time NOT NULL,
  `login_attempt` int(11) NOT NULL DEFAULT 0,
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
(67, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '27/04/2021', '10:39:02', 0, '00:00:00', '0000-00-00 00:00:00', ''),
(68, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '29/04/2021', '11:23:16', 0, '00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT 0,
  `cat_it` int(11) NOT NULL DEFAULT 0,
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
(1, 'Shree Lakshmi Narayan Temple', 'Shree Lakshmi Narayan Temple', 'https://www.ShreeLakshmiNarayaTemple.com/', 'enquiry@ShreeLakshmiNarayaTemple.com', 'Shree Lakshmi Narayan Temple', 'Shree Lakshmi Narayan Temple', 'Shree Lakshmi Narayan Temple', 'Shree Lakshmi Narayan Temple', '+95-9999999999', '', 'da31142882914e5e44819ba224c1fca4.png', '+95-9999999999', '', 'https://www.facebook.com/spslnt', 'https://twitter.com/', 'https://in.linkedin.com/', 'https://www.youtube.com/channel/UCcL9GYE6blAZR_TPV8qkfkw', 'https://in.pinterest.com/', '', '', '06-02-2021', 4500.00, 0.00, 0.00, 0.00, 'https://www.instagram.com/?hl=en');

-- --------------------------------------------------------

--
-- Table structure for table `donation_slab`
--

CREATE TABLE `donation_slab` (
  `id` int(11) NOT NULL,
  `name` decimal(10,2) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT 0,
  `cat_it` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation_slab`
--

INSERT INTO `donation_slab` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(1, 10.00, '1', 1, 1),
(2, 100.00, '1', 1, 3);

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
(2, 1, 2, '20210311'),
(6, 1, 3, '20210413'),
(7, 2, 3, '20210413'),
(8, 3, 3, '20210413'),
(21, 1, 4, '20210309'),
(22, 2, 4, '20210309'),
(23, 3, 4, '20210309'),
(26, 1, 1, '20210423'),
(27, 3, 5, '20210820');

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
(11, 2, '2021-02-21', '12', '20210221', 'duty at temple'),
(12, 2, '2021-02-21', '13', '20210221', 'duty at temple'),
(9, 2, '2021-02-21', '10', '20210221', 'duty at temple'),
(10, 2, '2021-02-21', '11', '20210221', 'duty at temple'),
(13, 2, '2021-04-17', '10', '20210417', 'duty at temple'),
(14, 2, '2021-04-17', '11', '20210417', 'duty at temple'),
(15, 2, '2021-04-17', '12', '20210417', 'duty at temple'),
(16, 2, '2021-04-17', '13', '20210417', 'duty at temple');

-- --------------------------------------------------------

--
-- Table structure for table `ref_styl_siisgnment`
--

CREATE TABLE `ref_styl_siisgnment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT 0,
  `cat_it` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_styl_siisgnment`
--

INSERT INTO `ref_styl_siisgnment` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(38, 'Vancouver', '1', 0, 0),
(39, 'Turabian', '1', 0, 0),
(40, 'OxFord', '1', 0, 0),
(41, 'OSCOLA', '1', 0, 0),
(42, 'Open', '1', 0, 0),
(44, 'Not Selected', '1', 0, 0),
(45, 'MLA', '1', 0, 0),
(46, 'MHRA', '1', 0, 0),
(47, 'IEEE', '1', 0, 0),
(48, 'Harvard', '1', 0, 0),
(49, 'APSA', '1', 0, 0),
(50, 'Footnotes', '1', 0, 0),
(51, 'APA', '1', 0, 0),
(52, 'Chicago', '1', 0, 0),
(53, 'AGLC', '1', 0, 0),
(54, 'BMJ', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_arrangedecoration`
--

CREATE TABLE `slnt_arrangedecoration` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `membership_days` bigint(20) NOT NULL,
  `membership_amount` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_arrangedecoration`
--

INSERT INTO `slnt_arrangedecoration` (`id`, `title`, `membership_days`, `membership_amount`, `description`, `status`, `create_date`) VALUES
(1, 'flowers', 0, 51, 'NA', 1, '09-03-2021');

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

--
-- Dumping data for table `slnt_bhog_catering`
--

INSERT INTO `slnt_bhog_catering` (`id`, `puja_id`, `catering_type`, `catering_title`, `catering_price`, `create_date`, `create_time`) VALUES
(2, 1, 'Lunch', 'Poori', 15.00, '21 Feb, 2021', '09:11:43 AM'),
(3, 2, 'Lunch', 'Poori', 25.00, '24 Feb, 2021', '07:17:18 PM'),
(10, 39, 'Lunch', 'Menu One for fift pax', 120.00, '16 Apr, 2021', '08:58:51 AM'),
(11, 39, 'Lunch', 'Menu One for hundred pax', 200.00, '16 Apr, 2021', '08:59:18 AM');

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

--
-- Dumping data for table `slnt_bhog_prasad`
--

INSERT INTO `slnt_bhog_prasad` (`id`, `puja_id`, `bhog_prasad_title`, `bhog_prasad_price`, `create_date`, `create_time`) VALUES
(1, 2, 'ladoo', 100.00, '19 Feb, 2021', '06:31:50 PM'),
(2, 49, 'aa ', 243.00, '26 Mar, 2021', '12:37:53 PM');

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
(1, '2021-04-01', '20210401', '', '', 'na');

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
(1, '2021-03-11', '20210311', '', '', 'duty at temple', '35');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_block_date`
--

CREATE TABLE `slnt_block_date` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_block_date`
--

INSERT INTO `slnt_block_date` (`id`, `title`, `status`) VALUES
(1, '2021-03-16', 0),
(2, '2021-03-26', 0),
(3, '2021-03-13', 0),
(4, '2021-03-13', 0);

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
  `req_status` int(11) NOT NULL DEFAULT 0,
  `booking_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_booking_slot`
--

INSERT INTO `slnt_booking_slot` (`id`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `lunch`, `dinner`, `refeshments`, `tot_lunch`, `lunch_member`, `tot_dinner`, `dinner_member`, `tot_refreshment`, `refreshment_member`, `status`, `create_date`, `create_time`, `sel_date`, `m`, `y`, `d`, `day`, `time_range_from`, `time_range_to`, `note_for_temple`, `member_price`, `non_member_price`, `fill_from_date`, `fill_to_date`, `offer_mem_price`, `offer_non_mem_price`, `pooja_time_from`, `pooja_time_to`, `cancledattime`, `req_date`, `req_time`, `req_status`, `booking_for`) VALUES
(1, '', 'puja', 0, 1, 2, 'SLNT42793', 1, 33, 0, 51.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-02-2021', '13:00:23 PM', 'Tue, 23-02-2021', '02', '2021', '23', 'Tue', '', '', 'df gfd ', 35.00, 51.00, '0', '0', 0.00, 0.00, '04:00:00 AM', '05:00:00 AM', NULL, NULL, NULL, 0, ''),
(2, '', 'puja', 0, 2, 13, 'SLNT42793', 1, 33, 0, 151.00, '', '', '', 0, 0.00, 0, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '22-02-2021', '13:05:48 PM', 'Sat, 27-02-2021', '02', '2021', '27', 'Sat', '', '', '  ghg g hg fhjfhjfh ', 121.00, 151.00, '0', '0', 0.00, 0.00, '00:00:00 AM', '00:30:00 AM', NULL, NULL, NULL, 0, ''),
(3, 'SPSLNT2021022400003', 'puja', 0, 2, 13, 'SLNT42793', 1, 32, 0, 151.00, '', '', '', 0, 100.00, 0, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 1, '24-02-2021', '19:09:23 PM', 'Sat, 27-02-2021', '02', '2021', '27', 'Sat', '', '', 'xyz', 121.00, 151.00, '0', '0', 0.00, 0.00, '00:00:00 AM', '00:30:00 AM', NULL, NULL, NULL, 0, ''),
(4, '', 'puja', 0, 2, 10, 'SLNT42793', 1, 32, 0, 151.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '25-02-2021', '16:29:15 PM', 'Sun, 28-02-2021', '02', '2021', '28', 'Sun', '', '', '1651', 121.00, 151.00, '0', '0', 0.00, 0.00, '00:00:00 AM', '01:00:00 AM', NULL, NULL, NULL, 0, ''),
(5, 'SPSLNT2021022500005', 'puja', 0, 6, 15, 'SLNT42793', 1, 32, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 1, '25-02-2021', '18:33:16 PM', 'Tue, 9-03-2021', '03', '2021', '9', 'Tue', '', '', 'vfas', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', NULL, NULL, NULL, 0, ''),
(6, '', 'puja', 0, 6, 15, 'SLNT76414', 1, 32, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 0, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '02-03-2021', '14:36:52 PM', 'Tue, 2-03-2021', '03', '2021', '2', 'Tue', '', '', 'NA', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', NULL, NULL, NULL, 0, ''),
(7, 'SPSLNT2021030200007', 'yajman', 0, 6, 15, 'SLNT76414', 1, 38, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 3, '02-03-2021', '14:38:53 PM', 'Tue, 2-03-2021', '03', '2021', '2', 'Tue', '', '', 'na', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', '2021/03/13 01:45:25 AM', NULL, NULL, 0, ''),
(8, 'SPSLNT2021031300008', 'yajman', 0, 6, 15, 'SLNT76414', 1, 38, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 0, 0.00, 0, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 1, '13-03-2021', '07:20:03 AM', 'Tue, 16-03-2021', '03', '2021', '16', 'Tue', '', '', 'ghfgh gfh ', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', NULL, NULL, NULL, 0, ''),
(9, '', 'pooja', 0, 14, 18, 'SLNT76414', 1, 38, 0, 51.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '13-03-2021', '08:21:45 AM', 'Sun, 21-03-2021', '03', '2021', '21', 'Sun', '', '', ' ghg hg', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '20:00:00 PM', NULL, '2021-03-28', '18', 0, ''),
(10, 'SPSLNT2021031300010', 'pooja', 0, 14, 18, 'SLNT74465', 1, 32, 0, 51.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 0, 0, 0, 0, 0.00, 1, 0.00, 1, 0.00, 1, 3, '13-03-2021', '12:32:24 PM', 'Sun, 21-03-2021', '03', '2021', '21', 'Sun', '', '', 'Some new text ', 35.00, 51.00, '0', '0', 0.00, 0.00, '07:00:00 AM', '20:00:00 PM', '2021/03/13 07:27:12 AM', NULL, NULL, 0, ''),
(11, 'SPSLNT2021031300011', 'yajman', 0, 6, 15, 'SLNT74465', 0, 0, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 3, '13-03-2021', '13:04:09 PM', 'Tue, 23-03-2021', '03', '2021', '23', 'Tue', '', '', 'NA', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', '2021/03/13 07:38:09 AM', NULL, NULL, 0, ''),
(12, 'SPSLNT2021031300012', 'yajman', 0, 6, 15, 'SLNT74465', 1, 38, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 3, '13-03-2021', '13:10:12 PM', 'Tue, 23-03-2021', '03', '2021', '23', 'Tue', '', '', ' f gfg ', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', '2021/03/13 08:01:44 AM', '2021-04-06', '15', 0, ''),
(13, 'SPSLNT2021031300013', 'yajman', 0, 6, 15, 'SLNT74465', 1, 38, 0, 15.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 3, '13-03-2021', '13:34:08 PM', 'Tue, 30-03-2021', '03', '2021', '30', 'Tue', '', '', 'gdf gdg dfg f', 25.00, 62.00, '0', '0', 0.00, 0.00, '00:30:00 AM', '04:00:00 AM', '2021/03/13 08:05:24 AM', '2021-03-23', '15', 1, ''),
(14, '', 'pooja', 0, 39, 23, 'SLNT76414', 0, 0, 0, 51.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '10-04-2021', '11:36:19 AM', 'Mon, 19-04-2021', '04', '2021', '19', 'Mon', '', '', 'testing', 51.00, 51.00, '0', '0', 0.00, 0.00, '15:00:00 PM', '17:00:00 PM', NULL, NULL, NULL, 0, ''),
(15, 'SPSLNT2021041000015', 'pooja', 0, 39, 23, 'SLNT76414', 0, 0, 0, 51.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 1, '10-04-2021', '11:40:46 AM', 'Mon, 19-04-2021', '04', '2021', '19', 'Mon', '', '', 'nt', 51.00, 51.00, '0', '0', 0.00, 0.00, '15:00:00 PM', '17:00:00 PM', NULL, NULL, NULL, 0, 'Yes'),
(16, '', 'pooja', 0, 39, 23, 'SLNT74465', 1, 32, 0, 51.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, 1, 1, 1, 0.00, 0, 0.00, 0, 0.00, 0, 0, '10-04-2021', '16:45:53 PM', 'Mon, 26-04-2021', '04', '2021', '26', 'Mon', '', '', '', 51.00, 51.00, '0', '0', 0.00, 0.00, '15:00:00 PM', '17:00:00 PM', NULL, NULL, NULL, 0, 'No');

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
  `puja_type` int(11) NOT NULL DEFAULT 0,
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
  `booking_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_booking_slot_offline`
--

INSERT INTO `slnt_booking_slot_offline` (`id`, `name_title`, `name`, `last_name`, `mobleno`, `email`, `u_city`, `u_postalcode`, `u_address`, `member_price`, `non_member`, `pooja_amount`, `title`, `booking_id`, `puja_type`, `priest_id`, `puja_id`, `time_id`, `m`, `y`, `d`, `day`, `user_id`, `pre_priest`, `sel_priest`, `venue`, `venue_amount`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `lunch`, `dinner`, `refeshments`, `status`, `create_date`, `create_time`, `sel_date`, `amounttobepay`, `con_status`, `booking_created_by`, `time_range_to`, `time_range_from`, `note_for_temple`, `booking_for`) VALUES
(1, 'Miss', 'Zam', 'za', '12121212', 'myintmyintzanster@gmail.com', 'singapore', '434333', 'test test', 51.00, 51.00, 0.00, '10th DAY PRAYER', 'SLNTEMPLE1', 0, 0, 39, 22, '03', '2021', '28', 'Sun', '', 1, 32, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0, '26-03-2021', '12:10:33 PM', '', 61.00, 1, 'info@slnt.com', '', '', 'test', ''),
(2, 'Mr', 'zan', 'zan', '12345667', 'myintmyintzanster@gmail.com', 'singapore', '434333', 'test test', 51.00, 51.00, 0.00, '10th DAY PRAYER', 'SLNTEMPLE2', 0, 0, 39, 23, '03', '2021', '29', 'Mon', '', 1, 32, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, 1, 1, 1, 0, '26-03-2021', '12:14:47 PM', '', 61.00, 1, 'info@slnt.com', '', '', 'test', ''),
(3, 'Mr', 'test', 'test', '23232323', 'myintmyintzanster@gmail.com', 'singapore', '434333', 'test test', 51.00, 51.00, 0.00, '10th DAY PRAYER', 'SLNTEMPLE3', 0, 0, 39, 24, '03', '2021', '30', 'Tue', '', 1, 38, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0, '26-03-2021', '12:24:51 PM', '', 61.00, 1, 'info@slnt.com', '', '', 'test test ', ''),
(4, 'Mr', 'zan', 'zan', '34343434', 'myintmyintzanster@gmail.com', 'singapore', '521221', 'test', 51.00, 51.00, 51.00, '10th DAY PRAYER', 'SLNTEMPLE4', 0, 0, 39, 24, '04', '2021', '6', 'Tue', '', 1, 38, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0, '30-03-2021', '17:00:58 PM', '', 112.00, 1, 'info@slnt.com', '', '', '', ''),
(5, 'Mr', 'demo', 'deom', '63962004', 'testing@gmail.com', 'delhi', '110001', 'delhi\r\ndelhi', 51.00, 51.00, 51.00, '10th DAY PRAYER', 'SLNTEMPLE5', 0, 0, 39, 24, '04', '2021', '13', 'Tue', '', 1, 32, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, 1, 1, 1, 0, '10-04-2021', '11:25:55 AM', '', 112.00, 1, 'info@slnt.com', '', '', 'NA', 'Yes'),
(6, 'Mr', 'AMJAD', 'KHAN', '00000000', 'info@afaffff.com', 'df', '250001', 'Nangla tashi kanker khera meerut', 51.00, 51.00, 51.00, '10th DAY PRAYER', 'SLNTEMPLE6', 0, 0, 39, 24, '04', '2021', '27', 'Tue', '', 0, 0, 0, 0.00, '', '', '', 1, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0, '10-04-2021', '11:30:35 AM', '', 102.00, 1, 'info@slnt.com', '', '', 'NA', 'Yes'),
(7, 'Mr', 'ghrtjj', 'rtjrt', '99999999', 'hygv@gmail.com', 'jbyg', '651265', 'iohvyugvbnop', 51.00, 51.00, 51.00, '10th DAY PRAYER', '', 0, 0, 39, 24, '04', '2021', '20', 'Tue', '', 0, 0, 0, 0.00, '', '', '', 0, 0.00, 0, 0.00, 0, 0.00, 1, 1, 1, 1, 0, '', '', '', 0.00, 0, 'info@slnt.com', '', '', 'jhgvuhj', 'No'),
(8, 'Mr', 'Sanyam', 'Rastogi', '70556260', 'sanyamrastogi0@gmail.com', 'Delhi', '110111', 'Delhi', 51.00, 51.00, 51.00, '10th DAY PRAYER', 'SLNTEMPLE8', 0, 0, 39, 24, '05', '2021', '11', 'Tue', '', 1, 38, 0, 0.00, '', '', '', 0, 0.00, 1, 0.00, 1, 0.00, 1, 1, 1, 1, 0, '10-04-2021', '19:22:53 PM', '', 112.00, 1, 'info@slnt.com', '', '', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_ceremonies`
--

CREATE TABLE `slnt_ceremonies` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `venue_price` decimal(10,2) NOT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `non_member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 0,
  `kalash_sthapna` int(11) NOT NULL DEFAULT 0,
  `gotra_sankalp` int(11) NOT NULL DEFAULT 0,
  `preeti_bhoge` int(11) NOT NULL DEFAULT 0,
  `light_meal` int(11) NOT NULL DEFAULT 0,
  `catering_menu` int(11) NOT NULL DEFAULT 0,
  `yajmans` int(11) NOT NULL DEFAULT 0,
  `refreshment` int(11) NOT NULL DEFAULT 0,
  `temple_charges` int(11) NOT NULL DEFAULT 0,
  `create_date` varchar(100) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `update_date` varchar(100) DEFAULT NULL,
  `update_time` varchar(100) DEFAULT NULL,
  `solomnization` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_ceremonies`
--

INSERT INTO `slnt_ceremonies` (`id`, `description_charge`, `puja_type`, `venue_price`, `member_price`, `non_member_price`, `status`, `kalash_sthapna`, `gotra_sankalp`, `preeti_bhoge`, `light_meal`, `catering_menu`, `yajmans`, `refreshment`, `temple_charges`, `create_date`, `create_time`, `update_date`, `update_time`, `solomnization`) VALUES
(1, 'Wedding', 'Puja', 201.00, 151.00, 201.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '10 Apr, 2021', '02:54:57 PM', NULL, NULL, 1),
(2, 'Birthdax', 'Puja', 15.00, 151.00, 181.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '25 Feb, 2021', '07:03:03 PM', NULL, NULL, 0),
(3, 'jat karma', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 0, 0, 1, 0, 1, '03 Mar, 2021', '01:48:37 PM', NULL, NULL, 0),
(4, 'kal sarp', 'Puja', 202.00, 160.00, 202.00, 1, 1, 1, 0, 0, 0, 0, 0, 1, '09 Mar, 2021', '11:12:39 AM', NULL, NULL, 0),
(5, 'gand mool shanti', 'Puja', 112.00, 96.00, 112.00, 1, 1, 1, 1, 0, 0, 1, 1, 1, '09 Mar, 2021', '11:13:47 AM', NULL, NULL, 0),
(6, 'shraddh', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, '09 Mar, 2021', '01:20:28 PM', NULL, NULL, 0),
(7, 'Gotra Naam Sankalp', 'Puja', 21.00, 21.00, 21.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '20 Mar, 2021', '07:01:54 PM', NULL, NULL, 0),
(8, 'Test Ceremonie', 'Puja', 100.00, 100.00, 120.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, '19 Apr, 2021', '01:56:37 PM', NULL, NULL, 0),
(9, 'GANESH CHATURTHI', 'Puja', 112.00, 96.00, 112.00, 1, 1, 1, 0, 0, 0, 1, 0, 1, '27 Apr, 2021', '10:40:01 AM', NULL, NULL, 0),
(10, 'GANESH CHATURTHI', 'Puja', 112.00, 96.00, 112.00, 1, 1, 1, 0, 0, 1, 1, 0, 1, '27 Apr, 2021', '10:52:10 AM', NULL, NULL, 0),
(11, 'Yagopaveet', 'Puja', 213.00, 202.00, 213.00, 1, 0, 0, 0, 0, 0, 1, 0, 0, '27 Apr, 2021', '12:04:32 PM', NULL, NULL, 0);

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

--
-- Dumping data for table `slnt_ceremonies_bhog_prasad`
--

INSERT INTO `slnt_ceremonies_bhog_prasad` (`id`, `puja_id`, `bhog_prasad_title`, `bhog_prasad_price`, `create_date`, `create_time`) VALUES
(1, 3, 'halwa', 10.00, '03 Mar, 2021', '01:50:21 PM'),
(2, 10, 'ladoo', 12.00, '27 Apr, 2021', '11:05:32 AM');

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

--
-- Dumping data for table `slnt_ceremonies_catering`
--

INSERT INTO `slnt_ceremonies_catering` (`id`, `puja_id`, `catering_type`, `catering_title`, `catering_price`, `create_date`, `create_time`) VALUES
(1, 3, 'Dinner', 'puri', 100.00, '03 Mar, 2021', '01:50:38 PM'),
(2, 3, 'Dinner', 'sabji', 50.00, '03 Mar, 2021', '01:50:50 PM');

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
  `create_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_ceremonies_samagri`
--

INSERT INTO `slnt_ceremonies_samagri` (`id`, `puja_id`, `samagri_type`, `samagri_title`, `samagri_price`, `create_date`, `create_time`) VALUES
(1, 3, 'Havan Samagri', 'lakdi', 10.00, '03 Mar, 2021', '01:49:28 PM'),
(2, 3, 'Havan Samagri', 'match stick', 2.00, '03 Mar, 2021', '01:49:44 PM'),
(3, 3, 'Havan Samagri', 'lava', 5.00, '03 Mar, 2021', '01:49:58 PM'),
(4, 10, 'Puja Samagri', 'kumkum', 1.00, '27 Apr, 2021', '11:04:50 AM'),
(5, 10, 'Puja Samagri', 'haldi', 1.00, '27 Apr, 2021', '11:05:06 AM');

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
  `status` int(11) NOT NULL DEFAULT 0,
  `create_time` varchar(255) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `decoration` varchar(255) NOT NULL,
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
  `booking_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_crmn_booking`
--

INSERT INTO `slnt_crmn_booking` (`id`, `booking_id`, `userid`, `cer_evnt_type`, `do_solemnisation`, `datetimeids`, `datetimeids_filter`, `arrange_solemnisation`, `arrange_table_chair`, `room_certificate`, `solemnisation_copy`, `status`, `create_time`, `create_date`, `decoration`, `sel_priest`, `venue`, `home_address`, `postal_code`, `picup`, `puja_samagri`, `pooja_samagri_amt`, `havan_samagri`, `havan_samagri_amt`, `bhog_prasad`, `bhog_prasad_amt`, `catering`, `dinner`, `lunch`, `refreshment`, `pay_with`, `pay_status`, `transection_id`, `last_pay_amt`, `dueamt`, `booking_for`) VALUES
(1, '', 'SLNT40521', '5', 'no', '04/08/2021 3:58 PM', NULL, '', '', 'on', NULL, 0, '05:58:34 AM', '09-03-2021', '', 33, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, '', 0, '', 224.00, 0.00, ''),
(2, 'CERSLNT20210410000002', 'SLNT76414', '7', 'no', '22-04-2021 03:55:00 PM', NULL, '', '', 'on', NULL, 1, '06:21:34 AM', '10-04-2021', '', 33, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 'PayPal', 1, '202104101618036357', 42.00, 0.00, 'No'),
(3, '', 'SLNT76414', '2', NULL, '2021-04-20T07:45', NULL, NULL, NULL, NULL, NULL, 0, '10:12:26 AM', '10-04-2021', '', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0.00, 0.00, ''),
(4, 'CERSLNT20210410000004', 'SLNT76414', '3', NULL, '2021-04-20T09:47', NULL, NULL, NULL, NULL, NULL, 1, '10:14:15 AM', '10-04-2021', '', 33, 0, '', '', 'na', 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 'PayPal', 1, '202104101618049729', 102.00, 0.00, 'No'),
(5, '', 'SLNT54502', '1', 'no', '30-04-2021 05:57:00 PM', NULL, '', '', 'on', NULL, 0, '08:23:05 AM', '19-04-2021', '', 33, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 352.00, 0.00, 'No'),
(6, '', 'SLNT40521', '11', 'no', '29-04-2021 02:32:00 PM', NULL, '', '', 'off', NULL, 0, '06:32:56 AM', '27-04-2021', '', 33, 0, '', '', 'na', 0, 0, 1, 0, 1, 0, 1, 1, 1, 1, '', 0, '', 426.00, 0.00, 'Yes'),
(7, '', 'SLNT40521', '11', NULL, '2021-04-29T14:32', NULL, NULL, NULL, NULL, NULL, 0, '06:34:44 AM', '27-04-2021', '', 33, 0, '', '', 'na', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', 426.00, 0.00, 'Yes');

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
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_donation`
--

INSERT INTO `slnt_donation` (`id`, `user_id`, `donation_id`, `filterdate`, `membership_create_date`, `membership_create_time`, `donat_transfer_type`, `amount`, `donation_type`, `transection_ref`, `status`) VALUES
(1, 'SLNT54502', 'SLNTDONET2021022100001', '20210221', '21-02-2021', '01:23:46 AM', 'Visa  Credit Card', '10.00', 'General', '', 0),
(2, 'SLNT42793', 'SLNTDONET2021022100002', '20210221', '21-02-2021', '02:38:03 AM', 'Cheque', '10.00', 'General', '121', 1);

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
(1, '10:00', '12:00', '05 Mar, 2021', '08:47:15 AM'),
(2, '2:00', '4:00', '05 Mar, 2021', '05:45:00 PM'),
(3, '10 AM', '3 PM', '09 Mar, 2021', '10:51:43 AM');

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
(1, '2', '', 'Mr', 'fhfdf', 'fgdfgf', 'sohanveer152@gmail.com', '+65', '95362755', '11', 'PayPal', 'on', '09-03-2021', '09:45:44 AM', 3, 101.00, 'Testing', 600.00, 0, '', '2021-04-13', '10:00 To 12:00', ''),
(2, '2', '', 'Mr', 'gfdgdfg', 'fdgfdgf', 'fgdf@fsdfd.com', '+65', '57575757', '6', 'PayPal', 'on', '09-03-2021', '10:28:53 AM', 3, 101.00, 'KALASH STHAPNA', 62.00, 0, '', '2021-04-13', '10:00 To 12:00', ''),
(3, '2', '', 'Mr', 'f gfdgdg', 'gdh d', 'dsgsg@hsdghs.com', '+65', '95362755', '2', 'PayPal', 'on', '09-03-2021', '11:20:35 AM', 4, 2000.00, 'Mundan', 151.00, 0, '', '2021-03-09', '10:00 To 12:00', ''),
(4, '2', '', 'Mr', 'gfg fg dfg dfhgfh gfh', 'fg hgfh gfh gfh', 'sgdfg@edgsg.com', '+65', '46546545', '1', 'PayPal', 'on', '09-03-2021', '11:24:12 AM', 4, 2000.00, 'Pooja Of Yajman', 250.00, 1, 'SLNTEVNT202103094', '2021-03-09', '10:00 To 12:00', ''),
(5, '2', 'te', 'Miss', 'Myint', 'Zan', 'myintmyintzanster@gmail.com', '+65', '94989894', '2', 'PayPal', 'on', '26-03-2021', '06:26:45 AM', 1, 20.00, 'Yajman Pooja', 600.00, 0, '', '2021-03-20', '10:00 To 12:00', ''),
(6, '2', 'te', 'Miss', 'Myint', 'Zan', 'myintmyintzanster@gmail.com', '+65', '94989894', '2', 'PayPal', 'on', '26-03-2021', '06:32:14 AM', 1, 20.00, 'Yajman Pooja', 600.00, 0, '', '2021-03-20', '10:00 To 12:00', ''),
(7, '2', '', 'Mr', 'zan', 'jjj', 'myintmyintzanster@gmail.com', '+65', '34343434', '1', 'PayPal', 'on', '30-03-2021', '11:21:19 AM', 4, 2000.00, 'Pooja Of Yajman', 250.00, 0, '', '2021-03-09', '10:00 To 12:00', ''),
(8, '2', '', 'Mr', 'demo1', 'lastname', 'demo123@gmail.com', '+65', '36275502', NULL, 'PayPal', 'on', '10-04-2021', '06:44:26 AM', 2, 151.00, NULL, 0.00, 1, 'SLNTEVNT202104108', '2021-03-11', '10:00 To 12:00', 'No'),
(9, '1', 'VANDANA', 'Miss', 'vandana', 'BADOLE', 'vandanabadole25@gmail.com', '+65', '98692430', NULL, 'PayPal', 'on', '27-04-2021', '06:29:27 AM', 5, 112.00, NULL, 0.00, 0, '', '2021-08-20', '10 AM To 3 PM', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_event_yajman`
--

CREATE TABLE `slnt_event_yajman` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `non_member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_date` varchar(24) NOT NULL,
  `create_time` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_event_yajman`
--

INSERT INTO `slnt_event_yajman` (`id`, `description_charge`, `puja_type`, `member_price`, `non_member_price`, `status`, `create_date`, `create_time`) VALUES
(1, 'Pooja Of Yajman', 'Yajman', 200.00, 250.00, 1, '09 Mar, 2021', '04:10:49 PM'),
(2, 'Yajman Pooja', 'Yajman', 500.00, 600.00, 1, '09 Mar, 2021', '04:29:09 PM');

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
(4, NULL, 'Poojas'),
(5, NULL, 'Events'),
(6, NULL, 'Festivals'),
(7, NULL, 'Temple');

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
(4, '4', '697b13e469a4a1e00fe649c6a9105d84.jpg', 'temple', 'image', 'jpg'),
(5, '4', '163b52c8ec9e0347a0a85703a6095bd8.jpg', 'Suryanaryana Pooja', 'image', 'jpg'),
(9, '4', '7ad703acd955bbc001bc157f9ebf7d82.jpg', 'Saraswati', 'image', 'jpg'),
(10, '4', 'd54ac75399cd490017cb2b8542762dfe.jpg', 'Laxmi', 'image', 'jpg'),
(11, '4', '13ba32d8660f5eaafa975a927a65016f.jpg', 'Ganpati', 'image', 'jpg'),
(12, '4', '7b28705d970a90699f5204851a123646.jpg', 'laxminarayan', 'image', 'jpg'),
(13, '6', 'dd0ea550b8c99ff22b13e0dbfc94b0ea.jpg', 'Durga Pooja', 'image', 'jpg'),
(14, '4', 'f72941b35d94ffed835d7f4c90a98713.jpg', 'Ayudha Pooja', 'image', 'jpg');

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
(1, 'Miss', 'vandana', 'badole', 1, '', 'vandanabadole25@gmail.com', '+65', '98692430', 'vandanabadole25@gmail.com', '', 'the santorini', '', '678905', NULL, NULL, 'SLNT40521', 4553, '', NULL, NULL, NULL),
(2, 'Mr', 'Mint', 'Zan', 1, '', 'myintmyintzanster@gmail.com', '+65', '96204777', '123456789', '', 'Blk 263', '', '521221', NULL, NULL, 'SLNT54502', 6892, '', NULL, NULL, NULL),
(3, 'Mr', 'Shrey', 'Rastogi', 1, '', 'shrey.rastogi1995@gmail.com', '+65', '10024440', 'shrey.rastogi1995@gmail.com', '', 'B-6 Bandhu Vihar', 'Dwarka', '110075', NULL, NULL, 'SLNT42793', 1735, '', NULL, NULL, NULL),
(4, 'Prof', 'demo', 'demo', 1, '', 'sohanveer152@gmail.com', '+65', '99999999', 'sohanveer152@gmail.com', '99999999', 'delhi', 'delhi', '110001', NULL, NULL, 'SLNT76414', 8245, '', NULL, NULL, NULL),
(5, 'Mr', 'sanyam', 'rastogi', 1, '', 'sanyamrastogi0@gmail.com', '+65', '70556261', 'sanyamrastogi0@gmail.com', '70556261', 'Delhi 1', 'Delhi 1', '250001', NULL, NULL, 'SLNT74465', 6859, '', NULL, NULL, NULL);

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
  `status` int(11) NOT NULL DEFAULT 0,
  `create_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_membership`
--

INSERT INTO `slnt_membership` (`id`, `title`, `membership_days`, `membership_amount`, `description`, `status`, `create_date`) VALUES
(1, 'Partially associate', 30, 21, '<p>for 1 month</p>', 1, '19-02-2021'),
(2, 'Life Member', 36500, 501, '<p>Life membership is open all only Singaporeans and PR devoteess whose family roots are from the following the states :&nbsp;</p>\r\n\r\n<p>UP&nbsp;</p>\r\n\r\n<p>Maharastra</p>\r\n\r\n<p>Gujarat</p>', 1, '21-02-2021'),
(3, 'LIFETIME MEMBERSHIP', 365, 255, '<p>DEMO MEMBERSHIP FOR LIFETIME MEMBERSHIP</p>', 1, '21-02-2021'),
(4, 'associate', 365, 24, '<p>for 1 year only</p>', 1, '03-03-2021');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_payment_summery`
--

CREATE TABLE `slnt_payment_summery` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `pay_percent` decimal(10,2) NOT NULL,
  `amt_pay` decimal(10,2) NOT NULL,
  `due_amt` decimal(10,2) NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paydate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paytime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paystatus` int(11) NOT NULL DEFAULT 0,
  `paywith` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection_slip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slnt_payment_summery`
--

INSERT INTO `slnt_payment_summery` (`id`, `payment_id`, `total`, `pay_percent`, `amt_pay`, `due_amt`, `booking_id`, `paydate`, `paytime`, `paystatus`, `paywith`, `notes`, `transection_slip`) VALUES
(1, '1613979024', 112.00, 100.00, 112.00, 0.00, '1', '22-02-2021', '13:00:24 PM', 0, '', NULL, ''),
(2, '1613979348', 312.00, 100.00, 312.00, 0.00, '2', '22-02-2021', '13:05:48 PM', 0, '', NULL, ''),
(3, '1614173964', 382.00, 50.00, 191.00, 191.00, '3', '24-02-2021', '19:09:24 PM', 1, 'PayPal', NULL, ''),
(4, '1614250755', 282.00, 100.00, 282.00, 0.00, '4', '25-02-2021', '16:29:15 PM', 0, '', NULL, ''),
(5, '1614258196', 50.00, 100.00, 50.00, 0.00, '5', '25-02-2021', '18:33:16 PM', 1, 'PayPal', NULL, ''),
(6, '1614676012', 87.00, 100.00, 87.00, 0.00, '6', '02-03-2021', '14:36:52 PM', 1, 'PayPal', NULL, ''),
(7, '1614676133', 87.00, 100.00, 87.00, 0.00, '7', '02-03-2021', '14:38:53 PM', 2, 'PayPal', NULL, ''),
(8, '1615600204', 87.00, 100.00, 87.00, 0.00, '8', '13-03-2021', '07:20:04 AM', 2, 'PayPal', NULL, ''),
(9, '1615603906', 112.00, 100.00, 112.00, 0.00, '9', '13-03-2021', '08:21:46 AM', 0, '', NULL, ''),
(10, '1615618944', 112.00, 100.00, 112.00, 0.00, '10', '13-03-2021', '12:32:24 PM', 2, 'PayPal', NULL, ''),
(11, '1615620850', 77.00, 100.00, 77.00, 0.00, '11', '13-03-2021', '13:04:10 PM', 2, 'PayPal', NULL, ''),
(12, '1615621213', 87.00, 100.00, 87.00, 0.00, '12', '13-03-2021', '13:10:13 PM', 2, 'PayPal', NULL, ''),
(13, '1615622648', 87.00, 100.00, 87.00, 0.00, '13', '13-03-2021', '13:34:08 PM', 2, 'PayPal', NULL, ''),
(14, '1618034779', 102.00, 100.00, 102.00, 0.00, '14', '10-04-2021', '11:36:19 AM', 0, '', NULL, ''),
(15, '1618035046', 102.00, 100.00, 102.00, 0.00, '15', '10-04-2021', '11:40:46 AM', 2, 'PayPal', NULL, ''),
(16, '1618053354', 112.00, 100.00, 112.00, 0.00, '16', '10-04-2021', '16:45:54 PM', 0, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `slnt_puja`
--

CREATE TABLE `slnt_puja` (
  `id` int(11) NOT NULL,
  `description_charge` varchar(255) DEFAULT NULL,
  `puja_type` varchar(50) DEFAULT NULL,
  `venue_price` decimal(10,2) NOT NULL,
  `member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `non_member_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 0,
  `kalash_sthapna` int(11) NOT NULL DEFAULT 0,
  `gotra_sankalp` int(11) NOT NULL DEFAULT 0,
  `preeti_bhoge` int(11) NOT NULL DEFAULT 0,
  `light_meal` int(11) NOT NULL DEFAULT 0,
  `catering_menu` int(11) NOT NULL DEFAULT 0,
  `blog_prasads` int(11) NOT NULL DEFAULT 0,
  `yajmans` int(11) NOT NULL DEFAULT 0,
  `refreshment` int(11) NOT NULL DEFAULT 0,
  `temple_charges` int(11) NOT NULL DEFAULT 0,
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
(1, 'KAAL SARP YAGYA', 'Puja', 202.00, 161.00, 202.00, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:16:21 PM', NULL, NULL, '210219013336.jpg', '<p>for feeding to baby</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(2, 'JAAT-KARMA (CHILD BIRTH)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:07:57 PM', NULL, NULL, '210219063020.jpg', '<p>First hair cut of baby</p>\r\n', '2021-03-26', '2021-03-25', '20210325', '20210326', 151.00, 0.00, 1, 1, NULL),
(3, 'HARIDRA LEPAN (Turmeric Ceremony)', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:04:45 PM', NULL, NULL, '210224065944.png', '<p>XYZ</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(4, 'GRIHA SHANTI PUJA', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:03:43 PM', NULL, NULL, '210224072913.png', '<p>xyz</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(5, 'GRIHA PRAVESH', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:02:39 PM', NULL, NULL, '210225042435.png', '<p>sdv</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(6, 'GOPAL (SANTAAN) HOMAM ', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:01:42 PM', NULL, NULL, '210225044211.jpg', '<p>xyz</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(7, 'GANDMOOL NAKSHTRA SHANTI', 'Puja', 51.00, 35.00, 51.00, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:00:09 PM', NULL, NULL, '210225054821.png', '<p>dzd</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(8, 'MEE SIAM WITH TEA OR COFFEE FOR 50 PAX', 'Refreshment', 0.00, 151.00, 151.00, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, '25 Feb, 2021', '05:51:44 PM', NULL, NULL, '210225055144.png', '<p>cads</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(9, 'GARUD PURAN', 'Puja', 501.00, 501.00, 501.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '04:58:52 PM', NULL, NULL, '210225055600.png', '<p>dvav</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(10, 'GANAPATI HOMAM', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '04:57:31 PM', NULL, NULL, '210225062911.png', '<p>&nbsp;b fgd</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(11, 'DURGA SAPTSATI HAVAN', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '04:56:29 PM', NULL, NULL, '210226030103.png', '<p>na</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(12, 'ASTROLOLGY', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '20 Mar, 2021', '04:55:30 PM', NULL, NULL, '210301015105.jpg', '<p>Ganesh Pooja Test (Disable enable)</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 0, 0, NULL),
(13, 'ANNAPRASHANA (BABY\'S FIRST FEEDING)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '04:54:43 PM', NULL, NULL, '210301020901.jpg', '<p>zcv</p>\r\n', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(14, 'AAYUSH HOMAM (BIRTHDAY)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '08 Mar, 2021', '03:40:47 PM', NULL, NULL, '210308034047.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(15, 'KUNDALI PREPARATION', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:59:28 PM', NULL, NULL, '210320052800.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(16, 'KUBER YAGYA', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '05:28:58 PM', NULL, NULL, '210320052858.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(17, 'LAKSHMI POOJA DIWALI', 'Puja', 71.00, 51.00, 71.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:12:33 PM', NULL, NULL, '210320061233.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(18, 'LAKSHMI POOJA-NORMAL DAY', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:13:45 PM', NULL, NULL, '210320061345.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(19, 'MAHA MRITYUNJAY HOMAM', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:14:54 PM', NULL, NULL, '210320061454.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(20, 'MARRIAGE SOLEMINSATION', 'Puja', 201.00, 151.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:19:15 PM', NULL, NULL, '210320061915.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(21, 'MATA KI CHOWKI', 'Puja', 101.00, 101.00, 101.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:24:02 PM', NULL, NULL, '210320062402.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(22, 'MUNDAN OR CHOULA (HAIR CUTTING)', 'Puja', 151.00, 121.00, 151.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:25:06 PM', NULL, NULL, '210320062506.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(23, 'NAAMKARMA (NAMING OF CHILD)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:26:04 PM', NULL, NULL, '210320062604.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(24, 'NAVAGRAHA PUJA', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:26:40 PM', NULL, NULL, '210320062640.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(25, 'NEW CAR PRAYER', 'Puja', 151.00, 121.00, 151.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:27:28 PM', NULL, NULL, '210320062728.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(26, 'NISHKARMANA (THE CHILD\'S FIRST TRIP OUT)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:28:22 PM', NULL, NULL, '210320062822.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(27, 'OFFICE/SHOP/RESTAURENT PUJA', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:32:31 PM', NULL, NULL, '210320063231.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(28, 'RUDRABHISHEK - GROUP', 'Puja', 51.00, 51.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:36:12 PM', NULL, NULL, '210320063612.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(29, 'RUDRABHISHEK (INDIVIDUAL)', 'Puja', 201.00, 151.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:39:13 PM', NULL, NULL, '210320063709.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(30, 'RUDRABHISHEKH - NORMAL DAY', 'Puja', 201.00, 151.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:38:23 PM', NULL, NULL, '210320063823.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(31, 'RUDRABHISHEKH - SHIVRATRI', 'Puja', 151.00, 151.00, 151.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:40:05 PM', NULL, NULL, '210320064004.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(32, 'RUDRABHISHEKH - SHRAVAN MAAS', 'Puja', 151.00, 151.00, 151.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:40:39 PM', NULL, NULL, '210320064039.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(33, 'SAMAAVARTANA (COMPLETING EDUCATION)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:41:15 PM', NULL, NULL, '210320064115.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(34, 'SATYANARAYAN VRAT KATHA - NORMAL DAYS', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:41:55 PM', NULL, NULL, '210320064155.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(35, 'WEDDING SOLEMINSATION', 'Puja', 201.00, 151.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:43:02 PM', NULL, NULL, '210320064302.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(36, 'SHUDHIKARAN (PURIFICATION)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:43:43 PM', NULL, NULL, '210320064343.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(37, 'SUDARSHAN HOMAM', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:44:40 PM', NULL, NULL, '210320064440.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(38, 'SUNDAR KAND PATH', 'Puja', 101.00, 101.00, 101.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:45:40 PM', NULL, NULL, '210320064540.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(39, '10th DAY PRAYER', 'Puja', 51.00, 51.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:46:35 PM', NULL, NULL, '210320064635.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(40, '11th DAY PRAYER', 'Puja', 51.00, 51.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:47:20 PM', NULL, NULL, '210320064720.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(41, '12th DAY PRAYER', 'Puja', 51.00, 51.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:48:02 PM', NULL, NULL, '210320064802.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(42, 'TARPAN', 'Puja', 21.00, 21.00, 21.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:48:56 PM', NULL, NULL, '210320064856.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(43, 'UDYAPAN', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:49:31 PM', NULL, NULL, '210320064931.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(44, 'VASTU SHASTRA CONSULTATION', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:50:14 PM', NULL, NULL, '210320065014.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(45, 'VASTU SHATRA HOMAM', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:50:54 PM', NULL, NULL, '210320065054.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(46, 'VIDHYAARAMBHA (STUDY OF SCRIPTURES)', 'Puja', 51.00, 35.00, 51.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:51:38 PM', NULL, NULL, '210320065138.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(47, 'VIVAH MANDAP', 'Puja', 201.00, 201.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:52:30 PM', NULL, NULL, '210320065230.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(48, 'VIVAHA (MARRIAGE) WITHOUT SOLEMINSATION', 'Puja', 213.00, 201.00, 213.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:56:04 PM', NULL, NULL, '210320065604.jpg', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL),
(49, 'YAGYOPAVEET SANSKAR (SACRED THREAD CEREMONY)', 'Puja', 201.00, 201.00, 201.00, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, '20 Mar, 2021', '06:56:45 PM', NULL, NULL, '210320065645.png', '', '', '', '19700101', '19700101', 0.00, 0.00, 1, 1, NULL);

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
(1, 1, 'Mon', '08:00 AM', '10:00 AM', '19 Feb, 2021', '01:41:19 PM'),
(2, 1, 'Tue', '04:00 AM', '05:00 AM', '19 Feb, 2021', '01:41:30 PM'),
(3, 1, 'Fri', '11:00 AM', '12:00 PM', '19 Feb, 2021', '06:43:37 PM'),
(4, 1, 'Thu', '02:00 AM', '02:30 AM', '19 Feb, 2021', '06:44:16 PM'),
(5, 1, 'Wed', '09:00 AM', '09:30 AM', '19 Feb, 2021', '06:44:36 PM'),
(6, 1, 'Sat', '07:00 AM', '07:30 AM', '19 Feb, 2021', '06:45:06 PM'),
(7, 1, 'Sun', '10:00 AM', '10:30 AM', '19 Feb, 2021', '06:45:19 PM'),
(10, 2, 'Sun', '12:00 AM', '01:00 AM', '20 Feb, 2021', '07:07:06 PM'),
(11, 2, 'Mon', '12:00 AM', '01:00 AM', '20 Feb, 2021', '07:07:16 PM'),
(12, 2, 'Mon', '02:00 AM', '03:00 AM', '20 Feb, 2021', '07:07:23 PM'),
(13, 2, 'Sat', '12:00 AM', '12:30 AM', '20 Feb, 2021', '07:17:35 PM'),
(15, 6, 'Tue', '12:30 AM', '04:00 AM', '25 Feb, 2021', '06:32:31 PM'),
(16, 11, 'Sun', '12:00 AM', '12:30 AM', '26 Feb, 2021', '03:32:22 PM'),
(17, 12, 'Tue', '12:30 AM', '02:30 AM', '01 Mar, 2021', '01:52:57 PM'),
(18, 14, 'Sun', '07:00 AM', '08:00 PM', '08 Mar, 2021', '03:41:40 PM'),
(19, 16, 'Sun', '07:00 AM', '08:00 PM', '20 Mar, 2021', '05:50:56 PM'),
(20, 16, 'Mon', '07:00 AM', '08:00 PM', '20 Mar, 2021', '05:51:27 PM'),
(21, 16, 'Tue', '07:00 AM', '08:00 PM', '20 Mar, 2021', '05:52:25 PM'),
(22, 39, 'Sun', '07:00 AM', '10:00 AM', '25 Mar, 2021', '05:20:21 PM'),
(23, 39, 'Mon', '03:00 PM', '05:00 PM', '26 Mar, 2021', '12:13:15 PM'),
(24, 39, 'Tue', '01:30 PM', '09:00 PM', '26 Mar, 2021', '12:23:20 PM');

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
(1, 1, 'Puja Samagri', 'flowers  kumkum  chandan  rice  bettle nut  thread  etc', 61.00, '19 Feb, 2021', '01:37:36 PM', 'Gram', 20.00),
(2, 1, 'Havan Samagri', 'wood sticks kund  havan item  cahrcoal', 21.00, '19 Feb, 2021', '01:38:41 PM', 'Gram', 5.00),
(3, 2, 'Puja Samagri', 'Pooja Samagri', 100.00, '22 Feb, 2021', '02:49:30 PM', 'P (Pieces)', 10.00),
(4, 2, 'Puja Samagri', 'Woodsticks', 10.00, '24 Feb, 2021', '07:10:48 PM', 'Kg', 1.00),
(5, 49, 'Puja Samagri', 'Rice', 5.00, '25 Mar, 2021', '05:13:26 PM', 'Kg', 1.00),
(6, 49, 'Puja Samagri', 'KumKum', 1.00, '25 Mar, 2021', '05:14:02 PM', 'Gram', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `slnt_type_interest`
--

CREATE TABLE `slnt_type_interest` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT 0,
  `cat_it` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slnt_user_membership`
--

CREATE TABLE `slnt_user_membership` (
  `id` int(11) NOT NULL,
  `sel_member_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `membership_id` varchar(255) NOT NULL,
  `membership_days` varchar(50) NOT NULL,
  `membership_title` varchar(255) NOT NULL,
  `gende` varchar(50) NOT NULL,
  `membership_amount` decimal(10,2) NOT NULL,
  `membership_description` text NOT NULL,
  `expr_status` int(11) NOT NULL DEFAULT 0,
  `membership_expire` varchar(50) NOT NULL,
  `membership_buy` varchar(50) NOT NULL,
  `membership_create_date` varchar(50) NOT NULL,
  `membership_create_time` varchar(50) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `pay_with` varchar(255) NOT NULL,
  `membership_buy_id` varchar(255) NOT NULL,
  `pay_status` int(11) NOT NULL DEFAULT 0,
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
  `final_submit_status` int(11) NOT NULL DEFAULT 0,
  `transection_slip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slnt_user_membership`
--

INSERT INTO `slnt_user_membership` (`id`, `sel_member_id`, `user_id`, `membership_id`, `membership_days`, `membership_title`, `gende`, `membership_amount`, `membership_description`, `expr_status`, `membership_expire`, `membership_buy`, `membership_create_date`, `membership_create_time`, `transection_id`, `pay_with`, `membership_buy_id`, `pay_status`, `name_as_nric`, `nric_passport`, `date_of_birth`, `nationality`, `address_1`, `address_2`, `home_tel`, `mobile`, `email`, `marital_status`, `mobile_code`, `name_title`, `days`, `month`, `year`, `nationality_other`, `postal_code`, `home_tel_code`, `occupation`, `name_of_firm`, `emp_address_1`, `emp_postalcode`, `emp_tel`, `emp_email`, `organization_name`, `membership_position`, `serves_as_volunterrs`, `interest`, `interest_other`, `porposer_name`, `secondery_name`, `terms_1`, `status`, `userfile`, `final_submit_status`, `transection_slip`) VALUES
(1, 1, 'SLNT42793', 'SPSLNT20210224000001', '30', 'Partially associate', 'Male', 21.00, '<p>for 1 month</p>', 0, '20210326', '20210224', '24-02-2021', '07:48:41 AM', '202102241614152972', 'Offline Payment', '', 1, 'Shrey Rastogi', 'L8750320', '', 'Singaporean', 'B-6 Bandhu Vihar', 'Dwarka', '', '10024440', 'shrey.rastogi1995@gmail.com', 'Married', '+65', 'Mr', 4, 5, 1964, '', '110075', '+65', 'CEO', 'Shrey Rastogi', 'B-6 Bandhu Vihar, Dwarka', '110075', '88888888', 'shrey.rastogi1995@gmail.com', '', '', '', '', ' ', '', '', '', 1, '', 1, 'c2b48657fd8555700117b84df5b6476a.png'),
(2, 1, 'SLNT54502', 'SPSLNT20210405000002', '30', 'Partially associate', 'Female', 21.00, '<p>for 1 month</p>', 0, '20210505', '20210405', '05-04-2021', '07:46:05 AM', '202104051617608872', 'Offline Payment', '', 1, 'myint zan', '12121212', '', 'Singaporean', 'Blk 23', '#12-567', '23232323', '96204777', 'myintmyintzanster@gmail.com', 'Married', '+65', 'Mr', 12, 4, 2010, '', '521221', '+65', 'test', 'test', 'Blk 221', '521221', '44545459', 'myintmyintzanster@gmail.com', 'test', 'test', 'No', '', ' ', 'test', 'test', '', 1, '', 1, 'bf79b429c2e6e82da7e50ad41463867e.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_settings`
--

CREATE TABLE `tbl_admin_settings` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
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
  `level` int(11) NOT NULL DEFAULT 0,
  `cat_it` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `status`, `level`, `cat_it`) VALUES
(1, 'General', '1', 0, 0),
(2, 'Chatt Donation', '1', 0, 0),
(3, 'Chatt Donation', '1', 0, 0);

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
(1, 1, '<p>The Shree Lakshminarayan Temple is Singapore&rsquo;s first dedicated place of worship for North Indian Hindus. Its name derives from a combination of the names of its main deities: &ldquo;Lakshmi&rdquo; and &ldquo;Narayan&rdquo; (Vishnu). Lakshmi is the goddess of wealth and the consort of Vishnu, while the latter is the deity responsible for the preservation and protection of the universe.</p>\r\n\r\n<p>The foundation stone for the Shree Lakshminarayan Temple was laid in 1960. It was not without great difficulties that the temple was completed around the mid-1960s with the support of and donation from almost 10,000 North Indian Hindus from all classes. Prior to this, all festivals celebrated by the aforementioned community were organised by the Singapore North Indian Hindu Association and held at different venues.</p>\r\n\r\n<p>The history of this community goes back to the time when Indian herdsmen from the northern and north-eastern states of Uttar Pradesh and Bihar arrived and settled along the Rochor River at the beginning of the 20th century due to the extensive cattle trade in the area. The herdsmen worshipped Krishna, an incarnation of Vishnu, who was a cowherd. The women of these communities visited the temple every Tuesday afternoon to perform puja (worship) and offer fruits and flowers to the deities.</p>\r\n\r\n<p>The bright red pointed domes atop the building mark it out as a temple. It is a conserved building with distinctive red and white patterning on its fa&ccedil;ade. Besides its namesake deities, the temple also houses other Hindu deities such as Shiva, Kali, Ganesha and Hanuman.</p>\r\n'),
(3, 4, '<p dir=\"ltr\" style=\"text-align:justify\">Welcome to www.mgimeerut.com. www.mgimeerut.com offers its types of assistance to its clients on the grounds of specific guidelines and conditions as determined underneath. Visiting www.mgimeerut.com site and benefiting administrations of www.mgimeerut.com would consider that you acknowledge these terms and conditions. If it&#39;s not too much trouble peruse and get them. You are limited by these terms and conditions for the administrations that www.mgimeerut.com gives you. Every one of these terms and condition are relevant to all the individuals of the present, past, and future. Regardless of whether you have utilized this site now and then back, still you are limited by these principles.</p>\r\n\r\n<h3 style=\"color:rgb(182, 182, 182); font-style:normal; text-align:left\"><span style=\"color:rgb(0, 0, 0)\">Definitions</span></h3>\r\n\r\n<p style=\"text-align:justify\">&quot;Agreement&quot; means the terms and conditions as mentioned here including all schedules, appendices, annexure, privacy policy, and will include the references to this Agreement as amended, cancelled, supplemented, varied or replaced from time to time.</p>\r\n\r\n<p style=\"text-align:justify\">The logo/picture of www.mgimeerut.com on the landing page of the site and different pages is enrolled by www.mgimeerut.com and can&#39;t be utilized or conveyed or circulated without the particular and composed consent of www.mgimeerut.com.</p>\r\n\r\n<p style=\"text-align:justify\">The data that has been put on the site www.mgimeerut.com is just implied for the clients to know our highlights and for our business that benefits our customers. You are approved distinctly to utilize the site for your own and have a restricted permit to get to. The business utilization of this site, utilization of any item posting, portrayal, any replicating, copying and selling any subordinate of the site is carefully illegal. The utilization of surrounding procedures to encase any logo or trademark including pictures, content, and format of www.mgimeerut.com isn&#39;t permitted without the assent of us.</p>\r\n\r\n<h3 style=\"color:rgb(182, 182, 182); font-style:normal; text-align:left\"><span style=\"color:rgb(0, 0, 0)\">Disclaimer</span></h3>\r\n\r\n<p style=\"text-align:justify\">www.mgimeerut.com, its representatives, writers and or employees will in no circumstances be liable to any person, institution, groups of people for any direct or indirect loss arising out any delay, incomplete or unacceptable work. www.mgimeerut.com and its employees do not undertake any responsibility for clearing the exams or course work. www.mgimeerut.com is only a research support service wherein research support is provided to persons who are willing to take this service.</p>\r\n'),
(5, 2, '<p style=\"text-align: justify;\">Mahalaxmi Group of Institutions is a college builds on the values of proper knowledge and experienced guidance. With a vision to become India&rsquo;s leading college, we aim to nurture tomorrow&rsquo;s technical leaders, to build prosperous future for those who have vested their trust in us.</p>\r\n'),
(6, 3, '<p>At Mahalaxmi Group of Institutions, we dare our students to dare to dream big dreams, to not set limits on the possibilities. If we are to instill this spirit to our students how can we demand anything less from ourselves? We will provide world-class quality education and take care of building.</p>\r\n'),
(7, 5, '<p style=\"text-align:justify\">&ldquo;I take the pleasure in welcoming you to Mahalaxmi Group of Institution&nbsp;(MGI), an institution dedicated to the proper growth and development of each and every student for a better career prospect.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The institution is all set to bring out the potential within each student and provide proper guidance so that their potentials can be utilized to make them future capable of meeting any challenge that will be faced by them after leaving the college. The college provides full support to improve their communication skills, critical thinking abilities, moral values and sense of responsibility. All efforts are made to improve the creativity and problem solving abilities of the students so that they can contribute their best to the society and the country.</p>\r\n\r\n<p style=\"text-align:justify\">Learning and growth at MGI are not confined to classroom and academic experience. Students participate in rich and varied extracurricular and co- curricular activities too. Our aim is to achieve global reorganization as&nbsp;&nbsp; a leading player in the field of education. Our success in this endeavor has the potential of making our institute one of the most attractive destination in the world of acquiring education.</p>\r\n\r\n<p style=\"text-align:justify\">I wish all the best to all the prospective students.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>DR. MOHIT YADAV</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>DIRECTOR</strong></p>\r\n'),
(8, 6, '<p>Mgimeerut.com&nbsp;</p>\r\n'),
(9, 7, '<h2><u><strong>For Career Option</strong></u></h2>\r\n\r\n<p><strong>Email Us:- hrmgi.meerut@gmail.com</strong></p>\r\n\r\n<p><strong>Call Us;- 7060017403</strong></p>\r\n'),
(10, 8, '<p>The Shree Lakshminarayan Temple is Singapore&rsquo;s first dedicated place of worship for North Indian Hindus. Its name derives from a combination of the names of its main deities: &ldquo;Lakshmi&rdquo; and &ldquo;Narayan&rdquo; (Vishnu). Lakshmi is the goddess of wealth and the consort of Vishnu, while the latter is the deity responsible for the preservation and protection of the universe.</p>\r\n\r\n<p>The foundation stone for the Shree Lakshminarayan Temple was laid in 1960. It was not without great difficulties that the temple was completed around the mid-1960s with the support of and donation from almost 10,000 North Indian Hindus from all classes. Prior to this, all festivals celebrated by the aforementioned community were organised by the Singapore North Indian Hindu Association and held at different venues.</p>\r\n\r\n<p>The history of this community goes back to the time when Indian herdsmen from the northern and north-eastern states of Uttar Pradesh and Bihar arrived and settled along the Rochor River at the beginning of the 20th century due to the extensive cattle trade in the area. The herdsmen worshipped Krishna, an incarnation of Vishnu, who was a cowherd. The women of these communities visited the temple every Tuesday afternoon to perform puja (worship) and offer fruits and flowers to the deities.</p>\r\n\r\n<p>The bright red pointed domes atop the building mark it out as a temple. It is a conserved building with distinctive red and white patterning on its fa&ccedil;ade. Besides its namesake deities, the temple also houses other Hindu deities such as Shiva, Kali, Ganesha and Hanuman.</p>\r\n'),
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
  `add_by` int(11) NOT NULL DEFAULT 0,
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
  `lastupdate_date` timestamp NOT NULL DEFAULT current_timestamp()
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
(142, 1, '0777eaef2f1c1276eec75937b88fd879.jpg', 'Home Banner'),
(143, 20, '3145449c8bb1df1767e708ac1d67129b.jpg', 'Home intro'),
(144, 4, 'dc921e28ad5dba777d4c4ce5cf5b9690.jpg', 'About'),
(145, 0, '0efdb75b3234bb726038562098820048.jpg', 'Image 1'),
(146, 0, '11c136a614b3d2303b1231cbf9582b98.png', 'df ad fd');

-- --------------------------------------------------------

--
-- Table structure for table `temple_refreshment_booking`
--

CREATE TABLE `temple_refreshment_booking` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `choose_type` varchar(255) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
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
  `temple_notes` text DEFAULT NULL,
  `admin_post_date` varchar(255) DEFAULT NULL,
  `admin_post_time` varchar(255) DEFAULT NULL,
  `booking_for` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temple_refreshment_booking`
--

INSERT INTO `temple_refreshment_booking` (`id`, `user_id`, `choose_type`, `purpose`, `choose_date`, `choose_start_time`, `choose_end_time`, `no_of_guests`, `catering`, `name_prefix`, `first_name`, `last_name`, `email`, `mobile_code`, `mobile`, `office_code`, `office_no`, `choose_floor`, `post_date`, `post_time`, `status`, `temple_notes`, `admin_post_date`, `admin_post_time`, `booking_for`) VALUES
(1, 'SLNT76414', '1', 'some nots of', '2021-04-01', '20:39', '06:39', '400', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:15:23 PM', 0, NULL, NULL, NULL, ''),
(2, 'SLNT76414', '1', 'some', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:21:34 PM', 0, NULL, NULL, NULL, ''),
(3, 'SLNT76414', '1', 'some', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:22:02 PM', 0, NULL, NULL, NULL, ''),
(4, 'SLNT76414', '1', 'someg gh gfh fg hgfh gf', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:24:20 PM', 0, NULL, NULL, NULL, ''),
(5, 'SLNT76414', '1', 'someg gh gfh fg hgfh gf', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:26:19 PM', 0, NULL, NULL, NULL, ''),
(6, 'SLNT76414', '1', 'someg gh gfh fg hgfh gf', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:27:08 PM', 0, NULL, NULL, NULL, ''),
(7, 'SLNT76414', '1', 'someg gh gfh fg hgfh gf', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:35:19 PM', 0, NULL, NULL, NULL, ''),
(8, 'SLNT76414', '1', 'someg gh gfh fg hgfh gf', '2021-03-12', '18:54', '00:51', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-12', '13:36:37 PM', 2, '', '2021-03-14', '07:29:52 AM', ''),
(9, 'SLNT76414', '1', 'test', '2021-03-20', '08:00', '10:00', '50', '1', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\"]', '2021-03-12', '14:47:43 PM', 1, '', '2021-03-14', '07:27:49 AM', ''),
(10, '', '1', 'Testing', '2021-03-18', '13:08', '17:08', '250', '1', 'Mr', 'Sanyam', 'Rastogi', 'sanyamrastogi0@gmail.com', NULL, '70556260', NULL, '70556260', '[\"First Floor\",\"Second Floor\"]', '2021-03-13', '06:32:51 AM', 0, NULL, NULL, NULL, ''),
(11, 'SLNT74465', '1', 'hello', '2021-03-15', '02:43', '18:43', '400', '1', 'Mr', 'sanyam', 'rastogi', 'sanyamrastogi0@gmail.com', NULL, '70556260', NULL, '70556260', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-03-13', '07:11:24 AM', 0, NULL, NULL, NULL, ''),
(12, '', '1', 'test', '2021-03-20', '08:00', '10:00', '50', '1', 'Mr', 'MYINT', 'Zna', 'zanzan@gmail.com', NULL, '96050495', NULL, '11111111', '[\"First Floor\"]', '2021-03-13', '12:41:40 PM', 1, 'hello', '2021-03-14', '07:29:14 AM', ''),
(13, 'SLNT76414', '1', 'NA', '2021-04-28', '13:51', '13:51', '200', '0', 'Prof', 'demo', 'demo', 'sohanveer152@gmail.com', NULL, '99999999', NULL, '99999999', '[\"First Floor\",\"Second Floor\",\"Third Floor\",\"Kitchen \\/ Fourth Floor\"]', '2021-04-10', '06:19:52 AM', 0, NULL, NULL, NULL, 'Yes');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminblogs`
--
ALTER TABLE `adminblogs`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `admin_login_history`
--
ALTER TABLE `admin_login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_time_table`
--
ALTER TABLE `event_time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `family_list`
--
ALTER TABLE `family_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pooja_block`
--
ALTER TABLE `pooja_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ref_styl_siisgnment`
--
ALTER TABLE `ref_styl_siisgnment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `slnt_arrangedecoration`
--
ALTER TABLE `slnt_arrangedecoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slnt_bhog_catering`
--
ALTER TABLE `slnt_bhog_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slnt_bhog_prasad`
--
ALTER TABLE `slnt_bhog_prasad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_block_all_pooja_date`
--
ALTER TABLE `slnt_block_all_pooja_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slnt_block_all_pooja_date_staff`
--
ALTER TABLE `slnt_block_all_pooja_date_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slnt_block_date`
--
ALTER TABLE `slnt_block_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slnt_booking_slot`
--
ALTER TABLE `slnt_booking_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slnt_booking_slot_offline`
--
ALTER TABLE `slnt_booking_slot_offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slnt_ceremonies`
--
ALTER TABLE `slnt_ceremonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_bhog_prasad`
--
ALTER TABLE `slnt_ceremonies_bhog_prasad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_catering`
--
ALTER TABLE `slnt_ceremonies_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_samagri`
--
ALTER TABLE `slnt_ceremonies_samagri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slnt_ceremonies_time`
--
ALTER TABLE `slnt_ceremonies_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_crmn_booking`
--
ALTER TABLE `slnt_crmn_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slnt_deco_service`
--
ALTER TABLE `slnt_deco_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slnt_donation`
--
ALTER TABLE `slnt_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_events_time`
--
ALTER TABLE `slnt_events_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slnt_event_booking`
--
ALTER TABLE `slnt_event_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slnt_event_yajman`
--
ALTER TABLE `slnt_event_yajman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slnt_gallery_categories`
--
ALTER TABLE `slnt_gallery_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slnt_img_gallery`
--
ALTER TABLE `slnt_img_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slnt_member`
--
ALTER TABLE `slnt_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slnt_membership`
--
ALTER TABLE `slnt_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slnt_payment_summery`
--
ALTER TABLE `slnt_payment_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slnt_puja`
--
ALTER TABLE `slnt_puja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `slnt_puja_time`
--
ALTER TABLE `slnt_puja_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slnt_samagri`
--
ALTER TABLE `slnt_samagri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slnt_type_interest`
--
ALTER TABLE `slnt_type_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slnt_user_membership`
--
ALTER TABLE `slnt_user_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin_settings`
--
ALTER TABLE `tbl_admin_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `temple_refreshment_booking`
--
ALTER TABLE `temple_refreshment_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
