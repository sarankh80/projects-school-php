-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 01:03 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `imge` varchar(200) DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ordering` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `ordering`, `date`) VALUES
(1, 'ABOUT', 1, 1, '2019-07-05 00:00:00'),
(2, 'OUR COURSES', 1, 2, '2019-07-26 09:43:58'),
(6, 'Pages', 1, 2, '2019-08-24 23:05:04'),
(5, 'safdsf', 1, 2, '2019-08-24 23:04:06'),
(7, 'Saram amdin', 1, 2, '2019-08-24 23:05:19'),
(10, 'Saran', 1, 2, '2019-08-29 23:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `sub_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `image`, `title`, `description`, `status`, `date`, `sub_id`) VALUES
(1, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:18:24', 1),
(2, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:18:43', 1),
(3, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:19:19', 1),
(4, 1, 'logo.gif', 'sfgsdfdfsdf', 'dsfsdfsdfsdfsdf', 1, '2019-08-29 23:19:33', 1),
(5, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:23:09', 1),
(6, 1, 'logo.gif', 'sfgsdfdfsdf', 'dsfsdfsdfsdfsdf', 1, '2019-08-29 23:24:35', 1),
(7, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:27:31', 1),
(8, 1, 'f-right.jpg', 'dfsdfsdfsdfs', 'fdsdfsdfdsfsdf', 1, '2019-08-29 23:27:36', 1),
(15, 0, '', 'admin ', '', 1, '2019-08-29 23:39:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `tile` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` text,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `button` varchar(100) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `image`, `title`, `description`, `button`, `status`, `date`) VALUES
(1, 'banner1.jpg', 'Slider', 'sara khan sarn ', 'on', 1, '2019-08-07 00:06:35'),
(2, 'banner2.jpg', 'Slider 2', 'Image banner to slide ', 'on', 1, '2019-08-07 00:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

CREATE TABLE `sponser` (
  `id` int(10) UNSIGNED NOT NULL,
  `tile` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ordering` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `cat_id`, `name`, `status`, `ordering`, `date`) VALUES
(1, 1, 'Admin Saran Khan', 1, 1, '2019-08-25 13:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `image`, `group`, `status`, `date`) VALUES
(1, 'saran', 'saran@gmail.com', '12345', '086888172', NULL, 1, 1, '2019-07-05 00:00:00'),
(2, 'Sopheak', 'sopheak@gmail.com', '12345', '098987766', NULL, 1, 1, '2019-07-05 00:00:00'),
(3, 'hong', 'hong@gmail.com', '12345', '09878878', 'user.png', 1, 1, '2019-07-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponser`
--
ALTER TABLE `sponser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sponser`
--
ALTER TABLE `sponser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
