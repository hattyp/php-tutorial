-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2012 at 05:21 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `14-feb-2012`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `productid`, `quantity`) VALUES
(1, 16, 3, 1),
(2, 16, 37, 1),
(3, 16, 5, 1),
(4, 16, 5, 1),
(5, 16, 5, 1),
(6, 16, 5, 1),
(7, 16, 5, 1),
(8, 16, 18, 1),
(9, 16, 18, 1),
(10, 16, 18, 1),
(11, 16, 18, 1),
(12, 16, 18, 1),
(13, 16, 18, 1),
(14, 16, 18, 1),
(15, 16, 18, 1),
(16, 16, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_contents` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_contents`, `name`, `url`) VALUES
(22, 'A PAGE OF PROPER SHIT', 'DOING THIS PROPERLY', 'doing-this-properly');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `name`, `price`, `category`, `description`, `image`) VALUES
(2, 'Shelving Units', 344, 'shelves', 'Oak shelf for putting up in a front room', 'images.jpg'),
(3, 'jet', 80, 'aviation', 'big old jet', 'jet_the_band_1.jpg'),
(4, 'Jet', 100, 'Planes', '788', '05_jet.jpg'),
(5, 'Cod', 29.77, 'fish', '', 'cod.jpg'),
(11, 'Beyonce', 0.99, 'music', 'This is a very nice Beyonce. Obviously.', 'Beyonce.jpg'),
(18, 'Dot', 88, 'dot', 'This is a dot. ', 'Icon-Green-Light.png'),
(37, 'LARGE PIECE OF TRIPE', 99999, 'TRIPE', 'THIS PIECE OF TRIPE IS EXTREMELY LARGE. APPROACH WITH CAUTION. ', 'tripe.jpg'),
(41, '', 0, '', '', ''),
(42, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(55) NOT NULL,
  `admin` int(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Users table contains user data.' AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `name`, `admin`) VALUES
(5, 'person', 'person', 'person@person.net', 'Person 2', 1),
(6, 'person1', 'person1', 'person@person', 'Person', 0),
(7, 'bob1', 'bob1', 'bob', 'bob', 1),
(11, 'harriet', '81dc9bdb52d04dc20036dbd8313ed055', 'h@rriet.com', 'Harriet', 0),
(16, 'h', '2510c39011c5be704182423e3a695e91', 'h', 'h', 1),
(15, '', '', '', '', 0),
(14, 'harriet', '7f0fd5728c8be1f202cc3753e7b593ef', 'h@rriet.com', 'harriet', 1),
(17, '', '', '', '', 0),
(18, '', '', '', '', 0),
(19, '', '', '', '', 0),
(20, '', '', '', '', 0),
(21, '', '', '', '', 0),
(22, '', '', '', '', 0);
