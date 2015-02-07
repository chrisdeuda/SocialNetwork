-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2015 at 06:56 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chat_id` varchar(20) NOT NULL,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `MI` varchar(2) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `STATUS` varchar(10) NOT NULL DEFAULT '0',
  `AGE` varchar(10) NOT NULL,
  `ADDRESS` text NOT NULL,
  `BIRTHDATE` varchar(20) NOT NULL,
  `CONTACT` varchar(20) NOT NULL,
  `IMAGE` text NOT NULL,
  `DATE_JOINED` text NOT NULL,
  `ACTIVATED` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `USER_ID`, `EMAIL`, `FIRST_NAME`, `LAST_NAME`, `MI`, `GENDER`, `STATUS`, `AGE`, `ADDRESS`, `BIRTHDATE`, `CONTACT`, `IMAGE`, `DATE_JOINED`, `ACTIVATED`) VALUES
(153, '2015-060629', 'test@gmail.com', 'test', 'test', '', 'M', '0', '', '', '', '', 'images/default.jpg', '1421773589', '0');

-- --------------------------------------------------------

--
-- Table structure for table `usersecurity`
--

CREATE TABLE IF NOT EXISTS `usersecurity` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` varchar(30) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `USER_TYPE` int(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `usersecurity`
--

INSERT INTO `usersecurity` (`ID`, `USER_ID`, `USERNAME`, `PASSWORD`, `USER_TYPE`) VALUES
(20, '2015-060629', 'test', '098f6bcd4621d373cade4e832627b4f6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertemp`
--

CREATE TABLE IF NOT EXISTS `usertemp` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BIRTH_DATE` varchar(20) NOT NULL,
  `DATE_JOINED` varchar(10) NOT NULL,
  `ACTIVATION` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usertemp`
--

INSERT INTO `usertemp` (`ID`, `USER_ID`, `EMAIL`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`, `GENDER`, `BIRTH_DATE`, `DATE_JOINED`, `ACTIVATION`) VALUES
(1, '2014-16343', 'asdasd', 'sdasd', 'asdasd', '', '', 'male', 'Birthdate', '2014-03-12', '0'),
(2, '2014-24508', 'dfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '8277e0910d750195b448', 'male', 'Birthdate', '2014-03-12', '0'),
(3, '2014-48748', 'sdf', 'sdf', 'sdfs', 'sdf', 'd9729feb74992cc3482b', 'male', 'Birthdate', '2014-03-13', '0'),
(4, '2014-42111', 'q', 'q', 'q', 'q', '7694f4a66316e53c8cdd', 'female', 'Birthdate', '2014-03-14', '0'),
(5, '2014-41833', 'mic@yahoo.com', 'mic', 'fariscal', 'mic', '88636d673c3a0bcda997', 'male', 'Birthdate', '2014-03-14', '0'),
(6, '2014-26746', 'mic@yahoo.com', 'mic', 'fariscal', 'mic', '81dc9bdb52d04dc20036', 'male', 'Birthdate', '2014-03-14', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
