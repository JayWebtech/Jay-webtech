-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 11:35 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `date`, `message`) VALUES
(2, 'adamu', 'jethro', 'jethroadamzy@gmail.com', '08181472641', 'male', '2018-04-30', 'i want to make an appointment with you please'),
(3, 'gambo', 'jethro', 'jambio@gmail.com', '081237464758', 'female', '2007-04-23', ' appointment'),
(4, 'Jethro', 'Adamu', 'jethroadamzy@gmail.com', '090993374622', 'male', '2007-04-23', ' hsdisdjksdjkss'),
(5, 'Jethro', 'samuel', 'jambio@gmail.com', '090282378274', 'male', '2007-04-30', ' appointment'),
(6, 'obinna', 'ukeagbu', 'obinna@gmail.com', '0903426647', 'female', '2018-11-30', ' appoint');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(0, 'admin', 'admin');
