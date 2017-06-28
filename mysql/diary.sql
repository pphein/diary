-- phpMyAdmin SQL Dump
-- version 4.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 11:25 PM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 7.1.5-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` bigint(20) unsigned NOT NULL,
  `name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `comfirmPassword` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE IF NOT EXISTS `user_books` (
  `ID` bigint(20) unsigned NOT NULL,
  `book_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `book_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `book_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `book_title` text NOT NULL,
  `book_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `book_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `book_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `book_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `book_content_filtered` longtext NOT NULL,
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `book_type` varchar(20) NOT NULL DEFAULT 'post',
  `book_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_books`
--

INSERT INTO `user_books` (`ID`, `book_author`, `book_date`, `book_date_gmt`, `book_title`, `book_status`, `comment_status`, `ping_status`, `book_name`, `to_ping`, `book_modified`, `book_modified_gmt`, `book_content_filtered`, `guid`, `menu_order`, `book_type`, `book_mime_type`, `comment_count`) VALUES
(1, 0, '2017-06-25 21:09:33', '0000-00-00 00:00:00', '', 'publish', 'open', 'open', 'ello', '', '2017-06-25 21:09:33', '0000-00-00 00:00:00', '', '', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_lists`
--

CREATE TABLE IF NOT EXISTS `user_lists` (
  `ID` bigint(20) unsigned NOT NULL,
  `list_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `list_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_content` longtext NOT NULL,
  `list_title` text NOT NULL,
  `list_excerpt` text NOT NULL,
  `list_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `list_password` varchar(20) NOT NULL DEFAULT '',
  `list_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `list_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_content_filtered` longtext NOT NULL,
  `list_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `list_type` varchar(20) NOT NULL DEFAULT 'post',
  `list_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_lists`
--

INSERT INTO `user_lists` (`ID`, `list_author`, `list_date`, `list_date_gmt`, `list_content`, `list_title`, `list_excerpt`, `list_status`, `comment_status`, `ping_status`, `list_password`, `list_name`, `to_ping`, `pinged`, `list_modified`, `list_modified_gmt`, `list_content_filtered`, `list_parent`, `guid`, `menu_order`, `list_type`, `list_mime_type`, `comment_count`) VALUES
(5, 0, '2017-06-27 22:24:46', '0000-00-00 00:00:00', 'fsdfasdf', '', '', 'publish', 'open', 'open', '', '', '', '', '2017-06-27 22:24:46', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_photos`
--

CREATE TABLE IF NOT EXISTS `user_photos` (
  `ID` bigint(20) unsigned NOT NULL,
  `photo_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `photo_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo_title` text NOT NULL,
  `photo_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `photo_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `photo_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo_content_filtered` longtext NOT NULL,
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `photo_type` varchar(20) NOT NULL DEFAULT 'post',
  `photo_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE IF NOT EXISTS `user_posts` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 0, '2017-06-27 21:17:58', '0000-00-00 00:00:00', 'asdfsadfsvxcvxcvdf', '', '', 'publish', 'open', 'open', '', '', '', '', '2017-06-27 21:17:58', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(2, 0, '2017-06-27 21:30:19', '0000-00-00 00:00:00', 'asdfsadfasdfsadf', '', '', 'publish', 'open', 'open', '', '', '', '', '2017-06-27 21:30:19', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(3, 0, '2017-06-27 21:54:08', '0000-00-00 00:00:00', 'asdfasdfasdfasdfasdfasdfsa\r\nadsfasdfasdfasdfasdf\r\nasdfasdfasdfasdfasdf', '', '', 'publish', 'open', 'open', '', '', '', '', '2017-06-27 21:54:08', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0),
(4, 0, '2017-06-27 21:54:28', '0000-00-00 00:00:00', 'á€±á€¡á€¬á€„á€¹á€»á€™á€„á€¹á€±á€€á€ºá€¬á€¹á€»á€€á€¬á€¸á€žá€°á€™á€ºá€¬á€¸', '', '', 'publish', 'open', 'open', '', '', '', '', '2017-06-27 21:54:28', '0000-00-00 00:00:00', '', 0, '', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_songs`
--

CREATE TABLE IF NOT EXISTS `user_songs` (
  `ID` bigint(20) unsigned NOT NULL,
  `song_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `song_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `song_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `song_title` text NOT NULL,
  `song_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `song_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `song_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `song_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `song_content_filtered` longtext NOT NULL,
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `song_type` varchar(20) NOT NULL DEFAULT 'post',
  `song_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`name`),
  ADD KEY `user_nicename` (`comfirmPassword`),
  ADD KEY `ID` (`ID`,`name`,`password`,`comfirmPassword`,`email`,`user_url`,`user_registered`,`user_activation_key`,`user_status`,`display_name`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`book_name`),
  ADD KEY `type_status_date` (`book_type`,`book_status`,`book_date`,`ID`),
  ADD KEY `post_author` (`book_author`);

--
-- Indexes for table `user_lists`
--
ALTER TABLE `user_lists`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`list_name`),
  ADD KEY `type_status_date` (`list_type`,`list_status`,`list_date`,`ID`),
  ADD KEY `post_parent` (`list_parent`),
  ADD KEY `post_author` (`list_author`);

--
-- Indexes for table `user_photos`
--
ALTER TABLE `user_photos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`photo_name`),
  ADD KEY `type_status_date` (`photo_type`,`photo_status`,`photo_date`,`ID`),
  ADD KEY `post_author` (`photo_author`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `user_songs`
--
ALTER TABLE `user_songs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`song_name`),
  ADD KEY `type_status_date` (`song_type`,`song_status`,`song_date`,`ID`),
  ADD KEY `post_author` (`song_author`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_books`
--
ALTER TABLE `user_books`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_lists`
--
ALTER TABLE `user_lists`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_songs`
--
ALTER TABLE `user_songs`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
