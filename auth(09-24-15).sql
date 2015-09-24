-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 10:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4d6e4b14e25308000b8f8fd4dd9ef894', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.99 Safari/537.36', 1443077861, ''),
('af22370b83267a4c65fcb8b0f4ff663e', '172.28.58.137', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1443081418, ''),
('ad07f49c05c9d111c3e205d4d5bbc0cd', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:41.0) Gecko/20100101 Firefox/41.0', 1443083876, 'a:17:{s:9:"user_data";s:0:"";s:8:"username";s:6:"user01";s:5:"email";s:16:"user01@gmail.com";s:8:"group_id";s:3:"100";s:12:"user_picture";s:0:"";s:13:"user_filename";s:0:"";s:13:"user_pathname";s:0:"";s:9:"user_name";s:5:"chevy";s:13:"user_lastname";s:11:"gwapo kaayu";s:8:"user_bio";s:0:"";s:8:"user_age";s:2:"15";s:14:"user_education";s:0:"";s:12:"user_contact";s:7:"9999999";s:10:"user_skype";s:17:"skypeeditor@skype";s:13:"user_speaking";s:1:"0";s:15:"user_references";s:0:"";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `iso` char(2) NOT NULL DEFAULT '',
  `printable_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `printable_name`, `iso3`, `numcode`) VALUES
(165, 'PA', 'Panama', 'PAN', 591),
(166, 'PG', 'Papua New Guinea', 'PNG', 598),
(167, 'PY', 'Paraguay', 'PRY', 600),
(168, 'PE', 'Peru', 'PER', 604),
(169, 'PH', 'Philippines', 'PHL', 608);

-- --------------------------------------------------------

--
-- Table structure for table `course1_enrollees`
--

CREATE TABLE IF NOT EXISTS `course1_enrollees` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 1',
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time(6) NOT NULL,
  `hours` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `comment` varchar(55555) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Enrolled'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course1_enrollees`
--

INSERT INTO `course1_enrollees` (`id`, `course`, `username`, `date`, `time_start`, `hours`, `price`, `comment`, `teacher`, `status`) VALUES
(24, 'Course Name 1', 'user01', '2015-09-11', '09:00:00.000000', 1, 23, '', '', 'Enrolled'),
(25, 'Course Name 1', 'user01', '2015-09-12', '09:00:00.000000', 1, 23, '', '', 'Enrolled'),
(26, 'Course Name 1', 'user01', '2015-09-10', '09:00:00.000000', 1, 23, '', '', 'Enrolled'),
(27, 'Course Name 1', 'user01', '2015-09-11', '09:00:00.000000', 1, 23, '', '', 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `course2_enrollees`
--

CREATE TABLE IF NOT EXISTS `course2_enrollees` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 2',
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time(6) NOT NULL,
  `hours` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `comment` varchar(55555) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Enrolled'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course2_enrollees`
--

INSERT INTO `course2_enrollees` (`id`, `course`, `username`, `date`, `time_start`, `hours`, `price`, `comment`, `teacher`, `status`) VALUES
(1, 'Course Name 2', 'admin1', '2015-07-08', '03:00:00.000000', 1, 1, '', '', 'Enrolled'),
(2, 'Course Name 2', 'admin1', '2015-07-08', '03:00:00.000000', 1, 1, '', '', 'Enrolled'),
(3, 'Course Name 2', 'user01', '2015-06-17', '09:00:00.000000', 23, 3, '', '', 'Enrolled'),
(4, 'Course Name 2', 'admin1', '2015-06-09', '06:00:00.000000', 1, 1, '', '', 'Enrolled'),
(5, 'Course Name 2', 'user01', '2015-06-09', '06:00:00.000000', 1, 1, '', '', 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `course3_enrollees`
--

CREATE TABLE IF NOT EXISTS `course3_enrollees` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 3',
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time(6) NOT NULL,
  `hours` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `comment` varchar(55555) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Enrolled'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course3_enrollees`
--

INSERT INTO `course3_enrollees` (`id`, `course`, `username`, `date`, `time_start`, `hours`, `price`, `comment`, `teacher`, `status`) VALUES
(1, 'Course Name 3', 'admin1', '2015-07-08', '07:00:00.000000', 5, 5, '', '', 'Enrolled'),
(2, 'Course Name 3', 'user01', '2015-07-08', '07:00:00.000000', 5, 5, '', '', 'Enrolled'),
(3, 'Course Name 3', 'user01', '2015-07-08', '07:00:00.000000', 5, 5, 'try', 'Mr. Banico', 'Waiting for confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(5) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'course name 1'),
(2, 'course name 2'),
(3, 'course name 3'),
(4, 'course name 4'),
(5, 'choose schedule');

-- --------------------------------------------------------

--
-- Table structure for table `course_1`
--

CREATE TABLE IF NOT EXISTS `course_1` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 1',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` int(5) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_1`
--

INSERT INTO `course_1` (`id`, `course`, `date`, `time`, `hours`, `price`) VALUES
(1, 'Course Name 1', '2015-06-17', '09:00:00', 23, 3.00),
(2, 'Course Name 1', '2015-08-25', '05:00:00', 3, 5.00),
(3, 'Course Name 1', '2015-06-25', '06:00:00', 2, 2.00),
(5, 'Course Name 1', '2015-07-08', '03:00:00', 1, 1.00),
(6, 'course name 1 Beginner', '2015-09-11', '09:00:00', 1, 23.00),
(7, 'course name 1 Beginner', '2015-09-09', '09:00:00', 1, 23.00),
(8, 'course name 1 Beginner', '2015-09-12', '09:00:00', 1, 23.00),
(9, 'course name 1 Beginner', '2015-09-09', '09:00:00', 1, 23.00),
(10, 'course name 1 Beginner', '2015-09-10', '09:00:00', 1, 23.00),
(12, 'course name 1 Beginner', '2015-09-17', '09:00:00', 1, 23.00),
(13, 'course name 1 Beginner', '2015-09-16', '09:00:00', 1, 23.00),
(14, 'course name 1 Beginner', '2015-09-24', '09:00:00', 1, 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `course_2`
--

CREATE TABLE IF NOT EXISTS `course_2` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 2',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` int(5) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_2`
--

INSERT INTO `course_2` (`id`, `course`, `date`, `time`, `hours`, `price`) VALUES
(4, 'Course Name 2', '2015-06-09', '06:00:00', 1, 1.00),
(5, 'course name 1 Beginner', '2015-09-25', '09:00:00', 1, 23.00),
(6, 'course name 1 Beginner', '2015-09-19', '09:00:00', 1, 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `course_3`
--

CREATE TABLE IF NOT EXISTS `course_3` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT 'Course Name 3',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` int(5) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_3`
--

INSERT INTO `course_3` (`id`, `course`, `date`, `time`, `hours`, `price`) VALUES
(4, 'Course Name 3', '2015-09-18', '07:00:00', 5, 5.00),
(5, 'course name 1 Beginner', '2015-09-24', '09:00:00', 1, 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `enrollees`
--

CREATE TABLE IF NOT EXISTS `enrollees` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `course_no` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time(6) NOT NULL,
  `hours` int(5) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_skype` varchar(50) DEFAULT NULL,
  `user_contact` int(20) DEFAULT NULL,
  `membership` varchar(15) DEFAULT 'registered',
  `comment` varchar(55555) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `schedule` varchar(5) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollees`
--

INSERT INTO `enrollees` (`id`, `course`, `course_no`, `username`, `date`, `time_start`, `hours`, `price`, `email`, `user_skype`, `user_contact`, `membership`, `comment`, `teacher`, `status`, `schedule`) VALUES
(10, 'Beginner', 5, 'chevy', '2015-09-13', '10:30:00.000000', NULL, NULL, 'chevz25@gamil.com', 'chevz@skype', 9999999, 'visitor', 'test try', 'editor1', 'Cancel', 'No'),
(11, '', 0, 'admin1', '2015-09-17', '09:00:00.000000', 1, 23, NULL, NULL, NULL, 'registered', '', '', 'Enrolled', 'No'),
(12, '', 1, 'admin1', '2015-09-17', '09:00:00.000000', 1, 23, NULL, NULL, NULL, 'registered', 'tryy', 'Mr blank', 'Aprroved', 'No'),
(13, '', 2, 'admin1', '2015-09-25', '09:00:00.000000', 1, 23, NULL, NULL, NULL, 'registered', '', '', 'Enrolled', 'No'),
(14, '', 3, 'admin1', '2015-09-18', '07:00:00.000000', 5, 5, NULL, NULL, NULL, 'registered', '', '', 'Enrolled', 'No'),
(15, 'Beginner', 5, 'user01', '2015-08-14', '01:30:00.000000', NULL, NULL, NULL, NULL, NULL, 'registered', '', 'editor1', 'Waiting for confirmation', 'No'),
(16, 'none', 5, 'user01', '2015-09-17', '01:30:00.000000', NULL, NULL, NULL, NULL, NULL, 'registered', '', '', 'Waiting for confirmation', 'No'),
(17, 'none', 5, 'user01', '2015-09-17', '01:30:00.000000', NULL, NULL, NULL, NULL, NULL, 'registered', '', '', 'Waiting for confirmation', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `special_schedules`
--

CREATE TABLE IF NOT EXISTS `special_schedules` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time_start` time(4) NOT NULL,
  `comment` varchar(225) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'Waiting for confirmation'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_schedules`
--

INSERT INTO `special_schedules` (`id`, `username`, `course`, `date`, `time_start`, `comment`, `teacher`, `status`) VALUES
(5, 'user01', 'Beginner', '2015/09/10', '02:00:00.0000', NULL, NULL, 'Waiting for confirmation'),
(6, 'user01', 'Beginner', '2015/09/10', '02:00:00.0000', NULL, NULL, 'Waiting for confirmation'),
(7, 'user01', 'Beginner', '2015/09/09', '01:00:00.0000', NULL, NULL, 'Waiting for confirmation'),
(8, 'user01', 'Mastery', '2015/09/08', '01:30:00.0000', NULL, NULL, 'Waiting for confirmation'),
(9, 'user01', 'Mastery', '2015/09/25', '01:30:00.0000', NULL, NULL, 'Waiting for confirmation'),
(10, 'user01', 'Other Course', '2015/09/09', '02:00:00.0000', NULL, NULL, 'Waiting for confirmation'),
(11, 'user01', 'Module 1', '2015/09/10', '01:00:00.0000', NULL, NULL, 'Waiting for confirmation'),
(12, 'user01', 'none', '2015/09/12', '02:00:00.0000', NULL, NULL, 'Waiting for confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_schedule`
--

CREATE TABLE IF NOT EXISTS `teacher_schedule` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time_start` time(4) NOT NULL,
  `time_end` time(4) NOT NULL,
  `comment` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_schedule`
--

INSERT INTO `teacher_schedule` (`id`, `username`, `course`, `date`, `time_start`, `time_end`, `comment`, `status`) VALUES
(1, 'editor1', 'course name 1 Beginner', '2015/09/08', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(2, 'editor1', 'course name 1 Beginner', '2015/09/08', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(3, 'editor1', 'course name 1 Beginner', '2015/09/15', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(4, 'editor1', 'course name 1 Beginner', '2015/09/15', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(5, 'editor1', 'course name 1 Beginner', 'on', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(6, 'editor1', 'course name 1 Beginner', 'on', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(7, 'editor1', 'course name 1 Beginner', 'on', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(8, 'editor1', 'course name 1 Beginner', 'saturday', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(9, 'editor1', 'course name 1 Beginner', '0', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(10, 'editor1', 'course name 1 Beginner', '0', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(11, 'editor1', 'course name 1 Beginner', '0', '09:30:00.0000', '00:00:00.0000', NULL, NULL),
(12, 'editor1', 'course name 1 Beginner', 'a:3:{i:0;s:', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(13, 'editor1', 'course name 1 Beginner', 'wednesday,t', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(14, 'editor1', 'course name 1 Beginner', 'tuesday,wednesday,thursday,friday', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(15, 'editor1', 'course name 1 Beginner', 'monday,thursday', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(16, 'editor1', 'course name 1 Beginner', 'sunday', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(17, 'editor1', 'course name 1 Beginner', 'monday,tuesday,wednesday', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(18, 'editor1', 'course name 1 Beginner', 'augst 6 2015', '03:00:00.0000', '00:00:00.0000', NULL, NULL),
(19, 'editor1', 'course name 1 Beginner', 'wednesday,friday', '09:30:00.0000', '00:00:00.0000', NULL, NULL),
(20, 'editor1', 'course name 1 Beginner', 'augst 6 2015', '01:00:00.0000', '00:00:00.0000', NULL, NULL),
(21, 'editor1', 'course name 1 Beginner', 'augst 7 2015', '00:30:00.0000', '00:00:00.0000', NULL, NULL),
(22, 'editor1', 'course name 1 Beginner', 'augst 7 2015', '10:30:00.0000', '00:00:00.0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '100',
  `user_picture` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_filename` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_pathname` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_lastname` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_bio` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_education` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_contact` int(11) DEFAULT NULL,
  `user_skype` varchar(255) CHARACTER SET utf32 NOT NULL,
  `user_speaking` int(11) NOT NULL,
  `user_references` varchar(255) CHARACTER SET utf32 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `group_id`, `user_picture`, `user_filename`, `user_pathname`, `user_name`, `user_lastname`, `user_bio`, `user_age`, `user_education`, `user_contact`, `user_skype`, `user_speaking`, `user_references`) VALUES
(0, 'admin1', 'admin1@gmail.com', '59306db019da2835869c2c9e793c904d7fc121e47a6d3ff0d3e48c37203d40bf', 1, '', '', '', '', '', '', 0, '', 9999999, 'skypeeditor@skype', 0, ''),
(3, 'user01', 'user01@gmail.com', '375571cb383a4d94f42e93fc1da6ec121c7a04372dd1704ce8073a2316188d3c', 100, '', '', '', 'chevy', 'gwapo kaayu', '', 15, '', 9999999, 'skypeeditor@skype', 0, ''),
(7, 'user02', 'user02@gmail.com', '4097bc08769281d4412f7522aab1ee9e44e6bab56b56a2eac63d36f8d015d412', 100, '', '', '', '', '', '', 0, '', 0, '', 0, ''),
(10, 'editor1', 'editor1@gmail.com', '67e87169f024b9a9bb0465a22176344d75c01f4da3abcaa7a540ab8dccd9d720', 2, '', '', '', '', '', '', 0, '', 0, '', 0, ''),
(12, 'teacher1', 'teacher1@gmail.com', '3b6ddfc3a13cbc8c7a996799a97038e384593083e85696c03bb769d517b126cf', 2, '', '', '', '', '', '', 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_enrollees`
--

CREATE TABLE IF NOT EXISTS `visitor_enrollees` (
`id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time(6) NOT NULL,
  `hours` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_contact` int(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Waiting for confirmation'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_enrollees`
--

INSERT INTO `visitor_enrollees` (`id`, `course`, `date`, `time_start`, `hours`, `price`, `full_name`, `email`, `user_skype`, `user_contact`, `comment`, `teacher`, `status`) VALUES
(21, 'Beginner', '2015-08-21', '00:12:00.000000', 0, 0, 'ambot', 'ambot@yahoo.com', 'ambot@skype', 123123, 'try', 'Mr. Try', 'Waiting for confirmation'),
(22, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Aprroved'),
(23, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Reject'),
(24, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Reject'),
(25, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Reject'),
(26, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Reject'),
(27, 'Secondary', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'Ambot1@yahoo.com', 'ambot1@skype', 123111, NULL, NULL, 'Reject'),
(28, 'Beginner', '2015-08-18', '00:12:00.000000', 0, 0, 'ambot lng', 'Ambot1@yahoo.com', 'ambot1@skype', 0, NULL, NULL, 'Aprroved'),
(29, 'Mastery', '2015-08-29', '00:12:00.000000', 0, 0, 'Ambot Secret', 'ambot@yahoo.com', 'ambot@skype', 0, NULL, NULL, 'Waiting for confirmation'),
(30, 'Mastery', '2015-08-29', '00:12:00.000000', 0, 0, 'Ambot Secret', 'ambot@yahoo.com', 'ambot@skype', 0, NULL, NULL, 'Aprroved'),
(31, 'Mastery', '2015-08-19', '00:12:00.000000', 0, 0, 'Ambot Secret', 'ambot@yahoo.com', 'ambot@skype', 99999, NULL, NULL, 'Waiting for confirmation'),
(32, 'Beginner', '2015-08-07', '00:12:00.000000', 0, 0, 'Ambot Secret', 'ambot@yahoo.com', 'ambot@skype', 9999, NULL, NULL, 'Reject'),
(33, '----- Courses -----', '0000-00-00', '00:00:08.000000', 0, 0, 'asdasdasd', 'asdasd@gmail.com', 'asdasd@skype', 8454, NULL, NULL, 'Aprroved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`iso`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `course1_enrollees`
--
ALTER TABLE `course1_enrollees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course2_enrollees`
--
ALTER TABLE `course2_enrollees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course3_enrollees`
--
ALTER TABLE `course3_enrollees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_1`
--
ALTER TABLE `course_1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_2`
--
ALTER TABLE `course_2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_3`
--
ALTER TABLE `course_3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollees`
--
ALTER TABLE `enrollees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_schedules`
--
ALTER TABLE `special_schedules`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_schedule`
--
ALTER TABLE `teacher_schedule`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `visitor_enrollees`
--
ALTER TABLE `visitor_enrollees`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `course1_enrollees`
--
ALTER TABLE `course1_enrollees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `course2_enrollees`
--
ALTER TABLE `course2_enrollees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course3_enrollees`
--
ALTER TABLE `course3_enrollees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course_1`
--
ALTER TABLE `course_1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `course_2`
--
ALTER TABLE `course_2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course_3`
--
ALTER TABLE `course_3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `enrollees`
--
ALTER TABLE `enrollees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `special_schedules`
--
ALTER TABLE `special_schedules`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `teacher_schedule`
--
ALTER TABLE `teacher_schedule`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `visitor_enrollees`
--
ALTER TABLE `visitor_enrollees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
