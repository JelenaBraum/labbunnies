-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2018 at 09:22 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `labbunnies`
--

-- --------------------------------------------------------

--
-- Table structure for table `regnumbers`
--

CREATE TABLE IF NOT EXISTS `regnumbers` (
  `bunnyid` varchar(30) COLLATE utf8_bin NOT NULL,
  `hemail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `quests` text COLLATE utf8_bin,
  `nickname` varchar(255) COLLATE utf8_bin NOT NULL,
  `heslo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`bunnyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE IF NOT EXISTS `regusers` (
  `bunnyidnum` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `surname` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` int(1) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthyear` int(4) NOT NULL,
  `placeoforigin` varchar(5) COLLATE utf8_bin NOT NULL,
  `currentplace` varchar(255) COLLATE utf8_bin NOT NULL,
  `language` varchar(255) COLLATE utf8_bin NOT NULL,
  `toxo` int(1) NOT NULL,
  `rhd` int(1) NOT NULL,
  `emailcheck` int(11) NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`bunnyidnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
