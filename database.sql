-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2018 at 01:39 PM
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
-- Creation: Sep 02, 2018 at 01:40 PM
--

CREATE TABLE IF NOT EXISTS `regnumbers` (
  `BunnyID` int(11) NOT NULL AUTO_INCREMENT,
  `hemail` varchar(255) COLLATE cp1250_czech_cs DEFAULT NULL,
  `quests` text COLLATE cp1250_czech_cs,
  PRIMARY KEY (`BunnyID`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--
-- Creation: Sep 05, 2018 at 06:51 AM
--

CREATE TABLE IF NOT EXISTS `regusers` (
  `BunnyID` int(8) NOT NULL,
  `name` varchar(255) COLLATE cp1250_czech_cs NOT NULL,
  `surname` varchar(255) COLLATE cp1250_czech_cs NOT NULL,
  `email` varchar(255) COLLATE cp1250_czech_cs NOT NULL,
  `birthyear` int(4) NOT NULL,
  `country` varchar(5) COLLATE cp1250_czech_cs NOT NULL,
  `town` varchar(255) COLLATE cp1250_czech_cs NOT NULL,
  `language` varchar(255) COLLATE cp1250_czech_cs NOT NULL,
  `toxo` int(1) NOT NULL,
  `RhD` int(1) NOT NULL,
  `emailcheck` int(11) NOT NULL,
  `notes` text COLLATE cp1250_czech_cs NOT NULL,
  PRIMARY KEY (`BunnyID`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_czech_cs;
