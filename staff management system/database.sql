-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2007 at 02:14 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(0, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `user_sname` varchar(255) NOT NULL,
  `user_date` date NOT NULL,
  `user_dep` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_soo` text NOT NULL,
  `user_ms` varchar(20) NOT NULL,
  `user_post` varchar(20) NOT NULL,
  `user_doe` date NOT NULL,
  `user_qualification` varchar(20) NOT NULL,
  `user_sex` char(10) NOT NULL,
  `user_phone` char(11) NOT NULL,
  `user_religion` varchar(22) NOT NULL,
  `user_nation` varchar(22) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_sname`, `user_date`, `user_dep`, `user_email`, `user_soo`, `user_ms`, `user_post`, `user_doe`, `user_qualification`, `user_sex`, `user_phone`, `user_religion`, `user_nation`) VALUES
(7, 'adamu', 'jethro', '1987-04-23', 'ComputerScience', 'jethroadamzy@gmail.com', 'kaduna', 'Single', 'H.O.D', '2007-04-26', 'Professor', 'Male', '08181472641', 'Christianity', 'Nigerian'),
(8, 'adamu', 'hassan', '2007-04-23', 'Production Management', 'jeytee1@gmail.com', 'katsina', 'Single', 'H.O.D', '2007-04-24', 'Professor', 'Male', '08124353463', 'Christianity', 'Nigerian');
