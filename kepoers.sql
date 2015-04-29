-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2015 at 10:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kepoers`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question` text NOT NULL,
  `mark` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `asker_id` int(10) unsigned NOT NULL,
  `flag_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `asker_id` (`asker_id`),
  KEY `flag_id` (`flag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table question yang memuat data question secara keseluruhan' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questionflag`
--

CREATE TABLE IF NOT EXISTS `questionflag` (
  `id` tinyint(2) unsigned NOT NULL,
  `option` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionflag`
--

INSERT INTO `questionflag` (`id`, `option`) VALUES
(1, 'User'),
(2, 'Anonim');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subscribing_id` int(10) unsigned NOT NULL,
  `subscriber_list_id` int(10) unsigned NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subscribing_id` (`subscribing_id`),
  KEY `subscriber_list_id` (`subscriber_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_list`
--

CREATE TABLE IF NOT EXISTS `subscriber_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `subscriber_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `subscriber_id` (`subscriber_id`),
  KEY `subscriber_id_2` (`subscriber_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(255) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(225) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `email`, `country`, `address`, `gender`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'amanda', '$2y$10$JMIu02JYG45mXZ27xKmLpeESQQfWqpq6bwFPGDFHdGgQsJEB0Ygh2', '', '', 'mandes95@gmail.com', '', '', '', '2015-01-27', '0000-00-00', '1Q88f913muhgQPx9d7kn63bsJHXWvu6FiqP3jh4W4hUPk4Z7JGUltfHCMrLb'),
(3, 'amandaPutri', '$2y$10$SxVR0pV83mf6Dzgg/ZoW7u1pq3YOOdIlfTFdrpV7ySrQmwbeigZ82', '', '', 'alfaradiobarkah@gmail.com', '', '', '', '2015-01-27', '0000-00-00', '1cKwex9ds6URyIAvJV4voGLm64DXfB7VoEL3yZyHHl4oYRRe7b6NIvBzqJDs'),
(4, 'rachmat', '$2y$10$TgrWFmx/apAPL2eg5gXEeegJX0bMeZ9DPM1YgBs/X5ovxbMTewdUK', '', '', 'rachmat@stis.ac.id', '', '', '', '2015-01-28', '2015-01-28', ''),
(10, 'tesuserdaaaa', '$2y$10$vw7lzakHNfc1V/vutAgDKOBygdQjBo2q9y/ZRpYJheX8Teb2pYTrK', '', '', 'user@sd.dsaaaaaa', '', '', '', '2015-01-29', '2015-01-29', ''),
(11, 'adminganteng', '$2y$10$z0XcwFWwHnDtcCWt4srfh.m.ZQb4NoTwvhNy6WLALA80sZHt5mWMu', '', '', '12.7012@stama9is.ac.id', '', '', '', '2015-01-29', '2015-01-30', 'ZPhk2eJaLsEuEoI9N1nzgCCnLeIdk38dsetSqOHrJFxdBvSRPjO6QueJfXxI'),
(12, 'tesuserdua', '$2y$10$VS1.XCD.x2txgpPRSubyWOOrB504Di0Llrl8l23io3Dk9FmDcrhMu', '', '', 'tes@tes.tes', '', '', '', '2015-01-29', '2015-01-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(10, 1),
(11, 1),
(12, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`flag_id`) REFERENCES `questionflag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_ibfk_4` FOREIGN KEY (`asker_id`) REFERENCES `subscriber` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `subscriber_ibfk_1` FOREIGN KEY (`subscribing_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriber_list`
--
ALTER TABLE `subscriber_list`
  ADD CONSTRAINT `subscriber_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscriber_list_ibfk_2` FOREIGN KEY (`subscriber_id`) REFERENCES `subscriber` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
