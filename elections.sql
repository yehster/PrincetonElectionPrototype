-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2015 at 12:01 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elections`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `category_id`) VALUES
(1, 'Corey Booker', 1),
(2, 'Jeff Bell', 1),
(3, 'Bonnie Watson Coleman', 2),
(4, 'Alieta Eck', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'U.S. Senate'),
(2, 'Representative 12th dist');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
`id` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `machine` int(11) NOT NULL,
  `candidateID` int(11) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `district`, `machine`, `candidateID`, `votes`) VALUES
(1, 7, 2, 1, 3),
(2, 7, 2, 2, 33),
(3, 7, 2, 3, 5),
(4, 7, 2, 4, 44),
(5, 10, 3, 1, 6),
(6, 10, 3, 2, 77),
(7, 10, 3, 3, 5),
(8, 10, 3, 4, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
 ADD PRIMARY KEY (`candidate_id`), ADD UNIQUE KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
